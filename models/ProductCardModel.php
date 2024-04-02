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
      $query = $this->conn->query("SELECT id, name, description, price, discount,first_img, name_category, name_collection FROM products 
      JOIN categories ON category_id = id_category 
      JOIN collections ON collection_id = id_collection WHERE id = $data");

      $answer = array();
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answer = $row;
         }
      }
      return $answer;
   }
}