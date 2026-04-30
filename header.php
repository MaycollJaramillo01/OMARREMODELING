<?php
$defaultPageName = $namepage ?? ($NavCopy['home'] ?? '');
$PageTitle = $PageTitle ?? sprintf('%s | %s', $Company ?? '', $defaultPageName);
$PageDescription = $PageDescription ?? ($ExHome ?? ($Home[0] ?? ''));
$canonicalPath = basename($_SERVER['SCRIPT_NAME'] ?? '') ?: '';
$PageCanonical = $PageCanonical ?? rtrim($BaseURL ?? '', '/') . ($canonicalPath ? '/' . ltrim($canonicalPath, '/') : '/');

$fb_url = $facebook ?? '';
$insta_url = $instagram ?? '';
$goo_url = $google ?? '';
$tik_url = $tiktok ?? '';
$messenger_url = $messenger ?? '';
$brandLogoHref = 'assets/img/logo.png';

$headerServiceLine = trim((string) ($Services ?? 'Fence and deck services'));
$headerAddressLine = trim((string) ($Address ?? 'Lawrenceville, GA'));
$headerTrustLine = trim((string) ($LicenseNote ?? 'Licensed & Insured'));
$headerAvailability = trim((string) ($Estimates ?? 'Free Estimates'));
$headerPhoneDisplay = trim((string) ($Phone ?? ''));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $PageTitle; ?></title>
    <meta name="description" content="<?php echo $PageDescription; ?>">
    <link rel="canonical" href="<?php echo $PageCanonical; ?>">
    <link rel="icon" type="image/png" href="<?php echo $brandLogoHref; ?>">
    <link rel="apple-touch-icon" href="<?php echo $brandLogoHref; ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fence-redesign.css">

    <style>
        <?php echo $BrandCSSVars; ?>

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(250, 247, 241, 0.94);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(var(--brand-secondary-rgb), 0.08);
            box-shadow: 0 12px 32px rgba(15, 18, 21, 0.07);
        }

        .site-header + main {
            margin: 0;
            padding: 0;
        }

        .site-header + main > :first-child {
            margin-top: 0 !important;
        }

        .header-main {
            position: relative;
            padding: 0;
            overflow: hidden;
        }

        .header-main::before {
            content: '';
            position: absolute;
            inset: 0 0 auto;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(var(--brand-accent-rgb), 0.55), transparent);
            pointer-events: none;
        }

        .header-main::after {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 18% 0%, rgba(var(--brand-accent-rgb), 0.08), transparent 28%),
                radial-gradient(circle at 88% 0%, rgba(var(--brand-primary-rgb), 0.07), transparent 32%);
            pointer-events: none;
        }

        .header-utility {
            display: none;
        }

        .header-utility__bar {
            max-width: min(1680px, 97vw);
            margin: 0 auto;
            padding: 10px clamp(14px, 2vw, 34px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }

        .header-tagline {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
            font-size: 0.76rem;
            text-transform: uppercase;
            letter-spacing: 0.18em;
            font-weight: 700;
            color: rgba(255,255,255,0.74);
        }

        .header-tagline::before {
            content: '';
            width: 42px;
            height: 1px;
            background: rgba(var(--brand-accent-rgb), 0.72);
            flex: 0 0 auto;
        }

        .header-contact-list {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }

        .header-contact-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 999px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.08);
            color: rgba(255,255,255,0.86);
            font-size: 0.74rem;
            font-weight: 600;
            white-space: nowrap;
        }

        .header-contact-pill i {
            color: var(--brand-accent);
        }

        .header-shell {
            position: relative;
            z-index: 1;
            max-width: min(1380px, 94vw);
            margin: 0 auto;
            padding: 8px 0;
        }

        .header-container {
            display: grid;
            grid-template-columns: auto minmax(0, 1fr) auto;
            align-items: center;
            gap: clamp(16px, 2vw, 28px);
            min-height: 70px;
            padding: 9px 12px 9px 10px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.1);
            box-shadow: 0 18px 44px rgba(15, 18, 21, 0.08), inset 0 1px 0 rgba(255,255,255,0.78);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
            max-width: 118px;
            text-decoration: none;
            color: inherit;
        }

        .brand-mark {
            flex: 0 0 auto;
            width: 96px;
            height: 52px;
            border-radius: 12px;
            background: transparent;
            border: 0;
            box-shadow: none;
            display: grid;
            place-items: center;
            overflow: hidden;
            padding: 0;
        }

        .brand-mark__logo {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-text {
            display: none;
        }

        .header-nav-wrap {
            display: flex;
            justify-content: center;
            min-width: 0;
        }

        .main-nav {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-nav ul {
            display: inline-flex;
            align-items: center;
            gap: 2px;
            list-style: none;
            margin: 0;
            padding: 4px;
            border-radius: 999px;
            background: rgba(var(--brand-secondary-rgb), 0.045);
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.09);
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.8);
        }

        .site-header .main-nav .text-animate,
        .site-header .main-nav .text-animate.is-visible {
            opacity: 1 !important;
            transform: none !important;
            animation: none !important;
        }

        .main-nav > ul > li > a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 34px;
            padding: 0 14px;
            border-radius: 999px;
            text-decoration: none;
            color: rgba(var(--brand-secondary-rgb), 0.82);
            font-size: 0.72rem;
            font-weight: 850;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            transition: background 0.22s ease, color 0.22s ease, transform 0.22s ease;
        }

        .main-nav > ul > li > a:hover,
        .main-nav > ul > li > a:focus {
            background: rgba(var(--brand-accent-rgb), 0.18);
            color: var(--brand-secondary);
            transform: translateY(-1px);
        }

        .has-dropdown {
            position: relative;
        }

        .dropdown-arrow {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.72rem;
            margin-left: 6px;
        }

        .dropdown {
            position: absolute;
            top: calc(100% + 14px);
            left: 0;
            min-width: 240px;
            padding: 10px;
            border-radius: 20px;
            background: rgba(255,255,255,0.98);
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.08);
            box-shadow: 0 28px 60px rgba(15, 18, 21, 0.12);
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
            z-index: 10;
        }

        .has-dropdown:hover .dropdown,
        .has-dropdown:focus-within .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .has-dropdown.open > a .dropdown-arrow {
            transform: rotate(180deg);
        }

        .dropdown--services {
            min-width: min(760px, 84vw);
            display: grid;
            grid-template-columns: repeat(2, minmax(230px, 1fr));
            gap: 10px;
            max-height: min(68vh, 480px);
            overflow-y: auto;
            overflow-x: hidden;
        }

        .dropdown--services::-webkit-scrollbar {
            width: 8px;
        }

        .dropdown--services::-webkit-scrollbar-thumb {
            background: rgba(var(--brand-secondary-rgb), 0.18);
            border-radius: 999px;
        }

        .dropdown-services__all,
        .dropdown-services__other {
            grid-column: 1 / -1;
            list-style: none;
        }

        .dropdown-services__all > a,
        .dropdown-services__other > a {
            display: block;
            padding: 11px 14px;
            border-radius: 14px;
            background: color-mix(in srgb, var(--brand-neutral) 82%, #fff 18%);
            color: var(--brand-secondary);
            font-weight: 800;
            font-size: 0.78rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .dropdown-group {
            list-style: none;
            padding: 12px 14px;
            border-radius: 16px;
            background: #fff;
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.08);
        }

        .dropdown-group__title {
            display: block;
            margin: 0 0 8px;
            color: var(--brand-primary);
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        .dropdown-group__list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .dropdown li a {
            display: block;
            padding: 8px 0;
            color: rgba(var(--brand-secondary-rgb), 0.82);
            text-decoration: none;
            font-size: 0.9rem;
            line-height: 1.35;
        }

        .dropdown li a:hover {
            color: var(--brand-primary);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            justify-self: end;
        }

        .header-socials {
            display: none !important;
        }

        .social-icon-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #fff;
            color: var(--brand-secondary);
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.12);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 0.96rem;
            transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
        }

        .social-icon-link:hover {
            background: var(--brand-secondary);
            border-color: var(--brand-secondary);
            color: #fff;
            transform: translateY(-2px);
        }

        .header-phone {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 42px;
            padding: 0 14px 0 10px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.12);
            color: var(--brand-secondary);
            text-decoration: none;
            transition: transform 0.2s ease, border-color 0.2s ease, background 0.2s ease;
        }

        .header-phone:hover,
        .header-phone:focus {
            transform: translateY(-1px);
            border-color: rgba(var(--brand-primary-rgb), 0.28);
            background: rgba(var(--brand-primary-rgb), 0.06);
            color: var(--brand-secondary);
        }

        .header-phone__icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: rgba(var(--brand-accent-rgb), 0.22);
            color: var(--brand-secondary);
            font-size: 0.72rem;
            flex: 0 0 auto;
        }

        .header-phone__text {
            display: flex;
            flex-direction: column;
            gap: 1px;
            min-width: 0;
        }

        .header-phone__eyebrow {
            font-size: 0.58rem;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: rgba(var(--brand-secondary-rgb), 0.56);
            font-weight: 800;
        }

        .header-phone__number {
            font-size: 0.74rem;
            font-weight: 800;
            letter-spacing: 0.02em;
            color: var(--brand-secondary);
            white-space: nowrap;
        }

        .btn-estimate {
            min-height: 44px;
            padding: 0 20px;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--brand-accent), color-mix(in srgb, var(--brand-accent) 76%, #fff 24%));
            color: #18130a;
            font-size: 0.68rem;
            font-weight: 900;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(var(--brand-accent-rgb), 0.5);
            box-shadow: 0 14px 28px rgba(var(--brand-accent-rgb), 0.22);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            white-space: nowrap;
        }

        .btn-estimate:hover,
        .btn-estimate:focus {
            transform: translateY(-2px);
            color: #18130a;
            box-shadow: 0 18px 34px rgba(var(--brand-accent-rgb), 0.28);
        }

        .mobile-toggle {
            display: none;
            width: 48px;
            height: 48px;
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.12);
            border-radius: 16px;
            background: #fff;
            align-items: center;
            justify-content: center;
            gap: 4px;
            flex-direction: column;
            box-shadow: 0 10px 24px rgba(15, 18, 21, 0.08);
        }

        .mobile-toggle span {
            width: 22px;
            height: 2px;
            border-radius: 999px;
            background: var(--brand-secondary);
            display: block;
        }

        .mobile-menu-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(8, 10, 12, 0.42);
            z-index: 999;
            backdrop-filter: blur(4px);
        }

        body.nav-open .mobile-menu-overlay {
            display: block;
        }

        body.nav-open .floating-actions {
            display: none !important;
        }

        .menu-close {
            display: none;
            width: 44px;
            height: 44px;
            margin-left: auto;
            border-radius: 14px;
            border: 1px solid rgba(var(--brand-secondary-rgb), 0.1);
            background: #fff;
            color: var(--brand-secondary);
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        @media (max-width: 1200px) {
            .header-contact-list {
                display: none;
            }

            .header-phone__text {
                display: none;
            }

            .header-phone {
                padding: 0 13px;
            }
        }

        @media (max-width: 991px) {
            .header-utility {
                display: none;
            }

            .header-shell {
                padding-top: 12px;
                padding-bottom: 12px;
            }

            .header-container {
                grid-template-columns: minmax(0, 1fr) auto;
                min-height: 68px;
                gap: 12px;
                padding: 8px 10px;
            }

            .brand {
                max-width: min(100%, 112px);
            }

            .brand-mark {
                width: 98px;
                height: 54px;
                border-radius: 12px;
            }

            .header-nav-wrap {
                display: contents;
            }

            .main-nav {
                position: fixed;
                top: 0;
                right: 0;
                width: min(86vw, 380px);
                height: 100vh;
                padding: 22px 18px 28px;
                background: linear-gradient(180deg, #ffffff, color-mix(in srgb, var(--brand-neutral) 88%, #fff 12%));
                transform: translateX(110%);
                transition: transform 0.3s ease;
                flex-direction: column;
                align-items: stretch;
                justify-content: flex-start;
                gap: 20px;
                z-index: 1001;
                overflow-y: auto;
                box-shadow: -20px 0 50px rgba(15, 18, 21, 0.12);
            }

            .main-nav.is-open {
                transform: translateX(0);
            }

            .menu-close {
                display: inline-flex;
            }

            .main-nav ul {
                width: 100%;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                padding: 0;
                background: transparent;
                border: 0;
                box-shadow: none;
            }

            .main-nav ul li {
                width: 100%;
            }

            .main-nav ul li > a {
                justify-content: flex-start;
                padding: 15px 4px;
                min-height: 0;
                border-bottom: 1px solid rgba(var(--brand-secondary-rgb), 0.1);
                border-radius: 0;
                background: transparent !important;
                color: var(--brand-secondary) !important;
                transform: none !important;
            }

            .dropdown {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                display: none;
                width: 100%;
                padding: 0;
                background: transparent;
                border: 0;
                box-shadow: none;
            }

            .has-dropdown.open .dropdown {
                display: block;
            }

            .dropdown--services {
                min-width: 100%;
                display: block;
                max-height: none;
                overflow: visible;
            }

            .dropdown-services__all > a,
            .dropdown-services__other > a,
            .dropdown-group {
                border-radius: 0;
                padding-left: 0;
                padding-right: 0;
                background: transparent;
                border: 0;
            }

            .dropdown-group {
                padding-top: 12px;
                border-top: 1px solid rgba(var(--brand-secondary-rgb), 0.08);
            }

            .dropdown li a {
                padding-left: 10px;
            }

            .header-actions .header-phone,
            .header-actions .btn-estimate,
            .header-actions .header-socials {
                display: none;
            }

            .mobile-toggle {
                display: inline-flex;
            }

            .mobile-cta {
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                gap: 18px;
                width: 100%;
            }

            .mobile-cta a.btn-estimate {
                width: 100%;
            }

            .mobile-cta .header-phone {
                display: inline-flex;
                justify-content: center;
                background: #fff;
            }

            .mobile-cta .header-phone__text {
                display: flex;
                align-items: flex-start;
            }
            .mobile-socials {
                display: flex;
                justify-content: center;
                gap: 12px;
                flex-wrap: wrap;
            }

            .mobile-socials .social-icon-link {
                display: inline-flex !important;
            }
        }

        @media (max-width: 640px) {
            .header-shell {
                padding-left: 12px;
                padding-right: 12px;
            }

            .header-container {
                min-height: 64px;
                border-radius: 16px;
            }

            .brand-mark {
                width: 88px;
                height: 48px;
                border-radius: 12px;
            }

            .mobile-toggle {
                width: 44px;
                height: 44px;
                border-radius: 14px;
            }
        }
    </style>
</head>
<?php
$bodyClassAttr = trim((string) ($BodyClass ?? ''));
?>
<body<?php echo $bodyClassAttr !== '' ? ' class="' . htmlspecialchars($bodyClassAttr, ENT_QUOTES, 'UTF-8') . '"' : ''; ?>>

<header class="site-header">
    <div class="header-main">
        <div class="header-utility">
            <div class="header-utility__bar">
                <div class="header-tagline"><?php echo htmlspecialchars($headerServiceLine, ENT_QUOTES, 'UTF-8'); ?></div>
                <div class="header-contact-list">
                    <span class="header-contact-pill"><i class="fa-solid fa-location-dot"></i><?php echo htmlspecialchars($headerAddressLine, ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="header-contact-pill"><i class="fa-solid fa-shield-halved"></i><?php echo htmlspecialchars($headerTrustLine, ENT_QUOTES, 'UTF-8'); ?></span>
                    <span class="header-contact-pill"><i class="fa-solid fa-bolt"></i><?php echo htmlspecialchars($headerAvailability, ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            </div>
        </div>

        <div class="header-shell">
            <div class="container header-container">
                <a href="<?php echo $BaseURL; ?>" class="brand" aria-label="<?php echo htmlspecialchars($Company ?? 'Home', ENT_QUOTES, 'UTF-8'); ?>">
                    <span class="brand-mark">
                        <img class="brand-mark__logo" src="<?php echo $brandLogoHref; ?>" alt="<?php echo htmlspecialchars($Company ?? 'BRD Services LLC', ENT_QUOTES, 'UTF-8'); ?>">
                    </span>
                </a>

                <div class="header-nav-wrap">
                    <nav class="main-nav" id="mainNav" aria-label="<?php echo htmlspecialchars($AriaCopy['primary_nav'] ?? 'Primary navigation', ENT_QUOTES, 'UTF-8'); ?>">
                        <button class="menu-close d-lg-none" aria-label="<?php echo htmlspecialchars($HeaderCopy['menu_close'] ?? 'Close menu', ENT_QUOTES, 'UTF-8'); ?>">
                            <i class="fa-solid fa-xmark"></i>
                        </button>

                        <ul>
                            <li><a href="<?php echo $BaseURL; ?>"><?php echo $NavCopy['home'] ?? ''; ?></a></li>
                            <li><a href="about.php"><?php echo $NavCopy['about'] ?? ''; ?></a></li>
                            <li><a href="services.php"><?php echo htmlspecialchars($NavCopy['services'] ?? 'Services', ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <li><a href="projects.php"><?php echo $NavCopy['projects'] ?? ''; ?></a></li>
                            <li><a href="contact.php"><?php echo $NavCopy['contact'] ?? ''; ?></a></li>

                            <li class="mobile-cta d-lg-none">
                                <a href="<?php echo $PhoneRef; ?>" class="header-phone">
                                    <span class="header-phone__icon"><i class="fa-solid fa-phone-volume"></i></span>
                                    <span class="header-phone__text">
                                        <span class="header-phone__eyebrow"><?php echo htmlspecialchars($PhoneName ?? 'Call Now', ENT_QUOTES, 'UTF-8'); ?></span>
                                        <span class="header-phone__number"><?php echo htmlspecialchars($headerPhoneDisplay, ENT_QUOTES, 'UTF-8'); ?></span>
                                    </span>
                                </a>

                                <a href="<?php echo $PhoneRef; ?>" class="btn-estimate"><?php echo $NavCopy['cta_mobile'] ?? ''; ?></a>

                                <div class="mobile-socials">
                                    <?php if (!empty($fb_url)): ?>
                                        <a href="<?php echo $fb_url; ?>" target="_blank" rel="noopener" class="social-icon-link"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($messenger_url)): ?>
                                        <a href="<?php echo $messenger_url; ?>" target="_blank" rel="noopener" class="social-icon-link"><i class="fab fa-facebook-messenger"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($insta_url)): ?>
                                        <a href="<?php echo $insta_url; ?>" target="_blank" rel="noopener" class="social-icon-link"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($goo_url)): ?>
                                        <a href="<?php echo $goo_url; ?>" target="_blank" rel="noopener" class="social-icon-link"><i class="fab fa-google"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($tik_url)): ?>
                                        <a href="<?php echo $tik_url; ?>" target="_blank" rel="noopener" class="social-icon-link"><i class="fab fa-tiktok"></i></a>
                                    <?php endif; ?>
                                    <?php if (!empty($whatsapp)): ?>
                                        <a href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener" class="social-icon-link"><i class="fab fa-whatsapp"></i></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-actions">
                    <div class="header-socials d-none d-lg-flex">
                        <?php if (!empty($fb_url)): ?>
                            <a href="<?php echo $fb_url; ?>" target="_blank" rel="noopener" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['facebook'] ?? 'Facebook', ENT_QUOTES, 'UTF-8'); ?>"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($messenger_url)): ?>
                            <a href="<?php echo $messenger_url; ?>" target="_blank" rel="noopener" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['messenger'] ?? 'Messenger', ENT_QUOTES, 'UTF-8'); ?>"><i class="fab fa-facebook-messenger"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($goo_url)): ?>
                            <a href="<?php echo $goo_url; ?>" target="_blank" rel="noopener" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['google'] ?? 'Google', ENT_QUOTES, 'UTF-8'); ?>"><i class="fab fa-google"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($insta_url)): ?>
                            <a href="<?php echo $insta_url; ?>" target="_blank" rel="noopener" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['instagram'] ?? 'Instagram', ENT_QUOTES, 'UTF-8'); ?>"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($tik_url)): ?>
                            <a href="<?php echo $tik_url; ?>" target="_blank" rel="noopener" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['tiktok'] ?? 'TikTok', ENT_QUOTES, 'UTF-8'); ?>"><i class="fab fa-tiktok"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($whatsapp)): ?>
                            <a href="<?php echo $whatsapp; ?>" target="_blank" rel="noopener" class="social-icon-link" title="<?php echo htmlspecialchars($HeaderCopy['social_titles']['whatsapp'] ?? 'WhatsApp', ENT_QUOTES, 'UTF-8'); ?>"><i class="fab fa-whatsapp"></i></a>
                        <?php endif; ?>
                    </div>

                    <a href="<?php echo $PhoneRef; ?>" class="header-phone" aria-label="<?php echo htmlspecialchars($PhoneName ?? 'Call now', ENT_QUOTES, 'UTF-8'); ?>">
                        <span class="header-phone__icon"><i class="fa-solid fa-phone-volume"></i></span>
                        <span class="header-phone__text">
                            <span class="header-phone__eyebrow"><?php echo htmlspecialchars($PhoneName ?? 'Call Now', ENT_QUOTES, 'UTF-8'); ?></span>
                            <span class="header-phone__number"><?php echo htmlspecialchars($headerPhoneDisplay, ENT_QUOTES, 'UTF-8'); ?></span>
                        </span>
                    </a>

                    <a href="<?php echo $PhoneRef; ?>" class="btn-estimate"><?php echo $NavCopy['cta'] ?? ''; ?></a>

                    <button class="mobile-toggle" type="button" aria-label="<?php echo htmlspecialchars($HeaderCopy['menu_toggle'] ?? 'Open menu', ENT_QUOTES, 'UTF-8'); ?>" aria-controls="mainNav" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mobile-menu-overlay"></div>
    </div>
</header>
<main>
