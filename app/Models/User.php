<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use SoftDeletes;
    public $table = 'users';
    protected $dates = ['delete_at'];
    
    public $fillable = [
    'nombre_usuario',
    'rol_id',
    'email',
    'password',
    ];
    function roles(){
        return $this->belongsTo('App\Models\Rol','rol_id','id_rol');
    }
}
