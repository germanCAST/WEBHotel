<?php
session_start();
echo $_SESSION["sesion"];
$tipo = $_SESSION["tipodeUser"];
// echo "Tipo de sesion : ".$tiposesion;

if (!isset($_SESSION["sesion"])) {


    header('Refresh:0.5; url=log.php');
    echo "<script>    alert('Es necesario iniciar sesion para está funcion intente de nuevo');  </script>";
    exit;
}

if ( $tipo == 2){
    header("Location:home.php");
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
    <title>ADMIN</title>
</head>
<body>
    <?php
    session_start(); //inicio de sesion
    $valorS = $_SESSION["sesion_val"];
    $valorS2 = $_SESSION["sesion_val2"];
    $valorS3 = $_SESSION["sesion_val3"];
    ?>
    <!-- section 1  -->
    <header>
        <div id="menu">
            <ul>    
                <li><a href="reservacion.php">Reservacion</a></li>
                <li><a href="#">Restaurantes</a></li>
                <li><a href="#">Gestion Usuarios</a></li>
                

                <li class="item-r"><a href="logout.php">
                    
                
                Cerrar sesion
            
            
                
                </a></li>
            </ul>
        </div>
    </header>
    <h1 style="text-align: center; color: white;">Bienvenido, <?php echo $valorS2. " " .$valorS3 ;?> </h1>
                
               
                <div class ="indexs">
                    <p>indexs</p>
                <div class ="adapt">
                    <p>div adapt</p>
                        <div class ="adapt2">

                            <p>div adapt 2</p>
                            </div>
                </div>
                
            </div>







    
    

</body>
</html>