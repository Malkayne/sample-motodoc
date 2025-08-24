<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('home') }}" class="app-brand-link">
              <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" height="40">
              <span class="app-brand-text demo menu-text fw-bold">MotoDoc</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Home</span></li>
            <li class="menu-item {{ request()->routeIs('mechanic.dashboard*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>Dashboard</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Main</span></li>
            <li class="menu-item {{ request()->routeIs('mechanic.repair_requests*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.repair_requests') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-tools"></i>
                    <div>Repair Requests</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('mechanic.services*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.services') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-briefcase"></i>
                    <div>My Services</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Records</span></li>
            <li class="menu-item {{ request()->routeIs('mechanic.subscriptions*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.subscriptions') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-clipboard"></i>
                    <div>Subscriptions</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('mechanic.invoices*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.invoices') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-file-invoice"></i>
                    <div>Invoices</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('mechanic.reviews*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.reviews') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-star"></i>
                    <div>Reviews</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('mechanic.customers*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.customers') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div>Customers</div>
                </a>
            </li>
            <li class="menu-header small text-uppercase"><span class="menu-header-text">User</span></li>
            <li class="menu-item {{ request()->routeIs('mechanic.profile*') ? 'active' : '' }}">
                <a href="{{ route('mechanic.profile') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-user"></i>
                    <div>Profile</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('logout') }}" class="menu-link text-danger">
                    <i class="menu-icon tf-icons ti ti-logout"></i>
                    <div>Logout</div>
                </a>
            </li>
          </ul>
        </aside>