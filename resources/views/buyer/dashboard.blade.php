
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <title>{{ config('app.name', 'KRISHI BODH') }}</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                  
              <ul class="navbar-nav">
                  
                  <li class="nav-item">
                    
                  </li>
                  <li class="nav-item">
                    
                  </li>
                  </form>
              </ul>

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login ? Registered User') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register ? New User') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/image/logo.png" alt="krishi bodh logo" class="brand-image"
           style="opacity: 1">
      <span class="brand-text font-weight-light">{{ config('app.name', 'KRISHI BODH') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/image/user.jpg" class="img-circle elevation-2" style = "width:40px;height:40px"alt="User Image">
        </div>
        <div class="info">
        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
        <!-- <span class="fa fa-user"> -->
          <router-link to="profile" class="d-block" style="color:#ffffff">{{ Auth::user()->name }}</router-link>
          <!-- </span> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  {{__('Dashboard')}}
                </p>
              </a>
          </li>

          <!-- TODO MY DEAL PAGE -->
          <li class="nav-item">
            <router-link to="products" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>
                  Product
                </p>
              </router-link>
          </li>
          <li class="nav-item">
          <router-link to="mybids" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>
                  My Bids
                </p>
                </router-link>
          </li>
          <li class="nav-item">
            <router-link to="reportproblem" class="nav-link">
                <i class="nav-icon fa fa-bug"></i>
                <p>
                  Report a problem
                </p>
              </router-link>

          </li>
          <li class="nav-item">
            <router-link to="contact-us" class="nav-link">
                <i class="nav-icon fa fa-map-marker"></i>
                <p>
                  Contact Us
                </p>
                </router-link>
          </li>
          <li class="nav-item">
            <a  class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('image/logo.png');height:50%; background-position: center;background-repeat: no-repeat;background-size:fill">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
          </div><!-- /.col -->
          <!-- <div class="col-sm-6"> -->
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          <!-- </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <router-view></router-view>
              
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->
<script src="/js/app.js"></script>

</body>
</html>
