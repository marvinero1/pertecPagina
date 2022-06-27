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
        $this->middleware('auth', ['except' => ['index','historia','contactanos','confirmation']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $productoBuscado= [];
        $nombre_producto = $request->get('buscarpor');
        $tienda = Tienda::latest()->get();

        $hash=new Hashids();
        $carusel = Carusel::all();
        $producto = Producto::inRandomOrder()->paginate('3');
        $producto2 = Producto::inRandomOrder()->paginate('3');


        $oficinas = Tienda::where('tipo','oficina')->get();
        $tiendaLPZ = Tienda::where('ciudad','La Paz')->get();
        $tiendaCBBA = Tienda::where('ciudad','Cochabamba')->get();
        $tiendaSTCZ = Tienda::where('ciudad','Santa Cruz')->get();
        $modalPopup = ModalPopup::all();

        // print($nombre_producto);

        if ($nombre_producto != "") {
            $productoBuscado = Producto::where('nombre_producto','like',"%$nombre_producto%")->latest()->get();

        }
        return view('index', ['hash' => $hash, 'carusel' => $carusel, 'producto' => $producto, 'producto2' => $producto2,
                    'tienda' => $tienda, 'tiendaLPZ'=>$tiendaLPZ, 'tiendaCBBA'=>$tiendaCBBA, 'tiendaSTCZ'=>$tiendaSTCZ,
                    'oficinas'=>$oficinas,'modalPopup'=>$modalPopup,'productoBuscado'=>$productoBuscado,
                    'nombre_producto'=>$nombre_producto]);
    }

    public function sitemap(){
        return redirect('public/sitemap.xml');
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

    public function confirmation(){
        return view('page.sections.mail.confirmation');
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

        Mail::to('marvinero@gmail.com')->send(new \App\Mail\MyTestMail($all));
        dd("Email is Sent.");
    }
}
