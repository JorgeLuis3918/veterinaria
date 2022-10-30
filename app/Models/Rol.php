<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use SoftDeletes;
    public $table = 'rol';
    protected $primaryKey = 'id_rol';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'idescripcion',
    ]; 
}
