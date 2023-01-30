<?php
    session_start();
    include "../clases/conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $_id=$_POST['_id'];
    $datos = array(
        "nombre" => $_POST['nombre'],
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "edad" => $_POST['edad'],
    );

    $respuesta = $crud->actualizar($_id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header('location: ../index.php');
    }else{
        print_r($respuesta);
    }
?>