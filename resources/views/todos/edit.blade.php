@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edit ToDo</h1>

    <div class="col-md-8 col-md-offset-2">
        <a href="/todo/{{$todo->id}}" class="btn btn-primary"><<< Go Back</a>
        {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST' ]) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-danger  btn-lg btn-block'])}}
        {!! Form::close() !!}
    </div>
@endsection