<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BajaRecurso;
use App\Recurso;

class BajaRecursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bajaRecurso = BajaRecurso::where('estado',1)->paginate(10);
        return view('admin\bajaRecurso\index')->with('bajaRecurso',$bajaRecurso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recurso = Recurso::where('estado',1)->get();
        return view('admin/bajaRecurso/create')->with('recurso',$recurso);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $bajaRecurso = new BajaRecurso();
        
        $bajaRecurso = $bajaRecurso->fill($request->all());
        $recurso = Recurso::find($bajaRecurso->idRecurso);
        $recurso->estado=0;
        $recurso->save();
        $bajaRecurso->save();


        return redirect()->route('bajaRecurso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bajaRecurso = BajaRecurso::find($id);
        return view('admin/bajaRecurso/show')->with('bajaRecurso',$bajaRecurso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bajaRecurso = BajaRecurso::find($id);
        return view('admin/bajaRecurso/edit')->with('bajaRecurso',$bajaRecurso);
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
        $bajaRecurso = BajaRecurso::find($id);
        $bajaRecurso = $bajaRecurso->fill($request->all());
        $bajaRecurso->save();


        return redirect()->route('bajaRecurso.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bajaRecurso = BajaRecurso::find($id);
        $bajaRecurso->update(['estado'=>0]);

        //cambiamos el estado a 1 en la tabla recurso
        $recurso = Recurso::find($bajaRecurso->idRecurso);
        $recurso->estado=1;
        $recurso->save();
        return redirect()->route('bajaRecurso.index');
    }
}
