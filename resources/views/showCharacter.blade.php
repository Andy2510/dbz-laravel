@extends('layout')

@section('content')

<div class="container bg-3 text-center">
  <h3>Dragon Ball Characters</h3><br>
  <div class="row">
       <div class="col-xs-12">
         <div class="thumbnail">

             @if ($character->featured_photo !==NULL)
             <a href=""><img src="{{ $character->featured_photo->url }}" alt="..."></a>
             @endif

               <div class="caption">
                 <h3>{{ $character->name }}</h3>
                  <p>Description: {{ $character->description }}</p>
                  <p>Power level: {{ $character->power_level }}</p>

                   <p><a href="{{ route('edit', $character->id) }}" class="btn btn-primary" role="button">Edit</a>
                   <a href="{{ route('destroy', $character->id) }}" class="btn btn-default" role="button">Delete</a>
                   <a href="{{ route('create-photo', $character->id) }}" class="btn btn-default" role="button">Add photo</a></p>
           </div>
         </div>
       </div>

  <div class="row">
    @foreach ($characters->photos as $photo)
    <div class="col-xs-4">
      <img src="{{ $photo->url }}" class="img-responsive" alt="">
        <a href="{{ route('destroy-photo', $photo->id) }}" class="btn btn-danger btn-xs" role="button">Delete photo</a>
    </div>
    @endforeach
  </div>

</div>

@endsection
