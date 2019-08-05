@extends('project.layout')

@section('title', 'Index Page')

@section('body')
    <h1>Project List</h1>
    <ul>
    @foreach($projects as $project)
        <li>
            <a href="{{ route('projects.show', $project->id) }}">
                {{ $project->project_name }}
            </a>
            <br>
            <a type="button" href="{{ route('projects.edit', $project->id) }}">Edit</a>
        </li>
    @endforeach
    </ul>


@endsection()
