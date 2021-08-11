@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Desafio 2') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-10">
                                <h1 class="display-4">Como Instalar Laravel</h1>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('home') }}"><button
                                        type="button" class="btn btn-success">Return
                                        Index</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Lo primero que se necesita para instalar Laravel es tener
                            PHP, para instalarlo nos podemos valer de muchas formas,
                            en este caso lo instalaremos usando Laragon, ya que este
                            entorno a diferencia de otros (XAMMP), nos ayuda a crear
                            aplicaciones de Laravel más fácil.</p>
                        <p>Para descargar Laragon visitamos su página oficial y
                            seleccionamos la versión full. <a
                                href="https://laragon.org/download/index.html"
                                target="_blank">Descargar</a></p>
                        <p>Laragon ya nos provee una terminal y un gestor de base de
                            datos.</p>
                        <img src="{{ asset('img/1.png') }}" alt="">
                        <p>Una vez instalado, abrimos la terminal y con el comando
                            <code>php -v</code> podremos ver la información de la
                            versión que tenemos de PHP, de igual forma en la página
                            de Laragon nos indica la versión.</p>
                        <img src="{{ asset('img/2.png') }}" alt="">
                        <p>Otro recurso que se necesita es COMPOSER, para instalar
                            dependencias futuras, en este caso gracias a laragon ya
                            lo tenemos instalado, solo tenemos que ejecutar el
                            comando <code>composer</code> y nos mostrara la
                            información.</p>
                        <img src="{{ asset('img/3.png') }}" alt="">
                        <p>Podemos crear aplicaciones desde la ventana de laragon,
                            dando click derecho y siguiendo la ruta de creación.</p>
                        <img src="{{ asset('img/4.png') }}" alt="">
                        <p>Pero también se puede hacer en la línea de comando, para
                            ello primero tenemos que instalar los comandos de
                            Laravel y se hace con el comando <code>composer global
                                require laravel/installer</code> este comando
                            instalara laravel de forma global y a su vez nos permite
                            usar los comandos de laravel.</p>
                        <p>Una vez instalado podemos ejecutar el comando
                            <code>laravel new "nombre de la app"</code> para poder
                            crear nuestro proyecto</p>
                        <img src="{{ asset('img/5.png') }}" alt="">
                        <p>Una vez finalizada la creación de la aplicación tenemos
                            que reiniciar los servicios en laragon o iniciarlos en
                            caso de que no lo estuvieran.</p>
                        <img src="{{ asset('img/6.png') }}" alt="">
                        <p>Para poder ver nuestra aplicación en el navegador tenemos
                            dos opciones, una es ejecutando el comando <code>php
                                artisan serve</code> el cual nos provee un servidor
                            local, pero laragon cuenta con un Host Virtual ya
                            configurado, asi que para acceder usando este host,
                            tenemos que ir al nevagador y poner en el buscador
                            <code>nombre de la pp.test</code> y listo, tenemos
                            nuestra app creada.</p>
                        <img src="{{ asset('img/7.png') }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
