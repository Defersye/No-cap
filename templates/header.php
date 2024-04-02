<header>
   <div class="container">
      <div class="left">
         <div class="header_nav">
            <a href="/catalog" class="header_link">catalog</a>
            <!-- <a href="/sales" class="header_link">sales</a> -->
            <input type="text" placeholder="Search" class="header_link search">
         </div>
      </div>
      <a href="/home" class="header_logo">no cap</a>
      <div class="right">
         <div class="header_nav">
            <a href="/liked" class="header_link">liked</a>
            <?
            if (isset($_SESSION['user'])) {
            ?>
               <a href="/account" class="header_link"><?= $_SESSION['user'] ?></a>
               <a href="/cart" class="header_link">cart</a>
            <?
            } else {
            ?>
               <a href="/login" class="header_link">account</a>
            <?
            }
            ?>
         </div>
      </div>
   </div>
</header>
<div class="container">
   <div class="search_content">Type something...</div>
</div>