<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="SMD Group — Building Wealth Through Luxury Living. Premium farmhouse projects, trusted land development, and high-ROI investments." />
    <title>SMD Group – Building the Future. Creating Landmarks.</title>
    @include('template/head')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6a4c880f539b7e1d4b7d4f12/1jstf70bu';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    {{-- <link rel="stylesheet" href="./assets/css/style.css"> --}}
    <style>
        /* ═══════════════════════════════════════════
   COLOR THEME — Deep Navy + Champagne Gold
═══════════════════════════════════════════ */
        :root {
            --gold: #D4AF6A;
            --soft-gold: #E2C47E;
            --gold-dim: rgba(212, 175, 106, 0.15);
            --gold-glow: rgba(212, 175, 106, 0.06);

            /* Navy Accent */
            --navy: #0F2444;
            --navy-mid: #1A3A6B;
            --navy-light: #2756A8;
            --navy-pale: rgba(15, 36, 68, 0.5);
            --navy-glow: rgba(39, 86, 168, 0.08);

            --bg-deep: #05080F;
            --bg-dark: #080D18;
            --bg-card: rgba(212, 175, 106, 0.03);
            --bg-card-hover: rgba(212, 175, 106, 0.06);

            --text-bright: #EDE8DC;
            --text-mid: rgba(237, 232, 220, 0.65);
            --text-dim: rgba(237, 232, 220, 0.35);

            --border: rgba(212, 175, 106, 0.12);
            --border-em: rgba(212, 175, 106, 0.25);

            --font-display: 'Cinzel', serif;
            --font-title: 'Playfair Display', serif;
            --font-body: 'Poppins', sans-serif;
            --font-italic: 'Cormorant Garamond', serif;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth
        }

        body {
            background: var(--bg-deep);
            color: var(--text-bright);
            font-family: var(--font-body);
            font-weight: 300;
            overflow-x: hidden;
            cursor: none;
        }

        a {
            text-decoration: none;
            color: inherit
        }

        img {
            max-width: 100%;
            display: block
        }

        button {
            cursor: pointer;
            border: none;
            background: none;
            font-family: inherit
        }

        /* ── SCROLLBAR ── */
        ::-webkit-scrollbar {
            width: 4px
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-deep)
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gold);
            border-radius: 2px
        }

        /* ── CURSOR ── */
        #cursor {
            position: fixed;
            width: 10px;
            height: 10px;
            background: var(--gold);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width .2s, height .2s;
        }

        #cursor-ring {
            position: fixed;
            width: 32px;
            height: 32px;
            border: 1px solid rgba(200, 168, 75, 0.5);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: width .25s, height .25s;
        }

        /* ── PARTICLES ── */
        #particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            opacity: 0.7
        }

        /* ── LOADER ── */
        #loader {
            position: fixed;
            inset: 0;
            z-index: 9000;
            background: var(--bg-deep);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .loader-logo {
            font-family: var(--font-display);
            font-size: clamp(1.6rem, 4vw, 2.8rem);
            letter-spacing: 0.35em;
            color: var(--gold)
        }

        .loader-tagline {
            font-size: 0.7rem;
            letter-spacing: 0.25em;
            color: var(--text-dim);
            text-transform: uppercase
        }

        .loader-bar-wrap {
            width: 200px;
            height: 1px;
            background: rgba(212, 175, 106, 0.15);
            margin-top: 20px;
            overflow: hidden
        }

        .loader-bar {
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, var(--navy-light), var(--gold));
            animation: loadBar 2s ease forwards
        }

        @keyframes loadBar {
            to {
                width: 100%
            }
        }

        /* ── MOBILE MENU ── */
        .mobile-menu {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: rgba(5, 8, 15, 0.98);
            backdrop-filter: blur(20px);
            z-index: 800;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 36px;
            opacity: 0;
            pointer-events: none;
            transition: .3s ease;
        }

        .mobile-menu.open {
            opacity: 1;
            pointer-events: all
        }

        .mobile-menu a {
            font-family: var(--font-display);
            font-size: 1.3rem;
            letter-spacing: 0.15em;
            color: var(--text-mid);
            text-transform: uppercase;
            transition: .2s;
        }

        .mobile-menu a:hover {
            color: var(--gold)
        }

        /* ── NAV ── */
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 700;
            padding: 22px 6%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: background .4s, padding .4s, box-shadow .4s;
        }

        #navbar.scrolled {
            background: rgba(5, 8, 15, 0.96);
            backdrop-filter: blur(20px);
            padding: 14px 6%;
            box-shadow: 0 1px 0 var(--border);
        }

        .nav-logo {
            font-family: var(--font-display);
            font-size: 1.25rem;
            letter-spacing: 0.2em;
            color: var(--gold);
            display: flex;
            flex-direction: column;
            line-height: 1;
        }

        .nav-logo span {
            font-size: 0.45rem;
            letter-spacing: 0.2em;
            color: var(--text-dim);
            margin-top: 4px;
            font-family: var(--font-body)
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 36px
        }

        .nav-links li a {
            font-size: 0.7rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--text-mid);
            transition: .2s;
            font-weight: 400;
        }

        .nav-links li a:hover {
            color: var(--gold)
        }

        .nav-cta {
            padding: 9px 22px !important;
            border: 1px solid var(--gold) !important;
            color: var(--gold) !important;
            transition: background .25s, color .25s !important;
        }

        .nav-cta:hover {
            background: var(--gold) !important;
            color: #080C0B !important
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            z-index: 810
        }

        .hamburger span {
            display: block;
            width: 26px;
            height: 1px;
            background: var(--gold);
            transition: .3s
        }

        /* ── SECTION COMMONS ── */
        section {
            position: relative;
            z-index: 1;
            padding: 110px 6%
        }

        .sep {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 0 6%;
            position: relative;
            z-index: 1
        }

        .section-eyebrow {
            font-size: 0.65rem;
            letter-spacing: 0.35em;
            text-transform: uppercase;
            color: var(--navy-light);
            margin-bottom: 14px;
            font-weight: 500;
        }

        .section-title {
            font-family: var(--font-title);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 600;
            line-height: 1.15;
            margin-bottom: 20px;
        }

        .section-subtitle {
            font-family: var(--font-italic);
            font-size: 1.05rem;
            font-style: italic;
            color: var(--text-dim);
            margin-top: 6px;
        }

        .gold {
            color: var(--gold)
        }

        .gold-divider {
            display: block;
            width: 52px;
            height: 1px;
            background: linear-gradient(90deg, var(--navy-light), var(--gold));
            margin-bottom: 28px
        }

        /* ── BUTTONS ── */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            padding: 14px 34px;
            background: linear-gradient(135deg, var(--navy-mid), var(--navy-light));
            color: var(--text-bright);
            font-size: 0.72rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            font-weight: 500;
            border: 1px solid rgba(39, 86, 168, 0.4);
            transition: .3s;
            overflow: hidden;
            position: relative;
        }

        .btn-primary span {
            position: relative;
            z-index: 1
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, var(--gold), var(--soft-gold));
            opacity: 0;
            transition: .4s;
        }

        .btn-primary:hover::before {
            opacity: 1
        }

        .btn-primary:hover {
            color: #05080F
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            padding: 13px 33px;
            border: 1px solid var(--border-em);
            color: var(--text-mid);
            font-size: 0.72rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            font-weight: 400;
            transition: .3s;
        }

        .btn-outline:hover {
            border-color: var(--gold);
            color: var(--gold)
        }

        /* ═══════════════════════════════════════════
   main
═══════════════════════════════════════════ */
        #main {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 6%;
            position: relative;
            overflow: hidden;
        }

        .main-bg {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 70% 60% at 65% 40%, rgba(27, 58, 107, 0.35) 0%, transparent 60%),
                radial-gradient(ellipse 50% 50% at 15% 70%, rgba(212, 175, 106, 0.06) 0%, transparent 55%),
                linear-gradient(160deg, #05080F 0%, #080D18 45%, #060A14 100%);
        }

        .main-grid {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(200, 168, 75, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(200, 168, 75, 0.04) 1px, transparent 1px);
            background-size: 80px 80px;
            mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 0%, transparent 100%);
        }

        .main-vertical-line {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 1px;
            background: linear-gradient(180deg, transparent, rgba(200, 168, 75, 0.08), transparent);
            pointer-events: none;
        }

        .main-content {
            position: relative;
            z-index: 2;
            max-width: 780px;
            padding-top: 120px;
        }

        .main-eyebrow {
            font-size: 0.65rem;
            letter-spacing: 0.4em;
            text-transform: uppercase;
            color: var(--navy-light);
            margin-bottom: 22px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            opacity: 0;
            transform: translateY(20px);
        }

        .main-eyebrow::before {
            content: '';
            display: inline-block;
            width: 28px;
            height: 1px;
            background: var(--navy-light)
        }

        .main-title {
            font-family: var(--font-title);
            font-size: clamp(3rem, 6.5vw, 5.5rem);
            font-weight: 600;
            line-height: 1.08;
            display: flex;
            flex-direction: column;
            opacity: 0;
            transform: translateY(30px);
            margin-bottom: 22px;
        }

        .main-title .line {
            display: block
        }

        .main-subtitle {
            font-family: var(--font-italic);
            font-size: clamp(1rem, 2vw, 1.35rem);
            font-style: italic;
            color: var(--text-mid);
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(20px);
        }

        .main-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            opacity: 0;
            transform: translateY(20px);
            margin-bottom: 72px;
        }

        .main-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 0;
            border-top: 1px solid var(--border);
            padding-top: 36px;
            opacity: 0;
            transform: translateY(20px);
        }

        .main-stat {
            padding: 0 48px 0 0;
            border-right: 1px solid var(--border);
            margin-right: 48px;
        }

        .main-stat:last-child {
            border-right: none;
            margin-right: 0;
            padding-right: 0
        }

        .stat-num {
            font-family: var(--font-display);
            font-size: clamp(1.6rem, 3vw, 2.2rem);
            color: var(--gold);
            letter-spacing: 0.04em;
        }

        .stat-label {
            font-size: 0.65rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--text-dim);
            margin-top: 4px
        }

        .main-scroll {
            position: absolute;
            bottom: 36px;
            left: 6%;
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 0.6rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: var(--text-dim);
            opacity: 0;
        }

        .main-scroll-line {
            width: 40px;
            height: 1px;
            background: var(--gold);
            animation: scrollPulse 2s ease infinite
        }

        @keyframes scrollPulse {

            0%,
            100% {
                opacity: 0.3
            }

            50% {
                opacity: 1
            }
        }

        /* main architectural illustration */
        .main-illustration {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 42%;
            height: 80%;
            z-index: 1;
            opacity: 0.55;
            pointer-events: none;
        }

        /* ═══════════════════════════════════════════
   ABOUT
═══════════════════════════════════════════ */
        #about .about-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-image-collage {
            position: relative;
            height: 520px
        }

        .collage-main,
        .collage-secondary {
            position: absolute;
            border: 1px solid var(--border);
            background: var(--bg-card);
            overflow: hidden;
        }

        .collage-main {
            top: 0;
            left: 0;
            width: 80%;
            height: 78%
        }

        .collage-secondary {
            bottom: 0;
            right: 0;
            width: 55%;
            height: 50%
        }

        .collage-img-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .collage-accent {
            position: absolute;
            bottom: 20%;
            right: 20%;
            width: 110px;
            height: 110px;
            border: 1px solid var(--gold);
            background: var(--bg-deep);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-size: 2rem;
            color: var(--gold);
            line-height: 1;
        }

        .collage-accent-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px
        }

        .collage-accent-inner span {
            font-size: 0.5rem;
            letter-spacing: 0.15em;
            color: var(--text-dim);
            text-align: center;
            text-transform: uppercase;
            font-family: var(--font-body)
        }

        .collage-accent sup {
            font-size: 1rem;
            vertical-align: super
        }

        .about-content {}

        .about-text {
            font-size: 0.88rem;
            line-height: 1.9;
            color: var(--text-mid);
            margin-bottom: 18px
        }

        .about-timeline {
            margin-top: 36px;
            display: flex;
            flex-direction: column;
            gap: 24px
        }

        .timeline-item {
            display: grid;
            grid-template-columns: 60px 1px 1fr;
            gap: 0 20px;
            align-items: start;
            opacity: 0;
            transform: translateX(-20px);
        }

        .timeline-year {
            font-family: var(--font-display);
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            color: var(--gold);
            padding-top: 2px
        }

        .timeline-dot {
            width: 1px;
            background: linear-gradient(180deg, var(--navy-light), transparent);
            position: relative;
            min-height: 50px
        }

        .timeline-dot::before {
            content: '';
            position: absolute;
            top: 4px;
            left: -3px;
            width: 7px;
            height: 7px;
            background: var(--navy-light);
            border-radius: 50%
        }

        .timeline-info h4 {
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 0.04em;
            margin-bottom: 4px;
            color: var(--text-bright)
        }

        .timeline-info p {
            font-size: 0.75rem;
            line-height: 1.6;
            color: var(--text-dim)
        }

        /* ═══════════════════════════════════════════
   WHY
═══════════════════════════════════════════ */
        #why {
            text-align: center
        }

        .why-inner {
            max-width: 1200px;
            margin: 0 auto
        }

        .why-header {
            margin-bottom: 64px
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px
        }

        .why-card {
            padding: 40px 32px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            text-align: left;
            cursor: default;
            transition: border-color .3s, background .3s;
            transform-style: preserve-3d;
            position: relative;
            overflow: hidden;
        }

        .why-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 0;
            background: linear-gradient(180deg, var(--navy-light), var(--gold));
            transition: height .4s;
        }

        .why-card:hover {
            border-color: rgba(200, 168, 75, 0.25);
            background: var(--bg-card-hover)
        }

        .why-card:hover::before {
            height: 100%
        }

        .why-icon {
            width: 42px;
            height: 42px;
            margin-bottom: 20px;
            color: var(--navy-light)
        }

        .why-icon svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .why-card h3 {
            font-family: var(--font-title);
            font-size: 1.05rem;
            font-weight: 500;
            margin-bottom: 12px
        }

        .why-card p {
            font-size: 0.78rem;
            line-height: 1.8;
            color: var(--text-dim)
        }


        /* ═══════════════════════════════════════════
   PROJECTS — Clean Tabbed Showcase (no scroll-jacking)
═══════════════════════════════════════════ */
        #projects {
            background: var(--bg-deep)
        }

        .pshow-inner {
            max-width: 1300px;
            margin: 0 auto
        }

        .pshow-header {
            margin-bottom: 56px;
            max-width: 640px
        }

        .pshow-header p.section-subtitle {
            margin-top: 14px
        }

        .pshow-layout {
            display: grid;
            grid-template-columns: 340px 1fr;
            gap: 2px;
            border: 1px solid var(--border);
            background: var(--border);
        }

        /* ── Tab list ── */
        .pshow-tabs {
            background: var(--bg-dark);
            display: flex;
            flex-direction: column
        }

        .pshow-tab {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 22px 26px;
            cursor: pointer;
            position: relative;
            border-bottom: 1px solid var(--border);
            transition: background .25s;
        }

        .pshow-tab:last-child {
            border-bottom: none
        }

        .pshow-tab::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, var(--navy-light), var(--gold));
            transform: scaleY(0);
            transform-origin: top;
            transition: transform .3s;
        }

        .pshow-tab:hover {
            background: var(--bg-card-hover)
        }

        .pshow-tab.active {
            background: var(--bg-card)
        }

        .pshow-tab.active::before {
            transform: scaleY(1)
        }

        .pshow-tab-num {
            font-family: var(--font-display);
            font-size: 0.85rem;
            color: var(--text-dim);
            letter-spacing: 0.05em;
            flex-shrink: 0;
            min-width: 24px;
            transition: color .25s;
        }

        .pshow-tab.active .pshow-tab-num {
            color: var(--gold)
        }

        .pshow-tab-info {
            flex: 1;
            min-width: 0
        }

        .pshow-tab-name {
            font-family: var(--font-title);
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 4px;
            transition: color .25s
        }

        .pshow-tab.active .pshow-tab-name {
            color: var(--gold)
        }

        .pshow-tab-tag {
            font-size: 0.62rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--text-dim)
        }

        .pshow-tab-arrow {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            color: var(--text-dim);
            opacity: 0;
            transform: translateX(-6px);
            transition: .25s;
        }

        .pshow-tab-arrow svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.8
        }

        .pshow-tab.active .pshow-tab-arrow {
            opacity: 1;
            transform: translateX(0);
            color: var(--gold)
        }

        .pshow-progress {
            height: 2px;
            background: var(--border);
            position: relative;
            overflow: hidden
        }

        .pshow-progress-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--navy-light), var(--gold));
            transition: width .1s linear
        }

        /* ── Display panel ── */
        .pshow-display {
            position: relative;
            overflow: hidden;
            background: var(--bg-dark);
            min-height: 560px
        }

        .pshow-scene {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity .55s ease;
            pointer-events: none
        }

        .pshow-scene.active {
            opacity: 1;
            pointer-events: auto
        }

        .pshow-scene-bg {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            overflow: hidden
        }

        .pshow-scene-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(5, 8, 15, 0.65) 0%, rgba(15, 36, 68, 0.18) 50%, rgba(5, 8, 15, 0.55) 100%)
        }

        .pshow-scene-gradient {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 70%;
            background: linear-gradient(0deg, rgba(5, 8, 15, 0.98) 0%, rgba(5, 8, 15, 0.6) 55%, transparent 100%)
        }

        .pshow-scene-ghost {
            position: absolute;
            top: 44px;
            right: 5%;
            font-family: var(--font-display);
            font-size: clamp(6rem, 14vw, 11rem);
            font-weight: 700;
            line-height: 1;
            color: transparent;
            -webkit-text-stroke: 1px rgba(212, 175, 106, 0.06);
            letter-spacing: -0.02em;
            pointer-events: none;
            user-select: none;
        }

        .pshow-corner {
            position: absolute;
            width: 28px;
            height: 28px;
            border-color: rgba(212, 175, 106, 0.14);
            border-style: solid;
            z-index: 2
        }

        .pshow-corner.tl {
            top: 26px;
            left: 26px;
            border-width: 1px 0 0 1px
        }

        .pshow-corner.tr {
            top: 26px;
            right: 26px;
            border-width: 1px 1px 0 0
        }

        .pshow-corner.bl {
            bottom: 26px;
            left: 26px;
            border-width: 0 0 1px 1px
        }

        .pshow-scene-content {
            position: relative;
            z-index: 2;
            padding: 0 48px 48px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 100%;
        }

        .pshow-scene-tag {
            font-size: 0.6rem;
            letter-spacing: 0.32em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 12px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .pshow-scene-tag::before {
            content: '';
            width: 20px;
            height: 1px;
            background: var(--gold);
            display: inline-block
        }

        .pshow-scene-name {
            font-family: var(--font-title);
            font-size: clamp(1.7rem, 3vw, 2.5rem);
            font-weight: 600;
            line-height: 1.1;
            margin-bottom: 12px
        }

        .pshow-scene-loc {
            font-size: 0.72rem;
            color: var(--text-dim);
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 18px
        }

        .pshow-scene-loc svg {
            width: 12px;
            height: 12px;
            flex-shrink: 0
        }

        .pshow-scene-divider {
            width: 40px;
            height: 1px;
            background: linear-gradient(90deg, var(--navy-light), var(--gold));
            margin-bottom: 18px
        }

        .pshow-scene-meta {
            display: flex;
            gap: 32px;
            margin-bottom: 26px;
            flex-wrap: wrap
        }

        .pshow-meta-label {
            font-size: 0.54rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--text-dim);
            margin-bottom: 4px
        }

        .pshow-meta-value {
            font-size: 0.8rem;
            color: var(--text-bright)
        }

        .pshow-meta-price {
            font-family: var(--font-display);
            color: var(--gold);
            font-size: 1rem;
            letter-spacing: 0.04em
        }

        .pshow-scene-cta {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 28px;
            border: 1px solid var(--border-em);
            font-size: 0.64rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--text-mid);
            cursor: pointer;
            width: fit-content;
            transition: border-color .25s, color .25s;
        }

        .pshow-scene-cta:hover {
            border-color: var(--gold);
            color: var(--gold)
        }

        .pshow-scene-cta svg {
            width: 14px;
            height: 14px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.8;
            transition: transform .25s
        }

        .pshow-scene-cta:hover svg {
            transform: translateX(4px)
        }

        /* Arch scenes */
        .arch-scene {
            width: 100%;
            height: 100%;
            background: linear-gradient(170deg, #080D18 0%, #05080F 100%);
            display: flex;
            align-items: flex-end;
            justify-content: center
        }

        .arch-h {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            gap: 6px;
            width: 100%;
            height: 100%;
            position: relative
        }

        .arch-h span {
            background: linear-gradient(180deg, rgba(27, 58, 107, 0.3), rgba(212, 175, 106, 0.05));
            border: 1px solid rgba(212, 175, 106, 0.08)
        }

        .arch-1 .arch-h span:nth-child(1) {
            width: 80px;
            height: 50%
        }

        .arch-1 .arch-h span:nth-child(2) {
            width: 120px;
            height: 72%
        }

        .arch-1 .arch-h span:nth-child(3) {
            width: 80px;
            height: 45%
        }

        .arch-2 .arch-h span {
            width: 70px
        }

        .arch-2 .arch-h span:nth-child(1) {
            height: 38%
        }

        .arch-2 .arch-h span:nth-child(2) {
            height: 65%
        }

        .arch-2 .arch-h span:nth-child(3) {
            height: 80%
        }

        .arch-2 .arch-h span:nth-child(4) {
            height: 52%
        }

        .arch-3 .arch-h span:nth-child(1) {
            width: 200px;
            height: 68%
        }

        .arch-3 .arch-h span:nth-child(2) {
            width: 140px;
            height: 48%
        }

        .arch-4 .arch-h span {
            width: 55px
        }

        .arch-4 .arch-h span:nth-child(1) {
            height: 28%
        }

        .arch-4 .arch-h span:nth-child(2) {
            height: 52%
        }

        .arch-4 .arch-h span:nth-child(3) {
            height: 76%
        }

        .arch-4 .arch-h span:nth-child(4) {
            height: 48%
        }

        .arch-4 .arch-h span:nth-child(5) {
            height: 32%
        }

        .arch-5 .arch-h span:nth-child(1) {
            width: 110px;
            height: 58%
        }

        .arch-5 .arch-h span:nth-child(2) {
            width: 150px;
            height: 82%
        }

        .arch-5 .arch-h span:nth-child(3) {
            width: 110px;
            height: 52%
        }

        .arch-balcony {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 106, 0.3), transparent)
        }

        /* ═══════════════════════════════════════════
   DIRECTOR — 3 Directors Layout
═══════════════════════════════════════════ */
        #director {
            background: linear-gradient(180deg, var(--bg-deep), rgba(15, 36, 68, 0.08), var(--bg-deep))
        }

        .director-inner {
            max-width: 1200px;
            margin: 0 auto
        }

        .director-header {
            text-align: center;
            margin-bottom: 64px
        }

        .directors-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
        }

        .director-card {
            padding: 44px 36px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: border-color .3s;
        }

        .director-card:hover {
            border-color: rgba(212, 175, 106, 0.25)
        }

        .director-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--navy-light), var(--gold), transparent);
            opacity: 0;
            transition: .3s;
        }

        .director-card:hover::after {
            opacity: 1
        }

        /* Portrait */
        .dir-portrait {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 1px solid var(--border-em);
            background: rgba(27, 58, 107, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-bottom: 24px;
            overflow: hidden;
        }

        .dir-portrait::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, rgba(212, 175, 106, 0.1), transparent 70%);
        }

        .dir-initials {
            font-family: var(--font-display);
            font-size: 2rem;
            color: var(--gold);
            letter-spacing: 0.05em;
            position: relative;
            z-index: 1;
        }

        .dir-corner-ring {
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 50%;
            border: 1px solid rgba(212, 175, 106, 0.15);
        }

        .dir-name {
            font-family: var(--font-title);
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 4px
        }

        .dir-role {
            font-size: 0.65rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--navy-light);
            margin-bottom: 20px;
            font-weight: 500
        }

        .dir-divider {
            width: 36px;
            height: 1px;
            background: linear-gradient(90deg, var(--navy-light), var(--gold));
            margin: 0 auto 20px
        }

        .dir-quote {
            font-family: var(--font-italic);
            font-size: 0.9rem;
            font-style: italic;
            color: var(--text-mid);
            line-height: 1.75;
            margin-bottom: 20px;
        }

        .dir-bio {
            font-size: 0.75rem;
            line-height: 1.8;
            color: var(--text-dim);
            margin-bottom: 24px
        }

        .dir-creds {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center
        }

        .dir-cred {
            padding: 5px 12px;
            border: 1px solid var(--border);
            font-size: 0.6rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-dim);
        }

        .dir-signature {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            font-style: italic;
            color: var(--gold);
            margin-bottom: 12px;
        }

        /* ═══════════════════════════════════════════
   TESTIMONIALS
═══════════════════════════════════════════ */
        #testimonials {}

        .test-inner {
            max-width: 1200px;
            margin: 0 auto
        }

        .test-header {
            text-align: center;
            margin-bottom: 56px
        }

        .test-carousel {
            overflow: hidden;
            position: relative
        }

        .test-track {
            display: flex;
            gap: 2px;
            transition: transform .5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .test-card {
            min-width: calc(33.333% - 2px);
            flex-shrink: 0;
            padding: 40px 32px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            position: relative;
        }

        .test-badge {
            display: inline-block;
            padding: 4px 12px;
            background: rgba(27, 58, 107, 0.2);
            border: 1px solid rgba(27, 58, 107, 0.4);
            font-size: 0.6rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--navy-light);
            margin-bottom: 20px;
        }

        .test-quote-icon {
            font-family: var(--font-title);
            font-size: 5rem;
            line-height: 0;
            color: rgba(212, 175, 106, 0.1);
            position: absolute;
            top: 36px;
            right: 28px;
        }

        .test-stars {
            display: flex;
            gap: 4px;
            margin-bottom: 16px
        }

        .test-stars svg {
            width: 14px;
            height: 14px;
            fill: var(--gold);
            stroke: none
        }

        .test-text {
            font-size: 0.82rem;
            line-height: 1.85;
            color: var(--text-mid);
            margin-bottom: 28px;
            font-family: var(--font-italic);
            font-style: italic;
            font-size: 1rem
        }

        .test-author {
            display: flex;
            align-items: center;
            gap: 14px
        }

        .test-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--navy-mid), rgba(212, 175, 106, 0.3));
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-size: 0.75rem;
            color: var(--text-bright);
            flex-shrink: 0;
        }

        .test-name {
            font-size: 0.82rem;
            font-weight: 500;
            margin-bottom: 2px
        }

        .test-role {
            font-size: 0.67rem;
            color: var(--text-dim);
            letter-spacing: 0.06em
        }

        .test-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 36px;
        }

        .test-dot {
            width: 20px;
            height: 1px;
            background: var(--border-em);
            cursor: pointer;
            transition: .3s;
        }

        .test-dot.active {
            background: var(--gold);
            width: 40px
        }

        .test-arrows {
            display: flex;
            gap: 8px;
            margin-left: 20px
        }

        .test-arrow {
            width: 38px;
            height: 38px;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .2s;
            color: var(--text-mid);
        }

        .test-arrow:hover {
            border-color: var(--gold);
            color: var(--gold)
        }

        .test-arrow svg {
            width: 16px;
            height: 16px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        /* ═══════════════════════════════════════════
   INVESTMENT
═══════════════════════════════════════════ */
        #investment {
            background: linear-gradient(135deg, rgba(27, 58, 107, 0.06), transparent)
        }

        .inv-inner {
            max-width: 1200px;
            margin: 0 auto
        }

        .inv-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 72px;
            align-items: center
        }

        .inv-stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2px
        }

        .inv-stat-card {
            padding: 36px 28px;
            background: var(--bg-card);
            border: 1px solid var(--border)
        }

        .inv-big-num {
            font-family: var(--font-display);
            font-size: 2.8rem;
            color: var(--gold);
            line-height: 1
        }

        .inv-big-suffix {
            font-size: 1.6rem
        }

        .inv-stat-label {
            font-size: 0.65rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--text-dim);
            margin: 10px 0
        }

        .inv-bar {
            height: 1px;
            background: var(--border);
            position: relative;
            overflow: hidden
        }

        .inv-bar-fill {
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, var(--navy-light), var(--gold));
            transition: width 1.5s cubic-bezier(0.25, 1, 0.5, 1)
        }

        .inv-features {
            display: flex;
            flex-direction: column;
            gap: 24px
        }

        .inv-feature {
            display: flex;
            gap: 18px;
            align-items: flex-start
        }

        .inv-feature-icon {
            width: 38px;
            height: 38px;
            flex-shrink: 0;
            color: var(--navy-light)
        }

        .inv-feature-icon svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .inv-feature-text h4 {
            font-size: 0.82rem;
            font-weight: 500;
            margin-bottom: 4px
        }

        .inv-feature-text p {
            font-size: 0.75rem;
            color: var(--text-dim);
            line-height: 1.7
        }

        /* ═══════════════════════════════════════════
   GALLERY
═══════════════════════════════════════════ */
        #gallery {}

        .gallery-inner {
            max-width: 1200px;
            margin: 0 auto
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 56px
        }

        .gallery-masonry {
            columns: 4;
            column-gap: 2px;
        }

        .gallery-item {
            break-inside: avoid;
            margin-bottom: 2px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            display: block;
        }

        .g-block {
            width: 100%;
            display: block
        }

        .gallery-item-overlay {
            position: absolute;
            inset: 0;
            background: rgba(27, 58, 107, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: .3s;
        }

        .gallery-item:hover .gallery-item-overlay {
            opacity: 1
        }

        .gallery-item-overlay svg {
            width: 28px;
            height: 28px;
            fill: none;
            stroke: rgba(240, 237, 228, 0.8);
            stroke-width: 1.5
        }

        /* ═══════════════════════════════════════════
   CONTACT
═══════════════════════════════════════════ */
        #contact {}

        .contact-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: start
        }

        .contact-info-cards {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin: 32px 0
        }

        .contact-info-card {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 18px 20px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            transition: border-color .2s;
            opacity: 0;
            transform: translateX(-20px);
        }

        .contact-info-card:hover {
            border-color: var(--border-em)
        }

        .contact-icon {
            width: 36px;
            height: 36px;
            color: var(--emerald-light);
            flex-shrink: 0
        }

        .contact-icon svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .contact-info-card h4 {
            font-size: 0.65rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--text-dim);
            margin-bottom: 3px;
            font-weight: 400
        }

        .contact-info-card p {
            font-size: 0.8rem;
            color: var(--text-bright)
        }

        .contact-map {
            height: 140px;
            border: 1px solid var(--border);
            background: var(--bg-card);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .map-pin {
            width: 10px;
            height: 10px;
            background: var(--gold);
            border-radius: 50%;
            box-shadow: 0 0 0 6px rgba(200, 168, 75, 0.15);
            animation: mapPulse 2s infinite;
        }

        @keyframes mapPulse {

            0%,
            100% {
                box-shadow: 0 0 0 6px rgba(200, 168, 75, 0.15)
            }

            50% {
                box-shadow: 0 0 0 14px rgba(200, 168, 75, 0.05)
            }
        }

        .map-label {
            position: absolute;
            bottom: 14px;
            font-size: 0.6rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--text-dim)
        }

        /* Form */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 16px
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px
        }

        .form-group {
            position: relative
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 16px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            color: var(--text-bright);
            font-family: var(--font-body);
            font-size: 0.8rem;
            font-weight: 300;
            transition: border-color .2s;
            outline: none;
            appearance: none;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: rgba(30, 107, 85, 0.5)
        }

        .form-group textarea {
            min-height: 110px;
            resize: none
        }

        .form-group select option {
            background: var(--bg-dark)
        }

        .form-label {
            position: absolute;
            left: 16px;
            top: 16px;
            font-size: 0.75rem;
            color: var(--text-dim);
            pointer-events: none;
            transition: top .2s, font-size .2s, color .2s;
        }

        .form-group input:not(:placeholder-shown)~.form-label,
        .form-group input:focus~.form-label,
        .form-group textarea:not(:placeholder-shown)~.form-label,
        .form-group textarea:focus~.form-label {
            top: 6px;
            font-size: 0.6rem;
            color: var(--emerald-light);
        }

        .form-submit {
            padding: 16px;
            background: linear-gradient(135deg, var(--navy-mid), var(--navy-light));
            border: none;
            color: var(--text-bright);
            font-family: var(--font-body);
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            font-weight: 500;
            cursor: pointer;
            transition: .3s;
        }

        .form-submit:hover {
            background: linear-gradient(135deg, var(--gold), var(--soft-gold));
            color: #05080F
        }

        /* ═══════════════════════════════════════════
   LIGHTBOX
═══════════════════════════════════════════ */
        #lightbox {
            position: fixed;
            inset: 0;
            z-index: 2000;
            background: rgba(8, 12, 11, 0.97);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: .3s;
        }

        #lightbox.open {
            opacity: 1;
            pointer-events: all
        }

        .lightbox-close {
            position: absolute;
            top: 28px;
            right: 32px;
            font-size: 1.5rem;
            color: var(--text-dim);
            cursor: pointer;
            transition: .2s;
        }

        .lightbox-close:hover {
            color: var(--gold)
        }

        .lightbox-content {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80%;
            max-width: 700px;
            border: 1px solid var(--border)
        }

        /* ═══════════════════════════════════════════
   FOOTER
═══════════════════════════════════════════ */
        footer {
            padding: 80px 6% 32px;
            border-top: 1px solid var(--border);
            position: relative;
            z-index: 1;
        }

        .footer-inner {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 56px;
            margin-bottom: 56px;
        }

        .footer-brand p {
            font-size: 0.78rem;
            line-height: 1.8;
            color: var(--text-dim);
            margin-top: 18px;
            max-width: 280px
        }

        .footer-social {
            display: flex;
            gap: 12px;
            margin-top: 24px
        }

        .social-icon {
            width: 36px;
            height: 36px;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-dim);
            cursor: pointer;
            transition: .2s;
        }

        .social-icon:hover {
            border-color: var(--gold);
            color: var(--gold)
        }

        .social-icon svg {
            width: 16px;
            height: 16px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .footer-col h4 {
            font-family: var(--font-display);
            font-size: 0.65rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 22px
        }

        .footer-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 11px
        }

        .footer-col li a {
            font-size: 0.75rem;
            color: var(--text-dim);
            transition: .2s;
            letter-spacing: 0.04em
        }

        .footer-col li a:hover {
            color: var(--text-bright)
        }

        .footer-newsletter p {
            font-size: 0.75rem;
            line-height: 1.7;
            color: var(--text-dim);
            margin-bottom: 18px
        }

        .newsletter-input {
            display: flex
        }

        .newsletter-input input {
            flex: 1;
            padding: 11px 14px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            color: var(--text-bright);
            font-family: var(--font-body);
            font-size: 0.75rem;
            outline: none;
        }

        .newsletter-input button {
            padding: 11px 16px;
            background: linear-gradient(135deg, var(--navy-mid), var(--navy-light));
            border: none;
            color: white;
            cursor: pointer;
        }

        .newsletter-input button svg {
            width: 16px;
            height: 16px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .footer-bottom {
            border-top: 1px solid var(--border);
            padding-top: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .footer-bottom p {
            font-size: 0.68rem;
            color: var(--text-dim);
            letter-spacing: 0.06em
        }

        .footer-bottom a {
            color: var(--text-dim);
            transition: .2s
        }

        .footer-bottom a:hover {
            color: var(--gold)
        }

        /* ═══════════════════════════════════════════
   MOBILE RESPONSIVE
═══════════════════════════════════════════ */
        @media(max-width:1024px) {
            .why-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .directors-grid {
                grid-template-columns: 1fr 1fr
            }

            .directors-grid .director-card:last-child {
                grid-column: 1/-1;
                max-width: 480px;
                margin: 0 auto
            }

            .footer-inner {
                grid-template-columns: 1fr 1fr;
                gap: 36px
            }

            .gallery-masonry {
                columns: 3
            }

            .inv-grid {
                grid-template-columns: 1fr
            }

            .pshow-layout {
                grid-template-columns: 280px 1fr
            }
        }

        @media(max-width:768px) {

            /* Nav */
            #cursor,
            #cursor-ring {
                display: none
            }

            body {
                cursor: auto
            }

            .nav-links {
                display: none
            }

            .hamburger {
                display: flex
            }

            #navbar {
                padding: 18px 5%
            }

            #navbar.scrolled {
                padding: 12px 5%
            }

            /* main */
            section {
                padding: 80px 5%
            }

            #main {
                padding: 0 5%;
                min-height: 100vh
            }

            .main-content {
                padding-top: 100px;
                padding-bottom: 100px
            }

            .main-title {
                font-size: clamp(2.2rem, 8vw, 3.5rem)
            }

            .main-stats {
                gap: 24px 0
            }

            .main-stat {
                min-width: 45%;
                padding-right: 0;
                margin-right: 0;
                border-right: none;
                border-bottom: 1px solid var(--border);
                padding-bottom: 16px;
                margin-bottom: 16px;
            }

            .main-stat:last-child {
                border-bottom: none;
                margin-bottom: 0
            }

            .main-illustration {
                display: none
            }

            .main-scroll {
                display: none
            }

            /* About */
            #about .about-inner {
                grid-template-columns: 1fr;
                gap: 48px
            }

            .about-image-collage {
                height: 320px
            }

            /* Why */
            .why-grid {
                grid-template-columns: 1fr
            }

            /* Projects — mobile stacked */
            .pshow-layout {
                grid-template-columns: 1fr
            }

            .pshow-tabs {
                flex-direction: row;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .pshow-tab {
                flex-direction: column;
                align-items: flex-start;
                min-width: 200px;
                border-bottom: none;
                border-right: 1px solid var(--border);
                gap: 8px;
                padding: 18px 20px
            }

            .pshow-tab::before {
                width: 100%;
                height: 2px;
                top: auto;
                bottom: 0;
                left: 0;
                right: 0;
                transform: scaleX(0)
            }

            .pshow-tab.active::before {
                transform: scaleX(1)
            }

            .pshow-tab-arrow {
                display: none
            }

            .pshow-display {
                min-height: 420px
            }

            .pshow-scene-content {
                padding: 0 20px 24px
            }

            .pshow-scene-name {
                font-size: 1.4rem
            }

            .pshow-scene-meta {
                gap: 14px
            }

            .pshow-scene-ghost {
                display: none
            }

            /* Director */
            .directors-grid {
                grid-template-columns: 1fr
            }

            .directors-grid .director-card:last-child {
                grid-column: auto;
                max-width: 100%;
                margin: 0
            }

            .director-card {
                padding: 36px 24px
            }

            /* Testimonials */
            .test-card {
                min-width: calc(100% - 2px)
            }

            /* Gallery */
            .gallery-masonry {
                columns: 2
            }

            /* Investment */
            .inv-grid {
                grid-template-columns: 1fr
            }

            .inv-stats-grid {
                grid-template-columns: 1fr 1fr
            }

            /* Contact */
            .contact-inner {
                grid-template-columns: 1fr;
                gap: 48px
            }

            .form-row {
                grid-template-columns: 1fr
            }

            /* Footer */
            .footer-inner {
                grid-template-columns: 1fr;
                gap: 32px
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 8px
            }
        }

        @media(max-width:480px) {
            .main-title {
                font-size: clamp(2rem, 9vw, 2.8rem)
            }

            .gallery-masonry {
                columns: 1
            }

            .inv-stats-grid {
                grid-template-columns: 1fr
            }

            .main-actions {
                flex-direction: column;
                align-items: flex-start
            }

            .btn-primary,
            .btn-outline {
                width: 100%;
                justify-content: center
            }

            .main-stat {
                min-width: 100%
            }

            .collage-main,
            .collage-secondary,
            .about-image-collage {
                display: none
            }
        }
    </style>
