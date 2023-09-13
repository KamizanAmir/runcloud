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
                    
                    <h1>Create your workspace</h1>
                    <h3>
                        <x-alert/>
                    </h3>
                    <form action="/upload" method="post">
                        @csrf
                        <input type="text" name="title"/>
                        <input type="submit" value="Create"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
