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
<style>
  
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --green-deep: #0a1f0f;
  --green-dark: #112214;
  --green-mid: #1a3320;
  --green-light: #2a4a30;
  --gold: #c8a84b;
  --gold-light: #e2c472;
  --gold-pale: #f0dfa0;
  --gold-dark: #9a7a2a;
  --cream: #f5f0e8;
  --cream-dark: #e8e0d0;
  --white: #ffffff;
  --text-dim: rgba(245,240,232,0.6);
  --serif: 'Cormorant Garamond', Georgia, serif;
  --sans: 'Jost', sans-serif;
}

html { scroll-behavior: smooth; }

body {
  background: var(--green-deep);
  color: var(--cream);
  font-family: var(--sans);
  font-weight: 300;
  overflow-x: hidden;
  cursor: default;
}

/* SCROLLBAR */
::-webkit-scrollbar { width: 6px; }
::-webkit-scrollbar-track { background: var(--green-dark); }
::-webkit-scrollbar-thumb { background: var(--gold); border-radius: 3px; }

/* ===== NAVBAR ===== */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  padding: 20px 48px;
  display: flex; align-items: center; justify-content: space-between;
  transition: all 0.4s ease;
}
nav.scrolled {
  background: rgba(10,31,15,0.95);
  backdrop-filter: blur(12px);
  padding: 14px 48px;
  border-bottom: 1px solid rgba(200,168,75,0.15);
}
.nav-brand {
  display: flex; align-items: center; gap: 14px; text-decoration: none;
}
.nav-logo-circle {
  width: 42px; height: 42px; border: 1.5px solid var(--gold);
  border-radius: 50%; display: flex; align-items: center; justify-content: center;
  font-family: var(--serif); font-size: 16px; color: var(--gold); font-weight: 600;
}
.nav-brand-text { display: flex; flex-direction: column; }
.nav-brand-name {
  font-family: var(--serif); font-size: 18px; color: var(--gold); letter-spacing: 3px;
  font-weight: 600; line-height: 1;
}
.nav-brand-sub {
  font-size: 9px; letter-spacing: 2px; color: var(--text-dim); text-transform: uppercase;
  margin-top: 2px;
}
.nav-links { display: flex; align-items: center; gap: 36px; list-style: none; }
.nav-links a {
  color: var(--cream); text-decoration: none; font-size: 11px; letter-spacing: 2px;
  text-transform: uppercase; font-weight: 400; transition: color 0.3s;
  position: relative;
}
.nav-links a::after {
  content: ''; position: absolute; bottom: -4px; left: 0; width: 0; height: 1px;
  background: var(--gold); transition: width 0.3s;
}
.nav-links a:hover { color: var(--gold); }
.nav-links a:hover::after { width: 100%; }
.nav-cta {
  background: transparent; border: 1px solid var(--gold); color: var(--gold);
  padding: 9px 24px; font-family: var(--sans); font-size: 10px; letter-spacing: 2.5px;
  text-transform: uppercase; cursor: pointer; transition: all 0.3s; text-decoration: none;
}
.nav-cta:hover { background: var(--gold); color: var(--green-deep); }

/* Hamburger */
.hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; }
.hamburger span { width: 24px; height: 1.5px; background: var(--gold); transition: all 0.3s; }

/* Mobile Menu */
.mobile-menu {
  display: none; position: fixed; inset: 0; z-index: 999;
  background: rgba(10,31,15,0.98); backdrop-filter: blur(20px);
  flex-direction: column; align-items: center; justify-content: center; gap: 32px;
}
.mobile-menu.open { display: flex; }
.mobile-menu a {
  font-family: var(--serif); font-size: 32px; color: var(--cream); text-decoration: none;
  letter-spacing: 3px; transition: color 0.3s;
}
.mobile-menu a:hover { color: var(--gold); }
.mobile-close {
  position: absolute; top: 24px; right: 32px; font-size: 28px;
  color: var(--gold); cursor: pointer; background: none; border: none;
}

/* ===== HERO ===== */
.hero {
  min-height: 100vh; position: relative; display: flex; align-items: center;
  overflow: hidden;
  background: radial-gradient(ellipse at 30% 60%, rgba(42,74,48,0.4) 0%, transparent 60%),
              radial-gradient(ellipse at 70% 20%, rgba(200,168,75,0.06) 0%, transparent 50%),
              var(--green-deep);
}

/* Geometric grid */
.hero-grid {
  position: absolute; inset: 0; pointer-events: none;
  background-image:
    linear-gradient(rgba(200,168,75,0.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(200,168,75,0.04) 1px, transparent 1px);
  background-size: 80px 80px;
}

/* Decorative circles */
.hero-circle-1 {
  position: absolute; right: -120px; top: 50%; transform: translateY(-50%);
  width: 600px; height: 600px; border-radius: 50%;
  border: 1px solid rgba(200,168,75,0.08);
}
.hero-circle-2 {
  position: absolute; right: -80px; top: 50%; transform: translateY(-50%);
  width: 480px; height: 480px; border-radius: 50%;
  border: 1px solid rgba(200,168,75,0.12);
}
.hero-circle-3 {
  position: absolute; right: -30px; top: 50%; transform: translateY(-50%);
  width: 340px; height: 340px; border-radius: 50%;
  background: radial-gradient(circle, rgba(200,168,75,0.05) 0%, transparent 70%);
  border: 1px solid rgba(200,168,75,0.18);
}

/* Landscape SVG */
.hero-landscape {
  position: absolute; bottom: 0; right: 0; width: 52%; opacity: 0.18;
  pointer-events: none;
}

.hero-content {
  position: relative; z-index: 2; padding: 0 8vw; max-width: 800px;
}
.hero-eyebrow {
  font-size: 10px; letter-spacing: 5px; color: var(--gold); text-transform: uppercase;
  margin-bottom: 24px; opacity: 0; animation: fadeUp 0.8s ease 0.3s forwards;
  display: flex; align-items: center; gap: 16px;
}
.hero-eyebrow::before {
  content: ''; width: 40px; height: 1px; background: var(--gold);
}
.hero-title {
  font-family: var(--serif); font-size: clamp(52px, 5vw, 96px);
  line-height: 1.0; font-weight: 300; color: var(--cream);
  opacity: 0; animation: fadeUp 0.8s ease 0.5s forwards;
}
.hero-title em {
  font-style: italic; color: var(--gold); font-weight: 300;
}
.hero-title strong { font-weight: 600; }
.hero-subtitle {
  font-size: 13px; letter-spacing: 1.5px; color: var(--text-dim); line-height: 1.8;
  margin: 12px 0 30px; max-width: 480px; font-weight: 300;
  opacity: 0; animation: fadeUp 0.8s ease 0.7s forwards;
}
.hero-actions {
  display: flex; align-items: center; gap: 24px; flex-wrap: wrap;
  opacity: 0; animation: fadeUp 0.8s ease 0.9s forwards;
}
.btn-gold {
  background: var(--gold); color: var(--green-deep); padding: 14px 36px;
  font-family: var(--sans); font-size: 11px; letter-spacing: 2.5px;
  text-transform: uppercase; border: none; cursor: pointer;
  text-decoration: none; display: inline-block; transition: all 0.3s; font-weight: 500;
}
.btn-gold:hover { background: var(--gold-light); transform: translateY(-2px); }
.btn-outline {
  background: transparent; border: 1px solid rgba(200,168,75,0.5);
  color: var(--gold); padding: 14px 36px; font-family: var(--sans);
  font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
  cursor: pointer; text-decoration: none; display: inline-block; transition: all 0.3s;
}
.btn-outline:hover { border-color: var(--gold); background: rgba(200,168,75,0.05); }

/* Stats */
.hero-stats {
  position: absolute; bottom: 45px; left: 8vw; right: 8vw;
  display: flex; gap: 60px;
  opacity: 0; animation: fadeUp 0.8s ease 1.1s forwards;
  border-top: 1px solid rgba(200,168,75,0.12); padding-top: 32px;
}
.stat { }
.stat-num {
  font-family: var(--serif); font-size: 44px; color: var(--gold);
  font-weight: 300; line-height: 1;
}
.stat-label {
  font-size: 10px; letter-spacing: 2px; color: var(--text-dim);
  text-transform: uppercase; margin-top: 6px;
}

/* Scroll indicator */
/* .scroll-indicator {
  position: absolute; bottom: 30px; right: 8vw;
  display: flex; align-items: center; gap: 12px;
  font-size: 9px; letter-spacing: 3px; color: var(--text-dim); text-transform: uppercase;
  opacity: 0; animation: fadeUp 0.8s ease 1.3s forwards;
}
.scroll-line {
  width: 40px; height: 1px; background: var(--gold-dark);
  position: relative; overflow: hidden;
}
.scroll-line::after {
  content: ''; position: absolute; left: -100%; top: 0;
  width: 100%; height: 100%; background: var(--gold);
  animation: scrollLine 1.8s ease infinite;
} */

@keyframes scrollLine { 0% { left: -100%; } 100% { left: 100%; } }

/* ===== MARQUEE ===== */
.marquee-section {
  background: var(--gold); padding: 16px 0; overflow: hidden;
  border-top: 1px solid var(--gold-dark); border-bottom: 1px solid var(--gold-dark);
}
.marquee-track {
  display: flex; gap: 0; animation: marquee 30s linear infinite; white-space: nowrap;
}
.marquee-item {
  display: inline-flex; align-items: center; gap: 32px; padding: 0 32px;
  font-family: var(--serif); font-size: 15px; color: var(--green-deep);
  font-weight: 600; letter-spacing: 2px; text-transform: uppercase;
}
.marquee-dot { width: 5px; height: 5px; background: var(--green-deep); border-radius: 50%; opacity: 0.5; }

@keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

/* ===== SECTION COMMON ===== */
section { position: relative; }
.section-label {
  font-size: 10px; letter-spacing: 5px; color: var(--gold); text-transform: uppercase;
  display: flex; align-items: center; gap: 16px; margin-bottom: 20px;
}
.section-label::before { content: ''; width: 30px; height: 1px; background: var(--gold); }
.section-title {
  font-family: var(--serif); font-size: clamp(38px, 5vw, 60px);
  color: var(--cream); font-weight: 300; line-height: 1.1;
}
.section-title em { font-style: italic; color: var(--gold); }

/* ===== ABOUT SECTION ===== */
.about {
  padding: 120px 8vw;
  display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;
}
.about-visual { position: relative; }

/* CSS landscape */
.landscape-svg { width: 100%; height: auto; }

.about-content { }
.about-text {
  font-size: 15px; line-height: 1.9; color: var(--text-dim);
  margin: 24px 0 40px; font-weight: 300;
}
.about-text strong { color: var(--cream); font-weight: 400; }

.values-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 40px;
}
.value-card {
  background: rgba(255,255,255,0.03); border: 1px solid rgba(200,168,75,0.1);
  padding: 20px; transition: all 0.3s;
}
.value-card:hover {
  background: rgba(200,168,75,0.06); border-color: rgba(200,168,75,0.3);
  transform: translateY(-3px);
}
.value-icon { font-size: 22px; margin-bottom: 10px; }
.value-title { font-family: var(--serif); font-size: 16px; color: var(--gold); margin-bottom: 6px; }
.value-desc { font-size: 12px; color: var(--text-dim); line-height: 1.7; }

