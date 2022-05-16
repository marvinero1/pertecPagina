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
        $tcb = file_get_contents('http://192.168.31.242:5000/api/getStoresCBBA');
        $tlz = file_get_contents('http://192.168.31.242:5000/api/getStoresLPZ');
        $tsz = file_get_contents('http://192.168.31.242:5000/api/getStoresSTCZ');

        $b = json_decode($a,"true");
        $b1 = json_decode($a1,"true");

        $tcbba = json_decode($tcb,"true");
        $tlapz = json_decode($tlz,"true");
        $tstcz = json_decode($tsz,"true");

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
        return view('index', compact('bMasVendidos','bMenosVendidos','b1','tcbba','tlapz','tstcz'));
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

    public function getStores(){
        $tcb = file_get_contents('http://192.168.31.242:5000/api/getStoresCBBA');
        $tlz = file_get_contents('http://192.168.31.242:5000/api/getStoresLPZ');
        $tsz = file_get_contents('http://192.168.31.242:5000/api/getStoresSTCZ');

        $tcbba = json_decode($tcb,"true");
        $tlapz = json_decode($tlz,"true");
        $tstcz = json_decode($tsz,"true");

        return view('pages.sucursales', compact('tcbba','tlapz','tstcz'));
    }

    public function getstoreId($id){
        $a = file_get_contents('http://192.168.31.242:5000/api/getStoresId/'.$id);
        $b = json_decode($a,"true");
        return view('pages.tiendaInfo', compact('b'));
    }
    public function getOfice($id){
        $s = file_get_contents('http://192.168.31.242:5000/api/getSalesman');
        $b1=[];
        if($id==1){ // la paz
            $b1[0]="Marco Mamani";
            $b1[1]="72039956";
            $b1[2]="La Paz";
            $b1[3]=-16.51706918066056;
            $b1[4]=-68.17148157795276;
            $b1[5]='Villa Bolívar "B" Calle 106 No. 501';
            $b1[6]="(2) 2822336";
            $b1[7]="(2) 2820619";
            $b1[8]="servicio.cliente@pertec.com.bo";
        }else if($id==2){ // cbba
            $b1[0]="Emilio Castillo";
            $b1[1]="71722382";
            $b1[2]="Cochabamba";
            $b1[3]=-17.379960346746;
            $b1[4]=-66.11622941283395;
            $b1[5]='Calle Innominada No. 4581 (Arocagua)';
            $b1[6]="(4) 4716000 (Líneas Rotativas)";
            $b1[7]="(4) 4111632";
            $b1[8]="servicio.cliente@pertec.com.bo";
        }else if($id==3){ // stc
            $b1[0]="Gaston Zurita";
            $b1[1]="72244882";
            $b1[2]="Santa Cruz";
            $b1[3]=-17.76721602140368;
            $b1[4]=-63.15876444093654;
            $b1[5]='Calle Taitetú No. 2680';
            $b1[6]="(3) 3470113";
            $b1[7]="(3) 3111228";
            $b1[8]="servicio.cliente@pertec.com.bo";
        }
        $v = json_decode($s,"true");
        return view('pages.oficinaInfo', compact('b1','v'));
    }
}
