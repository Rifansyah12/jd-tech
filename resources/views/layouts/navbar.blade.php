<nav class="navbar" id="navbar">
    <div class="logo">
        <img src="{{ asset('images/logo/jdt.ico') }}" alt="JD Technology Logo" class="logo-img">
        <span class="logo-text">JD Technology</span>
    </div>

    <div class="nav-menu">
        <a href="{{ route('home') }}#home" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('services') }}#services" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
        <a href="{{ route('portfolio') }}#portfolio" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
        <a href="{{ route('about') }}#about" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('contact') }}#contact" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        
        @auth
            <a href="{{ route('dashboard') }}" class="nav-link nav-btn">
                <i class="fas fa-user-circle"></i> Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="nav-link nav-btn">
                <i class="fas fa-sign-in-alt"></i> Login
            </a>
        @endauth
    </div>
</nav>