/* ===== WHY CHOOSE ===== */
.why {
  padding: 100px 8vw;
  background: linear-gradient(180deg, var(--green-dark) 0%, var(--green-deep) 100%);
}
.why-header { text-align: center; margin-bottom: 72px; }
.why-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; }
.why-card {
  background: rgba(255,255,255,0.02); padding: 44px 36px;
  border: 1px solid rgba(200,168,75,0.08);
  transition: all 0.4s; position: relative; overflow: hidden;
}
.why-card::before {
  content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 2px;
  background: linear-gradient(90deg, transparent, var(--gold), transparent);
  transform: scaleX(0); transition: transform 0.4s;
}
.why-card:hover { background: rgba(200,168,75,0.05); transform: translateY(-4px); }
.why-card:hover::before { transform: scaleX(1); }
.why-num {
  font-family: var(--serif); font-size: 56px; color: rgba(200,168,75,0.08);
  line-height: 1; font-weight: 300; margin-bottom: 16px;
}
.why-icon { font-size: 28px; margin-bottom: 16px; }
.why-title { font-family: var(--serif); font-size: 22px; color: var(--cream); margin-bottom: 12px; }
.why-desc { font-size: 13px; color: var(--text-dim); line-height: 1.8; }

/* ===== PROJECTS SECTION ===== */
.projects { padding: 100px 0; overflow: hidden; }
.projects-header { padding: 0 8vw; margin-bottom: 80px; }

/* PROJECT CARDS — SCROLL MAGIC */
.projects-track { position: relative; }

/* ---- Entry base state (hidden) ---- */
.project-entry {
  display: grid; grid-template-columns: 1fr 1fr;
  min-height: 520px; align-items: stretch;
  margin-bottom: 4px;
  position: relative;
}

/* Odd: visual slides from LEFT, content from RIGHT */
.project-entry:nth-child(odd) .project-visual {
  opacity: 0;
  transform: translateX(-100px) scale(0.96);
  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1),
              transform 0.9s cubic-bezier(0.22,1,0.36,1);
}
.project-entry:nth-child(odd) .project-content {
  opacity: 0;
  transform: translateX(80px);
  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1) 0.15s,
              transform 0.9s cubic-bezier(0.22,1,0.36,1) 0.15s;
}

/* Even: flip — visual from RIGHT, content from LEFT */
.project-entry:nth-child(even) { direction: rtl; }
.project-entry:nth-child(even) > * { direction: ltr; }
.project-entry:nth-child(even) .project-visual {
  opacity: 0;
  transform: translateX(100px) scale(0.96);
  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1),
              transform 0.9s cubic-bezier(0.22,1,0.36,1);
}
.project-entry:nth-child(even) .project-content {
  opacity: 0;
  transform: translateX(-80px);
  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1) 0.15s,
              transform 0.9s cubic-bezier(0.22,1,0.36,1) 0.15s;
}

/* ---- Visible state ---- */
.project-entry.visible .project-visual,
.project-entry.visible .project-content {
  opacity: 1;
  transform: translateX(0) scale(1);
}

/* ---- Content inner elements stagger ---- */
.project-content .project-tag  { opacity: 0; transform: translateY(18px); transition: opacity 0.5s ease 0.3s, transform 0.5s ease 0.3s; }
.project-content .project-name { opacity: 0; transform: translateY(22px); transition: opacity 0.5s ease 0.42s, transform 0.5s ease 0.42s; }
.project-content .project-desc { opacity: 0; transform: translateY(18px); transition: opacity 0.5s ease 0.54s, transform 0.5s ease 0.54s; }
.project-content .project-meta { opacity: 0; transform: translateY(14px); transition: opacity 0.5s ease 0.64s, transform 0.5s ease 0.64s; }
.project-content .project-btn  { opacity: 0; transform: translateY(14px); transition: opacity 0.5s ease 0.74s, transform 0.5s ease 0.74s; }

.project-entry.visible .project-content .project-tag,
.project-entry.visible .project-content .project-name,
.project-entry.visible .project-content .project-desc,
.project-entry.visible .project-content .project-meta,
.project-entry.visible .project-content .project-btn {
  opacity: 1; transform: translateY(0);
}

/* ---- Gold line sweep on visual reveal ---- */
.project-visual {
  position: relative; overflow: hidden; background: var(--green-mid);
  min-height: 420px;
}
.project-visual::after {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(105deg, transparent 40%, rgba(200,168,75,0.18) 50%, transparent 60%);
  transform: translateX(-100%);
  transition: transform 0s;
  pointer-events: none;
}
.project-entry.visible .project-visual::after {
  transform: translateX(200%);
  transition: transform 0.8s ease 0.5s;
}

.proj-scene { width: 100%; height: 100%; min-height: 420px; display: block; }

/* ---- SVG scene shimmer keyframe ---- */
@keyframes sceneFloat {
  0%, 100% { transform: translateY(0px); }
  50%       { transform: translateY(-6px); }
}
@keyframes goldPulse {
  0%, 100% { opacity: 0.15; }
  50%       { opacity: 0.35; }
}
@keyframes starTwinkle {
  0%, 100% { opacity: 0.7; r: 1.5px; }
  50%       { opacity: 0.2; r: 0.8px; }
}
.proj-scene .float-group {
  animation: sceneFloat 6s ease-in-out infinite;
  transform-origin: center bottom;
}
.proj-scene .gold-glow {
  animation: goldPulse 3s ease-in-out infinite;
}
.proj-scene .star-twinkle {
  animation: starTwinkle 2.5s ease-in-out infinite;
}

/* Project Content Panel */
.project-content {
  background: var(--green-dark); padding: 64px 56px;
  display: flex; flex-direction: column; justify-content: center;
  border: 1px solid rgba(200,168,75,0.06);
  position: relative; overflow: hidden;
  transition: border-color 0.6s ease;
}

/* Gold border left strip — animates in */
.project-content::before {
  content: '';
  position: absolute; left: 0; top: 50%; bottom: 50%;
  width: 3px;
  background: linear-gradient(180deg, var(--gold-light), var(--gold), var(--gold-dark));
  transition: top 0.6s cubic-bezier(0.22,1,0.36,1) 0.5s,
              bottom 0.6s cubic-bezier(0.22,1,0.36,1) 0.5s;
}
.project-entry.visible .project-content::before {
  top: 0; bottom: 0;
}
.project-entry.visible .project-content {
  border-color: rgba(200,168,75,0.22);
}

.project-number {
  font-family: var(--serif); font-size: 80px; color: rgba(200,168,75,0.07);
  line-height: 1; position: absolute; top: 20px; right: 30px; font-weight: 700;
  transition: color 0.6s ease;
}
.project-entry.visible .project-number { color: rgba(200,168,75,0.12); }

.project-tag {
  font-size: 9px; letter-spacing: 4px; color: var(--gold); text-transform: uppercase;
  margin-bottom: 16px; display: flex; align-items: center; gap: 12px;
}
.project-tag::before {
  content: ''; height: 1px; background: var(--gold);
  width: 0; transition: width 0.5s ease 0.8s;
}
.project-entry.visible .project-tag::before { width: 24px; }

.project-name {
  font-family: var(--serif); font-size: clamp(28px, 3.5vw, 44px);
  color: var(--cream); font-weight: 300; line-height: 1.15; margin-bottom: 20px;
}
.project-desc {
  font-size: 13px; color: var(--text-dim); line-height: 1.9;
  margin-bottom: 32px; font-weight: 300;
}
.project-meta { display: flex; gap: 32px; margin-bottom: 36px; }
.meta-item { }
.meta-label { font-size: 9px; letter-spacing: 2px; color: var(--gold-dark); text-transform: uppercase; margin-bottom: 4px; }
.meta-value { font-family: var(--serif); font-size: 15px; color: var(--cream); }
.project-btn {
  display: inline-flex; align-items: center; gap: 12px;
  text-decoration: none; color: var(--gold);
  font-size: 10px; letter-spacing: 2.5px; text-transform: uppercase;
  border: 1px solid rgba(200,168,75,0.3); padding: 12px 28px;
  transition: all 0.3s; align-self: flex-start;
  position: relative; overflow: hidden;
}
.project-btn::before {
  content: ''; position: absolute; inset: 0;
  background: var(--gold); transform: scaleX(0); transform-origin: left;
  transition: transform 0.3s ease; z-index: 0;
}
.project-btn:hover::before { transform: scaleX(1); }
.project-btn span, .project-btn svg { position: relative; z-index: 1; }
.project-btn:hover { color: var(--green-deep); border-color: var(--gold); }
.project-btn svg { transition: transform 0.3s; }
.project-btn:hover svg { transform: translateX(4px); }

