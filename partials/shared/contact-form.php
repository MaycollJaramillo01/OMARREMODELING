<?php
$servicesForDisplay = (!empty($ServicesDisplayList) && is_array($ServicesDisplayList))
  ? $ServicesDisplayList
  : ((isset($ServicesList) && is_array($ServicesList)) ? array_values($ServicesList) : []);
?>

<section class="brd-contact" id="contact">
  <div class="container brd-contact__grid">
    <aside class="brd-contact__info" data-aos="fade-up">
      <span class="brd-kicker"><?php echo htmlspecialchars($ContactFormCopy['eyebrow'] ?? 'Free Estimate', ENT_QUOTES, 'UTF-8'); ?></span>
      <h2><?php echo htmlspecialchars($ContactFormCopy['title'] ?? 'Start Your', ENT_QUOTES, 'UTF-8'); ?> <strong><?php echo htmlspecialchars($ContactFormCopy['title_strong'] ?? 'Project', ENT_QUOTES, 'UTF-8'); ?></strong></h2>
      <p><?php echo htmlspecialchars($ContactFormCopy['desc'] ?? 'Tell us what you need for your fence, deck, repair, or staining project.', ENT_QUOTES, 'UTF-8'); ?></p>

      <div class="brd-contact__methods">
        <?php if (!empty($Phone) && !empty($PhoneRef)): ?>
          <a href="<?php echo htmlspecialchars($PhoneRef, ENT_QUOTES, 'UTF-8'); ?>">
            <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
            <span>Call</span>
            <strong><?php echo htmlspecialchars($Phone, ENT_QUOTES, 'UTF-8'); ?></strong>
          </a>
        <?php endif; ?>
        <?php if (!empty($Schedule)): ?>
          <div>
            <i class="fa-solid fa-clock" aria-hidden="true"></i>
            <span>Hours</span>
            <strong><?php echo htmlspecialchars($Schedule, ENT_QUOTES, 'UTF-8'); ?></strong>
          </div>
        <?php endif; ?>
      </div>
    </aside>

    <form action="send-mail.php" method="POST" class="brd-contact__form" data-aos="fade-up" data-aos-delay="120">
      <div>
        <label for="name"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['name'] ?? 'Name', ENT_QUOTES, 'UTF-8'); ?></label>
        <input type="text" id="name" name="name" required>
      </div>
      <div>
        <label for="phone"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['phone'] ?? 'Phone', ENT_QUOTES, 'UTF-8'); ?></label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="span-2">
        <label for="email"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['email'] ?? 'Email', ENT_QUOTES, 'UTF-8'); ?></label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="span-2">
        <label for="service"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['service'] ?? 'Service', ENT_QUOTES, 'UTF-8'); ?></label>
        <select id="service" name="service">
          <option value="" disabled selected><?php echo htmlspecialchars($ContactFormCopy['placeholders']['service'] ?? 'Select a service', ENT_QUOTES, 'UTF-8'); ?></option>
          <?php foreach ($servicesForDisplay as $svc): ?>
            <?php $svcName = trim((string) ($svc['name'] ?? '')); if ($svcName === '') continue; ?>
            <option value="<?php echo htmlspecialchars($svcName, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($svcName, ENT_QUOTES, 'UTF-8'); ?></option>
          <?php endforeach; ?>
          <option value="Other"><?php echo htmlspecialchars($ContactFormCopy['placeholders']['service_other'] ?? 'Other', ENT_QUOTES, 'UTF-8'); ?></option>
        </select>
      </div>
      <div class="span-2">
        <label for="message"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['message'] ?? 'Message', ENT_QUOTES, 'UTF-8'); ?></label>
        <textarea id="message" name="message" rows="4" placeholder="<?php echo htmlspecialchars($ContactFormCopy['placeholders']['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></textarea>
      </div>
      <div style="display:none;">
        <label for="honeypot"><?php echo htmlspecialchars($ContactFormCopy['honeypot_label'] ?? 'Leave empty', ENT_QUOTES, 'UTF-8'); ?></label>
        <input type="text" id="honeypot" name="honeypot">
      </div>
      <button type="submit" class="span-2"><?php echo htmlspecialchars($ContactFormCopy['submit'] ?? 'Send Request', ENT_QUOTES, 'UTF-8'); ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></button>
    </form>
  </div>
</section>
