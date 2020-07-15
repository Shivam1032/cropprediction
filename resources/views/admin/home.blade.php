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
        <!-- TOP NAVIGATION BAR -->
                            <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                <div class="float-right">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Admin <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right float-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="https://kbfms.in/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="https://kbfms.in/logout" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="e1eEhcWaLlOhVWnHr2TeQ90EA9Ksyx7MReTGbV7C">                                    </form>
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
        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
        <!-- <span class="fa fa-user"> -->
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
            <router-link to="/test" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Soil Testing
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </router-link>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

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
