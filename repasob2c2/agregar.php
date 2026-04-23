<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $fecha = $_POST['fecha'];

    $stmt = $conexionsql->prepare("INSERT INTO productos(nombre,precio,
    stock,fcaducidad) VALUES (?,?,?,?)");

    $stmt->bind_param("sdis",$nombre,$precio,$stock,$fecha);
    $stmt->execute();
    $stmt->close();
    header("Location:index.php");
 
?>