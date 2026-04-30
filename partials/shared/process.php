<?php
$process = (isset($ProcessCopy) && is_array($ProcessCopy)) ? $ProcessCopy : [];
$steps = (!empty($process['steps']) && is_array($process['steps'])) ? $process['steps'] : [];
?>

<section class="brd-process">
  <div class="container">
    <header class="brd-section-head" data-aos="fade-up">
      <span class="brd-kicker">Simple Process</span>
      <h2><?php echo htmlspecialchars((string) ($process['title'] ?? 'Plan'), ENT_QUOTES, 'UTF-8'); ?> <strong><?php echo htmlspecialchars((string) ($process['title_strong'] ?? 'Build Finish'), ENT_QUOTES, 'UTF-8'); ?></strong></h2>
      <p><?php echo htmlspecialchars((string) ($process['desc'] ?? 'A clear sequence from first call to final walkthrough.'), ENT_QUOTES, 'UTF-8'); ?></p>
    </header>

    <div class="brd-process__grid">
      <?php foreach ($steps as $index => $step): ?>
        <article data-aos="fade-up" data-aos-delay="<?php echo (int) ($index * 80); ?>">
          <span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
          <i class="fa-solid <?php echo htmlspecialchars(str_replace('fa-', 'fa-', (string) ($step['icon'] ?? 'fa-hammer')), ENT_QUOTES, 'UTF-8'); ?>" aria-hidden="true"></i>
          <h3><?php echo htmlspecialchars((string) ($step['title'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></h3>
          <p><?php echo htmlspecialchars((string) ($step['text'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
