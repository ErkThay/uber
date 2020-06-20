<?php
    session_start();
    $_SESSION["idUser"] = $_POST["idUser"];
    $_SESSION["idTypeUser"] = $_POST["idTypeUser"];

    $respuesta["estatus"] = "ok";
    $respuesta["mensaje"] = "Se han creado correctamente las credenciales de sesión";
    echo json_encode($respuesta);
?>