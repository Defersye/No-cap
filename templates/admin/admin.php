<?php
include_once "connect.php";
if (isset($_GET['table'])) {
   $table = $_GET['table'];
} else {
   $table = 'users';
}
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Админ панель | NO CAP | Интернет-магазин для ценителей стиля</title>

   <link rel="shortcut icon" href="/assets/img/layout/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="/assets/css/general.css">
   <link rel="stylesheet" href="admin.css">
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
            <a class="path_text_active">Админ панель</a>
         </div>
      </div>
      <section class="admin">
         <div class="container">
            <div class="table-names">
               <button id="usersBtn" onclick="switchTables('users')" class="table-name <?= $table == 'users' ? "active" : "" ?>">Пользователи</button>
               <button id="productsBtn" onclick="switchTables('products')" class="table-name <?= $table == 'products' ? "active" : "" ?>">Товары</button>
               <button id="categoriesBtn" onclick="switchTables('categories')" class="table-name <?= $table == 'categories' ? "active" : "" ?>">Категории</button>
               <button id="collectionsBtn" onclick="switchTables('collections')" class="table-name <?= $table == 'collections' ? "active" : "" ?>">Коллекции</button>
            </div>

            <div id="users" <?= $table == 'users' ? "style='display: block;'" : "style='display: none;'" ?>>
               <table>
                  <tr>
                     <th colspan="2">действия</th>
                     <th>id user</th>
                     <th>full name</th>
                     <th>login</th>
                     <th>email</th>
                     <th>password</th>
                  </tr>
                  <?
                  $result = $conn->query("SELECT * FROM users");
                  if ($result->num_rows) {
                     while ($row = $result->fetch_assoc()) {
                        $users[] = $row;
                     }
                  }
                  foreach ($users as $user) { ?>
                     <tr>
                        <td>
                           <button onclick="deleteConfirmUser('<?= $user['id_user'] ?>')" class="delete">
                              <img src="/assets/img/layout/delete.png" alt="удалить">
                           </button>
                        </td>
                        <td>
                           <a href="edit/edit_user.php?id_user=<?= $user['id_user'] ?>" class="edit">
                              <img src="/assets/img/layout/edit.png" alt="редактировать">
                           </a>
                        </td>
                        <td><?= $user['id_user'] ?></td>
                        <td><?= $user['full_name'] ?></td>
                        <td><?= $user['login'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['password'] ?></td>
                     </tr>
                  <?
                  } ?>
               </table>
               <a href="new/new_user.php" class="new">Новый пользователь</a>
            </div>

            <div id="products" <?= $table == 'products' ? "style='display: block;'" : "style='display: none;'" ?>>
               <table>
                  <tr>
                     <th colspan="2">действия</th>
                     <th>id product</th>
                     <th>name</th>
                     <th>description</th>
                     <th>price</th>
                     <th>discount</th>
                     <th>category</th>
                     <th>collection</th>
                     <th>first image</th>
                     <th>second image</th>
                  </tr>
                  <?
                  $result = $conn->query("SELECT * FROM products");
                  if ($result->num_rows) {
                     while ($row = $result->fetch_assoc()) {
                        $products[] = $row;
                     }
                  }
                  foreach ($products as $product) { ?>
                     <tr>
                        <td>
                           <button onclick="deleteConfirmProduct('<?= $product['id_product'] ?>')" class="delete">
                              <img src="/assets/img/layout/delete.png" alt="удалить">
                           </button>
                        </td>
                        <td>
                           <a href="edit/edit_product.php?id_product=<?= $product['id_product'] ?>" class="edit">
                              <img src="/assets/img/layout/edit.png" alt="редактировать">
                           </a>
                        </td>
                        <td><?= $product['id_product'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['discount'] ?></td>
                        <td><?= $product['category_id'] ?></td>
                        <td><?= $product['collection_id'] ?></td>
                        <td><?= $product['first_img'] ?></td>
                        <td><?= $product['second_img'] ?></td>
                     </tr>
                  <?
                  } ?>
               </table>
               <a href="new/new_product.php" class="new">Новый товар</a>
            </div>

            <div id="categories" <?= $table == 'categories' ? "style='display: block;'" : "style='display: none;'" ?>>
               <table>
                  <tr>
                     <th colspan="2">действия</th>
                     <th>id category</th>
                     <th>name category</th>
                  </tr>
                  <?
                  $result = $conn->query("SELECT * FROM categories");
                  if ($result->num_rows) {
                     while ($row = $result->fetch_assoc()) {
                        $categories[] = $row;
                     }
                  }
                  foreach ($categories as $category) { ?>
                     <tr>
                        <td>
                           <button onclick="deleteConfirmCategory('<?= $category['id_category'] ?>')" class="delete">
                              <img src="/assets/img/layout/delete.png" alt="удалить">
                           </button>
                        </td>
                        <td>
                           <a href="edit/edit_category.php?id_category=<?= $category['id_category'] ?>" class="edit">
                              <img src="/assets/img/layout/edit.png" alt="редактировать">
                           </a>
                        </td>
                        <td><?= $category['id_category'] ?></td>
                        <td><?= $category['name_category'] ?></td>
                     </tr>
                  <?
                  } ?>
               </table>
               <a href="new/new_category.php" class="new">Новая категория</a>
            </div>

            <div id="collections" <?= $table == 'collections' ? "style='display: block;'" : "style='display: none;'" ?>>
               <table>
                  <tr>
                     <th colspan="2">действия</th>
                     <th>id collection</th>
                     <th>name collection</th>
                  </tr>
                  <?
                  $result = $conn->query("SELECT * FROM collections");
                  if ($result->num_rows) {
                     while ($row = $result->fetch_assoc()) {
                        $collections[] = $row;
                     }
                  }
                  foreach ($collections as $collection) { ?>
                     <tr>
                        <td>
                           <button onclick="deleteConfirmCollection('<?= $collection['id_collection'] ?>')" class="delete">
                              <img src="/assets/img/layout/delete.png" alt="удалить">
                           </button>
                        </td>
                        <td>
                           <a href="edit/edit_collection.php?id_collection=<?= $collection['id_collection'] ?>" class="edit">
                              <img src="/assets/img/layout/edit.png" alt="редактировать">
                           </a>
                        </td>
                        <td><?= $collection['id_collection'] ?></td>
                        <td><?= $collection['name_collection'] ?></td>
                     </tr>
                  <?
                  } ?>
               </table>
               <a href="new/new_collection.php" class="new">Новая коллекция</a>
            </div>
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