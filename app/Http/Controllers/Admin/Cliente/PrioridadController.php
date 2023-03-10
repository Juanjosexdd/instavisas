<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrioridadController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.prioridad.index')->only('index');
    }
    public function index()
    {
        return view('admin.prioridad.index');
    }
}
