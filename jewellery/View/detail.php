<?php require_once './Controller/prodactController.php'; ?>
<body>
<div id="dit" class="card mb-3 " style="max-width: 50% ;margin:auto">
  <img  style="height: 200px; width:200px margin:auto "  src="./public/images/<?php echo $t[0]['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"></h5><?php echo $t[0]['name'] ?>
    <p class="card-text"><?php echo $t[0]['description'] ?></p>
    <p class="card-text"><small class="text-muted"><?php echo $t[0]['prix'] ?> DH</small></p>
  </div>
</div>

</body>