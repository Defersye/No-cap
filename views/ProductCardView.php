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
               <img data-id="<?= $item['id'] ?>" src="assets/img/database/<?= $item['first_img'] ?>" />
               <div class="productCard_info">
                  <h5 class="productCard_title"><?= $item['name'] ?></h5>
                  <p class="productCard_title"><?= $item['description'] ?></p>
                  <p class="productCard_collection"><?= $item['name_collection'] ?></p>
                  <p class="productCard_category"><?= $item['name_category'] ?></p>
                  <div class="productCard_nums">
                     <? if ($item['discount']) {
                        echo "<p class='productCard_price_crossed'>&euro;" . $item['price'] . "</p>";
                        echo "<p class='productCard_discount'>&euro;" . $item['price'] - $item['discount'] . "</p>";
                     } else {
                        echo "<p class='productCard_price'>&euro;" . $item['price'] . "</p>";
                     }
                     ?>
                  </div>
               </div>

               <!-- <h3 class="card__title"><?= $item['name'] ?></h3> -->
            </div>
         </section>
      </main>
<?php
   }
}
