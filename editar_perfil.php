
<?php

include('includes/verify_install.php');
include('includes/db.php');

  /*     Editar-Perfil    */

  if(isset($_GET['id']) == false){
    echo "Es necesario enviar un id";
    die;
}
$id = $_GET['id'];
$sql = "SELECT * FROM usuarios where id=$id ";
$result = DB::query($sql);

/* $user = mysqli_fetch_object($user);
 */

if($result == false){
    echo "El usuario no existe";
    die;
}

?>

<link rel="stylesheet" href="css/style_regi.css">  
<?php
include('font/head.php');

require_once 'navbar/navbar_inicio.php';
require_once 'navbar/navbar_inicio1.php';

?>

<?php

while ($mostrar = mysqli_fetch_array($result)) {

?>
 
  <div class="a2 container w-50">
  <form  action="crear_cuenta.php"  method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="id" value="<?= $mostrar['id'] ?>">

           <div class="input">
             <label for="exampleDropdownFormEmail2">Nombres</label>
             <input type="text" name="nombres" class="form-control" id="exampleDropdownFormEmail2" required placeholder="Nombres"  value="<?= $mostrar['nombre']?>">
           </div>

          <div class="input-group justify-content-around">
             <label for="exampleDropdownFormEmail2">Correo</label>
             <label for="exampleDropdownFormPassword2">Contraseña</label>
             
           </div>
            
           <div class="input-group justify-content-around  ">
        
               <input type="email" name="email"  class=" form-control p-2" id="exampleDropdownFormEmail2" required placeholder="email@example.com" value="<?= $mostrar['email'] ?>">
              <input type="password" name="password" class="in1 form-control p-2 " id="exampleDropdownFormPassword2" required placeholder="Password" >
           </div>
            
           
           
           <div class="input-group justify-content-around">
             <label for="exampleDropdownFormEmail2">Celular</label>
             <label for="exampleDropdownFormEmail2">WhatsApp</label>
             
           </div>

           <div class="input-group justify-content-around">
             <input type="text"  name="celular" class="form-control" id="exampleDropdownFormEmail2"required  placeholder="Celular" value="<?= $mostrar['celular'] ?>">
             <input type="text"  name="whatsapp" class="in1 form-control" id="exampleDropdownFormEmail2"required  placeholder="Whatsapp" value="<?= $mostrar['whatsapp']?>">
           </div>

           <div class="input-group justify-content-around">
             <label for="exampleDropdownFormEmail2">Direccion</label>
             <label for="exampleDropdownFormEmail2">Ciudad</label>
           </div>

           <div class="input-group justify-content-around">
             <input type="text"  name="direccion"  class="form-control" id="exampleDropdownFormEmail2"required placeholder="Direccion" value="<?= $mostrar['direccion'] ?>">
             <input type="text" name="ciudad" class="in1 form-control" id="exampleDropdownFormEmail2"required placeholder="Ciudad"value="<?= $mostrar['ciudad'] ?>">
           </div>
          
           <div class="imge">
         
           <input type="file" name="imagen" id="exampleDropdownFormEmail2" accept="image/*">

             
           </div>

                <button type="submit" value="Registrar" id="regt" class="gur btn btn-primary animated infinite pulse delay">Guardar</button>
     </form>
    
</div>

<?php
}
?>


<?php
include('font/final.php');

?>
