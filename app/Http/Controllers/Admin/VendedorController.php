<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vendedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Hashids\Hashids;
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
        $hash=new Hashids();
        $nombre_vendedor = $request->get('buscarpor');
        $vendedor = Vendedor::where('nombre_vendedor','like',"%$nombre_vendedor%")->latest()->paginate(10);

        return view('admin.vendedors.index', ['vendedor' => $vendedor, 'hash'=>$hash]);
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
        $mensaje = "Vendedor Guardado Correctamente";

        $requestData = $request->all();
        
        $validator = Validator::make($requestData, [
            'nombre_vendedor' => 'required|max:191',
            'apellido' => 'required|max:191',
            'celular' => 'required|max:191',
            'imagen' => 'required',
            'whatsapp' => 'nullable',
            'ciudad' => 'nullable',
            'correo_electronico' => 'nullable',
            'imagen' => 'nullable'
        ]);

        DB::beginTransaction();
       
        if ($validator->fails()) {
            return redirect('admin/vendedor/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
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
        }

        Session::flash('message','Vendedor Creado Exisitosamente!');
        return redirect()->route('admin.vendedor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $hash = new Hashids();
        $hash_id = $hash->decode($id);

        $vendedor = Vendedor::all();
        $vendedors = $vendedor->find($hash_id);

        foreach($vendedors as $vendedorss){
            $id= $vendedorss->id;
            $nombre_vendedor = $vendedorss->nombre_vendedor;
            $apellido = $vendedorss->apellido;
            $celular = $vendedorss->celular;
            $whatsapp = $vendedorss->whatsapp;
            $ciudad = $vendedorss->ciudad;
            $correo_electronico = $vendedorss->correo_electronico;
            $imagen = $vendedorss->imagen;
            $created_at = $vendedorss->created_at;
            $updated_at = $vendedorss->updated_at;
        }

        return view('admin.vendedors.show', compact('nombre_vendedor','apellido','celular','whatsapp','ciudad','correo_electronico',
        'imagen','created_at','updated_at'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $vendedor = Vendedor::findOrFail($id);
        return view('admin.vendedors.edit', ['vendedor' => $vendedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $vendedor = Vendedor::find($id);
        $mensaje = 'Vendedor Editado Exitosamente!!!';

        $requestData = $request->all();

        $validator = Validator::make($requestData, [
            'nombre_vendedor' => 'required|max:191',
            'apellido' => 'required|max:191',
            'celular' => 'required|max:191',
            'imagen' => 'required',
            'whatsapp' => 'nullable',
            'ciudad' => 'nullable',
            'correo_electronico' => 'nullable',
            'imagen' => 'nullable'
        ]);

        DB::beginTransaction();

        if ($validator->fails()){
            return redirect('admin/vendedor/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($request->imagen == ''){
                unset($requestData['imagen']);
            }
    
            $mensaje = "Vendedor Actualizado correctamente :3";
            if($request->imagen){
                $data = $request->imagen;
                $file = file_get_contents($request->imagen);
                $info = $data->getClientOriginalExtension(); 
                $extension = explode('images/vendedors', mime_content_type('images/vendedors'))[0];
                $image = Image::make($file);
                $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info; 
                $path  = 'images/vendedors';
                if (!file_exists($path)){
                    mkdir($path, 0777, true);
                }
                $img = $path.'/'.$fileName; 
                if($image->save($img)) {
                    $archivo_antiguo = $vendedor->imagen;
                    $requestData['imagen'] = $img;
                    $mensaje = "Vendedor Actualizado correctamente :3";
                    if ($archivo_antiguo != '' && !File::delete($archivo_antiguo)) {
                        $mensaje = "Vendedor Actualizado. error al eliminar la imagen";
                    }
                }else{
                    $mensaje = "Error al guardar la imagen";
                }
            }
    
            if($vendedor->update($requestData)){
                DB::commit();
            }else{
                DB::rollback();
            }
        }       

        Session::flash('edit',$mensaje);
        return redirect()->route('admin.vendedor.index');
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
