<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Barra de navegación -->
    <div class="navbar bg-primary text-primary-content">
        <div class="flex-1">
            <a href="{{ route('index') }}" class="btn btn-ghost normal-case text-xl">Mi Aplicación</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('index') }}">Inicio</a></li>
                <li><a href="{{ route('tasks.create') }}">Crear Tarea</a></li>
            </ul>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Lista de Tareas</h1>

        <!-- Tabla de tareas -->
        <div class="overflow-x-auto w-full">
            <table class="table table-zebra w-full">
                <!-- Encabezado -->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Fecha límite</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tasks as $task)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->due_date }}</td>
                            <td>
                         
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay tareas registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
