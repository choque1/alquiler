<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Alquiler;


class PdfController extends Controller


{
    public function index (){
        return view("admin.reportes.listado_reportes");
    }
    public function crearPDF($datos,$vistaurl,$tipo)
    {
        $data=$datos;
        $view =  \View::make($vistaurl, compact('data'))->render();
        
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte($tipo){
       
     $alquileres = Alquiler::all(); 
     $vistaurl="admin.reportes.show1";
     return $this->crearPDF($alquileres, $vistaurl,$tipo);
    }

}
