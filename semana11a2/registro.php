<?php
    include("conexion.php");

    $nombre = $_POST['nombre'];
    $departamento = $_POST['departamento'];

    $stmt = $conexion ->prepare("INSERT INTO sucursales 
    (nombre,departamento) VALUES (?,?)");
    $stmt->bind_param("ss",$nombre,$departamento);

    if($stmt->execute()){
        echo "Datos insertados correctamente";
    }
    else{
        echo "Error: ".$conexion->error;
    }
    $stmt->close();
    $conexion->close();
?>