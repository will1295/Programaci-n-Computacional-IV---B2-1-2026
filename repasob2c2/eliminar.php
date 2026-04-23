<?php
    include 'conexion.php';

    $id = $_GET['eliminar'];
    $stmt = $conexionsql->prepare("DELETE FROM productos WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
    header("Location:index.php");

?>