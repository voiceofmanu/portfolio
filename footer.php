<?php
/**
 * The template for displaying the footer
 *
 * @package Manu_Mohan
 */
?>

<footer class="site-footer" id="colophon" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Overview & Bio -->
            <div class="footer-col">
                <a href="#about" class="brand-square-logo" style="margin-bottom: var(--space-3);" aria-label="Manu Mohan About">
                    <div class="logo-square-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/manu-logo.png' ); ?>" alt="Manu Mohan Logo" width="40" height="40" loading="lazy">
                    </div>
                    <div class="brand-info">
                        <span class="brand-name">Manu Mohan</span>
                        <span class="brand-title">Digital Marketer</span>
                    </div>
                </a>
                <p style="color:var(--accent-orange);font-weight:700;margin-top:var(--space-2);">
                    💡 Let's solve your brand puzzle and build a strategy that converts.
                </p>

                <!-- Social Icons -->
                <div class="footer-social-row">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/917736921257?text=Hello%20Manu%20Mohan" target="_blank" rel="noopener noreferrer" class="social-circle" aria-label="WhatsApp">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/voice_ofmanu/" target="_blank" rel="noopener noreferrer" class="social-circle" aria-label="Instagram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/manu-mohan-in" target="_blank" rel="noopener noreferrer" class="social-circle" aria-label="LinkedIn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                    <!-- Email -->
                    <a href="mailto:voiceofmanu2025@gmail.com" class="social-circle" aria-label="Email">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="footer-col">
                <h4>Navigation</h4>
                <ul class="footer-nav-list">
                    <li><a href="#home" class="footer-nav-link">Home</a></li>
                    <li><a href="#services" class="footer-nav-link">Services</a></li>
                    <li><a href="#about" class="footer-nav-link">About Manu</a></li>
                    <li><a href="#why-choose" class="footer-nav-link">Why Choose Me</a></li>
                    <li><a href="#portfolio" class="footer-nav-link">Selected Projects</a></li>
                    <li><a href="#posts" class="footer-nav-link">Marketing Posts &amp; Trends</a></li>
                    <li><a href="#certifications" class="footer-nav-link">Certifications</a></li>
                    <li><a href="#testimonials" class="footer-nav-link">Testimonials</a></li>
                    <li><a href="#faq" class="footer-nav-link">FAQ</a></li>
                    <li><a href="#contact" class="footer-nav-link">Contact</a></li>
                </ul>
            </div>

            <!-- Core Services -->
            <div class="footer-col">
                <h4>Core Services</h4>
                <ul class="footer-nav-list">
                    <li><a href="#services" class="footer-nav-link">Search Engine Optimization (SEO)</a></li>
                    <li><a href="#services" class="footer-nav-link">Social Media Management (SMM)</a></li>
                    <li><a href="#services" class="footer-nav-link">Content Marketing</a></li>
                    <li><a href="#services" class="footer-nav-link">SEO Copywriting</a></li>
                    <li><a href="#services" class="footer-nav-link">High-Impact Content Creation</a></li>
                    <li><a href="#services" class="footer-nav-link">Meta Ads &amp; Google Ads</a></li>
                </ul>
            </div>

            <!-- Contact & Availability -->
            <div class="footer-col">
                <h4>Direct Contact</h4>
                <ul class="footer-nav-list">
                    <li style="color:var(--text-secondary);margin-bottom:var(--space-1);">
                        <strong>Location:</strong> Kochi, Kerala, India <br>
                        <span style="font-size:0.8125rem;color:var(--text-muted);">(Available for local and remote projects worldwide)</span>
                    </li>
                    <li style="color:var(--text-secondary);margin-bottom:var(--space-1);">
                        <strong>Phone / WhatsApp:</strong> <br>
                        <a href="tel:7736921257" style="color:var(--accent-orange);font-weight:700;">+91 7736921257</a>
                    </li>
                    <li style="color:var(--text-secondary);margin-bottom:var(--space-1);">
                        <strong>Email:</strong> <br>
                        <a href="mailto:voiceofmanu2025@gmail.com" style="color:var(--accent-orange);font-weight:700;">voiceofmanu2025@gmail.com</a>
                    </li>
                    <li style="color:var(--text-secondary);margin-top:var(--space-2);">
                        <a href="https://wa.me/917736921257?text=Hello%20Manu%20Mohan" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="padding:8px 16px;font-size:0.8125rem;">
                            Chat on WhatsApp
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Prominent Final CTA: Connect Now Direct Phone Action -->
        <div class="footer-connect-bar">
            <div class="connect-bar-content">
                <div class="connect-bar-text">
                    <span class="connect-pulse-dot"></span>
                    <strong>Ready to scale your brand?</strong> Let's talk strategy directly.
                </div>
                <a href="tel:7736921257" class="btn btn-connect-now" id="btn-footer-connect-now" aria-label="Connect Now via direct phone call">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <span>Connect Now</span>
                </a>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> Manu Mohan. All Rights Reserved. Crafted with WordPress.</p>
            <a href="#masthead" id="footer-back-to-top" style="color:var(--text-secondary);display:inline-flex;align-items:center;gap:4px;" aria-label="Back to top">
                Back to top &uarr;
            </a>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons (FAB): WhatsApp & LinkedIn -->
