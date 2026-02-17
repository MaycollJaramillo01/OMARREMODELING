<?php
require_once 'text.php';
$page_name = $NavCopy['projects'] ?? '';
$BodyClass = 'projects-page';
include 'header.php';
?>

<style>
body.projects-page .cta-forge {
    background:
        radial-gradient(circle at 14% 16%, rgba(var(--brand-accent-rgb), 0.2), transparent 44%),
        radial-gradient(circle at 88% 84%, rgba(var(--brand-primary-rgb), 0.2), transparent 44%),
        linear-gradient(140deg, color-mix(in srgb, var(--brand-secondary) 92%, #000 8%) 0%, color-mix(in srgb, var(--brand-primary) 82%, #000 18%) 56%, color-mix(in srgb, var(--brand-secondary) 92%, #000 8%) 100%);
}

body.projects-page .cta-forge__message {
    border-color: rgba(var(--brand-accent-rgb), 0.34);
    background: linear-gradient(155deg, rgba(var(--brand-secondary-rgb), 0.78), rgba(var(--brand-primary-rgb), 0.58));
}

body.projects-page .cta-forge__badge {
    color: color-mix(in srgb, var(--brand-white) 85%, var(--brand-accent) 15%);
    border-color: rgba(var(--brand-accent-rgb), 0.4);
}

body.projects-page .cta-forge__title strong,
body.projects-page .cta-forge__feature-line i,
body.projects-page .cta-forge__quick-actions a:hover {
    color: var(--brand-accent);
}

body.projects-page .cta-forge__quick-actions a:hover {
    background: var(--brand-secondary);
}

body.projects-page .cta-forge__coverage li::before {
    background: var(--brand-accent);
}
</style>

<div class="page-wrapper">
    <!-- Hero Section -->
    <?php include 'partials/shared/page-hero.php'; ?>

    <!-- Intro -->
    <?php include 'partials/projects/intro.php'; ?>

    <!-- Before/After -->
    <?php // include 'partials/projects/before-after.php'; ?>

    <!-- Stats -->
    <?php include 'partials/projects/stats.php'; ?>

    <!-- Main Grid -->
    <?php include 'partials/projects/project-grid.php'; ?>
    <?php include 'partials/shared/contact-form.php'; ?>
    <?php include 'partials/shared/trusted-partners.php'; ?>

    <!-- CTA -->
    <?php include 'partials/shared/cta.php'; ?>
</div>
<?php include 'footer.php'; ?>
