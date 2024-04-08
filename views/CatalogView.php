<?php

namespace views;

class CatalogView
{
   function __construct($products, $categories, $collections)
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
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.html";
         $this->catalog($products, $categories, $collections);
         include "./templates/footer.html";
         ?>
         <script src="assets/js/filter.js"></script>
      </body>

      </html>
   <?php
   }

   function catalog($products, $categories, $collections)
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
               <div class="catalog_filters">
                  <p class="catalog_filter_title">Filters</p>
                  <p class="catalog_filter_subtitle">Category</p>
                  <select class="catalog_filter_select" id="category">
                     <option value="Any">Any</option>
                     <?
                     foreach ($categories as $category) {
                        if ($_GET['category'] == $category['name_category']) {
                           echo "<option value=" . $category['id_category'] . " selected>" . $category['name_category'] . "</option>";
                        } else {
                           echo "<option value=" . $category['id_category'] . ">" . $category['name_category'] . "</option>";
                        }
                     } ?>
                  </select>
                  <p class="catalog_filter_subtitle">Collection</p>
                  <select class="catalog_filter_select" id="collection">
                     <option value="Any">Any</option>
                     <?
                     foreach ($collections as $collection) {
                        if ($_GET['collection'] == $collection['name_collection']) {
                           echo "<option value=" . $collection['id_collection'] . " selected>" . $collection['name_collection'] . "</option>";
                        } else {
                           echo "<option value=" . $collection['id_collection'] . ">" . $collection['name_collection'] . "</option>";
                        }
                     } ?>
                  </select>
                  <p class="catalog_filter_subtitle">Discount</p>
                  <input class="catalog_filter_check" type="checkbox" id="discount" />
                  <a href="" class="catalog_filter_subtitle" id="clear">Clear</a>
               </div>
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
