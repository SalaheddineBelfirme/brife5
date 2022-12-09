<?php
include_once './View/includess/hedre.php';
 require_once './autoloud.php';
 $pages=["home","update","add","about","login","data"];
 $cll=new homeController;
 if(isset($_GET['page'])){
   
    if(in_array($_GET['page'],$pages)){

        $page=$_GET['page'];
        
        $cll->index($page);

    }else{
      
        include_once("View/includess/404.php");
    }
}
else{
    $cll->index("home");
}
include_once './View/includess/foter.php';
?>