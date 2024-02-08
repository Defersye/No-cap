<?php

namespace views;

class CatalogView
{
   function __construct($products)
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
         <link rel="stylesheet" href="assets/css/catalog.css">
         <script src="assets/js/catalog_card_animation.js"></script>
      </head>

      <body>
         <?php
         include "./templates/header.html";
         $this->catalog($products);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function catalog($products)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/catalog" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a href="" class="path_text_active">Catalog</a>
            </div>
         </div>
         <section class="catalog">
            <div class="container">
               <!-- <div class="catalog_filters">
            <p class="catalog_filter_title">Filters //</p>
            <button class="catalog_filter">Cameras</button>
            <button class="catalog_filter">Lenses</button>
            <button class="catalog_filter">Consoles</button>
            <button class="catalog_filter">TVs</button>
            <button class="catalog_filter">Radios</button>
            <button class="catalog_filter">Others</button>
         </div> -->
               <div class="catalog_cards">
                  <?php foreach ($products as $item) { ?>
                     <a href="/card" class="catalog_card">
                        <div class="catalog_card_img">
                           <img class="img_on" src="assets/img/database/<?= $item['first_img'] ?>" />
                           <img class="img_off" src="assets/img/database/<?= $item['second_img'] ?>" />
                           <div onclick="addToWishlist(this)" class="catalog_card_like"></div>
                        </div>
                        <h5 class="catalog_card_title"><?= $item['name'] ?></h5>
                        <p class="catalog_card_collection"><?= $item['name_collection'] ?></p>
                        <p class="catalog_card_price">&euro;<?= $item['price'] ?></p>
                     </a>
                  <?php } ?>
               </div>
            </div>
         </section>
      </main>
<?php
   }
}
