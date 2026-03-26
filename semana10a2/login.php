<?php
        session_start();
        if($_POST['usuario']=!''){
            $usuario = $_POST['usuario'];
            $_SESSION['usuario'] = $usuario;
            header("Location:ejemplo5.php");
        }
        else{
            echo 'Error de datos';
        }
        
?>