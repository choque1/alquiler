<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Illuminate\Admin\Cliente;

class ClienteController extends Controller
{
    public function index()
    {

        $clientes = Cuarto::orderBy('id')->paginate(10);
        return view('admin.cliente.index', compact('clientes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin:.cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Admin\ClienteStoreRequest $request)
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
        $data = Cliente::findOrFail($id);
        return view('admin.cliente.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Seguce92\LaravelHashid\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Admin\ClienteUpdateRequest $request, $id)
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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string','nombre', 'max:10'],
            'apellido' => ['required', 'string', 'apellido', 'max:30'],
            'ci' => ['required', 'string', 'ci', 'max:10'],
            'telefono'=>['required', 'enum', 'telefono', 'min:9'],
            'direccion' => ['required', 'string', 'direccion', 'max:10'],
            'estado'=>['required', 'boolean', 'estado', ],
        ]);
    }
}