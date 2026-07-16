<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="SMD Group — Building Wealth Through Luxury Living. Premium farmhouse projects, trusted land development, and high-ROI investments." />
    <title>SMD Group – Building the Future. Creating Landmarks.</title>
    @include('template/head')
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
<<<<<<< HEAD
    @include('template/header')
=======
    <div id="cursor"></div>
    <div id="cursor-ring"></div>
    <canvas id="particles"></canvas>

    <!-- LOADER -->
    <div id="loader">
        <div class="loader-logo">SMD GROUP</div>
        <div class="loader-tagline">Summer Multi Developers</div>
        <div class="loader-bar-wrap">
            <div class="loader-bar"></div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <div class="nav-logo">
                <img src="" alt="SMD Group Logo" width="40" height="auto" />
            </div>
            <button class="mobile-menu-close" onclick="closeMobileMenu()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 6L6 18M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <a href="#about" onclick="closeMobileMenu()">About</a>
        <a href="#why" onclick="closeMobileMenu()">Why Us</a>
        <a href="#projects" onclick="closeMobileMenu()">Projects</a>
        <a href="#director" onclick="closeMobileMenu()">Directors</a>
        <a href="#gallery" onclick="closeMobileMenu()">Gallery</a>
        <a href="#contact" onclick="closeMobileMenu()">Contact</a>
    </div>

    <!-- NAV -->
    <nav id="navbar">
        <div class="nav-logo"><img src="./assets/img/logo/SMD-Logos-6-251x300.webp" alt="SMD Group Logo" width="40"
                height="auto" /></div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#why">Why Us</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#director">Directors</a></li>
            <li><a href="#testimonials">Reviews</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact" class="nav-cta">Contact Us</a></li>
        </ul>
        <div class="hamburger" id="hamburger" onclick="toggleMobileMenu()">
            <span></span><span></span><span></span>
        </div>
    </nav>
