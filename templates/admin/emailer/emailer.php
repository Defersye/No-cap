<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/Exception.php';
require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';

// Если массив POST не пустой, отправка состоялась
if (!empty($_POST) && !isset($sent)) {
	// Инициализируем переменную для отчета
	$report = '';

	$emailer_subj = $_POST['subj'];
	$emailer_text = $_POST['text'];

	// Get emails from database
	$emailer_mails = $_POST['mails'];
	switch ($emailer_mails) {
		case 'ALL_SUBSCRIBERS':
			$stmt = "SELECT email FROM subscription";
			break;
		case 'ALL_USERS':
			$stmt = "SELECT email FROM users";
			break;
		case 'ALL_USERS_AND_SUBSCRIBERS':
			$stmt = "SELECT email FROM users UNION SELECT email FROM subscription";
			break;
	}
	$conn = new mysqli("localhost", "root", "", "no-cap");
	$result = mysqli_query($conn, $stmt);
	$emails = [];
	while ($row = $result->fetch_assoc()) {
		$emails[] = $row['email'];
	}

	$count_emails = count($emails);

	for ($i = 0; $i <= $count_emails - 1; $i++) {
		$email = filter_var(trim($emails[$i]), FILTER_VALIDATE_EMAIL);
		if (!$email) {
			$report .= "<li class='red'>Неверный email: " . htmlspecialchars($emails[$i]) . "</li>";
			continue;
		}

		$mail = new PHPMailer(true);
		try {
			$data = json_decode(file_get_contents(__DIR__ . "/data.json"), true);
			if (!$data) {
				throw new Exception("Could not load mail configuration");
			}

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = $data['Username'];
			$mail->Password = $data['Password'];
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			$mail->Port = 587;

			$mail->setFrom($data['Username'], 'No-Cap');
			$mail->addAddress($emails[$i]);
			$mail->Subject = $emailer_subj;
			$mail->Body = $emailer_text;

			$mail->send();
			$report .= "<li class='green'>Sent: " . htmlspecialchars($emails[$i]) . "</li>";
		} catch (Exception $e) {
			$report .= "<li class='red'>Not sent: " . htmlspecialchars($emails[$i]) . " <span>" . htmlspecialchars($mail->ErrorInfo) . "</span></li>";
		}
	}

	// Перемещаем запись лога после всех отправок
	if ($report) {
		file_put_contents("log.txt", $report);
	}

	$ret_uri = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header("Refresh: 0; URL=http://" . $ret_uri . "&messent");
	exit;
}

// Если $sent не существует, выводим форму или отчёт
if (!isset($sent)) {
	if (isset($_GET['messent'])) { ?>
		<div class="emailer_container report">
			<p>Everything is fine. The message has been sent.&nbsp;<a href="?tab=emailer" class="emailer_span"> Wanna send again?</a></p>
			<div class="report_container">
				<h6 class="report_title">Report:</h6>
				<ol><?= file_get_contents("log.txt") ?></ol>
			</div>
		</div>
	<?
	} else { ?>
		<div class="emailer_container">
			<form method="post">
				<p class="red"><?= isset($mail_msg) ? $mail_msg : '' ?></p>
				<label for="subj">Theme:</label>
				<input type="text" name="subj" id="subj" placeholder="What's the reason?" required>
				<label for="mails">To:</label>
				<select name="mails" id="mails" required>
					<option value="ALL_USERS">All users</option>
					<option value="ALL_SUBSCRIBERS">All subscribers</option>
					<option value="ALL_USERS_AND_SUBSCRIBERS">All users and subscribers</option>
				</select>
				<label for="text">Message:</label>
				<textarea name="text" id="text" placeholder="What's the message?" required></textarea>
				<p>From: No-Cap <span class="emailer_span">danilobycnov@gmail.com</span></p>
				<button type="submit" id="submit">Send</button>
			</form>
		</div>
<?	}
}
