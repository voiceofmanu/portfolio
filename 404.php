<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Dilshad_Mirsha
 */

get_header();
?>

<main id="primary" class="site-main section-spacing" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center;">
    <div class="container" style="max-width: 600px;">
        <div class="section-badge">
            <span class="badge-dot"></span>
            <span>Error 404</span>
        </div>
        <h1 style="font-size: clamp(3rem, 6vw, 5rem); margin-bottom: var(--space-2); color: var(--accent-primary);">404</h1>
        <h2 style="margin-bottom: var(--space-3);">Page Not Found</h2>
        <p style="margin-bottom: var(--space-5);">The page or resource you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
            &larr; Return to Homepage
        </a>
    </div>
</main>

<?php
get_footer();
