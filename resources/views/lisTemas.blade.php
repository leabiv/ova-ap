@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card">
                <div class="card-header navbar-color-ufps"><h3 class="text-white">{{ __('Listado de Temas') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1></h1>

                    <div>
                        <ul class="list-group">
                            @foreach ($listUnidad as $unidad)
                                <li class="list-group-item">
                                    <img class="img-fluid icon-list-unidad-title" src="{{ asset('img/pngwing.com.png') }}">
                                    <a href="{{route('unidades.information', $unidad->id)}}">{{$unidad->nombreUnidad}}</a></li>
                                @foreach ($listTemas as $temas)
                                    @if ($unidad->id_Tema == $temas->num_unidad)
                                        <li class="list-group-item" type="circle">
                                            <a href="{{route('temas.information', $temas->id)}}">{{$temas->nombre_Tema}}</a>
                                        </li>
                                    @endif
                                @endforeach

                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
