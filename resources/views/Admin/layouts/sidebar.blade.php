<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{asset('Admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Pify</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item menu-open">
          <a href="{{ route ('admindashboard')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-question"></i>
            <p>
              Question
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route ('quest-admin') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-list"></i>
                List Question
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('quest-admin-pending') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-inbox"></i>
                Question Pending
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-comment"></i>
            <p>
              Answer
            </p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route ('answer-admin') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-list"></i>
                List Answer
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('answer-admin-pending')}}" class="nav-link">
                <i class="nav-icon fa-solid fa-inbox"></i>
                Answer Pending
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route ('tag-admin') }}" class="nav-link">
            <i class="nav-icon fa-solid fa-hashtag"></i>
            <p>
              Tag
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route ('user-admin') }} " class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route ('type-admin') }} " class="nav-link">
            <i class="nav-icon fa-brands fa-typo3"></i>
            <p>
              Type
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Community
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('communities-admin')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                List Community
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>