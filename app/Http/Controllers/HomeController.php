<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function getHomeProductos(){
        $a = file_get_contents('http://192.168.31.242:5000/api/getProducts');
        $a1 = file_get_contents('http://192.168.31.242:5000/api/getCaruselImage');
        // $a2 = file_get_contents('http://192.168.31.242:5000/api/getProductsStagnat');

        $b = json_decode($a,"true");
        $b1 = json_decode($a1,"true");
        $bMasVendidos = [];
        $bMenosVendidos = [];
        foreach($b as $bproduct){
            if($bproduct['id']==19 || $bproduct['id']==20 || $bproduct['id']==24 || $bproduct['id']==25){
                array_push($bMasVendidos, $bproduct);
            }
            if($bproduct['id']>=26 && $bproduct['id']<=29){
                array_push($bMenosVendidos, $bproduct);
            }
            if(count($bMasVendidos)==4 && count($bMenosVendidos)==4){
                break;
            }
        }
        // $b1 = json_decode($a1,"true");
        // $b2 = json_decode($a2,"true");


        return view('index', compact('bMasVendidos','bMenosVendidos','b1'));
        // return view('index', compact('b'));
    }


    public function oneProduct($id){
        $idDecode = base64_decode($id);
        $a = file_get_contents('http://192.168.31.242:5000/api/getProductsId/'.$idDecode);
        $b = json_decode($a,"true");
        return view('pages.producto', compact('b'));
    }


    public function getTiendas($id){
        $a = file_get_contents('http://192.168.31.242:5000/api/getStores');
        $s = file_get_contents('http://192.168.31.242:5000/api/getSalesman');
        $b1=[];
        if($id==1){ // la paz
            $b1[0]="Marco Mamani";
            $b1[1]="72039956";
            $b1[2]="La Paz";
        }else if($id==2){ // cbba
            $b1[0]="Emilio Castillo";
            $b1[1]="71722382";
            $b1[2]="Cochabamba";
        }else if($id==3){ // stc
            $b1[0]="Gaston Zurita";
            $b1[1]="72244882";
            $b1[2]="Santa Cruz";
        }
        $b = json_decode($a,"true");
        $v = json_decode($s,"true");
        // return $b;
        return view('pages.tiendas', compact('b','b1','v'));
    }

    public function getAllProductos(){
        $a = file_get_contents('http://192.168.31.242:5000/api/getProducts');
        $b = json_decode($a,"true");
        return view('pages.fullProductos', compact('b'));
    }
    public function getAllProdsPromo(){
        $a = file_get_contents('http://192.168.31.242:5000/api/getProductsPromotion'); // cambiar por API promo
        $b = json_decode($a,"true");
        return view('pages.prodPromo', compact('b'));
    }

    public function getAllProdsNovedad(){
        $a = file_get_contents('http://192.168.31.242:5000/api/getProductsNovelty'); // cambiar por API novedad
        $b = json_decode($a,"true");
        return view('pages.prodNovedad', compact('b'));
    }
}
