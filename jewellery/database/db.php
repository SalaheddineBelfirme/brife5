<?php 
class db{
 static public function concet(){
    $db=new PDO("mysql:host=localhost;dbname=jewellery", "root","");
    $db->exec("set names utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    return $db;
    }
  }
?>