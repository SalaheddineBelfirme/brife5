
<?php 
require_once './Controller/prodactController.php';

?>

<body>

  <div class="container">
    <div class="col-md-12 mb-5">
      <div class="card">
        <div class="card-body bg-light">
        <a href="add">
          <i class="fas fa-plus"></i>
        </a>

        <table class="table table-hover ">
  <thead>
    <tr>
      <th>name</th>
      <th>prix</th>
      <th>Action</th>   
      <th>ctgoery</th>
      <th>description</th>
    </tr>
  </thead>
  <tbody>

    <?php  foreach(getprods() as $user ){ ?>
    <tr>
      <td><?php echo $user[0]
      ?'<span class="badge bg-success">Success</span>'
      :
      '<span class="badge bg-danger">Danger</span>';
      ?></td>
      <td><?php echo $user[1]; ?></td>


      <td class="d-flex flex-row ">
        <form action="update" method="post">
        <input type="hidden" name="id" value="<?php echo $user[0]; ?>">
        <button  class="btn btn-warning"><i class="fa fa-edit"></i></button>
      </form>
      <form action="login " method="post">
        <input type="hidden" name="id" value="<?php echo $user[0]; ?>">
        <button  class="btn btn-danger"><i class="fa fa-trash"></i></button>
      </form>
    </td>
    </tr>
    <?php }?>
  </tbody>
  </table>
        </div>
      </div>
    </div>
  </div>

</body>

