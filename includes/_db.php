<?php

$host = "localhost";
$user = "id21628239_alejandroextra";
$password = "Alejandorextra1!";
$database = "id21628239_sazonhuasteco";


$conexion = mysqli_connect($host, $user, $password, $database);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>