<?php

function conexion(){
    $conexion=mysqli_connect('localhost','root','','bd-crud');
    return $conexion;
}

function listar(){
    $sql="SELECT * FROM personas";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function insertar($nombre,$correo,$foto){
    $sql="INSERT INTO personas(nombre,email,foto) values('$nombre','$correo','$foto')";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function eliminar($id){
    $sql="DELETE FROM personas WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function listarCliente($id){
    $sql="SELECT * FROM personas WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return mysqli_fetch_assoc($query);
}

function actualizar($id,$nombre,$email,$foto){
    $sql="UPDATE personas SET nombre='{$nombre}' ,email='{$email}', foto='{$foto}' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function actualizarSinFoto($id,$nombre,$email){
    $sql="UPDATE personas SET nombre='{$nombre}' ,email='{$email}' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;    
}

?>

