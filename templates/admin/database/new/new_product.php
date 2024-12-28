<?
include_once "../connect.php";

$result = $conn->query("SELECT * FROM categories");
while ($row = $result->fetch_assoc()) {
   $categories[] = $row;
}

$result = $conn->query("SELECT * FROM collections");
while ($row = $result->fetch_assoc()) {
   $collections[] = $row;
}
?>
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
            <a href="../../admin_index.php?table=products" class="path_text">Admin panel</a>
            <p class="path_text">&nbsp;<img src="/assets/img/layout/path_arrow.png" alt="" class="path_arrow">&nbsp;</p>
            <a class="path_text_active">New product</a>
         </div>
      </div>
      <section class="auth">
         <div class="container">
            <h2 class="form_title">New product</h2>
            <form action="new_product_action.php" method="post" class="form">
               <input type="text" name="name" placeholder="name" class="form_input" required>
               <input type="text" name="description" placeholder="description" class="form_input" required>
               <input type="number" name="price" placeholder="price" class="form_input" required pattern="[0-9]*" min="1">
               <input type="number" name="discount" placeholder="discount" class="form_input" required pattern="[0-9]*" min="0">
               <select name="category_id" class="form_input" required>
                  <option value="" disabled selected>category</option>
                  <?php foreach ($categories as $category) { ?>
                     <option value="<?= $category['id_category'] ?>"><?= $category['name_category'] ?></option>
                  <?php } ?>
               </select>
               <select name="collection_id" class="form_input" required>
                  <option value="" disabled selected>collection</option>
                  <?php foreach ($collections as $collection) { ?>
                     <option value="<?= $collection['id_collection'] ?>"><?= $collection['name_collection'] ?></option>
                  <?php } ?>
               </select>
               <input type="text" name="first_img" placeholder="first image name" class="form_input" required>
               <input type="text" name="second_img" placeholder="second image name" class="form_input" required>
               <button type="submit" class="form_btn" id="submit">Create</button>
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
   <script>
      let categorySelect = document.querySelector('select[name="category_id"]');
      categorySelect.style.color = "#757575";
      categorySelect.addEventListener('change', function() {
         categorySelect.style.color = "black";
      });
      let collectionSelect = document.querySelector('select[name="collection_id"]');
      collectionSelect.style.color = "#757575";
      collectionSelect.addEventListener('change', function() {
         collectionSelect.style.color = "black";
      });
   </script>
</body>

</html>