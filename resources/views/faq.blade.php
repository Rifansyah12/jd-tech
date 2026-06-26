@extends('layouts.app')
@section('title', 'FAQ - Pertanyaan Seputar Jasa Web, Aplikasi & Bot Telegram | Jannah Digital Teknologi')
@section('meta_description', 'Pertanyaan umum seputar jasa pembuatan website, aplikasi mobile, dan bot Telegram di Jannah Digital Teknologi.')

@section('content')
<section class="faq-hero">
    <div class="faq-hero-inner" data-aos="fade-up">
        <div class="jd-eyebrow"><span class="jd-eyebrow-dot"></span> Help Center</div>
        <h1 class="faq-title">Frequently Asked <span>Questions</span></h1>
        <p class="faq-sub">Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan kami</p>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container" data-stagger="blur" data-stagger-base="0">
        @php
        $faqs = [
            ['q'=>'Berapa lama waktu pengembangan website?','a'=>'Waktu pengembangan bervariasi tergantung kompleksitas proyek. Untuk website company profile biasanya 2–4 minggu, untuk aplikasi web kompleks bisa 2–3 bulan.'],
            ['q'=>'Berapa biaya untuk membuat aplikasi?','a'=>'Biaya tergantung pada fitur, kompleksitas, dan platform yang digunakan. Kami akan memberikan proposal detail setelah diskusi kebutuhan Anda. Konsultasi pertama selalu GRATIS.'],
            ['q'=>'Apakah menyediakan layanan maintenance?','a'=>'Ya, kami menyediakan paket maintenance bulanan/tahunan untuk memastikan aplikasi Anda tetap berjalan optimal, aman, dan selalu diperbarui.'],
            ['q'=>'Teknologi apa yang digunakan?','a'=>'Kami menggunakan teknologi modern seperti Laravel, React, Vue.js untuk web, dan Flutter, React Native untuk mobile. Semua disesuaikan dengan kebutuhan proyek Anda.'],
            ['q'=>'Bagaimana proses kerjasamanya?','a'=>'Proses dimulai dari konsultasi → analisis kebutuhan → proposal → kesepakatan kontrak → pengembangan → testing → deployment → training. Transparan di setiap tahap.'],
            ['q'=>'Apakah memberikan garansi?','a'=>'Ya! Kami memberikan garansi perbaikan bug selama 1–3 bulan setelah project selesai, tanpa biaya tambahan.'],
            ['q'=>'Apakah bisa revisi desain?','a'=>'Tentu. Kami menyediakan revisi dalam proses pengembangan. Jumlah revisi disesuaikan dengan paket yang dipilih.'],
            ['q'=>'Metode pembayaran apa yang diterima?','a'=>'Kami menerima transfer bank (BCA, Mandiri, BNI, BRI), dompet digital (GoPay, OVO, Dana), dan kartu kredit/debit.'],
        ];
        @endphp
        @foreach($faqs as $i => $faq)
        <div class="faq-item">
            <button class="faq-q" onclick="toggleFaq(this)">
                <span>{{ $faq['q'] }}</span>
                <div class="faq-icon"><i class="fas fa-plus"></i></div>
            </button>
            <div class="faq-a"><p>{{ $faq['a'] }}</p></div>
        </div>
        @endforeach
    </div>

    <div class="faq-cta" data-reveal="zoom-up">
        <div class="faq-cta-icon"><i class="fas fa-comments"></i></div>
        <h2>Masih punya pertanyaan?</h2>
        <p>Tim kami siap membantu Anda kapan saja — konsultasi gratis, tanpa komitmen.</p>
        <a href="{{ route('contact') }}" class="jd-btn-primary">Hubungi Kami <i class="fas fa-arrow-right"></i></a>
    </div>
</section>
@endsection

@push('styles')
<style>
.faq-hero {
    padding: 100px 5% 60px;
    text-align: center;
    border-bottom: 1px solid var(--b-subtle);
    background: var(--s1);
}
.faq-hero-inner { max-width: 640px; margin: 0 auto; }
.faq-title {
    font-family: var(--font-d);
    font-size: clamp(2.2rem, 4.5vw, 3.5rem);
    font-weight: 700; letter-spacing: -2px; line-height: 1.08;
    color: var(--t1); margin-bottom: 16px;
}
.faq-title span { color: var(--accent); }
.faq-sub { font-size: 1.05rem; color: var(--t2); line-height: 1.7; }

.faq-section { padding: 80px 5% 100px; max-width: 800px; margin: 0 auto; }
.faq-container { display: flex; flex-direction: column; gap: 2px; margin-bottom: 64px; }

.faq-item {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--b-subtle);
    background: #fff;
    margin-bottom: 8px;
    transition: border-color 0.25s ease;
}
.faq-item.open { border-color: rgba(99,102,241,0.25); }

.faq-q {
    width: 100%; padding: 20px 24px;
    display: flex; justify-content: space-between; align-items: center; gap: 16px;
    background: transparent; border: none; cursor: pointer; text-align: left;
    color: var(--t1); font-family: var(--font-d); font-size: 0.95rem; font-weight: 600;
    transition: background 0.2s ease;
}
.faq-q:hover { background: var(--s1); }
.faq-q span { flex: 1; }

.faq-icon {
    width: 30px; height: 30px; border-radius: 50%; flex-shrink: 0;
    background: var(--s2); border: 1px solid var(--b-subtle);
    display: flex; align-items: center; justify-content: center;
    color: var(--t2); font-size: 11px;
    transition: all 0.3s ease;
}
.faq-item.open .faq-icon { background: var(--accent); color: #fff; border-color: var(--accent); transform: rotate(45deg); }

.faq-a { max-height: 0; overflow: hidden; transition: max-height 0.4s cubic-bezier(.4,0,.2,1); }
.faq-item.open .faq-a { max-height: 200px; }
.faq-a p {
    padding: 0 24px 20px;
    font-size: 0.9rem; line-height: 1.75; color: var(--t2);
    border-top: 1px solid var(--b-subtle); padding-top: 16px;
}

.faq-cta {
    background: var(--t1);
    border-radius: 20px; padding: 56px 40px;
    text-align: center; position: relative; overflow: hidden;
}
.faq-cta-icon {
    width: 60px; height: 60px; margin: 0 auto 20px;
    background: rgba(255,255,255,0.1); border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    font-size: 24px; color: #fff;
}
.faq-cta h2 { font-family: var(--font-d); font-size: 1.8rem; font-weight: 700; color: #fff; margin-bottom: 10px; letter-spacing: -0.8px; }
.faq-cta p { font-size: 0.9rem; color: rgba(255,255,255,0.5); line-height: 1.7; margin-bottom: 28px; }
.faq-cta .jd-btn-primary { background: #fff; color: var(--t1); border-color: #fff; }
.faq-cta .jd-btn-primary:hover { background: var(--accent); color: #fff; border-color: var(--accent); }
</style>
@endpush

@push('scripts')
<script>
function toggleFaq(btn) {
    var item = btn.parentElement;
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(function(el) { el.classList.remove('open'); });
    if (!isOpen) item.classList.add('open');
}
</script>
@endpush
