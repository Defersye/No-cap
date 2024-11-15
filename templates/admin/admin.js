window.onload(switchTables());

function switchTables(table) {
   let usersTable = document.getElementById("users").style;
   let productsTable = document.getElementById("products").style;
   let categoriesTable = document.getElementById("categories").style;
   let collectionsTable = document.getElementById("collections").style;

   let usersBtn = document.getElementById("usersBtn");
   let productsBtn = document.getElementById("productsBtn");
   let categoriesBtn = document.getElementById("categoriesBtn");
   let collectionsBtn = document.getElementById("collectionsBtn");

   switch (table) {
      case "users":
         usersTable.display = "block";
         productsTable.display = "none";
         categoriesTable.display = "none";
         collectionsTable.display = "none";

         usersBtn.classList.add("active");
         productsBtn.classList.remove("active");
         categoriesBtn.classList.remove("active");
         collectionsBtn.classList.remove("active");
         break;
      case "products":
         usersTable.display = "none";
         productsTable.display = "block";
         categoriesTable.display = "none";
         collectionsTable.display = "none";

         usersBtn.classList.remove("active");
         productsBtn.classList.add("active");
         categoriesBtn.classList.remove("active");
         collectionsBtn.classList.remove("active");
         break;
      case "categories":
         usersTable.display = "none";
         productsTable.display = "none";
         categoriesTable.display = "block";
         collectionsTable.display = "none";

         usersBtn.classList.remove("active");
         productsBtn.classList.remove("active");
         categoriesBtn.classList.add("active");
         collectionsBtn.classList.remove("active");
         break;
      case "collections":
         usersTable.display = "none";
         productsTable.display = "none";
         categoriesTable.display = "none";
         collectionsTable.display = "block";

         usersBtn.classList.remove("active");
         productsBtn.classList.remove("active");
         categoriesBtn.classList.remove("active");
         collectionsBtn.classList.add("active");
         break;
   }
}

function deleteConfirmUser(id) {
   if (confirm("Вы уверены, что хотите удалить запись?")) {
      window.location.href = "delete/delete_user.php?id_user=" + id;
   }
}
function deleteConfirmProduct(id) {
   if (confirm("Вы уверены, что хотите удалить запись?")) {
      window.location.href = "delete/delete_product.php?id_product=" + id;
   }
}
function deleteConfirmCategory(id) {
   if (confirm("Вы уверены, что хотите удалить запись?")) {
      window.location.href = "delete/delete_category.php?id_category=" + id;
   }
}
function deleteConfirmCollection(id) {
   if (confirm("Вы уверены, что хотите удалить запись?")) {
      window.location.href = "delete/delete_collection.php?id_collection=" + id;
   }
}
