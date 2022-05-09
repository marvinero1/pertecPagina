<?php

namespace App\Http\Controllers\Admin;

use App\Models\Boucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request){
        return view('admin.bouchers.index');
    }

    public function boucherConfirmado(){
        return view('admin.bouchers.confirmado');
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
     * @param  \App\Models\Boucher  $boucher
     * @return \Illuminate\Http\Response
     */
    public function show(Boucher $boucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boucher  $boucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Boucher $boucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boucher  $boucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boucher $boucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boucher  $boucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boucher $boucher)
    {
        //
    }
}
