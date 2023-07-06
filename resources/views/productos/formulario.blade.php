<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1 style="color: blue">Nuevo Producto:</h1>

    <form method="POST" action=" {{ route('producto.guardar') }} ">
        @csrf

        <div>
            <label for="codigo">Codigo:</label>
            <input type="text" name="codigo">
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio">
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input type="number" name="stock">
        </div>

        <input type="submit">
    </form>
</body>
</html>