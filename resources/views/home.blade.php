@extends('layouts.app')

@section('content')
    <div >
        @include('includes.sectionImage')
    </div>
<div class="navbar-color-ufps">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card navbar-color-ufps">
                <div class="card-header text-center text-white"><h3>{{ __('Seminario Investigativo I') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row text-white">
                            <!-- Grid column -->
                            @foreach ($unidades as $unidad)
                            <div class="col-md-3 mx-auto ">
                                <div class="unidades-title">
                                    <img class="img-fluid icon-list-unidad-title" src="{{ asset('img/pngwing.com.png') }}">
                                    <h5 class="">{{$unidad->nombreUnidad}}</h5>
                                </div>
                                <ul class="list-unidades">
                                @foreach ($listTemas as $temas)
                                    @if ($unidad->id_Tema == $temas->num_unidad)
                                        <li>
                                            <a class="text-white" href="{{route('temas.information', $temas->id)}}">{{$temas->nombre_Tema}}</a>
                                        </li>
                                    @endif
                                @endforeach
                                </ul>

                            </div>
                            <!-- Grid column -->
                            <hr class="clearfix w-100 d-md-none">
                            @endforeach

                        </div>
                        <!-- Grid row -->

                    {{-- __('You are logged in!') --}}
                </div>
                <div class="card-footer">
                    @if ($unidades->hasPages())
                        <nav>
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($unidades->onFirstPage())
                                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $unidades->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($unidades as $element)
                                    {{-- "Three Dots" Separator --}}
                                    @if (is_string($element))
                                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                                    @endif

                                    {{-- Array Of Links --}}
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $paginator->currentPage())
                                                <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($unidades->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $unidades->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                                    </li>
                                @else
                                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                        <span class="page-link" aria-hidden="true">&rsaquo;</span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
