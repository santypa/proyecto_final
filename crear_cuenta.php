
<?php 
       include('includes/db.php');


       SESSION_START();
       if(isset($_SESSION['id'])){
         $id_user=$_SESSION['id'];
       }else{
         $id_user=0;
       }
     
       $sql="SELECT * FROM usuarios ";
       $result= DB::query($sql);
    
    $nombres = $_POST["nombres"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $celular = $_POST["celular"];
    $whatsapp = $_POST["whatsapp"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
     //Crear Imagen en EN proyecyo
     $imagen=$_FILES['imagen']['name'];
     $ruta=$_FILES['imagen']['tmp_name'];
     $destino="imagen/".$imagen;
     copy($ruta,$destino);
        
    $existe=0;
    while($mostrar= mysqli_fetch_array($result)){

        if($email == $mostrar['email']){
                $existe++;
        }
       
    }

    ////////////////////////////////////////////  VERIFICACION DE CORREO /////////////////////////////////////
    if($existe<1){
       
        $sql = "insert into usuarios(nombre,email,password,celular,whatsapp,direccion,ciudad,img) 
        values('$nombres', '$email',('$password'),'$celular','$whatsapp','$direccion','$ciudad','$destino')";

     if(DB::query($sql)){ //if($con->query($query) == true)
    
    echo "<script>
                alert('El usuario se registro correctamente');
                window.location= 'index.php'
                </script>";
    
    //header("location:index.php");  
     }else{
    echo "No se ha podido guardar la persona. " ;
        }
    } else{
 
        echo "<script>
        alert('EL correo ya existe');
        window.location= 'registro.php'
        </script>";
        
    }
  
?>

