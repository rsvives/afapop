<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function allProducts()
    {
        $productos = Producto::all();
        return view('products', ["misProductos" => $productos]);
    }


    public function newProductForm()
    {
        return view('newProductForm');
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
}
