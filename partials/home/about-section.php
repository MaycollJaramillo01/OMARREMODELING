<?php
$about = (isset($HomeAboutCopy) && is_array($HomeAboutCopy)) ? $HomeAboutCopy : [];
$aboutEyebrow = trim((string) ($about['eyebrow'] ?? 'Local Fence & Deck Work'));
$aboutTitle = trim((string) ($about['title'] ?? 'Built for Quality,'));
$aboutTitleStrong = trim((string) ($about['title_strong'] ?? 'Finished with Care.'));
$aboutDesc = trim((string) ($about['description'] ?? 'BRD Services helps homeowners with fence, deck, and staining projects across Lawrenceville and nearby service areas.'));
$features = (isset($about['features']) && is_array($about['features'])) ? $about['features'] : [];
$aboutImg = 'assets/img/new/site-24.jpeg';
$ctaText = trim((string) ($about['cta'] ?? 'Learn About Us'));
$phoneText = trim((string) ($Phone ?? ''));
$phoneHref = trim((string) ($PhoneRef ?? 'contact.php'));
?>

<section class="brd-about" id="about">
  <div class="container brd-about__grid">
    <div class="brd-about__content" data-aos="fade-up">
      <span class="brd-kicker"><?php echo htmlspecialchars($aboutEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
      <h2>
        <?php echo htmlspecialchars($aboutTitle, ENT_QUOTES, 'UTF-8'); ?>
        <strong><?php echo htmlspecialchars($aboutTitleStrong, ENT_QUOTES, 'UTF-8'); ?></strong>
      </h2>
      <p><?php echo htmlspecialchars($aboutDesc, ENT_QUOTES, 'UTF-8'); ?></p>

      <div class="brd-about__actions">
        <a class="brd-btn brd-btn--gold" href="about.php"><?php echo htmlspecialchars($ctaText, ENT_QUOTES, 'UTF-8'); ?></a>
        <?php if ($phoneText !== ''): ?>
          <a class="brd-btn brd-btn--line" href="<?php echo htmlspecialchars($phoneHref, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($phoneText, ENT_QUOTES, 'UTF-8'); ?></a>
        <?php endif; ?>
      </div>
    </div>

    <div class="brd-about__media" data-aos="fade-up" data-aos-delay="100">
      <img src="<?php echo htmlspecialchars($aboutImg, ENT_QUOTES, 'UTF-8'); ?>" alt="BRD Services deck and fence work" loading="lazy">
      <div class="brd-about__note">
        <strong>Fence. Deck. Stain.</strong>
        <span>Focused exterior work for local homes.</span>
      </div>
    </div>

    <div class="brd-about__features" data-aos="fade-up" data-aos-delay="160">
      <?php foreach (array_slice($features, 0, 4) as $feature): ?>
        <?php
          $icon = trim((string) ($feature['icon'] ?? 'fa-hammer'));
          $title = trim((string) ($feature['title'] ?? ''));
          $text = trim((string) ($feature['text'] ?? ''));
          if ($title === '' && $text === '') continue;
        ?>
        <article>
          <i class="fa-solid <?php echo htmlspecialchars($icon, ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"></i>
          <h3><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
          <p><?php echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
