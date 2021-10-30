<?php
// funcion
session_start();
// echo "Tipo de sesion : ".$tiposesion;
if (!isset( $_SESSION["sesion"] )) {

    header('Refresh:0.5; url=log.php');
    echo "<script>    alert('Es necesario iniciar sesion para está funcion intente de nuevo');  </script>";
    exit;
    
}
//Hago la conexion sql, incluyendo los datos del servidor
include('noic.php');
//QUERY PARA LOCALIZAR cuantos cuartos hay disponibles
$consulta="SELECT * FROM hcnum WHERE disp_lleno = 0";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
echo $filas;
//Si no hay cuarto que se cierre el archivo;
if($filas<=0){
    header('Refresh:0.1; url=home.php');
    echo "<script>    alert('UPS! al parecer no hay habitaciones disponibles, intenta más tarde.');  </script>";
    exit;
}
// $fila = mysqli_fetch_array($resultado);
// $valorEvaluar = $fila["contra"];
// $valorEvaluar2 = $fila["rol"];
// $valorEvaluar3 = $fila["ID_usuario"];
// $valorEvaluar4 = $fila["nombre"];
// $valorEvaluar5 = $fila["apellido"];
// echo "<br>Id antes de include es : ".$valorEvaluar3;
// $_SESSION["sesion"] = $correo;//sesion es el hash
// $_SESSION["sesion_val"] = $valorEvaluar3;//ID
// $_SESSION["sesion_val2"] = $valorEvaluar4;//NOMBRE
// $_SESSION["sesion_val3"] = $valorEvaluar5;//APELLIDO
// $_SESSION["tipodeUser"] = $valorEvaluar2;//ROL DE USUARIO
mysqli_free_result($resultado);
mysqli_close($conexion);
?>