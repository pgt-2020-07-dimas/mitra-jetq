<ul class="navbar-nav  sidebar sidebar-dark accordion bg-primary" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <div class="d-none d-xl-block">
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="container-fluid sidebar-brand-text mx-3">
                <img src="{{ asset('assets/img/logo-text.png') }}" alt="" class="img-fluid sidebar-logo">    
            </div>
          </a>
      </div>

      <!-- Divider -->
      <hr class="sidebar-divider mt-0">
    
       <!-- Heading -->
        <div class="sidebar-heading">
        Mitra
        </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{$page == 'Dashboard' ? 'active': '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
        </a>                   
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Transactions
      </div>

      <!-- REQUESTED -->
      <li class="nav-item {{$page == 'Requested' ? 'active': '' }}">
        <a class="nav-link" href="/transaction">
            <i class="fas fa-download"></i>
            <span>Requested</span>
        </a>                   
      </li>
      <!-- CONFIRMED -->
      <li class="nav-item {{$page == 'Confirmed' ? 'active': '' }}">
        <a class="nav-link" href="/transaction/confirmed">
            <i class="fas fa-check-square"></i>
            <span>Confirmed</span>
        </a>                   
      </li>
      <!-- PAID -->
      <li class="nav-item {{$page == 'Paid' ? 'active': '' }}">
        <a class="nav-link" href="/transaction/paid">
            <i class="fas fa-hands-helping"></i>
            <span>Paid</span>
        </a>                   
      </li>
      <!-- HISTORY -->
      <li class="nav-item {{$page == 'History' ? 'active': '' }}">
        <a class="nav-link" href="/transaction/history">
            <i class="fas fa-history"></i>
            <span>History</span>
        </a>                   
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Assets
      </div> 

      <!-- ADD -->
      <li class="nav-item {{$page == 'Add Asset' ? 'active': '' }}">
        <a class="nav-link" href="/asset">
            <i class="fas fa-plane-departure"></i>
            <span>Add Asset</span>
        </a>                   
      </li>
      <!-- ACTIVE -->
      <li class="nav-item {{$page == 'Active Asset' ? 'active': '' }}">
        <a class="nav-link" href="/asset/active">
            <i class="fas fa-plane"></i>
            <span>Active Assets</span>
        </a>                   
      </li>
      <!-- INACTIVE  -->
      <li class="nav-item {{$page == 'Inactive Asset' ? 'active': '' }}">
        <a class="nav-link" href="/asset/inactive">
            <i class="fas fa-plane-slash"></i>
            <span>Inactive Assets</span>
        </a>                   
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div> 

      <!-- MY PROFILE -->
      <li class="nav-item {{$page == 'Profile' ? 'active': '' }}">
        <a class="nav-link" href="/user">
            <i class="fas fa-fw fa-user mdi-24px"></i>
            <span>My Profile</span>
        </a>                   
      </li>
      <!-- EDIT PROFILE -->
      <li class="nav-item {{$page == 'Edit Profile' ? 'active': '' }}">
        <a class="nav-link" href="/user/edit">
            <i class="fas fa-fw fa-user-edit mdi-24px"></i>
            <span>Edit Profile</span>
        </a>                   
      </li>
      <!-- CHANGE PASSWORD  -->
      <li class="nav-item {{$page == 'Change Password' ? 'active': '' }}">
        <a class="nav-link" href="/user/changepassword">
            <i class="fas fa-fw fa-key mdi-24px"></i>
            <span>Change Password</span>
        </a>                   
      </li>>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Schedules
      </div>

      <!-- FLIGHT SCHEDULES -->
      <li class="nav-item {{$page == 'Flight Schedules' ? 'active': '' }}">
        <a class="nav-link" href="/schedule">
            <i class="fas fa-fw fa-calendar-alt mdi-24px"></i>
            <span>Flight Schedules</span>
        </a>                   
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- LOGOUT -->
      <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-sign-out-alt mdi-24px"></i>
            <span>Logout</span>
        </a>                   
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>