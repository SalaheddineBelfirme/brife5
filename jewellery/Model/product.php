<?php

    class product{
 static function getall($w=null){
    $qury='SELECT  products.* ,categorie.* FROM products INNER JOIN categorie WHERE products.id_c=categorie.id_c ';
    if($w==null){
        $data=db::concet()->prepare($qury);
    }else{
      
       $qury=sprintf($qury.'AND id_p=%d',$w);
       $data=db::concet()->prepare($qury);
    }
    

   $data->execute();  
   return $data->fetchAll();
  //  $data->close();
   $data=null;
   }

   static function getallCate($w=null){
      $qury='SELECT  products.* ,categorie.* FROM products INNER JOIN categorie WHERE products.id_c=categorie.id_c ';
      if($w==null){
          $data=db::concet()->prepare($qury);
      }else{
        
         $qury=sprintf($qury.'AND id_p=%d',$w);
         $data=db::concet()->prepare($qury);
      }
     $data->execute();  
     return $data->fetchAll();
    //  $data->close();
     $data=null;
     }
//add prodact 
   static function addp($name,$description,$prix,$image,$id_c){
    $data=db::concet()->prepare("INSERT INTO `products`(`id_p`, `prix`, `name`, `description`,`image`, `id_c`) VALUES ('','$prix','$name','$description','$image',1)");
    $data->execute();  
    
   }



// update prodact

static function updateP($name,$description,$prix,$id_c,$id){
   $data=db::concet()->prepare("UPDATE `products` SET `prix`='$prix',`name`='$name',`description`='$description',`id_c`='$id_c' WHERE `id_p`='$id'");
   $data->execute();  
   
  }
     }


     