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
<style>
    
/* ═══════════════════════════════════════════
   COLOR THEME — Deep Navy + Champagne Gold
═══════════════════════════════════════════ */
:root {
  --gold: #D4AF6A;
  --soft-gold: #E2C47E;
  --gold-dim: rgba(212,175,106,0.15);
  --gold-glow: rgba(212,175,106,0.06);

  /* Navy Accent */
  --navy: #0F2444;
  --navy-mid: #1A3A6B;
  --navy-light: #2756A8;
  --navy-pale: rgba(15,36,68,0.5);
  --navy-glow: rgba(39,86,168,0.08);

  --bg-deep: #05080F;
  --bg-dark: #080D18;
  --bg-card: rgba(212,175,106,0.03);
  --bg-card-hover: rgba(212,175,106,0.06);

  --text-bright: #EDE8DC;
  --text-mid: rgba(237,232,220,0.65);
  --text-dim: rgba(237,232,220,0.35);

  --border: rgba(212,175,106,0.12);
  --border-em: rgba(212,175,106,0.25);

  --font-display: 'Cinzel', serif;
  --font-title: 'Playfair Display', serif;
  --font-body: 'Poppins', sans-serif;
  --font-italic: 'Cormorant Garamond', serif;
}

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{
  background:var(--bg-deep);
  color:var(--text-bright);
  font-family:var(--font-body);
  font-weight:300;
  overflow-x:hidden;
  cursor:none;
}
a{text-decoration:none;color:inherit}
img{max-width:100%;display:block}
button{cursor:pointer;border:none;background:none;font-family:inherit}

/* ── SCROLLBAR ── */
::-webkit-scrollbar{width:4px}
::-webkit-scrollbar-track{background:var(--bg-deep)}
::-webkit-scrollbar-thumb{background:var(--gold);border-radius:2px}

/* ── CURSOR ── */
#cursor{
  position:fixed;width:10px;height:10px;
  background:var(--gold);border-radius:50%;
  pointer-events:none;z-index:9999;transform:translate(-50%,-50%);
  transition:width .2s,height .2s;
}
#cursor-ring{
  position:fixed;width:32px;height:32px;
  border:1px solid rgba(200,168,75,0.5);border-radius:50%;
  pointer-events:none;z-index:9998;transform:translate(-50%,-50%);
  transition:width .25s,height .25s;
}

/* ── PARTICLES ── */
#particles{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:0.7}

/* ── LOADER ── */
#loader{
  position:fixed;inset:0;z-index:9000;
  background:var(--bg-deep);
  display:flex;flex-direction:column;align-items:center;justify-content:center;gap:16px;
}
.loader-logo{font-family:var(--font-display);font-size:clamp(1.6rem,4vw,2.8rem);letter-spacing:0.35em;color:var(--gold)}
.loader-tagline{font-size:0.7rem;letter-spacing:0.25em;color:var(--text-dim);text-transform:uppercase}
.loader-bar-wrap{width:200px;height:1px;background:rgba(212,175,106,0.15);margin-top:20px;overflow:hidden}
.loader-bar{height:100%;width:0;background:linear-gradient(90deg,var(--navy-light),var(--gold));animation:loadBar 2s ease forwards}
@keyframes loadBar{to{width:100%}}

