<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Campo id auto-incrementable
            $table->string('title'); // Campo title
            $table->text('description'); // Campo description
            $table->enum('status', ['pendiente', 'en progreso', 'completada']); // Campo status como enum
            $table->date('due_date'); // Campo due_date
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
