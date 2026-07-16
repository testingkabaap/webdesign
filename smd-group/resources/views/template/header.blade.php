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
                <img src="./assets/img/logo/SMD-Logos-6-251x300.webp" alt="SMD Group Logo" width="40"
                    height="auto" />
            </div>
            <button class="mobile-menu-close" onclick="closeMobileMenu()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 6L6 18M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <a href="{{ url('about-us') }}">About</a>
        <a href="#why" onclick="closeMobileMenu()">Why Us</a>
        <a href="#projects" onclick="closeMobileMenu()">Projects</a>
        <a href="#director" onclick="closeMobileMenu()">Directors</a>
        <a href="#gallery" onclick="closeMobileMenu()">Gallery</a>
        <a href="{{url('contact-us')}}" >Contact</a>
    </div>

    <!-- NAV -->
    <nav id="navbar">
        <div class="nav-logo"><img src="./assets/img/logo/SMD-Logos-6-251x300.webp" alt="SMD Group Logo" width="40"
                height="auto" /></div>
        <ul class="nav-links">
            <li><a href="{{ url('about-us') }}">About</a></li>
            <li><a href="#why">Why Us</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#director">Directors</a></li>
            <li><a href="#testimonials">Reviews</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="{{url('contact-us')}}" class="nav-cta">Contact Us</a></li>
        </ul>
        <div class="hamburger" id="hamburger" onclick="toggleMobileMenu()">
            <span></span><span></span><span></span>
        </div>
    </nav>