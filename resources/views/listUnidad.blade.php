@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header navbar-color-ufps"><h3 class="text-white">{{ __('Contenido') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status') }}
                        </div>
                   @endif

                    <div>
                        <ul class="list-group">
                            @foreach ($unidades as $unidad)
                                <li class="list-group-item">
                                    <img class="img-fluid icon-list-unidad-title" src="{{ asset('img/pngwing.com.png') }}">
                                    <a class="text-black-50" href="{{route('unidades.information', $unidad->id)}}">{{$unidad->nombreUnidad}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
