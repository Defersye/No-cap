<?php
include_once "connect.php";
if (isset($_GET['table'])) {
   $table = $_GET['table'];
} else {
   $table = 'users';
}
?>
<div class="table-names">
   <button id="usersBtn" onclick="switchTables('users')" class="table-name <?= $table == 'users' ? "active" : "" ?>">Users</button>
   <button id="productsBtn" onclick="switchTables('products')" class="table-name <?= $table == 'products' ? "active" : "" ?>">Products</button>
   <button id="categoriesBtn" onclick="switchTables('categories')" class="table-name <?= $table == 'categories' ? "active" : "" ?>">Categories</button>
   <button id="collectionsBtn" onclick="switchTables('collections')" class="table-name <?= $table == 'collections' ? "active" : "" ?>">Collections</button>
</div>

<div id="users" <?= $table == 'users' ? "style='display: block;'" : "style='display: none;'" ?> class="table_container">
   <table>
      <tr>
         <th>//</th>
         <th>id</th>
         <th>full name</th>
         <th>login</th>
         <th>email</th>
         <th>password</th>
         <th>avatar</th>
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
            <td><?= $user['id_user'] ?></td>
            <td><?= $user['full_name'] ?></td>
            <td><?= $user['login'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>********</td>
            <td><?= $user['avatar'] ?></td>
         </tr>
      <?
      } ?>
   </table>
</div>

<div id="products" <?= $table == 'products' ? "style='display: block;'" : "style='display: none;'" ?> class="table_container">
   <table>
      <tr>
         <th colspan="2">actions</th>
         <th>id</th>
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
               <a href="database/edit/edit_product.php?id_product=<?= $product['id_product'] ?>" class="edit">
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
   <a href="database/new/new_product.php" class="new">New product</a>
</div>

<div id="categories" <?= $table == 'categories' ? "style='display: block;'" : "style='display: none;'" ?> class="table_container">
   <table>
      <tr>
         <th colspan="2">actions</th>
         <th>id</th>
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
               <a href="database/edit/edit_category.php?id_category=<?= $category['id_category'] ?>" class="edit">
                  <img src="/assets/img/layout/edit.png" alt="редактировать">
               </a>
            </td>
            <td><?= $category['id_category'] ?></td>
            <td><?= $category['name_category'] ?></td>
         </tr>
      <?
      } ?>
   </table>
   <a href="database/new/new_category.php" class="new">New category</a>
</div>

<div id="collections" <?= $table == 'collections' ? "style='display: block;'" : "style='display: none;'" ?> class="table_container">
   <table>
      <tr>
         <th colspan="2">actions</th>
         <th>id</th>
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
               <a href="database/edit/edit_collection.php?id_collection=<?= $collection['id_collection'] ?>" class="edit">
                  <img src="/assets/img/layout/edit.png" alt="редактировать">
               </a>
            </td>
            <td><?= $collection['id_collection'] ?></td>
            <td><?= $collection['name_collection'] ?></td>
         </tr>
      <?
      } ?>
   </table>
   <a href="database/new/new_collection.php" class="new">New collection</a>
</div>
<script src="database/admin.js"></script>