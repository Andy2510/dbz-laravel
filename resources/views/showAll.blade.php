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

             @if ($character->featured_photo !== NULL)
             <a href="{{ route('show', $character->id)}} "><img src="{{ $character->featured_photo->url }}" alt="..."></a>
             @endif

               <div class="caption">
                 <h3>{{ $character->name }}</h3>
           </div>

         </div>
       </div>
     @endforeach
   </div>

@endsection
