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

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; max-width: 1400px; margin: 0 auto;">
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
                <div style="display: flex; gap: 20px;">
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
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="font-size: 3.5rem; font-weight: 800; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; margin-bottom: 10px;">150+</div>
                <div style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Projects Completed</div>
            </div>
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="font-size: 3.5rem; font-weight: 800; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; margin-bottom: 10px;">98%</div>
                <div style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Client Satisfaction</div>
            </div>
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'">
                <div style="font-size: 3.5rem; font-weight: 800; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; margin-bottom: 10px;">5+</div>
                <div style="color: rgba(255,255,255,0.8); font-size: 1.1rem;">Years Experience</div>
            </div>
            <div style="text-align: center; padding: 40px; background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; transition: all 0.3s ease;"
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

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; max-width: 1200px; margin: 0 auto;">
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

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
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

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <!-- Team Member 1 - John Doe -->
            <div class="team-member" 
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'"
                data-name="John Doe"
                data-position="Founder & CEO"
                data-initials="JD"
                data-email="john.doe@jdtechnology.com"
                data-phone="+62 812 3456 7890"
                data-experience="10+ years in tech industry"
                data-education="M.Sc. Computer Science, Stanford University"
                data-location="Jakarta, Indonesia"
                data-bio="John adalah pendiri JD Technology dengan pengalaman lebih dari 10 tahun di industri teknologi. Sebelum mendirikan JD Technology, ia bekerja sebagai lead developer di beberapa perusahaan teknologi terkemuka di Silicon Valley."
                data-skills='["Leadership", "Strategic Planning", "Full Stack Development", "Cloud Architecture", "Team Management"]'
                data-linkedin="https://linkedin.com/in/johndoe"
                data-twitter="https://twitter.com/johndoe"
                data-github="https://github.com/johndoe">

                <!-- Konten card tetap sama -->
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
            <div class="team-member" 
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'"
                data-name="John Doe"
                data-position="Founder & CEO"
                data-initials="JD"
                data-email="john.doe@jdtechnology.com"
                data-phone="+62 812 3456 7890"
                data-experience="10+ years in tech industry"
                data-education="M.Sc. Computer Science, Stanford University"
                data-location="Jakarta, Indonesia"
                data-bio="John adalah pendiri JD Technology dengan pengalaman lebih dari 10 tahun di industri teknologi. Sebelum mendirikan JD Technology, ia bekerja sebagai lead developer di beberapa perusahaan teknologi terkemuka di Silicon Valley."
                data-skills='["Leadership", "Strategic Planning", "Full Stack Development", "Cloud Architecture", "Team Management"]'
                data-linkedin="https://linkedin.com/in/johndoe"
                data-twitter="https://twitter.com/johndoe"
                data-github="https://github.com/johndoe">

                <!-- Konten card tetap sama -->
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

            <!-- Team Member 3 -->
            <div class="team-member" 
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'"
                data-name="John Doe"
                data-position="Founder & CEO"
                data-initials="JD"
                data-email="john.doe@jdtechnology.com"
                data-phone="+62 812 3456 7890"
                data-experience="10+ years in tech industry"
                data-education="M.Sc. Computer Science, Stanford University"
                data-location="Jakarta, Indonesia"
                data-bio="John adalah pendiri JD Technology dengan pengalaman lebih dari 10 tahun di industri teknologi. Sebelum mendirikan JD Technology, ia bekerja sebagai lead developer di beberapa perusahaan teknologi terkemuka di Silicon Valley."
                data-skills='["Leadership", "Strategic Planning", "Full Stack Development", "Cloud Architecture", "Team Management"]'
                data-linkedin="https://linkedin.com/in/johndoe"
                data-twitter="https://twitter.com/johndoe"
                data-github="https://github.com/johndoe">

                <!-- Konten card tetap sama -->
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

            <!-- Team Member 4 -->
            <div class="team-member" 
                style="background: rgba(255,255,255,0.02); border: 1px solid rgba(0,242,254,0.1); border-radius: 30px; padding: 40px 30px; text-align: center; transition: all 0.3s ease; position: relative; overflow: hidden; cursor: pointer;"
                onmouseover="this.style.transform='translateY(-10px)'; this.style.borderColor='#00f2fe'; this.style.boxShadow='0 0 40px rgba(0,242,254,0.2)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(0,242,254,0.1)'; this.style.boxShadow='none'"
                data-name="John Doe"
                data-position="Founder & CEO"
                data-initials="JD"
                data-email="john.doe@jdtechnology.com"
                data-phone="+62 812 3456 7890"
                data-experience="10+ years in tech industry"
                data-education="M.Sc. Computer Science, Stanford University"
                data-location="Jakarta, Indonesia"
                data-bio="John adalah pendiri JD Technology dengan pengalaman lebih dari 10 tahun di industri teknologi. Sebelum mendirikan JD Technology, ia bekerja sebagai lead developer di beberapa perusahaan teknologi terkemuka di Silicon Valley."
                data-skills='["Leadership", "Strategic Planning", "Full Stack Development", "Cloud Architecture", "Team Management"]'
                data-linkedin="https://linkedin.com/in/johndoe"
                data-twitter="https://twitter.com/johndoe"
                data-github="https://github.com/johndoe">

                <!-- Konten card tetap sama -->
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
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 0 5% 100px; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto; padding: 60px; background: linear-gradient(135deg, rgba(0,242,254,0.1), rgba(79,172,254,0.1)); border-radius: 50px; border: 1px solid rgba(0,242,254,0.2);">
            <h2 style="font-size: 3rem; font-weight: 700; margin-bottom: 20px;">
                Join Us on Our <span style="background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Journey</span>
            </h2>
            <p style="font-size: 1.2rem; color: rgba(255,255,255,0.7); margin-bottom: 40px;">
                Mari bersama-sama menciptakan solusi digital yang inovatif dan berdampak
            </p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="{{ route('contact') }}" class="btn-primary" style="font-size: 1.2rem; padding: 18px 40px;">
                    <i class="fas fa-handshake"></i> Work With Us
                </a>
                <a href="{{ route('career') }}" class="btn-secondary" style="font-size: 1.2rem; padding: 18px 40px;">
                    <i class="fas fa-briefcase"></i> Join Our Team
                </a>
            </div>
        </div>
    </section>

    <!-- Team Member Modal -->
    <div class="team-modal" id="teamModal">
        <div class="modal-content">
            <div class="modal-close" id="closeModal">
                <i class="fas fa-times"></i>
            </div>
            
            <div class="modal-avatar">
                <span id="modalInitials">JD</span>
            </div>
            
            <h2 class="modal-name" id="modalName">John Doe</h2>
            <div class="modal-position" id="modalPosition">Founder & CEO</div>
            <div class="modal-badge" id="modalExperience">10+ years experience</div>
            
            <div class="modal-info">
                <div class="modal-info-item">
                    <div class="modal-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="modal-info-text">
                        <div class="modal-info-label">Email</div>
                        <div class="modal-info-value" id="modalEmail">john@example.com</div>
                    </div>
                </div>
                
                <div class="modal-info-item">
                    <div class="modal-info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="modal-info-text">
                        <div class="modal-info-label">Phone</div>
                        <div class="modal-info-value" id="modalPhone">+62 812 3456 7890</div>
                    </div>
                </div>
                
                <div class="modal-info-item">
                    <div class="modal-info-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="modal-info-text">
                        <div class="modal-info-label">Education</div>
                        <div class="modal-info-value" id="modalEducation">M.Sc. Computer Science</div>
                    </div>
                </div>
                
                <div class="modal-info-item">
                    <div class="modal-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="modal-info-text">
                        <div class="modal-info-label">Location</div>
                        <div class="modal-info-value" id="modalLocation">Jakarta, Indonesia</div>
                    </div>
                </div>
            </div>
            
            <div class="modal-info-item">
                <div class="modal-info-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="modal-info-text">
                    <div class="modal-info-label">Bio</div>
                    <div class="modal-info-value" id="modalBio">Bio information here</div>
                </div>
            </div>
            
            <div class="modal-skills" id="modalSkills">
                <!-- Skills will be inserted here dynamically -->
            </div>
            
            <div class="modal-social" id="modalSocial">
                <!-- Social links will be inserted here dynamically -->
            </div>
        </div>
    </div>
