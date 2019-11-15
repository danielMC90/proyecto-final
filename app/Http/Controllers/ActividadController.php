<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Personal;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividad = Actividad::where('estado',1)->paginate(10);
        return view('admin/actividad/index')->with('actividad',$actividad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = Personal::where('estado',1)->get();
        return view('admin/actividad/create')->with('personal',$personal);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new Actividad();
        $actividad = $actividad->fill($request->all());
        $actividad->save();

        return redirect()->route('actividad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividad = Actividad::find($id);
        return view('admin/actividad/show')->with('actividad',$actividad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad = Actividad::find($id);
        $personal = Personal::where('estado',1)->where('id','!=','idPersona')->get();
        return view('admin/actividad/edit')->with('actividad',$actividad)->with('personal',$personal);
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
        $actividad = Actividad::find($id);
        $actividad= $actividad->fill($request->all());
        $actividad->save();
        return redirect()->route('actividad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $actividad = Actividad::find($id);
       $actividad->update(['estado'=>0]);
       return redirect()->route('actividad.index');
    }
}
