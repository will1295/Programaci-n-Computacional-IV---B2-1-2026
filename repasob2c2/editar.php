<?php
    include 'conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $fecha = $_POST['fecha'];

    $stmt = $conexionsql->prepare("UPDATE productos SET nombre=?,precio=?,stock=?,
    fcaducidad=? WHERE id=?");
    $stmt->bind_param("sdisi",$nombre,$precio,$stock,$fecha,$id);
    $stmt->execute();
    $stmt->close();
    header("Location:index.php");

?>