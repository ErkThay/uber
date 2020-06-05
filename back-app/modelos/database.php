<?php
    class database{

        //variables de configuración
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "db_uber";

        // creamos nuestro metodo para la conexion a la base de datos
        public function getConnection(){
            $dbc  = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8;",$this->user,$this->password);
            return $dbc;
        }
    }
?>