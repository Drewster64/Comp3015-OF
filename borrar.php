<?php
    include 'conexion.php';
    
    $sql = "DELETE FROM usuarios WHERE id=8"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro eliminado con éxito"; 
    } else { 
        echo "Error al eliminar el registro: ";
        echo $conexion->error; 
    }

?>