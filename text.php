<?php
@session_start();

/*=========================
   PAGE NAME (Routing simple)
   =========================*/
$full_name  = $_SERVER['PHP_SELF'] ?? '';
$name_array = explode('/', $full_name);
$count      = count($name_array);
$page_name  = $name_array[$count - 1] ?? '';

if      ($page_name == 'index.php')        { $namepage = "Home"; }
elseif ($page_name == 'about.php')        { $namepage = "About"; }
elseif ($page_name == 'services.php')     { $namepage = "Services"; }
elseif ($page_name == 'testimonials.php') { $namepage = "Reviews"; }
elseif ($page_name == 'reviews.php')      { $namepage = "Reviews"; }
elseif ($page_name == 'projects.php')     { $namepage = "Projects"; }
elseif ($page_name == 'thank-you.php')    { $namepage = "Thank You"; }
elseif ($page_name == '404.php')          { $namepage = "Not Found"; }
elseif ($page_name == 'contact.php')      { $namepage = "Contact"; }
else                                      { $namepage = ucfirst(str_replace('.php', '', $page_name)); }

/*=========================
   INFO GENERAL - OMAR REMODELING LLC
   =========================*/
$Company      = "OMAR REMODELING LLC";
$CustomerName = "Omar Orellana";

function detectBaseURL() {
  $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $script = $_SERVER['SCRIPT_NAME'] ?? '';
  $dir    = rtrim(str_replace('\\', '/', dirname($script)), '/.');
  $path   = $dir ? $dir . '/' : '/';
  return $scheme . '://' . $host . $path;
}

$BaseURL   = rtrim(detectBaseURL(), '/') . '/';
$Domain    = "https://omarremodeling.com/";
$MAVEN     = "go-maven.com";
$Address   = "Laurel, MD";
$PhoneName = "English";
$Phone2Name = "Spanish";

$Phone     = "+1 (443) 864-0169";
$Phone2    = "+1 (443) 360-1413";

function telRef($p) {
  $clean = str_replace(str_split('()-/\\:?"<>|., '), '', $p);
  return "tel:" . $clean;
}
$PhoneRef  = telRef($Phone);
$PhoneRef2 = telRef($Phone2 ?? '');

function slugify($text) {
  $text = strtolower(trim($text));
  $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
  return trim($text, '-') ?: 'service';
}

// WhatsApp link
$whatsapp_num = preg_replace('/\D+/', '', $Phone);
if (strpos($whatsapp_num, '1') !== 0) { $whatsapp_num = '1' . $whatsapp_num; }
$whatsapp = "https://api.whatsapp.com/send?phone=$whatsapp_num&text=Hello%20OMAR%20REMODELING%20LLC!%20I%27d%20like%20to%20request%20a%20free%20estimate.";

$Mail    = "omarremodelingllc@gmail.com";
$MailRef = "mailto:" . $Mail;

/*=========================
   GENERAL MESSAGES
   =========================*/
$Services       = "Residential and Commercial Services";
$Estimates      = "Free Estimates";
$Payment        = "Ck, Cash, Bank Transfers, Zelle";
$Experience     = "6 Years";
$Schedule       = "Monday to Saturday from 8:00 AM to 7:00 PM.";
$Coverage       = "We cover up to 80 miles from Laurel, MD.";
$LicenseNote    = "Fully Insured & Licensed";
$BilingualNote  = "Bilingual Attention (English & Spanish)";
$TypeOfService  = "Residential and Commercial";

/*=========================
   BRAND COLORS
   =========================*/
$BrandColors = [
  'primary'       => '#2A2A2D',
  'primary_rgb'   => '42, 42, 45',
  'secondary'     => '#101012',
  'secondary_rgb' => '16, 16, 18',
  'accent'        => '#E31E24',
  'accent_rgb'    => '227, 30, 36',
  'neutral'       => '#ECEDEF',
  'white'         => '#FFFFFF'
];

/*=========================
   SERVICE AREAS
   =========================*/
$Areas = [
  "Laurel, MD",
  "Baltimore, MD",
  "Columbia, MD",
  "Ellicott City, MD",
  "Silver Spring, MD",
  "Rockville, MD",
  "Gaithersburg, MD",
  "Bowie, MD",
  "Hyattsville, MD",
  "Washington, DC",
  "Bethesda, MD",
  "Glen Burnie, MD",
  "Towson, MD",
  "Annapolis, MD",
  "Frederick, MD",
  "Bel Air, MD",
  "Waldorf, MD",
  "Westminster, MD",
  "Aberdeen, MD",
  "Hagerstown, MD",
  "Salisbury, MD",
  "Arlington, VA",
  "Alexandria, VA",
  "And surrounding communities within 80 miles"
];

/*=========================
   MAPA Y REDES SOCIALES
   =========================*/
$GoogleMap = '<iframe src="https://maps.google.com/maps?q=Laurel%2C%20MD&t=&z=11&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>';
$facebook  = "";
$instagram = "https://www.instagram.com/omar_remodeling_llc";
$google = "";
$tiktok = "";
$messenger = "";

$DirectoryLinks = [
  'bbb' => 'reviews.php',
  'buildzoom' => 'reviews.php',
  'thumbtack' => 'reviews.php',
  'homeadvisor' => 'reviews.php'
];

$GoogleReviews = 'reviews.php';

$DirectoryReviewItems = [
  [
    'name' => 'Angela M.',
    'city' => 'Laurel, MD',
    'stars' => 5,
    'text' => 'They remodeled our bathroom and installed a new door with great workmanship. The team was clean and professional.',
    'source' => 'Website Review',
    'url' => ''
  ],
  [
    'name' => 'David P.',
    'city' => 'Columbia, MD',
    'stars' => 5,
    'text' => 'Kitchen remodeling came out excellent. Communication was clear from estimate to final walkthrough.',
    'source' => 'Website Review',
    'url' => ''
  ],
  [
    'name' => 'Marisol R.',
    'city' => 'Silver Spring, MD',
    'stars' => 5,
    'text' => 'The painting and flooring remodeling were done on time and the final finish looks amazing.',
    'source' => 'Website Review',
    'url' => ''
  ],
  [
    'name' => 'Carlos G.',
    'city' => 'Rockville, MD',
    'stars' => 5,
    'text' => 'We hired them for deck repairs and wood flooring. Quality work and fair pricing.',
    'source' => 'Website Review',
    'url' => ''
  ]
];

$GoogleReviewItems = $DirectoryReviewItems;

