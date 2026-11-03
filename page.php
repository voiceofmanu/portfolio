<?php
/**
 * The template for displaying all pages
 *
 * @package Dilshad_Mirsha
 */

get_header();
?>

<main id="primary" class="site-main section-spacing" style="padding-top: calc(var(--space-16) + var(--space-4));">
    <div class="container" style="max-width: 900px;">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header style="margin-bottom: var(--space-6); text-align: center;">
                    <h1 style="margin-bottom: var(--space-2);"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content" style="font-size: 1.0625rem; line-height: 1.8; color: var(--text-secondary);">
                    <?php
                    the_content();
                    wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dilshad-mirsha' ), 'after' => '</div>' ) );
                    ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
