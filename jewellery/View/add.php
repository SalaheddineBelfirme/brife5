<?php
require_once './Controller/prodactController.php';
add_activ();


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src ="js.js"></script>
    
    
<title>add prodact</title>
</head>
<body class="bodyaddpro">
<!-- <nav id="navbar" class="navbar nav navbar-expand-lg bg-light"> -->
        <div class="container-fluid">
            <img class="logo" src="image/logo.png" alt="">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon togle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto navlist mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link list active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list" href="shop.php">GALLERY</a>
                    </li>
                    <span class="nav-item login">
                        <!-- <svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg> -->
                        <a class="list" href="data.php">GESTION
                        </a>
                    </span>
                </ul>

            </div>
        </div>
    </nav>

<form class="formadd" id="fadd" method="POST" autocomplete="off" enctype="multipart/form-data" >
<div class="input-group mb-3">
  <!-- <span class="input-group-text" id="basic-addon1">Name</span> -->
  <input  style="font-family: inter;"   name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input  name="prix" type="text" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <!-- <span class="input-group-text" id="basic-addon2">Prix</span> -->
</div>
<div class="input-group">
  <!-- <span class="input-group-text">With textarea</span> -->
  <textarea  style="font-family: inter;"  name="description" placeholder="description" class="form-control desc" aria-label="With textarea"></textarea><br>

</div>


<div class="input-group mb-3">
  <!-- <span class="input-group-text" id="basic-addon3">IMAGE</span> -->
  <input   style="font-family: inter;" accept=".jpg,jpeg,.png" name="image" type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
<!-- <span class="input-group-text">category</span> -->
<select  style="font-family: inter;" name="category" class="form-control" name="" id="">   
          <option  style="font-family: inter;" value="">testt</option>
</select>

</div>

<div id="btnadd" class="input-group">
    <button  style="font-family: inter;" id="btnSubAdd" class="btn bg-primary submitadd btn-dark" name="submit" type="submit" >Submit</button>
 </div>
</form>

</body>

</html>