<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.instagram.com/sharma_coder/" target="_blank" class="brand-link">
      <img src="{{ asset('assets/images/logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sharma Coder</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/images/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
            <a href="{{ url('admin/admindashboard') }}" class="nav-link
            {{ Request::is('admin/admindashboard') ? 'active' : null }}
            ">
                <i class="nav-icon fa fa-desktop"></i>
                <p>
                Admin Dashboard
                </p>
            </a>
            </li>

            <li class="nav-item has-treeview
          {{ Request::is('admin/events') ? 'menu-open' : null }}
          {{ Request::is('admin/add-events') ? 'menu-open' : null }}
          ">
            <a href="#" class="nav-link
            {{ Request::is('admin/events') ? 'active' : null }}
            {{ Request::is('admin/add-events') ? 'active' : null }}
            ">
              <i class="nav-icon fa fa-windows"></i>
              <p>
                Events
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/events') }}" class="nav-link
                {{ Request::is('admin/events') ? 'active' : null }}
                ">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>All Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/add-events') }}" class="nav-link
                {{ Request::is('admin/add-events') ? 'active' : null }}
                ">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Events</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview
          {{ Request::is('admin/questions') ? 'menu-open' : null }}

          ">
            <a href="#" class="nav-link
            {{ Request::is('admin/questions') ? 'active' : null }}
            ">
              <i class="nav-icon fa fa-question"></i>
              <p>
                Questions
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/questions') }}" class="nav-link
                {{ Request::is('admin/questions') ? 'active' : null }}
                ">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>All Questions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/questions') }}" class="nav-link
                {{ Request::is('admin/add-questions') ? 'active' : null }}
                ">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Questions</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{ url('admin/total-submits') }}" class="nav-link
            {{ Request::is('admin/total-submits') ? 'active' : null }}
            ">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Results
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ url('admin/total-users') }}" class="nav-link
            {{ Request::is('admin/total-users') ? 'active' : null }}
            ">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Total Users
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
