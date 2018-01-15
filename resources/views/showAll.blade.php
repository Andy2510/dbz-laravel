@extends('layout')

@section('content')

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
     @foreach ($characters as $character)
       <div class="col-sm-6 col-md-4">
         <div class="thumbnail">

             @if ($character->featured_photo !==NULL)
             <a href=""><img src="{{ $character->featured_photo->url }}" alt="..."></a>
             @endif

               <div class="caption">
                 <h3>{{ $character->name }}</h3>
                   <p><a href="{{ route('edit', $character->id) }}" class="btn btn-primary" role="button">Edit</a>
                   <a href="{{ route('destroy', $character->id) }}" class="btn btn-default" role="button">Delete</a>
                   <a href="{{ route('create-photo', $character->id) }}" class="btn btn-default" role="button">Add photo</a></p>
           </div>
         </div>
       </div>
     @endforeach
   </div>

<!-- @endsection -->



  <!-- <div class="row">

      <ul class="list-group">

          @foreach ($characters as $character)
              <div class="col-md-3">
                {{ $character-> name }}
            <div>

              @foreach($character->photos as $photo)
                <img src="{{ $photo->url }}" class="img-responsive">
                {{-- {{ dump($character->photo)}} --}}
              @endforeach
              </div>

              <div>
              <a href="{{ route('create-photo', $character->id) }}" class="btn btn-danger btn-xs">Photo </a><span>  </span>

              <a href="{{ route('edit', $character->id) }}" class="btn btn-info btn-xs">Edit </a><span>  </span>
              <a href="{{ route('destroy', $character->id) }}" class="btn btn-danger btn-xs">X </a><span>  </span>
            </div>
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
<!-- @endsection -->
