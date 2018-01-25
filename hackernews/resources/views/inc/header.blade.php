<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hackernews</title>
    <link rel="stylesheet" type="text/css" href="{{  url('css/solarBootswatch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  url('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Hackernews</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::user())
      <li class="nav-item">
        <a class="nav-link" href="create">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="change">change</a>
      </li>
      @endif
    </ul>
    <ul class="navbar-nav navbar-right">
      <li><a href="register" class="nav-link">Register</a></li>
      <li><a href="login" class="nav-link">Login</a></li>
      @if(Auth::user())
      <li><a href="logout" class="nav-link">Logout</a></li>
      @endif
    </ul>
  </div>
</nav>

