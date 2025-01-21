<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Tarea</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
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
        <button type="submit" class="btn btn-primary w-full">Guardar</button>
    </form>
</body>
</html>
