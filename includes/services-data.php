<?php
/**
 * Shared service catalog for listing + detail pages.
 * Each service detail page sets $service_slug then includes service-detail.php.
 */
function cg_services_catalog(): array
{
    return [
        'digital-marketing' => [
            'number' => '01',
            'slug' => 'digital-marketing',
            'file' => 'digital-marketing.php',
            'title' => 'Digital Marketing',
            'short' => 'Build a connected growth engine across campaigns, content, paid and organic channels, audience targeting and measurable growth.',
            'icon' => 'fa-bullhorn',
            'tags' => ['Campaigns', 'Content', 'Paid & organic'],
            'eyebrow' => 'Growth systems',
            'hero_em' => 'that compounds.',
            'hero_lead' => 'We design and run digital marketing systems that help Muslim-owned businesses, professionals and community organizations attract the right audience, earn trust and convert attention into real conversations.',
            'overview' => [
                'Most organizations already post content or run ads—but without a connected system, effort stays scattered. Digital marketing only works when messaging, channels, targeting and follow-up reinforce each other.',
                'CommunityGrowth360 builds practical marketing systems around your goals: awareness, lead flow, event registrations, donor interest or service inquiries. We focus on clarity, consistency and measurable movement—not vanity metrics.',
                'Whether you need a full channel strategy or a tighter campaign engine, we help you communicate with purpose and grow with less waste.',
            ],
            'highlights' => ['Channel strategy', 'Campaign systems', 'Audience targeting', 'Content frameworks', 'Performance tracking'],
            'audiences' => [
                ['Muslim-owned businesses', 'Owners who need a clearer path from visibility to qualified inquiries.'],
                ['Professionals & consultants', 'Experts who want consistent positioning and warmer lead flow.'],
                ['Mosques & community orgs', 'Teams promoting programs, events and community services with stronger reach.'],
            ],
            'includes' => [
                'Positioning and messaging clarity for your audience',
                'Channel strategy across organic, paid and owned media',
                'Campaign planning for offers, events or lead magnets',
                'Content frameworks and posting/campaign rhythms',
                'Audience targeting and segmentation guidance',
                'Landing page and CTA alignment recommendations',
                'Tracking setup for meaningful growth metrics',
                'Monthly or project-based optimization support',
            ],
            'process' => [
                ['Discover', 'Clarify goals, audience, offers and current channel performance.'],
                ['Design', 'Map messaging, channel mix, campaign structure and conversion points.'],
                ['Deploy', 'Launch content, campaigns and tracking with clear ownership.'],
                ['Optimize', 'Review results, tighten targeting and improve what converts.'],
            ],
            'outcomes' => [
                'Clearer brand and offer messaging across channels',
                'More consistent visibility with less random activity',
                'Better-qualified inquiries and engagement',
                'A measurable system you can improve over time',
            ],
            'related' => ['lead-generation', 'website-funnels', 'seo-aeo-geo'],
        ],

        'website-funnels' => [
            'number' => '02',
            'slug' => 'website-funnels',
            'file' => 'website-funnels.php',
            'title' => 'Website & Funnel Development',
            'short' => 'Create high-converting websites, landing pages and funnels designed to turn attention into qualified opportunities.',
            'icon' => 'fa-laptop-code',
            'tags' => ['Websites', 'Funnels', 'Conversion'],
            'eyebrow' => 'Conversion systems',
            'hero_em' => 'into action.',
            'hero_lead' => 'We build websites and funnels that guide visitors from first visit to clear next steps—appointments, applications, inquiries or purchases—without friction or confusion.',
            'overview' => [
                'A beautiful website is not enough. If visitors cannot quickly understand who you help, what to do next, or why to trust you, attention leaks away.',
                'We design and develop websites and funnels around your customer journey: awareness pages, offer landing pages, lead capture flows and follow-up handoffs into CRM or automation.',
                'The result is a digital front door that looks premium, loads cleanly and converts with intention.',
            ],
            'highlights' => ['Conversion websites', 'Landing pages', 'Lead funnels', 'Mobile-first UX', 'CRM-ready forms'],
            'audiences' => [
                ['Service businesses', 'Teams that need a site that books calls and explains value fast.'],
                ['Program & event organizers', 'Groups that need registration and information funnels that convert.'],
                ['Growing brands', 'Organizations outgrowing brochure sites and ready for a growth system.'],
            ],
            'includes' => [
                'Discovery, sitemap and conversion-focused page planning',
                'Premium UI design aligned with your brand',
                'Website and/or landing page development',
                'Funnel structure for lead magnets, offers or registrations',
                'Forms, CTAs and thank-you / next-step flows',
                'Mobile responsiveness and basic performance polish',
                'Integration-ready handoff to CRM or automation tools',
                'Launch support and iteration recommendations',
            ],
            'process' => [
                ['Map', 'Define audience journeys, offers and conversion goals.'],
                ['Design', 'Create layouts that communicate value and reduce friction.'],
                ['Build', 'Develop pages, forms and funnel steps with clean structure.'],
                ['Launch', 'Test, publish and connect to tracking or CRM systems.'],
            ],
            'outcomes' => [
                'A clearer path from visitor to qualified action',
                'Stronger first impressions that match your brand',
                'Fewer drop-offs between interest and inquiry',
                'A site foundation ready for ads, SEO and automation',
            ],
            'related' => ['digital-marketing', 'lead-generation', 'crm-sales'],
        ],

        'ai-automation' => [
            'number' => '03',
            'slug' => 'ai-automation',
            'file' => 'ai-automation.php',
            'title' => 'AI Automation',
            'short' => 'Use practical AI workflows and agents to qualify leads, handle repetitive tasks, generate responses and support operations.',
            'icon' => 'fa-wand-magic-sparkles',
            'tags' => ['AI workflows', 'Agents', 'Operations'],
            'eyebrow' => 'Practical AI',
            'hero_em' => 'where it saves time.',
            'hero_lead' => 'We implement AI where it actually helps—qualification, drafting, routing, support responses and internal operations—so your team spends more time on high-value work.',
            'overview' => [
                'AI is useful when it is tied to a real workflow. Random chatbots and disconnected experiments rarely create lasting value.',
                'We focus on practical AI automation: lead triage, response drafts, knowledge assistants, internal summaries and process support that fit your tools and standards.',
                'Every implementation is designed around control, clarity and usefulness—not hype.',
            ],
            'highlights' => ['Lead qualification', 'Response assistance', 'Internal agents', 'Workflow AI', 'Human-in-the-loop'],
            'audiences' => [
                ['Busy operators', 'Teams buried in repetitive messages, admin and follow-up.'],
                ['Growth-focused orgs', 'Groups that need faster qualification without losing quality.'],
                ['Service businesses', 'Companies ready to add AI support into existing CRM and ops stacks.'],
            ],
            'includes' => [
                'Use-case discovery and AI opportunity mapping',
                'Prompt / workflow design for specific business tasks',
                'Lead qualification and routing assistants',
                'Draft response and support workflow automation',
                'Internal knowledge or operations assistants',
                'Guardrails, review steps and human approval points',
                'Tool connections through your stack where needed',
                'Testing, documentation and handover training',
            ],
            'process' => [
                ['Identify', 'Find repetitive, high-friction tasks worth automating.'],
                ['Prototype', 'Design a focused AI workflow with clear inputs and outputs.'],
                ['Integrate', 'Connect the workflow into your tools and approval path.'],
                ['Refine', 'Measure usefulness, tighten prompts and improve reliability.'],
            ],
            'outcomes' => [
                'Faster response and qualification cycles',
                'Less repetitive work for your team',
                'More consistent communication quality',
                'AI support that fits real operations',
            ],
            'related' => ['n8n-automation', 'gohighlevel', 'crm-sales'],
        ],

        'gohighlevel' => [
            'number' => '04',
            'slug' => 'gohighlevel',
            'file' => 'gohighlevel.php',
            'title' => 'GoHighLevel',
            'short' => 'Build your CRM, pipelines, appointment flows, campaigns, follow-up sequences and reporting inside GoHighLevel.',
            'icon' => 'fa-chart-line',
            'tags' => ['CRM', 'Pipelines', 'Follow-up'],
            'eyebrow' => 'CRM systems',
            'hero_em' => 'in one place.',
            'hero_lead' => 'We set up and optimize GoHighLevel so leads, conversations, appointments and follow-up live in one connected system your team can actually run.',
            'overview' => [
                'GoHighLevel is powerful—but only if pipelines, automations, calendars and campaigns are configured around how your organization really works.',
                'We build practical GHL systems for lead capture, pipeline stages, appointment booking, nurture sequences, notifications and reporting.',
                'The goal is simple: fewer missed follow-ups, clearer ownership and a CRM that supports growth instead of creating chaos.',
            ],
            'highlights' => ['Pipelines', 'Automations', 'Calendars', 'Campaigns', 'Reporting'],
            'audiences' => [
                ['Agencies & consultants', 'Operators who need cleaner client and lead management.'],
                ['Local service businesses', 'Teams that book appointments and need reliable follow-up.'],
                ['Community initiatives', 'Organizations managing inquiries, registrations and ongoing contact.'],
            ],
            'includes' => [
                'Account structure, pipelines and stage design',
                'Lead capture forms, surveys and inbound routing',
                'Appointment calendars and confirmation workflows',
                'SMS/email follow-up and nurture sequences',
                'Opportunity tracking and team notifications',
                'Tags, custom fields and segmentation setup',
                'Dashboards and reporting for key actions',
                'Training for your team to run the system day to day',
            ],
            'process' => [
                ['Audit', 'Review current lead flow, tools and team handoffs.'],
                ['Configure', 'Build pipelines, calendars, fields and core automations.'],
                ['Activate', 'Connect forms, campaigns and follow-up journeys.'],
                ['Coach', 'Train your team and refine based on real usage.'],
            ],
            'outcomes' => [
                'One system for leads, appointments and follow-up',
                'Fewer lost conversations and missed opportunities',
                'Clearer pipeline visibility for your team',
                'Faster response times with less manual chasing',
            ],
            'related' => ['crm-sales', 'ai-automation', 'lead-generation'],
        ],

        'n8n-automation' => [
            'number' => '05',
            'slug' => 'n8n-automation',
            'file' => 'n8n-automation.php',
            'title' => 'n8n Automation',
            'short' => 'Connect your apps and automate complex workflows—from data sync and lead routing to notifications, APIs and backend processes.',
            'icon' => 'fa-diagram-project',
            'tags' => ['Workflows', 'Integrations', 'APIs'],
            'eyebrow' => 'Backend automation',
            'hero_em' => 'behind growth.',
            'hero_lead' => 'We use n8n to connect your tools and automate the behind-the-scenes work—routing, syncing, notifications and multi-step processes that keep growth systems running.',
            'overview' => [
                'Growth breaks when tools do not talk to each other. Manual copy-paste, missed handoffs and delayed updates quietly drain capacity.',
                'n8n lets us design flexible automations across CRMs, forms, sheets, email platforms, databases and custom APIs.',
                'We build reliable workflows with clear logic, error handling and maintainable structure—so automation becomes infrastructure, not a fragile experiment.',
            ],
            'highlights' => ['App integrations', 'Lead routing', 'Data sync', 'API workflows', 'Ops automation'],
            'audiences' => [
                ['Ops-minded teams', 'Groups tired of repetitive admin between tools.'],
                ['Growth systems users', 'Organizations connecting forms, CRMs, AI and messaging.'],
                ['Technical founders', 'Leaders who want flexible automation without brittle one-off scripts.'],
            ],
            'includes' => [
                'Automation opportunity mapping across your stack',
                'n8n workflow design and implementation',
                'Lead routing, enrichment and notification flows',
                'CRM / form / sheet / email sync workflows',
                'Webhook and API-based integrations',
                'Conditional logic, retries and error handling',
                'Documentation for each major workflow',
                'Handover support for ongoing maintenance',
            ],
            'process' => [
                ['Trace', 'Map where data and tasks get stuck between tools.'],
                ['Build', 'Create n8n workflows with clear triggers and actions.'],
                ['Harden', 'Add validation, logging and failure handling.'],
                ['Maintain', 'Document flows and refine as your stack evolves.'],
            ],
            'outcomes' => [
                'Less manual data movement between platforms',
                'Faster, more reliable handoffs',
                'Connected systems that support scale',
                'Automation your team can understand and trust',
            ],
            'related' => ['ai-automation', 'gohighlevel', 'analytics-conversion'],
        ],

        'lead-generation' => [
            'number' => '06',
            'slug' => 'lead-generation',
            'file' => 'lead-generation.php',
            'title' => 'Lead Generation',
            'short' => 'Generate and capture qualified opportunities with targeted campaigns, funnels, forms, qualification and automated follow-up.',
            'icon' => 'fa-bullseye',
            'tags' => ['Lead capture', 'Funnels', 'Qualification'],
            'eyebrow' => 'Pipeline growth',
            'hero_em' => 'that converts.',
            'hero_lead' => 'We build lead generation systems that attract the right people, capture interest cleanly and move prospects into follow-up—so your pipeline stays active and qualified.',
            'overview' => [
                'Lead generation fails when traffic, offers and follow-up are disconnected. More form fills mean little if the wrong people convert or no one responds quickly.',
                'We design lead systems around offer clarity, capture points, qualification logic and automated next steps.',
                'The focus is qualified conversations—not just more contacts in a spreadsheet.',
            ],
            'highlights' => ['Offer strategy', 'Capture funnels', 'Lead magnets', 'Qualification', 'Follow-up'],
            'audiences' => [
                ['Businesses needing steady inquiries', 'Teams that want predictable lead flow.'],
                ['Consultants & coaches', 'Professionals who need better-fit discovery calls.'],
                ['Program recruiters', 'Organizations filling workshops, cohorts or community programs.'],
            ],
            'includes' => [
                'Ideal audience and offer definition',
                'Lead magnet / campaign concept development',
                'Landing pages and capture form strategy',
                'Paid or organic campaign support as needed',
                'Lead qualification rules and routing',
                'Follow-up sequences and handoff workflows',
                'CRM pipeline connection for new leads',
                'Performance review and conversion improvements',
            ],
            'process' => [
                ['Define', 'Clarify audience, offer and what “qualified” means.'],
                ['Attract', 'Build campaign and content paths that earn attention.'],
                ['Capture', 'Install funnels, forms and qualification steps.'],
                ['Convert', 'Follow up quickly and improve the path to conversation.'],
            ],
            'outcomes' => [
                'A clearer offer that attracts the right people',
                'More consistent inbound opportunities',
                'Better qualification before sales or program conversations',
                'Follow-up that protects momentum',
            ],
            'related' => ['digital-marketing', 'website-funnels', 'gohighlevel'],
        ],

        'seo-aeo-geo' => [
            'number' => '07',
            'slug' => 'seo-aeo-geo',
            'file' => 'seo-aeo-geo.php',
            'title' => 'SEO • AEO • GEO',
            'short' => 'Improve visibility across Google and emerging AI search experiences with technical, content and answer-focused optimization.',
            'icon' => 'fa-magnifying-glass-chart',
            'tags' => ['SEO', 'AEO', 'GEO'],
            'eyebrow' => 'Search visibility',
            'hero_em' => 'across search & AI.',
            'hero_lead' => 'We help your organization show up in classic search and emerging answer engines—with technical foundations, useful content and clear entity signals.',
            'overview' => [
                'Search is changing. People still Google, but they also discover answers through AI summaries, assistants and generative experiences.',
                'Our SEO • AEO • GEO work strengthens your visibility where trust is earned: technical health, content clarity, topical authority and answer-ready structure.',
                'We focus on sustainable discoverability—not shortcuts that collapse when algorithms shift.',
            ],
            'highlights' => ['Technical SEO', 'Content strategy', 'Answer optimization', 'Entity signals', 'Search measurement'],
            'audiences' => [
                ['Local & national service brands', 'Organizations that need to be found for key services.'],
                ['Content-driven teams', 'Groups publishing resources who want stronger organic reach.'],
                ['Community institutions', 'Mosques, centers and initiatives seeking trusted visibility online.'],
            ],
            'includes' => [
                'Technical SEO audit and priority fixes',
                'Keyword / topic / intent research',
                'On-page optimization for key service pages',
                'Content briefs for search and answer engines',
                'Structured data and FAQ / answer-ready formatting',
                'Entity and brand clarity recommendations',
                'Internal linking and topical cluster guidance',
                'Tracking setup for organic visibility and conversions',
            ],
            'process' => [
                ['Audit', 'Assess technical, content and visibility gaps.'],
                ['Prioritize', 'Choose pages and topics with the highest growth leverage.'],
                ['Optimize', 'Improve structure, content and answer readiness.'],
                ['Measure', 'Track rankings, visibility and assisted conversions.'],
            ],
            'outcomes' => [
                'Stronger organic presence for priority services',
                'Content that answers real user questions',
                'Better readiness for AI-assisted discovery',
                'A clearer long-term search growth path',
            ],
            'related' => ['digital-marketing', 'website-funnels', 'analytics-conversion'],
        ],

        'crm-sales' => [
            'number' => '08',
            'slug' => 'crm-sales',
            'file' => 'crm-sales.php',
            'title' => 'CRM & Sales Automation',
            'short' => 'Connect lead capture, pipelines, appointments, follow-up and customer journeys into one measurable sales system.',
            'icon' => 'fa-users-gear',
            'tags' => ['CRM', 'Sales', 'Customer journeys'],
            'eyebrow' => 'Sales systems',
            'hero_em' => 'your team can run.',
            'hero_lead' => 'We design CRM and sales automation that gives your team clear stages, timely follow-up and visibility from first inquiry to closed outcome.',
            'overview' => [
                'Sales systems fail when stages are vague, ownership is unclear and follow-up depends on memory.',
                'We build CRM structures and automations that match your real sales or enrollment process—lead intake, qualification, appointments, proposals, nurturing and reactivation.',
                'Whether you use GoHighLevel or another CRM stack, the goal is operational clarity and consistent conversion behavior.',
            ],
            'highlights' => ['Pipeline design', 'Sales follow-up', 'Appointments', 'Lifecycle journeys', 'Team visibility'],
            'audiences' => [
                ['Sales-led businesses', 'Teams that need reliable pipeline discipline.'],
                ['Service providers', 'Consultants and agencies managing multiple opportunities.'],
                ['Program enrollment teams', 'Organizations converting interest into confirmed participation.'],
            ],
            'includes' => [
                'Sales process mapping and stage definition',
                'CRM pipeline, fields and ownership setup',
                'Lead assignment and notification rules',
                'Appointment and reminder workflows',
                'Follow-up sequences by stage or segment',
                'Proposal / next-step task automation',
                'Win-loss and activity reporting basics',
                'Team training for consistent CRM usage',
            ],
            'process' => [
                ['Map', 'Document the real path from lead to close or enrollment.'],
                ['Structure', 'Build stages, fields, views and responsibilities.'],
                ['Automate', 'Add reminders, sequences and handoff triggers.'],
                ['Adopt', 'Train the team and tighten the system with usage data.'],
            ],
            'outcomes' => [
                'A pipeline that reflects how you actually sell',
                'Fewer stalled leads and missed follow-ups',
                'Better forecasting and activity visibility',
                'A sales process the whole team can follow',
            ],
            'related' => ['gohighlevel', 'lead-generation', 'ai-automation'],
        ],

        'analytics-conversion' => [
            'number' => '09',
            'slug' => 'analytics-conversion',
            'file' => 'analytics-conversion.php',
            'title' => 'Analytics & Conversion',
            'short' => 'Turn website and campaign data into clearer decisions with tracking, conversion analysis and ongoing optimization.',
            'icon' => 'fa-chart-pie',
            'tags' => ['Tracking', 'CRO', 'Optimization'],
            'eyebrow' => 'Measurement systems',
            'hero_em' => 'into decisions.',
            'hero_lead' => 'We help you track what matters, understand where people drop off and improve conversion paths with clearer data and practical tests.',
            'overview' => [
                'If tracking is incomplete, teams guess. If dashboards are noisy, teams freeze. Good analytics makes the next improvement obvious.',
                'We set up measurement for websites, campaigns and funnels—then use that data to improve conversion rates, page clarity and campaign efficiency.',
                'The outcome is not more charts. It is better decisions and a tighter growth loop.',
            ],
            'highlights' => ['Event tracking', 'Funnel analysis', 'CRO insights', 'Dashboards', 'Test roadmap'],
            'audiences' => [
                ['Marketing teams', 'Groups spending on traffic who need clearer ROI signals.'],
                ['Website owners', 'Leaders who want to know which pages convert and why.'],
                ['Growth operators', 'Teams ready to improve funnels with evidence, not opinions.'],
            ],
            'includes' => [
                'Tracking audit across site, forms and campaigns',
                'Event and conversion setup recommendations',
                'Funnel and page performance analysis',
                'Dashboard design for key growth metrics',
                'Conversion bottleneck identification',
                'CRO recommendations for priority pages',
                'Test ideas and measurement plans',
                'Ongoing optimization support as needed',
            ],
            'process' => [
                ['Instrument', 'Ensure important actions are tracked correctly.'],
                ['Analyze', 'Find drop-offs, weak pages and channel inefficiencies.'],
                ['Recommend', 'Prioritize conversion improvements with clear impact.'],
                ['Iterate', 'Test, learn and refine the growth system.'],
            ],
            'outcomes' => [
                'Cleaner visibility into what drives results',
                'Faster identification of conversion leaks',
                'Smarter budget and content decisions',
                'A continuous improvement loop for growth',
            ],
            'related' => ['website-funnels', 'digital-marketing', 'seo-aeo-geo'],
        ],
    ];
}

function cg_get_service(string $slug): ?array
{
    $all = cg_services_catalog();
    return $all[$slug] ?? null;
}

function cg_related_services(array $service): array
{
    $all = cg_services_catalog();
    $related = [];
    foreach ($service['related'] as $slug) {
        if (isset($all[$slug])) {
            $related[] = $all[$slug];
        }
    }
    return $related;
}
