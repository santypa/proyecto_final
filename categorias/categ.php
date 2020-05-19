<?php
$pagina= isset($_GET['p']) ? strtolower($_GET['p']) : "categ" ;
include ('css/style.php');
?>
<div class="car  container-fluid">
            <?php    
           
              $sql="SELECT p.id as idpr, p.nombre AS nom_pro,p.unidades,p.valor,p.imagen,p.especificacion,categoria_producto.id AS id_cat ,categoria_producto.nombre AS nomb_catg 
              FROM producto AS p             
              INNER JOIN categoria_producto ON categoria_producto.id= p.id_categoria_producto
              ORDER BY p.id DESC ";
              $result= DB::query($sql);

            ?>
            <div class="card-deck-fluid ">
      
           
                   <div class="row ">    
                 <?php
                 $productos=0;
                 while($mostrar= mysqli_fetch_array($result)){
                ?>
                      
                     <?php
                        if($mostrar['id_cat']==$pagina){
                            ?> 
                            
                            <div class="cl1 container-fluid col-xl-3 col-lg-4  col-md-6 col-sm-9 ">    
                            <div class="card1 border-primary">
                                <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>" class="img1 img-thumbnail " alt="Responsive image"><br>
                              <div class="card-body ms-4">
                                    <div class="dropdown">
                                      <button class="btn btn-outline " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <?php echo $mostrar['nom_pro'] ?>
                                      </button>
                                      <?php 
                                        $idpe=$mostrar['idpr'];
                                      ?>
                                      <div class="btnd  mt-1 ml-4" >
                                      <a class="btn" href="detalles_producto.php?idep= <?php echo $idpe?>">Ver más detalles </a>
                                      </div>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <div class="card card-body">
                                         <small class="text-muted">Caracteristicas:</small>
                                          <p><?php echo $mostrar['especificacion'] ?><br>
                                        <small class="text-muted">Unidades : <?php echo $mostrar['unidades'] ?></small><br>
                                         <small class="text-muted">Valor Unitario : <?php echo $mostrar['valor'] ?></small><br>
                                         <small class="text-muted">Categoria : <?php echo $mostrar['nomb_catg'] ?></small><br></p>
                                     </div>
                                   </div>
                                </div>
                              </div>
                            </div>
                           </div>         
                         
                            <?php
                            $productos=2;
                        } else if ($pagina=='categ'){
                                
                            ?> 
                            <div class="cl1 col-xl-3 col-lg-4  col-md-6 col-sm-9 ">    
                            <div class="card1 border-primary">
  
                             <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>" class="img1 img-thumbnail " alt="Responsive image"><br>

                            <div class="card-body ms-4">
                                    <div class="dropdown">
                                      <button class="btn btn-outline " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <?php echo $mostrar['nom_pro'] ?>
                                      </button>
                                      <?php 
                                        $idpe=$mostrar['idpr'];
                                      ?>
                                      <div class="btnd  mt-1 ml-4" >
                                      <a class="btn" href="detalles_producto.php?idep= <?php echo $idpe?>">Ver más detalles</a>
                                      </div>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <div class="card card-body">
                                         <small class="text-muted">Caracteristicas:</small>
                                          <p><?php echo $mostrar['especificacion'] ?><br>
                                        <small class="text-muted">Unidades : <?php echo $mostrar['unidades'] ?></small><br>
                                         <small class="text-muted">Valor Unitario : <?php echo $mostrar['valor'] ?></small><br>
                                         <small class="text-muted">Categoria : <?php echo $mostrar['nomb_catg'] ?></small><br></p>
                                     </div>
                                   </div>
                                </div>
                              </div>
                            </div>
                           </div>         
                           <style>
                                  .img{
                                  
                                      width: 100%;
                                      height: 50%;
                                      border-radius:10px;
                                      border-color:blue;
                                  }
                           </style>
                            <?php
                            $productos=2;
                        }
                        
                     
                     ?>
                  
               <?php
                  }
                  if($productos!=2){
                      echo "No hay productos de esa categoria por el momento ... sorry";
                      ?>
                      
                      <?php
                  }
                  
               ?>
               </div>

            </div>
    </div>