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
                                <h1 class="display-4">TASK ADD</h1>
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
                                action="{{ route('tasks.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-select"
                                            aria-label="Default select example"
                                            name="user" required>
                                            <option selected value="">Open this
                                                select user
                                            </option>
                                            @forelse ($users as $user)
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name }}</option>
                                            @empty

                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"
                                                id="inputGroup-sizing-default">Title
                                                Task</span>
                                            <input type="text" class="form-control"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default"
                                                name="title" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span
                                                class="input-group-text">Description
                                                Task</span>
                                            <textarea class="form-control"
                                                aria-label="With textarea"
                                                name="description"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"
                                                id="inputGroup-sizing-default">Deadline</span>
                                            <input type="date" class="form-control"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default"
                                                name="deadTime" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
