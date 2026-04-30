<?php
@session_start();

/*=========================
  PAGE NAME (Routing simple)
  =========================*/
$full_name  = $_SERVER['PHP_SELF'] ?? '';
$name_array = explode('/', $full_name);
$count      = count($name_array);
$page_name  = $name_array[$count - 1] ?? '';

if      ($page_name == 'index.php')        { $namepage = 'Home'; }
elseif ($page_name == 'about.php')         { $namepage = 'About'; }
elseif ($page_name == 'services.php')      { $namepage = 'Services'; }
elseif ($page_name == 'testimonials.php')  { $namepage = 'Reviews'; }
elseif ($page_name == 'reviews.php')       { $namepage = 'Reviews'; }
elseif ($page_name == 'projects.php')      { $namepage = 'Projects'; }
elseif ($page_name == 'thank-you.php')     { $namepage = 'Thank You'; }
elseif ($page_name == '404.php')           { $namepage = 'Not Found'; }
elseif ($page_name == 'contact.php')       { $namepage = 'Contact'; }
else                                       { $namepage = ucfirst(str_replace('.php', '', $page_name)); }

/*=========================
  INFO GENERAL - BRD SERVICES LLC
  =========================*/
$Company       = 'BRD Services LLC';
$CustomerName  = 'BRD Services';

function detectBaseURL() {
  $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $script = $_SERVER['SCRIPT_NAME'] ?? '';
  $dir    = rtrim(str_replace('\\', '/', dirname($script)), '/.');
  $path   = $dir ? $dir . '/' : '/';
  return $scheme . '://' . $host . $path;
}

$BaseURL   = rtrim(detectBaseURL(), '/') . '/';
$Domain    = $BaseURL;
$MAVEN     = 'go-maven.com';
$Address   = 'Lawrenceville, GA';
$PhoneName = 'Main Line';
$Phone2Name = 'Free Estimate';

$Phone     = '+1 (770) 771-9553';
$Phone2    = '+1 (770) 771-9553';

function telRef($p) {
  $clean = str_replace(str_split('()-/\\:?"<>|., '), '', $p);
  return 'tel:' . $clean;
}
$PhoneRef  = telRef($Phone);
$PhoneRef2 = telRef($Phone2 ?? '');

function slugify($text) {
  $text = strtolower(trim($text));
  $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
  return trim($text, '-') ?: 'service';
}

$whatsapp_num = preg_replace('/\D+/', '', $Phone);
if (strpos($whatsapp_num, '1') !== 0) { $whatsapp_num = '1' . $whatsapp_num; }
$whatsapp = "https://api.whatsapp.com/send?phone=$whatsapp_num&text=Hello%20BRD%20Services!%20I%20would%20like%20a%20free%20estimate%20for%20fence%20or%20deck%20work.";

$Mail    = 'brdservicesllc04@gmail.com';
$MailRef = 'mailto:' . $Mail;

/*=========================
  GENERAL MESSAGES
  =========================*/
$Services       = 'Fence installation and repair, deck build and repair, fence staining, and deck staining';
$Estimates      = 'Call for Free Estimates';
$Payment        = 'Cash, Zelle, Card';
$Experience     = '2+ Years';
$Schedule       = 'Hours available by phone. Call to schedule your free estimate.';
$Coverage       = 'Based in Lawrenceville, Georgia, serving surrounding Gwinnett County areas and Greene, Barrow, Forsyth, Oconee, and Putnam county areas.';
$LicenseNote    = 'Founded in May 2024';
$BilingualNote  = 'Direct, reliable customer service';
$TypeOfService  = 'Fence and deck services';

/*=========================
  BRAND COLORS
  =========================*/
$BrandColors = [
  'primary'       => '#9A5B2B',
  'primary_rgb'   => '154, 91, 43',
  'secondary'     => '#1F2428',
  'secondary_rgb' => '31, 36, 40',
  'accent'        => '#D7A24A',
  'accent_rgb'    => '215, 162, 74',
  'neutral'       => '#F4EFE6',
  'white'         => '#FFFFFF'
];

/*=========================
  SERVICE AREAS
  =========================*/
$Areas = [
  'Lawrenceville, GA',
  'Gwinnett County, GA',
  'Surrounding Gwinnett County areas',
  'Greene County, GA',
  'Barrow County, GA',
  'Forsyth County, GA',
  'Oconee County, GA',
  'Putnam County, GA'
];

/*=========================
  MAPA Y REDES SOCIALES
  =========================*/
$GoogleMap = '<iframe src="https://maps.google.com/maps?q=Lawrenceville%2C%20GA&t=&z=10&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>';
$facebook  = '';
$instagram = '';
$google    = '';
$tiktok    = '';
$messenger = '';

$DirectoryLinks = [
  'bbb'         => 'reviews.php',
  'buildzoom'   => 'reviews.php',
  'thumbtack'   => 'reviews.php',
  'homeadvisor' => 'reviews.php'
];

$GoogleReviews = 'reviews.php';

