@extends('layouts.app')
@section('title', 'Productos')
@section('content')
<div class="flex flex-col justify-center items-center my-12">
    <h1>Crear producto</h1>
    <div class="w-full max-w-xs">   
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
    @csrf
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre_producto">
            Nombre producto
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre_producto" name="nombre_producto" type="text" placeholder="Nombre">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                Descripción
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" name="descripcion" type="text" placeholder="Descrpción">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="precio">
                Precio
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="precio" name="precio" type="number" placeholder="Precio">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="estado">
                Estado
            </label>
            <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="estado" name="estado" type="number" placeholder="Estado">
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Crear producto
            </button>

        </div>
    </form>
    </div>
</div>



@endsection

