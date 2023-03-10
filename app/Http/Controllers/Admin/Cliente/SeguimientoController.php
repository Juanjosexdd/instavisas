<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.seguimientos.index')->only('index');
    }

    public function index()
    {
        return view('admin.seguimientos.index');
    }
}
