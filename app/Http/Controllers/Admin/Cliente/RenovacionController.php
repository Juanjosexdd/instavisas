<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenovacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.renovaciones.index')->only('index');
    }

    public function index()
    {
        return view('admin.renovaciones.index');
    }
}
