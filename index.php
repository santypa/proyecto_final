<?php
    include('includes/verify_install.php');
    include('includes/db.php');
?>

<?php

require_once 'font/head.php';
?>

<link rel="stylesheet" href="css/estyle_inde.css">  
<title>INDEX</title>
<?php  

      
      // SESSION_UNSET();
        SESSION_START();
        if(isset($_SESSION['id'])){
          $ides=$_SESSION['id'];
        }else{
          $ides=0;
        }
  ?>

<header>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div class="a1 container">
        <div class="input-group mb-3">
            <input type="text" class="in1 form-control" placeholder="Buscar articulos, marcas y mas.." aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
            
                 <button class="btn btn-light" type="button" id="button-addon2"><img src="ico/lupa.png" id="lupa" class="rounded float-left"></button>
            </div>
        </div>
    </div>

    <div class="a2  container">
    
     <div class="row justify-content-center">
      <div class="col-2">
        <div class="aa2 dropdown">
             <a class="btn btn-outline-primaryt dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Catgorias
             </a>
             <?php
            $sql="SELECT * FROM categoria_producto";
            $result= DB::query($sql);
            ?>
             <?php  $cat="1"; $ca1="";$ca2="";$ca3="";$ca4="";$ca5="";$ca6="";$ca7="";$ca8="";$ca9="";$ca10="";$ca11="";  ?>  

             <?php
                 while($mostrar= mysqli_fetch_array($result)){
             ?>
             <?php 
             switch($mostrar['id']){
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
                ?>
               <?php
                  }
               ?>
         
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
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
            </div>     
          </div> 
          
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
          <div class="aa3 col-2">
           <a class="ba btn btn-light-outline-primary " href="vender.php">Vender</a>
            </div>
            <div class="aa3 col-2">
          <a class="ba btn btn-light-outline-primary " href="mostrar.php">Mis compras</a>
         </div>
        
         <div class="dropdown">
            <button type="button" class="btn btn-light-outline-primary  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php echo $cuenta  ?>
           </button>
           
          
           <div class="dropdown-menu">
                <a class="dropdown-item" href="mis_productos.php">Mis Productos</a>
                <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="mi_perfil.php">Mi perfil</a>
                 <a class="dropdown-item" href="salir.php">Salir</a>
                
            
            </div>
          <?php
        }
        else{
          ?>
          <div class="aa3 col-2">
           <a class="ba btn btn-light-outline-primary " href="ingresar.php">Vender</a>
            </div>
            <div class="aa3 col-2">
            <a class="ba btn btn-light-outline-primary " href="ingresar.php">Ingresar</a>
          </div>
         <div class="aa3 col-2">
               <a class="ba btn btn-light-outline-primary " href="registro.php"><?php echo $cuenta  ?></a>
           </div>
          <?php

        }
        
        ?>
        </div>
     </div>
     
  </div>
  </form>
</header>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/inicio.jpg" class="d-block w-100 " alt="..."  >
    </div>
    <div class="carousel-item">
      <img src="img/inicio2.jpg" class="d-block w-100 " alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/inicio3.jpg" class="d-block w-100 " alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
require_once 'categorias/categ.php';
include('font/final.php');
?>



          