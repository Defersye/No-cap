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

         <title><?= $item['name'] ?> | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/productCard.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
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
               <img data-id="<?= $item['id_product'] ?>" src="assets/img/database/products/<?= $item['first_img'] ?>" />
               <div class="productCard_info">
                  <div class="productCard_div">
                     <h5 class="productCard_title"><?= $item['name'] ?></h5>
                     <button onclick="addToLiked(this)" class="productCard_like"></button>
                  </div>
                  <div class="productCard_nums">
                     <? if ($item['discount']) {
                        echo "<p class='productCard_discount'>&euro;" . $item['price'] - $item['discount'] . "</p>";
                        echo "<p class='productCard_price_crossed'>&euro;" . $item['price'] . "</p>";
                     } else {
                        echo "<p class='productCard_price'>&euro;" . $item['price'] . "</p>";
                     }
                     ?>
                  </div>
                  <div class="productCard_ids">
                     <p class="productCard_category"><span>Category:</span> <a href="/catalog?category=<?= $item['name_category'] ?>"><?= $item['name_category'] ?></a></p>
                     <p class="productCard_collection"><span>Collection:</span> <a href="/catalog?collection=<?= $item['name_collection'] ?>"><?= $item['name_collection'] ?></a></p>
                  </div>
                  <p class="productCard_description"><?= $item['description'] ?></p>
                  <div class="productCard_btns">
                     <a href="#" class="productCard_link">Add to Cart</a>
                     <a href="#" class="productCard_link">Quick buy</a>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php
   }
}
