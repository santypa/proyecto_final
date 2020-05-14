<?php
    include('includes/verify_install.php');
     include('includes/db.php');


        /*     Editar-Producto    */

    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql_p = "select * from producto where id= $id";
    $producto = DB::query($sql_p);
    
    $producto = mysqli_fetch_object($producto);
  

    if($producto == false){
        echo "El usuario no existe";
        die;
    }
     
 
 
?>

<link rel="stylesheet" href="css/style_pro.css">  
<title>Editar_Porducto</title>
<?php
include('font/head.php');
require_once 'navbar/navbar_inicio.php';
?>
 <a class="nav-item nav-link active"  href="mis_productos.php"> <h3> Mis Productos</h3> </a>
<?php
require_once 'navbar/navbar_inicio1.php';
?>


    <div class="a2 container w-50">
        <form  action="crear_Producto.php"  method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?= $producto->id ?>">

     
                 <div class="input">
                   <label for="exampleDropdownFormEmail2"> <h2>Editar Producto</h2></label>
                 
                   <input type="text" name="nombre" class="form-control" id="exampleDropdownFormEmail2" required placeholder="Nombres" value="<?= $producto->nombre ?>" > 
                 </div>

                <div class="input">
                <div class="form-group">
                 <label for="exampleFormControlSelect1">Categoria Del Producto</label>
                  <select class="form-control" name="categoria" id="exampleFormControlSelect1"  >
                  <option value="">seleccione una categoria</option>
                  <option value="1">Vehiculo</option>
                  <option value="2">Tecnologia</option>
                  <option value="3">Hogar y Electrodomesticos</option>
                  <option value="4">Deportes</option>
                  <option value="5">Belleza y Cuidado Personal</option>
                  <option value="6">Accesorios</option>
                  <option value="7">Juguetes</option>
                  <option value="8">Herramientas</option>
                  <option value="9">Instrumentos Musicales</option>
                  <option value="10">Moda</option>
                  <option value="11">Inmuebles</option>
                 </select>
                 </div>
                </div>
               

                 <div class="input">
                 <label for="exampleDropdownFormEmail2">Valor Producto</label>
                  <input type="text" name="valor" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Valos" value="<?= $producto->valor ?>" >
                 </div>

                 <div class="input">
                 <label for="exampleDropdownFormEmail2">Unidades</label>
                  <input type="text" name="unidad" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Unidades"value="<?= $producto->unidades ?>" >
                 </div>

                 <div class="input">
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">Especificacion Del Producto</label>
                    <textarea type="text" required name="caracteristica" value="<?= $producto->especificacion ?>" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= $producto->especificacion ?>" ></textarea>
                    </div>      
                 </div>

         

                 <div class="imge">
                   <input type="file" name="imagen" id="exampleDropdownFormEmail2"  >
                 
                 
                   <?php 
                   
                     $imag= DB::query($sql_p);
                     while($mostrar= mysqli_fetch_array($imag)){?>
                      <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>"/><br>
                     <a href="#" class="delete" tilte="ver archivo adjunto">
                     <span class='glyphicon glyphicon-trash' arial-hidden='true'></span>
                     </a>
                      <style>
                            .img{
                              
                                position: relative;
                                top:-10px;
                                left: 27px;
                                padding: 2px;
                                width: 80px;
                                height: 100px;
                                border-radius:10px;
                                border-color:blue;
                            }
                     </style>
                      <?php
                  }
               ?>
                   
                
                 </div>

                 <?php  if($producto->estado == "activo"){  ?>
                        <label for="">Activo</label>
                        <input type="radio" name="estado" value="activo" checked>
                        <label for="">Inactivo</label>
                        <input type="radio" name="estado" value="inactivo">
                 <?php  }else{  ?>
                        <label for="">Activo</label>
                        <input type="radio" name="estado" value="activo" >
                        <label for="">Inactivo</label>
                        <input type="radio" name="estado" value="inactivo" checked>
                    <?php  }  ?>
                      <button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>
           </form>


        </from>
    </div>
<?php
include('font/final.php');
?>