<?php

if (empty($_POST["inputName"])   /* || empty($_POST["inputPhoto"])  */  || empty($_POST["inputBreed"]) || empty($_POST["inputAge"])){
    echo "Error, complete el formulario";
    exit();
}


$name = $_POST["inputName"];
$animal = $_POST["inputAnimal"];
$breed = $_POST["inputBreed"]; 
$age = $_POST["inputAge"];
$photo = $_FILES["inputPhoto"]["name"];
$ruta = $_FILES["inputPhoto"]["tmp_name"];
$destino= "../fotos/".$photo;
copy($ruta, $destino);


require '../model/Connection.php';

$query = $bd->prepare("INSERT INTO mascota(nombre,especie,raza,edad,foto) VALUES(?,?,?,?,?);");
$result = $query->execute([$name,$animal,$breed,$age,$destino]);

if ($result){
    header("Location: ../templates/index.php");
}else{
    echo "Falló en el registro";
}
?>