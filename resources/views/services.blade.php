@extends('layouts.app')

@section('title', 'Our Services - JD Technology')

@section('content')
    <!-- Services Hero Section -->
    <section class="services-hero" style="min-height: 50vh; display: flex; align-items: center; padding: 0 5%;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <div class="hero-badge" style="margin-bottom: 20px;">
                <i class="fas fa-crown"></i> WHAT WE OFFER
            </div>
            <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 20px;">
                Our <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Services</span>
            </h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); line-height: 1.8;">
                Solusi lengkap untuk kebutuhan digital Anda dengan teknologi terkini dan tim profesional
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-section" style="padding: 50px 5% 100px;">
        <div class="services-grid">
            <!-- Web Development -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-description">
                    Pembuatan website profesional dengan teknologi terkini, responsive dan SEO friendly.
                    Kami membangun website company profile, landing page, hingga web application kompleks.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Laravel</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">React</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Vue.js</span>
                </div>
                <a href="{{ route('contact') }}" class="service-link">
                    Get Quote <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Mobile Apps -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="service-title">Mobile Apps</h3>
                <p class="service-description">
                    Aplikasi mobile Android & iOS dengan performa tinggi dan UI/UX yang menarik.
                    Kami mengembangkan native dan cross-platform apps sesuai kebutuhan Anda.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">React Native</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Flutter</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Kotlin</span>
                </div>
                <a href="{{ route('contact') }}" class="service-link">
                    Get Quote <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- E-Commerce -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h3 class="service-title">E-Commerce</h3>
                <p class="service-description">
                    Solusi toko online lengkap dengan sistem pembayaran terintegrasi.
                    Fitur manajemen produk, inventory, dan laporan penjualan real-time.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Shopify</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">WooCommerce</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Custom</span>
                </div>
                <a href="{{ route('contact') }}" class="service-link">
                    Get Quote <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- UI/UX Design -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="service-title">UI/UX Design</h3>
                <p class="service-description">
                    Desain antarmuka yang modern, intuitif, dan user-friendly.
                    Kami fokus pada user experience untuk memastikan produk Anda mudah digunakan.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Figma</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Adobe XD</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Sketch</span>
                </div>
                <a href="{{ route('contact') }}" class="service-link">
                    Get Quote <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Database Management -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="service-title">Database Management</h3>
                <p class="service-description">
                    Pengelolaan database yang aman, cepat, dan scalable.
                    Layanan migrasi, optimasi, dan maintenance database.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">MySQL</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">PostgreSQL</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">MongoDB</span>
                </div>
                <a href="{{ route('contact') }}" class="service-link">
                    Get Quote <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Cloud Solutions -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3 class="service-title">Cloud Solutions</h3>
                <p class="service-description">
                    Deployment dan hosting di cloud untuk performa optimal.
                    Kami menyediakan solusi cloud computing yang scalable dan reliable.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">AWS</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Google Cloud</span>
                    <span style="background: rgba(0,242,254,0.1); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; border: 1px solid rgba(0,242,254,0.2);">Azure</span>
                </div>
                <a href="{{ route('contact') }}" class="service-link">
                    Get Quote <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section style="padding: 80px 5% 100px; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(0,242,254,0.05); border-radius: 50%; filter: blur(80px); top: -100px; right: -100px;"></div>
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(79,172,254,0.05); border-radius: 50%; filter: blur(80px); bottom: -100px; left: -100px;"></div>
        </div>

        <div class="section-header" style="margin-bottom: 60px;">
            <div class="section-subtitle">WHY CHOOSE US</div>
            <h2 class="section-title">Why We're <span>Different</span></h2>
            <p style="color: rgba(255,255,255,0.6);">Keunggulan yang membuat kami menjadi mitra terbaik untuk bisnis Anda</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px; max-width: 1200px; margin: 0 auto;">
            <!-- Fast Delivery -->
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; color: #00f2fe;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 15px;">Fast Delivery</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">Tepat waktu sesuai deadline yang disepakati dengan proses development yang efisien</p>
            </div>

            <!-- Quality Guarantee -->
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; color: #00f2fe;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 15px;">Quality Guarantee</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">Garansi kualitas dan support setelah project selesai untuk memastikan kepuasan Anda</p>
            </div>

            <!-- 24/7 Support -->
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; color: #00f2fe;">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 15px;">24/7 Support</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">Tim support siap membantu kapan saja Anda membutuhkan bantuan teknis</p>
            </div>

            <!-- Competitive Price -->
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; color: #00f2fe;">
                    <i class="fas fa-hand-hold-usd"></i>
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 15px;">Competitive Price</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">Harga kompetitif dengan kualitas terbaik dan value yang sesuai dengan budget Anda</p>
            </div>

            <!-- Experienced Team -->
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; color: #00f2fe;">
                    <i class="fas fa-users"></i>
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 15px;">Experienced Team</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">Tim developer berpengalaman dengan portofolio yang telah teruji di berbagai industri</p>
            </div>

            <!-- Modern Technology -->
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 36px; color: #00f2fe;">
                    <i class="fas fa-microchip"></i>
                </div>
                <h3 style="font-size: 1.8rem; font-weight: 600; margin-bottom: 15px;">Modern Technology</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">Menggunakan teknologi terkini untuk memastikan produk Anda tetap relevan dan kompetitif</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 80px 5%; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto; padding: 60px; background: linear-gradient(135deg, rgba(0,242,254,0.1), rgba(79,172,254,0.1)); border-radius: 50px; border: 1px solid rgba(0,242,254,0.2);">
            <h2 style="font-size: 3rem; font-weight: 700; margin-bottom: 20px;">
                Ready to <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Start</span> Your Project?
            </h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 40px;">
                Konsultasi gratis dengan tim kami dan dapatkan solusi terbaik untuk bisnis Anda
            </p>
            <a href="{{ route('contact') }}" class="btn-primary" style="font-size: 1.2rem; padding: 18px 50px;">
                <i class="fas fa-headset"></i> Free Consultation
            </a>
        </div>
    </section>
@endsection