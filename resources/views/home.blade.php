@extends('layouts.app')

@section('title', 'Jannah Digital Teknologi - Jasa Pembuatan Website, Aplikasi & Bot Telegram Bandung')
@section('meta_description', 'Jannah Digital Teknologi — jasa pembuatan website, aplikasi mobile, dan bot Telegram terpercaya di Bandung.')
@section('meta_keywords', 'jasa pembuatan website, jasa pembuatan aplikasi, jasa bot telegram, web developer Bandung')

@section('content')

{{-- ═══════════════ HERO ═══════════════ --}}
<section id="home" class="jd-hero">
    <div class="mesh-blob mesh-blob-1"></div>
    <div class="mesh-blob mesh-blob-2"></div>

    <div class="jd-hero-grid">
        {{-- Left: copy --}}
        <div class="jd-hero-copy">
            <div class="jd-eyebrow" data-aos="fade-down">
                <span class="jd-eyebrow-dot"></span>
                Top Digital Agency
            </div>

            <h1 class="jd-hero-h1" data-aos="fade-up" data-aos-delay="60">
                <span class="jd-hero-typed"><span id="typed-text"></span></span>
                <span class="jd-hero-gradient">Digital Products</span>
            </h1>

            <p class="jd-hero-sub" data-aos="fade-up" data-aos-delay="140">
                Transform your business ideas into powerful web and mobile applications.
                Solusi inovatif yang mendorong pertumbuhan bisnis Anda.
            </p>

            <div class="jd-hero-btns" data-aos="fade-up" data-aos-delay="220">
                <a href="{{ route('contact') }}#contact" class="jd-btn-primary">
                    Start Project <i class="fas fa-arrow-right"></i>
                </a>
                <a href="{{ route('portfolio') }}#portfolio" class="jd-btn-ghost">
                    View Portfolio
                </a>
            </div>

            <div class="jd-hero-metrics" data-aos="fade-up" data-aos-delay="300">
                <div class="jd-metric">
                    <span class="jd-metric-val" data-count="150" data-suffix="+">0</span>
                    <span class="jd-metric-lbl">Projects</span>
                </div>
                <div class="jd-metric-sep"></div>
                <div class="jd-metric">
                    <span class="jd-metric-val" data-count="98" data-suffix="%">0</span>
                    <span class="jd-metric-lbl">Satisfaction</span>
                </div>
                <div class="jd-metric-sep"></div>
                <div class="jd-metric">
                    <span class="jd-metric-val" data-suffix="/7">24</span>
                    <span class="jd-metric-lbl">Support</span>
                </div>
                <div class="jd-metric-sep"></div>
                <div class="jd-metric">
                    <span class="jd-metric-val" data-count="5" data-suffix="+">0</span>
                    <span class="jd-metric-lbl">Years</span>
                </div>
            </div>
        </div>

        {{-- Right: floating card --}}
        <div class="jd-hero-visual" data-aos="fade-left" data-aos-delay="180">
            <div class="jd-float-badge" style="top:16px;right:-8px;animation-delay:0s;">
                <i class="fas fa-check-circle"></i> Garansi Kualitas
            </div>
            <div class="jd-float-badge" style="bottom:24px;left:-16px;animation-delay:1.5s;">
                <i class="fas fa-star" style="color:#F59E0B;"></i> 5.0 Rating
            </div>

            <div class="jd-hero-card">
                <div class="jd-hero-card-eyebrow">Our Services</div>
                <div class="jd-service-row">
                    <div class="jd-service-icon-wrap"><i class="fas fa-globe"></i></div>
                    <span class="jd-service-name">Web Development</span>
                    <span class="jd-service-tag">Popular</span>
                </div>
                <div class="jd-service-row">
                    <div class="jd-service-icon-wrap"><i class="fas fa-mobile-alt"></i></div>
                    <span class="jd-service-name">Mobile Apps</span>
                    <span class="jd-service-tag">Hot</span>
                </div>
                <div class="jd-service-row">
                    <div class="jd-service-icon-wrap"><i class="fab fa-telegram"></i></div>
                    <span class="jd-service-name">Bot Telegram</span>
                    <span class="jd-service-tag">New</span>
                </div>
                <div class="jd-service-row">
                    <div class="jd-service-icon-wrap"><i class="fas fa-shopping-cart"></i></div>
                    <span class="jd-service-name">E-Commerce</span>
                    <span class="jd-service-tag">Best</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Tech strip --}}
    <div class="jd-tech-strip">
        <div class="jd-tech-strip-header">
            <span class="jd-tech-label">Teknologi kami</span>
        </div>
        <div class="jd-tech-logos-wrap">
        <div class="jd-tech-logos">
            <span class="jd-tech-item"><i class="fab fa-laravel"></i> Laravel</span>
            <span class="jd-tech-item"><i class="fab fa-react"></i> React</span>
            <span class="jd-tech-item"><i class="fab fa-vuejs"></i> Vue.js</span>
            <span class="jd-tech-item"><i class="fab fa-node-js"></i> Node.js</span>
            <span class="jd-tech-item"><i class="fab fa-wordpress"></i> WordPress</span>
            <span class="jd-tech-item"><i class="fab fa-python"></i> Python</span>
            <span class="jd-tech-item"><i class="fab fa-laravel"></i> Laravel</span>
            <span class="jd-tech-item"><i class="fab fa-react"></i> React</span>
            <span class="jd-tech-item"><i class="fab fa-vuejs"></i> Vue.js</span>
            <span class="jd-tech-item"><i class="fab fa-node-js"></i> Node.js</span>
            <span class="jd-tech-item"><i class="fab fa-wordpress"></i> WordPress</span>
            <span class="jd-tech-item"><i class="fab fa-python"></i> Python</span>
        </div>
        </div>
    </div>
