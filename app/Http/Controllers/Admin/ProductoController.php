<?php

namespace App\Http\Controllers\Admin;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Hashids\Hashids;
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
        $hash=new Hashids();
        $nombre_producto = $request->get('buscarpor');
        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->latest()->orderBy('nombre_producto')->paginate(10);

        return view('admin.products.index', ['producto' => $producto, 'hash' => $hash]);
    }

    public function productsFront(Request $request){
        $hash=new Hashids();
        $nombre_producto = $request->get('buscarpor');
        $producto_buscado = Producto::where('nombre_producto','like',"%$nombre_producto%")->latest()->get();
        $producto = Producto::all();

        // return view('page.sections.prueba', ['producto' => $producto, 'hash' => $hash]);
        return view('page.sections.productos.catalogo', ['producto' => $producto, 'hash' => $hash,
         'producto_buscado'=>$producto_buscado,'nombre_producto'=>$nombre_producto]);
    }

    public function prom_products(){
        $hash=new Hashids();
        $producto = Producto::where('promocion', 'si')->latest()->paginate(10);

        return view('page.sections.productos.promocion', ['producto' => $producto, 'hash' => $hash]);
    }

    public function nov_products(){
        $hash=new Hashids();
        $producto = Producto::where('novedad', 'si')->latest()->paginate(10);

        return view('page.sections.productos.novedad', ['producto' => $producto, 'hash' => $hash]);
    }

    public function productosPromocion(Request $request){
        $hash = new Hashids();
        $nombre_producto = $request->get('buscarpor');
        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->where('promocion', 'si')->latest()->paginate(10);

        return view('admin.products.promocion', ['producto' => $producto, 'hash'=>$hash]);
    }

    public function productosNovedad(Request $request){
        $hash=new Hashids();
        $nombre_producto = $request->get('buscarpor');
        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->where('novedad', 'si')->latest()->paginate(10);

        return view('admin.products.novedad', ['producto' => $producto,'hash'=>$hash]);
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

        $requestData = $request->all();

        $validator = Validator::make($requestData, [
            'nombre_producto' => 'required|max:191',
            'denominacion' => 'required|max:191',
            'categoria' => 'required|max:191',
            'sub_categoria' => 'required|max:191',
            'inox' => 'required|max:191',
            'imagen' => 'required|mimes:jpeg,png,tif|max:10500',
            'imagen_matriz' => 'nullable',
            'material' => 'nullable',
            'acabado' => 'nullable',
            'rosca' => 'nullable',
            'resistencia' => 'nullable',
            'tratamiento' => 'nullable',
            'sae' => 'nullable',
            'zb' => 'nullable',
            'zam' => 'nullable',
            'promocion' => 'nullable',
            'novedad' => 'nullable'
        ]);

        DB::beginTransaction();

        if ($validator->fails()) {
            return redirect('admin/producto/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
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
        $hash = new Hashids();
        $hash_id = $hash->decodeHex($id);
        $productos = Producto::findOrFail($hash_id);

        return view('admin.products.show', compact('productos'));
    }

    public function showFrontend($id){
        $hash = new Hashids();
        $hash_id = $hash->decodeHex($id);
        $producto_Id = Producto::findOrFail($hash_id);
        $producto_sugeridos = Producto::inRandomOrder()->paginate(4);
        return view('page.sections.productos.show', compact('producto_Id','producto_sugeridos','hash'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $hash = new Hashids();
        $hash_id = $hash->decodeHex($id);
        $producto = Producto::findOrFail($hash_id);
        return view('admin.products.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $producto = Producto::find($id);
        $requestData = $request->all();

        $validator = Validator::make($requestData, [
            'nombre_producto' => 'required|max:191',
            'denominacion' => 'required|max:191',
            'categoria' => 'required|max:191',
            'sub_categoria' => 'required|max:191',
            'inox' => 'required|max:191',
            'imagen' => 'nullable',
            'imagen_matriz' => 'nullable',
            'material' => 'nullable',
            'acabado' => 'nullable',
            'rosca' => 'nullable',
            'resistencia' => 'nullable',
            'tratamiento' => 'nullable',
            'sae' => 'nullable',
            'zb' => 'nullable',
            'zam' => 'nullable',
            'promocion' => 'nullable',
            'novedad' => 'nullable'
        ]);

        if ($validator->fails()){
            return redirect('admin/producto/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if($request->imagen == ''){
                unset($requestData['imagen']);
            }

            $mensaje = "Producto Actualizado correctamente :3";
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
                if($image->save($img)) {
                    $archivo_antiguo = $producto->imagen;
                    $requestData['imagen'] = $img;
                    $mensaje = "Producto Actualizado correctamente :3";
                    if ($archivo_antiguo != '' && !File::delete($archivo_antiguo)) {
                        $mensaje = "Producto Actualizado. error al eliminar la imagen";
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
        }

        Session::flash('message',$mensaje);
        return redirect()->route('admin.producto.index');
    }

    public function productoPromocion(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $promocion = $request->get('promocion');
        $descripcion_promocion = $request->get('descripcion_promocion');

        $producto->promocion = $promocion;
        $producto->descripcion_promocion = $descripcion_promocion;
        $producto->update();

        Session::flash('promocion','Producto Promocion Exisitosamente!');
        return redirect()->route('admin.producto.index');
    }

    public function productoNovedad(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $novedad = $request->get('novedad');
        $descripcion_novedad = $request->get('descripcion_novedad');

        $producto->novedad = $novedad;
        $producto->descripcion_novedad = $descripcion_novedad;

        $producto->update();

        Session::flash('novedad','Producto Novedad Exisitosamente!');
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

    public function changeMatrix(Request $request, $id){

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
        // $producto->delete();

        Session::flash('danger','Producto Eliminado Exitosamente!');
        return back()->withInput();
    }
}
