<?php include 'conexion.php';


    $id = $_GET['id'];
    $resultado= $conexion->query("SELECT *FROM 
    productos WHERE id_Producto=$id");
    $producto = $resultado->fetch_assoc();
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Productos</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="" 
        value="<?php echo $producto['nombre']?>">
        <label for="">Descripcion</label>
        <input type="text" name="descripcion" id=""
        value="<?php echo $producto['descripcion']?>">
        <label for="">Precio</label>
        <input type="text" name="precio" id=""
        value="<?php echo $producto['precio']?>">
        <label for="">Stock</label>
        <input type="text" name="stock" id="">
        <button type="submit">Actualizar Registro</button>
        <a href="index.php"><button type="button">Cancelar</button></a>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nom = $_POST['nombre'];
            $des = $_POST['descripcion'];
            $prec = $_POST['precio'];
            $stok = $_POST['stock'];

            $insercion = $conexion
            ->prepare("UPDATE productos SET
            nombre=?,descripcion=?,precio=?,stock=? WHERE id_Producto=$id");
            $insercion->bind_param("ssss", $nom, $des, $prec, $stok);
            $insercion->execute();
            header("Location:index.php");

        }

    ?>
</body>
<?php include 'footer.php'?>
</html>