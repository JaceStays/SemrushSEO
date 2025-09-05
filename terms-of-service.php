<?php
header('Content-Type: text/html; charset=UTF-8');
$pageTitle = 'Terms of Service';
$pageDescription = 'Read the terms and conditions for using this website.';
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
      <h2>Terms of Service</h2>
      <p>By accessing or using this website, you agree to these terms.</p>
      <h3>Use of Content</h3>
      <p>Content is provided for informational purposes only. You may not reproduce or redistribute it without permission.</p>
      <h3>No Warranties</h3>
      <p>The site is provided "as is" without warranties of any kind. We do not guarantee results.</p>
      <h3>Limitation of Liability</h3>
      <p>We are not liable for any damages arising from the use of this website.</p>
    </div>
  </section>
</main>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
</body>
</html>
