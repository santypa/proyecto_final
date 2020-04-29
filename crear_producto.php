
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
      
      if(isset($_GET['estado']) == TRUE){
        $estado = $_GET['estado'];
        $id = $_GET['id'];
        if($estado=="activo"){
            $es = "inactivo";
        }else{
            $es = "activo";
        }
        $sql = "UPDATE producto set estado='$es' WHERE id='$id'";
      }else{

    $id=$_POST["id"];
    $estado=$_POST["estado"];
    $producto = $_POST["nombre"];
    $categoria=$_POST['categoria'] ;
    $valor=$_POST['valor'];
    $unida=$_POST['unidad'];
    $caracteristica=$_POST['caracteristica'];
    $img=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
        if(isset($id)==false){
          $estado = "activo";
          $sql = "insert into producto(nombre,id_categoria_producto,precio,unidades,especificacion,imagen,id_usuarios,estado) 
          values('$producto','$categoria','$valor','$unida','$caracteristica','$img','$ides','$estado')";
        }else{
            $sql= "UPDATE producto set  estado='$estado',nombre='$producto',valor='$valor', imagen='$img' ,unidades='$unida',especificacion='$caracteristica',id_categoria_producto='$categoria'  where id='$id'   ";
        }
     
      }

      DB::query($sql);
      header('Location: mis_productos.php');
   
   
   
   
   /*
        if(DB::query($sql)){ //if($con->query($query) == true)
    echo "producto guardado correctamente  ";
    
    echo "<script>
                alert('El producto se registro correctamente');
                window.location= 'mis_productos.php'
                </script>";
    
     }else{
            echo "No se ha podido guardar la persona. " . $con->error;
        }
    
   
   */
      
 
  
?>

