@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center; font-family:cursive;">{{ __('Workspace') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="text-align:center">
                    <h1 style="font-family:cursive">Create your workspace</h1><br>
                    <h3>
                        <x-alert/>
                    </h3>
                    <form action="/upload" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="title" class="form-control2" style="text-align:center; width:50%" placeholder="Eg : Workspace 1" required/>
                            <button type="submit" class="btn btn-outline-secondary">Create</button>
                        </div>
                    </form><br>
                    <hr/><br>
                    <h1 style="font-family:cursive">Your current Workspace :</h1><br><br>
                    @php $counter = 1 @endphp
                    @foreach($todos as $todo)
                        <li>
                            <b>{{ $counter }} :</b>
                            <b style="font-family:cursive; margin-left:5px;">{{ $todo -> title }}</b>
                            <a href="{{ asset('/' . $todo->id . '/create/task') }}" style="margin-left:15px; font-family:cursive;">Add or View task</a>
                            <a> | </a>
                            <a href="" style="margin-left:5px; font-family:cursive;">Delete Workspace</a>
                            <a style="margin-left:10px; font-family:italic; font-size:12px">( {{ $todo -> created_at }} )</a>
                        </li>
                        @php $counter++ @endphp
                    @endforeach
                    <br><br>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
