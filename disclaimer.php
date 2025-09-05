<?php
header('Content-Type: text/html; charset=UTF-8');
$pageTitle = 'Disclaimer';
$pageDescription = 'Important disclaimers about the content and affiliate links on this website.';
$canonicalUrl = null;
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/head.php'; ?>
<body>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>
<main>
  <section class="deep-dive-content" style="padding-top:60px;">
    <div class="container">
      <h2>Disclaimer</h2>
      <p>This website publishes independent reviews and educational content. While we strive for accuracy, information may change over time.</p>
      <h3>Affiliate Disclosure</h3>
      <p>Some links on this site are affiliate links. If you click and make a purchase, we may earn a commission at no extra cost to you. We only recommend products we believe provide value.</p>
      <h3>No Professional Advice</h3>
      <p>Content is for informational purposes only and should not be taken as professional advice.</p>
    </div>
  </section>
</main>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
</body>
</html>
