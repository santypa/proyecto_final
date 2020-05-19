<?php  

      
      // SESSION_UNSET();
        SESSION_START();
        if(isset($_SESSION['id'])){
        $ides=$_SESSION['id'];
        }else{
          $ides=0;
        }
        include ('css/style.php');
?>
  

<?php
  
  include('includes/verify_install.php');
  include('includes/db.php');
  
    
?>

<?php
include('font/head.php');
/* require_once 'navbar/navbar_inicio.php';
require_once 'navbar/navbar_inicio1.php'; */
?>
<title>INDEX_Buscar</title>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
<nav class="navbar navbar-dark bg-primary navbar navbar-expand-lg sticky-top text-center" >

  <a class="navbar-brand" href="index.php">
    <img src="img/intel.png" width="40" height="40" class="d-inline-block align-top" alt="logo de intel">
    Kira
  </a>  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="navbar-nav text-center mr-auto">

     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <h> Catgorias<h>
        </a>
             
             <?php
            $sql="SELECT * FROM categoria_producto";
            $result= DB::query($sql);
            $cat="1"; $ca1="";$ca2="";$ca3="";$ca4="";$ca5="";$ca6="";$ca7="";$ca8="";$ca9="";$ca10="";$ca11="";  
            while($mostrar= mysqli_fetch_array($result)){
            
            switch($mostrar['id'])
            {
            case "1": $ca1=$mostrar['nombre'];   break;
            case "2": $ca2=$mostrar['nombre'];   break;
            case "3": $ca3=$mostrar['nombre'];   break;
            case "4": $ca4=$mostrar['nombre'];   break;
            case "5": $ca5=$mostrar['nombre'];   break;
            case "6": $ca6=$mostrar['nombre'];   break;
            case "7": $ca7=$mostrar['nombre'];   break;
            case "8": $ca8=$mostrar['nombre'];   break;
            case "9": $ca9=$mostrar['nombre'];   break;
            case "10": $ca10=$mostrar['nombre'];   break;
            case "11": $ca11=$mostrar['nombre'];   break;
            }
                  }
               ?>
            <div class="dropdown-menu" >
                 <a class="dropdown-item" href="?p=1"><?php echo "$ca1" ?></a>
                 <a class="dropdown-item" href="?p=2"><?php echo "$ca2" ?></a>
                 <a class="dropdown-item" href="?p=3"><?php echo "$ca3" ?></a>
                 <a class="dropdown-item" href="?p=4"><?php echo "$ca4" ?></a>
                 <a class="dropdown-item" href="?p=5"><?php echo "$ca5" ?></a>
                 <a class="dropdown-item" href="?p=6"><?php echo "$ca6" ?></a>
                 <a class="dropdown-item" href="?p=7"><?php echo "$ca7" ?></a>
                 <a class="dropdown-item" href="?p=8"><?php echo "$ca8" ?></a>
                 <a class="dropdown-item" href="?p=9"><?php echo "$ca9" ?></a>
                 <a class="dropdown-item" href="?p=10"><?php echo "$ca10" ?></a>
                 <a class="dropdown-item" href="?p=11"><?php echo "$ca11" ?></a>
              <div role="separator" class="dropdown-divider"></div>
                     <a class="dropdown-item" href="?p=categ">Todas las categorias</a>
              </div>
     
       </li>
       <?php // creacion del dropdown para categoria?>

