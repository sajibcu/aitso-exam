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
            <a class="nav-link waves-effect waves-light" href="{{ url('/product') }}">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="analytics.html">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="math.html">Math</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
            </a>
            <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
              <a class="dropdown-item waves-effect waves-light" href="privacy.html">Action</a>
              <a class="dropdown-item waves-effect waves-light" href="termsofservice.html">Another action</a>
              <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>