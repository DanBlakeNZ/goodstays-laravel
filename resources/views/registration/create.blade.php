@extends('layouts.app')
@section('content')

<h2>Register</h2>
<form method="POST" action="/register"> <!-- Form will be posted to here -->
  {{ csrf_field() }}
  <div class="form-group" style="margin-top: 60px">
    <label for="name">Name:</label>
    <input style="border: 1px solid black" type="text" class="form-control" id="name" name="name">
    @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input style="border: 1px solid black" type="email" class="form-control" id="email" name="email">
    @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input style="border: 1px solid black" type="password" class="form-control" id="password" name="password">
    @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>

  <div class="form-group">
    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

@endsection
