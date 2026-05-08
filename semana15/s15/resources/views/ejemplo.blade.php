<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app">
        <nombre-component :nombre='@json($nombre)'></nombre-component>
    </div>
</body>
</html>