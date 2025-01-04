<?php

namespace views;

class OrderCheckView
{
   function __construct($orderCheck)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Return | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/pages.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->orderCheck($orderCheck);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function orderCheck($orderCheck)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Order check</a>
            </div>
         </div>
         <section class="return">
            <div class="container">
               <h1 class="pages_title">Order check</h1>
            </div>
         </section>
      </main>
<?php
   }
}
