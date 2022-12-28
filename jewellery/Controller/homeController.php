<?php 
if($_SESSION['login']==1){
    $bol="log out ";
    $hrf="http://localhost/brife5/jewellery/logout";
   $data="block";

    }
    else{
      echo" <script> alert('ddddd')</script>";
      $bol= "log in";
      $hrf="http://localhost/brife5/jewellery/login";
      $data="none";
    }



class homeController{
    public function index($page){
        include('View/'.$page.'.php');
    }
}
?>
