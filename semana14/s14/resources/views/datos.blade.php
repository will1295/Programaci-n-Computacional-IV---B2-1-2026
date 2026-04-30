<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Informacion de los usuarios</h1>
    <ul>
        @foreach($query as $usuario)
        <li>Id {{$usuario['id']}}</li>
        <li>Nombre {{$usuario['nombre']}}</li>
        <li>Edad {{$usuario['edad']}}</li>
        @endforeach
    </ul>

</body>
</html>