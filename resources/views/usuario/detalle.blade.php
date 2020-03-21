@extends ('plantilla')

@section('seccion')
<link rel="stylesheet" href="..\css\bootstrap.min.css">

<h1>El Usuario es: </h1>
<h4>id: {{$bd -> id}}</h4>
<h4>Nombre: {{$bd -> nombre}}</h4>
<h4>Descripcion: {{$bd -> descripcion}}</h4>
<a href="{{route('inicio')}}" class="btn btn-dark">Atras</a>
@endsection