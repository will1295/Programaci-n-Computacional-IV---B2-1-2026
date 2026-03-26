<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arreglo = [1,2,3,4,5,6];
        $arreglo2 = array(5,12,7,"No");
        $arreglo3 = ["lunes"=>"programacion","martes"=>"ingles","miercoles"=>"redes"];
        $arreglo4 = ["San Miguel"=>["Municipios"=>["San Miguel Norte"],"San Miguel Centro","San Miguel Oeste"],
                    "Morazan"=>["San Francisco Gotera","Perquin"]];

        echo $arreglo[3];
        echo '<br>';
        echo $arreglo2[0];
        echo '<br>';
        echo $arreglo3["lunes"];
        echo '<br>';
        echo $arreglo4["San Miguel"][0];

    ?>
</body>
</html>