<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/Exception.php';
require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';

// Если массив POST не пустой, отправка состоялась
if (!empty($_POST) && !isset($sent)) {

	$emailer_subj = $_POST['subj'];
	$emailer_mails = $_POST['mails'];
	$emailer_text = $_POST['text'];
	$emailer_yourmail = $_POST['yourmail'];


	$emails = explode(",", $emailer_mails);
	$count_emails = count($emails);

	for ($i = 0; $i <= $count_emails - 1; $i++) {
		$email = filter_var(trim($emails[$i]), FILTER_VALIDATE_EMAIL);
		if (!$email) {
			$report .= "<li class='red'>Неверный email: " . htmlspecialchars($emails[$i]) . "</li>";
			continue;
		}

		$mail = new PHPMailer(true);
		try {
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'danilobycnov@gmail.com';
			$mail->Password = 'qlwh goea yjzz neat';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = 587;

			$mail->setFrom('danilobycnov@gmail.com');
			$mail->addAddress($emails[$i]);
			$mail->Subject = $emailer_subj;
			$mail->Body = $emailer_text;

			$mail->send();
			$report .= "<li class='green'>Отправлено: " . $emails[$i] . "</li>";
		} catch (Exception $e) {
			$report .= "<li class='red'>Не отправлено: " . $emails[$i] . " <span>{$mail->ErrorInfo}</span></li>";
		}
	}

	// Запись отчёта в файл
	$log = fopen("log.txt", "w");
	fwrite($log, $report);
	fclose($log);
	// Переменная $sent – признак успешной отправки
	$sent = 1;
}

// Если $sent не существует, выводим форму или отчёт
if (!isset($sent)) {
	if (isset($_GET['messent'])) { ?>
		<b>Всё окей. Сообщение отправлено. <a href="emailer.php">Ещё?</a>
			<br>
			<br>
			<u>Отчёт:</u>
		</b>
		<ol><?= file_get_contents("log.txt") ?></ol>
		<ol><?= $report ?></ol>
	<?
	} else { ?>
		<form method="post">
			<p class="red"><?= isset($mail_msg) ? $mail_msg : '' ?></p>
			<input type="text" name="subj" id="subj" placeholder="По какому поводу пишем?" required>
			<textarea name="mails" id="mails" placeholder="Кто получатели?" required></textarea>
			<textarea name="text" id="text" placeholder="Что пишем?" required></textarea>
			<input type="text" name="yourmail" id="yourmail" value="danilobycnov@gmail.com" required>
			<button type="submit" id="submit">Отправить</button>
		</form>
<?	}
} else {
	// А если $sent существует посылаем в заголовке редирект (303 Refresh) на этот же адрес с дополнительным параметром messent
	$ret_uri = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header("Refresh: 0; URL=http://" . $ret_uri . "?messent");
	exit;
}

if ($emailer_mails === "ALL_SUBSCRIBERS") {
	$result = $conn->query("SELECT email FROM subscribtion");
	$emails = [];
	while ($row = $result->fetch_assoc()) {
		$emails[] = $row['email'];
	}
	$emailer_mails = implode(",", $emails);
}
?>