<?php
include_once "../connect.php";

$id_user = $_GET['id_user'];

$result = $conn->query("SELECT * FROM users WHERE id_user = $id_user");
if ($result->num_rows) {
   while ($row = $result->fetch_assoc()) {
      $answers[] = $row;
   }
} ?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Admin panel | NO CAP | Online store for style lovers</title>

   <link rel="shortcut icon" href="/assets/img/layout/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="/assets/css/general.css">
   <link rel="stylesheet" href="../admin.css">
</head>

<body>
   <header>
      <div class="container">
         <div class="left"> </div>
         <a href="/home" class="header_logo">no cap</a>
         <div class="right"> </div>
      </div>
   </header>


   <main>
      <div class="path">
         <div class="container">
            <a href="/home" class="path_text">NO CAP</a>
            <p class="path_text">&nbsp;<img src="/assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
            <a href="../admin.php?table=users" class="path_text">Admin panel</a>
            <p class="path_text">&nbsp;<img src="/assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
            <a class="path_text_active">Edit user</a>
         </div>
      </div>
      <section class="auth">
         <div class="container">
            <h2 class="form_title">Edit user</h2>
            <form action="edit_user_action.php?id_user=<?= $id_user ?>" method="post" class="form">
               <?
               foreach ($answers as $item) {
               ?>
                  <input type="text" name="full_name" value="<?= $item['full_name'] ?>" class="form_input" required><br>
                  <input type="text" name="login" value="<?= $item['login'] ?>" class="form_input" required><br>
                  <input type="text" name="email" value="<?= $item['email'] ?>" class="form_input" required><br>
                  <input type="text" name="password" value="<?= $item['password'] ?>" class="form_input" required><br>
                  <input type="file" name="avatar" value="<?= $item['avatar'] ?>" class="form_input" required><br>
               <?
               } ?>
               <button type="submit" class="form_btn" id="submit">Send</button>
            </form>
         </div>
      </section>
   </main>
   <footer>
      <div class="container">
         <p class="footer_copyright">&copy;
            <script>
               document.write(new Date().getFullYear())
            </script> NO CAP | defersye
         </p>
      </div>
   </footer>
   <script src="admin.js"></script>
</body>

</html>