@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4">
            <div class="card">
                <div class="card-header navbar-color-ufps"><h3 class="text-white">{{ __('Creacion contenido de la Tematica') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="POST" action="{{route('temas.store')}}" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Numero de la Unidad</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="num_unidad" value="{{old('num_unidad')}}">
                            </div>
                            @error('num_unidad')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nombre del Tema</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="nombre_Tema" value="{{old('nombre_Tema')}}">
                            </div>
                            @error('nombre_Tema')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Descripcion del Tema</label>
                            <div class="col-sm-10">
                                <textarea class="form-control"  name="descripcion_Tema" rows="10" >{{old('descripcion_Tema')}}</textarea>
                            </div>
                            @error('descripcion_Tema')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Url Video del Tema</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="url_video" value="{{old('url_video')}}">
                            </div>
                            @error('url_video')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Imagen del Tema</label>
                            <div class="col-sm-10">
                                {{-- <input type="file" class="form-control"  name="imagen" value="{{old('imagen')}}">--}}
                                <input type="file" class="custom-file-input" id="imagen" name="imagen">
                                <label class="custom-file-label" for="imagen">Seleccionar imagen</label>
                            </div>
                            @error('imagen')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                       {{--  <label for="">
                            Numero de la Unidad
                            <br>
                            <input type="text" name="num_unidad" value="">
                        </label>

                        <br>
                        <label for="">
                            Nombre del Tema
                            <br>
                            <input type="text" name="nombre_Tema" value="">
                        </label>

                        <br>
                        <label for="">
                            Descripcion del Tema
                            <br>
                            <textarea name="descripcion_Tema" rows="10"></textarea>
                        </label>

                        <br>
                        <label for="">
                            Url Video del Tema
                            <br>
                            <input type="text" name="url_video" value="">
                        </label>

                        <br>
                        <label for="">
                            <br>
                            <input type="file" name="imagen" value="">
                        </label>
                        <br>--}}
                        <button class="btn btn-ufps-custom" type="submit">Crear Tema</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
