<section class="shm-hero">
  <div class="shm-shell">
    <div class="shm-hero__grid">
      <div class="shm-hero__content" data-aos="fade-up">
        <span class="shm-hero__eyebrow"><?php echo htmlspecialchars($serviceHomeEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>

        <h1 class="shm-hero__title">
          Fence, deck,
          <strong>stain & repair</strong>
        </h1>

        <p class="shm-hero__desc">
          BRD Services handles fence installation, fence repair, deck build, deck repair, and wood staining for Lawrenceville, GA and nearby service areas.
        </p>

        <div class="shm-hero__actions">
          <a class="shm-btn shm-btn--solid" href="<?php echo htmlspecialchars($serviceHomeMoreHref, ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($serviceHomeMoreButton, ENT_QUOTES, 'UTF-8'); ?>
          </a>

          <a class="shm-btn shm-btn--line" href="#service-directory">View Services</a>

          <?php if ($serviceHomePhoneMain !== '' && $serviceHomePhoneMainRef !== ''): ?>
            <a class="shm-btn shm-btn--ghost" href="<?php echo htmlspecialchars($serviceHomePhoneMainRef, ENT_QUOTES, 'UTF-8'); ?>">
              <?php echo htmlspecialchars($serviceHomePhoneMain, ENT_QUOTES, 'UTF-8'); ?>
            </a>
          <?php endif; ?>
        </div>

        <div class="shm-hero__stats">
          <article>
            <strong>4</strong>
            <span>Core services</span>
          </article>
          <article>
            <strong>2+</strong>
            <span>Years serving GA</span>
          </article>
          <article>
            <strong>Free</strong>
            <span>Project estimates</span>
          </article>
        </div>
      </div>

      <aside class="shm-hero__visual" data-aos="fade-left" aria-label="BRD Services deck and fence work">
        <img src="assets/img/new/deck-build-repair.jpeg" alt="BRD Services deck build and repair work" loading="eager">
        <div class="shm-hero__visual-card">
          <span>Residential exterior work</span>
          <strong>Fence + Deck crews for local projects</strong>
        </div>
        <div class="shm-hero__chips" aria-label="Available services">
          <span>Fence Install</span>
          <span>Deck Repair</span>
          <span>Wood Staining</span>
        </div>
      </aside>
    </div>
  </div>
</section>
