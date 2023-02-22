@extends('layouts.main')
@section('content')
<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 12px
    }
    .slider-group{
        display: flex;
        flex-direction: column;
    }
    .slider{
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .atras{
            text-decoration: none;
            color: cadetblue;
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
    <form action="/products/filter" method="post">
        @csrf
        <div class="slider-group">
            <div class="slider">
                <label for="stockMin-slider">Selecciona el stock mínimo:</label> 
                <input type="range" name="stockMin" id="stockMin-slider" value="0" step="1" min="0" max="999">
                <span id="valor-stockMin"></span>

            </div>
            <div class="slider">
                <label for="stockMax-slider">Selecciona el stock máximo:</label> 
                <input type="range" name="stockMax" id="stockMax-slider" value="9999" step="1" min="1" max="999">
                <span id="valor-stockMax"></span>
            </div>
            <div class="slider">
                <label for="precioMin-slider">Selecciona el precio mínimo:</label> 
                <input type="range" name="precioMin" id="precioMin-slider" value="3" step="0.05" min="0" max="999">
                <span id="valor-precioMin"></span>
            </div>
        </div>
        <button type="submit">Filtrar</button>
    </form>
    <script>
        const stockMin = document.querySelector('#valor-stockMin');
        const sliderStockMin = document.querySelector('#stockMin-slider');
        stockMin.textContent = sliderStockMin.value;
        sliderStockMin.addEventListener("input",(event)=>{
            stockMin.textContent=event.target.value;
        })
        const stockMax = document.querySelector('#valor-stockMax');
        const sliderStockMax = document.querySelector('#stockMax-slider');
        stockMax.textContent = sliderStockMax.value;
        sliderStockMax.addEventListener("input",(event)=>{
            stockMax.textContent=event.target.value;
        })
        const precioMin = document.querySelector('#valor-precioMin');
        const sliderPrecioMin = document.querySelector('#precioMin-slider');
        precioMin.textContent = sliderPrecioMin.value;
        sliderPrecioMin.addEventListener("input",(event)=>{
            precioMin.textContent=event.target.value;
        })
    </script>
@endsection