<?php
    include('includes/verify_install.php');
     include('includes/db.php');
     $sql="SELECT * FROM producto ";
     $result= DB::query($sql);
     
  //  $result= mysqli_query($con,$sql);
 
?>

<link rel="stylesheet" href="css/style_pro.css">  
<title>PRODUCTO</title>
<?php
include('font/head.php');
?>


<ul class="navigation">
    <div class="a1 container">
       <li><a href="index.php" class="item animated infinite pulse delay"><h1>Inicio</h1></a></li>
       <a class="btn btn-dark" href="mis_productos.php" >Mis Productos</a>
    </div>
</ul>

    <div class="a2 container w-50">
        <form  action="crear_Producto.php"  method="POST" enctype="multipart/form-data" >
                 <div class="input">
                   <label for="exampleDropdownFormEmail2"> <h2>Nombres Del Producto</h2></label>
                   <input type="text" name="nombre" class="form-control" id="exampleDropdownFormEmail2" required placeholder="Nombres" > 
                 </div>

                <div class="input">
                <div class="form-group">
                 <label for="exampleFormControlSelect1">Categoria Del Producto</label>
                  <select class="form-control" name="categoria" id="exampleFormControlSelect1">
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
                  <input type="text" name="valor" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Valos">
                 </div>

                 <div class="input">
                 <label for="exampleDropdownFormEmail2">Unidades</label>
                  <input type="text" name="unidad" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Unidades">
                 </div>

                 <div class="input">
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">Especificacion Del Producto</label>
                    <textarea type="text" required name="caracteristica" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>      
                 </div>

         

                 <div class="imge">
                   <input type="file" name="imagen" id="exampleDropdownFormEmail2" accept="image/*">
                 </div>
                      <button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>
           </form>


        </from>
    </div>
<?php
include('font/final.php');
?>