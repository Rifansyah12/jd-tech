@php
    $unreadCount = \App\Models\Message::where('is_read', false)->count();
@endphp

<aside class="sidebar" id="sidebar">

    <!-- Brand -->
    <div class="sidebar-brand">
        <div class="sidebar-brand-icon">JD</div>
        <span class="sidebar-brand-text">JD Technology</span>
    </div>

    <!-- Main Menu -->
    <div class="sidebar-section">
        <p class="sidebar-section-title">Menu Utama</p>
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-chart-pie"></i></span>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.messages.index') }}" class="{{ request()->routeIs('admin.messages*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-envelope"></i></span>
                    Pesan Masuk
                    @if($unreadCount > 0)
                        <span class="nav-badge">{{ $unreadCount }}</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('admin.portfolio.index') }}" class="{{ request()->routeIs('admin.portfolio*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-briefcase"></i></span>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-cogs"></i></span>
                    Layanan
                </a>
            </li>
            <li>
                <a href="{{ route('admin.team.index') }}" class="{{ request()->routeIs('admin.team*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-user-friends"></i></span>
                    Anggota Tim
                </a>
            </li>
        </ul>
    </div>

    <!-- System Menu -->
    <div class="sidebar-section">
        <p class="sidebar-section-title">Sistem</p>
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route('admin.settings.index') }}" class="{{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-sliders-h"></i></span>
                    Pengaturan
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" target="_blank">
                    <span class="nav-icon"><i class="fas fa-globe"></i></span>
                    Lihat Website
                </a>
            </li>
        </ul>
    </div>

    <!-- User Info -->
    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="sidebar-user-avatar">
                <i class="fas fa-user-shield"></i>
            </div>
            <div>
                <p class="sidebar-user-name">{{ Auth::user()->name ?? 'Admin' }}</p>
                <p class="sidebar-user-role">Administrator</p>
            </div>
        </div>
    </div>

</aside>