$ReviewSourceSummaries = [
  [
    'source' => 'Website Reviews',
    'rating' => '5.0/5',
    'count' => 4,
    'label' => 'Based on recent customer feedback',
    'url' => ''
  ],
  [
    'source' => 'Customer Follow-Up',
    'rating' => '5.0/5',
    'count' => 4,
    'label' => 'Post-project satisfaction responses',
    'url' => ''
  ]
];

$DetailedReviewItems = [
  [
    'name' => 'Angela M.',
    'city' => 'Laurel, MD',
    'stars' => 5,
    'text' => 'They remodeled our bathroom and installed a new door with great workmanship. The team was clean and professional.',
    'source' => 'Website Review',
    'date' => 'January 2026',
    'url' => ''
  ],
  [
    'name' => 'David P.',
    'city' => 'Columbia, MD',
    'stars' => 5,
    'text' => 'Kitchen remodeling came out excellent. Communication was clear from estimate to final walkthrough.',
    'source' => 'Website Review',
    'date' => 'December 2025',
    'url' => ''
  ],
  [
    'name' => 'Marisol R.',
    'city' => 'Silver Spring, MD',
    'stars' => 5,
    'text' => 'The painting and flooring remodeling were done on time and the final finish looks amazing.',
    'source' => 'Website Review',
    'date' => 'November 2025',
    'url' => ''
  ],
  [
    'name' => 'Carlos G.',
    'city' => 'Rockville, MD',
    'stars' => 5,
    'text' => 'We hired them for deck repairs and wood flooring. Quality work and fair pricing.',
    'source' => 'Website Review',
    'date' => 'October 2025',
    'url' => ''
  ]
];
/*=========================
   SEO & BRANDING SLOGANS
   =========================*/
$Phrase = [
  "6 Years of Residential and Commercial Remodeling Services",
  "Bathroom, Flooring, Kitchen Remodeling, Painting, and Door Replacement",
  "Wood Flooring and Deck Services",
  "Fully Insured, Licensed, and Bilingual Support",
  "Free Estimates Within 80 Miles of Laurel, MD"
];

/*=========================
   HOME SECTION
   =========================*/
$Home = [
  "OMAR REMODELING LLC provides residential and commercial remodeling services including bathrooms, kitchens, flooring, painting, doors, wood flooring, and deck work.",
  "With 6 years of experience, our fully insured and licensed team delivers quality workmanship, clear communication, and free estimates."
];

/*=========================
   ABOUT SECTION
   =========================*/
$About = [
  "OMAR REMODELING LLC helps homeowners and businesses improve and renovate their properties with detail-focused craftsmanship and practical planning.",
  "Based in Laurel, MD, we are fully insured and licensed, provide bilingual attention, and cover up to 80 miles for residential and commercial projects."
];

/*=========================
    MISSION & VISION
    =========================*/
$Mission = "To provide high-quality remodeling services with honest communication, efficient scheduling, and durable finishes that improve each client's property.";
$Vision  = "To be the trusted remodeling company in and around Laurel, MD by delivering reliable workmanship, bilingual support, and consistent customer satisfaction.";

/*=========================
   SERVICES SECTION
   =========================*/
$SN = $SD = $ExSD = [];

$SN[1] = "Bathroom Remodeling";
$SD[1] = "Complete bathroom remodeling solutions focused on comfort, clean finishes, and long-term durability.";

$SN[2] = "Flooring Remodeling";
$SD[2] = "Upgrade interior floors with precise installation, quality materials, and detail-focused craftsmanship.";

$SN[3] = "Kitchen Remodeling";
$SD[3] = "Kitchen remodeling designed to improve layout, style, storage, and everyday functionality.";

$SN[4] = "Painting";
$SD[4] = "Interior and exterior painting services delivered with proper preparation and smooth, lasting coverage.";

$SN[5] = "Door Installation & Replacement";
$SD[5] = "Professional door installation and replacement for better security, efficiency, and appearance.";

$SN[6] = "Wood Flooring";
$SD[6] = "Wood flooring installation and upgrades completed with accurate leveling, alignment, and finishing.";

$SN[7] = "Deck Construction & Repair";
$SD[7] = "Deck construction and repair services built for durability, safety, and curb appeal.";

$OtherServices = [
  "Wood Flooring",
  "Deck Construction & Repair"
];

$ServicesByCategory = [
  [
    'label' => 'Core Services',
    'summary_slug' => 'bathroom-remodeling',
    'service_slugs' => [
      'bathroom-remodeling',
      'flooring-remodeling',
      'kitchen-remodeling',
      'painting',
      'door-installation-replacement',
    ]
  ],
  [
    'label' => 'Other Services',
    'summary_slug' => 'other-services',
    'service_slugs' => [
      'wood-flooring',
      'deck-construction-repair'
    ]
  ]
];

$Badges = [
  $Estimates,
  $Experience,
  $Coverage,
  $LicenseNote,
  $BilingualNote
];

/*=========================
   SEO EXTRACTS
   =========================*/
$ExAbout = substr($About[0], 0, 145) . '...';
$ExHome  = substr($Home[0],  0, 95)  . '...';
for ($i = 1; $i <= count($SN); $i++) {
  if (isset($SD[$i])) {
    $ExSD[$i] = substr($SD[$i], 0, 120) . '...';
  }
}

/*=========================
   SERVICE MAP (slugs + URLs)
   =========================*/
$ServicesList = [];
for ($i = 1; $i <= count($SN); $i++) {
  if (empty($SN[$i])) continue;
  $slug = slugify($SN[$i]);
  $ServicesList[$slug] = [
    'id'          => $i,
    'name'        => $SN[$i],
    'description' => $SD[$i] ?? '',
    'excerpt'     => $ExSD[$i] ?? '',
    'slug'        => $slug,
    'file'        => 'services.php',
    'url'         => 'services.php#' . $slug
  ];
}

// Service groups used for section labels and filtering.
$OtherServicesLandingSlugs = [
  'wood-flooring',
  'deck-construction-repair'
];

// Only keep the service set requested by client across the full website.
$PrimaryServiceSlugs = [
  'bathroom-remodeling',
  'flooring-remodeling',
  'kitchen-remodeling',
  'painting',
  'door-installation-replacement'
];
$AllowedServiceSlugs = array_merge($PrimaryServiceSlugs, $OtherServicesLandingSlugs);
foreach (array_keys($ServicesList) as $serviceSlug) {
  if (!in_array($serviceSlug, $AllowedServiceSlugs, true)) {
    unset($ServicesList[$serviceSlug]);
  }
}

