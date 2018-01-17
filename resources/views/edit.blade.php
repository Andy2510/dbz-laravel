@extends('layout')

@section('content')

  <div class="container">
    <h2 class="text-center">Edit Character</h2>
  <form class="form-horizontal" action="{{ route('update', $character->id) }}" method="post">

    @include('form', [
      'name' => '',
      'race' => '',
      'power_level' => '',
      'description' => '',
     ])

<div class="form-group
@if($errors->has('power_level'))
  has-error
@endif">
<label class="control-label col-sm-2" for="pwrlevel">Power Level:</label>
<div class="col-sm-10">
  <input type="text" class="form-control" id="pwrlevel" placeholder="Enter PowerLevel" name="power_level" value="{{ old('power_level', $character->power_level) }}">
  @if ($errors->has('power_level'))
    <i>{{ $errors->first('power_level') }}</i><br>
  @endif
</div>
</div>

<div class="form-group
@if($errors->has('description'))
  has-error
@endif">
<label class="control-label col-sm-2" for="description">Description:</label>
<div class="col-sm-10">
  <textarea type="text" class="form-control" id="description" placeholder="Enter description" name="description">{{ old('description', $character->description) }}</textarea>
  @if ($errors->has('description'))
    <i>{{ $errors->first('description') }}</i><br>
  @endif
</div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-success">Save</button>
    <a href="{{ route('index') }}" class="btn btn-info">Back</a>
  </div>
</div>
</form>

@endsection
