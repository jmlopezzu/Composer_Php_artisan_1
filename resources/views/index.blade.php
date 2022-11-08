<!DOCTYPE html>
<html lang="en">

<body>
  <div class="container text-center">



<a href="{{route('productos.create')}}" class="btn btn-sucess">
Crear producto
</a>

<table class="table table-striped mt-4"> </table>

<thead>
  <tr>#</tr>
  <th>Nombre</th>
  <th>Descripcion</th>
  <th>Precio</th>
  <th>Stock</th>
  <th>Imagen</th>

  <tbody>
    @foreach ($productos as $producto)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->descripcion}}</td>
      <td>{{$producto->precio}}</td>
      <td>
        <a href="{{route('productos.edit',$producto->producto_id)}}">
        <button class="btn btn-primary">
          Editar
        </button>
      </a>

      <form action="{{route('productos.destroy',$producto->producto_id)}}" method="post"></form>
         @method('DELETE')
         @csrf
        <button type="submit" class="btn btn-danger">
          Eliminar
        </button>
      </td>
    </tr>
  </tbody>
</thead>
</body>
</html>