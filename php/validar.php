<?php
$ip =  getenv('REMOTE_ADDR');
$navegador = getenv('HTTP_USER_AGENT');


//Hago la conexion sql, incluyendo los datos del servidor
include("noic.php");
//QUERY PARA LOCALIZAR SI ESTA EL CORREO
$consulta="INSERT INTO inussite (dain, navv) VALUES ('$ip', '$navegador'); ";


$resultado=mysqli_query($conexion,$consulta);
mysqli_close($conexion);
?>