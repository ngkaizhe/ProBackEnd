@extends('project.layout')

@section('title', 'Show Page')

@section('body')
    <h1>
        <a href="{{route('projects.index')}}">
            Project Page
        </a>
    </h1>

    <h2>Name = {{ $project->project_name }}</h2>

    @if($project->tasks()->count())
        <h2>Project Task:</h2>
            <div>
                @foreach($project->tasks as $task)
                    <form method="POST" action="{{route('tasks.update', $task->id)}}">
                        @method('PATCH')
                        @csrf
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed? 'checked': ''}}>
                        {{$task->description}}
                    </form>
                @endforeach
            </div>
    @endif

    <form method="POST" action="{{route('tasks.store', $project->id)}}">
        @method('PATCH')
        @csrf
        <h2>New Task</h2>
        <input type="text" name="description">
        <button type="submit">Add Task</button>
    </form>

@endsection()

@include('project.error')
