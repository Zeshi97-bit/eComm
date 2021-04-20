@extends('master')
@section("content")
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form action="register" method="POST">
        @csrf
        <div class="form-group">
          <label for="formGroupExampleInput">User Name</label>
          <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="User Name">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Email</label>
          <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Password</label>
          <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="enter your password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
</div>
@endsection
