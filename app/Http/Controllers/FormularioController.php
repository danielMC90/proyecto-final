<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;
use App\Producto;
use App\Persona;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::where('estado',1)->get();
        $producto = Producto::where('estado',1)->get();
        
        $formulario = Formulario::where('estado',1)->paginate();
        return view('admin/formulario/index')
            ->with('formulario',$formulario)
            ->with('persona',$persona)
            ->with('producto',$producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona = Persona::where('estado',1)->get();
        $producto = Producto::where('estado',1)->get();
        
        return view('admin/formulario/create')
            ->with('persona',$persona)
            ->with('producto',$producto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formulario = new Formulario();
        $formulario = $formulario->fill($request->all());
        $formulario->save();

        return redirect()->route('formulario.index');
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
        //
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
        //
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
