<?php
/**
 * The template for displaying all single posts
 *
 * @package Dilshad_Mirsha
 */

get_header();
?>

<main id="primary" class="site-main section-spacing" style="padding-top: calc(var(--space-16) + var(--space-4));">
    <div class="container" style="max-width: 800px;">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header style="margin-bottom: var(--space-6); text-align: center;">
                    <div class="section-badge">
                        <span class="badge-dot"></span>
                        <span><?php the_category( ', ' ); ?></span>
                    </div>
                    <h1 style="margin-bottom: var(--space-2);"><?php the_title(); ?></h1>
                    <div style="font-size: 0.875rem; color: var(--text-muted);">
                        Published on <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time> by <?php the_author(); ?>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div style="margin-bottom: var(--space-6); border-radius: var(--radius-lg); overflow: hidden;">
                        <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto;' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 1.0625rem; line-height: 1.8; color: var(--text-secondary);">
                    <?php
                    the_content();
                    wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dilshad-mirsha' ), 'after' => '</div>' ) );
                    ?>
                </div>

                <footer style="margin-top: var(--space-8); padding-top: var(--space-4); border-top: 1px solid var(--border-subtle); display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <?php the_tags( '<span style="font-size:0.875rem;color:var(--text-muted);">Tags: </span>', ', ', '' ); ?>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/#home' ) ); ?>" class="btn btn-outline" style="font-size:0.875rem;padding:8px 16px;">
                        &larr; Back to Home
                    </a>
                </footer>

                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
