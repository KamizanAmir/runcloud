@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add workspace') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href="{{ route('home') }}" class="btn btn-primary"><=</a>
                    </div>
                    <h1>Create your workspace</h1>
                    <form>
                        <input type="text" name="workspace"/>
                        <input type="submit" value="Create"/>
                    </form>

                    {{ __('Add task by press the "+" button below') }}
                    <div>
                        <a href="{{ route('todolist') }}" class="btn btn-primary">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
