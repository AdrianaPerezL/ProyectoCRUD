<?php

include '../model/Connection.php';


$query = $bd->query("SELECT * from mascota");
$pet = $query->fetchAll(PDO::FETCH_OBJ);

?>