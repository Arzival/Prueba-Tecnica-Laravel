@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Index') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul>
                            <li>
                                <a href="{{ route('invoices.index') }}">Desafio
                                    1</a>

                            </li>
                            <li>
                                <a href="{{ route('desafio2') }}">Desafio
                                    2</a>

                            </li>
                            <li>
                                <a href="{{ route('desafio4') }}">Desafio
                                    4</a>

                            </li>
                            <li>
                                <a href="{{ route('tasks.index') }}">Desafio
                                    5</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
