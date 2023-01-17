<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Tdocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TdocumentoController extends Controller
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
        //
        $tdocumentos = Tdocumento::all();
        return view('Documentos.tdocumentos.index', compact('tdocumentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tdocumento = new Tdocumento;
        return view('Documentos.tdocumentos.create', compact('tdocumento'));
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
        $tdocumento= new Tdocumento();
        $tdocumento->nombre = $request->nombre;
        $tdocumento->save();
        return Redirect::route('Documentos.tdocumentos.index');
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
        $tdocumento = Tdocumento::findOrFail($id);
        return view('Documentos.tdocumentos.edit', compact('tdocumento'));
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
        $tdocumento = Tdocumento::findOrFail($id);
        $tdocumento->nombre = $request->nombre;
        $tdocumento->update();
        return Redirect::route('Documentos.tdocumentos.index');
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
        $tdocumento = Tdocumento::findOrFail($id);
        $tdocumento->delete();
        return Redirect::route('Documentos.tdocumentos.index');
    }
}
