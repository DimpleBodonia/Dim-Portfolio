@extends('layouts.app')

@section('content')
    @include('components.navbar')

    {{-- ==================== HERO ==================== --}}
    <section class="hero section" id="home">
        <div class="hero-bg-glow glow-1"></div>
        <div class="hero-bg-glow glow-2"></div>
        <div class="hero-grid"></div>

        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <span class="hero-badge-dot"></span>
                        Available for opportunities
                    </div>
                    <h1 class="hero-title">
                        Hi, I'm<br>
                        <span class="hero-title-accent">Dimple Kate B. Bodonia</span>
                    </h1>
                    <p class="hero-subtitle">
                    A passionate Information Technology student creating modern web applications with clean code and creative design. Turning ideas into digital solutions.   
                    </p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                            View My Projects
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            Contact Me
                        </a>
                    </div>
                </div>
               <div class="hero-image-wrapper" style="transform: scale(1.3);">
    <div class="hero-image-container">
        <div class="hero-image-ring"></div>
        <div class="hero-image">
            <img src="{{ asset('images/profile.jpg') }}" 
                 alt="Dimple Kate B. Bodonia" 
                 class="hero-img">
        </div>
        <div class="hero-image-dots"></div>
    </div>
</div>
                </div>
            </div>
        </div>
    </section>

   {{-- ==================== ABOUT ==================== --}}
    <section class="section section-alt" id="about">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">About Me</span>
                <h2 class="section-title">Who I Am</h2>
                <p class="section-subtitle">My journey in IT and the skills I’ve developed along the way.</p>
                <div class="gradient-line"></div>
            </div>

            <div class="about-grid">
                <div class="about-image-section reveal">
                    <div class="about-image-card">
                        <div class="about-image-placeholder">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Dimple Kate B. Bodonia" class="about-img">
                        </div>
                    </div>
                </div>
                <div class="about-text reveal">
                    <h3>Student & Aspiring Developer</h3>
                    <p>
                        I am a passionate learner who enjoys exploring new ideas and skills. I value creativity, teamwork, and continuous growth in everything I do.
                    </p>
                    <p> 
                        My journey in Information Technology started with a curiosity about computers and how technology works. Over time, this curiosity developed into a passion for learning, creating, and exploring new digital solutions. I’m always eager to improve my skills, learn new technologies, and take on challenging projects.   
                    </p>

                    <div class="skills-grid">
                        <span class="skill-tag">HTML5</span>
                        <span class="skill-tag">CSS3</span>
                        <span class="skill-tag">JavaScript</span>
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">React</span>
                        <span class="skill-tag">Node.js</span>
                        <span class="skill-tag">Tailwind CSS</span>
                        <span class="skill-tag">Blade</span>
                    </div>

                    <div class="stats-row">
                        <div class="stat-card">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Projects</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Certifications</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        
    {{-- ==================== EDUCATION ==================== --}}
    <section class="section" id="education">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Education</span>
                <h2 class="section-title">Education & Certifications</h2>
                <p class="section-subtitle">My academic journey and professional certifications.</p>
                <div class="gradient-line"></div>
            </div>

            <div class="edu-split">
                {{-- Left: Education Timeline --}}
                <div class="edu-left reveal">
                    <h3 class="edu-col-title">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                        Education
                    </h3>
                    <div class="edu-timeline">
                        <div class="edu-timeline-item">
                            <div class="edu-timeline-dot"></div>
                            <div class="edu-timeline-card">
                                <span class="edu-year">2023 - Present</span>
                                <h4>Data Center College of the Philippines</h4>
                                <p class="edu-degree">Bachelor of Science in Information Technology</p>
                                <p class="edu-desc">Pursuing a degree in IT with a focus on software development, web technologies, and IT solutions. Actively developing technical and problem-solving skills through coding projects and hands-on experiences.</p>
                            </div>
                        </div>
                        <div class="edu-timeline-item">
                            <div class="edu-timeline-dot"></div>
                            <div class="edu-timeline-card">
                                <span class="edu-year">2021 - 2023</span>
                                <h4>Abra High School</h4>
                                <p class="edu-degree">GAS Strand - General Academic Strand</p>
                                <p class="edu-desc">Graduated with honors. Developed a strong foundation in various academic fields, communication, and critical thinking, which strengthened my interest in technology.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Divider --}}
                <div class="edu-divider reveal">
                    <div class="edu-divider-line"></div>
                    <div class="edu-divider-dot"></div>
                    <div class="edu-divider-line"></div>
                </div>

                {{-- Right: Certificate --}}
                <div class="edu-right reveal">
                    <h3 class="edu-col-title">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                        Certification
                    </h3>
                    <div class="cert-card">
                        <div class="cert-badge">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                        </div>
                        <div class="cert-body">
                            <h4>"ONLINE SAFETY THROUGH NETIQUETTE"</h4>
                            <p class="cert-org">"DICT"</p>
                            <span class="cert-date">2026</span>
                            <p class="cert-desc">Learned how to practice proper online etiquette, protect personal information, communicate respectfully, and stay safe while using digital platforms.</p>
                           <a href="https://drive.google.com/file/d/1PVN8OOvV47akJogqINmA9DeOLSCZnHXP/view" class="btn btn-sm btn-secondary cert-btn"target="_blank"rel="noopener noreferrer"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                            <polyline points="15 3 21 3 21 9"/>
                            <line x1="10" y1="14" x2="21" y2="3"/>
                            </svg>
                            View Certificate
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- ==================== PROJECTS ==================== --}}
<section class="section section-alt" id="projects">
    <div class="container projects-container" style="max-width: 1100px; margin: 0 auto;">

        <div class="section-header reveal">
            <span class="section-label">Projects</span>
            <h2 class="section-title">Featured Work</h2>
            <p class="section-subtitle">
                A selection of projects that showcase my skills and creativity.
            </p>
            <div class="gradient-line"></div>
        </div>

        <div class="projects-grid" style="display: flex; justify-content: center; align-items: stretch; gap: 30px; flex-wrap: wrap;">

            {{-- Project 1 --}}
            <div class="project-card reveal" style="flex: 1; max-width: 520px;">
                
                <div class="project-image">
                    <img src="{{ asset('images/Kusina.png') }}" 
                         alt="Kusina ni Mama Reservation System"
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>

                <div class="project-body">
                    <h3 class="project-title">
                        Kusina ni Mama Reservation System
                    </h3>

                    <p class="project-desc">
                        The Kusina ni Mama Restaurant Reservation System is a
                        desktop-based application developed using Microsoft Visual
                        Studio 2010 (WinForms). It is designed to manage and
                        organize restaurant reservations, making it easier to
                        handle customer bookings and keep reservation records
                        in one centralized system.
                    </p>

                    <div class="project-tech">
                        <span>Microsoft Visual Studio</span>
                        <span>MySQL</span>
                    </div>
                </div>
            </div>


            {{-- Project 2 --}}
            <div class="project-card reveal" style="flex: 1; max-width: 520px;">
                
                <div class="project-image">
                    <img src="{{ asset('images/parking.jpg') }}" 
                         alt="Vehicle Parking Monitoring System"
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>

                <div class="project-body">
                    <h3 class="project-title">
                        Vehicle Parking Monitoring System
                    </h3>

                    <p class="project-desc">
                        The Parking Monitoring System is a user-friendly
                        software designed to simplify parking operations.
                        It helps administrators manage vehicle entries,
                        parking slots, customer records, and transactions
                        in one centralized system. With real-time updates,
                        secure login, and an organized dashboard, it improves
                        accuracy, reduces manual work, and makes parking
                        management faster and more efficient.
                    </p>

                    <div class="project-tech">
                        <span>Microsoft Visual Studio</span>
                        <span>MySQL</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    {{-- ==================== CONTACT ==================== --}}
    <section class="section" id="contact">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-label">Contact</span>
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">Have a project in mind or just want to say hello? Feel free to reach out.</p>
                <div class="gradient-line"></div>
            </div>

            <div class="contact-grid reveal">
                <div class="contact-info">
                    <a href="mailto:your.email@example.com" class="contact-item">
                        <div class="contact-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div class="contact-detail">
                            <h4>Email</h4>
                            <p>kbbersalona@gmail.com</p>
                        </div>
                    </a>
                    <a href="tel:+639123456789" class="contact-item">
                        <div class="contact-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div class="contact-detail">
                            <h4>Phone</h4>
                            <p>+63 995 524 3015</p>
                        </div>
                    </a>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="contact-detail">
                            <h4>Location</h4>
                            <p>Zone 1, Bangued Abra</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </div>
                        <div class="contact-detail">
                            <h4>GitHub</h4>
                            <a href="https://github.com/" target="_blank" rel="noopener">github.com/DimpleBodonia</a>
                        </div>
                    </div>
                </div>

                <div class="contact-cta">
                    <h3 class="contact-cta-title">Let's Build Something Great</h3>
                    <p class="contact-cta-text">I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.</p>
                    <a href="mailto:kbbersalona@gmail.com" class="btn btn-primary">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    Send Me an Email
                    </a>
                    <div class="contact-social">

    {{-- GitHub --}}
    <a href="https://github.com/DimpleBodonia"
       target="_blank"
       rel="noopener noreferrer"
       class="social-icon"
       aria-label="GitHub">

        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
        </svg>
    </a>

    {{-- Facebook --}}
    <a href="https://www.facebook.com/dimvsx"
       target="_blank"
       rel="noopener noreferrer"
       class="social-icon"
       aria-label="Facebook">

        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.413c0-3.017 1.792-4.684 4.533-4.684 1.312 0 2.686.235 2.686.235v2.953h-1.514c-1.491 0-1.956.93-1.956 1.886v2.274h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/>
        </svg>
    </a>

    {{-- Discord --}}
    <a href="https://discord.com/users/dimplekate13"
       target="_blank"
       rel="noopener noreferrer"
       class="social-icon"
       aria-label="Discord">

        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M20.317 4.369A19.791 19.791 0 0 0 15.885 3c-.191.329-.4.774-.549 1.122a18.27 18.27 0 0 0-5.474 0A12.64 12.64 0 0 0 9.317 3a19.736 19.736 0 0 0-4.44 1.375C2.06 8.593 1.3 12.85 1.682 17.047a19.9 19.9 0 0 0 5.463 2.756c.442-.607.836-1.25 1.176-1.927-.646-.244-1.268-.538-1.872-.878.157-.116.311-.237.46-.36 3.614 1.695 7.53 1.695 11.101 0 .15.123.244.237.461.36-.604.34-1.226.634-1.873.878.341.677.734 1.32 1.177 1.927a19.89 19.89 0 0 0 5.462-2.756c.445-4.864-.76-9.083-3.42-12.678zM8.02 15.331c-1.085 0-1.979-.987-1.979-2.202 0-1.214.876-2.202 1.979-2.202 1.102 0 1.996.988 1.978 2.202 0 1.215-.876 2.202-1.978 2.202zm7.96 0c-1.085 0-1.979-.987-1.979-2.202 0-1.214.876-2.202 1.979-2.202 1.102 0 1.996.988 1.978 2.202 0 1.215-.876 2.202-1.978 2.202z"/>
        </svg>
        </a>
            </div>  
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection
