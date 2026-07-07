<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="SMD Group — Building Wealth Through Luxury Living. Premium farmhouse projects, trusted land development, and high-ROI investments." />


    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/icon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>SMD Group – Building the Future. Creating Landmarks.</title>


    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Poppins:wght@300;400;500;600&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap"
        rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    @include('template/head')
    <link rel="stylesheet" href="./assets/css/about.css">

</head>

<body>

    <!-- CURSOR -->
    <div id="cursor"></div>
    <div id="cursor-ring"></div>

    <!-- PARTICLES -->
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
        <a href="#about" onclick="closeMobileMenu()">About</a>
        <a href="#why" onclick="closeMobileMenu()">Why Us</a>
        <a href="#projects" onclick="closeMobileMenu()">Projects</a>
        <a href="#director" onclick="closeMobileMenu()">Director</a>
        <a href="#gallery" onclick="closeMobileMenu()">Gallery</a>
        <a href="#contact" onclick="closeMobileMenu()">Contact</a>
    </div>

    <!-- NAV -->
    <nav id="navbar">
        <div class="nav-logo">
            SMD GROUP
            <span>Summer Multi Developers</span>
        </div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#why">Why Us</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#director">Director</a></li>
            <li><a href="#testimonials">Reviews</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact" class="nav-cta">Contact Us</a></li>
        </ul>
        <div class="hamburger" id="hamburger" onclick="toggleMobileMenu()">
            <span></span><span></span><span></span>
        </div>
    </nav>

    <!-- ═══ HERO ═══ -->
    <section id="hero">
        <div class="hero-bg"></div>
        <div class="hero-grid"></div>
        <div class="hero-video-overlay"></div>
        <div class="hero-content">
            <p class="hero-eyebrow" id="heroEyebrow">Premium Real Estate | Est. 2014</p>
            <h1 class="hero-title" id="heroTitle">
                <span class="line">Building Wealth</span>
                <span class="line">Through <span class="gold">Luxury</span></span>
                <span class="line">Living</span>
            </h1>
            <p class="hero-subtitle" id="heroSubtitle">Where Visionary Architecture Meets Timeless Investment</p>
            <div class="hero-actions" id="heroActions">
                <a href="#projects" class="btn-primary"><span>Explore Projects</span></a>
                <a href="#contact" class="btn-outline">Schedule a Visit</a>
            </div>
        </div>
        <div class="hero-stats" id="heroStats">
            <div class="hero-stat">
                <div class="stat-num">10+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="hero-stat">
                <div class="stat-num">1000+</div>
                <div class="stat-label">Happy Investors</div>
            </div>
            <div class="hero-stat">
                <div class="stat-num">50+</div>
                <div class="stat-label">Premium Projects</div>
            </div>
            <div class="hero-stat">
                <div class="stat-num">₹500Cr+</div>
                <div class="stat-label">Assets Developed</div>
            </div>
        </div>
        <div class="hero-scroll" id="heroScroll">
            <div class="hero-scroll-line"></div>Scroll to Explore
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ ABOUT ═══ -->
    <section id="about">
        <div class="about-inner">
            <div class="about-image-collage" data-reveal="left">
                <div class="collage-main">
                    <div class="collage-img-placeholder">
                        <svg width="100%" height="100%" viewBox="0 0 400 350" xmlns="http://www.w3.org/2000/svg">
                            <rect width="400" height="350" fill="none" />
                            <line x1="200" y1="350" x2="200" y2="100"
                                stroke="rgba(212,175,55,0.2)" stroke-width="1" />
                            <rect x="160" y="100" width="80" height="250" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <rect x="100" y="150" width="60" height="200" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" stroke-width="1" />
                            <rect x="240" y="160" width="60" height="190" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" stroke-width="1" />
                            <rect x="50" y="200" width="50" height="150" fill="rgba(212,175,55,0.02)"
                                stroke="rgba(212,175,55,0.06)" stroke-width="1" />
                            <rect x="300" y="210" width="50" height="140" fill="rgba(212,175,55,0.02)"
                                stroke="rgba(212,175,55,0.06)" stroke-width="1" />
                            <line x1="0" y1="350" x2="400" y2="350"
                                stroke="rgba(212,175,55,0.15)" stroke-width="1" />
                            <text x="200" y="80" text-anchor="middle" fill="rgba(212,175,55,0.25)"
                                font-family="Cinzel,serif" font-size="11" letter-spacing="3">LUXURY FARMHOUSE</text>
                        </svg>
                    </div>
                </div>
                <div class="collage-secondary">
                    <div class="collage-img-placeholder">
                        <svg width="100%" height="100%" viewBox="0 0 300 250" xmlns="http://www.w3.org/2000/svg">
                            <rect width="300" height="250" fill="none" />
                            <path d="M50 250 L50 80 L250 80 L250 250" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.15)" stroke-width="1" />
                            <path d="M80 80 L150 20 L220 80" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.2)" stroke-width="1" />
                            <rect x="110" y="150" width="80" height="100" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <rect x="70" y="110" width="40" height="60" fill="rgba(212,175,55,0.02)"
                                stroke="rgba(212,175,55,0.08)" stroke-width="1" />
                            <rect x="190" y="110" width="40" height="60" fill="rgba(212,175,55,0.02)"
                                stroke="rgba(212,175,55,0.08)" stroke-width="1" />
                            <text x="150" y="15" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel,serif" font-size="9" letter-spacing="2">SMD VILLAS</text>
                        </svg>
                    </div>
                </div>
                <div class="collage-accent">
                    <div class="collage-accent-inner">
                        10<sup>+</sup>
                        <span>Years of<br />Excellence</span>
                    </div>
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
                    style="font-family:var(--font-italic);font-size:1.1rem;font-style:italic;color:rgba(245,245,245,0.45);max-width:480px;margin:0 auto;font-weight:300;">
                    Six pillars that define our commitment to excellence and investor satisfaction</p>
            </div>
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3>Verified Properties</h3>
                    <p>Every project is legally verified with clear titles, RERA compliance, and complete documentation.
                        Invest with zero title risk and absolute confidence.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3>Prime Locations</h3>
                    <p>Strategically selected plots in NCR's most coveted growth corridors — ensuring maximum
                        appreciation and premium lifestyle access.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3>Transparent Deals</h3>
                    <p>No hidden charges, no surprises. Our transparent pricing model and open-book policy ensure every
                        transaction is crystal clear from start to finish.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                    </div>
                    <h3>Legal Assistance</h3>
                    <p>Dedicated legal team for seamless documentation, registry support, and end-to-end handholding
                        through every step of your investment journey.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3>High ROI Investment</h3>
                    <p>Consistent 30-60% appreciation in our project portfolios. Our prime land investments consistently
                        outperform market benchmarks year after year.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <h3>Luxury Farmhouse Living</h3>
                    <p>Bespoke farmhouse experiences blending contemporary luxury with natural serenity — an exclusive
                        lifestyle that defines modern premium living in India.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ PROJECTS ═══ -->
    <section id="projects">
        <div class="projects-header" data-reveal="up">
            <p class="section-eyebrow">Our Portfolio</p>
            <h2 class="section-title">Signature <span class="gold">Projects</span></h2>
            <p class="section-subtitle">Curated masterpieces across NCR's most coveted addresses</p>
        </div>
        <div class="projects-scroll-wrap">
            <div class="proj-arrow proj-prev" id="projPrev">
                <svg viewBox="0 0 24 24">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </div>
            <div class="projects-track" id="projectsTrack">
                <div class="project-card">
                    <div class="project-card-img arch-scene arch-1">
                        <div class="arch-h"><span></span><span></span><span></span></div>
                        <div class="arch-balcony"></div>
                    </div>
                    <div class="project-gradient"></div>
                    <div class="project-overlay"></div>
                    <span class="project-num">01</span>
                    <div class="project-info">
                        <p class="project-tag">Farmhouse Villas</p>
                        <h3 class="project-name">SMD Golden Residency</h3>
                        <p class="project-location"><svg viewBox="0 0 24 24" width="12" height="12"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>Sector 150, Noida Expressway</p>
                        <p class="project-price">Starting ₹45 Lakh Onwards</p>
                        <div class="project-cta">View Project <svg viewBox="0 0 24 24" width="14" height="14"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-img arch-scene arch-2">
                        <div class="arch-h"><span></span><span></span><span></span><span></span></div>
                        <div class="arch-balcony"></div>
                    </div>
                    <div class="project-gradient"></div>
                    <div class="project-overlay"></div>
                    <span class="project-num">02</span>
                    <div class="project-info">
                        <p class="project-tag">Premium Land</p>
                        <h3 class="project-name">SMD Royal Greens</h3>
                        <p class="project-location"><svg viewBox="0 0 24 24" width="12" height="12"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>Yamuna Expressway, Greater Noida</p>
                        <p class="project-price">Starting ₹25 Lakh Onwards</p>
                        <div class="project-cta">View Project <svg viewBox="0 0 24 24" width="14" height="14"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-img arch-scene arch-3">
                        <div class="arch-h"><span></span><span></span></div>
                        <div class="arch-balcony"></div>
                    </div>
                    <div class="project-gradient"></div>
                    <div class="project-overlay"></div>
                    <span class="project-num">03</span>
                    <div class="project-info">
                        <p class="project-tag">Luxury Farmhouse</p>
                        <h3 class="project-name">SMD Elite Farms</h3>
                        <p class="project-location"><svg viewBox="0 0 24 24" width="12" height="12"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>NH-58, Ghaziabad</p>
                        <p class="project-price">Starting ₹60 Lakh Onwards</p>
                        <div class="project-cta">View Project <svg viewBox="0 0 24 24" width="14" height="14"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-img arch-scene arch-4">
                        <div class="arch-h"><span></span><span></span><span></span><span></span><span></span></div>
                        <div class="arch-balcony"></div>
                    </div>
                    <div class="project-gradient"></div>
                    <div class="project-overlay"></div>
                    <span class="project-num">04</span>
                    <div class="project-info">
                        <p class="project-tag">Residential Plots</p>
                        <h3 class="project-name">SMD Green Valley</h3>
                        <p class="project-location"><svg viewBox="0 0 24 24" width="12" height="12"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>Greater Faridabad, Haryana</p>
                        <p class="project-price">Starting ₹18 Lakh Onwards</p>
                        <div class="project-cta">View Project <svg viewBox="0 0 24 24" width="14" height="14"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-card-img arch-scene arch-5">
                        <div class="arch-h"><span></span><span></span><span></span></div>
                        <div class="arch-balcony"></div>
                    </div>
                    <div class="project-gradient"></div>
                    <div class="project-overlay"></div>
                    <span class="project-num">05</span>
                    <div class="project-info">
                        <p class="project-tag">Township Villas</p>
                        <h3 class="project-name">SMD Imperial Township</h3>
                        <p class="project-location"><svg viewBox="0 0 24 24" width="12" height="12"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>Bulandshahr Road, UP</p>
                        <p class="project-price">Starting ₹32 Lakh Onwards</p>
                        <div class="project-cta">View Project <svg viewBox="0 0 24 24" width="14" height="14"
                                stroke="currentColor" fill="none" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></div>
                    </div>
                </div>
            </div>
            <div class="proj-arrow proj-next" id="projNext">
                <svg viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ DIRECTOR ═══ -->
    <section id="director">
        <div class="director-inner">
            <div class="director-portrait" data-reveal="left">
                <div class="portrait-frame">
                    <div class="portrait-bg">
                        <div class="portrait-spotlight"></div>
                        <div class="portrait-initials">SD</div>
                        <svg width="100%" height="100%" viewBox="0 0 400 530"
                            style="position:absolute;inset:0;opacity:0.6" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="pg" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0%" stop-color="rgba(212,175,55,0.1)" />
                                    <stop offset="100%" stop-color="rgba(212,175,55,0.02)" />
                                </linearGradient>
                            </defs>
                            <rect width="400" height="530" fill="url(#pg)" />
                            <circle cx="200" cy="160" r="80" fill="rgba(212,175,55,0.06)"
                                stroke="rgba(212,175,55,0.12)" stroke-width="1" />
                            <circle cx="200" cy="160" r="55" fill="rgba(212,175,55,0.05)"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <ellipse cx="200" cy="370" rx="120" ry="160"
                                fill="rgba(212,175,55,0.05)" stroke="rgba(212,175,55,0.08)" stroke-width="1" />
                        </svg>
                    </div>
                    <div class="portrait-label">
                        <h4>Mr. Sagar Sharma</h4>
                        <p>Founder & Managing Director</p>
                    </div>
                    <div class="portrait-corner tl"></div>
                    <div class="portrait-corner tr"></div>
                    <div class="portrait-corner bl"></div>
                    <div class="portrait-corner br"></div>
                </div>
            </div>
            <div class="director-content" data-reveal="right">
                <p class="section-eyebrow">Director's Message</p>
                <h2 class="section-title">A Vision of <span class="gold">Excellence</span></h2>
                <span class="gold-divider"></span>
                <div class="director-quote-mark">"</div>
                <blockquote class="director-quote">
                    Real estate is not just about land — it is about legacy. Every project we develop carries our
                    promise of quality, transparency, and the aspiration to build a wealthier tomorrow for our
                    investors.
                </blockquote>
                <p class="director-bio">With over a decade of transformative leadership in luxury real estate
                    development, I founded SMD Group on a singular conviction — that every investor deserves access to
                    premium, legally verified, high-ROI properties. From our first farmhouse project to our expanding
                    portfolio across NCR's most prime corridors, our journey has been defined by an unwavering
                    commitment to trust and excellence.</p>
                <p class="director-bio">Today, with 1000+ satisfied investors and landmark projects reshaping the
                    luxury landscape, we continue to build not just properties, but generational wealth.</p>
                <div class="director-signature">Sagar Sharma</div>
                <div class="director-creds">
                    <span class="director-cred">10+ Years Leadership</span>
                    <span class="director-cred">Real Estate Expert</span>
                    <span class="director-cred">Investment Strategist</span>
                    <span class="director-cred">NCR Market Pioneer</span>
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
                    style="font-family:var(--font-italic);font-size:1.1rem;font-style:italic;color:rgba(245,245,245,0.45);max-width:460px;margin:0 auto;font-weight:300;">
                    Trusted by over 1000 investors across NCR — their success is our greatest achievement</p>
            </div>
            <div class="test-carousel">
                <div class="test-track" id="testTrack">
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <p class="test-text">"I invested in SMD Golden Residency 3 years ago and my investment has
                            appreciated by over 45%. The team was incredibly transparent throughout the process. Truly a
                            premium experience."</p>
                        <div class="test-author">
                            <div class="test-avatar">RK</div>
                            <div>
                                <div class="test-name">Rajesh Kumar</div>
                                <div class="test-role">Senior Investor, Delhi NCR</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <p class="test-text">"SMD Group made my dream of owning a luxury farmhouse a reality. The legal
                            process was seamless, documentation was perfect, and the team's support was exceptional.
                            Highly recommended."</p>
                        <div class="test-author">
                            <div class="test-avatar">PS</div>
                            <div>
                                <div class="test-name">Priya Sharma</div>
                                <div class="test-role">Business Owner, Noida</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <p class="test-text">"The ROI on my SMD Green Valley investment exceeded all expectations.
                            Transparent dealings, prime location, and a team that genuinely cares about investor
                            outcomes. 10/10 experience."</p>
                        <div class="test-author">
                            <div class="test-avatar">AM</div>
                            <div>
                                <div class="test-name">Anil Mehta</div>
                                <div class="test-role">Retired Government Officer, Ghaziabad</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <p class="test-text">"As a first-time investor in farmhouse properties, SMD Group held my hand
                            through every step. Clear documentation, honest communication, and a truly premium property.
                            Forever grateful."</p>
                        <div class="test-author">
                            <div class="test-avatar">SG</div>
                            <div>
                                <div class="test-name">Sunita Gupta</div>
                                <div class="test-role">IT Professional, Gurugram</div>
                            </div>
                        </div>
                    </div>
                    <div class="test-card">
                        <span class="test-badge">Verified Investor</span>
                        <div class="test-quote-icon">"</div>
                        <div class="test-stars">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <p class="test-text">"Invested in two SMD projects — both have delivered exceptional returns.
                            The team's commitment to timelines and transparency is unmatched in this industry. SMD is
                            the future of NCR real estate."</p>
                        <div class="test-author">
                            <div class="test-avatar">VB</div>
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
                        style="font-size:0.9rem;color:rgba(245,245,245,0.55);line-height:1.9;margin-bottom:36px;font-weight:300;">
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
                                <p>35-60% appreciation across our portfolio over 3-5 years.</p>
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
                <!-- Gallery items with elegant SVG architectural renders -->
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:280px;--bg:linear-gradient(135deg,#1a1a10,#0f0f08)">
                        <svg width="100%" height="280" viewBox="0 0 300 280" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="280" fill="#141410" />
                            <rect x="80" y="60" width="140" height="220" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.12)" stroke-width="1" />
                            <rect x="110" y="30" width="80" height="50" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <line x1="150" y1="280" x2="150" y2="60"
                                stroke="rgba(212,175,55,0.08)" stroke-width="1" />
                            <rect x="100" y="100" width="40" height="50" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" />
                            <rect x="160" y="100" width="40" height="50" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" />
                            <rect x="120" y="180" width="60" height="100" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.1)" />
                            <text x="150" y="20" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">GOLDEN RESIDENCY</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:200px;--bg:linear-gradient(135deg,#141018,#0a0810)">
                        <svg width="100%" height="200" viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="200" fill="#100c14" />
                            <path d="M30 200 Q150 60 270 200" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.15)" stroke-width="1" />
                            <circle cx="150" cy="100" r="60" fill="none"
                                stroke="rgba(212,175,55,0.06)" stroke-width="1" />
                            <circle cx="150" cy="100" r="40" fill="none"
                                stroke="rgba(212,175,55,0.05)" stroke-width="1" />
                            <text x="150" y="105" text-anchor="middle" fill="rgba(212,175,55,0.25)"
                                font-family="Cinzel" font-size="10" letter-spacing="2">SMD</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:340px;--bg:linear-gradient(135deg,#181410,#10100a)">
                        <svg width="100%" height="340" viewBox="0 0 300 340" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="340" fill="#161210" />
                            <rect x="50" y="80" width="200" height="260" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <path d="M50 80 L150 20 L250 80" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.15)" stroke-width="1" />
                            <rect x="90" y="130" width="50" height="70" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" />
                            <rect x="160" y="130" width="50" height="70" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" />
                            <rect x="120" y="230" width="60" height="110" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.1)" />
                            <line x1="0" y1="340" x2="300" y2="340"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <text x="150" y="12" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">ROYAL GREENS VILLA</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:240px;--bg:linear-gradient(135deg,#101818,#080f10)">
                        <svg width="100%" height="240" viewBox="0 0 300 240" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="240" fill="#0e1614" />
                            <rect x="20" y="120" width="260" height="120" fill="rgba(212,175,55,0.02)"
                                stroke="rgba(212,175,55,0.08)" />
                            <circle cx="150" cy="80" r="50" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <line x1="150" y1="120" x2="150" y2="30"
                                stroke="rgba(212,175,55,0.12)" stroke-width="1" stroke-dasharray="4,4" />
                            <text x="150" y="210" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel" font-size="9" letter-spacing="2">ELITE FARMS</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:300px;--bg:linear-gradient(135deg,#181010,#100808)">
                        <svg width="100%" height="300" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="300" fill="#141010" />
                            <rect x="60" y="100" width="180" height="200" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" />
                            <line x1="60" y1="100" x2="150" y2="50"
                                stroke="rgba(212,175,55,0.12)" stroke-width="1" />
                            <line x1="240" y1="100" x2="150" y2="50"
                                stroke="rgba(212,175,55,0.12)" stroke-width="1" />
                            <rect x="80" y="150" width="50" height="60" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" />
                            <rect x="170" y="150" width="50" height="60" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.08)" />
                            <rect x="120" y="220" width="60" height="80" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.1)" />
                            <text x="150" y="40" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">GREEN VALLEY</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:210px;--bg:linear-gradient(135deg,#101018,#08080f)">
                        <svg width="100%" height="210" viewBox="0 0 300 210" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="210" fill="#0c0c14" />
                            <rect x="40" y="40" width="100" height="170" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" />
                            <rect x="160" y="70" width="100" height="140" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" />
                            <rect x="60" y="20" width="60" height="30" fill="rgba(212,175,55,0.04)"
                                stroke="rgba(212,175,55,0.12)" />
                            <text x="150" y="15" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">IMPERIAL TOWNSHIP</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:260px;--bg:linear-gradient(135deg,#141816,#0c100e)">
                        <svg width="100%" height="260" viewBox="0 0 300 260" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="260" fill="#101414" />
                            <path d="M0 260 Q75 120 150 180 Q225 240 300 60" fill="none"
                                stroke="rgba(212,175,55,0.1)" stroke-width="1" />
                            <path d="M0 260 Q75 140 150 200 Q225 260 300 80" fill="none"
                                stroke="rgba(212,175,55,0.06)" stroke-width="1" />
                            <circle cx="80" cy="140" r="8" fill="rgba(212,175,55,0.2)" />
                            <circle cx="220" cy="80" r="8" fill="rgba(212,175,55,0.2)" />
                            <text x="150" y="240" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="3">APPRECIATION CHART</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:190px;--bg:linear-gradient(135deg,#181618,#100e10)">
                        <svg width="100%" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg"
                            style="display:block">
                            <rect width="300" height="190" fill="#141214" />
                            <rect x="100" y="20" width="100" height="170" fill="rgba(212,175,55,0.03)"
                                stroke="rgba(212,175,55,0.1)" />
                            <rect x="30" y="60" width="70" height="130" fill="rgba(212,175,55,0.02)"
                                stroke="rgba(212,175,55,0.08)" />
                            <rect x="200" y="50" width="70" height="140" fill="rgba(212,175,55,0.02)"
                                stroke="rgba(212,175,55,0.08)" />
                            <text x="150" y="14" text-anchor="middle" fill="rgba(212,175,55,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">MASTER PLAN</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
            </div>
            <div style="text-align:center;margin-top:56px">
                <a href="#contact" class="btn-outline" style="display:inline-flex;align-items:center;gap:10px;">View
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
                <p
                    style="font-size:0.9rem;color:rgba(245,245,245,0.5);line-height:1.9;font-weight:300;margin-bottom:8px;">
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
                        <div class="form-group">
                            <input type="text" placeholder=" " id="fname" />
                            <label class="form-label" for="fname">First Name</label>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder=" " id="lname" />
                            <label class="form-label" for="lname">Last Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder=" " id="phone" />
                        <label class="form-label" for="phone">Phone Number</label>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder=" " id="email" />
                        <label class="form-label" for="email">Email Address</label>
                    </div>
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
                        <textarea placeholder=" " id="message"></textarea>
                        <label class="form-label" for="message">Your Message</label>
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
            <svg width="80%" height="80%" viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                <rect width="400" height="300" fill="#141410" />
                <rect x="100" y="20" width="200" height="280" fill="rgba(212,175,55,0.04)"
                    stroke="rgba(212,175,55,0.15)" stroke-width="1" />
                <path d="M100 60 L200 10 L300 60" fill="rgba(212,175,55,0.05)" stroke="rgba(212,175,55,0.2)"
                    stroke-width="1" />
                <rect x="130" y="90" width="60" height="80" fill="rgba(212,175,55,0.03)"
                    stroke="rgba(212,175,55,0.1)" />
                <rect x="210" y="90" width="60" height="80" fill="rgba(212,175,55,0.03)"
                    stroke="rgba(212,175,55,0.1)" />
                <rect x="160" y="200" width="80" height="100" fill="rgba(212,175,55,0.04)"
                    stroke="rgba(212,175,55,0.12)" />
                <text x="200" y="295" text-anchor="middle" fill="rgba(212,175,55,0.3)" font-family="Cinzel"
                    font-size="10" letter-spacing="3">SMD LUXURY PROJECT</text>
            </svg>
        </div>
    </div>

    <!-- ═══ FOOTER ═══ -->
    <footer>
        <div class="footer-inner">
            <div class="footer-brand">
                <div class="nav-logo">SMD GROUP<span>Summer Multi Developers</span></div>
                <p>Building Wealth Through Luxury Living. India's premier luxury farmhouse and land development company,
                    trusted by 1000+ investors across Delhi NCR.</p>
                <div class="footer-social">
                    <div class="social-icon" title="Facebook"><svg viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                        </svg></div>
                    <div class="social-icon" title="Instagram"><svg viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg></div>
                    <div class="social-icon" title="YouTube"><svg viewBox="0 0 24 24">
                            <path
                                d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z" />
                            <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" />
                        </svg></div>
                    <div class="social-icon" title="WhatsApp"><svg viewBox="0 0 24 24">
                            <path
                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z" />
                        </svg></div>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#about">About SMD</a></li>
                    <li><a href="#why">Why Choose Us</a></li>
                    <li><a href="#projects">Our Projects</a></li>
                    <li><a href="#director">Director's Message</a></li>
                    <li><a href="#testimonials">Investor Reviews</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Projects</h4>
                <ul>
                    <li><a href="#projects">SMD Golden Residency</a></li>
                    <li><a href="#projects">SMD Royal Greens</a></li>
                    <li><a href="#projects">SMD Elite Farms</a></li>
                    <li><a href="#projects">SMD Green Valley</a></li>
                    <li><a href="#projects">SMD Imperial Township</a></li>
                    <li><a href="#contact">Upcoming Projects</a></li>
                </ul>
            </div>
            <div class="footer-col footer-newsletter">
                <h4>Stay Connected</h4>
                <p>Subscribe to exclusive project updates, investment insights, and luxury real estate opportunities.
                </p>
                <div class="newsletter-input">
                    <input type="email" placeholder="Your email address" />
                    <button><svg viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg></button>
                </div>
                <p style="font-size:0.7rem;color:rgba(245,245,245,0.25);margin-top:14px;letter-spacing:0.05em;">
                    RERA Reg. No.: UPRERAPRJ XXXXX &nbsp;|&nbsp; MahaRERA Reg. No.: XXXXX
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 <a href="#">SMD Group — Summer Multi Developers</a>. All Rights Reserved.</p>
            <p>Designed with excellence &nbsp;|&nbsp; <a href="#">Privacy Policy</a> &nbsp;|&nbsp; <a
                    href="#">Terms of Use</a></p>
        </div>
    </footer>

    <!-- ═══════════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════════ -->
    <script>
        /* ─── CURSOR ─── */
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
            cur.style.top = my + 'px';
        });

        function animCursor() {
            rx += (mx - rx) * 0.12;
            ry += (my - ry) * 0.12;
            curRing.style.left = rx + 'px';
            curRing.style.top = ry + 'px';
            requestAnimationFrame(animCursor);
        }
        animCursor();
        document.querySelectorAll(
            'a,button,.why-card,.test-card,.gallery-item,.project-card,.social-icon,.test-arrow,.proj-arrow').forEach(
            el => {
                el.addEventListener('mouseenter', () => {
                    cur.style.width = '20px';
                    cur.style.height = '20px';
                    curRing.style.width = '60px';
                    curRing.style.height = '60px';
                });
                el.addEventListener('mouseleave', () => {
                    cur.style.width = '12px';
                    cur.style.height = '12px';
                    curRing.style.width = '36px';
                    curRing.style.height = '36px';
                });
            });

        /* ─── LOADER ─── */
        window.addEventListener('load', () => {
            setTimeout(() => {
                gsap.to('#loader', {
                    opacity: 0,
                    duration: 0.8,
                    delay: 0.5,
                    ease: 'power2.inOut',
                    onComplete: () => {
                        document.getElementById('loader').style.display = 'none';
                        initAnimations();
                    }
                });
            }, 2200);
        });

        /* ─── PARTICLES ─── */
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
                size: Math.random() * 1.5 + 0.3,
                speedX: (Math.random() - 0.5) * 0.3,
                speedY: -Math.random() * 0.5 - 0.1,
                alpha: Math.random() * 0.4 + 0.1,
                decay: Math.random() * 0.002 + 0.001
            };
        }
        for (let i = 0; i < 80; i++) particles.push(createParticle());

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
                ctx.fillStyle = `rgba(212,175,55,${p.alpha})`;
                ctx.fill();
            });
            requestAnimationFrame(animParticles);
        }
        animParticles();

        /* ─── NAV SCROLL ─── */
        const nav = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('scrolled', window.scrollY > 80);
        });

        /* ─── MOBILE MENU ─── */
        function toggleMobileMenu() {
            document.getElementById('mobileMenu').classList.toggle('open');
        }

        function closeMobileMenu() {
            document.getElementById('mobileMenu').classList.remove('open');
        }

        /* ─── GSAP ANIMATIONS ─── */
        function initAnimations() {
            gsap.registerPlugin(ScrollTrigger);

            // Hero reveal
            const tl = gsap.timeline();
            tl.to('#heroEyebrow', {
                    opacity: 1,
                    y: 0,
                    duration: 0.9,
                    ease: 'power3.out'
                })
                .to('#heroTitle', {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out'
                }, '-=0.5')
                .to('#heroSubtitle', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power3.out'
                }, '-=0.6')
                .to('#heroActions', {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    ease: 'power3.out'
                }, '-=0.5')
                .to('#heroStats', {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    ease: 'power3.out'
                }, '-=0.4')
                .to('#heroScroll', {
                    opacity: 1,
                    duration: 0.5
                }, '-=0.2');

            // Reveal elements
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
                        start: 'top 85%',
                        toggleActions: 'play none none none'
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
                        start: 'top 80%',
                        toggleActions: 'play none none none'
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
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                });
            });

            // Timeline items
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

            // Why cards stagger
            gsap.utils.toArray('.why-card').forEach((el, i) => {
                gsap.fromTo(el, {
                    opacity: 0,
                    y: 30
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    delay: i * 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#why',
                        start: 'top 70%'
                    }
                });
            });

            // Project cards
            gsap.utils.toArray('.project-card').forEach((el, i) => {
                gsap.fromTo(el, {
                    opacity: 0,
                    y: 40
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    delay: i * 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#projects',
                        start: 'top 70%'
                    }
                });
            });

            // Gallery items
            gsap.utils.toArray('.gallery-item').forEach((el, i) => {
                gsap.fromTo(el, {
                    opacity: 0,
                    scale: 0.95
                }, {
                    opacity: 1,
                    scale: 1,
                    duration: 0.7,
                    delay: i * 0.07,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#gallery',
                        start: 'top 70%'
                    }
                });
            });

            // Counters
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

            // Investment bars
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

            // Parallax hero grid
            gsap.to('.hero-grid', {
                yPercent: -20,
                ease: 'none',
                scrollTrigger: {
                    trigger: '#hero',
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 1
                }
            });

            // Contact cards
            gsap.utils.toArray('.contact-info-card').forEach((el, i) => {
                gsap.fromTo(el, {
                    opacity: 0,
                    x: -30
                }, {
                    opacity: 1,
                    x: 0,
                    duration: 0.6,
                    delay: i * 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#contact',
                        start: 'top 75%'
                    }
                });
            });
        }

        /* ─── PROJECT CAROUSEL ─── */
        const track = document.getElementById('projectsTrack');
        let projScrollPos = 0;
        const cardW = 422;
        document.getElementById('projNext').addEventListener('click', () => {
            projScrollPos = Math.min(projScrollPos + cardW, track.scrollWidth - track.clientWidth);
            track.scrollTo({
                left: projScrollPos,
                behavior: 'smooth'
            });
        });
        document.getElementById('projPrev').addEventListener('click', () => {
            projScrollPos = Math.max(projScrollPos - cardW, 0);
            track.scrollTo({
                left: projScrollPos,
                behavior: 'smooth'
            });
        });

        /* ─── TESTIMONIALS CAROUSEL ─── */
        const testTrack = document.getElementById('testTrack');
        let testIdx = 0;
        const testTotal = 3;

        function getTestCardW() {
            const card = testTrack.querySelector('.test-card');
            return card ? card.offsetWidth + 14 : 0;
        }

        function goTest(i) {
            testIdx = i;
            testTrack.style.transform = `translateX(-${testIdx*(getTestCardW())}px)`;
            document.querySelectorAll('.test-dot').forEach((d, j) => d.classList.toggle('active', j === testIdx));
        }
        document.getElementById('testNext').addEventListener('click', () => goTest((testIdx + 1) % testTotal));
        document.getElementById('testPrev').addEventListener('click', () => goTest((testIdx - 1 + testTotal) % testTotal));
        document.querySelectorAll('.test-dot').forEach(d => {
            d.addEventListener('click', () => goTest(parseInt(d.dataset.i)));
        });
        setInterval(() => goTest((testIdx + 1) % testTotal), 5000);

        /* ─── LIGHTBOX ─── */
        function openLightbox() {
            document.getElementById('lightbox').classList.add('open')
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('open')
        }
        document.getElementById('lightbox').addEventListener('click', e => {
            if (e.target === e.currentTarget) closeLightbox()
        });

        /* ─── FORM ─── */
        function handleFormSubmit(e) {
            e.preventDefault();
            const btn = e.target.querySelector('.form-submit');
            btn.textContent = 'Sending...';
            btn.style.opacity = '0.8';
            setTimeout(() => {
                btn.textContent = 'Message Sent ✓';
                btn.style.background = 'linear-gradient(135deg,#4CAF50,#388E3C)';
                setTimeout(() => {
                    btn.textContent = 'Schedule Consultation';
                    btn.style.background = 'linear-gradient(135deg,var(--gold),var(--soft-gold))';
                    btn.style.opacity = '1';
                    e.target.reset();
                }, 3000);
            }, 1500);
        }

        /* ─── TILT EFFECT on why-cards ─── */
        document.querySelectorAll('.why-card').forEach(card => {
            card.addEventListener('mousemove', e => {
                const r = card.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - 0.5;
                const y = (e.clientY - r.top) / r.height - 0.5;
                card.style.transform = `translateY(-4px) rotateX(${-y*6}deg) rotateY(${x*6}deg)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
                card.style.transition = 'transform 0.6s cubic-bezier(0.16,1,0.3,1)';
            });
            card.addEventListener('mouseenter', () => {
                card.style.transition = 'transform 0.1s'
            });
        });

        /* ─── SMOOTH ANCHOR SCROLL ─── */
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    })
                }
            });
        });
    </script>
</body>

</html>
