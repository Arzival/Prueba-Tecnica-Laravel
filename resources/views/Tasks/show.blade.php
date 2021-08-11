@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-8 col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Tasks') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <h1 class="display-4">TASK SHOW</h1>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('tasks.index') }}"><button
                                        type="button" class="btn btn-success">Return
                                        Tasks</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="form" method="POST"
                                action="{{ route('logs.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"
                                                id="inputGroup-sizing-default">Title
                                                Task</span>
                                            <input type="text" class="form-control"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default"
                                                name="title" required
                                                value="{{ $task->title }}"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"
                                                id="inputGroup-sizing-default">Deadline</span>
                                            <input type="date" class="form-control"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default"
                                                name="deadTime" required
                                                value="{{ $task->deadTime }}"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span
                                                class="input-group-text">Description
                                                Task</span>
                                            <textarea class="form-control"
                                                aria-label="With textarea"
                                                name="description" required
                                                readonly>{{ $task->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                @if ($logs ?? 'false')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul>
                                                @foreach ($logs as $log)
                                                    <li>{{ $log->coment }} /
                                                        {{ $log->date }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span
                                                class="input-group-text">Description
                                                Log</span>
                                            <textarea class="form-control"
                                                aria-label="With textarea"
                                                name="coment" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="tasks_id"
                                    value="{{ $task->id }}">
                                <input type="hidden" name="to"
                                    value="{{ $task->creator }}">
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block">Add
                                            Log</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
