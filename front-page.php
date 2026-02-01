<?php
/**
 * Front page template.
 *
 * @package Internee_Profile
 */

get_header(); ?>

<main id="content" class="site-main">
    <section id="welcome" class="hero">
        <div class="container">
            <div class="hero-surface">
                <div class="hero-grid">
                    <div class="hero-copy" data-reveal>
                        <p class="eyebrow">Internee.pk Virtual Internship Program</p>
                        <h1>Introduce Yourself</h1>
                        <p class="lead">
                            I am Muhammad Khan, a web development student focused on WordPress core concepts,
                            frontend craftsmanship, and building real projects with clean code.
                        </p>
                        <div class="hero-actions">
                            <a class="btn" href="#academic">Academic background</a>
                            <a class="btn btn-ghost" href="#goals">Future goals</a>
                        </div>
                    </div>

                    <aside class="hero-card" data-reveal data-delay="120">
                        <p class="card-label">Profile</p>
                        <h2 class="hero-name">Muhammad Khan</h2>
                        <p class="hero-nickname">Preferred nickname: Muhammad / MK</p>
                        <dl class="hero-facts">
                            <div>
                                <dt>Major</dt>
                                <dd>Web Development / Computer Studies</dd>
                            </div>
                            <div>
                                <dt>Status</dt>
                                <dd>Intermediate - In Progress</dd>
                            </div>
                            <div>
                                <dt>Institute</dt>
                                <dd>College (Pakistan)</dd>
                            </div>
                        </dl>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section id="academic" class="section">
        <div class="container">
            <header class="section-head" data-reveal>
                <p class="eyebrow">Academic background</p>
                <h2>Current Studies</h2>
                <p>Focused on foundational web development and computer studies for the 2024-2026 cycle.</p>
            </header>

            <article class="info-card" data-reveal data-delay="120">
                <h3>Intermediate (2024-2026)</h3>
                <ul class="detail-list">
                    <li><span>Major:</span> Web Development / Computer Studies</li>
                    <li><span>Institute:</span> College (Pakistan)</li>
                    <li><span>Status:</span> Intermediate - In Progress</li>
                </ul>
            </article>
        </div>
    </section>

    <section id="tech" class="section section-muted">
        <div class="container">
            <header class="section-head" data-reveal>
                <p class="eyebrow">Tech interests</p>
                <h2>Tools and Focus Areas</h2>
                <p>Learning with intention, understanding the structure behind modern web tools.</p>
            </header>

            <ul class="pill-grid" data-reveal data-delay="120">
                <li class="pill">WordPress Core Development</li>
                <li class="pill">Frontend Development</li>
                <li class="pill">HTML, CSS, JavaScript</li>
                <li class="pill">Elementor (with structure understanding)</li>
                <li class="pill">Tailwind CSS (learning)</li>
                <li class="pill">Git and GitHub</li>
            </ul>
        </div>
    </section>

    <section id="hobbies" class="section">
        <div class="container">
            <header class="section-head" data-reveal>
                <p class="eyebrow">Hobbies and interests</p>
                <h2>How I Learn</h2>
                <p>Hands-on practice, experimentation, and steady improvement through real projects.</p>
            </header>

            <div class="grid grid-2">
                <article class="feature-card" data-reveal>
                    <h3>Building UI layouts</h3>
                    <p>Crafting clear, responsive layouts that feel intentional and easy to use.</p>
                </article>
                <article class="feature-card" data-reveal data-delay="80">
                    <h3>Exploring new web technologies</h3>
                    <p>Staying curious about trends, tools, and patterns that shape modern web experiences.</p>
                </article>
                <article class="feature-card" data-reveal data-delay="120">
                    <h3>Practicing frontend challenges</h3>
                    <p>Solving challenges to improve problem solving and core frontend fundamentals.</p>
                </article>
                <article class="feature-card" data-reveal data-delay="160">
                    <h3>Learning through real projects</h3>
                    <p>Applying knowledge by building complete themes and experimenting with features.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="gratitude" class="section section-accent">
        <div class="container">
            <div class="callout" data-reveal>
                <h2>Thank You, Internee.pk</h2>
                <p>
                    Grateful to Internee.pk for providing a virtual internship opportunity to grow practical
                    WordPress and frontend development skills. This experience makes learning feel real.
                </p>
            </div>
        </div>
    </section>

    <section id="goals" class="section">
        <div class="container">
            <header class="section-head" data-reveal>
                <p class="eyebrow">Future goals</p>
                <h2>What I am Working Toward</h2>
                <p>Clear direction, consistent practice, and a focus on production-ready work.</p>
            </header>

            <ul class="goal-list" data-reveal data-delay="120">
                <li>Become a professional WordPress and frontend developer.</li>
                <li>Build custom themes without relying on page builders.</li>
                <li>Work on real-world production websites.</li>
                <li>Improve JavaScript and React skills.</li>
            </ul>
        </div>
    </section>
</main>

<?php
get_footer();
