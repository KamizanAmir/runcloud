@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align:center">{{ __('Task') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="text-align:center">
                    <h1>Create your task</h1><br>
                    <h3>
                        <x-alert/>
                    </h3>
                    <form action="/upload" method="post">
                        @csrf
                        <input type="text" name="title"/>
                        <input type="submit" value="Create"/><br><br><br>
                        <a href="/create">Click here to go back to your workspace</a>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
