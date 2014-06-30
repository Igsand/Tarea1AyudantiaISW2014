@extends('layout')
 
@section('title')
    Inicio
@stop

@section('header')
 <center>
    <p><a href="http://www.utem.cl"> UTEM </a> | <a href="http://postulacion.utem.cl"> DIRDOC </a> | 
    <a href="http://reko.utem.cl/portal/"> REKO </a> | <a href="/login"> INICIAR SESIÓN </a> </p>

   <h1>Evaluaciones actuales</h1>
</center>
@stop

@section('content')
    @if(Session::get('msg'))
        <p>{{ Session::get('msg') }}</p>
    @endif
    <table>
    <tr>
      <td><strong>Asignatura</strong></td>
      <td><strong>Evaluación</strong></td>
      <td><strong>Fecha</strong></td>
    </tr>
     
    <tr>
        <td> 
        <?php 
            $asignatura = Asignatura::all();
 
            foreach( $asignatura as $asignatura){
                echo $asignatura->nombre . "\n";
            }
            ?>
        </td>
      <td>
            <?php 
            $asignatura = Asignatura::all();
 
            foreach( $asignatura as $asignatura){
                echo $asignatura->nombre . "\n";
            }
            ?>
     </td>
      <td>
            <?php 
            $evaluacion = Evaluaciones::all();
         
            foreach( $evaluacion as $evaluacion){
            echo $evaluacion->fecha . "\n";
            }
            ?>
     </td>
    </tr>
    </table>

@stop