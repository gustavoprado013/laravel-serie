@extends('layouts.master')

@section('title')
 Welcome!
@endsection

@section('content')
  <div class="row">
    <div class="col-md-6">
      <h3>Sign Up</h3>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
      </form>
    </div>
    <h3>Sign In</h3>
    <div class="col-md-6">
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
        <button class="btn btn-primary" type="submit" name="button">Submit</button>
      </form>
    </div>

  </div>
@endsection
