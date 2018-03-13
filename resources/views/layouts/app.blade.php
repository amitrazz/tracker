<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  
    <!-- Main Header -->
    <header class="main-header">
  
      <!-- Logo -->
      <a href="{{route('home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>Buy</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Component</b>Buy</span>
      </a>
  
      <!-- Header Navbar -->
      @include('partial.nav')
  
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        @role('admin')
          <li class="treeview">
                <a href="#"><i class="fa fa-user"></i> <span>Users</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('user.create')}}">Add New User</a></li>
                  <li><a href="{{route('users')}}">All Users</a></li>
                  <li><a href="{{route('roles')}}">Role Managment</a></li>
                </ul>
              </li>
        @endrole
          <li class="treeview">
            <a href="#"><i class="fa fa-building"></i> <span>Company</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('company.create')}}">Add Company</a></li>
            <li><a href="{{route('companies')}}">All Company</a></li>
            <li><a href="{{route('companies')}}">To attend</a></li>
            </ul>
          </li>
          <li class="treeview">
              <a href="#"><i class="fa fa-address-card"></i> <span>Contact</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{route('contact.create')}}">Add Contact</a></li>
              <li><a href="{{route('contacts')}}">All Contacts</a></li>
              </ul>
            </li>
            @role('admin')
          <li class="treeview">
                <a href="#"><i class="fa fa-bar-chart"></i> <span>Workfow</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{route('process.create')}}">Assign Company</a></li>
                  <li><a href="#">Track Process</a></li>
                  <li><a href="#">Track Employes</a></li>
                  <li><a href="{{route('responses')}}">Responses</a></li>
                </ul>
              </li>
          <li class="treeview">
                <a href="#"><i class="fa fa-book"></i> <span>Reports</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#">Summary</a></li>
                  <li><a href="#">Details</a></li>
                  <li><a href="#">Response</a></li>
                  <li><a href="#">Assigned-compalted</a></li>
                </ul>
              </li>
              <li>
                  <a href="pages/mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-yellow">12</small>
                      <small class="label pull-right bg-green">16</small>
                      <small class="label pull-right bg-red">5</small>
                    </span>
                  </a>
              </li>
          @endrole
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @yield('title')
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content container-fluid">



  
        @yield('content')



        
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Company tag line here
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2018 <a href="#">Componen</a>.</strong> All rights reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>
  
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon Birthday</h4>
  
                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->
  
          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:;">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="pull-right-container">
                      <span class="label label-danger pull-right">70%</span>
                    </span>
                </h4>
  
                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->
  
        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>
  
            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>
  
              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  
  <!-- REQUIRED JS SCRIPTS -->
  
  <!-- jQuery 3 -->
  <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  <script src="{{asset('js/toastr.min.js')}}"></script>
  <script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    @endif
</script>
  </body>
  </html>