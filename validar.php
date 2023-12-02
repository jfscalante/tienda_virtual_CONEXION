<?php
include 'conexion.php';

//obtener datos del formulario
$producto = $_POST["producto"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];

//insertar datos en la base de datos 
$sql = "INSERT INTO productos (producto, precio, descripcion, id_categoria) VALUES ('$producto', '$precio', '$descripcion', '$categoria')";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
}else{
    echo"Error: " . $sql . "<br>" .$conn->error;
}

$conn->close();
?>