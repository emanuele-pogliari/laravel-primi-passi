<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
    
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('page2')}}">pagina2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('page3')}}">pagina3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('page4')}}">pagina4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('page5')}}">pagina5</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="text-center my-3">
            <h1 >The story so far</h1>
            <img src="{{asset('assets/images/coding.png')}}" alt="">
        </div>
        <div class="row">
            <h4 >{{$boolean}}</h4>
            @foreach($arrayImg as $value)
            <div class="col-3 d-flex my-5">
                <div class="card">
            <img src="{{ asset($value) }}" alt="">
        </div>
            </div>
        @endforeach

        </div>

</div>
</body>

</html>