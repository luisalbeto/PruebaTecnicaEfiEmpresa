<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Inicio</title>
</head>
<body class="bg-gray-100">

  <!-- Barra de navegación -->
  <div class="navbar bg-primary text-primary-content">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl" href="{{ route('home') }}">Mi Aplicación</a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <li><a href="{{ route('tasks.index') }}">Tareas</a></li>
        <li><a href="{{ route('tasks.create') }}">Crear</a></li>
      </ul>
    </div>
  </div>

  <!-- Contenido principal -->
  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Bienvenido</h1>
        <p class="py-6">Gestiona tus tareas de manera eficiente con nuestra aplicación. Crea, edita y visualiza tus tareas con facilidad.</p>
      </div>
    </div>
  </div>

  <!-- Sección de características -->
  <div class="container mx-auto py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Características</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Tarjeta 1 -->
      <div class="card bg-white shadow-xl">
        <div class="card-body">
          <h2 class="card-title">Crear Tareas</h2>
          <p>Crea tareas fácilmente y establece plazos para mantenerte organizado.</p>
        </div>
      </div>
      <!-- Tarjeta 2 -->
      <div class="card bg-white shadow-xl">
        <div class="card-body">
          <h2 class="card-title">Editar Tareas</h2>
          <p>Actualiza los detalles de tus tareas en cualquier momento.</p>
          <div class="card-actions justify-end">
          </div>
        </div>
      </div>
      <!-- Tarjeta 3 -->
      <div class="card bg-white shadow-xl">
        <div class="card-body">
          <h2 class="card-title">Detalles</h2>
          <p>Consulta la información completa de cada tarea para mantenerte informado.</p>
          <div class="card-actions justify-end">
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
