@extends('layout')

@section('content')

  <div class="container bg-3 text-center">
    <h3>Upload photo</h3><br>
    <div class="row">

      <form class="form-horizontal" action="{{ route('store-photo', $id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <p>Select image to upload for {{ $character->name }}:</p>
        <input type="file" name="upload">
        @if ($errors->has('upload'))
          <i class="has-error pull-left">{{ $errors->first('upload') }}</i></br>
        @endif
        <br>
        <input type="submit" name="submit" value="Upload Image" class="btn btn-success pull-left">
        <br>

      </form>

        <br>
        <a href="{{ route('index') }}" class="btn btn-default">Back to creation</a>

    </div>
  </div>
@endsection
