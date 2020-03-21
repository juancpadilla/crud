@extends('plantilla')

<link rel="stylesheet" href="css\bootstrap.min.css">
@section('menu')
<a class="nav-link" href="{{route('foto')}}">Fotos</a>
<a class="nav-link" href="{{route('miusic')}}">Musica</a>
<a class="nav-link active" href="{{route('usuarios')}}">Usuarios</a>
@endsection

@section('seccion')




<div class="flex-center position-ref full-height">
<div class="content">
            <div class="title m-b-md">Usuario</div>
                
                    @foreach($equipo as $item)
                    <a href="{{route('usuarios', $item)}}" class="h4 text-danger">{{$item}}</a> <br>

                    @endforeach

                
                @if (!empty($nombre)) 

                @switch($nombre)

                @case($nombre == 'Juan')
                <br><br>
                <h2>usted selecciono a {{$nombre}}: </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cupiditate, possimus cum reprehenderit assumenda, alias velit expedita id accusantium nisi repellendus explicabo rerum. Doloremque impedit aliquid fugiat, quia libero nisi!</p>
                 <a href="{{route('usuarios')}}" clas="btn btn.text-info">Atras</a>
                @break
                @case($nombre == 'Lola')
                <br><br>
                <h2>usted selecciono a {{$nombre}}: </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cupiditate, possimus cum reprehenderit assumenda, alias velit expedita id accusantium nisi repellendus explicabo rerum. Doloremque impedit aliquid fugiat, quia libero nisi!</p>
                
                @break
                @case($nombre == 'Pepe')
                <br><br>
                <h2>usted selecciono a {{$nombre}}: </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, cupiditate, possimus cum reprehenderit assumenda, alias velit expedita id accusantium nisi repellendus explicabo rerum. Doloremque impedit aliquid fugiat, quia libero nisi!</p>
                
                @break
                
                @endswitch

                @endif
                
                </div>
            </div>
@endsection