</section>

{{-- ═══════════════ SERVICES ═══════════════ --}}
<section id="services" class="jd-section">
    <div class="jd-section-head" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> What We Do Best</div>
        <h2 class="jd-section-title">Our <span>Services</span></h2>
        <p class="jd-section-desc">Solusi digital lengkap yang disesuaikan dengan kebutuhan bisnis Anda</p>
    </div>

    <div class="jd-services-grid" data-stagger="flip">
        @forelse($featuredServices as $service)
        <div class="jd-card sr-shine">
            <div class="jd-card-icon glow-icon"><i class="{{ $service->icon ?? 'fas fa-cog' }}"></i></div>
            <h3 class="jd-card-title">{{ $service->title }}</h3>
            <p class="jd-card-desc">{{ Str::limit($service->description, 120) }}</p>
            <a href="{{ route('services') }}" class="jd-card-link">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
        @empty
        @php
        $defaultServices = [
            ['icon'=>'fas fa-globe','title'=>'Web Development','desc'=>'Custom websites dan web application dibangun dengan teknologi modern. Cepat, aman, dan scalable.'],
            ['icon'=>'fas fa-mobile-alt','title'=>'Mobile Apps','desc'=>'Aplikasi mobile native dan cross-platform untuk iOS dan Android dengan UI/UX yang stunning.'],
            ['icon'=>'fab fa-telegram','title'=>'Bot Telegram','desc'=>'Bot Telegram cerdas untuk otomatisasi bisnis, customer service, dan e-commerce.'],
            ['icon'=>'fas fa-shopping-cart','title'=>'E-Commerce','desc'=>'Toko online lengkap dengan payment gateway, manajemen stok, dan tools marketing.'],
            ['icon'=>'fas fa-paint-brush','title'=>'UI/UX Design','desc'=>'Desain antarmuka modern yang intuitif dan berfokus pada user experience terbaik.'],
            ['icon'=>'fas fa-robot','title'=>'Bot & Automation','desc'=>'Solusi automasi cerdas untuk menyederhanakan proses bisnis dan meningkatkan efisiensi.'],
        ];
        @endphp
        @foreach($defaultServices as $svc)
        <div class="jd-card sr-shine">
            <div class="jd-card-icon glow-icon"><i class="{{ $svc['icon'] }}"></i></div>
            <h3 class="jd-card-title">{{ $svc['title'] }}</h3>
            <p class="jd-card-desc">{{ $svc['desc'] }}</p>
            <a href="{{ route('services') }}" class="jd-card-link">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
        @endforeach
        @endforelse
    </div>

    <div class="jd-section-cta" data-reveal="up">
        <a href="{{ route('services') }}" class="jd-btn-outline">Lihat Semua Layanan <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

