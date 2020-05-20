<?php
include('css/style.php');


$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : "categ";

if (isset($_POST['buscar']) != '') {
  $buscando = $_POST['buscar'];
  $pagina = '13';
}

?>

<div class="car  container-fluid">
  <?php
  $sqll = "SELECT COUNT(*) AS total_productos FROM producto";
  $result1 = DB::query($sqll);
  $result_query = mysqli_fetch_array($result1);
  $total_registro = $result_query['total_productos'];

  $por_paginas = 4;
  if (empty($_GET['pagin'])) {

    $por_pagina = 1;
  } else {
    $por_pagina = $_GET['pagin'];
  }
  $desde = ($por_pagina - 1) * $por_paginas;
  $total_paginas = ceil($total_registro / $por_paginas);

  $sql = "SELECT p.id as idpr, p.nombre AS nom_pro,p.unidades,p.valor,p.imagen,p.especificacion,categoria_producto.id AS id_cat ,categoria_producto.nombre AS nomb_catg 
              FROM producto AS p             
              INNER JOIN categoria_producto ON categoria_producto.id= p.id_categoria_producto ORDER BY p.id ASC 
              LIMIT $desde,$por_paginas
              ";
  $result = DB::query($sql);

  ?>
  <div class="card-deck-fluid ">


    <div class="row ">
      <?php
      $ve = 0;
      $productos = 0;
      while ($mostrar = mysqli_fetch_array($result)) {
      ?>

        <?php

        if ($mostrar['id_cat'] == $pagina) {
          include('categorias/mostar.php');
          $productos = 2;
        } else if ($pagina == 'categ') {
          include('categorias/mostar.php');
          $productos = 2;
        } else if ($pagina == '13') {

          if ($buscando == '') {
            include('categorias/mostar.php');
          } else {
            $nompr = $mostrar['nom_pro'];

            $log = strlen($buscando);
            $st = $log;
            $sr = $log + 1;
            for ($b = 0; $b <= $log; $b++) {
              $te[$b] = substr($buscando, $st - $log, $sr - $log);
              $st++;
            }

            /* for($a=0;$a<=$log;$a++){
                              echo $te[$a]."<br>";
                            }
 */
            $lgp = strlen($nompr);
            $sp = $lgp;
            $sp1 = $lgp + 1;
            for ($b = 0; $b <= $lgp; $b++) {
              $ta[$b] = substr($nompr, $sp - $lgp, $sp1 - $lgp);
              $sp++;
            }
            $ver = 0;
            /* for($a=0;$a<=$lgp;$a++){
                              if($ta[$a]==$te[0]){
                                $ver++;
                              }
                             }
                             if($ver>2){
                              include ('categorias/mostar.php');
                             }else{
                               $ver=0;
                             } */
            $te1 = strtoupper($te[0]);

            if ($ta[0] == $te[0] || $ta[0] == $te1) {
              include('categorias/mostar.php');
            }
            /*  echo $ta[0];
                             echo $te[0]; */
          }

          $productos = "2";
        }
        ?>

      <?php
      }
      if ($productos != 2) {
        echo "No hay productos de esa categoria por el momento ... sorry";
      ?>

      <?php
      }

      ?>
    </div>

  </div>

</div>
<div class="paginador">
  <ul>
    <li class="page-item"><a class=" page-link" href="?pagin=<?php echo  $por_pagina - 1 ?>">
        <<</a> </li> <?php
                      for ($i = 1; $i <= $total_paginas; $i++) {
                        if ($i == $por_pagina) {
                          echo '<li class="page-item page-link selector ">' . $i . '</li>';
                        } else {
                          echo '<li><a class="page-item page-link " href="?pagin=' . $i . '">' . $i . '</a></li>';
                        }
                      }
                      ?> <li class="page-item"><a class=" page-link  " href=" ?pagin=<?php echo  $por_pagina + 1 ?>">>></a></li>
  </ul>
</div>