<?php
    class inserciones{

        public function registrarUsuario($name ,$email,$password){

            $respuesta = null;

            try{
                $sql = "INSERT INTO users ( name , email , password , id_type_user) VALUES ( :name , :email , :password , :id_type_user )";
                $typeUser = 3;
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":name",$name);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":password",$password);
                $stmt->bindParam(":id_type_user",$typeUser);
                $stmt->execute();
                $respuesta["estatus"] = "ok";
                $respuesta["mensaje"] = "Tu cuenta se ha registrado con el usuario ${name}";
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }

            return $respuesta;
        }
    }
?>