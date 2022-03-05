@extends('layouts.app')
@section('title', 'Productos')
@section('content')
<div class="flex flex-col justify-center items-center my-12">
    <div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('login') }}" method="POST">
    @csrf
        <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Username">
        @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
        </label>
        <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
        @error('password')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="Login">
                    Sign In
            </button>

        </div>
    </form>
    </div>
</div>



@endsection