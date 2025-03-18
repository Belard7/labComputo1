<?php include 'conexion.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar producto</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        a button {
            background-color: #f44336;
        }

        a button:hover {
            background-color: #e53935;
        }
    </style>
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
        
        $insercion = $conexion->prepare("INSERT INTO productos (nombre, descripcion, precio,stock) VALUES (?,?,?,?)");
        $insercion->bind_param("ssss", $nombreP, $descripcionp, $preciop, $stockp);
        $insercion->execute();
        header("Location: index.php");
    }
    ?>


    
</body>
<?php include 'footer.php'; ?>
</html>