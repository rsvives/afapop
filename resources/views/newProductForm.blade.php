@extends('layouts.main')
@section('content')
    <style>
        form{
            display: flex;
            flex-direction: column;
            max-width: 400px;
            padding: 12px;
            gap: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            margin-top: 24px
        }
        input,textarea{
            margin-bottom:12px
        }
        .atras{
            text-decoration: none;
            color: cadetblue
            display: flex;
            align-items:center;
            gap: 12px;
            font-weight: 700
        }
    </style>

    <a href="{{route('allProducts')}}" class="atras">
        {{-- <i class="ph-trash"></i> --}}
        <i class="ph-arrow-circle-left ph-2x"></i>
        <span>Atrás</span>
    </a>
    @if (!$product)
        <h1>Nuevo producto</h1>
        <h2>Añade un nuevo producto</h2>
    @else
        <h1>Actualizar producto #{{$product->id}}</h1>
        <h2>Modifica los datos del producto producto</h2>
    @endif
    <form action="{{$product?route('updateProduct',$product->id):route('insertProduct')}}" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input required type="text" name="nombre" placeholder="nombre" value="{{$product?$product->nombre:""}}" >
        <label for="descripcion">Descripción:</label>
        <textarea required type="text-area" name="descripcion" placeholder="descripcion" >{{$product?$product->descripcion:""}}</textarea>
        <label for="precio">Precio:</label>
        <input required type="number" step="0.01" name="precio" placeholder="precio" value="{{$product?$product->precio:""}}">
        <label for="stock">Stock:</label>
        <input required type="number" name="stock" placeholder="stock" value="{{$product?$product->stock:""}}">
        @if (!$product)
            <button type="submit">Añadir</button>
        @else
            <button type="submit">Guardar</button>
            
        @endif
       
    </form>
@endsection