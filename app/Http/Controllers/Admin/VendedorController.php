<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vendedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use DB;
use Image;
use Session;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $nombre_vendedor = $request->get('buscarpor');
        $vendedor = Vendedor::where('nombre_vendedor','like',"%$nombre_vendedor%")->latest()->paginate(10);

        return view('admin.vendedors.index', ['vendedor' => $vendedor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.vendedors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $mensaje = "Vendedor Guardada Correctamente";

        DB::beginTransaction();
        $requestData = $request->all();

        if($request->imagen){
            $data = $request->imagen;
            $file = file_get_contents($request->imagen);
            $info = $data->getClientOriginalExtension();
            $extension = explode('images/vendedors', mime_content_type('images/vendedors'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/vendedors';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$fileName;
            if($image->save($img)){
                $requestData['imagen'] = $img;
                $mensaje = "Tienda Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }

        $vendedor = Vendedor::create($requestData);

        if($vendedor){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message','Vendedor Creado Exisitosamente!');
        return redirect()->route('admin.vendedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendedor $vendedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendedor $vendedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendedor $vendedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->delete();

        Session::flash('danger','Vendedor Eliminado Exitosamente!');
        return back()->withInput();
    }
}
