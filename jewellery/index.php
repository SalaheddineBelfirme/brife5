<?php
 require_once './autoloud.php';
 $pages=["home","update","add","login"];
 $cll=new homeController;
 if(isset($_GET['page'])){
   
    if(in_array($_GET['page'],$pages)){

        $page=$_GET['page'];
        
        $cll->index($page);

    }else{
        echo"sss";
        include_once("View/includess/404.php");
    }
}
else{
    $cll->index("home");
}