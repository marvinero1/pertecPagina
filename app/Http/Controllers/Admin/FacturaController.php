<?php

namespace App\Http\Controllers\Admin;

use App\Models\Factura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;
use Illuminate\Support\Str;
use Session;
use numeroaletras;
use modelonumero;
require_once 'numeroaletras.php';

class FacturaController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $hash=new Hashids();
        $nit = $request->get('nit');
        $vefactura = empty($vefactura) ? DB::table('vefactura')->where('nit', $nit)->orderByDesc('fechareg', 'desc')->paginate(20): $vefactura;

        if($nit == "0"){
            Session::flash('warning','NIT o C.I No puede ser 0.');
        }

        return view('page.sections.facturas.index', compact('nit','vefactura','hash'));
    }

    public function viewPDF($codfactura){
        $numeroaletras = new numeroaletras();
        $modelonumero = new modelonumero();

        $cod_factura=0;
        $cod_item=0;
        $descripcion=0;
        $medida="";
        $udm="";
        $cantidad=0;
        $precio_lista=0;
        $cantidad_precioneto_decimal=0;
        $sub_total=0;
        $total=0;
        $descuento=0;
        $total_literal="";
        $total_menos_descuento=0;
        $cantidad_precio_decimal=0;
        $en_linea=0;

        $verfactura = DB::table('vefactura')->where('codigo', $codfactura)->first();
        $vefacturaDetalle = DB::table('vefactura1')->where('codfactura', $codfactura)->get();
        $item = DB::table('initem')->get();
        $vefacturaProducto = DB::table('vefactura1')
        ->join('initem', function($join) use($codfactura){
            $join->on('vefactura1.coditem', '=', 'initem.codigo')
                    ->where('vefactura1.codfactura','=', $codfactura);
        })->get();

        // $tienda = $verfactura->idcuenta;
        if(!empty($verfactura)){
            $en_linea = $verfactura->en_linea;
        }

        foreach($vefacturaProducto as $vefacturaProductos){
            $cod_factura = $vefacturaProductos->codfactura;
            $cod_item = $vefacturaProductos->coditem;
            $precio_lista = $vefacturaProductos->preciolista;
            $cantidad =  $vefacturaProductos->cantidad;
            $precio_neto = $vefacturaProductos->precioneto;
            $cantidad_precio =  $cantidad * $precio_lista;
            $cantidad_precioneto =$vefacturaProductos->cantidad * $vefacturaProductos->precioneto;

            $sub_total = (round($cantidad,2) * round($precio_lista,2));
            $total += $sub_total;

            $precio_lista_decimal=number_format($precio_lista, 2);
            $cantidad_precio_decimal=(round($cantidad_precio, 2, PHP_ROUND_HALF_UP));
            $totalParse =(round($total, 2, PHP_ROUND_HALF_UP));
            $cantidad_precioneto_decimal=(round($cantidad_precioneto, 2, PHP_ROUND_HALF_UP));
            $precio_neto_decimal=number_format($precio_neto, 2);
            $descuento = $cantidad_precio_decimal - $cantidad_precioneto_decimal;

            $total_menos_descuento = $total - $descuento;
        }

        $descuento_round=round($descuento);
        $total_menos_descuento_round = round($total_menos_descuento,2);

        $total_literal = $modelonumero->numtoletras(round($total_menos_descuento,2),'Bolivianos');

        $pdf = \PDF::loadView('page.sections.facturas.pdf', compact('vefacturaDetalle','item','verfactura','vefacturaProducto','cod_factura',
        'cod_item','cantidad_precio_decimal','cantidad_precioneto_decimal','sub_total','total','descuento','total_menos_descuento',
        'total_literal','en_linea','totalParse','descuento_round','total_menos_descuento_round'));

        $pdf_download= $pdf->download('mi-factura-pertec-'.$verfactura->codigo.'.pdf');

        return $pdf_download;
    }

    public function viewPDFRollo($codfactura){
        $numeroaletras = new numeroaletras();
        $modelonumero = new modelonumero();

        $cod_factura=0;
        $cod_item=0;
        $descripcion=0;
        $medida="";
        $udm="";
        $cantidad=0;
        $precio_lista=0;
        $cantidad_precioneto_decimal=0;
        $sub_total=0;
        $total=0;
        $descuento=0;
        $total_literal="";
        $total_menos_descuento=0;
        $cantidad_precio_decimal=0;

        $verfactura = DB::table('vefactura')->where('codigo', $codfactura)->first();
        $vefacturaDetalle = DB::table('vefactura1')->where('codfactura', $codfactura)->get();
        $item = DB::table('initem')->get();

        $vefacturaProducto = DB::table('vefactura1')
        ->join('initem', function($join) use($codfactura){
            $join->on('vefactura1.coditem', '=', 'initem.codigo')
                    ->where('vefactura1.codfactura','=', $codfactura);
        })->get();

        $en_linea = $verfactura->en_linea;

        foreach($vefacturaProducto as $vefacturaProductos){
            $cod_factura = $vefacturaProductos->codfactura;
            $cod_item = $vefacturaProductos->coditem;
            $precio_lista = $vefacturaProductos->preciolista;
            $cantidad =  $vefacturaProductos->cantidad;
            $precio_neto = $vefacturaProductos->precioneto;
            $cantidad_precio =  $cantidad * $precio_lista;
            $cantidad_precioneto =$vefacturaProductos->cantidad * $vefacturaProductos->precioneto;

            $sub_total = (round($cantidad,2) * round($precio_lista,2));
            $total += $sub_total;

            $precio_lista_decimal=number_format($precio_lista, 2);
            $cantidad_precio_decimal=(round($cantidad_precio, 2, PHP_ROUND_HALF_UP));
            $totalParse =(round($total, 2, PHP_ROUND_HALF_UP));
            $cantidad_precioneto_decimal=(round($cantidad_precioneto, 2, PHP_ROUND_HALF_UP));
            $precio_neto_decimal=number_format($precio_neto, 2);
            $descuento = $cantidad_precio_decimal - $cantidad_precioneto_decimal;

            $total_menos_descuento = $total - $descuento;
        }

        $descuento_round=round($descuento);
        $total_menos_descuento_round = round($total_menos_descuento,2);

        $total_literal = $modelonumero->numtoletras(round($total_menos_descuento,2),'Bolivianos');

        $pdf = \PDF::loadView('page.sections.facturas.pdf_rollo', compact('vefacturaDetalle','item','verfactura','vefacturaProducto','cod_factura',
        'cod_item','cantidad_precio_decimal','cantidad_precioneto_decimal','sub_total','total','descuento','total_menos_descuento',
        'total_literal','en_linea','totalParse','descuento_round','total_menos_descuento_round'));


        $pdf_download= $pdf->download('mi-factura-pertec-'.$verfactura->codigo.'.pdf');

        return $pdf_download;
        // return view('page.sections.facturas.pdf_rollo', compact('verfactura','vefacturaProducto','cod_item',
        // 'cantidad_precio_decimal','cantidad_precioneto_decimal','sub_total','total','descuento','total_menos_descuento',
        // 'total_literal','totalParse','en_linea','descuento_round','total_menos_descuento_round'));

    }

    public function facturaVista(Request $request){
        $cliente = $request->all();
        $nit = $cliente['nit'];

        $vefactura = DB::table('vefactura')->where('nit', $nit)->paginate(10);
        return view('page.sections.facturas.listfacturas', ['vefactura'=>$vefactura]);
    }

    public function postDataPDF($codfactura){

        $numeroaletras = new numeroaletras();
        $modelonumero = new modelonumero();

        $cod_factura=0;
        $cod_item=0;
        $descripcion=0;
        $medida="";
        $udm="";
        $cantidad=0;
        $precio_lista=0;
        $cantidad_precioneto_decimal=0;
        $sub_total=0;
        $total=0;
        $descuento=0;
        $total_literal="";
        $total_menos_descuento=0;
        $cantidad_precio_decimal=0;

        $verfactura = DB::table('vefactura')->where('codigo', $codfactura)->first();
        $vefacturaDetalle = DB::table('vefactura1')->where('codfactura', $codfactura)->get();
        $item = DB::table('initem')->get();

        $vefacturaProducto = DB::table('vefactura1')
        ->join('initem', function($join) use($codfactura){
            $join->on('vefactura1.coditem', '=', 'initem.codigo')
                    ->where('vefactura1.codfactura','=', $codfactura);
        })->get();

        // $tienda = $verfactura->idcuenta;
        $en_linea = $verfactura->en_linea;
        // dd($verfactura);

        foreach($vefacturaProducto as $vefacturaProductos){

            $cod_factura = $vefacturaProductos->codfactura;
            $cod_item = $vefacturaProductos->coditem;
            $precio_lista = $vefacturaProductos->preciolista;
            $cantidad =  $vefacturaProductos->cantidad;
            $precio_neto = $vefacturaProductos->precioneto;
            $cantidad_precio =  $cantidad * $precio_lista;
            $cantidad_precioneto =$vefacturaProductos->cantidad * $vefacturaProductos->precioneto;

            $sub_total = (round($cantidad,2) * round($precio_lista,2));
            $total += $sub_total;

            $precio_lista_decimal=number_format($precio_lista, 2);
            $cantidad_precio_decimal=(round($cantidad_precio, 2, PHP_ROUND_HALF_UP));
            $totalParse =(round($total, 2, PHP_ROUND_HALF_UP));
            $cantidad_precioneto_decimal=(round($cantidad_precioneto, 2, PHP_ROUND_HALF_UP));
            $precio_neto_decimal=number_format($precio_neto, 2);
            $descuento = $cantidad_precio_decimal - $cantidad_precioneto_decimal;

            $total_menos_descuento = $total - $descuento;
        }

        $descuento_round=round($descuento);
        $total_menos_descuento_round = round($total_menos_descuento,2);

        $total_literal = $modelonumero->numtoletras(round($total_menos_descuento,2),'Bolivianos');

        return view('page.sections.facturas.pdf', compact('vefacturaDetalle','item','verfactura','vefacturaProducto','cod_factura',
        'cod_item','cantidad_precio_decimal','cantidad_precioneto_decimal','sub_total','total','descuento','total_menos_descuento',
        'total_literal','descuento_round','total_menos_descuento_round',));

    }

    public function pruebaRollo($codfactura){
        $modelonumero = new modelonumero();
        $total=0;

        $verfactura = DB::table('vefactura')->where('codigo', $codfactura)->first();
        $vefacturaProducto = DB::table('vefactura1')
        ->join('initem', function($join) use($codfactura){
            $join->on('vefactura1.coditem', '=', 'initem.codigo')
                    ->where('vefactura1.codfactura','=', $codfactura);
        })->get();

        $en_linea = $verfactura->en_linea;

        foreach($vefacturaProducto as $vefacturaProductos){

            $cod_factura = $vefacturaProductos->codfactura;
            $cod_item = $vefacturaProductos->coditem;
            $precio_lista = $vefacturaProductos->preciolista;
            $cantidad =  $vefacturaProductos->cantidad;
            $precio_neto = $vefacturaProductos->precioneto;
            $cantidad_precio =  $cantidad * $precio_lista;
            $cantidad_precioneto =$vefacturaProductos->cantidad * $vefacturaProductos->precioneto;

            $sub_total = (round($cantidad,2) * round($precio_lista,2));
            $total += $sub_total;

            $precio_lista_decimal=number_format($precio_lista, 2);
            $cantidad_precio_decimal=(round($cantidad_precio, 2, PHP_ROUND_HALF_UP));
            $totalParse =(round($total, 2, PHP_ROUND_HALF_UP));
            $cantidad_precioneto_decimal=(round($cantidad_precioneto, 2, PHP_ROUND_HALF_UP));
            $precio_neto_decimal=number_format($precio_neto, 2);
            $descuento = $cantidad_precio_decimal - $cantidad_precioneto_decimal;

            $total_menos_descuento = $total - $descuento;
        }

        $descuento_round=round($descuento);
        $total_menos_descuento_round = round($total_menos_descuento,2);

        $total_literal = $modelonumero->numtoletras(round($total_menos_descuento,2),'Bolivianos');

        return view('page.sections.facturas.pruebaRollo', compact('verfactura','vefacturaProducto','cod_item',
        'cantidad_precio_decimal','cantidad_precioneto_decimal','sub_total','total','descuento','total_menos_descuento',
        'total_literal','totalParse','en_linea','descuento_round','total_menos_descuento_round'));

    }

    // funcion vista facturas con usuario logueado
    public function getInvoices(){
        $user = auth()->user();
        $hash=new Hashids();
        $nit = $user['nit'];
        $vefactura = DB::table('vefactura')->where('nit', $nit)->orderBy('fechareg','DESC')->paginate(15);
        // dd($vefactura);

        return view('page.sections.facturas',['vefactura'=>$vefactura,'hash'=>$hash]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show($codfactura){
        $numeroaletras = new numeroaletras();
        $modelonumero = new modelonumero();
        $hash = new Hashids();
        $hash_id = $hash->decodeHex($codfactura);

        $cod_factura=0;
        $cod_item=0;
        $descripcion=0;
        $medida="";
        $udm="";
        $cantidad=0;
        $precio_lista=0;
        $cantidad_precioneto_decimal=0;
        $sub_total=0;
        $total=0;
        $descuento=0;
        $total_literal="";
        $total_menos_descuento=0;
        $cantidad_precio_decimal=0;
        $en_linea=0;

        $verfactura = DB::table('vefactura')->where('codigo', $hash_id)->first();
        $vefacturaDetalle = DB::table('vefactura1')->where('codfactura', $hash_id)->get();
        $item = DB::table('initem')->get();

        $vefacturaProducto = DB::table('vefactura1')
        ->join('initem', function($join) use($hash_id){
            $join->on('vefactura1.coditem', '=', 'initem.codigo')
                 ->where('vefactura1.codfactura','=', $hash_id);
        })->get();

        // $tienda = $verfactura->idcuenta;
        if(!empty($verfactura)){
            $en_linea = $verfactura->en_linea;
        }
        // dd($verfactura);

        foreach($vefacturaProducto as $vefacturaProductos){
            $cod_factura = $vefacturaProductos->codfactura;
            $cod_item = $vefacturaProductos->coditem;
            $precio_lista = $vefacturaProductos->preciolista;
            $cantidad =  $vefacturaProductos->cantidad;
            $precio_neto = $vefacturaProductos->precioneto;
            $cantidad_precio =  $cantidad * $precio_lista;
            $cantidad_precioneto =$vefacturaProductos->cantidad * $vefacturaProductos->precioneto;

            $sub_total = (round($cantidad,2) * round($precio_lista,2));
            $total += $sub_total;

            $precio_lista_decimal=number_format($precio_lista, 2);
            $cantidad_precio_decimal=(round($cantidad_precio, 2, PHP_ROUND_HALF_UP));
            $totalParse =(round($total, 2, PHP_ROUND_HALF_UP));
            $cantidad_precioneto_decimal=(round($cantidad_precioneto, 2, PHP_ROUND_HALF_UP));
            $precio_neto_decimal=number_format($precio_neto, 2);
            $descuento = $cantidad_precio_decimal - $cantidad_precioneto_decimal;

            $total_menos_descuento = $total - $descuento;
        }

        $descuento_round=round($descuento);
        $total_menos_descuento_round = round($total_menos_descuento,2);

        $total_literal = $modelonumero->numtoletras(round($total_menos_descuento,2),'Bolivianos');

        return view('page.sections.facturas.show', compact('vefacturaDetalle','item','verfactura','vefacturaProducto','cod_factura',
        'cod_item','cantidad_precio_decimal','cantidad_precioneto_decimal','sub_total','total','descuento','total_menos_descuento',
        'total_literal','en_linea','hash','totalParse','total_menos_descuento_round','descuento_round'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura){

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura){

    }
}
