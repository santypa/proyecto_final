
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
    //Crear Imagen en EN proyecyo
    $imagen=$_FILES['imagen']['name'];
    $ruta=$_FILES['imagen']['tmp_name'];
    $destino="imagen/".$imagen;
    copy($ruta,$destino);

    
        if(isset($id)==false){
          $estado = "activo";
          $sql = "insert into producto(nombre,id_categoria_producto,valor,unidades,especificacion,imagen,id_usuarios,estado) 
          values('$producto','$categoria','$valor','$unida','$caracteristica','$destino','$ides','$estado')";

          if(DB::query($sql)){
           
            
            echo "<script>
                        alert('El producto se registro correctamente');
                        window.location= 'mis_productos.php'
                        </script>";
                        die;
          }else{
             
            echo "<script>
                        alert('Error al guardar el producto');
                        window.location= 'mis_productos.php'
                        </script>";
                        die;
          }
        }else{
            $sql= "UPDATE producto set  estado='$estado',nombre='$producto',valor='$valor', imagen='$destino' ,unidades='$unida',especificacion='$caracteristica',id_categoria_producto='$categoria'  where id='$id'   ";
            if(DB::query($sql)){
              echo "<script>
                          alert('El producto se edito correctamente');
                          window.location= 'mis_productos.php'
                          </script>";
                          die;
            }else{
              echo "<script>
                          alert('Error al Editar el producto');
                          window.location= 'mis_productos.php'
                          </script>";
                          die;
            }
          }
     
      }

      DB::query($sql);
      header('Location: mis_productos.php');
   
   
   
      
 
  
?>

