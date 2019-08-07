@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    </ul>
@endif
