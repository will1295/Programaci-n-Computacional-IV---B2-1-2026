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
    <h1>Listado de sucursales</h1>
    <a href="registro_form.php"><button type="button">Registrar nueva</button></a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM sucursales";
                $resultado = $conexion->query($sql);
                if($resultado->num_rows>0){
                    while($fila = $resultado->fetch_assoc()){
                        echo "<tr>
                        <td>{$fila['nombre']}</td>";
                        if($fila['departamento']=='sm'){
                             echo"<td>San Miguel</td></tr>";
                        }
                    }
                }
                else{
                    echo "<tr><td>No hay registros!</td></tr>";
                }
            ?>

        </tbody>
    </table>
</body>
</html>