<script src="assets/js/header.js" defer></script>
<script src="assets/js/search.js" defer></script>
<header>
   <div class="container">
      <div class="left">
         <div class="header_nav">
            <a href="/catalog" class="header_link">catalog</a>
            <!-- <a href="/sales" class="header_link">sales</a> -->
            <input type="text" placeholder="search" class="header_link search">
         </div>
      </div>
      <a href="/home" class="header_logo">no cap</a>
      <div class="right">
         <div class="header_nav">
            <!-- <a href="/liked" class="header_link">liked</a> -->
            <? if (isset($_SESSION['user_login'])) { ?>
               <a href="/account" class="header_link"><?= $_SESSION['user_login'] ?></a>
               <a href="/cart" class="header_link">cart</a>
               <span class="header_cart-quantity"><?= $_SESSION['quantityChecker'] ?></span>
            <? } else { ?>
               <a href="/login" class="header_link">account</a>
            <? } ?>
         </div>
      </div>
      <div class="header_burger">
         <span class="burger_bar"></span>
         <span class="burger_bar"></span>
         <span class="burger_bar"></span>
      </div>
   </div>
</header>
<ul class="header_mobile_nav">
   <a href="/catalog" class="header_link">catalog</a>
   <!-- <a href="/sales" class="header_link">sales</a> -->
   <!-- <a href="/liked" class="header_link">liked</a> -->
   <? if (isset($_SESSION['user_login'])) { ?>
      <a href="/account" class="header_link"><?= $_SESSION['user_login'] ?></a>
      <div class="header_cart">
         <a href="/cart" class="header_link">cart</a>
         <span class="header_cart-quantity"><?= $_SESSION['quantityChecker'] ?></span>
      </div>
   <? } else { ?>
      <a href="/login" class="header_link">account</a>
   <? } ?>
   <input type="text" class="header_link search" placeholder="Search">
</ul>
<div class="container">
   <div class="search_content">Nothing found...</div>
</div>