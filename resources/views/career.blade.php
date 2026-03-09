@extends('layouts.app')

@section('title', 'Career - JD Technology')

@section('content')
    <section style="color: white; padding: 50px 0;">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
            <div class="hero-badge" style="margin-bottom: 20px;">
                <i class="fas fa-briefcase"></i> Career
            </div>
            <h1 style="font-size: 3.5rem; font-weight: 800; margin-bottom: 30px;">Join Our Team</h1>
            <p style="font-size: 1.2rem; line-height: 1.8; opacity: 0.9;">
                Bergabunglah dengan tim kami dan berkontribusi dalam menciptakan solusi digital inovatif.
            </p>
        </div>

        <!-- Why Join Us -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 60px;">
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 20px; text-align: center;">
                <i class="fas fa-chart-line" style="font-size: 40px; margin-bottom: 20px;"></i>
                <h3>Career Growth</h3>
                <p style="opacity: 0.8;">Kesempatan pengembangan karir dan pembelajaran berkelanjutan</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 20px; text-align: center;">
                <i class="fas fa-clock" style="font-size: 40px; margin-bottom: 20px;"></i>
                <h3>Flexible Hours</h3>
                <p style="opacity: 0.8;">Jam kerja fleksibel dan work-life balance</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 20px; text-align: center;">
                <i class="fas fa-users" style="font-size: 40px; margin-bottom: 20px;"></i>
                <h3>Great Team</h3>
                <p style="opacity: 0.8;">Bekerja dengan tim yang solid dan supportive</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 20px; text-align: center;">
                <i class="fas fa-gift" style="font-size: 40px; margin-bottom: 20px;"></i>
                <h3>Competitive Benefits</h3>
                <p style="opacity: 0.8;">Gaji kompetitif dan benefit menarik</p>
            </div>
        </div>

        <!-- Open Positions -->
        <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 40px;">Open Positions</h2>
        
        <div style="display: grid; gap: 20px;">
            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <h3 style="font-size: 1.5rem;">Laravel Developer</h3>
                        <p style="opacity: 0.8; margin: 10px 0;">Full-time • Jakarta / Remote</p>
                        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">PHP</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">Laravel</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">MySQL</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary" style="padding: 10px 30px;">Apply Now</a>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <h3 style="font-size: 1.5rem;">React Native Developer</h3>
                        <p style="opacity: 0.8; margin: 10px 0;">Full-time • Jakarta / Remote</p>
                        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">React Native</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">JavaScript</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">Redux</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary" style="padding: 10px 30px;">Apply Now</a>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <h3 style="font-size: 1.5rem;">UI/UX Designer</h3>
                        <p style="opacity: 0.8; margin: 10px 0;">Full-time • Jakarta</p>
                        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">Figma</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">Adobe XD</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">Prototyping</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary" style="padding: 10px 30px;">Apply Now</a>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 30px; border-radius: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <h3 style="font-size: 1.5rem;">Project Manager</h3>
                        <p style="opacity: 0.8; margin: 10px 0;">Full-time • Jakarta</p>
                        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">Agile</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">Scrum</span>
                            <span style="background: rgba(102, 126, 234, 0.3); padding: 5px 15px; border-radius: 50px; font-size: 14px;">JIRA</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary" style="padding: 10px 30px;">Apply Now</a>
                </div>
            </div>
        </div>

        <!-- Application Form -->
        <div style="margin-top: 80px;">
            <h2 style="font-size: 2.5rem; text-align: center; margin-bottom: 40px;">Send Your Application</h2>
            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 50px; border-radius: 30px;">
                <form>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="">Select Position</option>
                                <option value="laravel">Laravel Developer</option>
                                <option value="react">React Native Developer</option>
                                <option value="uiux">UI/UX Designer</option>
                                <option value="pm">Project Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Cover Letter" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                    </div>
                    <button type="submit" class="btn-submit">Submit Application</button>
                </form>
            </div>
        </div>
    </section>
@endsection