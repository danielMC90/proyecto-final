<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProducto;

class TipoProductoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoProducto = TipoProducto::where('estado',1)->paginate(10);
        return view('admin/tipoProducto/index')->with('tipoProducto',$tipoProducto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/tipoProducto/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoProducto = new TipoProducto();
        $tipoProducto = $tipoProducto->fill($request->all());
        $tipoProducto->save();
        return redirect()->route('tipoProducto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoProducto = TipoProducto::find($id);
        return view('admin/tipoProducto/show')->with('tipoProducto',$tipoProducto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoProducto = TipoProducto::find($id);
        return view('admin/tipoProducto/edit')->with('tipoProducto',$tipoProducto);
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
        $tipoProducto = TipoProducto::find($id);
        $tipoProducto = $tipoProducto->fill($request->all());
        $tipoProducto->save();
        return redirect()->route('tipoProducto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoProducto = $tipoProducto::find($id);
        $tipoProducto->update(['estado'=>0]);
      
        return redirect()->route('tipoProducto.index');
    }
}
