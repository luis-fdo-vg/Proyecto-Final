<?php 
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Categoria;
use App\Catepro;
use App\Venta;

class ConsumiblesController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		$buy=Venta::venta();
		return view('vistaBienvenido', compact("buy"));
	
	}

	public function mapa()
	{
		$buy=Venta::venta();
		return view('vistaUbicacion', compact("buy"));
	
	}

	public function publicacion()
	{
		$buy=Venta::venta();
		return view('vistaPublicacion', compact("buy"));
	
	}

	public function productos(){
		$buy=Venta::venta();
		$cate=Categoria::allcategoria();
		$produc=Producto::allproductos();
		return view('vistaProductos',compact("produc","cate","buy"));
	}

	public function anadircart($id){
		$cart=Producto::carrito($id);
		Cart::add('{{$cart->nombre_producto}}',1,'{{$cart->precio}}');
		 \Redirect::back();
	}

	public function anadirventa($id){
		$buy=Venta::venta();
		DB::insert('insert into ventas (id_producto, num_compras) values (?, ?)', [$id, 1]);
		DB::update('update productos set disponible = (disponible - 1) where id = ?', [$id]);
		$cate=Categoria::allcategoria();
		$produc=Producto::allproductos();
		return view('vistaProductos',compact("produc","cate","buy"));

	}

	public function categorias($id){
		$buy=Venta::venta();
		$cate=Categoria::allcategoria();
		$produc=Catepro::catepro($id);
		return view('vistaProductos',compact("produc","cate","buy"));
		
	}

	public function borrar($id,$idpro){
		DB::update('update productos set disponible = (disponible + 1) where id = ?', [$idpro]);
		DB::delete('delete from ventas where id_ventas = ?', [$id]);

		$buy=Venta::venta();
		$cate=Categoria::allcategoria();
		$produc=Producto::allproductos();
		return view('vistaProductos',compact("produc","cate","buy"));
	}


	
}