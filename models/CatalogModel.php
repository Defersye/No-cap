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
}
