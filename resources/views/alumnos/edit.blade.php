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
            @foreach ($errors->all() as error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection