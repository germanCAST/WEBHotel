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
//Si no hay cuarto que se cierre el archivo;
while($fila = $resultado->fetch_assoc()):
        $id = $fila['ID_hc'];        
        $nombre = $fila['n_hc'];
        // $_SESSION[$nombre] = $id;
        echo "<option value= $nombre >$nombre</option>";        
endwhile;
mysqli_free_result($resultado);
mysqli_close($conexion);
?>