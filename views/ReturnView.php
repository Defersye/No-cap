<?php

namespace views;

class ReturnView
{
   function __construct()
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Return | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/pages.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->return();
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function return()
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Return</a>
            </div>
         </div>
         <section class="return">
            <div class="container">
               <h1 class="pages_title">RETURNS</h1>
               <p class="pages_text return_span">Goods are supplied and refunds given subject to our Terms & Conditions. By checking out you are agreeing to these - read them <a href="/terms_conditions" class="pages_link">here</a>.</p>
               <p class="pages_text return_span">What is our returns policy?</p>
               <p class="pages_text">If an item doesn’t fit or you don’t like it, a refund will be given providing it is returned unworn and in perfect re-saleable condition, with all tags and labels intact and in its original packaging. We will not refund your original shipping cost or the return postage.</p>
               <p class="pages_text return_span">Please be aware international return postage can be prohibitively expensive.</p>

               <h2 class="pages_subtitle">What is not covered by our returns policy?</h2>
               <li class="pages_text">Socks and hats are non-returnable for hygiene reasons – ensure you check the size carefully before ordering, as no refund will be given.</li>
               <li class="pages_text">Discounted items can only be exchanged or returned for store credit.</li>
               <li class="pages_text">Posters are non-returnable.</li>
               <li class="pages_text">You must return the goods to our UK warehouse within 10 days after you receive them.</li>
               <li class="pages_text">You must include a returns form in the package – see details below.</li>
               <li class="pages_text">You must pay your own return postage cost.</li>
               <li class="pages_text">You must get proof of posting – if the return package gets lost we cannot refund you without proof it was sent back to us.</li>
               <li class="pages_text">We will refund you for the goods when the package is received and processed at our warehouse. Unfortunately, we cannot refund the amount you paid for shipping, or any import duty and customs fees you paid.</li>
               <li class="pages_text">International customers: if you do not pay import duties and customs fees to the carrier within 5 days, they will return the order to us automatically.</li>
               <li class="pages_text">Different terms apply if the goods are faulty, damaged, or incorrect.</li>
            </div>
         </section>
      </main>
<?php
   }
}
