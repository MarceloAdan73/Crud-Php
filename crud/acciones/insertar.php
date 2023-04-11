<?php
include "../config/bd.php";

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$foto=$_FILES['foto'];

$foto=addslashes(file_get_contents($foto['tmp_name']));

$query=insertar($nombre,$email,$foto);

echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";

header('location:../index.php');

?>