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
                    <h1 style="font-family:cursive">{{ $todo->title }}</h1><br>
                    <h3>
                        <x-alert/>
                    </h3>
                    <form action="/upload/task" method="post">
                        @csrf
                        <div style="width:80%" class="row mb-3">
                            <label for="title" style="font-size:16px; font-family:cursive;" 
                            class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div style="display:flex; justify-content:center;" class="col-md-6">
                                <div class="input-group">
                                    <input placeholder="Write a simple title" style="text-align:center; 
                                    font-family:cursive;" type="text"
                                        class="form-control2" name="title"
                                        required/>
                                </div>
                            </div>
                            <label for="title" style="font-size:16px; font-family:cursive;" 
                            class="col-md-4 col-form-label text-md-end">{{ __('Subject') }}</label>
                            <div style="display:flex; justify-content:center;" class="col-md-6">
                                <div class="input-group">
                                    <input placeholder="Write a simple title" style="text-align:center; 
                                    font-family:cursive; padding:2.5rem 0.75rem;" type="text"
                                        class="form-control2" name="subject"
                                        required/>
                                </div>
                            </div>
                            <label for="title" style="font-size:16px; font-family:cursive;" 
                            class="col-md-4 col-form-label text-md-end">{{ __('Due Date') }}</label>
                            <div style="display:flex; justify-content:center;" class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon datepicker">
                                        <h1 class="fas fa-calendar"></h1> <!-- FontAwesome calendar icon -->
                                    </span>
                                    <input placeholder="Click the calendar icon." style="text-align:center; font-family:cursive;" 
                                        type="text" class="form-control2" name="due_date" required
                                        data-date-format="yyyy-mm-dd" id="due_date" readonly>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function () {
                                // Target input fields with the 'datepicker' class and apply the datepicker widget
                                $('.datepicker').datepicker({
                                    todayHighlight: true, // Highlighting Today's Date so the user much aware of their due date
                                    startDate : 'tomorrow', // Force user to start the calendar within today, since no due to past right??
                                    autoclose: true, // Automatically close the datepicker when a date is selected
                                    format: 'yyyy-mm-dd', // Set the date format
                                }).on('changeDate', function (e) {
                                    // When a date is selected, update the value of the input field
                                    $('#due_date').val(e.format());
                                });
                            });
                        </script>
                        <style>
                            /* Custom CSS to change the color of the highlighted date */
                            .today {
                                background-color: yellow;
                                color: red; /* Optional: Change text color */
                            }
                        </style>
                        <button style="background-color:#3982c3; color:white;
                            display:block; font-size:18px; font-family:cursive; width:50%;" 
                            class="btn btn-outline-secondary" type="submit">Create</button><br>
                    <hr style="margin-bottom: 3em;"/>
                    </form>
                    
                    <h1 style="font-family:cursive">Your current Task :</h1><br><br>
                    @php $counter = 1 @endphp
                    @foreach($tasks as $task)
                        <li>
                            <b>{{ $counter }} :</b>
                            <b style="font-family:cursive; margin-left:5px;">{{ $task -> title }}</b>
                            <a href="/create/task" style="margin-left:15px; font-family:cursive;">Edit</a>
                            <a href="/create/task" style="margin-left:15px; font-family:cursive;">Mark as Finish</a>
                            <!--should change the isFinish attribute to 1 and show when he mark the task as
                            finish or when the value change to 1 from 0 !-->
                            <!--<a> | </a>
                            <a href="" style="margin-left:5px; font-family:cursive;">Complete</a>
                            <a style="margin-left:10px; font-family:italic; font-size:12px">( {{ $task -> created_at }} )</a>!-->
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
