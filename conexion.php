<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "registroestacionamientojusto";

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    
    echo 'El sitio web esta experimentando problemas';
    
}



