<?php

$page_title = 'Services for Muslim Organizations & Community Growth — CommunityGrowth360';

$active_page = 'services';
$body_class = 'inner-page services-page';

require __DIR__ . '/includes/header.php';

$services = [
    [
        '01',
        'Digital Marketing',
        'Build a connected growth engine across campaigns, content, paid and organic channels, audience targeting and measurable growth.',
        'fa-bullhorn',
        'digital-marketing',
        'Campaigns • Content • Paid & organic',
    ],
    [
        '02',
        'Website & Funnel Development',
        'Create high-converting websites, landing pages and funnels designed to turn attention into qualified opportunities.',
        'fa-laptop-code',
        'website-funnels',
        'Websites • Funnels • Conversion',
    ],
    [
        '03',
        'AI Automation',
        'Use practical AI workflows and agents to qualify leads, handle repetitive tasks, generate responses and support operations.',
        'fa-wand-magic-sparkles',
        'ai-automation',
        'AI workflows • Agents • Operations',
    ],
    [
        '04',
        'GoHighLevel',
        'Build your CRM, pipelines, appointment flows, campaigns, follow-up sequences and reporting inside GoHighLevel.',
        'fa-chart-line',
        'gohighlevel',
        'CRM • Pipelines • Follow-up',
    ],
    [
        '05',
        'n8n Automation',
        'Connect your apps and automate complex workflows—from data sync and lead routing to notifications, APIs and backend processes.',
        'fa-diagram-project',
        'n8n-automation',
        'Workflows • Integrations • APIs',
    ],
    [
        '06',
        'Lead Generation',
        'Generate and capture qualified opportunities with targeted campaigns, funnels, forms, qualification and automated follow-up.',
        'fa-bullseye',
        'lead-generation',
        'Lead capture • Funnels • Qualification',
    ],
    [
        '07',
        'SEO • AEO • GEO',
        'Improve visibility across Google and emerging AI search experiences with technical, content and answer-focused optimization.',
        'fa-magnifying-glass-chart',
        'seo-aeo-geo',
        'SEO • AEO • GEO',
    ],
    [
        '08',
        'CRM & Sales Automation',
        'Connect lead capture, pipelines, appointments, follow-up and customer journeys into one measurable sales system.',
        'fa-users-gear',
        'crm-sales',
        'CRM • Sales • Customer journeys',
    ],
    [
        '09',
        'Analytics & Conversion',
        'Turn website and campaign data into clearer decisions with tracking, conversion analysis and ongoing optimization.',
        'fa-chart-pie',
        'analytics-conversion',
        'Tracking • CRO • Optimization',
    ],
];

?>

