<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->usuario->all($request);

        return view('app::admin.usuario.index', [
            'usuario'   =>  $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app:admin:.usuario.create', [
            'roles' =>  $this->usuario->roles()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Admin\UsuarioStoreRequest $request)
    {
        if( $this->usuario->store($request))
            $request->session()->flash('success', 'USUARIO REGISTRADO EXITOSAMENTE');
        else
            $request->session()->flash('info', 'EL USUARIO YA SE ENCUENTRA REGISTRADO EN EL SISTEMA.');

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
        $data = $this->usuario->usuario($id);

        return view('app::admin.usuario.show', [
            'user'    =>  $data
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
        $data = $this->usuario->usuario($id);

        return view('app::admin.usuario.edit', [
            'usuario'  =>  $data,
            'roles' =>  $this->usuario->roles()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Seguce92\LaravelHashid\Hashid  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Admin\UsuarioUpdateRequest $request, $id)
    {
        $this->usuario->update($request, $id);
        $request->session()->flash('success', 'INFORMACION DE USUARIO ACTUALIZADO EXITOSAMENTE');
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
        if(request()->ajax() && $this->usuario->destroy($id))
            return response()->json([
                'status'    =>  'success',
                'message'   =>  'USUARIO ELIMINADO EXITOSAMENTE.'
            ]);
        else
            return response()->json([
                'status'    =>  'error',
                'message'   =>  'NO SE PUEDE ELIMINAR EL USUARIO SELECCIONADO.'
            ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

}
