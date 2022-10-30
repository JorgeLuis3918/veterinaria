<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia_clinica extends Model
{
    use SoftDeletes;
    public $table = 'historia_clinica';
    protected $primaryKey = 'id_historia';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'dia_admision',
    'hora',
    'id_admin',
    'id_mascota',
    'id_consulta',
    ]; 
    function tipo_servicio(){
        return $this->belongsTo('App\Models\Administrador','id_admin','id');

    } 
    function mascota(){
        return $this->belongsTo('App\Models\Mascota','id_mascota','id');
    } 
    function consulta(){
        return $this->belongsTo('App\Models\Consulta_medica','id_consulta','id');
    } 
}
