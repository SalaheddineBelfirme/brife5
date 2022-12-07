<?php 

class homeController{
    public function index($page){
        include('View/'.$page.'.php');
    }
}
?>
