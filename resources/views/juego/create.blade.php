@extends('layouts.app1')

@section('titulo')
	<p class="px-4 py-3 text-xs font-semibold text-white p-3 mb-2 bg-black">INSERTAR NUEVO VIDEOJUEGO</p>

@endsection


@section('content')

<!-- /////////////////////////////////////Formulario Nuevo///////////////////////////////////////////// -->
<form method="post" action="{{ route('juego.store') }}" enctype="multipart/form-data">
<a href="index.blade.php"><button class="float-right w-10 h-10 hover:w-15" type="button"><img class=" " src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDIxOS4xNTEgMjE5LjE1MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjE5LjE1MSAyMTkuMTUxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBkPSJNMTA5LjU3NiwyMTkuMTUxYzYwLjQxOSwwLDEwOS41NzMtNDkuMTU2LDEwOS41NzMtMTA5LjU3NkMyMTkuMTQ5LDQ5LjE1NiwxNjkuOTk1LDAsMTA5LjU3NiwwUzAuMDAyLDQ5LjE1NiwwLjAwMiwxMDkuNTc1DQoJCUMwLjAwMiwxNjkuOTk1LDQ5LjE1NywyMTkuMTUxLDEwOS41NzYsMjE5LjE1MXogTTEwOS41NzYsMTVjNTIuMTQ4LDAsOTQuNTczLDQyLjQyNiw5NC41NzQsOTQuNTc1DQoJCWMwLDUyLjE0OS00Mi40MjUsOTQuNTc1LTk0LjU3NCw5NC41NzZjLTUyLjE0OC0wLjAwMS05NC41NzMtNDIuNDI3LTk0LjU3My05NC41NzdDMTUuMDAzLDU3LjQyNyw1Ny40MjgsMTUsMTA5LjU3NiwxNXoiLz4NCgk8cGF0aCBkPSJNOTQuODYxLDE1Ni41MDdjMi45MjksMi45MjgsNy42NzgsMi45MjcsMTAuNjA2LDBjMi45My0yLjkzLDIuOTMtNy42NzgtMC4wMDEtMTAuNjA4bC0yOC44Mi0yOC44MTlsODMuNDU3LTAuMDA4DQoJCWM0LjE0Mi0wLjAwMSw3LjQ5OS0zLjM1OCw3LjQ5OS03LjUwMmMtMC4wMDEtNC4xNDItMy4zNTgtNy40OTgtNy41LTcuNDk4bC04My40NiwwLjAwOGwyOC44MjctMjguODI1DQoJCWMyLjkyOS0yLjkyOSwyLjkyOS03LjY3OSwwLTEwLjYwN2MtMS40NjUtMS40NjQtMy4zODQtMi4xOTctNS4zMDQtMi4xOTdjLTEuOTE5LDAtMy44MzgsMC43MzMtNS4zMDMsMi4xOTZsLTQxLjYyOSw0MS42MjgNCgkJYy0xLjQwNywxLjQwNi0yLjE5NywzLjMxMy0yLjE5Nyw1LjMwM2MwLjAwMSwxLjk5LDAuNzkxLDMuODk2LDIuMTk4LDUuMzA1TDk0Ljg2MSwxNTYuNTA3eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /></button></a>
	 @csrf
  <div class="flex flex-col">
  <!-- <div class="row g-3"> -->
    <div class="w-full md:w-2/3">
      <label name="id" >ID</label>
      <input type="text" class="border-1 border-700-black rounded w-full" id="" placeholder="id">
    </div>

    <div class="w-full md:w-2/3">
		@if ($errors->has('nombre'))
			<ul>
				@foreach ($errors->get('nombre') as $error)
					<li>{{ $error }}</li>
				<@endforeach
			</ul>
		@endif
      <label>Nombre</label>
	  <input class="border-1 border-700-black rounded w-full" type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
    </div>


  <div class="w-full md:w-2/3">
  	@if ($errors->has('lanzamiento'))
			<ul>
				@foreach ($errors->get('lanzamiento') as $error)
					<li>{{ $error }}</li>
				<@endforeach
			</ul>
		@endif
    <label>Lanzamiento</label>
	<input type="text" class="border-1 border-700-black rounded w-full" name="lanzamiento" value="{{ old('lanzamiento') }}" placeholder="Lanzamiento">
  </div>

  <div class="w-full md:w-2/3">
    <label>Genero</label>
    <select name="genero" class="border-1 border-700-black rounded w-full">
			<option value="terror" {{ old('genero')=="terror"? 'selected':''}} class="hover:bg-purple-700"  >Terror</option>
			<option value="deportes" {{ old('genero')=="deportes"? 'selected':''}}>Deportes</option>
			<option value="shooter" {{ old('genero')=="shooter"? 'selected':''}}>Shooter</option>
			<option value="survival" {{ old('genero')=="survival"? 'selected':''}}>Survival</option>
			<option value="Intantil" {{ old('genero')=="infantil"? 'selected':''}}>Infantil</option>
			<option value="accion">Acci??n</option>
	</select>
  </div>

  <div class="w-full md:w-2/3">
    <label>Plataformas</label>
    <select name="plataformas" class="border-1 border-700-black rounded w-full">
			<option value="ps3" {{ old('plataformas')=="ps3"? 'selected':''}}>Ps3</option>
			<option value="ps4" {{ old('plataformas')=="ps4"? 'selected':''}}>Ps4</option>
			<option value="ps5" {{ old('plataformas')=="ps5"? 'selected':''}}>Ps5</option>
			<option value="Xbox One" {{ old('plataformas')=="XboxOne"? 'selected':''}}>XboxOne</option>
			<option value="Xbox 360" {{ old('plataformas')=="Xbox360"? 'selected':''}}>Xbox360</option>
	</select>
  </div>

    <div class="w-full md:w-2/3">
		@if ($errors->has('distribuidor'))
			<ul>
				@foreach ($errors->get('distribuidor') as $error)
					<li>{{ $error }}</li>
				<@endforeach
			</ul>
		@endif
      <label>Distribuidor</label>
      <input type="text" name="distribuidor" class="border-1 border-700-black rounded w-full" value="{{ old('distribuidor') }}" placeholder="Distribuidor">
    </div>

	<div class="w-full md:w-2/3">
		@if ($errors->has('precio'))
			<ul>
				@foreach ($errors->get('precio') as $error)
					<li>{{ $error }}</li>
				<@endforeach
			</ul>
		@endif
      <label>Precio</label>
      <input type="text" class="border-1 border-700-black rounded w-full" name="precio" value="{{ old('precio') }}" placeholder="Precio">
    </div>

	<div class="w-full md:w-2/3">
		@if ($errors->has('foto'))
			<ul>
				@foreach ($errors->get('foto') as $error)
					<li>{{ $error }}</li>
				<@endforeach
			</ul>
		@endif
      <label>Foto</label>
	  <!-- <img width="100px" height="100px" src="{{ asset('images/')}}"> -->
      <!-- <input type="text" class="border-1 border-700-black rounded w-full" placeholder="Foto" name="foto" value="{{ old('foto') }}"> -->
	  <input id="file-input" type="file" class="form-control border-secondary rounded" name="foto" value="{{ old('foto') }}" placeholder="foto">
    </div>

	</div>

	<!-- @if($errors->isEmpty())
		<div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
  		<p class="font-bold">Juego creado con ??xito!</p>
	</div>

			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				<@endforeach
			</ul>
	@endif -->
	<input type="submit" class="mt-4 border-2 border-purple-700 rounded text-white bg-purple-700 hover:bg-black p-2" name="enviar">
</form>

@endsection
