<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
    <body>
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

</body>
</html>
