<form class="form-horizontal" action="{{ route('store') }}" method="post">
  {!! csrf_field() !!}
  <div class="form-group
  @if($errors->has('name'))
    has-error
  @endif
  ">
  <label class="control-label col-sm-2" for="name">Name:</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}">
    @if ($errors->has('name'))
      <i>{{ $errors->first('name') }}</i><br>
    @endif
  </div>
</div>

<div class="form-group
@if($errors->has('race'))
  has-error
@endif">
<label class="control-label col-sm-2" for="race">Race:</label>
<div class="col-sm-10">
  <input type="text" class="form-control" id="race" placeholder="Enter Race" name="race" value="{{ old('race') }}">
  @if ($errors->has('race'))
    <i>{{ $errors->first('race') }}</i><br>
  @endif
</div>
</div>
