<?php
class prodactController {
// get all data
public function getallProducts(){
    $products=product::getall();
    return $products;
}
//get one  proudct
public function getOneProduct(){
    $products=product::getall($_POST['id_ed']);
    return $products;
}
public function getallcategory(){
    $products=product::getallCate();
    return $products;
}
//get one  proudct
public function getOnecategory(){
    $products=product::getallCate($_POST['id_ed']);
    return $products;
}
//add product
public function addProducts(){
  
        $FileName=$_FILES['image']['name'];
        $imageEx=explode('.',$FileName);
        $imageEx=strtolower(end($imageEx));
        $newImageName=uniqid();
        $newImageName.='.'. $imageEx;
        move_uploaded_file($_FILES['image']['tmp_name'],'./public/images/'.$newImageName);
       
        $products=product::addp($_POST['name'],$_POST['description'],$_POST['prix'],$newImageName,$_POST['category']);

}
public function deleteP(){
  echo  $_POST['id_de'];
   product::deletep($_POST['id_de']);
  
    
}

// update product
public function updateProducts(){
   
   
        if(($_FILES['image']['size']>0)){
            $FileName=$_FILES['image']['name'];
            $imageEx=explode('.',$FileName);
            $imageEx=strtolower(end($imageEx));
            $newImageName=uniqid();
            $newImageName.='.'. $imageEx;
            move_uploaded_file($_FILES['image']['tmp_name'],'./public/images/'.$newImageName);
            $products=product::updatePI($_POST['name'],$_POST['description'],$_POST['prixx'],$_POST['category'],$newImageName,$_POST['id']);
         
        }else{
            $products=product::updateP($_POST['name'],$_POST['description'],$_POST['prixx'],$_POST['category'],$_POST['id']);
        }
     
        
    
}






}
// active get all data

    $prod = new prodactController();
     $prods= $prod->getallProducts();
     $categs= $prod->getallcategory();

//activ  get one product for update
if(isset($_POST["id_ed"])){
    $prod = new prodactController();
    $t= $prod->getOneProduct();

}
if(isset($_POST["subdit"])){
    $prod = new prodactController();
    $t= $prod->getOneProduct();

}



if(isset($_POST["submit"])){
    
    $prod = new prodactController();
    echo $prod;
    $prod->addProducts();
    header('Location:data');
}

// activ fucntion updateprodact
    if(isset($_POST["submitadd"])){
    $prod = new prodactController();
    $prod->updateProducts();
    header('Location:data');

}
if(isset($_POST['id_de'])){
    $prod = new prodactController();
    $prod->deleteP();
    header('Location:data');
    
}
?>