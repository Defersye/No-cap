<?php

namespace views;

class CartView
{
   function __construct($products)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Cart | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/cart.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         $total = 0;
         $discount = 0;
         include "./templates/header.php";
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
               <a class="path_text_active">Cart</a>
            </div>
         </div>
         <section class="cart">
            <div class="container">
               <? if ($products == null) {
                  echo "<p class='cart_card_empty'>Cart is empty</p>";
               } else { ?>
                  <div class="cart_cards">
                     <div class="cart_header">
                        <b class="cart_title cart_title_product">Product</b>
                        <b class="cart_title">Price</b>
                        <b class="cart_title">Quantity</b>
                        <b class="cart_title">Total</b>
                     </div>
                     <?php
                     global $subtotal, $discount, $total;
                     $this->renderCartProducts($products);
                     ?>
                  </div>
                  <div class="cart_payment">
                     <div class="cart_data">
                        <p class="cart_payment_title">Payment:</p>
                        <div class="cart_payment_box">
                           <p class="cart_payment_sub">Sub total:</p>
                           <p class="cart_payment_nums" id="payment_sub">&euro;<?= $subtotal ?></p>
                        </div>
                        <div class="cart_payment_box">
                           <p class="cart_payment_sub cart_payment_discount">Discount:</p>
                           <p class="cart_payment_nums cart_payment_discount" id="payment_discount">&euro;<?= $discount ?></p>
                        </div>
                        <div class="cart_payment_line"></div>
                        <div class="cart_payment_box">
                           <p class="cart_payment_total">To pay:</p>
                           <p class="cart_payment_nums-total" id="payment_total">&euro;<?= $total ?></p>
                        </div>
                     </div>
                     <input type="submit" id="submit" value="Checkout">
                  </div>
               <? } ?>
            </div>
         </section>
      </main>
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="/assets/js/cart.js"></script>
      <?php
   }

   public function renderCartProducts($products)
   {
      global $subtotal, $discount, $total;
      foreach ($products as $item) { ?>
         <div class="cart_card">
            <a href="/productCard?id_product=<?= $item['product_id'] ?>" class="cart_card_data">
               <div class="cart_card_img">
                  <img src="assets/img/database/products/<?= $item['first_img'] ?>" />
                  <!-- <div onclick="addToCart(this)" class="cart_card_like"></div> -->
               </div>
               <div class="cart_card_info">
                  <h5 class="cart_card_title"><?= $item['name'] ?></h5>
                  <p class="cart_card_collection"><?= $item['name_collection'] ?></p>
               </div>
            </a>
            <div class="cart_card_nums">
               <? if ($item['discount']) {
                  echo "<p class='cart_card_price_crossed'>&euro;" . $item['price'] . "</p>";
                  echo "<p class='cart_card_discount'>&euro;" . $item['price'] - $item['discount'] . "</p>";
               } else {
                  echo "<p class='cart_card_price'>&euro;" . $item['price'] . "</p>";
               }
               ?>
            </div>
            <div class="cart_card_quantity" data-id="<?= $item['id_cart'] ?>">
               <div class="cart_card_quantity_change decrement">-</div>
               <input type="number" class="cart_card_quantity_nums" value="<?= $item['quantity'] ?>" pattern="[0-9]*" min="1" max="99">
               <div class="cart_card_quantity_change increment">+</div>
            </div>
            <p class="cart_card_total">&euro;<?= $item['sum'] ?></p>
         </div>
<?php
         $subtotal += $item['price'] * $item['quantity'];
         $discount += $item['discount'] * $item['quantity'];
      }
      $total = $subtotal - $discount;
   }
}
