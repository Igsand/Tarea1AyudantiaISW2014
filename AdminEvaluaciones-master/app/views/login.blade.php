@extends('layout')
 
@section('title')
    Identificación
@stop
 
@section('content')
    <h2>Identificarse</h2>
 
    @if(Session::get('msg'))
        <p>{{ Session::get('msg') }}</p>
    @endif
 
    {{ Form::open(array('url' => '/login', 'method' => 'POST')) }}
    <ul>
        <input type="radio" name="rol" value="alumno" checked="" />Alumno <br />
        <input type="radio" name="rol" value="academico" />Academico <br />
        <br />
        Ingrese su rut (sin puntos ni guión) <br />
        <input type="text" name="rut" />  (Ej: 12345678)<br />
        Contraseña:   <br />
        <input type="password" name="contrasena" /> <br />
        <input type="submit" value="Ingresar" /> 
    </ul> 
    {{ Form::close() }}
@stop