$serviceCategoryMap = [];
if (!empty($ServicesByCategory) && is_array($ServicesByCategory)) {
  foreach ($ServicesByCategory as $category) {
    if (!is_array($category)) continue;

    $categoryLabel = trim((string) ($category['label'] ?? 'General'));
    $categorySlug = trim((string) ($category['summary_slug'] ?? ''));
    if ($categorySlug === '') $categorySlug = slugify($categoryLabel);

    $allSlugs = [];
    if (!empty($category['summary_slug'])) {
      $allSlugs[] = trim((string) $category['summary_slug']);
    }

    if (!empty($category['service_slugs']) && is_array($category['service_slugs'])) {
      foreach ($category['service_slugs'] as $serviceSlug) {
        $serviceSlug = trim((string) $serviceSlug);
        if ($serviceSlug !== '') $allSlugs[] = $serviceSlug;
      }
    }

    foreach (array_unique($allSlugs) as $serviceSlug) {
      if ($serviceSlug === '') continue;
      $serviceCategoryMap[$serviceSlug] = [
        'category_slug' => $categorySlug,
        'category_label' => $categoryLabel
      ];
    }
  }
}

foreach ($ServicesList as $serviceSlug => &$serviceData) {
  if (isset($serviceCategoryMap[$serviceSlug])) {
    $serviceData['category_slug'] = $serviceCategoryMap[$serviceSlug]['category_slug'];
    $serviceData['category_label'] = $serviceCategoryMap[$serviceSlug]['category_label'];
  } else {
    $serviceData['category_slug'] = 'general';
    $serviceData['category_label'] = 'General';
  }
}
unset($serviceData);

/*=========================
   DISPLAY SERVICES
   =========================*/
$ServicesDisplayList = [];
if (!empty($ServicesList) && is_array($ServicesList)) {
  $ServicesDisplayList = array_values($ServicesList);
  usort($ServicesDisplayList, static function ($a, $b) {
    return (int) ($a['id'] ?? 0) <=> (int) ($b['id'] ?? 0);
  });
}

/*=========================
   SERVICE DETAIL CONTENT
   =========================*/
$ServiceDetails = [
  'bathroom-remodeling' => [
    'kicker'     => 'Bathroom Remodeling',
    'headline'   => 'Comfortable, modern bathrooms built to last',
    'paragraphs' => [
      'We remodel bathrooms with practical layouts, durable materials, and finishes designed for daily use.',
      'From demolition to final details, our team focuses on clean execution and clear communication.'
    ],
    'bullets'    => [
      'Shower and tub upgrades',
      'Vanity, tile, and fixture installation',
      'Moisture-resistant materials',
      'Clean final finishing'
    ]
  ],
  'flooring-remodeling' => [
    'kicker'     => 'Flooring Remodeling',
    'headline'   => 'Updated floors with precision and clean transitions',
    'paragraphs' => [
      'Our flooring remodeling services improve durability and appearance in residential and commercial spaces.',
      'Each project starts with proper preparation to ensure a level, long-lasting final result.'
    ],
    'bullets'    => [
      'Subfloor prep and leveling',
      'Accurate layout and alignment',
      'Trim and edge detailing',
      'Durable installation standards'
    ]
  ],
  'kitchen-remodeling' => [
    'kicker'     => 'Kitchen Remodeling',
    'headline'   => 'Functional kitchens tailored to your routine',
    'paragraphs' => [
      'We remodel kitchens to improve flow, storage, and daily functionality with quality finishes.',
      'Our process keeps schedule, scope, and craftsmanship aligned from start to final walkthrough.'
    ],
    'bullets'    => [
      'Cabinet and countertop upgrades',
      'Backsplash and surface improvements',
      'Layout and storage optimization',
      'Detail-focused finishing'
    ]
  ],
  'painting' => [
    'kicker'     => 'Painting',
    'headline'   => 'Smooth paint work that refreshes and protects',
    'paragraphs' => [
      'We provide interior and exterior painting with careful preparation and professional application.',
      'Our team delivers clean lines, durable coats, and reliable jobsite organization.'
    ],
    'bullets'    => [
      'Surface prep and priming',
      'Interior and exterior painting',
      'Trim and accent detailing',
      'Final touchups and cleanup'
    ]
  ],
  'door-installation-replacement' => [
    'kicker'     => 'Door Installation & Replacement',
    'headline'   => 'Secure, efficient doors with proper fit and finish',
    'paragraphs' => [
      'We install and replace doors for homes and commercial properties with accurate measurements and dependable workmanship.',
      'Every installation is completed with attention to alignment, operation, and appearance.'
    ],
    'bullets'    => [
      'Interior and exterior door installation',
      'Door replacement and hardware updates',
      'Weather sealing and alignment checks',
      'Clean trim finishing'
    ]
  ],
  'wood-flooring' => [
    'kicker'     => 'Wood Flooring',
    'headline'   => 'Natural wood floors installed for durability and style',
    'paragraphs' => [
      'We install and upgrade wood flooring with careful planning and detail-focused craftsmanship.',
      'Our team ensures smooth transitions, stable fit, and polished final presentation.'
    ],
    'bullets'    => [
      'Wood floor installation',
      'Board alignment and finishing',
      'Transitions and trim work',
      'Clean and protected work areas'
    ]
  ],
  'deck-construction-repair' => [
    'kicker'     => 'Deck Construction & Repair',
    'headline'   => 'Outdoor decks built and restored for safe daily use',
    'paragraphs' => [
      'We build and repair decks with durable framing, secure fastening, and quality finishing.',
      'Each deck project is completed with a focus on safety, long-term performance, and curb appeal.'
    ],
    'bullets'    => [
      'New deck framing and construction',
      'Deck board and structure repairs',
      'Railing and stair improvements',
      'Weather-ready finishing'
    ]
  ]
];

/*=========================
  WHY CHOOSE (Section copy)
  =========================*/
$WhyChoose = [
  'eyebrow' => 'Expertise You Can Trust',
  'title_pre' => 'Why Choose',
  'intro' => 'With 6 years of field experience, we complete residential and commercial remodeling projects with discipline, quality, and clear communication.',
  'cards' => [
    [
      'title' => 'Reliability First',
      'text'  => 'We respect your time. Our bilingual crew provides consistent updates and arrives on-site ready to deliver quality work on your schedule.'
    ],
    [
      'title' => 'Full Coverage',
      'text'  => $LicenseNote . '. We prioritize safety and property protection on every project we handle.'
    ],
    [
      'title' => 'Ready to Transform?',
      'text'  => 'Get professional remodeling solutions with meticulous attention to detail included in every job.',
      'btn'   => [
        'href' => 'contact.php',
        'text' => 'Request Free Estimate'
      ]
    ],
  ],
];

/*=========================
   PAYMENT METHODS
   =========================*/
