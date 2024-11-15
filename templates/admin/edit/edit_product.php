<?php
include_once "../connect.php";

$id_product = $_GET['id_product'];

$result = $conn->query("SELECT * FROM products WHERE id_product = $id_product");
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

   <title>Админ панель | NO CAP | Интернет-магазин для ценителей стиля</title>

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
            <a href="../admin.php?table=products" class="path_text">Админ панель</a>
            <p class="path_text">&nbsp;<img src="/assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
            <a class="path_text_active">Редактировать товар</a>
         </div>
      </div>
      <section class="auth">
         <div class="container">
            <h2 class="form_title">Редактировать товар</h2>
            <form action="edit_product_action.php?id_product=<?= $id_product ?>" method="post" class="form">
               <?
               foreach ($answers as $item) {
               ?>
                  <input type="text" name="name" value="<?= $item['name'] ?>" class="form_input" required><br>
                  <input type="text" name="description" value="<?= $item['description'] ?>" class="form_input" required><br>
                  <input type="number" name="price" value="<?= $item['price'] ?>" class="form_input" required><br>
                  <input type="number" name="discount" value="<?= $item['discount'] ?>" class="form_input" required><br>
                  <input type="number" name="category_id" value="<?= $item['category_id'] ?>" class="form_input" required><br>
                  <input type="number" name="collection_id" value="<?= $item['collection_id'] ?>" class="form_input" required><br>
                  <input type="text" name="first_img" value="<?= $item['first_img'] ?>" class="form_input" required><br>
                  <input type="text" name="second_img" value="<?= $item['second_img'] ?>" class="form_input" required><br>
               <?
               } ?>
               <button type="submit" class="form_btn" id="submit">отправить</button>
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
   <script src="admin.js"></script>
</body>

</html>