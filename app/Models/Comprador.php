<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprador extends Model
{
    use HasFactory;
    public $table = "comprador";

    protected $fillable = [
        'tipo_doc',
        'documento',
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'direccion'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
