<?php
    class consultas{


        public function loginUsuario( $email , $password ){
            $respuesta = null;

            try{
                $sql = "SELECT id_user,password,id_type_user FROM users WHERE  email = :email";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":email",$email);
                $stmt->execute();
                $informacionUsuario = $stmt->fetch(PDO::FETCH_ASSOC);
                if($informacionUsuario){
                    if(password_verify($password, $informacionUsuario["password"])){
                        $respuesta["estatus"] = "ok";
                        $respuesta["mensaje"] = [
                            "id_type_user" =>  $informacionUsuario["id_type_user"],
                            "id_user" =>  $informacionUsuario["id_user"]
                        ];
                    }else{
                        $respuesta["estatus"] = "error";
                        $respuesta["mensaje"] = "tu cuenta si existe, pero tienes un error en la contraseña";
                    }
                }else{
                    $respuesta["estatus"] = "error";
                    $respuesta["mensaje"] = "tu cuenta no existe";
                }
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }
            return $respuesta;

        }

        public function cargarCoordenadas($idTypeUser){
            $respuesta = null;

            try{
                $sql = "SELECT users.name, travel.lat, travel.lng
                        FROM users
                        INNER JOIN travel
                        ON users.id_user = travel.id_user
                        WHERE users.id_type_user = :id_type_user";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":id_type_user",$idTypeUser);
                $stmt->execute();
                $respuesta["estatus"] = "ok";
                $respuesta["mensaje"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }
            return $respuesta;
        }

        public function cargarUsuarios(){
            $respuesta = null;

            try{
                $sql = "SELECT * FROM usuarios";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $respuesta["estatus"] = "ok";
                $respuesta["mensaje"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }
            return $respuesta;
        }

        public function cargarUsuario( $idUsuario ){
            $respuesta = null;
            try{
                $sql = "SELECT * FROM usuarios  WHERE id_usuario = :id_usuario";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":id_usuario",$idUsuario);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                $respuesta["estatus"] = "ok";
                $respuesta["mensaje"] = $data;
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }
            return $respuesta;
        }
    }
?>