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
   {
      include "./views/catalog.php";
   }
}
