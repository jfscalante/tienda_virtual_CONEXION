<?php
      include 'conexion.php';

    $id = $_REQUEST['Id'];
    $sql = "DELETE FROM productos WHERE id_producto ='$id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:index.php");
    }

?>