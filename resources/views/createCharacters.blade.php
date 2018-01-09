<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Character</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">Insert Character</h2>

  <form class="form-horizontal" action="/store" method="post">
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
    <div class="form-group">
      <label class="control-label col-sm-2" for="race">Race:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="race" placeholder="Enter Race" name="race" value="{{ old('name') }}">
        @if ($errors->has('race'))
          <i>{{ $errors->first('race') }}</i><br>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwrlevel">Power Level:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwrlevel" placeholder="Enter PowerLevel" name="pwrlevel" value="{{ old('pwrlevel') }}">
        @if ($errors->has('pwrlevel'))
          <i>{{ $errors->first('pwrlevel') }}</i><br>
        @endif
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{ old('description') }}">
        @if ($errors->has('description'))
          <i>{{ $errors->first('description') }}</i><br>
        @endif
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>

</div>
</body>
</html>