function paymentList($txt) {
  $parts = array_map('trim', explode(',', $txt));
  return $parts;
}
$PaymentMethods = paymentList($Payment);

/*=========================
   EXPERIENCE CALCULATION
   =========================*/
$ExperienceYears = (int) filter_var($Experience, FILTER_SANITIZE_NUMBER_INT);
if ($ExperienceYears <= 0) $ExperienceYears = 1;

/*=========================
   COPY / UI TEXT
   =========================*/
$NavCopy = [
  'home' => 'Home',
  'about' => 'About',
  'services' => 'Services',
  'projects' => 'Projects',
  'reviews' => 'Reviews',
  'contact' => 'Contact',
  'other_services' => 'Other Services',
  'cta' => 'Get a Free Estimate',
  'cta_mobile' => 'Get a Free Estimate',
  'explore_service' => 'Explore Service',
  'view_services' => 'View Services',
  'contact_today' => 'Contact Us Today',
  'leave_review' => 'Leave a Review',
  'read_reviews' => 'Read Reviews'
];

$HeaderCopy = [
  'menu_close' => 'Close Menu',
  'menu_toggle' => 'Toggle Menu',
  'social_titles' => [
    'facebook' => 'Facebook',
    'messenger' => 'Messenger',
    'google' => 'Google Reviews',
    'instagram' => 'Instagram',
    'tiktok' => 'TikTok',
    'whatsapp' => 'WhatsApp'
  ]
];

$FooterCopy = [
  'desc' => 'Fully insured and licensed residential and commercial remodeling services from Laurel, MD with 80-mile coverage.',
  'titles' => [
    'company' => 'Company',
    'services' => 'Services',
    'contact' => 'Contact Us'
  ],
  'labels' => [
    'location' => 'Location',
    'phone' => 'Phone',
    'hours' => 'Hours'
  ],
  'copyright_suffix' => 'All Rights Reserved.'
];

$PageHeroCopy = [
  'default' => [
    'title' => 'Our Services',
    'desc' => 'Residential and commercial bathroom remodeling, flooring remodeling, kitchen remodeling, painting, door replacement, wood flooring, and deck services.',
    'bg' => 'assets/img/hero/hero1.jpg'
  ],
  'projects' => [
    'title' => 'Our Recent Projects',
    'desc' => 'See how we transform homes and businesses with dependable remodeling results.',
    'bg' => 'assets/img/hero/hero2.jpg'
  ],
  'about' => [
    'title' => 'About ' . $Company,
    'desc' => 'Licensed, insured, and bilingual service you can trust for residential and commercial projects.',
    'bg' => 'assets/img/hero/hero3.jpg'
  ],
  'contact' => [
    'title' => 'Get in Touch',
    'desc' => 'Ready to start your project? Contact us today for a free estimate.',
    'bg' => 'assets/img/hero/hero1.jpg'
  ],
  'reviews' => [
    'title' => 'Customer Reviews',
    'desc' => 'Read verified feedback from clients across our 80-mile coverage area.',
    'bg' => 'assets/img/hero/hero2.jpg'
  ],
  'other' => [
    'title' => 'Other Services',
    'desc' => 'Tell us what you need and we will tailor a solution for your property.',
    'bg' => 'assets/img/hero/hero3.jpg'
  ]
];

$HomeHeroCopy = [
  'headline' => $Company,
  'sub' => 'Trusted remodeling contractors for bathrooms, kitchens, flooring, painting, doors, wood flooring, and decks. We combine disciplined planning, reliable crews, and clean finishes.',
  'cta_primary' => 'Schedule Free Estimate',
  'cta_secondary' => 'Explore Projects',
  'cta_primary_href' => 'contact.php',
  'cta_secondary_href' => 'projects.php',
  'prev_label' => 'Previous slide',
  'next_label' => 'Next slide',
  'slide_alt_prefix' => 'Contractor Project Slide',
  'thumb_alt_prefix' => 'Project Thumbnail'
];

$HomeAboutCopy = [
  'eyebrow' => 'Laurel, MD Residential & Commercial Remodeling',
  'title' => 'Planned for Performance,',
  'title_strong' => 'Built to Last.',
  'description' => 'From bathroom and kitchen remodeling to flooring, painting, doors, wood flooring, and deck work, we execute every scope with structured planning and clear communication.',
  'badge_label' => 'Years in Service',
  'images' => [
    'back' => [
      'src' => 'assets/img/stock/remodel-main.jpg',
      'alt' => 'Remodeling project main image'
    ],
    'front' => [
      'src' => 'assets/img/stock/remodel-detail.jpg',
      'alt' => 'Remodeling project detail image'
    ]
  ],
  'features' => [
    [
      'icon' => 'fa-clipboard-list',
      'title' => 'Scope Planning',
      'text' => 'Clear scope, schedule, and execution sequence before work begins.'
    ],
    [
      'icon' => 'fa-hard-hat',
      'title' => 'Licensed Crew',
      'text' => $LicenseNote
    ],
    [
      'icon' => 'fa-comments',
      'title' => 'Bilingual Support',
      'text' => $BilingualNote
    ],
    [
      'icon' => 'fa-calendar-check',
      'title' => 'On-Time Delivery',
      'text' => 'Structured coordination keeps each phase moving with fewer delays.'
    ]
  ],
  'cta' => 'Learn About Our Team'
];

$AboutHeroCopy = [
  'eyebrow' => 'About ' . $Company,
  'title' => 'Trusted remodeling team based in Laurel, MD',
  'desc' => $About[0],
  'cta_primary' => 'Our Story',
  'cta_primary_href' => '#story',
  'cta_secondary_prefix' => 'Call',
  'meta' => [
    $Experience,
    $Estimates,
    $LicenseNote,
    $BilingualNote
  ],
  'list' => [
    [
      'label' => 'Service area',
      'value' => $Coverage
    ],
    [
      'label' => 'Schedule',
      'value' => $Schedule
    ],
    [
      'label' => 'Core trades',
      'value' => $TypeOfService
    ],
    [
      'label' => 'Licenses',
      'value' => $LicenseNote
    ]
  ]
];

$AboutStoryCopy = [
  'eyebrow' => 'Our Story',
  'title' => 'Built on reliable finishes and clear communication',
  'points' => [
    [
      'title' => 'Licensed & insured',
      'text' => $LicenseNote
    ],
    [
      'title' => 'Bilingual attention',
      'text' => $BilingualNote
    ],
    [
      'title' => 'Free estimates',
      'text' => $Estimates
    ]
  ],
  'actions' => [
    'primary_text' => 'Request an estimate',
    'primary_href' => 'contact.php',
    'secondary_prefix' => 'Call'
  ],
  'stats' => [
    'years_label' => 'Years of Experience',
    'services_label' => 'Core services',
    'areas_label' => 'Service areas',
    'areas_separator' => ', ',
    'areas_preview_count' => 5
  ]
];

