<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
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
                <li><a href="{{ route('tasks.index') }}">Inicio</a></li>
                <li><a href="{{ route('tasks.create') }}">Crear Tarea</a></li>
            </ul>
        </div>
    </div>

    <!-- Contenedor principal -->
    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Editar Tarea</h1>

        <!-- Formulario de edición -->
        <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="form-control mb-4">
                <label for="title" class="label">Título</label>
                <input type="text" id="title" name="title" class="input input-bordered w-full" value="{{ old('title', $task->title) }}" required>
            </div>
            <div class="form-control mb-4">
                <label for="description" class="label">Descripción</label>
                <textarea id="description" name="description" class="textarea textarea-bordered w-full">{{ old('description', $task->description) }}</textarea>
            </div>
            <div class="form-control mb-4">
                <label for="due_date" class="label">Fecha límite</label>
                <input type="date" id="due_date" name="due_date" class="input input-bordered w-full" value="{{ old('due_date', $task->due_date) }}">
            </div>
            <div class="form-control mb-4">
                <label for="status" class="label">Estado</label>
                <select id="status" name="status" class="select select-bordered w-full">
                    <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pendiente</option>
                    <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completada</option>
                    <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>En Progreso</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-full">Actualizar</button>
        </form>
    </div>
</body>
</html>
