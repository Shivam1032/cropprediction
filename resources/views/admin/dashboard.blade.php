<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <title> ADMIN| KRISHI BODH</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/app.css">
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>
        <!-- TOP NAVIGATION BAR -->

              


              <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                          <div class="float-right">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Admin <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            </div>
               </ul>
              
       
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="/image/logo.png" alt="krishi bodh logo" class="brand-image"
           style="opacity: 1">
      <span class="brand-text font-weight-light">KRISHI BODH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
          <!-- </span> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
        <router-link to="/user" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              
                Dashboard
                
              </p>
              </router-link>  
        </li>

          <li class="nav-item">
            <router-link to="/manageuser" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Manage User
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </router-link>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-flag"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="fa fa-snowflake nav-icon"></i>
                  <p>Soil Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="nav-icon fa fa-snowflake"></i>
                  <p>Seed Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="fa fa-snowflake nav-icon"></i>
                  <p>Fertilizer Report</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <router-link to="/test" class="nav-link">
              <i class="nav-icon fa fa-paper-plane"></i>
              <p>
                Post Notice
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
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-image: url('image/logo.png');height:50%; background-position: center;background-repeat: no-repeat;background-size:fill">

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
