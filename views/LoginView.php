<?php

namespace views;

class LoginView
{
   function __construct()
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Login | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/authorization.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->login();
         ?>
         <script src="assets/js/jquery-3.3.1.min.js"></script>
         <script src="assets/js/login.js"></script>
      </body>

      </html>
   <?php
   }
   function login()
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Login</a>
            </div>
         </div>
         <section class="auth">
            <div class="container">
               <h2 class="auth_title">Login</h2>
               <form class="auth_form" method="post">
                  <input type="email" id="login_email" class="auth_input" placeholder="email" required>
                  <input type="password" id="login_password" class="auth_input" placeholder="password" required>
                  <p class="auth_error">Error!</p>

                  <button class="auth_btn" type="submit" id="submit">Login</button>
                  <!-- <p class="login_p"><a href="/forgot">Forgot password?</a></p> -->

                  <p class="auth_p">Don't have an account? <a href="/register">Register now!</a></p>
               </form>
            </div>
         </section>
      </main>
<?php
   }
}
?>