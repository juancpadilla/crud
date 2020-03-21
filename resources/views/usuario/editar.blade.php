@extends('plantilla')



@section('seccion')
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<h4>El Usuuario Seleccionado es: {{$bd -> nombre}}</h4>


@if(session('mensaje'))
            <div class=" alert alert-success ">
                {{session('mensaje')}}
                <br>
            </div>

            @endif


<form action="{{ route('usuario.up', $bd -> id)}}" method="POST">
    @method('PUT')
            @csrf
            @error('nombre')
            <div class="alert alert-danger">El nombre es un caracter Obligatorio</div>
            
            @enderror
            @error('descrip')
            <div class="alert alert-danger">La descripcion es un caracter Obligatorio</div>
            
            @enderror
            
            <input type="text" name="nombre" id="" placeholder="Nombre" class ="form-control mb-2 "  value="{{$bd ->nombre}}">
            <input type="text" name="descrip" id="" placeholder="Descripcion" class="form-control mb-3" value="{{$bd -> descripcion}}">
            <button class="btn btn-info form-control mb-4 " type="submit">Editar</button>

            </form>
             <a class="btn btn-dark form-control" href="{{route('inicio')}}">Atras</a>

@endsection