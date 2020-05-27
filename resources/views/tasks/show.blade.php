@extends('base')

@section('main')
<h1>Showing Task {{ $task->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Task Title:</strong> {{ $task->title }}<br>
            <strong>Description:</strong> {{ $task->description }}
        </p>
    </div>
    <a href="{{route('tasks.index')}}"><input type="button" class="btn btn-primary" value="Home" name=""></a>
@endsection
