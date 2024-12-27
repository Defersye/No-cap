<?php

namespace views;

class AccountView
{
   function __construct($user)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Account | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/account.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->account($user);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function account($user)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Account</a>
            </div>
         </div>
         <section class="account">
            <div class="container">
               <h1 class="account_name"><?= $user['full_name'] ?></h1>
               <img src="assets/img/database/avatars/<?= $user['avatar'] ?>" alt="" class="account_avatar">
               <a href="/logout" class="account_logout">Logout</a>
            </div>
         </section>
      </main>
<?php
   }
}
