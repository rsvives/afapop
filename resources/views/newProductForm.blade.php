<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('insertProduct')}}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="nombre" >
        <input type="number" name="precio" placeholder="precio">
        <input type="text" name="descripcion" placeholder="descripcion">
        <input type="number" name="stock" placeholder="stock">
        <input type="submit" value="nuevo producto">
    </form>
</body>
</html>