<?php

namespace App\Http\Controllers;

use App\Models\DetalleCompra;
use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = 'Error al guardar compra';
        $data = $request->validate([
        'comentarios' => 'required',
        'orden_compra_id' => 'required',
        'producto_id' => 'required',
        'cantidad' => 'required',
        'total' => 'required'
        ]);

        $detalle = new DetalleCompra($data);

        if($detalle->save()){
            $message = 'Compra guardada correctamente';
        }

        return redirect('/')->with('status', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleCompra $detalleCompra)
    {
        return view('detalle.show', compact('detalleCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleCompra $detalleCompra)
    {
        return view('detalle.edit', compact('detalleCompra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleCompra $detalleCompra)
    {
        $message = 'Error al actualizar compra';
        $data = $request->validate([
        'comentarios' => 'required',
        'orden_compra_id' => 'required',
        'producto_id' => 'required',
        'cantidad' => 'required',
        'total' => 'required'
        ]);

        $detalleCompra->comentarios = $data['comentarios'];
        $detalleCompra->orden_compra_id = $data['orden_compra_id'];
        $detalleCompra->producto_id = $data['producto_id'];
        $detalleCompra->cantidad = $data['cantidad'];
        $detalleCompra->total = $data['total'];

        if($detalleCompra->save()){
            $message = 'Compra actualizada correctamente';
        }

        return redirect('/')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleCompra  $detalleCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleCompra $detalleCompra)
    {
        //
    }
}
