# Redesign: Global Financial Intelligence Hero & Dashboard Task List

- [ ] Phase 1: Benchmark Data Architecture & Methodology Updates
  - [ ] Enhance `includes/benchmarks.php` with peer cohort distribution data (India RBI, US Federal Reserve SCF, UK ONS) and percentile ranking methodology.
  - [ ] Ensure null fallback for missing profiles ("Benchmark data unavailable for this profile.").

- [ ] Phase 2: Modular PHP Components (`components/`)
  - [ ] Build `components/hero-financial-assessment.php` (45% left content + SVG global network visual + 55% right 6-step panel).
  - [ ] Build `components/financial-score.php` (Score gauge + rating classification).
  - [ ] Build `components/financial-comparison.php` (Category position bars + "Where You Stand" distribution curve graph).
  - [ ] Build `components/people-like-you.php` (Peer cohort comparison cards: Earn More %, Earn Less %, Similar Level %).
  - [ ] Build `components/benchmark-message.php` (Educational disclosure & methodology).

- [ ] Phase 3: Interactive JS Engine & Distribution Chart (`assets/js/`)
  - [ ] Build `assets/js/financial-dashboard.js` & `assets/js/charts.js` for step progression, scoring, percentile calculation, and distribution curve pin animation.

- [ ] Phase 4: Header & Homepage Assembly (`components/header.php` & `index.php`)
  - [ ] Update header navigation (Finance, Loans, Credit Cards, Insurance, Investing, Calculators, Guides, About + "Check Your Position" CTA).
  - [ ] Reassemble `index.php` with 100% wide Global Hero, "Your Financial Position" Dashboard, 5 Premium Feature Cards, 4 Core Niche Hubs, and 3,000-word SEO content.

- [ ] Phase 5: QA & Git Push
  - [ ] Test mobile responsiveness, step validation, benchmark fallbacks, and calculations.
  - [ ] Commit and push changes to `https://github.com/vikashgpt4545/mark`.
