<?php
/**
 * Template Name: Marketing Posts & Trends Hub
 * The template for displaying dedicated marketing articles and trend insights
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
                <span>Insights, Trends &amp; Playbooks</span>
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
            <!-- Post 1: SEO Algorithm Update -->
            <article class="post-card" data-category="seo" data-id="post-1">
                <div class="post-meta-row">
                    <span class="post-category-tag">SEO Trends 2026</span>
                    <span class="post-read-time">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        4 min read
                    </span>
                </div>
                <h3 class="post-title">Google's AI Search Overhaul: How We Rank in Conversational &amp; Zero-Click SERPs</h3>
                <p class="post-excerpt">
                    Search Generative Experience (SGE) has disrupted traditional keyword rankings. Discover how entity clustering and first-party E-E-A-T signals capture high-intent buyers before competitors.
                </p>
                <div class="post-metric-pill">
                    <span>🚀 +280% Organic Search Visibility</span>
                </div>
                <div class="post-footer-actions">
                    <button type="button" class="post-read-link" data-modal="modal-post-1">
                        <span>Read Insight</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                    <div class="post-interactive-buttons">
                        <button type="button" class="post-like-btn" data-likes="142" title="Like this article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            <span class="like-count">142</span>
                        </button>
                        <button type="button" class="post-share-btn" data-title="Google's AI Search Overhaul by Manu Mohan" title="Share article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Post 2: Meta Ads Strategy -->
            <article class="post-card" data-category="ads" data-id="post-2">
                <div class="post-meta-row">
                    <span class="post-category-tag">Meta Ads Mastery</span>
                    <span class="post-read-time">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        5 min read
                    </span>
                </div>
                <h3 class="post-title">Advantage+ &amp; Broad Audiences: Why Micro-Targeting is Killing Your ROAS</h3>
                <p class="post-excerpt">
                    Meta's machine learning algorithm now rewards creative diversity over rigid interest stacks. Here is the dynamic creative testing (DCT) matrix that cut our cost-per-acquisition by 34%.
                </p>
                <div class="post-metric-pill">
                    <span>🔥 4.8x Consistent ROAS Scaled</span>
                </div>
                <div class="post-footer-actions">
                    <button type="button" class="post-read-link" data-modal="modal-post-2">
                        <span>Read Insight</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                    <div class="post-interactive-buttons">
                        <button type="button" class="post-like-btn" data-likes="189" title="Like this article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            <span class="like-count">189</span>
                        </button>
                        <button type="button" class="post-share-btn" data-title="Meta Advantage+ Blueprint by Manu Mohan" title="Share article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Post 3: Short-Form Viral Video -->
            <article class="post-card" data-category="content" data-id="post-3">
                <div class="post-meta-row">
                    <span class="post-category-tag">Viral Video Strategy</span>
                    <span class="post-read-time">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        3 min read
                    </span>
                </div>
                <h3 class="post-title">The 3-Second Pattern Interrupt: Scripting Reels &amp; Shorts That Convert</h3>
                <p class="post-excerpt">
                    Attention is the new global currency. How to structure high-velocity visual hooks, conversational pacing, and psychological triggers that drive organic shares across Instagram and YouTube.
                </p>
                <div class="post-metric-pill">
                    <span>⚡ 2.4M+ Combined Viral Views</span>
                </div>
                <div class="post-footer-actions">
                    <button type="button" class="post-read-link" data-modal="modal-post-3">
                        <span>Read Insight</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                    <div class="post-interactive-buttons">
                        <button type="button" class="post-like-btn" data-likes="215" title="Like this article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            <span class="like-count">215</span>
                        </button>
                        <button type="button" class="post-share-btn" data-title="Short-Form Video Mastery by Manu Mohan" title="Share article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Post 4: Local SEO Domination -->
            <article class="post-card" data-category="seo" data-id="post-4">
                <div class="post-meta-row">
                    <span class="post-category-tag">Local SEO Playbook</span>
                    <span class="post-read-time">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        4 min read
                    </span>
                </div>
                <h3 class="post-title">Local SEO for Kerala &amp; Gulf Businesses: Dominating the Google 3-Pack Map</h3>
                <p class="post-excerpt">
                    A step-by-step audit for local business profiles, geotagged content velocity, and hyper-targeted citations that drive qualified walk-ins and phone calls without paid ads.
                </p>
                <div class="post-metric-pill">
                    <span>📍 #1 Map Ranking in 45 Days</span>
                </div>
                <div class="post-footer-actions">
                    <button type="button" class="post-read-link" data-modal="modal-post-4">
                        <span>Read Insight</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                    <div class="post-interactive-buttons">
                        <button type="button" class="post-like-btn" data-likes="167" title="Like this article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            <span class="like-count">167</span>
                        </button>
                        <button type="button" class="post-share-btn" data-title="Local SEO Domination by Manu Mohan" title="Share article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Post 5: Google PMax Optimization -->
            <article class="post-card" data-category="ads" data-id="post-5">
                <div class="post-meta-row">
                    <span class="post-category-tag">Google Ads PMax</span>
                    <span class="post-read-time">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        5 min read
                    </span>
                </div>
                <h3 class="post-title">Performance Max Secrets: Stopping Budget Waste on Low-Quality Display Clicks</h3>
                <p class="post-excerpt">
                    How to leverage script exclusions, brand search safety guardrails, and audience signals to force Google's AI into delivering bottom-of-funnel lead volume.
                </p>
                <div class="post-metric-pill">
                    <span>🎯 -40% Wasted Spend Eliminated</span>
                </div>
                <div class="post-footer-actions">
                    <button type="button" class="post-read-link" data-modal="modal-post-5">
                        <span>Read Insight</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                    <div class="post-interactive-buttons">
                        <button type="button" class="post-like-btn" data-likes="133" title="Like this article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            <span class="like-count">133</span>
                        </button>
                        <button type="button" class="post-share-btn" data-title="Google PMax Optimization by Manu Mohan" title="Share article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Post 6: Conversion Rate Optimization & AI -->
            <article class="post-card" data-category="conversion" data-id="post-6">
                <div class="post-meta-row">
                    <span class="post-category-tag">CRO &amp; AI Copywriting</span>
                    <span class="post-read-time">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        4 min read
                    </span>
                </div>
                <h3 class="post-title">High-Converting Landing Page Architecture: Turning Cold Ad Traffic into Leads</h3>
                <p class="post-excerpt">
                    The exact 5-section landing page anatomy that consistently achieves double-digit conversion rates across services, edutech, and B2B consultation funnels.
                </p>
                <div class="post-metric-pill">
                    <span>📈 +42% Conversion Rate Lift</span>
                </div>
                <div class="post-footer-actions">
                    <button type="button" class="post-read-link" data-modal="modal-post-6">
                        <span>Read Insight</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                    <div class="post-interactive-buttons">
                        <button type="button" class="post-like-btn" data-likes="198" title="Like this article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            <span class="like-count">198</span>
                        </button>
                        <button type="button" class="post-share-btn" data-title="High-Converting Landing Page Guide by Manu Mohan" title="Share article">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>

<!-- Interactive Reading Modal Reader Overlay -->
<div class="post-modal-overlay" id="post-reader-modal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="post-modal-container">
        <button type="button" class="post-modal-close-btn" id="modal-close-btn" aria-label="Close article reader">&times;</button>
        <div id="modal-content-target">
            <!-- Injected via JavaScript upon clicking Read Insight -->
        </div>
    </div>
</div>

<?php
get_footer();
