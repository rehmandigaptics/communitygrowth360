<?php

$page_title = 'Muslim Community Events & Opportunities — CommunityGrowth360';

$active_page = 'events';
$body_class = 'inner-page';

require __DIR__ . '/includes/header.php';

?>

<main>

    <!-- Hero Section -->
    <section class="inner-hero">
        <div class="container-fluid cg-container">

            <div class="row align-items-center g-5">

                <div class="col-lg-7">

                    <div class="eyebrow light">
                        <span></span>
                        Events & opportunities
                    </div>

                    <h1>
                        Learn together.
                        Connect with purpose.
                        <em>Grow the ummah.</em>
                    </h1>

                    <p class="lead">
                        Our events are designed around Muslim community needs—
                        practical learning, trusted connections, leadership
                        development and meaningful next steps.
                    </p>

                    <div class="inner-hero-actions">

                        <a
                            href="#upcoming"
                            class="btn btn-gold btn-lg"
                        >
                            Browse upcoming events
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>

                        <a
                            href="contact.php#host"
                            class="btn btn-ghost-light btn-lg"
                        >
                            <i class="fa-solid fa-people-group"></i>
                            Host a workshop
                        </a>

                    </div>

                </div>


                <div class="col-lg-5">

                    <div class="inner-hero-visual">

                        <div class="inner-hero-photo">
                            <img
                                src="assets/images/Events-hero.png"
                                alt="Community event audience"
                            >
                        </div>

                        <div class="inner-float-card">
                            <span>Built for connection</span>

                            <strong>
                                Useful content + real conversation + practical
                                next steps.
                            </strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Upcoming Events -->
    <section
        class="inner-section soft"
        id="upcoming"
    >
        <div class="container-fluid cg-container">

            <div class="row align-items-end mb-5">

                <div class="col-lg-8">

                    <div class="inner-kicker">
                        Upcoming opportunities
                    </div>

                    <h2 class="inner-title">
                        Learn, connect and
                        <em>move the community forward.</em>
                    </h2>

                </div>

                <div class="col-lg-4">

                    <p class="inner-copy">
                        Events can support Muslim community education,
                        entrepreneurship, family resources, leadership
                        and organizational growth.
                    </p>

                </div>

            </div>


            <div class="event-list">

                <!-- Event 01 -->
                <article class="event-premium">

                    <img
                        src="assets/images/Resume.png"
                        alt="Career workshop"
                    >

                    <div class="content">

                        <div class="date">
                            October 05 • Career
                        </div>

                        <h3>
                            Resume & Career Strategy Lab
                        </h3>

                        <p>
                            <i class="fa-regular fa-clock me-2"></i>
                            10:00 AM – 12:00 PM
                        </p>

                        <p>
                            <i class="fa-solid fa-location-dot me-2"></i>
                            Community Learning Center
                        </p>

                        <a
                            href="contact.php"
                            class="program-primary-link-v8"
                        >
                            Reserve a seat
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- Event 02 -->
                <article class="event-premium">

                    <img
                        src="assets/images/Financial.png"
                        alt="Financial literacy workshop"
                    >

                    <div class="content">

                        <div class="date">
                            October 12 • Finance
                        </div>

                        <h3>
                            Financial Literacy for Families
                        </h3>

                        <p>
                            <i class="fa-regular fa-clock me-2"></i>
                            6:00 PM – 7:30 PM
                        </p>

                        <p>
                            <i class="fa-solid fa-video me-2"></i>
                            Virtual Session
                        </p>

                        <a
                            href="contact.php"
                            class="program-primary-link-v8"
                        >
                            Reserve a seat
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>


                <!-- Event 03 -->
                <article class="event-premium">

                    <img
                        src="assets/images/Neighborhood.png"
                        alt="Community leadership workshop"
                    >

                    <div class="content">

                        <div class="date">
                            Community series • Leadership
                        </div>

                        <h3>
                            Neighborhood Leadership Lab
                        </h3>

                        <p>
                            <i class="fa-regular fa-comments me-2"></i>
                            Interactive workshop format
                        </p>

                        <p>
                            <i class="fa-solid fa-users me-2"></i>
                            Residents & emerging leaders
                        </p>

                        <a
                            href="contact.php"
                            class="program-primary-link-v8"
                        >
                            Ask about the next session
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </article>

            </div>

        </div>
    </section>


    <!-- Host a Workshop -->
    <section class="inner-section warm">
        <div class="container-fluid cg-container">

            <div class="row g-5 align-items-center">

                <div class="col-lg-6">

                    <div class="premium-image">

                        <img
                            src="assets/images/Bring-people.png"
                            alt="Workshop room"
                        >

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="inner-kicker">
                        Bring people together
                    </div>

                    <h2 class="inner-title">
                        Host a workshop in
                        <em>your Muslim community.</em>
                    </h2>

                    <p class="inner-copy">
                        Muslim schools, employers, community centers, mosques
                        and Islamic institutions can collaborate with
                        CommunityGrowth360 to bring relevant learning and
                        connection closer to the people they serve.
                    </p>

                    <a
                        href="contact.php#host"
                        class="btn btn-dark-premium mt-3"
                    >
                        Discuss hosting
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
