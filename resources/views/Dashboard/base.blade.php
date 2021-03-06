
<!doctype html>
<html style="direction: rtl;">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('title') - Ktopia Dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Changa:500" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
    <link href="tags-input-beautifier.min.css" rel="stylesheet">

  

    <!-- Bootstrap core CSS -->
  <link href="{{ asset('Dashboard/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('Dashboard/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
  <a style="text-align: right;" class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Ktopia dashboard</a>
  <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link active" href="{{ route('admin-dashboard') }}">
              
              اللوحة الرئيسية <span class="sr-only">(current)</span>
              <span data-feather="home"></span>
            </a>
          </li>
          <br>
         
          <li class="nav-item">
            <a class="nav-link" href="{{ route('all_products') }}">
                
              عرض المنتجات
              <span data-feather="shopping-cart"></span>
              </a>
            </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('add_new_product') }}">
              
              أضافة منتج جديد
              <span data-feather="shopping-cart"></span>
            </a>
          </li>
          <br>
        </ul>

      </div>
    </nav>

   @yield('content')
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="{{ asset('Dashboard/js/bootstrap.bundle.min.js') }}" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="{{ asset('Dashboard/js/scripts.js') }}"></script>

        <script src="tags-input-beautifier.min.js"></script>
        <script>
        var tags = new TIB(document.querySelector('input[name="tags"]'));
        </script>


      </body>
</html>
