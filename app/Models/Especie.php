<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use SoftDeletes;
    public $table = 'especie';
    protected $primaryKey = 'id_especie';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'nombre_especie',
    ]; 
}