$DirectoryReviewItems = [
  [
    'name'   => 'Homeowner in Lawrenceville',
    'city'   => 'Lawrenceville, GA',
    'stars'  => 5,
    'text'   => 'BRD Services repaired our fence quickly and left everything clean. Great communication from start to finish.',
    'source' => 'Website Review',
    'url'    => ''
  ],
  [
    'name'   => 'Deck Client',
    'city'   => 'Gwinnett County, GA',
    'stars'  => 5,
    'text'   => 'The deck repair and stain work came out great. The estimate process was simple and the work looked professional.',
    'source' => 'Website Review',
    'url'    => ''
  ],
  [
    'name'   => 'Fence Stain Customer',
    'city'   => 'Barrow County, GA',
    'stars'  => 5,
    'text'   => 'We hired BRD Services to stain our fence and the final finish looked excellent.',
    'source' => 'Website Review',
    'url'    => ''
  ],
  [
    'name'   => 'Porch & Deck Owner',
    'city'   => 'Forsyth County, GA',
    'stars'  => 5,
    'text'   => 'They helped with our deck build project and answered every question clearly. We would hire them again.',
    'source' => 'Website Review',
    'url'    => ''
  ]
];

$GoogleReviewItems = $DirectoryReviewItems;

$ReviewSourceSummaries = [
  [
    'source' => 'Website Reviews',
    'rating' => '5.0/5',
    'count'  => 4,
    'label'  => 'Based on recent customer feedback',
    'url'    => ''
  ],
  [
    'source' => 'Project Follow-Up',
    'rating' => '5.0/5',
    'count'  => 4,
    'label'  => 'Customer responses after fence and deck work',
    'url'    => ''
  ]
];

$DetailedReviewItems = [
  [
    'name'   => 'Homeowner in Lawrenceville',
    'city'   => 'Lawrenceville, GA',
    'stars'  => 5,
    'text'   => 'BRD Services repaired our fence quickly and left everything clean. Great communication from start to finish.',
    'source' => 'Website Review',
    'date'   => 'April 2026',
    'url'    => ''
  ],
  [
    'name'   => 'Deck Client',
    'city'   => 'Gwinnett County, GA',
    'stars'  => 5,
    'text'   => 'The deck repair and stain work came out great. The estimate process was simple and the work looked professional.',
    'source' => 'Website Review',
    'date'   => 'March 2026',
    'url'    => ''
  ],
  [
    'name'   => 'Fence Stain Customer',
    'city'   => 'Barrow County, GA',
    'stars'  => 5,
    'text'   => 'We hired BRD Services to stain our fence and the final finish looked excellent.',
    'source' => 'Website Review',
    'date'   => 'February 2026',
    'url'    => ''
  ],
  [
    'name'   => 'Porch & Deck Owner',
    'city'   => 'Forsyth County, GA',
    'stars'  => 5,
    'text'   => 'They helped with our deck build project and answered every question clearly. We would hire them again.',
    'source' => 'Website Review',
    'date'   => 'January 2026',
    'url'    => ''
  ]
];

/*=========================
  SEO & BRANDING SLOGANS
  =========================*/
$Phrase = [
  'Fence and Deck Services in Lawrenceville, GA',
  'Fence Installation and Repair',
  'Deck Build and Repair',
  'Fence and Deck Staining',
  'Free Estimates Available'
];

/*=========================
  HOME / ABOUT
  =========================*/
$Home = [
  'BRD Services LLC provides fence installation and repair, deck build and repair, fence staining, and deck staining in Lawrenceville, Georgia and nearby county areas.',
  'Founded in May 2024, BRD Services focuses on quality workmanship, clean finishes, and dependable service for homeowners who need deck and fence work done right.'
];

$About = [
  'BRD Services LLC is a local fence and deck company based in Lawrenceville, Georgia.',
  'We serve surrounding Gwinnett County areas and Greene, Barrow, Forsyth, Oconee, and Putnam county areas with practical solutions for fences, decks, and exterior wood staining.'
];

$Mission = 'To deliver reliable fence and deck services with honest communication, quality workmanship, and clean results for every property.';
$Vision  = 'To become a trusted local name in Lawrenceville and nearby Georgia counties for fence and deck construction, repair, and staining.';

/*=========================
  SERVICES SECTION
  =========================*/
$SN = $SD = $ExSD = [];

$SN[1] = 'Fence Installation & Repair';
$SD[1] = 'Fence installation and fence repair services for homeowners who need privacy, safety, and a clean finished look.';

$SN[2] = 'Deck Build & Repair';
$SD[2] = 'Deck and porch build or repair work focused on durable structure, functionality, and appearance.';

$SN[3] = 'Fence Staining';
$SD[3] = 'Fence staining to protect wood, improve color, and extend the life of your exterior fence.';

$SN[4] = 'Deck Staining';
$SD[4] = 'Deck staining for a refreshed finish that helps protect your deck from weather and wear.';

$OtherServices = [
  'Fence Staining',
  'Deck Staining'
];

