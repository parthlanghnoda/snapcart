<!DOCTYPE html>
<html lang="en">
<head>
<meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>

  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>.dark {
    background-color: black !important;
    position:absolute;
   bottom:0;
   width:100%;
  }

   .navbar{
           line-height: 0 !important;
           background-color: white !important;

  box-shadow: 0 3px 10px rgb(0 0 0 / 0.5);

   }
   footer{
    background-color: white !important;
    box-shadow: 0 3px 30px rgb(0 0 0 / 0.5);

   }
   .bi{
      text-align: center;
      font-size: 26px;
      }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<nav class="navbar navbar-expand-md text-dark scrolling-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
          <i class="fab fa-snapcart fa-3x" alt="snapcarts logo"><img src="{{ asset('storage/logo.png') }}"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{url('/')}}" class="nav-link text-dark">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link text-dark">
                Contact
              </a>
            </li>
            <li class="nav-item">
            <a href="{{url('/')}}/login" type="button"
                class="nav-link text-dark">
                Sign In
              </a>
            </li>
            <li class="nav-item">
              <a href="sign-up" type="button"
                class="nav-link text-dark">Sign
                up</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
<body>