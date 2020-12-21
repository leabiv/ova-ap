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
                        <div class="row text-white">
                            <!-- Grid column -->
                                <div class="col-md-3 mx-auto ">
                                    <div class="unidades-title">
                                        <h4 class="">Misión</h4>
                                    </div>

                                    <p class="text-white text-justify">
                                        El Programa de Ingeniería de Sistemas de la UFPS está comprometido en la formación integral de profesionales competentes en el Desarrollo y Gestión de Sistemas de Información, caracterizados por una sólida fundamentación en las áreas de las ciencias de la computación e informática, enmarcado en un Proyecto Educativo fundamentado en el mejoramiento continuo de los procesos de docencia, investigación y extensión; basados en los principios de excelencia académica, con responsabilidad y compromiso con los procesos de transformación de la región y del país; contando con docentes de calidad con altas cualidades personales y profesionales, con una adecuada infraestructura física y tecnológica.
                                    </p>

                                </div>
                                <!-- Grid column -->
                                <hr class="clearfix w-100 d-md-none">
                            <div class="col-md-3 mx-auto ">
                                <div class="unidades-title">
                                    <h4 class="">Visión</h4>
                                </div>

                                <p class="text-white text-justify">
                                    El Programa de Ingeniería de Sistemas se proyecta en un proceso continuo de mejoramiento de alta calidad, líder en la formación de Ingenieros de Sistemas competentes en el Desarrollo y Gestión de Sistemas de Información, comprometidos con el desarrollo tecnológico de la región y del país, afrontando las situaciones cambiantes del medio, respondiendo a los retos que presenta el uso masivo de las Tecnologías de Información y Comunicación. Apoyados en una estructura curricular flexible, con un equipo administrativo idóneo, con docentes de calidad con altas cualidades personales y profesionales, con una adecuada infraestructura física y tecnológica.
                                </p>

                            </div>
                            <!-- Grid column -->
                            <hr class="clearfix w-100 d-md-none">
                            <div class="col-md-3 mx-auto ">
                                <div class="unidades-title">
                                    <h4 class="">Perfil Ocupacional</h4>
                                </div>

                                <p class="text-white text-justify">
                                    El Ingeniero de Sistemas de la Universidad Francisco de Paula Santander se forma integralmente, con altas exigencias académicas, para desempeñarse laboralmente en el área de los Sistemas de Información de una Organización (Proyectos de desarrollo, Administración de datos e información, de telecomunicaciones y redes informáticas y Soporte a usuarios); en Empresas de Consultoría de Gestión (Construyendo y, en ocasiones, administrando sistemas para otras organizaciones); y/o Investigador.
                                </p>

                            </div>
                            <!-- Grid column -->
                            <hr class="clearfix w-100 d-md-none">

                        </div>
                        <!-- Grid row -->

                        {{-- __('You are logged in!') --}}
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
