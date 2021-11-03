<?php
session_start();


$id_cuarto = $_POST["cuarto"];

$clienteCod = $_SESSION["sesion"];
$reservado = $_SESSION["reserv"];

$ID_user = $_SESSION["sesion_val"];

// funcion
if ($reservado >= 1) {
    header('Refresh:0.5; url=home.php');
    echo "<script>    alert('Ya tienes una reservacion, espera a que expire la actual');  </script>";
    exit; 
    
}


// echo "Tipo de sesion : ".$tiposesion;
if (!isset( $_SESSION["sesion"] )) {
    header('Refresh:0.5; url=log.php');
    echo "<script>    alert('Es necesario iniciar sesion para está funcion intente de nuevo');  </script>";
    exit;   
}

//Hago la conexion sql, incluyendo los datos del servidor
include('noic.php');
//QUERY PARA LOCALIZAR cuantos cuartos hay disponibles
$consulta="SELECT * FROM hcnum WHERE n_hc = '$id_cuarto' ";
$resultado=mysqli_query($conexion,$consulta);
$fila = mysqli_fetch_array($resultado);
$ID_actualiza_cuarto = $fila['ID_ch'];

//UPDATE hcnum SET disp_lleno = '0' WHERE ID_ch = '11';
$consulta2="UPDATE hcnum SET disp_lleno = 1 WHERE ID_ch = '$ID_actualiza_cuarto' ";
$resultado2=mysqli_query($conexion,$consulta2);

//UPDATE hcnum SET cliente = 'a' WHERE ID_ch = '1';
$consulta3="UPDATE hcnum SET cliente = '$clienteCod'  WHERE ID_ch = '$ID_actualiza_cuarto' ";
$resultado3=mysqli_query($conexion,$consulta3);


//UPDATE usuarios_base SET reservacion = '1' WHERE ID_usuario = '2';

$consulta4 = "UPDATE usuarios_base SET reservacion = 1  WHERE ID_usuario = '$ID_user' ";
$resultado4=mysqli_query($conexion,$consulta4);

if ($resultado4) {
    header('Refresh:0.5; url=../index.php');
    echo "<script>    alert('Reservacion realizada con EXITO');  </script>";
    session_destroy();
    exit;
}


mysqli_close($conexion);

?>