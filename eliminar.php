<?php include  'conexion.php'; 
$id= $_GET['id'];
$conexion -> query("DELETE FROM productos WHERE id_Producto = $id");
header("Location: index.php");

?>


 