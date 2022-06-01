<?php

namespace App\Http\Controllers\Admin;

use App\Models\Factura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $buscardorEmpty = $request->all();
        

        $factura_buscada = $request->get('buscarpor');
       
        $factura = [["nit"=>"123456789","id"=>"1", "codigo_producto"=>"03EAGD10", "descripcion"=>"TOR CHIPBOARD ZA 4 * 40", "unidad_pieza"=>"PZ","cantidad"=>"1000.00",
                    "precio_unitario"=>"00.7","descuento"=>"0.00","subtotal"=>"70.00"]];

      

        $factura_encontrada = array_filter($factura);

        dd($factura_encontrada);

        return view('page.sections.facturas.index', ['factura'=>$factura, 'buscardorEmpty'=>$buscardorEmpty, 'factura_encontrada'=>$factura_encontrada]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
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
