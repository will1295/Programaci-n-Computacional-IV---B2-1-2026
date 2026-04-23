<?php
    include 'conexion.php';
    $id = $_GET['id'];
    $stmt = $conexionsql->prepare("SELECT id,nombre,precio,stock,fcaducidad
    FROM productos WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $producto = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h4>Editar producto</h4>
    <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $producto['id'];?>">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $producto['nombre'];?>">
        <label for="">Precio</label>
        <input type="number" name="precio" id="" step=0.01 min=0.01 value="<?php echo $producto['precio'];?>">
        <label for="">Stock</label>
        <input type="number" name="stock" id="" step=1 min=1 value="<?php echo $producto['stock'];?>">
        <label for="">Fecha de caducidad</label>
        <input type="date" name="fecha" id="" value="<?php echo $producto['fcaducidad'];?>">
        <button type="submit">Actualizar informacion</button>
    </form>
</body>
</html>