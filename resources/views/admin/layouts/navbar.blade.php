<nav class="navbar-top">
    <div class="navbar-left">
        <!-- Mobile toggle -->
        <button class="menu-toggle" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>

        <div>
            <p class="page-title">@yield('page-title', 'Dashboard')</p>
            <div class="breadcrumb">
                <i class="fas fa-home" style="font-size: 10px;"></i>
                Admin
                <i class="fas fa-chevron-right" style="font-size: 9px;"></i>
                <span>@yield('page-title', 'Dashboard')</span>
            </div>
        </div>
    </div>

    <div class="navbar-right">
        <!-- Notifikasi -->
        <a href="#" class="navbar-btn">
            <i class="fas fa-bell" style="font-size: 14px;"></i>
            <span class="badge">0</span>
        </a>

        <!-- Pengaturan -->
        <a href="#" class="navbar-btn">
            <i class="fas fa-cog" style="font-size: 14px;"></i>
        </a>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span class="d-none d-sm-inline">Logout</span>
            </button>
        </form>
    </div>
</nav>