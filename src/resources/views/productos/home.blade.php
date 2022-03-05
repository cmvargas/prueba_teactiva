@extends('layouts.app')
@section('title', 'Productos')
@section('content')

<div class="flex flex-col justify-center items-center my-12">
    <a href="{{ url('/admin/productos/create') }}">
        <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded ">
        Crear Producto
        </button>
    </a>

</div>


<table id="data_table" class="display" style="width:80%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Publicacion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <th>{{ $producto->id_producto }}</th>
                <th></th>
                <th> <button onclick="alert('Mensaje de confirmacion:{{ $producto->nombre_producto }}');">{{ $producto->nombre_producto }}</button></th>
                <th>{{ $producto->precio }}</th>
                <th>
                    @if($producto->estado==1)        
                        Publicado
                    @else
                        No Publicado
                    @endif
                </th>
                <th>{{ $producto->fecha_publicacion }}</th>
                <th>
                    <form action="{{ url('/admin/productos/'. $producto->id_producto) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Quieres borrar?')" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded "> Eliminar</button>
                    </form>
                    <a href=" {{ url('/admin/productos/'.$producto->id_producto.'/edit') }}" class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded "> Modificar</a>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection

