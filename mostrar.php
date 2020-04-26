<?php
    include('includes/verify_install.php');
    include('includes/db.php');
   
  ?>

<?php
include('font/head.php');
?>

<div class="container">
            <?php       
              $sql="SELECT * FROM usuarios ";
              $result= DB::query($sql);
            ?>
                 <?php
                 while($mostrar= mysqli_fetch_array($result)){
                ?>
                     <td><?php echo $mostrar['id'] ?></td><br>
                     <td><?php echo $mostrar['nombre'] ?></td><br>
                     <td><?php echo $mostrar['email'] ?></td><br>
                     <td><?php echo $mostrar['password'] ?></td><br>
                     <td><?php echo $mostrar['celular'] ?></td><br>
                     <td><?php echo $mostrar['whatsapp'] ?></td><br>
                     <td><?php echo $mostrar['direccion'] ?></td><br>
                     <td><?php echo $mostrar['ciudad'] ?></td><br>
                     <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['img']) ?>"/><br>
                    
                     <style>
                            .img{
                                position: relative;
                                padding: 2px;
                                width: 170px;
                                height: 170px;
                            }
                     </style>
               <?php
              
                  }
               ?>


</div>


<?php
include('font/final.php');
?>
