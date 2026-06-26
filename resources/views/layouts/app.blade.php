<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/logo/jdt.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo/jdt.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/jdt.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo/jdt.png') }}">

    <meta name="description" content="@yield('meta_description', 'Jannah Digital Teknologi - Jasa pembuatan website, aplikasi mobile, dan bot Telegram profesional di Bandung. Terpercaya, cepat, bergaransi.')">
    <meta name="keywords" content="@yield('meta_keywords', 'jasa pembuatan website, jasa pembuatan aplikasi, jasa bot telegram, web developer Bandung, jasa pembuatan web murah, Jannah Digital Teknologi')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Jannah Digital Teknologi">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title" content="@yield('title', 'Jannah Digital Teknologi - Jasa Web, Aplikasi & Bot Telegram Bandung')">
    <meta property="og:description" content="@yield('meta_description', 'Jannah Digital Teknologi - Jasa pembuatan website, aplikasi mobile, dan bot Telegram profesional di Bandung.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Jannah Digital Teknologi">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Jannah Digital Teknologi",
        "alternateName": "JD Technology",
        "url": "https://jannahdigitalteknologi.site",
        "description": "Jasa pembuatan website, aplikasi mobile, dan bot Telegram profesional di Bandung, Jawa Barat.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Bandung",
            "addressRegion": "Jawa Barat",
            "addressCountry": "ID"
        },
        "areaServed": ["Bandung", "Jawa Barat", "Jakarta", "Indonesia"],
        "serviceType": ["Jasa Pembuatan Website", "Jasa Pembuatan Aplikasi", "Jasa Bot Telegram", "Web Developer", "UI/UX Design"],
        "knowsAbout": ["Laravel", "Flutter", "React Native", "WordPress", "CodeIgniter", "Telegram Bot", "Next.js"]
    }
    </script>

    <title>@yield('title', 'JD Technology - Digital Innovation')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    @stack('styles')

    <style>
        /* ═══════════════════════════════════════════
           DESIGN SYSTEM — JD Technology
           Theme: Pure White — Apple / Linear Style
           ═══════════════════════════════════════════ */
        :root {
            --canvas:    #FFFFFF;
            --s1:        #FAFAFA;
            --s2:        #F5F5F7;
            --s3:        #EBEBEB;
            --b-subtle:  rgba(0,0,0,0.05);
            --b-normal:  rgba(0,0,0,0.10);
            --b-strong:  rgba(0,0,0,0.22);
            --accent:    #6366F1;
            --accent2:   #8B5CF6;
            --accent3:   #0EA5E9;
            --glow:      rgba(99,102,241,0.16);
            --t1:        #0A0A0A;
            --t2:        #525252;
            --t3:        #A3A3A3;
            --font-d:    'Space Grotesk', 'Inter', sans-serif;
            --font-b:    'Inter', sans-serif;
            --r-card:    16px;
            --r-btn:     100px;
            --r-icon:    12px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            font-family: var(--font-b);
            background: var(--canvas);
            color: var(--t1);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* ── Noise texture overlay (very subtle) ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
            opacity: 0.4;
        }

        /* Subtle radial light in corners */
        #particles-js {
            position: fixed;
            width: 100%; height: 100%;
            top: 0; left: 0;
            z-index: -1;
            background:
                radial-gradient(ellipse at 10% 20%, rgba(99,102,241,0.04) 0%, transparent 50%),
                radial-gradient(ellipse at 90% 80%, rgba(139,92,246,0.03) 0%, transparent 50%),
                #FFFFFF;
        }

        /* ══════════════════════ SCROLL PROGRESS ══════════════════════ */
        .scroll-progress {
            position: fixed;
            top: 0; left: 0;
            height: 2px;
            width: 0%;
            background: linear-gradient(90deg, #6366F1, #8B5CF6, #0EA5E9);
            z-index: 9999;
            transition: width 0.1s linear;
        }

        /* ══════════════════════ NAVBAR ══════════════════════ */
        .navbar {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            padding: 0 5%;
            height: 72px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            background: rgba(255,255,255,0.88);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(0,0,0,0.06);
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255,255,255,0.96);
            border-bottom-color: rgba(0,0,0,0.10);
            box-shadow: 0 1px 20px rgba(0,0,0,0.06);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-box {
            width: 32px; height: 32px;
            background: linear-gradient(135deg, #6366F1, #8B5CF6);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-family: var(--font-d);
            font-size: 13px; font-weight: 700; color: #fff;
        }

        .logo-img { width: 52px; height: 52px; object-fit: contain; }

        .logo-text {
            font-family: var(--font-d);
            font-size: 18px;
            font-weight: 700;
            color: var(--t1);
            letter-spacing: -0.5px;
        }

        .nav-menu {
            display: flex;
            gap: 2px;
            align-items: center;
        }

        .nav-link {
            color: var(--t2);
            text-decoration: none;
            font-family: var(--font-b);
            font-weight: 500;
            font-size: 14px;
            padding: 6px 14px;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .nav-link::before { display: none; }

        .nav-link:hover,
        .nav-link.active {
            color: var(--t1);
            background: var(--s2);
        }

        .nav-btn {
            background: var(--t1) !important;
            color: #fff !important;
            padding: 8px 20px;
            border-radius: var(--r-btn);
            font-family: var(--font-d);
            font-weight: 600;
            font-size: 14px;
            transition: all 0.25s ease;
            margin-left: 10px;
            border: 1.5px solid var(--t1);
        }

        .nav-btn:hover {
            background: var(--accent) !important;
            border-color: var(--accent) !important;
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(99,102,241,0.3);
        }

        .nav-btn::before { display: none; }

        /* Mobile menu toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 4px;
        }
        .menu-toggle span {
            display: block;
            width: 22px; height: 2px;
            background: var(--t1);
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        .menu-toggle.active span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
        .menu-toggle.active span:nth-child(2) { opacity: 0; }
        .menu-toggle.active span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }

        @media (max-width: 768px) {
            .menu-toggle { display: flex; }
            .nav-menu {
                position: fixed;
                top: 72px; left: 0; right: 0;
                background: rgba(255,255,255,0.98);
                backdrop-filter: blur(20px);
                border-bottom: 1px solid rgba(0,0,0,0.08);
                flex-direction: column;
                padding: 16px 5% 24px;
                gap: 4px;
                transform: translateY(calc(-100% - 80px));
                visibility: hidden;
                transition: transform 0.35s cubic-bezier(0.16,1,0.3,1),
                            visibility 0s linear 0.35s;
                box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            }
            .nav-menu.active {
                transform: translateY(0);
                visibility: visible;
                transition: transform 0.35s cubic-bezier(0.16,1,0.3,1),
                            visibility 0s linear 0s;
            }
            .nav-link { width: 100%; padding: 10px 16px; }
            .nav-btn { width: 100%; text-align: center; margin-left: 0; }
        }

        /* Auth Links */
        .auth-links {
            position: fixed;
            top: 16px; right: 5%;
            z-index: 101;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            padding: 6px 16px;
            border-radius: 40px;
            border: 1px solid rgba(0,0,0,0.08);
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .auth-links a {
            color: var(--t2);
            text-decoration: none;
            margin: 0 8px;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.2s ease;
        }
        .auth-links a:hover { color: var(--accent); }
        .auth-links .separator { color: var(--t3); }

        /* Main Container */
        .main-container { position: relative; z-index: 1; min-height: 100vh; }
        .page-content { padding-top: 72px; }

        /* ══════════════════════ GLOBAL BUTTONS ══════════════════════ */
        .btn-primary, .btn-submit {
            background: var(--t1);
            color: #fff;
            padding: 14px 32px;
            border-radius: var(--r-btn);
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            border: 1.5px solid var(--t1);
            cursor: pointer;
            font-family: var(--font-d);
            display: inline-flex; align-items: center; gap: 8px;
            transition: all 0.25s ease;
        }
        .btn-primary:hover, .btn-submit:hover {
            background: var(--accent);
            border-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(99,102,241,0.25);
        }

        /* ══════════════════════ JD DESIGN SYSTEM ══════════════════════ */

        /* Eyebrow badge */
        .jd-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 5px 14px;
            background: rgba(99,102,241,0.08);
            border: 1px solid rgba(99,102,241,0.20);
            border-radius: 100px;
            font-size: 11px; font-weight: 600;
            color: var(--accent);
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-family: var(--font-d);
            margin-bottom: 20px;
        }
        .jd-eyebrow-dot {
            width: 6px; height: 6px;
            border-radius: 50%;
            background: var(--accent);
            animation: dot-pulse 2s ease-in-out infinite;
        }
        @keyframes dot-pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(0.75); }
        }

        /* Sections */
        .jd-section {
            padding: 100px 5%;
            position: relative;
        }
        .jd-section-alt {
            background: var(--s1);
            border-top: 1px solid var(--b-subtle);
            border-bottom: 1px solid var(--b-subtle);
        }

        .jd-section-head {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 64px;
        }
        .jd-section-title {
            font-family: var(--font-d);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            color: var(--t1);
            letter-spacing: -1.5px;
            line-height: 1.1;
            margin-bottom: 16px;
        }
        .jd-section-title span {
            color: var(--accent);
        }
        .jd-section-desc {
            font-size: 1.05rem;
            color: var(--t2);
            line-height: 1.7;
        }

        /* Cards */
        .jd-card {
            background: #fff;
            border: 1px solid var(--b-subtle);
            border-radius: var(--r-card);
            padding: 32px;
            transition: all 0.3s ease;
            position: relative;
        }
        .jd-card:hover {
            border-color: var(--b-normal);
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            transform: translateY(-4px);
        }
        .jd-card-icon {
            width: 48px; height: 48px;
            background: rgba(99,102,241,0.08);
            border-radius: var(--r-icon);
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
            color: var(--accent);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .jd-card:hover .jd-card-icon {
            background: var(--accent);
            color: #fff;
        }
        .jd-card-title {
            font-family: var(--font-d);
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--t1);
            margin-bottom: 10px;
            letter-spacing: -0.3px;
        }
        .jd-card-desc {
            font-size: 0.9rem;
            color: var(--t2);
            line-height: 1.7;
            margin-bottom: 20px;
        }
        .jd-card-link {
            display: inline-flex; align-items: center; gap: 6px;
            color: var(--accent);
            font-size: 0.875rem;
            font-weight: 600;
            text-decoration: none;
            transition: gap 0.2s ease;
        }
        .jd-card-link:hover { gap: 10px; }

        /* Services Grid */
        .jd-services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Section CTA */
        .jd-section-cta {
            text-align: center;
            margin-top: 48px;
        }

        /* Buttons — page level */
        .jd-btn-primary {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 13px 28px;
            background: var(--t1);
            color: #fff;
            font-family: var(--font-d);
            font-weight: 600;
            font-size: 0.9rem;
            border-radius: var(--r-btn);
            text-decoration: none;
            border: 1.5px solid var(--t1);
            cursor: pointer;
            transition: all 0.25s ease;
        }
        .jd-btn-primary:hover {
            background: var(--accent);
            border-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(99,102,241,0.25);
        }

        .jd-btn-ghost {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 13px 28px;
            background: transparent;
            color: var(--t1);
            font-family: var(--font-d);
            font-weight: 600;
            font-size: 0.9rem;
            border-radius: var(--r-btn);
            text-decoration: none;
            border: 1.5px solid var(--b-normal);
            transition: all 0.25s ease;
        }
        .jd-btn-ghost:hover {
            background: var(--s2);
            border-color: var(--b-strong);
        }

        .jd-btn-outline {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 28px;
            background: transparent;
            color: var(--accent);
            font-family: var(--font-d);
            font-weight: 600;
            font-size: 0.9rem;
            border-radius: var(--r-btn);
            text-decoration: none;
            border: 1.5px solid rgba(99,102,241,0.35);
            transition: all 0.25s ease;
        }
        .jd-btn-outline:hover {
            background: rgba(99,102,241,0.06);
            border-color: var(--accent);
        }

        /* Portfolio Grid */
        .jd-portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .jd-portfolio-item {
            border-radius: var(--r-card);
            overflow: hidden;
            position: relative;
            cursor: pointer;
            border: 1px solid var(--b-subtle);
            background: var(--s1);
        }
        .jd-portfolio-img {
            height: 220px;
            background: linear-gradient(135deg, var(--s2), var(--s3));
            display: flex; align-items: center; justify-content: center;
            transition: transform 0.4s ease;
            position: relative; overflow: hidden;
        }

        /* iframe screenshot preview */
        .jd-port-preview {
            position: absolute; inset: 0;
            overflow: hidden;
        }
        .jd-port-preview iframe {
            position: absolute; left: 0; top: 0;
            width: calc(100% / 0.28);
            height: calc(100% / 0.28);
            border: none; pointer-events: none;
            transform: scale(0.28);
            transform-origin: top left;
            display: block;
        }
        .jd-portfolio-item:hover .jd-portfolio-img {
            transform: scale(1.03);
        }
        .jd-portfolio-placeholder {
            font-size: 40px;
            color: var(--t3);
        }
        .jd-portfolio-overlay {
            padding: 20px 24px;
            background: #fff;
            border-top: 1px solid var(--b-subtle);
            display: flex; align-items: center; gap: 12px;
        }
        .jd-portfolio-category {
            font-size: 11px; font-weight: 600;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            flex: 1;
        }
        .jd-portfolio-title {
            font-family: var(--font-d);
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--t1);
            flex: 2;
        }
        .jd-portfolio-arrow {
            width: 32px; height: 32px;
            border-radius: 50%;
            background: var(--s2);
            display: flex; align-items: center; justify-content: center;
            color: var(--t2);
            font-size: 13px;
            transition: all 0.25s ease;
        }
        .jd-portfolio-item:hover .jd-portfolio-arrow {
            background: var(--accent);
            color: #fff;
        }

        /* Bento Grid */
        .jd-bento-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 16px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .jd-bento-card {
            background: #fff;
            border: 1px solid var(--b-subtle);
            border-radius: var(--r-card);
            padding: 32px;
            transition: all 0.3s ease;
        }
        .jd-bento-card:hover {
            border-color: rgba(99,102,241,0.2);
            box-shadow: 0 8px 32px rgba(0,0,0,0.07);
        }
        .jd-bento-featured {
            grid-row: span 2;
            background: var(--t1);
            border-color: transparent;
        }
        .jd-bento-featured:hover {
            background: #1a1a2e;
            box-shadow: 0 16px 48px rgba(0,0,0,0.2);
        }
        .jd-bento-featured .jd-bento-title,
        .jd-bento-featured .jd-bento-desc { color: #fff; }
        .jd-bento-featured .jd-bento-desc { color: rgba(255,255,255,0.6); }
        .jd-bento-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            background: rgba(99,102,241,0.1);
            display: flex; align-items: center; justify-content: center;
            font-size: 18px; color: var(--accent);
            margin-bottom: 20px;
        }
        .jd-bento-featured .jd-bento-icon {
            background: rgba(255,255,255,0.1);
            color: #fff;
        }
        .jd-bento-title {
            font-family: var(--font-d);
            font-size: 1.1rem; font-weight: 700;
            color: var(--t1);
            margin-bottom: 10px;
            letter-spacing: -0.3px;
        }
        .jd-bento-desc {
            font-size: 0.88rem;
            color: var(--t2);
            line-height: 1.7;
        }
        .jd-bento-glow { display: none; }

        @media (max-width: 1024px) { .jd-bento-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 640px) { .jd-bento-grid { grid-template-columns: 1fr; } .jd-bento-featured { grid-row: auto; } }

        /* Hero */
        .jd-hero {
            position: relative;
            min-height: calc(100vh - 72px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 80px 5% 60px;
            overflow: hidden;
        }
        .jd-hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }
        @media (max-width: 900px) { .jd-hero-grid { grid-template-columns: 1fr; } }

        .jd-hero-copy { position: relative; z-index: 2; }

        .jd-hero-h1 {
            font-family: var(--font-d);
            font-size: clamp(2.8rem, 5.5vw, 4.8rem);
            font-weight: 700;
            letter-spacing: -3px;
            line-height: 1.06;
            color: var(--t1);
            margin-bottom: 24px;
        }
        .jd-hero-typed { display: block; }
        .jd-hero-gradient {
            display: block;
            color: var(--accent);
        }
        .jd-hero-sub {
            font-size: 1.05rem;
            color: var(--t2);
            line-height: 1.75;
            margin-bottom: 36px;
            max-width: 480px;
        }
        .jd-hero-btns { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 48px; }

        .jd-hero-metrics {
            display: flex;
            align-items: center;
            gap: 0;
            padding: 20px 24px;
            background: var(--s1);
            border: 1px solid var(--b-subtle);
            border-radius: 14px;
            max-width: 440px;
        }
        .jd-metric { flex: 1; text-align: center; }
        .jd-metric-val {
            font-family: var(--font-d);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--t1);
            display: block;
            line-height: 1;
        }
        .jd-metric-lbl {
            font-size: 0.72rem;
            color: var(--t3);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-top: 4px;
            display: block;
        }
        .jd-metric-sep {
            width: 1px; height: 32px;
            background: var(--b-subtle);
        }

        /* Hero visual side */
        .jd-hero-visual {
            position: relative;
            display: flex; align-items: center; justify-content: center;
        }
        .jd-hero-card {
            background: #fff;
            border: 1px solid var(--b-subtle);
            border-radius: 24px;
            padding: 28px;
            width: 100%; max-width: 380px;
            box-shadow: 0 8px 40px rgba(0,0,0,0.08), 0 2px 8px rgba(0,0,0,0.04);
            position: relative;
        }
        .jd-hero-card-eyebrow {
            font-size: 11px; font-weight: 600;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 16px;
        }
        .jd-service-row {
            display: flex; align-items: center; gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid var(--b-subtle);
        }
        .jd-service-row:last-child { border-bottom: none; }
        .jd-service-icon-wrap {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: rgba(99,102,241,0.08);
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; color: var(--accent);
            flex-shrink: 0;
        }
        .jd-service-name {
            font-family: var(--font-d);
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--t1);
            flex: 1;
        }
        .jd-service-tag {
            font-size: 11px;
            padding: 3px 10px;
            border-radius: 100px;
            background: rgba(99,102,241,0.08);
            color: var(--accent);
            font-weight: 600;
        }
        .jd-float-badge {
            position: absolute;
            background: #fff;
            border: 1px solid var(--b-subtle);
            border-radius: 100px;
            padding: 8px 16px;
            font-size: 12px;
            font-weight: 600;
            color: var(--t1);
            display: flex; align-items: center; gap: 6px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            white-space: nowrap;
            animation: badge-float 3s ease-in-out infinite;
            z-index: 2;
        }
        .jd-hero-card { z-index: 1; }
        .jd-float-badge i { color: var(--accent); }
        @keyframes badge-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }

        /* Tech Strip */
        .jd-tech-strip {
            padding: 28px 5% 24px;
            border-top: 1px solid var(--b-subtle);
            border-bottom: 1px solid var(--b-subtle);
            background: var(--s1);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
            width: 100%;
            overflow: hidden;
        }
        .jd-tech-strip-header {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .jd-tech-strip-header::before,
        .jd-tech-strip-header::after {
            content: '';
            display: block;
            width: 32px;
            height: 1px;
            background: var(--b-normal);
        }
        .jd-tech-label {
            font-size: 11px; font-weight: 600;
            color: var(--t3);
            text-transform: uppercase; letter-spacing: 1.5px;
            white-space: nowrap;
        }
        .jd-tech-logos-wrap {
            width: 100%;
            overflow: hidden;
            -webkit-mask-image: linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%);
            mask-image: linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%);
        }
        .jd-tech-logos {
            display: flex; gap: 40px;
            animation: tech-scroll 20s linear infinite;
            flex-shrink: 0;
        }
        @keyframes tech-scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .jd-tech-item {
            display: flex; align-items: center; gap: 8px;
            font-family: var(--font-d);
            font-size: 13px; font-weight: 600;
            color: var(--t3);
            white-space: nowrap;
            transition: color 0.2s ease;
        }
        .jd-tech-item:hover { color: var(--t1); }
        .jd-tech-item i { font-size: 16px; }

        /* CTA Section */
        .jd-cta-section { padding: 100px 5%; }
        .jd-cta-card {
            max-width: 1200px;
            margin: 0 auto;
            background: var(--t1);
            border-radius: 24px;
            padding: 64px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: start;
            position: relative;
            overflow: hidden;
        }
        .jd-cta-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
        }
        .jd-cta-glow { display: none; }

        .jd-cta-title {
            font-family: var(--font-d);
            font-size: clamp(1.8rem, 3vw, 2.8rem);
            font-weight: 700;
            color: #fff;
            letter-spacing: -1.5px;
            line-height: 1.1;
            margin-bottom: 16px;
        }
        .jd-cta-title span { color: var(--accent2); }
        .jd-cta-desc {
            font-size: 0.95rem;
            color: rgba(255,255,255,0.55);
            line-height: 1.7;
            margin-bottom: 32px;
        }
        .jd-cta-inner .jd-eyebrow {
            background: rgba(255,255,255,0.08);
            border-color: rgba(255,255,255,0.12);
            color: rgba(255,255,255,0.7);
        }
        .jd-cta-form { display: flex; flex-direction: column; gap: 12px; }
        .jd-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .jd-input {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 10px;
            padding: 12px 16px;
            color: #fff;
            font-family: var(--font-b);
            font-size: 0.9rem;
            width: 100%;
            transition: border-color 0.25s ease;
            outline: none;
        }
        .jd-input::placeholder { color: rgba(255,255,255,0.35); }
        .jd-input:focus { border-color: rgba(255,255,255,0.35); }
        .jd-textarea { min-height: 100px; resize: vertical; }
        .jd-cta-inner .jd-btn-primary {
            background: #fff;
            color: var(--t1);
            border-color: #fff;
            width: 100%; justify-content: center;
        }
        .jd-cta-inner .jd-btn-primary:hover {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff;
            box-shadow: 0 8px 24px rgba(99,102,241,0.4);
        }
        .jd-cta-info { display: flex; flex-direction: column; gap: 24px; padding-top: 8px; }
        .jd-cta-info-item { display: flex; align-items: flex-start; gap: 14px; }
        .jd-cta-info-icon {
            width: 40px; height: 40px;
            border-radius: 10px;
            background: rgba(255,255,255,0.08);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.7);
            font-size: 15px;
            flex-shrink: 0;
        }
        .jd-cta-info-label {
            font-size: 11px; font-weight: 600;
            color: rgba(255,255,255,0.4);
            text-transform: uppercase; letter-spacing: 1px;
        }
        .jd-cta-info-val {
            font-size: 0.95rem; font-weight: 500;
            color: rgba(255,255,255,0.85);
            margin-top: 2px;
        }
        .jd-cta-socials { display: flex; gap: 10px; margin-top: 8px; }
        .jd-social {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.12);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.6);
            font-size: 14px;
            text-decoration: none;
            transition: all 0.25s ease;
        }
        .jd-social:hover {
            background: rgba(255,255,255,0.16);
            color: #fff;
        }
        .jd-alert-success {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: #fff;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 0.88rem;
            margin-bottom: 16px;
        }

        @media (max-width: 900px) {
            .jd-cta-card { grid-template-columns: 1fr; padding: 40px 28px; gap: 40px; }
            .jd-form-row { grid-template-columns: 1fr; }
        }

        /* Loading Screen — glitch/scramble */
        .loading-screen {
            position: fixed; inset: 0;
            background: #0A0A0A;
            display: flex; align-items: center; justify-content: center;
            z-index: 10000;
            transition: opacity 0.6s ease, visibility 0.6s ease;
        }
        .loading-screen.hidden { opacity: 0; visibility: hidden; }

        .ls-scanline {
            position: absolute; inset: 0; pointer-events: none; z-index: 1;
            background: repeating-linear-gradient(
                0deg,
                transparent 0px, transparent 3px,
                rgba(255,255,255,0.012) 3px, rgba(255,255,255,0.012) 4px
            );
        }
        .ls-inner {
            position: relative; z-index: 2;
            display: flex; flex-direction: column;
            align-items: center; text-align: center;
        }
        .ls-logo {
            width: 60px; height: 60px;
            margin-bottom: 28px;
            opacity: 0;
            animation: ls-logo-in 0.5s ease 0.1s forwards;
        }
        @keyframes ls-logo-in {
            from { opacity: 0; transform: translateY(-10px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .ls-logo img { width: 100%; height: 100%; object-fit: contain; filter: brightness(0) invert(1); }

        .ls-text {
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.5rem; font-weight: 700; letter-spacing: 0.06em;
            background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
            min-height: 2rem;
            white-space: nowrap;
        }
        .ls-cursor {
            width: 2px; height: 1.5rem;
            background: #6366F1;
            margin-top: 6px;
            animation: ls-blink 0.75s step-end infinite;
        }
        @keyframes ls-blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

        .ls-bar {
            width: 160px; height: 1px;
            background: rgba(255,255,255,0.07);
            border-radius: 1px; overflow: hidden;
            margin-top: 32px;
        }
        .ls-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #6366F1, #8B5CF6);
            animation: ls-bar 1.6s ease-in-out infinite;
        }
        @keyframes ls-bar {
            0%   { width: 0%;  margin-left: 0%; }
            50%  { width: 60%; margin-left: 20%; }
            100% { width: 0%;  margin-left: 100%; }
        }

        /* ══════════════════════ SCROLL REVEAL SYSTEM ══════════════════════ */
        [data-reveal] {
            opacity: 0;
            will-change: opacity, transform, filter;
            transition:
                opacity   0.85s cubic-bezier(0.16, 1, 0.3, 1),
                transform 0.85s cubic-bezier(0.16, 1, 0.3, 1),
                filter    0.85s cubic-bezier(0.16, 1, 0.3, 1);
        }
        [data-reveal].sr-visible { opacity: 1 !important; transform: none !important; filter: none !important; }

        [data-reveal="up"]      { transform: translateY(60px); }
        [data-reveal="up-big"]  { transform: translateY(100px); }
        [data-reveal="down"]    { transform: translateY(-40px); }
        [data-reveal="left"]    { transform: translateX(70px); }
        [data-reveal="right"]   { transform: translateX(-70px); }
        [data-reveal="zoom"]    { transform: scale(0.78); }
        [data-reveal="zoom-up"] { transform: scale(0.85) translateY(40px); }
        [data-reveal="flip"]    { transform: perspective(800px) rotateX(22deg) translateY(40px); }
        [data-reveal="blur"]    { transform: translateY(24px); filter: blur(10px); }
        [data-reveal="pop"]     { transform: scale(0.65); }

        [data-reveal-delay="1"] { transition-delay: 80ms; }
        [data-reveal-delay="2"] { transition-delay: 160ms; }
        [data-reveal-delay="3"] { transition-delay: 240ms; }
        [data-reveal-delay="4"] { transition-delay: 320ms; }
        [data-reveal-delay="5"] { transition-delay: 400ms; }
        [data-reveal-delay="6"] { transition-delay: 480ms; }

        .sr-line { position: relative; }
        .sr-line::after {
            content: ''; position: absolute;
            left: 0; bottom: -4px;
            width: 0; height: 2px;
            background: linear-gradient(90deg, #6366F1, #8B5CF6);
            border-radius: 2px;
            transition: width 1.1s cubic-bezier(0.16, 1, 0.3, 1) 0.3s;
        }
        .sr-line.sr-visible::after { width: 100%; }

        .sr-shine { position: relative; overflow: hidden; }
        .sr-shine::before {
            content: ''; position: absolute;
            top: 0; left: -120%;
            width: 60%; height: 100%;
            background: linear-gradient(90deg, transparent, rgba(99,102,241,0.06), transparent);
            transform: skewX(-15deg);
            pointer-events: none; z-index: 2;
        }
        .sr-shine.sr-visible::before { transition: left 1s ease 0.15s; left: 160%; }

        .sr-border-glow {
            border-color: transparent !important;
            transition: border-color 0.5s ease 0.4s, box-shadow 0.5s ease 0.4s;
        }
        .sr-border-glow.sr-visible {
            border-color: rgba(99,102,241,0.18) !important;
            box-shadow: 0 0 20px rgba(99,102,241,0.06);
        }

        .sr-divider {
            width: 0; height: 1px;
            background: linear-gradient(90deg, transparent, rgba(0,0,0,0.12), transparent);
            margin: 0 auto;
            transition: width 1.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .sr-divider.sr-visible { width: 80%; }

        @keyframes sr-pop-in {
            0% { transform: scale(0.5); opacity: 0; }
            60% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }
        .sr-pop { opacity: 0; }
        .sr-pop.sr-visible { animation: sr-pop-in 0.65s cubic-bezier(0.34,1.56,0.64,1) forwards; }

        /* Utility shimmer text */
        .shimmer-text {
            background: linear-gradient(90deg, var(--t1), var(--accent), var(--t1));
            background-size: 200% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer-move 3s linear infinite;
        }
        @keyframes shimmer-move { 0% { background-position: 100% 0; } 100% { background-position: -100% 0; } }

        .glow-icon { transition: all 0.3s ease; }
        .section-badge {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 4px 12px;
            background: rgba(99,102,241,0.08);
            border: 1px solid rgba(99,102,241,0.16);
            border-radius: 100px;
            font-size: 11px; font-weight: 600;
            color: var(--accent); letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Float animation for hero visual elements */
        @keyframes float-orb {
            0%, 100% { transform: translate(0, 0); }
            33% { transform: translate(-12px, 18px); }
            66% { transform: translate(16px, -10px); }
        }
        .orb {
            position: absolute; border-radius: 50%;
            filter: blur(60px); pointer-events: none;
            z-index: 0; opacity: 0.08;
            animation: float-orb 10s ease-in-out infinite;
        }
        .orb-purple, .orb-cyan { background: #6366F1; }
        .orb-pink              { background: #8B5CF6; }
        .orb-indigo, .orb-blue { background: #0EA5E9; }

        /* Mesh blobs for hero (subtle) */
        .mesh-blob {
            position: absolute; border-radius: 50%;
            pointer-events: none; z-index: 0; filter: blur(80px);
        }
        .mesh-blob-1 {
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(99,102,241,0.06) 0%, transparent 70%);
            top: -150px; right: -100px;
            animation: blob1 16s ease-in-out infinite;
        }
        .mesh-blob-2 {
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(139,92,246,0.05) 0%, transparent 70%);
            bottom: 0; left: -80px;
            animation: blob2 20s ease-in-out infinite;
        }
        @keyframes blob1 { 0%,100%{transform:translate(0,0) scale(1)} 50%{transform:translate(-30px,20px) scale(1.05)} }
        @keyframes blob2 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(20px,-15px)} }

        /* ── Shared inner-page classes ── */
        .section-title {
            font-family: var(--font-d);
            font-size: clamp(1.8rem, 3.5vw, 2.8rem);
            font-weight: 700;
            color: var(--t1);
            letter-spacing: -1.5px;
            line-height: 1.1;
            margin-bottom: 16px;
        }
        .section-title span { color: var(--accent); }
        .section-subtitle {
            font-size: 11px;
            font-weight: 600;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 12px;
            display: block;
        }
        .section-header { text-align: center; margin-bottom: 48px; }
        .section-header p { color: var(--t2); font-size: 1rem; line-height: 1.7; margin-top: 12px; }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            background: rgba(99,102,241,0.08);
            border: 1px solid rgba(99,102,241,0.20);
            border-radius: 100px;
            font-size: 11px;
            font-weight: 600;
            color: var(--accent);
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-family: var(--font-d);
            margin-bottom: 20px;
        }
        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 14px 32px;
            background: transparent;
            color: var(--t1);
            font-weight: 600;
            font-size: 15px;
            border-radius: var(--r-btn);
            text-decoration: none;
            border: 1.5px solid var(--b-normal);
            cursor: pointer;
            font-family: var(--font-d);
            transition: all 0.25s ease;
        }
        .btn-secondary:hover { background: var(--s2); border-color: var(--b-strong); }
        /* Service card components */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .service-card {
            background: #fff;
            border: 1px solid var(--b-subtle);
            border-radius: var(--r-card);
            padding: 36px 32px;
            transition: all 0.3s ease;
        }
        .service-card:hover {
            border-color: rgba(99,102,241,0.2);
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            transform: translateY(-4px);
        }
        .service-icon {
            width: 52px; height: 52px;
            background: rgba(99,102,241,0.08);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 22px; color: var(--accent);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .service-card:hover .service-icon { background: var(--accent); color: #fff; }
        .service-title {
            font-family: var(--font-d);
            font-size: 1.1rem; font-weight: 700;
            color: var(--t1); margin-bottom: 12px; letter-spacing: -0.3px;
        }
        .service-description { font-size: 0.9rem; color: var(--t2); line-height: 1.7; margin-bottom: 24px; }
        .service-link {
            display: inline-flex; align-items: center; gap: 6px;
            color: var(--accent); font-size: 0.875rem; font-weight: 600;
            text-decoration: none; transition: gap 0.2s ease;
        }
        .service-link:hover { gap: 10px; }
        @media (max-width: 640px) {
            .services-grid { grid-template-columns: 1fr; }
            .service-card { padding: 28px 24px; }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="ls-scanline"></div>
        <div class="ls-inner">
            <div class="ls-logo">
                <img src="{{ asset('images/logo/jdt.ico') }}" alt="JD Technology">
            </div>
            <div class="ls-text" id="lsText"></div>
            <div class="ls-cursor" id="lsCursor"></div>
            <div class="ls-bar"><div class="ls-bar-fill"></div></div>
        </div>
    </div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Subtle dot grid background -->
    <div id="particles-js"></div>

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Container -->
    <div class="main-container">
        <div class="page-content">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>

    <!-- Particles JS -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- Typed.js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- AOS Animate on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @stack('scripts')

    <script>
    // Particles — very subtle dots for white theme
    particlesJS('particles-js', {
        particles: {
            number: { value: 40, density: { enable: true, value_area: 1000 } },
            color: { value: ['#6366F1', '#8B5CF6', '#0EA5E9'] },
            shape: { type: 'circle' },
            opacity: { value: 0.12, random: true },
            size: { value: 2, random: true },
            line_linked: {
                enable: true,
                distance: 160,
                color: '#6366F1',
                opacity: 0.04,
                width: 1
            },
            move: {
                enable: true, speed: 0.8,
                direction: 'none', random: true,
                straight: false, out_mode: 'out', bounce: false
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: { enable: true, mode: 'grab' },
                onclick: { enable: false, mode: 'push' },
                resize: true
            },
            modes: {
                grab: { distance: 120, line_linked: { opacity: 0.15 } }
            }
        },
        retina_detect: true
    });

    // AOS Init
    AOS.init({ duration: 900, once: true, offset: 70, easing: 'ease-out-quart', anchorPlacement: 'top-bottom' });

    // Loading Screen — scramble/glitch effect
    (function() {
        var ls      = document.getElementById('loadingScreen');
        var lsText  = document.getElementById('lsText');
        var lsCursor = document.getElementById('lsCursor');
        if (!ls || !lsText) return;

        var finalText = 'JD Technology';
        var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&*?';
        var revealed = 0;
        var frameCount = 0;
        var framesPerChar = 4;
        var raf;
        var scrambleDone = false;
        var pageLoaded   = false;

        function rand() { return chars[Math.floor(Math.random() * chars.length)]; }

        function scramble() {
            var out = '';
            for (var i = 0; i < finalText.length; i++) {
                if (finalText[i] === ' ') { out += ' '; continue; }
                out += (i < revealed) ? finalText[i] : rand();
            }
            lsText.textContent = out;
            frameCount++;
            if (frameCount % framesPerChar === 0 && revealed < finalText.length) revealed++;
            if (revealed < finalText.length) {
                raf = requestAnimationFrame(scramble);
            } else {
                lsText.textContent = finalText;        // settle jadi "JD Technology"
                if (lsCursor) lsCursor.style.animation = 'none';
                scrambleDone = true;
                tryHide();
            }
        }

        function hideLoader() {
            cancelAnimationFrame(raf);
            ls.classList.add('hidden');
        }

        // Hide hanya setelah scramble SELESAI dan page sudah loaded
        function tryHide() {
            if (scrambleDone && pageLoaded) setTimeout(hideLoader, 500);
        }

        setTimeout(function() { raf = requestAnimationFrame(scramble); }, 450);

        if (document.readyState === 'complete') {
            pageLoaded = true; tryHide();
        } else {
            window.addEventListener('load', function() { pageLoaded = true; tryHide(); });
        }

        // Backup: paksa hide setelah 5 detik
        setTimeout(hideLoader, 5000);
    })();

    // Scroll Progress Bar
    (function() {
        var bar = document.getElementById('scrollProgress');
        if (!bar) return;
        window.addEventListener('scroll', function() {
            var docH = document.documentElement.scrollHeight - window.innerHeight;
            bar.style.width = (docH > 0 ? (window.scrollY / docH) * 100 : 0) + '%';
        }, { passive: true });
    })();

    document.addEventListener('DOMContentLoaded', function() {
        // Navbar Scroll Effect
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            window.addEventListener('scroll', function() {
                navbar.classList.toggle('scrolled', window.scrollY > 80);
            });
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        // Mobile Menu
        const navbar2 = document.querySelector('.navbar');
        const navMenu = document.querySelector('.nav-menu');
        if (navbar2 && navMenu) {
            let menuToggle = document.querySelector('.menu-toggle');
            if (!menuToggle) {
                menuToggle = document.createElement('div');
                menuToggle.className = 'menu-toggle';
                menuToggle.innerHTML = '<span></span><span></span><span></span>';
                const logo = document.querySelector('.logo');
                if (logo) logo.after(menuToggle);
            }
            function toggleMenu(show) {
                menuToggle.classList.toggle('active', show);
                navMenu.classList.toggle('active', show);
                document.body.style.overflow = show ? 'hidden' : '';
            }
            menuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleMenu(!navMenu.classList.contains('active'));
            });
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => toggleMenu(false));
            });
            document.addEventListener('click', function(e) {
                if (navMenu.classList.contains('active') && !navbar2.contains(e.target)) toggleMenu(false);
            });
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) toggleMenu(false);
            });
        }

        // ══ SCROLL REVEAL SYSTEM ══
        (function() {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                document.querySelectorAll('[data-reveal], .sr-line, .sr-shine, .sr-border-glow, .sr-pop, .sr-divider').forEach(function(el) {
                    el.classList.add('sr-visible');
                });
                return;
            }

            document.querySelectorAll('[data-stagger]').forEach(function(group) {
                var type = group.getAttribute('data-stagger') || 'up';
                var base = parseInt(group.getAttribute('data-stagger-base') || 0);
                Array.from(group.children).forEach(function(child, i) {
                    if (!child.hasAttribute('data-reveal')) child.setAttribute('data-reveal', type);
                    child.style.transitionDelay = (base + i * 90) + 'ms';
                });
            });

            var io = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('sr-visible');
                    io.unobserve(entry.target);
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -48px 0px' });

            document.querySelectorAll('[data-reveal], .sr-line, .sr-shine, .sr-border-glow, .sr-pop, .sr-divider').forEach(function(el) {
                io.observe(el);
            });
        })();
    });
    </script>
</body>
</html>
