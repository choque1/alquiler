<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Alquiler;
use App\Models\Admin\Departamento;
use App\Models\Admin\EstadoAlquiler;
use App\Models\Admin\Cliente;


class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        $estados = EstadoAlquiler::all();
        $clientes = Cliente::all();
        $alquileres = Alquiler::orderby('id')->paginate(4);
        return view('admin.alquiler.index', compact('departamentos','estados','clientes','alquileres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $departamentos = Departamento::all();
        $estados = EstadoAlquiler::all();
        $clientes = Cliente::all();
        return view('admin.alquiler.create',compact('departamentos','estados','clientes','condicion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alquiler::create($request->all());
    	return redirect('admin/alquiler')->with('mensaje', 'Alquiler creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    
    {
       
              


    }

    
    
    public function edit($id)
    {
       
        $departamentos = Departamento::all();
        $estados = EstadoAlquiler::all();
        $clientes = Cliente::all();
        $data = Alquiler::findOrFail($id);
        return view('admin.alquiler.create',compact('data','departamentos','estados','clientes','condicion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alquiler::findOrFail($id)->update($request->all());
        return redirect('admin/alquiler')->with('mensaje', 'Alquiler actualizado con exito');
        
       /* $alquileres = Alquiler::ofType($id)->get();
        foreach($alquileres as $a ){
            $idDepartamento= $a->departamento_id;
           $FechaActual= $a->FechaDeRegistro;
        }
        $FechaDevolucion= $request['Fechaentrega'];

        $departamentos= Departamento::ofType2($idDepartamento)->get();
        foreach($departamentos as $departamento){
            $precio = $departamento->preciopormes;
        }

        $F1= Carbon::createFromFormat('Y-m-d',$FechaDevolucion);
        $F2=Carbon::createFromFormat('Y-m-d',$FechaActual);
        $Diferencia= $F1->diffInDays($F2);
        $Total=$precio;
        if($Diferencia==0){

        }else{
            $Total=$precio*$Diferencia;
        }

 
        $actualizarAlquiler = alquilerActualizar::find($id);
        $actualizarAlquiler->fill([
            ]'FechaDeEntregaPrevisto'=> $request['FechaDevolucion'],
            'pago'=>$Total,
        ]);
        $actualizarAlquiler->save();
        Session::flash('tipo', 'success');
        Session::flash('message', 'Alquiler Editado exitosamente');
        return Redirect::to('/Alquiler');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
