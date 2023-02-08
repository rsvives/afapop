<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function allProducts()
    {
        dd(Producto::all());
    }
    public function newProductForm()
    {
        return view('newProductForm');
    }
    public function newProduct()
    {
        echo "esto es un nuevo producto";
    }
}
