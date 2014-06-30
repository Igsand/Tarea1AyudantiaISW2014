@extends('layout')
 
@section('title')
    Academicos
@stop
 
@section('content')
    <p>Bienvenid@: {{ Auth::user()->rut; }} | (<a href="{{URL::to('logout')}}" >Salir</a>)</p>
    <hr />
    <p>Buscar</p>
    <p>Evaluaciones</p>
    <p>Pautas</p>

@stop