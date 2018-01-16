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
                 <h3><strong>Name:</strong> {{ $character->name }}</h3>
                 <p><strong>Description:</strong> {{ $character->description}}</p>
                 <p><strong>Power_level:</strong> {{ $character->power_level}}</p>
                 <p><a href="{{ route('edit', $character->id) }}" class="btn btn-primary" role="button">Edit</a>
                   <a href="{{ route('destroy', $character->id) }}" class="btn btn-default" role="button">Delete</a>
                   <a href="{{ route('create-photo', $character->id) }}" class="btn btn-default" role="button">Add photo</a></p>
                   <a href="{{ route('index')}}" class="btn btn-default" role="button">Back to home</a></p>
               </div>
             </div>
           </div>


  <div class="row">
    @foreach ($character->photos as $photo)
    <div class="col-xs-4">
      <img src="{{ $photo->url }}" class="img-responsive" alt="">
        <a href="{{ route('destroy-photo', $photo->id) }}" class="btn btn-danger btn-xs" role="button">Delete this photo</a>
    </div>
    @endforeach
  </div>

</div>

@endsection
