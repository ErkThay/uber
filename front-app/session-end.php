<?php 
    session_start();
    session_unset();
    session_destroy();

    $respusta["estatus"] = "ok";
    $respusta["mensaje"] = "se han eliminado las credenciales de sesión"; 

    echo json_encode($respusta);
?>