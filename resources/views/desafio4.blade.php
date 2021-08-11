@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Desafio 4') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-10">
                                <h1 class="display-4">Laravel Jetstream y Livewire
                                </h1>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('home') }}"><button
                                        type="button" class="btn btn-success">Return
                                        Index</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            Jetstream nos ayuda generando una base sólida a la hora
                            de generar un nuevo proyecto, ya que cuenta con algunas
                            funcionalidades extras de forma nativa:
                        <ul>
                            <li>Verificación por correo electrónico</li>
                            <li>Autenticación de dos factores</li>
                            <li>Gestión de equipos</li>
                            <li>Administrador de sesiones</li>
                            <li>Etc</li>
                        </ul>
                        Asi que gracias a esto los tiempos de desarrollo para la
                        parte del sistema que se encarga de la autenticación se ven
                        reducidos a un par de minutos en lo que nuestro proyecto se
                        crea.
                        </p>
                        <p>Por su lado Livewire permite usar componentes al estilo
                            React, pero con el beneficio que no están de lado del
                            cliente, podemos crear sitios web con una experiencia de
                            usuario más avanzada pero de una forma más sencilla para
                            el desarrollador, es una ruta muy buena para aquellos
                            que no se sientan muy cómodos usando JavaScript o para
                            aquellos que quieren ahorrar tiempo en la creación de la
                            app.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
