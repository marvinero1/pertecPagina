<?php

namespace App\Http\Controllers\Admin;

use App\Models\ModalPopup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;
use Image;
use Session;
class ModalPopupController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
        $modalPopup = ModalPopup::all();
        return view('admin.pop-up.index', ['modalPopup'=>$modalPopup]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $requestData = $request->all();

        $validator = Validator::make($requestData,[
            'imagen' => 'required',
            'descripcion' => 'required|max:191',
        ]);

        DB::beginTransaction();

        if ($validator->fails()) {
            return redirect('admin/pop-up')->withErrors($validator)->withInput();
        }else{
            if($request->imagen){
                $data = $request->imagen;
                $file = file_get_contents($request->imagen);
                $info = $data->getClientOriginalExtension();
                $extension = explode('images/pop', mime_content_type('images/pop'))[0];
                $image = Image::make($file);
                $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
                $path  = 'images/pop';
                if (!file_exists($path)){
                    mkdir($path, 0777, true);
                }
                $img = $path.'/'.$fileName;
                if($image->save($img)){
                    $requestData['imagen'] = $img;
                    $mensaje = "Pop-Up Registrado correctamente";
                }else{
                    $mensaje = "Error al guardar la imagen";
                }
            }

            $modalPopup = ModalPopup::create($requestData);

            if($modalPopup){
                DB::commit();
            }else{
                DB::rollback();
            }
        }

        Session::flash('message', $mensaje);
        return redirect()->route('admin.pop-up.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModalPopup  $modalPopup
     * @return \Illuminate\Http\Response
     */
    public function show(ModalPopup $modalPopup){
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModalPopup  $modalPopup
     * @return \Illuminate\Http\Response
     */
    public function edit(ModalPopup $modalPopup){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModalPopup  $modalPopup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModalPopup $modalPopup){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModalPopup  $modalPopup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $modalPopup = ModalPopup::findOrFail($id);
        $modalPopup->delete();

        Session::flash('danger','ModalPopup Eliminado Exitosamente!');
        return back()->withInput();
    }
}
