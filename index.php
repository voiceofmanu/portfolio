<?php
/**
 * The main template file (fallback blog archive)
 *
 * @package Manu_Mohan
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="primary" class="site-main section-spacing" style="padding-top: calc(var(--space-16) + var(--space-4));">
    <div class="container">
        <header class="section-header">
            <div class="section-badge">
                <span class="badge-dot"></span>
                <span>Marketing Insights</span>
            </div>
            <h1>Digital Marketing Trends &amp; Posts</h1>
            <p>Actionable advice on SEO algorithm shifts, performance marketing, viral content, and high-ROI conversion strategies by Manu Mohan.</p>
        </header>

        <!-- Interactive Category Filter Tabs & Live Search -->
        <div class="posts-controls">
            <div class="posts-filter-tabs" role="tablist" aria-label="Filter posts by category">
                <button type="button" class="post-filter-btn active" data-category="all">All Insights</button>
                <button type="button" class="post-filter-btn" data-category="seo">SEO &amp; Algorithms</button>
                <button type="button" class="post-filter-btn" data-category="ads">Meta &amp; Google Ads</button>
                <button type="button" class="post-filter-btn" data-category="content">Viral Content &amp; Reels</button>
                <button type="button" class="post-filter-btn" data-category="conversion">AI &amp; Conversion</button>
            </div>

            <div class="posts-search-box">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <input type="text" id="post-search-input" placeholder="Search trends, e.g. 'SEO', 'PMax'..." aria-label="Search marketing posts">
            </div>
        </div>

        <!-- Posts Grid -->
        <div class="posts-grid" id="posts-container">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    $categories = get_the_category();
                    $category_slug = ! empty( $categories ) ? esc_attr( $categories[0]->slug ) : 'seo';
                    $category_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'SEO Trends';
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> data-category="<?php echo esc_attr( $category_slug ); ?>">
                        <div class="post-meta-row">
                            <span class="post-category-tag"><?php echo $category_name; ?></span>
                            <span class="post-read-time">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <?php echo get_the_date(); ?>
                            </span>
                        </div>
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 24 ); ?></p>
                        <div class="post-footer-actions">
                            <a href="<?php the_permalink(); ?>" class="post-read-link">
                                <span>Read Insight</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <div class="post-interactive-buttons">
                                <button type="button" class="post-like-btn" data-likes="120" title="Like this article">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                    <span class="like-count">120</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <!-- Featured Curated Industry Trends when no dynamic WordPress database posts are seeded yet -->
                <article class="post-card" data-category="seo" data-id="post-1">
                    <div class="post-meta-row">
                        <span class="post-category-tag">SEO Trends 2026</span>
                        <span class="post-read-time">4 min read</span>
                    </div>
                    <h3 class="post-title">Google's AI Search Overhaul: How We Rank in Conversational &amp; Zero-Click SERPs</h3>
                    <p class="post-excerpt">Search Generative Experience (SGE) has disrupted traditional keyword rankings. Discover how entity clustering and first-party E-E-A-T signals capture high-intent buyers.</p>
                    <div class="post-metric-pill"><span>🚀 +280% Organic Search Visibility</span></div>
                    <div class="post-footer-actions">
                        <button type="button" class="post-read-link" data-modal="modal-post-1">Read Insight &rarr;</button>
                    </div>
                </article>

                <article class="post-card" data-category="ads" data-id="post-2">
                    <div class="post-meta-row">
                        <span class="post-category-tag">Meta Ads Mastery</span>
                        <span class="post-read-time">5 min read</span>
                    </div>
                    <h3 class="post-title">Advantage+ &amp; Broad Audiences: Why Micro-Targeting is Killing Your ROAS</h3>
                    <p class="post-excerpt">Meta's machine learning algorithm now rewards creative diversity over rigid interest stacks. The exact DCT matrix that cut our CPA by 34%.</p>
                    <div class="post-metric-pill"><span>🔥 4.8x Consistent ROAS Scaled</span></div>
                    <div class="post-footer-actions">
                        <button type="button" class="post-read-link" data-modal="modal-post-2">Read Insight &rarr;</button>
                    </div>
                </article>

                <article class="post-card" data-category="content" data-id="post-3">
                    <div class="post-meta-row">
                        <span class="post-category-tag">Viral Video Strategy</span>
                        <span class="post-read-time">3 min read</span>
                    </div>
                    <h3 class="post-title">The 3-Second Pattern Interrupt: Scripting Reels &amp; Shorts That Convert</h3>
                    <p class="post-excerpt">How to structure high-velocity visual hooks, conversational pacing, and psychological triggers that drive organic shares across Instagram and YouTube.</p>
                    <div class="post-metric-pill"><span>⚡ 2.4M+ Combined Viral Views</span></div>
                    <div class="post-footer-actions">
                        <button type="button" class="post-read-link" data-modal="modal-post-3">Read Insight &rarr;</button>
                    </div>
                </article>
                <?php
            endif;
            ?>
        </div>
    </div>
</main>

<!-- Interactive Reading Modal Reader Overlay -->
<div class="post-modal-overlay" id="post-reader-modal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="post-modal-container">
        <button type="button" class="post-modal-close-btn" id="modal-close-btn" aria-label="Close article reader">&times;</button>
        <div id="modal-content-target"></div>
    </div>
</div>

<?php
get_footer();
