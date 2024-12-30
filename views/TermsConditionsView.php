<?php

namespace views;

class TermsConditionsView
{
   function __construct()
   {
?>
      <!doctype html>
      <html lang="en">

      <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Terms & Conditions | NO CAP | Online store for style lovers</title>

         <link rel="shortcut icon" href="assets/img/layout/favicon.ico" type="image/x-icon">
         <link rel="stylesheet" href="assets/css/general.css">
         <link rel="stylesheet" href="assets/css/pages.css">
         <link rel="stylesheet" href="assets/css/media.css">
      </head>

      <body>
         <?php
         include "./templates/header.php";
         $this->terms_conditions();
         include "./templates/footer.html";
         ?>
      </body>

      </html>
   <?php
   }

   function terms_conditions()
   { ?>
      <main>
         <div class="path">
            <div class="container">
               <a href="/home" class="path_text">NO CAP</a>
               <p class="path_text">&nbsp;<img src="assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
               <a class="path_text_active">Terms & Conditions</a>
            </div>
         </div>
         <section class="terms_conditions">
            <div class="container">
               <h1 class="pages_title">Terms & Conditions</h1>
               <p class="pages_text terms_conditions_span">1. Intellectual property rights</p>
               <p class="pages_text">We are the owner or licensee of all intellectual property rights in the site (for example the copyright and any rights in the designs) and in any of the material posted on it (including but not limited to text, data, photos, graphics and other images, software, audio and video files) or any such content which is hosted on third party platforms. They are protected by copyright. You should assume that everything you see or read and everything available on the site is protected by intellectual property rights. You are allowed to print one copy and download extracts of any page on the site for your personal reference, but not for commercial use without a license from us. You must not alter anything, or use any illustrations, video, audio or photographs separately from the text that goes with them. Use of the site does not give you any rights in any materials on the site. Our status (and that of any identified contributors) as the author or publisher of content on the site must always be acknowledged. Except as set out above, you may not reproduce, distribute, modify, adapt, create derivative works of, publicly display, transmit, broadcast, sell, license, or in any way exploit any material on this site, in whole or in part, without our prior written consent. You agree to use any material on this website only for the purpose for which it was made available. If you breach these terms, you lose your right to use our site, and must destroy or return any copies you have made.</p>

               <p class="pages_text terms_conditions_span">2. Computer offences</p>
               <p class="pages_text">If you do anything which is a criminal offence under a law called the Computer Misuse Act 1990, your right to use the site will end straightaway. We will report you to the relevant authorities and give them your identity. Examples of computer misuse include introducing viruses, worms, Trojans and other technologically harmful or damaging material. You must not try to get access to our site or server or any connected database or make any ‘attack’ on the site. We won’t be legally responsible to you for any damage from viruses or other harmful material that you pick up via our site.</p>

               <p class="pages_text terms_conditions_span">3. Links to our website </p>
               <p class="pages_text">You are allowed to make a legal link to our website’s homepage from your website if the content on your site meets the standards of our <a href="privacy_policy" class="pages_link">Privacy Policy</a>. We can end this permission at any time. You must not suggest any endorsement by us or association with us unless we agree in writing. If you link to our website pages, you may only do so in a way that is fair and legal and does not damage our reputation or take advantage of it.</p>

               <p class="pages_text terms_conditions_span">4. Links from our website</p>
               <p class="pages_text">Links from our site to other websites are for information only. We don’t control them and don’t accept responsibility for other websites or any materials found upon them or any loss you suffer from using them.</p>

               <p class="pages_text terms_conditions_span">5. Variation</p>
               <p class="pages_text">We change these terms from time to time and you must check them for changes because they are binding on you.</p>

               <p class="pages_text terms_conditions_span">6. Trademarks</p>
               <p class="pages_text">‘NO CAP’ is our UK and EU registered trademark.</p>

               <p class="pages_text terms_conditions_span">7. Applicable law</p>
               <li class="pages_text">1. The Parties will use their best efforts to negotiate in good faith and settle any dispute that may arise out of or relate to this Agreement or any breach of it.</li>
               <li class="pages_text">2. If any such dispute cannot be settled amicably through ordinary negotiations between the Parties, or either or both is or are unwilling to engage in this process, either Party may propose to the other in writing that structured negotiations be entered into with the assistance of a fully accredited mediator before resorting to litigation.</li>
               <li class="pages_text">3. If the Parties are unable to agree upon a mediator, or if the mediator agreed upon is unable or unwilling to act and an alternative mediator cannot be agreed, any party may within 14 days of the date of knowledge of either event apply to LawBite to appoint a mediator under the LawBite Mediation Procedure.</li>
               <li class="pages_text">4. Within 14 days of the appointment of the mediator (either by mutual agreement of the Parties or by LawBite in accordance with their mediation procedure), the Parties will meet with the mediator to agree the procedure to be adopted for the mediation, unless otherwise agreed between the parties and the mediator.</li>
               <li class="pages_text">5. All negotiations connected with the relevant dispute(s) will be conducted in confidence and without prejudice to the rights of the Parties in any further proceedings.</li>
               <li class="pages_text">6. If the Parties agree on a resolution of the dispute at mediation, the agreement shall be reduced to writing and, once signed by the duly authorized representatives of both Parties, shall be final and binding on them.</li>
               <li class="pages_text">7. If the Parties fail to resolve the dispute(s) within 60 days (or such longer term as may be agreed between the Parties) of the mediator being appointed, or if either Party withdraws from the mediation procedure, then either Party may exercise any right to seek a remedy through arbitration by an arbitrator to be appointed by LawBite under the Rules of the LawBite Arbitration Scheme.</li>
               <li class="pages_text">8. Any dispute shall not affect the Parties’ ongoing obligations under the Agreement.</li>
               <li class="pages_text">9. The English courts have the only right to hear claims related to our site, and English law governs all disputes.</li>

               <p class="pages_text terms_conditions_span">8. Contact us</p>
               <p class="pages_text">To contact us about any issues regarding this website please send message at our <a href="/contacts" class="pages_link">contact page</a>.</p>

               <p class="pages_text terms_conditions_span">9. General</p>
               <p class="pages_text">We may assign these terms or any of our rights without your consent. You may not do this without our prior written consent. If any provision of these terms are found by a court of competent jurisdiction to be invalid or otherwise unenforceable, the parties nevertheless agree that such portion will be deemed severable from these terms and will not affect the validity of the remaining provisions, which shall remain in full force and effect. These terms do not confer any third-party beneficiary rights. Our failure to insist upon or enforce strict performance of any provision of these terms will not be construed as a waiver of any provision or right.</p>
            </div>
         </section>
      </main>
<?php
   }
}
