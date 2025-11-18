<?php get_header(); ?>

<!-- Hero Section -->
<section id="hero" class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">
            Hi, I'm <span class="hero-name">Joseph Young</span>
        </h1>
        <p class="hero-subtitle">
            High School Engineering Student | Innovator | Problem Solver
        </p>
        <p class="hero-description">
            Passionate about creating innovative solutions through engineering, robotics, and technology.
            Dedicated to making a positive impact through hands-on projects and continuous learning.
        </p>

        <div class="social-links">
            <a href="https://github.com/EtherealPotatoes" target="_blank" rel="noopener noreferrer" class="social-link github" aria-label="GitHub">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
            <a href="https://linkedin.com/in/joseph-y-6827a0383/" target="_blank" rel="noopener noreferrer" class="social-link linkedin" aria-label="LinkedIn">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
            </a>
            <a href="mailto:jy139500@gmail.com" class="social-link email" aria-label="Email">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </a>
        </div>

        <div>
            <a href="#projects" class="cta-button">View My Work</a>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">
                A showcase of my engineering projects, competitions, and research
            </p>
        </div>

        <div class="projects-grid">
            <!-- Bike Frame -->
            <div class="project-card fade-in">
                <div class="project-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bike-frame.jpg" alt="Bike Frame and Suspension" class="project-image">
                    <div class="category-badge">Mobility Engineering</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Bike Frame and Suspension</h3>
                    <p class="project-description">
                        Designed a custom bike frame and suspension system optimized for stability and off-road shock absorption.
                    </p>
                    <div class="achievements-section">
                        <h4 class="achievements-title">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                            </svg>
                            Key Achievements
                        </h4>
                        <ul>
                            <li class="achievement-item">• Working suspension with bike shock</li>
                            <li class="achievement-item">• Refined geometry through iterative CAD testing</li>
                        </ul>
                    </div>
                    <div class="tech-tags">
                        <span class="tech-tag">CAD</span>
                        <span class="tech-tag">SolidWorks Simulation</span>
                        <span class="tech-tag">3D Printing</span>
                        <span class="tech-tag">Reverse Engineer</span>
                    </div>
                    <div class="project-links">
                        <a href="https://docs.google.com/presentation/d/1o8r13nHphH8j1RqkgcLpbXoBK4lAk47uzTXsi-RMYU4/edit?usp=sharing" target="_blank" rel="noopener noreferrer" class="project-link">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Presentation
                        </a>
                    </div>
                </div>
            </div>

            <!-- Watch Design -->
            <div class="project-card fade-in">
                <div class="project-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/watch-design.jpg" alt="Mechanical Watch Design" class="project-image">
                    <div class="category-badge">Product Design</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Mechanical Watch Design</h3>
                    <p class="project-description">
                        Created a full skeleton watch concept aimed at maximizing appraisal value through aesthetics and mechanical efficiency.
                    </p>
                    <div class="achievements-section">
                        <h4 class="achievements-title">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                            </svg>
                            Key Achievements
                        </h4>
                        <ul>
                            <li class="achievement-item">• Detailed movement architecture</li>
                            <li class="achievement-item">• Slick modern design</li>
                        </ul>
                    </div>
                    <div class="tech-tags">
                        <span class="tech-tag">SolidWorks</span>
                        <span class="tech-tag">Gear Train</span>
                        <span class="tech-tag">Rendering Tools</span>
                        <span class="tech-tag">SolidWorks Visualize</span>
                    </div>
                    <div class="project-links">
                        <a href="https://docs.google.com/presentation/d/158Z8fMB94L4N5pZnxoO_ooYKExUQ1tmA6Q3ufnh_fao/edit?usp=sharing" target="_blank" rel="noopener noreferrer" class="project-link">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Presentation
                        </a>
                    </div>
                </div>
            </div>

            <!-- Jet Engine -->
            <div class="project-card fade-in">
                <div class="project-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/jet-engine.jpg" alt="Jet Turbine Engine Prototype" class="project-image">
                    <div class="category-badge">Aerospace</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Jet Turbine Engine Prototype</h3>
                    <p class="project-description">
                        Reverse engineered a jet turbine engine from blueprints found online to study mechanical movement.
                    </p>
                    <div class="achievements-section">
                        <h4 class="achievements-title">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                            </svg>
                            Key Achievements
                        </h4>
                        <ul>
                            <li class="achievement-item">• Learned complex modeling</li>
                            <li class="achievement-item">• Intro to aerospace engineering</li>
                        </ul>
                    </div>
                    <div class="tech-tags">
                        <span class="tech-tag">CAD</span>
                        <span class="tech-tag">SolidWorks</span>
                        <span class="tech-tag">Basic Aerodynamics Modeling</span>
                    </div>
                </div>
            </div>

            <!-- Blackjack Game -->
            <div class="project-card fade-in">
                <div class="project-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blackjack-game.jpg" alt="Blackjack Game and AI Program" class="project-image">
                    <div class="category-badge">Game Development</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Blackjack Game and AI Program</h3>
                    <p class="project-description">
                        Developed a full blackjack game with an AI that reads game state and suggests optimal moves to be presented to other students.
                    </p>
                    <div class="achievements-section">
                        <h4 class="achievements-title">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                            </svg>
                            Key Achievements
                        </h4>
                        <ul>
                            <li class="achievement-item">• Implemented insurance, surrender, and advanced payout logic</li>
                            <li class="achievement-item">• Functioning decision-making AI</li>
                        </ul>
                    </div>
                    <div class="tech-tags">
                        <span class="tech-tag">Python</span>
                        <span class="tech-tag">Pygame</span>
                        <span class="tech-tag">JSON State Parsing</span>
                        <span class="tech-tag">Standard Blackjack Strategy Logic</span>
                    </div>
                    <div class="project-links">
                        <a href="https://docs.google.com/presentation/d/1682_FynZ_fbw8-GJn4Z4fvALHq-h5TsS6_UXC2bungc/edit?usp=sharing" target="_blank" rel="noopener noreferrer" class="project-link">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Presentation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="section bg-gray">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Skills & Expertise</h2>
            <p class="section-subtitle">
                Technical and professional skills developed through projects, coursework, and competitions
            </p>
        </div>

        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-header">
                    <div class="skill-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="skill-title">Programming</h3>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-bullet"></span>Python</li>
                    <li class="skill-item"><span class="skill-bullet"></span>HTML</li>
                    <li class="skill-item"><span class="skill-bullet"></span>CSS</li>
                </ul>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <div class="skill-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                    </div>
                    <h3 class="skill-title">Engineering Tools</h3>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-bullet"></span>SolidWorks</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Fusion 360</li>
                    <li class="skill-item"><span class="skill-bullet"></span>3D Printing</li>
                </ul>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <div class="skill-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                    <h3 class="skill-title">Robotics & Hardware</h3>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-bullet"></span>Drone</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Servos</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Motors</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Batteries</li>
                </ul>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <div class="skill-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="skill-title">Technical Skills</h3>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-bullet"></span>Computer Aided Design</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Web Development</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Computer Vision</li>
                </ul>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <div class="skill-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="skill-title">Soft Skills</h3>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-bullet"></span>Team Leadership</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Project Management</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Public Speaking</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Problem Solving</li>
                </ul>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <div class="skill-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="skill-title">Methodologies</h3>
                </div>
                <ul class="skill-list">
                    <li class="skill-item"><span class="skill-bullet"></span>Agile</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Design Thinking</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Research Methods</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Prototyping</li>
                    <li class="skill-item"><span class="skill-bullet"></span>Testing & Validation</li>
                </ul>
            </div>
        </div>

        <div class="certifications-container">
            <h3 class="certifications-title">Certifications & Achievements</h3>
            <div class="certifications-grid">
                <div class="cert-item">
                    <div class="cert-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div class="cert-content">
                        <h4>First Place JPL Invention Challenge Regionals, Fifth Place Finals</h4>
                        <p>Team design lead for regional competition among college and high school teams, advanced to finals</p>
                    </div>
                </div>
                <div class="cert-item">
                    <div class="cert-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div class="cert-content">
                        <h4>Certified SOLIDWORKS Associate certification (CSWA)</h4>
                        <p>Official certification for entry-level modeling on SolidWorks</p>
                    </div>
                </div>
                <div class="cert-item">
                    <div class="cert-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div class="cert-content">
                        <h4>Certified SOLIDWORKS Professional (CSWP)</h4>
                        <p>Studying for the official certification for advanced-level modeling on SolidWorks</p>
                    </div>
                </div>
                <div class="cert-item">
                    <div class="cert-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <div class="cert-content">
                        <h4>AP Physics and Calculus BC</h4>
                        <p>Completing advanced coursework with honors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">About Me</h2>
            <p class="section-subtitle">
                Driven by curiosity and a passion for innovation
            </p>
        </div>

        <div class="about-grid">
            <div class="about-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-me.jpg" alt="Engineering workspace" class="about-image">
            </div>
            <div class="about-content">
                <h3>Engineering Student & Innovator</h3>
                <p>
                    I'm a high school senior with a deep passion for engineering and technology.
                    Watching my dad work as a mechanical engineer from a young age inspired me,
                    and I've been captivated by the endless possibilities of turning ideas into
                    reality through engineering.
                </p>
                <p>
                    My journey has grown from drawing simple isometric sketches to designing
                    functional bike suspensions and other mechanisms. I believe engineering isn't
                    just about solving technical problems—it's about developing solutions that
                    make a meaningful impact on people's lives.
                </p>
                <p>
                    Outside of engineering, I'm an active member of my school's Aero team, where
                    we are designing and building a SUAV for the SUAS Competition. I also contribute to
                    the HelioTech program, collaborating at workshops to construct a solar-powered racecar.
                </p>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon-wrapper">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                    </svg>
                </div>
                <div class="stat-number">3.71</div>
                <div class="stat-label">GPA</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-wrapper">
                    <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                    </svg>
                </div>
                <div class="stat-number">8+</div>
                <div class="stat-label">Awards & Honors</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-wrapper">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <div class="stat-number">10+</div>
                <div class="stat-label">Projects Completed</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-wrapper">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="stat-number">100+</div>
                <div class="stat-label">Volunteer Hours</div>
            </div>
        </div>

        <div class="goals-section">
            <h3 class="goals-title">My Goals</h3>
            <div class="goals-grid">
                <div class="goal-item">
                    <h4>
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        Academic
                    </h4>
                    <p>
                        Pursue a degree in Mechanical or Aerospace Engineering at a top-tier
                        university, continuing to push the boundaries of innovation and technology.
                    </p>
                </div>
                <div class="goal-item">
                    <h4>
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        Career
                    </h4>
                    <p>
                        Develop sustainable technologies that address real-world challenges,
                        from renewable energy systems to accessible medical devices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section bg-gray">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">
                I'm always excited to connect with fellow engineers, mentors, and anyone interested in collaboration
            </p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h3>Let's Connect</h3>
                <p>
                    Whether you're a college admissions officer, a potential mentor, or someone
                    interested in my work, I'd love to hear from you. Feel free to reach out
                    through any of the channels below or use the contact form.
                </p>

                <div class="contact-methods">
                    <a href="mailto:jy139500@gmail.com" class="contact-method">
                        <div class="contact-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="contact-method-info">
                            <h4>Email</h4>
                            <p>jy139500@gmail.com</p>
                        </div>
                    </a>

                    <a href="https://linkedin.com/in/joseph-y-6827a0383/" target="_blank" rel="noopener noreferrer" class="contact-method">
                        <div class="contact-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                        <div class="contact-method-info">
                            <h4>LinkedIn</h4>
                            <p>linkedin.com/in/joseph-y-6827a0383/</p>
                        </div>
                    </a>

                    <a href="https://github.com/EtherealPotatoes" target="_blank" rel="noopener noreferrer" class="contact-method">
                        <div class="contact-icon">
                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </div>
                        <div class="contact-method-info">
                            <h4>GitHub</h4>
                            <p>github.com/EtherealPotatoes</p>
                        </div>
                    </a>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="contact-method-info">
                            <h4>Location</h4>
                            <p>Temple City, California, USA</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <h3>Send a Message</h3>

                <?php if (get_transient('contact_form_success')): ?>
                    <div class="form-message success">
                        Message sent successfully! I will get back to you soon.
                    </div>
                    <?php delete_transient('contact_form_success'); ?>
                <?php endif; ?>

                <?php if (get_transient('contact_form_error')): ?>
                    <div class="form-message error">
                        Error sending message. Please try again.
                    </div>
                    <?php delete_transient('contact_form_error'); ?>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-group">
                        <label for="contact_name">Name</label>
                        <input type="text" id="contact_name" name="contact_name" required placeholder="Your name">
                    </div>

                    <div class="form-group">
                        <label for="contact_email">Email</label>
                        <input type="email" id="contact_email" name="contact_email" required placeholder="your.email@example.com">
                    </div>

                    <div class="form-group">
                        <label for="contact_subject">Subject</label>
                        <input type="text" id="contact_subject" name="contact_subject" required placeholder="What's this about?">
                    </div>

                    <div class="form-group">
                        <label for="contact_message">Message</label>
                        <textarea id="contact_message" name="contact_message" required placeholder="Tell me about your message..." rows="5"></textarea>
                    </div>

                    <button type="submit" name="portfolio_contact_submit" class="submit-button">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
