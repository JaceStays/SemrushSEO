<!-- Footer Section -->
<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-main">
      <!-- Social Icons -->
      <div class="footer-social">
        <h3 class="footer-heading">Connect With Us</h3>
        <div class="social-icons">
          <a href="#" class="social-icon" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="social-icon" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="#" class="social-icon" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>

      <!-- Navigation Links -->
      <div class="footer-nav">
        <h3 class="footer-heading">Quick Links</h3>
        <ul class="footer-links">
          <li><a href="/index.php" class="footer-link">Home</a></li>
          <li><a href="/affiliate.php" class="footer-link">Affiliate</a></li>
          <li><a href="/reviews.php" class="footer-link">Reviews</a></li>
          <li><a href="/blog/blog-index.php" class="footer-link">Blog</a></li>
          <li><a href="/glossary.php" class="footer-link">Glossary</a></li>
          <li><a href="/about.php" class="footer-link">About</a></li>
          <li><a href="/contact.php" class="footer-link">Contact</a></li>
        </ul>
      </div>

      <!-- Newsletter Subscription -->
      <div class="footer-newsletter">
        <h3 class="footer-heading">Stay Updated</h3>
        <p class="newsletter-text">Get the latest SEO tips and insights delivered to your inbox</p>
        <form class="newsletter-form">
          <div class="form-group">
            <input 
              type="email" 
              class="newsletter-input" 
              placeholder="Your email address" 
              aria-label="Your email address"
              required
            />
            <button type="submit" class="newsletter-button">
              <span>Subscribe</span>
              <i class="fas fa-paper-plane"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Copyright and Legal -->
    <div class="footer-bottom">
      <div class="footer-branding">
        <span class="footer-logo">SemrushSEO</span>
        <p class="footer-tagline">Your trusted resource for SEO & digital marketing insights.</p>
      </div>
      <div class="footer-legal">
        <p class="copyright">© 2025 SemrushSEO.review. All rights reserved.</p>
        <div class="legal-links">
          <a href="/privacy-policy.php" class="legal-link">Privacy Policy</a>
          <span class="divider">|</span>
          <a href="/terms-of-service.php" class="legal-link">Terms of Service</a>
          <span class="divider">|</span>
          <a href="/affiliate-disclosure.php" class="legal-link">Affiliate Disclosure</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="back-to-top" aria-label="Back to top">
  <i class="fas fa-arrow-up"></i>
</button>

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