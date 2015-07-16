<?php 
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Categoria;
use App\Catepro;

class ConsumiblesController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('welcome');
	
	}

	public function productos(){

		$cate=Categoria::allcategoria();
		$produc=Producto::allproductos();
		return view('vistaProductos',compact("produc","cate"));
	}

	public function anadircart($id){
		$cart=Producto::carrito($id);
		Cart::add('{{$cart->nombre_producto}}',1,'{{$cart->precio}}');
		 \Redirect::back();
	}

	public function anadirventa($id){
		DB::insert('insert into ventas (id_producto, num_compras) values (?, ?)', [$id, 1]);
		\Redirect::to("/productos");

	}

	public function categorias($id){
		$cate=Categoria::allcategoria();
		$produc=Catepro::catepro($id);
		return view('vistaProductos',compact("produc","cate"));
		
	}

	
}