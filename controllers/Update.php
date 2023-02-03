<?php
include '../model/Connection.php';

$name = $_POST["inputName"];
$animal = $_POST["inputAnimal"];
$breed = $_POST["inputBreed"]; 
$age = $_POST["inputAge"];
$photo = $_FILES["inputPhoto"]["name"];
$ruta = $_FILES["inputPhoto"]["tmp_name"];
$destino= "../fotos/".$photo;
copy($ruta, $destino);


$query = $bd->prepare("UPDATE mascota SET nombre=?, especie=?, raza=?, edad=?, foto=? WHERE id=?");
$result = $query->execute([$name, $animal, $breed, $age, $destino, $id]);

if($result){
    header("Location: ../templates/index.php");
}else{
    echo "Falló el registro";
}

?>