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
        <div class="topbar_login d-none d-sm-block"><a href="login.html"><i class="fa fa-user"></i> Login</a></div>
        <form class="nsbd_search">
          <input class="form-control top_search" type="text" placeholder="Search" aria-label="Search">
          <i class="fa fa-search" aria-hidden="true"></i>
        </form>
        <!--<form class="form-inline" action="/action_page.php">
          <input type="email" class="form-control" id="login_email" placeholder="Enter email" name="login_email"> &emsp;
          <input type="password" class="form-control" id="login_pwd" placeholder="Enter password" name="login_pwd"> &emsp;
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>-->
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

          
        </ul>
      </div>
    </div>
  </nav>
  <!--Navbar-->

    <div class="container">
    <div class="row">
      <h1 class="course_title">Employee</h1>

      @if(Session::has('user_type'))
        {{ Session::get('user_type')}}
      @endif
      


     <!--  <a class="btn btn-success" href="{{ url('/employee/add') }}">Add Employee</a> -->

    </div>

    <div class="row">

      <form action="{{ url('/person')}}" method="get" >
       <div class="col-md-2">
         <input type="text" name="id_no" id="id_no" placeholder="ID No.">
       </div>
       <div class="col-md-2">
         <input type="text" name="name" id="name" placeholder="Name">
       </div>
       <div class="col-md-2">
         <input type="text" name="rank" id="rank" placeholder="Rank">
       </div>
       <div class="col-md-6">
         <button type="submit" class="btn" >Search</button>
         <br/>
      <br/>
       </div>
        
      </form>
    
    </div>

    <div class="row">
      

    @if(Session::has('user_type') && Session::get('user_type')=='admin')
      <a type="button" class="btn btn-success" href="{{ url('/employee/add') }}">Add Employee</a>
      @endif
    <button type="button" class="btn btn-info" onclick="PrintMe('printme')">Print </button>

    </div>
    
    <div class="row" id="printme">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>ID No.</th>
          <th>Rank</th>
          <th>Name</th>
          <th>Appointment</th>
          <th>Bloog Group</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Identification Marks</th>
          <th>Present Address</th>
          <th>Parmanent Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach($persons as $person)
        <tr>
          <td>{{$person->id_no}}</td>
          <td>{{$person->rank}}</td>
          <td>{{$person->name}}</td>
          <td>{{$person->appointment}}</td>
          <td>{{$person->blood_grop}}</td>
          <td>{{$person->height}}</td>
          <td>{{$person->weight}}</td>
          <td>{{$person->identification_marks}}</td>
          <td>{{$person->present_address}}</td>
          <td>{{$person->permanent_address}}</td>
        </tr>
        @endforeach
      </tbody>
      </table>

    </div>
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

<script type="text/javascript">
    function PrintMe(el) {
        var restorepage  = $('body').html();
        /*$('body').css('height','297mm');
        $('body').css('width','210mm');
        $('html').css('height','297mm');
        $('html').css('width','210mm');*/
        $('body').css('fontSize','10px');
        //document.getElementById("#PrintMe").style.fontSize = "";
        var printcontent = '';
        printcontent += $('#' + el).html();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        location.reload();
    }
    
</script>