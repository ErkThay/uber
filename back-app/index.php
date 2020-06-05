<?php
    $respuesta = null;
    include "modelos/database.php";
<<<<<<< HEAD
    include "modelos/inserciones.php";
    include "modelos/metodos-extra.php";

    $inserciones = new inserciones();
    $metodosExtra = new metodosExtra();

=======
    include "modelos/consultas.php";
    include "modelos/inserciones.php";
    include "modelos/metodos-extra.php";

    $consultas = new consultas();
    $inserciones = new inserciones();
    $metodosExtra = new metodosExtra();
    
>>>>>>> proyecto
    $opcion = $_POST["opcion"];

    switch( $opcion ){
        case "registrarUsuario":
            $password = $metodosExtra->cifrarPassword( $_POST["password"] );
            $respuesta = $inserciones->registrarUsuario( $_POST["name"], $_POST["email"] , $password );
        break;
<<<<<<< HEAD
=======

        case "loginUsuario":
            $respuesta = $consultas->loginUsuario( $_POST["email"] , $_POST["password"] );
        break;
>>>>>>> proyecto
    }

    echo json_encode($respuesta);
?>