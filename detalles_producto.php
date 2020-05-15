<?php
    include('includes/verify_install.php');
    include('includes/db.php');

?>
<?php

$ids=$_GET['idep'];

include('font/head.php');
require_once 'navbar/navbar_inicio.php';
require_once 'navbar/navbar_inicio1.php';
?>

<link rel="stylesheet" href="css/style_detalle.css">  
<title>Detalles Producto</title>





<div class="b2 container-fluid">    
  <div class=" container-fluid">
            <?php       
              $sql="SELECT p.id as idpro,p.nombre AS nom_prod,p.valor,p.unidades,p.especificacion,p.estado,p.imagen,
              usuarios.nombre  AS nom_user,usuarios.email,usuarios.celular,usuarios.whatsapp,usuarios.direccion,usuarios.ciudad,
              categoria_producto.nombre as nom_catg
              FROM producto AS p        
              INNER JOIN usuarios ON usuarios.id = p.id_usuarios
              INNER JOIN categoria_producto ON categoria_producto.id= p.id_categoria_producto ";
              $result= DB::query($sql);
            ?>
            <?php
                 while($mostrar= mysqli_fetch_array($result)){
                ?>
                <?php
                    if($ids==$mostrar['idpro']){
                      ?>
                     <div class="c5 card">

                          <div class="c6 row">

                            <div class="col-xl-6 col-lg-6 col-md-12 ">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>" class="img1 img-thumbnail " alt="Responsive image"><br>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 ">
                              <div class="card-body">
                                <h5 class="card-title">Detalles del producto y proveedor</h5>
                               
                                <small class="text">Nombre :  <?php echo $mostrar['nom_prod'] ?></small><br>
                                <small class="text">Especificacion : <?php echo $mostrar['especificacion'] ?></small><br>
                                   <small class="text">Unidades : <?php echo $mostrar['unidades'] ?></small><br>
                                   <small class="text">Valor Unitario : <?php echo $mostrar['valor'] ?></small><br>
                                   <small class="text">Categoria Producto : <?php echo $mostrar['nom_catg'] ?></small><br><p></p>
                                   <small class="text">Vendedor : <?php echo $mostrar['nom_user'] ?></small><br>
                                   <small class="text">Ciudad: <?php echo $mostrar['ciudad'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</small>
                                   <small class="text">Direccion: <?php echo $mostrar['direccion'] ?></small><br>
                                   <small class="text">Correo: <?php echo $mostrar['email'] ?>&nbsp;&nbsp;&nbsp;&nbsp;</small>
                                   <small class="text">Celular: <?php echo $mostrar['celular'] ?></small><br>
                                   <small class="text">Whatsapp: <?php echo $mostrar['whatsapp'] ?> &nbsp;&nbsp;&nbsp;&nbsp;</small>
                                   <small class="text">Estado: <?php echo $mostrar['estado'] ?></small><br>
                              </div>
                            </div>
                         </div>
                        </div>
                     <?php
                    }
                    ?>
                  
               <?php
                  }
               ?>
            
            

  </div>                     
                             <!---------------- Sql Detalles del producto ------------>
            <?php       
              $sql="SELECT *from producto";
              $result= DB::query($sql);
            ?>
            <div class="b4 card-deck-fluid ">
            
                   <div class="r1 row row-cols-4">    
                 <?php
                 while($mostrar= mysqli_fetch_array($result)){
                ?>
                <?php
                    if($ids!=$mostrar['id']){
                        ?>
                      <div class="c container-fluid col-xl-3 col-lg-4  col-md-6 col-sm-9 ">    
                      <div class="card1 card border-primary">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>" class="img2 img-thumbnail " alt="Responsive image"><br>
                       
                        <div class="c2 card-body ms-4">
                              <div class="dropdown">
                                <button class="bt2 btn btn-outline " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $mostrar['nombre'] ?>
                                </button>
                                <?php  $idsp=$mostrar['id'] ?>
                                <div class="btnd  mt-1 ml-4" >
                                <a class="btn" href="detalles_producto.php?idep= <?php echo $idsp?>">Ver más detalles</a>
                                </div>
                               
                                </button>
                             
                              </div>

                        </div>
                      </div>
                     </div>
                      <?php
                    }
                      ?>
                     
                     <?php
                    }
                    ?>

               </div>

            </div>
    </div>
    
<?php
include('font/final.php');
?>
