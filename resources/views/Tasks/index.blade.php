@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-8 col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Tasks Index') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-10">
                                <h1 class="display-4">TASKS LIST</h1>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('home') }}"><button
                                        type="button" class="btn btn-success">Return
                                        Index</button></a>
                            </div>
                        </div>
                        <a href="{{ route('tasks.create') }}"><button
                                type="button" class="btn btn-primary">New
                                Task</button></a>
                    </div>
                    @if (session('notification'))
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            {{ session('notification') }}
                        </div>
                    </div>
                @endif
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Options</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Deadline</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($tasks as $task)
                                    <tr @if ($deadline > $task->deadTime) style="background-color: red; color: white" @endif>    
                                        <th scope="row">
                                            @if ($task->user == auth()->user()->id)
                                                <a href="{{ route('tasks.show',$task) }}">LOG</a>
                                            @else
                                                ----
                                            @endif
                                        </th>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ Str::limit($task->description, 20, '(...)') }}
                                        </td>
                                        <td>{{ $task->deadTime }}</td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger" role="alert">
                                        No registered tasks
                                    </div>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
