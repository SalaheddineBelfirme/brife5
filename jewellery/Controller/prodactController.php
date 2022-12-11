<?php
class prodactController {
// get all data
public function getallProducts(){
    $products=product::getall();
    return $products;
}
//get one  proudct
public function getOneProduct(){
    $products=product::getall($_POST['id']);
    return $products;
}
//add product
public function addProducts(){
    if(isset($_POST["submit"])){
        $FileName=$_FILES['image']['name'];
        $imageEx=explode('.',$FileName);
        $imageEx=strtolower(end($imageEx));
        $newImageName=uniqid();
        $newImageName.='.'. $imageEx;
        move_uploaded_file($_FILES['image']['tmp_name'],'./public/images/'.$newImageName);
        $products=product::addp($_POST['name'],$_POST['description'],$_POST['prix'],$newImageName,$_POST['category']);
        //   return $products;
    }
}
// update product
public function updateProducts(){
    if(isset($_POST["submitadd"])){
        $products=product::updateP($_POST['name'],$_POST['description'],$_POST['prixx'],$_POST['category'],$_POST['id']);
        //   return $products;
    }
}


}
// get all data
function getprods() {
    $prod = new prodactController();
    return $prod->getallProducts();
}

//activ  get one product
function getprod() {
    $prod = new prodactController();
    return $prod->getOneProduct();
}
function add_activ(){
    $prod = new prodactController();
    $prod->addProducts();
}

// activ fucntion updateprodact
function update_activ(){
    $prod = new prodactController();
    $prod->updateProducts();
}
?>