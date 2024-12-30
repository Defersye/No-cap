<?php

namespace views;

class PrivacyPolicyView
{
   function __construct($privacy_policy)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Privacy Policy | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/pages.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->privacy_policy($privacy_policy);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function privacy_policy($privacy_policy)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Privacy Policy</a>
            </div>
         </div>
         <section class="privacy_policy">
            <div class="container">
               <h1>Privacy Policy</h1>
            </div>
         </section>
      </main>
<?php
   }
}
