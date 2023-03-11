<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Afiliado;
use App\Models\Cliente;
use App\Models\Detalleestatustramite;
use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.clientes.index');
    }

    public function prioridad()
    {
        return view('admin.clientes.prioridad');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipodocumentos  = DB::table('tipodocumentos')->pluck('abreviado' , 'id');
        $tipotramites  = DB::table('tipo_tramites')->pluck('name' , 'id');
        $nacionalidads  = DB::table('nacionalidads')->pluck('name' , 'id');
        // $tramites  = DB::table('tramites')->plu('name' , 'id');

        $tramites = Tramite::all();

        return view('admin.clientes.create', compact('tipodocumentos','tipotramites','nacionalidads','tramites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:clientes',
            'last_name' => 'required',
            'identification' => 'required',
            'email' => 'required',
            'cita_cas' => 'nullable',
            'cita_embajada' => 'nullable',
        ]);
        $cliente = Cliente::create($request->all());
        
        if ($request->tramites)
        {
            $cliente->tramites()->attach($request->tramites);
        }
        $cont = 0;
        while ($cont < count($request->tramites)) {
            $detalle = new Detalleestatustramite();
            $detalle->tramite_id = $request->tramites[$cont];
            $detalle->estatus_id = 1;
            $detalle->save();
            $cont = $cont + 1;
        }

        return redirect()->route('clientes.index')->with('success', ' ¡Felicidades el cliente se registro con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        $tipodocumentos  = DB::table('tipodocumentos')->pluck('abreviado' , 'id');
        $tipotramites  = DB::table('tipo_tramites')->pluck('name' , 'id');
        $nacionalidads  = DB::table('nacionalidads')->pluck('name' , 'id');

        $tramites = Tramite::all();
        $afiliado = Afiliado::all();

        return view('admin.clientes.show', compact('cliente','tipodocumentos','tipotramites','nacionalidads','tramites','afiliado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        $tipodocumentos  = DB::table('tipodocumentos')->pluck('abreviado' , 'id');
        $tipotramites  = DB::table('tipo_tramites')->pluck('name' , 'id');
        $nacionalidads  = DB::table('nacionalidads')->pluck('name' , 'id');
        $tramites = Tramite::all();
        
        return view('admin.clientes.edit', compact('cliente','tramites','tipodocumentos','tipotramites','nacionalidads'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //dd($cliente);
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:clientes,slug,$cliente->id",
            'last_name' => 'required',
            'identification' => 'required',
            'email' => 'required',
            'user' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'phone2' => 'nullable',
            'observation' => 'nullable',
            'cita_cas' => 'nullable',
            'cita_embajada' => 'nullable',
            'abono' => 'nullable',
            'debe' => 'nullable',
            'total' => 'nullable',
            'tipodocumento_id' => 'nullable',
            'tipotramite_id' => 'nullable',
            'nacionalidad_id' => 'nullable',
        ]);
        

        $cliente->update($request->all());
        if ($request->tramites)
        {
            $cliente->tramites()->sync($request->tramites);
        }

        return redirect()->route('clientes.shwow', compact('cliente'))->with('success', ' ¡Felicidades el tramite se actualizó con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
