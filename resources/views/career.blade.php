@extends('layouts.app')
@section('title', 'Karir - Bergabung dengan Tim JD Technology Bandung')
@section('meta_description', 'Bergabunglah dengan tim kreatif JD Technology. Kami mencari talenta terbaik yang passionate di bidang teknologi.')

@section('content')

<section class="career-hero">
    <div class="career-hero-inner" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> We're Hiring</div>
        <h1 class="career-title">Build the Future.<br><span>Join Our Team.</span></h1>
        <p class="career-sub">Bergabunglah dengan tim yang passionate tentang teknologi, berkolaborasi, dan terus berkembang bersama.</p>
        <a href="#open-positions" class="jd-btn-primary">Lihat Posisi Tersedia <i class="fas fa-arrow-down"></i></a>
    </div>
</section>

{{-- Benefits --}}
<section class="jd-section">
    <div class="jd-section-head" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Why Join Us</div>
        <h2 class="jd-section-title">Benefits yang <span>Kami Tawarkan</span></h2>
    </div>
    <div class="career-benefits-grid" data-stagger="flip">
        @php $benefits = [
            ['icon'=>'fas fa-laptop-code','title'=>'Remote Friendly','desc'=>'Kerja dari mana saja. Kami percaya pada fleksibilitas dan work-life balance yang sehat.'],
            ['icon'=>'fas fa-graduation-cap','title'=>'Learning Budget','desc'=>'Akses ke courses, buku, dan konferensi untuk terus berkembang secara profesional.'],
            ['icon'=>'fas fa-users','title'=>'Kolaboratif','desc'=>'Tim yang suportif, open-minded, dan selalu siap membantu satu sama lain.'],
            ['icon'=>'fas fa-rocket','title'=>'Grow Fast','desc'=>'Kesempatan berkembang cepat di lingkungan startup yang dinamis dan penuh inovasi.'],
        ]; @endphp
        @foreach($benefits as $b)
        <div class="jd-card">
            <div class="jd-card-icon"><i class="{{ $b['icon'] }}"></i></div>
            <h3 class="jd-card-title">{{ $b['title'] }}</h3>
            <p class="jd-card-desc">{{ $b['desc'] }}</p>
        </div>
        @endforeach
    </div>
</section>

{{-- Open Positions --}}
<section id="open-positions" class="jd-section jd-section-alt">
    <div class="jd-section-head" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Open Positions</div>
        <h2 class="jd-section-title">Posisi yang <span>Tersedia</span></h2>
    </div>
    <div class="career-positions" data-stagger="up">
        @php $positions = [
            ['title'=>'Full Stack Web Developer','type'=>'Full-time','loc'=>'Bandung / Remote','icon'=>'fas fa-code'],
            ['title'=>'Mobile App Developer (Flutter)','type'=>'Full-time','loc'=>'Bandung / Remote','icon'=>'fas fa-mobile-alt'],
            ['title'=>'UI/UX Designer','type'=>'Full-time','loc'=>'Bandung','icon'=>'fas fa-paint-brush'],
            ['title'=>'Project Manager','type'=>'Full-time','loc'=>'Bandung','icon'=>'fas fa-tasks'],
        ]; @endphp
        @foreach($positions as $pos)
        <div class="career-pos-card">
            <div class="career-pos-icon"><i class="{{ $pos['icon'] }}"></i></div>
            <div class="career-pos-info">
                <h3>{{ $pos['title'] }}</h3>
                <div class="career-pos-meta">
                    <span><i class="fas fa-briefcase"></i> {{ $pos['type'] }}</span>
                    <span><i class="fas fa-map-marker-alt"></i> {{ $pos['loc'] }}</span>
                </div>
            </div>
            <a href="#apply" class="jd-btn-primary" style="flex-shrink:0;">Apply Now</a>
        </div>
        @endforeach
    </div>
</section>

