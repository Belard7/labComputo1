<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
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

            </tr>
        </thead> 
        <tbody>' ;
        while ($row  = $resultaado->fetch_assoc()) {
            echo '<tr>
                <td>'.$row['nombre'].'</td>
                <td>'.$row['descripcion'].'</td>
                <td>'.$row['precio'].'</td>
                <td>a href="eliminar.php?id='.$row['id'].'">Eliminar</a>
                <button 
                onclick=´return confirm(\"Eliminar Producto\")´>Eliminar</button>
                <a href="editar.php?id='.$row['id'].'">Editar</a>
                >button>Editar</button>
                </td> 
            </tr>';
        }
            echo  "</tbody>
            </table>";
    
    

    ?>
    
</body>
<?php include 'footer.php'; ?>
</html>