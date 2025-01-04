<?php

namespace views;

class OrderInfoView
{
   function __construct($hash)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Order info | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/order.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->orderInfo($hash);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function orderInfo($hash)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Order info</a>
            </div>
         </div>
         <section class="order-info">
            <div class="container">
               <p class="order-info_sub">Order is placed</p>
               <p class="order-info_title">Order id: <a href="/account" class="order-info_link"><?= $hash ?></a></p>
               <p class="order-info_sub">Thanks! We appreciate you, brother.</p>
               <a href="/catalog" class="order-info_link">Go get sum more!</a>
            </div>
         </section>
      </main>
<?php
   }
}