>>>>>>> e0eedb88cf99c1d2f973ade9bae1bace39ec8020

    <!-- ═══ main ═══ -->
    <section id="main">
        <div class="main-bg"></div>
        <div class="main-grid"></div>
        <div class="main-vertical-line"></div>

        <!-- Hero image (replace src with your actual photo) -->
        <div class="main-illustration" aria-hidden="true">
            <img src="./assets/img/hero/hero-main.jpg" alt="SMD Group luxury farmhouse" loading="eager">
        </div>

        <div class="main-content">
            <p class="main-eyebrow" id="mainEyebrow">Premium Real Estate &nbsp;|&nbsp; Est. 2014</p>
            <h1 class="main-title" id="mainTitle">
                <span class="line">Building Wealth</span>
                <span class="line">Through <span class="gold">Luxury</span></span>
                <span class="line">Living</span>
            </h1>
            <p class="main-subtitle" id="mainSubtitle">Where Visionary Architecture Meets Timeless Investment</p>
            <div class="main-actions" id="mainActions">
                <a href="#projects" class="btn-primary"><span>Explore Projects</span></a>
                <a href="#contact" class="btn-outline">Schedule a Visit</a>
            </div>
            <div class="main-stats" id="mainStats">
                <div class="main-stat">
                    <div class="stat-num">5+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="main-stat">
                    <div class="stat-num">1000+</div>
                    <div class="stat-label">Happy Investors</div>
                </div>
                <div class="main-stat">
                    <div class="stat-num">50+</div>
                    <div class="stat-label">Premium Projects</div>
                </div>
            </div>
        </div>
        {{-- <div class="main-scroll" id="mainScroll">
            <div class="main-scroll-line"></div>Scroll to Explore
        </div> --}}
    </section>
    <div class="sep"></div>

    <!-- ═══ ABOUT ═══ -->
    <section id="about">
        <div class="about-inner">
            <div class="about-image-collage" data-reveal="left">
                <div class="collage-main">
                    <div class="collage-img-placeholder">
                        <img src="./assets/img/gallery/gallery-1.webp" alt="SMD Group luxury farmhouse project"
                            loading="lazy">
                    </div>
                </div>
                <div class="collage-secondary">
                    <div class="collage-img-placeholder">
                        <img src="./assets/img/gallery/gallery-1.webp" alt="SMD Group villa exterior" loading="lazy">
                    </div>
                </div>
                <div class="collage-accent">
                    <div class="collage-accent-inner">10<sup>+</sup><span>Years of<br />Excellence</span></div>
                </div>
            </div>
            <div class="about-content" data-reveal="right">
                <p class="section-eyebrow">Our Legacy</p>
                <h2 class="section-title">Crafting <span class="gold">Landmark</span><br />Addresses</h2>
                <span class="gold-divider"></span>
                <p class="about-text">SMD Group — Summer Multi Developers — stands as one of India's most trusted
                    luxury real estate brands, transforming prime land into extraordinary living experiences. With over
                    a decade of excellence, we have established ourselves as pioneers in premium farmhouse development
                    and curated land investment.</p>
                <p class="about-text">Our philosophy merges architectural mastery with nature's serenity, creating
                    properties that are not merely homes, but generational wealth-building assets in prime locations.
                </p>
                <div class="about-timeline">
                    <div class="timeline-item">
                        <span class="timeline-year">2014</span>
                        <div class="timeline-dot"></div>
                        <div class="timeline-info">
                            <h4>Foundation of SMD Group</h4>
                            <p>Established with a vision to redefine luxury real estate in India</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-year">2016</span>
                        <div class="timeline-dot"></div>
                        <div class="timeline-info">
                            <h4>First Premium Farmhouse Project</h4>
                            <p>Launched our flagship farmhouse community, setting new standards</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-year">2019</span>
                        <div class="timeline-dot"></div>
                        <div class="timeline-info">
                            <h4>500+ Investors Milestone</h4>
                            <p>Crossed the landmark of 500 satisfied investors across all projects</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-year">2024</span>
                        <div class="timeline-dot"></div>
                        <div class="timeline-info">
                            <h4>1000+ Happy Investors</h4>
                            <p>Celebrating a decade of trust, growth, and luxury living delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ WHY CHOOSE US ═══ -->
    <section id="why">
        <div class="why-inner">
            <div class="why-header" data-reveal="up">
                <p class="section-eyebrow">Our Distinction</p>
                <h2 class="section-title">Why <span class="gold">Investors</span> Trust SMD</h2>
                <p
                    style="font-family:var(--font-italic);font-size:1.1rem;font-style:italic;color:var(--text-dim);max-width:480px;margin:0 auto;font-weight:300;">
                    Six pillars that define our commitment to excellence and investor satisfaction</p>
            </div>
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon"><i class="fa-regular fa-circle-check"></i></div>
                    <h3>Verified Properties</h3>
                    <p>Every project is legally verified with clear titles, RERA compliance, and complete documentation.
                        Invest with zero title risk and absolute confidence.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <h3>Prime Locations</h3>
                    <p>Strategically selected plots in NCR's most coveted growth corridors — ensuring maximum
                        appreciation and premium lifestyle access.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fa-regular fa-clipboard"></i></div>
                    <h3>Transparent Deals</h3>
                    <p>No hidden charges, no surprises. Our transparent pricing model and open-book policy ensure every
                        transaction is crystal clear from start to finish.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fa-solid fa-scale-unbalanced-flip"></i></div>
                    <h3>Legal Assistance</h3>
                    <p>Dedicated legal team for seamless documentation, registry support, and end-to-end handholding
                        through every step of your investment journey.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
                    <h3>High ROI Investment</h3>
                    <p>Consistent 30–60% appreciation in our project portfolios. Our prime land investments consistently
                        outperform market benchmarks year after year.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><i class="fa-regular fa-house"></i></div>
                    <h3>Luxury Farmhouse Living</h3>
                    <p>Bespoke farmhouse experiences blending contemporary luxury with natural serenity — an exclusive
                        lifestyle that defines modern premium living in India.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ PROJECTS — Featured Properties ═══ -->
    <section id="projects">
        <div class="pgrid-inner">
            <div class="pgrid-header" data-reveal="up">
                <p class="section-eyebrow">Our Portfolio</p>
                <h2 class="section-title">Signature <span class="gold">Projects</span></h2>
                <p class="section-subtitle">Curated masterpieces across NCR's most coveted addresses — each a
                    landmark investment opportunity.</p>
            </div>

            <div class="fprop-list">

                <div class="fprop-row" data-reveal="up" style="z-index:1"
                    data-pdf="https://summermultidevelopers.com/wp-content/uploads/2025/10/Anandvan-Brochure.pdf"
                    role="button" tabindex="0" aria-label="View brochure PDF">
                    <div class="fprop-media">
                        <img src="{{ url('./assets/img/pro/pro1.jpg') }}" alt="SMD Golden Residency" loading="lazy">
                        <span class="fprop-media-corner tl"></span>
                        <span class="fprop-media-corner br"></span>
                    </div>
                    <div class="fprop-body">
                        <p class="fprop-num">NO. 01</p>
                        <h3 class="fprop-name">SMD Golden Residency</h3>
                        <div class="fprop-fields">
                            <div class="fprop-field"><span class="fprop-field-label">Type</span><span
                                    class="fprop-field-value">Farmhouse Villas</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Location</span><span
                                    class="fprop-field-value">Sector 150, Noida Expressway</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Starting Price</span><span
                                    class="fprop-field-value gold">₹45 Lakh</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">ROI</span><span
                                    class="fprop-field-value">40–55%</span></div>
                        </div>
                        <p class="fprop-desc">An address of quiet luxury on Noida Expressway — spacious farmhouse
                            villas designed for weekend retreats and generational wealth alike, backed by clear titles
                            and RERA-ready documentation.</p>
                        <div class="fprop-actions">
                            <span class="fprop-pdf-badge"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                    <path d="M14 2v6h6" />
                                </svg>View Brochure PDF</span>
                            <a href="#contact" class="fprop-cta" onclick="event.stopPropagation()">Schedule Visit
                                <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="fprop-row" data-reveal="up" style="z-index:2;transition-delay:0.06s"
                    data-pdf="https://summermultidevelopers.com/wp-content/uploads/2025/10/BROUCHER.FINAL01-1.pdf"
                    role="button" tabindex="0" aria-label="View brochure PDF">
                    <div class="fprop-media">
                        <img src="{{ url('./assets/img/pro/pro1.jpg') }}" alt="SMD Royal Greens" loading="lazy">
                        <span class="fprop-media-corner tl"></span>
                        <span class="fprop-media-corner br"></span>
                    </div>
                    <div class="fprop-body">
                        <p class="fprop-num">NO. 02</p>
                        <h3 class="fprop-name">SMD Royal Greens</h3>
                        <div class="fprop-fields">
                            <div class="fprop-field"><span class="fprop-field-label">Type</span><span
                                    class="fprop-field-value">Premium Land</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Location</span><span
                                    class="fprop-field-value">Yamuna Expressway, Greater Noida</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Starting Price</span><span
                                    class="fprop-field-value gold">₹25 Lakh</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">ROI</span><span
                                    class="fprop-field-value">35–50%</span></div>
                        </div>
                        <p class="fprop-desc">Strategically positioned along the Yamuna Expressway growth corridor,
                            these plots offer an accessible entry point into premium land ownership with strong
                            long-term appreciation potential.</p>
                        <div class="fprop-actions">
                            <span class="fprop-pdf-badge"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                    <path d="M14 2v6h6" />
                                </svg>View Brochure PDF</span>
                            <a href="#contact" class="fprop-cta" onclick="event.stopPropagation()">Schedule Visit
                                <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="fprop-row" data-reveal="up" style="z-index:3;transition-delay:0.12s"
                    data-pdf="https://summermultidevelopers.com/wp-content/uploads/2025/10/Alaknanda-Farms-Brochue.pdf"
                    role="button" tabindex="0" aria-label="View brochure PDF">
                    <div class="fprop-media">
                        <img src="{{ url('./assets/img/pro/pro1.jpg') }}" alt="SMD Elite Farms" loading="lazy">
                        <span class="fprop-media-corner tl"></span>
                        <span class="fprop-media-corner br"></span>
                    </div>
                    <div class="fprop-body">
                        <p class="fprop-num">NO. 03</p>
                        <h3 class="fprop-name">SMD Elite Farms</h3>
                        <div class="fprop-fields">
                            <div class="fprop-field"><span class="fprop-field-label">Type</span><span
                                    class="fprop-field-value">Luxury Farmhouse</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Location</span><span
                                    class="fprop-field-value">NH-58, Ghaziabad</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Starting Price</span><span
                                    class="fprop-field-value gold">₹60 Lakh</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">ROI</span><span
                                    class="fprop-field-value">45–60%</span></div>
                        </div>
                        <p class="fprop-desc">Ready-to-move luxury farmhouses along NH-58, built for those who want
                            their investment and their weekend escape in one address — complete with premium finishes
                            and expansive private grounds.</p>
                        <div class="fprop-actions">
                            <span class="fprop-pdf-badge"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                    <path d="M14 2v6h6" />
                                </svg>View Brochure PDF</span>
                            <a href="#contact" class="fprop-cta" onclick="event.stopPropagation()">Schedule Visit
                                <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="fprop-row" data-reveal="up" style="z-index:4;transition-delay:0.18s"
                    data-pdf="https://summermultidevelopers.com/wp-content/uploads/2025/11/Maple-Yards-Booklet.pdf"
                    role="button" tabindex="0" aria-label="View brochure PDF">
                    <div class="fprop-media">
                        <img src="{{ url('./assets/img/pro/pro2.jpg') }}" alt="SMD Green Valley" loading="lazy">
                        <span class="fprop-media-corner tl"></span>
                        <span class="fprop-media-corner br"></span>
                    </div>
                    <div class="fprop-body">
                        <p class="fprop-num">NO. 04</p>
                        <h3 class="fprop-name">SMD Green Valley</h3>
                        <div class="fprop-fields">
                            <div class="fprop-field"><span class="fprop-field-label">Type</span><span
                                    class="fprop-field-value">Residential Plots</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Location</span><span
                                    class="fprop-field-value">Greater Faridabad, Haryana</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Starting Price</span><span
                                    class="fprop-field-value gold">₹18 Lakh</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">ROI</span><span
                                    class="fprop-field-value">30–45%</span></div>
                        </div>
                        <p class="fprop-desc">An accessible, EMI-friendly residential plot community in Greater
                            Faridabad's emerging corridor — ideal for first-time investors looking to build equity in a
                            rapidly developing region.</p>
                        <div class="fprop-actions">
                            <span class="fprop-pdf-badge"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                    <path d="M14 2v6h6" />
                                </svg>View Brochure PDF</span>
                            <a href="#contact" class="fprop-cta" onclick="event.stopPropagation()">Schedule Visit
                                <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="fprop-row" data-reveal="up" style="z-index:5;transition-delay:0.24s"
                    data-pdf="https://summermultidevelopers.com/wp-content/uploads/2025/12/Shri-Krishna-Enclave-Brochure_2025-1.pdf"
                    role="button" tabindex="0" aria-label="View brochure PDF">
                    <div class="fprop-media">
                        <img src="{{ url('./assets/img/pro/pro3.jpg') }}" alt="SMD Imperial Township" loading="lazy">
                        <span class="fprop-media-corner tl"></span>
                        <span class="fprop-media-corner br"></span>
                    </div>
                    <div class="fprop-body">
                        <p class="fprop-num">NO. 05</p>
                        <h3 class="fprop-name">SMD Imperial Township</h3>
                        <div class="fprop-fields">
                            <div class="fprop-field"><span class="fprop-field-label">Type</span><span
                                    class="fprop-field-value">Township Villas</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Location</span><span
                                    class="fprop-field-value">Bulandshahr Road, UP</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">Starting Price</span><span
                                    class="fprop-field-value gold">₹32 Lakh</span></div>
                            <div class="fprop-field"><span class="fprop-field-label">ROI</span><span
                                    class="fprop-field-value">35–55%</span></div>
                        </div>
                        <p class="fprop-desc">An upcoming township on Bulandshahr Road offering early-pricing advantage
                            — planned with wide boulevards, community amenities, and villas designed for the next
                            generation of NCR living.</p>
                        <div class="fprop-actions">
                            <span class="fprop-pdf-badge"><svg viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                    <path d="M14 2v6h6" />
                                </svg>View Brochure PDF</span>
                            <a href="#contact" class="fprop-cta" onclick="event.stopPropagation()">Schedule Visit
                                <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>
                </div>

            </div><!-- /fprop-list -->

            <div class="pgrid-footer" data-reveal="up">
                <p style="font-size:0.82rem;color:var(--text-dim);margin-bottom:20px">More premium addresses launching
                    soon across NCR.</p>
                <a href="#contact" class="btn-outline">Register Early Interest</a>
            </div>
        </div><!-- /pgrid-inner -->
    </section>
    <div class="sep"></div>
    <!-- ═══ DIRECTOR — 3 Directors ═══ -->
    <section id="director">
        <div class="director-inner">
            <div class="director-header" data-reveal="up">
                <p class="section-eyebrow">Leadership</p>
                <h2 class="section-title">Our <span class="gold">Visionary</span> Directors</h2>
                <p
                    style="font-family:var(--font-italic);font-size:1.1rem;font-style:italic;color:var(--text-dim);max-width:480px;margin:0 auto;font-weight:300;">
                    The minds behind SMD's decade of excellence and growth</p>
            </div>
            <div class="directors-grid">

                <!-- Director 1 -->
                <div class="director-card" data-reveal="up">
                    <div class="dir-portrait">
                        <div class="dir-corner-ring"></div>
                        <div class="dir-initials">SS</div>
                    </div>
                    <div class="dir-name">Mr. Sagar Sharma</div>
                    <div class="dir-role">Founder & Managing Director</div>
                    <div class="dir-divider"></div>
                    <div class="dir-quote">"Real estate is not just about land — it is about legacy. Every project
                        carries our promise of quality, transparency, and a wealthier tomorrow."</div>
                    <p class="dir-bio">With over a decade of transformative leadership, Mr. Sagar founded SMD on a
                        singular conviction — that every investor deserves access to premium, legally verified, high-ROI
                        properties across NCR's most prime corridors.</p>
                    <div class="dir-signature">Sagar Sharma</div>
                    <div class="dir-creds">
                        <span class="dir-cred">10+ Years</span>
                        <span class="dir-cred">Founder</span>
                        <span class="dir-cred">NCR Pioneer</span>
                    </div>
                </div>

                <!-- Director 2 -->
                <div class="director-card" data-reveal="up" style="transition-delay:0.1s">
                    <div class="dir-portrait">
                        <div class="dir-corner-ring"></div>
                        <div class="dir-initials">RS</div>
                    </div>
                    <div class="dir-name">Mr. Rahul Sharma</div>
                    <div class="dir-role">Director – Operations</div>
                    <div class="dir-divider"></div>
                    <div class="dir-quote">"Operational excellence is the backbone of trust. We deliver not just
                        properties, but promises fulfilled on time, every time."</div>
                    <p class="dir-bio">Mr. Rahul oversees end-to-end project delivery, legal compliance, and investor
                        relations. His meticulous approach ensures every SMD project meets the highest standards of
                        execution and transparency.</p>
                    <div class="dir-signature">Rahul Sharma</div>
                    <div class="dir-creds">
                        <span class="dir-cred">Operations</span>
                        <span class="dir-cred">Legal Head</span>
                        <span class="dir-cred">RERA Expert</span>
                    </div>
                </div>

                <!-- Director 3 -->
                <div class="director-card" data-reveal="up" style="transition-delay:0.2s">
                    <div class="dir-portrait">
                        <div class="dir-corner-ring"></div>
                        <div class="dir-initials">AV</div>
                    </div>
                    <div class="dir-name">Mr. Amit Verma</div>
                    <div class="dir-role">Director – Strategy & Growth</div>
                    <div class="dir-divider"></div>
                    <div class="dir-quote">"The right land at the right time is the most powerful wealth instrument in
                        India. Our mission is to put that power in the hands of every investor."</div>
                    <p class="dir-bio">Mr. Amit drives SMD's strategic expansion into new growth corridors, identifying
                        high-potential land parcels and crafting investment frameworks that deliver consistent,
                        market-beating returns.</p>
                    <div class="dir-signature">Amit Verma</div>
                    <div class="dir-creds">
                        <span class="dir-cred">Strategy</span>
                        <span class="dir-cred">Investment</span>
                        <span class="dir-cred">Growth</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ TESTIMONIALS ═══ -->
    <section id="testimonials">
        <div class="test-inner">
            <div class="test-header" data-reveal="up">
                <p class="section-eyebrow">Client Voices</p>
                <h2 class="section-title">What Our <span class="gold">Investors</span> Say</h2>
                <p
                    style="font-family:var(--font-italic);font-size:1.1rem;font-style:italic;color:var(--text-dim);max-width:460px;margin:0 auto;font-weight:300;">
                    Trusted by over 1000 investors across NCR — their success is our greatest achievement</p>
            </div>
            <div class="test-carousel">
                <div class="test-track" id="testTrack">
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars"><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg></div>
                        <p class="test-text">My investment in SMD Golden Residency has appreciated by over 45% in 3
                            years. The team was incredibly transparent throughout. Truly a premium experience.</p>
                        <div class="test-author">
                            <div class="test-avatar"><img src="{{ url('./assets/img/pro/pro1.jpg') }}"
                                    alt="Rajesh Kumar" loading="lazy"></div>
                            <div>
                                <div class="test-name">Rajesh Kumar</div>
                                <div class="test-role">Senior Investor, Delhi NCR</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars"><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg></div>
                        <p class="test-text">SMD Group made my dream of owning a luxury farmhouse a reality. The legal
                            process was seamless, documentation was perfect, and the team's support was exceptional.</p>
                        <div class="test-author">
                            <div class="test-avatar"><img src="./assets/img/testimonials/investor-2.jpg"
                                    alt="Priya Sharma" loading="lazy"></div>
                            <div>
                                <div class="test-name">Priya Sharma</div>
                                <div class="test-role">Business Owner, Noida</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars"><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg></div>
                        <p class="test-text">The ROI on my SMD Green Valley investment exceeded all expectations.
                            Transparent dealings, prime location, and a team that genuinely cares about investor
                            outcomes. 10/10.</p>
                        <div class="test-author">
                            <div class="test-avatar"><img src="./assets/img/testimonials/investor-3.jpg"
                                    alt="Anil Mehta" loading="lazy"></div>
                            <div>
                                <div class="test-name">Anil Mehta</div>
                                <div class="test-role">Retired Govt. Officer, Ghaziabad</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars"><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg></div>
                        <p class="test-text">As a first-time investor in farmhouse properties, SMD Group held my hand
                            through every step. Clear documentation, honest communication, and a truly premium property.
                        </p>
                        <div class="test-author">
                            <div class="test-avatar"><img src="./assets/img/testimonials/investor-4.jpg"
                                    alt="Sunita Gupta" loading="lazy"></div>
                            <div>
                                <div class="test-name">Sunita Gupta</div>
                                <div class="test-role">IT Professional, Gurugram</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars"><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg><svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg></div>
                        <p class="test-text">Invested in two SMD projects — both delivered exceptional returns. The
                            team's commitment to timelines and transparency is unmatched in this industry.</p>
                        <div class="test-author">
                            <div class="test-avatar"><img src="./assets/img/testimonials/investor-5.jpg"
                                    alt="Vivek Bhatia" loading="lazy"></div>
                            <div>
                                <div class="test-name">Vivek Bhatia</div>
                                <div class="test-role">Entrepreneur, Greater Noida</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test-controls">
                <div class="test-dot active" data-i="0"></div>
                <div class="test-dot" data-i="1"></div>
                <div class="test-dot" data-i="2"></div>
                <div class="test-arrows">
                    <div class="test-arrow" id="testPrev"><svg viewBox="0 0 24 24">
                            <path d="M15 18l-6-6 6-6" />
                        </svg></div>
                    <div class="test-arrow" id="testNext"><svg viewBox="0 0 24 24">
                            <path d="M9 18l6-6-6-6" />
                        </svg></div>
                </div>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ INVESTMENT ═══ -->
    <section id="investment">
        <div class="inv-inner">
            <div class="inv-grid">
                <div class="inv-stats-grid" data-reveal="left">
                    <div class="inv-stat-card">
                        <div class="inv-big-num"><span class="counter" data-target="45">0</span><span
                                class="inv-big-suffix">%</span></div>
                        <p class="inv-stat-label">Average Appreciation</p>
                        <div class="inv-bar">
                            <div class="inv-bar-fill" data-width="75"></div>
                        </div>
                    </div>
                    <div class="inv-stat-card">
                        <div class="inv-big-num"><span class="counter" data-target="1000">0</span><span
                                class="inv-big-suffix">+</span></div>
                        <p class="inv-stat-label">Happy Investors</p>
                        <div class="inv-bar">
                            <div class="inv-bar-fill" data-width="90"></div>
                        </div>
                    </div>
                    <div class="inv-stat-card">
                        <div class="inv-big-num"><span class="counter" data-target="50">0</span><span
                                class="inv-big-suffix">+</span></div>
                        <p class="inv-stat-label">Completed Projects</p>
                        <div class="inv-bar">
                            <div class="inv-bar-fill" data-width="65"></div>
                        </div>
                    </div>
                    <div class="inv-stat-card">
                        <div class="inv-big-num"><span class="counter" data-target="10">0</span><span
                                class="inv-big-suffix">+</span></div>
                        <p class="inv-stat-label">Years of Excellence</p>
                        <div class="inv-bar">
                            <div class="inv-bar-fill" data-width="100"></div>
                        </div>
                    </div>
                </div>
                <div class="inv-content" data-reveal="right">
                    <p class="section-eyebrow">Investment Returns</p>
                    <h2 class="section-title">Why Land is <span class="gold">India's Safest</span> Investment</h2>
                    <span class="gold-divider"></span>
                    <p
                        style="font-size:0.88rem;color:var(--text-dim);line-height:1.9;margin-bottom:36px;font-weight:300;">
                        Land in India's growth corridors has consistently outperformed equity markets, mutual funds, and
                        fixed deposits over any 5-year window. SMD's prime locations amplify these returns with premium
                        positioning.</p>
                    <div class="inv-features">
                        <div class="inv-feature">
                            <div class="inv-feature-icon"><svg viewBox="0 0 24 24">
                                    <path
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg></div>
                            <div class="inv-feature-text">
                                <h4>Zero Depreciation Asset</h4>
                                <p>Land never depreciates. Your principal is always protected.</p>
                            </div>
                        </div>
                        <div class="inv-feature">
                            <div class="inv-feature-icon"><svg viewBox="0 0 24 24">
                                    <path
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg></div>
                            <div class="inv-feature-text">
                                <h4>Consistent High ROI</h4>
                                <p>35–60% appreciation across our portfolio over 3–5 years.</p>
                            </div>
                        </div>
                        <div class="inv-feature">
                            <div class="inv-feature-icon"><svg viewBox="0 0 24 24">
                                    <path
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg></div>
                            <div class="inv-feature-text">
                                <h4>RERA Compliant</h4>
                                <p>All projects legally registered, verified, and RERA compliant.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ GALLERY ═══ -->
    <section id="gallery">
        <div class="gallery-inner">
            <div class="gallery-header" data-reveal="up">
                <p class="section-eyebrow">Visual Journey</p>
                <h2 class="section-title">Project <span class="gold">Gallery</span></h2>
                <p class="section-subtitle">A glimpse into the world of SMD luxury living</p>
            </div>
            <div class="gallery-masonry">
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro1.jpg') }}')">
                    <div class="g-block" style="height:280px"><img src="{{ url('./assets/img/pro/pro1.jpg') }}"
                            alt="SMD Group gallery photo 1" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro2.jpg') }}')">
                    <div class="g-block" style="height:200px"><img src="{{ url('./assets/img/pro/pro2.jpg') }}"
                            alt="SMD Group gallery photo 2" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro3.jpg') }}')">
                    <div class="g-block" style="height:340px"><img src="{{ url('./assets/img/pro/pro3.jpg') }}"
                            alt="SMD Group gallery photo 3" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro4.jpg') }}')">
                    <div class="g-block" style="height:240px"><img src="{{ url('./assets/img/pro/pro4.jpg') }}"
                            alt="SMD Group gallery photo 4" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro1.jpg') }}')">
                    <div class="g-block" style="height:300px"><img src="{{ url('./assets/img/pro/pro1.jpg') }}"
                            alt="SMD Group gallery photo 5" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro2.jpg') }}')">
                    <div class="g-block" style="height:210px"><img src="{{ url('./assets/img/pro/pro2.jpg') }}"
                            alt="SMD Group gallery photo 6" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro3.jpg') }}')">
                    <div class="g-block" style="height:260px"><img src="{{ url('./assets/img/pro/pro3.jpg') }}"
                            alt="SMD Group gallery photo 7" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox('{{ url('./assets/img/pro/pro4.jpg') }}')">
                    <div class="g-block" style="height:190px"><img src="{{ url('./assets/img/pro/pro4.jpg') }}"
                            alt="SMD Group gallery photo 8" loading="lazy"
                            style="width:100%;height:100%;object-fit:cover;display:block"></div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
            </div>
            <div style="text-align:center;margin-top:56px">
                <a href="#contact" class="btn-outline" style="display:inline-flex;align-items:center;gap:10px">View
                    All Projects</a>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ CONTACT ═══ -->
    <section id="contact">
        <div class="contact-inner">
            <div class="contact-left" data-reveal="left">
                <p class="section-eyebrow">Get In Touch</p>
                <h2 class="section-title">Begin Your <span class="gold">Investment</span> Journey</h2>
                <span class="gold-divider"></span>
                <p style="font-size:0.88rem;color:var(--text-dim);line-height:1.9;font-weight:300;margin-bottom:8px;">
                    Our investment advisors are ready to craft a personalised real estate strategy for you. Reach out
                    today and take the first step toward premium property ownership.</p>
                <div class="contact-info-cards">
                    <div class="contact-info-card">
                        <div class="contact-icon"><svg viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg></div>
                        <div>
                            <h4>Phone</h4>
                            <p>+91 98XXX XXXXX</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon"><svg viewBox="0 0 24 24">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg></div>
                        <div>
                            <h4>Email</h4>
                            <p>info@summermultidevelopers.com</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon"><svg viewBox="0 0 24 24">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg></div>
                        <div>
                            <h4>Office</h4>
                            <p>Delhi NCR, India</p>
                        </div>
                    </div>
                </div>
                <div class="contact-map">
                    <div class="map-pin"></div>
                    <div class="map-label">SMD Group — Delhi NCR</div>
                </div>
            </div>
            <div data-reveal="right">
                <p class="section-eyebrow" style="margin-bottom:16px">Send Enquiry</p>
                <h3 class="section-title" style="font-size:1.8rem;margin-bottom:32px">Request a <span
                        class="gold">Callback</span></h3>
                <form class="contact-form" onsubmit="handleFormSubmit(event)">
                    <div class="form-row">
                        <div class="form-group"><input type="text" placeholder=" " id="fname" /><label
                                class="form-label" for="fname">First Name</label></div>
                        <div class="form-group"><input type="text" placeholder=" " id="lname" /><label
                                class="form-label" for="lname">Last Name</label></div>
                    </div>
                    <div class="form-group"><input type="tel" placeholder=" " id="phone" /><label
                            class="form-label" for="phone">Phone Number</label></div>
                    <div class="form-group"><input type="email" placeholder=" " id="email" /><label
                            class="form-label" for="email">Email Address</label></div>
                    <div class="form-group">
                        <select id="project">
                            <option value="" disabled selected>Select Project of Interest</option>
                            <option>SMD Golden Residency</option>
                            <option>SMD Royal Greens</option>
                            <option>SMD Elite Farms</option>
                            <option>SMD Green Valley</option>
                            <option>SMD Imperial Township</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea placeholder=" " id="message"></textarea><label class="form-label" for="message">Your Message</label>
                    </div>
                    <button type="submit" class="form-submit">Schedule Consultation</button>
                </form>
            </div>
        </div>
    </section>

    <!-- LIGHTBOX -->
    <div id="lightbox">
        <div class="lightbox-close" onclick="closeLightbox()">✕</div>
        <div class="lightbox-content">
            <img id="lightboxImg" src="" alt="SMD Group project"
                style="width:100%;height:100%;object-fit:contain;display:block">
        </div>
    </div>
    @include('template/footer')

    <script>
        /* ── CURSOR ── */
        const cur = document.getElementById('cursor');
        const curRing = document.getElementById('cursor-ring');
        let mx = 0,
            my = 0,
            rx = 0,
            ry = 0;
        document.addEventListener('mousemove', e => {
            mx = e.clientX;
            my = e.clientY;
            cur.style.left = mx + 'px';
            cur.style.top = my + 'px'
        });

        function animCursor() {
            rx += (mx - rx) * 0.12;
            ry += (my - ry) * 0.12;
            curRing.style.left = rx + 'px';
            curRing.style.top = ry + 'px';
            requestAnimationFrame(animCursor)
        }
        animCursor();
        document.querySelectorAll(
            'a,button,.why-card,.test-card,.gallery-item,.fprop-row,.social-icon,.test-arrow,.director-card'
        ).forEach(el => {
            el.addEventListener('mouseenter', () => {
                cur.style.width = '18px';
                cur.style.height = '18px';
                curRing.style.width = '54px';
                curRing.style.height = '54px'
            });
            el.addEventListener('mouseleave', () => {
                cur.style.width = '10px';
                cur.style.height = '10px';
                curRing.style.width = '32px';
                curRing.style.height = '32px'
            });
        });

        /* ── LOADER ── */
        window.addEventListener('load', () => {
            setTimeout(() => {
                gsap.to('#loader', {
                    opacity: 0,
                    duration: 0.8,
                    delay: 0.3,
                    ease: 'power2.inOut',
                    onComplete: () => {
                        document.getElementById('loader').style.display = 'none';
                        initAnimations();
                    }
                });
            }, 2200);
        });

        /* ── PARTICLES ── */
        const canvas = document.getElementById('particles');
        const ctx = canvas.getContext('2d');
        let W, H, particles = [];

        function resizeCanvas() {
            W = canvas.width = window.innerWidth;
            H = canvas.height = window.innerHeight
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        function createParticle() {
            return {
                x: Math.random() * W,
                y: Math.random() * H,
                size: Math.random() * 1.2 + 0.3,
                speedX: (Math.random() - 0.5) * 0.25,
                speedY: -Math.random() * 0.4 - 0.1,
                alpha: Math.random() * 0.35 + 0.08,
                decay: Math.random() * 0.0015 + 0.0008,
                isEmerald: Math.random() > 0.6
            }
        }
        for (let i = 0; i < 70; i++) particles.push(createParticle());

        function animParticles() {
            ctx.clearRect(0, 0, W, H);
            particles.forEach((p, i) => {
                p.x += p.speedX;
                p.y += p.speedY;
                p.alpha -= p.decay;
                if (p.alpha <= 0 || p.y < -10) {
                    particles[i] = createParticle();
                    particles[i].y = H + 10
                }
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fillStyle = p.isEmerald ? `rgba(39,86,168,${p.alpha})` : `rgba(212,175,106,${p.alpha})`;
                ctx.fill();
            });
            requestAnimationFrame(animParticles);
        }
        animParticles();

        /* ── NAV ── */
        const nav = document.getElementById('navbar');
        window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 80));

        /* ── MOBILE MENU ── */
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const hamburger = document.getElementById('hamburger');
            menu.classList.toggle('open');
            hamburger.classList.toggle('active');
        }

        function closeMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const hamburger = document.getElementById('hamburger');
            menu.classList.remove('open');
            hamburger.classList.remove('active');
        }

        /* ── ANIMATIONS ── */
        function initAnimations() {
            gsap.registerPlugin(ScrollTrigger);

            /* main */
            const tl = gsap.timeline();
            tl.to('#mainEyebrow', {
                    opacity: 1,
                    y: 0,
                    duration: 0.9,
                    ease: 'power3.out'
                })
                .to('#mainTitle', {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out'
                }, '-=0.5')
                .to('#mainSubtitle', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power3.out'
                }, '-=0.6')
                .to('#mainActions', {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    ease: 'power3.out'
                }, '-=0.5')
                .to('#mainStats', {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    ease: 'power3.out'
                }, '-=0.4')
                .to('#mainScroll', {
                    opacity: 1,
                    duration: 0.5
                }, '-=0.2');

            /* Reveal */
            gsap.utils.toArray('[data-reveal="up"]').forEach(el => {
                gsap.fromTo(el, {
                    opacity: 0,
                    y: 50
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 85%'
                    }
                });
            });
            gsap.utils.toArray('[data-reveal="left"]').forEach(el => {
                gsap.fromTo(el, {
                    opacity: 0,
                    x: -60
                }, {
                    opacity: 1,
                    x: 0,
                    duration: 1.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 80%'
                    }
                });
            });
            gsap.utils.toArray('[data-reveal="right"]').forEach(el => {
                gsap.fromTo(el, {
                    opacity: 0,
                    x: 60
                }, {
                    opacity: 1,
                    x: 0,
                    duration: 1.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 80%'
                    }
                });
            });

            /* Timeline */
            document.querySelectorAll('.timeline-item').forEach((el, i) => {
                gsap.to(el, {
                    opacity: 1,
                    x: 0,
                    duration: 0.7,
                    delay: i * 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#about',
                        start: 'top 60%'
                    }
                });
            });

            /* Why cards */
            gsap.utils.toArray('.why-card').forEach((el, i) => {
                gsap.fromTo(el, {
                    opacity: 0,
                    y: 30
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    delay: i * 0.08,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#why',
                        start: 'top 70%'
                    }
                });
            });


            /* Director cards */
            gsap.utils.toArray('.director-card').forEach((el, i) => {
                gsap.fromTo(el, {
                    opacity: 0,
                    y: 40
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    delay: i * 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#director',
                        start: 'top 70%'
                    }
                });
            });

            /* Gallery */
            gsap.utils.toArray('.gallery-item').forEach((el, i) => {
                gsap.fromTo(el, {
                    opacity: 0,
                    scale: 0.95
                }, {
                    opacity: 1,
                    scale: 1,
                    duration: 0.7,
                    delay: i * 0.06,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#gallery',
                        start: 'top 70%'
                    }
                });
            });

            /* Counters */
            document.querySelectorAll('.counter').forEach(el => {
                const target = parseInt(el.dataset.target);
                ScrollTrigger.create({
                    trigger: el,
                    start: 'top 80%',
                    onEnter: () => {
                        gsap.to({
                            val: 0
                        }, {
                            val: target,
                            duration: 2,
                            ease: 'power2.out',
                            onUpdate: function() {
                                el.textContent = Math.round(this.targets()[0].val)
                                    .toLocaleString()
                            }
                        });
                    }
                });
            });

            /* Investment bars */
            document.querySelectorAll('.inv-bar-fill').forEach(el => {
                const w = el.dataset.width;
                ScrollTrigger.create({
                    trigger: el,
                    start: 'top 80%',
                    onEnter: () => {
                        el.style.width = w + '%'
                    }
                });
            });

            /* Contact cards */
            gsap.utils.toArray('.contact-info-card').forEach((el, i) => {
                gsap.to(el, {
                    opacity: 1,
                    x: 0,
                    duration: 0.6,
                    delay: i * 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#contact',
                        start: 'top 75%'
                    }
                });
            });
        }




        /* ── TESTIMONIALS ── */
        const testTrack = document.getElementById('testTrack');
        let testIdx = 0;
        const testTotal = 3;

        function getCardW() {
            const c = testTrack.querySelector('.test-card');
            return c ? c.offsetWidth + 2 : 0
        }

        function goTest(i) {
            testIdx = i;
            testTrack.style.transform = `translateX(-${testIdx*getCardW()}px)`;
            document.querySelectorAll('.test-dot').forEach((d, j) => d.classList.toggle('active', j === testIdx));
        }
        document.getElementById('testNext').addEventListener('click', () => goTest((testIdx + 1) % testTotal));
        document.getElementById('testPrev').addEventListener('click', () => goTest((testIdx - 1 + testTotal) % testTotal));
        document.querySelectorAll('.test-dot').forEach(d => d.addEventListener('click', () => goTest(parseInt(d.dataset
            .i))));
        setInterval(() => goTest((testIdx + 1) % testTotal), 5000);

        /* ── PROJECT BROCHURE PDFs ── */
        document.querySelectorAll('.fprop-row[data-pdf]').forEach(card => {
            const pdfUrl = card.dataset.pdf;
            card.addEventListener('click', () => window.open(pdfUrl, '_blank', 'noopener'));
            card.addEventListener('keydown', e => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    window.open(pdfUrl, '_blank', 'noopener');
                }
            });
        });

        /* ── LIGHTBOX ── */
        function openLightbox(src) {
            if (src) document.getElementById('lightboxImg').src = src;
            document.getElementById('lightbox').classList.add('open')
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('open')
        }
        document.getElementById('lightbox').addEventListener('click', e => {
            if (e.target === e.currentTarget) closeLightbox()
        });

        /* ── FORM ── */
        function handleFormSubmit(e) {
            e.preventDefault();
            const btn = e.target.querySelector('.form-submit');
            btn.textContent = 'Sending...';
            btn.style.opacity = '0.8';
            setTimeout(() => {
                btn.textContent = 'Message Sent ✓';
                btn.style.background = 'linear-gradient(135deg,#1A3A6B,#2756A8)';
                setTimeout(() => {
                    btn.textContent = 'Schedule Consultation';
                    btn.style.background = 'linear-gradient(135deg,var(--navy-mid),var(--navy-light))';
                    btn.style.opacity = '1';
                    e.target.reset()
                }, 3000);
            }, 1500);
        }

        /* ── TILT on why-cards ── */
        document.querySelectorAll('.why-card').forEach(card => {
            card.addEventListener('mousemove', e => {
                const r = card.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - 0.5;
                const y = (e.clientY - r.top) / r.height - 0.5;
                card.style.transform = `translateY(-4px) rotateX(${-y*5}deg) rotateY(${x*5}deg)`
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
                card.style.transition = 'transform 0.6s cubic-bezier(0.16,1,0.3,1)'
            });
            card.addEventListener('mouseenter', () => {
                card.style.transition = 'transform 0.1s'
            });
        });

        /* ── SMOOTH SCROLL ── */
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const t = document.querySelector(a.getAttribute('href'));
                if (t) {
                    e.preventDefault();
                    t.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    })
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const waContainer = document.querySelector('.wa-chat-container');
            if (waContainer) {
                const openButton = waContainer.querySelector('.wa-float-button');
                const chatWidget = waContainer.querySelector('.wa-chat-widget');
                const closeButton = waContainer.querySelector('.wa-widget-close');
                if (!openButton || !chatWidget || !closeButton) return;

                const toggleWidget = (e) => {
                    e.stopPropagation();
                    chatWidget.classList.toggle('active');
                };
                const closeWidget = () => chatWidget.classList.remove('active');

                openButton.addEventListener('click', toggleWidget);
                closeButton.addEventListener('click', closeWidget);

                document.addEventListener('click', (e) => {
                    if (!waContainer.contains(e.target) && chatWidget.classList.contains('active'))
                        closeWidget();
                });
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && chatWidget.classList.contains('active')) closeWidget();
                });
            }
        });
    </script>
</body>

</html>
