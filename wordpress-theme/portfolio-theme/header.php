<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="site-navigation">
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
            <?php bloginfo('name'); ?>
        </a>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'main-menu',
            'container' => false,
            'fallback_cb' => 'portfolio_default_menu',
        ));
        ?>

        <button class="mobile-menu-toggle">☰</button>
    </div>
</nav>

<?php
function portfolio_default_menu() {
    ?>
    <ul class="main-menu">
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact" class="menu-contact-btn">Contact</a></li>
    </ul>
    <?php
}
?>
