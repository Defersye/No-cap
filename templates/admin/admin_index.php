<?php
$current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'database';
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Admin panel | NO CAP | Online store for style lovers</title>

   <link rel="shortcut icon" href="/assets/img/layout/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="/assets/css/general.css">
   <link rel="stylesheet" href="admin_index.css">
   <link rel="stylesheet" href="database/admin.css">
   <link rel="stylesheet" href="emailer/emailer.css">
   <link rel="stylesheet" href="/assets/css/media.css">
</head>

<body>
   <header>
      <div class="container">
         <div class="left"> </div>
         <a href="/home" class="header_logo">no cap</a>
         <div class="right"> </div>
      </div>
   </header>
   <main>
      <div class="path">
         <div class="container">
            <a href="/home" class="path_text">NO CAP</a>
            <p class="path_text">&nbsp;<img src="/assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
            <a class="path_text_active">Admin panel</a>
         </div>
      </div>
      <section class="admin">
         <div class="container">
            <aside>
               <p class="admin_nav_title">Menu</p>
               <div class="admin_nav_line"></div>
               <ul class="admin_nav">
                  <a href="?tab=database" class="admin_nav_link <?= $current_tab == 'database' ? 'active' : ''; ?>">
                     <li>Database</li>
                  </a>
                  <a href="?tab=emailer" class="admin_nav_link <?php echo $current_tab == 'emailer' ? 'active' : ''; ?>">
                     <li>Emailer</li>
                  </a>
               </ul>
            </aside>
            <article>
               <?php
               switch ($current_tab) {
                  case 'database':
                     include 'database/admin.php';
                     break;
                  case 'emailer':
                     include 'emailer/emailer.php';
                     break;
                  default:
                     include 'database/admin.php';
               }
               ?>
            </article>
         </div>
      </section>
   </main>
   <footer>
      <div class="container">
         <p class="footer_copyright">&copy;
            <script>
               document.write(new Date().getFullYear())
            </script> NO CAP | defersye
         </p>
      </div>
   </footer>
</body>

</html>