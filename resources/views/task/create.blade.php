@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center; font-family:cursive;">{{ __('Task Progression') }}</div>
                <div style="display:block; justify-content:center;" class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="text-align:center">
                    @foreach($todos as $todo)
                    @endforeach
                    <h1 style="font-family:cursive">{{ $todo -> title }}</h1><br>
                    <h3>
                        <x-alert/>
                    </h3>
                    <form action="/upload/task" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="title" style="font-size:16px; font-family:cursive;" 
                            class="col-md-4 col-form-label text-md-end">{{ __('Project Title') }}</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input placeholder="Write a simple title" style="text-align:center; 
                                    font-family:cursive;" type="text"
                                        class="form-control2" name="title"
                                        required/>
                                        <button type="submit" class="btn btn-outline-secondary">Create</button>
                                </div>
                            </div>
                        <hr style="margin-bottom: 3em;"/>
                        </div>
                    </form><br>
                    <h1 style="font-family:cursive">Your current Task :</h1><br><br>
                    @php $counter = 1 @endphp
                    @foreach($tasks as $task)
                        <li>
                            <b>{{ $counter }} :</b>
                            <b style="font-family:cursive; margin-left:5px;">{{ $task -> title }}</b>
                            <a href="/create/task" style="margin-left:15px; font-family:cursive;">Add another task</a>
                            <a> | </a>
                            <a href="" style="margin-left:5px; font-family:cursive;">Task Complete</a>
                            <a style="margin-left:10px; font-family:italic; font-size:12px">( {{ $task -> created_at }} )</a>
                        </li>
                        @php $counter++ @endphp
                    @endforeach
                    <br><br>
                    <div style="display:flex; justify-content:center">
                        <a href="/home" style="background-color:#3982c3; color:white;
                            display:block; font-size:18px; font-family:cursive; width:50%;" 
                            class="btn btn-outline-secondary">
                            {{ __('Back') }}
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
