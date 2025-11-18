<?php
/**
 * Portfolio Theme Functions
 */

// Theme Setup
function portfolio_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('responsive-embeds');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'portfolio-theme'),
    ));
}
add_action('after_setup_theme', 'portfolio_theme_setup');

// Enqueue styles and scripts
function portfolio_theme_scripts() {
    wp_enqueue_style('portfolio-theme-style', get_stylesheet_uri(), array(), '1.0');

    // Add smooth scroll script
    wp_add_inline_script('jquery', '
        jQuery(document).ready(function($) {
            $("a[href^=\'#\']").on("click", function(e) {
                e.preventDefault();
                var target = $(this.getAttribute("href"));
                if (target.length) {
                    $("html, body").stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });

            // Mobile menu toggle
            $(".mobile-menu-toggle").on("click", function() {
                $(".main-menu").toggleClass("active");
                $(this).text($(this).text() === "☰" ? "✕" : "☰");
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'portfolio_theme_scripts');

// Add SVG support
function portfolio_add_svg_to_upload_mimes($upload_mimes) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('upload_mimes', 'portfolio_add_svg_to_upload_mimes', 10, 1);

// Custom excerpt length
function portfolio_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'portfolio_excerpt_length');

// Remove default WordPress styles
function portfolio_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style');
}
add_action('wp_enqueue_scripts', 'portfolio_remove_wp_block_library_css', 100);

// Add custom body class
function portfolio_body_classes($classes) {
    if (!is_admin()) {
        $classes[] = 'portfolio-theme';
    }
    return $classes;
}
add_filter('body_class', 'portfolio_body_classes');

// Contact Form Handler
function portfolio_handle_contact_form() {
    if (isset($_POST['portfolio_contact_submit'])) {
        $name = sanitize_text_field($_POST['contact_name']);
        $email = sanitize_email($_POST['contact_email']);
        $subject = sanitize_text_field($_POST['contact_subject']);
        $message = sanitize_textarea_field($_POST['contact_message']);

        // Send email
        $to = get_option('admin_email');
        $email_subject = 'Portfolio Contact: ' . $subject;
        $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: $email");

        if (wp_mail($to, $email_subject, $email_body, $headers)) {
            set_transient('contact_form_success', true, 30);
        } else {
            set_transient('contact_form_error', true, 30);
        }

        wp_redirect(home_url('/#contact'));
        exit;
    }
}
add_action('template_redirect', 'portfolio_handle_contact_form');

// Security: Remove WordPress version
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Hide admin bar for non-admins
if (!current_user_can('administrator')) {
    show_admin_bar(false);
}