$AboutCredentialsCopy = [
  'eyebrow' => 'Why work with us',
  'title' => 'Details that build trust in every project',
  'intro' => 'Every estimate and project includes clear scope and scheduling so homeowners and businesses know exactly who they are hiring.',
  'list' => [
    [
      'label' => 'Contact',
      'value' => $Phone . ' | ' . $Phone2
    ],
    [
      'label' => 'Licensed & insured',
      'value' => $LicenseNote
    ],
    [
      'label' => 'Core services',
      'value' => $TypeOfService
    ],
    [
      'label' => 'Coverage',
      'value' => $Coverage
    ],
    [
      'text' => $Estimates . ' | ' . $BilingualNote
    ]
  ],
  'cta' => [
    'title' => 'Need a fast quote?',
    'desc' => 'Quick answers for bathroom, kitchen, flooring, painting, doors, and deck projects.',
    'primary_text' => 'Start a quote',
    'primary_href' => 'contact.php',
    'secondary_prefix' => 'Call'
  ]
];

$AboutServicesSummaryCopy = [
  'eyebrow' => 'Services',
  'title' => 'What we deliver',
  'desc' => $TypeOfService . ' tailored to properties within 80 miles of Laurel, MD.',
  'link_label' => 'Learn more'
];

$ServicesListCopy = [
  'eyebrow' => 'Scope',
  'title' => 'Core trades we deliver',
  'desc' => $Services,
  'link_label' => 'Learn more'
];

$BrandsCopy = [
  'tagline' => 'Trusted by Clients Across Our 80-Mile Coverage Area'
];

$HomeServicesCopy = [
  'eyebrow' => 'Contractor Services',
  'title' => 'Built for Residential',
  'title_strong' => 'and Commercial Properties',
  'desc' => 'Bathroom remodeling, flooring remodeling, kitchen remodeling, painting, door installation and replacement, wood flooring, and deck services delivered by an organized team.',
  'link_label' => 'View Service',
  'more_title' => 'Need a Custom Scope?',
  'more_desc' => 'Tell us the goal and we will prepare a practical plan with timeline and cost clarity.',
  'more_button' => 'Request a Custom Quote',
  'more_href' => 'contact.php'
];
$HomeMaintenanceCopy = [
  'tagline' => 'Reliable Field Crew',
  'title' => 'Repair, Upgrade,',
  'title_strong' => 'Maintain',
  'desc' => 'Beyond full remodels, we handle targeted upgrades and finishing work that protect long-term property value.',
  'cards' => [
    [
      'icon' => 'fa-hammer',
      'title' => 'Bathroom & Kitchen',
      'text' => 'Complete remodeling updates focused on function, layout, and durable finishes.',
      'action' => 'See Details'
    ],
    [
      'icon' => 'fa-paint-roller',
      'title' => 'Flooring Solutions',
      'text' => 'Flooring remodeling and wood flooring installation with clean transitions and precision.',
      'action' => 'See Details'
    ],
    [
      'icon' => 'fa-tools',
      'title' => 'Painting & Doors',
      'text' => 'Interior and exterior painting plus door installation and replacement done right.',
      'action' => 'See Details'
    ],
    [
      'icon' => 'fa-clipboard-check',
      'title' => 'Deck Services',
      'text' => 'Deck construction and repairs for safe, durable, and attractive outdoor spaces.',
      'action' => 'See Details'
    ]
  ],
  'foundation' => [
    [
      'icon' => 'fa-file-signature',
      'title' => $Estimates,
      'subtitle' => 'Clear Scope and Pricing'
    ],
    [
      'icon' => 'fa-shield-alt',
      'title' => 'Licensed Contractor',
      'subtitle' => 'Insured and Protected'
    ],
    [
      'icon' => 'fa-star',
      'title' => $ExperienceYears . '+ Years',
      'subtitle' => 'Field-Proven Results'
    ]
  ]
];

$WhyCopy = [
  'badge' => 'Trusted Remodeling Choice',
  'title_prefix' => 'Why Property Owners Choose',
  'description' => 'Our process is built around planning discipline, direct communication, and accountable execution from estimate to completion.',
  'stats' => [
    [
      'value' => $ExperienceYears . '+',
      'label' => 'Years in Business'
    ],
    [
      'value' => count($ServicesList) . '+',
      'label' => 'Services Offered'
    ],
    [
      'value' => 'Insured & Licensed',
      'label' => 'Licensed & Insured'
    ]
  ],
  'service_area_label' => 'Coverage, License, and Protection',
  'features' => [
    [
      'icon' => 'fa-comments',
      'title' => 'Clear Communication',
      'text' => $BilingualNote . '. Direct updates through each project phase.'
    ],
    [
      'icon' => 'fa-file-invoice-dollar',
      'title' => 'Transparent Proposals',
      'text' => $Estimates . '. Practical pricing with detailed scope and no surprises.'
    ],
    [
      'icon' => 'fa-shield-alt',
      'title' => 'Risk Control',
      'text' => $LicenseNote . '. Safety and site protection are part of every scope.'
    ],
    [
      'icon' => 'fa-clock',
      'title' => 'Consistent Scheduling',
      'text' => 'Coordinated crews and milestone-based planning keep projects on track.'
    ]
  ],
  'cta_label' => 'Book a Free Estimate'
];

$MissionCopy = [
  'mission_title' => 'Our Mission',
  'vision_title' => 'Our Vision'
];

$ProcessCopy = [
  'title' => 'How We Deliver',
  'title_strong' => 'Consistent Results',
  'desc' => 'Our workflow is simple, transparent, and built to protect schedule, quality, and communication at every stage.',
  'steps' => [
    [
      'icon' => 'fa-clipboard-list',
      'title' => 'Site Consultation',
      'text' => 'We evaluate the property, goals, and constraints, then define a clear path forward.'
    ],
    [
      'icon' => 'fa-pencil-ruler',
      'title' => 'Scope and Schedule',
      'text' => 'We finalize budget, materials, and timeline so expectations are aligned before work begins.'
    ],
    [
      'icon' => 'fa-hammer',
      'title' => 'Build Phase',
      'text' => 'Licensed crews execute each phase with jobsite control, quality checks, and progress updates.'
    ],
    [
      'icon' => 'fa-check-circle',
      'title' => 'Final Walkthrough',
      'text' => 'We review all completed work, confirm punch-list items, and close out with confidence.'
    ]
  ]
];

