<?php
    session_start();
    require_once "./clases/conexion.php";
    require_once "./clases/crud.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();
    //alertas
    $mensaje= '';
    if(isset($_SESSION['mensaje_crud'])){
        $mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
        //destruye la sesion
        unset($_SESSION['mensaje_crud']);
    }
   
?>

<?php include "./header.php";?>
<!-- component -->
<div class="overflow-x-auto">
<h1 class="text-center font-medium ">Crud con MongoDB y PHP</h1>
    <div class="bg-gray-100 flex items-center justify-center font-sans overflow-hidden">
    
        <div class="w-full lg:w-5/6">
            <a href="./agregar.php"
                class="text-white bg-[#25D366] hover:bg-green-500 font-medium rounded-2xl  text-sm px-5 py-1 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 mr-2 mb-2">
                    Agregar
            </a>
            <div class="bg-white shadow-md rounded my-6">

                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Apellido Paterno</th>
                            <th class="py-3 px-6 text-center">Apellido Materno</th>
                            <th class="py-3 px-6 text-center">Edad</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                       <?php foreach ($datos as $item){ ?> 
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium"><?= $item->nombre ?></span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium"><?= $item->paterno ?></span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium"><?= $item->materno ?></span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium"><?= $item->edad ?></span>
                                </div>
                            </td>
                            
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <form action="./editar.php" method="POST">
                                        <input hidden type="text" name="_id" value="<?= $item->_id ?>">
                                        <button  class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                    </form>
                                    
                                    <form action="./procesos/eliminar.php" method="POST" >
                                        <input hidden type="text" name="_id" value="<?= $item->_id ?>">
                                        <button class="w-4 mr-2 transform text-red-400 hover:text-red-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    let mensaje = <?php echo $mensaje; ?>;
    console.log(mensaje);
</script>
<?php include "./scripts.php";?>
