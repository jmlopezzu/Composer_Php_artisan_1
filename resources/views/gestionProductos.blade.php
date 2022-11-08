<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
  <form method="post" action="{{route('productos.store')}}">
    @csrf
    <label>Nombre
      <input type="text" name="nombre" id="nombre">
    </label>

    <label>Precio
      <input type="text" name="precio" id="precio">
    </label>

    <label>Stock
      <input type="text" name="stock" id="stock">
    </label>

    <label> Descripcion
      <input type="text" name="descripcion" id="descripcion">
    </label>

    <label>Imagen
      <input type="text" name="imagen" id="imagen">
    </label>

    <button type="submit">Enviar</button>

  </form>

</body>

</html>