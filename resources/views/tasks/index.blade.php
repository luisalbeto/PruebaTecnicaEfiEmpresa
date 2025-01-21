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
            <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">Mi Aplicación</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('tasks.create') }}">Crear Tarea</a></li>
            </ul>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Lista de Tareas</h1>

        <!-- Formulario de búsqueda -->
        <form method="GET" action="{{ route('tasks.index') }}" class="flex justify-center mb-6">
            <input 
                type="text" 
                name="search" 
                class="input input-bordered w-1/2" 
                placeholder="Buscar por título o descripción" 
                value="{{ request('search') }}" />
            <button type="submit" class="btn btn-primary ml-2">Buscar</button>
        </form>

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
                            <th>{{ $loop->iteration + ($tasks->currentPage() - 1) * $tasks->perPage() }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') }}</td>
                            <td>
                                <div class="flex space-x-2">
                                    <!-- Botón Ver -->
                                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                    <!-- Botón Editar -->
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <!-- Botón Eliminar -->
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta tarea?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-error">Eliminar</button>
                                    </form>
                                </div>
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

        <!-- Paginación -->
        <div class="mt-8">
            {{ $tasks->links() }}
        </div>
    </div>
</body>
</html>
