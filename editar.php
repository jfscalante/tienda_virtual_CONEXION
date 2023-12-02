<?php

include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $autor= $_POST['autor'];
    $precio= $_POST['precio'];
    $disponible = $_POST["disponible"];
    $sql = "UPDATE libros SET nombre='$nombre', autor='$autor', precio='$precio', disponible='$disponible' WHERE id_libros=$id";
    
  
  if ($conn->query($sql) === TRUE) {
    header("Location:mostrar.php");
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}
}

  ?>