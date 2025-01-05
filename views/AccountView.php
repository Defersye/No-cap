<?php

namespace views;

class AccountView
{
   function __construct($user, $orders)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Account | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/account.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->account($user, $orders);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function account($user, $orders)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Account</a>
            </div>
         </div>
         <section class="account">
            <div class="container">
               <div class="account_info">
                  <div class="accuont_img">
                     <img src="assets/img/database/avatars/<?= $user['avatar'] ?>" alt="" class="account_avatar">
                     <a href="" class="account_edit"><img src="assets/img/layout/edit_account.png" alt=""></a>
                  </div>
                  <div class="account_main_data">
                     <h1 class="account_email"><?= $user['email'] ?></h1>
                     <h1 class="account_name"><?= $user['full_name'] ?></h1>
                     <a href="/logout" class="account_logout">Logout</a>
                  </div>
                  <div class="account_line"></div>
                  <div class="account_postal_data">
                     <? if ($user['country'] != null) { ?>
                        <p class="account_postal_row"><span><?= $user['country'] ?></span> - Country</p>
                        <p class="account_postal_row"><span><?= $user['postal_code'] ?></span> - Postal code</p>
                        <p class="account_postal_row"><span><?= $user['adress_1st_line'] ?></span> - Adress 1st line</p>
                        <p class="account_postal_row"><span><?= $user['adress_2nd_line'] ?></span> - Adress 2nd line</p>
                     <? } else { ?>
                        <p class="account_postal_row"><span>Unknown</span> - Country</p>
                        <p class="account_postal_row"><span>Unknown</span> - Postal code</p>
                        <p class="account_postal_row"><span>Unknown</span> - Adress</p>
                        <!-- link, mf! -->
                        <a href="" class="account_postal_row link">Add postal info</a>
                     <? } ?>
                  </div>
               </div>
               <div class="account_orders">
                  <h1 class="orders_title">My orders</h1>
                  <? if ($orders != "No") {
                     foreach ($orders as $order) { ?>
                        <div class="account_order">
                           <div class="order_data">
                              <p class="order_hash">#<?= $order['order_hash_id'] ?></p>
                              <p class="order_date"><?= $order['date_order'] ?></p>
                              <p><?= $order['post_service'] ?></p>
                              <p><?= $order['payment_method'] ?></p>
                           </div>
                           <div class="order_status">
                              <div class="check"></div>
                              <?= $order['status'] ?>
                           </div>
                           <div class="order_items">
                              <? foreach ($order as $item) {
                                 if (is_array($item)) { ?>
                                    <div class="order_item">
                                       <img src="assets/img/database/products/<?= $item['first_img'] ?>" />
                                       <p><?= $item['quantity'] ?>x <?= $item['name'] ?></p>
                                    </div>
                              <? }
                              } ?>
                           </div>
                        </div>
                  <? }
                  } else {
                     echo "<p class='nope'>No orders have been placed yet</p>";
                  } ?>
               </div>
            </div>
         </section>
      </main>
<?php
   }
}
