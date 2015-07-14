<?php 
namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Producto;

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
		$produc=Producto::allproductos();
		return view('productos',compact("produc"));
	}

	public function categorias($id){
		$grupos = Grupos::Grupos($id);
		$mates=Materia::todamateria();
		return view('categorias',compact("grupos","mates"));
	}

	
}