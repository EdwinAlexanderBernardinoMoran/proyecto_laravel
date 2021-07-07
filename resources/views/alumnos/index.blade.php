@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col lg 12 margin-tb">
            <div class="pull-left">
                <h2>VISTA INDEX</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('alumnos.create')}}" class="btn btn-success">Nuevo alumno</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-sucesss">
            <p>{{ $message}}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->nombres}}</td>
                    <td>{{$registro->apellidos}}</td>
                    <td>{{$registro->edad}}</td>
                    <td>
                        <a href="{{route('alumnos.show',$registro->id)}}" class="btn btn-info">Mostrar</a>
                        <a href="{{route('alumnos.edit',$registro->id)}}" class="btn btn-primary">Editar</a>
                        <a href="{{route('alumnos.destroy',$registro->id)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection