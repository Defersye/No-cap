<?php

namespace views;

class OrderCheckView
{
   function __construct($orderData)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Check order | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/pages.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <? include "./templates/header.php"; ?>
         <main>
            <div class="path">
               <div class="container">
                  <a href="/home" class="path_text">NO CAP</a>
                  <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
                  <a class="path_text_active">Check order</a>
               </div>
            </div>
            <section class="check">
               <div class="container">
                  <?php
                  if ($orderData == "No") {
                     $this->renderView();
                  } elseif ($orderData == "Error") {
                     $this->renderError();
                  } else {
                     $this->renderData($orderData);
                  } ?>
               </div>
            </section>
         </main>
         <? include "./templates/footer.html"; ?>
      </body>

      </html>
   <?php
   }

   function renderView()
   { ?>
      <h2 class="check_title">Check your orders</h2>
      <p class="check_text">Enter your order id and email to locate your order.</p>
      <form class="check_form" action="/order_check" method="post">
         <input type="number" name="order_hash_id" class="check_input" placeholder="Order id" required>
         <input type="email" name="email" class="check_input" placeholder="Email" required>
         <button type="submit" id="submit">Find my order</button>
      </form>
   <?php
   }
   function renderData($orderData)
   { ?>
      <h2 class="check_title">Found it!</h2>
      <p class="check_text">Here's your order details.</p>
      <div class="check_item">
         <p class="check_item_title">Order id</p>
         <p class="check_item_text"><?= $orderData[0]['order_hash_id'] ?></p>
         <p class="check_item_title">Products</p>
         <div class="check_item_names">
            <? foreach ($orderData as $item) {
               echo "<p class=`check_item_text`>" . $item['quantity'] . "x " . $item['name'] . "</p>";
            } ?>
         </div>
         <p class="check_item_title">Status</p>
         <p class="check_item_text status"><?= $orderData[0]['status'] ?></p>
         <p class="check_item_title">Date</p>
         <p class="check_item_text"><?= substr($orderData[0]['date_order'], 0, 10) ?></p>
      </div>
      <a href="/order_check" id="submit">Check another order</a>
   <?php
   }

   function renderError()
   {
   ?>
      <h2 class="check_title">No order found</h2>
      <p class="check_text">Please make sure you've entered the correct order id and email.</p>
      <a href="/order_check" id="submit">Try again</a>
<?php
   }
}
