<?php 
class admin extends db {
  static  public function login($email,$pass){
        $stm=db::concet()->prepare("SELECT * FROM `admin` WHERE email='$email' AND password='$pass'");
        $stm->execute();  
        
        return $stm->fetchAll();
        
    }
}

?>