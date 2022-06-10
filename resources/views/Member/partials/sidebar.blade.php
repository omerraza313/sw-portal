<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend_assets/dist/img/sw-logo.png')}}" alt="sw-logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white">Sharina World</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(Auth::user()->info()->exists())
          <img src="{{ asset('storage/media/'. Auth::user()->info->profile_img) }}" class="img-circle elevation-2" alt="User Image" style="width: 40px; height:40px;" />
          @else
          
                        <span style="font-size: 32px;background: #f2f1f1;padding: 3px 13px;border-radius: 101px;color: #989999;">{{ substr(Auth::user()->f_name, 0, 1)}}</span>
                      
          @endif

        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->username}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search Here" aria-label="Search">
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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('member.dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('member.chat')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Inbox
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-toolbox nav-icon"></i>
              <p>
                Service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('member.service')}}" class="nav-link">
                  <i class="fas fa-stream nav-icon"></i>
                  <p>Service Listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('member.service.add')}}" class="nav-link">
                  <i class="fas fa-plus-square nav-icon"></i>
                  <p>Add Service</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-eye"></i>
                <p>
                  Statistics
                </p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="{{ url('member/profile')}}" class="nav-link">
                <i class="nav-icon fas fa-eye"></i>
                <p>
                  My Details
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>