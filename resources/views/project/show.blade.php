@extends('project.layout')

@section('title', 'Show Page')

@section('body')
    <h1>
        <a href="{{route('projects.index')}}">
            Project Page
        </a>
    </h1>

    <h2>{{ $project->project_name }}</h2>

@endsection()
