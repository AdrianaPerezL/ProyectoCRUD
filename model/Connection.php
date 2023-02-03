<?php

$password = "";
$user = "root";
$name_bd = "mascota";

try{
//lo intentará

$bd = new PDO(
    
    'mysql:host=localhost;
    dbname='.$name_bd,
    //nombre de la base de datos en la dbname
    $user, $password,
    //set names para recibir todos los carácteres
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

} catch(Exception $e){
//si hay error lo agarrá
echo "La conexión no funcionó: ".$e->getMessage();
}
