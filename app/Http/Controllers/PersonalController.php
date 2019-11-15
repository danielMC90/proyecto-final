<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarPersonalRequest;
use App\Personal;
use App\Persona;
use App\Area;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
       $personal = Personal::where('estado',1)->paginate(10);
       
       return view('admin/personal/index')->with('personal',$personal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $personal = Personal::where('estado',1)->get();
        $persona = Persona::where('estado',1)->where('id','!=','idPersonal')->get();
        $area = Area::where('estado',1)->get();
        return view('admin/personal/create')->with('persona',$persona)->with('area',$area);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarPersonalRequest $request)
    {
        $personal = new Personal();
        $personal->idPersona = $request->idPersona;
        $personal->idArea = $request->idArea;
        $personal->puesto = $request->puesto;
        // $personal->idPersona = $request->idPersona;
        // $personal = $request->all();
        $personal->save();
        return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::find($id);
       return view('admin/personal/show')->with('personal',$personal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::find($id);
        $persona =Persona::where('estado',1)->where('id','!=',$personal->id)->get();
        $area =Area::where('estado',1)->where('id','!=',$personal->id)->get();
        return view('admin/personal/edit')->with('personal',$personal)->with('persona',$persona)->with('area',$area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarPersonalRequest $request, $id)
    {
        $personal = Area::find($id);
        $personal->idPersonal=$request->idPersonal;
        $personal->idArea=$request->idArea;
        $personal->puesto=$request->puesto;
        $personal->save();
        
        return redirect()->route('personal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal = Personal::find($id);
        $personal->update(['estado'=>0]);
        return redirect()->route('personal.index');
    }
}
