<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use SoftDeletes;
    public $table = 'cliente';
    protected $primaryKey = 'id_cliente';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'nombre',
    'apellido',
    'direccion',
    'telefono',
    'correo',
    ];    
}
