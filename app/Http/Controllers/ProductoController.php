<?php

namespace App\Http\Controllers;

use App\Models\ProductoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductoController extends Controller
{

    public function index(){
        return view('index');
    }
    public function Listado(Request $request){

        if ($request->filtro!=null){
            return ProductoModel::where('nombre', 'LIKE', "%{$request->filtro}%")->get();
            
        }else{

            return ProductoModel::all();
        }

    }

    public function obtenerProdcutoporId($id){
            return ProductoModel::find($id);
    }

    public function AgregarProducto(Request $request){
       
        if ($request->file('imagen')){
            $image=$request->file('imagen');
            $imagenName = time().$image->getClientOriginalName();
            $image->move(public_path().'/assets/',$imagenName);
            $path ='http://127.0.0.1:8000/assets/'.$imagenName;
        }
        $productoGuardado=ProductoModel::create([
            'nombre' =>$request->nombre,
            'descripcion' =>$request->descripcion,
            'imagen' =>$path,
            'precio' =>$request->precio,
        ]);
        return response()->json(["message"=>"guardado"]);
    }

  
    public function AgregarPro(){
        return view('productos.AgregarProducto');

    }

    public function DetalleProducto($id){
        return view('productos.DetalleProducto',['idProducto'=>$id]);

    }

    public function eliminar($id)
    {
        $product = ProductoModel::find($id);
        if (!$product) {
            return "Producto no encontrado";
        }
        $product->delete();
        return response()->json("guardado");
    }

    public function actualizar(Request $request,$id){
        
        $product=ProductoModel::find($id);
        if (!$product){
            return "producto no existe";
        }
        //dd($request->file('imagen'));
        File::delete($product->imagen);
        if ($request->file('imagen')){
            $image=$request->file('imagen');
            $imagenName = time().$image->getClientOriginalName();
            $image->move(public_path().'/assets/',$imagenName);
            $path ='http://127.0.0.1:8000/assets/'.$imagenName;
        }
        $product->nombre=$request->nombre;
        $product->descripcion=$request->descripcion;
        $product->imagen= $path;
        $product->precio=$request->precio;

        $product->save();
        return response()->json("guardado");
    }
    public function EditarProducto($id){
        return view('productos.EditarProducto',['idProducto'=>$id]);
    }

}
