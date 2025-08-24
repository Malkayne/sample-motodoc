<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('home') }}" class="app-brand-link">
              <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" height="30">
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
            <li class="menu-item {{ request()->routeIs('user.dashboard*') ? 'active' : '' }}">
                <a href="{{ route('user.dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>Dashboard</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Main</span></li>
            <li class="menu-item {{ request()->routeIs('user.vehicles*') ? 'active' : '' }}">
                <a href="{{ route('user.vehicles') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-car"></i>
                    <div>My Vehicles</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('user.find_mechanics*', 'user.mechanic*', 'user.request_repair') ? 'active' : '' }}">
                <a href="{{ route('user.find_mechanics') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-search"></i>
                    <div>Find Mechanics</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('user.repair_requests*') ? 'active' : '' }}">
                <a href="{{ route('user.repair_requests') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-tools"></i>
                    <div>Repair Requests</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Records</span></li>
            <li class="menu-item {{ request()->routeIs('user.subscriptions*') ? 'active' : '' }}">
                <a href="{{ route('user.subscriptions') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-clipboard"></i>
                    <div>Subscriptions</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('user.invoice*') ? 'active' : '' }}">
                <a href="{{ route('user.invoices') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-file-invoice"></i>
                    <div>Invoices</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('user.maintenance_record*') ? 'active' : '' }}">
                <a href="{{ route('user.maintenance_records') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-history"></i>
                    <div>Maintenance Records</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">User</span></li>
            <li class="menu-item {{ request()->routeIs('user.profile*') ? 'active' : '' }}">
                <a href="{{ route('user.profile') }}" class="menu-link">
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