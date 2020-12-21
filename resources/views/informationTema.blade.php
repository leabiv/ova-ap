@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 py-4">
                <div class="card">
                    <div class="card-header navbar-color-ufps"><h3 class="text-white">Informacion del Contenido
                            Tematico {{$tema->nombre_Tema}}</h3></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Descripcion: {{$tema->descripcion_Tema}}</p>

                        <iframe width="560" height="315" src={{$tema->url_video}} allowfullscreen></iframe>
                        <p>{{$tema->url_video}}</p>
                            <button class="btn btn-ufps-custom"><a class="text-white" href="{{route('temas.list')}}">Volver al Contenido</a></button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
