<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitapasaporteController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('can:admin.citapasaporte.index')->only('index');
    }
    public function index()
    {
        return view('admin.citapasaporte.index');
    }
}
