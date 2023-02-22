
    <style>
        .filtros{
            display: flex;
            justify-content: space-between;
        }
        .lista-productos{
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin:auto;
            margin-top: 24px
        }
        .producto{
            display: flex;
            justify-content: space-between;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.3);
            border-radius: 8px;
            padding: 12px;
            text-decoration: none;
            color: black;
            font-weight:500;
        }
        .producto:hover{
            background: #e4fff8
            /* box-shadow: 0 0 8px rgba(0, 204, 255, 0.3); */
        }
        .producto .left{
            display: flex;
            gap: 12px;
        }
        .producto .img{
            width: 64px;
            background: rgb(176, 176, 176);
            border-radius: 8px;
            border: 1px solid rgb(72, 72, 72)
        }
        .producto .left .text{
            display: flex;
            flex-direction: column;
            justify-content: space-around
        }
        .producto .left .top{
            display: flex;
            justify-content: flex-start;
            align-items: baseline;
            gap: 12px
        }
        
        .producto .left .top span.stock{
            color: #565656
        }

        .price{
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 20px
    
        }
    </style>
@extends('layouts.main')
@section('content')

    <h1>Aquí están todos los productos</h1>
    
    <div class="filtros">
        <a href="/products/new"><i class="ph-plus-circle ph-xl"></i>Nuevo producto</a>
        <a href="{{route('vistaFiltros')}}"> <i class="ph-sliders ph-xl"></i>Filtrar resultados</a>
    </div>
    
    <div class="lista-productos">
        @foreach ($misProductos as $p)
        <a class="producto" href="{{route('productDetails',$p->id)}}">
            <div class="left">
                <div class="img" ></div>
                <div class="text">
                    <div class="top">
                        <h3>{{$p->nombre}}</h3>
                        <span class="stock">{{$p->stock}} uds </span>
                    </div>
                    <p>{{$p->descripcion}}</p>
                </div>
            </div>
            <div class="price">
                <span>{{$p->precio}}€</span>
            </div>
    
    
        </a>
        @endforeach
    
    
    </div>
@endsection

