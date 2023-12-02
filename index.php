<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>Document</title>
</head>

<!--aqui un scrip para confirmar la eliminacion de la insercion puesta-->
<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }
</script>


<body>
    <?php
    require 'conexion.php';

    $sql= "SELECT * FROM productos INNER JOIN categorias ON productos.id_categoria=categorias.id_categoria;";
    $resultado= $conn->query($sql);
    ?>
    <div>
        <h1 class="cabecera" >Mostrar Registros</h1>
    </div>
    <div calss="contenedor">
        <button class="crear"><a href="registro.php">Agregar Nuevo Registro</a></button>

        <table class = "tabla_datos table table-striped-columns">
            <thead>
                <tr>
                    
                    <th scope= "col">id_producto</th>
					<th scope= "col">producto</th>
                    <th scope= "col">precio</th>
                    <th scope= "col">descripcion</th>
                    <th scope= "col">categoria</th>
					<th scope= "col">editar</th>
					<th scope= "col">eliminar</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
						<td><?php echo $fila['id_producto']?></td>
						<td><?php echo $fila['producto']?></td>
                        <td><?php echo $fila['precio']?></td>
                        <td><?php echo $fila['descripcion']?></td>
                        <td><?php echo $fila['categoria']?></td>
                        <td> <a href="editarp.php?Id=<?php echo $fila['id_producto']?>"  onclick="return "><i class="fa-solid fa-file-pen" style="color: #10da1e;"></i></a></td>
                        <td> <a href="eliminar.php?Id=<?php echo $fila['id_producto']?>"  onclick="return confirmacion()"><i class="fa-solid fa-trash" style="color: #f20202;"></i></a></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>