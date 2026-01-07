<section class="product-overview" role="region" aria-labelledby="product-title">
  <!-- LAYOUT 1: HEADING & FEATURES -->
  <div class="product-heading-section">
    <div class="product-inner">
      <h2 id="product-title" class="product-heading">
        IronPDF for C++
        <span class="coming-soon-badge">
          <span>coming soon</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M5 12h14M12 5l7 7-7 7"/>
          </svg>
        </span>
      </h2>

      <!-- FEATURES LIST -->
      <div class="product-features">
        <?php if (! empty($features) && is_array($features)): ?>
          <?php foreach ($features as $feature): ?>
            <div class="feature-item">
              <span class="feature-bullet">#</span>
              <p class="feature-text"><?= esc($feature) ?></p>
            </div>
          <?php endforeach ?>
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
        <?php endif ?>
      </div>
    </div>
  </div>

  <!-- LAYOUT 2: GRADIENT OVERLAY + DESCRIPTION -->
  <div class="product-content-section">
    <!-- Gradient overlay decoration -->
    <div class="product-gradient-overlay" aria-hidden="true"></div>

    <div class="product-inner">
      <div class="product-description">
        <p>
          The new <strong>IronPDF library for C++</strong> will enhance the C++ developer's tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.
        </p>
      </div>
    </div>
  </div>
</section>
