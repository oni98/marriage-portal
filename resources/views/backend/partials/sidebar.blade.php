<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">
                {{-- {{ @config('app.name') }} --}}
                <img src="{{ asset('assets/Marriage Media Logo.webp') }}" alt="logo" width="60%" class="">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/Marriage Media Logo.webp') }}" alt="logo" width="50%" class="">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>
            @role('admin')
                {{-- <li class="{{ Request::routeIs('roles*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-user-shield"></i> <span>Roles
                            Management</span></a>
                </li> --}}
                <li class="{{ Request::routeIs('users*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-users-cog"></i> <span>Users
                            Management</span></a>
                </li>

                <li class="menu-header">Application Details</li>
                {{-- <li class="nav-item dropdown {{ Request::is('layout') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Menu</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('layout-default-layout') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Sub Menu 1</a>
                    </li>
                    <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Sub Menu 2</a>
                    </li>
                </ul>
            </li> --}}
                <li class="{{ Request::routeIs('applications*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('applications') }}"><i class="fas fa-list"></i>
                        <span>Clients</span></a>
                </li>
                <li class="{{ Request::routeIs('packages*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('packages.index') }}"><i class="fas fa-gift"></i>
                        <span>Packages</span></a>
                </li>
            @endrole
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a class="btn btn-primary btn-lg btn-block btn-icon-split" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out"></i> Sign Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </aside>
</div>
