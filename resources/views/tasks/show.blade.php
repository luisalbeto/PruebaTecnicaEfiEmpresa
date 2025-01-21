<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Tarea</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Barra de navegación -->
    <div class="navbar bg-primary text-primary-content">
        <div class="flex-1">
            <a href="{{ route('tasks.index') }}" class="btn btn-ghost normal-case text-xl">Mi Aplicación</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('tasks.index') }}">Tareas</a></li>
                <li><a href="{{ route('tasks.create') }}">Crear Tarea</a></li>
            </ul>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Detalles de la Tarea</h1>

        <!-- Tarjeta de detalles -->
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Título:</h2>
                <p class="text-lg text-gray-700">{{ $task->title }}</p>
            </div>
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Descripción:</h2>
                <p class="text-lg text-gray-700">{{ $task->description }}</p>
            </div>
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Fecha límite:</h2>
                <p class="text-lg text-gray-700">{{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</p>
            </div>
            <div class="mb-4">
                <h2 class="text-2xl font-bold">Estado:</h2>
                <p class="text-lg text-gray-700 capitalize">{{ $task->status }}</p>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-between">
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Editar</a>
            </div>
        </div>
    </div>
</body>
</html>