/* ── MOBILE MENU ── */
.mobile-menu{
  position:fixed;top:0;right:0;width:100%;height:100%;
  background:rgba(5,8,15,0.98);backdrop-filter:blur(20px);
  z-index:800;display:flex;flex-direction:column;
  opacity:0;pointer-events:none;transition:opacity .35s ease;
  overflow-y:auto;
}
.mobile-menu::before{
  content:'';position:absolute;inset:0;pointer-events:none;
  background:radial-gradient(ellipse 60% 45% at 85% 0%, rgba(212,175,106,0.10) 0%, transparent 60%),
             radial-gradient(ellipse 55% 40% at 10% 100%, rgba(39,86,168,0.14) 0%, transparent 60%);
}
.mobile-menu.open{opacity:1;pointer-events:all}
.mobile-menu-top{
  display:flex;align-items:center;justify-content:space-between;
  padding:22px 6%;position:relative;z-index:2;flex-shrink:0;
}
.mobile-menu-close{
  width:42px;height:42px;border:1px solid var(--border-em);border-radius:50%;
  display:flex;align-items:center;justify-content:center;cursor:pointer;
  color:var(--gold);transition:background .25s,transform .25s;flex-shrink:0;
}
.mobile-menu-close:hover{background:rgba(212,175,106,0.08);transform:rotate(90deg)}
.mobile-menu-close svg{width:18px;height:18px;fill:none;stroke:currentColor;stroke-width:1.8;stroke-linecap:round}
.mobile-menu-links{
  list-style:none;display:flex;flex-direction:column;
  padding:8px 8% 20px;position:relative;z-index:2;flex:1;
  justify-content:center;
}
.mobile-menu-links li{
  border-bottom:1px solid var(--border);
  opacity:0;transform:translateY(18px);
  transition:opacity .45s cubic-bezier(0.16,1,0.3,1),transform .45s cubic-bezier(0.16,1,0.3,1);
}
.mobile-menu.open .mobile-menu-links li{opacity:1;transform:translateY(0)}
.mobile-menu.open .mobile-menu-links li:nth-child(1){transition-delay:.08s}
.mobile-menu.open .mobile-menu-links li:nth-child(2){transition-delay:.13s}
.mobile-menu.open .mobile-menu-links li:nth-child(3){transition-delay:.18s}
.mobile-menu.open .mobile-menu-links li:nth-child(4){transition-delay:.23s}
.mobile-menu.open .mobile-menu-links li:nth-child(5){transition-delay:.28s}
.mobile-menu.open .mobile-menu-links li:nth-child(6){transition-delay:.33s}
.mobile-menu-links a{
  display:flex;align-items:baseline;gap:16px;
  padding:16px 2px;
  font-family:var(--font-title);font-size:1.5rem;font-weight:600;letter-spacing:0.01em;
  color:var(--text-bright);transition:.2s;
}
.mobile-menu-links a:active,.mobile-menu-links a:hover{color:var(--gold);gap:22px}
.mobile-menu-links .mm-num{
  font-family:var(--font-display);font-size:0.7rem;letter-spacing:0.08em;color:var(--gold);flex-shrink:0;
}
.mobile-menu-cta{
  margin:8px 8% 0;padding:15px;text-align:center;
  border:1px solid var(--gold);color:var(--gold);
  font-size:0.72rem;letter-spacing:0.18em;text-transform:uppercase;
  opacity:0;transform:translateY(18px);
  transition:opacity .45s cubic-bezier(0.16,1,0.3,1) .38s,transform .45s cubic-bezier(0.16,1,0.3,1) .38s,background .25s,color .25s;
}
.mobile-menu.open .mobile-menu-cta{opacity:1;transform:translateY(0)}
.mobile-menu-cta:active{background:var(--gold);color:#080C0B}
.mobile-menu-footer{
  padding:26px 8% 34px;position:relative;z-index:2;flex-shrink:0;
  border-top:1px solid var(--border);margin-top:28px;
  display:flex;flex-direction:column;gap:14px;
  opacity:0;transition:opacity .5s .42s;
}
.mobile-menu.open .mobile-menu-footer{opacity:1}
.mobile-menu-footer-row{display:flex;align-items:center;gap:12px;font-size:0.78rem;color:var(--text-dim)}
.mobile-menu-footer-row svg{width:15px;height:15px;flex-shrink:0;color:var(--gold);fill:none;stroke:currentColor;stroke-width:1.6}
.mobile-menu-socials{display:flex;gap:10px;margin-top:6px}
.mobile-menu-socials a{
  width:36px;height:36px;border:1px solid var(--border);border-radius:50%;
  display:flex;align-items:center;justify-content:center;color:var(--text-dim);
}
.mobile-menu-socials svg{width:15px;height:15px;fill:none;stroke:currentColor;stroke-width:1.6}
body.menu-open{overflow:hidden}

/* ── NAV ── */
#navbar{
  position:fixed;top:0;left:0;right:0;z-index:700;
  padding:22px 6%;
  display:flex;align-items:center;justify-content:space-between;
  transition:background .4s,padding .4s,box-shadow .4s;
}
#navbar.scrolled{
  background:rgba(5,8,15,0.96);backdrop-filter:blur(20px);
  padding:14px 6%;
  box-shadow:0 1px 0 var(--border);
}
.nav-logo{
  font-family:var(--font-display);font-size:1.25rem;letter-spacing:0.2em;color:var(--gold);
  display:flex;flex-direction:column;line-height:1;
}
.nav-logo span{font-size:0.45rem;letter-spacing:0.2em;color:var(--text-dim);margin-top:4px;font-family:var(--font-body)}
.nav-links{list-style:none;display:flex;align-items:center;gap:36px}
.nav-links li a{
  font-size:0.7rem;letter-spacing:0.18em;text-transform:uppercase;
  color:var(--text-mid);transition:.2s;font-weight:400;
}
.nav-links li a:hover{color:var(--gold)}
.nav-cta{
  padding:9px 22px !important;
  border:1px solid var(--gold) !important;color:var(--gold) !important;
  transition:background .25s,color .25s !important;
}
.nav-cta:hover{background:var(--gold) !important;color:#080C0B !important}
.hamburger{
  display:none;flex-direction:column;justify-content:center;align-items:center;
  gap:5px;cursor:pointer;z-index:810;width:38px;height:38px;
}
.hamburger span{display:block;width:24px;height:1px;background:var(--gold);transition:transform .3s,opacity .3s}
.hamburger.active span:nth-child(1){transform:translateY(6px) rotate(45deg)}
.hamburger.active span:nth-child(2){opacity:0}
.hamburger.active span:nth-child(3){transform:translateY(-6px) rotate(-45deg)}


/* ── SECTION COMMONS ── */
section{position:relative;z-index:1;padding:110px 6%}
.sep{height:1px;background:linear-gradient(90deg,transparent,var(--border),transparent);margin:0 6%;position:relative;z-index:1}
.section-eyebrow{
  font-size:0.65rem;letter-spacing:0.35em;text-transform:uppercase;
  color:var(--navy-light);margin-bottom:14px;font-weight:500;
}
.section-title{
  font-family:var(--font-title);font-size:clamp(2rem,4vw,3rem);
  font-weight:600;line-height:1.15;margin-bottom:20px;
}
.section-subtitle{
  font-family:var(--font-italic);font-size:1.05rem;font-style:italic;
  color:var(--text-dim);margin-top:6px;
}
.gold{color:var(--gold)}
.gold-divider{display:block;width:52px;height:1px;background:linear-gradient(90deg,var(--navy-light),var(--gold));margin-bottom:28px}

/* ── BUTTONS ── */
.btn-primary{
  display:inline-flex;align-items:center;
  padding:14px 34px;
  background:linear-gradient(135deg,var(--navy-mid),var(--navy-light));
  color:var(--text-bright);font-size:0.72rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:500;
  border:1px solid rgba(39,86,168,0.4);
  transition:.3s;overflow:hidden;position:relative;
}
.btn-primary span{position:relative;z-index:1}
.btn-primary::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(135deg,var(--gold),var(--soft-gold));
  opacity:0;transition:.4s;
}
.btn-primary:hover::before{opacity:1}
.btn-primary:hover{color:#05080F}
.btn-outline{
  display:inline-flex;align-items:center;
  padding:13px 33px;border:1px solid var(--border-em);
  color:var(--text-mid);font-size:0.72rem;letter-spacing:0.18em;text-transform:uppercase;font-weight:400;
  transition:.3s;
}
.btn-outline:hover{border-color:var(--gold);color:var(--gold)}

/* ═══════════════════════════════════════════
   main
═══════════════════════════════════════════ */
#main{
  min-height:100vh;display:flex;flex-direction:column;justify-content:center;
  padding:0 6%;position:relative;overflow:hidden;
}
.main-bg{
  position:absolute;inset:0;
  background:
    radial-gradient(ellipse 70% 60% at 65% 40%, rgba(27,58,107,0.35) 0%, transparent 60%),
    radial-gradient(ellipse 50% 50% at 15% 70%, rgba(212,175,106,0.06) 0%, transparent 55%),
    linear-gradient(160deg,#05080F 0%,#080D18 45%,#060A14 100%);
}
.main-grid{
  position:absolute;inset:0;
  background-image:
    linear-gradient(rgba(200,168,75,0.04) 1px,transparent 1px),
    linear-gradient(90deg,rgba(200,168,75,0.04) 1px,transparent 1px);
  background-size:80px 80px;
  mask-image:radial-gradient(ellipse 70% 70% at 50% 50%,black 0%,transparent 100%);
}
.main-vertical-line{
  position:absolute;top:0;bottom:0;left:50%;width:1px;
  background:linear-gradient(180deg,transparent,rgba(200,168,75,0.08),transparent);
  pointer-events:none;
}
.main-content{
  position:relative;z-index:2;max-width:780px;
  padding-top:120px;
}
.main-eyebrow{
  font-size:0.65rem;letter-spacing:0.4em;text-transform:uppercase;
  color:var(--navy-light);margin-bottom:22px;font-weight:500;
  display:inline-flex;align-items:center;gap:10px;
  opacity:0;transform:translateY(20px);
}
.main-eyebrow::before{content:'';display:inline-block;width:28px;height:1px;background:var(--navy-light)}
.main-title{
  font-family:var(--font-title);font-size:clamp(3rem,6.5vw,5.5rem);
  font-weight:600;line-height:1.08;
  display:flex;flex-direction:column;
  opacity:0;transform:translateY(30px);margin-bottom:22px;
}
.main-title .line{display:block}
.main-subtitle{
  font-family:var(--font-italic);font-size:clamp(1rem,2vw,1.35rem);
  font-style:italic;color:var(--text-mid);font-weight:300;
  margin-bottom:40px;opacity:0;transform:translateY(20px);
}
.main-actions{
  display:flex;flex-wrap:wrap;gap:16px;
  opacity:0;transform:translateY(20px);margin-bottom:72px;
}
.main-stats{
  display:flex;flex-wrap:wrap;gap:0;
  border-top:1px solid var(--border);padding-top:36px;
  opacity:0;transform:translateY(20px);
}
.main-stat{
  padding:0 48px 0 0;
  border-right:1px solid var(--border);
  margin-right:48px;
}
.main-stat:last-child{border-right:none;margin-right:0;padding-right:0}
.stat-num{
  font-family:var(--font-display);font-size:clamp(1.6rem,3vw,2.2rem);
  color:var(--gold);letter-spacing:0.04em;
}
.stat-label{font-size:0.65rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--text-dim);margin-top:4px}
.main-scroll{
  position:absolute;bottom:36px;left:6%;
  display:flex;align-items:center;gap:14px;
  font-size:0.6rem;letter-spacing:0.3em;text-transform:uppercase;color:var(--text-dim);
  opacity:0;
}
.main-scroll-line{width:40px;height:1px;background:var(--gold);animation:scrollPulse 2s ease infinite}
@keyframes scrollPulse{0%,100%{opacity:0.3}50%{opacity:1}}

/* main architectural illustration */
.main-illustration{
  position:absolute;right:0;top:50%;transform:translateY(-50%);
  width:42%;height:80%;z-index:1;opacity:0.85;
  pointer-events:none;
  mask-image:linear-gradient(90deg,transparent,black 25%,black 90%,transparent);
  -webkit-mask-image:linear-gradient(90deg,transparent,black 25%,black 90%,transparent);
}
.main-illustration img{width:100%;height:100%;object-fit:cover;border-radius:2px}

