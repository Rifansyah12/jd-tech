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

@push('styles')
<style>
    /* Additional responsive styles for home page */
    
    /* Hero Section Responsive */
    @media (max-width: 1200px) {
        .hero-title {
            font-size: 3.5rem !important;
        }
        
        .hero-visual {
            transform: scale(0.9);
        }
    }
    
    @media (max-width: 992px) {
        .hero-section {
            flex-direction: column;
            text-align: center;
            padding-top: 120px !important;
        }
        
        .hero-content {
            max-width: 100% !important;
            margin-bottom: 60px;
        }
        
        .hero-title {
            font-size: 3rem !important;
        }
        
        .hero-description {
            margin-left: auto;
            margin-right: auto;
        }
        
        .hero-stats {
            justify-content: center;
        }
        
        .hero-buttons {
            justify-content: center;
        }
        
        .hero-visual {
            display: block !important;
            height: 400px !important;
            transform: scale(0.8);
        }
        
        .services-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        
        .portfolio-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        
        .features-section {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem !important;
        }
        
        .hero-description {
            font-size: 1rem !important;
        }
        
        .hero-stats {
            flex-wrap: wrap;
            gap: 20px !important;
        }
        
        .stat-item {
            flex: 1 1 calc(50% - 20px);
            min-width: 120px;
        }
        
        .hero-buttons {
            flex-direction: column;
            gap: 15px !important;
        }
        
        .hero-buttons a {
            width: 100%;
            text-align: center;
            justify-content: center;
        }
        
        .hero-visual {
            display: none !important;
        }
        
        .services-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .service-card {
            padding: 30px !important;
        }
        
        .service-title {
            font-size: 1.5rem !important;
        }
        
        .portfolio-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .portfolio-item {
            height: 250px !important;
        }
        
        .features-section {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
            padding: 60px 5% !important;
        }
        
        .feature-item {
            max-width: 300px;
            margin: 0 auto;
        }
        
        .contact-container {
            grid-template-columns: 1fr !important;
            padding: 40px !important;
        }
        
        .contact-info {
            text-align: center;
        }
        
        .contact-detail {
            flex-direction: column;
            text-align: center;
            align-items: center !important;
        }
        
        .detail-icon {
            margin-bottom: 10px;
        }
        
        .section-title {
            font-size: 2.2rem !important;
        }
    }
    
    @media (max-width: 480px) {
        .hero-title {
            font-size: 2rem !important;
        }
        
        .hero-badge {
            font-size: 12px !important;
            padding: 6px 15px !important;
        }
        
        .stat-item {
            flex: 1 1 100%;
        }
        
        .stat-number {
            font-size: 2rem !important;
        }
        
        .stat-label {
            font-size: 0.8rem !important;
        }
        
        .section-title {
            font-size: 1.8rem !important;
        }
        
        .service-icon {
            width: 60px !important;
            height: 60px !important;
            font-size: 28px !important;
        }
        
        .portfolio-item {
            height: 200px !important;
        }
        
        .portfolio-title {
            font-size: 1.5rem !important;
        }
        
        .contact-container {
            padding: 30px 20px !important;
        }
        
        .contact-info h3 {
            font-size: 1.8rem !important;
        }
        
        .contact-info p {
            font-size: 0.95rem !important;
        }
        
        .detail-text h4 {
            font-size: 0.9rem !important;
        }
        
        .detail-text p {
            font-size: 1rem !important;
        }
        
        .form-control {
            padding: 14px 18px !important;
        }
        
        .btn-submit {
            width: 100%;
        }
    }
    
    /* Fix for cube animation on smaller screens */
    @media (max-width: 992px) and (min-width: 769px) {
        .cube {
            width: 300px !important;
            height: 300px !important;
        }
        
        .cube-face {
            border-radius: 20px !important;
        }
        
        .cube-face.front { transform: translateZ(150px) !important; }
        .cube-face.back { transform: rotateY(180deg) translateZ(150px) !important; }
        .cube-face.right { transform: rotateY(90deg) translateZ(150px) !important; }
        .cube-face.left { transform: rotateY(-90deg) translateZ(150px) !important; }
        .cube-face.top { transform: rotateX(90deg) translateZ(150px) !important; }
        .cube-face.bottom { transform: rotateX(-90deg) translateZ(150px) !important; }
        
        .tech-stack {
            bottom: 30px !important;
            right: 30px !important;
        }
        
        .tech-item {
            width: 50px !important;
            height: 50px !important;
            font-size: 24px !important;
        }
    }
    
    /* Ensure smooth transitions */
    .hero-section,
    .hero-content,
    .hero-visual,
    .services-grid,
    .service-card,
    .portfolio-grid,
    .portfolio-item,
    .features-section,
    .contact-container {
        transition: all 0.3s ease;
    }
    
    /* Fix for overlapping issues */
    .hero-section {
        position: relative;
        z-index: 1;
    }
    
    /* Improve readability on mobile */
    .service-description,
    .feature-description,
    .contact-info p {
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    
    /* Better touch targets for mobile */
    .btn-primary,
    .btn-secondary,
    .btn-submit,
    .service-link {
        min-height: 44px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Fix for form inputs on mobile */
    .form-control {
        font-size: 16px !important; /* Prevents zoom on iOS */
    }
    
    /* Animation adjustments for mobile */
    @media (prefers-reduced-motion: reduce) {
        .cube,
        .tech-item,
        .service-card,
        .portfolio-item {
            animation: none !important;
            transition: none !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form submission handling
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple form validation
            const inputs = this.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#ff4444';
                    
                    // Reset border after 3 seconds
                    setTimeout(() => {
                        input.style.borderColor = 'rgba(0,242,254,0.2)';
                    }, 3000);
                }
            });
            
            if (isValid) {
                // Show loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                submitBtn.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.className = 'success-message';
                    successMessage.innerHTML = '<i class="fas fa-check-circle"></i> Thank you! We\'ll contact you soon.';
                    successMessage.style.cssText = `
                        margin-top: 20px;
                        padding: 15px;
                        background: rgba(0,242,254,0.1);
                        border: 1px solid #00f2fe;
                        border-radius: 10px;
                        color: #00f2fe;
                        text-align: center;
                    `;
                    
                    this.appendChild(successMessage);
                    
                    // Reset form
                    this.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    
                    // Remove success message after 5 seconds
                    setTimeout(() => {
                        successMessage.remove();
                    }, 5000);
                }, 2000);
            }
        });
    }
    
    // Smooth scroll for anchor links
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
    
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements
    document.querySelectorAll('.service-card, .portfolio-item, .feature-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
</script>
@endpush