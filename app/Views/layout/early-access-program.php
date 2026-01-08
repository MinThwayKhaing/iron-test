<?php
/**
 * Early Access Program Section
 * Reads content from context.json via $context variable passed from controller
 */

$early_access = isset($context['early_access']) ? $context['early_access'] : [
    'title' => 'Early Access to C++ PDF Library',
    'text' => 'Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the C++ PDF library before its official launch. Your continual feedback after we release the library will be immensely helpful as we release new features and improve on existing features.'
];

$cta = isset($context['cta']) ? $context['cta'] : [
    'placeholder' => 'Enter email address',
    'button' => 'Sign up now'
];

// Optional: badges (languages) from JSON
$badges = isset($context['early_access']['badges']) ? $context['early_access']['badges'] : [
    [
        'status' => 'Released',
        'image' => '/assets/svg/java-iron-pdf.svg',
        'alt' => 'Java IronPDF'
    ],
    [
        'status' => 'Coming Soon',
        'image' => '/assets/svg/python-iron-pdf.svg',
        'alt' => 'Python IronPDF'
    ],
    [
        'status' => 'Coming Soon',
        'image' => '/assets/svg/nodejs-iron-pdf.svg',
        'alt' => 'NodeJS IronPDF'
    ]
];
?>

<section class="early-access-program" role="region" aria-labelledby="early-access-title">

  <!-- =========================
       LAYOUT 1: HEADER + TEXT + CARDS
  ========================== -->
  <div class="early-access-heading-section">
    <div class="early-access-textbox">

      <!-- HEADING -->
      <div class="early-access-heading-wrapper">
        <h2 id="early-access-title">
          <?= esc($early_access['title']) ?>
        </h2>
      </div>

      <!-- DESCRIPTION -->
      <div class="early-access-text">
        <p>
          <?= esc($early_access['text']) ?>
        </p>
      </div>

      <!-- CARDS / BADGES -->
      <div class="early-access-cards">
        <?php foreach ($badges as $badge): ?>
          <div class="early-access-card <?= strtolower(str_replace(' ', '-', $badge['status'])) ?>">
            <div class="card-badge <?= strtolower(str_replace(' ', '-', $badge['status'])) ?>">
              <span># <?= esc($badge['status']) ?></span>
            </div>
            <div>
              <img
                src="<?= esc($badge['image']) ?>"
                alt="<?= esc($badge['alt']) ?>"
                class="badge-icon"
                loading="lazy"
              />
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>

  <!-- 🔥 SHARED GRADIENT OVERLAY -->
  <div class="early-access-gradient-overlay" aria-hidden="true"></div>

  <!-- =========================
       LAYOUT 2: FOOTER / SIGNUP
  ========================== -->
  <div class="early-access-footer-section">
    <div class="early-access-footer-inner">

      <!-- Footer Title -->
      <p class="early-access-footer-text">
        Sign up to our <span>Beta Program</span>
      </p>

      <!-- EMAIL SIGNUP FORM -->
      <div class="early-access-email-box">
        <div class="early-access-email-content">

          <form class="early-access-email-form" method="POST" action="#">
            <div class="early-access-email-input-wrapper">
              <input
                type="email"
                placeholder="<?= esc($cta['placeholder']) ?>"
                class="early-access-email-input"
                required
                aria-label="Email address"
              />
              <button
                type="submit"
                class="early-access-email-submit"
                aria-label="<?= esc($cta['button']) ?>"
              >
                <?= esc($cta['button']) ?>
                <svg
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="white"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true"
                >
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>

</section>
