@extends('project.layout')

@section('title', 'Edit')

@section('body')

    <h1>Edit pages</h1>
    <form method="POST" action="{{route('projects.update', $project->id)}}">
        @method('PATCH')
        {{ csrf_field() }}

        Project name:<br>
        <input type="text" name="project_name" value="{{$project->project_name}}"><br>
        Description:<br>
        <textarea name="description" id="" cols="30" rows="10">{{$project->description}}</textarea><br>

        <button type="submit">Update</button><br>
    </form>
    <form action="{{route('projects.destroy', $project->id)}}" method="POST" >
        @method('DELETE')
        @csrf

        <button type="submit">Delete</button><br>
    </form>
@endsection()
