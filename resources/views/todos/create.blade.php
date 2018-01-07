@extends('layouts.app')

@section('content')
<h1 class="text-center">Create ToDo</h1>
<div class="col-md-8 col-md-offset-2">
{!! Form::open(['action' => 'TodosController@store', 'method' => 'POST' ]) !!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-danger  btn-lg btn-block'])}}
{!! Form::close() !!}
</div>
@endsection