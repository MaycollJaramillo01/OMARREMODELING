<?php
if (!isset($Company)) include_once __DIR__ . '/../../text.php';

$heroTitle = trim((string) ($HomeHeroCopy['headline'] ?? ($Company ?? 'BRD Services LLC')));
$heroDesc = trim((string) ($HomeHeroCopy['sub'] ?? 'Fence and deck services in Lawrenceville, Georgia and nearby areas.'));
$heroPrimary = trim((string) ($HomeHeroCopy['cta_primary'] ?? 'Call Now'));
$heroSecondary = 'View Services';
$heroPrimaryHref = trim((string) ($HomeHeroCopy['cta_primary_href'] ?? ($PhoneRef ?? 'contact.php')));
$heroSecondaryHref = 'services.php';
$heroPhone = trim((string) ($Phone ?? ''));
$heroCoverage = trim((string) ($Address ?? 'Lawrenceville, GA'));
$heroEstimate = trim((string) ($Estimates ?? 'Free Estimates'));

$heroSlides = [
  ['src' => 'assets/img/new/fence-installation-repair.jpeg', 'label' => 'Fence Installation', 'title' => 'Privacy fences built clean and straight'],
  ['src' => 'assets/img/new/deck-build-repair.jpeg', 'label' => 'Deck Build & Repair', 'title' => 'Deck work made for everyday outdoor living'],
  ['src' => 'assets/img/new/deck-staining.jpeg', 'label' => 'Deck Staining', 'title' => 'Protected wood with a finished look'],
  ['src' => 'assets/img/new/site-32.jpeg', 'label' => 'Wood Fence', 'title' => 'Residential fence work for local homes'],
  ['src' => 'assets/img/new/site-26.jpeg', 'label' => 'Finished Decks', 'title' => 'Repair, stain, and finish with care']
];
?>

