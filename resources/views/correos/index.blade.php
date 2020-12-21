@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header navbar-color-ufps"><h3 class="text-white">{{ __('Enviar Mensaje') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('correo.store')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="nombre" value="{{old('nombre')}}">
                            </div>
                            @error('nombre')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Mensaje</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control"  name="mensaje" >{{old('mensaje')}}</textarea>
                            </div>
                            @error('mensaje')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Correo Institucional</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control"  name="correo" >{{old('correo')}}</textarea>
                            </div>
                            @error('correo')
                            <br>
                            <small>{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                            {{-- <label>
                                Nombre:
                                <br>
                                <input type="text" name="name">
                            </label>
                            <br>

                            <label>
                                Correo:
                                <br>
                                <input type="text" name="correo">
                            </label>
                            <br>

                            <label>
                                Mensaje:
                                <br>
                                <textarea name="mensaje" rows="10"></textarea>
                            </label> --}}
                            <br>

                            <button class="btn btn-ufps-custom" type="submit">Enviar Mensaje</button>
                    </form>

                    @if (session('info'))
                        <script>
                            alert("{{session('info')}}");
                        </script>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
