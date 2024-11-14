<section class="suggestions">
   <div class="container">
      <h2>Предложенное для Вас</h2>
      <div class="suggestions_slider">
         <button class="suggestion_arrow"></button>
         <div class="catalog_cards">
            <?
            foreach ($products as $item) {
               include 'templates/catalogCard.php';
            } ?>
         </div>
         <button class="suggestion_arrow"></button>
      </div>
   </div>
</section>