<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ProductoController extends Controller
{
    public function allProducts()
    {
        $productos = Producto::all();
        return view('products', ["misProductos" => $productos]);
    }


    public function newProductForm()
    {
        return view('newProductForm', ['product' => null]);
    }





    public function newProduct(Request $req)
    {
        $producto = new Producto;

        $producto->nombre = $req->input('nombre');
        $producto->descripcion = $req->input('descripcion');
        $producto->stock = $req->input('stock');
        $producto->precio = $req->input('precio');

        $producto->save();

        $productos = Producto::all();
        return view('products', ["misProductos" => $productos]);
    }
    public function filterForm()
    {
        return view('filter');
    }
    public function filter(Request $req)
    {
        $stockMin = $req->input('stockMin');
        $stockMax = $req->input('stockMax');
        $precioMin = $req->input('precioMin');
        // $productos = Producto::where('stock', '>=', $stock)->get();
        $productos = Producto::where([['stock', '>=', $stockMin], ['stock', '<=', $stockMax], ['precio', '>=', $precioMin]])->get();
        // dd($productos);

        return view('products', ["misProductos" => $productos]);
    }
    public function productDetails($id)
    {
        // dd($id);
        $product = Producto::find($id);
        // dd($product);
        return view('newProductForm', ['product' => $product]);
    }
    public function productUpdate(Request $req, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $req->input('nombre');
        $producto->descripcion = $req->input('descripcion');
        $producto->stock = $req->input('stock');
        $producto->precio = $req->input('precio');

        $producto->save();
        return redirect('/products');
    }
}
