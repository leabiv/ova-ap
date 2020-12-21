@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header navbar-color-ufps"><h3 class="text-white">Informacion del contenido {{$unidades->nombreUnidad}}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <h1>Informacion del contenido {{$unidades->nombreUnidad}}</h1>--}}

                    <br>

                    <p>Descripcion: {{$unidades->descripUnidad}}</p>
                        <!--<video width="560" height="315"  controls preload="">
                            <source src="{{$unidades->url_video}}">
                        </video>-->
                        <iframe width="560" height="315" src="{{$unidades->url_video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       
                       {{--  <x-embed width="560" height="315" url="{{$unidades->url_video}}" />--}}
                    <p>{{$unidades->url_video}}</p>

                    <form action="{{route('unidades.destroy', $unidades)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Eliminar Unidad</button>
                        <button class="btn btn-warning"><i class="bi bi-clipboard"></i> <a class="text-white" href="{{route('unidades.modify',$unidades)}}">Editar Contenido</a></button>
                        <button class="btn btn-success"><i class="fab fa-laravel"></i> <a class="text-white" href="{{route('unidades.list')}}">Volver al Contenido</a></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
