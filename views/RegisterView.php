<?php

namespace views;

class RegisterView
{
   function __construct()
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Registration | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/authorization.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->register();
         ?>
         <script>
            let text = document.querySelector('.auth_avatar_text');
            if (text.innerHTML = "uploaded file name") {
               text.style.color = "#757575";
            }
            document.getElementById('register_avatar').addEventListener('change', function() {
               let file = this.files[0];
               text.innerHTML = file.name;
               text.style.color = "black";
            });
         </script>
         <script src="assets/js/jquery-3.3.1.min.js"></script>
         <script src="assets/js/register.js"></script>
      </body>

      </html>
   <?php
   }
   function register()
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Registration</a>
            </div>
         </div>
         <section class="auth">
            <div class="container">
               <h2 class="auth_title">Registration</h2>
               <form class="auth_form" method="post">
                  <input type="text" id="register_name" class="auth_input" placeholder="full name" required>
                  <input type="text" id="register_login" class="auth_input" placeholder="login" required>
                  <input type="email" id="register_email" class="auth_input" placeholder="email@mail.com" required pattern="^\S+@\S+\.\S+$">
                  <input type="password" id="register_password" class="auth_input" placeholder="password" required>
                  <input type="password" id="register_confirm" class="auth_input" placeholder="confirm password" required>
                  <label class="auth_avatar">
                     <span class="auth_avatar_text" type="text">uploaded file name</span>
                     <input type="file" id="register_avatar" class="auth_input">
                     <span class="auth_avatar_btn">Choose file</span>
                  </label>
                  <p class="auth_p">By creating an account, you agree to our <a href="/terms_conditions">Terms and Conditions</a>, <a href="/privacy_policy">Privacy Policy</a></p>
                  <p class="auth_error">Error!</p>
                  <button class="auth_btn" type="submit" id="submit">Create account</button>
                  <p class="auth_p">Already have an account? <a href="/login">Login!</a></p>
               </form>
            </div>
         </section>
      </main>
<?php
   }
}
?>