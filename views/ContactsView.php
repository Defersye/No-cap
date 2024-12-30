<?php

namespace views;

class ContactsView
{
   function __construct($message)
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Contacts | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/pages.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->contacts($message);
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function contacts($message)
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Contacts</a>
            </div>
         </div>
         <section class="contacts">
            <div class="container">
               <div class="contacts_form">
                  <h1 class="pages_title">Contact Us</h1>
                  <p class="contacts_subtitle">Feel free to contact us any time. We will get back to you as soon as we can!</p>
                  <?php
                  if ($message != 'No') {
                     echo $message;
                  }
                  ?>
                  <form action="/contactsSend" method="POST">
                     <input type="text" name="name" placeholder="Name" class="contacts_input" required>
                     <input type="email" name="email" placeholder="Email" class="contacts_input" required>
                     <textarea name="message" class="contacts_input" placeholder="What do you want to say?" required></textarea>
                     <button type="submit" id="submit" class="contacts_btn">Send</button>
                  </form>
               </div>
               <div class="contacts_info">
                  <h2 class="contacts_info_title">Our socials</h2>
                  <ul class="contacts_info_list">
                     <li>no-cap@gmail.com</li>
                     <li>+47 924 805 72</li>
                     <li>Olaf Helsets Vei, 6, Oslo</li>
                     <li class="contacts_info_list_social">
                        <a href="https://t.me/defersye" target="_blank">Telegram
                        </a>
                        <a href="https://instagram.com/defersye" target="_blank">Instagram
                        </a>
                        <a href="https://github.com/defersye" target="_blank">GitHub
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </section>
      </main>
<?php
   }
}
