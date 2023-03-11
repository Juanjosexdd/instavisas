<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Afiliado;
use App\Models\Detalleestatustramiteafiliado;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
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
        //
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
        $afiliado = Afiliado::create($request->all());
        
        if ($request->tramites)
        {
            $afiliado->tramiteafiliados()->attach($request->tramites);
        }

        $cont = 0;
        while ($cont < count($request->tramites)) {
            $detalle = new Detalleestatustramiteafiliado();
            $detalle->tramite_id = $request->tramites[$cont];
            $detalle->estatus_id = 1;
            $detalle->save();
            $cont = $cont + 1;
        }

        return back()->with('success', ' ¡Felicidades el cliente se registro con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function show(Afiliado $afiliado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function edit(Afiliado $afiliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afiliado $afiliado)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:afiliados,slug,$afiliado->id",
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
            'tipodocumento_id' => 'nullable',
            'tipotramite_id' => 'nullable',
            'nacionalidad_id' => 'nullable',
            ]);
        

        $afiliado->update($request->all());
        if ($request->tramites)
        {
            $afiliado->tramites()->sync($request->tramites);
        }

        $cont = 0;
        while ($cont < count($request->tramites)) {
            $detalle = new Detalleestatustramiteafiliado();
            $detalle->tramite_id = $request->tramites[$cont];
            $detalle->estatus_id = 1;
            $detalle->save();
            $cont = $cont + 1;
        }

        return redirect()->route('clientes.index')->with('success', ' ¡Felicidades el tramite se actualizó con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Afiliado  $afiliado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Afiliado $afiliado)
    {
        //
    }
}
