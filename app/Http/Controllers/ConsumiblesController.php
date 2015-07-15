<?php 
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Categoria;

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

	public function categorias($id){
		
	}

	
}