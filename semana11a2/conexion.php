<?php
    //mysqli o pdo

    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "practicas11a2";

    $conexion = new mysqli($host,$user,$pass,$base);

    if($conexion ->connect_error){
        die("Error de conexion: ".$conexion->connect_error);
    }


?>