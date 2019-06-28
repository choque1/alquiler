<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Alquiler;
use App\Models\Admin\Departamento;
use App\Models\Admin\EstadoAlquiler;
use App\Models\Admin\Cliente;

class PdfController extends Controller
{
    public function crearPDF($tipo)
    {
/*
        $data = $datos;
        $data1 = $datos1;
        $data2 = $datos2;
        $data3 = $datos3;


        $date = date('Y-m-d');*/
        $vistaurl = 'admin.alquiler.tabla-reporte';
        $view =  \View::make($vistaurl)->render();
        
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }

/*
    public function crear_reporte($tipo){

     $vistaurl="admin.alquiler.tabla-reporte";
     
     $alquileres = Alquiler::all();
     //$departamentos = Departamento::all();
     //$estados = EstadoAlquiler::all();
     //$clientes = Cliente::all();
     return $this->crearPDF($alquileres, $vistaurl,$tipo);




    }*/

}
