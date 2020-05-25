
<?php 
       include('includes/db.php');


       SESSION_START();
       if(isset($_SESSION['id'])){
         $id_user=$_SESSION['id'];
       }else{
         $id_user=0;
       }
       
     

       $sql="SELECT * FROM usuarios";
       $result= DB::query($sql);
    
    $id_user = $_POST["id"];

    $nombres = $_POST["nombres"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $celular = $_POST["celular"];
    $whatsapp = $_POST["whatsapp"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];

     //Crear Imagen en EN proyecyo
  $imagen = $_FILES['imagen']['name'];
  $ruta = $_FILES['imagen']['tmp_name'];
  $destino = "imagen/".$imagen;
  
 

    $existe=0;
    while($mostrar= mysqli_fetch_array($result)){

        if($email == $mostrar['email']){
                $existe++;
        }
        if($mostrar['id']==$id_user){
          
          if($imagen==''){
            $sql = "UPDATE usuarios SET nombre='$nombres' , email='$email' , PASSWORD='$password' , celular=' $celular' , whatsapp='$whatsapp' , direccion='$direccion' , ciudad='$ciudad'  where id='$id_user' " ;
          }else{
            $sql = "UPDATE usuarios SET nombre='$nombres' , email='$email' , PASSWORD='$password' , celular=' $celular' , whatsapp='$whatsapp' , direccion='$direccion' , ciudad='$ciudad' , img='$destino'   where id='$id_user' " ;
            copy($ruta, $destino);
          }
          
          if (DB::query($sql)) {
            echo "<script>
                                alert('El se edito correctamente');
                                window.location= 'mi_perfil.php'
                                </script>";
            die;
          } else {
            echo "<script>
                                alert('Error al Editar');
                                window.location= 'editar_perfil.php'
                                </script>";
            die;
          }
        }
    }

  
    
    if(isset($id_user)){
        die;
    }else{
      ////////////////////////////////////////////  VERIFICACION DE CORREO /////////////////////////////////////
    
      if($existe<1){
        

       
        if($imagen==''){
          $destino = "imagen/us.png";
          $sql = "insert into usuarios(nombre,email,password,celular,whatsapp,direccion,ciudad,img) 
        values('$nombres', '$email',('$password'),'$celular','$whatsapp','$direccion','$ciudad','$destino')";
        }else{
          $sql = "insert into usuarios(nombre,email,password,celular,whatsapp,direccion,ciudad,img) 
          values('$nombres', '$email',('$password'),'$celular','$whatsapp','$direccion','$ciudad','$destino')";
          copy($ruta, $destino);
        }
        

     if(DB::query($sql)){ //if($con->query($query) == true)
    
    echo "<script>
                alert('El usuario se registro correctamente');
                window.location= 'index.php'
                </script>";
     }else{
    echo "No se ha podido guardar la persona. " ;
        }
    } else{
 
        echo "<script>
        alert('EL correo ya existe');
        window.location='index.php'
        </script>";
        
    }
  
    
    }

   
?>

