<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/icon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>SMD Group – Building the Future. Creating Landmarks.</title>
    @include('template/head')
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>


    <!-- ====== NAV ====== -->
    <nav id="navbar">
        <div class="nav-logo">
            <div class="logo-emblem"><img src="./assets/img/logo/SMD-Logos-6-251x300.webp" alt="SMD Group Logo" width="40" height="auto"/></div>
            <div class="logo-text">
                <span>SMD GROUP</span>
                <span>Building the Future. Creating Landmarks.</span>
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#directors">Directors</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#contact" class="nav-cta">Enquire Now</a></li>
        </ul>
    </nav>

    <!-- ====== HERO ====== -->
    <section class="hero" id="home">
        <div class="hero-media" id="heroMedia">
            <!-- Upload hero video/image -->
            <label class="upload-placeholder" id="heroUploadLabel" for="heroFileInput"
                title="Click to upload hero background video or image">
                <svg viewBox="0 0 48 48">
                    <path d="M24 32V16m-8 8 8-8 8 8" />
                    <rect x="4" y="28" width="40" height="16" rx="2" />
                </svg>
                <span>UPLOAD HERO BACKGROUND VIDEO / IMAGE</span>
            </label>
            <input type="file" id="heroFileInput" accept="image/*,video/*" style="display:none">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-lines"></div>
        <div class="hero-content">
            <div class="hero-eyebrow">Est. 2025 &nbsp;&bull;&nbsp; CIN: U68100UP2025PTC236249</div>
            <h1 class="hero-title">SMD <span>GROUP</span></h1>
            <p class="hero-subtitle">Where Luxury Meets Legacy</p>
            <p class="hero-tagline">Premium Farmhouse &amp; Residential Plots · Uttar Pradesh &amp; Uttarakhand</p>
            <div class="hero-btns">
                <a href="#projects" class="btn-royal">Explore Projects</a>
                <a href="#contact" class="btn-outline">Book Site Visit</a>
            </div>
        </div>
        <div class="hero-scroll">
            <div class="scroll-line"></div>
            <div class="scroll-text">Scroll</div>
        </div>
    </section>

    <!-- ====== LUCKY DRAW ====== -->
    <div class="lucky-draw-banner reveal">
        <p>🏆 &nbsp;<strong style="color:var(--gold);letter-spacing:2px;">SMD LUCKY DRAW IS LIVE!</strong> &nbsp; Book a
            site visit or register today and get a chance to win exclusive rewards. &nbsp; <a href="#contact">Enter Now
                →</a></p>
    </div>

    <!-- ====== STATS ====== -->
    <div class="stats-bar reveal">
        <div class="stat-item">
            <div class="stat-number">10+</div>
            <div class="stat-label">Years of Expertise</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-number">5</div>
            <div class="stat-label">Premium Projects</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-number">500+</div>
            <div class="stat-label">Happy Families</div>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <div class="stat-number">2</div>
            <div class="stat-label">States Covered</div>
        </div>
    </div>

    <!-- ====== ABOUT ====== -->
    <section class="about" id="about">
        <div class="reveal">
            <div class="section-label">Our Story</div>
            <h2 class="section-title">Crafting Dreams into <span>Landmarks</span></h2>
            <p class="section-desc">A trusted name in premium land development, SMD Group transforms landscapes into
                legacy properties across the finest locations of North India.</p>
        </div>
        <div class="about-grid">
            <div class="about-image-container reveal">
                <div class="about-image" id="aboutImgWrap">
                    <label class="img-placeholder" for="aboutImgInput">
                        <svg viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                        <span>UPLOAD COMPANY IMAGE</span>
                    </label>
                    <input type="file" id="aboutImgInput" accept="image/*" style="display:none">
                </div>
                <div class="about-accent"></div>
                <div class="about-badge">
                    <div class="num">10+</div>
                    <div class="lbl">Years</div>
                </div>
            </div>
            <div class="about-text reveal" style="transition-delay:0.2s">
                <div class="section-label">Who We Are</div>
                <h3 class="section-title" style="font-size:36px;">Building Trust, <span>One Plot at a Time</span></h3>
                <p class="section-desc" style="font-size:17px;margin-bottom:20px;">
                    Welcome to SMD Group — a premier real estate developer specializing in luxury farmhouse plots and
                    residential land across the scenic landscapes of Uttar Pradesh and Uttarakhand.
                </p>
                <p style="font-size:13px;color:var(--text-light);line-height:1.9;margin-bottom:32px;">
                    Our mission is simple: to make land ownership accessible, transparent, and rewarding. Every project
                    is RERA-approved, legally verified, and crafted for long-term value.
                </p>
                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon">✦</div>
                        <div class="feature-text">
                            <h4>RERA Approved & Legally Verified</h4>
                            <p>All our properties are fully compliant, RERA-registered, and legally clear for
                                hassle-free ownership.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">✦</div>
                        <div class="feature-text">
                            <h4>Transparent Dealings</h4>
                            <p>Zero hidden charges — what you see is what you pay. Full documentation from day one.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">✦</div>
                        <div class="feature-text">
                            <h4>End-to-End Assistance</h4>
                            <p>We guide you from selection to possession — legal, financial, and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== PROJECTS ====== -->
    <section class="projects" id="projects">
        <div class="reveal">
            <div class="section-label">Our Portfolio</div>
            <h2 class="section-title">Signature <span>Projects</span></h2>
            <p class="section-desc">From resort-style farmhouses to serene nature retreats — every SMD project is a
                statement of refined living.</p>
        </div>
        <div class="projects-grid reveal" style="transition-delay:0.2s">

            <div class="project-card">
                <div class="project-card-bg">
                    <label class="img-upload" for="proj1" title="Upload Anandvan Resorts image">
                        <svg style="width:32px;height:32px;fill:none;stroke:rgba(201,168,76,0.4);stroke-width:1.5"
                            viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                        <span style="color:rgba(201,168,76,0.5);font-size:10px;letter-spacing:2px">UPLOAD IMAGE</span>
                    </label>
                    <input type="file" id="proj1" accept="image/*" style="display:none"
                        onchange="previewProjectImg(this)">
                </div>
                <div class="project-card-overlay"></div>
                <div class="project-card-content">
                    <div class="project-tag">Resort Living</div>
                    <div class="project-name">Anandvan Resorts</div>
                    <div class="project-loc">📍 Uttarakhand</div>
                    <a href="#" class="project-btn">View Brochure <span></span></a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-bg">
                    <label class="img-upload" for="proj2" title="Upload Royal Orchid image">
                        <svg style="width:32px;height:32px;fill:none;stroke:rgba(201,168,76,0.4);stroke-width:1.5"
                            viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                        <span style="color:rgba(201,168,76,0.5);font-size:10px;letter-spacing:2px">UPLOAD IMAGE</span>
                    </label>
                    <input type="file" id="proj2" accept="image/*" style="display:none"
                        onchange="previewProjectImg(this)">
                </div>
                <div class="project-card-overlay"></div>
                <div class="project-card-content">
                    <div class="project-tag">Luxury Farms</div>
                    <div class="project-name">The Royal Orchid Farms</div>
                    <div class="project-loc">📍 Uttarakhand</div>
                    <a href="#" class="project-btn">View Brochure <span></span></a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-bg">
                    <label class="img-upload" for="proj3" title="Upload Alaknanda image">
                        <svg style="width:32px;height:32px;fill:none;stroke:rgba(201,168,76,0.4);stroke-width:1.5"
                            viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                        <span style="color:rgba(201,168,76,0.5);font-size:10px;letter-spacing:2px">UPLOAD IMAGE</span>
                    </label>
                    <input type="file" id="proj3" accept="image/*" style="display:none"
                        onchange="previewProjectImg(this)">
                </div>
                <div class="project-card-overlay"></div>
                <div class="project-card-content">
                    <div class="project-tag">Nature Retreat</div>
                    <div class="project-name">Alaknanda Farms</div>
                    <div class="project-loc">📍 Uttarakhand</div>
                    <a href="#" class="project-btn">View Brochure <span></span></a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-bg">
                    <label class="img-upload" for="proj4" title="Upload Oak Hill image">
                        <svg style="width:32px;height:32px;fill:none;stroke:rgba(201,168,76,0.4);stroke-width:1.5"
                            viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                        <span style="color:rgba(201,168,76,0.5);font-size:10px;letter-spacing:2px">UPLOAD IMAGE</span>
                    </label>
                    <input type="file" id="proj4" accept="image/*" style="display:none"
                        onchange="previewProjectImg(this)">
                </div>
                <div class="project-card-overlay"></div>
                <div class="project-card-content">
                    <div class="project-tag">Garden Township</div>
                    <div class="project-name">OAK Hill Gardens</div>
                    <div class="project-loc">📍 Uttar Pradesh</div>
                    <a href="#" class="project-btn">View Brochure <span></span></a>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-bg">
                    <label class="img-upload" for="proj5" title="Upload Shri Krishna image">
                        <svg style="width:32px;height:32px;fill:none;stroke:rgba(201,168,76,0.4);stroke-width:1.5"
                            viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                        <span style="color:rgba(201,168,76,0.5);font-size:10px;letter-spacing:2px">UPLOAD IMAGE</span>
                    </label>
                    <input type="file" id="proj5" accept="image/*" style="display:none"
                        onchange="previewProjectImg(this)">
                </div>
                <div class="project-card-overlay"></div>
                <div class="project-card-content">
                    <div class="project-tag">Residential Enclave</div>
                    <div class="project-name">Shri Krishna Enclave</div>
                    <div class="project-loc">📍 Uttar Pradesh</div>
                    <a href="#" class="project-btn">View Brochure <span></span></a>
                </div>
            </div>

        </div>
    </section>

    <!-- ====== MEDIA UPLOAD GALLERY ====== -->
    <section class="media-upload" id="gallery">
        <div class="reveal">
            <div class="section-label">Visual Gallery</div>
            <h2 class="section-title">Site Images <span>&amp; Videos</span></h2>
            <p class="section-desc">Upload property images and walkthrough videos to showcase your premium projects to
                potential buyers.</p>
        </div>
        <div class="media-grid reveal" style="transition-delay:0.2s">

            <div class="media-item large" id="mediaItem1">
                <input type="file" accept="image/*" onchange="previewMedia(this,'mediaItem1','image')">
                <div class="media-upload-inner">
                    <div class="upload-icon">
                        <svg viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                    </div>
                    <h4>Main Property Image</h4>
                    <p>Upload your featured property or site photo here</p>
                    <span class="upload-formats">JPG · PNG · WEBP</span>
                </div>
                <button class="remove-btn" onclick="removeMedia('mediaItem1')">✕</button>
            </div>

            <div class="media-item small" id="mediaItem2">
                <input type="file" accept="image/*" onchange="previewMedia(this,'mediaItem2','image')">
                <div class="media-upload-inner">
                    <div class="upload-icon">
                        <svg viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                    </div>
                    <h4>Gallery Image 2</h4>
                    <p>Interior or garden shot</p>
                    <span class="upload-formats">JPG · PNG · WEBP</span>
                </div>
                <button class="remove-btn" onclick="removeMedia('mediaItem2')">✕</button>
            </div>

            <div class="media-item small" id="mediaItem3">
                <input type="file" accept="image/*" onchange="previewMedia(this,'mediaItem3','image')">
                <div class="media-upload-inner">
                    <div class="upload-icon">
                        <svg viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                    </div>
                    <h4>Gallery Image 3</h4>
                    <p>Aerial or landscape view</p>
                    <span class="upload-formats">JPG · PNG · WEBP</span>
                </div>
                <button class="remove-btn" onclick="removeMedia('mediaItem3')">✕</button>
            </div>

            <div class="media-item small" id="mediaItem4">
                <input type="file" accept="image/*" onchange="previewMedia(this,'mediaItem4','image')">
                <div class="media-upload-inner">
                    <div class="upload-icon">
                        <svg viewBox="0 0 48 48">
                            <rect x="4" y="8" width="40" height="32" rx="3" />
                            <circle cx="16" cy="20" r="4" />
                            <path d="M4 34l10-10 8 8 6-6 12 12" />
                        </svg>
                    </div>
                    <h4>Gallery Image 4</h4>
                    <p>Amenities or location photo</p>
                    <span class="upload-formats">JPG · PNG · WEBP</span>
                </div>
                <button class="remove-btn" onclick="removeMedia('mediaItem4')">✕</button>
            </div>

            <div class="media-item video-slot" id="mediaItemVideo">
                <input type="file" accept="video/*" onchange="previewMedia(this,'mediaItemVideo','video')">
                <div class="media-upload-inner">
                    <div class="upload-icon">
                        <svg viewBox="0 0 48 48">
                            <path d="M4 12a4 4 0 0 1 4-4h24a4 4 0 0 1 4 4v24a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4V12z" />
                            <path d="m32 24-12-8v16l12-8z" />
                        </svg>
                    </div>
                    <h4>Property Walkthrough Video</h4>
                    <p>Upload a site visit or drone walkthrough video — this will be displayed as a full-width feature
                        video</p>
                    <span class="upload-formats">MP4 · MOV · WEBM — Max 500MB</span>
                </div>
                <button class="remove-btn" onclick="removeMedia('mediaItemVideo')">✕</button>
            </div>

        </div>
    </section>

    <!-- ====== VISION ====== -->
    <section class="vision" id="vision">
        <div class="reveal" style="text-align:center;margin-bottom:0">
            <div class="section-label" style="justify-content:center">Why SMD Group</div>
            <h2 class="section-title" style="text-align:center">Our <span>Core Values</span></h2>
        </div>
        <div class="vision-grid reveal" style="transition-delay:0.2s">
            <div class="vision-item">
                <div class="vision-icon">🏛️</div>
                <h3>Legacy Building</h3>
                <p>We don't just sell plots — we help families and investors build generational wealth through premium
                    land assets.</p>
            </div>
            <div class="vision-item">
                <div class="vision-icon">⚖️</div>
                <h3>Legal Transparency</h3>
                <p>RERA-approved, legally verified titles, zero hidden charges — complete peace of mind from inquiry to
                    possession.</p>
            </div>
            <div class="vision-item">
                <div class="vision-icon">🌿</div>
                <h3>Nature + Connectivity</h3>
                <p>Strategically located across UP & Uttarakhand, our projects blend serene landscapes with urban
                    accessibility.</p>
            </div>
            <div class="vision-item">
                <div class="vision-icon">🤝</div>
                <h3>Client First</h3>
                <p>Your journey doesn't end at booking. We provide end-to-end guidance through documentation,
                    registration, and beyond.</p>
            </div>
            <div class="vision-item">
                <div class="vision-icon">📈</div>
                <h3>High ROI Potential</h3>
                <p>Our locations are chosen for their growth trajectory — giving you investment-grade land with strong
                    appreciation.</p>
            </div>
            <div class="vision-item">
                <div class="vision-icon">🏅</div>
                <h3>Trusted By Hundreds</h3>
                <p>Over 500+ satisfied families and investors trust SMD Group — a testament to our commitment to quality
                    and integrity.</p>
            </div>
        </div>
    </section>

    <!-- ====== DIRECTORS ====== -->
    <section class="directors" id="directors">
        <div class="reveal" style="text-align:center">
            <div class="section-label" style="justify-content:center">Leadership</div>
            <h2 class="section-title" style="text-align:center">Board of <span>Directors</span></h2>
            <p class="section-desc" style="text-align:center;max-width:600px;margin:0 auto;">SMD Group is led by
                visionary directors committed to ethical, transparent, and growth-driven real estate development.</p>
        </div>
        <div class="directors-grid reveal" style="transition-delay:0.2s">

            <!-- Director 1 -->
            <div class="director-card">
                <div class="director-photo">
                    <div class="photo-placeholder">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="18" r="10" />
                            <path d="M6 42c0-10 8-18 18-18s18 8 18 18" />
                        </svg>
                        <span>UPLOAD</span>
                    </div>
                    <input type="file" accept="image/*" onchange="previewDirectorPhoto(this, 0)">
                </div>
                <div class="director-crown">✦ ✦ ✦</div>
                <h3 class="director-name" id="dirName1" contenteditable="true" title="Click to edit name">Director
                    Name 1</h3>
                <div class="director-role" id="dirRole1" contenteditable="true" title="Click to edit designation">
                    Managing Director</div>
                <div class="director-divider"></div>
                <div class="director-din" id="dirDin1" contenteditable="true">DIN: 00000001</div>
                <div class="director-nationality" id="dirNat1" contenteditable="true">Nationality: Indian</div>
            </div>

            <!-- Director 2 -->
            <div class="director-card">
                <div class="director-photo">
                    <div class="photo-placeholder">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="18" r="10" />
                            <path d="M6 42c0-10 8-18 18-18s18 8 18 18" />
                        </svg>
                        <span>UPLOAD</span>
                    </div>
                    <input type="file" accept="image/*" onchange="previewDirectorPhoto(this, 1)">
                </div>
                <div class="director-crown">✦ ✦ ✦</div>
                <h3 class="director-name" id="dirName2" contenteditable="true" title="Click to edit name">Director
                    Name 2</h3>
                <div class="director-role" id="dirRole2" contenteditable="true" title="Click to edit designation">
                    Director</div>
                <div class="director-divider"></div>
                <div class="director-din" id="dirDin2" contenteditable="true">DIN: 00000002</div>
                <div class="director-nationality" id="dirNat2" contenteditable="true">Nationality: Indian</div>
            </div>

            <!-- Director 3 -->
            <div class="director-card">
                <div class="director-photo">
                    <div class="photo-placeholder">
                        <svg viewBox="0 0 48 48">
                            <circle cx="24" cy="18" r="10" />
                            <path d="M6 42c0-10 8-18 18-18s18 8 18 18" />
                        </svg>
                        <span>UPLOAD</span>
                    </div>
                    <input type="file" accept="image/*" onchange="previewDirectorPhoto(this, 2)">
                </div>
                <div class="director-crown">✦ ✦ ✦</div>
                <h3 class="director-name" id="dirName3" contenteditable="true" title="Click to edit name">Director
                    Name 3</h3>
                <div class="director-role" id="dirRole3" contenteditable="true" title="Click to edit designation">
                    Director</div>
                <div class="director-divider"></div>
                <div class="director-din" id="dirDin3" contenteditable="true">DIN: 00000003</div>
                <div class="director-nationality" id="dirNat3" contenteditable="true">Nationality: Indian</div>
            </div>

        </div>
        <p style="text-align:center;margin-top:24px;font-size:11px;color:rgba(201,168,76,0.5);letter-spacing:1px;">
            ✎ Click on any text to edit &nbsp;·&nbsp; Click photo circle to upload photo
        </p>
    </section>

    <!-- ====== REVIEWS ====== -->
    <section class="reviews" id="reviews">
        <div class="reveal" style="text-align:center">
            <div class="section-label" style="justify-content:center">Testimonials</div>
            <h2 class="section-title" style="text-align:center">What Our <span>Clients Say</span></h2>
            <p class="section-desc" style="text-align:center;max-width:560px;margin:0 auto;">Hundreds of families have
                trusted us with their dream of land ownership. Here is what they say.</p>
        </div>

        <div style="overflow:hidden">
            <div class="reviews-track" id="reviewsTrack">

                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">Bought a plot in Anandvan Resorts — the entire process was smooth,
                        transparent, and professional. The team guided us at every step. Highly recommended!</p>
                    <div class="review-author">
                        <div class="review-avatar">R</div>
                        <div class="review-info">
                            <h4>Rajesh Sharma</h4>
                            <p>Anandvan Resorts · Delhi</p>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">The Royal Orchid Farms is truly royal in every sense. Beautiful location,
                        clear paperwork, and a team that genuinely cares about your investment.</p>
                    <div class="review-author">
                        <div class="review-avatar">P</div>
                        <div class="review-info">
                            <h4>Priya Mehta</h4>
                            <p>Royal Orchid Farms · Noida</p>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">SMD Group delivered exactly what they promised — RERA approved, clean title,
                        and a gorgeous location. Our family's best investment decision.</p>
                    <div class="review-author">
                        <div class="review-avatar">A</div>
                        <div class="review-info">
                            <h4>Amit Verma</h4>
                            <p>Alaknanda Farms · Ghaziabad</p>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">OAK Hill Gardens is a gem. Perfect for weekend retreat and the value has
                        already appreciated significantly. Transparent dealings from day one.</p>
                    <div class="review-author">
                        <div class="review-avatar">S</div>
                        <div class="review-info">
                            <h4>Sunita Agarwal</h4>
                            <p>OAK Hill Gardens · Lucknow</p>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">Purchased in Shri Krishna Enclave. The site visit experience was world-class
                        and the after-sales support is outstanding. A truly trustworthy company.</p>
                    <div class="review-author">
                        <div class="review-avatar">M</div>
                        <div class="review-info">
                            <h4>Manoj Gupta</h4>
                            <p>Shri Krishna Enclave · Meerut</p>
                        </div>
                    </div>
                </div>

                <!-- Duplicate for infinite scroll -->
                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">Bought a plot in Anandvan Resorts — the entire process was smooth,
                        transparent, and professional. The team guided us at every step. Highly recommended!</p>
                    <div class="review-author">
                        <div class="review-avatar">R</div>
                        <div class="review-info">
                            <h4>Rajesh Sharma</h4>
                            <p>Anandvan Resorts · Delhi</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">The Royal Orchid Farms is truly royal in every sense. Beautiful location,
                        clear paperwork, and a team that genuinely cares about your investment.</p>
                    <div class="review-author">
                        <div class="review-avatar">P</div>
                        <div class="review-info">
                            <h4>Priya Mehta</h4>
                            <p>Royal Orchid Farms · Noida</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">SMD Group delivered exactly what they promised — RERA approved, clean title,
                        and a gorgeous location. Our family's best investment decision.</p>
                    <div class="review-author">
                        <div class="review-avatar">A</div>
                        <div class="review-info">
                            <h4>Amit Verma</h4>
                            <p>Alaknanda Farms · Ghaziabad</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">OAK Hill Gardens is a gem. Perfect for weekend retreat and the value has
                        already appreciated significantly. Transparent dealings from day one.</p>
                    <div class="review-author">
                        <div class="review-avatar">S</div>
                        <div class="review-info">
                            <h4>Sunita Agarwal</h4>
                            <p>OAK Hill Gardens · Lucknow</p>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-quote">"</div>
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">Purchased in Shri Krishna Enclave. The site visit experience was world-class
                        and the after-sales support is outstanding. A truly trustworthy company.</p>
                    <div class="review-author">
                        <div class="review-avatar">M</div>
                        <div class="review-info">
                            <h4>Manoj Gupta</h4>
                            <p>Shri Krishna Enclave · Meerut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="add-review-wrap reveal">
            <button class="btn-add-review" onclick="document.getElementById('reviewModal').classList.add('active')">✦
                &nbsp; Share Your Experience &nbsp; ✦</button>
        </div>
    </section>

    <!-- ====== CONTACT ====== -->
    <section class="contact" id="contact">
        <div class="reveal" style="text-align:center">
            <div class="section-label" style="justify-content:center">Get In Touch</div>
            <h2 class="section-title" style="text-align:center">Book Your <span>Site Visit</span></h2>
            <p class="section-desc" style="text-align:center;max-width:560px;margin:0 auto;">Take the first step
                toward your dream property. Our team will guide you through every detail.</p>
        </div>
        <div class="contact-grid reveal" style="transition-delay:0.2s;margin-top:60px">
            <div class="contact-info">
                <h3>Office Locations</h3>
                <div class="contact-detail">
                    <div class="contact-detail-icon">📞</div>
                    <div class="contact-detail-text"><strong>Phone</strong>+91 8307 050 700 &nbsp;|&nbsp; +91 9548 051
                        243</div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon">✉️</div>
                    <div class="contact-detail-text"><strong>Email</strong>info@summermultidevelopers.com</div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon">📍</div>
                    <div class="contact-detail-text"><strong>Corporate Office</strong>A-324, Pacific Business Park,
                        Sahibabad, Ghaziabad, Uttar Pradesh – 201010</div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon">📍</div>
                    <div class="contact-detail-text"><strong>Branch Office</strong>Gali No 5, NTPC Colony, Pondha,
                        Dehradun, Uttarakhand – 248007</div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon">🏛️</div>
                    <div class="contact-detail-text"><strong>CIN</strong>U68100UP2025PTC236249</div>
                </div>
            </div>
            <div class="contact-form">
                <h3>Send Enquiry</h3>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" placeholder="Your Full Name">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" placeholder="+91 XXXXX XXXXX">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="your@email.com">
                </div>
                <div class="form-group">
                    <label>Project Interest</label>
                    <select>
                        <option>Select a Project</option>
                        <option>Anandvan Resorts</option>
                        <option>The Royal Orchid Farms</option>
                        <option>Alaknanda Farms</option>
                        <option>OAK Hill Gardens</option>
                        <option>Shri Krishna Enclave</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea placeholder="Tell us about your requirements..."></textarea>
                </div>
                <button class="btn-submit" onclick="alert('Thank you! We will contact you within 24 hours.')">Send
                    Enquiry →</button>
            </div>
        </div>
    </section>

    <!-- ====== FOOTER ====== -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="logo-text">
                    <h3>SMD GROUP</h3>
                    <p>Building the Future. Creating Landmarks.</p>
                </div>
                <p>Premium plots & luxury farmhouses across Delhi NCR, Uttarakhand, and Uttar Pradesh. Invest in land
                    that grows with time.</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/share/1Fvk9VGm1x/" class="social-btn" target="_blank">f</a>
                    <a href="https://www.instagram.com/smdgr_oup" class="social-btn" target="_blank">in</a>
                    <a href="https://wa.me/8307050700" class="social-btn" target="_blank">w</a>
                    <a href="https://youtube.com/@smd_group-smd" class="social-btn" target="_blank">yt</a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#directors">Directors</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Our Projects</h4>
                <ul>
                    <li><a href="#">Anandvan Resorts</a></li>
                    <li><a href="#">The Royal Orchid Farms</a></li>
                    <li><a href="#">Alaknanda Farms</a></li>
                    <li><a href="#">OAK Hill Gardens</a></li>
                    <li><a href="#">Shri Krishna Enclave</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Info</h4>
                <p style="font-size:12px;color:var(--text-light);line-height:1.8;margin-bottom:16px;">
                    +91 8307 050 700<br>
                    +91 9548 051 243<br>
                    info@summermultidevelopers.com
                </p>
                <div class="footer-rera">
                    <span>RERA APPROVED</span>
                    <p>All SMD Group projects are RERA-approved and legally verified.</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2026 <span>SMD Group</span> — Summer Multidevelopers Private Limited. All rights reserved.</p>
            <p>CIN: <span>U68100UP2025PTC236249</span> &nbsp;·&nbsp; Powered by <a
                    href="https://astrologydivine.com/">Astrology Divine</a></p>
        </div>
    </footer>

    <!-- ====== REVIEW MODAL ====== -->
    <div class="modal-overlay" id="reviewModal">
        <div class="modal-box">
            <button class="modal-close"
                onclick="document.getElementById('reviewModal').classList.remove('active')">×</button>
            <h3>Share Your Experience</h3>
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" id="rName" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label>Your Rating</label>
                <div class="star-rating" id="starRating">
                    <span onclick="setRating(1)">★</span>
                    <span onclick="setRating(2)">★</span>
                    <span onclick="setRating(3)">★</span>
                    <span onclick="setRating(4)">★</span>
                    <span onclick="setRating(5)">★</span>
                </div>
            </div>
            <div class="form-group">
                <label>Project</label>
                <select id="rProject">
                    <option>Anandvan Resorts</option>
                    <option>The Royal Orchid Farms</option>
                    <option>Alaknanda Farms</option>
                    <option>OAK Hill Gardens</option>
                    <option>Shri Krishna Enclave</option>
                </select>
            </div>
            <div class="form-group">
                <label>Your Review</label>
                <textarea id="rText" placeholder="Share your experience with SMD Group..."></textarea>
            </div>
            <button class="btn-submit" onclick="submitReview()">Submit Review →</button>
        </div>
    </div>

    <script>
        // ====== NAV SCROLL ======
        window.addEventListener('scroll', () => {
            document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 60);
        });

        // ====== SCROLL REVEAL ======
        const revealEls = document.querySelectorAll('.reveal');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.12
        });
        revealEls.forEach(el => observer.observe(el));

        // ====== HERO UPLOAD ======
        document.getElementById('heroFileInput').addEventListener('change', function() {
            if (!this.files[0]) return;
            const media = document.getElementById('heroMedia');
            const url = URL.createObjectURL(this.files[0]);
            const isVideo = this.files[0].type.startsWith('video');
            media.innerHTML = '';
            const el = document.createElement(isVideo ? 'video' : 'img');
            el.src = url;
            el.style.cssText = 'width:100%;height:100%;object-fit:cover;opacity:0.35;';
            if (isVideo) {
                el.autoplay = true;
                el.muted = true;
                el.loop = true;
            }
            media.appendChild(el);
        });
        document.getElementById('heroUploadLabel').addEventListener('click', function(e) {
            e.stopPropagation();
            document.getElementById('heroFileInput').click();
        });

        // ====== ABOUT IMAGE ======
        document.getElementById('aboutImgInput').addEventListener('change', function() {
            if (!this.files[0]) return;
            const wrap = document.getElementById('aboutImgWrap');
            const url = URL.createObjectURL(this.files[0]);
            wrap.innerHTML = `<img src="${url}" style="width:100%;height:100%;object-fit:cover;">`;
        });

        // ====== MEDIA UPLOAD ======
        function previewMedia(input, itemId, type) {
            if (!input.files[0]) return;
            const item = document.getElementById(itemId);
            const url = URL.createObjectURL(input.files[0]);
            const inner = item.querySelector('.media-upload-inner');
            const fileInput = item.querySelector('input[type="file"]');
            if (type === 'video') {
                const vid = document.createElement('video');
                vid.src = url;
                vid.className = 'preview-video';
                vid.autoplay = true;
                vid.muted = true;
                vid.loop = true;
                vid.controls = true;
                item.appendChild(vid);
            } else {
                const img = document.createElement('img');
                img.src = url;
                img.className = 'preview-img';
                item.appendChild(img);
            }
            inner.style.display = 'none';
            fileInput.style.zIndex = '0';
        }

        function removeMedia(itemId) {
            const item = document.getElementById(itemId);
            const preview = item.querySelector('.preview-img, .preview-video');
            if (preview) preview.remove();
            item.querySelector('.media-upload-inner').style.display = 'flex';
            item.querySelector('input[type="file"]').style.zIndex = '10';
        }

        // ====== PROJECT IMG PREVIEW ======
        function previewProjectImg(input) {
            if (!input.files[0]) return;
            const card = input.closest('.project-card');
            const bg = card.querySelector('.project-card-bg');
            const url = URL.createObjectURL(input.files[0]);
            bg.innerHTML = `<img src="${url}" style="width:100%;height:100%;object-fit:cover;">`;
        }

        // ====== DIRECTOR PHOTO ======
        function previewDirectorPhoto(input, idx) {
            if (!input.files[0]) return;
            const photo = input.closest('.director-photo');
            const url = URL.createObjectURL(input.files[0]);
            photo.querySelector('.photo-placeholder').style.display = 'none';
            const img = document.createElement('img');
            img.src = url;
            img.style.cssText =
                'width:100%;height:100%;object-fit:cover;border-radius:50%;position:absolute;inset:0;z-index:3;';
            photo.appendChild(img);
        }

        // ====== STAR RATING ======
        let currentRating = 5;

        function setRating(val) {
            currentRating = val;
            document.querySelectorAll('#starRating span').forEach((s, i) => {
                s.classList.toggle('active', i < val);
            });
        }
        setRating(5);

        // ====== SUBMIT REVIEW ======
        function submitReview() {
            const name = document.getElementById('rName').value.trim();
            const text = document.getElementById('rText').value.trim();
            const proj = document.getElementById('rProject').value;
            if (!name || !text) {
                alert('Please fill in your name and review.');
                return;
            }
            const stars = '★'.repeat(currentRating) + '☆'.repeat(5 - currentRating);
            const track = document.getElementById('reviewsTrack');
            const card = document.createElement('div');
            card.className = 'review-card';
            card.innerHTML = `
      <div class="review-quote">"</div>
      <div class="review-stars">${stars}</div>
      <p class="review-text">${text}</p>
      <div class="review-author">
        <div class="review-avatar">${name[0].toUpperCase()}</div>
        <div class="review-info"><h4>${name}</h4><p>${proj}</p></div>
      </div>`;
            track.insertBefore(card, track.firstChild);
            document.getElementById('reviewModal').classList.remove('active');
            document.getElementById('rName').value = '';
            document.getElementById('rText').value = '';
            setRating(5);
        }

        // ====== SMOOTH SCROLL ======
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    <script>
        // document.addEventListener('contextmenu', e => e.preventDefault());


        // document.addEventListener('keydown', function(e) {
        //     if (
        //         e.key === 'F12' ||
        //         (e.ctrlKey && e.shiftKey && ['I', 'J', 'C'].includes(e.key))
        //     ) {
        //         e.preventDefault();
        //     }
        // });


        // (function() {
        //     setInterval(function() {
        //         debugger;
        //     }, 50);
        // })();
    </script>


</html>
