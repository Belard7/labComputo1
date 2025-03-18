<?php include  'conexion.php'; 
$id= $_GET['id_producto'];
$conexion -> query("DELETE FROM productos WHERE id_producto = $id");
header("Location: index.php");

?>


 