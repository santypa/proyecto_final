
<?php

include('includes/verify_install.php');
include('includes/db.php');

SESSION_START();
if(isset($_SESSION['id'])){
  $id_user=$_SESSION['id'];
}else{
  $id_user=0;
}

?>
<link rel="stylesheet" href="css/style_miprod.css">  
<title>Mi Perfil</title>

<?php

include('font/head.php');
?>
  

  
<ul class="navigation">
    <div class="a1 container">
       <li><a href="index.php" class="item animated infinite pulse delay"><h1>Inicio</h1></a></li>
     
    </div>
</ul>

<div class="a2 container">     
        <h2 class="animated infinite pulse delay">Mi Perfil </h2> <br>
       
    <div class="container">
            <?php       
              $sql="SELECT * FROM usuarios ";
              $result= DB::query($sql);
            ?>
                
              <?php
                 while($mostrar= mysqli_fetch_array($result)){
                ?>
                    <?php
                     if($id_user==$mostrar['id']){
                         ?>
                            <div class="prin card border-primary">

                                <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['img']) ?>"/><br>
                         
                                <small class="text-muted">Nombre : <?php echo $mostrar['nombre'] ?></small><br>
                                <small class="text-muted">Email : <?php echo $mostrar['email'] ?></small><br>
                                <small class="text-muted">Password : <?php echo $mostrar['password'] ?></small><br>
                                <small class="text-muted">Celular : <?php echo $mostrar['celular'] ?></small><br>
                                <small class="text-muted">Whatsapp : <?php echo $mostrar['whatsapp'] ?></small><br>
                                <small class="text-muted">Direccion : <?php echo $mostrar['direccion'] ?></small><br>
                                <small class="text-muted">Ciudad : <?php echo $mostrar['ciudad'] ?></small><br>
                        
                            <style>
                            .img{
                                position: relative;
                                top:10px;
                               left: 325px;
                                padding: 2px;
                                width: 220px;
                                height: 200px;
                                border-radius:10px;
                                border-color:blue;
                            }
                            .center-text{
                              color: red
                            }
                     </style>
                     <th>
                         <a  class="btn btn-primary"href="editar_perfil.php?id=<?= $mostrar['id']?>" class="xd">Modificar</a>           
                    </th>
                    </div>
                            
     </div>
               
                        <?php
                            }
                            ?>
                     <?php
                        }
                       ?>












<?php
include('font/final.php');

?>
