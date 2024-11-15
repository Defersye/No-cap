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

         <title>Регистрация | NO CAP | Интернет-магазин для ценителей стиля</title>

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
               <a class="path_text_active">Регистрация</a>
            </div>
         </div>
         <section class="auth">
            <div class="container">
               <h2 class="auth_title">Регистрация</h2>
               <form class="auth_form" method="post">
                  <input type="text" id="register_name" class="auth_input" placeholder="full name" required>
                  <input type="text" id="register_login" class="auth_input" placeholder="login" required>
                  <input type="email" id="register_email" class="auth_input" placeholder="email" required>
                  <input type="password" id="register_password" class="auth_input" placeholder="password" required>
                  <input type="password" id="register_confirm" class="auth_input" placeholder="confirm password" required>
                  <p class="auth_p">Создавая учетную запись, вы соглашаетесь с нашими <a href="">Условиями и Положениями</a>, <a href="">Политикой Конфиденциальности</a></p>
                  <p class="auth_error">Ошибка!</p>
                  <button class="auth_btn" type="submit" id="submit">Создать аккаунт</button>
                  <p class="auth_p">Уже есть учетная запись? <a href="/login">Войдите!</a></p>
               </form>
            </div>
         </section>
      </main>
<?php
   }
}
?>