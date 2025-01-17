<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    public function profesores()
    {
        return $this->hasMany(Profesor::class);
    }
}
