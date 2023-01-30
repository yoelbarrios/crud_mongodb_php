<?php 
    require_once $_SERVER['DOCUMENT_ROOT']. "/crud_mongo/vendor/autoload.php";
    class Conexion {
        public function conectar(){
            try{
                $servidor = "127.0.0.1";
                $usuario = "mongoadmin";
                $password = "123456";
                $database = "crud";
                $puerto = "27017";

                $cadenaConexion = "mongodb://".$usuario. ":".$password."@".$servidor.":".$puerto."/".$database;
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($database);
            }catch(\throwable $th ){
                return $th->getMessage();
            }
        }
    }

    // $objeto = new Conexion();
    // var_dump($objeto->conectar());
?>