$FaqCopy = [
  'title' => 'Frequently Asked Questions',
  'items' => [
    [
      'q' => 'Do you provide free estimates?',
      'a' => 'Yes. We offer free, no-obligation estimates for all residential and commercial services.'
    ],
    [
      'q' => 'Are you fully insured and licensed?',
      'a' => $LicenseNote
    ],
    [
      'q' => 'How quickly can you start a project?',
      'a' => 'Start dates depend on project scope and current schedule. We provide timeline availability during your estimate.'
    ],
    [
      'q' => 'Do you handle commercial properties?',
      'a' => 'Yes. Our team serves both homeowners and commercial clients within our 80-mile coverage area.'
    ]
  ]
];

$AreasCopy = [
  'title' => 'Serving',
  'title_strong' => 'Laurel and Nearby Areas',
  'subtitle' => 'Coverage includes Laurel, Baltimore, Columbia, Silver Spring, Rockville, and surrounding communities within 80 miles.',
  'cta_label' => 'Request Service in Your Area',
  'map_overlay' => 'Active Service Coverage',
  'license_pills' => [
    'Fully Insured',
    'Licensed Team',
    'Residential & Commercial'
  ]
];
$CtaCopy = [
  'badge' => $ExperienceYears . '+ Years in Contracting',
  'title' => 'Ready to Upgrade',
  'title_strong' => 'Your Property?',
  'paragraph' => 'From bathroom and kitchen remodeling to flooring, painting, door replacement, wood flooring, and deck services, ' . $Company . ' delivers durable results within 80 miles of Laurel, MD.',
  'features' => [
    'Licensed and Insured',
    'Bilingual Team',
    'Free Detailed Estimates'
  ],
  'button' => 'Request Your Estimate',
  'card_title' => 'Speak With Our Team',
  'card_subtitle' => 'Fast responses for new project requests',
  'row_call_label' => 'Call for a project quote',
  'row_license_label' => 'License and insurance',
  'row_license_title' => 'Fully Insured & Licensed Team',
  'row_service_label' => 'Coverage Area',
  'whatsapp_button' => 'WhatsApp Us',
  'book_button' => 'Start Request'
];

$ContactFormCopy = [
  'eyebrow' => 'Plan Your Project',
  'title' => "Let's Remodel",
  'title_strong' => 'With Precision.',
  'desc' => 'Tell us what you need and our team will prepare a practical estimate with clear next steps.',
  'method_labels' => [
    'call' => 'Call or Text',
    'hours' => 'Business Hours'
  ],
  'form_labels' => [
    'name' => 'Name',
    'phone' => 'Phone',
    'email' => 'Email',
    'service' => 'Service',
    'message' => 'Project Details'
  ],
  'placeholders' => [
    'service' => 'Select service type',
    'service_other' => 'Other / Custom Request',
    'message' => 'Describe location, scope, and target timeline...'
  ],
  'submit' => 'Send Estimate Request',
  'honeypot_label' => 'Leave this field empty'
];

$MapCopy = [
  'title' => 'Locate',
  'title_strong' => 'Omar Remodeling',
  'labels' => [
    'location' => 'Service Base',
    'call' => 'Phone',
    'hours' => 'Hours'
  ]
];

$TestimonialsCopy = [
  'title' => 'Verified Feedback',
  'title_strong' => 'From Real Clients',
  'desc' => 'Read homeowner and business feedback from recent projects completed across our 80-mile coverage area.',
  'button_label' => 'Read More Reviews',
  'button_href' => 'reviews.php',
  'fallback_name' => 'Verified Client'
];

$TrustedDirectoriesCopy = [
  'eyebrow' => 'Trusted Feedback Sources',
  'title' => 'Client Satisfaction Highlights',
  'desc' => 'Explore customer feedback collected from website reviews and post-project follow-up.',
  'cards' => [
    [
      'icon' => 'fa-award',
      'subtitle' => 'Website',
      'title' => 'Website Reviews',
      'text' => 'Read direct feedback shared by our residential and commercial clients.',
      'url' => 'reviews.php',
      'tags' => ['Client Feedback', 'Verified Responses']
    ],
    [
      'icon' => 'fa-building',
      'subtitle' => 'Follow-Up',
      'title' => 'Post-Project Surveys',
      'text' => 'See customer satisfaction highlights collected after project completion.',
      'url' => 'reviews.php',
      'tags' => ['Quality Control', 'Project Follow-Up']
    ],
    [
      'icon' => 'fa-thumbs-up',
      'subtitle' => 'Residential',
      'title' => 'Homeowner Experiences',
      'text' => 'Explore service feedback from bathroom, kitchen, flooring, painting, and door projects.',
      'url' => 'reviews.php',
      'tags' => ['Home Projects', 'Service Quality']
    ],
    [
      'icon' => 'fa-house',
      'subtitle' => 'Commercial',
      'title' => 'Business Client Feedback',
      'text' => 'Read comments from commercial clients who trusted our team with property upgrades.',
      'url' => 'reviews.php',
      'tags' => ['Commercial Work', 'Trusted Service']
    ]
  ]
];
$ReviewsPageCopy = [
  'hero_title' => 'Customer Reviews',
  'hero_subtitle' => 'See what homeowners and businesses across our 80-mile service area say about working with us.',
  'hero_image' => 'assets/img/stock/vision-crew.jpg',
  'list_eyebrow' => 'Reviews',
  'list_title' => 'What Our Clients Say',
  'list_desc' => 'Recent feedback from homeowners and businesses, including comments submitted directly through our website.',
  'list_cta' => 'Leave a Review'
];

$ReviewFormCopy = [
  'title' => 'Share Your Experience',
  'subtitle' => 'We value your feedback and would love to hear about your project.',
  'success_title' => 'Thank You!',
  'success_message' => 'Your review has been submitted successfully.',
  'error_title' => 'Error!',
  'captcha_error' => 'Incorrect security code. Please try again.',
  'labels' => [
    'name' => 'Your Name',
    'city' => 'City / Location',
    'rating' => 'Rating',
    'rating_hint' => '(Select stars)',
    'review' => 'Your Review',
    'security' => 'Security Check',
    'refresh' => 'Refresh',
    'captcha' => 'Enter the code shown above'
  ],
  'captcha_alt' => 'Captcha image',
  'placeholders' => [
    'name' => '',
    'city' => 'e.g. Laurel, MD',
    'review' => 'Tell us how we did...'
  ],
  'submit' => 'Submit Review'
];

