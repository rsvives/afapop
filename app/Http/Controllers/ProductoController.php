<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function allProducts()
    {
        $productos = Producto::all();
        return view('products',);
    }
    public function newProductForm()
    {
        return view('newProductForm');
    }
    public function newProduct(Request $req)
    {
        $producto = new Producto;

        $producto->nombre = $req->input('nombre');
        $producto->nombre = $req->input('nombre');
        $producto->nombre = $req->input('nombre');
        $producto->nombre = $req->input('nombre');
        $producto->nombre = $req->input('nombre');
    }
}
