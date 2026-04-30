<?php
$defaultHero = $PageHeroCopy['default'] ?? ['title' => $page_name ?? '', 'desc' => '', 'bg' => 'assets/img/new/site-32.jpeg'];
$heroTitle = $pageHeroTitle ?? ($page_name ?? ($defaultHero['title'] ?? ''));
$heroKey = 'default';
if (stripos($heroTitle, 'Project') !== false) $heroKey = 'projects';
elseif (stripos($heroTitle, 'About') !== false) $heroKey = 'about';
elseif (stripos($heroTitle, 'Contact') !== false) $heroKey = 'contact';
elseif (stripos($heroTitle, 'Review') !== false || stripos($heroTitle, 'Testimonial') !== false) $heroKey = 'reviews';
elseif (stripos($heroTitle, 'Other') !== false) $heroKey = 'other';
$heroData = $PageHeroCopy[$heroKey] ?? $defaultHero;
$heroTitle = $pageHeroTitle ?? ($heroData['title'] ?? $heroTitle);
$heroDesc = $pageHeroSubtitle ?? ($heroData['desc'] ?? '');
$heroBg = $pageHeroImage ?? ($heroData['bg'] ?? 'assets/img/new/site-32.jpeg');
?>

<section class="brd-page-hero" style="--hero-bg: url('<?php echo htmlspecialchars($heroBg, ENT_QUOTES, 'UTF-8'); ?>');">
  <div class="container">
    <span class="brd-kicker"><?php echo htmlspecialchars((string) ($TypeOfService ?? 'Fence and Deck Services'), ENT_QUOTES, 'UTF-8'); ?></span>
    <h1><?php echo htmlspecialchars((string) $heroTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
    <?php if ($heroDesc !== ''): ?><p><?php echo htmlspecialchars((string) $heroDesc, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
  </div>
</section>
