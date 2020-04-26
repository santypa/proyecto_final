
<?php

    include('includes/verify_install.php');
    include('includes/db.php');

  ?>

<link rel="stylesheet" href="css/style_regi.css">  
<?php
include('font/head.php');
?>

<ul class="navigation">
    <div class="a1 container">
       <li><a href="index.php" class="item animated infinite pulse delay"><h1>Inicio</h1></a></li>
    </div>
</ul>
    <div class="a2 container w-50">
        <form  action="crear_cuenta.php"  method="POST" enctype="multipart/form-data" >
                 <div class="input">
                   <label for="exampleDropdownFormEmail2">Nombres</label>
                   <input type="text" name="nombres" class="form-control" id="exampleDropdownFormEmail2" required placeholder="Nombres">
                 </div>

                <div class="input-group justify-content-around">
                   <label for="exampleDropdownFormEmail2">Correo</label>
                   <label for="exampleDropdownFormPassword2">Contraseña</label>
                   
                 </div>
               
                 <div class="input-group justify-content-around  ">
                     <input type="email" name="email"  class=" form-control p-2" id="exampleDropdownFormEmail2" required placeholder="email@example.com">
                    <input type="password" name="password" class="in1 form-control p-2 " id="exampleDropdownFormPassword2" required placeholder="Password" >
                 </div>
                 
                 
                 <div class="input-group justify-content-around">
                   <label for="exampleDropdownFormEmail2">Celular</label>
                   <label for="exampleDropdownFormEmail2">WhatsApp</label>
                   
                 </div>

                 <div class="input-group justify-content-around">
                   <input type="text"  name="celular" class="form-control" id="exampleDropdownFormEmail2"required  placeholder="Celular">
                   <input type="text"  name="whatsapp" class="in1 form-control" id="exampleDropdownFormEmail2"required  placeholder="Whatsapp">
                 </div>

                 <div class="input-group justify-content-around">
                   <label for="exampleDropdownFormEmail2">Direccion</label>
                   <label for="exampleDropdownFormEmail2">Ciudad</label>
                 </div>

                 <div class="input-group justify-content-around">
                   <input type="text"  name="direccion"  class="form-control" id="exampleDropdownFormEmail2"required placeholder="Direccion">
                   <input type="text" name="ciudad" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Ciudad">
                 </div>
                 <div class="imge">
                   <input type="file" name="imagen" id="exampleDropdownFormEmail2">
                 </div>

                      <button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>
           </form>


        </from>
    </div>
<?php
include('font/final.php');

?>
