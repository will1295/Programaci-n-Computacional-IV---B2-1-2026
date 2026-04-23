<?php
    include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tiendita de la esquina</h1>
    <h3>Productos disponibles</h3>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha de caducidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM productos";
                $resultado = $conexionsql->query($query);
                while($row=$resultado->fetch_assoc()):
            ?>
            <tr>
                <td><?php echo $row['nombre']; ?> </td>
                <td><?php echo $row['precio']; ?> </td>
                <td><?php echo $row['stock']; ?> </td>
                <td><?php if($row['fcaducidad']=="0000-00-00"){
                    echo 'Producto no perecedero';
                }else{
                    echo $row['fcaducidad'];
                } ?> </td>
                <td><a href="formeditar.php?id=<?php echo $row['id']?>"><button>Editar</button></a></td>
                <td><a href="eliminar.php?eliminar=<?php echo $row['id']?>"><button>Eliminar</button></a></td>
            </tr>
            <?php  endwhile  ?>
        </tbody>
    </table>


    <h4>Nuevo producto</h4>
    <form action="agregar.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Precio</label>
        <input type="number" name="precio" id="" step=0.01 min=0.01>
        <label for="">Stock</label>
        <input type="number" name="stock" id="" step=1 min=1>
        <label for="">Fecha de caducidad</label>
        <input type="date" name="fecha" id="">
        <button type="submit">Guardar Nuevo</button>
    </form>


</body>
</html>