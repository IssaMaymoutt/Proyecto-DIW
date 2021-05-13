@extends('layouts.app1')
<!-- <style>
* {
	background:purple;
}
</style> -->
@section('titulo')
<p class="px-4 py-3 text-xs font-semibold text-white p-3 mb-2 bg-black">VISTA DE REGISTRO</p>
@endsection


@section('content')
	<!-- <div>
	Nombre : {{$juego->nombre}} <br>
	Lanzamiento : {{$juego->lanzamiento}} <br>
	Genero : {{$juego->genero}} <br>
	Desarrollador : {{$juego->desarrolador}} <br>
	Precio : {{$juego->precio}} <br>
	Observaciones: {{$juego->observaciones}} <br>
	</div> -->

	<!-- <img class="rounded mx-auto d-block img-thumbnail" alt="Responsive image" src="images/gtasa.jpg" style=""></img> -->

	<!-- <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">{{$juego->nombre}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Lanzamiento</th>
      <td>{{$juego->lanzamiento}}</td>
    </tr>
    <tr>
      <th scope="row">Genero</th>
      <td>{{$juego->genero}}</td>
    </tr>
    <tr>
      <th scope="row">Plataformas</th>
      <td>{{$juego->genero}}</td>
    </tr>
    <tr>
      <th scope="row">Distribuidor</th>
      <td>{{$juego->distribuidor}}</td>
    </tr>
	<tr>
      <th scope="row">Precio</th>
      <td>{{$juego->precio}}</td>
    </tr>
	<tr>
      <th scope="row">Foto</th>
      <td>{{$juego->foto}}</td>
    </tr>
  </tbody>
</table> -->

<!-- This is an example component -->
<div class="min-h-screen flex ">
    <div class='overflow-x-auto w-full'>
    <a href="index.blade.php"><button class="float-right w-10 h-10 hover:w-15" type="button"><img class=" " src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDIxOS4xNTEgMjE5LjE1MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjE5LjE1MSAyMTkuMTUxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBkPSJNMTA5LjU3NiwyMTkuMTUxYzYwLjQxOSwwLDEwOS41NzMtNDkuMTU2LDEwOS41NzMtMTA5LjU3NkMyMTkuMTQ5LDQ5LjE1NiwxNjkuOTk1LDAsMTA5LjU3NiwwUzAuMDAyLDQ5LjE1NiwwLjAwMiwxMDkuNTc1DQoJCUMwLjAwMiwxNjkuOTk1LDQ5LjE1NywyMTkuMTUxLDEwOS41NzYsMjE5LjE1MXogTTEwOS41NzYsMTVjNTIuMTQ4LDAsOTQuNTczLDQyLjQyNiw5NC41NzQsOTQuNTc1DQoJCWMwLDUyLjE0OS00Mi40MjUsOTQuNTc1LTk0LjU3NCw5NC41NzZjLTUyLjE0OC0wLjAwMS05NC41NzMtNDIuNDI3LTk0LjU3My05NC41NzdDMTUuMDAzLDU3LjQyNyw1Ny40MjgsMTUsMTA5LjU3NiwxNXoiLz4NCgk8cGF0aCBkPSJNOTQuODYxLDE1Ni41MDdjMi45MjksMi45MjgsNy42NzgsMi45MjcsMTAuNjA2LDBjMi45My0yLjkzLDIuOTMtNy42NzgtMC4wMDEtMTAuNjA4bC0yOC44Mi0yOC44MTlsODMuNDU3LTAuMDA4DQoJCWM0LjE0Mi0wLjAwMSw3LjQ5OS0zLjM1OCw3LjQ5OS03LjUwMmMtMC4wMDEtNC4xNDItMy4zNTgtNy40OTgtNy41LTcuNDk4bC04My40NiwwLjAwOGwyOC44MjctMjguODI1DQoJCWMyLjkyOS0yLjkyOSwyLjkyOS03LjY3OSwwLTEwLjYwN2MtMS40NjUtMS40NjQtMy4zODQtMi4xOTctNS4zMDQtMi4xOTdjLTEuOTE5LDAtMy44MzgsMC43MzMtNS4zMDMsMi4xOTZsLTQxLjYyOSw0MS42MjgNCgkJYy0xLjQwNywxLjQwNi0yLjE5NywzLjMxMy0yLjE5Nyw1LjMwM2MwLjAwMSwxLjk5LDAuNzkxLDMuODk2LDIuMTk4LDUuMzA1TDk0Ljg2MSwxNTYuNTA3eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /></button></a>
        <!-- Table -->
        <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
            <thead class="">
                <tr class="text-gray-600 text-left">
                    <th class="font-semibold text-sm px-6 py-4 bg-purple-700 text-white">
                        Nombre
                    </th>
                    <th class="font-semibold text-sm px-6 py-4
                    float-right">
                    {{$juego->nombre}}
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 bg-purple-700 text-white">
                        <div class="flex items-center space-x-3">
                          Lanzamiento
                        </div>
                    </td>
                    <td class="px-6 py-4 float-right">
                    {{$juego->lanzamiento}}
                    </td>

                </tr>
                <tr>
                    <td class="px-6 py-4 bg-purple-700 text-white">
                        <div class="flex items-center space-x-3">
                          Genero
                        </div>
                    </td>
                    <td class="px-6 py-4
                   float-right ">
                    {{$juego->genero}}
                    </td>

                </tr>

                <tr>
                    <td class="px-6 py-4 bg-purple-700 text-white">
                        <div class="flex items-center space-x-3">
                          Distribuidor
                        </div>
                    </td>
                    <td class="px-6 py-4 float-right">
                    {{$juego->distribuidor}}
                    </td>

                </tr>

                <tr>
                    <td class="px-6 py-4 bg-purple-700 text-white">
                        <div class="flex items-center space-x-3">
                       Precio
                        </div>
                    </td>
                    <td class="px-6 py-4 float-right">
                    {{$juego->precio}}
                    </td>

                </tr>

                <tr>
                    <td class="px-6 py-4 bg-purple-700 text-white">
                        <div class="flex items-center space-x-3">
                       Foto
                        </div>
                    </td>
                    <td class="px-6 py-4 items-center bg-light-blue-300">
                   <img class="float-right w-90 h-40" src="{{ asset('images/'.$juego->foto)}}"></img>
                    </td>

                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
