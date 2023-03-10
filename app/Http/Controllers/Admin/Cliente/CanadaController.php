<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CanadaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.canada.index')->only('index');
    }
    public function index()
    {
        return view('admin.canada.index');
    }
}
