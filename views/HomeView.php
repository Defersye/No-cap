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

         <title>NO CAP | Интернет-магазин для ценителей стиля</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/home.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->home();
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }
   function home()
   { ?>
      <!-- top_sellers sales collections  -->
      <main>
         <section class="hero_slider">
            <div class="container">
               В разработке...
            </div>
         </section>
      </main>
<?php
   }
}
