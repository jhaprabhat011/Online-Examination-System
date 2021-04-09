<?php 
//development connection
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "cee_db";
// $conn = null;

//remote connection
$host = "remotemysql.com";
$user = "zwAgsoqvy3";
$pass = "f9fNJYFq3d";
$db   = "zwAgsoqvy3";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>
