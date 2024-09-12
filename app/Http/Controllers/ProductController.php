<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $misProductos = Product::paginate();
        return view('products.index', [
            'products' =>$misProductos
        ]);
    }
    public function create(){
        $categorias = Category::all();
        return view('products.create', compact('categorias'));
    }
    public function show($id){
        $myProduct = Product::find($id);
        return view('products.show', [
            'product' => $myProduct,
        ]);
    }
    public function store(Request $request){
        $productNuevo = new Product();
        $productNuevo->name = $request->nombre;
        $productNuevo->description = $request->descripcion;
        $productNuevo->price = $request->precio;
        $productNuevo->category = $request->categoria;
        $productNuevo->url_image = "https://m.media-amazon.com/images/I/71ysHVMH4FL.jpg";
        $productNuevo->save();
        return redirect()->route('products.show', $productNuevo->id);
        
    }
}
