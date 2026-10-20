<?php
$page_title = 'Privacy Policy — CommunityGrowth360';
$active_page = '';
$body_class = 'inner-page legal-page privacy-page';
require __DIR__ . '/includes/header.php';

$sections = [
  ['intro', '01', 'Introduction & scope'],
  ['collect', '02', 'Information we collect'],
  ['use', '03', 'How we use information'],
  ['cookies', '04', 'Cookies, analytics & similar technologies'],
  ['share', '05', 'How we share information'],
  ['retention', '06', 'Data retention'],
  ['security', '07', 'Security'],
  ['children', '08', 'Children’s privacy'],
  ['rights', '09', 'Your choices & rights'],
  ['third-party', '10', 'Third-party links & services'],
  ['international', '11', 'International considerations'],
  ['changes', '12', 'Changes to this policy'],
  ['contact', '13', 'Contact us'],
];
?>
<main>
  <section class="legal-hero">
    <div class="container-fluid cg-container">
      <div class="legal-hero-inner">
        <div class="eyebrow light"><span></span> Legal</div>
        <h1>Privacy <em>Policy.</em></h1>
        <p class="lead">This Privacy Policy explains how CommunityGrowth360 (“we,” “us,” or “our”) collects, uses, discloses, and protects information in connection with our website, communications, programs, and related digital services.</p>
        <div class="legal-hero-meta">
          <span class="legal-chip"><i class="fa-regular fa-calendar"></i> Last updated: October 2026</span>
          <a class="legal-chip legal-chip-link" href="terms.php"><i class="fa-solid fa-file-lines"></i> View Terms of Use</a>
          <a class="legal-chip legal-chip-link" href="contact.php"><i class="fa-regular fa-envelope"></i> Contact us</a>
        </div>
      </div>
    </div>
  </section>

  <section class="legal-body-section">
    <div class="container-fluid cg-container">
      <div class="legal-layout">
        <aside class="legal-toc" aria-label="On this page">
          <div class="legal-toc-card">
            <strong>On this page</strong>
            <nav>
              <?php foreach ($sections as [$id, $num, $label]): ?>
                <a href="#<?= htmlspecialchars($id) ?>"><span><?= htmlspecialchars($num) ?></span><?= htmlspecialchars($label) ?></a>
              <?php endforeach; ?>
            </nav>
          </div>
        </aside>

        <article class="legal-document">
          <div class="legal-notice">
            <i class="fa-solid fa-shield-halved"></i>
            <p>This policy is intended to provide a clear, formal overview of our privacy practices. It is not legal advice. If you have questions about how your information is handled, please contact us using the details below.</p>
          </div>

          <section class="legal-block" id="intro">
            <div class="legal-block-head"><span>01</span><h2>Introduction &amp; scope</h2></div>
            <p>CommunityGrowth360 is committed to respecting privacy and handling personal information responsibly. This Privacy Policy applies to information collected through our public website, online forms, email communications, program or event registrations, newsletter subscriptions, and other interactions you may have with us online.</p>
            <p>By accessing or using our website or submitting information to us, you acknowledge the practices described in this policy. If you do not agree with this policy, please discontinue use of the applicable services and contact us with any concerns.</p>
          </section>

          <section class="legal-block" id="collect">
            <div class="legal-block-head"><span>02</span><h2>Information we collect</h2></div>
            <p>We may collect information in the following categories, depending on how you interact with us:</p>
            <h3>Information you provide directly</h3>
            <ul>
              <li>Contact details such as name, email address, phone number, organization, role, and mailing address</li>
              <li>Messages, inquiries, partnership requests, volunteer interest, or other content you submit through forms</li>
              <li>Program, workshop, or event registration details</li>
              <li>Newsletter or communications preferences</li>
              <li>Any other information you choose to share with us</li>
            </ul>
            <h3>Information collected automatically</h3>
            <ul>
              <li>Device and browser information, operating system, and general technical diagnostics</li>
              <li>IP address, approximate location derived from IP, and referral source</li>
              <li>Pages viewed, links clicked, session timing, and similar usage data</li>
              <li>Cookie identifiers and similar technologies described below</li>
            </ul>
            <h3>Information from service providers or partners</h3>
            <p>Where reasonably necessary to operate our website, communications, or programs, we may receive limited information from trusted service providers (for example, form, email, analytics, CRM, or hosting providers) or from partners involved in a specific initiative you have joined.</p>
          </section>

          <section class="legal-block" id="use">
            <div class="legal-block-head"><span>03</span><h2>How we use information</h2></div>
            <p>We use collected information for legitimate operational, communication, and improvement purposes, including to:</p>
            <ul>
              <li>Respond to inquiries and provide requested information or support</li>
              <li>Administer programs, events, workshops, partnerships, and related registrations</li>
              <li>Send service-related notices and, where appropriate, updates about opportunities, resources, or community initiatives</li>
              <li>Operate, maintain, secure, and improve our website and digital systems</li>
              <li>Analyze aggregate usage trends and evaluate engagement with content or programs</li>
              <li>Prevent fraud, abuse, security incidents, or misuse of our services</li>
              <li>Comply with applicable legal, regulatory, or contractual obligations</li>
            </ul>
            <p>We do not use personal information for purposes that are incompatible with those described in this policy without providing appropriate notice where required.</p>
          </section>

          <section class="legal-block" id="cookies">
            <div class="legal-block-head"><span>04</span><h2>Cookies, analytics &amp; similar technologies</h2></div>
            <p>Our website may use cookies, pixels, local storage, and similar technologies to support core site functionality, remember preferences, measure performance, and understand how visitors use the site.</p>
            <ul>
              <li><strong>Essential technologies</strong> help the site function securely and reliably.</li>
              <li><strong>Analytics technologies</strong> help us understand traffic patterns, page performance, and content usefulness in aggregate.</li>
              <li><strong>Preference technologies</strong> may remember settings that improve your experience.</li>
            </ul>
            <p>You can typically control cookies through your browser settings. Disabling certain cookies may affect site functionality. Where a third-party analytics or marketing tool is used, that provider may process data under its own privacy terms.</p>
          </section>

          <section class="legal-block" id="share">
            <div class="legal-block-head"><span>05</span><h2>How we share information</h2></div>
            <p>We do not sell personal information. We may share information only in limited circumstances, including with:</p>
            <ul>
              <li><strong>Service providers</strong> who assist with website hosting, email delivery, forms, CRM, analytics, automation, or related operations, under appropriate confidentiality and use limitations</li>
              <li><strong>Program or event partners</strong> when reasonably necessary to deliver a program, workshop, or collaboration you have requested or joined</li>
              <li><strong>Professional advisers</strong> such as legal, accounting, or security consultants when needed</li>
              <li><strong>Authorities or other parties</strong> when we believe disclosure is required by law, regulation, legal process, or to protect rights, safety, or security</li>
              <li><strong>Business continuity contexts</strong> such as a reorganization, merger, or transfer of relevant assets, subject to appropriate safeguards</li>
            </ul>
            <p>We expect service providers to use personal information only to perform services on our behalf and in a manner consistent with this policy.</p>
          </section>

          <section class="legal-block" id="retention">
            <div class="legal-block-head"><span>06</span><h2>Data retention</h2></div>
            <p>We retain personal information only for as long as reasonably necessary to fulfill the purposes described in this policy, including providing services, maintaining business and program records, resolving disputes, enforcing agreements, and complying with legal obligations.</p>
            <p>Retention periods may vary based on the nature of the information, the context of collection, and operational or legal requirements. When information is no longer needed, we take reasonable steps to delete, de-identify, or securely archive it as appropriate.</p>
          </section>

          <section class="legal-block" id="security">
            <div class="legal-block-head"><span>07</span><h2>Security</h2></div>
            <p>We implement reasonable administrative, technical, and organizational measures designed to protect personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            <p>No method of transmission over the internet or method of electronic storage is completely secure. While we work to protect information, we cannot guarantee absolute security. Please use caution when transmitting sensitive information online and notify us promptly if you believe there has been unauthorized access related to your interactions with us.</p>
          </section>

          <section class="legal-block" id="children">
            <div class="legal-block-head"><span>08</span><h2>Children’s privacy</h2></div>
            <p>Our website and general digital services are not directed to children under 13, and we do not knowingly collect personal information from children under 13 through the public website without appropriate authorization.</p>
            <p>If you believe we have collected information from a child under 13 in a manner inconsistent with applicable requirements, please contact us and we will take appropriate steps to review and address the issue, including deletion where required.</p>
          </section>

          <section class="legal-block" id="rights">
            <div class="legal-block-head"><span>09</span><h2>Your choices &amp; rights</h2></div>
            <p>Depending on your location and applicable law, you may have rights or choices regarding personal information, which can include the ability to:</p>
            <ul>
              <li>Request access to personal information you have provided to us</li>
              <li>Request correction or update of inaccurate information</li>
              <li>Request deletion of certain information, subject to legal or operational exceptions</li>
              <li>Opt out of non-essential marketing or newsletter communications</li>
              <li>Control cookies through browser or device settings</li>
            </ul>
            <p>To exercise an applicable request, contact us at <a href="mailto:hello@communitygrowth360.com">hello@communitygrowth360.com</a>. We may need to verify your identity before completing certain requests. Some requests may be limited where we must retain information for legitimate business, security, or legal reasons.</p>
          </section>

          <section class="legal-block" id="third-party">
            <div class="legal-block-head"><span>10</span><h2>Third-party links &amp; services</h2></div>
            <p>Our website may link to or integrate with third-party websites, platforms, tools, or services that are not operated by CommunityGrowth360. This Privacy Policy does not apply to those third parties.</p>
            <p>We encourage you to review the privacy notices of any third-party service you access. We are not responsible for the privacy practices, content, or security of third-party sites or services.</p>
          </section>

          <section class="legal-block" id="international">
            <div class="legal-block-head"><span>11</span><h2>International considerations</h2></div>
            <p>CommunityGrowth360 primarily serves communities and organizations in the United States. If you access our website or submit information from outside the United States, please note that your information may be processed and stored in the United States or other locations where we or our service providers operate.</p>
            <p>By using the website or providing information, you understand that your information may be transferred to and processed in jurisdictions that may have different data-protection rules than those in your location.</p>
          </section>

          <section class="legal-block" id="changes">
            <div class="legal-block-head"><span>12</span><h2>Changes to this policy</h2></div>
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technologies, legal requirements, or operational needs. The “Last updated” date at the top of this page indicates when the current version became effective.</p>
            <p>We encourage you to review this page periodically. Continued use of the website after an update constitutes acknowledgment of the revised policy, except where additional notice or consent is required by applicable law.</p>
          </section>

          <section class="legal-block" id="contact">
            <div class="legal-block-head"><span>13</span><h2>Contact us</h2></div>
            <p>If you have questions, concerns, or requests related to this Privacy Policy or our handling of personal information, please contact:</p>
            <div class="legal-contact-box">
              <strong>CommunityGrowth360</strong>
              <a href="mailto:hello@communitygrowth360.com"><i class="fa-regular fa-envelope"></i> hello@communitygrowth360.com</a>
              <a href="contact.php"><i class="fa-solid fa-arrow-right"></i> Visit the Contact page</a>
            </div>
          </section>

          <div class="legal-doc-footer">
            <p>Also review our <a href="terms.php">Terms of Use</a> for rules governing website access and use.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="legal-cta-band">
    <div class="container-fluid cg-container">
      <div class="legal-cta-card">
        <div>
          <div class="eyebrow"><span></span> Questions about privacy</div>
          <h2>We’re here to help clarify how information is handled.</h2>
          <p>Reach out if you need support with a privacy request, partnership inquiry, or general question.</p>
        </div>
        <div class="legal-cta-actions">
          <a href="mailto:hello@communitygrowth360.com" class="btn btn-gold">Email us <i class="fa-solid fa-arrow-right"></i></a>
          <a href="contact.php" class="btn btn-outline-dark-premium">Contact page <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