<main>

    <!-- Hero Section -->
    <section class="inner-hero services-hero">
        <div class="container-fluid cg-container">
            <div class="row align-items-center g-5">

                <div class="col-lg-7">
                    <div class="eyebrow light">
                        <span></span>
                        Growth systems & automation
                    </div>

                    <h1>
                        Build smarter systems.
                        <em>Grow with less friction.</em>
                    </h1>

                    <p class="lead">
                        From digital marketing and lead generation to websites, funnels,
                        AI, GoHighLevel and n8n, CommunityGrowth360 builds the systems
                        that turn attention into measurable growth.
                    </p>

                    <div class="inner-hero-actions">
                        <a
                            class="btn btn-gold btn-lg"
                            href="#services-grid"
                        >
                            Explore services
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>

                        <a
                            class="btn btn-ghost-light btn-lg"
                            href="contact.php"
                        >
                            <i class="fa-solid fa-comments"></i>
                            Talk with us
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="inner-hero-visual services-hero-visual">

                        <div class="inner-hero-photo">
                            <img
                                src="assets/images/services-hero.png"
                                alt="Team working on growth systems"
                            >
                        </div>

                        <div class="inner-float-card">
                            <span>One connected engine</span>
                            <strong>
                                Leads → CRM → automation → follow-up → growth.
                            </strong>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Services Intro -->
    <section class="inner-section soft services-intro">
        <div class="container-fluid cg-container">

            <div class="row align-items-end g-4">

                <div class="col-lg-7">
                    <div class="inner-kicker">
                        The growth stack
                    </div>

                    <h2 class="inner-title">
                        Nine capabilities.
                        <em>One connected system.</em>
                    </h2>
                </div>

                <div class="col-lg-5">
                    <p class="inner-copy">
                        Choose one capability or combine several. We build the digital
                        systems around your goals, your audience and the way your
                        organization actually works.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- Services Grid -->
    <section
        class="inner-section services-grid-section"
        id="services-grid"
    >
        <div class="container-fluid cg-container">

            <div class="services-grid">

                <?php foreach ($services as [$number, $title, $description, $icon, $slug, $tags]): ?>

                    <article
                        id="<?= htmlspecialchars($slug) ?>"
                        class="service-card service-<?= htmlspecialchars($slug) ?>"
                    >

                        <div class="service-card-top">

                            <span class="service-number">
                                <?= htmlspecialchars($number) ?>
                            </span>

                            <span class="service-icon">
                                <i class="fa-solid <?= htmlspecialchars($icon) ?>"></i>
                            </span>

                        </div>


                        <div class="service-card-body">

                            <div class="service-card-kicker">
                                CommunityGrowth360 service
                            </div>

                            <h3>
                                <?= htmlspecialchars($title) ?>
                            </h3>

                            <p>
                                <?= htmlspecialchars($description) ?>
                            </p>


                            <div class="service-tags">

                                <?php foreach (explode(' • ', $tags) as $tag): ?>

                                    <span>
                                        <?= htmlspecialchars($tag) ?>
                                    </span>

                                <?php endforeach; ?>

                            </div>

                        </div>


                        <a
                            href="<?= htmlspecialchars($slug) ?>.php"
                            class="service-card-link"
                        >
                            Explore service
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <!-- System / Automation Section -->
    <section class="dark-band services-system-band">
        <div class="container-fluid cg-container">

            <div class="row align-items-center g-5">

                <div class="col-lg-7">

                    <div class="inner-kicker">
                        Built around your community goals
                    </div>

                    <h2 class="services-band-title">
                        Connect the pieces.
                        <span>Remove the busywork.</span>
                    </h2>

                    <p class="services-band-copy">
                        We can combine services into a practical stack around your
                        goals—for example, a lead-generation funnel connected to
                        GoHighLevel, automated through n8n, followed by AI-assisted
                        qualification and reporting.
                    </p>

                </div>


                <div class="col-lg-5">

                    <div class="services-stack-card">

                        <div>
                            <span>01</span>
                            <strong>Capture</strong>
                            <small>Digital marketing + funnels</small>
                        </div>

                        <div>
                            <span>02</span>
                            <strong>Connect</strong>
                            <small>GoHighLevel + n8n</small>
                        </div>

                        <div>
                            <span>03</span>
                            <strong>Automate</strong>
                            <small>AI-assisted automation</small>
                        </div>

                        <div>
                            <span>04</span>
                            <strong>Measure</strong>
                            <small>Reporting + optimization</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- CTA Section -->
    <section class="inner-section services-cta-section">
        <div class="container-fluid cg-container">

            <div class="cta-shell cta-shell-premium">
                <div class="cta-shell-copy">
                    <div class="eyebrow light"><span></span> Ready to grow?</div>
                    <h2>
                        Tell us what is slowing growth down.
                        <em>We’ll map the next move.</em>
                    </h2>
                    <p>
                        Bring us your current tools, bottleneck or growth goal.
                        We can help identify what should be automated, connected,
                        rebuilt or improved first.
                    </p>
                </div>
                <div class="cta-shell-actions">
                    <a href="contact.php" class="btn btn-gold btn-lg">
                        Start a conversation
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>