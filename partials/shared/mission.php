<?php
$missionTitle = trim((string) ($MissionCopy['mission_title'] ?? 'Our Mission'));
$visionTitle = trim((string) ($MissionCopy['vision_title'] ?? 'Our Vision'));
$missionText = trim((string) ($Mission ?? 'Deliver dependable fence, deck, and staining work with clear communication, durable materials, and clean project completion.'));
$visionText = trim((string) ($Vision ?? 'Be the trusted local fence and deck company for Lawrenceville homeowners through consistent workmanship and accountable service.'));
$coverageLabel = trim((string) ($Coverage ?? 'Lawrenceville, GA and nearby service areas'));
$estimateLabel = trim((string) ($Estimates ?? 'Free Estimates'));
$typeLabel = trim((string) ($TypeOfService ?? 'Fence and deck services'));
?>

<section class="brd-mission" id="mission-vision">
  <div class="container brd-mission__wrap">
    <div class="brd-mission__media" data-aos="fade-right">
      <img src="assets/img/new/deck-staining.jpeg" alt="Finished deck and fence project by BRD Services" loading="lazy">
      <div class="brd-mission__stamp">
        <strong>BRD</strong>
        <span>Fence & Deck</span>
      </div>
    </div>

    <div class="brd-mission__content" data-aos="fade-left">
      <span class="brd-mission__eyebrow">Purpose and standards</span>
      <h2>Built around clean work, straight answers, and durable exterior results.</h2>
      <p class="brd-mission__lead">BRD Services focuses on fence, deck, and staining projects for homeowners who want practical planning and a finished jobsite.</p>

      <div class="brd-mission__cards">
        <article>
          <span class="brd-mission__icon"><i class="fa-solid fa-hammer" aria-hidden="true"></i></span>
          <h3><?php echo htmlspecialchars($missionTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
          <p><?php echo htmlspecialchars($missionText, ENT_QUOTES, 'UTF-8'); ?></p>
        </article>
        <article>
          <span class="brd-mission__icon"><i class="fa-solid fa-border-all" aria-hidden="true"></i></span>
          <h3><?php echo htmlspecialchars($visionTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
          <p><?php echo htmlspecialchars($visionText, ENT_QUOTES, 'UTF-8'); ?></p>
        </article>
      </div>

      <div class="brd-mission__facts">
        <div>
          <span>Service type</span>
          <strong><?php echo htmlspecialchars($typeLabel, ENT_QUOTES, 'UTF-8'); ?></strong>
        </div>
        <div>
          <span>Coverage</span>
          <strong><?php echo htmlspecialchars($coverageLabel, ENT_QUOTES, 'UTF-8'); ?></strong>
        </div>
        <div>
          <span>Estimate</span>
          <strong><?php echo htmlspecialchars($estimateLabel, ENT_QUOTES, 'UTF-8'); ?></strong>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.brd-mission {
  padding: clamp(70px, 9vw, 120px) 0;
  background:
    linear-gradient(90deg, rgba(95, 59, 37, .08) 1px, transparent 1px),
    linear-gradient(180deg, #fffdf8, #f4efe6);
  background-size: 42px 42px, auto;
}

.brd-mission__wrap {
  width: min(1240px, 92vw);
  display: grid;
  grid-template-columns: minmax(320px, .82fr) minmax(0, 1fr);
  gap: clamp(28px, 5vw, 72px);
  align-items: center;
}

.brd-mission__media {
  position: relative;
  min-height: 620px;
  border-radius: 26px;
  overflow: hidden;
  box-shadow: 0 24px 60px rgba(31,24,18,.16);
}

.brd-mission__media img {
  width: 100%;
  height: 100%;
  min-height: inherit;
  object-fit: cover;
}

.brd-mission__stamp {
  position: absolute;
  left: 22px;
  bottom: 22px;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  align-content: center;
  background: #1b1713;
  color: #fff;
  border: 8px solid rgba(255,255,255,.82);
  text-align: center;
}

.brd-mission__stamp strong {
  font-family: var(--font-display);
  font-size: 2.2rem;
  line-height: 1;
}

.brd-mission__stamp span {
  margin-top: 6px;
  color: #d7a24a;
  font-size: .68rem;
  text-transform: uppercase;
  letter-spacing: .12em;
  font-weight: 900;
}

.brd-mission__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: #9a6339;
  text-transform: uppercase;
  letter-spacing: .18em;
  font-size: .72rem;
  font-weight: 900;
}

.brd-mission__eyebrow::before {
  content: "";
  width: 42px;
  height: 2px;
  background: #d7a24a;
}

.brd-mission h2 {
  margin: 14px 0 16px;
  max-width: 760px;
  color: #1b1713;
  font-size: clamp(2.6rem, 5.4vw, 5rem);
  line-height: .9;
}

.brd-mission__lead {
  max-width: 700px;
  color: #62584f;
  font-size: 1.06rem;
  line-height: 1.75;
}

.brd-mission__cards {
  margin-top: 28px;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 14px;
}

.brd-mission__cards article {
  border: 1px solid rgba(31,24,18,.12);
  border-radius: 20px;
  background: rgba(255,255,255,.72);
  padding: 22px;
  box-shadow: 0 14px 34px rgba(31,24,18,.08);
}

.brd-mission__icon {
  width: 46px;
  height: 46px;
  border-radius: 14px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: rgba(215,162,74,.18);
  color: #5f3b25;
  border: 1px solid rgba(215,162,74,.38);
}

.brd-mission__cards h3 {
  margin: 16px 0 10px;
  color: #1b1713;
  font-size: 1.55rem;
}

.brd-mission__cards p {
  margin: 0;
  color: #62584f;
  line-height: 1.68;
  font-size: .96rem;
}

.brd-mission__facts {
  margin-top: 14px;
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 10px;
}

.brd-mission__facts div {
  border: 1px solid rgba(31,24,18,.12);
  border-radius: 16px;
  background: #fffdf8;
  padding: 14px;
}

.brd-mission__facts span {
  display: block;
  color: #8a7a6d;
  text-transform: uppercase;
  letter-spacing: .12em;
  font-size: .66rem;
  font-weight: 900;
}

.brd-mission__facts strong {
  display: block;
  margin-top: 5px;
  color: #1b1713;
  line-height: 1.24;
}

@media (max-width: 980px) {
  .brd-mission__wrap,
  .brd-mission__cards,
  .brd-mission__facts {
    grid-template-columns: 1fr;
  }

  .brd-mission__media {
    min-height: 420px;
  }
}
</style>
