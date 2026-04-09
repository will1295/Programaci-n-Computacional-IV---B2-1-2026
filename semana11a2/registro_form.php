<?php
    include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registro de surcursal</h2>
    <form action="registro.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Departamento</label>
        <select name="departamento" id="">
            <option value="sm">San Miguel</option>
            <option value="ss">San Salvador</option>
            <option value="lu">La Union</option>
            <option value="sa">Santa Ana</option>
        </select>
        <button type="submit">Registar</button>
    </form>
</body>
</html>