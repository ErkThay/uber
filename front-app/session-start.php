<?php 
    session_start();

    $_SESSION["idUser"] = $_POST["idUser"];
    $_SESSION["idTypeUser"] = $_POST["idTypeUser"];

    $respusta["estatus"] = "ok";
    $respusta["mensaje"] = "se an creado las credenciales de sesión"; 

    echo json_encode($respusta);
?>