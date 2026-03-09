@extends('layouts.app')

@section('title', 'JD Technology - Digital Innovation')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-crown"></i> Top Digital Agency 2024
            </div>
            <h1 class="hero-title">
                <span>Build Amazing</span>
                <span>Digital Products</span>
            </h1>
            <p class="hero-description">
                Transform your business ideas into powerful web and mobile applications with JD Technology. We create innovative solutions that drive growth and engagement.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">150+</span>
                    <span class="stat-label">Projects</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
                    <span class="stat-label">Satisfaction</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support</span>
                </div>
            </div>
            <div class="hero-buttons">
                <a href="{{ route('contact') }}#contact" class="btn-primary">
                    Start Project <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('portfolio') }}#portfolio" class="btn-secondary">
                    View Portfolio <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="cube">
                <div class="cube-face front"></div>
                <div class="cube-face back"></div>
                <div class="cube-face right"></div>
                <div class="cube-face left"></div>
                <div class="cube-face top"></div>
                <div class="cube-face bottom"></div>
            </div>
            <div class="tech-stack">
                <div class="tech-item"><i class="fab fa-laravel"></i></div>
                <div class="tech-item"><i class="fab fa-react"></i></div>
                <div class="tech-item"><i class="fab fa-vuejs"></i></div>
                <div class="tech-item"><i class="fab fa-node"></i></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="section-header">
            <div class="section-subtitle">WHAT WE DO BEST</div>
            <h2 class="section-title">Our <span>Services</span></h2>
            <p style="color: rgba(255,255,255,0.6);">Comprehensive digital solutions tailored to your needs</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-description">
                    Custom websites and web applications built with Laravel, React, and modern technologies. Fast, secure, and scalable solutions.
                </p>
                <a href="{{ route('services') }}" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="service-title">Mobile Apps</h3>
                <p class="service-description">
                    Native and cross-platform mobile applications for iOS and Android with stunning UI/UX and optimal performance.
                </p>
                <a href="{{ route('services') }}" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3 class="service-title">Cloud Solutions</h3>
                <p class="service-description">
                    Scalable cloud infrastructure, deployment, and management services on AWS, Google Cloud, and Azure platforms.
                </p>
                <a href="{{ route('services') }}" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3 class="service-title">AI & Machine Learning</h3>
                <p class="service-description">
                    Intelligent solutions powered by AI and machine learning to automate processes and gain valuable insights.
                </p>
                <a href="{{ route('services') }}" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3 class="service-title">E-Commerce</h3>
                <p class="service-description">
                    Full-featured online stores with secure payment gateways, inventory management, and marketing tools.
                </p>
                <a href="{{ route('services') }}" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="service-title">Digital Strategy</h3>
                <p class="service-description">
                    Expert consulting and digital strategy to help your business grow and stay ahead of the competition.
                </p>
                <a href="{{ route('services') }}" class="service-link">
                    Learn More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="section-header">
            <div class="section-subtitle">OUR WORK</div>
            <h2 class="section-title">Featured <span>Projects</span></h2>
            <p style="color: rgba(255,255,255,0.6);">Real solutions for real businesses</p>
        </div>

        <div class="portfolio-grid">
            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="fas fa-store"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">ShopEase</h3>
                    <p class="portfolio-category">E-Commerce Platform</p>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">MediCare</h3>
                    <p class="portfolio-category">Healthcare App</p>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="fas fa-university"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">EduLearn</h3>
                    <p class="portfolio-category">E-Learning Platform</p>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">FinDash</h3>
                    <p class="portfolio-category">Financial Dashboard</p>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">LogiTrack</h3>
                    <p class="portfolio-category">Logistics System</p>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">
                    <i class="fas fa-hotel"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">StayEasy</h3>
                    <p class="portfolio-category">Hotel Booking</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-bolt"></i>
            </div>
            <h3 class="feature-title">Fast Development</h3>
            <p class="feature-description">Agile methodology ensuring quick delivery without compromising quality</p>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="feature-title">Secure Code</h3>
            <p class="feature-description">Enterprise-grade security practices to protect your data</p>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-sync-alt"></i>
            </div>
            <h3 class="feature-title">Continuous Support</h3>
            <p class="feature-description">24/7 maintenance and support for all your digital products</p>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-chart-simple"></i>
            </div>
            <h3 class="feature-title">Scalable Solutions</h3>
            <p class="feature-description">Built to grow with your business needs</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h3>Let's <span>Create</span> Something Amazing</h3>
                <p>Ready to start your project? Get in touch with us for a free consultation. We'll help you turn your ideas into reality.</p>
                
                <div class="contact-details">
                    <div class="contact-detail">
                        <div class="detail-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail-text">
                            <h4>Visit Us</h4>
                            <p>Jl. Teknologi No. 45, Jakarta</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="detail-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="detail-text">
                            <h4>Call Us</h4>
                            <p>+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div class="contact-detail">
                        <div class="detail-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="detail-text">
                            <h4>Email Us</h4>
                            <p>hello@jdtechnology.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Tell us about your project..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">
                    Send Message <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </section>
@endsection