$GalleryHeroCopy = [
  'eyebrow' => 'Our Gallery',
  'title' => 'Capturing the Craft of Every Project',
  'desc' => 'Explore how ' . $Company . ' transforms homes and businesses across our coverage area. Each project reflects over ' . $ExperienceYears . ' years of craftsmanship, attention to detail, and passion for quality.',
  'cta_text' => 'Request Free Estimate',
  'cta_href' => 'contact.php'
];

$ProjectsIntroCopy = [
  'label' => 'Our Portfolio',
  'title_line1' => 'Building',
  'title_line2' => 'Excellence.',
  'outline_line1' => 'One Detail',
  'outline_line2' => 'At A Time.',
  'desc' => 'At ' . $Company . ', every project reflects organized planning and skilled workmanship. Explore recent work across our 80-mile coverage area.',
  'stats' => [
    [
      'value' => $ExperienceYears . '+',
      'label' => 'Years of Experience'
    ],
    [
      'value' => count($ServicesList) . '+',
      'label' => 'Services Offered'
    ],
    [
      'value' => count($Areas),
      'label' => 'Cities Served'
    ]
  ]
];

$ProjectsBeforeAfterCopy = [
  'eyebrow' => 'Transformations',
  'title' => 'Before & After',
  'desc' => 'See the difference professional craftsmanship makes.',
  'before_label' => 'Before',
  'after_label' => 'After'
];

$ProjectsStatsCopy = [
  'items' => [
    [
      'icon' => 'fa-hourglass-half',
      'value' => $ExperienceYears . '+',
      'label' => 'Years of Excellence'
    ],
    [
      'icon' => 'fa-hammer',
      'value' => count($ServicesList) . '+',
      'label' => 'Specialized Services'
    ],
    [
      'icon' => 'fa-map-location-dot',
      'value' => count($Areas),
      'label' => 'Cities Served'
    ],
    [
      'icon' => 'fa-id-card',
      'value' => 'Insured & Licensed',
      'label' => 'Licensed & Insured'
    ]
  ]
];

$ProjectsGalleryCopy = [
  'eyebrow' => 'Project Gallery',
  'title' => 'Selected Work &',
  'title_strong' => 'Recent Projects',
  'videos_label' => 'Videos',
  'empty' => 'Projects coming soon.',
  'image_title' => 'Project Photo',
  'video_title' => 'Project Video'
];
$ServiceHeroCopy = [
  'badge' => 'Premium Service',
  'cta_primary' => 'Get Free Estimate',
  'cta_secondary' => 'Explore Service'
];

$ServiceIntroCopy = [
  'eyebrow' => 'Our Methodology',
  'title' => 'How We Deliver',
  'title_strong' => 'Quality Work',
  'desc' => 'We follow a structured process so you always know what to expect from start to finish.',
  'steps' => [
    [
      'icon' => 'fa-comments',
      'title' => 'Consultation',
      'text' => 'We start with a free estimate and a clear scope of work.'
    ],
    [
      'icon' => 'fa-pencil-ruler',
      'title' => 'Plan & Design',
      'text' => 'Materials and details are selected to match your goals and budget.'
    ],
    [
      'icon' => 'fa-hammer',
      'title' => 'Execution',
      'text' => 'Our licensed crew completes the work with clean job sites and reliable scheduling.'
    ]
  ]
];

$ServiceDetailsCopy = [
  'badge_title' => 'Omar Remodeling Guarantee',
  'badge_subtitle' => 'Satisfaction Focused',
  'title_prefix' => 'Professional',
  'button' => 'Get Free Estimate'
];

$ServiceFaqCopy = [
  'eyebrow' => 'Common Questions',
  'title' => 'Info About Our',
  'title_strong' => 'Remodeling Process',
  'items' => [
    [
      'icon' => 'fa-hourglass-half',
      'question' => 'How long does a typical project take?',
      'answer' => 'Timelines vary by scope. We provide a detailed schedule during your estimate so you know what to expect.'
    ],
    [
      'icon' => 'fa-file-invoice-dollar',
      'question' => 'Is the estimate really free?',
      'answer' => 'Yes. ' . $Company . ' provides free estimates and transparent proposals with no obligation.'
    ],
    [
      'icon' => 'fa-shield-halved',
      'question' => 'Are you licensed and insured?',
      'answer' => $LicenseNote . '. We carry liability coverage to protect your property and our crews.'
    ],
    [
      'icon' => 'fa-layer-group',
      'question' => 'Do you help with materials and permits?',
      'answer' => 'Yes. We help source materials and can assist with permits as needed for your project.'
    ]
  ],
  'footer' => 'Have a different question? Contact our team directly'
];

$ServiceCtaCopy = [
  'tag' => 'Ready to Build?',
  'title' => "Let's Transform Your",
  'title_strong' => 'Property Today',
  'paragraph' => 'Get a free, detailed estimate for your %s within 80 miles of Laurel, MD. Our licensed and insured team is ready to deliver precision and quality.',
  'subject_fallback' => 'project',
  'features' => ['Licensed', 'Insured', $Experience],
  'primary' => 'Get Free Estimate',
  'secondary_prefix' => 'Call'
];

$OtherServicesCopy = [
  'label' => 'Additional Services',
  'title' => 'More Ways We Can Help',
  'title_strong' => 'Your Property',
  'item_note' => 'Professional installation and finishing.',
  'cta_title' => 'Have a specific request?',
  'cta_text' => 'From repairs to custom upgrades, we handle the details.',
  'cta_button' => $Estimates,
  'page_desc' => 'Additional service options tailored to your property needs.'
];
$FounderCopy = [
  'title' => 'A Note from',
  'title_strong' => 'The Founder',
  'quote' => 'At ' . $Company . ', we believe remodeling is about trust. For over ' . $Experience . ', our commitment has been to treat every property as if it were our own, delivering durability, quality, and peace of mind.',
  'role' => 'Owner & Lead Contractor',
  'image_alt' => $CustomerName
];
$AriaCopy = [
  'call' => 'Click to call',
  'primary_nav' => 'Primary navigation',
  'whatsapp' => 'WhatsApp',
  'messenger' => 'Messenger',
  'facebook' => 'Facebook',
  'instagram' => 'Instagram',
  'google' => 'Google Maps',
  'tiktok' => 'TikTok',
  'email' => 'Email'
];
$TestimonialsPageCopy = [
  'eyebrow' => $NavCopy['reviews'] ?? 'Reviews',
  'title' => 'What Clients Say',
  'desc' => 'Trusted feedback from homeowners and businesses across our 80-mile coverage area.',
  'card_title' => 'Read Verified Reviews',
  'card_desc' => 'See feedback from website reviews and post-project follow-up.',
  'card_button' => $NavCopy['read_reviews'] ?? 'Read Reviews',
  'card_link' => 'reviews.php'
];
$ThankYouCopy = [
  'title' => 'Thank You',
  'description' => 'Thank you for contacting ' . $Company . '. We will be in touch shortly.',
  'eyebrow' => 'Thank You',
  'headline' => 'We received your request',
  'body' => 'Thank you for contacting ' . $Company . '. Our team will reach out soon to confirm project details.',
  'cta_call' => 'Click to Call',
  'cta_home' => 'Back to Home'
];
$LabelsCopy = [
  'service_areas' => 'Service Areas',
  'call' => 'Call',
  'email' => 'Email'
];
/*=========================
   CSS VARIABLES
   =========================*/
