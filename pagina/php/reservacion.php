<?php
session_start();
echo $_SESSION["sesion"];

// echo "Tipo de sesion : ".$tiposesion;

if (!isset( $_SESSION["sesion"] )) {

    header('Refresh:0.5; url=log.php');
    echo "<script>    alert('Es necesario iniciar sesion para está funcion intente de nuevo');  </script>";
    exit;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">
    <title>CLIENTE</title>
</head>
<body>
    <?php
    session_start(); //inicio de sesion
    $valorS = $_SESSION["sesion_val"];
    $valorS2 = $_SESSION["sesion_val2"];
    $valorS3 = $_SESSION["sesion_val3"];
    ?>

<header>
        <div id="menu">
            <ul>    
                <li><a><h1 class ="back" style="color: white;">Sistema de reservacion de habitacion, Disponibles :
                <?php

                include("consult2.php");

                ?>
            
            
                </h1></a></li>
                <!-- <li><a href="#">Restaurantes</a></li> -->
                <!-- <li><a href="#">Gestion Usuarios</a></li>
                 -->

                <li class="item-r"><a href="homeAdmin.php">
                    
                
                Volver
            
            
                
                </a></li>
            </ul>
        </div>
</header>
                
               
                <div class ="index2">
                    
                    <p><h1 class ="back2" style="color: #000000;"><mark>Habitaciones</mark></h1></p>
                    
                    <div class ="left">
                    <form method = "post" action="reserv2.php">
                        <table>
                            <tr>
                            <td>
                                
                                <select name ="cuarto">
                                    <?php
                                    include("consult3.php");
                                    ?>
                                </select>
                            </td>
                            </tr>
                            
                        </table>
                        <input type ="submit" value ="Realizar reserva">
                        
                    </form>
                        <!-- agrego un boton para enviar valores     -->
                        

                    </div>

                    
            
                </div>
                
            
</body>
</html>