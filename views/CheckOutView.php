<?php

namespace views;

class CheckOutView
{
   function __construct($data)
   {
      $user = $data[0];
      $cart = $data[1];
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Check out | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/order.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->checkout($user, $cart);
         include "./templates/footer.html";
         ?>
         <script>
            // payyment method
            document.querySelectorAll('[name=payment_method]').forEach(s => {
               s.addEventListener('change', function() {
                  document.querySelectorAll('.checkout_payment_form').forEach(d => d.classList.add('deactive'));
                  document.getElementById(this.value).classList.remove('deactive');
               });
            });

            // time
            var clock = document.getElementById("timestamp");
            clock.innerHTML = new Date().toLocaleTimeString();
         </script>
      </body>

      </html>
   <?php
   }

   function checkout($user, $cart)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Check out</a>
            </div>
         </div>
         <section class="checkout">
            <div class="container">
               <form class="checkout_form" action="/orderSend" method="post">
                  <h2 class="checkout_title">Delivery</h2>
                  <div class="a">
                     <input type="text" name="country" class="checkout_input" value="<?= $user['country'] ?>" placeholder="Country" required>
                     <input type="number" name="postal_code" class="checkout_input" value="<?= $user['postal_code'] ?>" placeholder="Postal code" max="9999999" required>
                  </div>
                  <input type="text" name="adress_1st_line" class="checkout_input" value="<?= $user['adress_1st_line'] ?>" placeholder="Region/state, city" required>
                  <input type="text" name="adress_2nd_line" class="checkout_input" value="<?= $user['adress_2nd_line'] ?>" placeholder="Street, appartment, etc." required>
                  <div class="checkout_radio">
                     <p class="checkout_subtitle">Post service</p>
                     <label>
                        <input type="radio" name="post_service" value="Royal_Mail" required>
                        Royal Mail
                     </label>
                     <label>
                        <input type="radio" name="post_service" value="DPD">
                        DPD
                     </label>
                     <label>
                        <input type="radio" name="post_service" value="DHL_Express">
                        DHL Express
                     </label>
                  </div>

                  <h2 class="checkout_title">Payment</h2>
                  <div class="checkout_radio">
                     <label>
                        <input type="radio" name="payment_method" value="Card" required>
                        Card</label>
                     <label>
                        <input type="radio" name="payment_method" value="Transfer">
                        Transfer</label>
                  </div>
                  <div id="Card" class="checkout_payment_form deactive">
                     will be added first of all
                  </div>
                  <div id="Transfer" class="checkout_payment_form deactive">
                     will be added later
                  </div>

                  <button class="checkout_btn" type="submit" id="submit">Place order</button>
               </form>
               <div class="checkout_data">
                  <h2 class="checkout_logo">No cap</h2>
                  <div class="checkout_line"></div>

                  <? $subtotal = 0;
                  foreach ($cart as $item) { ?>
                     <div class="checkout_card">
                        <p><?= $item['name'] ?></p>
                        <div class="checkout_line"></div>
                        <p><?= $item['quantity'] ?>x</p>
                        <p><?= $item['price'] - $item['discount'] ?></p>
                     </div>
                  <? $subtotal += ($item['price'] - $item['discount']) * $item['quantity'];
                  } ?>
                  <div class="checkout_line"></div>

                  <div class="checkout_card box">
                     <p class="checkout_tot">Sub total:</p>
                     <div class="checkout_line"></div>
                     <p class="checkout_tot">&euro;<?= $subtotal ?></p>
                  </div>
                  <div class="checkout_card box">
                     <p class="checkout_shipping">Shipping:</p>
                     <div class="checkout_line"></div>
                     <p class="checkout_shipping">&euro;<?= $shipping = 20 ?></p>
                  </div>
                  <div class="checkout_card box">
                     <p class="checkout_total">Total:</p>
                     <div class="checkout_line"></div>
                     <p class="checkout_total">&euro;<?= $total = $subtotal + $shipping ?></p>
                  </div>
                  <div class="checkout_line"></div>

                  <div class="checkout_user-data">
                     <p class="checkout_user"><?= date('Y-m-d'); ?> <span id="timestamp"></span></p>
                     <p class="checkout_user"><?= $user['login'] ?></p>
                  </div>

               </div>
            </div>
         </section>
      </main>
<?php
   }
}
