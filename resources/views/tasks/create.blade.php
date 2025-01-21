<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Tarea</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
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

  
    <h1 class="text-3xl font-bold underline text-center py-8">Crear Nueva Tarea</h1>
    <form method="POST" action="{{ route('tasks.store') }}" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    @csrf
    <div class="form-control mb-4">
        <label for="title" class="label">Título</label>
        <input type="text" id="title" name="title" class="input input-bordered w-full" required>
    </div>
    <div class="form-control mb-4">
        <label for="description" class="label">Descripción</label>
        <textarea id="description" name="description" class="textarea textarea-bordered w-full"></textarea>
    </div>
    <div class="form-control mb-4">
        <label for="due_date" class="label">Fecha límite</label>
        <input type="date" id="due_date" name="due_date" class="input input-bordered w-full">
    </div>
    <!-- Campo para el estado de la tarea -->
    <div class="form-control mb-4">
        <label for="status" class="label">Estado</label>
        <select id="status" name="status" class="select select-bordered w-full">
            <option value="pendiente">Pendiente</option>
            <option value="completada">Completada</option>
            <option value="en progreso">En Progreso</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary w-full">Guardar</button>
</form>
</body>
</html>
