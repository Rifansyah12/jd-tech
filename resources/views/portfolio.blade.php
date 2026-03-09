@extends('layouts.app')

@section('title', 'Our Portfolio - JD Technology')

@section('content')
    <!-- Portfolio Hero Section -->
    <section class="portfolio-hero" style="min-height: 50vh; display: flex; align-items: center; padding: 0 5%;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <div class="hero-badge" style="margin-bottom: 20px;">
                <i class="fas fa-crown"></i> OUR WORK
            </div>
            <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 20px;">
                Featured <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Projects</span>
            </h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); line-height: 1.8;">
                Beberapa project yang telah kami kerjakan untuk klien kami dari berbagai industri
            </p>
        </div>
    </section>

    <!-- Portfolio Filter -->
    <section style="padding: 0 5% 50px;">
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <button class="filter-btn active" data-filter="all" style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); color: #0a0a0a; padding: 12px 30px; border: none; border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 0 20px rgba(0,242,254,0.3);">All Projects</button>
            <button class="filter-btn" data-filter="web" style="background: transparent; color: #fff; padding: 12px 30px; border: 2px solid rgba(0,242,254,0.3); border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Web Development</button>
            <button class="filter-btn" data-filter="mobile" style="background: transparent; color: #fff; padding: 12px 30px; border: 2px solid rgba(0,242,254,0.3); border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Mobile Apps</button>
            <button class="filter-btn" data-filter="desktop" style="background: transparent; color: #fff; padding: 12px 30px; border: 2px solid rgba(0,242,254,0.3); border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Desktop Apps</button>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="portfolio-section" style="padding: 0 5% 100px;">
        <div class="portfolio-grid" id="portfolio-grid">
            <!-- E-Commerce App - Mobile -->
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                    <i class="fas fa-store"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">ShopEase</h3>
                    <p class="portfolio-category">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">React Native</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Node.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Fashion Store Mobile App dengan fitur AR Try-On</p>
                </div>
            </div>

            <!-- Clinic Management - Web -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #00f2fe, #4facfe);">
                    <i class="fas fa-hospital"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">MediCare Pro</h3>
                    <p class="portfolio-category">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Laravel</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Vue.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Sistem Manajemen Klinik dengan fitur telemedicine</p>
                </div>
            </div>

            <!-- E-Learning Platform - Web & Mobile -->
            <div class="portfolio-item" data-category="web mobile">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #FF6B6B, #FFE66D);">
                    <i class="fas fa-school"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">EduLearn</h3>
                    <p class="portfolio-category">Web & Mobile</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">React</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Flutter</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Platform Belajar Online dengan fitur live class</p>
                </div>
            </div>

            <!-- Restaurant POS - Desktop -->
            <div class="portfolio-item" data-category="desktop">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #FF512F, #DD2476);">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">QuickServe POS</h3>
                    <p class="portfolio-category">Desktop App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Electron</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">React</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Sistem Kasir Restoran dengan manajemen inventory</p>
                </div>
            </div>

            <!-- Analytics Dashboard - Web -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">FinDash</h3>
                    <p class="portfolio-category">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Next.js</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">D3.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Dashboard Analisis Data dengan real-time updates</p>
                </div>
            </div>

            <!-- Logistics System - Mobile -->
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #4568DC, #B06AB3);">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">LogiTrack</h3>
                    <p class="portfolio-category">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Kotlin</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Firebase</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Sistem Manajemen Logistik dengan GPS tracking</p>
                </div>
            </div>

            <!-- Hotel Booking - Web -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #f093fb, #f5576c);">
                    <i class="fas fa-hotel"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">StayEasy</h3>
                    <p class="portfolio-category">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">PHP</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">MySQL</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Sistem Reservasi Hotel dengan payment gateway</p>
                </div>
            </div>

            <!-- Banking App - Mobile -->
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #00b4db, #0083b0);">
                    <i class="fas fa-bank"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">BankEase</h3>
                    <p class="portfolio-category">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Swift</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Kotlin</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Aplikasi Mobile Banking dengan biometric auth</p>
                </div>
            </div>

            <!-- Game Development - Mobile -->
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #f46b45, #eea849);">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">EduGame</h3>
                    <p class="portfolio-category">Mobile Game</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Unity</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">C#</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Game Edukasi Anak dengan sistem reward</p>
                </div>
            </div>

            <!-- HR Management - Web -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #5f2c82, #49a09d);">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">HR Pro</h3>
                    <p class="portfolio-category">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Laravel</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Vue.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Sistem Manajemen HR dengan payroll automation</p>
                </div>
            </div>

            <!-- Social Media App - Mobile -->
            <div class="portfolio-item" data-category="mobile">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #ff0084, #33001b);">
                    <i class="fas fa-hashtag"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">SocialFlow</h3>
                    <p class="portfolio-category">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Flutter</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">Firebase</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Aplikasi Social Media untuk komunitas kreatif</p>
                </div>
            </div>

            <!-- Inventory System - Desktop -->
            <div class="portfolio-item" data-category="desktop">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #536976, #292e49);">
                    <i class="fas fa-boxes"></i>
                </div>
                <div class="portfolio-overlay">
                    <h3 class="portfolio-title">StockMaster</h3>
                    <p class="portfolio-category">Desktop App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">C#</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem;">.NET</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9;">Sistem Manajemen Inventory dengan barcode scanner</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section style="padding: 80px 5% 100px; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(0,242,254,0.05); border-radius: 50%; filter: blur(80px); top: -100px; right: -100px;"></div>
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(79,172,254,0.05); border-radius: 50%; filter: blur(80px); bottom: -100px; left: -100px;"></div>
        </div>

        <div class="section-header" style="margin-bottom: 60px;">
            <div class="section-subtitle">TESTIMONIALS</div>
            <h2 class="section-title">What Our <span>Clients Say</span></h2>
            <p style="color: rgba(255,255,255,0.6);">Kepercayaan klien adalah kebanggaan terbesar kami</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <!-- Testimonial 1 -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <i class="fas fa-quote-right" style="font-size: 40px; color: #00f2fe; opacity: 0.5;"></i>
                    <div style="display: flex; gap: 5px;">
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                    </div>
                </div>
                <p style="color: rgba(255,255,255,0.8); line-height: 1.8; font-size: 1.1rem; margin-bottom: 30px;">
                    "JD Technology membantu kami membuat aplikasi yang sangat sesuai dengan kebutuhan bisnis. Profesional dan tepat waktu! Mereka benar-benar memahami visi kami."
                </p>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 24px; font-weight: 600; color: #0a0a0a;">BS</span>
                    </div>
                    <div>
                        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 5px;">Budi Santoso</h4>
                        <p style="color: rgba(255,255,255,0.5);">CEO, Toko Makmur</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <i class="fas fa-quote-right" style="font-size: 40px; color: #00f2fe; opacity: 0.5;"></i>
                    <div style="display: flex; gap: 5px;">
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                    </div>
                </div>
                <p style="color: rgba(255,255,255,0.8); line-height: 1.8; font-size: 1.1rem; margin-bottom: 30px;">
                    "Tim sangat responsif dan memahami apa yang kami inginkan. Hasilnya melebihi ekspektasi! Aplikasi yang dibuat sangat user-friendly dan performanya luar biasa."
                </p>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 24px; font-weight: 600; color: #0a0a0a;">DL</span>
                    </div>
                    <div>
                        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 5px;">Dewi Lestari</h4>
                        <p style="color: rgba(255,255,255,0.5);">Owner, Dewi Fashion</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <i class="fas fa-quote-right" style="font-size: 40px; color: #00f2fe; opacity: 0.5;"></i>
                    <div style="display: flex; gap: 5px;">
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                        <i class="fas fa-star" style="color: #FFD700;"></i>
                    </div>
                </div>
                <p style="color: rgba(255,255,255,0.8); line-height: 1.8; font-size: 1.1rem; margin-bottom: 30px;">
                    "Pelayanan excellent, support setelah project selesai juga sangat membantu. Mereka selalu siap membantu ketika kami butuh pengembangan fitur tambahan."
                </p>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 24px; font-weight: 600; color: #0a0a0a;">RH</span>
                    </div>
                    <div>
                        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 5px;">Rudi Hermawan</h4>
                        <p style="color: rgba(255,255,255,0.5);">Manager, PT Maju Jaya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 0 5% 100px; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto; padding: 60px; background: linear-gradient(135deg, rgba(0,242,254,0.1), rgba(79,172,254,0.1)); border-radius: 50px; border: 1px solid rgba(0,242,254,0.2);">
            <h2 style="font-size: 3rem; font-weight: 700; margin-bottom: 20px;">
                Have a <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Project</span> in Mind?
            </h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 40px;">
                Mari diskusikan ide Anda dan wujudkan bersama tim profesional kami
            </p>
            <a href="{{ route('contact') }}" class="btn-primary" style="font-size: 1.2rem; padding: 18px 50px;">
                <i class="fas fa-paper-plane"></i> Start Your Project
            </a>
        </div>
    </section>

    <!-- Filter Script -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Update active button
                    filterButtons.forEach(btn => {
                        btn.style.background = 'transparent';
                        btn.style.color = '#fff';
                        btn.style.border = '2px solid rgba(0,242,254,0.3)';
                        btn.style.boxShadow = 'none';
                    });
                    
                    button.style.background = 'linear-gradient(135deg, #00f2fe 0%, #4facfe 100%)';
                    button.style.color = '#0a0a0a';
                    button.style.border = 'none';
                    button.style.boxShadow = '0 0 20px rgba(0,242,254,0.3)';

                    // Filter items
                    const filterValue = button.getAttribute('data-filter');
                    
                    portfolioItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 100);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
    @endpush
@endsection