/* ═══════════════════════════════════════════
   ABOUT
═══════════════════════════════════════════ */
#about .about-inner{
  display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;max-width:1200px;margin:0 auto;
}
.about-image-collage{position:relative;height:520px}
.collage-main,.collage-secondary{
  position:absolute;border:1px solid var(--border);background:var(--bg-card);overflow:hidden;
}
.collage-main{top:0;left:0;width:80%;height:78%}
.collage-secondary{bottom:0;right:0;width:55%;height:50%}
.collage-img-placeholder{width:100%;height:100%;display:flex;align-items:center;justify-content:center}
.collage-img-placeholder img{width:100%;height:100%;object-fit:cover;display:block}
.collage-accent{
  position:absolute;bottom:20%;right:20%;
  width:110px;height:110px;border:1px solid var(--gold);
  background:var(--bg-deep);
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  font-family:var(--font-display);font-size:2rem;color:var(--gold);line-height:1;
}
.collage-accent-inner{display:flex;flex-direction:column;align-items:center;gap:6px}
.collage-accent-inner span{font-size:0.5rem;letter-spacing:0.15em;color:var(--text-dim);text-align:center;text-transform:uppercase;font-family:var(--font-body)}
.collage-accent sup{font-size:1rem;vertical-align:super}

.about-content{}
.about-text{font-size:0.88rem;line-height:1.9;color:var(--text-mid);margin-bottom:18px}
.about-timeline{margin-top:36px;display:flex;flex-direction:column;gap:24px}
.timeline-item{
  display:grid;grid-template-columns:60px 1px 1fr;gap:0 20px;align-items:start;
  opacity:0;transform:translateX(-20px);
}
.timeline-year{font-family:var(--font-display);font-size:0.75rem;letter-spacing:0.1em;color:var(--gold);padding-top:2px}
.timeline-dot{width:1px;background:linear-gradient(180deg,var(--navy-light),transparent);position:relative;min-height:50px}
.timeline-dot::before{content:'';position:absolute;top:4px;left:-3px;width:7px;height:7px;background:var(--navy-light);border-radius:50%}
.timeline-info h4{font-size:0.8rem;font-weight:500;letter-spacing:0.04em;margin-bottom:4px;color:var(--text-bright)}
.timeline-info p{font-size:0.75rem;line-height:1.6;color:var(--text-dim)}

/* ═══════════════════════════════════════════
   WHY
═══════════════════════════════════════════ */
#why{text-align:center}
.why-inner{max-width:1200px;margin:0 auto}
.why-header{margin-bottom:64px}
.why-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px}
.why-card{
  padding:40px 32px;background:var(--bg-card);border:1px solid var(--border);
  text-align:left;cursor:default;transition:border-color .3s,background .3s;
  transform-style:preserve-3d;position:relative;overflow:hidden;
}
.why-card::before{
  content:'';position:absolute;top:0;left:0;width:2px;height:0;
  background:linear-gradient(180deg,var(--navy-light),var(--gold));
  transition:height .4s;
}
.why-card:hover{border-color:rgba(200,168,75,0.25);background:var(--bg-card-hover)}
.why-card:hover::before{height:100%}
.why-icon{
  width:56px;height:56px;margin-bottom:20px;color:var(--navy-light);
  border-radius:6px;overflow:hidden;border:1px solid var(--border-em);
  box-shadow:0 4px 16px rgba(0,0,0,0.25);
}
.why-icon img{width:100%;height:100%;object-fit:cover;display:block}
.why-card h3{font-family:var(--font-title);font-size:1.05rem;font-weight:500;margin-bottom:12px}
.why-card p{font-size:0.78rem;line-height:1.8;color:var(--text-dim)}


/* ═══════════════════════════════════════════
   PROJECTS — Featured Properties (numbered editorial listing)
═══════════════════════════════════════════ */
#projects{background:var(--bg-deep)}
.pgrid-inner{max-width:1100px;margin:0 auto}
.pgrid-header{margin-bottom:56px;max-width:640px}
.pgrid-header p.section-subtitle{margin-top:14px}

.fprop-list{display:flex;flex-direction:column;position:relative}
.fprop-row{
  display:flex;gap:56px;align-items:center;
  padding:56px 6% 56px 0;
  cursor:pointer;
  position:sticky;top:96px;
  min-height:440px;
  background:var(--bg-deep);
  border-top:1px solid var(--border);
  box-shadow:0 -30px 50px -20px rgba(0,0,0,0.55);
}
.fprop-row:first-child{border-top:none;box-shadow:none}
.fprop-row:nth-child(even){flex-direction:row-reverse}

.fprop-media{
  position:relative;flex:0 0 380px;aspect-ratio:4/3;overflow:hidden;
  border:1px solid var(--border);
}
.fprop-media img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .7s cubic-bezier(0.16,1,0.3,1)}
.fprop-row:hover .fprop-media img{transform:scale(1.06)}
.fprop-media-corner{position:absolute;width:22px;height:22px;border-color:var(--gold);border-style:solid;z-index:2;opacity:0;transition:opacity .3s}
.fprop-media-corner.tl{top:12px;left:12px;border-width:1px 0 0 1px}
.fprop-media-corner.br{bottom:12px;right:12px;border-width:0 1px 1px 0}
.fprop-row:hover .fprop-media-corner{opacity:1}

.fprop-body{flex:1;display:flex;flex-direction:column;justify-content:center;min-width:0}
.fprop-num{
  font-family:var(--font-display);font-size:0.72rem;letter-spacing:0.3em;
  color:var(--gold);margin-bottom:14px;display:flex;align-items:center;gap:12px;
}
.fprop-num::after{content:'';flex:0 0 40px;height:1px;background:linear-gradient(90deg,var(--gold),transparent)}
.fprop-name{font-family:var(--font-title);font-size:clamp(1.5rem,2.6vw,2rem);font-weight:600;margin-bottom:20px;line-height:1.15}

.fprop-fields{display:flex;flex-wrap:wrap;gap:28px 40px;margin-bottom:22px;padding-bottom:22px;border-bottom:1px solid var(--border)}
.fprop-field{display:flex;flex-direction:column;gap:5px}
.fprop-field-label{font-size:0.6rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--text-dim)}
.fprop-field-value{font-size:0.85rem;color:var(--text-bright);font-weight:400}
.fprop-field-value.gold{font-family:var(--font-display);color:var(--gold);font-size:0.95rem;letter-spacing:0.03em}

.fprop-desc{font-size:0.85rem;line-height:1.85;color:var(--text-dim);max-width:560px;margin-bottom:26px}

.fprop-actions{display:flex;align-items:center;gap:16px;flex-wrap:wrap}
.fprop-pdf-badge{
  display:inline-flex;align-items:center;gap:8px;
  font-size:0.62rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--gold);
  padding:11px 20px;border:1px solid var(--border-em);
  transition:border-color .25s,background .25s;
}
.fprop-row:hover .fprop-pdf-badge{border-color:var(--gold);background:rgba(212,175,106,0.06)}
.fprop-pdf-badge svg{width:13px;height:13px;flex-shrink:0}
.fprop-cta{
  display:inline-flex;align-items:center;gap:8px;
  padding:11px 22px;border:1px solid transparent;
  font-size:0.62rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--text-mid);
  cursor:pointer;transition:color .25s;
}
.fprop-cta:hover{color:var(--gold)}
.fprop-cta svg{width:13px;height:13px;fill:none;stroke:currentColor;stroke-width:1.8;transition:transform .25s}
.fprop-cta:hover svg{transform:translateX(4px)}

.pgrid-footer{text-align:center;margin-top:56px}

@media(max-width:900px){
  .fprop-row,.fprop-row:nth-child(even){flex-direction:column;gap:28px;padding:32px 5% 32px 0;top:70px;min-height:auto}
  .fprop-media{flex:0 0 auto;width:100%;aspect-ratio:16/10}
  .fprop-fields{gap:20px 32px}
}