$ServicesByCategory = [
  [
    'label' => 'Build & Repair',
    'summary_slug' => 'fence-installation-repair',
    'service_slugs' => [
      'fence-installation-repair',
      'deck-build-repair'
    ]
  ],
  [
    'label' => 'Staining Services',
    'summary_slug' => 'fence-staining',
    'service_slugs' => [
      'fence-staining',
      'deck-staining'
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

$ExAbout = substr($About[0], 0, 145) . '...';
$ExHome  = substr($Home[0],  0, 95)  . '...';
for ($i = 1; $i <= count($SN); $i++) {
  if (isset($SD[$i])) $ExSD[$i] = substr($SD[$i], 0, 120) . '...';
}

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

$OtherServicesLandingSlugs = [
  'fence-staining',
  'deck-staining'
];

$PrimaryServiceSlugs = [
  'fence-installation-repair',
  'deck-build-repair'
];
$AllowedServiceSlugs = array_merge($PrimaryServiceSlugs, $OtherServicesLandingSlugs);
foreach (array_keys($ServicesList) as $serviceSlug) {
  if (!in_array($serviceSlug, $AllowedServiceSlugs, true)) unset($ServicesList[$serviceSlug]);
}

$serviceCategoryMap = [];
foreach ($ServicesByCategory as $category) {
  $categoryLabel = trim((string) ($category['label'] ?? 'General'));
  $categorySlug = trim((string) ($category['summary_slug'] ?? ''));
  if ($categorySlug === '') $categorySlug = slugify($categoryLabel);
  $allSlugs = [];
  if (!empty($category['summary_slug'])) $allSlugs[] = trim((string) $category['summary_slug']);
  foreach (($category['service_slugs'] ?? []) as $serviceSlug) {
    $serviceSlug = trim((string) $serviceSlug);
    if ($serviceSlug !== '') $allSlugs[] = $serviceSlug;
  }
  foreach (array_unique($allSlugs) as $serviceSlug) {
    $serviceCategoryMap[$serviceSlug] = [
      'category_slug'  => $categorySlug,
      'category_label' => $categoryLabel
    ];
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

$ServicesDisplayList = array_values($ServicesList);
usort($ServicesDisplayList, static function ($a, $b) {
  return (int) ($a['id'] ?? 0) <=> (int) ($b['id'] ?? 0);
});

$ServiceDetails = [
  'fence-installation-repair' => [
    'kicker' => 'Fence Services',
    'headline' => 'Fence installation and repair done with care',
    'paragraphs' => [
      'We install and repair fences for homeowners who want better privacy, security, and curb appeal.',
      'BRD Services focuses on practical solutions and clean finished work for each property.'
    ],
    'bullets' => ['Fence installation', 'Fence repair', 'Residential projects', 'Free estimates']
  ],
  'deck-build-repair' => [
    'kicker' => 'Deck Services',
    'headline' => 'Deck build and repair for lasting outdoor spaces',
    'paragraphs' => [
      'We build and repair decks and porch areas to improve function, comfort, and appearance.',
      'Our goal is to deliver solid work that helps homeowners enjoy their outdoor living spaces.'
    ],
    'bullets' => ['Deck build', 'Deck repair', 'Porch work', 'Exterior wood projects']
  ],
  'fence-staining' => [
    'kicker' => 'Fence Staining',
    'headline' => 'Protect and refresh your wood fence',
    'paragraphs' => [
      'Fence staining helps improve the look of your fence while adding protection against weather and wear.',
      'BRD Services provides stain application for a cleaner, more finished result.'
    ],
    'bullets' => ['Fence stain application', 'Wood protection', 'Color refresh', 'Clean finish']
  ],
  'deck-staining' => [
    'kicker' => 'Deck Staining',
    'headline' => 'A better finish for your deck',
    'paragraphs' => [
      'Deck staining helps restore the look of your deck and adds protection for long-term durability.',
      'We prepare the surface carefully and apply stain for a polished final result.'
    ],
    'bullets' => ['Deck stain application', 'Surface refresh', 'Exterior wood protection', 'Free estimates']
  ]
];

/*=========================
  COPY / UI TEXT
  =========================*/
$WhyChoose = [
  'eyebrow'   => 'Fence & Deck Work You Can Trust',
  'title_pre' => 'Why Choose',
  'intro'     => 'Founded in May 2024, BRD Services helps homeowners with dependable fence and deck work, clear communication, and free estimates.',
  'cards'     => [
    ['title' => 'Focused Services', 'text' => 'We specialize in fences, decks, and staining instead of offering unrelated handyman work.'],
    ['title' => 'Clean Results', 'text' => 'We focus on workmanship, neat finishes, and practical exterior improvements.'],
    ['title' => 'Need an Estimate?', 'text' => 'Contact BRD Services for fence or deck work in Lawrenceville and nearby counties.', 'btn' => ['href' => $PhoneRef, 'text' => 'Call Now']],
  ],
];

function paymentList($txt) {
  return array_map('trim', explode(',', $txt));
}
$PaymentMethods = paymentList($Payment);

$ExperienceYears = 2;
if ($ExperienceYears <= 0) $ExperienceYears = 1;

$NavCopy = [
  'home'            => 'Home',
  'about'           => 'About',
  'services'        => 'Services',
  'projects'        => 'Projects',
  'reviews'         => 'Reviews',
  'contact'         => 'Contact',
  'other_services'  => 'Staining',
  'cta'             => 'Call Now',
  'cta_mobile'      => 'Call Now',
  'explore_service' => 'Explore Service',
  'view_services'   => 'View Services',
  'contact_today'   => 'Contact Us Today',
  'leave_review'    => 'Leave a Review',
  'read_reviews'    => 'Read Reviews'
];

$LanguageCopy = [
  'label'   => 'Language',
  'english' => 'English',
  'spanish' => 'Espanol'
];

$HeaderCopy = [
  'menu_close'  => 'Close Menu',
  'menu_toggle' => 'Toggle Menu',
  'social_titles' => [
    'facebook'  => 'Facebook',
    'messenger' => 'Messenger',
    'google'    => 'Google Reviews',
    'instagram' => 'Instagram',
    'tiktok'    => 'TikTok',
    'whatsapp'  => 'WhatsApp'
  ]
];

$FooterCopy = [
  'desc' => 'Fence installation and repair, deck build and repair, fence staining, and deck staining in Lawrenceville, Georgia and nearby county areas.',
  'titles' => ['company' => 'Company', 'services' => 'Services', 'contact' => 'Contact Us'],
  'labels' => ['location' => 'Location', 'phone' => 'Phone', 'hours' => 'Hours'],
  'copyright_suffix' => 'All Rights Reserved.'
];

$PageHeroCopy = [
  'default'  => ['title' => 'Fence & Deck Services', 'desc' => 'Fence installation and repair, deck build and repair, fence staining, and deck staining.', 'bg' => 'assets/img/hero/hero1.jpg'],
  'projects' => ['title' => 'Our Projects', 'desc' => 'Fence and deck work completed by BRD Services LLC.', 'bg' => 'assets/img/hero/hero2.jpg'],
  'about'    => ['title' => 'About ' . $Company, 'desc' => 'Local fence and deck services based in Lawrenceville, Georgia.', 'bg' => 'assets/img/hero/hero3.jpg'],
  'contact'  => ['title' => 'Get a Free Estimate', 'desc' => 'Call BRD Services for fence and deck work in Lawrenceville and surrounding county areas.', 'bg' => 'assets/img/hero/hero1.jpg'],
  'reviews'  => ['title' => 'Customer Reviews', 'desc' => 'Read feedback from fence and deck customers.', 'bg' => 'assets/img/hero/hero2.jpg'],
  'other'    => ['title' => 'Wood Staining', 'desc' => 'Fence and deck staining services for a cleaner, protected finish.', 'bg' => 'assets/img/hero/hero3.jpg']
];

$HomeHeroCopy = [
  'headline'          => $Company,
  'sub'               => 'Fence installation and repair, deck build and repair, fence staining, and deck staining in Lawrenceville, Georgia and nearby counties.',
  'cta_primary'       => 'Call Now',
  'cta_secondary'     => 'Free Estimate',
  'cta_primary_href'  => $PhoneRef,
  'cta_secondary_href'=> $PhoneRef2,
  'prev_label'        => 'Previous slide',
  'next_label'        => 'Next slide',
  'slide_alt_prefix'  => 'BRD Services Slide',
  'thumb_alt_prefix'  => 'Project Thumbnail'
];

$HomeAboutCopy = [
  'eyebrow' => 'Lawrenceville Fence & Deck Services',
  'title' => 'Built for Quality,',
  'title_strong' => 'Finished with Care.',
  'description' => 'BRD Services helps homeowners with fences, decks, and wood staining for strong results and a better-looking property.',
  'badge_label' => 'Years in Service',
  'images' => [
    'back'  => ['src' => 'assets/img/truck.jpeg', 'alt' => 'Fence and deck service project'],
    'front' => ['src' => 'assets/img/truck.jpeg', 'alt' => 'BRD Services project work']
  ],
  'features' => [
    ['icon' => 'fa-border-all', 'title' => 'Fence Work', 'text' => 'Fence installation and repair for residential properties.'],
    ['icon' => 'fa-hammer', 'title' => 'Deck Work', 'text' => 'Deck build and repair with practical, durable solutions.'],
    ['icon' => 'fa-paint-roller', 'title' => 'Staining', 'text' => 'Fence and deck staining for protection and appearance.'],
    ['icon' => 'fa-phone-volume', 'title' => 'Free Estimates', 'text' => $Estimates]
  ],
  'cta' => 'Learn About Us'
];

$AboutHeroCopy = [
  'eyebrow'     => 'About ' . $Company,
  'title'       => 'Reliable fence and deck work based in Lawrenceville',
  'desc'        => $About[0],
  'cta_primary' => 'Our Story',
  'cta_primary_href' => '#story',
  'cta_secondary_prefix' => 'Call',
  'meta' => [$Experience, $Estimates, $LicenseNote, $Coverage],
  'list' => [
    ['label' => 'Service area', 'value' => $Coverage],
    ['label' => 'Schedule', 'value' => $Schedule],
    ['label' => 'Core services', 'value' => $TypeOfService],
    ['label' => 'Founded', 'value' => 'May 2024']
  ]
];

$AboutStoryCopy = [
  'eyebrow' => 'Our Story',
  'title'   => 'Focused on fences, decks, and exterior wood finishes',
  'points'  => [
    ['title' => 'Founded', 'text' => 'BRD Services LLC was founded in May 2024.'],
    ['title' => 'Free estimates', 'text' => $Estimates],
    ['title' => 'Service focus', 'text' => 'Fence installation and repair, deck build and repair, and staining services.']
  ],
  'actions' => ['primary_text' => 'Request Estimate', 'primary_href' => $PhoneRef, 'secondary_prefix' => 'Call'],
  'stats'   => ['years_label' => 'Years of Experience', 'services_label' => 'Core services', 'areas_label' => 'Service areas', 'areas_separator' => ', ', 'areas_preview_count' => 5]
];

$AboutCredentialsCopy = [
  'eyebrow' => 'Why work with us',
  'title'   => 'A local company focused on the right work',
  'intro'   => 'BRD Services keeps the scope clear: fences, decks, and staining. That means focused service and cleaner execution for each project.',
  'list'    => [
    ['label' => 'Contact', 'value' => $Phone],
    ['label' => 'Founded', 'value' => $LicenseNote],
    ['label' => 'Core services', 'value' => $TypeOfService],
    ['label' => 'Coverage', 'value' => $Coverage],
    ['text' => $Estimates . ' | ' . $Schedule]
  ],
  'cta' => ['title' => 'Ready to start your project?', 'desc' => 'Call BRD Services for fence or deck work and request your free estimate.', 'primary_text' => 'Call Now', 'primary_href' => $PhoneRef, 'secondary_prefix' => 'Call']
];

$AboutServicesSummaryCopy = ['eyebrow' => 'Services', 'title' => 'How we help', 'desc' => $TypeOfService . ' in Lawrenceville and nearby counties.', 'link_label' => 'Learn more'];
$ServicesListCopy = ['eyebrow' => 'Scope', 'title' => 'Fence and deck services we provide', 'desc' => $Services, 'link_label' => 'Learn more'];
$BrandsCopy = ['tagline' => 'Serving Lawrenceville and Surrounding Georgia Counties'];

$HomeServicesCopy = [
  'eyebrow'      => 'Fence & Deck Services',
  'title'        => 'Exterior Services',
  'title_strong' => 'Done Right',
  'desc'         => 'We focus on fences, decks, and staining services for homeowners who want strong workmanship and a clean final result.',
  'link_label'   => 'Contact',
  'more_title'   => 'Need a Free Estimate?',
  'more_desc'    => 'Tell us about your fence or deck project and we will help you plan the next step.',
  'more_button'  => 'Call for Estimate',
  'more_href'    => $PhoneRef
];

$HomeMaintenanceCopy = [
  'tagline' => 'Reliable Exterior Work',
  'title' => 'Fence, Deck,',
  'title_strong' => 'Stain & Repair',
  'desc' => 'From new fence work to deck repairs and wood staining, BRD Services helps improve your exterior spaces.',
  'cards' => [
    ['icon' => 'fa-border-all', 'title' => 'Fence Install & Repair', 'text' => 'Fence solutions designed for privacy, protection, and better curb appeal.', 'action' => 'See Details'],
    ['icon' => 'fa-hammer', 'title' => 'Deck Build & Repair', 'text' => 'Deck and porch work that improves outdoor use and appearance.', 'action' => 'See Details'],
    ['icon' => 'fa-brush', 'title' => 'Fence Staining', 'text' => 'Protect and refresh your fence with a better-looking finish.', 'action' => 'See Details'],
    ['icon' => 'fa-paint-roller', 'title' => 'Deck Staining', 'text' => 'Restore the look of your deck and help protect the wood.', 'action' => 'See Details']
  ],
  'foundation' => [
    ['icon' => 'fa-phone-volume', 'title' => 'Free Estimates', 'subtitle' => 'Call for project pricing'],
    ['icon' => 'fa-location-dot', 'title' => 'Local Service', 'subtitle' => 'Based in Lawrenceville, GA'],
    ['icon' => 'fa-star', 'title' => $ExperienceYears . '+ Years', 'subtitle' => 'Serving local homeowners']
  ]
];

$WhyCopy = [
  'badge' => 'Trusted Local Choice',
  'title_prefix' => 'Why Homeowners Choose',
  'description' => 'Our work is focused on fence and deck services, with clear communication and practical results for each project.',
  'stats' => [
    ['value' => $ExperienceYears . '+', 'label' => 'Years in Service'],
    ['value' => count($ServicesList) . '+', 'label' => 'Core Services'],
    ['value' => 'Free', 'label' => 'Estimates Available']
  ],
  'service_area_label' => 'Coverage and Availability',
  'features' => [
    ['icon' => 'fa-comments', 'title' => 'Clear Communication', 'text' => 'We keep the scope focused and explain the work before starting.'],
    ['icon' => 'fa-hammer', 'title' => 'Focused Services', 'text' => 'Fences, decks, and staining are the main services we offer.'],
    ['icon' => 'fa-shield-alt', 'title' => 'Quality Work', 'text' => 'We aim for clean finishes, solid repairs, and dependable workmanship.'],
    ['icon' => 'fa-phone', 'title' => 'Easy Contact', 'text' => $Schedule]
  ],
  'cta_label' => 'Call Now'
];

$MissionCopy = ['mission_title' => 'Our Mission', 'vision_title' => 'Our Vision'];

$ProcessCopy = [
  'title' => 'How We Work',
  'title_strong' => 'From Estimate to Finish',
  'desc' => 'Our process keeps fence and deck projects clear and organized from the first call to the final result.',
  'steps' => [
    ['icon' => 'fa-phone', 'title' => 'Call Us', 'text' => 'Tell us about your fence or deck project and what you need done.'],
    ['icon' => 'fa-location-dot', 'title' => 'Review the Job', 'text' => 'We discuss the project scope, location, and the best next steps.'],
    ['icon' => 'fa-hammer', 'title' => 'Complete the Work', 'text' => 'We handle the installation, repair, or staining with attention to the finish.'],
    ['icon' => 'fa-check-circle', 'title' => 'Final Walkthrough', 'text' => 'We make sure the result is clean, complete, and ready to enjoy.']
  ]
];

$FaqCopy = [
  'title' => 'Frequently Asked Questions',
  'items' => [
    ['q' => 'What services do you offer?', 'a' => 'We focus on fence installation and repair, deck build and repair, fence staining, and deck staining.'],
    ['q' => 'Where are you located?', 'a' => 'We are based in Lawrenceville, Georgia.'],
    ['q' => 'What areas do you serve?', 'a' => $Coverage],
    ['q' => 'Do you offer free estimates?', 'a' => 'Yes. Call BRD Services for a free estimate.']
  ]
];

$AreasCopy = [
  'title' => 'Serving',
  'title_strong' => 'Lawrenceville & Nearby Counties',
  'subtitle' => 'Coverage includes surrounding Gwinnett County areas and Greene, Barrow, Forsyth, Oconee, and Putnam county areas.',
  'cta_label' => 'Request Service in Your Area',
  'map_overlay' => 'Active Service Coverage',
  'license_pills' => ['Free Estimates', 'Fence & Deck Work', 'Founded May 2024']
];

$CtaCopy = [
  'badge' => 'Founded May 2024',
  'title' => 'Need Fence or Deck',
  'title_strong' => 'Work Done?',
  'paragraph' => $Company . ' provides fence installation and repair, deck build and repair, fence staining, and deck staining in Lawrenceville and nearby counties.',
  'features' => ['Free Estimates', 'Local Service', 'Focused Craftsmanship'],
  'button' => 'Call for Estimate',
  'card_title' => 'Speak With BRD Services',
  'card_subtitle' => 'Call to discuss your fence or deck project',
  'row_call_label' => 'Call for estimate',
  'row_license_label' => 'Founded',
  'row_license_title' => $LicenseNote,
  'row_service_label' => 'Coverage Area',
  'whatsapp_button' => 'WhatsApp Us',
  'book_button' => 'Start Request'
];

$ContactFormCopy = [
  'eyebrow' => 'Request an Estimate',
  'title' => "Let's Talk About Your",
  'title_strong' => 'Project.',
  'desc' => 'Send your contact information and details about your fence or deck project. You can also call directly for faster service.',
  'method_labels' => ['call' => 'Call or Text', 'hours' => 'Business Hours'],
  'form_labels' => ['name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'service' => 'Service', 'message' => 'Project Details'],
  'placeholders' => ['service' => 'Select service type', 'service_other' => 'Other / Custom Request', 'message' => 'Describe your fence or deck project...'],
  'submit' => 'Send Estimate Request',
  'honeypot_label' => 'Leave this field empty'
];

$MapCopy = ['title' => 'Locate', 'title_strong' => 'BRD Services LLC', 'labels' => ['location' => 'Service Base', 'call' => 'Phone', 'hours' => 'Hours']];

$TestimonialsCopy = ['title' => 'Customer Feedback', 'title_strong' => 'From Real Projects', 'desc' => 'Read customer feedback from fence and deck services completed by BRD Services.', 'button_label' => 'Read More Reviews', 'button_href' => 'reviews.php', 'fallback_name' => 'Verified Client'];

$TrustedDirectoriesCopy = [
  'eyebrow' => 'Trusted Feedback Sources',
  'title' => 'Customer Service Highlights',
  'desc' => 'Explore feedback from homeowners who hired BRD Services for fence and deck work.',
  'cards' => [
    ['icon' => 'fa-award', 'subtitle' => 'Website', 'title' => 'Website Reviews', 'text' => 'Read direct feedback from customers and homeowners.', 'url' => 'reviews.php', 'tags' => ['Client Feedback', 'Real Projects']],
    ['icon' => 'fa-hammer', 'subtitle' => 'Projects', 'title' => 'Deck & Fence Work', 'text' => 'See comments about build, repair, and stain projects.', 'url' => 'reviews.php', 'tags' => ['Fence Services', 'Deck Services']],
    ['icon' => 'fa-home', 'subtitle' => 'Homeowners', 'title' => 'Residential Projects', 'text' => 'Explore feedback from local homeowners in nearby service areas.', 'url' => 'reviews.php', 'tags' => ['Lawrenceville', 'Georgia']],
    ['icon' => 'fa-map', 'subtitle' => 'Coverage', 'title' => 'Service Areas', 'text' => 'Read comments from customers across Gwinnett and nearby counties.', 'url' => 'reviews.php', 'tags' => ['County Coverage', 'Local Work']]
  ]
];

$ReviewsPageCopy = [
  'hero_title' => 'Customer Reviews',
  'hero_subtitle' => 'See what homeowners say about working with BRD Services LLC.',
  'hero_image' => 'assets/img/stock/vision-crew.jpg',
  'list_eyebrow' => 'Reviews',
  'list_title' => 'What Our Customers Say',
  'list_desc' => 'Recent feedback from fence and deck service customers.',
  'list_cta' => 'Leave a Review'
];

$ReviewFormCopy = [
  'title' => 'Share Your Experience',
  'subtitle' => 'We value your feedback and would love to hear about your project.',
  'success_title' => 'Thank You!',
  'success_message' => 'Your review has been submitted successfully.',
  'error_title' => 'Error!',
  'captcha_error' => 'Incorrect security code. Please try again.',
  'labels' => ['name' => 'Your Name', 'city' => 'City / Location', 'rating' => 'Rating', 'rating_hint' => '(Select stars)', 'review' => 'Your Review', 'security' => 'Security Check', 'refresh' => 'Refresh', 'captcha' => 'Enter the code shown above'],
  'captcha_alt' => 'Captcha image',
  'placeholders' => ['name' => '', 'city' => 'e.g. Lawrenceville, GA', 'review' => 'Tell us how we did...'],
  'submit' => 'Submit Review'
];

$GalleryHeroCopy = ['eyebrow' => 'Our Gallery', 'title' => 'BRD Services in Action', 'desc' => 'Explore fence and deck project moments from ' . $Company . ' across Lawrenceville and nearby counties.', 'cta_text' => 'Call Now', 'cta_href' => $PhoneRef];

$ProjectsIntroCopy = [
  'label' => 'Our Work',
  'title_line1' => 'Fence & Deck',
  'title_line2' => 'Projects.',
  'outline_line1' => 'Built, Repaired',
  'outline_line2' => 'and Finished Right.',
  'desc' => 'At ' . $Company . ', every project is approached with care, honest communication, and attention to the final result.',
  'stats' => [
    ['value' => $ExperienceYears . '+', 'label' => 'Years of Experience'],
    ['value' => count($ServicesList) . '+', 'label' => 'Core Services'],
    ['value' => count($Areas), 'label' => 'Areas Served']
  ]
];

$ProjectsBeforeAfterCopy = ['eyebrow' => 'Projects', 'title' => 'Before & After', 'desc' => 'See how fence and deck improvements transform exterior spaces.', 'before_label' => 'Before', 'after_label' => 'After'];
$ProjectsStatsCopy = ['items' => [
  ['icon' => 'fa-hourglass-half', 'value' => $ExperienceYears . '+', 'label' => 'Years of Service'],
  ['icon' => 'fa-hammer', 'value' => count($ServicesList) . '+', 'label' => 'Core Services'],
  ['icon' => 'fa-map-location-dot', 'value' => count($Areas), 'label' => 'Areas Served'],
  ['icon' => 'fa-phone-volume', 'value' => 'Free', 'label' => 'Estimates']
]];

$ProjectsGalleryCopy = ['eyebrow' => 'Project Gallery', 'title' => 'Selected Work &', 'title_strong' => 'Recent Projects', 'videos_label' => 'Videos', 'empty' => 'Projects coming soon.', 'image_title' => 'Project Photo', 'video_title' => 'Project Video'];
$ServiceHeroCopy = ['badge' => 'Fence & Deck Service', 'cta_primary' => 'Call Now', 'cta_secondary' => 'Explore Service'];
$ServiceIntroCopy = [
  'eyebrow' => 'Our Method',
  'title' => 'How We Deliver',
  'title_strong' => 'Project Results',
  'desc' => 'We keep the process simple so you know what to expect from first call to final walkthrough.',
  'steps' => [
    ['icon' => 'fa-comments', 'title' => 'Contact', 'text' => 'We start by learning what kind of fence or deck work you need.'],
    ['icon' => 'fa-location-dot', 'title' => 'Review', 'text' => 'We review the project details and confirm the best next step.'],
    ['icon' => 'fa-hammer', 'title' => 'Build or Repair', 'text' => 'We complete the install, repair, or staining service with attention to detail.']
  ]
];

$ServiceDetailsCopy = ['badge_title' => 'BRD Services Promise', 'badge_subtitle' => 'Service Focused', 'title_prefix' => 'Professional', 'button' => 'Call Now'];
$ServiceFaqCopy = [
  'eyebrow' => 'Common Questions',
  'title' => 'Info About Our',
  'title_strong' => 'Fence & Deck Services',
  'items' => [
    ['icon' => 'fa-hourglass-half', 'question' => 'Do you offer free estimates?', 'answer' => 'Yes. Call with your project details to request a free estimate.'],
    ['icon' => 'fa-hammer', 'question' => 'What kind of work do you do?', 'answer' => 'We focus on fences, decks, fence staining, and deck staining.'],
    ['icon' => 'fa-location-dot', 'question' => 'Where do you work?', 'answer' => $Coverage],
    ['icon' => 'fa-calendar', 'question' => 'When was BRD Services founded?', 'answer' => 'BRD Services LLC was founded in May 2024.']
  ],
  'footer' => 'Have a different question? Contact our team directly'
];

$ServiceCtaCopy = [
  'tag' => 'Need Help?',
  'title' => "Let's Start Your",
  'title_strong' => 'Project',
  'paragraph' => 'Call for %s in Lawrenceville, Georgia and nearby county areas.',
  'subject_fallback' => 'service',
  'features' => ['Free Estimates', 'Local Service', $Experience],
  'primary' => 'Call Now',
  'secondary_prefix' => 'Call'
];

$OtherServicesCopy = ['label' => 'Additional Help', 'title' => 'More Ways We Can Help', 'title_strong' => 'Protect Your Woodwork', 'item_note' => 'Professional fence and deck staining services.', 'cta_title' => 'Have a project in mind?', 'cta_text' => 'From fence repair to deck staining, call and tell us what you need.', 'cta_button' => $Estimates, 'page_desc' => 'Additional finishing services tailored to your property.'];

$FounderCopy = [
  'title' => 'A Note from',
  'title_strong' => 'The Owner',
  'quote' => 'At ' . $Company . ', we believe fence and deck work should be handled with honest communication, reliable workmanship, and a clean final result. Our goal is to help every homeowner improve their outdoor space with practical service and quality care.',
  'role' => 'Owner',
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
  'title' => 'What Customers Say',
  'desc' => 'Trusted feedback from homeowners across Lawrenceville and nearby Georgia counties.',
  'card_title' => 'Read Verified Reviews',
  'card_desc' => 'See feedback from fence, deck, and staining customers.',
  'card_button' => $NavCopy['read_reviews'] ?? 'Read Reviews',
  'card_link' => 'reviews.php'
];

$ThankYouCopy = [
  'title' => 'Thank You',
  'description' => 'Thank you for contacting ' . $Company . '. We will be in touch shortly.',
  'eyebrow' => 'Thank You',
  'headline' => 'We received your request',
  'body' => 'Thank you for contacting ' . $Company . '. Our team will reach out soon to confirm your fence or deck project details.',
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
:root{
  --site-surface:#ffffff;
  --site-surface-soft:color-mix(in srgb, var(--brand-neutral) 82%, #fff 18%);
  --site-ink:var(--brand-secondary);
  --site-ink-soft:rgba(var(--brand-secondary-rgb),0.76);
  --site-panel:#ffffff;
  --site-panel-soft:rgba(255,255,255,0.78);
  --site-line:rgba(var(--brand-secondary-rgb),0.14);
  --site-dark:#0a0a0b;
  --site-dark-2:#161616;
  --site-dark-3:#1f1f1f;
  --site-dark-line:rgba(var(--brand-accent-rgb),0.26);
  --site-dark-text:#ffffff;
  --site-dark-muted:rgba(255,255,255,0.72);
  --site-accent-soft:rgba(var(--brand-accent-rgb),0.14);
}
body{
  background:
    radial-gradient(circle at 10% 8%, rgba(var(--brand-accent-rgb),0.12), transparent 28%),
    radial-gradient(circle at 84% 14%, rgba(var(--brand-primary-rgb),0.08), transparent 30%),
    linear-gradient(180deg, var(--brand-neutral) 0%, #ffffff 100%);
}
#hero-4.hero4{
  background:
    radial-gradient(circle at 50% 18%, rgba(var(--brand-primary-rgb),0.22), transparent 34%),
    linear-gradient(130deg, #0f1215 0%, var(--brand-secondary) 58%, #171b1f 100%) !important;
}
#hero-4 .hero4__slides::after{
  background: linear-gradient(to bottom, rgba(0,0,0,0.78) 0%, rgba(0,0,0,0.5) 42%, rgba(0,0,0,0.88) 100%) !important;
}
#hero-4 .hero4__content{
  background: linear-gradient(145deg, rgba(15,18,21,0.94), rgba(var(--brand-secondary-rgb),0.82)) !important;
  border: 1px solid rgba(var(--brand-accent-rgb),0.42) !important;
}
#hero-4 .hero4__content::before{
  background: radial-gradient(120% 140% at 0% 0%, rgba(var(--brand-accent-rgb),0.18), transparent 62%) !important;
}
.section-map-contact .map-background iframe{
  filter: grayscale(60%) contrast(0.9) !important;
}
CSS;
?>
