<?php
    include('includes/verify_install.php');
     include('includes/db.php');
     $sql="SELECT * FROM usuarios ";
     $result= DB::query($sql);
     
  //  $result= mysqli_query($con,$sql);
 
?>

<link rel="stylesheet" href="css/style_ingresar.css">  
<title>INGRESAR</title>

<?php
include('font/head.php');
?>

<header>
    <div class="a1 container">
       <a href="index.php" class="item animated infinite pulse delay"><h1>Inicio</h1></a>
    </div>
</header>

<div class="a2 container">
<div class="row">
    
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

<div class="input justify-content-around">
    <label for="exampleDropdownFormEmail2">Correo</label>    
     <input type="text" name="gmail" id="gm"class="form-control" required placeholder="Gmail: ejemplo@gmail.com"  >
</div>
<div class="input justify-content-around">
    <label for="exampleDropdownFormEmail2">Password</label>
     <input type="password" name="passe" id="passwo" class="form-control" required placeholder="Password :"  >
</div>
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
           // $nombres=$_POST["id"];
           
            if($gmai==$mostrar['email'] && $pass == $mostrar['password'] ){
                    $reg++;
                    $ide=$mostrar['id'];
                   // $nombres = $_POST["nombres"];
                    //echo "el usuario si existe {$reg}";  
            }
            else{     
                    $usu++;
                   // echo "sin registrar {$usu}";
            }
        }  
        session_start();
        $_SESSION['id']=$ide;

        if($reg > 0){
            echo "<script>
            alert('Usuario Correcto ');
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
</div>

<?php
include('font/final.php');
?>
