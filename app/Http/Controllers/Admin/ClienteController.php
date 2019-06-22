<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Illuminate\Admin\Cliente;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $data = $this->usuario->all($request);

        return view('app::admin.cliente.index', [
            'clientes'   =>  $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app:admin:.cliente.create', [
            'roles' =>  $this->clientes->roles()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Admin\ClienteStoreRequest $request)
    {
        if( $this->clientes->store($request))
            $request->session()->flash('success', 'CLIENTE REGISTRADO EXITOSAMENTE');
        else
            $request->session()->flash('info', 'EL CLIENTE YA SE ENCUENTRA REGISTRADO EN EL SISTEMA.');

        return redirect()->route($this->redirect);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Seguce92\LaravelHashid\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->clientes->cliente($id);

        return view('app::admin.cliente.show', [
            'clientes'    =>  $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Seguce92\LaravelHashid\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->clientes->clientes($id);

        return view('app::admin.cliente.edit', [
            'cliente'  =>  $data,
            'roles' =>  $this->clientes->roles()
        ]);
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
        $this->clientes->update($request, $id);
        $request->session()->flash('success', 'INFORMACION DE CLIENTE ACTUALIZADO EXITOSAMENTE');
        return redirect()->route($this->redirect);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Seguce92\Laravel\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(request()->ajax() && $this->clientes->destroy($id))
            return response()->json([
                'status'    =>  'success',
                'message'   =>  'CLIENTE ELIMINADO EXITOSAMENTE.'
            ]);
        else
            return response()->json([
                'status'    =>  'error',
                'message'   =>  'NO SE PUEDE ELIMINAR EL CLIENTE SELECCIONADO.'
            ]);
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