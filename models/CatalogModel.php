<?php

namespace models;

class CatalogModel
{
   public $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }
   public function getProducts()
   {
      $query = mysqli_query($this->conn, "SELECT * FROM products, collections WHERE collection_id = id_collection");
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answers[] = $row;
         }
      }
      return $answers;
   }
   function getSearch($search)
   {
      if (!empty($search)) {
         $sql = "SELECT * FROM products, collections WHERE collection_id = id_collection AND LOWER(name) LIKE LOWER('%$search%')";
      }
      $query = $this->conn->query($sql);
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answer[] = $row;
         }
      }
      if (isset($answer)) {
         return $answer;
      } else {
         return null;
      }
   }
   function getCategory()
   {
      $query = $this->conn->query("SELECT * FROM categories");

      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answer[] = $row;
         }
      }
      return $answer;
   }
   function getCollection()
   {
      $query = $this->conn->query("SELECT * FROM collections");

      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answer[] = $row;
         }
      }
      return $answer;
   }
   function getFilters($category, $collection, $discount)
   {
      $answer = [];
      $sql = "SELECT * FROM products, collections WHERE collection_id = id_collection";
      if (!empty($category) && $category != "Any") {
         $sql .= " AND category_id = $category";
      }
      if (!empty($collection) && $collection != "Any") {
         $sql .= " AND collection_id = $collection";
      }
      if (!empty($discount) && $discount != null) {
         $sql .= " AND discount > 0";
      }
      $query = $this->conn->query($sql);
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answer[] = $row;
         }
      }
      return $answer;
   }
}
