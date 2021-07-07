@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MOSTANDO REGISTRO INDIVIDUAL DE ALUMNOS</h2>
            </div>
        </div>
        <div class="pull-right">
            <a href="{{route('alumnos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID: </strong>
                {{$alumno->id}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOMBRES: </strong>
                {{$alumno->nombres}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>APELLIDOS: </strong>
                {{$alumno->apellidos}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>EDAD: </strong>
                {{$alumno->edad}}
            </div>
        </div>
    </div>
@endsection