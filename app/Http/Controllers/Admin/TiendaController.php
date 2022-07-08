<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tienda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Hashids\Hashids;
use DB;
use File;
use Image;
use Session;

class TiendaController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $hash=new Hashids();
        $nombre_tienda = $request->get('buscarpor');
        $tienda = Tienda::where('nombre_tienda','like',"%$nombre_tienda%")->latest()->paginate(5);
        $tiendaLPZ = Tienda::where('ciudad','La Paz')->get();
        $tiendaCBBA = Tienda::where('ciudad','Cochabamba')->get();
        $tiendaSTCZ = Tienda::where('ciudad','Santa Cruz')->get();

        return view('admin.tiends.index', ['tienda' => $tienda, 'hash' => $hash, 'tiendaLPZ'=>$tiendaLPZ,
        'tiendaCBBA'=>$tiendaCBBA, 'tiendaSTCZ'=>$tiendaSTCZ]);
    }

    public function tiendasOficinas(){
        $tienda = Tienda::all();
        return view('page.sections.tiendas.tiendas_oficinas', ['tienda' => $tienda]);
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
        $requestData = $request->all();
        
        $validator = Validator::make($requestData, [
            'nombre_tienda' => 'required|max:191',
            'telefono' => 'required|max:191',
            'celular' => 'required|max:191',
            'imagen' => 'required|mimes:jpeg,png,tif|max:100000',
            'imagen_portada' => 'nullable|mimes:jpeg,png,tif|max:100000',
            'whatsapp' => 'nullable',
            'direccion' => 'nullable',
            'ciudad' => 'nullable',
            'tipo' => 'nullable',
            'correo_electronico' => 'nullable',
            'encargado' => 'nullable',
            'latitud' => 'nullable',
            'longitud' => 'nullable'
        ]);

        DB::beginTransaction();
        if ($validator->fails()) {
            return redirect('admin/tiends/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
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

            }if($request->imagen_portada){
                $data = $request->imagen_portada;
                $file = file_get_contents($request->imagen_portada);
                $info = $data->getClientOriginalExtension();
                $extension = explode('images/tiendas/portadas', mime_content_type('images/tiendas/portadas'))[0];
                $image = Image::make($file);
                $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
                $path  = 'images/tiendas/portadas';
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $img = $path.'/'.$fileName;
                if($image->save($img)){
                    $requestData['imagen_portada'] = $img;
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
        $hash = new Hashids();
        $hash_id = $hash->decodeHex($id);
        $tienda = Tienda::findOrFail($hash_id);

        return view('admin.tiends.show', compact('tienda'));
    }


    public function showTienda($id){
        $hash = new Hashids();
        $hash_id = $hash->decodeHex($id);
        $tienda = Tienda::findOrFail($hash_id);

        return view('page.sections.tiendas.tienda_oficinas', compact('tienda'));
    }

    public function showOficina($id){
        $hash = new Hashids();
        // $hash_id = $hash->decodeHex($id);

        // $tienda = Tienda::findOrFail($hash_id);
        return view('page.sections.tiendas.oficina', compact('oficina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $hash = new Hashids();
        $hash_id = $hash->decodeHex($id);

        $tienda = Tienda::findOrFail($hash_id);
        return view('admin.tiends.edit', compact('tienda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tienda  $tienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $tienda = Tienda::find($id);
        $requestData = $request->all();
        
        $validator = Validator::make($requestData, [
            'nombre_tienda' => 'required|max:191',
            'telefono' => 'required|max:191',
            'celular' => 'required|max:191',
            'imagen' => 'nullable|mimes:jpeg,png,tif|max:100000',
            'imagen_portada' => 'nullable|mimes:jpeg,png,tif|max:100000',
            'whatsapp' => 'nullable',
            'direccion' => 'nullable',
            'tipo' => 'nullable',
            'ciudad' => 'nullable',
            'correo_electronico' => 'nullable',
            'encargado' => 'nullable',
            'latitud' => 'nullable',
            'longitud' => 'nullable'
        ]);

        if ($validator->fails()){
            return redirect('admin/tienda/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($request->imagen == ''){
                unset($requestData['imagen']);
            }

            $mensaje = "Tienda Actualizado correctamente :3";
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
                if($image->save($img)) {
                    $archivo_antiguo = $tienda->imagen;
                    $requestData['imagen'] = $img;
                    $mensaje = "Tienda Actualizado correctamente :3";
                    if ($archivo_antiguo != '' && !File::delete($archivo_antiguo)) {
                        $mensaje = "Tienda Actualizado. error al eliminar la imagen";
                    }
                }else{
                    $mensaje = "Error al guardar la imagen";
                }
            }if($request->imagen_portada){
                $data = $request->imagen_portada;
                $file = file_get_contents($request->imagen_portada);
                $info = $data->getClientOriginalExtension();
                $extension = explode('images/tiendas/portadas', mime_content_type('images/tiendas/portadas'))[0];
                $image = Image::make($file);
                $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
                $path  = 'images/tiendas/portadas';
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $img = $path.'/'.$fileName;
                if($image->save($img)){
                    $requestData['imagen_portada'] = $img;
                    $mensaje = "Tienda Registrado correctamente";
                }else{
                    $mensaje = "Error al guardar la imagen";
                }
            }

            if($tienda->update($requestData)){
                DB::commit();
            }else{
                DB::rollback();
            }
        }

        Session::flash('message',$mensaje);
        return redirect()->route('admin.tienda.index');
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
