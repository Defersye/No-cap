<a href="/card" class="catalog_card">
   <div class="catalog_card_img">
      <img class="img_on" src="assets/img/database/<?= $item['first_img'] ?>" />
      <img class="img_off" src="assets/img/database/<?= $item['second_img'] ?>" />
      <button onclick="addToLiked(this)" class="catalog_card_like"></button>
   </div>
   <h5 class="catalog_card_title"><?= $item['name'] ?></h5>
   <p class="catalog_card_collection"><?= $item['name_collection'] ?></p>
   <p class="catalog_card_price">&euro;<?= $item['price'] ?></p>
</a>


<!-- sale -->
<?
// if ($item['hot']) {
//    echo "<img class='card__hot_icon'  src='../public/img/hot.png' alt=''>";
// } 
?>