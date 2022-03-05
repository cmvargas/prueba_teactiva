@extends('layouts.app')
@section('title', 'Productos')
@section('content')

<div class="flex flex-col justify-center items-center my-12">
        <form method="POST" >
            @csrf
            <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 rounded ">
                Crear Peticion
            </button>
        </form>    
        

</div>


<table id="data_table" class="display" style="width:80%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Publicacion</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($peticiones as $peticion)
            <tr>
                <th>{{ $peticion->id_registro }}</th>
                <th>{{ $peticion->fecha }}</th>

                <th>
                    <form action="{{ url('/admin/peticiones/'. $peticion->id_registro) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('¿Quieres borrar?')" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded "> Eliminar</button>
                    </form>
                    
                </th>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection

