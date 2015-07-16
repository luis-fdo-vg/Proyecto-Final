<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Producto;
use App\Venta;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
   public function Cotizar(){

        $buy=Venta::venta();
        $suma=0;
        foreach ($buy as $bu) {
        	$suma+=$bu->precio;
        	$deleted = DB::delete('delete from ventas where ventas.id_ventas = ' . $bu->id_ventas);
        }

        $date = date('Y-m-d');
        $view =  \View::make('vistaCotizar', compact("buy", "date","suma"))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('vistaCotizar');
    }

}
