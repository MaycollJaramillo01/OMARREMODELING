<section class="shm-hero">
  <div class="shm-shell">
    <div class="shm-hero__grid">
      <div class="shm-hero__content" data-aos="fade-up">
        <span class="shm-hero__eyebrow"><?php echo htmlspecialchars($serviceHomeEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>

        <h1 class="shm-hero__title">
          <?php echo htmlspecialchars($serviceHomeTitle, ENT_QUOTES, 'UTF-8'); ?>
          <strong><?php echo htmlspecialchars($serviceHomeTitleStrong, ENT_QUOTES, 'UTF-8'); ?></strong>
        </h1>

        <?php if ($serviceHomeDesc !== ''): ?>
          <p class="shm-hero__desc"><?php echo htmlspecialchars($serviceHomeDesc, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>

        <div class="shm-hero__actions">
          <a class="shm-btn shm-btn--solid" href="<?php echo htmlspecialchars($serviceHomeMoreHref, ENT_QUOTES, 'UTF-8'); ?>">
            <?php echo htmlspecialchars($serviceHomeMoreButton, ENT_QUOTES, 'UTF-8'); ?>
          </a>

          <a class="shm-btn shm-btn--line" href="#service-directory">Browse Services</a>

          <?php if ($serviceHomePhoneMain !== '' && $serviceHomePhoneMainRef !== ''): ?>
            <a class="shm-btn shm-btn--ghost" href="<?php echo htmlspecialchars($serviceHomePhoneMainRef, ENT_QUOTES, 'UTF-8'); ?>">
              <?php echo htmlspecialchars($serviceHomePhoneMain, ENT_QUOTES, 'UTF-8'); ?>
              (<?php echo htmlspecialchars($serviceHomePhoneMainLabel, ENT_QUOTES, 'UTF-8'); ?>)
            </a>
          <?php endif; ?>

          <?php if ($serviceHomePhoneAlt !== '' && $serviceHomePhoneAltRef !== ''): ?>
            <a class="shm-btn shm-btn--ghost" href="<?php echo htmlspecialchars($serviceHomePhoneAltRef, ENT_QUOTES, 'UTF-8'); ?>">
              <?php echo htmlspecialchars($serviceHomePhoneAlt, ENT_QUOTES, 'UTF-8'); ?>
              (<?php echo htmlspecialchars($serviceHomePhoneAltLabel, ENT_QUOTES, 'UTF-8'); ?>)
            </a>
          <?php endif; ?>
        </div>

        <div class="shm-hero__stats">
          <article>
            <strong><?php echo (int) $serviceHomeServicesCount; ?>+</strong>
            <span>Service Lines</span>
          </article>
          <article>
            <strong><?php echo (int) $serviceHomeExperienceYears; ?>+</strong>
            <span>Years</span>
          </article>
          <article>
            <strong><?php echo htmlspecialchars($serviceHomeCoverage, ENT_QUOTES, 'UTF-8'); ?></strong>
            <span>Coverage</span>
          </article>
          <article>
            <strong><?php echo htmlspecialchars($serviceHomeLicense, ENT_QUOTES, 'UTF-8'); ?></strong>
            <span>Credentials</span>
          </article>
        </div>
      </div>

      <aside class="shm-hero__panel" data-aos="fade-left">
        <h2>Service Navigation</h2>
        <p>Everything is centralized here so visitors can search, filter, and request faster.</p>

        <ul class="shm-hero__panel-list" aria-label="Navigation features">
          <li>
            <i class="fa-solid fa-filter" aria-hidden="true"></i>
            <div>
              <strong>Smart Filters</strong>
              <span>Switch by service group instantly.</span>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
            <div>
              <strong>Live Search</strong>
              <span>Find services with keywords in real time.</span>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-link" aria-hidden="true"></i>
            <div>
              <strong>Direct Hash Links</strong>
              <span>Every service card is shareable by URL.</span>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
            <div>
              <strong>Schedule</strong>
              <span><?php echo htmlspecialchars($serviceHomeSchedule, ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
          </li>
        </ul>
      </aside>
    </div>
  </div>
</section>
