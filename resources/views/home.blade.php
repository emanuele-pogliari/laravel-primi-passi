<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>

</html>