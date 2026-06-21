@extends('layouts.app')

@section('title', 'Our Portfolio - JD Technology')

@section('content')
    <!-- Portfolio Hero Section -->
    <section class="portfolio-hero" style="min-height: 50vh; display: flex; align-items: center; padding: 0 5%;">
        <div class="portfolio-hero-content" style="text-align: center; max-width: 800px; margin: 0 auto;">
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
        <div class="filter-container" style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <button class="filter-btn active" data-filter="all" style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); color: #0a0a0a; padding: 12px 30px; border: none; border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 0 20px rgba(0,242,254,0.3);">All Projects</button>
            <button class="filter-btn" data-filter="web" style="background: transparent; color: #fff; padding: 12px 30px; border: 2px solid rgba(0,242,254,0.3); border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Web Development</button>
            <button class="filter-btn" data-filter="mobile" style="background: transparent; color: #fff; padding: 12px 30px; border: 2px solid rgba(0,242,254,0.3); border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Mobile Apps</button>
            <button class="filter-btn" data-filter="bot-telegram" style="background: transparent; color: #fff; padding: 12px 30px; border: 2px solid rgba(0,242,254,0.3); border-radius: 40px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Bot Telegram</button>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="portfolio-section" style="padding: 0 5% 100px;">
        <div class="portfolio-grid" id="portfolio-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; max-width: 1400px; margin: 0 auto;">
            <!-- E-Commerce App - Mobile -->
            <div class="portfolio-item" data-category="mobile" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/shopease.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 660px; height: 900px; border: none; pointer-events: none; transform: scale(0.530); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">ShopEase</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">React Native</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Node.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Fashion Store Mobile App dengan fitur AR Try-On</p>
                    <a href="/demos/shopease.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Clinic Management - Web -->
            <div class="portfolio-item" data-category="web" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/medicare-pro.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 1200px; height: 1200px; border: none; pointer-events: none; transform: scale(0.292); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">MediCare Pro</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Laravel</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Vue.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Sistem Manajemen Klinik dengan fitur telemedicine</p>
                    <a href="/demos/medicare-pro.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- E-Learning Platform - Web & Mobile -->
            <div class="portfolio-item" data-category="web mobile" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/edulearn.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 1200px; height: 1200px; border: none; pointer-events: none; transform: scale(0.292); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">EduLearn</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Web & Mobile</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">React</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Flutter</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Platform Belajar Online dengan fitur live class</p>
                    <a href="/demos/edulearn.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Order Bot - Bot Telegram -->
            <div class="portfolio-item" data-category="bot-telegram" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/orderbot.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 660px; height: 900px; border: none; pointer-events: none; transform: scale(0.530); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">OrderBot</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Bot Telegram</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Python</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Aiogram</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Bot pemesanan makanan otomatis dengan notifikasi real-time</p>
                    <a href="/demos/orderbot.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Analytics Dashboard - Web -->
            <div class="portfolio-item" data-category="web" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/findash.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 1200px; height: 1200px; border: none; pointer-events: none; transform: scale(0.292); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">FinDash</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Next.js</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">D3.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Dashboard Analisis Data dengan real-time updates</p>
                    <a href="/demos/findash.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Logistics System - Mobile -->
            <div class="portfolio-item" data-category="mobile" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/logitrack.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 660px; height: 900px; border: none; pointer-events: none; transform: scale(0.530); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">LogiTrack</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Kotlin</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Firebase</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Sistem Manajemen Logistik dengan GPS tracking</p>
                    <a href="/demos/logitrack.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Hotel Booking - Web -->
            <div class="portfolio-item" data-category="web" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/stayeasy.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 1200px; height: 1200px; border: none; pointer-events: none; transform: scale(0.292); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">StayEasy</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">PHP</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">MySQL</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Sistem Reservasi Hotel dengan payment gateway</p>
                    <a href="/demos/stayeasy.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Banking App - Mobile -->
            <div class="portfolio-item" data-category="mobile" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/bankease.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 660px; height: 900px; border: none; pointer-events: none; transform: scale(0.530); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">BankEase</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Swift</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Kotlin</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Aplikasi Mobile Banking dengan biometric auth</p>
                    <a href="/demos/bankease.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Game Development - Mobile -->
            <div class="portfolio-item" data-category="mobile" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/edugame.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 660px; height: 900px; border: none; pointer-events: none; transform: scale(0.530); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">EduGame</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Mobile Game</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Unity</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">C#</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Game Edukasi Anak dengan sistem reward</p>
                    <a href="/demos/edugame.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- HR Management - Web -->
            <div class="portfolio-item" data-category="web" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/hr-pro.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 1200px; height: 1200px; border: none; pointer-events: none; transform: scale(0.292); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">HR Pro</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Web App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Laravel</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Vue.js</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Sistem Manajemen HR dengan payroll automation</p>
                    <a href="/demos/hr-pro.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Social Media App - Mobile -->
            <div class="portfolio-item" data-category="mobile" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/socialflow.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 660px; height: 900px; border: none; pointer-events: none; transform: scale(0.530); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">SocialFlow</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Mobile App</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Flutter</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Firebase</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Aplikasi Social Media untuk komunitas kreatif</p>
                    <a href="/demos/socialflow.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>

            <!-- Customer Service Bot - Bot Telegram -->
            <div class="portfolio-item" data-category="bot-telegram" style="position: relative; border-radius: 30px; overflow: hidden; height: 350px; cursor: pointer; transition: all 0.3s ease;">
                <div class="portfolio-image" style="width: 100%; height: 100%; position: relative; overflow: hidden; transition: transform 0.5s ease;">
                    <iframe src="/demos/helpdesk-bot.html" scrolling="no" loading="lazy" style="position: absolute; top: 0; left: 0; width: 660px; height: 900px; border: none; pointer-events: none; transform: scale(0.530); transform-origin: top left;"></iframe>
                </div>
                <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(0,242,254,0.95), rgba(79,172,254,0.95)); display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease; padding: 20px; text-align: center;">
                    <h3 class="portfolio-title" style="font-size: 1.8rem; font-weight: 700; color: #0a0a0a; margin-bottom: 10px;">HelpDesk Bot</h3>
                    <p class="portfolio-category" style="color: #0a0a0a; font-size: 1rem; opacity: 0.8; margin-bottom: 15px;">Bot Telegram</p>
                    <div style="display: flex; gap: 10px; margin: 15px 0; flex-wrap: wrap; justify-content: center;">
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Node.js</span>
                        <span style="background: rgba(255,255,255,0.2); padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; color: #0a0a0a;">Telegraf</span>
                    </div>
                    <p style="font-size: 0.9rem; opacity: 0.9; color: #0a0a0a;">Bot customer service otomatis dengan integrasi CRM</p>
                    <a href="/demos/helpdesk-bot.html" target="_blank" style="margin-top: 14px; display: inline-flex; align-items: center; gap: 6px; background: #0a0a0a; color: #00f2fe; padding: 8px 18px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                        <i class="fas fa-external-link-alt"></i> Lihat Demo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" style="padding: 80px 5% 100px; position: relative; overflow: hidden;">
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

        <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <!-- Testimonial 1 -->
            <div class="testimonial-card" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px; transition: all 0.3s ease;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
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
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span style="font-size: 24px; font-weight: 600; color: #0a0a0a;">BS</span>
                    </div>
                    <div>
                        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 5px;">Budi Santoso</h4>
                        <p style="color: rgba(255,255,255,0.5);">CEO, Toko Makmur</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px; transition: all 0.3s ease;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
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
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4facfe, #00f2fe); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <span style="font-size: 24px; font-weight: 600; color: #0a0a0a;">DL</span>
                    </div>
                    <div>
                        <h4 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 5px;">Dewi Lestari</h4>
                        <p style="color: rgba(255,255,255,0.5);">Owner, Dewi Fashion</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px; transition: all 0.3s ease;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
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
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
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
    <section class="cta-section" style="padding: 0 5% 100px; text-align: center;">
        <div class="cta-container" style="max-width: 800px; margin: 0 auto; padding: 60px; background: linear-gradient(135deg, rgba(0,242,254,0.1), rgba(79,172,254,0.1)); border-radius: 50px; border: 1px solid rgba(0,242,254,0.2);">
            <h2 style="font-size: 3rem; font-weight: 700; margin-bottom: 20px;">
                Have a <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Project</span> in Mind?
            </h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 40px;">
                Mari diskusikan ide Anda dan wujudkan bersama tim profesional kami
            </p>
            <a href="{{ route('contact') }}" class="btn-primary" style="font-size: 1.2rem; padding: 18px 50px; display: inline-flex; align-items: center; gap: 10px;">
                <i class="fas fa-paper-plane"></i> Start Your Project
            </a>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Portfolio Hero Responsive */
    @media (max-width: 992px) {
        .portfolio-hero h1 {
            font-size: 3rem !important;
        }
        
        .portfolio-hero p {
            font-size: 1.1rem !important;
        }
        
        .portfolio-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        
        .testimonials-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    
    @media (max-width: 768px) {
        .portfolio-hero h1 {
            font-size: 2.5rem !important;
        }
        
        .portfolio-hero p {
            font-size: 1rem !important;
        }
        
        .filter-container {
            gap: 10px !important;
        }
        
        .filter-btn {
            padding: 10px 20px !important;
            font-size: 0.9rem !important;
            flex: 1 1 calc(50% - 10px);
            max-width: 200px;
        }
        
        .portfolio-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .portfolio-item {
            height: 300px !important;
        }
        
        .portfolio-title {
            font-size: 1.5rem !important;
        }
        
        .testimonials-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .testimonial-card {
            padding: 30px !important;
        }
        
        .testimonial-card p {
            font-size: 1rem !important;
        }
        
        .cta-container {
            padding: 40px 20px !important;
        }
        
        .cta-container h2 {
            font-size: 2rem !important;
        }
        
        .cta-container p {
            font-size: 1rem !important;
        }
        
        .btn-primary {
            width: 100%;
            max-width: 300px;
        }
    }
    
    @media (max-width: 480px) {
        .portfolio-hero h1 {
            font-size: 2rem !important;
        }
        
        .filter-container {
            flex-direction: column;
            align-items: center;
        }
        
        .filter-btn {
            width: 100%;
            max-width: 250px;
        }
        
        .portfolio-item {
            height: 250px !important;
        }
        
        .portfolio-overlay {
            padding: 15px !important;
        }
        
        .portfolio-overlay div[style*="gap: 10px"] {
            gap: 5px !important;
        }
        
        .portfolio-overlay span {
            font-size: 0.7rem !important;
            padding: 3px 8px !important;
        }
        
        .testimonial-card {
            padding: 25px !important;
        }
        
        .testimonial-card > div:first-child {
            flex-direction: column;
            align-items: flex-start !important;
        }
        
        .testimonial-card i.fa-quote-right {
            font-size: 30px !important;
        }
        
        .testimonial-card > div:last-child {
            flex-direction: column;
            text-align: center;
        }
        
        .testimonial-card > div:last-child > div:first-child {
            margin: 0 auto;
        }
        
        .cta-container {
            padding: 30px 15px !important;
        }
        
        .cta-container h2 {
            font-size: 1.8rem !important;
        }
    }
    
    /* Portfolio Item Hover Effects */
    .portfolio-item:hover .portfolio-image {
        transform: scale(1.1);
    }
    
    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }
    
    /* Testimonial Card Hover */
    .testimonial-card:hover {
        transform: translateY(-10px);
        border-color: #00f2fe;
        box-shadow: 0 0 40px rgba(0,242,254,0.2);
    }
    
    /* Animation for filtered items */
    .portfolio-item {
        transition: opacity 0.3s ease, transform 0.3s ease, display 0.3s ease;
    }
    
    /* Fix for overlay text on mobile */
    @media (max-width: 768px) {
        .portfolio-overlay p {
            font-size: 0.8rem !important;
            margin-bottom: 0 !important;
        }
        
        .portfolio-overlay div[style*="margin: 15px 0"] {
            margin: 10px 0 !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    // Add hover effects for portfolio items (backup for inline styles)
    portfolioItems.forEach(item => {
        item.addEventListener('mouseover', function() {
            const img = this.querySelector('.portfolio-image');
            const overlay = this.querySelector('.portfolio-overlay');
            if (img) img.style.transform = 'scale(1.1)';
            if (overlay) overlay.style.opacity = '1';
        });
        
        item.addEventListener('mouseout', function() {
            const img = this.querySelector('.portfolio-image');
            const overlay = this.querySelector('.portfolio-overlay');
            if (img) img.style.transform = 'scale(1)';
            if (overlay) overlay.style.opacity = '0';
        });
    });

    // Filter functionality
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
                const categories = item.getAttribute('data-category').split(' ');
                
                if (filterValue === 'all' || categories.includes(filterValue)) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
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

    // Add hover effects for testimonial cards
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    testimonialCards.forEach(card => {
        card.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.borderColor = '#00f2fe';
            this.style.boxShadow = '0 0 40px rgba(0,242,254,0.2)';
        });
        
        card.addEventListener('mouseout', function() {
            this.style.transform = 'translateY(0)';
            this.style.borderColor = 'rgba(0,242,254,0.1)';
            this.style.boxShadow = 'none';
        });
    });

    // Smooth scroll for CTA button
    const ctaButton = document.querySelector('.cta-container a');
    if (ctaButton) {
        ctaButton.addEventListener('click', function(e) {
            // If it's an anchor link, smooth scroll
            if (this.getAttribute('href').startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    }
});
</script>
@endpush