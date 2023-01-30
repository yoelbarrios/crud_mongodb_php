<?php include"./header.php";?>

<!-- component -->
<h1 class="text-center font-medium ">Agregar registro</h1>
<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
    <form action="./procesos/insertar.php" method="POST">
      <div class="mb-5">
        <label
          for="nombre"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Nombre
        </label>
        <input
          type="text"
          name="nombre"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="paterno"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Apellido Paterno
        </label>
        <input
          type="text"
          name="paterno"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="materno"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Apellido Materno
        </label>
        <input
          type="text"
          name="materno"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="edad"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Edad
        </label>
        <input
          type="number"
          name="edad"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-1 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div>
        <button
          class="hover:shadow-form rounded-md bg-green-500 py-2 px-8 text-base font-semibold text-white outline-none"
        >
          Registrar
        </button>
      </div>
    </form>
  </div>
</div>
<?php include"./scripts.php";?>