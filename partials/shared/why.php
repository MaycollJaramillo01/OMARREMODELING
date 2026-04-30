<?php
$whyCopy = (isset($WhyCopy) && is_array($WhyCopy)) ? $WhyCopy : [];
$title = trim((string) ($whyCopy['title_prefix'] ?? 'Why Homeowners Choose'));
$companyName = trim((string) ($Company ?? 'BRD Services LLC'));
$description = trim((string) ($whyCopy['description'] ?? 'A focused crew for fence, deck, repair, and staining projects with clear estimates and clean execution.'));
$features = (!empty($whyCopy['features']) && is_array($whyCopy['features'])) ? $whyCopy['features'] : [
  ['icon' => 'fa-ruler-combined', 'title' => 'Straight Scope', 'text' => 'We clarify the work before materials and scheduling.'],
  ['icon' => 'fa-hammer', 'title' => 'Practical Build Quality', 'text' => 'Fence and deck work built for real residential use.'],
  ['icon' => 'fa-brush', 'title' => 'Finished Wood Protection', 'text' => 'Staining options for better appearance and longer life.'],
  ['icon' => 'fa-comments', 'title' => 'Direct Communication', 'text' => 'Simple updates from estimate to completion.']
];
?>

<section class="brd-why" id="why">
  <div class="container brd-why__wrap">
    <header class="brd-section-head" data-aos="fade-up">
      <span class="brd-kicker">Why BRD</span>
      <h2><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?> <strong><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?></strong></h2>
      <p><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></p>
    </header>

    <div class="brd-why__grid">
      <?php foreach (array_slice($features, 0, 4) as $index => $feature): ?>
        <?php
          $icon = trim((string) ($feature['icon'] ?? 'fa-circle-check'));
          $title = trim((string) ($feature['title'] ?? ''));
          $text = trim((string) ($feature['text'] ?? ''));
          if ($title === '' && $text === '') continue;
        ?>
        <article data-aos="fade-up" data-aos-delay="<?php echo (int) $index * 80; ?>">
          <span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
          <i class="fa-solid <?php echo htmlspecialchars(str_replace('fa-solid ', '', $icon), ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"></i>
          <h3><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h3>
          <p><?php echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
