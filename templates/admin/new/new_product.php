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
            <a class="path_text_active">Новый товар</a>
         </div>
      </div>
      <section class="auth">
         <div class="container">
            <h2 class="form_title">Новый товар</h2>
            <form action="new_product_action.php" method="post" class="form">
               <input type="text" name="name" placeholder="name" class="form_input" required><br>
               <input type="text" name="description" placeholder="description" class="form_input" required><br>
               <input type="number" name="price" placeholder="price" class="form_input" required pattern="[0-9]*" min="1"><br>
               <input type="number" name="discount" placeholder="discount" class="form_input" required pattern="[0-9]*" min="0"><br>
               <input type="number" name="category_id" placeholder="category id" class="form_input" required><br>
               <input type="number" name="collection_id" placeholder="collection id" class="form_input" required><br>
               <input type="text" name="first_img" placeholder="first image name" class="form_input" required><br>
               <input type="text" name="second_img" placeholder="second image name" class="form_input" required><br>
               <button type="submit" class="form_btn" id="submit">Создать</button>
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