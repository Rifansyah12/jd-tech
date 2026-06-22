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
        <!-- Notifikasi Pesan -->
        @php $navUnread = \App\Models\Message::where('is_read', false)->count(); @endphp
        <a href="{{ route('admin.messages.index') }}" class="navbar-btn" title="Pesan masuk">
            <i class="fas fa-bell" style="font-size: 14px;"></i>
            @if($navUnread > 0)
                <span class="badge">{{ $navUnread }}</span>
            @endif
        </a>

        <!-- Pengaturan -->
        <a href="{{ route('admin.settings.index') }}" class="navbar-btn" title="Pengaturan">
            <i class="fas fa-cog" style="font-size: 14px;"></i>
        </a>

        <!-- Logout -->
        <form method="POST" action="{{ route('admin.logout') }}" style="margin: 0;">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span class="d-none d-sm-inline">Logout</span>
            </button>
        </form>
    </div>
</nav>