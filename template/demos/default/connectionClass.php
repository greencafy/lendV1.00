<?php

function conecta(){
$user = 'root';
$password = 'root';
$db = 'lendpal';
$host = 'localhost';
$port = 3306;


$connection = new mysqli($host, $user, $password, $db);

if($connection->connect_errno){
    return "no se ha podido conectar ";
}else{

    return "conexion exitosa!";
    
}


}


?>