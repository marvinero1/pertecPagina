<?php

namespace App\Http\Controllers\Admin;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Image;
use Session;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        
        $nombre_producto = $request->get('buscarpor');
        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->latest()->paginate(10);
        //dd($producto);
        
        return view('admin.products.index', ['producto' => $producto]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $imagen = null;
               
        $requestData = $request->all();
                
        if(request()->has('imagen')){
            $imagesUploaded = request()->file('imagen');
            $imageName = time() . '.' . $imagesUploaded->getClientOriginalExtension();
            $imagenpath = public_path('/images/productos/');
            $imagesUploaded->move($imagenpath, $imageName);

            Producto::create([
                'nombre_producto' => $request->nombre_producto,
                'denominacion' => $request->denominacion,
                'categoria' => $request->categoria,
                'inox' => $request->inox,
                'imagen' => '/images/productos/' .$imageName,
                'material' => $request->material,
                'acabado' => $request->acabado,
                'rosca' => $request->rosca,
                'resistencia' => $request->resistencia,
                'tratamiento' => $request->tratamiento,
                'sae' => $request->sae,
                'zb' => $request->zb,
                'zam' => $request->zam,
            ]);
        }else{
            Producto::create([
                'nombre_producto' => $request->nombre_producto,
                'denominacion' => $request->denominacion,
                'categoria' => $request->categoria,
                'inox' => $request->inox,
                'material' => $request->material,
                'acabado' => $request->acabado,
                'rosca' => $request->rosca,
                'resistencia' => $request->resistencia,
                'tratamiento' => $request->tratamiento,
                'sae' => $request->sae,
                'zb' => $request->zb,
                'zam' => $request->zam,
            ]);
        }

        Session::flash('message','Producto Creado Exisitosamente!');
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
