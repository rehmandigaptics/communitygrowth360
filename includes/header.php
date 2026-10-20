<?php
$page_title = $page_title ?? 'CommunityGrowth360 — Digital Growth for Muslim Communities';
$active_page = $active_page ?? '';
$body_class = $body_class ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="icon" href="assets/images/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" href="assets/images/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
<body class="<?= htmlspecialchars($body_class) ?>">
  <header class="site-header fixed-top">
    <div class="topbar d-none d-lg-block">
      <div class="container-fluid cg-container d-flex align-items-center justify-content-between">
        <div class="topbar-left">
          <span><i class="fa-solid fa-location-dot"></i> Serving Muslim communities nationwide</span>
          <span><i class="fa-regular fa-envelope"></i> hello@communitygrowth360.com</span>
        </div>
        <div class="topbar-right">
          <span>Faith • Community • Opportunity • Growth</span>
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid cg-container">
        <a class="navbar-brand brand brand-logo-link" href="index.php" aria-label="CommunityGrowth360 home">
          <img class="site-logo" src="assets/images/communitygrowth360-logo.png" alt="CommunityGrowth360">
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <?php
            require_once __DIR__ . '/services-data.php';
            $service_nav = cg_services_catalog();
            $nav = [
              'home' => ['Home','index.php'],
              'about' => ['About','about.php'],
              'services' => ['Services','services.php'],
              'impact' => ['Impact','impact.php'],
              'events' => ['Events','events.php'],
              'contact' => ['Contact','contact.php'],
            ];
            foreach ($nav as $key => [$label,$url]):
              if ($key === 'services'): ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?= $active_page === 'services' ? 'active' : '' ?>" href="services.php" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $label ?></a>
                <ul class="dropdown-menu services-dropdown" aria-labelledby="servicesDropdown">
                  <li><a class="dropdown-item services-dropdown-overview" href="services.php">Services</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <?php foreach ($service_nav as $svc): ?>
                  <li><a class="dropdown-item" href="<?= htmlspecialchars($svc['file']) ?>"><?= htmlspecialchars($svc['title']) ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <?php else: ?>
              <li class="nav-item"><a class="nav-link <?= $active_page === $key ? 'active' : '' ?>" href="<?= $url ?>"><?= $label ?></a></li>
              <?php endif;
            endforeach; ?>
          </ul>
          <a href="services.php" class="btn btn-gold ms-lg-3">Explore Services <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </nav>
  </header>
