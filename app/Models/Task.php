<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $fillable = [
    'title',
    'description',
    'status',
    'due_date'
];

protected $casts = [
    'status' => 'string', // Puedes usar un enum en la base de datos
    'due_date' => 'date',
];

// Si deseas definir los timestamps
public $timestamps = true;
}
