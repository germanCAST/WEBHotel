<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">

    <title>Hotel UMG</title>


</head>

<body>
    

<!--LOGIN-->
 <div class = "adapt">
    <section>
        <div class = "login">
          <div class= "login2">

        <h1 style="text-align: center; color: white;">REGISTRATE</h1>
          </div>         
        </div>

    <!-- formulario -->
        <!-- padre -->
         <div class = "formulario">

            <div class = "formulario2">
                <form id = "id_formulario" action ="regs.php" method="post">
                <p class="input">CORREO</p>
                <p><input type="email" name="correo" size="40" id ="correo_2"></p>
                <p class="input">CONTRASEÑA</p>
                <p><input type="password" name="pass" size="40" id ="pass_2"></p>
                <p class="input">NOMBRE</p>
                <p><input type="text" name="nombre" size="40" id = "nombre_2"></p>
                <p class="input">APELLIDO</p>
                <p><input type="text" name="apellido" size="40" id = "apellido_2"></p>

                <p class="input">NUMERO DE TELEFONO</p>
                <p><input type="text" name="telef" size="40" id ="telefono_2"></p>
                <input id = "botonSUB" type="submit" value="LISTO"  ></p>            

                </form>
                

                </div>

                
            </div>



    </section>
</div>


  <script>
    var formulario = document.getElementById("id_formulario"),
    comodin = true;
 
    formulario.addEventListener("submit", function(event){
    
    var elementos = this.elements;

    for (var i in elementos){

        if (!elementos[i].value.length){

            alert("Debe de completar los campos");
            comodin = false;

            event.preventDefault();
            
            break;
        
          }
    
        }

    
    if (comodin){
      event.currentTarget.submit();
    }

    }
    , 
    false);
  </script>



</body>
</html>