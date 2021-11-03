<?php
// funcion
session_start();
// echo "Tipo de sesion : ".$tiposesion;
if (!isset( $_SESSION["sesion"] )) {
    header('Refresh:0.5; url=log.php');
    echo "<script>    alert('Es necesario iniciar sesion para está funcion intente de nuevo');  </script>";
    exit;   
}

$usuarioA = $_SESSION["sesion"];
//Hago la conexion sql, incluyendo los datos del servidor
include('noic.php');
//QUERY PARA LOCALIZAR cuantos cuartos hay disponibles
$consulta="SELECT * FROM hcnum WHERE cliente = '$usuarioA' ";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

$fila = mysqli_fetch_array($resultado);


$cuarto = $fila['n_hc'];
$codigoH = $fila['codigo_habit'];

if ($filas) {
    //Si tiene una reserva que la muestre
    echo "Reservacion de :".$cuarto;

    echo "<br>Codigo de habitacion : ".$codigoH;


}else{

    echo "No tienes reservaciones, puedes ingresar a : Reservacion";

}




?>