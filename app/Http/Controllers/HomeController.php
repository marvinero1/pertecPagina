<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Hashids\Hashids;
use App\Models\Carusel;
use App\Models\Producto;
use App\Models\Tienda;
use App\Models\ModalPopup;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth', ['except' => ['index','historia','contactanos']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $nombre_tienda = $request->get('buscarpor');
        $tienda = Tienda::where('nombre_tienda','like',"%$nombre_tienda%")->latest()->get();

        $hash=new Hashids();
        $carusel = Carusel::all();
        $producto = Producto::inRandomOrder()->paginate('4');
        $producto2 = Producto::inRandomOrder()->paginate('4');

        $oficinas = Tienda::where('tipo','oficina')->get();
        $tiendaLPZ = Tienda::where('ciudad','La Paz')->get();
        $tiendaCBBA = Tienda::where('ciudad','Cochabamba')->get();
        $tiendaSTCZ = Tienda::where('ciudad','Santa Cruz')->get();
        $modalPopup = ModalPopup::all();

        return view('index', ['hash' => $hash, 'carusel' => $carusel, 'producto' => $producto, 'producto2' => $producto2,
                    'tienda' => $tienda, 'tiendaLPZ'=>$tiendaLPZ, 'tiendaCBBA'=>$tiendaCBBA, 'tiendaSTCZ'=>$tiendaSTCZ,
                    'oficinas'=>$oficinas,'modalPopup'=>$modalPopup]);
    }

    public function historia(){
        return view('page.sections.somos');
    }

    public function contactanos(){
        return view('page.sections.contactanos');
    }

    public function cotizacion(){
        return view('page.sections.cotizacion');
    }

    public function getInvoices(){
        return view('page.sections.facturas');
    }

    public function getPedidos(){
        return view('page.sections.pedidos');
    }

    public function sendemail(Request $request){
        $all = $request->all();
        // dd($all);

        // $all = $request->validate([
        //     'nombre' => 'required',
        //     'email' => 'required|email',
        //     'celular'=>'required',
        //     'mensaje' => 'required',
        // ]);

        Mail::to('pertec.digital@int.pertec.com.bo')->send(new \App\Mail\MyTestMail($all));
        dd("Email is Sent.");
    }
}
