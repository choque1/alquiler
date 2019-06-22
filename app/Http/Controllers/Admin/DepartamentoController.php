<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Departamento;
use Illuminate\Support\Facades\Input;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::orderBy('id')->get();
        return view('admin.departamento.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
    	if($request->hasFile('foto')){
            $file=$request->file('foto');
            $name = time().$file->getClientOriginalName();
    		$file->move(public_path().'/imagenes/departamentos/',$name);
    		
        }
        $departamento=new Departamento();
    	$departamento->direccion=$request->input('direccion');
    	$departamento->estado=$request->input('estado');
    	$departamento->telefono=$request->input('telefono');
    	$departamento->descripcion=$request->input('descripcion');
    	$departamento->foto= $name;
    	$departamento->save();
    	return redirect('admin/departmento')->with('mensaje', 'Departamento creado con exito');;
        
      /*  if(Input::hasFile('foto')){
    		$file=Input::file('foto');
    		$file->move(public_path().'/imagenes/departamentos/',$file->getClientOriginalName());
    		$request->foto=$file->getClientOriginalName();
        }
        return redirect('admin/usuario')->with('mensaje', 'Usuario creado con exito');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Departamento::findOrFail($id);
        return view('admin.departamento.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function update(Request $request, $id)

    {
        $departamento = Departamento::find($id);
        $departamento->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $departamento->foto = $name;
            $file->move(public_path().'/imagenes/departamentos/', $name);
        }  
        $departamento->save();  
        
        
        
        return redirect('admin/departamento')->with('mensaje', 'Departamento actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Departamento::destroy($id);
      
        return redirect('admin/departamento')->with('mensaje', 'Departamento eliminado con exito');
    }
}
