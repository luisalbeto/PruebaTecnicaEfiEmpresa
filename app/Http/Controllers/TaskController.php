<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Task::query();
    
        // Verificar si hay una búsqueda
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%$search%")
                  ->orWhere('description', 'like', "%$search%");
        }
    
        // Paginación
        $tasks = $query->paginate(5)->withQueryString(); // Mantener el valor de búsqueda en la paginación
    
        return view('tasks.index', compact('tasks'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retorna la vista para crear una nueva tarea
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // Validar los datos de entrada
      $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'due_date' => 'required|date',
        'status' => 'required|in:pendiente,en progreso,completada', // Validar valores permitidos
    ]);

    // Crear una nueva tarea
    Task::create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'due_date' => $request->input('due_date'),
        'status' => $request->input('status'), // Asegúrate de que este valor sea correcto
    ]);

    return redirect()->route('tasks.index')->with('success', 'Tarea creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Obtener la tarea por su ID
        $task = Task::findOrFail($id); // Si no existe, generará una excepción 404
        return view('tasks.show', compact('task')); // Pasa la tarea a la vista
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Obtener la tarea por su ID
        $task = Task::findOrFail($id); // Si no existe, generará una excepción 404
        return view('tasks.edit', compact('task')); // Pasa la tarea a la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);

        // Validar los datos del formulario
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'status' => 'required|in:pendiente,en progreso,completada', // Asegúrate de incluir las opciones válidas aquí
        ]);
    
        // Actualizar los datos de la tarea
        $task->update($validatedData);
    
        // Redirigir a la lista de tareas con un mensaje de éxito
        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Obtener la tarea por su ID
        $task = Task::findOrFail($id); // Si no existe, generará una excepción 404

        // Eliminar la tarea
        $task->delete();

        // Redirigir a la lista de tareas con un mensaje de éxito
        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada con éxito.');
    }
}

