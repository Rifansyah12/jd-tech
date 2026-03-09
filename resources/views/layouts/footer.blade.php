<footer class="footer">
    <div class="footer-content">
        <div class="footer-col">
            <div class="logo" style="margin-bottom: 20px;">
                <div class="logo-box">JD</div>
                <span class="logo-text">JD Technology</span>
            </div>
            <p>Creating innovative digital solutions that help businesses thrive in the digital age.</p>
            <div class="social-links" style="margin-top: 20px;">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            </div>
        </div>
        
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <li><a href="{{ route('home') }}#home">Home</a></li>
                <li><a href="{{ route('services') }}#services">Services</a></li>
                <li><a href="{{ route('portfolio') }}#portfolio">Portfolio</a></li>
                <li><a href="{{ route('about') }}#about">About Us</a></li>
                <li><a href="{{ route('contact') }}#contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Services</h4>
            <ul class="footer-links">
                <li><a href="{{ route('services') }}#web">Web Development</a></li>
                <li><a href="{{ route('services') }}#mobile">Mobile Apps</a></li>
                <li><a href="{{ route('services') }}#cloud">Cloud Solutions</a></li>
                <li><a href="{{ route('services') }}#ai">AI & ML</a></li>
                <li><a href="{{ route('services') }}#ecommerce">E-Commerce</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Legal</h4>
            <ul class="footer-links">
                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('career') }}">Career</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 JD Technology. All rights reserved. | Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
    </div>
</footer>