<?php
    $respuesta = null;
    include "modelos/database.php";
    include "modelos/consultas.php";
    include "modelos/inserciones.php";
    include "modelos/metodos-extra.php";

    $consultas = new consultas();
    $inserciones = new inserciones();
    $metodosExtra = new metodosExtra();
    
    $opcion = $_POST["opcion"];

    switch( $opcion ){
        case "registrarUsuario":
            $password = $metodosExtra->cifrarPassword( $_POST["password"] );
            $respuesta = $inserciones->registrarUsuario( $_POST["name"], $_POST["email"] , $password );
        break;

        case "loginUsuario":
            $respuesta = $consultas->loginUsuario( $_POST["email"] , $_POST["password"] );
        break;

        case "cargarCoordenadas":
            $respuesta = $consultas->cargarCoordenadas($_POST["id_type_user"]);
        break;

    }

    echo json_encode($respuesta);
?>