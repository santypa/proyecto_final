<?php

$buscar=$buscando;

 $sql = "SELECT p.id as idpr, p.nombre AS nom_pro,p.unidades,p.valor,p.imagen,p.especificacion,categoria_producto.id AS id_cat ,categoria_producto.nombre AS nomb_catg 
 FROM producto AS p             
 INNER JOIN categoria_producto ON categoria_producto.id= p.id_categoria_producto WHERE (p.nombre LIKE '$buscar%')";

$result = DB::query($sql); 
$si=0;

while ($mostrar = mysqli_fetch_array($result)) {

  $nompr = $mostrar['nom_pro'];
 
 
  include('categorias/mostar.php');
  $si++;
    
        /*      $nompr = $mostrar['nom_pro'];

            $log = strlen($buscando);
            $st = $log;
            $sr = $log + 1;
            for ($b = 0; $b <= $log; $b++) {
              $te[$b] = substr($buscando, $st - $log, $sr - $log);
              $st++;
            }

            $lgp = strlen($nompr);
            $sp = $lgp;
            $sp1 = $lgp + 1;
            for ($b = 0; $b <= $lgp; $b++) {
              $ta[$b] = substr($nompr, $sp - $lgp, $sp1 - $lgp);
              $sp++;
            }
            $ver = 0;

            $te1 = strtoupper($te[0]);
            $te2 = strtolower($te[0]);


            if ($ta[0] == $te[0] || $ta[0] == $te1 ||$ta[0] == $te2  ) {
              include('categorias/mostar.php');

            }else{
             
            } */

            /*  echo $ta[0];
            echo $te[0];   */
}
 
if($si<1){
  ?> <img src="img/error.jpg" class="d" alt="...">
        
  <style>
    .d{
      
      width:100%;
      height:50%;
    }
  </style>
  <?php

}
$si=0;
?>


