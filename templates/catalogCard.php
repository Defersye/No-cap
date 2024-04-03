<a href="/productCard?id_product=<?= $item['id'] ?>" class="catalog_card">
   <div class="catalog_card_img">
      <img data-id="<?= $item['id'] ?>" class="img_on" src="assets/img/database/products/<?= $item['first_img'] ?>" />
      <img data-id="<?= $item['id'] ?>" class="img_off" src="assets/img/database/products/<?= $item['second_img'] ?>" />
      <button onclick="addToLiked(this)" class="catalog_card_like"></button>
   </div>
   <h5 class="catalog_card_title"><?= $item['name'] ?></h5>
   <p class="catalog_card_collection"><?= $item['name_collection'] ?></p>
   <div class="catalog_card_nums">
      <? if ($item['discount']) {
         echo "<p class='catalog_card_price_crossed'>&euro;" . $item['price'] . "</p>";
         echo "<p class='catalog_card_discount'>&euro;" . $item['price'] - $item['discount'] . "</p>";
      } else {
         echo "<p class='catalog_card_price'>&euro;" . $item['price'] . "</p>";
      }
      ?>
   </div>
</a>