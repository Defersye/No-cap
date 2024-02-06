<?php

namespace views;

class CatalogView
{
   function __construct()
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
         $this->catalog();
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
}
