@extends('plantilla')



@section('seccion')

       

           
            @if(session('mensaje'))
            <div class=" alert alert-success ">
                {{session('mensaje')}}
                <br>
            </div>

            @endif
            @if(session('mensaje2'))
            <div class=" alert  alert-info ">
                {{session('mensaje2')}}
                <br>
            </div>

            @endif

            <form action="{{ route('usuario.crear')}}" method="POST">
            @csrf
            @error('nombre')
            <div class="alert alert-danger">El nombre es un caracter Obligatorio</div>
            
            @enderror
            @error('descrip')
            <div class="alert alert-danger">La descripcion es un caracter Obligatorio</div>
            
            @enderror
            
            <input type="text" name="nombre" id="" placeholder="Nombre" class ="form-control mb-2 "  value="{{old('nombre')}}">
            <input type="text" name="descrip" id="" placeholder="Descripcion" class="form-control mb-3" value="{{(old('descrip'))}}">
            <button class="btn btn-info form-control mb-4 " type="submit">Añadir</button>

            </form>

        
            
            <table class="table">
        <thead>
            <tr>
                <th  scope="col">#id</th>
                <th  scope="col">Nombre</th>
                <th  scope="col">Descripcion</th>
                <th  scope="col">Opcines</th>
             </tr>
            
        </thead>
        <tbody>
            
            @foreach($bd as $dato)
            
            <tr>
                <th scope="row">{{$dato-> id }}</th>
                <th>
                    <a href="{{route('usuario.detalle', $dato)}}">
                    {{$dato-> nombre }}
                    </a>

                </th>
                <th>{{$dato-> descripcion }}</th>
                <th>
                    <a href="{{route('usuario.edita', $dato)}}" class="btn btn-info">Editar</a>
                    <form class="d-inline" action="{{ route('usuario.eliminar', $dato)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                    <button class="btn  btn-danger ">Eliminar</button>
                    
                    </form>
                </th>

            </tr>
            @endforeach
        </tbody>
            </table>
        
    @endsection
