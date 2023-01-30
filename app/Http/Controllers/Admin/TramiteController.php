<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tramite;
use Illuminate\Support\Str;


class TramiteController extends Controller
{

    public function index()
    {
        return view('admin.tramites.index');
    }

    public function create()
    {
        return view('admin.tramites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:tramites',
            'costo' => 'required',
        ]);
        Tramite::create($request->all());

        return redirect()->route('tramites.index')->with('success', ' ¡Felicidades el tramite se creo con éxito!');
    }

    public function edit(Tramite $tramite)
    {
        return view('admin.tramites.edit', compact('tramite'));
    }

    public function update(Request $request, Tramite $tramite)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tramites,slug,$tramite->id",
            'costo' => 'required'
        ]);

        $tramite->update($request->all());

        return redirect()->route('tramites.index')->with('success', ' ¡Felicidades el tramite se actualizó con éxito!');
    }

    public function destroy(Tramite $tramite)
    {

        $tramite->delete();

        return redirect()->route('tramites.index')->with('success', ' ¡Felicidades el tramite se eliminó con éxito!');
    }


}
