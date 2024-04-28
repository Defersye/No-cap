<?php

namespace models;

class ProductCardModel
{
   protected $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }
   public function getProduct($data)
   {
      $query = $this->conn->query("SELECT * FROM products 
      JOIN categories ON category_id = id_category 
      JOIN collections ON collection_id = id_collection WHERE id_product = $data");

      $answer = array();
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answer = $row;
         }
      }
      return $answer;
   }
}
