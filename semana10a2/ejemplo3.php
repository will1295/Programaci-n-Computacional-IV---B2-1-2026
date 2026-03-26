<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        $_SESSION["usuario"] = "pepitoxxxxxxx";
        $_SESSION["tipo_usuario"] = "usuario";
    ?>

        <h1>Bienvenido al sistema <?php echo $_SESSION["usuario"]?></h1>

</body>
</html>