/* Arch scenes (kept for any remaining decorative use) */
.arch-scene{width:100%;height:100%;background:linear-gradient(170deg,#080D18 0%,#05080F 100%);display:flex;align-items:flex-end;justify-content:center}
.arch-h{display:flex;align-items:flex-end;justify-content:center;gap:6px;width:100%;height:100%;position:relative}
.arch-h span{background:linear-gradient(180deg,rgba(27,58,107,0.3),rgba(212,175,106,0.05));border:1px solid rgba(212,175,106,0.08)}
.arch-1 .arch-h span:nth-child(1){width:80px;height:50%}
.arch-1 .arch-h span:nth-child(2){width:120px;height:72%}
.arch-1 .arch-h span:nth-child(3){width:80px;height:45%}
.arch-2 .arch-h span{width:70px}
.arch-2 .arch-h span:nth-child(1){height:38%}
.arch-2 .arch-h span:nth-child(2){height:65%}
.arch-2 .arch-h span:nth-child(3){height:80%}
.arch-2 .arch-h span:nth-child(4){height:52%}
.arch-3 .arch-h span:nth-child(1){width:200px;height:68%}
.arch-3 .arch-h span:nth-child(2){width:140px;height:48%}
.arch-4 .arch-h span{width:55px}
.arch-4 .arch-h span:nth-child(1){height:28%}
.arch-4 .arch-h span:nth-child(2){height:52%}
.arch-4 .arch-h span:nth-child(3){height:76%}
.arch-4 .arch-h span:nth-child(4){height:48%}
.arch-4 .arch-h span:nth-child(5){height:32%}
.arch-5 .arch-h span:nth-child(1){width:110px;height:58%}
.arch-5 .arch-h span:nth-child(2){width:150px;height:82%}
.arch-5 .arch-h span:nth-child(3){width:110px;height:52%}
.arch-balcony{position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,transparent,rgba(212,175,106,0.3),transparent)}

/* ═══════════════════════════════════════════
   DIRECTOR — 3 Directors Layout
═══════════════════════════════════════════ */
#director{background:linear-gradient(180deg,var(--bg-deep),rgba(15,36,68,0.08),var(--bg-deep))}
.director-inner{max-width:1200px;margin:0 auto}
.director-header{text-align:center;margin-bottom:64px}
.directors-grid{
  display:grid;grid-template-columns:repeat(3,1fr);gap:2px;
}
.director-card{
  padding:44px 36px;background:var(--bg-card);border:1px solid var(--border);
  display:flex;flex-direction:column;align-items:center;text-align:center;
  position:relative;overflow:hidden;transition:border-color .3s;
}
.director-card:hover{border-color:rgba(212,175,106,0.25)}
.director-card::after{
  content:'';position:absolute;bottom:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,transparent,var(--navy-light),var(--gold),transparent);
  opacity:0;transition:.3s;
}
.director-card:hover::after{opacity:1}

/* Portrait */
.dir-portrait{
  width:130px;height:130px;border-radius:50%;
  border:1px solid var(--border-em);background:rgba(27,58,107,0.15);
  display:flex;align-items:center;justify-content:center;
  position:relative;margin-bottom:24px;overflow:hidden;
}
.dir-portrait::before{
  content:'';position:absolute;inset:0;border-radius:50%;
  background:radial-gradient(circle at 30% 30%,rgba(212,175,106,0.1),transparent 70%);
}
.dir-initials{
  font-family:var(--font-display);font-size:2rem;color:var(--gold);letter-spacing:0.05em;
  position:relative;z-index:1;
}
.dir-corner-ring{
  position:absolute;top:-5px;left:-5px;right:-5px;bottom:-5px;
  border-radius:50%;border:1px solid rgba(212,175,106,0.15);
}
.dir-name{font-family:var(--font-title);font-size:1.25rem;font-weight:600;margin-bottom:4px}
.dir-role{font-size:0.65rem;letter-spacing:0.18em;text-transform:uppercase;color:var(--navy-light);margin-bottom:20px;font-weight:500}
.dir-divider{width:36px;height:1px;background:linear-gradient(90deg,var(--navy-light),var(--gold));margin:0 auto 20px}
.dir-quote{
  font-family:var(--font-italic);font-size:0.9rem;font-style:italic;
  color:var(--text-mid);line-height:1.75;margin-bottom:20px;
}
.dir-bio{font-size:0.75rem;line-height:1.8;color:var(--text-dim);margin-bottom:24px}
.dir-creds{display:flex;flex-wrap:wrap;gap:8px;justify-content:center}
.dir-cred{
  padding:5px 12px;border:1px solid var(--border);
  font-size:0.6rem;letter-spacing:0.1em;text-transform:uppercase;color:var(--text-dim);
}
.dir-signature{
  font-family:'Cormorant Garamond',serif;font-size:1.5rem;font-style:italic;
  color:var(--gold);margin-bottom:12px;
}

/* ═══════════════════════════════════════════
   TESTIMONIALS
═══════════════════════════════════════════ */
#testimonials{}
.test-inner{max-width:1200px;margin:0 auto}
.test-header{text-align:center;margin-bottom:56px}
.test-carousel{overflow:hidden;position:relative}
.test-track{
  display:flex;gap:2px;
  transition:transform .5s cubic-bezier(0.25,1,0.5,1);
}
.test-card{
  min-width:calc(33.333% - 2px);flex-shrink:0;
  padding:40px 32px;background:var(--bg-card);border:1px solid var(--border);
  position:relative;
}
.test-badge{
  display:inline-block;padding:4px 12px;background:rgba(27,58,107,0.2);
  border:1px solid rgba(27,58,107,0.4);
  font-size:0.6rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--navy-light);
  margin-bottom:20px;
}
.test-quote-icon{
  font-family:var(--font-title);font-size:5rem;line-height:0;
  color:rgba(212,175,106,0.1);position:absolute;top:36px;right:28px;
}
.test-stars{display:flex;gap:4px;margin-bottom:16px}
.test-stars svg{width:14px;height:14px;fill:var(--gold);stroke:none}
.test-text{font-size:0.82rem;line-height:1.85;color:var(--text-mid);margin-bottom:28px;font-family:var(--font-italic);font-style:italic;font-size:1rem}
.test-author{display:flex;align-items:center;gap:14px}
.test-avatar{
  width:44px;height:44px;border-radius:50%;
  background:linear-gradient(135deg,var(--navy-mid),rgba(212,175,106,0.3));
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-display);font-size:0.75rem;color:var(--text-bright);flex-shrink:0;
  overflow:hidden;border:1px solid var(--border-em);
}
.test-avatar img{width:100%;height:100%;object-fit:cover;display:block}
.test-name{font-size:0.82rem;font-weight:500;margin-bottom:2px}
.test-role{font-size:0.67rem;color:var(--text-dim);letter-spacing:0.06em}
.test-controls{
  display:flex;align-items:center;justify-content:center;gap:10px;margin-top:36px;
}
.test-dot{
  width:20px;height:1px;background:var(--border-em);cursor:pointer;transition:.3s;
}
.test-dot.active{background:var(--gold);width:40px}
.test-arrows{display:flex;gap:8px;margin-left:20px}
.test-arrow{
  width:38px;height:38px;border:1px solid var(--border);
  display:flex;align-items:center;justify-content:center;cursor:pointer;
  transition:.2s;color:var(--text-mid);
}
.test-arrow:hover{border-color:var(--gold);color:var(--gold)}
.test-arrow svg{width:16px;height:16px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}

