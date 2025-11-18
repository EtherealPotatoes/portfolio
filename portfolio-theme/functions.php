<?php

function portfolio_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'portfolio-theme')
    ));
}
add_action('after_setup_theme', 'portfolio_theme_setup');

function portfolio_theme_scripts() {
    wp_enqueue_style('portfolio-style', get_stylesheet_uri());
    wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_theme_scripts');

function create_project_post_type() {
    register_post_type('project',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project'),
                'add_new' => __('Add New Project'),
                'add_new_item' => __('Add New Project'),
                'edit_item' => __('Edit Project'),
                'new_item' => __('New Project'),
                'view_item' => __('View Project'),
                'search_items' => __('Search Projects'),
                'not_found' => __('No projects found'),
                'not_found_in_trash' => __('No projects found in Trash')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'rewrite' => array('slug' => 'projects'),
        )
    );
}
add_action('init', 'create_project_post_type');

function add_project_meta_boxes() {
    add_meta_box(
        'project_details',
        'Project Details',
        'project_details_callback',
        'project',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_project_meta_boxes');

function project_details_callback($post) {
    wp_nonce_field('project_details_nonce', 'project_details_nonce');

    $tags = get_post_meta($post->ID, '_project_tags', true);
    $github_link = get_post_meta($post->ID, '_project_github', true);
    $demo_link = get_post_meta($post->ID, '_project_demo', true);

    echo '<p><label for="project_tags">Technologies (comma-separated):</label><br>';
    echo '<input type="text" id="project_tags" name="project_tags" value="' . esc_attr($tags) . '" style="width:100%;" placeholder="Python, React, Node.js" /></p>';

    echo '<p><label for="project_github">GitHub Link:</label><br>';
    echo '<input type="url" id="project_github" name="project_github" value="' . esc_url($github_link) . '" style="width:100%;" /></p>';

    echo '<p><label for="project_demo">Demo Link:</label><br>';
    echo '<input type="url" id="project_demo" name="project_demo" value="' . esc_url($demo_link) . '" style="width:100%;" /></p>';
}

function save_project_details($post_id) {
    if (!isset($_POST['project_details_nonce']) || !wp_verify_nonce($_POST['project_details_nonce'], 'project_details_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['project_tags'])) {
        update_post_meta($post_id, '_project_tags', sanitize_text_field($_POST['project_tags']));
    }

    if (isset($_POST['project_github'])) {
        update_post_meta($post_id, '_project_github', esc_url_raw($_POST['project_github']));
    }

    if (isset($_POST['project_demo'])) {
        update_post_meta($post_id, '_project_demo', esc_url_raw($_POST['project_demo']));
    }
}
add_action('save_post_project', 'save_project_details');

function portfolio_customize_register($wp_customize) {
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'portfolio-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'Joseph Young',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'portfolio-theme'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'High School Engineering Student | Innovator | Problem Solver',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'portfolio-theme'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_description', array(
        'default' => 'Passionate about creating innovative solutions through engineering, robotics, and technology.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_description', array(
        'label' => __('Hero Description', 'portfolio-theme'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('github_url', array(
        'default' => 'https://github.com/EtherealPotatoes',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('github_url', array(
        'label' => __('GitHub URL', 'portfolio-theme'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('linkedin_url', array(
        'default' => 'https://linkedin.com/in/joseph-y-6827a0383/',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('linkedin_url', array(
        'label' => __('LinkedIn URL', 'portfolio-theme'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('email', array(
        'default' => 'jy139500@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('email', array(
        'label' => __('Email', 'portfolio-theme'),
        'section' => 'hero_section',
        'type' => 'email',
    ));

    $wp_customize->add_section('about_section', array(
        'title' => __('About Section', 'portfolio-theme'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('about_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label' => __('About Image', 'portfolio-theme'),
        'section' => 'about_section',
    )));

    $wp_customize->add_setting('about_text', array(
        'default' => 'I\'m a passionate high school student...',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('about_text', array(
        'label' => __('About Text', 'portfolio-theme'),
        'section' => 'about_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'portfolio_customize_register');

function handle_contact_form() {
    if (isset($_POST['contact_form_nonce']) && wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form')) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = get_option('admin_email');
        $subject = 'New Contact Form Submission from ' . $name;
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');

        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect(add_query_arg('contact', 'success', $_POST['_wp_http_referer']));
            exit;
        } else {
            wp_redirect(add_query_arg('contact', 'error', $_POST['_wp_http_referer']));
            exit;
        }
    }
}
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form');
add_action('admin_post_submit_contact_form', 'handle_contact_form');
