<?php

namespace views;

class ProductCardView
{
   function __construct($item)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>NO CAP | Online store for style lovers | Catalog</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/productCard.css">
      </head>

      <body>
         <?php
         include "./templates/header.html";
         $this->card($item);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function card($item)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a href="/catalog" class="path_text">Catalog</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active"><?= $item['name'] ?></a>
            </div>
         </div>
         <section class="productCard">
            <div class="container">
               <div class="box product-box">
                  <h3 class="card__title"><?= $item['name'] ?></h3>
               </div>
            </div>
         </section>
      </main>
      <script src="/assets/js/productCard.js"></script>
<?php
   }
}