/* ═══════════════════════════════════════════
   INVESTMENT
═══════════════════════════════════════════ */
#investment{background:linear-gradient(135deg,rgba(27,58,107,0.06),transparent)}
.inv-inner{max-width:1200px;margin:0 auto}
.inv-grid{display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:center}
.inv-stats-grid{display:grid;grid-template-columns:1fr 1fr;gap:2px}
.inv-stat-card{padding:36px 28px;background:var(--bg-card);border:1px solid var(--border)}
.inv-big-num{font-family:var(--font-display);font-size:2.8rem;color:var(--gold);line-height:1}
.inv-big-suffix{font-size:1.6rem}
.inv-stat-label{font-size:0.65rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--text-dim);margin:10px 0}
.inv-bar{height:1px;background:var(--border);position:relative;overflow:hidden}
.inv-bar-fill{height:100%;width:0;background:linear-gradient(90deg,var(--navy-light),var(--gold));transition:width 1.5s cubic-bezier(0.25,1,0.5,1)}
.inv-features{display:flex;flex-direction:column;gap:24px}
.inv-feature{display:flex;gap:18px;align-items:flex-start}
.inv-feature-icon{width:38px;height:38px;flex-shrink:0;color:var(--navy-light)}
.inv-feature-icon svg{width:100%;height:100%;fill:none;stroke:currentColor;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.inv-feature-text h4{font-size:0.82rem;font-weight:500;margin-bottom:4px}
.inv-feature-text p{font-size:0.75rem;color:var(--text-dim);line-height:1.7}

/* ═══════════════════════════════════════════
   GALLERY
═══════════════════════════════════════════ */
#gallery{}
.gallery-inner{max-width:1200px;margin:0 auto}
.gallery-header{text-align:center;margin-bottom:56px}
.gallery-masonry{
  columns:4;column-gap:2px;
}
.gallery-item{
  break-inside:avoid;margin-bottom:2px;
  position:relative;overflow:hidden;cursor:pointer;display:block;
}
.g-block{width:100%;display:block}
.gallery-item-overlay{
  position:absolute;inset:0;background:rgba(27,58,107,0.35);
  display:flex;align-items:center;justify-content:center;
  opacity:0;transition:.3s;
}
.gallery-item:hover .gallery-item-overlay{opacity:1}
.gallery-item-overlay svg{width:28px;height:28px;fill:none;stroke:rgba(240,237,228,0.8);stroke-width:1.5}

/* ═══════════════════════════════════════════
   CONTACT
═══════════════════════════════════════════ */
#contact{}
.contact-inner{display:grid;grid-template-columns:1fr 1fr;gap:80px;max-width:1200px;margin:0 auto;align-items:start}
.contact-info-cards{display:flex;flex-direction:column;gap:16px;margin:32px 0}
.contact-info-card{
  display:flex;align-items:center;gap:16px;
  padding:18px 20px;background:var(--bg-card);border:1px solid var(--border);
  transition:border-color .2s;opacity:0;transform:translateX(-20px);
}
.contact-info-card:hover{border-color:var(--border-em)}
.contact-icon{width:36px;height:36px;color:var(--emerald-light);flex-shrink:0}
.contact-icon svg{width:100%;height:100%;fill:none;stroke:currentColor;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.contact-info-card h4{font-size:0.65rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-dim);margin-bottom:3px;font-weight:400}
.contact-info-card p{font-size:0.8rem;color:var(--text-bright)}
.contact-map{
  height:140px;border:1px solid var(--border);background:var(--bg-card);
  position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden;
}
.map-pin{
  width:10px;height:10px;background:var(--gold);border-radius:50%;
  box-shadow:0 0 0 6px rgba(200,168,75,0.15);animation:mapPulse 2s infinite;
}
@keyframes mapPulse{0%,100%{box-shadow:0 0 0 6px rgba(200,168,75,0.15)}50%{box-shadow:0 0 0 14px rgba(200,168,75,0.05)}}
.map-label{position:absolute;bottom:14px;font-size:0.6rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--text-dim)}