{{-- ═══════════════ PORTFOLIO ═══════════════ --}}
<section id="portfolio" class="jd-section jd-section-alt">
    <div class="jd-section-head" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Our Work</div>
        <h2 class="jd-section-title">Featured <span>Projects</span></h2>
        <p class="jd-section-desc">Proyek nyata untuk bisnis nyata — dari startup hingga perusahaan besar</p>
    </div>

    <div class="jd-portfolio-grid" data-stagger="zoom-up">
        @forelse($featuredPortfolios as $portfolio)
        @php
            $demoUrl     = $portfolio->demo_url ?? null;
            $hasThumbnail = !empty($portfolio->thumbnail);
            $grad        = $portfolio->card_gradient ?? null;
            $gradCss     = $grad ? (\App\Models\Portfolio::gradients()[$grad]['css'] ?? null) : null;

            if ($hasThumbnail && $gradCss) {
                $mode     = 'phone';   // gradient bg + contained image
                $imgStyle = 'background:' . $gradCss . ';';
            } elseif ($hasThumbnail) {
                $mode     = 'cover';   // image fills card
                $imgStyle = 'background-image:url(' . Storage::url($portfolio->thumbnail) . ');background-size:cover;background-position:center;';
            } elseif ($demoUrl) {
                $mode     = 'iframe';
                $imgStyle = '';
            } elseif ($gradCss) {
                $mode     = 'gradient';
                $imgStyle = 'background:' . $gradCss . ';';
            } else {
                $mode     = 'placeholder';
                $imgStyle = '';
            }
        @endphp
        <div class="jd-portfolio-item{{ $demoUrl ? ' jd-portfolio-item--link' : '' }}"
             @if($demoUrl) onclick="window.open('{{ $demoUrl }}', '_blank')" @endif>
            <div class="jd-portfolio-img" style="{{ $imgStyle }}">
                @if($mode === 'phone')
                    <img src="{{ Storage::url($portfolio->thumbnail) }}"
                         style="max-width:72%; max-height:88%; object-fit:contain; border-radius:14px; box-shadow:0 12px 36px rgba(0,0,0,0.5), 0 0 0 1px rgba(255,255,255,0.08);">
                @elseif($mode === 'iframe')
                    <div class="jd-port-preview">
                        <iframe src="{{ $demoUrl }}" loading="lazy" scrolling="no" tabindex="-1"></iframe>
                    </div>
                @elseif($mode === 'gradient' || $mode === 'placeholder')
                    <div class="jd-portfolio-placeholder">
                        <i class="{{ !empty($portfolio->icon) ? $portfolio->icon : 'fas fa-briefcase' }}"
                           style="{{ $gradCss ? 'color:rgba(255,255,255,0.2);' : '' }}"></i>
                    </div>
                @endif
                {{-- mode 'cover': background-image inline style handles it, nothing to add --}}
            </div>
            <div class="jd-portfolio-overlay">
                <div>
                    <div class="jd-portfolio-category">{{ $portfolio->category }}</div>
                    <h3 class="jd-portfolio-title">{{ $portfolio->title }}</h3>
                </div>
                <div class="jd-portfolio-arrow">
                    <i class="{{ $demoUrl ? 'fas fa-arrow-up-right-from-square' : 'fas fa-briefcase' }}"></i>
                </div>
            </div>
        </div>
        @empty
        <div style="grid-column:1/-1; text-align:center; padding: 60px 20px; color: var(--t3);">
            <i class="fas fa-briefcase" style="font-size:3rem; margin-bottom:16px; display:block; opacity:0.3;"></i>
            <p>Portfolio segera hadir</p>
        </div>
        @endforelse
    </div>

    <div class="jd-section-cta" data-reveal="up">
        <a href="{{ route('portfolio') }}" class="jd-btn-outline">Lihat Semua Portfolio <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

{{-- ═══════════════ WHY CHOOSE US ═══════════════ --}}
<section class="jd-section">
    <div class="jd-section-head" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Why Choose Us</div>
        <h2 class="jd-section-title">Kenapa Bisnis Memilih <span>JD Technology</span></h2>
    </div>

    <div class="jd-bento-grid" data-stagger="up">
        <div class="jd-bento-card jd-bento-featured">
            <div class="jd-bento-icon"><i class="fas fa-bolt"></i></div>
            <h3 class="jd-bento-title">Fast Delivery</h3>
            <p class="jd-bento-desc">Agile methodology memastikan delivery tepat waktu tanpa mengorbankan kualitas. Project bisa dimulai dalam 1–2 hari kerja.</p>
            <div class="jd-bento-metric">
                <span class="jd-bento-num">2x</span>
                <span class="jd-bento-num-lbl">Faster than average</span>
            </div>
        </div>
        <div class="jd-bento-card">
            <div class="jd-bento-icon"><i class="fas fa-shield-alt"></i></div>
            <h3 class="jd-bento-title">Secure Code</h3>
            <p class="jd-bento-desc">Enterprise-grade security practices untuk melindungi data Anda.</p>
        </div>
        <div class="jd-bento-card">
            <div class="jd-bento-icon"><i class="fas fa-headset"></i></div>
            <h3 class="jd-bento-title">24/7 Support</h3>
            <p class="jd-bento-desc">Tim support siap membantu kapan saja Anda butuh bantuan teknis.</p>
        </div>
        <div class="jd-bento-card">
            <div class="jd-bento-icon"><i class="fas fa-chart-line"></i></div>
            <h3 class="jd-bento-title">Scalable Solutions</h3>
            <p class="jd-bento-desc">Dibangun untuk tumbuh bersama bisnis Anda dari startup sampai enterprise.</p>
        </div>
    </div>
