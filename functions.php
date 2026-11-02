<?php
/**
 * Manu Mohan Theme Functions & Definitions
 *
 * @package Manu_Mohan
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'manu_mohan_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function manu_mohan_setup() {
        load_theme_textdomain( 'manu-mohan', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary Navigation Menu', 'manu-mohan' ),
                'footer'  => esc_html__( 'Footer Navigation Menu', 'manu-mohan' ),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        add_theme_support(
            'custom-logo',
            array(
                'height'      => 80,
                'width'       => 80,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        add_theme_support( 'responsive-embeds' );
    }
endif;
add_action( 'after_setup_theme', 'manu_mohan_setup' );

/**
 * Enqueue scripts and styles.
 */
function manu_mohan_scripts() {
    // Google Fonts: Outfit (Executive Display) & Plus Jakarta Sans (Ultra-Readable Body) & JetBrains Mono
    wp_enqueue_style(
        'manu-mohan-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=JetBrains+Mono:wght@500;700&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'manu-mohan-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '2.1.0'
    );

    // Root Style fallback
    wp_enqueue_style(
        'manu-mohan-root-style',
        get_stylesheet_uri(),
        array( 'manu-mohan-main-style' ),
        '2.0.0'
    );

    // Main JavaScript
    wp_enqueue_script(
        'manu-mohan-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '2.1.0',
        true
    );

    wp_localize_script(
        'manu-mohan-main-js',
        'manuMohanData',
        array(
            'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
            'themeUri'  => get_template_directory_uri(),
            'whatsapp'  => '+917736921257',
            'email'     => 'voiceofmanu2025@gmail.com',
        )
    );
}
add_action( 'wp_enqueue_scripts', 'manu_mohan_scripts' );

/**
 * Register Widget Areas.
 */
function manu_mohan_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'manu-mohan' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here to appear in standard sidebar.', 'manu-mohan' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'manu_mohan_widgets_init' );

/**
 * Customizer options for Manu Mohan portfolio
 */
function manu_mohan_customize_register( $wp_customize ) {
    $wp_customize->add_section(
        'manu_mohan_contact_section',
        array(
            'title'       => __( 'Portfolio Contact Info', 'manu-mohan' ),
            'priority'    => 30,
            'description' => __( 'Customize Manu Mohan contact and social channels.', 'manu-mohan' ),
        )
    );

    // Phone / WhatsApp Setting
    $wp_customize->add_setting( 'manu_phone', array( 'default' => '7736921257', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'manu_phone', array( 'label' => __( 'Phone Number / WhatsApp', 'manu-mohan' ), 'section' => 'manu_mohan_contact_section', 'type' => 'text' ) );

    // Email Setting
    $wp_customize->add_setting( 'manu_email', array( 'default' => 'voiceofmanu2025@gmail.com', 'sanitize_callback' => 'sanitize_email' ) );
    $wp_customize->add_control( 'manu_email', array( 'label' => __( 'Email Address', 'manu-mohan' ), 'section' => 'manu_mohan_contact_section', 'type' => 'text' ) );

    // Instagram Setting
    $wp_customize->add_setting( 'manu_instagram', array( 'default' => 'https://www.instagram.com/voice_ofmanu/', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( 'manu_instagram', array( 'label' => __( 'Instagram URL', 'manu-mohan' ), 'section' => 'manu_mohan_contact_section', 'type' => 'url' ) );

    // LinkedIn Setting
    $wp_customize->add_setting( 'manu_linkedin', array( 'default' => 'https://www.linkedin.com/in/manu-mohan-in', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( 'manu_linkedin', array( 'label' => __( 'LinkedIn URL', 'manu-mohan' ), 'section' => 'manu_mohan_contact_section', 'type' => 'url' ) );
}
add_action( 'customize_register', 'manu_mohan_customize_register' );
