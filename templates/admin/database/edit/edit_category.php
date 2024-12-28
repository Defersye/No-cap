<?php
include_once "../connect.php";

$id_category = $_GET['id_category'];

$result = $conn->query("SELECT * FROM categories WHERE id_category = $id_category");
if ($result->num_rows) {
   while ($row = $result->fetch_assoc()) {
      $answers[] = $row;
   }
} ?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Admin panel | NO CAP | Online store for style lovers</title>

   <link rel="shortcut icon" href="/assets/img/layout/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="/assets/css/general.css">
   <link rel="stylesheet" href="../admin.css">
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
            <a href="../../admin_index.php?table=categories" class="path_text">Admin panel</a>
            <p class="path_text">&nbsp;<img src="/assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
            <a class="path_text_active">Edit category</a>
         </div>
      </div>
      <section class="auth">
         <div class="container">
            <h2 class="form_title">Edit category</h2>
            <form action="edit_category_action.php?id_category=<?= $id_category ?>" method="post" class="form">
               <?
               foreach ($answers as $item) {
               ?>
                  <input type="text" name="name_category" value="<?= $item['name_category'] ?>" class="form_input" required><br>
               <?
               } ?>
               <button type="submit" class="form_btn" id="submit">Edit</button>
            </form>
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