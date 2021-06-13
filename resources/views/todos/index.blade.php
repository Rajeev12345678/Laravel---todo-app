@extends('layout.app')
@section('title')
Home
@endsection
@section('content')
<h1 class="text-center">Todos Page</h1>
<div class="text-center my-5">
    <a class="active" href="#home">Home</a>
    <a href="/about">About</a>
    <a href="/new">New</a>
    <a href="/contact">Contact</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Names
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)

                        <li class="list-group-item">
                            {{$todo->name}}
                            @if(!$todo->completed)
                            <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-end" style="color: White">Complete</a>

                            @endif
                            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-end me-2">View</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
