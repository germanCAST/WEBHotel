<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


define('DB_SERVER', 'mysql5027.site4now.net');
define('DB_USERNAME', 'a7b0d4_germanc');
define('DB_PASSWORD', 'GFernando14');
define('DB_NAME', 'db_a7b0d4_germanc');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>