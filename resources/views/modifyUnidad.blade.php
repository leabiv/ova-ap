@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header navbar-color-ufps"><h3 class="text-white">{{ __('Modificar Unidad') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Modificar de la Seccion</h1>

                    <form action="{{route('unidades.update', $unidad)}}" method="POST">

                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nombre Unidad</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="nombreUnidad" value="{{old('nombreUnidad', $unidad->nombreUnidad)}}">
                            </div>
                            @error('nombreUnidad')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Descripcion Unidad</label>
                            <div class="col-sm-10">
                                <textarea class="form-control"  name="descripUnidad" rows="10" >{{old('descripUnidad', $unidad->descripUnidad)}}</textarea>
                            </div>
                            @error('descripUnidad')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Url Video</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url_video" value="{{old('url_video', $unidad->url_video)}}">
                            </div>
                            @error('url_video')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Tema</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="id_Tema" value="{{old('id_Tema', $unidad->id_Tema)}}">
                            </div>
                            @error('id_Tema')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>

                        {{-- <label for="">
                            Tema
                            <br>
                            <input type="number" name="id_Tema" value="{{old('id_Tema')}}">
                        </label>
                        @error('id_Tema')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror --}}
                        <br>

                        {{-- <label for="">
                            Nombre Unidad
                            <br>
                            <input type="text" name="nombreUnidad" value="{{old('nombreUnidad', $unidad->nombreUnidad)}}">
                        </label>

                        <br>
                        <label for="">
                            Descripcion Unidad
                            <br>
                            <textarea name="descripUnidad" rows="10" >{{old('nombreUnidad', $unidad->descripUnidad)}}</textarea>
                        </label>

                        <br>
                        <label for="">
                            Url Video
                            <br>
                            <input type="text" name="url_video" value="{{old('nombreUnidad', $unidad->url_video)}}">
                        </label>
                        <br>

                        <label for="">
                            Tema
                            <br>
                            <input type="number" name="id_Tema" value="{{old('nombreUnidad', $unidad->id_Tema)}}">
                        </label>
                        <br>--}}

                        <button class="btn btn-ufps-custom" type="submit">Actualizar Unidad</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
