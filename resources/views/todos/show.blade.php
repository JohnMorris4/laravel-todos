@extends ('layouts.app')

@section('content')
<a href="/" class="btn btn-primary"><-Back</a>
<h1>{{$todo->text}}</h1>
<h4>{{$todo->body}}</h4>

<h5><span class="label label-danger">{{$todo->due}}</span></h5>
<hr>
<p>{{$todo->created_at}}</p>
<br><br>
<a href="/todo/{{$todo->id}}/edit" class="btn btn-primary btn-lg">Edit ToDo</a>

{!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right' ]) !!}
{{ Form::hidden('_method', 'DELETE') }}
{{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger btn-lg'])}}
{!! Form::close() !!}
@endsection