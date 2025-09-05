<!-- Header Content -->
<header class="site-header">
    <div class="header-container">
        <a href="/index.php" class="logo" aria-label="SemrushSEO Home">
            <span class="logo-text">SemrushSEO</span>
        </a>
        
        <button class="menu-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="primary-navigation">
            <span class="menu-icon"></span>
            <span class="sr-only">Menu</span>
        </button>
        
        <nav class="site-navigation" id="primary-navigation" aria-label="Main Navigation">
            <ul class="nav-links">
                <li><a href="/index.php" class="nav-link">Home</a></li>
                <li><a href="/affiliate.php" class="nav-link">Affiliate</a></li>
                <li><a href="/reviews.php" class="nav-link">Reviews</a></li>
                <li><a href="/blog/blog-index.php" class="nav-link">Blog</a></li>
                <li><a href="/glossary.php" class="nav-link">Glossary</a></li>
                <li><a href="/about.php" class="nav-link">About</a></li>
                <li><a href="/contact.php" class="nav-link">Contact</a></li>
            </ul>
            
            <div class="header-socials">
                <a href="https://instagram.com" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://linkedin.com" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://youtube.com" aria-label="YouTube" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </nav>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay"></div>

<!-- JavaScript for mobile menu functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.site-navigation');
    const body = document.body;
    const overlay = document.querySelector('.mobile-menu-overlay');
    
    function toggleMenu() {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', !isExpanded);
        nav.classList.toggle('active');
        body.classList.toggle('menu-open');
        overlay.classList.toggle('active');
    }
    
    menuToggle.addEventListener('click', toggleMenu);
    
    // Close menu when clicking on a nav link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                toggleMenu();
            }
        });
    });
    
    // Close menu when clicking on overlay
    overlay.addEventListener('click', toggleMenu);
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            menuToggle.setAttribute('aria-expanded', 'false');
            nav.classList.remove('active');
            body.classList.remove('menu-open');
            overlay.classList.remove('active');
        }
    });
});
</script>