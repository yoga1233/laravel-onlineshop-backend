<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('modules-calendar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Dashboard General</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>User</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('modules-calendar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('users.index') }}">User Management</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('modules-calendar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('modules-calendar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('product.index') }}">Product</a>
                    </li>
                </ul>
            </li>

    </aside>
</div>
