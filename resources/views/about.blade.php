@extends('layouts.app')

@section('title', 'About Us - JD Technology')

@section('content')
    <!-- About Hero Section -->
    <section class="about-hero" style="min-height: 60vh; display: flex; align-items: center; padding: 0 5%; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <div style="position: absolute; width: 400px; height: 400px; background: rgba(0,242,254,0.05); border-radius: 50%; filter: blur(100px); top: -100px; right: -100px;"></div>
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(79,172,254,0.05); border-radius: 50%; filter: blur(80px); bottom: -50px; left: -50px;"></div>
        </div>

        <div class="about-hero-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; max-width: 1400px; margin: 0 auto;">
            <div>
                <div class="hero-badge" style="margin-bottom: 20px;">
                    <i class="fas fa-info-circle"></i> ABOUT US
                </div>
                <h1 style="font-size: 4rem; font-weight: 800; line-height: 1.1; margin-bottom: 30px;">
                    We Are <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">JD Technology</span>
                </h1>
                <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); line-height: 1.8; margin-bottom: 30px;">
                    JD Technology adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital inovatif. 
                    Dengan pengalaman lebih dari 5 tahun, kami telah membantu berbagai klien mewujudkan ide mereka menjadi produk digital yang sukses.
                </p>
                <div class="about-hero-features" style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="width: 40px; height: 40px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe;">
                            <i class="fas fa-check"></i>
                        </div>
                        <span>Professional Team</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="width: 40px; height: 40px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #00f2fe;">
                            <i class="fas fa-check"></i>
                        </div>
                        <span>5+ Years Experience</span>
                    </div>
                </div>
            </div>
            <div style="position: relative;">
                <div style="position: relative; width: 100%; height: 400px;">
                    <!-- Animated Elements -->
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 300px; height: 300px; background: rgba(0,242,254,0.1); border-radius: 30px; animation: float 6s ease-in-out infinite;"></div>
                    <div style="position: absolute; top: 30%; right: 10%; width: 150px; height: 150px; background: rgba(79,172,254,0.1); border-radius: 30px; animation: float 4s ease-in-out infinite; animation-delay: 1s;"></div>
                    <div style="position: absolute; bottom: 20%; left: 10%; width: 100px; height: 100px; background: rgba(0,242,254,0.1); border-radius: 30px; animation: float 5s ease-in-out infinite; animation-delay: 2s;"></div>
                    
                    <!-- Center Icon -->
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 200px; height: 200px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 50px rgba(0,242,254,0.3);">
                        <i class="fas fa-rocket" style="font-size: 80px; color: #0a0a0a;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Stats -->
    <section style="padding: 80px 5%;">
        <div class="stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <div class="stat-card" style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="font-size: 3.5rem; font-weight: 800; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; margin-bottom: 10px;">150+</div>
                <div style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Projects Completed</div>
            </div>
            <div class="stat-card" style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="font-size: 3.5rem; font-weight: 800; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; margin-bottom: 10px;">98%</div>
                <div style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Client Satisfaction</div>
            </div>
            <div class="stat-card" style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="font-size: 3.5rem; font-weight: 800; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; margin-bottom: 10px;">5+</div>
                <div style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Years Experience</div>
            </div>
            <div class="stat-card" style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="font-size: 3.5rem; font-weight: 800; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; margin-bottom: 10px;">20+</div>
                <div style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Team Members</div>
            </div>
        </div>
    </section>

    <!-- Our Story & Mission -->
    <section style="padding: 80px 5%; position: relative; overflow: hidden;">
        <!-- Background Decoration -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;">
            <div style="position: absolute; width: 300px; height: 300px; background: rgba(0,242,254,0.05); border-radius: 50%; filter: blur(80px); top: 50%; left: 20%;"></div>
        </div>

        <div class="story-mission-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; max-width: 1200px; margin: 0 auto;">
            <!-- Our Story -->
            <div>
                <div class="section-subtitle" style="margin-bottom: 15px;">OUR JOURNEY</div>
                <h2 class="section-title" style="font-size: 2.5rem; margin-bottom: 30px;">Our <span>Story</span></h2>
                <div style="position: relative; padding-left: 30px;">
                    <!-- Timeline Line -->
                    <div style="position: absolute; left: 0; top: 0; width: 2px; height: 100%; background: linear-gradient(135deg, #00f2fe, #4facfe);"></div>
                    
                    <div style="margin-bottom: 40px; position: relative;">
                        <div style="position: absolute; left: -38px; top: 0; width: 12px; height: 12px; background: #00f2fe; border-radius: 50%; box-shadow: 0 0 20px #00f2fe;"></div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px; color: #00f2fe;">2019 - The Beginning</h3>
                        <p style="color: rgba(255,255,255,0.7); line-height: 1.8;">
                            Didirikan pada tahun 2019, JD Technology berawal dari sekelompok developer yang memiliki visi untuk membantu bisnis lokal bertransformasi ke era digital.
                        </p>
                    </div>

                    <div style="margin-bottom: 40px; position: relative;">
                        <div style="position: absolute; left: -38px; top: 0; width: 12px; height: 12px; background: #00f2fe; border-radius: 50%; box-shadow: 0 0 20px #00f2fe;"></div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px; color: #00f2fe;">2021 - First Milestone</h3>
                        <p style="color: rgba(255,255,255,0.7); line-height: 1.8;">
                            Berhasil menyelesaikan 50+ project dan mulai dipercaya oleh perusahaan-perusahaan besar.
                        </p>
                    </div>

                    <div style="position: relative;">
                        <div style="position: absolute; left: -38px; top: 0; width: 12px; height: 12px; background: #00f2fe; border-radius: 50%; box-shadow: 0 0 20px #00f2fe;"></div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px; color: #00f2fe;">2024 - Today</h3>
                        <p style="color: rgba(255,255,255,0.7); line-height: 1.8;">
                            Berkembang menjadi tim profesional dengan 20+ anggota yang menangani klien dari berbagai industri.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Our Mission & Values -->
            <div>
                <div class="section-subtitle" style="margin-bottom: 15px;">OUR PURPOSE</div>
                <h2 class="section-title" style="font-size: 2.5rem; margin-bottom: 30px;">Mission & <span>Values</span></h2>
                
                <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px; margin-bottom: 30px;">
                    <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 20px; display: flex; align-items: center; justify-content: center; transform: rotate(10deg);">
                            <i class="fas fa-rocket" style="font-size: 30px; color: #0a0a0a;"></i>
                        </div>
                        <div>
                            <h3 style="font-size: 1.8rem; margin-bottom: 5px;">Our Mission</h3>
                            <p style="color: rgba(255,255,255,0.7);">Memberikan solusi digital terbaik yang membantu bisnis berkembang dan bersaing di era digital.</p>
                        </div>
                    </div>
                </div>

                <div class="values-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px; text-align: center;">
                        <div style="width: 50px; height: 50px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: #00f2fe; font-size: 24px;">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 style="margin-bottom: 10px;">Integrity</h4>
                        <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">Kami menjunjung tinggi kejujuran dan etika dalam setiap proyek</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px; text-align: center;">
                        <div style="width: 50px; height: 50px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: #00f2fe; font-size: 24px;">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 style="margin-bottom: 10px;">Innovation</h4>
                        <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">Selalu mengikuti perkembangan teknologi terkini</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px; text-align: center;">
                        <div style="width: 50px; height: 50px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: #00f2fe; font-size: 24px;">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 style="margin-bottom: 10px;">Commitment</h4>
                        <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">Komitmen penuh terhadap kepuasan klien</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 20px; padding: 25px; text-align: center;">
                        <div style="width: 50px; height: 50px; background: rgba(0,242,254,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; color: #00f2fe; font-size: 24px;">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 style="margin-bottom: 10px;">Collaboration</h4>
                        <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">Bekerja sama sebagai satu tim yang solid</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section style="padding: 100px 5%;">
        <div class="section-header" style="margin-bottom: 60px;">
            <div class="section-subtitle">OUR TEAM</div>
            <h2 class="section-title">Meet Our <span>Experts</span></h2>
            <p style="color: rgba(255,255,255,0.6);">Tim profesional yang siap mewujudkan ide Anda</p>
        </div>

        <div class="team-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <!-- Team Member 1 -->
            <div class="team-member" data-member="1"
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;">
                <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #00f2fe, #4facfe); opacity: 0.1; border-radius: 0 0 0 100px;"></div>
                <div style="width: 120px; height: 120px; margin: 0 auto 25px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 30px rgba(0,242,254,0.3);">
                    <span style="font-size: 48px; font-weight: 600; color: #0a0a0a;">JD</span>
                </div>
                <h3 style="font-size: 1.8rem; margin-bottom: 5px;">John Doe</h3>
                <p style="color: #00f2fe; margin-bottom: 20px;">Founder & CEO</p>
                <p style="color: rgba(255,255,255,0.6); margin-bottom: 25px;">10+ years experience in tech industry</p>
                <div style="display: flex; justify-content: center; gap: 15px;">
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="team-member" data-member="2"
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;">
                <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #00f2fe, #4facfe); opacity: 0.1; border-radius: 0 0 0 100px;"></div>
                <div style="width: 120px; height: 120px; margin: 0 auto 25px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 30px rgba(0,242,254,0.3);">
                    <span style="font-size: 48px; font-weight: 600; color: #0a0a0a;">JS</span>
                </div>
                <h3 style="font-size: 1.8rem; margin-bottom: 5px;">Jane Smith</h3>
                <p style="color: #00f2fe; margin-bottom: 20px;">CTO</p>
                <p style="color: rgba(255,255,255,0.6); margin-bottom: 25px;">8+ years in software development</p>
                <div style="display: flex; justify-content: center; gap: 15px;">
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="team-member" data-member="3"
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;">
                <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #00f2fe, #4facfe); opacity: 0.1; border-radius: 0 0 0 100px;"></div>
                <div style="width: 120px; height: 120px; margin: 0 auto 25px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 30px rgba(0,242,254,0.3);">
                    <span style="font-size: 48px; font-weight: 600; color: #0a0a0a;">MJ</span>
                </div>
                <h3 style="font-size: 1.8rem; margin-bottom: 5px;">Mike Johnson</h3>
                <p style="color: #00f2fe; margin-bottom: 20px;">Lead Developer</p>
                <p style="color: rgba(255,255,255,0.6); margin-bottom: 25px;">6+ years full stack development</p>
                <div style="display: flex; justify-content: center; gap: 15px;">
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="team-member" data-member="4"
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;">
                <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(135deg, #00f2fe, #4facfe); opacity: 0.1; border-radius: 0 0 0 100px;"></div>
                <div style="width: 120px; height: 120px; margin: 0 auto 25px; background: linear-gradient(135deg, #00f2fe, #4facfe); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 30px rgba(0,242,254,0.3);">
                    <span style="font-size: 48px; font-weight: 600; color: #0a0a0a;">SW</span>
                </div>
                <h3 style="font-size: 1.8rem; margin-bottom: 5px;">Sarah Wilson</h3>
                <p style="color: #00f2fe; margin-bottom: 20px;">UI/UX Designer</p>
                <p style="color: rgba(255,255,255,0.6); margin-bottom: 25px;">5+ years design experience</p>
                <div style="display: flex; justify-content: center; gap: 15px;">
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-twitter"></i></a>
                    <a href="#" style="color: rgba(255,255,255,0.6); transition: color 0.3s;" onmouseover="this.style.color='#00f2fe'" onmouseout="this.style.color='rgba(255,255,255,0.6)'"><i class="fab fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Team Member -->
    <div class="team-modal" id="teamModal">
        <div class="modal-content">
            <div class="modal-close" id="closeModal">
                <i class="fas fa-times"></i>
            </div>
            
            <!-- Modal Content -->
            <div id="modalContent">
                <div class="modal-avatar">
                    <span id="modalInitials">JD</span>
                </div>
                <h2 class="modal-name" id="modalName">John Doe</h2>
                <p class="modal-position" id="modalPosition">Founder & CEO</p>
                <div class="modal-badge" id="modalExperience">10+ years experience</div>
                
                <div class="modal-info" id="modalInfo">
                    <!-- Akan diisi JavaScript -->
                </div>
                
                <div class="modal-skills" id="modalSkills">
                    <!-- Akan diisi JavaScript -->
                </div>
                
                <div class="modal-social" id="modalSocial">
                    <!-- Akan diisi JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section style="padding: 0 5% 100px; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto; padding: 60px; background: linear-gradient(135deg, rgba(0,242,254,0.1), rgba(79,172,254,0.1)); border-radius: 50px; border: 1px solid rgba(0,242,254,0.2);">
            <h2 style="font-size: 3rem; font-weight: 700; margin-bottom: 20px;">
                Join Us on Our <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Journey</span>
            </h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 40px;">
                Mari bersama-sama menciptakan solusi digital yang inovatif dan berdampak
            </p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('contact') }}" class="btn-primary" style="font-size: 1.2rem; padding: 18px 40px;">
                    <i class="fas fa-handshake"></i> Work With Us
                </a>
                <a href="{{ route('career') }}" class="btn-secondary" style="font-size: 1.2rem; padding: 18px 40px;">
                    <i class="fas fa-briefcase"></i> Join Our Team
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Animations */
    @keyframes float {
        0%, 100% { transform: translate(-50%, -50%) rotate(0deg); }
        50% { transform: translate(-50%, -60%) rotate(5deg); }
    }

    /* Modal Styles - dengan z-index lebih tinggi dari navbar */
    .team-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(10px);
        z-index: 99999; /* Lebih tinggi dari navbar (100) */
        opacity: 0;
        transition: opacity 0.3s ease;
        align-items: center;
        justify-content: center;
    }

    .team-modal.active {
        display: flex;
        opacity: 1;
    }

    /* Pastikan navbar tidak muncul di atas modal saat modal aktif */
    body.modal-open .navbar {
        z-index: 1; /* Turunkan z-index navbar saat modal aktif */
        opacity: 0.5; /* Opsional: buat navbar sedikit transparan */
        pointer-events: none; /* Nonaktifkan interaksi dengan navbar */
    }

    body.modal-open {
        overflow: hidden; /* Mencegah scroll */
    }

    .modal-content {
        position: relative;
        width: 90%;
        max-width: 400px;
        background: rgba(10, 10, 10, 0.95);
        border: 1px solid rgba(0, 242, 254, 0.3);
        border-radius: 25px;
        padding: 30px;
        margin: auto;
        transform: scale(0.7);
        transition: all 0.3s ease;
        box-shadow: 0 0 40px rgba(0, 242, 254, 0.2);
        backdrop-filter: blur(10px);
        max-height: 85vh;
        overflow-y: auto;
        z-index: 100000; /* Pastikan konten modal di atas backdrop */
    }

    .team-modal.active .modal-content {
        transform: scale(1);
    }

    .modal-close {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 32px;
        height: 32px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(0, 242, 254, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 10;
    }

    .modal-close:hover {
        background: #00f2fe;
        color: #0a0a0a;
        transform: rotate(90deg);
        border-color: #00f2fe;
    }

    .modal-avatar {
        width: 90px;
        height: 90px;
        margin: 0 auto 15px;
        background: linear-gradient(135deg, #00f2fe, #4facfe);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 25px rgba(0, 242, 254, 0.3);
        position: relative;
        overflow: hidden;
    }

    .modal-avatar span {
        font-size: 36px;
        font-weight: 600;
        color: #0a0a0a;
    }

    .modal-name {
        font-size: 1.6rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 5px;
        background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .modal-position {
        text-align: center;
        color: #00f2fe;
        font-size: 0.95rem;
        margin-bottom: 10px;
        font-weight: 500;
    }

    .modal-badge {
        display: inline-block;
        background: rgba(0, 242, 254, 0.1);
        border: 1px solid rgba(0, 242, 254, 0.3);
        border-radius: 20px;
        padding: 4px 12px;
        font-size: 0.8rem;
        color: #00f2fe;
        margin: 0 auto 20px;
        width: fit-content;
    }

    .modal-info {
        margin-bottom: 20px;
    }

    .modal-info-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(0, 242, 254, 0.1);
    }

    .modal-info-item:last-child {
        border-bottom: none;
    }

    .modal-info-icon {
        width: 32px;
        height: 32px;
        background: rgba(0, 242, 254, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #00f2fe;
        font-size: 14px;
    }

    .modal-info-text {
        flex: 1;
    }

    .modal-info-label {
        font-size: 0.75rem;
        color: rgba(255, 255, 255, 0.5);
        margin-bottom: 2px;
    }

    .modal-info-value {
        font-size: 0.9rem;
        color: #fff;
        font-weight: 500;
        line-height: 1.4;
    }

    .modal-skills {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin: 15px 0;
    }

    .modal-skill {
        background: rgba(0, 242, 254, 0.1);
        border: 1px solid rgba(0, 242, 254, 0.2);
        border-radius: 12px;
        padding: 5px 12px;
        font-size: 0.8rem;
        color: #00f2fe;
        transition: all 0.3s ease;
    }

    .modal-skill:hover {
        background: rgba(0, 242, 254, 0.2);
        transform: translateY(-2px);
    }

    .modal-social {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid rgba(0, 242, 254, 0.1);
    }

    .modal-social a {
        width: 36px;
        height: 36px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(0, 242, 254, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 16px;
    }

    .modal-social a:hover {
        background: #00f2fe;
        color: #0a0a0a;
        transform: translateY(-3px);
        box-shadow: 0 0 15px rgba(0, 242, 254, 0.4);
    }

    /* Responsive Modal untuk Mobile */
    @media (max-width: 768px) {
        .modal-content {
            max-width: 350px;
            padding: 25px;
        }
        
        .modal-avatar {
            width: 80px;
            height: 80px;
        }
        
        .modal-avatar span {
            font-size: 32px;
        }
        
        .modal-name {
            font-size: 1.4rem;
        }
        
        .modal-position {
            font-size: 0.9rem;
        }
        
        .modal-info-item {
            gap: 10px;
            padding: 6px 0;
        }
        
        .modal-info-icon {
            width: 28px;
            height: 28px;
            font-size: 12px;
        }
        
        .modal-info-value {
            font-size: 0.85rem;
        }
        
        .modal-skill {
            font-size: 0.75rem;
            padding: 4px 10px;
        }
        
        .modal-social a {
            width: 32px;
            height: 32px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .modal-content {
            max-width: 300px;
            padding: 20px;
        }
        
        .modal-avatar {
            width: 70px;
            height: 70px;
        }
        
        .modal-avatar span {
            font-size: 28px;
        }
        
        .modal-name {
            font-size: 1.3rem;
        }
        
        .modal-position {
            font-size: 0.85rem;
        }
        
        .modal-badge {
            font-size: 0.75rem;
            padding: 3px 10px;
            margin-bottom: 15px;
        }
        
        .modal-info-item {
            flex-direction: column;
            text-align: center;
            gap: 5px;
        }
        
        .modal-info-icon {
            margin: 0 auto;
        }
        
        .modal-info-label {
            text-align: center;
        }
        
        .modal-info-value {
            text-align: center;
        }
        
        .modal-skills {
            justify-content: center;
        }
    }

    /* Team Member Card Hover */
    .team-member {
        transition: all 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-10px);
        border-color: #00f2fe !important;
        box-shadow: 0 0 40px rgba(0,242,254,0.2) !important;
    }

    /* Responsive Styles lainnya */
    @media (max-width: 1200px) {
        .about-hero h1 {
            font-size: 3.5rem !important;
        }
    }

    @media (max-width: 992px) {
        .about-hero-container {
            grid-template-columns: 1fr !important;
            text-align: center;
        }
        
        .about-hero h1 {
            font-size: 3rem !important;
        }
        
        .about-hero-features {
            justify-content: center;
        }
        
        .stats-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        
        .story-mission-grid {
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }
        
        .values-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 768px) {
        .about-hero h1 {
            font-size: 2.5rem !important;
        }
        
        .about-hero p {
            font-size: 1rem !important;
        }
        
        .stats-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
        
        .stat-card {
            padding: 30px !important;
        }
        
        .stat-card div:first-child {
            font-size: 2.5rem !important;
        }
        
        .story-mission-grid .section-title {
            font-size: 2rem !important;
        }
        
        .story-mission-grid h3 {
            font-size: 1.3rem !important;
        }
        
        .story-mission-grid [style*="display: flex; align-items: center; gap: 20px"] {
            flex-direction: column;
            text-align: center;
        }
        
        .story-mission-grid [style*="width: 60px; height: 60px"] {
            margin: 0 auto;
        }
        
        .values-grid {
            grid-template-columns: 1fr !important;
        }
        
        .team-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
            gap: 20px !important;
        }
        
        .team-member {
            padding: 30px 20px !important;
        }
        
        .team-member h3 {
            font-size: 1.5rem !important;
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
        
        [style*="max-width: 800px; margin: 0 auto; padding: 60px"] {
            padding: 40px 20px !important;
        }
        
        [style*="max-width: 800px; margin: 0 auto; padding: 60px"] h2 {
            font-size: 2rem !important;
        }
    }

    @media (max-width: 480px) {
        .about-hero h1 {
            font-size: 2rem !important;
        }
        
        .about-hero-features {
            flex-direction: column;
            align-items: center;
            gap: 10px !important;
        }
        
        [style*="position: relative; padding-left: 30px"] {
            padding-left: 20px !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Data team members
    const teamMembers = {
        1: {
            initials: 'JD',
            name: 'John Doe',
            position: 'Founder & CEO',
            experience: '10+ years in tech industry',
            email: 'john.doe@jdtechnology.com',
            phone: '+62 812 3456 7890',
            education: 'M.Sc. Computer Science, Stanford University',
            location: 'Jakarta, Indonesia',
            bio: 'John adalah pendiri JD Technology dengan pengalaman lebih dari 10 tahun di industri teknologi.',
            skills: ['Leadership', 'Strategic Planning', 'Full Stack', 'Cloud', 'Team Mgmt'],
            linkedin: 'https://linkedin.com/in/johndoe',
            twitter: 'https://twitter.com/johndoe',
            github: 'https://github.com/johndoe'
        },
        2: {
            initials: 'JS',
            name: 'Jane Smith',
            position: 'CTO',
            experience: '8+ years in software development',
            email: 'jane.smith@jdtechnology.com',
            phone: '+62 812 3456 7891',
            education: 'M.Sc. Software Engineering, MIT',
            location: 'Jakarta, Indonesia',
            bio: 'Jane adalah CTO JD Technology dengan spesialisasi di bidang arsitektur software.',
            skills: ['System Arch', 'Cloud', 'DevOps', 'Leadership', 'Agile'],
            linkedin: 'https://linkedin.com/in/janesmith',
            twitter: 'https://twitter.com/janesmith',
            github: 'https://github.com/janesmith'
        },
        3: {
            initials: 'MJ',
            name: 'Mike Johnson',
            position: 'Lead Developer',
            experience: '6+ years full stack development',
            email: 'mike.johnson@jdtechnology.com',
            phone: '+62 812 3456 7892',
            education: 'B.Sc. Computer Science, University of Indonesia',
            location: 'Jakarta, Indonesia',
            bio: 'Mike adalah lead developer yang ahli dalam pengembangan web dan mobile.',
            skills: ['Laravel', 'React', 'Node.js', 'MongoDB', 'Docker'],
            linkedin: 'https://linkedin.com/in/mikejohnson',
            twitter: 'https://twitter.com/mikejohnson',
            github: 'https://github.com/mikejohnson'
        },
        4: {
            initials: 'SW',
            name: 'Sarah Wilson',
            position: 'UI/UX Designer',
            experience: '5+ years design experience',
            email: 'sarah.wilson@jdtechnology.com',
            phone: '+62 812 3456 7893',
            education: 'B.Des Visual Communication, ITB',
            location: 'Jakarta, Indonesia',
            bio: 'Sarah adalah desainer UI/UX yang fokus pada user experience.',
            skills: ['Figma', 'Adobe XD', 'User Research', 'Wireframing', 'Prototyping'],
            linkedin: 'https://linkedin.com/in/sarahwilson',
            twitter: 'https://twitter.com/sarahwilson',
            dribbble: 'https://dribbble.com/sarahwilson'
        }
    };

    // Get modal elements
    const modal = document.getElementById('teamModal');
    const closeBtn = document.getElementById('closeModal');
    
    // Get all team member cards
    const teamCards = document.querySelectorAll('.team-member');

    // Function to open modal with member data
    function openModal(memberId) {
        const member = teamMembers[memberId];
        if (!member) return;

        // Update modal content
        document.getElementById('modalInitials').textContent = member.initials;
        document.getElementById('modalName').textContent = member.name;
        document.getElementById('modalPosition').textContent = member.position;
        document.getElementById('modalExperience').textContent = member.experience;

        // Build info items
        const infoHTML = `
            <div class="modal-info-item">
                <div class="modal-info-icon"><i class="fas fa-envelope"></i></div>
                <div class="modal-info-text">
                    <div class="modal-info-label">Email</div>
                    <div class="modal-info-value">${member.email}</div>
                </div>
            </div>
            <div class="modal-info-item">
                <div class="modal-info-icon"><i class="fas fa-phone-alt"></i></div>
                <div class="modal-info-text">
                    <div class="modal-info-label">Phone</div>
                    <div class="modal-info-value">${member.phone}</div>
                </div>
            </div>
            <div class="modal-info-item">
                <div class="modal-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="modal-info-text">
                    <div class="modal-info-label">Location</div>
                    <div class="modal-info-value">${member.location}</div>
                </div>
            </div>
            <div class="modal-info-item">
                <div class="modal-info-icon"><i class="fas fa-user"></i></div>
                <div class="modal-info-text">
                    <div class="modal-info-label">Bio</div>
                    <div class="modal-info-value">${member.bio}</div>
                </div>
            </div>
        `;

        // Build skills
        const skillsHTML = member.skills.map(skill => 
            `<span class="modal-skill">${skill}</span>`
        ).join('');

        // Build social links
        let socialHTML = '';
        if (member.linkedin) {
            socialHTML += `<a href="${member.linkedin}" target="_blank"><i class="fab fa-linkedin-in"></i></a>`;
        }
        if (member.twitter) {
            socialHTML += `<a href="${member.twitter}" target="_blank"><i class="fab fa-twitter"></i></a>`;
        }
        if (member.github) {
            socialHTML += `<a href="${member.github}" target="_blank"><i class="fab fa-github"></i></a>`;
        }
        if (member.dribbble) {
            socialHTML += `<a href="${member.dribbble}" target="_blank"><i class="fab fa-dribbble"></i></a>`;
        }

        // Update DOM
        document.getElementById('modalInfo').innerHTML = infoHTML;
        document.getElementById('modalSkills').innerHTML = skillsHTML;
        document.getElementById('modalSocial').innerHTML = socialHTML;

        // Show modal
        modal.classList.add('active');
        document.body.classList.add('modal-open'); // Tambahkan class untuk mengontrol navbar
    }

    // Function to close modal
    function closeModal() {
        modal.classList.remove('active');
        document.body.classList.remove('modal-open'); // Hapus class untuk mengembalikan navbar
    }

    // Add click event to each team card
    teamCards.forEach(card => {
        card.addEventListener('click', function(e) {
            if (e.target.tagName === 'A') {
                return;
            }
            
            const memberId = this.getAttribute('data-member');
            if (memberId) {
                openModal(memberId);
            }
        });

        // Add hover effects
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

    // Close modal events
    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    const modalContent = document.querySelector('.modal-content');
    modalContent.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});
</script>
@endpush