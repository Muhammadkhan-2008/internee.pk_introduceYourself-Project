<?php
/**
 * The header for our theme.
 *
 * @package Internee_Profile
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content">
    <?php esc_html_e( 'Skip to content', 'internee-profile' ); ?>
</a>

<header class="site-header">
    <div class="header-inner container">
        <div class="site-brand">
            <a class="brand-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>
            <?php if ( get_bloginfo( 'description' ) ) : ?>
                <span class="brand-tagline"><?php bloginfo( 'description' ); ?></span>
            <?php endif; ?>
        </div>

        <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
            <span class="menu-toggle-bar"></span>
            <span class="menu-toggle-bar"></span>
            <span class="menu-toggle-bar"></span>
            <span class="menu-toggle-text"><?php esc_html_e( 'Menu', 'internee-profile' ); ?></span>
        </button>

        <nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'internee-profile' ); ?>">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-list',
                    'container'      => false,
                ) );
                ?>
            <?php else : ?>
                <ul id="primary-menu" class="nav-list">
                    <li><a href="#welcome">Welcome</a></li>
                    <li><a href="#academic">Academic</a></li>
                    <li><a href="#tech">Tech</a></li>
                    <li><a href="#hobbies">Hobbies</a></li>
                    <li><a href="#gratitude">Thanks</a></li>
                    <li><a href="#goals">Goals</a></li>
                </ul>
            <?php endif; ?>
        </nav>
    </div>
</header>
