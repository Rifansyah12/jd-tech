<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo/jdt.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo/jdt.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo/jdt.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo/jdt.png') }}">
    
    <title>@yield('title', 'JD Technology - Digital Innovation')</title>
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    @stack('styles')
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            color: #fff;
            overflow-x: hidden;
        }

        /* Animated Background */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            transition: all 0.3s ease;
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 242, 254, 0.1);
        }

        .navbar.scrolled {
            padding: 1rem 5%;
            background: rgba(10, 10, 10, 0.95);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-box {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            color: #0a0a0a;
            transform: rotate(10deg);
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.3);
        }

        .logo:hover .logo-box {
            transform: rotate(0deg) scale(1.1);
            box-shadow: 0 0 30px rgba(0, 242, 254, 0.5);
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.5px;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            position: relative;
            padding: 5px 0;
            transition: color 0.3s ease;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            transition: width 0.3s ease;
            box-shadow: 0 0 10px #00f2fe;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #00f2fe;
        }

        .nav-btn {
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            color: #0a0a0a !important;
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 600;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.3);
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 30px rgba(0, 242, 254, 0.5);
        }

        .nav-btn::before {
            display: none;
        }

        /* Auth Links */
        .auth-links {
            position: fixed;
            top: 20px;
            right: 30px;
            z-index: 101;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 40px;
            border: 1px solid rgba(0, 242, 254, 0.2);
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.1);
        }

        .auth-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .auth-links a:hover {
            color: #00f2fe;
        }

        .auth-links .separator {
            color: rgba(255, 255, 255, 0.3);
        }

        /* Main Container */
        .main-container {
            position: relative;
            z-index: 1;
            min-height: 100vh;
        }

        /* Page Content */
        .page-content {
            padding-top: 80px;
        }

        /* Hero Section */
        .hero-section {
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            flex: 1;
            max-width: 700px;
            z-index: 2;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(0, 242, 254, 0.1);
            border: 1px solid rgba(0, 242, 254, 0.3);
            border-radius: 40px;
            padding: 8px 20px;
            font-size: 14px;
            font-weight: 500;
            color: #00f2fe;
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.1);
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-title span {
            display: block;
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 40px;
            max-width: 600px;
        }

        .hero-stats {
            display: flex;
            gap: 50px;
            margin-bottom: 40px;
        }

        .stat-item {
            text-align: left;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #00f2fe;
            display: block;
            line-height: 1;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            color: #0a0a0a;
            padding: 16px 40px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 30px rgba(0, 242, 254, 0.5);
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            padding: 16px 40px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            border: 2px solid rgba(0, 242, 254, 0.3);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-secondary:hover {
            border-color: #00f2fe;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.2);
            transform: translateY(-3px);
        }

        /* Hero Visual */
        .hero-visual {
            flex: 1;
            position: relative;
            height: 600px;
        }

        .cube {
            position: absolute;
            width: 400px;
            height: 400px;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(-50%) rotate(0deg); }
            50% { transform: translateY(-60%) rotate(5deg); }
        }

        .cube-face {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid rgba(0, 242, 254, 0.3);
            border-radius: 30px;
            box-shadow: 0 0 50px rgba(0, 242, 254, 0.1);
        }

        .cube-face.front {
            transform: translateZ(200px);
            background: rgba(0, 242, 254, 0.05);
            backdrop-filter: blur(10px);
        }

        .cube-face.back {
            transform: rotateY(180deg) translateZ(200px);
            background: rgba(79, 172, 254, 0.05);
            backdrop-filter: blur(10px);
        }

        .cube-face.right {
            transform: rotateY(90deg) translateZ(200px);
            background: rgba(0, 242, 254, 0.05);
            backdrop-filter: blur(10px);
        }

        .cube-face.left {
            transform: rotateY(-90deg) translateZ(200px);
            background: rgba(79, 172, 254, 0.05);
            backdrop-filter: blur(10px);
        }

        .cube-face.top {
            transform: rotateX(90deg) translateZ(200px);
            background: rgba(0, 242, 254, 0.05);
            backdrop-filter: blur(10px);
        }

        .cube-face.bottom {
            transform: rotateX(-90deg) translateZ(200px);
            background: rgba(79, 172, 254, 0.05);
            backdrop-filter: blur(10px);
        }

        .tech-stack {
            position: absolute;
            bottom: 50px;
            right: 50px;
            display: flex;
            gap: 20px;
            z-index: 10;
        }

        .tech-item {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 242, 254, 0.2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #00f2fe;
            transition: all 0.3s ease;
            animation: techFloat 4s ease-in-out infinite;
        }

        .tech-item:nth-child(2) {
            animation-delay: 0.5s;
        }

        .tech-item:nth-child(3) {
            animation-delay: 1s;
        }

        @keyframes techFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .tech-item:hover {
            transform: scale(1.1);
            box-shadow: 0 0 30px rgba(0, 242, 254, 0.3);
        }

        /* Services Section */
        .services-section {
            padding: 100px 5%;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-subtitle {
            color: #00f2fe;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section-title span {
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(0, 242, 254, 0.1);
            border-radius: 30px;
            padding: 40px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 242, 254, 0.1), rgba(79, 172, 254, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: #00f2fe;
            box-shadow: 0 0 40px rgba(0, 242, 254, 0.2);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, rgba(0, 242, 254, 0.1), rgba(79, 172, 254, 0.1));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: #00f2fe;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
        }

        .service-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .service-description {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .service-link {
            color: #00f2fe;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            position: relative;
            z-index: 1;
        }

        .service-link i {
            transition: transform 0.3s ease;
        }

        .service-link:hover i {
            transform: translateX(5px);
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 100px 5%;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .portfolio-item {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            height: 350px;
            cursor: pointer;
        }

        .portfolio-image {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            color: #00f2fe;
            transition: transform 0.5s ease;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 242, 254, 0.9), rgba(79, 172, 254, 0.9));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-item:hover .portfolio-image {
            transform: scale(1.1);
        }

        .portfolio-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #0a0a0a;
            margin-bottom: 10px;
        }

        .portfolio-category {
            color: #0a0a0a;
            font-size: 1rem;
            opacity: 0.8;
        }

        /* Features Section */
        .features-section {
            padding: 100px 5%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .feature-item {
            text-align: center;
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            background: rgba(0, 242, 254, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #00f2fe;
            border: 1px solid rgba(0, 242, 254, 0.3);
        }

        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .feature-description {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Contact Section */
        .contact-section {
            padding: 100px 5%;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(0, 242, 254, 0.1);
            border-radius: 40px;
            padding: 60px;
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact-info h3 span {
            color: #00f2fe;
        }

        .contact-info p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
            margin-bottom: 40px;
        }

        .contact-details {
            margin-bottom: 40px;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .detail-icon {
            width: 50px;
            height: 50px;
            background: rgba(0, 242, 254, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #00f2fe;
            border: 1px solid rgba(0, 242, 254, 0.3);
        }

        .detail-text h4 {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.5);
            font-weight: 400;
            margin-bottom: 5px;
        }

        .detail-text p {
            font-size: 1.1rem;
            font-weight: 500;
            margin: 0;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 242, 254, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #00f2fe;
            color: #0a0a0a;
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(0, 242, 254, 0.4);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(0, 242, 254, 0.2);
            border-radius: 15px;
            color: #fff;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #00f2fe;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.2);
            background: rgba(0, 242, 254, 0.05);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            color: #0a0a0a;
            padding: 16px 40px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 30px rgba(0, 242, 254, 0.5);
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            padding: 60px 5% 30px;
            margin-top: 80px;
            border-top: 1px solid rgba(0, 242, 254, 0.1);
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col p {
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.6;
            margin: 20px 0;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #00f2fe;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #00f2fe;
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
        }

        .newsletter-input {
            flex: 1;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(0, 242, 254, 0.2);
            border-radius: 10px;
            color: #fff;
        }

        .newsletter-btn {
            padding: 12px 20px;
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            border: none;
            border-radius: 10px;
            color: #0a0a0a;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.3);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(0, 242, 254, 0.1);
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 3.5rem;
            }
            
            .hero-visual {
                display: none;
            }
            
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 1rem 5%;
            }
            
            /* .nav-menu {
                display: none;
            } */
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-stats {
                flex-wrap: wrap;
                gap: 20px;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        /* Mobile Menu Button */
        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
            z-index: 1000;
        }

        .menu-toggle span {
            display: block;
            width: 100%;
            height: 3px;
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        /* Responsive Navbar */
        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }
            
            .nav-menu {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 80%;
                height: calc(100vh - 80px);
                background: rgba(10, 10, 10, 0.95);
                backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: flex-start;
                padding: 40px 20px;
                gap: 20px;
                transition: left 0.3s ease;
                border-right: 1px solid rgba(0, 242, 254, 0.1);
                z-index: 999;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-link {
                font-size: 18px;
                padding: 15px 0;
                width: 100%;
                text-align: center;
            }
            
            .nav-link::before {
                bottom: 5px;
            }
            
            .nav-btn {
                margin-top: 20px;
                text-align: center;
            }
            
            .logo-text {
                font-size: 20px;
            }
            
            .logo-box {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .nav-menu {
                width: 100%;
            }
            
            .logo-text {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Particles Background -->
    <div id="particles-js"></div>

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Container -->
    <div class="main-container">
        <!-- Page Content -->
        <div class="page-content">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    <!-- Particles JS -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <!-- Custom Scripts -->
    @stack('scripts')
    
    <script>
    // Particles Configuration
    particlesJS('particles-js', {
        particles: {
            number: {
                value: 80,
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: '#00f2fe'
            },
            shape: {
                type: 'circle'
            },
            opacity: {
                value: 0.2,
                random: true
            },
            size: {
                value: 3,
                random: true
            },
            line_linked: {
                enable: true,
                distance: 150,
                color: '#00f2fe',
                opacity: 0.1,
                width: 1
            },
            move: {
                enable: true,
                speed: 2,
                direction: 'none',
                random: true,
                straight: false,
                out_mode: 'out',
                bounce: false
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: {
                    enable: true,
                    mode: 'grab'
                },
                onclick: {
                    enable: true,
                    mode: 'push'
                },
                resize: true
            },
            modes: {
                grab: {
                    distance: 140,
                    line_linked: {
                        opacity: 0.3
                    }
                },
                push: {
                    particles_nb: 4
                }
            }
        },
        retina_detect: true
    });

    // Pastikan semua elemen sudah dimuat
    document.addEventListener('DOMContentLoaded', function() {
        
        // Navbar Scroll Effect - Perbaiki selector
        const navbar = document.querySelector('.navbar'); // Gunakan class, bukan ID
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile Menu Toggle
        const navbar2 = document.querySelector('.navbar');
        const navMenu = document.querySelector('.nav-menu');
        
        // Cek apakah elemen navbar dan navMenu ada
        if (navbar2 && navMenu) {
            
            // Cek apakah menu toggle sudah ada, jika belum buat baru
            let menuToggle = document.querySelector('.menu-toggle');
            
            if (!menuToggle) {
                menuToggle = document.createElement('div');
                menuToggle.className = 'menu-toggle';
                menuToggle.innerHTML = `
                    <span></span>
                    <span></span>
                    <span></span>
                `;
                
                // Insert menu toggle after logo
                const logo = document.querySelector('.logo');
                if (logo && navbar2) {
                    logo.after(menuToggle);
                }
            }
            
            // Toggle menu function
            function toggleMenu(show) {
                if (show) {
                    menuToggle.classList.add('active');
                    navMenu.classList.add('active');
                    document.body.style.overflow = 'hidden';
                } else {
                    menuToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
            
            // Toggle menu saat tombol diklik
            menuToggle.addEventListener('click', function(e) {
                e.stopPropagation(); // Mencegah event bubbling
                const isActive = navMenu.classList.contains('active');
                toggleMenu(!isActive);
            });
            
            // Close menu when clicking on a link
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    toggleMenu(false);
                });
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (navMenu.classList.contains('active')) {
                    // Cek apakah klik di luar navbar dan menu toggle
                    if (!navbar2.contains(e.target) && !menuToggle.contains(e.target)) {
                        toggleMenu(false);
                    }
                }
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && navMenu.classList.contains('active')) {
                    toggleMenu(false);
                }
            });

            // Prevent scroll on body when menu is open
            document.addEventListener('touchmove', function(e) {
                if (navMenu.classList.contains('active')) {
                    e.preventDefault();
                }
            }, { passive: false });
            
        } else {
            console.error('Navbar or navMenu element not found');
        }
    });
</script>
</body>
</html>