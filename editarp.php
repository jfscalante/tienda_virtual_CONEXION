<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<h1 class="text-center" style= "background-color:black;color:white;borderadius:5px" >EDITAR PRODUCTOS</h1>
  <br>
<form class="container" action="editar.php" method="POST">

    <?php 
 include 'conexion.php';
$sql = "SELECT * FROM  libros WHERE  id_libros= ".$_REQUEST['Id'];
$resultado = $conn ->query($sql);
$row =$resultado->fetch_assoc();
?>
  <input type="text" class="form-control" name="id" value="<?php echo $row['id_libros'];?>">



    <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'];?>">
</div>
  <div class="mb-3">
    <label class="form-label">autor</label>
    <input type="text" class="form-control"name="autor" value="<?php echo $row['autor'];?>" >
  </div>
  <div class="mb-3">
    <label class="form-label">precio</label>
    <input type="text" class="form-control"name="precio" value="<?php echo $row['precio'];?>" >
  </div>

  <div class="mb-3">
    <label class="form-label">disponible</label>
    <input type="text" class="form-control"name="disponible" value="<?php echo $row['disponible'];?>" >
  </div>
 
   
   <button type="submit" class="btn btn-warning">Modificar</button>
   <a href="index.php"class="btn btn-success">Regresar</a>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
      </html>