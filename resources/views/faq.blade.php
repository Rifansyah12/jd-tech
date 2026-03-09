@extends('layouts.app')

@section('title', 'FAQ - JD Technology')

@section('content')
    <section style="color: white; padding: 50px 0; max-width: 900px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 50px;">
            <div class="hero-badge" style="margin-bottom: 20px;">
                <i class="fas fa-question-circle"></i> FAQ
            </div>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 20px;">Frequently Asked Questions</h1>
            <p style="opacity: 0.8;">Temukan jawaban untuk pertanyaan yang sering diajukan</p>
        </div>

        <div style="display: grid; gap: 20px;">
            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <h3 style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chevron-circle-right" style="color: #667eea;"></i>
                    Berapa lama waktu pengembangan website?
                </h3>
                <p style="opacity: 0.8; line-height: 1.8;">Waktu pengembangan bervariasi tergantung kompleksitas proyek. Untuk website company profile biasanya 2-4 minggu, untuk aplikasi web kompleks bisa 2-3 bulan.</p>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <h3 style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chevron-circle-right" style="color: #667eea;"></i>
                    Berapa biaya untuk membuat aplikasi?
                </h3>
                <p style="opacity: 0.8; line-height: 1.8;">Biaya tergantung pada fitur, kompleksitas, dan platform yang digunakan. Kami akan memberikan proposal detail setelah diskusi kebutuhan Anda.</p>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <h3 style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chevron-circle-right" style="color: #667eea;"></i>
                    Apakah menyediakan layanan maintenance?
                </h3>
                <p style="opacity: 0.8; line-height: 1.8;">Ya, kami menyediakan paket maintenance bulanan/tahunan untuk memastikan aplikasi Anda tetap berjalan optimal dan aman.</p>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <h3 style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chevron-circle-right" style="color: #667eea;"></i>
                    Teknologi apa yang digunakan?
                </h3>
                <p style="opacity: 0.8; line-height: 1.8;">Kami menggunakan teknologi modern seperti Laravel, React, Vue.js untuk web, dan Flutter, React Native untuk mobile, menyesuaikan kebutuhan proyek.</p>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <h3 style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chevron-circle-right" style="color: #667eea;"></i>
                    Bagaimana proses kerjasamanya?
                </h3>
                <p style="opacity: 0.8; line-height: 1.8;">Proses dimulai dari konsultasi, analisis kebutuhan, proposal, kesepakatan kontrak, pengembangan, testing, hingga deployment dan training.</p>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <h3 style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-chevron-circle-right" style="color: #667eea;"></i>
                    Apakah memberikan garansi?
                </h3>
                <p style="opacity: 0.8; line-height: 1.8;">Ya, kami memberikan garansi perbaikan bug untuk periode tertentu setelah project selesai, biasanya 1-3 bulan.</p>
            </div>
        </div>

        <!-- Still Have Questions -->
        <div style="text-align: center; margin-top: 50px; padding: 40px; background: rgba(255,255,255,0.1); border-radius: 20px;">
            <h2 style="margin-bottom: 20px;">Still Have Questions?</h2>
            <p style="margin-bottom: 30px; opacity: 0.8;">Tim kami siap membantu menjawab pertanyaan Anda</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Contact Us</a>
        </div>
    </section>
@endsection