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

         <title>NO CAP | Интернет-магазин для ценителей стиля</title>

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
      </body>

      </html>
   <?php
   }
   function home($products, $collections)
   { ?>
      <!-- top_sellers sales collections  -->
      <main>
         <section class="hero">
            <div class="container">
               <a href="/catalog" class="hero_btn">К покупкам</a>
            </div>
         </section>
         <section class="suggestions">
            <div class="container">
               <h6 class="section_title">Тебе могут понравиться</h6>
               <div class="suggestions_cards">
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
                     <p>другие коллекции</p>
                  </a>
               </div>
            </div>
         </section>
         <section class="about">
            <div class="container">
               <div class="about_content">
                  <div class="about_content_text">
                     <sup>раздаём стиль с 2020 года</sup>
                     <h1 class="about_content_title">no cap</h1>
                     <p><span>No Cap</span> – ваше идеальное место для поиска стильной и комфортной одежды в стиле street casual! Мы понимаем, что каждый из вас хочет выделяться из толпы, и именно поэтому мы собрали уникальные коллекции, которые сочетают в себе актуальные тренды и непревзойденное качество.</p>
                     <p>Мы вдохновляемся уличной культурой и современными трендами, поэтому в нашем магазине вы найдете как классические модели, так и смелые новинки.</p>
                     <p><span>No Cap</span> – стиль, который говорит сам за себя!</p>
                     <a href="/login">Присоединяйся</a>
                  </div>
                  <img src="/assets/img/layout/about.png" alt="" class="about_content_img">
               </div>
            </div>
         </section>
         <section class="last">
            <div class="container">
               <sup>раздаём стиль с 2020 года</sup>
               <p class="last_logo">no cap</p>
               <div class="last_offers">
                  <div class="last_offer">
                     <h6 class="last_offer_title">доставка по всему миру</h6>
                     <p class="last_offer_text">Отслеживаемая и оперативная доставка в страны СНГ</p>
                  </div>
                  <div class="last_offer">
                     <h6 class="last_offer_title">быстрая поддержка</h6>
                     <p class="last_offer_text">Мы готовы помочь в любое время суток</p>
                  </div>
                  <div class="last_offer">
                     <h6 class="last_offer_title">возврат в течение 30 дней</h6>
                     <p class="last_offer_text">Верните или обменяйте свой заказ в течение 30 дней</p>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php
   }
}