/* Active project extra glow */
.project-entry.active-project .project-content {
  border-color: rgba(200,168,75,0.5);
  box-shadow: inset 4px 0 20px rgba(200,168,75,0.04);
}
.project-entry.active-project .project-number {
  color: rgba(200,168,75,0.18);
}

/* Project section progress sidebar */
.projects-progress {
  position: fixed; right: 28px; top: 50%; transform: translateY(-50%);
  z-index: 500; display: flex; flex-direction: column; gap: 10px;
  opacity: 0; pointer-events: none;
  transition: opacity 0.4s ease;
}
.projects-progress.show { opacity: 1; pointer-events: all; }
.progress-dot {
  width: 7px; height: 7px; border-radius: 50%;
  border: 1px solid rgba(200,168,75,0.4); background: transparent;
  cursor: pointer; transition: all 0.3s ease;
}
.progress-dot.active {
  background: var(--gold); border-color: var(--gold);
  box-shadow: 0 0 8px rgba(200,168,75,0.5);
  transform: scale(1.4);
}
.progress-dot:hover { border-color: var(--gold); }
.journey { padding: 100px 8vw; background: var(--green-dark); }
.journey-header { text-align: center; margin-bottom: 80px; }
.timeline { position: relative; }
.timeline::before {
  content: ''; position: absolute; left: 50%; top: 0; bottom: 0;
  width: 1px; background: linear-gradient(180deg, transparent, var(--gold-dark), var(--gold), var(--gold-dark), transparent);
  transform: translateX(-50%);
}
.timeline-item {
  display: grid; grid-template-columns: 1fr 60px 1fr;
  align-items: center; margin-bottom: 56px;
  opacity: 0; transform: translateY(40px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}
.timeline-item.visible { opacity: 1; transform: translateY(0); }
.timeline-item:nth-child(odd) .timeline-content { grid-column: 1; text-align: right; padding-right: 40px; }
.timeline-item:nth-child(odd) .timeline-empty { grid-column: 3; }
.timeline-item:nth-child(even) .timeline-content { grid-column: 3; text-align: left; padding-left: 40px; }
.timeline-item:nth-child(even) .timeline-empty { grid-column: 1; }
.timeline-dot {
  grid-column: 2; width: 14px; height: 14px; border-radius: 50%;
  background: var(--gold); border: 3px solid var(--green-dark);
  box-shadow: 0 0 0 6px rgba(200,168,75,0.15);
  margin: 0 auto;
}
.timeline-year { font-family: var(--serif); font-size: 32px; color: var(--gold); font-weight: 300; }
.timeline-event { font-family: var(--serif); font-size: 20px; color: var(--cream); margin: 8px 0; }
.timeline-desc { font-size: 12px; color: var(--text-dim); line-height: 1.8; max-width: 300px; }
.timeline-item:nth-child(odd) .timeline-desc { margin-left: auto; }

/* ===== CTA ===== */
.cta {
  padding: 100px 8vw; text-align: center;
  background: radial-gradient(ellipse at center, rgba(200,168,75,0.08) 0%, transparent 60%),
              var(--green-deep);
  position: relative; overflow: hidden;
}
.cta::before {
  content: 'SMD'; position: absolute; top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  font-family: var(--serif); font-size: 240px; color: rgba(200,168,75,0.03);
  font-weight: 700; letter-spacing: 20px; pointer-events: none; white-space: nowrap;
}
.cta-subtitle { font-family: var(--serif); font-size: clamp(38px, 5vw, 64px); color: var(--cream); margin: 20px 0 16px; line-height: 1.1; }
.cta-subtitle em { color: var(--gold); font-style: italic; }
.cta-desc { font-size: 14px; color: var(--text-dim); max-width: 500px; margin: 0 auto 48px; line-height: 1.8; }
.cta-actions { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; }
.cta-lucky {
  background: rgba(200,168,75,0.1); border: 1px solid var(--gold);
  color: var(--gold); padding: 14px 36px; font-family: var(--sans);
  font-size: 11px; letter-spacing: 2px; text-transform: uppercase; cursor: pointer;
  text-decoration: none; transition: all 0.3s;
}
.cta-lucky:hover { background: var(--gold); color: var(--green-deep); }

/* ===== FOOTER ===== */
footer {
  background: var(--green-dark); padding: 72px 8vw 32px;
  border-top: 1px solid rgba(200,168,75,0.12);
}
.footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1.5fr; gap: 48px; margin-bottom: 56px; }
.footer-brand-name {
  font-family: var(--serif); font-size: 28px; color: var(--gold);
  font-weight: 600; letter-spacing: 3px; margin-bottom: 12px;
}
.footer-tagline { font-size: 12px; color: var(--text-dim); line-height: 1.8; max-width: 260px; margin-bottom: 28px; }
.footer-socials { display: flex; gap: 12px; }
.social-btn {
  width: 36px; height: 36px; border: 1px solid rgba(200,168,75,0.2);
  display: flex; align-items: center; justify-content: center;
  color: var(--text-dim); text-decoration: none; font-size: 14px;
  transition: all 0.3s;
}
.social-btn:hover { border-color: var(--gold); color: var(--gold); }
.footer-col h4 {
  font-size: 9px; letter-spacing: 3px; color: var(--gold); text-transform: uppercase;
  margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid rgba(200,168,75,0.15);
}
.footer-links { list-style: none; display: flex; flex-direction: column; gap: 10px; }
.footer-links a {
  color: var(--text-dim); text-decoration: none; font-size: 12px;
  letter-spacing: 0.5px; transition: color 0.3s;
}
.footer-links a:hover { color: var(--gold); }
.footer-contact-item { display: flex; gap: 12px; margin-bottom: 16px; align-items: flex-start; }
.contact-icon { color: var(--gold); font-size: 14px; margin-top: 1px; flex-shrink: 0; }
.contact-text { font-size: 12px; color: var(--text-dim); line-height: 1.7; }
.footer-bottom {
  border-top: 1px solid rgba(200,168,75,0.08); padding-top: 24px;
  display: flex; justify-content: space-between; align-items: center;
}
.footer-copy { font-size: 11px; color: var(--text-dim); letter-spacing: 0.5px; }
.footer-bottom-links { display: flex; gap: 24px; }
.footer-bottom-links a { font-size: 11px; color: var(--text-dim); text-decoration: none; }

/* ===== ANIMATIONS ===== */
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(24px); }
  to { opacity: 1; transform: translateY(0); }
}

