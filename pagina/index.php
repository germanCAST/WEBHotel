<?php

    if (isset($_GET['Message'])) {
        echo $_GET['Message'];
         }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <title>HOTEL UMG</title>
</head>


<body>
    <!-- section 1  -->
    <header>
        <div id="menu">
            <ul>    
                <li><a href="php/log.php">Acceder</a></li>
                <li><a href="php/sign up.php">Inscribirse</a></li>

                <li class="item-r"><a href="https://calendar.google.com/calendar/" target="_blank">

                    <?php
                       
                            
                    echo date("j/m/Y");

                    ?>


                    <!-- <section id="date"> </section>
                    <script type="text/javascript" src="js/script.js"></script> -->

                   

                    
                    
                </a>
                </li>

              

            </ul>
        </div>
    </header>
    <div class="adapt2">

            <div class ="indexs">

                <p class = "subtt1">Hola, Gracias por preferirnos, eres bienvenido la veces que lo necesites!</p>



                <div class="video">
                    <iframe  width="70%" height="400" 
                    src="https://www.youtube.com/embed/wmcXRyl-d1w" 
                    title="YouTube" frameborder="0.5" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>    
                
                    </iframe> 
                </div>
                    
                <div>

                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <footer>

                        <p class = "subtt2">
                            <mark>
                            Ingenieria en Sistemas - 2021 - UMG
                            </mark>
                        </p>
                        <a href="https://github.com/germanCAST" target="_blank">
                        
                        <p class = "subtt2">
                      
                            <mark class="video">  
                            German Castellanos
                            </mark>
                        
                        </p>
                        </a>

                    </footer>

                </div>


            </div>

            
        
 
    
        </div>




</body>
</html>
