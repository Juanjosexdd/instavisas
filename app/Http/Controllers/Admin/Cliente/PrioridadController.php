<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrioridadController extends Controller
{
    public function index()
    {
        return view('admin.prioridad.index');
    }
}
