<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <h1>Test</h1>
    {{$message}}

    <h4>{{$boolean}}</h4>

    <ul>
        @foreach($array as $value)
        <li>
            {{$value}}
        </li>
        @endforeach
    </ul>
    <a href="{{route('page2')}}">pagina2</a>
    <a href="{{route('page3')}}">pagina3</a>
    <a href="{{route('page4')}}">pagina4</a>
    <a href="{{route('page5')}}">pagina5</a>
</body>

</html>