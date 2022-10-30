<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta_medica extends Model
{
    use SoftDeletes;
    public $table = 'consulta_medica';
    protected $primaryKey = 'id_consulta';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'ip_tipo de servicio',
    'motivo',
    'observaciones',
    'diagnostico',
    ];  
    function tipo_servicio(){
        return $this->belongsTo('App\Models\Tipo_servicio','id_tipo de servicio','id');
    }
}
