@extends('layouts.plantilla')

    @section('contenido')
        <!-- <h1>Estoy procesando {{ $nombre }}</h1> -->

        @if($nombre != 'mariano')
            <h1>Usuario desconocido</h1>
        @else
            <h1>Bienvenido: {{ $nombre }}</h1>
        @endif

        <ul>

            @foreach ($marcas as $marca)
                <li>{{$marca}}</li>
            @endforeach

        </ul>
    @endsection