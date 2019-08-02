<!DOCTYPE html>

<html>
<head>
    <title>@yield('title', 'Laravel')</title>
</head>

<body>
    <ul>
        <li><a href="/">welcome</a></li>
        <li><a href="/contact">contact</a></li>
        <li><a href="/about">about</a></li>
    </ul>

    <h2>
        @section('content')
            This is the content.
        @show()
    </h2>
    
    

</body>
</html>