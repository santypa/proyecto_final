<?php

include('includes/verify_install.php');
include('includes/db.php');

SESSION_START();
if (isset($_SESSION['id'])) {
  $id_user = $_SESSION['id'];
} else {
  $id_user = 0;
}

?>
<link rel="stylesheet" href="css/style_miprod.css">
<title>Mi Perfil</title>

<?php

include('font/head.php');
?>

<nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg sticky-top">


  <a class="navbar-brand" href="index.php">
    <img src="img/intel.png" width="40" height="40" class="d-inline-block align-top" alt="logo de intel">
    Prueba
  </a>  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


 <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <div class="navbar-nav text-center">
    <a class="nav-item nav-link active" href="#">Inicio</a>
    <a class="nav-item nav-link" href="#">Categoria</a>
    <a class="nav-item nav-link" href="#">Vender</a>
    <a class="nav-item nav-link" href="#">Mis compras</a>  
  </div>
 </div>
</nav>

<div class="a2 container mx-auto card">

  <h3 class="mx-auto">Mi Perfil </h3> <br>
  <div class="container mx-auto">
    <?php
    $sql = "SELECT * FROM usuarios ";
    $result = DB::query($sql);
    ?>

    <?php
    while ($mostrar = mysqli_fetch_array($result)) {
    ?>
      <?php
      if ($id_user == $mostrar['id']) {
      ?>
        <div class="a2 container mx-auto card">
          <div class="container mx-auto">
            <img class="mx-auto  card" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['img']) ?>" /><br>
          </div>
          <div class="container mx-auto ml-5 mt-3 mb-4 prin">
            <table class="table prin table-hover">

              <tr>
                <td><small class="text-muted">Nombre : <?php echo $mostrar['nombre'] ?></small></td>
              </tr>
              <tr>
                <td><small class="text-muted">Email : <?php echo $mostrar['email'] ?></small></td>
              </tr>
              <tr>
                <td><small class="text-muted">Password : <?php echo $mostrar['password'] ?></small></td>
              </tr>
              <tr>
                <td><small class="text-muted">Celular : <?php echo $mostrar['celular'] ?></small></td>
              </tr>
              <tr>
                <td><small class="text-muted">Whatsapp : <?php echo $mostrar['whatsapp'] ?></small></td>
              </tr>
              <tr>
                <td><small class="text-muted">Direccion : <?php echo $mostrar['direccion'] ?></small></td>
              </tr>
              <tr>
                <td><small class="text-muted">Ciudad : <?php echo $mostrar['ciudad'] ?></small></td>
              </tr>

            </table>

          </div>


          <style>
            .img {
              position: relative;
              top: 10px;
              left: 325px;
              padding: 2px;
              width: 220px;
              height: 200px;
              border-radius: 10px;
              border-color: blue;
            }

            .center-text {
              color: red
            }
          </style>
          <th>
            <a class="btn btn-primary" href="editar_perfil.php?id=<?= $mostrar['id'] ?>" class="xd">Modificar</a>
          </th>
        </div>
  </div>
</div>
<?php
      }
?>
<?php
    }
?>
<?php
include('font/final.php');

?>