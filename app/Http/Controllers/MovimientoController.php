<?php

namespace App\Http\Controllers;
use App\Models\Movimiento;
use App\Models\Documento;
use App\Models\Oficina;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movimientos = Movimiento::all();
        return view('Movimientos.index', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $movimiento = new Movimiento;
        $documento  = Documento::pluck('asunto');
        $oficina    = Oficina::pluck('nombre');
        return view('Movimientos.create', compact('movimiento','documento','oficina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $movimiento = new Movimiento;
        $movimiento ->fecha = $request ->fecha;
        $movimiento ->hora = $request ->hora;
        $movimiento ->documentos_id = $request ->documentos_id;
        $movimiento ->oforigen_id = $request ->oforigen_id;
        $movimiento ->ofdestino_id = $request ->ofdestino_id;
        $movimiento ->save();
        return Redirect::route('Movimientos.index');
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
        //
        $movimiento = Movimiento::findOrFail($id);
        return view('Movimientos.index', compact('movimiento'));
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
        $movimiento = new Movimiento;
        $movimiento ->fecha = $request ->fecha;
        $movimiento ->hora = $request ->hora;
        $movimiento ->documento_id = $request ->documento_id;
        $movimiento ->oforigen_id = $request ->oforigen_id;
        $movimiento ->ofdestino_id = $request ->ofdestino_id;
        $movimiento ->update();
        return Redict::route('Movimientos.index');
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
        $movimiento = Movimiento::findOrFail($id);
        $movimiento->delete();
        return Redirect::route('Movimientos.index');
    }
}
