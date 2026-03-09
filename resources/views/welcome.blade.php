<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JD Technology - Solusi Digital Terpercaya</title>
    
    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            transform: rotate(10deg);
            transition: transform 0.3s ease;
        }

        .logo:hover .logo-icon {
            transform: rotate(0deg) scale(1.1);
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: #667eea;
        }

        .btn-contact {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white !important;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-contact:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .btn-contact::after {
            display: none;
        }

        /* Main Content */
        .main-container {
            min-height: 100vh;
            padding: 80px 5% 0;
            position: relative;
            overflow: hidden;
        }

        /* Background Decoration */
        .bg-decoration {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .circle1 {
            width: 300px;
            height: 300px;
            top: -100px;
            right: -100px;
        }

        .circle2 {
            width: 200px;
            height: 200px;
            bottom: 50px;
            left: -50px;
            animation-delay: -3s;
        }

        .circle3 {
            width: 150px;
            height: 150px;
            bottom: 200px;
            right: 10%;
            animation-delay: -1.5s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        /* Hero Section */
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: calc(100vh - 80px);
            gap: 50px;
            flex-wrap: wrap;
        }

        .hero-content {
            flex: 1;
            min-width: 300px;
            color: white;
        }

        .hero-badge {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-title span {
            background: linear-gradient(135deg, #fff 0%, #e0e0e0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: block;
        }

        .hero-description {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 600px;
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            margin-bottom: 40px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: white;
            color: #667eea;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            border: 2px solid white;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: white;
            color: #667eea;
            transform: translateY(-3px);
        }

        /* Hero Image */
        .hero-image {
            flex: 1;
            min-width: 300px;
            position: relative;
            animation: floatImage 6s ease-in-out infinite;
        }

        @keyframes floatImage {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .image-wrapper {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .tech-icons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }

        .tech-icon {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(5px);
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            color: white;
            font-size: 14px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .tech-icon i {
            font-size: 24px;
            margin-bottom: 5px;
            display: block;
        }

        .tech-icon:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: scale(1.05);
        }

        /* Services Section */
        .services-section {
            padding: 80px 0;
            color: white;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 32px;
            color: white;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .service-description {
            font-size: 0.95rem;
            line-height: 1.6;
            opacity: 0.8;
            margin-bottom: 20px;
        }

        .service-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: gap 0.3s ease;
        }

        .service-link:hover {
            gap: 10px;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 80px 0;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .portfolio-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            height: 250px;
        }

        .portfolio-image {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: white;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .portfolio-category {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
        }

        .contact-container {
            display: flex;
            gap: 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            flex-wrap: wrap;
        }

        .contact-info {
            flex: 1;
            min-width: 250px;
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-details {
            margin: 30px 0;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .contact-form {
            flex: 1;
            min-width: 300px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-control:focus {
            outline: none;
            border-color: white;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            background: white;
            color: #667eea;
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1rem;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            padding: 40px 5%;
            margin-top: 80px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .footer-links {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 1;
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-links a {
            color: white;
            font-size: 20px;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            opacity: 1;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
                padding: 15px 5%;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-stats {
                justify-content: center;
            }

            .contact-container {
                padding: 30px;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }

        /* Auth Links */
        .auth-links {
            position: fixed;
            top: 20px;
            right: 30px;
            z-index: 1001;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 10px 20px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .auth-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: 500;
            transition: opacity 0.3s ease;
        }

        .auth-links a:hover {
            opacity: 0.8;
        }

        .auth-links .separator {
            color: white;
            opacity: 0.5;
        }
    </style>
</head>
<body>
    <!-- Auth Links -->
    @if (Route::has('login'))
        <div class="auth-links">
            @auth
                <a href="{{ url('/home') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                <span class="separator">|</span>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <div class="logo-icon">
                <i class="fas fa-code"></i>
            </div>
            <span class="logo-text">JD Technology</span>
        </div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#contact" class="btn-contact">Free Consultation</a>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Background Decoration -->
        <div class="bg-decoration">
            <div class="circle circle1"></div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
        </div>

        <!-- Hero Section -->
        <section id="home" class="hero-section">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-rocket"></i> Welcome to JD Technology
                </div>
                <h1 class="hero-title">
                    <span>Transform Your Ideas</span>
                    <span>Into Digital Reality</span>
                </h1>
                <p class="hero-description">
                    Kami adalah mitra terpercaya dalam pengembangan website dan aplikasi mobile profesional. 
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Projects</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">30+</span>
                        <span class="stat-label">Clients</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">Years</span>
                    </div>
                </div>
                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary">Get Started</a>
                    <a href="#portfolio" class="btn-secondary">View Portfolio</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-wrapper">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <i class="fas fa-laptop-code" style="font-size: 80px; color: white;"></i>
                    </div>
                    <div class="tech-icons">
                        <div class="tech-icon">
                            <i class="fab fa-laravel"></i>
                            Laravel
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-react"></i>
                            React
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-vuejs"></i>
                            Vue.js
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-php"></i>
                            PHP
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-android"></i>
                            Android
                        </div>
                        <div class="tech-icon">
                            <i class="fab fa-apple"></i>
                            iOS
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services-section">
            <div class="section-header">
                <div class="section-subtitle">WHAT WE OFFER</div>
                <h2 class="section-title">Our Services</h2>
                <p>Solusi lengkap untuk kebutuhan digital Anda</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="service-title">Website Development</h3>
                    <p class="service-description">
                        Pembuatan website profesional dengan teknologi terkini, responsive dan SEO friendly.
                    </p>
                    <a href="#" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="service-title">Mobile Apps</h3>
                    <p class="service-description">
                        Aplikasi mobile Android & iOS dengan performa tinggi dan UI/UX yang menarik.
                    </p>
                    <a href="#" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="service-title">E-Commerce</h3>
                    <p class="service-description">
                        Solusi toko online lengkap dengan sistem pembayaran terintegrasi.
                    </p>
                    <a href="#" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">
                        Desain antarmuka yang modern, intuitif, dan user-friendly.
                    </p>
                    <a href="#" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio-section">
            <div class="section-header">
                <div class="section-subtitle">OUR WORK</div>
                <h2 class="section-title">Recent Projects</h2>
                <p>Beberapa project yang telah kami kerjakan</p>
            </div>

            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">E-Commerce App</h3>
                        <p class="portfolio-category">Mobile App</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Clinic Management</h3>
                        <p class="portfolio-category">Web App</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">E-Learning Platform</h3>
                        <p class="portfolio-category">Web & Mobile</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Restaurant POS</h3>
                        <p class="portfolio-category">Desktop App</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Analytics Dashboard</h3>
                        <p class="portfolio-category">Web App</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="portfolio-overlay">
                        <h3 class="portfolio-title">Logistics System</h3>
                        <p class="portfolio-category">Mobile App</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Let's Discuss Your Project</h3>
                    <p style="opacity: 0.9; margin-bottom: 30px;">
                        Konsultasi gratis dengan tim kami untuk mewujudkan ide digital Anda.
                    </p>
                    
                    <div class="contact-details">
                        <div class="contact-detail">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Office</h4>
                                <p style="opacity: 0.8;">Jl. Teknologi No. 123, Jakarta</p>
                            </div>
                        </div>

                        <div class="contact-detail">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Phone</h4>
                                <p style="opacity: 0.8;">+62 123 4567 890</p>
                            </div>
                        </div>

                        <div class="contact-detail">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Email</h4>
                                <p style="opacity: 0.8;">info@jdtechnology.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn-submit">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <span class="logo-text">JD Technology</span>
                </div>
                
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">FAQ</a>
                    <a href="#">Career</a>
                </div>

                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 JD Technology. All rights reserved. | Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            </div>
        </footer>
    </div>
</body>
</html>