<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\TipoProducto;
use App\Marca;

class ProductoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoProducto = TipoProducto::where('estado',1)->get();
        $producto = Producto::where('estado',1)->paginate(10);
        return view('admin/producto/index')->with('tipoProducto',$tipoProducto)->with('producto',$producto);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        $tipoProducto = isset($_GET['productoSearch-tipo']) ? $_GET['productoSearch-tipo']: '';
        $marcaProducto = isset($_GET['productoSearch-marca']) ? $_GET['productoSearch-marca']: '';
        $descripcionProducto = isset($_GET['productoSearch-descripcion']) ? $_GET['productoSearch-descripcion']: '';

        //dd('Tipo: '.$tipoProducto . ', Marca: '.$marcaProducto.', descrip: '.$descripcionProducto);

        $productos = Producto::nombretipoproducto($tipoProducto);
        $productos = $productos->nombremarca($marcaProducto);
        $productos = $productos->descripcion($descripcionProducto);

        $productos = $productos->orderBy('id')->paginate(10);

        if ($request->ajax()){
            return response()->json(view('admin/compra/resultadobusqueda')->with('productos',$productos)->render());
        }
        return view('admin/producto/resultadobusqueda')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoProducto = TipoProducto::where('estado',1)->get();
        $marca = Marca::where('estado',1)->get();
        $producto = Producto::where('estado',1)->paginate(10);


        return view('admin/producto/create')->with('tipoProducto',$tipoProducto)->with('marca',$marca)->with('producto',$producto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto = $producto->fill($request->all());
        $producto->save();

        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        $tipoProducto = TipoProducto::find($producto->idTipoProducto)->get();
        $marca = Marca::find($producto->idMarca)->get();
        return view('admin/producto/show')->with('tipoProducto',$tipoProducto)->with('producto',$producto)->with('marca',$marca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $tipoProducto = TipoProducto::find($producto->idTipoProducto)->get();
        $marca = Marca::find($producto->idMarca)->get();
        // $tipoProducto = TipoProducto::where('estado',1)->where('id','!=','idTipoProducto')->get();


        return view('admin/producto/edit')->with('producto',$producto)->with('tipoProducto',$tipoProducto)->with('marca',$marca);
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
        $producto = Producto::find($id);
        $producto = $producto->fill($request->all());
        $producto->save();

        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->update(['estado'=>0]);
        return redirect()->route('producto.index');
    }
}

