<?php

    //mysqli -?
    //pdo - ?
    $host = "localhost";
    $username = "root";
    $db = "repasob2c2";
    $pass = "";


    $conexionsql = new mysqli($host,$username,$pass,$db);

    if($conexionsql->connect_error){
        die("Error de conexion: ".$conexion->connect_error);
    }


?>