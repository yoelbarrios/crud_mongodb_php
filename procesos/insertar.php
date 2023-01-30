<?php
    session_start();
    include "../clases/conexion.php";
    include "../clases/crud.php";
    $crud = new Crud();
    $datos = array(
        "nombre" => $_POST['nombre'],
        "paterno" => $_POST['paterno'],
        "materno" => $_POST['materno'],
        "edad" => $_POST['edad'],
    );

    $respuesta = $crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0){
        $_SESSION['mensaje_crud'] = 'insert';
        header('location: ../index.php');
    }else{
        print_r($respuesta);
    }
?>