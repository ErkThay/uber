<?php
    class metodosExtra{

        public function cifrarPassword($password){
            $passwordCifrado = null;
            $opciones = [
                'memory_cost' => 1 << 7, 
                'time_cost' => 4,
                'threads' => 2 
            ];
    
            $passwordCifrado = password_hash($password,PASSWORD_ARGON2I,$opciones);
            return $passwordCifrado;
        }
    }
?>