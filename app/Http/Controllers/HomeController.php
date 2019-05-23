<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_ventas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        return view('home');
    }



    public function store(Request $request)
    {
        $detalle_ventas = detalle_ventas::all(); 
        $detalle_ventas = detalle_ventas::orderBy('id')->get();
        return view('principal_admin.index')
        ->with('detalle_ventas', $detalle_ventas);
    }
}
