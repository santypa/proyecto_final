             
                            <div class="cl1 col-xl-3 col-lg-4  col-md-6 col-sm-9 ">
                              <div class="card1 border-primary">
                                <div class="container mx-auto card">
                                  <?php echo '<img  class="img1 " src ="' . $mostrar['imagen'] . '" mx-auto">' ?>
                                </div>

                                <div class="card-body ms-4">
                                  <div class="dropdown">
                                    <button class="btn btn-outline " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <?php echo $mostrar['nom_pro'] ?>
                                    </button>
                                    <?php
                                    $idpe = $mostrar['idpr'];
                                    ?>

                                    <div class="btnd  mt-1 ml-4">
                                      <a class="btn" href="detalles_producto.php?idep= <?php echo $idpe ?>">Ver más detalles</a>
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
                              .img {

                                width: 100%;
                                height: 50%;
                                border-radius: 10px;
                                border-color: blue;
                              }
                            </style>

