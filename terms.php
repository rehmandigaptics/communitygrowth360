<?php
$page_title = 'Terms of Use — CommunityGrowth360';
$page_description = 'Read the CommunityGrowth360 Terms of Use governing access to our website, content, programs information, and related digital services.';
$active_page = '';
$body_class = 'inner-page legal-page terms-page';
require __DIR__ . '/includes/header.php';

$sections = [
  ['acceptance', '01', 'Acceptance of terms'],
  ['eligibility', '02', 'Eligibility & accounts'],
  ['use', '03', 'Website use & prohibited conduct'],
  ['programs', '04', 'Programs, events & registrations'],
  ['ip', '05', 'Intellectual property'],
  ['submissions', '06', 'User submissions'],
  ['third-party', '07', 'Third-party links & services'],
  ['disclaimers', '08', 'Disclaimers'],
  ['liability', '09', 'Limitation of liability'],
  ['indemnification', '10', 'Indemnification'],
  ['governing-law', '11', 'Governing law'],
  ['changes', '12', 'Changes to these terms'],
  ['contact', '13', 'Contact'],
];
?>
<main>
  <section class="legal-hero">
    <div class="container-fluid cg-container">
      <div class="legal-hero-inner">
        <div class="eyebrow light"><span></span> Legal</div>
        <h1>Terms of <em>Use.</em></h1>
        <p class="lead">These Terms of Use (“Terms”) govern your access to and use of the CommunityGrowth360 website and related public digital content. By using the site, you agree to these Terms.</p>
        <div class="legal-hero-meta">
          <span class="legal-chip"><i class="fa-regular fa-calendar"></i> Last updated: October 2026</span>
          <a class="legal-chip legal-chip-link" href="privacy.php"><i class="fa-solid fa-shield-halved"></i> View Privacy Policy</a>
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
            <i class="fa-solid fa-scale-balanced"></i>
            <p>These Terms are a formal website agreement written in plain, comprehensive language. They are not a substitute for legal advice. Separate terms may apply to specific programs, partnerships, or paid services.</p>
          </div>

          <section class="legal-block" id="acceptance">
            <div class="legal-block-head"><span>01</span><h2>Acceptance of terms</h2></div>
            <p>By accessing, browsing, or otherwise using the CommunityGrowth360 website, you acknowledge that you have read, understood, and agree to be bound by these Terms and our <a href="privacy.php">Privacy Policy</a>.</p>
            <p>If you do not agree to these Terms, you must not access or use the website. If you are using the website on behalf of an organization, you represent that you have authority to bind that organization to these Terms.</p>
          </section>

          <section class="legal-block" id="eligibility">
            <div class="legal-block-head"><span>02</span><h2>Eligibility &amp; accounts</h2></div>
            <p>The website is intended for users who are legally able to enter into these Terms. Where a feature requires registration, account creation, or form submission, you agree to provide accurate, current, and complete information and to keep that information updated as needed.</p>
            <p>You are responsible for maintaining the confidentiality of any credentials associated with your access and for all activity occurring under your submissions or accounts, to the extent such features are offered. Notify us promptly of any unauthorized use related to your interactions with the site.</p>
          </section>

          <section class="legal-block" id="use">
            <div class="legal-block-head"><span>03</span><h2>Website use &amp; prohibited conduct</h2></div>
            <p>You may use the website only for lawful purposes and in accordance with these Terms. You agree not to:</p>
            <ul>
              <li>Violate any applicable law, regulation, or third-party right</li>
              <li>Attempt to gain unauthorized access to systems, accounts, data, or networks connected to the website</li>
              <li>Interfere with or disrupt the operation, security, or integrity of the website</li>
              <li>Use automated means to scrape, harvest, or extract content in bulk without our prior written permission</li>
              <li>Transmit malware, spam, or other harmful or deceptive content</li>
              <li>Misrepresent your identity or affiliation, or submit false or misleading information</li>
              <li>Use the website to harass, abuse, or harm any person or organization</li>
              <li>Copy, modify, distribute, or exploit website content except as expressly permitted</li>
            </ul>
            <p>We may suspend or restrict access to the website where we reasonably believe these Terms have been violated or where necessary to protect the site, users, or our operations.</p>
          </section>

          <section class="legal-block" id="programs">
            <div class="legal-block-head"><span>04</span><h2>Programs, events &amp; registrations</h2></div>
            <p>Information on the website about programs, workshops, events, partnerships, trainings, and related opportunities is provided for general informational purposes. Schedules, availability, eligibility criteria, formats, and participation requirements may change.</p>
            <p>Registration for a specific program or event may be subject to additional terms, capacity limits, confirmation requirements, or partner rules. Where such additional terms apply, they will be communicated through the relevant registration process or related materials.</p>
            <p>Submission of an inquiry or registration interest does not guarantee acceptance, placement, or participation.</p>
          </section>

          <section class="legal-block" id="ip">
            <div class="legal-block-head"><span>05</span><h2>Intellectual property</h2></div>
            <p>Unless otherwise indicated, the website and its original content, branding, logos, text, graphics, layout, design elements, and other materials are owned by or licensed to CommunityGrowth360 and are protected by intellectual property and other applicable laws.</p>
            <p>You may view and use website content for your personal, non-commercial informational purposes. You may not reproduce, distribute, publicly display, modify, create derivative works from, or commercially exploit our content without prior written permission, except as allowed by applicable law.</p>
            <p>All third-party trademarks, service marks, and logos remain the property of their respective owners.</p>
          </section>

          <section class="legal-block" id="submissions">
            <div class="legal-block-head"><span>06</span><h2>User submissions</h2></div>
            <p>If you submit information, feedback, messages, ideas, testimonials, media, or other content to us through the website or related channels (“Submissions”), you represent that you have the right to provide that content and that it does not violate any law or third-party right.</p>
            <p>By providing Submissions, you grant CommunityGrowth360 a non-exclusive, worldwide, royalty-free license to use, reproduce, adapt, publish, and display such Submissions as reasonably needed to operate our website, respond to you, administer programs, and improve our services, subject to our Privacy Policy.</p>
            <p>You remain responsible for the content of your Submissions. We may refuse, remove, or decline to use any Submission at our discretion.</p>
          </section>

          <section class="legal-block" id="third-party">
            <div class="legal-block-head"><span>07</span><h2>Third-party links &amp; services</h2></div>
            <p>The website may reference or link to third-party websites, tools, platforms, or resources. These are provided for convenience only. We do not control and are not responsible for third-party content, availability, security, policies, or practices.</p>
            <p>Your use of third-party services is at your own risk and may be subject to separate terms and privacy policies. Inclusion of a link does not imply endorsement by CommunityGrowth360.</p>
          </section>

          <section class="legal-block" id="disclaimers">
            <div class="legal-block-head"><span>08</span><h2>Disclaimers</h2></div>
            <p>THE WEBSITE AND ALL CONTENT ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS. TO THE MAXIMUM EXTENT PERMITTED BY LAW, COMMUNITYGROWTH360 DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT.</p>
            <p>We do not warrant that the website will be uninterrupted, secure, error-free, or free of harmful components, or that content will always be complete, accurate, or current.</p>
            <p>General website information is not a substitute for professional legal, financial, medical, employment, or other licensed advice. You should obtain appropriate professional guidance where needed.</p>
          </section>

          <section class="legal-block" id="liability">
            <div class="legal-block-head"><span>09</span><h2>Limitation of liability</h2></div>
            <p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, COMMUNITYGROWTH360 AND ITS DIRECTORS, OFFICERS, EMPLOYEES, VOLUNTEERS, PARTNERS, AND AGENTS WILL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, EXEMPLARY, OR PUNITIVE DAMAGES, OR FOR ANY LOSS OF PROFITS, REVENUE, DATA, GOODWILL, OR BUSINESS OPPORTUNITY, ARISING OUT OF OR RELATED TO YOUR USE OF OR INABILITY TO USE THE WEBSITE.</p>
            <p>TO THE MAXIMUM EXTENT PERMITTED BY LAW, OUR TOTAL LIABILITY FOR ANY CLAIM ARISING OUT OF OR RELATING TO THE WEBSITE OR THESE TERMS WILL NOT EXCEED ONE HUNDRED U.S. DOLLARS (US $100) OR THE AMOUNT YOU PAID TO US, IF ANY, FOR THE SPECIFIC SERVICE GIVING RISE TO THE CLAIM DURING THE TWELVE (12) MONTHS PRECEDING THE CLAIM, WHICHEVER IS GREATER.</p>
            <p>Some jurisdictions do not allow certain limitations; in such cases, our liability will be limited to the fullest extent permitted by law.</p>
          </section>

          <section class="legal-block" id="indemnification">
            <div class="legal-block-head"><span>10</span><h2>Indemnification</h2></div>
            <p>You agree to defend, indemnify, and hold harmless CommunityGrowth360 and its directors, officers, employees, volunteers, partners, and agents from and against any claims, liabilities, damages, losses, and expenses (including reasonable attorneys’ fees) arising out of or related to:</p>
            <ul>
              <li>Your use of the website</li>
              <li>Your Submissions</li>
              <li>Your violation of these Terms</li>
              <li>Your violation of any law or third-party right</li>
            </ul>
          </section>

          <section class="legal-block" id="governing-law">
            <div class="legal-block-head"><span>11</span><h2>Governing law</h2></div>
            <p>These Terms and any dispute arising out of or relating to them or the website shall be governed by applicable laws of the United States, without regard to conflict-of-law principles that would require application of another jurisdiction’s laws, except where mandatory local law provides otherwise.</p>
            <p>If any provision of these Terms is held unlawful, void, or unenforceable, that provision will be enforced to the maximum extent permissible, and the remaining provisions will remain in full force and effect.</p>
            <p>Our failure to enforce any right or provision of these Terms will not constitute a waiver of such right or provision.</p>
          </section>

          <section class="legal-block" id="changes">
            <div class="legal-block-head"><span>12</span><h2>Changes to these terms</h2></div>
            <p>We may update these Terms from time to time. The “Last updated” date at the top of this page reflects the effective date of the current version.</p>
            <p>Material changes may be highlighted on this page or through other reasonable notice. Continued use of the website after changes become effective constitutes acceptance of the revised Terms, except where additional consent is required by law.</p>
          </section>

          <section class="legal-block" id="contact">
            <div class="legal-block-head"><span>13</span><h2>Contact</h2></div>
            <p>If you have questions about these Terms, please contact:</p>
            <div class="legal-contact-box">
              <strong>CommunityGrowth360</strong>
              <a href="mailto:hello@communitygrowth360.com"><i class="fa-regular fa-envelope"></i> hello@communitygrowth360.com</a>
              <a href="contact.php"><i class="fa-solid fa-arrow-right"></i> Visit the Contact page</a>
            </div>
          </section>

          <div class="legal-doc-footer">
            <p>Also review our <a href="privacy.php">Privacy Policy</a> to understand how information is collected and used.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="legal-cta-band">
    <div class="container-fluid cg-container">
      <div class="legal-cta-card">
        <div>
          <div class="eyebrow"><span></span> Questions about these terms</div>
          <h2>Need clarification before you partner or register?</h2>
          <p>We’re happy to point you to the right next step for programs, partnerships, or general website questions.</p>
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
