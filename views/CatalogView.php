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
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Catalog</a>
            </div>
         </div>
         <section class="catalog">
            <div class="container">
               <!-- <div class="catalog_filters">
                  <p class="catalog_filter_title">Filters //</p>
                  <button class="catalog_filter">Cameras</button>
                  <button class="catalog_filter">Lenses</button>
                  <button class="catalog_filter">Consoles</button>
               </div> -->
               <div class="catalog_cards">
                  <?
                  foreach ($products as $item) {
                     include 'templates/catalogCard.php';
                  } ?>
               </div>
            </div>
         </section>
         <? //include "./templates/suggestions.php" 
         ?>
      </main>
<?php
   }
}
