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
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->register();
         ?>
      </body>

      </html>
   <?php
   }
   function register()
   { ?>
      <!-- top_sellers sales collections  -->
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Registration</a>
            </div>
         </div>
         <section class="register">
            <div class="container">
               <!-- <p class="register_error">Пользователь с такой почтой или номером телефона уже зарегистрирован!</p> -->
               <h2 class="register_title">Registration</h2>
               <form action="/register" class="register_form" method="post">
                  <input type="text" id="register_name" class="register_input" placeholder="full name" required>
                  <input type="email" id="register_email" class="register_input" placeholder="email" required>
                  <input type="password" id="register_password" class="register_input" placeholder="password" required>
                  <input type="password" id="register_confirm" class="register_input" placeholder="confirm password" required>


                  <div class="field__wrapper">
                     <!-- name="file" id="field__file-2" class="field field__file" -->
                     <input type="file" id="register_" class="register_input" accept="image/png, image/jpeg, image/jpg" placeholder="image" />
                     <label class="field__file-wrapper" for="field__file-2">
                        <div class="field__file-fake">Файл не вбран</div>
                        <div class="field__file-button">Выбрать</div>
                     </label>
                  </div>


                  <p class="register_p">By creating an account, you agree to our <a href="">Terms and Conditions</a>, <a href="">Privacy Policy</a></p>

                  <button class="register_btn" type="submit" id="submit">Create an account</button>
                  <p class="register_p">Already registered? <a href="/login">Log in!</a></p>
               </form>
            </div>
         </section>
      </main>
<?php
   }
}
?>


<!-- register -->


<!-- login -->
<!-- <div class="login_container">
   <h2 class="login_title">Logging in</h2>
   <form action="/login" class="login_form" method="post">
      <input type="email" class="login_input" placeholder="Email" required>
      <input type="password" class="login_input" placeholder="Password" required>

      <button class="login_btn" type="submit">Sign in</button> -->

<!-- <p class="login_p"><a href="/forgot">Forgot password?</a></p> -->

<!-- <p class="login_p">Don`t have an account? <a href="/register">Register now!</a></p>
   </form>
</div> -->

<!-- script -->
<!-- <script src="../assets/js/register.js"></script> -->