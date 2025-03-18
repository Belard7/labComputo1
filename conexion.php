<?php 
    $conexion = mysqli_connect("localhost", "root", "", "lab1");
    if( mysqli_connect_errno() ){
        echo "Error al conectar a la base de datos";
        
    }else{
        #echo "Conexión exitosa";
    }
    
?>