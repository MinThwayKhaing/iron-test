<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- SEO Meta Tags -->
  <title>IronPDF for C++ - Beta Software Program</title>
  <meta name="description" content="Join the IronPDF for C++ beta program and be the first to access powerful PDF generation and conversion tools for C++ developers." />
  <meta name="keywords" content="IronPDF, C++, PDF generation, beta program, PDF conversion" />
  <meta name="author" content="Iron Software" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  
  <!-- Open Graph / Social Media Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="IronPDF for C++ - Beta Software Program" />
  <meta property="og:description" content="Get early access to IronPDF for C++ - powerful PDF tools for modern C++ development." />
  <meta property="og:url" content="<?= base_url() ?>" />
  
  <!-- Twitter Card Tags -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="IronPDF for C++ - Beta Software Program" />
  <meta name="twitter:description" content="Get early access to IronPDF for C++ - powerful PDF tools for modern C++ development." />

  <!-- Performance Optimization -->
  <meta name="theme-color" content="#8E608E" />
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net" />

  <!-- Bootstrap CSS (with defer for non-critical) -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    crossorigin="anonymous"
    defer
  />
<!-- Google Font (Montserrat as Gotham substitute) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&display=swap"
    rel="stylesheet"
  />

  <!-- Critical CSS (inline or early load) -->
   <link rel="stylesheet" href="/assets/css/fonts.css" />

  <link rel="stylesheet" href="/assets/css/variables.css" />
  <link rel="stylesheet" href="/assets/css/base.css" />
  <link rel="stylesheet" href="/assets/css/layout.css" />
  <link rel="stylesheet" href="/assets/css/typography.css" />
  
  <!-- Non-critical CSS -->
  <link rel="stylesheet" href="/assets/css/components.css" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="/assets/css/hero_section.css" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="/assets/css/product_overview.css" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="/assets/css/product-benefits.css" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="/assets/css/responsive.css" media="print" onload="this.media='all'" />

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/svg/LOGO-2.svg" />
</head>

<body>

  <?= $this->renderSection('content') ?>

  <!-- Bootstrap JS (deferred for non-blocking) -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"
    defer
  ></script>

  <!-- Performance: Lazy load images -->
  <script>
    if ('IntersectionObserver' in window) {
      const images = document.querySelectorAll('img[data-src]');
      const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
            imageObserver.unobserve(img);
          }
        });
      });
      images.forEach(img => imageObserver.observe(img));
    }
  </script>
</body>
</html>
