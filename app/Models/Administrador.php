<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use SoftDeletes;
    public $table = 'administrador';
    protected $primaryKey = 'id_admin';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'id_usuario',
    'nombre',
    'apellidos',
    'direccion',
    'fecha_nac',
    'correo',
    ];
    function usuario(){
        return $this->belongsTo('App\Models\User','id_usuario','id');
    }
}