@extends('layouts.app1')

@section('titulo')
	<h2 class="p-3 mb-2 bg-dark text-white">LISTADO DE JUEGOS</h2>
	<!-- <img class="rounded mx-auto d-block img-thumbnail" alt="Responsive image" src="images/imagen1.jpg" style=""></img> -->
@endsection

@section('content')


<a href="/juego/create"><button class="mb-3 border-2 border-purple-700 bg-purple-800 px-4 py-3 text-xs font-semibold tracking-wider text-white rounded hover:bg-black">CREAR JUEGO</button></a>


	@if(session()->get('success'))
		<span class="text-green-500">{{ session()->get('success') }} </span><br>
	@endif


	</div class="">
	<table class="table bg-white max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
  <thead class="table-dark ">
  		<tr class="">
			<td class="">NOMBRE</td>
			<td class="">PRECIO</td>
			<td class="">DISTRIBUIDOR</td>
			<td class="">ACCIONES</td>
		</tr>
  </thead>

		@foreach($juegos as $juego)

		<tr class="">
			<td>{{ $juego->nombre }}<br>
            <img class="float-left w-90 h-40" src="{{ asset('images/'.$juego->foto)}}"></img>
            </td>
			<td>{{ $juego->precio }}</td>
			<td>{{ $juego->distribuidor }}</td>


			<td class="leading-7">

			<div class = "flex flex-col w-auto m-3">
					<a class="text-center border-2 border-purple-700 rounded text-white bg-purple-700 hover:bg-black" href="/juego/{{ $juego->id }}"><button type="button">Ver</button></a>
			</div>
			<div class = "flex flex-col w-auto m-3">

					<a href="/juego/{{$juego->id}}/edit" class="text-center border-2 border-purple-700 rounded text-white bg-purple-700 hover:bg-black"><button type="button" >Editar</button></a>

			</div>
				<!-- <form class="d-inline" action="/juego/{{ $juego->id }}" method="post">
					@csrf
					@method('DELETE')

					<button type="submit" data-toggle="modal" class="btn btn-outline-dark btn-sm">Eliminar</button>

				</form> -->

				<!-- Button trigger modal -->
			<div class = "flex flex-col w-auto m-3">
				<button type="button" class="border-2 border-purple-700 rounded text-white bg-purple-700 hover:bg-black" data-toggle="modal" data-target="#exampleModal{{ $juego->id }}">
					Eliminar
				</button>

				<!-- Modal -->
				<div class="modal" id="exampleModal{{ $juego->id }}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						¿Desea eliminar el juego?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						<form action="/juego/{{ $juego->id }}" method="post">
						<button type="submit" class="btn btn-success">Aceptar</button>
						@csrf
						@method('DELETE')
						</form>
					</div>
					</div>
				</div>
				</div>
				</td>
			</div>
		</tr>
		@endforeach
	</table>

@endsection
