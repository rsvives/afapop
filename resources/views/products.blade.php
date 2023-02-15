<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .lista-productos{
            display: flex;
            flex-direction: column;
            gap: 12px;
            max-width:800px;
            margin:auto
        }
        .producto{
            display: flex;
            flex-direction: column;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.3);
            border-radius: 8px;
            padding: 12px
        }
        .producto .top{
            display: flex;
            align-items: baseline;
            justify-content: space-between
        }
        .numbers{
            display: flex;
            flex-direction: column;
            align-items: flex-end
    
        }
    </style>
</head>
<body>
    <h1>Aquí están todos los productos</h1>
    
    
    <div class="lista-productos">
        @foreach ($misProductos as $p)
        <div class="producto">
            <div class="top">
                <h3>
                    {{$p->nombre}}
                </h3>
                <div class="numbers">
                    <span>{{$p->precio}}€</span>
                    <span>{{$p->stock}} uds disponibles</span>
    
                </div>
            </div>
            <p>
                {{$p->descripcion}}
            </p>
    
    
        </div>
        @endforeach
    
    
    </div>
</body>
</html>