
@extends('plantilla')

@section('contenido')
    <h1>Portafolio</h1>
    <ul>
        @foreach($portafolio as $portafolioItem)
        <li>{{$portafolioItem['title']}} </li>
            
        @endforeach
    </ul>
@endsection
@section('titulo','Portafolio')
