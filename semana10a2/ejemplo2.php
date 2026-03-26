<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sumar($n1,$n2){
            $resultado = $n1+$n2;
            echo $resultado;
            //return $resultado;
        }

        function cuadrado(&$n1){
            $n1 = $n1**2;
            return $n1;
        }
    
        $numero1 = 20;
        $numero2 = 30;
        sumar($numero1,$numero2);
        echo '<br>';
        echo 'Mi numero antes de operarlo es: '.$numero1;
        echo '<br>';
        echo cuadrado($numero1);
        echo '<br>';
        echo 'Mi numero despues de operarlo es: '.$numero1;


    ?>
</body>
</html>