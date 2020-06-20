<?php
    session_start();
    session_unset();
    session_destroy();
    $respuesta["estatus"] = "ok";
    $respuesta["mensaje"] = "Se han eliminaado correctamente las credenciales de sesión";
    echo json_encode($respuesta);
?>