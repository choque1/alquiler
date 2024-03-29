<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacionDepartamento;
use App\Models\Admin\Departamento;


class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
    
        $departamentos = Departamento::tipo($request->tipo)->orderBy('id')->paginate(2);
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
    public function store(ValidacionDepartamento $request)
    {
              
        $departamento=new Departamento();

        $files = $request->file('foto');
    	foreach($files as $file){
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/departamentos/',$name);
            $departamento->foto= $name;
    		
        }
        $departamento->modelo=$request->input('modelo');
        $departamento->preciopormes=$request->input('preciopormes');
    	$departamento->direccion=$request->input('direccion');
    	$departamento->tipo=$request->input('tipo');

    	$departamento->descripcion=$request->input('descripcion');
    	
    	$departamento->save();
    	return redirect('admin/departamento')->with('mensaje', 'Departamento creado con exito');
      
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
    public function update(ValidacionDepartamento $request, $id)

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
    public function destroy(Request $request,$id)
    {
        if ($request->ajax()) {
            if (Departamento::destroy($id)) {
                $request->estado= 'false';
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
      
        //return redirect('admin/departamento')->with('mensaje', 'Departamento eliminado con exito');
    }
}
