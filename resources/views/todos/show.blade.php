@extends('layouts.app')

@section('content')
    <a class="btn btn-light" href="/">Go Back</a>
    <h1><a href="/todo/{{ $todo->id }}"> {{ $todo->text }} </a></h1>
    <div class="badge badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->body }}</p>
    <br><br>
    <a href="/todo/{{ $todo->id}}/edit" class="btn btn-outline-secondary">Edit</a>
@endsection