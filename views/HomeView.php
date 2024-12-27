<?php

namespace views;

class HomeView
{
   function __construct($products, $collections)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="/assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/home.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->home($products, $collections);
         include "./templates/footer.html";
         ?>
         <script defer>
            (function() {
               function scrollHorizontally(e) {
                  e = window.event || e;
                  var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
                  document.getElementById('scroll').scrollLeft -= (delta * 200);
                  e.preventDefault();
               }
               document.getElementById('scroll').addEventListener("mousewheel", scrollHorizontally, false);
            })();
         </script>
      </body>

      </html>
   <?php
   }
   function home($products, $collections)
   { ?>
      <main>
         <section class="hero">
            <div class="container">
               <a href="/catalog" class="hero_btn">To shopping</a>
            </div>
         </section>
         <section class="suggestions">
            <div class="container">
               <h6 class="suggestions_title">You may like</h6>
               <div class="suggestions_cards" id="scroll">
                  <?
                  foreach ($products as $item) {
                     include 'templates/catalogCard.php';
                  } ?>
               </div>
            </div>
         </section>
         <section class="collections">
            <div class="container">
               <div class="collections_cards">
                  <?
                  $counter = 0;
                  foreach ($collections as $item) {
                     if ($counter == 0) { ?>
                        <a href="/catalog?collection=<?= $item['name_collection'] ?>" class="collections_item" style=" grid-area: 1 / 1 / 3 / 2;">
                           <img src="/assets/img/layout/<?= $item['name_collection'] ?>.png" alt="">
                           <p><?= $item['name_collection'] ?></p>
                        </a>
                     <?
                     } elseif ($counter < 4) { ?>
                        <a href="/catalog?collection=<?= $item['name_collection'] ?>" class="collections_item">
                           <img src="/assets/img/layout/<?= $item['name_collection'] ?>.png" alt="">
                           <p><?= $item['name_collection'] ?></p>
                        </a>
                  <? }
                     $counter++;
                  } ?>
                  <a href="/catalog" class="collections_item">
                     <img src="/assets/img/layout/other_collections.png" alt="">
                     <p>other collections</p>
                  </a>
               </div>
            </div>
         </section>
         <section class="about">
            <div class="container">
               <div class="about_content">
                  <div class="about_content_text">
                     <sup>sharing style since 2020</sup>
                     <h1 class="about_content_title">no cap</h1>
                     <p><span>No Cap</span> – your perfect place for finding stylish and comfortable clothing in street casual style! We understand that each of you wants to stand out from the crowd, and that's why we've gathered unique collections that combine current trends with unparalleled quality.</p>
                     <p>We are inspired by street culture and modern trends, so you'll find both classic models and bold new arrivals in our store.</p>
                     <p><span>No Cap</span> – style that speaks for itself!</p>
                     <a href="/login">Join us</a>
                  </div>
                  <img src="/assets/img/layout/about.png" alt="" class="about_content_img">
               </div>
            </div>
         </section>
         <section class="last">
            <div class="container">
               <sup>sharing style since 2020</sup>
               <p class="last_logo">no cap</p>
               <div class="last_offers">
                  <div class="last_offer">
                     <h6 class="last_offer_title">worldwide shipping</h6>
                     <p class="last_offer_text">Trackable and fast delivery worldwide</p>
                  </div>
                  <div class="last_offer">
                     <h6 class="last_offer_title">fast support</h6>
                     <p class="last_offer_text">We are ready to help any day at any time</p>
                  </div>
                  <div class="last_offer">
                     <h6 class="last_offer_title">return in 30 days</h6>
                     <p class="last_offer_text">Return or exchange your order within 30 days</p>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php
   }
}
