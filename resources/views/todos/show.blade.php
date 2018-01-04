@extends ('layouts.app')

@section('content')
<a href="/" class="btn btn-primary"><-Back</a>
<h1>{{$todo->text}}</h1>
<h4>{{$todo->body}}</h4>

<h5><span class="label label-danger">{{$todo->due}}</span></h5>
<hr>
<p>{{$todo->created_at}}</p>
@endsection