<section class="fence-hero-slider" id="fenceHeroSlider">
  <div class="fence-hero-slider__stage" aria-hidden="true">
    <?php foreach ($heroSlides as $index => $slide): ?>
      <figure class="fence-hero-slider__slide<?php echo $index === 0 ? ' is-active' : ''; ?>" data-slide-index="<?php echo (int) $index; ?>">
        <img src="<?php echo htmlspecialchars($slide['src'], ENT_QUOTES, 'UTF-8'); ?>" alt="" loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>" fetchpriority="<?php echo $index === 0 ? 'high' : 'low'; ?>">
      </figure>
    <?php endforeach; ?>
  </div>

  <div class="container fence-hero-slider__inner">
    <div class="fence-hero-slider__copy">
      <span class="fence-hero-slider__eyebrow" id="fenceHeroLabel"><?php echo htmlspecialchars($heroSlides[0]['label'], ENT_QUOTES, 'UTF-8'); ?></span>
      <h1><?php echo htmlspecialchars($heroTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
      <p><?php echo htmlspecialchars($heroDesc, ENT_QUOTES, 'UTF-8'); ?></p>

      <div class="fence-hero-slider__caption" id="fenceHeroCaption">
        <?php echo htmlspecialchars($heroSlides[0]['title'], ENT_QUOTES, 'UTF-8'); ?>
      </div>

      <div class="fence-hero-slider__actions">
        <a href="<?php echo htmlspecialchars($heroPrimaryHref, ENT_QUOTES, 'UTF-8'); ?>" class="fence-btn fence-btn--primary">
          <?php echo htmlspecialchars($heroPrimary, ENT_QUOTES, 'UTF-8'); ?>
        </a>
        <a href="<?php echo htmlspecialchars($heroSecondaryHref, ENT_QUOTES, 'UTF-8'); ?>" class="fence-btn fence-btn--secondary">
          <?php echo htmlspecialchars($heroSecondary, ENT_QUOTES, 'UTF-8'); ?>
        </a>
      </div>
    </div>

    <aside class="fence-hero-slider__panel" aria-label="BRD Services highlights">
      <div>
        <span>Based in</span>
        <strong><?php echo htmlspecialchars($heroCoverage, ENT_QUOTES, 'UTF-8'); ?></strong>
      </div>
      <div>
        <span>Estimates</span>
        <strong><?php echo htmlspecialchars($heroEstimate, ENT_QUOTES, 'UTF-8'); ?></strong>
      </div>
      <?php if ($heroPhone !== ''): ?>
        <div>
          <span>Main line</span>
          <strong><?php echo htmlspecialchars($heroPhone, ENT_QUOTES, 'UTF-8'); ?></strong>
        </div>
      <?php endif; ?>
    </aside>

    <div class="fence-hero-slider__controls" aria-label="Hero slider controls">
      <?php foreach ($heroSlides as $index => $slide): ?>
        <button type="button" class="<?php echo $index === 0 ? 'is-active' : ''; ?>" data-hero-dot="<?php echo (int) $index; ?>" aria-label="Show <?php echo htmlspecialchars($slide['label'], ENT_QUOTES, 'UTF-8'); ?>"></button>
      <?php endforeach; ?>
    </div>
  </div>

  <script type="application/json" id="fenceHeroSlidesData"><?php echo json_encode($heroSlides, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
</section>

<style>
.fence-hero-slider {
  position: relative;
  min-height: clamp(660px, 84vh, 820px);
  overflow: hidden;
  background: #17120e;
  isolation: isolate;
}

.fence-hero-slider__stage,
.fence-hero-slider__slide {
  position: absolute;
  inset: 0;
}

.fence-hero-slider__slide {
  margin: 0;
  opacity: 0;
  transform: scale(1.08);
  clip-path: inset(0 0 0 100%);
  transition: opacity 900ms ease, transform 1400ms ease, clip-path 1100ms cubic-bezier(.2,.8,.2,1);
}

.fence-hero-slider__slide.is-active {
  opacity: 1;
  transform: scale(1);
  clip-path: inset(0);
  z-index: 1;
}

.fence-hero-slider__slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.fence-hero-slider::after {
  content: "";
  position: absolute;
  inset: 0;
  z-index: 2;
  background:
    linear-gradient(90deg, rgba(18, 13, 9, 0.9) 0%, rgba(18, 13, 9, 0.68) 45%, rgba(18, 13, 9, 0.2) 100%),
    linear-gradient(180deg, rgba(18, 13, 9, 0.18), rgba(18, 13, 9, 0.72));
  pointer-events: none;
}

.fence-hero-slider__inner {
  position: relative;
  z-index: 3;
  width: min(1240px, 92vw);
  min-height: inherit;
  padding: clamp(120px, 14vw, 190px) 0 clamp(42px, 7vw, 78px);
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(280px, 370px);
  gap: clamp(28px, 5vw, 72px);
  align-items: end;
}

.fence-hero-slider__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: var(--fence-gold, #d7a24a);
  text-transform: uppercase;
  letter-spacing: .18em;
  font-size: .72rem;
  font-weight: 900;
}

.fence-hero-slider__eyebrow::before {
  content: "";
  width: 44px;
  height: 2px;
  background: currentColor;
}

.fence-hero-slider h1 {
  max-width: 820px;
  margin: 14px 0 18px;
  color: #fff;
  font-size: clamp(3.5rem, 8.4vw, 7.4rem);
  line-height: .84;
}

.fence-hero-slider p {
  max-width: 720px;
  color: rgba(255,255,255,.86);
  font-size: clamp(1rem, 1.5vw, 1.18rem);
}

.fence-hero-slider__caption {
  margin-top: 18px;
  max-width: 560px;
  color: #fff;
  font-family: var(--font-display);
  font-size: clamp(1.3rem, 2.6vw, 2.2rem);
  line-height: 1;
  text-transform: uppercase;
}

.fence-hero-slider__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 24px;
}

.fence-hero-slider__panel {
  border: 1px solid rgba(255,255,255,.18);
  border-radius: 18px;
  background: rgba(255,253,248,.12);
  backdrop-filter: blur(14px);
  padding: 18px;
  display: grid;
  gap: 12px;
}

.fence-hero-slider__panel div {
  padding: 14px;
  border-radius: 14px;
  background: rgba(255,253,248,.1);
}

.fence-hero-slider__panel span {
  display: block;
  color: rgba(255,255,255,.64);
  text-transform: uppercase;
  letter-spacing: .14em;
  font-size: .68rem;
  font-weight: 900;
}

.fence-hero-slider__panel strong {
  display: block;
  margin-top: 4px;
  color: #fff;
  line-height: 1.18;
}

.fence-hero-slider__controls {
  grid-column: 1 / -1;
  display: flex;
  gap: 8px;
  align-items: center;
}

.fence-hero-slider__controls button {
  width: 46px;
  height: 4px;
  border: 0;
  border-radius: 999px;
  background: rgba(255,255,255,.28);
  cursor: pointer;
  transition: width .25s ease, background .25s ease;
}

.fence-hero-slider__controls button.is-active {
  width: 82px;
  background: var(--fence-gold, #d7a24a);
}

@media (max-width: 900px) {
  .fence-hero-slider__inner {
    grid-template-columns: 1fr;
  }

  .fence-hero-slider__panel {
    max-width: 520px;
  }
}

@media (max-width: 680px) {
  .fence-hero-slider {
    min-height: 760px;
  }

  .fence-hero-slider__inner {
    width: min(100% - 28px, 1240px);
  }

  .fence-hero-slider__actions,
  .fence-hero-slider .fence-btn {
    width: 100%;
  }
}
</style>

<script>
(function () {
  const root = document.getElementById('fenceHeroSlider');
  if (!root) return;

  const slides = Array.from(root.querySelectorAll('.fence-hero-slider__slide'));
  const dots = Array.from(root.querySelectorAll('[data-hero-dot]'));
  const label = root.querySelector('#fenceHeroLabel');
  const caption = root.querySelector('#fenceHeroCaption');
  const dataEl = root.querySelector('#fenceHeroSlidesData');
  let data = [];
  try { data = JSON.parse(dataEl ? dataEl.textContent : '[]'); } catch (e) { data = []; }
  let active = 0;
  let timer = null;

  function setSlide(index) {
    if (!slides[index] || index === active) return;
    slides[active].classList.remove('is-active');
    dots[active]?.classList.remove('is-active');
    active = index;
    slides[active].classList.add('is-active');
    dots[active]?.classList.add('is-active');
    if (data[active]) {
      if (label) label.textContent = data[active].label || '';
      if (caption) caption.textContent = data[active].title || '';
    }
  }

  function nextSlide() {
    setSlide((active + 1) % slides.length);
  }

  function start() {
    stop();
    if (slides.length > 1) timer = window.setInterval(nextSlide, 5200);
  }

  function stop() {
    if (timer) window.clearInterval(timer);
    timer = null;
  }

  dots.forEach((dot) => {
    dot.addEventListener('click', () => {
      const index = Number(dot.dataset.heroDot || 0);
      setSlide(index);
      start();
    });
  });

  root.addEventListener('mouseenter', stop);
  root.addEventListener('mouseleave', start);
  start();
})();
</script>
