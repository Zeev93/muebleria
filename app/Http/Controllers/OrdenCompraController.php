<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = OrdenCompra::all();

        return view('ordenes.index', compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = 'Error al crear orden';
        $data = $request->validate([
            'folio' => 'required',
            'fecha_compra' => 'required',
            'fecha_entrega' => 'required',
            'user_id' => 'required',
        ]);

        $orden = new OrdenCompra($data);
        if($orden->save()){
            $message = 'Orden creada correctamente';
        }
        return redirect('/')->with('status' , $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdenCompra  $ordenCompra
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenCompra $ordenCompra)
    {
        return view('ordenes.show', compact('ordenCompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenCompra  $ordenCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenCompra $ordenCompra)
    {
        return view('ordenes.show', compact('ordenCompra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrdenCompra  $ordenCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenCompra $ordenCompra)
    {
        $message = 'Error al actualizar orden';
        $data = $request->validate([
            'folio' => 'required',
            'fecha_compra' => 'required',
            'fecha_entrega' => 'required',
            'user_id' => 'required',
        ]);

        $ordenCompra->folio = $data['folio'];
        $ordenCompra->fecha_compra = $data['fecha_compra'];
        $ordenCompra->fecha_entrega = $data['fecha_entrega'];

        if($ordenCompra->save()){
            $message = 'Orden actualizada correctamente';
        }

        return redirect('/')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdenCompra  $ordenCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenCompra $ordenCompra)
    {
        $ordenCompra->delete();
        return redirect('/')->with('status', 'Orden borrada correctamente');
    }
}
