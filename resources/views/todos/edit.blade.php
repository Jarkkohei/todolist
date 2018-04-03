@extends('layouts.app')

@section('content')
    <a class="btn btn-light" href="/todo/{{ $todo->id }}">Go Back</a>
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'PUT']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}

        <!--This is not used since Collectives spoofs the non-GET/POST -methods automatically. -->
        <!-- { Form::hidden('_method', 'PUT') }     // a set of {}'s omitted form commenting. -->

        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection