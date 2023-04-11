<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="java.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <title>Document</title>

</head>

<body>

  <div class="container">
    <div class="row p-1">
      <div class="col-3 pe-1">
        <form action="acciones/insertar.php" method="POST" enctype="multipart/form-data">
          <h3 class="text-center">Registro Persona</h3>
          <label for="">Nombre</label>
          <input class="form-control" type="text" name="nombre">
          <label for="">Email</label>
          <input class="form-control" type="email" name="email">
          <label for="">Imagen</label>
          <input class="form-control" type="file" name="foto">
          <button class="btn btn-primary mt-2" type="submit">Registrar</button>
        </form>
      </div>
      <div class="col-9 ps-3">
        <h3 class="text-center">Listado</h3>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Foto</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "config/bd.php";
            $query = listar();
            $enumeracion = 0;
            while ($datos = mysqli_fetch_assoc($query)) {
              $enumeracion++;
              $id = $datos['id'];
              $nombre = $datos['nombre'];
              $correo = $datos['email'];
              $foto = $datos['foto'];

            ?>
              <tr>
                <td><?= $enumeracion ?></td>
                <td><?= $nombre ?></td>
                <td><?= $correo ?></td>
                <td><img style="max-height:50px;" src="data:image/jpg;base64,<?= base64_encode($foto) ?>"></td>
                <td>
                  <a class="btn btn-info" href="ver.php?id=<?= $id ?>">Ver</a>
                  <a class="btn btn-warning" href="editar.php?id=<?= $id ?>">Actualizar</a>
                  <a class="btn btn-danger" href="acciones/eliminar.php?id=<?= $id ?>">Eliminar</a>
                </td>
              </tr>



            <?php



            }

            ?>




          </tbody>
        </table>
      </div>
    </div>
  </div>


</body>

</html>