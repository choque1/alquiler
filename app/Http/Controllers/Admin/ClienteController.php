<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Illuminate\Admin\Cliente;
use App\Models\Admin\Rol;
use App\Http\Requests\ValidacionCliente;

class ClienteController extends Controller
{
    public function index()
    {
        
        $roles = Rol::all();
        $clientes = Cuarto::orderBy('id')->paginate(10);
        return view('admin.cliente.index', compact('clientes', 'roles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $roles = Rol::all();
        return view('admin:.cliente.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidacionCliente $request)
    {

        Cliente::create($request->all());
        return redirect('admin/cliente')->with('mensaje', 'Cliente creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Seguce92\LaravelHashid\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /* $data = $this->clientes->cliente($id);

        return view('app::admin.cliente.show', [
            'clientes'    =>  $data
        ]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Seguce92\LaravelHashid\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Rol::all();
        $data = Cliente::findOrFail($id);
        return view('admin.cliente.edit', compact('data','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Seguce92\LaravelHashid\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidacionCliente $request, $id)
    {
        Cliente::findOrFail($id)->update($request->all());
        return redirect('admin/cliente')->with('mensaje', 'Cliente actualizado con exito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \Seguce92\Laravel\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request,$id)
    {
        if ($request->ajax()) {
            if (Rol::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}