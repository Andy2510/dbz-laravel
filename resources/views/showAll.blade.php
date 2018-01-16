@extends('layout')

@section('content')

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
     <h2 class="text-center">
       <a href="{{ route('create') }}">Create your character!</a>
     </h2>

   </div>
</nav>

<div class="container text-center">
  <h3>Dragon Ball Characters</h3><br>
  <div class="row">
     @foreach ($characters as $character)
       <div class="col-xs-3">
         <div class="thumbnail">

             @if ($character->featured_photo !== NULL)
             <a href="{{ route('show', $character->id)}} "><img src="{{ $character->featured_photo->url }}" alt="..."></a>
             @endif

               <div class="caption">
                 <h3>{{ $character->name }}</h3>
                   <p><a href="{{ route('edit', $character->id) }}" class="btn btn-default" role="button">Edit</a>
                   <a href="{{ route('destroy', $character->id) }}" class="btn btn-default" role="button">Delete</a>
                   <a href="{{ route('create-photo', $character->id) }}" class="btn btn-primary" role="button">Add photo</a></p>
           </div>
         </div>
       </div>
     @endforeach
   </div>

@endsection
