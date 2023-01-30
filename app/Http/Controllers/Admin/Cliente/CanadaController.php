<?php

namespace App\Http\Controllers\Admin\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CanadaController extends Controller
{
    //
    public function index()
    {
        return view('admin.canada.index');
    }
}
