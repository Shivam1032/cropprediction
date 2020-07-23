
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
<div class="wrapper" id ="app">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{ Auth::user()->name }}
          <i class="fa fa-caret-down"></i>
          <!-- <span class="caret"></span> -->
        </a>

        <div class="dropdown-menu dropdown-menu-right">
          <router-link to="profile" class="dropdown-item" >
            {{ __('Profile') }}
          </router-link>


          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
      </li>
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
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      
        </div>
        <div class="info">
        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
        <!-- <span class="fa fa-user"> -->
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          <!-- </span> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('farmerhome') }}" class="nav-link active">	         
              <i class="nav-icon fas fa-tachometer-alt"></i>	             
              <p>	           
                Dashboard	            
              </p>	     
            </a>	      
        </li>	     

        <li class="nav-item">
          <router-link to="/myrecord" class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                My Record
              </p>
          </router-link>
        </li>

      
              <li class="nav-item">
                <router-link to="/requestaids" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Request For Aids</p>
                </router-link>
              </li>

         
          <li class="nav-item">	    
            <router-link to="requesttesting" class="nav-link">
              <i class="nav-icon fas fa-th"></i>	           
              <p>Soil Testing
                <!-- <span class="right badge badge-danger">New</span> -->	             
               </p>
            </router-link>
          </li>

          <li class="nav-item">	    
            <router-link to="/sellproduce" class="nav-link">
              <i class="nav-icon fas fa-th"></i>	           
              <p>Sell Your Produce
                <!-- <span class="right badge badge-danger">New</span> -->	             
               </p>
            </router-link>
          </li>
          <li class="nav-item">	    
            <router-link to="/farmeroffers" class="nav-link">
              <i class="nav-icon fas fa-th"></i>	           
              <p>My Offers
                <!-- <span class="right badge badge-danger">New</span> -->	             
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
            <router-link to="/contact-us" class="nav-link">
                <i class="nav-icon fa fa-map-marker"></i>
                <p>
                  Contact Us
                </p>
              </router-link>
          </li>
          <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
               <i class="nav-icon fa fa-sign-out-alt"></i>
               {{ __('Logout') }}</a>
          </li>     
        </ul>	 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('/image/logo.png');height:50%; background-position: center;background-repeat: no-repeat;background-size:fill">
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
      <vue-progress-bar></vue-progress-bar>
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
