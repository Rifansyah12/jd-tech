<footer class="jd-footer">
    <div class="jd-footer-grid">
        <div class="jd-footer-brand">
            <div class="logo" style="margin-bottom:20px;text-decoration:none;">
                <img src="{{ asset('images/logo/jdt.ico') }}" alt="JD Technology" style="width:38px;height:38px;object-fit:contain;margin-right:10px;filter:brightness(0) invert(1);">
                <span style="font-family:'Space Grotesk',sans-serif;font-size:17px;font-weight:700;color:#fff;">JD Technology</span>
            </div>
            <p class="jd-footer-desc">Creating innovative digital solutions for businesses in Bandung, Indonesia. Web, Mobile & Bot Telegram.</p>
            <div class="jd-footer-socials">
                <a href="#" class="jd-footer-social"><i class="fab fa-instagram"></i></a>
                <a href="#" class="jd-footer-social"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="jd-footer-social"><i class="fab fa-github"></i></a>
                <a href="#" class="jd-footer-social"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="jd-footer-social"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="jd-footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="jd-footer-col">
            <h4>Services</h4>
            <ul>
                <li><a href="{{ route('services') }}">Web Development</a></li>
                <li><a href="{{ route('services') }}">Mobile Apps</a></li>
                <li><a href="{{ route('services') }}">Bot Telegram</a></li>
                <li><a href="{{ route('services') }}">E-Commerce</a></li>
                <li><a href="{{ route('services') }}">UI/UX Design</a></li>
            </ul>
        </div>

        <div class="jd-footer-col">
            <h4>Company</h4>
            <ul>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('career') }}">Career</a></li>
                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('terms') }}">Terms of Service</a></li>
            </ul>
        </div>
    </div>

    <div class="jd-footer-bottom">
        <p>&copy; {{ date('Y') }} JD Technology. All rights reserved.</p>
        <p>Made with <i class="fas fa-heart" style="color:#8B5CF6;"></i> in Bandung</p>
    </div>
</footer>

<style>
.jd-footer {
    background: #0A0A0A;
    padding: 64px 5% 0;
    margin-top: 0;
}
.jd-footer-grid {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 48px;
    margin-bottom: 48px;
    padding-bottom: 48px;
    border-bottom: 1px solid rgba(255,255,255,0.06);
}
.jd-footer-desc { font-size: 0.875rem; color: rgba(255,255,255,0.4); line-height: 1.75; margin-bottom: 24px; max-width: 260px; }
.jd-footer-socials { display: flex; gap: 8px; }
.jd-footer-social {
    width: 34px; height: 34px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.45); text-decoration: none; font-size: 13px;
    transition: all 0.2s ease;
}
.jd-footer-social:hover { background: #6366F1; border-color: #6366F1; color: #fff; transform: translateY(-2px); }

.jd-footer-col h4 {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 12px; font-weight: 600;
    color: rgba(255,255,255,0.35);
    text-transform: uppercase; letter-spacing: 1.5px;
    margin-bottom: 20px;
}
.jd-footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.jd-footer-col ul a {
    color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.875rem;
    transition: color 0.2s ease;
}
.jd-footer-col ul a:hover { color: #fff; }

.jd-footer-bottom {
    padding: 20px 0;
    display: flex; align-items: center; justify-content: space-between;
    flex-wrap: wrap; gap: 12px;
    font-size: 0.8rem; color: rgba(255,255,255,0.25);
}

@media (max-width: 1024px) { .jd-footer-grid { grid-template-columns: 2fr 1fr 1fr; } }
@media (max-width: 768px) { .jd-footer-grid { grid-template-columns: 1fr 1fr; } .jd-footer-brand { grid-column: 1/-1; } }
@media (max-width: 480px) { .jd-footer-grid { grid-template-columns: 1fr; } }
</style>
