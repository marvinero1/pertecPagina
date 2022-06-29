<?php

namespace App\Http\Controllers\Admin;

use App\Models\CarritoShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarritoShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.sections.carrito.index');
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
     * @param  \App\Models\CarritoShop  $carritoShop
     * @return \Illuminate\Http\Response
     */
    public function show(CarritoShop $carritoShop)
    {
        //
    }

    public function CarBuyProductShow(CarritoShop $carritoShop){
        return view('page.sections.carrito.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarritoShop  $carritoShop
     * @return \Illuminate\Http\Response
     */
    public function edit(CarritoShop $carritoShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarritoShop  $carritoShop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarritoShop $carritoShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarritoShop  $carritoShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarritoShop $carritoShop)
    {
        //
    }
}
