<?php

$id=$_GET['id'];
include "config/bd.php";
$datos=listarCliente($id);
$nombre=$datos['nombre'];
$email=$datos['email'];
$foto=$datos['foto'];


?>
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
    <title>Editar</title>
</head>
<body>
    <div class="container">
        <div class="w-50 bg-light p-3 m-auto">

            <form method="POST"  action="acciones/actualizar.php" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $id;?>">

             <div class="bg-primary p-2">
                <a class="btn btn-warning btn-sm" href="index.php">Inicio</a>
                <a class="btn btn-info btn-sm" href="ver.php?id=<?php echo $id ?>">Ver</a>
                <a class="btn btn-danger btn-sm" href="acciones/eliminar.php?id=<?php echo $id ?>">Eliminar</a>
             </div>

                <h3 class="text-center"><?=$nombre ?></h3>
                <label>Nombre de cliente</label>
                <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="<?=$email?>">
                <label>Imagen</label>
                <input class="form-control" type="file" name="foto">
                <center><img class="mt-2" style="max-height:50px;" src="data:image/jpg;base64,<?=base64_encode($foto) ?>"></center>
                <br>
                <button class="btn btn-primary mt-2" type="submit">Actualizar</button>
            
            </form>
        
        </div>
    </div>
    
</body>
</html>