.reveal {
  opacity: 0; transform: translateY(50px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal-left {
  opacity: 0; transform: translateX(-60px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}
.reveal-left.visible { opacity: 1; transform: translateX(0); }
.reveal-right {
  opacity: 0; transform: translateX(60px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}
.reveal-right.visible { opacity: 1; transform: translateX(0); }

/* Stagger delays */
.delay-1 { transition-delay: 0.1s; }
.delay-2 { transition-delay: 0.2s; }
.delay-3 { transition-delay: 0.3s; }
.delay-4 { transition-delay: 0.4s; }
.delay-5 { transition-delay: 0.5s; }
.delay-6 { transition-delay: 0.6s; }

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
  .about { grid-template-columns: 1fr; }
  .why-grid { grid-template-columns: 1fr 1fr; }
  .project-entry { grid-template-columns: 1fr; min-height: auto; }
  .project-entry:nth-child(even) { direction: ltr; }
  /* On mobile, all slide up from bottom */
  .project-entry:nth-child(odd) .project-visual,
  .project-entry:nth-child(even) .project-visual {
    opacity: 0; transform: translateY(60px) scale(0.97);
    transition: opacity 0.8s cubic-bezier(0.22,1,0.36,1), transform 0.8s cubic-bezier(0.22,1,0.36,1);
  }
  .project-entry:nth-child(odd) .project-content,
  .project-entry:nth-child(even) .project-content {
    opacity: 0; transform: translateY(40px);
    transition: opacity 0.8s cubic-bezier(0.22,1,0.36,1) 0.15s, transform 0.8s cubic-bezier(0.22,1,0.36,1) 0.15s;
  }
  .project-entry.visible .project-visual,
  .project-entry.visible .project-content { opacity: 1; transform: translateY(0) scale(1); }
  .project-visual { min-height: 300px; }
  .footer-grid { grid-template-columns: 1fr 1fr; }
  .timeline::before { left: 20px; }
  .timeline-item { grid-template-columns: 40px 1fr; grid-template-rows: auto; }
  .timeline-dot { grid-column: 1; }
  .timeline-item:nth-child(odd) .timeline-content,
  .timeline-item:nth-child(even) .timeline-content {
    grid-column: 2; text-align: left; padding-left: 20px; padding-right: 0;
  }
  .timeline-item:nth-child(odd) .timeline-empty,
  .timeline-item:nth-child(even) .timeline-empty { display: none; }
  .timeline-item:nth-child(odd) .timeline-desc { margin-left: 0; }
}
@media (max-width: 768px) {
  .hero-title{font-size: clamp(45px, 5vw, 96px);}
  nav { padding: 16px 24px; }
  nav.scrolled { padding: 12px 24px; }
  .nav-links, .nav-cta { display: none; }
  .hamburger { display: flex; }
  .hero-content { padding: 0 6vw; }
  .hero-stats { flex-wrap: wrap; gap: 32px; left: 6vw;bottom:0px; }
  .hero-circle-1, .hero-circle-2, .hero-circle-3 { display: none; }
  .why-grid { grid-template-columns: 1fr; }
  .project-content { padding: 40px 32px; }
  .about, .why, .journey, .cta { padding: 72px 6vw; }
  .projects-header { padding: 0 6vw; }
  .footer-grid { grid-template-columns: 1fr; gap: 32px; }
  .footer-bottom { flex-direction: column; gap: 12px; text-align: center; }
.hero {    min-height: 109vh;}
  .marquee-section{margin-top: 30px;}
}

</style>
</head>

<body>
    {{-- NAVBAR --}}
    <nav id="navbar">
        <a href="#" class="nav-brand">
            <div class="nav-logo-circle"><img src="./assets/img/logo/SMD-Logos-6-251x300.webp" alt="SMD Group Logo" width="40" height="auto"/></div>
            <div class="nav-brand-text">
                <span class="nav-brand-name">SMD GROUP</span>
                <span class="nav-brand-sub">Since 2013</span>
            </div>
        </a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#journey">Journey</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="https://wa.me/8307050700" class="nav-cta">Enquire Now</a>
        <div class="hamburger" id="hamburger">
            <span></span><span></span><span></span>
        </div>
    </nav>

    {{-- MOBILE MENU --}}
    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-close" id="mobileClose">✕</button>
        <a href="#about" class="mobile-link">About</a>
        <a href="#projects" class="mobile-link">Projects</a>
        <a href="#journey" class="mobile-link">Journey</a>
        <a href="https://summermultidevelopers.com/lucky-draw/" class="mobile-link">Lucky Draw</a>
        <a href="#contact" class="mobile-link">Contact</a>
    </div>

    {{-- HERO --}}
    <section class="hero" id="home">
        <div class="hero-grid"></div>
        <div class="hero-circle-1"></div>
        <div class="hero-circle-2"></div>
        <div class="hero-circle-3"></div>

        {{-- CSS Landscape --}}
        <svg class="hero-landscape" viewBox="0 0 700 400" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="skyGrad" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#c8a84b" stop-opacity="0.3" />
                    <stop offset="100%" stop-color="#c8a84b" stop-opacity="0" />
                </linearGradient>
            </defs>
            {{-- Mountains --}}
            <polygon points="0,400 120,180 240,400" fill="#1a3320" opacity="0.8" />
            <polygon points="80,400 220,120 360,400" fill="#2a4a30" opacity="0.7" />
            <polygon points="200,400 370,80 540,400" fill="#1a3320" opacity="0.9" />
            <polygon points="350,400 500,150 650,400" fill="#2a4a30" opacity="0.6" />
            <polygon points="500,400 620,200 700,400" fill="#112214" opacity="0.8" />
            {{-- Ground --}}
            <ellipse cx="350" cy="420" rx="400" ry="60" fill="#0a1f0f" opacity="0.9" />
            {{-- Trees --}}
            <g fill="#1a3320" opacity="0.9">
                <polygon points="80,400 95,340 110,400" />
                <polygon points="150,400 168,320 186,400" />
                <polygon points="260,400 280,330 300,400" />
                <polygon points="420,400 438,360 456,400" />
                <polygon points="540,400 558,340 576,400" />
            </g>
            {{-- Sun/Moon  --}}
            <circle cx="350" cy="140" r="32" fill="none" stroke="#c8a84b" stroke-width="1"
                opacity="0.4" />
            <circle cx="350" cy="140" r="20" fill="#c8a84b" opacity="0.15" />
            {{-- Stars --}}
            <circle cx="100" cy="80" r="1.5" fill="#c8a84b" opacity="0.6" />
            <circle cx="180" cy="50" r="1" fill="#c8a84b" opacity="0.5" />
            <circle cx="480" cy="60" r="1.5" fill="#c8a84b" opacity="0.5" />
            <circle cx="580" cy="40" r="1" fill="#c8a84b" opacity="0.7" />
            <circle cx="620" cy="100" r="1" fill="#c8a84b" opacity="0.4" />
        </svg>

        <div class="hero-content">
            <p class="hero-eyebrow">Est. 2013 · Premium Real Estate</p>
            <h1 class="hero-title">
                Building the<br>
                <em>Future.</em> Creating<br>
                <strong>Landmarks.</strong>
            </h1>
            <p class="hero-subtitle">Premium farmhouse plots & luxury living across Uttar Pradesh & Uttarakhand.
                Trusted by hundreds of families.</p>
            <div class="hero-actions">
                <a href="#projects" class="btn-gold">View Projects</a>
                <a href="https://summermultidevelopers.com/lucky-draw/" class="btn-outline">🎁 Lucky Draw</a>
            </div>
        </div>

        <div class="hero-stats">
            <div class="stat">
                <div class="stat-num" data-target="10">0</div>
                <div class="stat-label">Years of Excellence</div>
            </div>
            <div class="stat">
                <div class="stat-num" data-target="5">0</div>
                <div class="stat-label">Premium Projects</div>
            </div>
            <div class="stat">
                <div class="stat-num" data-target="500">0</div>
                <div class="stat-label">Happy Families</div>
            </div>
            <div class="stat">
                <div class="stat-num" data-target="2">0</div>
                <div class="stat-label">States Covered</div>
            </div>
        </div>

        {{-- <div class="scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div> --}}
    </section>

    {{-- MARQUEE --}}
    <div class="marquee-section">
        <div class="marquee-track">
            {{-- Repeated twice for seamless loop --}}
            <span class="marquee-item">Anandvan Resorts <span class="marquee-dot"></span></span>
            <span class="marquee-item">The Royal Orchid Farms <span class="marquee-dot"></span></span>
            <span class="marquee-item">Alaknanda Farms <span class="marquee-dot"></span></span>
            <span class="marquee-item">OAK Hill Gardens <span class="marquee-dot"></span></span>
            <span class="marquee-item">Shri Krishna Enclave <span class="marquee-dot"></span></span>
            <span class="marquee-item">Premium Land · Trusted Developer <span class="marquee-dot"></span></span>
            <span class="marquee-item">Anandvan Resorts <span class="marquee-dot"></span></span>
            <span class="marquee-item">The Royal Orchid Farms <span class="marquee-dot"></span></span>
            <span class="marquee-item">Alaknanda Farms <span class="marquee-dot"></span></span>
            <span class="marquee-item">OAK Hill Gardens <span class="marquee-dot"></span></span>
            <span class="marquee-item">Shri Krishna Enclave <span class="marquee-dot"></span></span>
            <span class="marquee-item">Premium Land · Trusted Developer <span class="marquee-dot"></span></span>
        </div>
    </div>
    {{-- ABOUT --}}
    <section class="about" id="about">
        <div class="about-visual reveal-left">
            {{-- CSS Landscape Scene --}}
            <svg class="landscape-svg" viewBox="0 0 560 480" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="skyAbout" x1="0" y1="0" x2="0" y2="1">
                        <stop offset="0%" stop-color="#0a1f0f" />
                        <stop offset="100%" stop-color="#1a3320" />
                    </linearGradient>
                    <linearGradient id="goldLine" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" stop-color="#c8a84b" stop-opacity="0" />
                        <stop offset="50%" stop-color="#c8a84b" stop-opacity="1" />
                        <stop offset="100%" stop-color="#c8a84b" stop-opacity="0" />
                    </linearGradient>
                    <filter id="glow">
                        <feGaussianBlur stdDeviation="3" result="coloredBlur" />
                        <feMerge>
                            <feMergeNode in="coloredBlur" />
                            <feMergeNode in="SourceGraphic" />
                        </feMerge>
                    </filter>
                </defs>
                {{-- Background --}}
                <rect width="560" height="480" fill="url(#skyAbout)" rx="4" />
                {{-- Border --}}
                <rect width="560" height="480" fill="none" stroke="#c8a84b" stroke-width="1"
                    opacity="0.2" rx="4" />
                <rect x="8" y="8" width="544" height="464" fill="none" stroke="#c8a84b" stroke-width="0.5"
                    opacity="0.1" rx="2" />
                {{-- Mountains bg --}}
                <polygon points="0,480 80,260 180,480" fill="#112214" opacity="0.9" />
                <polygon points="60,480 200,180 330,480" fill="#1a3320" />
                <polygon points="220,480 360,140 500,480" fill="#0f2415" opacity="0.95" />
                <polygon points="380,480 490,220 560,480" fill="#1a3320" opacity="0.8" />

                {{-- Snow caps --}}
                <polygon points="200,180 215,210 185,210" fill="rgba(200,168,75,0.15)" />
                <polygon points="360,140 378,175 342,175" fill="rgba(200,168,75,0.12)" />

                {{-- Golden horizon glow --}}
                <ellipse cx="280" cy="280" rx="200" ry="30"
                    fill="rgba(200,168,75,0.06)" />
                <line x1="40" y1="280" x2="520" y2="280" stroke="url(#goldLine)"
                    stroke-width="1" opacity="0.4" />

                {{-- Trees row --}}
                <g fill="#0a1f0f">
                    <polygon points="30,480 45,400 60,480" />
                    <polygon points="60,480 78,380 96,480" />
                    <polygon points="100,480 120,390 140,480" />
                    <polygon points="150,480 168,410 186,480" />
                    <polygon points="380,480 398,400 416,480" />
                    <polygon points="420,480 440,380 460,480" />
                    <polygon points="470,480 490,400 510,480" />
                    <polygon points="510,480 530,420 550,480" />
                </g>

                {{-- Moon + glow --}}
                <circle cx="280" cy="120" r="40" fill="rgba(200,168,75,0.05)" filter="url(#glow)" />
                <circle cx="280" cy="120" r="26" fill="none" stroke="#c8a84b" stroke-width="1"
                    opacity="0.5" />
                <circle cx="280" cy="120" r="14" fill="#c8a84b" opacity="0.2" />

                {{-- Stars --}}
                <circle cx="80" cy="80" r="1.5" fill="#c8a84b" opacity="0.7" />
                <circle cx="140" cy="50" r="1" fill="#c8a84b" opacity="0.6" />
                <circle cx="200" cy="90" r="1.2" fill="#c8a84b" opacity="0.5" />
                <circle cx="380" cy="60" r="1.5" fill="#c8a84b" opacity="0.7" />
                <circle cx="450" cy="40" r="1" fill="#c8a84b" opacity="0.5" />
                <circle cx="500" cy="90" r="1.2" fill="#c8a84b" opacity="0.6" />
                <circle cx="160" cy="110" r="0.8" fill="#c8a84b" opacity="0.5" />
                <circle cx="420" cy="100" r="0.8" fill="#c8a84b" opacity="0.5" />

                {{-- House / Estate --}}
                <rect x="230" y="350" width="100" height="70" fill="#1a3320" stroke="#c8a84b"
                    stroke-width="0.8" opacity="0.8" />
                <polygon points="210,350 280,300 350,350" fill="#112214" stroke="#c8a84b" stroke-width="0.8"
                    opacity="0.8" />
                <rect x="262" y="390" width="20" height="30" fill="#0a1f0f" />
                <rect x="238" y="360" width="16" height="14" fill="rgba(200,168,75,0.2)" stroke="#c8a84b"
                    stroke-width="0.5" />
                <rect x="306" y="360" width="16" height="14" fill="rgba(200,168,75,0.2)" stroke="#c8a84b"
                    stroke-width="0.5" />

                {{-- Path --}}
                <ellipse cx="280" cy="440" rx="18" ry="5" fill="rgba(200,168,75,0.1)" />
                <rect x="272" y="420" width="16" height="20" fill="rgba(200,168,75,0.06)" rx="1" />

                {{-- Gold frame corner accents --}}
                <path d="M 20 20 L 20 40 M 20 20 L 40 20" stroke="#c8a84b" stroke-width="1" opacity="0.4"
                    fill="none" />
                <path d="M 540 20 L 540 40 M 540 20 L 520 20" stroke="#c8a84b" stroke-width="1" opacity="0.4"
                    fill="none" />
                <path d="M 20 460 L 20 440 M 20 460 L 40 460" stroke="#c8a84b" stroke-width="1" opacity="0.4"
                    fill="none" />
                <path d="M 540 460 L 540 440 M 540 460 L 520 460" stroke="#c8a84b" stroke-width="1" opacity="0.4"
                    fill="none" />

                {{-- Label --}}
                <text x="280" y="472" text-anchor="middle" font-family="'Cormorant Garamond', serif" font-size="10"
                    fill="#c8a84b" opacity="0.5" letter-spacing="3">SMD GROUP · EST. 2013</text>
            </svg>
        </div>

        <div class="about-content reveal-right">
            <p class="section-label">About SMD Group</p>
            <h2 class="section-title">Building Trust,<br><em>One Plot</em> at a Time</h2>
            <p class="about-text">
                Welcome to <strong>SMD Group</strong>, a name that stands for <strong>transparency, trust, and timeless
                    value</strong> in the real estate industry. With <strong>over a decade of experience</strong>, we
                have established ourselves as a leading developer and planner for premium land and farmhouse projects in
                <strong>Uttar Pradesh & Uttarakhand</strong>.
            </p>
            <p class="about-text" style="margin-top: -16px;">
                We understand that buying land is not just an investment — it's a dream, a step toward a secure and
                peaceful future. That's why we deliver <strong>legally verified, well-planned, and future-ready
                    properties</strong> that match your lifestyle and investment goals.
            </p>

            <div class="values-grid">
                <div class="value-card reveal delay-1">
                    <div class="value-icon">⚖️</div>
                    <div class="value-title">Integrity</div>
                    <div class="value-desc">Honest and fair practices in every transaction, no compromises.</div>
                </div>
                <div class="value-card reveal delay-2">
                    <div class="value-icon">📋</div>
                    <div class="value-title">Transparency</div>
                    <div class="value-desc">Clear documentation and legal approvals backing every project.</div>
                </div>
                <div class="value-card reveal delay-3">
                    <div class="value-icon">🤝</div>
                    <div class="value-title">Commitment</div>
                    <div class="value-desc">We stand by our promises and deliver on time, every time.</div>
                </div>
                <div class="value-card reveal delay-4">
                    <div class="value-icon">🌱</div>
                    <div class="value-title">Eco-Friendly</div>
                    <div class="value-desc">Thoughtfully planned, environmentally conscious development.</div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE SMD --}}
    <section class="why">
        <div class="why-header reveal">
            <p class="section-label" style="justify-content: center;">Why Choose Us</p>
            <h2 class="section-title">The SMD <em>Difference</em></h2>
        </div>
        <div class="why-grid">
            <div class="why-card reveal delay-1">
                <div class="why-num">01</div>
                <div class="why-icon">🏅</div>
                <div class="why-title">10+ Years of Expertise</div>
                <div class="why-desc">A trusted decade of land development and farmhouse planning across two states —
                    our experience speaks through every project delivered.</div>
            </div>
            <div class="why-card reveal delay-2">
                <div class="why-num">02</div>
                <div class="why-icon">✅</div>
                <div class="why-title">Legally Verified Properties</div>
                <div class="why-desc">100% RERA-approved and legally verified plots. Complete documentation
                    transparency — zero hidden charges, zero surprises.</div>
            </div>
            <div class="why-card reveal delay-3">
                <div class="why-num">03</div>
                <div class="why-icon">📍</div>
                <div class="why-title">Prime Locations</div>
                <div class="why-desc">Strategically chosen sites across UP & Uttarakhand — close to nature,
                    well-connected to cities, ideal for retreats and investment.</div>
            </div>
            <div class="why-card reveal delay-4">
                <div class="why-num">04</div>
                <div class="why-icon">🛡️</div>
                <div class="why-title">End-to-End Guidance</div>
                <div class="why-desc">From documentation to possession, our dedicated team holds your hand through
                    every step of your land ownership journey.</div>
            </div>
            <div class="why-card reveal delay-5">
                <div class="why-num">05</div>
                <div class="why-icon">📈</div>
                <div class="why-title">Long-Term Investment Growth</div>
                <div class="why-desc">Our projects are selected for assured appreciation. Your land doesn't just sit —
                    it grows in value year after year.</div>
            </div>
            <div class="why-card reveal delay-6">
                <div class="why-num">06</div>
                <div class="why-icon">💚</div>
                <div class="why-title">Eco-Conscious Development</div>
                <div class="why-desc">Green surroundings, thoughtful layouts, and sustainable planning ensure your
                    investment stands the test of time and nature.</div>
            </div>
        </div>
    </section>

    {{-- PROJECTS --}}
    <section class="projects" id="projects">
        <div class="projects-header">
            <p class="section-label reveal">Our Portfolio</p>
            <h2 class="section-title reveal delay-1">Landmark <em>Projects</em></h2>
            <p style="font-size:13px; color:var(--text-dim); margin-top:16px; max-width:480px;"
                class="reveal delay-2">Each property is a carefully crafted opportunity — scroll to explore our
                signature developments.</p>
        </div>

        {{-- Project progress dots --}}
        <div class="projects-progress" id="projectsProgress">
            <div class="progress-dot active" data-index="0" title="Anandvan Resorts"></div>
            <div class="progress-dot" data-index="1" title="Royal Orchid Farms"></div>
            <div class="progress-dot" data-index="2" title="Alaknanda Farms"></div>
            <div class="progress-dot" data-index="3" title="OAK Hill Gardens"></div>
            <div class="progress-dot" data-index="4" title="Shri Krishna Enclave"></div>
        </div>

        <div class="projects-track">

            {{-- Project 1: Anandvan Resorts --}}
            <div class="project-entry" data-project="1">
                <div class="project-visual">
                    <svg class="proj-scene" viewBox="0 0 560 420" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="p1sky" x1="0" y1="0" x2="0"
                                y2="1">
                                <stop offset="0%" stop-color="#0d2411" />
                                <stop offset="100%" stop-color="#1e3d24" />
                            </linearGradient>
                        </defs>
                        <rect width="560" height="420" fill="url(#p1sky)" />
                        {{-- Hills --}}
                        <ellipse cx="140" cy="360" rx="220" ry="100" fill="#0a1f0f" />
                        <ellipse cx="420" cy="380" rx="200" ry="80" fill="#112214" />
                        {{-- Forest line --}}
                        <g fill="#0d2010">
                            <polygon points="0,420 20,340 40,420" />
                            <polygon points="30,420 55,320 80,420" />
                            <polygon points="70,420 98,330 126,420" />
                            <polygon points="430,420 458,330 486,420" />
                            <polygon points="470,420 500,320 530,420" />
                            <polygon points="510,420 540,340 560,420" />
                        </g>
                        {{-- Resort building --}}
                        <rect x="180" y="280" width="200" height="100" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.8" />
                        <polygon points="160,280 280,220 400,280" fill="#0f2415" stroke="#c8a84b"
                            stroke-width="0.8" />
                        {{-- Windows lit gold --}}
                        <rect x="196" y="296" width="20" height="16" fill="rgba(200,168,75,0.25)"
                            rx="1" />
                        <rect x="228" y="296" width="20" height="16" fill="rgba(200,168,75,0.25)"
                            rx="1" />
                        <rect x="312" y="296" width="20" height="16" fill="rgba(200,168,75,0.25)"
                            rx="1" />
                        <rect x="344" y="296" width="20" height="16" fill="rgba(200,168,75,0.25)"
                            rx="1" />

                        <rect x="264" y="340" width="32" height="40" fill="#0a1f0f" rx="2" />

                        <ellipse cx="280" cy="400" rx="90" ry="12"
                            fill="rgba(200,168,75,0.08)" />

                        <circle cx="440" cy="80" r="18" fill="none" stroke="#c8a84b"
                            stroke-width="0.8" opacity="0.4" class="gold-glow" />
                        <circle cx="440" cy="80" r="10" fill="rgba(200,168,75,0.1)"
                            class="gold-glow" />

                        <line x1="0" y1="280" x2="560" y2="280"
                            stroke="rgba(200,168,75,0.1)" stroke-width="1" />

                        <circle cx="100" cy="60" r="1.5" fill="#c8a84b" opacity="0.7"
                            class="star-twinkle" style="animation-delay:0s" />
                        <circle cx="200" cy="40" r="1" fill="#c8a84b" opacity="0.6"
                            class="star-twinkle" style="animation-delay:0.7s" />
                        <circle cx="380" cy="50" r="1.5" fill="#c8a84b" class="star-twinkle"
                            style="animation-delay:1.2s" />
                        <circle cx="460" cy="80" r="1" fill="#c8a84b" opacity="0.7"
                            class="star-twinkle" style="animation-delay:0.4s" />

                        <text x="280" y="170" text-anchor="middle" font-family="'Cormorant Garamond',serif"
                            font-size="22" fill="#c8a84b" opacity="0.35" letter-spacing="4">ANANDVAN</text>
                    </svg>
                </div>
                <div class="project-content">
                    <div class="project-number">01</div>
                    <p class="project-tag">Resort Living · Uttarakhand</p>
                    <h3 class="project-name">Anandvan<br>Resorts</h3>
                    <p class="project-desc">A serene resort-style development nestled in the lap of nature. Anandvan
                        Resorts offers luxury farmhouse plots designed for those who seek the perfect blend of comfort,
                        aesthetics, and tranquil mountain living.</p>
                    <div class="project-meta">
                        <div class="meta-item">
                            <div class="meta-label">Type</div>
                            <div class="meta-value">Resort Farmhouse</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Region</div>
                            <div class="meta-value">Uttarakhand</div>
                        </div>
                    </div>
                    <a href="https://summermultidevelopers.com/wp-content/uploads/2025/10/Anandvan-Brochure.pdf"
                        class="project-btn" target="_blank">
                        <span>Download Brochure</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Project 2: Royal Orchid Farms --}}
            <div class="project-entry" data-project="2">
                <div class="project-visual">
                    <svg class="proj-scene" viewBox="0 0 560 420" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="p2sky" x1="0" y1="0" x2="0"
                                y2="1">
                                <stop offset="0%" stop-color="#0a1f10" />
                                <stop offset="100%" stop-color="#1c3822" />
                            </linearGradient>
                        </defs>
                        <rect width="560" height="420" fill="url(#p2sky)" />

                        <ellipse cx="280" cy="440" rx="320" ry="100" fill="#0a1f0f" />

                        <g stroke="rgba(200,168,75,0.06)" stroke-width="1" fill="none">
                            <path d="M 60 380 Q 280 360 500 380" />
                            <path d="M 80 370 Q 280 348 480 370" />
                            <path d="M 100 360 Q 280 336 460 360" />
                        </g>
                        <g>
                            <circle cx="100" cy="350" r="18" fill="#1a3320"
                                stroke="rgba(200,168,75,0.1)" stroke-width="0.5" />
                            <rect x="97" y="368" width="6" height="15" fill="#0f2415" />
                            <circle cx="160" cy="345" r="22" fill="#1e3d26"
                                stroke="rgba(200,168,75,0.1)" stroke-width="0.5" />
                            <rect x="157" y="367" width="6" height="18" fill="#0f2415" />
                            <circle cx="230" cy="352" r="16" fill="#1a3320" />
                            <rect x="227" y="368" width="6" height="12" fill="#0f2415" />
                            <circle cx="330" cy="348" r="20" fill="#1e3d26" />
                            <rect x="327" y="368" width="6" height="16" fill="#0f2415" />
                            <circle cx="400" cy="350" r="18" fill="#1a3320" />
                            <rect x="397" y="368" width="6" height="15" fill="#0f2415" />
                            <circle cx="460" cy="344" r="22" fill="#1e3d26" />
                            <rect x="457" y="366" width="6" height="18" fill="#0f2415" />
                        </g>

                        <circle cx="100" cy="348" r="3" fill="rgba(200,168,75,0.4)" />
                        <circle cx="160" cy="342" r="3.5" fill="rgba(200,168,75,0.4)" />
                        <circle cx="330" cy="345" r="3" fill="rgba(200,168,75,0.4)" />
                        <circle cx="460" cy="341" r="3.5" fill="rgba(200,168,75,0.4)" />

                        <rect x="220" y="270" width="120" height="80" fill="#112214" stroke="#c8a84b"
                            stroke-width="1" />

                        <rect x="230" y="250" width="8" height="20" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.5" />
                        <rect x="250" y="250" width="8" height="20" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.5" />
                        <rect x="302" y="250" width="8" height="20" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.5" />
                        <rect x="322" y="250" width="8" height="20" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.5" />
                        <rect x="224" y="248" width="112" height="8" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.5" />

                        <polygon points="208,270 280,230 352,270" fill="#0a1f0f" stroke="#c8a84b"
                            stroke-width="0.8" />

                        <rect x="232" y="282" width="22" height="18" fill="rgba(200,168,75,0.2)"
                            rx="1" />
                        <rect x="306" y="282" width="22" height="18" fill="rgba(200,168,75,0.2)"
                            rx="1" />

                        <rect x="266" y="314" width="28" height="36" fill="#0a1f0f" rx="2" />

                        <circle cx="100" cy="60" r="1.5" fill="#c8a84b" opacity="0.6" />
                        <circle cx="460" cy="50" r="1" fill="#c8a84b" opacity="0.7" />
                        <circle cx="300" cy="90" r="1.2" fill="#c8a84b" opacity="0.5" />
                        <circle cx="180" cy="100" r="22" fill="none" stroke="#c8a84b"
                            stroke-width="0.8" opacity="0.3" />
                        <circle cx="180" cy="100" r="12" fill="rgba(200,168,75,0.08)" />
                        <text x="280" y="155" text-anchor="middle" font-family="'Cormorant Garamond',serif"
                            font-size="18" fill="#c8a84b" opacity="0.3" letter-spacing="3">ROYAL ORCHID</text>
                    </svg>
                </div>
                <div class="project-content">
                    <div class="project-number">02</div>
                    <p class="project-tag">Luxury Farmhouse · UP</p>
                    <h3 class="project-name">The Royal<br>Orchid Farms</h3>
                    <p class="project-desc">Where royalty meets rurality. The Royal Orchid Farms presents an exquisite
                        collection of farmhouse plots surrounded by lush orchards — a premium investment with an
                        unmatched lifestyle quotient.</p>
                    <div class="project-meta">
                        <div class="meta-item">
                            <div class="meta-label">Type</div>
                            <div class="meta-value">Luxury Farmhouse</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Region</div>
                            <div class="meta-value">Uttar Pradesh</div>
                        </div>
                    </div>
                    <a href="https://summermultidevelopers.com/wp-content/uploads/2025/10/BROUCHER.FINAL01-1.pdf"
                        class="project-btn" target="_blank">
                        Download Brochure
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Project 3: Alaknanda Farms --}}
            <div class="project-entry" data-project="3">
                <div class="project-visual">
                    <svg class="proj-scene" viewBox="0 0 560 420" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="p3sky" x1="0" y1="0" x2="0"
                                y2="1">
                                <stop offset="0%" stop-color="#081a0d" />
                                <stop offset="100%" stop-color="#162e1c" />
                            </linearGradient>
                            <linearGradient id="riverGrad" x1="0" y1="0" x2="0"
                                y2="1">
                                <stop offset="0%" stop-color="rgba(200,168,75,0.15)" />
                                <stop offset="100%" stop-color="rgba(200,168,75,0.03)" />
                            </linearGradient>
                        </defs>
                        <rect width="560" height="420" fill="url(#p3sky)" />

                        <ellipse cx="280" cy="400" rx="280" ry="40"
                            fill="url(#riverGrad)" />
                        <path d="M 0 390 Q 140 370 280 390 Q 420 410 560 390 L 560 420 L 0 420 Z"
                            fill="rgba(200,168,75,0.07)" />

                        <line x1="80" y1="400" x2="120" y2="398"
                            stroke="rgba(200,168,75,0.3)" stroke-width="1" />
                        <line x1="220" y1="395" x2="260" y2="393"
                            stroke="rgba(200,168,75,0.3)" stroke-width="1" />
                        <line x1="380" y1="402" x2="420" y2="400"
                            stroke="rgba(200,168,75,0.3)" stroke-width="1" />

                        <polygon points="0,420 60,200 160,420" fill="#0a1f0f" />
                        <polygon points="80,420 200,140 320,420" fill="#112214" opacity="0.95" />
                        <polygon points="240,420 370,100 490,420" fill="#0a1f0f" />
                        <polygon points="380,420 480,180 560,420" fill="#112214" opacity="0.8" />

                        <polygon points="200,140 220,170 180,170" fill="rgba(200,168,75,0.12)" />
                        <polygon points="370,100 392,135 348,135" fill="rgba(200,168,75,0.1)" />

                        <rect x="210" y="310" width="140" height="75" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.8" />
                        <polygon points="190,310 280,262 370,310" fill="#0f2415" stroke="#c8a84b"
                            stroke-width="0.8" />
                        <rect x="224" y="325" width="20" height="15" fill="rgba(200,168,75,0.2)"
                            rx="1" />
                        <rect x="316" y="325" width="20" height="15" fill="rgba(200,168,75,0.2)"
                            rx="1" />
                        <rect x="264" y="348" width="26" height="37" fill="#0a1f0f" rx="2" />

                        <rect x="264" y="392" width="26" height="15" fill="rgba(200,168,75,0.06)" />

                        <circle cx="80" cy="80" r="1.5" fill="#c8a84b" opacity="0.8" />
                        <circle cx="150" cy="55" r="1" fill="#c8a84b" opacity="0.6" />
                        <circle cx="430" cy="70" r="1.5" fill="#c8a84b" opacity="0.7" />
                        <circle cx="490" cy="45" r="1" fill="#c8a84b" opacity="0.6" />

                        <circle cx="100" cy="120" r="20" fill="none" stroke="#c8a84b"
                            stroke-width="0.8" opacity="0.35" />
                        <circle cx="100" cy="120" r="11" fill="rgba(200,168,75,0.1)" />
                        <text x="280" y="200" text-anchor="middle" font-family="'Cormorant Garamond',serif"
                            font-size="20" fill="#c8a84b" opacity="0.3" letter-spacing="4">ALAKNANDA</text>
                    </svg>
                </div>
                <div class="project-content">
                    <div class="project-number">03</div>
                    <p class="project-tag">River-Side Plots · Uttarakhand</p>
                    <h3 class="project-name">Alaknanda<br>Farms</h3>
                    <p class="project-desc">Named after the sacred Alaknanda river, this development places you at the
                        confluence of spiritual serenity and natural grandeur. Premium farmhouse plots with breathtaking
                        Himalayan views and river proximity.</p>
                    <div class="project-meta">
                        <div class="meta-item">
                            <div class="meta-label">Type</div>
                            <div class="meta-value">River-Side Farm</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Region</div>
                            <div class="meta-value">Uttarakhand</div>
                        </div>
                    </div>
                    <a href="https://summermultidevelopers.com/wp-content/uploads/2025/10/Alaknanda-Farms-Brochue.pdf"
                        class="project-btn" target="_blank">
                        Download Brochure
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Project 4: OAK Hill Gardens --}}
            <div class="project-entry" data-project="4">
                <div class="project-visual">
                    <svg class="proj-scene" viewBox="0 0 560 420" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="p4sky" x1="0" y1="0" x2="0"
                                y2="1">
                                <stop offset="0%" stop-color="#0b1f10" />
                                <stop offset="100%" stop-color="#183020" />
                            </linearGradient>
                        </defs>
                        <rect width="560" height="420" fill="url(#p4sky)" />

                        <ellipse cx="150" cy="420" rx="250" ry="90" fill="#0a1f0f" />
                        <ellipse cx="420" cy="430" rx="220" ry="80" fill="#112214" />

                        <g>

                            <ellipse cx="70" cy="310" rx="45" ry="35" fill="#1a3320" />
                            <rect x="66" y="345" width="8" height="40" fill="#0f2010" />
                            <ellipse cx="160" cy="295" rx="55" ry="40" fill="#1e3d26" />
                            <rect x="156" y="335" width="8" height="50" fill="#0f2010" />
                            <ellipse cx="390" cy="300" rx="50" ry="38" fill="#1a3320" />
                            <rect x="386" y="338" width="8" height="45" fill="#0f2010" />
                            <ellipse cx="490" cy="310" rx="45" ry="35" fill="#1e3d26" />
                            <rect x="486" y="345" width="8" height="40" fill="#0f2010" />

                            <ellipse cx="260" cy="330" rx="30" ry="24"
                                fill="#152a18" />
                            <rect x="256" y="354" width="6" height="28" fill="#0f2010" />
                            <ellipse cx="310" cy="322" rx="35" ry="28"
                                fill="#1a3320" />
                            <rect x="306" y="350" width="6" height="35" fill="#0f2010" />
                        </g>

                        <path d="M 220 420 Q 280 390 340 420" fill="none" stroke="rgba(200,168,75,0.15)"
                            stroke-width="6" />

                        <rect x="225" y="300" width="110" height="80" fill="#112214" stroke="#c8a84b"
                            stroke-width="0.8" />
                        <polygon points="210,300 280,255 350,300" fill="#0a1f0f" stroke="#c8a84b"
                            stroke-width="0.8" />

                        <rect x="295" y="248" width="10" height="22" fill="#0f2415" stroke="#c8a84b"
                            stroke-width="0.5" />

                        <rect x="237" y="315" width="20" height="16" fill="rgba(200,168,75,0.2)"
                            rx="1" />
                        <rect x="303" y="315" width="20" height="16" fill="rgba(200,168,75,0.2)"
                            rx="1" />

                        <rect x="264" y="342" width="24" height="38" fill="#081509" rx="12 12 0 0" />

                        <circle cx="200" cy="385" r="4" fill="rgba(200,168,75,0.3)" />
                        <circle cx="215" cy="390" r="3" fill="rgba(200,168,75,0.25)" />
                        <circle cx="355" cy="380" r="4" fill="rgba(200,168,75,0.3)" />
                        <circle cx="370" cy="388" r="3" fill="rgba(200,168,75,0.25)" />

                        <circle cx="100" cy="60" r="1.5" fill="#c8a84b" opacity="0.6" />
                        <circle cx="200" cy="80" r="1" fill="#c8a84b" opacity="0.5" />
                        <circle cx="400" cy="55" r="1.5" fill="#c8a84b" opacity="0.7" />
                        <circle cx="500" cy="75" r="1" fill="#c8a84b" opacity="0.6" />

                        <path d="M 450 90 A 22 22 0 1 1 450 134 A 14 14 0 1 0 450 90" fill="rgba(200,168,75,0.12)"
                            stroke="#c8a84b" stroke-width="0.5" opacity="0.4" />
                        <text x="280" y="175" text-anchor="middle" font-family="'Cormorant Garamond',serif"
                            font-size="18" fill="#c8a84b" opacity="0.3" letter-spacing="3">OAK HILL
                            GARDENS</text>
                    </svg>
                </div>
                <div class="project-content">
                    <div class="project-number">04</div>
                    <p class="project-tag">Garden Estates · Uttarakhand</p>
                    <h3 class="project-name">OAK Hill<br>Gardens</h3>
                    <p class="project-desc">Inspired by old-world garden estates, OAK Hill Gardens offers a rare
                        experience — lush manicured surroundings, towering oak canopies, and premium plots designed for
                        the discerning homeowner who values nature's grandeur.</p>
                    <div class="project-meta">
                        <div class="meta-item">
                            <div class="meta-label">Type</div>
                            <div class="meta-value">Garden Estate</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Region</div>
                            <div class="meta-value">Uttarakhand</div>
                        </div>
                    </div>
                    <a href="https://summermultidevelopers.com/wp-content/uploads/2025/11/Maple-Yards-Booklet.pdf"
                        class="project-btn" target="_blank">
                        Download Brochure
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Project 5: Shri Krishna Enclave --}}
            <div class="project-entry" data-project="5">
                <div class="project-visual">
                    <svg class="proj-scene" viewBox="0 0 560 420" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="p5sky" x1="0" y1="0" x2="0"
                                y2="1">
                                <stop offset="0%" stop-color="#0a1c0e" />
                                <stop offset="100%" stop-color="#1a3020" />
                            </linearGradient>
                            <radialGradient id="templeGlow" cx="50%" cy="50%" r="50%">
                                <stop offset="0%" stop-color="rgba(200,168,75,0.15)" />
                                <stop offset="100%" stop-color="transparent" />
                            </radialGradient>
                        </defs>
                        <rect width="560" height="420" fill="url(#p5sky)" />

                        <ellipse cx="280" cy="450" rx="300" ry="80" fill="#081509" />

                        <circle cx="280" cy="180" r="80" fill="none"
                            stroke="rgba(200,168,75,0.05)" stroke-width="2" />
                        <circle cx="280" cy="180" r="60" fill="none"
                            stroke="rgba(200,168,75,0.07)" stroke-width="1" />
                        <circle cx="280" cy="180" r="40" fill="url(#templeGlow)" />


                        <rect x="190" y="310" width="180" height="90" fill="#112214" stroke="#c8a84b"
                            stroke-width="0.8" />

                        <polygon points="260,200 280,140 300,200" fill="#0f2415" stroke="#c8a84b"
                            stroke-width="1" />
                        <polygon points="256,216 280,160 304,216" fill="#112214" stroke="#c8a84b"
                            stroke-width="0.8" />
                        <polygon points="250,232 280,185 310,232" fill="#0f2415" stroke="#c8a84b"
                            stroke-width="0.8" />
                        <polygon points="244,250 280,210 316,250" fill="#0a1f0f" stroke="#c8a84b"
                            stroke-width="0.8" />

                        <circle cx="280" cy="140" r="6" fill="#c8a84b" opacity="0.5" />
                        <rect x="277" y="110" width="6" height="30" fill="#c8a84b" opacity="0.3" />

                        <rect x="200" y="252" width="160" height="58" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.8" />

                        <rect x="208" y="252" width="8" height="58" fill="#112214" stroke="#c8a84b"
                            stroke-width="0.4" />
                        <rect x="240" y="252" width="8" height="58" fill="#112214" stroke="#c8a84b"
                            stroke-width="0.4" />
                        <rect x="304" y="252" width="8" height="58" fill="#112214" stroke="#c8a84b"
                            stroke-width="0.4" />
                        <rect x="344" y="252" width="8" height="58" fill="#112214" stroke="#c8a84b"
                            stroke-width="0.4" />

                        <rect x="264" y="270" width="32" height="40" fill="#0a1f0f" rx="16 16 0 0" />

                        <rect x="214" y="264" width="20" height="14" fill="rgba(200,168,75,0.15)"
                            rx="10 10 0 0" />
                        <rect x="326" y="264" width="20" height="14" fill="rgba(200,168,75,0.15)"
                            rx="10 10 0 0" />

                        <rect x="220" y="400" width="120" height="6" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.4" />
                        <rect x="230" y="406" width="100" height="6" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.4" />
                        <rect x="240" y="412" width="80" height="6" fill="#1a3320" stroke="#c8a84b"
                            stroke-width="0.4" />

                        <ellipse cx="280" cy="395" rx="50" ry="8"
                            fill="rgba(200,168,75,0.08)" />

                        <ellipse cx="100" cy="340" rx="35" ry="28" fill="#1a3320" />
                        <rect x="96" y="368" width="8" height="32" fill="#0f2010" />
                        <ellipse cx="460" cy="340" rx="35" ry="28" fill="#1a3320" />
                        <rect x="456" y="368" width="8" height="32" fill="#0f2010" />

                        <circle cx="100" cy="60" r="1.5" fill="#c8a84b" opacity="0.7" />
                        <circle cx="180" cy="40" r="1" fill="#c8a84b" opacity="0.6" />
                        <circle cx="420" cy="55" r="1.5" fill="#c8a84b" opacity="0.7" />
                        <circle cx="480" cy="80" r="1" fill="#c8a84b" />

                        <circle cx="200" cy="310" r="3" fill="rgba(200,168,75,0.5)" />
                        <circle cx="360" cy="310" r="3" fill="rgba(200,168,75,0.5)" />
                        <text x="280" y="88" text-anchor="middle" font-family="'Cormorant Garamond',serif"
                            font-size="16" fill="#c8a84b" opacity="0.35" letter-spacing="3">SHRI KRISHNA</text>
                    </svg>
                </div>
                <div class="project-content">
                    <div class="project-number">05</div>
                    <p class="project-tag">Residential Enclave · UP</p>
                    <h3 class="project-name">Shri Krishna<br>Enclave</h3>
                    <p class="project-desc">Blessed with divine inspiration, Shri Krishna Enclave is a thoughtfully
                        planned residential development in Uttar Pradesh. Offering legally verified plots in a
                        culturally rich, well-connected location for families seeking peace and prosperity.</p>
                    <div class="project-meta">
                        <div class="meta-item">
                            <div class="meta-label">Type</div>
                            <div class="meta-value">Residential Plots</div>
                        </div>
                        <div class="meta-item">
                            <div class="meta-label">Region</div>
                            <div class="meta-value">Uttar Pradesh</div>
                        </div>
                    </div>
                    <a href="https://summermultidevelopers.com/wp-content/uploads/2025/12/Shri-Krishna-Enclave-Brochure_2025-1.pdf"
                        class="project-btn" target="_blank">
                        Download Brochure
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
        {{-- projects-track --}}
    </section>

    {{-- JOURNEY --}}
    <section class="journey" id="journey">
        <div class="journey-header reveal">
            <p class="section-label" style="justify-content:center;">Our Journey</p>
            <h2 class="section-title">A Decade of <em>Landmarks</em></h2>
            <p
                style="font-size:13px; color:var(--text-dim); margin-top:16px; max-width:480px; margin-left:auto; margin-right:auto; line-height:1.8;">
                Founded with a vision to redefine real estate with honesty and professionalism, our story is one of
                trust earned and dreams delivered.</p>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-year">2013</div>
                    <div class="timeline-event">SMD Group Founded</div>
                    <p class="timeline-desc">Started with a single mission — to make land ownership simple, safe, and
                        profitable for every Indian family.</p>
                </div>
                <div class="timeline-dot"></div>
                <div class="timeline-empty"></div>
            </div>
            <div class="timeline-item">
                <div class="timeline-empty"></div>
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-year">2016</div>
                    <div class="timeline-event">First Project Launched</div>
                    <p class="timeline-desc">Successfully delivered our first land development project in Uttar
                        Pradesh, earning the trust of our early clients.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-year">2019</div>
                    <div class="timeline-event">Expanded to Uttarakhand</div>
                    <p class="timeline-desc">Entered the scenic Uttarakhand market, bringing premium farmhouse plots
                        to the foothills of the Himalayas.</p>
                </div>
                <div class="timeline-dot"></div>
                <div class="timeline-empty"></div>
            </div>
            <div class="timeline-item">
                <div class="timeline-empty"></div>
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-year">2022</div>
                    <div class="timeline-event">500+ Families Served</div>
                    <p class="timeline-desc">Crossed the milestone of 500 happy landowners — a testament to our
                        commitment to trust and quality.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-year">2025</div>
                    <div class="timeline-event">5 Landmark Projects</div>
                    <p class="timeline-desc">Launched Shri Krishna Enclave, completing our portfolio of 5 landmark
                        projects across two states.</p>
                </div>
                <div class="timeline-dot"></div>
                <div class="timeline-empty"></div>
            </div>
        </div>
    </section>
    {{-- CTA --}}
    <section class="cta" id="contact">
        <p class="section-label reveal" style="justify-content:center;">Start Your Journey</p>
        <h2 class="cta-subtitle reveal delay-1">Ready to Own<br><em>Your Dream Land?</em></h2>
        <p class="cta-desc reveal delay-2">Join hundreds of satisfied landowners across Uttar Pradesh & Uttarakhand.
            Let's find the perfect plot for your dream.</p>
        <div class="cta-actions reveal delay-3">
            <a href="tel:+918307050700" class="btn-gold">📞 Call Us Now</a>
            <a href="https://summermultidevelopers.com/lucky-draw/" class="cta-lucky">🎁 Enter Lucky Draw</a>
            <a href="mailto:info@summermultidevelopers.com" class="btn-outline">✉ Email Us</a>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer id="footer">
        <div class="footer-grid">
            <div>
                <div class="footer-brand-name">SMD GROUP</div>
                <p class="footer-tagline">Premium plots & luxury farmhouses across Delhi NCR, Uttarakhand and Uttar
                    Pradesh. Invest in land that grows with time and builds your future.</p>
                <div class="footer-socials">
                    <a href="https://www.facebook.com/share/1Fvk9VGm1x/" class="social-btn" title="Facebook">f</a>
                    <a href="https://www.instagram.com/smdgr_oup" class="social-btn" title="Instagram">in</a>
                    <a href="https://wa.me/8307050700" class="social-btn" title="WhatsApp">w</a>
                    <a href="https://youtube.com/@smd_group-smd" class="social-btn" title="YouTube">▶</a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="https://summermultidevelopers.com/lucky-draw/">Lucky Draw</a></li>
                    <li><a href="https://summermultidevelopers.com/blogs/">Blogs</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Our Projects</h4>
                <ul class="footer-links">
                    <li><a href="https://summermultidevelopers.com/wp-content/uploads/2025/10/Anandvan-Brochure.pdf">Anandvan
                            Resorts</a></li>
                    <li><a href="https://summermultidevelopers.com/wp-content/uploads/2025/10/BROUCHER.FINAL01-1.pdf">The
                            Royal Orchid Farms</a></li>
                    <li><a
                            href="https://summermultidevelopers.com/wp-content/uploads/2025/10/Alaknanda-Farms-Brochue.pdf">Alaknanda
                            Farms</a></li>
                    <li><a
                            href="https://summermultidevelopers.com/wp-content/uploads/2025/11/Maple-Yards-Booklet.pdf">OAK
                            Hill Gardens</a></li>
                    <li><a
                            href="https://summermultidevelopers.com/wp-content/uploads/2025/12/Shri-Krishna-Enclave-Brochure_2025-1.pdf">Shri
                            Krishna Enclave</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact Info</h4>
                <div class="footer-contact-item">
                    <span class="contact-icon">📞</span>
                    <div class="contact-text">+91 8307 050 700<br>+91 9548 051 243</div>
                </div>
                <div class="footer-contact-item">
                    <span class="contact-icon">✉</span>
                    <div class="contact-text">info@summermultidevelopers.com</div>
                </div>
                <div class="footer-contact-item">
                    <span class="contact-icon">📍</span>
                    <div class="contact-text">A-324, Pacific Business Park, Sahibabad, Ghaziabad, UP – 201010</div>
                </div>
                <div class="footer-contact-item">
                    <span class="contact-icon">📍</span>
                    <div class="contact-text">Gali No 5, NTPC Colony, Pondha, Dehradun, Uttarakhand – 248007</div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-copy">© 2026 SMD GROUP · All Rights Reserved · Powered by <a
                    href="https://astrologydivine.com/">Astrology Divine</a> </p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">RERA</a>
            </div>
        </div>
    </footer>
