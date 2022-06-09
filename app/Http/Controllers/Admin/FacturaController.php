<?php

namespace App\Http\Controllers\Admin;

use App\Models\Factura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        // $factura_encontrada = "";
        // $factura =[ "nit"=>"123456789","id"=>"1","codigo_producto"=>"03EAGD10", "descripcion"=>"TOR CHIPBOARD ZA 4 * 40",
        //            "unidad_pieza"=>"PZ","cantidad"=>"1000.00","precio_unitario"=>"00.7","descuento"=>"0.00","subtotal"=>"70.00" ];

        // $factuta_json = json_encode($factura);

        // $nit = $request->get('buscarpor');

        // $buscardorEmpty = $nit;
        // $factura_encontrada = $factuta_json::where('nit','like',"%nit%")->get();

        // print($nit);

        return view('page.sections.facturas.index');
    }

    public function viewPDF(){

        $pdf = \PDF::loadView('page.sections.facturas.pdf');

        // return $pdf->download('mi-archivo.pdf');
        return $pdf->setPaper('letter')->download('archivo.pdf');
    }

    public function facturaVista(Request $request){

        $cliente = $request->all();
        $nit = $cliente['nit'];
        $cod_cliente = $cliente['cod_cliente'];
        
        $vefactura = DB::table('vefactura')->where('codcliente', $cod_cliente)->where('nit', $nit)->get();
        // dd($vefactura);

        return view('page.sections.facturas.listfacturas', ['vefactura'=>$vefactura]);
    }

    public function verPDFprueba(){
        return view('page.sections.facturas.pruebas');

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

        //llamamos a la(s) clases
        
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

        // $vefacturaProducto = DB::table('vefactura1')
        // ->join('initem', 'vefactura1.coditem', '=', 'initem.codigo')
        // ->join('vefactura1', 'vefactura1.codfactura', '=', $codfactura)
        // ->get();


        $vefacturaProducto = DB::table('vefactura1')
        ->join('initem', function($join) use($codfactura){
            $join->on('vefactura1.coditem', '=', 'initem.codigo')
                 ->where('vefactura1.codfactura','=', $codfactura);
        })
        ->get();

        foreach($vefacturaProducto as $vefacturaProductos){
            
            $cod_factura = $vefacturaProductos->codfactura;
            $cod_item = $vefacturaProductos->coditem;
            $precio_lista = $vefacturaProductos->preciolista;
            $cantidad =  $vefacturaProductos->cantidad;
            $precio_neto = $vefacturaProductos->precioneto;
            $cantidad_precio =  $cantidad * $precio_lista;
            $cantidad_precioneto =$vefacturaProductos->cantidad * $vefacturaProductos->precioneto;

            $sub_total = $cantidad * $precio_lista;
            $total += $sub_total;

            $precio_lista_decimal=number_format($precio_lista, 2);
            $cantidad_precio_decimal=(round($cantidad_precio, 2, PHP_ROUND_HALF_UP));
            $cantidad_precioneto_decimal=(round($cantidad_precioneto, 2, PHP_ROUND_HALF_UP));
            $precio_neto_decimal=number_format($precio_neto, 2);
            
            $descuento = $cantidad_precio_decimal - $cantidad_precioneto_decimal;

            $total_menos_descuento = $total - $descuento;
        }  

        
        
        $total_literal = $modelonumero->numtoletras($total_menos_descuento,'Bolivianos');          
        
        return view('page.sections.facturas.show', compact('vefacturaDetalle','item','verfactura','vefacturaProducto','cod_factura',
        'cod_item','cantidad_precio_decimal','cantidad_precioneto_decimal','sub_total','total','descuento','total_menos_descuento',
        'total_literal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