<div class="fab-container" role="region" aria-label="<?php esc_attr_e( 'Quick Contact Actions', 'manu-mohan' ); ?>">
    <!-- WhatsApp FAB (Top) -->
    <a href="https://wa.me/917736921257?text=Hello%20Manu%20Mohan,%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" class="fab-btn fab-btn-whatsapp" aria-label="<?php esc_attr_e( 'Chat with Manu Mohan on WhatsApp', 'manu-mohan' ); ?>" title="WhatsApp">
        <span class="fab-pulse-ring" aria-hidden="true"></span>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2m.01 1.67c2.2 0 4.26.86 5.82 2.41a8.19 8.19 0 0 1 2.4 5.83c0 4.54-3.7 8.24-8.24 8.24-1.48 0-2.93-.39-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24M8.53 7.33c-.16 0-.35.04-.51.27-.2.27-.78.76-.78 1.86s.8 2.15.91 2.31c.12.16 1.54 2.42 3.78 3.32.72.29 1.28.46 1.72.6.72.23 1.38.2 1.9.12.58-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.43-.07-.12-.27-.2-.58-.35s-1.77-.87-2.04-.97c-.27-.1-.47-.15-.67.15s-.78.98-.95 1.18c-.18.2-.35.23-.66.08-.31-.15-1.33-.49-2.53-1.56-.93-.83-1.57-1.86-1.75-2.17-.18-.31-.02-.48.13-.63.14-.14.31-.35.47-.53.16-.18.2-.31.31-.51.1-.2.05-.38-.03-.53-.08-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51z"/>
        </svg>
        <span class="fab-tooltip">Chat on WhatsApp</span>
    </a>

    <!-- LinkedIn FAB (Second) -->
    <a href="https://www.linkedin.com/in/manu-mohan-in" target="_blank" rel="noopener noreferrer" class="fab-btn fab-btn-linkedin" aria-label="<?php esc_attr_e( 'Connect with Manu Mohan on LinkedIn', 'manu-mohan' ); ?>" title="LinkedIn">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76c-.97 0-1.75-.79-1.75-1.76s.78-1.75 1.75-1.75 1.75.78 1.75 1.75-.78 1.76-1.75 1.76m1.4 9.74v-8.37H5.06v8.37h2.8z"/>
        </svg>
        <span class="fab-tooltip">Connect on LinkedIn</span>
    </a>
</div>

<!-- Floating Back to Top Button at Bottom-Right Corner -->
<button type="button" id="fixed-back-to-top" class="fixed-back-to-top" aria-label="Back to top" title="Back to top">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="18 15 12 9 6 15"></polyline></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
