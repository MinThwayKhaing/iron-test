# QA Checklist - Full-Stack Web Developer Challenge Project

## 1. Typography
- [x] Figma font: **Gotham** → substituted with **Montserrat** due to licensing restrictions.
- [x] Heading sizes, weights, and line heights match design as closely as possible.
- [x] Body text font sizes, spacing, and line heights verified across sections.

## 2. Layout & Pixel Accuracy
- [x] Hero section aligns with Figma (text, image placement, spacing).
- [x] Early Access Program section layout matches design (cards, badges, headings, email form).
- [x] Product Overview section matches design.
- [x] Section 3 (Project Benefits) gradient background created approximately due to missing Figma value.
- [x] Spacing, margins, paddings reviewed with developer tools.

## 3. Responsiveness
- [x] Tested on multiple breakpoints:
  - Extra Small (≤480px)
  - Small (≤768px)
  - Medium (≤1200px)
  - Large / Desktop (>1200px)
- [x] All sections stack properly on smaller screens.
- [x] Email form and buttons resize correctly.
- [x] Text wrapping handled correctly on narrow screens.

## 4. Cross-Browser Behaviour
- [x] Chrome: ✅
- [x] Firefox: ✅
- [x] Safari: ✅
- [x] Edge: ✅
- [x] Layout, fonts, buttons, badges consistent in all browsers.
- [x] No console errors for JS or CSS.

## 5. Accessibility
- [x] ARIA labels for email form input and submit button.
- [x] Semantic HTML used for headings, sections, and buttons.
- [x] Color contrast sufficient for readability.
- [x] Keyboard navigation works for interactive elements.

## 6. Core Web Vitals / Performance
- [x] Lighthouse audit passes:
  - First Contentful Paint (FCP) optimized.
  - Largest Contentful Paint (LCP) acceptable.
  - Cumulative Layout Shift (CLS) minimized.
- [x] JavaScript minimized and used only where necessary.
- [x] Images optimized for lazy loading where possible.

## 7. SEO & Meta
- [x] Meta title and description present.
- [x] Heading hierarchy correct (H1, H2, H3).
- [x] Alt attributes provided for all images.
- [x] Page uses semantic HTML elements (header, main, section, footer).
## 8. Core Web Vitals & Lighthouse Audit
| Device  | Performance | Accessibility | Best Practices | SEO |
| ------- | ----------- | ------------- | -------------- | --- |
| Mobile  | 90          | 95            | 100            | 100 |
| Desktop | 79          | 95            | 100            | 100 |
Observations:
Mobile performance is excellent (90/100).
Desktop performance slightly lower (79/100) due to larger images and hero section assets.
Accessibility and SEO are perfect for both devices.
## Notes / Deviations from Figma
- Gotham font substituted with Montserrat due to license limitations.
- Background gradient for the **3rd section (Project Benefits)** created approximately since Figma did not provide a specific gradient value.
- All other design specifications strictly followed.
