<?php
require_once __DIR__ . '/services-data.php';

if (empty($service_slug)) {
    http_response_code(404);
    echo 'Service not found.';
    exit;
}

$service = cg_get_service($service_slug);
if (!$service) {
    http_response_code(404);
    echo 'Service not found.';
    exit;
}

$related = cg_related_services($service);
$all = cg_services_catalog();
$slugs = array_keys($all);
$index = array_search($service_slug, $slugs, true);
$prev = ($index !== false && $index > 0) ? $all[$slugs[$index - 1]] : null;
$next = ($index !== false && $index < count($slugs) - 1) ? $all[$slugs[$index + 1]] : null;

$page_title = $service['title'] . ' — CommunityGrowth360';
$active_page = 'services';
$body_class = 'inner-page service-detail-page sd-premium service-' . $service['slug'];

require __DIR__ . '/header.php';
?>
<main>
  <section class="sdp-hero">
    <div class="sdp-hero-orb sdp-hero-orb-a"></div>
    <div class="sdp-hero-orb sdp-hero-orb-b"></div>
    <div class="sdp-hero-grid-bg"></div>
    <div class="container-fluid cg-container position-relative">
      <nav class="sdp-crumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <span>/</span>
        <a href="services.php">Services</a>
        <span>/</span>
        <strong><?= htmlspecialchars($service['title']) ?></strong>
      </nav>

      <div class="sdp-hero-layout">
        <div class="sdp-hero-main">
          <div class="sdp-hero-meta">
            <span class="sdp-badge"><?= htmlspecialchars($service['number']) ?></span>
            <div class="eyebrow light"><span></span> <?= htmlspecialchars($service['eyebrow']) ?></div>
          </div>
          <h1><?= htmlspecialchars($service['title']) ?><br><em><?= htmlspecialchars($service['hero_em']) ?></em></h1>
          <p class="sdp-lead"><?= htmlspecialchars($service['hero_lead']) ?></p>
          <div class="sdp-actions">
            <a class="btn btn-gold btn-lg" href="contact.php">Discuss this service <i class="fa-solid fa-arrow-right"></i></a>
            <a class="btn btn-ghost-light btn-lg" href="services.php">All services</a>
          </div>
          <div class="sdp-tags">
            <?php foreach ($service['tags'] as $tag): ?>
              <span><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
        </div>

        <aside class="sdp-hero-card">
          <div class="sdp-hero-card-topline"></div>
          <div class="sdp-hero-card-icon"><i class="fa-solid <?= htmlspecialchars($service['icon']) ?>"></i></div>
          <small>What this unlocks</small>
          <ul>
            <?php foreach ($service['highlights'] as $item): ?>
              <li><i class="fa-solid fa-check"></i><span><?= htmlspecialchars($item) ?></span></li>
            <?php endforeach; ?>
          </ul>
          <a href="contact.php" class="sdp-hero-card-cta">Start a conversation <i class="fa-solid fa-arrow-right"></i></a>
        </aside>
      </div>
    </div>
    <div class="sdp-hero-watermark" aria-hidden="true"><?= htmlspecialchars($service['number']) ?></div>
  </section>

  <section class="sdp-section">
    <div class="container-fluid cg-container">
      <div class="sdp-overview">
        <div class="sdp-overview-left">
          <div class="eyebrow"><span></span> Overview</div>
          <h2>Built for practical growth, <em>not busywork.</em></h2>
          <p class="sdp-overview-brief"><?= htmlspecialchars($service['short']) ?></p>
        </div>
        <div class="sdp-overview-right">
          <?php foreach ($service['overview'] as $para): ?>
            <p><?= htmlspecialchars($para) ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="sdp-section sdp-section-soft">
    <div class="container-fluid cg-container">
      <div class="sdp-section-head">
        <div class="eyebrow"><span></span> Who it’s for</div>
        <h2>Made for teams ready to grow with <em>clear systems.</em></h2>
      </div>
      <div class="sdp-audience-grid">
        <?php foreach ($service['audiences'] as $i => [$title, $copy]): ?>
          <article class="sdp-audience-card">
            <div class="sdp-audience-top">
              <span>0<?= $i + 1 ?></span>
              <i class="fa-solid fa-user-group"></i>
            </div>
            <h3><?= htmlspecialchars($title) ?></h3>
            <p><?= htmlspecialchars($copy) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="sdp-section">
    <div class="container-fluid cg-container">
      <div class="sdp-includes-shell">
        <div class="sdp-includes-copy">
          <div class="eyebrow"><span></span> What’s included</div>
          <h2>A clear scope you can <em>act on.</em></h2>
          <p>Every engagement is tailored. These are the core building blocks we typically deliver for this service.</p>
          <a href="contact.php" class="btn btn-dark-premium">Talk through your needs <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <ul class="sdp-includes-list">
          <?php foreach ($service['includes'] as $i => $item): ?>
            <li>
              <span><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
              <strong><?= htmlspecialchars($item) ?></strong>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <section class="sdp-section sdp-section-dark">
    <div class="sdp-dark-ring"></div>
    <div class="container-fluid cg-container position-relative">
      <div class="sdp-section-head sdp-section-head-light">
        <div class="eyebrow light"><span></span> Process</div>
        <h2>From idea to a <em>working system.</em></h2>
      </div>
      <div class="sdp-process-grid">
        <?php foreach ($service['process'] as $i => [$title, $copy]): ?>
          <article class="sdp-process-card">
            <span>0<?= $i + 1 ?></span>
            <h3><?= htmlspecialchars($title) ?></h3>
            <p><?= htmlspecialchars($copy) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="sdp-section">
    <div class="container-fluid cg-container">
      <div class="sdp-outcomes-shell">
        <div class="sdp-outcomes-copy">
          <div class="eyebrow"><span></span> Outcomes</div>
          <h2>What better systems make <em>possible.</em></h2>
          <p>We measure success by clarity, consistency and movement—not vanity metrics.</p>
        </div>
        <div class="sdp-outcomes-grid">
          <?php foreach ($service['outcomes'] as $i => $item): ?>
            <article>
              <span>0<?= $i + 1 ?></span>
              <strong><?= htmlspecialchars($item) ?></strong>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php if ($related): ?>
  <section class="sdp-section sdp-section-soft">
    <div class="container-fluid cg-container">
      <div class="sdp-section-head sdp-section-head-split">
        <div>
          <div class="eyebrow"><span></span> Related services</div>
          <h2>Strengthen the rest of your <em>growth stack.</em></h2>
        </div>
        <a href="services.php" class="sdp-text-link">View all services <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="sdp-related-grid">
        <?php foreach ($related as $item): ?>
          <a href="<?= htmlspecialchars($item['file']) ?>" class="sdp-related-card">
            <div class="sdp-related-top">
              <span><?= htmlspecialchars($item['number']) ?></span>
              <i class="fa-solid <?= htmlspecialchars($item['icon']) ?>"></i>
            </div>
            <small>CommunityGrowth360 service</small>
            <h3><?= htmlspecialchars($item['title']) ?></h3>
            <p><?= htmlspecialchars($item['short']) ?></p>
            <em>Explore service <i class="fa-solid fa-arrow-right"></i></em>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="sdp-cta">
    <div class="container-fluid cg-container">
      <div class="sdp-cta-shell">
        <div>
          <div class="eyebrow light"><span></span> Next step</div>
          <h2>Ready to discuss <em><?= htmlspecialchars($service['title']) ?>?</em></h2>
          <p>Tell us what you’re trying to improve. We’ll help map the right system, scope and next move.</p>
        </div>
        <div class="sdp-cta-actions">
          <a href="contact.php" class="btn btn-gold btn-lg">Contact us <i class="fa-solid fa-arrow-right"></i></a>
          <a href="services.php" class="btn btn-ghost-light btn-lg">Browse services</a>
        </div>
      </div>
    </div>
  </section>

  <section class="sdp-pager">
    <div class="container-fluid cg-container">
      <div class="sdp-pager-row">
        <?php if ($prev): ?>
          <a class="sdp-pager-link" href="<?= htmlspecialchars($prev['file']) ?>">
            <small><i class="fa-solid fa-arrow-left"></i> Previous</small>
            <strong><?= htmlspecialchars($prev['title']) ?></strong>
          </a>
        <?php else: ?>
          <span></span>
        <?php endif; ?>
        <?php if ($next): ?>
          <a class="sdp-pager-link sdp-pager-next" href="<?= htmlspecialchars($next['file']) ?>">
            <small>Next <i class="fa-solid fa-arrow-right"></i></small>
            <strong><?= htmlspecialchars($next['title']) ?></strong>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
