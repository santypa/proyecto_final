
<?php 
       include('includes/db.php');
       
       SESSION_START();
        if(isset($_SESSION['id'])){
          $ides=$_SESSION['id'];
        }else{
          $ides=0;
        }

       $sql="SELECT * FROM producto ";
       $result= DB::query($sql);
    
    $producto = $_POST["nombre"];
    $categoria=$_POST['categoria'] ;

    $valor=$_POST['valor'];
    $unida=$_POST['unidad'];
    $caracteristica=$_POST['caracteristica'];
    $img=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    

        $sql = "insert into producto(nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios) 
        values('$producto','$categoria','$valor','$unida','$caracteristica','$img','$ides')";
     if(DB::query($sql)){ //if($con->query($query) == true)
    echo "producto guardado correctamente  ";
    
    echo "<script>
                alert('El producto se registro correctamente');
                window.location= 'mis_productos.php'
                </script>";
    
    //header("location:index.php");  
     }else{
            echo "No se ha podido guardar la persona. " . $con->error;
        }
    
    ////////////////////////////////////////////  VERIFICACION DE CORREO /////////////////////////////////////
   
      
 
  
?>

