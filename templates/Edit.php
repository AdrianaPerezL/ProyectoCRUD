

<?php

include './Header.php';
include '../model/Connection.php';

$idPet = $_GET['id'];

$query = $bd->prepare("SELECT * from mascota where id=?");

$query->execute([$idPet]);

$pet = $query->fetch(PDO::FETCH_OBJ);

?>

<div class="container">
      <form action="../controllers/Update.php" method="POST" enctype="multipart/form-data">
    <div class="m-3">
        <label>Nombre</label>
        <input class="form-control" type="text" placeholder="Ingrese nombre de la mascota" value="<?php echo $pet->nombre?>" name="inputName" required>
    </div>
    <div class="m-3">
        <label>Especie</label>
        <input class="form-control" type="text" placeholder="Ingrese la especie" value="<?php echo $pet->especie?>" name="inputAnimal" required>
        </div>
    <div class="m-3">
        <label>Foto</label>
        <input class="form-control" type="file" placeholder="Ingrese la foto"  value="<?php echo $pet->foto?>" name="inputPhoto" required>
    </div>
    <div class="m-3">
        <label>Raza</label>
        <input class="form-control" type="text" placeholder="Ingrese la raza"  value="<?php echo $pet->raza?>"name="inputBreed" required>
    </div>
    <div class="m-3">
        <label>Edad</label>
        <input class="form-control" type="text" placeholder="Ingrese la edad"  value="<?php echo $pet->edad?>" name="inputAge" required>
    </div>
    <input type="submit" class="btn btn-primary m-2" value="Editar" required>
    <input type="hidden" class="botoncito" value="<?php echo $pet->id?>" name="petId">
    <img class="perrito" src="/img/perritoo.png" alt="">
</form>

</div>

<div><img class="perrito" src="/img/perritoo.png" alt="">
</div>




<?php

include './Footer.php';
?>
