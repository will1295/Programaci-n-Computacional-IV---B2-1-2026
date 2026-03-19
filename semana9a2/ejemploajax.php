<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="miFormulario" action="" method="post">
        <input id="nombre" name="usuario" type="text" placeholder="Escribe tu nombre">
        <button id="miBoton" type="submit">Mostrar mensaje</button>
        <p id="mostrar"></p>
    </form>
    
<script>
    var formulario = document.querySelector("#miFormulario");
    var parrafo = document.querySelector("#mostrar");

    formulario.addEventListener('submit', function(e) {
        e.preventDefault();

        var datos = new FormData(formulario);

        fetch('procesar.php', {
            method: 'POST',
            body: datos
        })
        .then(respuesta => respuesta.text())
        .then(texto => {
            parrafo.innerHTML = texto;
        })
        .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>