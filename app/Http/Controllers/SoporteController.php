<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarSoporteRequest;
use App\Soporte;

use App\Personal;
use App\TipoSoporte;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::where('estado',1);
        $tipoSoporte = TipoSoporte::where('estado',1);
        $soporte = Soporte::where('estado',1)->paginate(10);

        return view('admin/soporte/index')->with('soporte',$soporte)
            ->with('personal',$personal);
            // ->with('tipoSoporte',$tipoSoporte);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = Personal::where('estado',1)->get();
        $tipoSoporte = TipoSoporte::where('estado',1)->get();
        $soporte = Soporte::where('estado',1);

        return view('admin/soporte/create')
            ->with('soporte',$soporte)
            ->with('personal',$personal)
            ->with('tipoSoporte',$tipoSoporte);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarSoporteRequest $request)
    {
        $soporte = new Soporte();
        $soporte = $soporte->fill($request->all());
        $soporte->save();

        return redirect()->route('soporte.index');
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
        $soporte = Soporte::find($id);
        $personal = Personal::where('estado',1)->where('id','!=','idPersonal')->get();
        $tipoSoporte = TipoSoporte::where('estado',1)->where('id','!=','idTipoSoporte')->get();
        return view('admin/soporte/edit')
            ->with('soporte',$soporte)
            ->with('personal',$personal)
            ->with('tipoSoporte',$tipoSoporte);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarSoporteRequest $request, $id)
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
