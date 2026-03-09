@extends('layouts.app')

@section('title', 'Contact Us - JD Technology')

@section('content')
    <!-- Contact Hero Section -->
    <section class="contact-hero" style="min-height: 50vh; display: flex; align-items: center; padding: 0 5%; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <div style="position: absolute; width: 400px; height: 400px; background: rgba(0,242,254,0.05); border-radius: 50%; filter: blur(100px); top: -100px; right: -100px;"></div>
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(79,172,254,0.05); border-radius: 50%; filter: blur(80px); bottom: -50px; left: -50px;"></div>
        </div>

        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <div class="hero-badge" style="margin-bottom: 20px;">
                <i class="fas fa-phone-alt"></i> GET IN TOUCH
            </div>
            <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 20px;">
                Let's <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Work Together</span>
            </h1>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); line-height: 1.8; max-width: 600px; margin: 0 auto;">
                Punya pertanyaan atau ingin mendiskusikan proyek Anda? Tim kami siap membantu mewujudkan ide Anda.
            </p>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section style="padding: 50px 5% 80px;">
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; max-width: 1200px; margin: 0 auto;">
            <!-- Visit Us -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #00f2fe;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #00f2fe;">Visit Us</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    Jl. Teknologi No. 123<br>Jakarta, Indonesia 12345
                </p>
            </div>

            <!-- Call Us -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #00f2fe;">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #00f2fe;">Call Us</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    +62 123 4567 890<br>+62 890 1234 567
                </p>
            </div>

            <!-- Email Us -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #00f2fe;">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #00f2fe;">Email Us</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    info@jdtechnology.com<br>support@jdtechnology.com
                </p>
            </div>

            <!-- Working Hours -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="width: 70px; height: 70px; margin: 0 auto 25px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; color: #00f2fe;">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #00f2fe;">Working Hours</h3>
                <p style="color: rgba(255,255,255,0.7); line-height: 1.7;">
                    Mon - Fri: 09:00 - 18:00<br>Sat: 09:00 - 15:00
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section style="padding: 0 5% 100px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; max-width: 1200px; margin: 0 auto;">
            <!-- Contact Form -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 40px; padding: 50px;">
                <div style="margin-bottom: 40px;">
                    <div class="section-subtitle" style="margin-bottom: 10px;">SEND US MESSAGE</div>
                    <h2 class="section-title" style="font-size: 2.5rem;">Get in <span>Touch</span></h2>
                    <p style="color: rgba(255,255,255,0.6);">Isi form di bawah ini dan tim kami akan segera menghubungi Anda</p>
                </div>

                <form id="contactForm" style="display: flex; flex-direction: column; gap: 20px;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required style="background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 16px 20px; color: #fff; width: 100%;">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required style="background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 16px 20px; color: #fff; width: 100%;">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" required style="background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 16px 20px; color: #fff; width: 100%;">
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Tell us about your project..." rows="5" required style="background: rgba(255,255,255,0.03); border: 1px solid rgba(0,242,254,0.2); border-radius: 15px; padding: 16px 20px; color: #fff; width: 100%; resize: vertical;"></textarea>
                    </div>

                    <div style="display: flex; gap: 15px; align-items: center;">
                        <button type="submit" class="btn-primary" style="border: none; cursor: pointer; padding: 16px 40px;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                        <span style="color: rgba(255,255,255,0.4); font-size: 0.9rem;">
                            <i class="fas fa-clock"></i> Response within 24 hours
                        </span>
                    </div>
                </form>

                <!-- Form Success Message (hidden by default) -->
                <div id="successMessage" style="display: none; margin-top: 20px; padding: 15px; background: rgba(0,242,254,0.1); border: 1px solid #00f2fe; border-radius: 10px; color: #00f2fe; text-align: center;">
                    <i class="fas fa-check-circle"></i> Thank you! Your message has been sent successfully.
                </div>
            </div>

            <!-- Additional Info & Map -->
            <div style="display: flex; flex-direction: column; gap: 30px;">
                <!-- FAQ Preview -->
                <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 40px; padding: 40px;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 30px; color: #00f2fe;">Frequently Asked</h3>
                    
                    <div style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid rgba(0,242,254,0.1);">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe; font-size: 14px;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">How fast can you start?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Kami bisa memulai proyek Anda dalam 1-2 hari setelah kesepakatan dan pembayaran DP.</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid rgba(0,242,254,0.1);">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe; font-size: 14px;">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">Do you provide maintenance?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Ya, kami menyediakan layanan maintenance dan support setelah project selesai dengan biaya terjangkau.</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid rgba(0,242,254,0.1);">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe; font-size: 14px;">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">What payment methods?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Kami menerima transfer bank (BCA, Mandiri, BNI), kartu kredit, dan PayPal untuk klien internasional.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="width: 30px; height: 30px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe; font-size: 14px;">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 8px; font-size: 1.1rem;">Do you sign NDAs?</h4>
                                <p style="color: rgba(255,255,255,0.6); line-height: 1.6;">Ya, kami siap menandatangani Non-Disclosure Agreement untuk melindungi kerahasiaan proyek Anda.</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        <a href="{{ route('faq') }}" style="color: #00f2fe; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                            View all FAQs <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Map / Location -->
                <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 40px; padding: 40px;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 20px; color: #00f2fe;">Our Location</h3>
                    
                    <!-- Google Map Placeholder (replace with actual iframe) -->
                    <div style="width: 100%; height: 250px; background: linear-gradient(135deg, #1a1a2e, #16213e); border-radius: 20px; margin-bottom: 25px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                        <div style="position: absolute; width: 100%; height: 100%; opacity: 0.3;">
                            <div style="position: absolute; top: 20%; left: 20%; width: 10px; height: 10px; background: #00f2fe; border-radius: 50%; animation: ping 2s infinite;"></div>
                            <div style="position: absolute; top: 60%; left: 50%; width: 15px; height: 15px; background: #4facfe; border-radius: 50%; animation: ping 2s infinite; animation-delay: 1s;"></div>
                            <div style="position: absolute; bottom: 30%; right: 30%; width: 8px; height: 8px; background: #00f2fe; border-radius: 50%; animation: ping 2s infinite; animation-delay: 1.5s;"></div>
                        </div>
                        <div style="text-align: center; z-index: 1;">
                            <i class="fas fa-map-marked-alt" style="font-size: 60px; color: #00f2fe; margin-bottom: 15px;"></i>
                            <p style="color: rgba(255,255,255,0.8);">Jl. Teknologi No. 123, Jakarta</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 15px; align-items: center; flex-wrap: wrap;">
                        <a href="#" style="flex: 1; background: rgba(0,242,254,0.1); border: 1px solid rgba(0,242,254,0.2); border-radius: 50px; padding: 12px; text-align: center; color: #fff; text-decoration: none; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;"
                           onmouseover="this.style.background='rgba(0,242,254,0.2)'; this.style.borderColor='#00f2fe'"
                           onmouseout="this.style.background='rgba(0,242,254,0.1)'; this.style.borderColor='rgba(0,242,254,0.2)'">
                            <i class="fab fa-google"></i> Google Maps
                        </a>
                        <a href="#" style="flex: 1; background: rgba(0,242,254,0.1); border: 1px solid rgba(0,242,254,0.2); border-radius: 50px; padding: 12px; text-align: center; color: #fff; text-decoration: none; transition: all 0.3s; display: flex; align-items: center; justify-content: center; gap: 8px;"
                           onmouseover="this.style.background='rgba(0,242,254,0.2)'; this.style.borderColor='#00f2fe'"
                           onmouseout="this.style.background='rgba(0,242,254,0.1)'; this.style.borderColor='rgba(0,242,254,0.2)'">
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

        <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <a href="#" style="width: 70px; height: 70px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 30px; transition: all 0.3s ease;"
               onmouseover="this.style.background='#1877f2'; this.style.borderColor='#1877f2'; this.style.transform='translateY(-10px) scale(1.1)'; this.style.boxShadow='0 0 30px #1877f2'"
               onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(0,242,254,0.2)'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" style="width: 70px; height: 70px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 30px; transition: all 0.3s ease;"
               onmouseover="this.style.background='#1da1f2'; this.style.borderColor='#1da1f2'; this.style.transform='translateY(-10px) scale(1.1)'; this.style.boxShadow='0 0 30px #1da1f2'"
               onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(0,242,254,0.2)'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" style="width: 70px; height: 70px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 30px; transition: all 0.3s ease;"
               onmouseover="this.style.background='#e4405f'; this.style.borderColor='#e4405f'; this.style.transform='translateY(-10px) scale(1.1)'; this.style.boxShadow='0 0 30px #e4405f'"
               onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(0,242,254,0.2)'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" style="width: 70px; height: 70px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 30px; transition: all 0.3s ease;"
               onmouseover="this.style.background='#0077b5'; this.style.borderColor='#0077b5'; this.style.transform='translateY(-10px) scale(1.1)'; this.style.boxShadow='0 0 30px #0077b5'"
               onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(0,242,254,0.2)'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" style="width: 70px; height: 70px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 30px; transition: all 0.3s ease;"
               onmouseover="this.style.background='#333'; this.style.borderColor='#333'; this.style.transform='translateY(-10px) scale(1.1)'; this.style.boxShadow='0 0 30px #333'"
               onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(0,242,254,0.2)'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                <i class="fab fa-github"></i>
            </a>
            <a href="#" style="width: 70px; height: 70px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 30px; transition: all 0.3s ease;"
               onmouseover="this.style.background='#ff0000'; this.style.borderColor='#ff0000'; this.style.transform='translateY(-10px) scale(1.1)'; this.style.boxShadow='0 0 30px #ff0000'"
               onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(0,242,254,0.2)'; this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 0 5% 100px;">
        <div style="max-width: 800px; margin: 0 auto; padding: 60px; background: linear-gradient(135deg, rgba(0,242,254,0.1), rgba(79,172,254,0.1)); border-radius: 50px; border: 1px solid rgba(0,242,254,0.2); text-align: center;">
            <i class="fas fa-headset" style="font-size: 60px; color: #00f2fe; margin-bottom: 20px;"></i>
            <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 20px;">
                Need <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Immediate</span> Help?
            </h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 30px;">
                Tim support kami siap membantu Anda 24/7 melalui live chat atau telepon
            </p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="#" class="btn-primary" style="padding: 16px 40px;">
                    <i class="fas fa-comment"></i> Live Chat
                </a>
                <a href="tel:+621234567890" class="btn-secondary" style="padding: 16px 40px;">
                    <i class="fas fa-phone-alt"></i> Call Now
                </a>
            </div>
        </div>
    </section>

    @push('styles')
    <style>
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
    </style>
    @endpush

    @push('scripts')
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Simulate form submission (replace with actual AJAX)
            setTimeout(() => {
                // Hide form and show success message
                this.style.display = 'none';
                document.getElementById('successMessage').style.display = 'block';
                
                // Reset button (for demo purposes)
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
    </script>
    @endpush
@endsection