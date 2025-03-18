<?php include 'conexion.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
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

        a {
            text-decoration: none;
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

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Estilos para los botones de acción */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons button {
            padding: 5px 10px;
            font-size: 14px;
        }

        .action-buttons button:nth-child(1) {
            background-color: #f44336; /* Rojo para eliminar */
        }

        .action-buttons button:nth-child(1):hover {
            background-color: #e53935;
        }

        .action-buttons button:nth-child(2) {
            background-color: #2196F3; /* Azul para editar */
        }

        .action-buttons button:nth-child(2):hover {
            background-color: #1e88e5;
        }
    </style>
</head>
<body>
    <h1>Lista de productos</h1>
    <a href="registrar.php"><button>Registrar nuevo producto</button></a>
    <?php

    $resultaado = $conexion->query("SELECT * FROM productos");

    echo '<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>stock</th>

            </tr>
        </thead> 
        <tbody>' ;
        while ($row  = $resultaado->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['nombre']}</td>
                <td>{$row['descripcion']}</td>
                <td>{$row['precio']}</td>
                <td>{$row['stock']}</td>
                <td>
                <a href='eliminar.php?id={$row['id_Producto']}'>
                <button
                onclick='return confirm(\"¿Estas seguro que deseas eliminar este producto?\")'
                >Eliminar</button>
                </a>

                <a href='editar.php?id={$row['id_Producto']}'>
                <button>Editar</button>
                </a>
                </td> 
            </tr>";
        }
            echo  "</tbody>
            </table>";
    
    

    ?>
    
</body>
<?php include 'footer.php'; ?>
</html>