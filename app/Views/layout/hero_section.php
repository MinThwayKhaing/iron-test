<section class="hero-section">
  <!-- LEFT HERO TEXT -->
  <div class="hero-text-box">
    <img
      src="/assets/svg/LOGO-2.svg"
      alt="Iron Software Logo"
      class="hero-logo"
      width="150"
      height="auto"
      loading="eager"
    />

    <p class="hero-context">
      <?= $hero['eyebrow'] ?? 'Building on the success of IronPDF for .NET' ?>
    </p>

    <h1 class="hero-title">
      <?= $hero['title'] ?? 'Beta Software Program' ?>
      <span class="hero-highlight"><?= $hero['subtitle'] ?? 'IronPDF for C++' ?></span>
    </h1>

    <p class="hero-subtext"><?= $hero['note'] ?? 'Coming Soon' ?></p>
  </div>

  <!-- RIGHT IMAGE -->
  <div class="hero-image-box">
    <img
      src="/assets/svg/IMAGE.svg"
      alt="Hero Illustration - IronPDF for C++"
      class="hero-image"
      width="804"
  
      loading="lazy"
    />
  </div>

  <!-- EMAIL SIGNUP -->
  <div class="hero-email-box">
    <div class="email-content">

      <p class="email-title"><?= $cta['title'] ?? 'Be one of the first' ?></p>
      <p class="email-subtitle"><?= $cta['subtitle'] ?? 'Sign up NOW to get early access!' ?></p>

      <form class="email-form">
        <div class="email-input-wrapper">
          <input
            type="email"
            placeholder="<?= $cta['placeholder'] ?? 'Enter email address' ?>"
            class="email-input"
            required
            aria-label="Email address"
          />
          <button type="submit" class="email-submit" aria-label="Sign up for beta access">
            <?= $cta['button'] ?? 'Sign up now' ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </button>
        </div>
      </form>

      <div class="email-footer">
        <button class="coming-soon-btn"># Coming Soon</button>

        <p class="email-footer-text">
          <?= $cta['footnote'] ?? 'IronPDF Beta Program also coming soon for Python | Node.JS | Java' ?>
        </p>
      </div>

    </div>
  </div>
</section>
