<?php

namespace App\Http\Controllers\Admin;

use App\Models\CarritoShopDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarritoShopDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.sections.carrito.detail');

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
     * @param  \App\Models\CarritoShopDetail  $carritoShopDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CarritoShopDetail $carritoShopDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarritoShopDetail  $carritoShopDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CarritoShopDetail $carritoShopDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarritoShopDetail  $carritoShopDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarritoShopDetail $carritoShopDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarritoShopDetail  $carritoShopDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarritoShopDetail $carritoShopDetail)
    {
        //
    }
}
