<?php

namespace models;

class PagesModel
{
   public $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }

   public function contactsSend($name, $email, $message)
   {
      $prequery = mysqli_query($this->conn, "SELECT * FROM contacts");
      if ($prequery->num_rows) {
         while ($row = $prequery->fetch_assoc()) {
            if ($row['email_contact'] == $email && $row['text_contact'] == $message) {
               return "<p class='contacts_message red'>You have already sent this message.</p>";
            }
         }
      }
      $query = mysqli_query($this->conn, "INSERT INTO contacts (name_contact, email_contact, text_contact) VALUES ('$name', '$email', '$message')");
      return "<p class='contacts_message'>Message sent successfully. Do it again, if you need to!</p>";
   }

   public function order()
   {
      $query = mysqli_query($this->conn, "SELECT * FROM products");
      return $query;
   }
}
