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
<link rel="stylesheet" href="css/style_per.css">
<title>Mi Perfil</title>

<?php

include('font/head.php');

require_once 'navbar/navbar_inicio.php';
require_once 'navbar/navbar_inicio1.php';

?>



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
        <div class="container mx-auto card">

        <?php echo '<img  class="img1 mx-auto  card"  src ="'.$mostrar['img'].'" width="200px" height="40%">' ?> <!-- Mostrar Imagen -->
          
          
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