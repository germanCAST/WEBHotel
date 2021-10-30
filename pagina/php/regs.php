<?php

$correo=$_POST["correo"];

$contraseña=$_POST["pass"];

$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];

$telefon = $_POST["telef"];



session_start();

$_SESSION['correo']=$correo;


$conexion=mysqli_connect("mysql5027.site4now.net","a7b0d4_germanc","GFernando14","db_a7b0d4_germanc");


$consulta=" SELECT * FROM usuarios_base where correo= '$correo' ";


$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
   
  // este usuario ya existe

  echo "<script>    alert('El correo actual está registrado, intente con uno nuevo');  </script>";

    include("sign up.php");


}else{

    // echo $correo, $contraseña, $nombre, $telefon;

    echo "<script>    alert('Ya está registrado, puede acceder a su cuenta');  </script>";


   

      include("index.php");

?>

    

    <?php
    
    
    

  ?>
  
  <!-- <h1 class="bad">ERROR DE AUTENTIFICACION</h1> -->
  
  <?php
}

mysqli_free_result($resultado);

mysqli_close($conexion);