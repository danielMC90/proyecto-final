<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarPersonaRequest;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::where('estado',1)->paginate(10);
        return view('admin/persona/index')->with('persona',$persona);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/persona/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarPersonaRequest $request)
    {
        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->apPaterno = $request->apPaterno;
        $persona->apMaterno = $request->apMaterno;
        $persona->ci = $request->ci;
        $persona->genero = $request->genero;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->correo = $request->correo;
        
        $persona->save();
        return redirect()->route('persona.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        return view('admin/persona/show')->with('persona',$persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);
        return view('admin/persona/edit')->with('persona',$persona);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarPersonaRequest $request, $id)
    {
        $persona = Persona::find($id);
        $persona->nombres = $request->nombres;
        $persona->apPaterno = $request->apPaterno;
        $persona->apMaterno = $request->apMaterno;
        $persona->ci = $request->ci;
        $persona->genero = $request->genero;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->correo = $request->correo;
        
        $persona->save();
        return redirect()->route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona= Persona::find($id);
        $persona->update(['estado'=>0]);

        return redirect()->route('persona.index');
    }
}
