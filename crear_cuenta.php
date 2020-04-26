
<?php 
       include('includes/db.php');
       
       $sql="SELECT * FROM usuarios ";
       $result= DB::query($sql);
    
    $nombres = $_POST["nombres"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $celular = $_POST["celular"];
    $whatsapp = $_POST["whatsapp"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $img=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        
    $existe=0;
    while($mostrar= mysqli_fetch_array($result)){

        if($email == $mostrar['email']){
                $existe++;
        }
       
    }

    ////////////////////////////////////////////  VERIFICACION DE CORREO /////////////////////////////////////
    if($existe<1){
       
        $sql = "insert into usuarios(nombre,email,password,celular,whatsapp,direccion,ciudad,img) 
        values('$nombres', '$email',('$password'),'$celular','$whatsapp','$direccion','$ciudad','$img')";

     if(DB::query($sql)){ //if($con->query($query) == true)
    echo "Persona guardada correctamente  ";
    
    echo "<script>
                alert('El usuario se registro correctamente');
                window.location= 'index.php'
                </script>";
    
    //header("location:index.php");  
     }else{
    echo "No se ha podido guardar la persona. " . $con->error;
        }
    } else{
 
        echo "<script>
        alert('EL correo ya existe');
        window.location= 'registro.php'
        </script>";
        
    }
  
?>

