<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use SoftDeletes;
    public $table = 'mascota';
    protected $primaryKey = 'id_mascota';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'nombre',
    'sexo',
    'fecha_nacimiento',
    'peso',
    'color',
    'tipo',
    ]; 
    function cliente(){
        return $this->belongsTo('App\Models\Cliente','id_cliente','id');
    } 
    function raza(){
        return $this->belongsTo('App\Models\Raza','id_raza','id');
    } 
}
