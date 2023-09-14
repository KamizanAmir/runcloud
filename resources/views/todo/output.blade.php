@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Workspace') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Your current Workspace :</h1><br><br>
                    @foreach($todos as $todo)
                        <li>
                            <b>{{ $todo -> title }}</b>
                            <a href="/create/task" style="margin-left:15px">Add task</a>
                            <a> | </a>
                            <a href="" style="margin-left:5px">Delete Workspace</a>
                            <a style="margin-left:10px; font-family:cursive; font-size:10px">( {{ $todo -> created_at }} )</a>
                        </li>
                    @endforeach
                    <br><br>
                    <div>
                        Press this button to add more workspace 
                        <a href="/create" class="btn btn-primary">+</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
