<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Venta extends Model
{
    protected $table = 'ventas';
    public static function venta(){
       return self::join('productos','productos.id','=','ventas.id_producto')
       				->select('productos.nombre_producto','ventas.num_compras','producto.precio','sum(producto.precio) as total')
       				->get();
    }   
}