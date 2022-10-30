<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_servicio extends Model
{
    use SoftDeletes;
    public $table = 'tipo_servicio';
    protected $primaryKey = 'id_servicio';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'nombre_servicio',
    ]; 
    
}
