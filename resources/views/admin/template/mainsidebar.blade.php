<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('ecom/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Bagan Mart</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('ecom/dist/img/photo3.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info text-info">
      <a href="#" class="d-block"></a> 
      {{Auth::user()->name}}
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="{{route('master.home')}}" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>
              Home
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
        <a href="{{route('category.index')}}" class="nav-link">
            <i class="nav-icon fa fa-list"></i>
            <p>
              Category
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
        <a href="{{route('product.index')}}" class="nav-link">
            <i class="nav-icon fa fa-globe"></i>
            <p>
              Products
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" 
          onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            
            <i class="nav-icon fa fa-sign-out"></i>
            <p>
              Logout
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
                              
         </form>
        </li>

          
        
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-pie-chart"></i>
            <p>
              Charts
              <i class="right fa fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>ChartJS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/flot.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Flot</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/inline.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Inline</p>
              </a>
            </li>
          </ul>
        </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>