<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Producto extends Model
{
    protected $table = 'productos';
    public static function allproductos(){
       return self::select('id','nombre_producto','precio','disponible')->get();
    }   
}