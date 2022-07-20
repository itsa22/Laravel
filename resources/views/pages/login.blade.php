
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-white bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Log here pls!</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact">Contact</a>
                </li>
              </ul>
              <form class="d-flex mt-3 mt-lg-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></button>
              </form>
            </div>
          </div>
        </div>
      </nav> 
</header>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
            <div class="container">
                <div class="row">
                    <div class="col-md4 col-md-offset-4" style="margin-top:20px;">
                                <form action="{{route('login-user')}}" method="POST" enctype="multipart/form-data"files="true">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    @csrf
                                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Your Email" value="{{old('email')}}">
                                        <label for="floatingInput">Email</label><br>
                                        <span class="text-danger">@error('email') {{$message}}@enderror</span>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Enter password">
                                        <label for="floatingPassword">Password</label><br>
                                        <span class="text-danger">@error('password') {{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group">
                                        <br><button class="btn btn-block btn-primary" type="submit">Login</button>
                                    </div> 
                                    <br>
                                    <a href="register">Are u new ?! Register here !</a>  
                                </form>
                    </div>
                </div>
            </div>
    </main>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
    </script>
</html>