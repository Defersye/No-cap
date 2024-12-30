<?php

namespace views;

class DeliveryView
{
   function __construct()
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Delivery | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/pages.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->delivery();
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function delivery()
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Delivery</a>
            </div>
         </div>
         <section class="delivery">
            <div class="container">
               <h1 class="pages_title">Delivery</h1>
               <h2 class="pages_subtitle">International orders and customs fees</h2>
               <p class="pages_text">For EU orders, there are no customs fees for orders with a value below the IOSS limit of £135 (~€150) If your order total is higher than £135 (~€150) We highly recommend placing separate orders to keep the value below this.</p>
               <p class="pages_text">For EU orders above £135 (~€150), the required duties will be charged at checkout to avoid additional charges and delays at customs.
               </p>
               <p class="pages_text">For other international orders customs fees may apply based on the value of the goods and the regulations in your country.</p>
               <p class="pages_text delivery_span">NO CAP is not responsible for any additional import/customs charges.</p>
               <p class="pages_text">The carrier will notify you of the fees and their processing fee via email.</p>
               <p class="pages_text">Failure to pay within 5 days will result in the return of the order to our UK warehouse and a refund for the items only (excluding shipping).</p>

               <h2 class="pages_subtitle">How much does shipping cost?</h2>
               <p class="pages_text">Items are shipped from our warehouse in the UK by Royal Mail tracked services, DPD and DHL Express.</p>

               <h2 class="pages_subtitle">UK</h2>
               <p class="pages_text">Royal Mail Tracked 48 (2-3 business days) - £4</p>
               <p class="pages_text">Royal Mail Tracked 24 (1-2 business days) - £5</p>
               <p class="pages_text">DPD Next Working Day - £6</p>

               <h2 class="pages_subtitle">EU</h2>
               <p class="pages_text">Standard International (&#60;1KG) - £12</p>
               <p class="pages_text">Standard International (1-2KG) - £18</p>
               <p class="pages_text">Express International (&#60;1KG) - £45</p>
               <p class="pages_text">Express International (1-2KG) - £50</p>
               <p class="pages_text">Express International (2-5KG) - £70</p>

               <h2 class="pages_subtitle">USA</h2>
               <p class="pages_text">Standard International (&#60;1KG) - £20</p>
               <p class="pages_text">Standard International (1-2KG) - £25</p>
               <p class="pages_text">Express International (&#60;1KG) - £35</p>
               <p class="pages_text">Express International (1-2KG) - £40</p>
               <p class="pages_text">Express International (2-5KG) - £50</p>

               <h2 class="pages_subtitle">Canada</h2>
               <p class="pages_text">Standard International (&#60;1KG) - £20</p>
               <p class="pages_text">Standard International (1-2KG) - £30</p>
               <p class="pages_text">Express International (&#60;1KG) - £45</p>
               <p class="pages_text">Express International (1-2KG) - £50</p>
               <p class="pages_text">Express International (2-5KG) - £70</p>

               <h2 class="pages_subtitle">Australia & New Zealand</h2>
               <p class="pages_text">Standard International (&#60;1KG) - £20</p>
               <p class="pages_text">Standard International (1-2KG) - £30</p>
               <p class="pages_text">Express International (&#60;1KG) - £50</p>
               <p class="pages_text">Express International (1-2KG) - £55</p>
               <p class="pages_text">Express International (2-5KG) - £70</p>

               <h2 class="pages_subtitle">Rest of World</h2>
               <p class="pages_text">Standard International (&#60;1KG) - £30</p>
               <p class="pages_text">Standard International (1-2KG) - £40</p>
               <p class="pages_text">Express International (&#60;1KG) - £50</p>
               <p class="pages_text">Express International (1-2KG) - £60</p>
               <p class="pages_text">Express International (2-5KG) - £80</p>
               <p class="pages_text delivery_span">Shipping rates may vary, check back here for updated information</p>

               <h2 class="pages_subtitle">How long will your order take to arrive?</h2>
               <li class="pages_text">&nbsp;&nbsp;&nbsp;Immediately after placing your order, you will be sent an order confirmation – check junk mail and promotions/social tabs if you’ve not received it. Contact customer services if it’s not there.</li>
               <li class="pages_text">&nbsp;&nbsp;&nbsp;We aim to dispatch orders placed before 4 PM on the same day. (Monday to Friday, excluding UK national holidays and the Christmas/New Year holiday period when our warehouse is closed).</li>
               <li class="pages_text">&nbsp;&nbsp;&nbsp;UK orders should arrive 2 or 3 business days after the dispatch notification is sent to you, but we cannot guarantee this.</li>
               <li class="pages_text">&nbsp;&nbsp;&nbsp;European orders should arrive in your country 5 to 7 business days after dispatch notification is sent.</li>
               <li class="pages_text">&nbsp;&nbsp;&nbsp;Orders to the rest of the world could take 7 to 14 days to arrive in your country.</li>
               <li class="pages_text">&nbsp;&nbsp;&nbsp;Dispatch and delivery times are estimates only. Delivery can take much longer during peak online shopping periods, especially from Black Friday through to Christmas.</li>
               <li class="pages_text">&nbsp;&nbsp;&nbsp;If your goods have not arrived within the time you expect, please email customer services stating your order number.</li>
            </div>
         </section>
      </main>
<?php
   }
}
