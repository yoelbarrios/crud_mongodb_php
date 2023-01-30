<?php 
    
    class Crud extends Conexion{
        public function mostrarDatos(){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        public function obtenerDocumento($_id){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->findOne( array('_id' => new MongoDB\BSON\ObjectId($_id)));
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function insertarDatos($datos){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminar($_id){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->deleteOne(array("_id" => new MongoDB\BSON\ObjectId($_id)));
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function actualizar($_id, $datos){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->updateOne(array("_id" => new MongoDB\BSON\ObjectId($_id)),array('$set' => $datos ));
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function mensajesCrud($mensaje){
            $msg = '';
            if($mensaje == 'insert'){
                $msg= 'swal("excelente!","Agregado con exito","success")';
            }else if($mensaje == 'delete'){
                $msg= 'swal("excelente!","Registro eliminado","warning")';
            }else if($mensaje == 'update') {
                $msg= 'swal("excelente!","Actualizado con exito","info")';
            }
            return $msg;

        }
    }
?>