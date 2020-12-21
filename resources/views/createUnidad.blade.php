@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card">
                <div class="card-header navbar-color-ufps"><h3 class="text-white">{{ __('Crear Unidad') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('unidades.store')}}" method="POST">
                        <a href="{{route('temas.create')}}">Crear Tema</a>
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nombre Unidad</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="nombreUnidad" value="{{old('nombreUnidad')}}">
                            </div>
                            @error('nombreUnidad')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>

                        {{--<label for="">
                            Nombre Unidad
                            <br>
                            <input type="text" name="nombreUnidad" value="{{old('nombreUnidad')}}">
                        </label>
                        @error('nombreUnidad')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror --}}

                        <br>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Descripcion Unidad</label>
                            <div class="col-sm-10">
                                <textarea class="form-control"  name="descripUnidad" rows="10" >{{old('descripUnidad')}}</textarea>
                            </div>
                            @error('descripUnidad')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        {{--<label for="">
                            Descripcion Unidad
                            <br>
                            <textarea name="descripUnidad" rows="10">{{old('descripUnidad')}}</textarea>
                        </label>
                        @error('descripUnidad')
                        <br>
                        <small>{{$message}}</small>
                        <br>
                        @enderror--}}

                        <br>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Url Video</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url_video" value="{{old('url_video')}}">
                            </div>
                            @error('url_video')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        {{-- <label for="">
                            Url Video
                            <br>
                            <input type="text" name="url_video" value="{{old('url_video')}}">
                        </label>
                        @error('url_video')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                        @enderror--}}
                        <br>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Tema</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="id_Tema" value="{{old('id_Tema')}}">
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
                        <button class="btn btn-ufps-custom" type="submit">Enviar unidad</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