@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translate(-50%, -50%) rotate(0deg); }
        50% { transform: translate(-50%, -60%) rotate(5deg); }
    }

    /* Modal Styles */
    .team-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        backdrop-filter: blur(10px);
        z-index: 9999;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .team-modal.active {
        display: flex;
        opacity: 1;
    }

    .modal-content {
        position: relative;
        width: 90%;
        max-width: 500px;
        background: rgba(10, 10, 10, 0.95);
        border: 1px solid rgba(0, 242, 254, 0.3);
        border-radius: 30px;
        padding: 40px;
        margin: auto;
        transform: scale(0.7);
        transition: all 0.3s ease;
        box-shadow: 0 0 50px rgba(0, 242, 254, 0.2);
        backdrop-filter: blur(10px);
    }

    .team-modal.active .modal-content {
        transform: scale(1);
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(0, 242, 254, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 20px;
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
        width: 120px;
        height: 120px;
        margin: 0 auto 25px;
        background: linear-gradient(135deg, #00f2fe, #4facfe);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 30px rgba(0, 242, 254, 0.3);
        position: relative;
        overflow: hidden;
    }

    .modal-avatar span {
        font-size: 48px;
        font-weight: 600;
        color: #0a0a0a;
    }

    .modal-name {
        font-size: 2.2rem;
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
        font-size: 1.1rem;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .modal-badge {
        display: inline-block;
        background: rgba(0, 242, 254, 0.1);
        border: 1px solid rgba(0, 242, 254, 0.3);
        border-radius: 20px;
        padding: 5px 15px;
        font-size: 0.9rem;
        color: #00f2fe;
        margin: 0 auto 25px;
        width: fit-content;
    }

    .modal-info {
        margin-bottom: 25px;
    }

    .modal-info-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 12px 0;
        border-bottom: 1px solid rgba(0, 242, 254, 0.1);
    }

    .modal-info-item:last-child {
        border-bottom: none;
    }

    .modal-info-icon {
        width: 40px;
        height: 40px;
        background: rgba(0, 242, 254, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #00f2fe;
        font-size: 18px;
    }

    .modal-info-text {
        flex: 1;
    }

    .modal-info-label {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.5);
        margin-bottom: 3px;
    }

    .modal-info-value {
        font-size: 1rem;
        color: #fff;
        font-weight: 500;
    }

    .modal-skills {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 20px 0;
    }

    .modal-skill {
        background: rgba(0, 242, 254, 0.1);
        border: 1px solid rgba(0, 242, 254, 0.2);
        border-radius: 15px;
        padding: 8px 16px;
        font-size: 0.9rem;
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
        gap: 15px;
        margin-top: 25px;
        padding-top: 25px;
        border-top: 1px solid rgba(0, 242, 254, 0.1);
    }

    .modal-social a {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(0, 242, 254, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .modal-social a:hover {
        background: #00f2fe;
        color: #0a0a0a;
        transform: translateY(-3px);
        box-shadow: 0 0 20px rgba(0, 242, 254, 0.4);
    }

    /* Team Member Card - Make it clickable */
    .team-member {
        cursor: pointer;
    }
</style>
@endpush
@push('scripts')
<script>
    // Modal functionality
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('teamModal');
        const closeBtn = document.getElementById('closeModal');
        const teamMembers = document.querySelectorAll('.team-member');
        
        // Function to open modal with member data
        function openModal(memberData) {
            // Set basic info
            document.getElementById('modalName').textContent = memberData.name;
            document.getElementById('modalPosition').textContent = memberData.position;
            document.getElementById('modalInitials').textContent = memberData.initials;
            document.getElementById('modalExperience').textContent = memberData.experience;
            document.getElementById('modalEmail').textContent = memberData.email;
            document.getElementById('modalPhone').textContent = memberData.phone;
            document.getElementById('modalEducation').textContent = memberData.education;
            document.getElementById('modalLocation').textContent = memberData.location;
            document.getElementById('modalBio').textContent = memberData.bio;
            
            // Set skills
            const skillsContainer = document.getElementById('modalSkills');
            skillsContainer.innerHTML = '';
            memberData.skills.forEach(skill => {
                const skillTag = document.createElement('span');
                skillTag.className = 'modal-skill';
                skillTag.textContent = skill;
                skillsContainer.appendChild(skillTag);
            });
            
            // Set social links
            const socialContainer = document.getElementById('modalSocial');
            socialContainer.innerHTML = '';
            
            if (memberData.linkedin) {
                socialContainer.innerHTML += `<a href="${memberData.linkedin}" target="_blank"><i class="fab fa-linkedin-in"></i></a>`;
            }
            if (memberData.twitter) {
                socialContainer.innerHTML += `<a href="${memberData.twitter}" target="_blank"><i class="fab fa-twitter"></i></a>`;
            }
            if (memberData.github) {
                socialContainer.innerHTML += `<a href="${memberData.github}" target="_blank"><i class="fab fa-github"></i></a>`;
            }
            if (memberData.dribbble) {
                socialContainer.innerHTML += `<a href="${memberData.dribbble}" target="_blank"><i class="fab fa-dribbble"></i></a>`;
            }
            
            // Show modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        // Add click event to each team member
        teamMembers.forEach(member => {
            member.addEventListener('click', function(e) {
                // Prevent opening modal if clicking on social links
                if (e.target.closest('a')) return;
                
                // Parse skills from data attribute
                const skills = JSON.parse(this.dataset.skills || '[]');
                
                const memberData = {
                    name: this.dataset.name,
                    position: this.dataset.position,
                    initials: this.dataset.initials,
                    experience: this.dataset.experience,
                    email: this.dataset.email,
                    phone: this.dataset.phone,
                    education: this.dataset.education,
                    location: this.dataset.location,
                    bio: this.dataset.bio,
                    skills: skills,
                    linkedin: this.dataset.linkedin,
                    twitter: this.dataset.twitter,
                    github: this.dataset.github,
                    dribbble: this.dataset.dribbble
                };
                
                openModal(memberData);
            });
        });
        
        // Close modal when clicking close button
        closeBtn.addEventListener('click', function() {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        });
        
        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                modal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });
</script>
@endpush
@endsection