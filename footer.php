<!-- Footer Section -->
<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-content">
      <div class="footer-main">
        <!-- Brand/Trust -->
        <div class="footer-social">
          <h3 class="footer-heading">SemrushSEO.review</h3>
          <p class="newsletter-text">Independent reviews, guides, and strategies to grow your organic traffic.</p>
          <div class="social-icons">
            <a href="#" class="social-icon" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-icon" aria-label="YouTube" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-nav">
          <h3 class="footer-heading">Quick Links</h3>
          <ul class="footer-links">
            <li><a href="/index.php" class="footer-link">Home</a></li>
            <li><a href="/reviews.php" class="footer-link">Reviews</a></li>
            <li><a href="/blog/blog-index.php" class="footer-link">Blog</a></li>
            <li><a href="/affiliate.php" class="footer-link">Affiliate</a></li>
            <li><a href="/about.php" class="footer-link">About</a></li>
            <li><a href="/contact.php" class="footer-link">Contact</a></li>
          </ul>
        </div>

        <!-- Newsletter / Disclosure -->
        <div class="footer-newsletter">
          <h3 class="footer-heading">Stay Updated</h3>
          <p class="newsletter-text">Get the latest SEO tips and insights delivered to your inbox</p>
          <form class="newsletter-form">
            <input type="email" class="newsletter-input" placeholder="Your email address" aria-label="Your email address" required />
            <button type="submit" class="newsletter-button"><span>Subscribe</span> <i class="fas fa-paper-plane"></i></button>
          </form>
        </div>
      </div>
      <!-- Full-width disclosure -->
      <div class="footer-disclosure">
        <h3 class="footer-heading">Affiliate Disclosure</h3>
        <p>Some links on this site are affiliate links. If you click and make a purchase, we may earn a commission at no extra cost to you. We recommend products based on research and genuine experience.</p>
      </div>
    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
      <div class="footer-bottom-content">
        <div class="copyright">&copy; <?php echo date('Y'); ?> SemrushSEO. All rights reserved.</div>
        <div class="legal-links">
          <a href="/privacy-policy.php" class="legal-link">Privacy Policy</a>
          <span class="divider">|</span>
          <a href="/terms-of-service.php" class="legal-link">Terms of Service</a>
          <span class="divider">|</span>
          <a href="/disclaimer.php" class="legal-link">Disclaimer</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="back-to-top" aria-label="Back to top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- Mobile Sticky CTA -->
<div class="sticky-cta" role="region" aria-label="Start free Semrush trial">
  <div class="sticky-cta-inner">
    <div class="sticky-cta-text">Ready to level up your SEO?</div>
    <a href="/affiliate.php" class="sticky-cta-button">Start Free Trial</a>
  </div>
  </div>

<!-- Back to Top Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const backToTopButton = document.getElementById('back-to-top');
  
  // Show/hide button on scroll
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 300) {
      backToTopButton.classList.add('show');
    } else {
      backToTopButton.classList.remove('show');
    }
  });
  
  // Smooth scroll to top
  backToTopButton.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});
</script>