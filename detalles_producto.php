<?php
    include('includes/verify_install.php');
    include('includes/db.php');

?>
<?php
include('font/head.php');
?>


<link rel="stylesheet" href="css/estyle_inde.css">  
<title>Detalles Producto</title>




<div class="b2 container-fluid">
                             <!---------------- Sql Detalles del producto ------------>
            <?php       
              $sql="SELECT p.nombre AS nom_prod,p.valor,p.unidades,p.especificacion,p.estado,p.imagen,
              usuarios.nombre  AS nom_user,usuarios.email,usuarios.celular,usuarios.whatsapp,usuarios.direccion,usuarios.ciudad,
              categoria_producto.nombre as nom_catg
              
              FROM producto AS p 
              
     INNER JOIN usuarios ON usuarios.id = p.id_usuarios
     INNER JOIN categoria_producto ON categoria_producto.id= p.id_categoria_producto ";
     

              $result= DB::query($sql);
            ?>
            <div class="b4 card-deck-fluid ">
            
                   <div class="r1 row row-cols-5">    
                 <?php
                 while($mostrar= mysqli_fetch_array($result)){
                ?>

                   <div class="col ">    
                      <div class="c1 card border-primary">
                        <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>"/><br>
                        <div class="c2 card-body ms-4">
                              <div class="dropdown">
                                <button class="bt2 btn btn-outline " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $mostrar['nom_prod'] ?>
                                </button>
                                <div class="mt-1">
                                <a class="btn btn-primary" href="index.php">Inicio</a>
                                </div>
                               
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <div class="c3 card card-body">
                                   <small class="text-muted">Detalles del producto</small>
                                    <p><br>
                                    <small class="text-muted">Especificacion : <?php echo $mostrar['especificacion'] ?></small><br>
                                   <small class="text-muted">Unidades : <?php echo $mostrar['unidades'] ?></small><br>
                                   <small class="text-muted">Valor Unitario : <?php echo $mostrar['valor'] ?></small><br>
                                   <small class="text-muted">Categoria Producto : <?php echo $mostrar['nom_catg'] ?></small><br>
                                   <small class="text-muted">Vendedor : <?php echo $mostrar['nom_user'] ?></small><br>
                                   <small class="text-muted">Ciudad: <?php echo $mostrar['ciudad'] ?></small><br>
                                   <small class="text-muted">Direccion: <?php echo $mostrar['direccion'] ?></small><br>
                                   <small class="text-muted">Correo: <?php echo $mostrar['email'] ?></small><br>
                                   <small class="text-muted">Celular: <?php echo $mostrar['celular'] ?></small><br>
                                   <small class="text-muted">Whatsapp: <?php echo $mostrar['whatsapp'] ?></small><br>
                                   <small class="text-muted">Estado: <?php echo $mostrar['estado'] ?></small><br>
                                  
                                 </div>
                                </div>
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
               </div>

            </div>
    </div>
    
<?php
include('font/final.php');
?>
