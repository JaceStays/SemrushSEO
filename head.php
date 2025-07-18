<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($pageTitle ?? 'SemrushSEO Blog'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription ?? 'Expert SEO guides, strategies, and reviews for 2025 and beyond.'); ?>" />
  <?php if (!empty($canonicalUrl)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>" />
  <?php endif; ?>
  <!-- Open Graph Meta -->
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle ?? 'SemrushSEO Blog'); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription ?? 'Expert SEO guides, strategies, and reviews for 2025 and beyond.'); ?>" />
  <meta property="og:type" content="article" />
  <?php if (!empty($canonicalUrl)): ?>
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>" />
  <?php endif; ?>
  <meta property="og:site_name" content="SemrushSEO" />
  <!-- Twitter Card Meta -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle ?? 'SemrushSEO Blog'); ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription ?? 'Expert SEO guides, strategies, and reviews for 2025 and beyond.'); ?>" />
  <!-- Global styles and fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <?php if (!empty($extraCss)) echo $extraCss; ?>
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-KfwXqv7tknn5L8j+8cd2uqJZn0h2c5AoHh8pftPSv1KpM9n4YwA6Fk7lq4YfR/kElXOd7eYjvOE/cJwOPq7RfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Add any other global scripts or meta tags here -->
</head>