<?php
       $cuenta='';
         if($ides>0){
           $sql="SELECT * FROM usuarios ";
           $result= DB::query($sql);
           while($mostrar= mysqli_fetch_array($result)){
               if($ides==$mostrar['id']){
                 $cuenta=$mostrar['nombre']; 
               }
          }  
         }
         else{
           $cuenta='Crea tu cuenta';
         }
       ?>
       <?php
     if($ides>0){
       ?>
 
     <li class="nav-item">
      <a class="nav-link" href="vender.php"><h>Vender</h> </a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="mostrar.php"><h>Mis compras</h></a>
     </li>

    
     <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <h><?php echo $cuenta ?><h>
     </a>

        <div class="dropdown-menu">
             <a class="dropdown-item" href="mis_productos.php">Mis Productos</a>
             <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="mi_perfil.php">Mi perfil</a>
              <a class="dropdown-item" href="salir.php">Salir</a>
         </div>
     </li>
       <?php

     }
     else{
       $sql="SELECT * FROM usuarios ";
       $result= DB::query($sql);
       ?>
     
     <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <h>Ingresar<h>
     </a>

        <div class="dr1 dropdown-menu">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

           <div class="input justify-content-around">
               <label for="exampleDropdownFormEmail2"></label>    
               <input type="text" name="gmail" id="gm"class="f1 form-control" required placeholder="Correo ..." >
              
           </div>
           <div class="input justify-content-around">
               <label for="exampleDropdownFormEmail2"></label>
               <input type="password" name="passe" id="passwo" class="f1 form-control" required placeholder="Contraseña..."  >
           </div><br>
           <div class="inici">
               <input type="submit" name="btn1"  value="ENTRAR" id="ini2" class="btn btn-primary animated infinite pulse delay"  
               <?php
          if(isset($_POST['btn1'])){
              $gmai="";
              $gmai= $_POST['gmail'];
              $pass=$_POST['passe'];
              $ide="";
              echo "<p>correo: {$gmai}, contraseña: {$pass} </p>";
              $usu=0;
               $reg=0;
               while($mostrar= mysqli_fetch_array($result)){
                  if($gmai==$mostrar['email'] && $pass == $mostrar['password'] ){
                           $reg++;
                           $ide=$mostrar['id'];
                  }
                  else{     
                 $usu++;
                  }
              }  
              session_start();
              $_SESSION['id']=$ide;

              if($reg > 0){
                  echo "<script>
                 alert('se registro correctamente');
                 window.location= 'index.php'
                 </script>";
              }else{
         echo "<script>
         alert('correo o contraseña incorecta');
         window.location= 'ingresar.php'
         </script>";
               }
           }
          ?>
           >
           
          </div>
           </form>
         </div>
     </li>



     <li class="nav-item">
       <a class="nav-link" href="registro.php"><h><?php echo $cuenta  ?></h></a>
     <li >
       <?php

     }
     
     ?><?php //validacion para la opcion de ingresar, crear cuenta en nabvar ?>
       
      
    </div>
 </div>


 <div class="d-flex justify-content-center">
            <form class="form-inline my-2 my-lg-0" action="buscar.php" method="post">
              <input class="buscar form-control mr-sm-2" type="search" name="buscar" placeholder="   Buscar ...  " aria-label="Search">
             <button class="btn btn-outline-light my-2 my-sm-0" type="submit" >buscar</button>
             </form>
          </div>




</nav>

</form>

<?php
require_once 'carrucel/carrucel.php';
?>


<!-- 
<form action="buscar.php" method="post">
        <input type="text" name="buscar">
        <input type="submit" value="Buscar">
        
      </form> -->


<div class="b2 container-fluid">
      
      <?php       
             $buscando= $_POST['buscar'];
             $sql_buscar=" select * from producto where nombre like '".$buscando."%'  ORDER BY nombre ASC";
             $result= DB::query($sql_buscar);
           
            ?>
            <?php    
           
           $sql="SELECT p.id as idpr, p.nombre AS nom_pro,p.unidades,p.valor,p.imagen,p.especificacion,categoria_producto.id AS id_cat ,categoria_producto.nombre AS nomb_catg 
           FROM producto AS p             
           INNER JOIN categoria_producto ON categoria_producto.id= p.id_categoria_producto
           ORDER BY p.id DESC ";
           $result2= DB::query($sql);

         ?>
 <div class="b4 card-deck-fluid ">
       
      <div class="r1 row row-cols-5">    
                 <?php
                 while($mostrar= mysqli_fetch_array($result)){
                ?>
                
                  
                
                <div class="col ">    
                            <div class="c1 card border-primary">
                              <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['imagen']) ?>"/><br>
                              <div class="c2 card-body ms-4">
                                    <div class="dropdown">
                                      <button class="bt2 btn btn-outline " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <?php echo $mostrar['nombre'] ?>
                                      </button>
                                      <?php 
                                        $idpe=$mostrar['id'];
                                      ?>
                                      <div class="mt-1 ml-4" >
                                        
                                      <a class="btn btn-success " href="detalles_producto.php?idep= <?php echo $idpe?>">Ver más detalles</a>
                                      </div>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                       <div class="c3 card card-body">
                                         <small class="text-muted">Caracteristicas:</small>
                                          <p><?php echo $mostrar['especificacion'] ?><br>
                                        <small class="text-muted">Unidades : <?php echo $mostrar['unidades'] ?></small><br>
                                         <small class="text-muted">Valor Unitario : <?php echo $mostrar['valor'] ?></small><br>
                                         <!-- <small class="text-muted">Categoria : <?php echo $mostrar['id_producto_categoria'] ?></small><br></p> -->
                                     </div>
                                   </div>
                                </div>
                              </div>
                            </div>
                           </div>         
                           <style>
                                  .img{
                                    
                                      position: relative;
                                      top:20px;
                                      left: 27px;
                                      padding: 2px;
                                      width: 80%;
                                      height: 200px;
                                      border-radius:10px;
                                      border-color:blue;
                                  }
                           </style>
               <?php
              
                  }
               ?>

</div>

</div>
</div>
</div>



<?php
include('font/final.php');
?>
