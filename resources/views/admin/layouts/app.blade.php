<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - JD Technology</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --sidebar-width: 260px;
            --navbar-height: 65px;
            --bg-dark: #0a0a0a;
            --bg-card: rgba(255,255,255,0.03);
            --border-color: rgba(0,242,254,0.12);
            --cyan: #00f2fe;
            --blue: #4facfe;
            --text-primary: #ffffff;
            --text-secondary: rgba(255,255,255,0.5);
            --sidebar-bg: #0d0d0d;
        }


        /* Shared admin page styles — tambahkan ke <style> di layouts/app.blade.php */
.page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 15px; }
.page-header h2 { color: white; font-size: 1.3rem; font-weight: 700; }
.btn-cyan { display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; background: linear-gradient(135deg, #00f2fe, #4facfe); color: #0a0a0a; font-weight: 600; font-size: 0.88rem; border-radius: 10px; text-decoration: none; border: none; cursor: pointer; transition: all 0.2s; }
.btn-cyan:hover { transform: translateY(-2px); box-shadow: 0 0 20px rgba(0,242,254,0.3); }
.btn-outline { display: inline-flex; align-items: center; gap: 8px; padding: 9px 18px; background: transparent; color: rgba(255,255,255,0.7); font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.15); border-radius: 10px; text-decoration: none; cursor: pointer; transition: all 0.2s; }
.btn-outline:hover { border-color: rgba(0,242,254,0.4); color: #00f2fe; }
.btn-danger { display: inline-flex; align-items: center; gap: 6px; padding: 7px 14px; background: rgba(255,100,100,0.1); border: 1px solid rgba(255,100,100,0.25); color: #ff6b6b; font-size: 0.82rem; border-radius: 8px; cursor: pointer; transition: all 0.2s; text-decoration: none; }
.btn-danger:hover { background: rgba(255,100,100,0.2); }
.card { background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px; }
.table-wrap { overflow-x: auto; }
table { width: 100%; border-collapse: collapse; }
thead th { padding: 12px 16px; text-align: left; font-size: 0.78rem; font-weight: 600; color: rgba(255,255,255,0.4); text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1px solid rgba(0,242,254,0.08); }
tbody td { padding: 14px 16px; font-size: 0.88rem; color: rgba(255,255,255,0.8); border-bottom: 1px solid rgba(255,255,255,0.04); }
tbody tr:hover td { background: rgba(0,242,254,0.02); }
.badge-success { background: rgba(0,242,254,0.1); color: #00f2fe; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600; }
.badge-warning { background: rgba(255,200,0,0.1); color: #ffc800; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600; }
.badge-danger { background: rgba(255,100,100,0.1); color: #ff6b6b; padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 600; }
.form-group { margin-bottom: 20px; }
.form-label { display: block; color: rgba(255,255,255,0.7); font-size: 0.88rem; font-weight: 500; margin-bottom: 8px; }
.form-control { width: 100%; padding: 12px 16px; background: rgba(255,255,255,0.04); border: 1px solid rgba(0,242,254,0.15); border-radius: 10px; color: white; font-size: 0.9rem; transition: all 0.2s; font-family: inherit; }
.form-control:focus { outline: none; border-color: #00f2fe; background: rgba(0,242,254,0.04); box-shadow: 0 0 15px rgba(0,242,254,0.1); }
.form-control::placeholder { color: rgba(255,255,255,0.25); }
select.form-control option { background: #1a1a1a; color: white; }
.alert-success { background: rgba(0,242,254,0.08); border: 1px solid rgba(0,242,254,0.25); border-radius: 12px; padding: 14px 18px; color: #00f2fe; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; font-size: 0.9rem; }
.alert-error { background: rgba(255,100,100,0.08); border: 1px solid rgba(255,100,100,0.25); border-radius: 12px; padding: 14px 18px; color: #ff6b6b; margin-bottom: 20px; font-size: 0.9rem; }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-dark);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ===== LAYOUT WRAPPER ===== */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            border-right: 1px solid var(--border-color);
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
            overflow-y: auto;
        }

        .sidebar::-webkit-scrollbar { width: 4px; }
        .sidebar::-webkit-scrollbar-track { background: transparent; }
        .sidebar::-webkit-scrollbar-thumb { background: rgba(0,242,254,0.2); border-radius: 4px; }

        .sidebar-brand {
            padding: 20px 25px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: var(--navbar-height);
        }

        .sidebar-brand-icon {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, var(--cyan), var(--blue));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 700;
            color: #0a0a0a;
            flex-shrink: 0;
        }

        .sidebar-brand-text {
            font-size: 1rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--cyan), var(--blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sidebar-section {
            padding: 20px 15px 10px;
        }

        .sidebar-section-title {
            font-size: 0.7rem;
            font-weight: 600;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 0 10px;
            margin-bottom: 8px;
        }

        .sidebar-nav {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            border-radius: 10px;
            text-decoration: none;
            color: var(--text-secondary);
            font-size: 0.88rem;
            font-weight: 500;
            transition: all 0.2s ease;
            position: relative;
        }

        .sidebar-nav a:hover {
            background: rgba(0,242,254,0.06);
            color: var(--text-primary);
        }

        .sidebar-nav a.active {
            background: rgba(0,242,254,0.1);
            color: var(--cyan);
            border: 1px solid rgba(0,242,254,0.15);
        }

        .sidebar-nav a .nav-icon {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: rgba(255,255,255,0.04);
            font-size: 13px;
            flex-shrink: 0;
        }

        .sidebar-nav a.active .nav-icon {
            background: rgba(0,242,254,0.15);
            color: var(--cyan);
        }

        .sidebar-nav a .nav-badge {
            margin-left: auto;
            background: var(--cyan);
            color: #0a0a0a;
            font-size: 0.68rem;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 20px;
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 15px;
            border-top: 1px solid var(--border-color);
        }

        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-radius: 12px;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
        }

        .sidebar-user-avatar {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--cyan), var(--blue));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #0a0a0a;
            flex-shrink: 0;
        }

        .sidebar-user-name {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .sidebar-user-role {
            font-size: 0.72rem;
            color: var(--cyan);
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            margin-left: var(--sidebar-width);
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ===== NAVBAR TOP ===== */
        .navbar-top {
            height: var(--navbar-height);
            background: rgba(13,13,13,0.95);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            position: sticky;
            top: 0;
            z-index: 999;
            backdrop-filter: blur(10px);
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--text-secondary);
            font-size: 18px;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .menu-toggle:hover { background: var(--bg-card); color: var(--text-primary); }

        .page-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.78rem;
            color: var(--text-secondary);
        }

        .breadcrumb span { color: var(--cyan); }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-btn {
            width: 38px;
            height: 38px;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.2s;
            position: relative;
            text-decoration: none;
        }

        .navbar-btn:hover { border-color: var(--cyan); color: var(--cyan); }

        .navbar-btn .badge {
            position: absolute;
            top: -4px;
            right: -4px;
            width: 16px;
            height: 16px;
            background: var(--cyan);
            color: #0a0a0a;
            font-size: 0.6rem;
            font-weight: 700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 9px 18px;
            background: rgba(255,100,100,0.08);
            border: 1px solid rgba(255,100,100,0.2);
            border-radius: 10px;
            color: #ff6b6b;
            font-size: 0.83rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .logout-btn:hover { background: rgba(255,100,100,0.15); border-color: rgba(255,100,100,0.4); }

        /* ===== PAGE CONTENT ===== */
        .page-content {
            flex: 1;
            padding: 30px;
            background: var(--bg-dark);
        }

        /* ===== OVERLAY (mobile) ===== */
        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            z-index: 999;
            backdrop-filter: blur(2px);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.open {
                transform: translateX(0);
            }
            .sidebar-overlay.show {
                display: block;
            }
            .main-content {
                margin-left: 0;
            }
            .menu-toggle {
                display: flex;
            }
            .page-content {
                padding: 20px 15px;
            }
            .navbar-top {
                padding: 0 15px;
            }
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="admin-wrapper">

    <!-- Sidebar Overlay (mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <!-- Main Content -->
    <div class="main-content">

        <!-- Navbar Top -->
        @include('admin.layouts.navbar')

        <!-- Page Content -->
        <div class="page-content">
            @yield('content')
        </div>

    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        sidebar.classList.toggle('open');
        overlay.classList.toggle('show');
    }
</script>

@stack('scripts')
</body>
</html>