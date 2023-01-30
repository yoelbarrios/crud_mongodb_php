<?php
    session_start();
    include "../clases/conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $_id = $_POST['_id'];

    $respuesta = $crud->eliminar($_id);

    if ($respuesta->getDeletedCount() > 0){
        $_SESSION['mensaje_crud'] = 'delete';
        header('location: ../index.php');
    }
?>