$BrandCSSVars = sprintf(
  ':root{--brand-primary:%s;--brand-secondary:%s;--brand-white:%s;--brand-accent:%s;--brand-neutral:%s;--brand-primary-rgb:%s;--brand-secondary-rgb:%s;--brand-accent-rgb:%s;}',
  $BrandColors["primary"],
  $BrandColors["secondary"],
  $BrandColors["white"],
  $BrandColors["accent"],
  $BrandColors["neutral"],
  $BrandColors["primary_rgb"],
  $BrandColors["secondary_rgb"],
  $BrandColors["accent_rgb"]
);

$BrandCSSVars .= <<<CSS
body{
  background: linear-gradient(180deg, var(--brand-neutral) 0%, #e3eaf2 100%);
}
#hero-4.hero4{
  background: linear-gradient(130deg, var(--brand-secondary) 0%, var(--brand-primary) 58%, #2a2a2a 100%) !important;
}
#hero-4 .hero4__slides::after{
  background: linear-gradient(to bottom, rgba(var(--brand-secondary-rgb),0.75) 0%, rgba(var(--brand-secondary-rgb),0.48) 42%, rgba(var(--brand-secondary-rgb),0.82) 100%) !important;
}
#hero-4 .hero4__content{
  background: linear-gradient(145deg, rgba(var(--brand-secondary-rgb),0.9), rgba(var(--brand-primary-rgb),0.72)) !important;
  border: 1px solid rgba(var(--brand-accent-rgb),0.45) !important;
}
#hero-4 .hero4__content::before{
  background: radial-gradient(120% 140% at 0% 0%, rgba(var(--brand-accent-rgb),0.2), transparent 62%) !important;
}
#hero-4 .hero4__btn--primary{
  background: var(--brand-accent) !important;
  color: var(--brand-secondary) !important;
}
#hero-4 .hero4__btn--ghost{
  border-color: rgba(var(--brand-accent-rgb),0.7) !important;
  background: rgba(var(--brand-secondary-rgb),0.24) !important;
}
#hero-4 .hero4__thumb.active,
#hero-4 .hero4__arrow:hover{
  border-color: var(--brand-accent) !important;
}

.section-about-arch,
.section-services-premium,
.section-maint-pro,
.mission-vision-section,
.faq-section{
  background: linear-gradient(180deg, #f8fbff 0%, var(--brand-neutral) 100%) !important;
}
.section-remodel-why,
.section-process,
.section-areas,
.cta-premium-section,
.section-contact-premium,
.section-map-contact{
  background: linear-gradient(135deg, color-mix(in srgb, var(--brand-secondary) 92%, #000 8%) 0%, color-mix(in srgb, var(--brand-primary) 78%, #000 22%) 100%) !important;
}

.section-about-arch .arch-eyebrow,
.section-services-premium .sv-eyebrow,
.section-maint-pro .tagline,
.section-remodel-why .sub-badge,
.section-process .step-icon,
.section-areas .license-pill,
.section-areas .city-icon,
.cta-premium-section .cta-badge,
.section-contact-premium .ct-eyebrow,
.section-map-contact .info-icon{
  color: var(--brand-accent) !important;
  border-color: rgba(var(--brand-accent-rgb),0.55) !important;
}
.section-about-arch .arch-eyebrow::before,
.section-services-premium .sv-eyebrow::before,
.section-services-premium .sv-eyebrow::after,
.section-contact-premium .ct-eyebrow::before{
  background: var(--brand-accent) !important;
}

.section-about-arch .content-arch h2 strong,
.section-services-premium .sv-header h2 strong,
.section-maint-pro .pro-header h2 strong{
  color: var(--brand-primary) !important;
}
.section-remodel-why .why-header h2 strong,
.section-process .process-header h2 span,
.section-areas .areas-content h2 strong,
.cta-premium-section .cta-content h2 strong,
.section-map-contact .contact-card h3 span{
  color: var(--brand-accent) !important;
}

.section-services-premium .sv-card,
.section-maint-pro .maint-card-dark,
.section-remodel-why .feature-card,
.section-process .process-step,
.section-areas .map-frame-wrapper,
.section-contact-premium .ct-form-wrapper,
.cta-premium-section .contact-glass-card,
.section-map-contact .contact-card{
  border-radius: 16px !important;
}
.section-services-premium .sv-card:hover,
.section-maint-pro .maint-card-dark:hover,
.section-remodel-why .feature-card:hover,
.section-process .process-step:hover{
  box-shadow: 0 22px 48px rgba(var(--brand-secondary-rgb),0.26) !important;
}

.section-about-arch .btn-arch,
.section-remodel-why .btn-gold,
.section-areas .btn-area,
.cta-premium-section .btn-cta-primary,
.section-contact-premium .btn-submit-arch,
.section-services-premium .btn-sv-accent{
  border-radius: 999px !important;
}
.section-about-arch .btn-arch,
.section-remodel-why .btn-gold,
.cta-premium-section .btn-cta-primary,
.section-contact-premium .btn-submit-arch{
  background: var(--brand-accent) !important;
  color: var(--brand-secondary) !important;
  border-color: var(--brand-accent) !important;
}
.section-about-arch .btn-arch:hover,
.section-remodel-why .btn-gold:hover,
.cta-premium-section .btn-cta-primary:hover,
.section-contact-premium .btn-submit-arch:hover{
  background: color-mix(in srgb, var(--brand-accent) 84%, #fff 16%) !important;
  color: var(--brand-secondary) !important;
}
.section-areas .btn-area{
  border-color: var(--brand-accent) !important;
  color: var(--brand-accent) !important;
}
.section-areas .btn-area:hover{
  background: var(--brand-accent) !important;
  color: var(--brand-secondary) !important;
}
.section-contact-premium .form-control-arch:focus{
  border-bottom-color: var(--brand-accent) !important;
}
.section-map-contact .map-background iframe{
  filter: grayscale(78%) invert(88%) contrast(0.82) !important;
}
CSS;
?>
