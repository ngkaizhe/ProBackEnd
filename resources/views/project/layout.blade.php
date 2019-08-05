<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default')</title>
</head>
<body>
    @yield('body')

    @section('error')
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            </ul>
        @endif
    @show
</body>
</html>
