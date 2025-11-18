<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav>
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
            <?php echo esc_html(get_theme_mod('hero_title', 'Joseph Young')); ?>
        </a>
        <ul class="nav-menu">
            <li><a href="#hero">Home</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>
