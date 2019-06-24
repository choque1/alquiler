<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ValidacionUsuario;
use App\Models\Admin\Usuario;
Use App\Models\Admin\Tipo_Usuario;


class UsuarioController extends Controller
{
    public function index(Request $request)
    {
       
        $usuarios = Usuario::orderBy('id')->paginate(2);
        $tipos = Tipo_Usuario::all();
        return view('admin.usuario.index', compact('usuarios','tipos'));
    }

    public function create()
    {
        $tipos = Tipo_Usuario::all();
        return view('admin.usuario.create', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionUsuario $request)
    {
       
        $usuarios=new Usuario();
        
    	$usuarios->nombre=$request->input('nombre');
    	$usuarios->ci=$request->input('ci');
        $usuarios->usuario=$request->input('usuario');
        $usuarios->password=$request->input('password');
     //   $usuarios->estado=$request->input('estado');
        $usuarios->fechadenacimiento=$request->input('fechadenacimiento');
        $usuarios->telefono=$request->input('telefono');
        $usuarios->tipousuario_id=$request->input('tipousuario_id');
        $usuarios->save();
    	return redirect('admin/usuario')->with('mensaje', 'usuario creado con exito');;
        
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
        $tipos = Tipo_Usuario::all();
        $usuarios = Usuario::find( $id);
        return view('admin.Usuario.edit', compact('usuarios','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function update(ValidacionUsuario $request, $id)

    {
        $usuarios = Usuario::find($id);
        $usuarios->nombre=$request->nombre;
    	$usuarios->ci=$request->ci;
        $usuarios->email=$request->email;
        $usuarios->password=$request->password;
        $usuarios->fechadenacimiento=$request->fechadenacimiento;
        $usuarios->telefono=$request->telefono;
        $usuarios->idTipoUsuario=$request->idTipoUsuario;      
        $usuarios->save();  

        return redirect('admin/usuario')->with('mensaje', 'actualizado con exito');
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
            if (Usuario::destroy($id)) {
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
