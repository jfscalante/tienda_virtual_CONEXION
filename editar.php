<?php

include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $producto = $_POST['producto'];
    $precio= $_POST['precio'];
    $descripcion= $_POST['descripcion'];
    $categoria = $_POST["categoria"];
    $sql = "UPDATE productos SET producto='$producto', precio='$precio', descripcion='$descripcion', id_categoria='$categoria' WHERE id_producto=$id";
    
  
  if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}
}

  ?>