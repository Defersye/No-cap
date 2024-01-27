<?php

namespace views;

class HomeView
{
   function __construct()
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <link rel="stylesheet" href="../public/css/style.css">
         <title>Главная страница</title>
      </head>

      <body>
         <?php
         include "./templates/header.html";
         $this->catalog();
         include "./templates/footer.html";
         ?>
         //Тут можно подключить js
      </body>

      </html>
<?php
   }

   function catalog()
   {
      include "./views/catalog.php";
   }
}
