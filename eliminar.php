<?php 
include "./clases/conexion.php";
include "./clases/crud.php";
include "./header.php";

$crud = new Crud();
$_id=$_POST['_id'];
$datos = $crud->obtenerDocumento($_id);
print_r($datos);

?>


<!-- component -->
<h1 class="text-center font-medium ">Eliminar registro</h1>
<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
  <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert">
        <p class="font-bold">Estas seguro de eliminar?</p>
    </div>
  </div>
</div>
<?php include"./scripts.php";?>