<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
    <title>page 1</title>
</head>
<body>
    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">Navbar</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home (page 4)
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PAGE 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PAGE 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PAGE 3</a>
    </li>



  </ul>
  <!-- Links -->

  <form class="form-inline">
    <div class="md-form my-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    </div>
  </form>
</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->

{{-- 
@isset ($email)
<a style="color: red;"> {{$email}} </a>
@endisset

@isset ($password)
<a style="color: red;"> {{$password}} </a>
@endisset --}}

{{-- <b> {{session()->get('email')}}</b> --}}
{{-- cookies --}}
<a> {{ Cookie::get('email') }}</a>

</body>
</html>