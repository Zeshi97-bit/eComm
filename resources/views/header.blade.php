<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}


 ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-Comm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Orders</a>
      </li>

    </ul>
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">

      <li class="nav-item active">
        <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
      </li>
      <!--Here is dropdown-->
        @if(Session::has('user'))
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{Session::get('user')['name']}}<span class="caret"></span>
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/logout">Logout</a>
          @else
            <a class="nav-link" href="/login">Login</a>
          @endif
        </div>
      </div>
      <!--
      @if(Session::has('user'))
      <li class="dropdown nav-item active">
          <a href="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li> <a href="#">Logout</a> </li>

          </ul>
      </li>
      @else
        <a class="nav-link" href="/login">Login</a>
      @endif
    -->
    </ul>
  </div>
</nav>