</body>
<script>
    // Navbar scroll
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
    });

    // Hamburger
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileClose = document.getElementById('mobileClose');
    hamburger.addEventListener('click', () => mobileMenu.classList.add('open'));
    mobileClose.addEventListener('click', () => mobileMenu.classList.remove('open'));
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => mobileMenu.classList.remove('open'));
    });

    // Intersection Observer — general reveal
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -60px 0px'
    });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => {
        revealObserver.observe(el);
    });

    // ===== PROJECT SCROLL MAGIC =====
    const projectEntries = document.querySelectorAll('.project-entry');
    const progressBar = document.getElementById('projectsProgress');
    const progressDots = document.querySelectorAll('.progress-dot');

    // Each project triggers independently — NO shared delay
    const projectObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                projectObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.18,
        rootMargin: '0px 0px -60px 0px'
    });

    projectEntries.forEach(entry => {
        entry.style.transitionDelay = '';
        projectObserver.observe(entry);
    });

    // Progress dots click → scroll to project
    progressDots.forEach(dot => {
        dot.addEventListener('click', () => {
            const idx = parseInt(dot.dataset.index);
            projectEntries[idx].scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        });
    });

    // Active gold highlight — whichever project is most centered in viewport
    function updateActiveProject() {
        const mid = window.innerHeight / 2;
        let closest = null,
            closestDist = Infinity,
            closestIdx = 0;

        projectEntries.forEach((p, i) => {
            const rect = p.getBoundingClientRect();
            const center = rect.top + rect.height / 2;
            const dist = Math.abs(center - mid);
            if (dist < closestDist) {
                closestDist = dist;
                closest = p;
                closestIdx = i;
            }
        });

        projectEntries.forEach(p => p.classList.remove('active-project'));
        progressDots.forEach(d => d.classList.remove('active'));

        if (closest && closestDist < window.innerHeight * 0.6) {
            closest.classList.add('active-project');
            progressDots[closestIdx]?.classList.add('active');
        }

        // Show/hide progress bar based on whether projects section is in view
        const section = document.getElementById('projects');
        if (section) {
            const r = section.getBoundingClientRect();
            const inView = r.top < window.innerHeight && r.bottom > 0;
            progressBar.classList.toggle('show', inView);
        }
    }
    window.addEventListener('scroll', updateActiveProject, {
        passive: true
    });
    updateActiveProject();

    // Timeline observer
    const timelineItems = document.querySelectorAll('.timeline-item');
    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                timelineObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3
    });
    timelineItems.forEach(item => timelineObserver.observe(item));

    // Stat counter animation
    function animateCounter(el, target, suffix = '') {
        const duration = 2000;
        const start = performance.now();
        const update = (time) => {
            const elapsed = time - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target) + (progress === 1 ? suffix : '');
            if (progress < 1) requestAnimationFrame(update);
            else el.textContent = target + suffix;
        };
        requestAnimationFrame(update);
    }

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const nums = entry.target.querySelectorAll('[data-target]');
                nums.forEach(el => {
                    const target = parseInt(el.dataset.target);
                    const suffix = target >= 100 ? '+' : (target >= 10 ? '+' : '');
                    animateCounter(el, target, suffix);
                });
                statsObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });
    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) statsObserver.observe(heroStats);
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
