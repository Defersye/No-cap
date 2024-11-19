<?php

namespace models;

class HomeModel
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
}
