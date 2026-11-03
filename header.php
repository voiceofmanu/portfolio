<?php
/**
 * The header template for Manu Mohan theme
 *
 * @package Manu_Mohan
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#primary" style="position:absolute;top:-999px;left:0;background:var(--accent-orange);color:#fff;padding:8px;z-index:9999;">
    <?php esc_html_e( 'Skip to content', 'manu-mohan' ); ?>
</a>

<header class="site-header" id="masthead" role="banner">
    <div class="container header-container">
        <!-- Logo: Small square at top-left with hover animation, clickable -> leads to About Page -->
        <a href="<?php echo is_front_page() ? '#about' : esc_url( home_url( '/#about' ) ); ?>" class="brand-square-logo" aria-label="Manu Mohan - About Page">
            <div class="logo-square-box">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manu-logo.png' ); ?>" alt="Manu Mohan Logo" width="46" height="46" loading="eager">
            </div>
            <div class="brand-info">
                <span class="brand-name">Manu Mohan</span>
                <span class="brand-title">Digital Marketer</span>
            </div>
        </a>

        <!-- Desktop Navigation: Home, About, Services, Portfolio, Certifications, Contact -->
        <nav class="main-nav" id="site-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'manu-mohan' ); ?>">
            <ul class="nav-list">
                <li><a href="<?php echo is_front_page() ? '#home' : esc_url( home_url( '/#home' ) ); ?>" class="nav-link">Home</a></li>
                <li><a href="<?php echo is_front_page() ? '#about' : esc_url( home_url( '/#about' ) ); ?>" class="nav-link">About</a></li>
                <li><a href="<?php echo is_front_page() ? '#services' : esc_url( home_url( '/#services' ) ); ?>" class="nav-link">Services</a></li>
                <li><a href="<?php echo is_front_page() ? '#portfolio' : esc_url( home_url( '/#portfolio' ) ); ?>" class="nav-link">Portfolio</a></li>
                <li><a href="<?php echo is_front_page() ? '#certifications' : esc_url( home_url( '/#certifications' ) ); ?>" class="nav-link">Certifications</a></li>
                <li>
                    <a href="<?php echo is_front_page() ? '#contact' : esc_url( home_url( '/#contact' ) ); ?>" class="nav-link">
                        Contact<span class="nav-badge-hire">HIRE</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Header Actions: Theme Switcher & Let's Talk CTA -->
        <div class="header-actions">
            <!-- Theme Toggle Button -->
            <button type="button" class="theme-toggle-btn" aria-label="<?php esc_attr_e( 'Toggle dark and light theme', 'manu-mohan' ); ?>" id="theme-toggle">
                <svg class="sun-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                <svg class="moon-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>

            <!-- WhatsApp Quick CTA -->
            <a href="https://wa.me/917736921257?text=Hello%20Manu%20Mohan,%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="padding: 10px 22px; font-size: 0.875rem;">
                Let's Talk
            </a>

            <!-- Mobile Hamburger Toggle -->
            <button type="button" class="mobile-nav-toggle" aria-controls="mobile-menu-drawer" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open Navigation Menu', 'manu-mohan' ); ?>">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div class="mobile-drawer" id="mobile-menu-drawer">
        <a href="<?php echo is_front_page() ? '#home' : esc_url( home_url( '/#home' ) ); ?>" class="nav-link">Home</a>
        <a href="<?php echo is_front_page() ? '#about' : esc_url( home_url( '/#about' ) ); ?>" class="nav-link">About</a>
        <a href="<?php echo is_front_page() ? '#services' : esc_url( home_url( '/#services' ) ); ?>" class="nav-link">Services</a>
        <a href="<?php echo is_front_page() ? '#portfolio' : esc_url( home_url( '/#portfolio' ) ); ?>" class="nav-link">Portfolio</a>
        <a href="<?php echo is_front_page() ? '#certifications' : esc_url( home_url( '/#certifications' ) ); ?>" class="nav-link">Certifications</a>
        <a href="<?php echo is_front_page() ? '#contact' : esc_url( home_url( '/#contact' ) ); ?>" class="nav-link">Contact</a>
        <a href="https://wa.me/917736921257?text=Hello%20Manu%20Mohan,%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="margin-top: var(--space-2); width: 100%; justify-content: center; padding: 12px 24px;">
            Let's Talk
        </a>
    </div>
</header>
