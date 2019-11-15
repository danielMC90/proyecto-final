<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoSoporte;

class TipoSoporteController extends Controller
{
    public function index(){
        
        $tipoSoporte = TipoSoporte::where('estado',1)->paginate(10);

        return view('admin/tipoSoporte/index')->with('tipoSoporte',$tipoSoporte);
    }
    public function create()
    {
        return view('admin/tipoSoporte/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoSoporte = new TipoSoporte();
        $tipoSoporte->nombre = $request->nombre;
        $tipoSoporte->save();
        
        return redirect()->route('tipoSoporte.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoSoporte = TipoSoporte::find($id);
        return view('admin/tipoSoporte/show')->with('tipoSoporte',$tipoSoporte);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoSoporte = TipoSoporte::find($id);
        return view('admin/tipoSoporte/edit')->with('tipoSoporte',$tipoSoporte);
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
        $tipoSoporte = TipoSoporte::find($id);
        $tipoSoporte->nombre = $request->nombre;
        $tipoSoporte->save();
        
        return redirect()->route('tipoSoporte.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoSoporte = TipoSoporte::find($id);
        $tipoSoporte->update(['estado'=>0]);

        return redirect()->route('tipoSoporte.index');
    }
}


