<?php

$correo=$_POST["correo"];
$contraseña=$_POST["pass"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefon = $_POST["telef"];

$correo2 = sha1($correo);

include("noic.php");

$consulta=" SELECT * FROM usuarios_base where correo= '$correo2' ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  // este usuario ya existe
  echo "<script>    alert('El correo actual está registrado, intente con uno nuevo');  </script>";
  include("sign up.php");
  exit;


}else{

    $contraseñaCrypt = password_hash($contraseña, PASSWORD_DEFAULT , array ("cost"=> 10));
    //Si este usuario no está registrado hacer
      // echo $correo, $contraseña, $nombre, $telefon;
    //INSERT INTO usuarios_base (correo, contra, nombre, apellido, telefono, rol, reservacion) VALUES ('asasd', 'weqwe', 'Juan', 'Rugino', '12322343', '2', '0');
 
    $consulta2=" INSERT INTO usuarios_base (correo, contra, nombre, apellido, telefono, rol, reservacion) 
    VALUES ('$correo2', '$contraseñaCrypt', '$nombre', '$apellido', '$telefon', 2 , 0)";

    $resultado2=mysqli_query($conexion,$consulta2);
    if ($resultado2) {

      echo "<script>    alert('Ya está registrado, puede acceder a su cuenta');  </script>";
      header('Refresh:0.5; url=../index.php');
    }else{



    }
      
   
  
}




mysqli_free_result($resultado);
mysqli_close($conexion);


?>