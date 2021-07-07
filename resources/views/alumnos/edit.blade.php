@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDITANDO REGISTRO DE ALUMNOS</h2>
        </div>
    </div>
    <div class="pull-right">
        <a href="{{route('alumnos.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('alumnos.update', $alumno->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    <input type="text" name="nombres" class="form-control" value="{{$alumno->nombres}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    <input type="text" name="apellidos" class="form-control" value="{{$alumno->apellidos}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Edad:</strong>
                    <input type="number" name="edad" class="form-control" value="{{$alumno->edad}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button class="btn btn-primary" type="submit">Actualizar</button>
            </div>
        </div>
    </form>
@endsection