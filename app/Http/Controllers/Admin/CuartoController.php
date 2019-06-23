<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Cuarto;
use App\Http\Requests\ValidacionCuarto;

class CuartoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuartos = Cuarto::orderBy('id')->paginate(2);
        return view('admin.cuarto.index', compact('cuartos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cuarto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCuarto $request)
    {
       /* $validatedData = $request->validate([
            'direccion' => 'required|max:50',
            'estado' => 'required|max:50',
            'telefono' => 'requeride|numeric|max:15|min:8',
            'descripcion' => 'requeride|max:300',
            'foto'=> 'mimes:jpeg,bmp,png,jpg'   

        ]);  */  
        $cuarto=new Cuarto();
        $files = $request->file('foto');
    	foreach($files as $file){
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/cuartos/',$name);
            $cuarto->foto= $name;
    		
        }
        
    	$cuarto->direccion=$request->input('direccion');
    	$cuarto->estado=$request->input('estado');
    	$cuarto->telefono=$request->input('telefono');
    	$cuarto->descripcion=$request->input('descripcion');
    	
    	$cuarto->save();
    	return redirect('admin/cuarto')->with('mensaje', 'Cuarto creado con exito');;
        
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
        $data = Cuarto::findOrFail($id);
        return view('admin.cuarto.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function update(ValidacionCuarto $request, $id)

    {
        $cuarto = Cuarto::find($id);
        $cuarto->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $cuarto->foto = $name;
            $file->move(public_path().'/imagenes/cuartos/', $name);
        }  
        $cuarto->save();  
        
        
        
        return redirect('admin/cuarto')->with('mensaje', 'Cuarto actualizado con exito');
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
            if (Cuarto::destroy($id)) {
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
