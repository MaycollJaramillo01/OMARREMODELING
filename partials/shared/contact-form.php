<?php
// Asegurar variables
$CtBg = $BrandColors['secondary'] ?? '#101012';
$CtAccent = $BrandColors['accent'] ?? '#E31E24';
$CtText = $BrandColors['white'] ?? '#ffffff';
$servicesForDisplay = (!empty($ServicesDisplayList) && is_array($ServicesDisplayList))
    ? $ServicesDisplayList
    : ((isset($ServicesList) && is_array($ServicesList)) ? array_values($ServicesList) : []);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    :root {
        --ct-bg: <?php echo $CtBg; ?>;
        --ct-accent: <?php echo $CtAccent; ?>;
        --ct-text: <?php echo $CtText; ?>;
        --ct-input-bg: rgba(255, 255, 255, 0.03);
        --ct-border: rgba(255, 255, 255, 0.1);
    }

    .section-contact-premium {
        padding: 100px 0;
        background-color: var(--ct-bg);
        position: relative;
        font-family: var(--font-body);
        color: var(--ct-text);
        overflow: hidden;
    }

    /* Fondo de textura arquitectónica */
    .section-contact-premium::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background-image: 
            linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
        background-size: 40px 40px;
        opacity: 0.5;
        pointer-events: none;
    }

    .ct-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 25px;
        position: relative;
        z-index: 2;
    }

    .ct-grid {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 80px;
        align-items: start;
    }

    /* --- LADO IZQUIERDO: INFO --- */
    .ct-info-content {
        padding-top: 20px;
    }

    .ct-eyebrow {
        color: var(--ct-accent);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        display: block;
        display: flex; align-items: center; gap: 10px;
    }
     
    .ct-eyebrow::before { content: ''; width: 30px; height: 2px; background: var(--ct-accent); }

    .ct-title {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        line-height: 1.1;
        font-weight: 300;
        margin-bottom: 25px;
        color: #fff;
    }

    .ct-title strong { font-weight: 800; color: #fff; }

    .ct-desc {
        font-size: 1.1rem;
        color: rgba(255,255,255,0.7);
        line-height: 1.7;
        margin-bottom: 50px;
    }

    .ct-methods {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .ct-method-item {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .ct-icon-box {
        width: 60px; 
        height: 60px;
        
        /* --- LÍNEAS PARA CORREGIR EL OVALADO --- */
        min-width: 60px;  /* Fuerza el ancho mínimo */
        min-height: 60px; /* Fuerza el alto mínimo */
        flex-shrink: 0;   /* Prohíbe que el elemento se encoja */
        /* --------------------------------------------- */

        border: 1px solid var(--ct-border);
        border-radius: 50%;
        display: flex; 
        align-items: center; 
        justify-content: center;
        font-size: 1.2rem;
        color: var(--ct-accent);
        background: rgba(255,255,255,0.02);
        transition: 0.3s;
    }

    .ct-method-item:hover .ct-icon-box {
        background: var(--ct-accent);
        color: var(--ct-bg);
        border-color: var(--ct-accent);
    }

    .ct-details span {
        display: block;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: rgba(255,255,255,0.5);
        margin-bottom: 5px;
    }

    .ct-details a, .ct-details p {
        font-size: 1.2rem;
        font-weight: 700;
        color: #fff;
        text-decoration: none;
        margin: 0;
        transition: 0.3s;
    }

    .ct-details a:hover { color: var(--ct-accent); }

    /* --- LADO DERECHO: FORMULARIO --- */
    .ct-form-wrapper {
        background: rgba(255,255,255,0.03);
        border: 1px solid var(--ct-border);
        padding: 50px;
        border-radius: 4px;
        backdrop-filter: blur(10px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.3);
    }

    .ct-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .form-group {
        position: relative;
        margin-bottom: 10px;
    }

    .form-group.full-width { grid-column: span 2; }

    .form-label {
        font-size: 0.85rem;
        font-weight: 600;
        color: rgba(255,255,255,0.6);
        margin-bottom: 10px;
        display: block;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-control-arch {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid var(--ct-border);
        color: #fff;
        padding: 15px 0;
        font-size: 1.1rem;
        border-radius: 0;
        transition: 0.3s;
    }

    .form-control-arch:focus {
        outline: none;
        border-bottom-color: var(--ct-accent);
        background: linear-gradient(to bottom, transparent 95%, rgba(var(--brand-accent-rgb), 0.1) 100%);
    }

    .form-control-arch::placeholder {
        color: rgba(255,255,255,0.2);
        font-weight: 300;
    }

    /* Select personalizado */
    select.form-control-arch {
        cursor: pointer;
    }
     
    select.form-control-arch option {
        background-color: var(--ct-bg);
        color: #fff;
        padding: 10px;
    }

    /* Botón Submit */
    .btn-submit-arch {
        width: 100%;
        background: var(--ct-accent);
        color: var(--ct-bg);
        font-weight: 800;
        text-transform: uppercase;
        padding: 20px;
        border: none;
        letter-spacing: 1px;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .btn-submit-arch:hover {
        background: #fff;
        transform: translateY(-2px);
    }

    @media (max-width: 991px) {
        .ct-grid { grid-template-columns: 1fr; gap: 60px; }
        .ct-form-wrapper { padding: 30px; }
        .ct-form-grid { grid-template-columns: 1fr; gap: 20px; }
        .form-group.full-width { grid-column: span 1; }
        .section-contact-premium { padding: 60px 0; }
    }
</style>

<section class="section-contact-premium" id="contact">
    <div class="ct-container">
        <div class="ct-grid">
             
            <div class="ct-info-side" data-aos="fade-right">
                <div class="ct-info-content">
                    <span class="ct-eyebrow"><?php echo htmlspecialchars($ContactFormCopy['eyebrow'] ?? ''); ?></span>
                    <h2 class="ct-title"><?php echo htmlspecialchars($ContactFormCopy['title'] ?? ''); ?> <br><strong><?php echo htmlspecialchars($ContactFormCopy['title_strong'] ?? ''); ?></strong></h2>
                    <p class="ct-desc">
                        <?php echo htmlspecialchars($ContactFormCopy['desc'] ?? ''); ?>
                    </p>

                    <div class="ct-methods">
                        <div class="ct-method-item">
                            <div class="ct-icon-box"><i class="fas fa-phone-alt"></i></div>
                            <div class="ct-details">
                                <span><?php echo htmlspecialchars($ContactFormCopy['method_labels']['call'] ?? ''); ?></span>
                                <a href="<?php echo $PhoneRef; ?>" style="display:block; margin-bottom: 5px;">
                                    <?php echo $Phone; ?>
                                    <?php if (!empty($PhoneName)): ?>
                                        (<?php echo htmlspecialchars($PhoneName, ENT_QUOTES, 'UTF-8'); ?>)
                                    <?php endif; ?>
                                </a>
                                <?php if(!empty($Phone2)): ?>
                                    <a href="<?php echo $PhoneRef2; ?>" style="display:block;">
                                        <?php echo $Phone2; ?>
                                        <?php if (!empty($Phone2Name)): ?>
                                            (<?php echo htmlspecialchars($Phone2Name, ENT_QUOTES, 'UTF-8'); ?>)
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="ct-method-item">
                            <div class="ct-icon-box"><i class="fas fa-clock"></i></div>
                            <div class="ct-details">
                                <span><?php echo htmlspecialchars($ContactFormCopy['method_labels']['hours'] ?? ''); ?></span>
                                <p><?php echo $Schedule; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ct-form-side" data-aos="fade-left">
                <div class="ct-form-wrapper">
                    <form action="send-mail.php" method="POST" class="ct-form">
                        <div class="ct-form-grid">
                             
                            <div class="form-group">
                                <label for="name" class="form-label"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['name'] ?? ''); ?></label>
                                <input type="text" id="name" name="name" class="form-control-arch" placeholder="" required>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['phone'] ?? ''); ?></label>
                                <input type="tel" id="phone" name="phone" class="form-control-arch" placeholder="" required>
                            </div>

                            <div class="form-group full-width">
                                <label for="email" class="form-label"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['email'] ?? ''); ?></label>
                                <input type="email" id="email" name="email" class="form-control-arch" placeholder="" required>
                            </div>

                            <div class="form-group full-width">
                                <label for="service" class="form-label"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['service'] ?? ''); ?></label>
                                <select id="service" name="service" class="form-control-arch">
                                    <option value="" disabled selected><?php echo htmlspecialchars($ContactFormCopy['placeholders']['service'] ?? ''); ?></option>
                                    <?php foreach ($servicesForDisplay as $svc): ?>
                                    <option value="<?php echo $svc['name']; ?>"><?php echo $svc['name']; ?></option>
                                    <?php endforeach; ?>
                                    <option value="Other"><?php echo htmlspecialchars($ContactFormCopy['placeholders']['service_other'] ?? ''); ?></option>
                                </select>
                            </div>

                            <div class="form-group full-width">
                                <label for="message" class="form-label"><?php echo htmlspecialchars($ContactFormCopy['form_labels']['message'] ?? ''); ?></label>
                                <textarea id="message" name="message" rows="3" class="form-control-arch" placeholder="<?php echo htmlspecialchars($ContactFormCopy['placeholders']['message'] ?? ''); ?>"></textarea>
                            </div>

                        </div>

                        <div style="display:none;">
                            <label for="honeypot"><?php echo htmlspecialchars($ContactFormCopy['honeypot_label'] ?? ''); ?></label>
                            <input type="text" id="honeypot" name="honeypot">
                        </div>

                        <button type="submit" class="btn-submit-arch">
                            <?php echo htmlspecialchars($ContactFormCopy['submit'] ?? ''); ?> <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
