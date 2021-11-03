<?php
// funcion
//Obtengo correo y lo cifro para ver si está, cifrado sha1



$correo=$_POST["correo"];
$correo2=$correo;
if (empty($correo)) {
    echo "<script>    alert('Correo o contraseña incorrectos, intente de nuevo');  </script>";
    include("log.php");
    exit;
}

$correo=sha1($correo);

//Obtengo la contraseña cifrada en hash salt, contando 10 veces, antes de hacer la funcion passverify
$contraseña=$_POST["contraseña"];
// $contraseña2=password_hash($contraseña,PASSWORD_DEFAULT, ['cost'=>10]);

if (empty($contraseña)) {

    echo "<script>    alert('Correo o contraseña incorrectos, intente de nuevo');  </script>";
    include("log.php");
    exit;
}


//Imprimo los valores para comprobar la veracidad de las encriptaciones
// echo "correo encript : ".$correo;
// echo "<br>";
// echo "contraseña no encript: ".$contraseña;
// echo "<br>";


//Hago la conexion sql, incluyendo los datos del servidor
include('noic.php');

//QUERY PARA LOCALIZAR SI ESTA EL CORREO
$consulta="SELECT * FROM usuarios_base where correo= '$correo'";

// $consulta2="SELECT rol FROM usuarios_base where correo= '$correo' and contra = '$contraseña'; ";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);



if($filas){
    //en el caso de que si está el correo, vamos a verificar el valor de la contraseña encriptada para ver si es correcta o incorrecta
    // echo "<br>";
    // echo "el correo si esta, para iniciar sesion";
    
    //Crear una variable que captura el calor de la contraseña
    $fila = mysqli_fetch_array($resultado);



    $valorEvaluar = $fila["contra"];
    $valorEvaluar2 = $fila["rol"];
    $valorEvaluar3 = $fila["ID_usuario"];
    $valorEvaluar4 = $fila["nombre"];
    $valorEvaluar5 = $fila["apellido"];
    $valorEvaluar6 = $fila["reservacion"];

    // echo "<br> Valor a Evaluar : ".$valorEvaluar;
//Condicion que verifique si la contraseña es la misma que la del valor guardado, encriptado
    if (password_verify($contraseña,$valorEvaluar)) {
         
        session_start(); //iniciando una sesion

        // echo "<br>Id antes de include es : ".$valorEvaluar3;
        $_SESSION["sesion"] = $correo;//sesion es el hash
        $_SESSION["sesion2"] = $correo2;//Correo sin hash
        $_SESSION["sesion_val"] = $valorEvaluar3;//ID usuario
        $_SESSION["sesion_val2"] = $valorEvaluar4;//NOMBRE
        $_SESSION["sesion_val3"] = $valorEvaluar5;//APELLIDO
        $_SESSION["tipodeUser"] = $valorEvaluar2;//ROL DE USUARIO
        $_SESSION["reserv"] = $valorEvaluar6;//Tiene reservacion
    
        
        // echo '<br>¡La contraseña es válida!';
        
        //     echo "<br>EL rol es : ".$valorEvaluar2;


                                    if ($valorEvaluar2 == 1) {
                                        // echo "<br> Homeadmin";

                                        include("homeAdmin.php");
                                        exit;

                                    }else
                                    
                                    if($valorEvaluar2 == 2){

                                        // echo "<br>Cliente";
                                        include("home.php");
                                        exit;

                                        }
                            //en el caso de que sí, entonces que evalue nuevamente otro valor      
    
            } 
        
        
        
                else {
                            
                    
                    echo "<script>    alert('Contraseña incorrecta, intente de nuevo');  </script>";
                    include("log.php");
                            
    }

  
}else{
    //no esta en la base de datos
    echo "<script>    alert('Correo o contraseña incorrectos, intente de nuevo');  </script>";

    include("log.php");
    session_destroy();
    exit;
    
    

  
  

  
}

mysqli_free_result($resultado);

mysqli_close($conexion);

?>