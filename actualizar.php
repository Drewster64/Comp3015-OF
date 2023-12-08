<?php
    include 'conexion.php';

    $sql = "UPDATE usuarios SET nombre='John Valentin Jimenez', email = 'jvalentin8924@arecibointer.edu' WHERE id=11"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro actualizado con éxito"; 
    } else { 
        echo "Error actualizando el registro: ";
        echo  $conexion->error; 
    }

?>