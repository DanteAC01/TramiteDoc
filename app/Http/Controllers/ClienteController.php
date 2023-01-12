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
    public function index()
    {
<<<<<<< HEAD
        $clientes = Cliente::all();
        return View('Documentos.clientes.index', compact('clientes'));
=======
        $clientes = cliente::all();
        return view('Documentos.clientes.index', compact('clientes'));
>>>>>>> 1ce0678837ac1e6abaca4e75316b4945cee009bc
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $cliente = new Cliente;
=======
        $cliente = new cliente;
>>>>>>> 1ce0678837ac1e6abaca4e75316b4945cee009bc
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
<<<<<<< HEAD
        $cliente = Cliente::findOrfail($id);

=======
        $cliente = Cliente::findOrfail($id);    
>>>>>>> 1ce0678837ac1e6abaca4e75316b4945cee009bc
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
<<<<<<< HEAD
        //
        $cliente = Cliente::findOrFail($id);
=======
        $cliente = Cliente::findOrfail($id);
>>>>>>> 1ce0678837ac1e6abaca4e75316b4945cee009bc
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
<<<<<<< HEAD
        try {
            //code...
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
        } catch (\Throwable $th) {
            //throw $th;
            return Redirect::route('Documentos.clientes.index')
            ->with('error',$th->getMessage());
        }
        return Redirect::route('Documentos.clientes.index')
        ->with('info','el item se elimino correctamente');

=======
        $cliente = Cliente::findOrfail($id);
        $cliente->delete();
        return Redirect::route('Documentos.clientes.index');
>>>>>>> 1ce0678837ac1e6abaca4e75316b4945cee009bc
    }
}
