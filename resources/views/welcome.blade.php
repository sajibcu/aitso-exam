<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HRM </title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('resources/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel='stylesheet' href="{{ asset('resources/css/slick.css')}}">
  <link rel='stylesheet' href="{{ asset('resources/css/animate.min.css')}}">

  <!-- Custom styles CSS -->
  <link href="{{ asset('resources/css/frontend_style.css')}}" rel="stylesheet">

</head>

<body>
  <!--Header-->
  <div class="container mt-2 mb-2">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-3">
        <!-- <a class="site-nav-nsbd-logo" href="/" role="banner">
          <img class="site_logo" src="resources/images/onlineEducation_Landing1.png">
          <div class="site_title d-none d-sm-block">Laravel E-commarce</div>
        </a> -->
      </div>
      <div class="col-lg-7 col-md-6 col-9">
        <div class="topbar_login d-block d-sm-none"><a href="login.html"><i class="fa fa-user"></i></a></div>
        <div class="topbar_login d-none d-sm-block"><a href="{{ url('/logout')}}"><i class="fa fa-user"></i> LogOut</a></div>
        <form class="form-inline" method="post" action="{{ url('/login')}}" >
          {{ csrf_field()}}
          <input type="email" class="form-control" id="login_email" placeholder="Enter email" name="email"> &emsp;
          <input type="password" class="form-control" id="login_pwd" placeholder="Enter password" name="password"> &emsp;
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!--Header-->
  <!--Navbar-->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-5"
        aria-controls="navbarSupportedContent-5" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <div id="navbar-close" class="hidden">
          <span class="glyphicon glyphicon-remove"></span>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-5">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect waves-light" href="{{ url('/') }}"><i class="fa fa-home"></i>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="{{ url('/person') }}">Employee</a>
          </li>

          @if(Session::has('user_type') && Session::get('user_type')=='admin')
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="{{ url('/user') }}">Add User</a>
          </li>
          @endif

          
        </ul>
      </div>
    </div>
  </nav>
  <!--Navbar-->

    <!-- <div class="container">
    <div class="row text-center">
      <h1 class="course_title">Products</h1>
    </div>
    <div class="row">

      
    </div> -->
  </div>

 
  <!--support-->
  <script src="{{ asset('resources/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('resources/js/bootstrap.min.js')}}"></script>

  <script src="{{ asset('resources/js/slick.min.js')}}"></script>
  <script src="{{ asset('resources/js/slick-animation.min.js')}}"></script>
  <script src="{{ asset('resources/js/frontend.js')}}"></script>
  <script type="text/javascript">
    function delete_product(id) {

      $.ajax({
               type:'get',
               url:"{{ url('/product/delete')}}",
               data:{'_token' :'<?php echo csrf_token()?>','id' : id},
               success:function(data) {
                alert(data);
                  console.log(data);
               }
            });
    }
  </script>

</body>