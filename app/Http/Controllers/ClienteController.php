<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $clientes = cliente::all();
        return view('Documentos.clientes.index', compact('clientes'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente;
        return view('Documentos.clientes.create', compact('cliente'));
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
        $cliente =  new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->dniRuc =$request->dniRuc;
        $cliente->telefono =$request->telefono;
        $cliente->email =$request->email;
        $cliente->save();
        return Redirect::route('Documentos.clientes.index');

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

        $cliente = Cliente::findOrfail($id);    
        return view('Documentos.clientes.edit', compact('cliente'));
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
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->nombre;
        $cliente->dniRuc =$request->dniRuc;
        $cliente->telefono =$request->telefono;
        $cliente->email =$request->email;
        $cliente->update();
        return Redirect::route('Documentos.clientes.index');
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
        $cliente = Cliente::findOrfail($id);
        $cliente->delete();
        return Redirect::route('Documentos.clientes.index');
    }
}
