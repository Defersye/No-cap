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
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Retro Pick | online store for the sale of retro products</title>

         <link rel="shortcut icon" href="./assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/home.css">
      </head>

      <body>
         <?php
         include "./templates/header.html";
         $this->home();
         include "./templates/footer.html";
         ?>
      </body>

      </html>
<?php
   }

   function catalog()
   {
      include "./views/catalog.php";
   }

   function home()
   {
      include "./views/home.php";
   }
}
