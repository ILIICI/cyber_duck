<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    @if (Auth::user()->is_admin == true)
        <a href="{{ route('company') }}" class="nav-link {{ Request::is('home/company') ? 'active' : '' }}">
            <i class="nav-icon fas fa-building"></i>
            <p>Company</p>
        </a>
        <a href="{{ route('employee') }}" class="nav-link {{ Request::is('home/employee') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>Employee</p>
        </a>
        <a href="{{ route('show-list') }}" class="nav-link {{ Request::is('home/list') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list"></i>
            <p>Show list</p>
        </a>
    @endif
</li>
