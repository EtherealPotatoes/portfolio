<?php get_header(); ?>

<section id="hero">
    <div class="hero-content">
        <h1>Hi, I'm <span class="highlight"><?php echo esc_html(get_theme_mod('hero_title', 'Joseph Young')); ?></span></h1>
        <p class="hero-subtitle"><?php echo esc_html(get_theme_mod('hero_subtitle', 'High School Engineering Student | Innovator | Problem Solver')); ?></p>
        <p class="hero-description"><?php echo esc_html(get_theme_mod('hero_description', 'Passionate about creating innovative solutions through engineering, robotics, and technology.')); ?></p>

        <div class="social-links">
            <?php if (get_theme_mod('github_url')): ?>
            <a href="<?php echo esc_url(get_theme_mod('github_url')); ?>" class="github" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
            </a>
            <?php endif; ?>
            <?php if (get_theme_mod('linkedin_url')): ?>
            <a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>" class="linkedin" target="_blank" rel="noopener">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
            </a>
            <?php endif; ?>
            <?php if (get_theme_mod('email')): ?>
            <a href="mailto:<?php echo esc_attr(get_theme_mod('email')); ?>" class="email">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </a>
            <?php endif; ?>
        </div>

        <a href="#projects" class="cta-button">View My Work</a>
    </div>
</section>

<section id="projects">
    <div class="container">
        <h2>Featured Projects</h2>
        <div class="projects-grid">
            <?php
            $projects = new WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            ));

            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post();
                    $tags = get_post_meta(get_the_ID(), '_project_tags', true);
                    $tags_array = $tags ? array_map('trim', explode(',', $tags)) : array();
            ?>
                <div class="project-card">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                    <div class="project-card-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo esc_html(get_the_excerpt()); ?></p>
                        <?php if (!empty($tags_array)): ?>
                        <div class="project-tags">
                            <?php foreach ($tags_array as $tag): ?>
                                <span class="project-tag"><?php echo esc_html($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<section id="skills">
    <div class="container">
        <h2>Technical Skills</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <h3>Programming</h3>
                <ul>
                    <li>Python</li>
                    <li>Java</li>
                    <li>JavaScript</li>
                    <li>C++</li>
                </ul>
            </div>
            <div class="skill-card">
                <h3>Engineering</h3>
                <ul>
                    <li>CAD Design (SolidWorks)</li>
                    <li>3D Printing</li>
                    <li>Circuit Design</li>
                    <li>Prototyping</li>
                </ul>
            </div>
            <div class="skill-card">
                <h3>Robotics</h3>
                <ul>
                    <li>Arduino</li>
                    <li>Raspberry Pi</li>
                    <li>Sensor Integration</li>
                    <li>Motor Control</li>
                </ul>
            </div>
            <div class="skill-card">
                <h3>Tools & Technologies</h3>
                <ul>
                    <li>Git & GitHub</li>
                    <li>VS Code</li>
                    <li>Linux</li>
                    <li>Web Development</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <h2>About Me</h2>
        <div class="about-content">
            <div class="about-image">
                <?php
                $about_image = get_theme_mod('about_image');
                if ($about_image):
                ?>
                    <img src="<?php echo esc_url($about_image); ?>" alt="About Me">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-me.jpg" alt="About Me">
                <?php endif; ?>
            </div>
            <div class="about-text">
                <h3>Passionate About Innovation</h3>
                <?php
                $about_text = get_theme_mod('about_text', 'I\'m a passionate high school student with a deep interest in engineering, robotics, and technology. Through hands-on projects and continuous learning, I strive to develop innovative solutions to real-world problems.');
                echo wpautop(wp_kses_post($about_text));
                ?>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Get In Touch</h2>
        <?php if (isset($_GET['contact']) && $_GET['contact'] == 'success'): ?>
            <p style="text-align: center; color: #10b981; margin-bottom: 2rem;">Thank you for your message! I'll get back to you soon.</p>
        <?php elseif (isset($_GET['contact']) && $_GET['contact'] == 'error'): ?>
            <p style="text-align: center; color: #ef4444; margin-bottom: 2rem;">There was an error sending your message. Please try again.</p>
        <?php endif; ?>
        <form class="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
            <input type="hidden" name="action" value="submit_contact_form">
            <?php wp_nonce_field('contact_form', 'contact_form_nonce'); ?>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>
