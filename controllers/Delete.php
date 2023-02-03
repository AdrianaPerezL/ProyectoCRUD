<?php

include '../model/Connection.php';

$idPet = $_GET['id'];

$query = $bd->prepare("DELETE FROM mascota where id=?");

$result = $query->execute([$idPet]);

if($result){
    header("Location: ../templates/index.php");
}else{
    echo "Falló el registro";
}
?>