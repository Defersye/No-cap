<?php

namespace config;

class DBConnect
{
   private static $instance;
   private static $connect;

   private function __construct()
   {
      self::$connect = mysqli_connect('localhost', 'root', '', 'no-cap') or die("The connection to the database cannot be established: " . mysqli_connect_error());
      mysqli_query(self::$connect, 'SET names "utf8"');
   }

   public static function getInstance()
   {
      if (self::$instance instanceof self) {
         return self::$instance;
      }
      return self::$instance = new self;
   }

   public function getConnect()
   {
      return self::$connect;
   }

   private function __clone()
   {
   }
}
