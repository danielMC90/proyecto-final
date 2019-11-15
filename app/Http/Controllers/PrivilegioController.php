<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privilegio;

class PrivilegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privilegio = Privilegio::where('estado',1)->paginate(10);
        return view('admin/privilegio/index')->with('privilegio',$privilegio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/privilegio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $privilegio = new Privilegio($request->all());
        $privilegio->save();
        return redirect()->route('privilegio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rprivilegio = Privilegio::find($id);
        return view('admin/privilegio/show')->with('privilegio',$privilegio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $privilegio = Privilegio::find($id);
        return view('admin/privilegio/edit')->with('privilegio',$privilegio);
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
        
        $privilegio = Privilegio::find($id);
        $privilegio->nombre =$request->nombre;
        $privilegio->save();
        return redirect()->route('privilegio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $privilegio = Privilegio::find($id);
        $privilegio->update(['estado'=>0]);
        return redirect()->route('privilegio.index');
    }
}
