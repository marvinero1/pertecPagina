<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tienda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use DB;
use Image;
use Session;

class TiendaController extends Controller{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $nombre_tienda = $request->get('buscarpor');
        $tienda = Tienda::where('nombre_tienda','like',"%$nombre_tienda%")->latest()->paginate(10);

        return view('admin.tiends.index', ['tienda' => $tienda]);
    }

    public function getStores(){
        $tienda = Tienda::all();

        return response()->json($tienda, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.tiends.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $mensaje = "Tienda Guardada Correctamente";

        DB::beginTransaction();
        $requestData = $request->all();

        if($request->imagen){
            $data = $request->imagen;
            $file = file_get_contents($request->imagen);
            $info = $data->getClientOriginalExtension();
            $extension = explode('images/tiendas', mime_content_type('images/tiendas'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/tiendas';
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

        $tienda = Tienda::create($requestData);

        if($tienda){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message','Tienda Creado Exisitosamente!');
        return redirect()->route('admin.tienda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $tienda = Tienda::findOrFail($id);
        return view('admin.tiends.show', ['tienda' => $tienda]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit(Tienda $tienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tienda $tienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $tienda = Tienda::findOrFail($id);
        $tienda->delete();

        Session::flash('danger','Tienda Eliminado Exitosamente!');
        return back()->withInput();
    }
}
