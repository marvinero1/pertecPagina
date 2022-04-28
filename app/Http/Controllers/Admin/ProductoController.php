<?php

namespace App\Http\Controllers\Admin;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use DB;
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
        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->latest()->orderBy('nombre_producto')->paginate(10);
        
        return view('admin.products.index', ['producto' => $producto]);
    }

    public function productosPromocion(Request $request){
        $nombre_producto = $request->get('buscarpor');
        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->where('promocion', 'si')->latest()->paginate(10);
        
        return view('admin.products.promocion', ['producto' => $producto]);
    }

    public function productosNovedad(Request $request){
        $nombre_producto = $request->get('buscarpor');
        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->where('novedad', 'si')->latest()->paginate(10);
        
        return view('admin.products.novedad', ['producto' => $producto]);
    }

    public function getProducts(){
        // $producto = Producto::all();
        $producto = Producto::all();

        return response()->json($producto, 200);
    }

    public function getProductsLessSales(){
        $productoLessSales = Producto::where('productos.denominacion', '=', "nccopa")->get();

        return response()->json($productoLessSales, 200);
    }

    public function getProductsStagnat(){
        $productoStagna = Producto::where('productos.denominacion', '=', "chipb")->get();

        return response()->json($productoStagna, 200);
    }

    public function getProductsId($id){
        $producto = Producto::findOrFail($id);
        return response()->json($producto, 200);
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
        $mensaje = "Producto Guardada Correctamente";
        $mensajeError = "Producto No Guardada Correctamente";

        DB::beginTransaction();
        $requestData = $request->all();

        if($request->imagen){
            $data = $request->imagen;
            $file = file_get_contents($request->imagen);
            $info = $data->getClientOriginalExtension();
            $extension = explode('images/productos', mime_content_type('images/productos'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/productos';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$fileName;
            if($image->save($img)){
                $requestData['imagen'] = $img;
                $mensaje = "Producto Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }

        $producto = Producto::create($requestData);

        if($producto){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message','Producto Creado Exisitosamente!');
        return redirect()->route('admin.producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $producto = Producto::findOrFail($id);
        return view('admin.products.show', ['producto' => $producto]); 
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

    public function productoPromocion(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $promocion = $request->get('promocion');

        $producto->promocion = $promocion;
        $producto->update(); 

        Session::flash('promocion','Producto Agregado a Promocion Exisitosamente!');
        return redirect()->route('admin.producto.index');
    }

    public function productoNovedad(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $novedad = $request->get('novedad');

        $producto->novedad = $novedad;
        $producto->update(); 

        Session::flash('novedad','Producto Agregado a Novedad Exisitosamente!');
        return back()->withInput();
    }

    public function  productoMatriz(Request $request, $id){
     
        $producto = Producto::findOrFail($id);
        $mensaje = 'Matriz Creada Exitosamente!!!';

        $requestData = $request->all();
        
        if(is_null($request->imagen_matriz)){
            unset($requestData['imagen_matriz']);
        }

        $mensaje = "Matriz Creada correctamente :3";
        if($request->imagen_matriz){
            $data = $request->imagen_matriz;
            $file = file_get_contents($request->imagen_matriz);
            $info = $data->getClientOriginalExtension();
            $extension = explode('images/productos/matrices', mime_content_type('images/productos/matrices'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/productos/matrices';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$fileName;
            if($image->save($img)) {
                $archivo_antiguo = $producto->imagen_matriz;
                $requestData['imagen_matriz'] = $img;
               
                $mensaje = "Matriz Creada correctamente :3";
                if ($archivo_antiguo != '' && !File::delete($archivo_antiguo)) {
                    $mensaje = "Matriz Creada. error al eliminar la imagen";
                }
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }

        if($producto->update($requestData)){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message','Matriz Creada Exisitosamente!');
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();

        Session::flash('danger','Producto Eliminado Exitosamente!');
        return back()->withInput();
    }
}
