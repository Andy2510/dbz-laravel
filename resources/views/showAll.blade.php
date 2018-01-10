<!DOCTYPE html>
<html lang="en">
<head>
  <title>DragonBall Characters Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
     <h2 class="text-center">
       <a href="{{ route('create') }}">Create your character!</a>
     </h2>

   </div>
</nav>

<div class="container bg-3 text-center">
  <h3>Dragon Ball Characters</h3><br>
  <div class="row">

      {{-- <ul class=list-group> --}}


          @foreach ($characters as $character)
            <div class="col-sm-3">
              {{-- {{ $character }} --}}
              <a href="{{ route('index') }}" class="btn btn-danger btn-xs">X </a>{{ $character-> name}}
            </div>
          @endforeach

      {{-- </ul> --}}
  </div>

  </div>
</div><br>

<!-- <div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br> -->

</body>
</html>
