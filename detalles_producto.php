<?php
    include('includes/verify_install.php');
    include('includes/db.php');

?>
<?php
include('font/head.php');

$ids=$_GET['idep'];
?>


<link rel="stylesheet" href="css/style_detaller.css">  
<title>Detalles Producto</title>


<ul class="navigation">
    <div class="a11 container">
       <li><a href="index.php" class="item animated infinite pulse delay"><h1>Inicio</h1></a></li>
    </div>
</ul>



<div class="b2 container">    
  <div class="c4 container">
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
                     <div class="c5 card mb-3" style="max-width: 540px;">
                          <div class="c6 row no-gutters">
                            <div class="col-md-4">
                            <img class="aimg" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>"/><br>
                            </div>
                            <div class="col-md-8">
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
                      <div class="col ">    
                      <div class="c1 card border-primary">
                        <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>"/><br>
                        <div class="c2 card-body ms-4">
                              <div class="dropdown">
                                <button class="bt2 btn btn-outline " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $mostrar['nombre'] ?>
                                </button>
                                <div class=" ml-4" >
                                <?php  $idsp=$mostrar['id'] ?>
                                <a class="btn btn-success " href="detalles_producto.php?idep=<?php echo $idsp?>">Ver más detalles</a>
                                </div>
                               
                                </button>
                             
                              </div>

                        </div>
                      </div>
                     </div>
                               
                     <style>
                            .img{
                              
                                position: relative;
                                top:10px;
                                left: 7px;
                                padding: 2px;
                                width: 220px;
                                height: 200px;
                                border-radius:10px;
                                border-color:blue;
                            }
                     </style>

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
