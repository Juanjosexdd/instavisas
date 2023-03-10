<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.estudiantes.index')->only('index');
    }
    public function index()
    {
        return view('admin.estudiantes.index');
    }
}
