<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1 style="color: blue">Estos son todos los productos:</h1>

    <div class="table-resposive">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr> 
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{$producto->codigoProducto}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>{{$producto->stock}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>