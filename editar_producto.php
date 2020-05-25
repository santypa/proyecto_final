<?php
    include('includes/verify_install.php');
     include('includes/db.php');


        /*     Editar-Producto    */

    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql_p = "SELECT p.id as idpr, p.nombre AS nom_pro,p.unidades,estado,p.valor,p.imagen,p.especificacion,categoria_producto.id AS id_cat ,categoria_producto.nombre AS nomb_catg 
    FROM producto AS p           
    INNER JOIN categoria_producto ON categoria_producto.id= p.id_categoria_producto ORDER BY p.id ASC"; 
    

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

 <a class="nav-item nav-link active"  href="mis_productos.php"> <h3> Mis Productos </h3> </a>
<?php
require_once 'navbar/navbar_inicio1.php';


$ima= DB::query($sql_p);  
 while($mostrar= mysqli_fetch_array($ima)){

  if($id==$mostrar['idpr']){
    $idnom=$mostrar['nom_pro'];
  }
}


$imag= DB::query($sql_p);  
while($mostrar= mysqli_fetch_array($imag)){
  if($id==$mostrar['idpr']){
?>


    <div class="a2 container w-50">
        <form  action="crear_Producto.php"  method="POST" enctype="multipart/form-data" >
        
        <input type="hidden" name="id" value="<?= $mostrar['idpr']?>">


                 <div class="input">
                   <label for="exampleDropdownFormEmail2"> <h2>Editar Producto </h2></label>
                 
                   <input type="text" name="nombre" class="form-control" id="exampleDropdownFormEmail2" required placeholder="Nombres" value="<?= $mostrar['nom_pro'] ?>" > 
                 </div>
                 <?php $idca=$mostrar['id_cat'] ?>
                <div class="input">
                <div class="form-group">
                 <label for="exampleFormControlSelect1">Categoria Del Producto </label>


                  <select class="form-control" name="categoria" id="exampleFormControlSelect1">
                  <option value="15"><?php echo $mostrar['nomb_catg']?></option>
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
                  <input type="text" name="valor" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Valos" value="<?= $mostrar['valor'] ?> " >
                 </div>

                 <div class="input">
                 <label for="exampleDropdownFormEmail2">Unidades</label>
                  <input type="text" name="unidad" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Unidades"value="<?= $mostrar['unidades'] ?>" >
                 </div>

                 <div class="input">
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">Especificacion Del Producto</label> 
                    <input type="text" required name="caracteristica" value="<?= $mostrar['especificacion'] ?>" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?= $mostrar['especificacion'] ?>" ></input>
                    </div>      
                 </div>

                <?php
            
                ?>

                 <div class="imge">
                   <?php 
                   
                    /*  $imag= DB::query($sql_p);  
                     while($mostrar= mysqli_fetch_array($imag)){ */
                         
                      if($id==$mostrar['idpr']){
                        $nos=$mostrar['imagen'];

                       
                        ?>
                     <?php echo '<img  class="img2 img-thumbnail "  src ="'.$mostrar['imagen'].'" width="400px" height="500px">' ?> <!-- Mostrar Imagen -->
                    <a href="#" class="delete" tilte="ver archivo adjunto">
                    <span class='glyphicon glyphicon-trash' arial-hidden='true'></span>
                      
                    </a>
                  <!--    <style>
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
                    </style> -->
                    <?php
                   if($mostrar['imagen'] =='imagen/'){
                       echo "sin imagen";
                      ?> <input type="file" name="imagen" required id="exampleDropdownFormEmail2" accept="image/*"><?php
   
                     }else{
                       echo "con imagen"; 
                       ?> <input type="file" name="imagen" id="exampleDropdownFormEmail2" accept="image/*"><?php
                     }
                      }
                        
                 /*  } */
                  
                  ?>
                  
                  <br>

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
    }
  }
  ?>
<?php
include('font/final.php');
?>