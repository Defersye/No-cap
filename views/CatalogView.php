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

         <title>Каталог | NO CAP | Интернет-магазин для ценителей стиля</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/catalog.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
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
               <a class="path_text_active">Каталог</a>
            </div>
         </div>
         <section class="catalog">
            <div class="container">
               <div class="catalog_filters">
                  <p class="catalog_filter_title">Фильтры</p>
                  <p class="catalog_filter_subtitle">Категория</p>
                  <select class="catalog_filter_select" id="category">
                     <option value="Любая">Любая</option>
                     <?
                     foreach ($categories as $category) {
                        if (isset($_GET['category']) && $_GET['category'] == $category['name_category']) {
                           echo "<option value=" . $category['id_category'] . " selected>" . $category['name_category'] . "</option>";
                        } else {
                           echo "<option value=" . $category['id_category'] . ">" . $category['name_category'] . "</option>";
                        }
                     } ?>
                  </select>
                  <p class="catalog_filter_subtitle">Коллекция</p>
                  <select class="catalog_filter_select" id="collection">
                     <option value="Любая">Любая</option>
                     <?
                     foreach ($collections as $collection) {
                        if (isset($_GET['collection']) && $_GET['collection'] == $collection['name_collection']) {
                           echo "<option value=" . $collection['id_collection'] . " selected>" . $collection['name_collection'] . "</option>";
                        } else {
                           echo "<option value=" . $collection['id_collection'] . ">" . $collection['name_collection'] . "</option>";
                        }
                     } ?>
                  </select>
                  <p class="catalog_filter_subtitle">Скидка</p>
                  <input class="catalog_filter_check" type="checkbox" id="discount" />
                  <a href="" class="catalog_filter_subtitle" id="clear">Очистить</a>
               </div>
               <div class="catalog_cards">
                  <?
                  foreach ($products as $item) {
                     include 'templates/catalogCard.php';
                  } ?>
               </div>
            </div>
         </section>
      </main>
<?php
   }
}
