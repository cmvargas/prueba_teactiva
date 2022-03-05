@extends('layouts.app')
@section('title', 'Productos')
@section('content')
<div class="flex flex-col justify-center items-center my-12 bg-gray">
    <div class="w-full max-w-xs">
    <div class="bg-gray shadow-md rounded px-8 pt-6 pb-8 mb-4" style="background-color:#9ea6a9;">
        <div class="mb-6">
        
        
        </div>
        <div class="flex flex-col justify-center items-center bg-slate-200">
            <img src="{{ asset('assets/logo.png') }}" alt="">
            <a href=" {{ url('/login') }} ">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Logueate
                </button>
            </a>
        </div>
    </div>
    </div>
</div>



@endsection