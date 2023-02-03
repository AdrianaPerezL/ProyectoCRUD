<?php
include './Header.php'

?>

<?php
include '../controllers/getPets.php'

?>
<!-- Button trigger modal -->
<div class="container">
  <button type="button" class="botoncito2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Agregar Mascota
  </button>
</div>
<br>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ingrese los datos de la mascota</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card1 mb-30">

                    <form class="formulario" action="../controllers/Register.php" method="POST" enctype="multipart/form-data">
                        <div class="m-3">
                            <label>Nombre</label>
                            <input class="form-control" type="text" placeholder="Ingrese nombre de la mascota" name="inputName" required>
                        </div>
                        <div class="m-3">
                            <label>Foto</label>
                            <input class="form-control" type="file" placeholder="Ingrese la foto" name="inputPhoto" required>
                        </div>
                        <div class="m-3">
                            <label>Especie</label>
                            <input class="form-control" type="text" placeholder="Ingrese la especie" name="inputAnimal" required>
                        </div>
                        <div class="m-3">
                            <label>Raza</label>
                            <input class="form-control" type="text" placeholder="Ingrese la raza" name="inputBreed" required>
                        </div>
                        <div class="m-3">
                            <label>Edad</label>
                            <input class="form-control" type="text" placeholder="Ingrese la edad" name="inputAge" required>
                        </div>
                        <br>
                        <input type="submit" class="botoncito" value="Registrar" required>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <table class="table mb-0 bg-white">
      <thead class="bg-light">
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Raza</th>
          <th>Edad</th>
          <th>Actions</th>

        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($pet as $dato) {


        ?>

          <tr>
            <td><?php echo $dato->id ?></td>
            <td>
              <div class="d-flex align-items-center">
                <img class="rounded-circle" alt="" style="width: 90px; height: 90px" src="<?php echo $dato->foto ?>" />
                <div class="ms-3">
                  <p class="fw-bold mb-1"><?php echo $dato->nombre ?></p>
                  <p class="text-muted mb-0"><?php echo $dato->especie ?></p>
                </div>
              </div>
            </td>

            <td>
              <p class="fw-normal mb-1"><?php echo $dato->raza ?></p>
            </td>
            <td>
              <?php echo $dato->edad ?>
            </td>
            <td>
              <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark" >
                <a href="./Edit.php?id=<?php echo $dato->id?>"><i class="fa-solid fa-pen"></i></a>
              </button>
              <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                <a href="../controllers/Delete.php?id=<?php echo $dato->id ?>"><i class="fa-solid fa-trash"></i></a>
              </button>
            </td>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
</div>
<br>
<br>
</div>


<?php

include '../templates/Footer.php'

?>