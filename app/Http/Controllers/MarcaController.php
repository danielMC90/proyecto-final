<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarMarcaRequest;
use App\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marca = Marca::where('estado',1)->paginate(10);
        return view('admin/marca/index')->with('marca',$marca);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/marca/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarMarcaRequest $request)
    {
        $marca = new Marca($request->all());
        $marca->save();
        return redirect()->route('marca.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = Marca::find($id);
        return view('admin/marca/show')->with('marca',$marca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $marca = Marca::find($id);
        return view('admin/marca/edit')->with('marca',$marca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarMarcaRequest $request, $id)
    {
        
        $marca = Marca::find($id);
        $marca->nombre =$request->nombre;
        $marca->save();
        return redirect()->route('marca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $marca = Marca::find($id);
        $marca->update(['estado'=>0]);
        return redirect()->route('marca.index');
    }
}
