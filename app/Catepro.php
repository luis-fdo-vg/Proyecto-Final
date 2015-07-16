<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class CatePro extends Model
{
    protected $table = 'cateproduc';
    public static function catepro($id){
       return self::join('productos','productos.id','=','cateproduc.id_producto')
       				->select('productos.id','productos.nombre_producto','productos.precio','productos.disponible')
       				->where('cateproduc.id_categoria','=',$id)
       				->get();
    }   
}