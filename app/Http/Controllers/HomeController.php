<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hashids\Hashids;
use App\Models\Carusel;
use App\Models\Producto;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth', ['except' => ['index','historia','contactanos',]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $hash=new Hashids();
        $carusel = Carusel::all(); 
        $producto = Producto::inRandomOrder()->paginate('4');

        return view('index', ['hash' => $hash, 'carusel' => $carusel, 'producto' => $producto]);
    }

    public function historia(){
        return view('page.sections.somos');
    }

    public function contactanos(){
        return view('page.sections.contactanos');
    }
}
