

<section class="product-overview" role="region" aria-labelledby="product-title">

  <!-- =========================
       LAYOUT 1: TITLE + FEATURES
  ========================== -->
  <div class="product-heading-section">
    <div class="product-inner">

      <h2 id="product-title" class="product-heading">
        <span class="product-title-text"><?= isset($product['title']) ? esc($product['title']) : 'IronPDF for C++' ?></span>

        <img
          src="/assets/svg/comingsoon.svg"
          alt="Coming Soon"
          class="coming-soon-badge-svg"
        />
      </h2>

      <!-- FEATURES -->
      <div class="product-features">
        <?php if (!empty($features) && is_array($features)): ?>
          <?php foreach ($features as $feature): ?>
            <div class="feature-item">
              <span class="feature-bullet">#</span>
              <p class="feature-text"><?= esc($feature) ?></p>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="feature-item">
            <span class="feature-bullet">#</span>
            <p class="feature-text">Generate PDFs from HTML in C++</p>
          </div>
          <div class="feature-item">
            <span class="feature-bullet">#</span>
            <p class="feature-text">Combine, split, and modify PDFs quickly in C++</p>
          </div>
          <div class="feature-item">
            <span class="feature-bullet">#</span>
            <p class="feature-text">Extract text and images from PDFs using C++</p>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
  <!-- 🔥 SHARED GRADIENT OVERLAY -->
  <div class="product-gradient-overlay" aria-hidden="true"></div>
  <!-- =========================
       LAYOUT 2: DESCRIPTION
  ========================== -->
  <div class="product-content-section">


    <div class="product-inner">
      <div class="product-description">
        <p>
          <?= isset($product['description']['intro']) ? esc($product['description']['intro']) : 'The new' ?> 
          <strong><?= isset($product['description']['highlight']) ? esc($product['description']['highlight']) : 'IronPDF library for C++' ?></strong>
          <?= isset($product['description']['body']) ? esc($product['description']['body']) : 'will enhance the C++ developer\'s tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.' ?>
        </p>
      </div>
    </div>
  </div>

</section>