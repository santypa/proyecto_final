<?php
    include('includes/verify_install.php');
     include('includes/db.php');
     
  //  $result= mysqli_query($con,$sql);
  SESSION_START();
        if(isset($_SESSION['id'])){
          $ides=$_SESSION['id'];
        }else{
          $ides=0;
        }
?>
  
<link rel="stylesheet" href="css/style_mispro.css">  

<title>MIS PRODUCTOS PARA LA VENTA</title>
<?php
include('font/head.php');
require_once 'navbar/navbar_inicio.php';
?>
<a class="nav-item nav-link active"  href="vender.php"> <h3> Crear Producto</h3> </a>
<?php
require_once 'navbar/navbar_inicio1.php';
?>



<div class="con container-fluid col-sm-11">     

        <h2 class="animated infinite pulse delay">Poductos Agregados </h2> <br>
       
    <div class="c2 container">
            <?php       
              $sql="SELECT * FROM producto ";
              $result= DB::query($sql);
            ?>
                 <?php
                 while($mostrar= mysqli_fetch_array($result)){
                ?>

                     <?php
                      if($ides==$mostrar['id_usuarios']){
                        ?>
                        <?php
                          switch ($mostrar['id_categoria_producto']){
                            case "1": $cat="vehiculos";  break;
                            case "2": $cat="Tecnologia";   break;
                            case "3": $cat="Hogar y Electrodomesticos";   break;
                            case "4": $cat="Deportes";   break;
                            case "5": $cat="Belleza y Cuidado Personal";   break;
                            case "6": $cat="Accesorios";   break;
                            case "7": $cat="Juguetes";   break;
                            case "8": $cat="Herramientas";   break;
                            case "9": $cat="Instrumentos Musicales";   break;
                            case "10": $cat="Moda";   break;
                            case "11": $cat="Inmuebles";   break;
                              }

                              
                        ?>
                    
                    
                      <div class="cont2 row">
                           <div class="cont col-xl-5 col-lg-5  col-md-6 col-sm-12  ">
                         
                                 
                                 <?php echo '<img  class="img1 " src ="'.$mostrar['imagen'].'" width="100px" height="200px">' ?><!-- Mostrar imagen -->
                            
                            </div>
                          <div class="cont col-xl-7 col-lg-7  col-md-6 col-sm-12 ">
                              <div class="card-body mt-1 ml-4">
                                <h5 class="card-title"><?php echo $mostrar['nombre'] ?><br> <small class="text-muted">caracteristicas:</small></h5>
                                <?php echo $mostrar['especificacion'] ?><br>
                                   <small class="text-muted">Unidades : <?php echo $mostrar['unidades'] ?></small><br>
                                   <small class="text-muted">Valor Unitario : <?php echo $mostrar['valor'] ?></small><br>
                                   <small class="text-muted">Categoria Producto : <?php echo $cat ?></small>
                               </div>
                         </div>
                      </div> 
                    
                    <br>


<!------------------------------- ESTADO - EDITAR -ELIMINAR --------------------------------------->
                      
              <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
               
                <?php  if($mostrar['estado'] == "activo"){  ?>
                <th>
                       <a class="btn btn-secondary" href="crear_producto.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>" class="ini">Inactivar</a>
                </th>
                        
                    <?php  }else{  ?>

                    <th>
                          <a class="btn btn-success" href="crear_producto.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    </th>
                       
                    <?php  }  ?>
                    <th>
                         <a  class="btn btn-primary"href="editar_producto.php?id=<?= $mostrar['id']?>" class="xd">Editar</a>           
                    </th>
                    <th>
                          <a  class="btn btn-danger"href="eliminar_producto.php?id=<?= $mostrar['id']?>" class="delet">Eliminar</a>
                    </th>


<!------------------------------- ESTADO - EDITAR -ELIMINAR --------------------------------------->

                        <?php
                      }                   
                  }
               ?>
               
    </div>
</div>
  



<?php
include('font/final.php');
?>