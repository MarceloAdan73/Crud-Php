<?php

$id=$_GET['id'];
include "../config/bd.php";
$query=eliminar($id);

echo "<script>
alert('Usuario Eliminado Correctamente!');
window.location= '../index.php'
</script>";

?>
