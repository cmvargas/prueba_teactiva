<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
    <script type="text/javascript" language="javascript"src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="bg-white shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="{{url('/')}}" class="flex items-center py-4 px-2">
								<span class="font-semibold text-gray-500 text-lg">Prueba teactiva</span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						@if(auth()->check())
						<div class="hidden md:flex items-center space-x-1">
                            <a href="{{url('/admin/productos')}}" class="py-4 px-2    font-semibold ">Productos</a>
							<a href="{{url('/admin/peticiones')}}" class="py-4 px-2    font-semibold ">Peticiones</a>
						</div>
						@endif
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						@if(auth()->check())
							<div class="py-2 px-2 font-medium text-black">Welcome <b> {{ auth()->user()->name }} </b></div>
							<form action="{{ route('logout') }}" method="POST">
							@csrf
								<button  class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300" type="submit">Logout</button>
							</form>
							
						@else
							<a href="{{ url('/login') }}" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Log In</a>
						@endif
						
						
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					
				@if(auth()->check())
				<li class="active"><div  class="block text-sm px-2 py-4 text-black bg-white-500 font-semibold">Welcome <b> {{ auth()->user()->name }} </b></div></li>
				<li class="active"><a href="{{url('/admin/productos')}}" class="block text-sm px-2 py-4 text-black bg-white-500 font-semibold">Productos</a></li>
				<li class="active"><a href="{{url('/admin/peticiones')}}" class="block text-sm px-2 py-4 text-black bg-white-500 font-semibold">Peticiones</a></li>
				<li class="active">
					<form action="{{ route('logout') }}" method="POST">
					@csrf		
					<button  class="block text-sm px-2 py-4 text-black bg-white-500 font-semibold" type="submit">Logout</button>
					</form>
					
				</li>
				@else
				
                    <li class="active"><a href="{{ url('/') }}" class="block text-sm px-2 py-4 text-black bg-white-500 font-semibold">Login</a></li>
				@endif

				</ul>
			</div>
		</nav>

        @yield('content')


    <script type="text/javascript" >
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
        $(document).ready(function() {
            $('#data_table').DataTable();
        } );
    </script>

</body>
</html>