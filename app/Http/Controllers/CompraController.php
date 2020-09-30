<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleCompra;
use App\Compra;
use App\Proveedor;
use App\Producto;


class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compra = Compra::orderBy('id', 'DESC')->paginate(5);
        return view('admin/compra/index')->with('compra',$compra);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor = Proveedor::where('estado',1)->get();
        // $producto = Producto::where('estado',1)->get();
        // return view('admin/compra/create')->with('proveedor',$proveedor)->with('producto',$producto);
        return view('admin/compra/create')->with('proveedor',$proveedor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $compra = new compra($request->all());

        $compra = new compra();
        $compra->idProveedor=$request->idProveedor;
        $compra->detalles=$request->detalles;
        $compra->fecha=$request->fecha;

        /*
            AQUI EMPIENZA EL DETALLE MAESTRO
            Se declara $arregloDetalle como Array
            para que cuando se cree la Venta
            en la tabla que se van a ir agregando los productos es necesario tomarlo como un arreglo
            los name de html como idproducto, precio, cantidad llevan [corchetes] para se pueda
            recorrer el arreglo.


        */
        $arregloDetalle=array();
        // return count($request->idProducto);

        for($i =0 ; $i<count($request->id_producto); $i++){
            $detalleCompra = new DetalleCompra();
            $detalleCompra->idCompra = 0;
            $detalleCompra->idProducto= $request->id_producto[$i];
            $detalleCompra->cantidad= $request->cantidad[$i];
            $detalleCompra->subtotal= $request->subtotal[$i];
            $detalleCompra->precioUnitario= $request->subtotal[$i]/$request->cantidad[$i];

            $compra->total = $compra->total+$detalleCompra->subtotal;
            array_push($arregloDetalle, $detalleCompra);
            // array push es una funcion para arreglos en  php, es como irc cargando el arreglo
        }

        //dd($detalleCompra->toArray());
        $compra->save();
        // se guarda la compra



        foreach($arregloDetalle as $arreglo){
            $arreglo->idCompra = $compra->id;
            $arreglo->save();
            // se guarda el detalle
        }

        return redirect()->route('compra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compra=Compra::find($id);
        $detalleCompra=DetalleCompra::where('idCompra','=',$compra->id)->get();
        return view('admin/compra/show')->with('compra',$compra)->with('detalleCompra',$detalleCompra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
