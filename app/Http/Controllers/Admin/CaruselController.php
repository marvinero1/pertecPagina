<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carusel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use File;
use DB;
use Image;
use Session;

class CaruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $carusel = Carusel::all();
        return view('admin.carusels.index', ['carusel' => $carusel]);
    }

    public function getCaruselImage(){
        // $producto = Producto::all();
        $carusel = Carusel::all();
        return response()->json($carusel, 200);
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
        
        $requestData = $request->all();
        
        $validator = Validator::make($requestData, [
            'titulo' => 'required|max:200',
            'sub_titulo' => 'required|max:200',
            'imagen' => 'required|mimes:jpeg,png,tif|max:10000',
            'imagen_icono' => 'required|mimes:jpeg,png,tif|max:1000',
        ]);

     
        DB::beginTransaction();

        if ($validator->fails()) {
            return redirect('admin/carusel/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($request->imagen){
                $data = $request->imagen;
                $data_icon = $request->imagen_icono;

                $file = file_get_contents($request->imagen);
                $file_icono = file_get_contents($data_icon);
                $info = $data->getClientOriginalExtension();
                $info_icon = $data_icon->getClientOriginalExtension();

                $extension = explode('images/carusel', mime_content_type('images/carusel'))[0];
                $image = Image::make($file);
                $image_icon = Image::make($file_icono);
                $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
                $fileName_icon = rand(0,10)."-".date('his')."-".rand(0,10).".".$info_icon;

                $path  = 'images/carusel';
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $img = $path.'/'.$fileName;
                $img_icon = $path.'/'.$fileName_icon;

                if($image->save($img) && $image_icon->save($img_icon)){
                    $requestData['imagen'] = $img;
                    $requestData['imagen_icono'] = $img_icon;

                    $mensaje = "Carusel Registrado correctamente";
                }else{
                    $mensaje = "Error al guardar la imagen";
                }
            }

            $carusel = Carusel::create($requestData);

            if($carusel){
                DB::commit();
            }else{
                DB::rollback();
            }
        }

        Session::flash('message','Carusel Creado Exisitosamente!');
        return redirect()->route('admin.carusel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function show(Carusel $carusel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carusel $carusel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carusel $carusel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $carusel = Carusel::findOrFail($id);
        $carusel->delete();

        Session::flash('danger','Carusel Eliminado Exitosamente!');
        return back()->withInput();
    }
}
