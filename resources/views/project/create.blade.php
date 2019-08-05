@extends('project.layout')

@section('title', 'Create page')

@section('body')

    <form method="POST" action="{{route('projects.store')}}">
        {{ csrf_field() }}
        Project name:<br>
        <input type="text" placeholder="Project name" name="project_name" value="{{old('project_name')}}"><br>
        Description:<br>
        <input type="text" placeholder="Description" name="description" value="{{old('description')}}"><br>

        <button type="submit">create</button>
    </form>

@endsection()

@section('error')
