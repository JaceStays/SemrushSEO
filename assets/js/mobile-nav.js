document.addEventListener('DOMContentLoaded', function() {
  const jumpButton = document.getElementById('mobile-jump-button');
  const jumpMenu = document.getElementById('mobile-jump-menu');
  
  if (jumpButton && jumpMenu) {
    // Toggle menu visibility
    jumpButton.addEventListener('click', function() {
      const expanded = this.getAttribute('aria-expanded') === 'true' || false;
      this.setAttribute('aria-expanded', !expanded);
      jumpMenu.setAttribute('aria-hidden', expanded);
      
      // Close menu when clicking on a link
      const links = jumpMenu.querySelectorAll('a');
      links.forEach(link => {
        link.addEventListener('click', () => {
          jumpButton.setAttribute('aria-expanded', 'false');
          jumpMenu.setAttribute('aria-hidden', 'true');
        });
      });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
      if (!jumpButton.contains(event.target) && !jumpMenu.contains(event.target)) {
        jumpButton.setAttribute('aria-expanded', 'false');
        jumpMenu.setAttribute('aria-hidden', 'true');
      }
    });
    
    // Close menu on Escape key
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        jumpButton.setAttribute('aria-expanded', 'false');
        jumpMenu.setAttribute('aria-hidden', 'true');
        jumpButton.focus();
      }
    });
  }
});