/* Form */
.contact-form{display:flex;flex-direction:column;gap:16px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.form-group{position:relative}
.form-group input,
.form-group select,
.form-group textarea{
  width:100%;padding:16px;
  background:var(--bg-card);border:1px solid var(--border);
  color:var(--text-bright);font-family:var(--font-body);font-size:0.8rem;font-weight:300;
  transition:border-color .2s;outline:none;appearance:none;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{border-color:rgba(30,107,85,0.5)}
.form-group textarea{min-height:110px;resize:none}
.form-group select option{background:var(--bg-dark)}
.form-label{
  position:absolute;left:16px;top:16px;
  font-size:0.75rem;color:var(--text-dim);pointer-events:none;
  transition:top .2s,font-size .2s,color .2s;
}
.form-group input:not(:placeholder-shown)~.form-label,
.form-group input:focus~.form-label,
.form-group textarea:not(:placeholder-shown)~.form-label,
.form-group textarea:focus~.form-label{
  top:6px;font-size:0.6rem;color:var(--emerald-light);
}
.form-submit{
  padding:16px;
  background:linear-gradient(135deg,var(--navy-mid),var(--navy-light));
  border:none;color:var(--text-bright);
  font-family:var(--font-body);font-size:0.7rem;letter-spacing:0.2em;text-transform:uppercase;font-weight:500;
  cursor:pointer;transition:.3s;
}
.form-submit:hover{background:linear-gradient(135deg,var(--gold),var(--soft-gold));color:#05080F}

/* ═══════════════════════════════════════════
   LIGHTBOX
═══════════════════════════════════════════ */
#lightbox{
  position:fixed;inset:0;z-index:2000;background:rgba(8,12,11,0.97);
  display:flex;align-items:center;justify-content:center;
  opacity:0;pointer-events:none;transition:.3s;
}
#lightbox.open{opacity:1;pointer-events:all}
.lightbox-close{
  position:absolute;top:28px;right:32px;
  font-size:1.5rem;color:var(--text-dim);cursor:pointer;
  transition:.2s;
}
.lightbox-close:hover{color:var(--gold)}
.lightbox-content{display:flex;align-items:center;justify-content:center;width:80%;max-width:700px;border:1px solid var(--border)}

/* ═══════════════════════════════════════════
   WHATSAPP FLOATING BUTTON
═══════════════════════════════════════════ */
#whatsappBtn{
  position:fixed;bottom:26px;right:26px;z-index:900;
  width:58px;height:58px;border-radius:50%;
  background:#25D366;color:#fff;
  display:flex;align-items:center;justify-content:center;
  box-shadow:0 6px 24px rgba(0,0,0,0.35);
  transition:transform .25s ease;
}
#whatsappBtn:hover{transform:scale(1.08)}
#whatsappBtn svg{width:30px;height:30px;position:relative;z-index:2}
.wa-ring{
  position:absolute;inset:0;border-radius:50%;
  background:#25D366;opacity:0.55;
  animation:waPulse 2.2s ease-out infinite;
}
@keyframes waPulse{
  0%{transform:scale(1);opacity:0.55}
  100%{transform:scale(1.9);opacity:0}
}
.wa-tooltip{
  position:absolute;right:70px;top:50%;transform:translateY(-50%);
  background:var(--bg-dark);border:1px solid var(--border-em);color:var(--text-bright);
  padding:8px 14px;font-size:0.72rem;letter-spacing:0.03em;white-space:nowrap;
  opacity:0;pointer-events:none;transition:opacity .25s,right .25s;
  font-family:var(--font-body);
}
#whatsappBtn:hover .wa-tooltip{opacity:1;right:76px}

@media(max-width:768px){
  #whatsappBtn{bottom:18px;right:18px;width:52px;height:52px}
  #whatsappBtn svg{width:26px;height:26px}
  .wa-tooltip{display:none}
}

/* ═══════════════════════════════════════════
   FOOTER
═══════════════════════════════════════════ */
footer{
  padding:80px 6% 32px;
  border-top:1px solid var(--border);
  position:relative;z-index:1;
}
.footer-inner{
  display:grid;grid-template-columns:2fr 1fr 1fr 1.5fr;gap:56px;margin-bottom:56px;
}
.footer-brand p{font-size:0.78rem;line-height:1.8;color:var(--text-dim);margin-top:18px;max-width:280px}
.footer-social{display:flex;gap:12px;margin-top:24px}
.social-icon{
  width:36px;height:36px;border:1px solid var(--border);
  display:flex;align-items:center;justify-content:center;
  color:var(--text-dim);cursor:pointer;transition:.2s;
}
.social-icon:hover{border-color:var(--gold);color:var(--gold)}
.social-icon svg{width:16px;height:16px;fill:none;stroke:currentColor;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.footer-col h4{font-family:var(--font-display);font-size:0.65rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);margin-bottom:22px}
.footer-col ul{list-style:none;display:flex;flex-direction:column;gap:11px}
.footer-col li a{font-size:0.75rem;color:var(--text-dim);transition:.2s;letter-spacing:0.04em}
.footer-col li a:hover{color:var(--text-bright)}
.footer-newsletter p{font-size:0.75rem;line-height:1.7;color:var(--text-dim);margin-bottom:18px}
.newsletter-input{display:flex}
.newsletter-input input{
  flex:1;padding:11px 14px;background:var(--bg-card);border:1px solid var(--border);
  color:var(--text-bright);font-family:var(--font-body);font-size:0.75rem;outline:none;
}
.newsletter-input button{
  padding:11px 16px;background:linear-gradient(135deg,var(--navy-mid),var(--navy-light));
  border:none;color:white;cursor:pointer;
}
.newsletter-input button svg{width:16px;height:16px;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.footer-bottom{
  border-top:1px solid var(--border);padding-top:28px;
  display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px;
}
.footer-bottom p{font-size:0.68rem;color:var(--text-dim);letter-spacing:0.06em}
.footer-bottom a{color:var(--text-dim);transition:.2s}
.footer-bottom a:hover{color:var(--gold)}

/* ═══════════════════════════════════════════
   MOBILE RESPONSIVE
═══════════════════════════════════════════ */
@media(max-width:1024px){
  .why-grid{grid-template-columns:repeat(2,1fr)}
  .directors-grid{grid-template-columns:1fr 1fr}
  .directors-grid .director-card:last-child{grid-column:1/-1;max-width:480px;margin:0 auto}
  .footer-inner{grid-template-columns:1fr 1fr;gap:36px}
  .gallery-masonry{columns:3}
  .inv-grid{grid-template-columns:1fr}
  .pgrid{grid-template-columns:repeat(2,1fr)}
}

@media(max-width:768px){
  /* Nav */
  #cursor,#cursor-ring{display:none}
  body{cursor:auto}
  .nav-links{display:none}
  .hamburger{display:flex}
  #navbar{padding:18px 5%}
  #navbar.scrolled{padding:12px 5%}

  /* main */
  section{padding:80px 5%}
  #main{padding:0 5%;min-height:100vh}
  .main-content{padding-top:100px;padding-bottom:100px}
  .main-title{font-size:clamp(2.2rem,8vw,3.5rem)}
  .main-stats{gap:24px 0}
  .main-stat{
    min-width:45%;padding-right:0;margin-right:0;
    border-right:none;border-bottom:1px solid var(--border);
    padding-bottom:16px;margin-bottom:16px;
  }
  .main-stat:last-child{border-bottom:none;margin-bottom:0}
  .main-illustration{display:none}
  .main-scroll{display:none}

  /* About */
  #about .about-inner{grid-template-columns:1fr;gap:48px}
  .about-image-collage{height:320px}

  /* Why */
  .why-grid{grid-template-columns:1fr}

  /* Projects — mobile stacking handled by .fprop-row media query above */

  /* Director */
  .directors-grid{grid-template-columns:1fr}
  .directors-grid .director-card:last-child{grid-column:auto;max-width:100%;margin:0}
  .director-card{padding:36px 24px}

  /* Testimonials */
  .test-card{min-width:calc(100% - 2px)}

  /* Gallery */
  .gallery-masonry{columns:2}

  /* Investment */
  .inv-grid{grid-template-columns:1fr}
  .inv-stats-grid{grid-template-columns:1fr 1fr}

  /* Contact */
  .contact-inner{grid-template-columns:1fr;gap:48px}
  .form-row{grid-template-columns:1fr}

  /* Footer */
  .footer-inner{grid-template-columns:1fr;gap:32px}
  .footer-bottom{flex-direction:column;text-align:center;gap:8px}
}

@media(max-width:480px){
  .main-title{font-size:clamp(2rem,9vw,2.8rem)}
  .gallery-masonry{columns:1}
  .inv-stats-grid{grid-template-columns:1fr}
  .main-actions{flex-direction:column;align-items:flex-start}
  .btn-primary,.btn-outline{width:100%;justify-content:center}
  .main-stat{min-width:100%}
  .collage-main,.collage-secondary,.about-image-collage{display:none}
}


/* ═══════════════════════════════════════════
   ABOUT PAGE — extra sections
═══════════════════════════════════════════ */
.about-hero-mini{padding-top:170px;padding-bottom:64px}
.about-breadcrumb{
  font-size:0.66rem;letter-spacing:0.2em;text-transform:uppercase;color:var(--text-dim);
  margin-bottom:22px;display:flex;align-items:center;gap:10px;
}
.about-breadcrumb a{color:var(--text-dim);transition:.2s}
.about-breadcrumb a:hover{color:var(--gold)}
.about-breadcrumb .sep{color:var(--border-em)}
.about-hero-mini .section-title{max-width:760px}
.about-hero-mini .section-subtitle{max-width:640px;margin-top:18px;display:block}

.value-grid{
  display:grid;grid-template-columns:repeat(5,1fr);gap:2px;
  background:var(--border);border:1px solid var(--border);
}
.value-card{
  background:var(--bg-card);padding:34px 22px;text-align:center;
  position:relative;overflow:hidden;transition:background .3s;
}
.value-card::before{
  content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,var(--navy-light),var(--gold));
  transform:scaleX(0);transition:transform .4s;transform-origin:left;
}
.value-card:hover{background:var(--bg-card-hover)}
.value-card:hover::before{transform:scaleX(1)}
.value-icon{width:36px;height:36px;margin:0 auto 18px;color:var(--gold)}
.value-icon svg{width:100%;height:100%;fill:none;stroke:currentColor;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.value-card h4{font-family:var(--font-title);font-size:0.92rem;font-weight:600;margin-bottom:10px}
.value-card p{font-size:0.72rem;line-height:1.7;color:var(--text-dim)}

.journey-inner{display:grid;grid-template-columns:1.15fr 0.85fr;gap:64px;align-items:start;max-width:1200px;margin:0 auto}
.journey-text p{font-size:0.88rem;line-height:1.95;color:var(--text-mid);margin-bottom:20px}
.journey-highlights{display:flex;flex-direction:column;gap:20px}
.journey-highlight{padding:32px 28px;background:var(--bg-card);border:1px solid var(--border);position:relative}
.journey-highlight-icon{width:32px;height:32px;color:var(--gold);margin-bottom:16px}
.journey-highlight-icon svg{width:100%;height:100%;fill:none;stroke:currentColor;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.journey-highlight p{font-family:var(--font-italic);font-size:1.05rem;font-style:italic;color:var(--text-bright);line-height:1.65}

.about-cta{
  text-align:center;max-width:720px;margin:0 auto;
  padding:64px 40px;border:1px solid var(--border-em);position:relative;
  background:linear-gradient(135deg,rgba(27,58,107,0.08),rgba(212,175,106,0.04));
}
.about-cta p{font-size:0.88rem;color:var(--text-dim);line-height:1.85;margin-bottom:32px;max-width:520px;margin-left:auto;margin-right:auto}
.about-cta .btn-primary{margin:0 auto}

@media(max-width:1024px){
  .value-grid{grid-template-columns:repeat(3,1fr)}
}
@media(max-width:768px){
  .about-hero-mini{padding-top:140px;padding-bottom:44px}
  .value-grid{grid-template-columns:repeat(2,1fr)}
  .journey-inner{grid-template-columns:1fr;gap:36px}
  .about-cta{padding:48px 24px}
}
@media(max-width:480px){
  .value-grid{grid-template-columns:1fr}
}


/* ═══════════════════════════════════════════
   CONTACT PAGE — extra sections
═══════════════════════════════════════════ */
.trust-badges{display:grid;grid-template-columns:1fr 1fr;gap:2px;max-width:1200px;margin:0 auto;background:var(--border);border:1px solid var(--border)}
.trust-badge{background:var(--bg-card);padding:32px 30px;display:flex;align-items:center;gap:20px}
.trust-badge-icon{width:44px;height:44px;flex-shrink:0;color:var(--gold)}
.trust-badge-icon svg{width:100%;height:100%;fill:none;stroke:currentColor;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round}
.trust-badge h4{font-family:var(--font-title);font-size:1rem;font-weight:600;margin-bottom:4px}
.trust-badge p{font-size:0.76rem;color:var(--text-dim);line-height:1.6}

.char-counter{position:absolute;right:14px;bottom:10px;font-size:0.62rem;color:var(--text-dim);letter-spacing:0.04em;pointer-events:none}

@media(max-width:768px){
  .trust-badges{grid-template-columns:1fr}
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
    <!-- MOBILE MENU -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-top">
            <div class="nav-logo"><img src="./assets/img/logo/SMD-Logos-6-251x300.webp" alt="SMD Group Logo"
                    width="36" height="auto" /></div>
            <div class="mobile-menu-close" onclick="closeMobileMenu()" aria-label="Close menu">
                <svg viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
            </div>
        </div>
        <ul class="mobile-menu-links">
            <li><a href="index.html"><span class="mm-num">01</span>Home</a></li>
            <li><a href="about-us.html"><span class="mm-num">02</span>About Us</a></li>
            <li><a href="index.html#projects"><span class="mm-num">03</span>Projects</a></li>
            <li><a href="index.html#director"><span class="mm-num">04</span>Directors</a></li>
            <li><a href="index.html#testimonials"><span class="mm-num">05</span>Reviews</a></li>
            <li><a href="index.html#gallery"><span class="mm-num">06</span>Gallery</a></li>
        </ul>
        <a href="contact-us.html" class="mobile-menu-cta" style="background:var(--gold);color:#080C0B">Contact Us</a>
        <div class="mobile-menu-footer">
            <div class="mobile-menu-footer-row">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                +91 8307 050 700
            </div>
            <div class="mobile-menu-footer-row">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                info@summermultidevelopers.com
            </div>
            <div class="mobile-menu-socials">
                <a href="https://www.facebook.com/share/1Fvk9VGm1x/" target="_blank" rel="noopener"
                    aria-label="Facebook"><svg viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                    </svg></a>
                <a href="https://www.instagram.com/smdgr_oup" target="_blank" rel="noopener" aria-label="Instagram"><svg
                        viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                    </svg></a>
                <a href="https://wa.me/918307050700" target="_blank" rel="noopener" aria-label="WhatsApp"><svg
                        viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                        <path
                            d="M12.001 2C6.478 2 2 6.478 2 12c0 1.836.494 3.578 1.435 5.098L2 22l5.048-1.415A9.945 9.945 0 0012.001 22C17.523 22 22 17.522 22 12S17.523 2 12.001 2zm0 18.083c-1.605 0-3.15-.425-4.5-1.23l-.323-.19-3.14.88.86-3.121-.21-.334A8.062 8.062 0 013.94 12c0-4.442 3.617-8.058 8.062-8.058S20.06 7.558 20.06 12s-3.617 8.083-8.06 8.083z" />
                    </svg></a>
            </div>
        </div>
    </div>

    <!-- NAV -->
    <nav id="navbar">
        <a href="index.html" class="nav-logo"><img src="./assets/img/logo/SMD-Logos-6-251x300.webp" alt="SMD Group Logo"
                width="40" height="auto" /></a>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="index.html#projects">Projects</a></li>
            <li><a href="index.html#director">Directors</a></li>
            <li><a href="index.html#testimonials">Reviews</a></li>
            <li><a href="index.html#gallery">Gallery</a></li>
            <li><a href="contact-us.html" class="nav-cta"
                    style="border-color:var(--gold);background:var(--gold);color:#080C0B">Contact Us</a></li>
        </ul>
        <div class="hamburger" id="hamburger" onclick="toggleMobileMenu()" aria-label="Open menu">
            <span></span><span></span><span></span>
        </div>
    </nav>

    <!-- ═══ CONTACT HERO ═══ -->
    <section id="contact-hero" class="about-hero-mini">
        <div style="max-width:1200px;margin:0 auto">
            <p class="about-breadcrumb"><a href="index.html">Home</a><span class="sep">/</span>Contact Us</p>
            <p class="section-eyebrow">Get In Touch</p>
            <h1 class="section-title">Let's Turn Your Land <span class="gold">Investment Dream</span> into Reality
            </h1>
            <span class="gold-divider"></span>
            <p class="section-subtitle">Whether you want to book a site visit, explore our latest projects, or
                get more details — our team is here to assist you every step of the way.</p>
        </div>
    </section>

    <!-- ═══ INTRO ═══ -->
    <section id="contact-intro" style="padding-top:0">
        <div class="about-inner">
            <div class="about-image-collage" data-reveal="left">
                <div class="collage-main">
                    <div class="collage-img-placeholder">
                        <img src="./assets/img/contact-page/contact-main.jpg" alt="SMD Group team" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="about-content" data-reveal="right">
                <p class="section-eyebrow">Let's Talk</p>
                <h2 class="section-title">Let's Build Your <span class="gold">Dream</span> Together</h2>
                <span class="gold-divider"></span>
                <p class="about-text">At SMD Group, we believe great relationships start with clear
                    communication. Our property experts are always available to help you with project
                    information, pricing, legal details, and investment guidance.</p>
                <p class="about-text">Reach out to us today and take your first step toward owning your dream
                    land or farmhouse plot in Uttar Pradesh &amp; Uttarakhand.</p>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ GET IN TOUCH + FORM ═══ -->
    <section id="contact-main">
        <div class="contact-inner">
            <div class="contact-left" data-reveal="left">
                <p class="section-eyebrow">Get In Touch With Us</p>
                <h2 class="section-title">Corporate <span class="gold">Office</span></h2>
                <span class="gold-divider"></span>
                <div class="contact-info-cards">
                    <div class="contact-info-card">
                        <div class="contact-icon"><svg viewBox="0 0 24 24">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg></div>
                        <div>
                            <h4>Corporate Office</h4>
                            <p>A-324, Pacific Business Park, Sahibabad, Ghaziabad, Uttar Pradesh-201010</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon"><svg viewBox="0 0 24 24">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg></div>
                        <div>
                            <h4>Regional Office</h4>
                            <p>Gali No 5, NTPC Colony, Pondha, Dehradun, Uttarakhand – 248007</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="contact-icon"><svg viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg></div>
                        <div>
                            <h4>Call / WhatsApp</h4>
                            <p>+91 8307 050 700, +91 9548 051 243</p>
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
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg></div>
                        <div>
                            <h4>Office Hours</h4>
                            <p>Monday – Sunday | 10:00 AM – 6:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="contact-map">
                    <div class="map-pin"></div>
                    <div class="map-label">SMD Group — Ghaziabad &amp; Dehradun</div>
                </div>
            </div>
            <div data-reveal="right">
                <p class="section-eyebrow" style="margin-bottom:16px">Site Visit Enquiry</p>
                <h3 class="section-title" style="font-size:1.8rem;margin-bottom:32px">Request a <span
                        class="gold">Callback</span></h3>
                <form class="contact-form" id="contactPageForm" onsubmit="handleContactPageSubmit(event)">
                    <div class="form-group"><input type="text" placeholder=" " id="cf-name" required /><label
                            class="form-label" for="cf-name">First Name *</label></div>
                    <div class="form-row">
                        <div class="form-group"><input type="tel" placeholder=" " id="cf-phone"
                                required /><label class="form-label" for="cf-phone">Phone Number *</label></div>
                        <div class="form-group"><input type="email" placeholder=" " id="cf-email"
                                required /><label class="form-label" for="cf-email">Email Address *</label></div>
                    </div>
                    <div class="form-group">
                        <select id="cf-location" required onchange="updateProjectOptions()">
                            <option value="" disabled selected>Preferred Location *</option>
                            <option value="garhmukteshwar">Garhmukteshwar</option>
                            <option value="dehradoon">Dehradoon</option>
                            <option value="mussoorie">Mussoorie</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="cf-project" required onchange="updateSizeOptions()" disabled>
                            <option value="" disabled selected>Select a location first</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="cf-size" required disabled>
                            <option value="" disabled selected>Select a project first</option>
                        </select>
                    </div>
                    <div class="form-group" style="position:relative">
                        <textarea placeholder=" " id="cf-message" maxlength="250"
                            oninput="document.getElementById('cf-char-count').textContent = this.value.length"></textarea><label class="form-label" for="cf-message">Message</label>
                        <span class="char-counter"><span id="cf-char-count">0</span> / 250</span>
                    </div>
                    <button type="submit" class="form-submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <div class="sep"></div>

    <!-- ═══ TRUST BADGES ═══ -->
    <section id="contact-trust" style="padding-top:56px">
        <div class="trust-badges" data-reveal="up">
            <div class="trust-badge">
                <div class="trust-badge-icon"><svg viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        <path d="M9 12l2 2 4-4" />
                    </svg></div>
                <div>
                    <h4>100% Privacy Guaranteed</h4>
                    <p>Your information is safe with us.</p>
                </div>
            </div>
            <div class="trust-badge">
                <div class="trust-badge-icon"><svg viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg></div>
                <div>
                    <h4>Quick Response &amp; Support</h4>
                    <p>Complete project assistance from our expert team.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer>
        <div class="footer-inner">
            <div class="footer-brand">
                <div class="nav-logo">SMD GROUP<span>Summer Multi Developers</span></div>
                <p>Building Wealth Through Luxury Living. India's premier luxury farmhouse and land development company,
                    trusted by 1000+ investors across Delhi NCR.</p>
                <div class="footer-social">
                    <a class="social-icon" href="https://www.facebook.com/share/1Fvk9VGm1x/" title="Facebook"
                        target="_blank" rel="noopener"><img src="./assets/img/icons/facebook.png"
                            alt="Facebook"></a>
                    <a class="social-icon" href="https://www.instagram.com/smdgr_oup" title="Instagram"
                        target="_blank" rel="noopener"><img src="./assets/img/icons/instagram.png"
                            alt="Instagram"></a>
                    <a class="social-icon" href="https://youtube.com/@smd_group-smd" title="YouTube" target="_blank"
                        rel="noopener"><img src="./assets/img/icons/youtube.png" alt="YouTube"></a>
                    <a class="social-icon" href="https://wa.me/918307050700" title="WhatsApp" target="_blank"
                        rel="noopener"><img src="./assets/img/icons/whatsapp.png" alt="WhatsApp"></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="about-us.html">About SMD</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="index.html#why">Why Choose Us</a></li>
                    <li><a href="index.html#projects">Our Projects</a></li>
                    <li><a href="index.html#director">Our Directors</a></li>
                    <li><a href="index.html#testimonials">Investor Reviews</a></li>
                    <li><a href="index.html#gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Projects</h4>
                <ul>
                    <li><a href="index.html#projects">SMD Golden Residency</a></li>
                    <li><a href="index.html#projects">SMD Royal Greens</a></li>
                    <li><a href="index.html#projects">SMD Elite Farms</a></li>
                    <li><a href="index.html#projects">SMD Green Valley</a></li>
                    <li><a href="index.html#projects">SMD Imperial Township</a></li>
                    <li><a href="index.html#contact">Upcoming Projects</a></li>
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

    <!-- WHATSAPP FLOATING CHAT BUTTON -->
    <a href="https://wa.me/918307050700?text=Hi%2C%20I%27m%20interested%20in%20SMD%20Group%20properties."
        target="_blank" rel="noopener" id="whatsappBtn" aria-label="Chat with us on WhatsApp">
        <span class="wa-ring"></span>
        <span class="wa-tooltip">Chat with us</span>
        <svg viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
            <path
                d="M12.001 2C6.478 2 2 6.478 2 12c0 1.836.494 3.578 1.435 5.098L2 22l5.048-1.415A9.945 9.945 0 0012.001 22C17.523 22 22 17.522 22 12S17.523 2 12.001 2zm0 18.083c-1.605 0-3.15-.425-4.5-1.23l-.323-.19-3.14.88.86-3.121-.21-.334A8.062 8.062 0 013.94 12c0-4.442 3.617-8.058 8.062-8.058S20.06 7.558 20.06 12s-3.617 8.083-8.06 8.083z" />
        </svg>
    </a>

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
        document.querySelectorAll('a,button,.contact-info-card,.trust-badge,.social-icon,#whatsappBtn').forEach(el => {
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
            }, 1600);
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
            const isOpen = document.getElementById('mobileMenu').classList.toggle('open');
            document.getElementById('hamburger').classList.toggle('active', isOpen);
            document.body.classList.toggle('menu-open', isOpen);
        }

        function closeMobileMenu() {
            document.getElementById('mobileMenu').classList.remove('open');
            document.getElementById('hamburger').classList.remove('active');
            document.body.classList.remove('menu-open');
        }

        /* ── ANIMATIONS ── */
        function initAnimations() {
            gsap.registerPlugin(ScrollTrigger);

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

            gsap.utils.toArray('.contact-info-card').forEach((el, i) => {
                gsap.to(el, {
                    opacity: 1,
                    x: 0,
                    duration: 0.6,
                    delay: i * 0.08,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#contact-main',
                        start: 'top 75%'
                    }
                });
            });
        }

        /* ── DEPENDENT DROPDOWNS: Location -> Project -> Plot/Cottage Size ── */
        const PROJECT_DATA = {
            garhmukteshwar: {
                projects: {
                    royal_orchid: 'The Royal Orchid Farms'
                },
                sizes: {
                    royal_orchid: {
                        label: 'Plot Size',
                        options: ['300 sq yd', '600 sq yd', '900 sq yd', '1200 sq yd']
                    }
                }
            },
            dehradoon: {
                projects: {
                    anandvan: 'Aanandvan Resort',
                    alaknanda: 'Alaknanda Farms'
                },
                sizes: {
                    anandvan: {
                        label: 'Cottage Size',
                        options: ['250 sq yd', '500 sq yd', '750 sq yd']
                    },
                    alaknanda: {
                        label: 'Plot Size',
                        options: ['250 sq yd', '500 sq yd', '750 sq yd']
                    }
                }
            },
            mussoorie: {
                projects: {
                    oak_hill: 'Oak Hill Gardens'
                },
                sizes: {
                    oak_hill: {
                        label: 'Plot Size',
                        options: ['400 sq yd']
                    }
                }
            }
        };

        function updateProjectOptions() {
            const loc = document.getElementById('cf-location').value;
            const projectSelect = document.getElementById('cf-project');
            const sizeSelect = document.getElementById('cf-size');
            const data = PROJECT_DATA[loc];

            projectSelect.innerHTML = '<option value="" disabled selected>Preferred Project *</option>';
            Object.entries(data.projects).forEach(([key, label]) => {
                const opt = document.createElement('option');
                opt.value = key;
                opt.textContent = label;
                projectSelect.appendChild(opt);
            });
            projectSelect.disabled = false;

            sizeSelect.innerHTML = '<option value="" disabled selected>Select a project first</option>';
            sizeSelect.disabled = true;
        }

        function updateSizeOptions() {
            const loc = document.getElementById('cf-location').value;
            const proj = document.getElementById('cf-project').value;
            const sizeSelect = document.getElementById('cf-size');
            const sizeData = PROJECT_DATA[loc].sizes[proj];

            sizeSelect.innerHTML = `<option value="" disabled selected>${sizeData.label} *</option>`;
            sizeData.options.forEach(size => {
                const opt = document.createElement('option');
                opt.value = size;
                opt.textContent = size;
                sizeSelect.appendChild(opt);
            });
            sizeSelect.disabled = false;
        }

        /* ── FORM SUBMIT ── */
        function handleContactPageSubmit(e) {
            e.preventDefault();
            const btn = e.target.querySelector('.form-submit');
            btn.textContent = 'Sending...';
            btn.style.opacity = '0.8';
            setTimeout(() => {
                btn.textContent = 'Message Sent ✓';
                btn.style.background = 'linear-gradient(135deg,#1A3A6B,#2756A8)';
                setTimeout(() => {
                    btn.textContent = 'Submit';
                    btn.style.background = 'linear-gradient(135deg,var(--navy-mid),var(--navy-light))';
                    btn.style.opacity = '1';
                    e.target.reset();
                    document.getElementById('cf-char-count').textContent = '0';
                    document.getElementById('cf-project').innerHTML =
                        '<option value="" disabled selected>Select a location first</option>';
                    document.getElementById('cf-project').disabled = true;
                    document.getElementById('cf-size').innerHTML =
                        '<option value="" disabled selected>Select a project first</option>';
                    document.getElementById('cf-size').disabled = true;
                }, 2600);
            }, 1400);
        }

        /* ── SMOOTH SCROLL (only true in-page "#section" links) ── */
        document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(a => {
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
