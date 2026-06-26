@extends('layouts.app')

@section('title', 'Konsultasi Gratis - Jannah Digital Teknologi | Jasa Web & Aplikasi Bandung')

@section('meta_description', 'Hubungi Jannah Digital Teknologi untuk konsultasi gratis pembuatan website, aplikasi, atau bot Telegram. Harga terjangkau, garansi, dan tim profesional di Bandung.')

@section('meta_keywords', 'konsultasi pembuatan website, harga jasa pembuatan website, biaya bikin aplikasi android, tarif jasa bot telegram, jasa pembuatan website murah Bandung, jasa pembuatan web garansi, jasa pembuatan website cepat, kontak Jannah Digital Teknologi')

@section('content')
    <!-- Contact Hero Section -->
    <section class="contact-hero" style="min-height: 50vh; display: flex; align-items: center; padding: 0 5%; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <div style="position: absolute; width: 400px; height: 400px; background: rgba(99,102,241,0.05); border-radius: 50%; filter: blur(100px); top: -100px; right: -100px;"></div>
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(139,92,246,0.05); border-radius: 50%; filter: blur(80px); bottom: -50px; left: -50px;"></div>
        </div>

        <div class="contact-hero-content" style="text-align: center; max-width: 800px; margin: 0 auto;">
            <div class="hero-badge" style="margin-bottom: 20px;">
                <i class="fas fa-phone-alt"></i> GET IN TOUCH
            </div>
            <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 20px;">
                Let's <span style="background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Work Together</span>
            </h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); line-height: 1.8; max-width: 600px; margin: 0 auto;">
                Punya pertanyaan atau ingin mendiskusikan proyek Anda? Tim kami siap membantu mewujudkan ide Anda.
            </p>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section style="padding: 50px 5% 80px;">
        <div class="contact-info-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; max-width: 1200px; margin: 0 auto;">
            <!-- Visit Us -->
            <div class="info-card" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #6366F1;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #6366F1;">Visit Us</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    Jl. Pasirkoja<br>Bandung, Indonesia 40221
                </p>
            </div>

            <!-- Call Us -->
            <div class="info-card" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #6366F1;">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #6366F1;">Call Us</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    @php
                        $phone1 = '+62 85294191522';
                        $phone2 = '+62 89696120616';
                        $cleanPhone1 = preg_replace('/[^0-9+]/', '', $phone1);
                        $cleanPhone2 = preg_replace('/[^0-9+]/', '', $phone2);
                    @endphp
                    <a href="tel:{{ $cleanPhone1 }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s;" 
                    onmouseover="this.style.color='#6366F1'" 
                    onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                        <i class="fas fa-phone" style="margin-right: 8px;"></i> {{ $phone1 }}
                    </a><br>
                    <a href="tel:{{ $cleanPhone2 }}" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s; margin-top: 8px; display: inline-block;" 
                    onmouseover="this.style.color='#6366F1'" 
                    onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                        <i class="fas fa-phone" style="margin-right: 8px;"></i> {{ $phone2 }}
                    </a>
                </p>
            </div>

            <!-- Email Us -->
            <div class="info-card" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #6366F1;">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #6366F1;">Email Us</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    <a href="mailto:info@jdtechnology.com?subject=Inquiry%20from%20Website&body=Hello%20JD%20Technology%2C%0A%0AI%20would%20like%20to%20inquire%20about...%0A%0AThank%20you." 
                    style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s ease; display: inline-block; margin-bottom: 8px;" 
                    onmouseover="this.style.color='#6366F1'" 
                    onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                        <i class="fas fa-envelope" style="margin-right: 8px; font-size: 14px;"></i> syahr9610@gmail.com
                    </a><br>
                    <a href="mailto:support@jdtechnology.com?subject=Support%20Request&body=Hello%20Support%20Team%2C%0A%0AI%20need%20help%20with...%0A%0AThank%20you." 
                    style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s ease; display: inline-block;" 
                    onmouseover="this.style.color='#6366F1'" 
                    onmouseout="this.style.color='rgba(255,255,255,0.7)'">
                        <i class="fas fa-envelope" style="margin-right: 8px; font-size: 14px;"></i> luminawebdepelopment@gmail.com
                    </a>
                </p>
            </div>

            <!-- Working Hours -->
            <div class="info-card" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #6366F1;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #6366F1;">Working Hours</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    Mon - Fri: 09:00 - 18:00<br>Sat: 09:00 - 15:00
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section style="padding: 0 5% 100px;">
        <div class="contact-main-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; max-width: 1200px; margin: 0 auto;">
            <!-- Contact Form -->
            <div class="contact-form-container" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.1); border-radius: 40px; padding: 50px;">
                <div style="margin-bottom: 40px;">
                    <div class="section-subtitle" style="margin-bottom: 10px;">SEND US MESSAGE</div>
                    <h2 class="section-title" style="font-size: 2.5rem;">Get in <span>Touch</span></h2>
                    <p style="color: rgba(255,255,255,0.6);">Isi form di bawah ini dan tim kami akan segera menghubungi Anda</p>
                </div>

                @if(session('success'))
                <div style="margin-bottom: 20px; padding: 15px; background: rgba(99,102,241,0.1); border: 1px solid #6366F1; border-radius: 10px; color: #6366F1; text-align: center;">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
                @endif

                @if($errors->any())
                <div style="margin-bottom: 20px; padding: 15px; background: rgba(255,100,100,0.1); border: 1px solid rgba(255,100,100,0.5); border-radius: 10px; color: #ff6b6b;">
                    @foreach($errors->all() as $error)
                        <p><i class="fas fa-exclamation-circle"></i> {{ $error }}</p>
                    @endforeach
                </div>
                @endif

                <form id="contactForm" method="POST" action="{{ route('contact.store') }}" style="display: flex; flex-direction: column; gap: 20px;">
                    @csrf
                    <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required style="background: rgba(255,255,255,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 15px; padding: 16px 20px; color: #0a0a0a; width: 100%;">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}" required style="background: rgba(255,255,255,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 15px; padding: 16px 20px; color: #0a0a0a; width: 100%;">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 15px; padding: 16px 20px; color: #0a0a0a; width: 100%;">
                    </div>

                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Tell us about your project..." rows="5" required style="background: rgba(255,255,255,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 15px; padding: 16px 20px; color: #0a0a0a; width: 100%; resize: vertical;">{{ old('message') }}</textarea>
                    </div>

                    <div class="form-actions" style="display: flex; gap: 15px; align-items: center; flex-wrap: wrap;">
                        <button type="submit" class="btn-primary" style="border: none; cursor: pointer; padding: 16px 40px;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                        <span style="color: rgba(255,255,255,0.4); font-size: 0.9rem;">
                            <i class="fas fa-clock"></i> Response within 24 hours
                        </span>
                    </div>
                </form>
            </div>

            <!-- Additional Info & Map -->
            <div style="display: flex; flex-direction: column; gap: 30px;">
                <!-- FAQ Preview -->
                <div class="faq-container" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.1); border-radius: 40px; padding: 40px;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 30px; color: #6366F1;">Frequently Asked</h3>
                    
                    <div class="faq-item" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid rgba(99,102,241,0.1);">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #6366F1; font-size: 14px;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">How fast can you start?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Kami bisa memulai proyek Anda dalam 1-2 hari setelah kesepakatan dan pembayaran DP.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid rgba(99,102,241,0.1);">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #6366F1; font-size: 14px;">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">Do you provide maintenance?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Ya, kami menyediakan layanan maintenance dan support setelah project selesai dengan biaya terjangkau.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid rgba(99,102,241,0.1);">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #6366F1; font-size: 14px;">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">What payment methods?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Kami menerima transfer bank (BCA, Mandiri, BNI), kartu kredit, dan PayPal untuk klien internasional.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(99,102,241,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #6366F1; font-size: 14px;">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">Do you sign NDAs?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Ya, kami siap menandatangani Non-Disclosure Agreement untuk melindungi kerahasiaan proyek Anda.</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        <a href="{{ route('faq') }}" style="color: #6366F1; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                            View all FAQs <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Map / Location -->
                <div class="map-container" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.1); border-radius: 40px; padding: 40px;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 20px; color: #6366F1;">Our Location</h3>
                    
                    <!-- Google Map Embed -->
                    <div style="width: 100%; height: 250px; border-radius: 20px; margin-bottom: 25px; overflow: hidden;">
                        <iframe
                            src="https://maps.google.com/maps?q=-6.9274027,107.5851816&z=17&output=embed"
                            width="100%" height="100%" style="border:0; display:block;"
                            allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="map-buttons" style="display: flex; gap: 15px; align-items: center; flex-wrap: wrap;">
                        <a href="https://maps.app.goo.gl/JannahDigitalTeknologi" target="_blank" class="map-btn" style="flex: 1; background: rgba(99,102,241,0.1); border: 1px solid rgba(99,102,241,0.2); border-radius: 50px; padding: 12px; text-align: center; color: white; text-decoration: none; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;">
                            <i class="fab fa-google"></i> Google Maps
                        </a>
                        <a href="https://www.google.com/maps/dir//-6.9274027,107.5851816" target="_blank" class="map-btn" style="flex: 1; background: rgba(99,102,241,0.1); border: 1px solid rgba(99,102,241,0.2); border-radius: 50px; padding: 12px; text-align: center; color: white; text-decoration: none; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;">
                            <i class="fas fa-directions"></i> Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section style="padding: 0 5% 100px;">
        <div style="text-align: center; margin-bottom: 40px;">
            <div class="section-subtitle">FOLLOW US</div>
            <h2 class="section-title">Stay <span>Connected</span></h2>
            <p style="color: rgba(255,255,255,0.6);">Ikuti kami di media sosial untuk update terbaru</p>
        </div>

        <div class="social-grid" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <a href="#" class="social-icon" style="width: 70px; height: 70px; background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0a0a0a; font-size: 30px; transition: all 0.3s ease;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon" style="width: 70px; height: 70px; background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0a0a0a; font-size: 30px; transition: all 0.3s ease;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon" style="width: 70px; height: 70px; background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0a0a0a; font-size: 30px; transition: all 0.3s ease;">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="social-icon" style="width: 70px; height: 70px; background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0a0a0a; font-size: 30px; transition: all 0.3s ease;">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="social-icon" style="width: 70px; height: 70px; background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0a0a0a; font-size: 30px; transition: all 0.3s ease;">
                <i class="fab fa-github"></i>
            </a>
            <a href="#" class="social-icon" style="width: 70px; height: 70px; background: rgba(0,0,0,0.03); border: 1px solid rgba(99,102,241,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #0a0a0a; font-size: 30px; transition: all 0.3s ease;">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 0 5% 100px;">
        <div class="cta-container" style="max-width: 800px; margin: 0 auto; padding: 60px; background: linear-gradient(135deg, rgba(99,102,241,0.1), rgba(139,92,246,0.1)); border-radius: 50px; border: 1px solid rgba(99,102,241,0.2); text-align: center;">
            <i class="fas fa-headset" style="font-size: 60px; color: #6366F1; margin-bottom: 20px;"></i>
            <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 20px;">
                Need <span style="background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Immediate</span> Help?
            </h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 30px;">
                Tim support kami siap membantu Anda 24/7 melalui live chat atau telepon
            </p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="#" class="btn-primary" style="padding: 16px 40px;">
                    <i class="fas fa-comment"></i> Live Chat
                </a>
                <a href="tel:+621234567890" class="btn-secondary" style="padding: 16px 40px;">
                    <i class="fas fa-phone-alt"></i> Call Now
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Animations */
    @keyframes ping {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        75%, 100% {
            transform: scale(2);
            opacity: 0;
        }
    }

    /* Hover Effects */
    .info-card {
        transition: all 0.3s ease;
    }
    
    .info-card:hover {
        transform: translateY(-10px) !important;
        border-color: #6366F1 !important;
        box-shadow: 0 0 40px rgba(99,102,241,0.2) !important;
    }

    .map-btn:hover {
        background: rgba(99,102,241,0.2) !important;
        border-color: #6366F1 !important;
    }

    .social-icon:hover {
        transform: translateY(-10px) scale(1.1) !important;
        box-shadow: 0 0 30px currentColor !important;
    }

    .social-icon:nth-child(1):hover { background: #1877f2 !important; border-color: #1877f2 !important; }
    .social-icon:nth-child(2):hover { background: #1da1f2 !important; border-color: #1da1f2 !important; }
    .social-icon:nth-child(3):hover { background: #e4405f !important; border-color: #e4405f !important; }
    .social-icon:nth-child(4):hover { background: #0077b5 !important; border-color: #0077b5 !important; }
    .social-icon:nth-child(5):hover { background: #333 !important; border-color: #333 !important; }
    .social-icon:nth-child(6):hover { background: #ff0000 !important; border-color: #ff0000 !important; }

    /* Responsive Styles */
    @media (max-width: 1200px) {
        .contact-hero h1 {
            font-size: 3.5rem !important;
        }
    }

    @media (max-width: 992px) {
        /* Contact Info Cards */
        .contact-info-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        
        /* Contact Form & Map */
        .contact-main-grid {
            grid-template-columns: 1fr !important;
        }
        
        .contact-hero h1 {
            font-size: 3rem !important;
        }
    }

    @media (max-width: 768px) {
        /* Hero Section */
        .contact-hero h1 {
            font-size: 2.5rem !important;
        }
        
        .contact-hero p {
            font-size: 1rem !important;
        }
        
        /* Contact Info Cards */
        .contact-info-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .info-card {
            padding: 30px !important;
        }
        
        .info-card h3 {
            font-size: 1.3rem !important;
        }
        
        /* Contact Form */
        .contact-form-container {
            padding: 30px !important;
        }
        
        .contact-form-container .section-title {
            font-size: 2rem !important;
        }
        
        .form-row {
            grid-template-columns: 1fr !important;
        }
        
        .form-actions {
            flex-direction: column;
            align-items: flex-start !important;
        }
        
        .form-actions button {
            width: 100%;
        }
        
        /* FAQ Section */
        .faq-container {
            padding: 30px !important;
        }
        
        .faq-container h3 {
            font-size: 1.5rem !important;
        }
        
        .faq-item h4 {
            font-size: 1rem !important;
        }
        
        /* Map Section */
        .map-container {
            padding: 30px !important;
        }
        
        .map-container h3 {
            font-size: 1.5rem !important;
        }
        
        .map-placeholder {
            height: 200px !important;
        }
        
        .map-buttons {
            flex-direction: column;
        }
        
        .map-btn {
            width: 100%;
        }
        
        /* Social Media */
        .social-grid {
            gap: 15px !important;
        }
        
        .social-icon {
            width: 50px !important;
            height: 50px !important;
            font-size: 20px !important;
        }
        
        /* CTA Section */
        .cta-container {
            padding: 40px 20px !important;
        }
        
        .cta-container h2 {
            font-size: 2rem !important;
        }
        
        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .cta-buttons a {
            width: 100%;
            max-width: 300px;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        /* Hero Section */
        .contact-hero h1 {
            font-size: 2rem !important;
        }
        
        /* Contact Form */
        .contact-form-container {
            padding: 20px !important;
        }
        
        .contact-form-container .section-title {
            font-size: 1.8rem !important;
        }
        
        /* FAQ Section */
        .faq-item > div {
            flex-direction: column;
            text-align: center;
            align-items: center !important;
        }
        
        /* Social Media */
        .social-grid {
            gap: 10px !important;
        }
        
        .social-icon {
            width: 45px !important;
            height: 45px !important;
            font-size: 18px !important;
        }
        
        /* CTA Section */
        .cta-container {
            padding: 30px 15px !important;
        }
        
        .cta-container h2 {
            font-size: 1.8rem !important;
        }
        
        .cta-container p {
            font-size: 1rem !important;
        }
    }
    
    /* Untuk phone dan email links */
    .contact-link {
        color: var(--t2);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
    }

    .contact-link:hover {
        color: #6366F1;
        transform: translateX(5px);
    }

    .contact-link i {
        font-size: 14px;
        width: 16px;
    }

    /* ── Color fixes: white text → dark text (light theme) ── */
    /* Hero */
    .contact-hero-content p[style*="rgba(255,255,255"] { color: var(--t2) !important; }
    /* Info cards - text and links */
    .info-card p[style*="rgba(255,255,255"]   { color: var(--t2) !important; }
    .info-card a[style*="rgba(255,255,255"]    { color: var(--t2) !important; }
    .info-card a[style*="rgba(255,255,255"]:hover { color: var(--accent) !important; }
    /* Contact form container texts */
    .contact-form-container p[style*="rgba(255,255,255"],
    .contact-form-container span[style*="rgba(255,255,255"] { color: var(--t3) !important; }
    /* FAQ inside contact */
    .faq-container p[style*="rgba(255,255,255"],
    .faq-item p[style*="rgba(255,255,255"]   { color: var(--t2) !important; }
    /* Social follow section paragraph */
    [style*="padding: 0 5% 100px"] > div > p[style*="rgba(255,255,255"] { color: var(--t2) !important; }
    /* CTA section */
    .cta-container p[style*="rgba(255,255,255"] { color: var(--t2) !important; }
    /* "Response within 24 hours" text */
    .form-actions span[style*="rgba(255,255,255"] { color: var(--t3) !important; }
    /* Section subtitle & header texts */
    .section-header p[style*="rgba(255,255,255"] { color: var(--t2) !important; }
    /* Map buttons text */
    .map-btn { color: var(--t1) !important; }
    /* Social icons: dark default, white on colored hover bg */
    .social-icon { color: var(--t2) !important; }
    .social-icon:hover { color: #fff !important; }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects for info cards (backup for inline styles)
    const infoCards = document.querySelectorAll('.info-card');
    infoCards.forEach(card => {
        card.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.borderColor = '#6366F1';
            this.style.boxShadow = '0 0 40px rgba(99,102,241,0.2)';
        });
        
        card.addEventListener('mouseout', function() {
            this.style.transform = 'translateY(0)';
            this.style.borderColor = 'rgba(99,102,241,0.1)';
            this.style.boxShadow = 'none';
        });
    });

    // Add hover effects for map buttons
    const mapBtns = document.querySelectorAll('.map-btn');
    mapBtns.forEach(btn => {
        btn.addEventListener('mouseover', function() {
            this.style.background = 'rgba(99,102,241,0.2)';
            this.style.borderColor = '#6366F1';
        });
        
        btn.addEventListener('mouseout', function() {
            this.style.background = 'rgba(99,102,241,0.1)';
            this.style.borderColor = 'rgba(99,102,241,0.2)';
        });
    });

    // Add hover effects for social icons
    const socialIcons = document.querySelectorAll('.social-icon');
    const socialColors = ['#1877f2', '#1da1f2', '#e4405f', '#0077b5', '#333', '#ff0000'];
    
    socialIcons.forEach((icon, index) => {
        icon.addEventListener('mouseover', function() {
            this.style.background = socialColors[index];
            this.style.borderColor = socialColors[index];
            this.style.transform = 'translateY(-10px) scale(1.1)';
            this.style.boxShadow = `0 0 30px ${socialColors[index]}`;
        });
        
        icon.addEventListener('mouseout', function() {
            this.style.background = 'rgba(0,0,0,0.03)';
            this.style.borderColor = 'rgba(99,102,241,0.2)';
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = 'none';
        });
    });
});
</script>
@endpush