{{-- Apply Form --}}
<section id="apply" class="jd-section">
    <div class="jd-section-head" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Apply Now</div>
        <h2 class="jd-section-title">Kirim <span>Lamaran</span></h2>
        <p class="jd-section-desc">Isi form di bawah dan tim HR kami akan menghubungi Anda dalam 2–3 hari kerja.</p>
    </div>
    <div class="career-form-wrap" data-reveal="zoom-up">
        <form class="career-form">
            <div class="career-form-row">
                <div class="career-form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="career-input" placeholder="Nama Anda" required>
                </div>
                <div class="career-form-group">
                    <label>Email</label>
                    <input type="email" class="career-input" placeholder="email@example.com" required>
                </div>
            </div>
            <div class="career-form-row">
                <div class="career-form-group">
                    <label>Posisi yang Dilamar</label>
                    <select class="career-input">
                        <option value="">Pilih Posisi</option>
                        <option>Full Stack Web Developer</option>
                        <option>Mobile App Developer (Flutter)</option>
                        <option>UI/UX Designer</option>
                        <option>Project Manager</option>
                    </select>
                </div>
                <div class="career-form-group">
                    <label>Pengalaman Kerja</label>
                    <select class="career-input">
                        <option>Fresh Graduate</option>
                        <option>1–2 Tahun</option>
                        <option>3–5 Tahun</option>
                        <option>5+ Tahun</option>
                    </select>
                </div>
            </div>
            <div class="career-form-group">
                <label>Pesan / Motivasi</label>
                <textarea class="career-input career-textarea" placeholder="Ceritakan kenapa Anda ingin bergabung..."></textarea>
            </div>
            <div style="text-align:center;">
                <button type="submit" class="jd-btn-primary" style="padding:14px 48px;">Kirim Lamaran <i class="fas fa-paper-plane"></i></button>
            </div>
        </form>
    </div>
</section>

@endsection

@push('styles')
<style>
.career-hero {
    background: var(--t1);
    padding: 120px 5% 100px;
    text-align: center;
}
.career-hero-inner { max-width: 700px; margin: 0 auto; }
.career-hero .jd-eyebrow { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.15); color: rgba(255,255,255,0.7); }
.career-title {
    font-family: var(--font-d);
    font-size: clamp(2.5rem, 5.5vw, 4.5rem);
    font-weight: 700; letter-spacing: -3px; line-height: 1.05;
    color: #fff; margin-bottom: 20px;
}
.career-title span { color: var(--accent2); }
.career-sub { font-size: 1.05rem; color: rgba(255,255,255,0.5); line-height: 1.7; margin-bottom: 36px; max-width: 520px; margin-left: auto; margin-right: auto; }
.career-hero .jd-btn-primary { background: #fff; color: var(--t1); border-color: #fff; }
.career-hero .jd-btn-primary:hover { background: var(--accent); color: #fff; border-color: var(--accent); }

.career-benefits-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px; max-width: 1200px; margin: 0 auto;
}

.career-positions { display: flex; flex-direction: column; gap: 12px; max-width: 900px; margin: 0 auto; }
.career-pos-card {
    background: #fff; border: 1px solid var(--b-subtle); border-radius: 14px;
    padding: 24px 28px; display: flex; align-items: center; gap: 20px;
    transition: all 0.25s ease;
}
.career-pos-card:hover { border-color: rgba(99,102,241,0.2); box-shadow: 0 4px 20px rgba(0,0,0,0.07); }
.career-pos-icon {
    width: 44px; height: 44px; border-radius: 12px;
    background: rgba(99,102,241,0.08);
    display: flex; align-items: center; justify-content: center;
    font-size: 18px; color: var(--accent); flex-shrink: 0;
}
.career-pos-info { flex: 1; }
.career-pos-info h3 { font-family: var(--font-d); font-size: 0.95rem; font-weight: 700; color: var(--t1); margin-bottom: 6px; }
.career-pos-meta { display: flex; gap: 16px; }
.career-pos-meta span { font-size: 12px; color: var(--t3); display: flex; align-items: center; gap: 5px; }

.career-form-wrap { max-width: 800px; margin: 0 auto; background: var(--s1); border: 1px solid var(--b-subtle); border-radius: 20px; padding: 48px; }
.career-form { display: flex; flex-direction: column; gap: 20px; }
.career-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.career-form-group { display: flex; flex-direction: column; gap: 6px; }
.career-form-group label { font-size: 13px; font-weight: 600; color: var(--t2); }
.career-input {
    background: #fff; border: 1px solid var(--b-normal); border-radius: 10px;
    padding: 12px 16px; color: var(--t1); font-size: 0.9rem;
    font-family: var(--font-b); transition: border-color 0.2s ease; outline: none; width: 100%;
}
.career-input:focus { border-color: var(--accent); box-shadow: 0 0 0 3px rgba(99,102,241,0.08); }
.career-textarea { min-height: 120px; resize: vertical; }

@media (max-width: 640px) { .career-form-row { grid-template-columns: 1fr; } .career-form-wrap { padding: 28px 20px; } .career-pos-card { flex-direction: column; align-items: flex-start; } }
</style>
@endpush