</section>

{{-- ═══════════════ CTA / CONTACT ═══════════════ --}}
<section id="contact" class="jd-cta-section">
    <div class="jd-cta-card" data-reveal="zoom-up">
        <div class="jd-cta-inner">
            <div class="jd-eyebrow" style="justify-content:flex-start;"><span class="jd-eyebrow-dot"></span> Let's Work Together</div>
            <h2 class="jd-cta-title">Siap Wujudkan<br><span>Ide Digital Anda?</span></h2>
            <p class="jd-cta-desc">Konsultasi gratis, tidak ada komitmen. Tim kami siap membantu Anda dari konsep hingga launch.</p>

            @if(session('success'))
            <div class="jd-alert-success"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
            @endif

            <form class="jd-cta-form" method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="jd-form-row">
                    <input type="text" name="name" class="jd-input" placeholder="Nama Anda" value="{{ old('name') }}" required>
                    <input type="email" name="email" class="jd-input" placeholder="Email Address" value="{{ old('email') }}" required>
                </div>
                <input type="text" name="subject" class="jd-input" placeholder="Subject / Jenis Proyek" value="{{ old('subject') }}">
                <textarea name="message" class="jd-input jd-textarea" placeholder="Ceritakan proyek Anda..." required>{{ old('message') }}</textarea>
                <button type="submit" class="jd-btn-primary" style="width:100%;justify-content:center;">
                    Kirim Pesan <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>

        <div class="jd-cta-info">
            <div class="jd-cta-info-item">
                <div class="jd-cta-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <div class="jd-cta-info-label">Lokasi</div>
                    <div class="jd-cta-info-val">Bandung, Jawa Barat</div>
                </div>
            </div>
            <div class="jd-cta-info-item">
                <div class="jd-cta-info-icon"><i class="fas fa-phone-alt"></i></div>
                <div>
                    <div class="jd-cta-info-label">Telepon</div>
                    <div class="jd-cta-info-val">+62 812 3456 7890</div>
                </div>
            </div>
            <div class="jd-cta-info-item">
                <div class="jd-cta-info-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <div class="jd-cta-info-label">Email</div>
                    <div class="jd-cta-info-val">hello@jdtechnology.com</div>
                </div>
            </div>
            <div class="jd-cta-info-item">
                <div class="jd-cta-info-icon"><i class="fas fa-clock"></i></div>
                <div>
                    <div class="jd-cta-info-label">Working Hours</div>
                    <div class="jd-cta-info-val">Sen–Jum 09:00–18:00</div>
                </div>
            </div>
            <div class="jd-cta-socials">
                <a href="#" class="jd-social"><i class="fab fa-instagram"></i></a>
                <a href="#" class="jd-social"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="jd-social"><i class="fab fa-github"></i></a>
                <a href="#" class="jd-social"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* ─── HOME page specific ─── */
.jd-bento-metric { margin-top: 32px; padding-top: 24px; border-top: 1px solid rgba(255,255,255,0.1); }
.jd-bento-num {
    font-family: var(--font-d);
    font-size: 3rem; font-weight: 700; color: #fff;
    display: block; line-height: 1;
}
.jd-bento-num-lbl { font-size: 0.8rem; color: rgba(255,255,255,0.45); margin-top: 4px; display: block; }
</style>
@endpush

@push('scripts')
<script>
// Typed.js
var typed = new Typed('#typed-text', {
    strings: ['Build Amazing', 'Design Modern', 'Develop Powerful', 'Create Stunning'],
    typeSpeed: 55,
    backSpeed: 35,
    backDelay: 2000,
    loop: true,
    showCursor: true,
    cursorChar: '|'
});

// Counter animation
(function() {
    var counters = document.querySelectorAll('.jd-metric-val[data-count]');
    if (!counters.length) return;
    var io = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (!entry.isIntersecting) return;
            var el = entry.target;
            var target = parseInt(el.getAttribute('data-count'));
            var suffix = el.getAttribute('data-suffix') || '';
            var duration = 1800;
            var start = null;
            function step(ts) {
                if (!start) start = ts;
                var progress = Math.min((ts - start) / duration, 1);
                var ease = 1 - Math.pow(1 - progress, 4);
                el.textContent = Math.floor(ease * target) + suffix;
                if (progress < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
            io.unobserve(el);
        });
    }, { threshold: 0.5 });
    counters.forEach(function(el) { io.observe(el); });
})();
</script>
@endpush
