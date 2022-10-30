<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use SoftDeletes;
    public $table = 'cliente';
    protected $primaryKey = 'id_raza';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'nombre',
    'id_especie',
    ]; 
    function especie(){
        return $this->belongsTo('App\Models\Especie','id_especie','id');
    } 
}
