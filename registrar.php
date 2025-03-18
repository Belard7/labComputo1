<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="">
    <label for="">Descripción</label>
    <input type="text" name="descripcion" id="">
    <label for="">Precio</label>
    <input type="text" name="precio" id="">
    <label for="text">Stock</label>
    <input type="text" name="stock" id="">
    <button type="submit">Registrar</button>
    <a href="index.php"><button type="button">Cancelar</button></a>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombreP = $_POST['nombre'];
        $descripcionp = $_POST['descripcion'];
        $preciop = $_POST['precio'];
        $stockp = $_POST['stock'];
        
        $insercion = $conexion->query("INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombreP', '$descripcionp', '$preciop', '$stockp')");
        $insercion->bind_param("sss", $nombreP, $descripcionp, $preciop, $stockp);
        $insercion->execute();
        header("Location: index.php");
    }
    ?>


    
</body>
<?php include 'footer.php'; ?>
</html>