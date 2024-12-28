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
            <form action="new_product_action.php" method="post" class="form" enctype="multipart/form-data">
               <input type="text" name="name" placeholder="name" class="form_input" required>
               <input type="text" name="description" placeholder="description" class="form_input" required>
               <input type="number" name="price" placeholder="price" class="form_input" required pattern="[0-9]*" min="1">
               <input type="number" name="discount" placeholder="discount" class="form_input" required pattern="[0-9]*" min="0" value="0">
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
               <label class="auth_img">
                  <span id="register_img_1_text" class="auth_img_text" type="text">first image</span>
                  <input type="file" id="register_img_1" name="product_img[]" class="auth_input" required>
                  <span class="auth_img_btn">Choose file</span>
               </label>
               <label class="auth_img">
                  <span id="register_img_2_text" class="auth_img_text" type="text">second image</span>
                  <input type="file" id="register_img_2" name="product_img[]" class="auth_input" required>
                  <span class="auth_img_btn">Choose file</span>
               </label>
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
      // select
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

      // img
      let text1 = document.getElementById('register_img_1_text');
      if (text1.innerHTML = "first image") {
         text1.style.color = "#757575";
      }
      document.getElementById('register_img_1').addEventListener('change', function() {
         let file = this.files[0];
         text1.innerHTML = file.name;
         text1.style.color = "black";
      });

      let text2 = document.getElementById('register_img_2_text');
      if (text2.innerHTML = "second image") {
         text2.style.color = "#757575";
      }
      document.getElementById('register_img_2').addEventListener('change', function() {
         let file = this.files[0];
         text2.innerHTML = file.name;
         text2.style.color = "black";
      });

      // required
      document.getElementById('submit').addEventListener('click', function() {
         if (text1.innerHTML == "first image" || text2.innerHTML == "second image") {
            alert("Please select an images");
         }
      });
   </script>
</body>

</html>