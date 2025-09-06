<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About SemrushSEO.review</title>
  <meta name="description" content="Learn more about SemrushSEO, our mission, and the team behind the insights." />
  <link rel="canonical" href="https://semrushseo.review/about.php" />
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
  <link rel="stylesheet" href="/assets/css/styles.css" />
  <style>
    .about-content {
      max-width: 900px;
      margin: 0 auto;
      padding: 40px 20px;
    }
    
    .about-section {
      margin-bottom: 5px;
    }
    
    .about-section:last-child {
      margin-bottom: 0;
    }
    
    .about-section h1 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      color: var(--text-dark);
    }
    
    .about-section h2 {
      font-size: 1.8rem;
      margin: 1.25rem 0 0.75rem;
      color: var(--text-dark);
    }
    
    .about-section p {
      font-size: 1.1rem;
      line-height: 1.7;
      margin-bottom: 0.75rem;
      color: var(--text-light);
    }
    
    .about-section ul {
      list-style-type: none;
      margin: 1.5rem 0;
      padding-left: 0;
    }

    /* Collapse extra space between sections */
    .about-section p:last-child,
    .about-section ul:last-child { margin-bottom: 0; }

    /* Ensure the next section doesn't add extra top gap */
    .about-section + .about-section { padding-top: 6px; }
    .about-section + .about-section h2 { margin-top: 0; }
    
    .about-section li {
      margin-bottom: 0.8rem;
      line-height: 1.6;
    }
    
    .about-section a {
      color: var(--brand-primary);
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .about-section a:hover {
      text-decoration: underline;
    }
    
    @media (max-width: 768px) {
      .about-section h1 {
        font-size: 2rem;
      }
      
      .about-section h2 {
        font-size: 1.5rem;
      }
      
      .about-section {
        margin-bottom: 5px;
      }
    }
  </style>
</head>
<body>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

  <main>
    <section class="hero blog-post-hero" style="background-image: url('/assets/images/blog/hero-images/hero-about.svg');">
      <div class="container">
        <div class="hero-content">
          <h1>About SemrushSEO.review</h1>
          <p class="subtitle">Helping you find the right tools to grow — without wasting time or money.</p>
        </div>
      </div>
    </section>

    <div class="about-content">
      <section class="about-section">
        <h1>⚙️ Why This Site Exists</h1>
        <p>
          SemrushSEO.review exists to make digital growth easier, faster, and smarter. We break down SEO and marketing tools like <strong>Semrush</strong>, <strong>Ahrefs</strong>, <strong>Ubersuggest</strong>, and others with real guides, in-depth comparisons, and no filler.
        </p>
        <p>We built this site because we were tired of AI-written filler and jargon-heavy "guides" that help no one. Our content is made to actually help you:</p>
        <ul>
          <li>✅ Choose the right tools for SEO, content, PPC, and digital growth</li>
          <li>✅ Learn how to rank faster, write better, and scale smarter</li>
          <li>✅ Skip the filler and get straight to strategies that work</li>
        </ul>
      </section>

      <section class="about-section">
        <h2>🧠 Built for Affiliates, Marketers, and Anyone Trying to Grow</h2>
        <p>Whether you're just launching a blog, scaling an affiliate site, or running SEO campaigns for clients — this site is built for you.</p>
        <p>Yes, we use affiliate links — but only for tools we actually believe in. There are no sponsored posts, fake reviews, or filler content. If a tool isn't up to par, we'll be honest about it. If it's worth trying, we'll show you how to get the most out of it.</p>
      </section>

      <section class="about-section">
        <h2>📬 Want to Collaborate?</h2>
        <p>If you're a tool creator, expert, or agency with insights to share, reach out. We're always open to publishing fresh strategies and results-driven ideas from people in the trenches.</p>
        <p><strong>Email us:</strong> <a href="mailto:seo@semrush.review">seo@semrush.review</a></p>
      </section>
    </div>
  </main>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
</body>
</html>