</head>

<body>
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

    <!-- ═══ main ═══ -->
    <section id="main">
        <div class="main-bg"></div>
        <div class="main-grid"></div>
        <div class="main-vertical-line"></div>

        <!-- Architectural illustration (right side) -->
        <div class="main-illustration" aria-hidden="true">
            <svg width="100%" height="100%" viewBox="0 0 500 600" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid meet">
                <!-- Main building -->
                <rect x="150" y="120" width="200" height="480" fill="rgba(27,58,107,0.1)"
                    stroke="rgba(212,175,106,0.18)" stroke-width="1" />
                <!-- Roof/top detail -->
                <path d="M130 120 L250 40 L370 120" fill="rgba(27,58,107,0.12)" stroke="rgba(212,175,106,0.28)"
                    stroke-width="1" />
                <!-- Left wing -->
                <rect x="80" y="200" width="70" height="400" fill="rgba(27,58,107,0.07)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <!-- Right wing -->
                <rect x="350" y="220" width="70" height="380" fill="rgba(27,58,107,0.07)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <!-- Windows - main -->
                <rect x="185" y="160" width="50" height="60" fill="rgba(212,175,106,0.05)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <rect x="265" y="160" width="50" height="60" fill="rgba(212,175,106,0.05)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <rect x="185" y="250" width="50" height="60" fill="rgba(212,175,106,0.05)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <rect x="265" y="250" width="50" height="60" fill="rgba(212,175,106,0.05)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <rect x="185" y="340" width="50" height="60" fill="rgba(212,175,106,0.05)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <rect x="265" y="340" width="50" height="60" fill="rgba(212,175,106,0.05)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="1" />
                <!-- Door -->
                <rect x="215" y="500" width="70" height="100" fill="rgba(212,175,106,0.07)"
                    stroke="rgba(212,175,106,0.22)" stroke-width="1" />
                <!-- Ground line -->
                <line x1="0" y1="600" x2="500" y2="600" stroke="rgba(212,175,106,0.12)"
                    stroke-width="1" />
                <!-- Decorative grid -->
                <line x1="250" y1="600" x2="250" y2="40" stroke="rgba(212,175,106,0.05)"
                    stroke-width="1" stroke-dasharray="4,8" />
                <!-- Pillars -->
                <rect x="165" y="120" width="8" height="480" fill="rgba(212,175,106,0.07)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="0.5" />
                <rect x="327" y="120" width="8" height="480" fill="rgba(212,175,106,0.07)"
                    stroke="rgba(212,175,106,0.12)" stroke-width="0.5" />
                <!-- Balcony lines -->
                <line x1="150" y1="245" x2="350" y2="245" stroke="rgba(212,175,106,0.14)"
                    stroke-width="0.5" />
                <line x1="150" y1="335" x2="350" y2="335" stroke="rgba(212,175,106,0.14)"
                    stroke-width="0.5" />
                <line x1="150" y1="425" x2="350" y2="425" stroke="rgba(212,175,106,0.14)"
                    stroke-width="0.5" />
                <!-- SMD label -->
                <text x="250" y="85" text-anchor="middle" fill="rgba(212,175,106,0.22)" font-family="Cinzel,serif"
                    font-size="10" letter-spacing="6">SMD GROUP</text>
                <!-- Glow at base -->
                <ellipse cx="250" cy="598" rx="180" ry="6" fill="rgba(27,58,107,0.2)" />
            </svg>
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
                        <svg width="100%" height="100%" viewBox="0 0 400 350" xmlns="http://www.w3.org/2000/svg">
                            <rect width="400" height="350" fill="none" />
                            <line x1="200" y1="350" x2="200" y2="100"
                                stroke="rgba(30,107,85,0.2)" stroke-width="1" />
                            <rect x="160" y="100" width="80" height="250" fill="rgba(30,107,85,0.06)"
                                stroke="rgba(200,168,75,0.1)" stroke-width="1" />
                            <rect x="100" y="150" width="60" height="200" fill="rgba(30,107,85,0.04)"
                                stroke="rgba(200,168,75,0.08)" stroke-width="1" />
                            <rect x="240" y="160" width="60" height="190" fill="rgba(30,107,85,0.04)"
                                stroke="rgba(200,168,75,0.08)" stroke-width="1" />
                            <line x1="0" y1="350" x2="400" y2="350"
                                stroke="rgba(200,168,75,0.15)" stroke-width="1" />
                            <text x="200" y="80" text-anchor="middle" fill="rgba(200,168,75,0.25)"
                                font-family="Cinzel,serif" font-size="11" letter-spacing="3">LUXURY FARMHOUSE</text>
                        </svg>
                    </div>
                </div>
                <div class="collage-secondary">
                    <div class="collage-img-placeholder">
                        <svg width="100%" height="100%" viewBox="0 0 300 250" xmlns="http://www.w3.org/2000/svg">
                            <rect width="300" height="250" fill="none" />
                            <path d="M50 250 L50 80 L250 80 L250 250" fill="rgba(30,107,85,0.06)"
                                stroke="rgba(200,168,75,0.15)" stroke-width="1" />
                            <path d="M80 80 L150 20 L220 80" fill="rgba(30,107,85,0.05)" stroke="rgba(200,168,75,0.2)"
                                stroke-width="1" />
                            <rect x="110" y="150" width="80" height="100" fill="rgba(30,107,85,0.04)"
                                stroke="rgba(200,168,75,0.1)" stroke-width="1" />
                            <text x="150" y="15" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel,serif" font-size="9" letter-spacing="2">SMD VILLAS</text>
                        </svg>
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
                    <div class="why-icon"><svg viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></div>
                    <h3>Verified Properties</h3>
                    <p>Every project is legally verified with clear titles, RERA compliance, and complete documentation.
                        Invest with zero title risk and absolute confidence.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><svg viewBox="0 0 24 24">
                            <path
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg></div>
                    <h3>Prime Locations</h3>
                    <p>Strategically selected plots in NCR's most coveted growth corridors — ensuring maximum
                        appreciation and premium lifestyle access.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><svg viewBox="0 0 24 24">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg></div>
                    <h3>Transparent Deals</h3>
                    <p>No hidden charges, no surprises. Our transparent pricing model and open-book policy ensure every
                        transaction is crystal clear from start to finish.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><svg viewBox="0 0 24 24">
                            <path
                                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg></div>
                    <h3>Legal Assistance</h3>
                    <p>Dedicated legal team for seamless documentation, registry support, and end-to-end handholding
                        through every step of your investment journey.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><svg viewBox="0 0 24 24">
                            <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg></div>
                    <h3>High ROI Investment</h3>
                    <p>Consistent 30–60% appreciation in our project portfolios. Our prime land investments consistently
                        outperform market benchmarks year after year.</p>
                </div>
                <div class="why-card">
                    <div class="why-icon"><svg viewBox="0 0 24 24">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg></div>
                    <h3>Luxury Farmhouse Living</h3>
                    <p>Bespoke farmhouse experiences blending contemporary luxury with natural serenity — an exclusive
                        lifestyle that defines modern premium living in India.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ PROJECTS — Clean tabbed showcase ═══ -->
    <section id="projects">
        <div class="pshow-inner">
            <div class="pshow-header" data-reveal="up">
                <p class="section-eyebrow">Our Portfolio</p>
                <h2 class="section-title">Signature <span class="gold">Projects</span></h2>
                <p class="section-subtitle">Curated masterpieces across NCR's most coveted addresses — each a
                    landmark investment opportunity.</p>
            </div>

            <div class="pshow-layout" data-reveal="up">
                <!-- TABS -->
                <div class="pshow-tabs" id="pshowTabs">
                    <div class="pshow-tab active" data-index="0">
                        <span class="pshow-tab-num">01</span>
                        <div class="pshow-tab-info">
                            <div class="pshow-tab-name">SMD Golden Residency</div>
                            <div class="pshow-tab-tag">Farmhouse Villas</div>
                        </div>
                        <span class="pshow-tab-arrow"><svg viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></span>
                    </div>
                    <div class="pshow-tab" data-index="1">
                        <span class="pshow-tab-num">02</span>
                        <div class="pshow-tab-info">
                            <div class="pshow-tab-name">SMD Royal Greens</div>
                            <div class="pshow-tab-tag">Premium Land</div>
                        </div>
                        <span class="pshow-tab-arrow"><svg viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></span>
                    </div>
                    <div class="pshow-tab" data-index="2">
                        <span class="pshow-tab-num">03</span>
                        <div class="pshow-tab-info">
                            <div class="pshow-tab-name">SMD Elite Farms</div>
                            <div class="pshow-tab-tag">Luxury Farmhouse</div>
                        </div>
                        <span class="pshow-tab-arrow"><svg viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></span>
                    </div>
                    <div class="pshow-tab" data-index="3">
                        <span class="pshow-tab-num">04</span>
                        <div class="pshow-tab-info">
                            <div class="pshow-tab-name">SMD Green Valley</div>
                            <div class="pshow-tab-tag">Residential Plots</div>
                        </div>
                        <span class="pshow-tab-arrow"><svg viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></span>
                    </div>
                    <div class="pshow-tab" data-index="4">
                        <span class="pshow-tab-num">05</span>
                        <div class="pshow-tab-info">
                            <div class="pshow-tab-name">SMD Imperial Township</div>
                            <div class="pshow-tab-tag">Township Villas</div>
                        </div>
                        <span class="pshow-tab-arrow"><svg viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg></span>
                    </div>
                    <div class="pshow-progress">
                        <div class="pshow-progress-fill" id="pshowProgressFill"></div>
                    </div>
                </div>

                <!-- DISPLAY -->
                <div class="pshow-display" id="pshowDisplay">

                    <div class="pshow-scene active" data-index="0">
                        <div class="pshow-scene-bg">
                            <div class="arch-scene arch-1">
                                <div class="arch-h"><span></span><span></span><span></span></div>
                                <div class="arch-balcony"></div>
                            </div>
                            <div class="pshow-scene-overlay"></div>
                            <div class="pshow-scene-gradient"></div>
                        </div>
                        <div class="pshow-scene-ghost">01</div>
                        <div class="pshow-corner tl"></div>
                        <div class="pshow-corner tr"></div>
                        <div class="pshow-corner bl"></div>
                        <div class="pshow-scene-content">
                            <p class="pshow-scene-tag">Farmhouse Villas</p>
                            <h3 class="pshow-scene-name">SMD Golden Residency</h3>
                            <p class="pshow-scene-loc"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                    stroke-width="2">
                                    <path
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>Sector 150, Noida Expressway</p>
                            <div class="pshow-scene-divider"></div>
                            <div class="pshow-scene-meta">
                                <div>
                                    <div class="pshow-meta-label">Starting Price</div>
                                    <div class="pshow-meta-price">₹45 Lakh</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">ROI</div>
                                    <div class="pshow-meta-value">40–55%</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">Status</div>
                                    <div class="pshow-meta-value">RERA Ready</div>
                                </div>
                            </div>
                            <a href="#contact" class="pshow-scene-cta">Schedule Visit <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>

                    <div class="pshow-scene" data-index="1">
                        <div class="pshow-scene-bg">
                            <div class="arch-scene arch-2">
                                <div class="arch-h"><span></span><span></span><span></span><span></span></div>
                                <div class="arch-balcony"></div>
                            </div>
                            <div class="pshow-scene-overlay"></div>
                            <div class="pshow-scene-gradient"></div>
                        </div>
                        <div class="pshow-scene-ghost">02</div>
                        <div class="pshow-corner tl"></div>
                        <div class="pshow-corner tr"></div>
                        <div class="pshow-corner bl"></div>
                        <div class="pshow-scene-content">
                            <p class="pshow-scene-tag">Premium Land</p>
                            <h3 class="pshow-scene-name">SMD Royal Greens</h3>
                            <p class="pshow-scene-loc"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                    stroke-width="2">
                                    <path
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>Yamuna Expressway, Greater Noida</p>
                            <div class="pshow-scene-divider"></div>
                            <div class="pshow-scene-meta">
                                <div>
                                    <div class="pshow-meta-label">Starting Price</div>
                                    <div class="pshow-meta-price">₹25 Lakh</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">ROI</div>
                                    <div class="pshow-meta-value">35–50%</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">Status</div>
                                    <div class="pshow-meta-value">RERA Ready</div>
                                </div>
                            </div>
                            <a href="#contact" class="pshow-scene-cta">Schedule Visit <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>

                    <div class="pshow-scene" data-index="2">
                        <div class="pshow-scene-bg">
                            <div class="arch-scene arch-3">
                                <div class="arch-h"><span></span><span></span></div>
                                <div class="arch-balcony"></div>
                            </div>
                            <div class="pshow-scene-overlay"></div>
                            <div class="pshow-scene-gradient"></div>
                        </div>
                        <div class="pshow-scene-ghost">03</div>
                        <div class="pshow-corner tl"></div>
                        <div class="pshow-corner tr"></div>
                        <div class="pshow-corner bl"></div>
                        <div class="pshow-scene-content">
                            <p class="pshow-scene-tag">Luxury Farmhouse</p>
                            <h3 class="pshow-scene-name">SMD Elite Farms</h3>
                            <p class="pshow-scene-loc"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                    stroke-width="2">
                                    <path
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>NH-58, Ghaziabad</p>
                            <div class="pshow-scene-divider"></div>
                            <div class="pshow-scene-meta">
                                <div>
                                    <div class="pshow-meta-label">Starting Price</div>
                                    <div class="pshow-meta-price">₹60 Lakh</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">ROI</div>
                                    <div class="pshow-meta-value">45–60%</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">Status</div>
                                    <div class="pshow-meta-value">Ready to Move</div>
                                </div>
                            </div>
                            <a href="#contact" class="pshow-scene-cta">Schedule Visit <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>

                    <div class="pshow-scene" data-index="3">
                        <div class="pshow-scene-bg">
                            <div class="arch-scene arch-4">
                                <div class="arch-h"><span></span><span></span><span></span><span></span><span></span>
                                </div>
                                <div class="arch-balcony"></div>
                            </div>
                            <div class="pshow-scene-overlay"></div>
                            <div class="pshow-scene-gradient"></div>
                        </div>
                        <div class="pshow-scene-ghost">04</div>
                        <div class="pshow-corner tl"></div>
                        <div class="pshow-corner tr"></div>
                        <div class="pshow-corner bl"></div>
                        <div class="pshow-scene-content">
                            <p class="pshow-scene-tag">Residential Plots</p>
                            <h3 class="pshow-scene-name">SMD Green Valley</h3>
                            <p class="pshow-scene-loc"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                    stroke-width="2">
                                    <path
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>Greater Faridabad, Haryana</p>
                            <div class="pshow-scene-divider"></div>
                            <div class="pshow-scene-meta">
                                <div>
                                    <div class="pshow-meta-label">Starting Price</div>
                                    <div class="pshow-meta-price">₹18 Lakh</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">ROI</div>
                                    <div class="pshow-meta-value">30–45%</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">Status</div>
                                    <div class="pshow-meta-value">EMI Available</div>
                                </div>
                            </div>
                            <a href="#contact" class="pshow-scene-cta">Schedule Visit <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>

                    <div class="pshow-scene" data-index="4">
                        <div class="pshow-scene-bg">
                            <div class="arch-scene arch-5">
                                <div class="arch-h"><span></span><span></span><span></span></div>
                                <div class="arch-balcony"></div>
                            </div>
                            <div class="pshow-scene-overlay"></div>
                            <div class="pshow-scene-gradient"></div>
                        </div>
                        <div class="pshow-scene-ghost">05</div>
                        <div class="pshow-corner tl"></div>
                        <div class="pshow-corner tr"></div>
                        <div class="pshow-corner bl"></div>
                        <div class="pshow-scene-content">
                            <p class="pshow-scene-tag">Township Villas</p>
                            <h3 class="pshow-scene-name">SMD Imperial Township</h3>
                            <p class="pshow-scene-loc"><svg viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                    stroke-width="2">
                                    <path
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>Bulandshahr Road, UP</p>
                            <div class="pshow-scene-divider"></div>
                            <div class="pshow-scene-meta">
                                <div>
                                    <div class="pshow-meta-label">Starting Price</div>
                                    <div class="pshow-meta-price">₹32 Lakh</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">ROI</div>
                                    <div class="pshow-meta-value">35–55%</div>
                                </div>
                                <div>
                                    <div class="pshow-meta-label">Status</div>
                                    <div class="pshow-meta-value">Early Pricing</div>
                                </div>
                            </div>
                            <a href="#contact" class="pshow-scene-cta">Schedule Visit <svg viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></a>
                        </div>
                    </div>

                </div><!-- /pshow-display -->
            </div><!-- /pshow-layout -->
        </div><!-- /pshow-inner -->
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
                            <div class="test-avatar">AM</div>
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
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:280px">
                        <svg width="100%" height="280" viewBox="0 0 300 280" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#141410">
                            <rect x="80" y="60" width="140" height="220" fill="rgba(30,107,85,0.06)"
                                stroke="rgba(200,168,75,0.12)" stroke-width="1" />
                            <rect x="110" y="30" width="80" height="50" fill="rgba(30,107,85,0.04)"
                                stroke="rgba(200,168,75,0.1)" stroke-width="1" />
                            <rect x="100" y="100" width="40" height="50" fill="rgba(200,168,75,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <rect x="160" y="100" width="40" height="50" fill="rgba(200,168,75,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <rect x="120" y="180" width="60" height="100" fill="rgba(30,107,85,0.06)"
                                stroke="rgba(200,168,75,0.1)" />
                            <text x="150" y="20" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">GOLDEN RESIDENCY</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:200px">
                        <svg width="100%" height="200" viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#100c14">
                            <path d="M30 200 Q150 60 270 200" fill="rgba(30,107,85,0.05)"
                                stroke="rgba(200,168,75,0.15)" stroke-width="1" />
                            <circle cx="150" cy="100" r="60" fill="none"
                                stroke="rgba(30,107,85,0.15)" stroke-width="1" />
                            <text x="150" y="105" text-anchor="middle" fill="rgba(200,168,75,0.25)"
                                font-family="Cinzel" font-size="10" letter-spacing="2">SMD</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:340px">
                        <svg width="100%" height="340" viewBox="0 0 300 340" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#161210">
                            <rect x="50" y="80" width="200" height="260" fill="rgba(30,107,85,0.05)"
                                stroke="rgba(200,168,75,0.1)" stroke-width="1" />
                            <path d="M50 80 L150 20 L250 80" fill="rgba(30,107,85,0.07)"
                                stroke="rgba(200,168,75,0.18)" stroke-width="1" />
                            <rect x="90" y="130" width="50" height="70" fill="rgba(200,168,75,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <rect x="160" y="130" width="50" height="70" fill="rgba(200,168,75,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <rect x="120" y="230" width="60" height="110" fill="rgba(30,107,85,0.06)"
                                stroke="rgba(200,168,75,0.1)" />
                            <text x="150" y="12" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">ROYAL GREENS VILLA</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:240px">
                        <svg width="100%" height="240" viewBox="0 0 300 240" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#0e1614">
                            <rect x="20" y="120" width="260" height="120" fill="rgba(30,107,85,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <circle cx="150" cy="80" r="50" fill="rgba(30,107,85,0.07)"
                                stroke="rgba(200,168,75,0.12)" stroke-width="1" />
                            <text x="150" y="210" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel" font-size="9" letter-spacing="2">ELITE FARMS</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:300px">
                        <svg width="100%" height="300" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#141010">
                            <rect x="60" y="100" width="180" height="200" fill="rgba(30,107,85,0.05)"
                                stroke="rgba(200,168,75,0.1)" />
                            <line x1="60" y1="100" x2="150" y2="50"
                                stroke="rgba(200,168,75,0.12)" stroke-width="1" />
                            <line x1="240" y1="100" x2="150" y2="50"
                                stroke="rgba(200,168,75,0.12)" stroke-width="1" />
                            <rect x="80" y="150" width="50" height="60" fill="rgba(200,168,75,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <rect x="170" y="150" width="50" height="60" fill="rgba(200,168,75,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <text x="150" y="40" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">GREEN VALLEY</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:210px">
                        <svg width="100%" height="210" viewBox="0 0 300 210" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#0c0c14">
                            <rect x="40" y="40" width="100" height="170" fill="rgba(30,107,85,0.05)"
                                stroke="rgba(200,168,75,0.1)" />
                            <rect x="160" y="70" width="100" height="140" fill="rgba(30,107,85,0.05)"
                                stroke="rgba(200,168,75,0.1)" />
                            <text x="150" y="15" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">IMPERIAL TOWNSHIP</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:260px">
                        <svg width="100%" height="260" viewBox="0 0 300 260" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#101414">
                            <path d="M0 260 Q75 120 150 180 Q225 240 300 60" fill="none"
                                stroke="rgba(30,107,85,0.2)" stroke-width="1" />
                            <circle cx="80" cy="140" r="8" fill="rgba(200,168,75,0.3)" />
                            <circle cx="220" cy="80" r="8" fill="rgba(200,168,75,0.3)" />
                            <text x="150" y="240" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="3">APPRECIATION CHART</text>
                        </svg>
                    </div>
                    <div class="gallery-item-overlay"><svg viewBox="0 0 24 24">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg></div>
                </div>
                <div class="gallery-item" onclick="openLightbox()">
                    <div class="g-block" style="height:190px">
                        <svg width="100%" height="190" viewBox="0 0 300 190" xmlns="http://www.w3.org/2000/svg"
                            style="display:block;background:#141214">
                            <rect x="100" y="20" width="100" height="170" fill="rgba(30,107,85,0.05)"
                                stroke="rgba(200,168,75,0.1)" />
                            <rect x="30" y="60" width="70" height="130" fill="rgba(30,107,85,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <rect x="200" y="50" width="70" height="140" fill="rgba(30,107,85,0.04)"
                                stroke="rgba(200,168,75,0.08)" />
                            <text x="150" y="14" text-anchor="middle" fill="rgba(200,168,75,0.2)"
                                font-family="Cinzel" font-size="8" letter-spacing="2">MASTER PLAN</text>
                        </svg>
                    </div>
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
            <svg width="80%" height="80%" viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                <rect width="400" height="300" fill="#141410" />
                <rect x="100" y="20" width="200" height="280" fill="rgba(30,107,85,0.06)"
                    stroke="rgba(200,168,75,0.15)" stroke-width="1" />
                <path d="M100 60 L200 10 L300 60" fill="rgba(30,107,85,0.08)" stroke="rgba(200,168,75,0.2)"
                    stroke-width="1" />
                <rect x="130" y="90" width="60" height="80" fill="rgba(200,168,75,0.04)"
                    stroke="rgba(200,168,75,0.1)" />
                <rect x="210" y="90" width="60" height="80" fill="rgba(200,168,75,0.04)"
                    stroke="rgba(200,168,75,0.1)" />
                <rect x="160" y="200" width="80" height="100" fill="rgba(30,107,85,0.06)"
                    stroke="rgba(200,168,75,0.12)" />
                <text x="200" y="295" text-anchor="middle" fill="rgba(200,168,75,0.3)" font-family="Cinzel"
                    font-size="10" letter-spacing="3">SMD LUXURY PROJECT</text>
            </svg>
        </div>
    </div>

    <!-- FOOTER -->
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
                    <li><a href="#director">Our Directors</a></li>
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
                <p style="font-size:0.7rem;color:var(--text-dim);margin-top:14px;letter-spacing:0.05em;">RERA Reg.
                    No.: UPRERAPRJ XXXXX &nbsp;|&nbsp; MahaRERA Reg. No.: XXXXX</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 <a href="#">SMD Group — Summer Multi Developers</a>. All Rights Reserved.</p>
            <p>Designed with excellence &nbsp;|&nbsp; <a href="#">Privacy Policy</a> &nbsp;|&nbsp; <a
                    href="#">Terms of Use</a></p>
        </div>
    </footer>

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
            'a,button,.why-card,.test-card,.gallery-item,.project-card,.social-icon,.test-arrow,.pshow-tab,.director-card'
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
            document.getElementById('mobileMenu').classList.toggle('open')
        }

        function closeMobileMenu() {
            document.getElementById('mobileMenu').classList.remove('open')
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

        /* ── PROJECTS SHOWCASE (click-tab, autoplay, no scroll-jacking) ── */
        (function() {
            const TOTAL = 5;
            const AUTOPLAY_MS = 5500;
            let current = 0;
            let autoTimer = null;
            let progressStart = 0;
            let progressRAF = null;

            const tabs = document.querySelectorAll('.pshow-tab');
            const scenes = document.querySelectorAll('.pshow-scene');
            const progressFill = document.getElementById('pshowProgressFill');

            function renderProgress(elapsed) {
                const pct = Math.min(100, (elapsed / AUTOPLAY_MS) * 100);
                progressFill.style.width = pct + '%';
                if (pct < 100) {
                    progressRAF = requestAnimationFrame(() => renderProgress(performance.now() - progressStart));
                }
            }

            function startProgress() {
                cancelAnimationFrame(progressRAF);
                progressFill.style.width = '0%';
                progressStart = performance.now();
                progressRAF = requestAnimationFrame(() => renderProgress(0));
            }

            function goTo(idx, userInitiated) {
                idx = (idx + TOTAL) % TOTAL;
                if (idx === current && !userInitiated) return;
                current = idx;
                tabs.forEach(t => t.classList.toggle('active', parseInt(t.dataset.index) === current));
                scenes.forEach(s => s.classList.toggle('active', parseInt(s.dataset.index) === current));
                if (userInitiated) resetAutoplay();
                startProgress();
            }

            function resetAutoplay() {
                clearInterval(autoTimer);
                autoTimer = setInterval(() => goTo(current + 1, false), AUTOPLAY_MS);
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', () => goTo(parseInt(tab.dataset.index), true));
            });

            /* init */
            resetAutoplay();
            startProgress();

            /* pause on hover for readability */
            const layout = document.querySelector('.pshow-layout');
            if (layout) {
                layout.addEventListener('mouseenter', () => {
                    clearInterval(autoTimer);
                    cancelAnimationFrame(progressRAF);
                });
                layout.addEventListener('mouseleave', () => {
                    resetAutoplay();
                    startProgress();
                });
            }
        })();


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

        /* ── LIGHTBOX ── */
        function openLightbox() {
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
</body>

</html>
