@php
    $unreadCount = \App\Models\Message::where('is_read', false)->count();
@endphp

<aside class="sidebar" id="sidebar">

    <!-- Brand -->
    <div class="sidebar-brand">
        <img src="{{ asset('images/logo/jdt.ico') }}" alt="JD Technology" style="width:52px;height:52px;object-fit:contain;flex-shrink:0;">
        <span class="sidebar-brand-text">Jannah Digital Technology</span>
    </div>

    <!-- Main Menu -->
    <div class="sidebar-section">
        <p class="sidebar-section-title">Menu Utama</p>
        <ul class="sidebar-nav">
            <li>
                <a href="{{ route('admin.dashboard') }}" data-title="Dashboard" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-chart-pie"></i></span>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.messages.index') }}" data-title="Pesan Masuk" class="{{ request()->routeIs('admin.messages*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-envelope"></i></span>
                    Pesan Masuk
                    @if($unreadCount > 0)
                        <span class="nav-badge">{{ $unreadCount }}</span>
                    @endif
                </a>
            </li>
            <li>
                <a href="{{ route('admin.portfolio.index') }}" data-title="Portfolio" class="{{ request()->routeIs('admin.portfolio*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-briefcase"></i></span>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="{{ route('admin.services.index') }}" data-title="Layanan" class="{{ request()->routeIs('admin.services*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-cogs"></i></span>
                    Layanan
                </a>
            </li>
            <li>
                <a href="{{ route('admin.team.index') }}" data-title="Anggota Tim" class="{{ request()->routeIs('admin.team*') ? 'active' : '' }}">
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
                <a href="{{ route('admin.settings.index') }}" data-title="Pengaturan" class="{{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                    <span class="nav-icon"><i class="fas fa-sliders-h"></i></span>
                    Pengaturan
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" data-title="Lihat Website" target="_blank">
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