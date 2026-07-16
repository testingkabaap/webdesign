<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMD Group | Luxury Farmhouses & Premium Land Developments — Building the Future, Creating Landmarks</title>
<meta name="description" content="SMD Group is a trusted real estate developer offering premium residential & farmhouse plots across Uttar Pradesh and Uttarakhand. RERA-approved, transparent, and built on a decade of trust.">
<meta name="keywords" content="SMD Group, luxury farmhouse, premium plots, Garhmukteshwar, Dehradun, real estate Uttarakhand, RERA approved plots">
<link rel="canonical" href="https://summermultidevelopers.com/">

<!-- Open Graph -->
<meta property="og:title" content="SMD Group — Building the Future. Creating Landmarks.">
<meta property="og:description" content="Premium residential & farmhouse plots across Uttar Pradesh & Uttarakhand. Trust, transparency and long-term value since day one.">
<meta property="og:type" content="website">

<!-- Preconnects for performance -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://images.unsplash.com">
<link rel="preconnect" href="https://cdn.jsdelivr.net">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- AOS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<!-- Custom -->
<link rel="stylesheet" href="css/style.css">

<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=50 cy=50 r=46 fill=%22%230F2352%22/><text x=50 y=63 font-size=42 text-anchor=middle fill=%22%23C9A227%22 font-family=serif>S</text></svg>">
<style>
  /* ============================================================
   SMD GROUP — Royal Luxury Real Estate
   Design tokens: Navy/Royal Blue + Antique Gold + Ivory
   ============================================================ */

:root{
  --navy-deep:#081633;
  --navy:#0F2352;
  --royal:#1B3A82;
  --royal-light:#2C50A8;
  --gold:#C9A227;
  --gold-light:#E9CE7E;
  --gold-soft:#F3E3B3;
  --ivory:#FAF7EF;
  --cream:#F1EBDC;
  --charcoal:#171A21;
  --muted:#6B7080;
  --line:rgba(201,162,39,.35);

  --font-display:'Cormorant Garamond', serif;
  --font-body:'Manrope', sans-serif;

  --radius-lg:26px;
  --radius-md:16px;
  --radius-sm:10px;

  --shadow-soft:0 20px 60px -20px rgba(8,22,51,.35);
  --shadow-gold:0 10px 30px -8px rgba(201,162,39,.45);
}

*{box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{
  font-family:var(--font-body);
  color:var(--charcoal);
  background:var(--ivory);
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
}
h1,h2,h3,h4,.font-display{
  font-family:var(--font-display);
  font-weight:600;
  letter-spacing:.01em;
}
p{color:var(--muted);}
a{text-decoration:none;color:inherit;}
img{max-width:100%;display:block;}
::selection{background:var(--gold-soft);color:var(--navy-deep);}

/* Scrollbar */
::-webkit-scrollbar{width:9px;}
::-webkit-scrollbar-track{background:var(--ivory);}
::-webkit-scrollbar-thumb{background:linear-gradient(var(--gold),var(--royal));border-radius:10px;}

/* ============ UTILITIES ============ */
.section-pad{padding:120px 0;}
@media(max-width:767px){.section-pad{padding:80px 0;}}

.bg-navy{background:var(--navy-deep);color:#EDEFF6;}
.bg-navy p{color:#B8BFD6;}
.bg-navy h1,.bg-navy h2,.bg-navy h3{color:#fff;}
.bg-cream{background:var(--cream);}
.bg-ivory{background:var(--ivory);}

.container-xl{max-width:1320px;margin:0 auto;padding:0 24px;}

.eyebrow{
  display:inline-flex;align-items:center;gap:12px;
  font-family:var(--font-body);
  font-size:.78rem;letter-spacing:.32em;text-transform:uppercase;
  color:var(--gold);font-weight:700;margin-bottom:18px;
}
.eyebrow::before,.eyebrow::after{content:"";width:34px;height:1px;background:var(--gold);}
.eyebrow.center{justify-content:center;}

.section-title{
  font-size:clamp(2.2rem,4vw,3.4rem);
  line-height:1.12;margin-bottom:20px;
}
.section-title em{font-style:italic;color:var(--gold);}
.section-sub{max-width:620px;font-size:1.05rem;line-height:1.8;}
.mx-auto-text{margin-left:auto;margin-right:auto;text-align:center;}

.btn-royal{
  display:inline-flex;align-items:center;gap:10px;
  padding:16px 34px;border-radius:100px;
  background:linear-gradient(135deg,var(--gold-light),var(--gold));
  color:var(--navy-deep)!important;font-weight:700;font-size:.92rem;
  letter-spacing:.03em;border:none;
  box-shadow:var(--shadow-gold);
  transition:transform .45s cubic-bezier(.2,.8,.2,1),box-shadow .45s;
}
.btn-royal:hover{transform:translateY(-4px);box-shadow:0 18px 40px -10px rgba(201,162,39,.6);color:var(--navy-deep);}
.btn-royal svg{transition:transform .35s;}
.btn-royal:hover svg{transform:translateX(5px);}

.btn-outline-royal{
  display:inline-flex;align-items:center;gap:10px;
  padding:15px 32px;border-radius:100px;
  border:1px solid rgba(255,255,255,.35);
  color:#fff;font-weight:600;font-size:.92rem;letter-spacing:.03em;
  background:rgba(255,255,255,.04);
  backdrop-filter:blur(6px);
  transition:all .4s;
}
.btn-outline-royal:hover{background:#fff;color:var(--navy-deep);border-color:#fff;}

.divider-gold{
  width:80px;height:3px;margin:0 auto 26px;
  background:linear-gradient(90deg,transparent,var(--gold),transparent);
  border-radius:4px;
}

/* Glassmorphism card */
.glass{
  background:rgba(255,255,255,.62);
  border:1px solid rgba(255,255,255,.5);
  backdrop-filter:blur(18px);
  -webkit-backdrop-filter:blur(18px);
  box-shadow:var(--shadow-soft);
}
.glass-dark{
  background:rgba(15,35,82,.45);
  border:1px solid rgba(201,162,39,.25);
  backdrop-filter:blur(16px);
  -webkit-backdrop-filter:blur(16px);
}

/* ============ PRELOADER ============ */
#preloader{
  position:fixed;inset:0;z-index:9999;
  background:var(--navy-deep);
  display:flex;align-items:center;justify-content:center;
  transition:opacity .7s ease, visibility .7s ease;
}
#preloader.hide{opacity:0;visibility:hidden;}
.preload-crest{
  width:74px;height:74px;border:1px solid var(--gold);border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-display);color:var(--gold);font-size:1.6rem;
  animation:crestSpin 1.8s linear infinite;
  position:relative;
}
@keyframes crestSpin{
  0%{transform:rotate(0deg) scale(1);}
  50%{transform:rotate(180deg) scale(1.06);}
  100%{transform:rotate(360deg) scale(1);}
}

/* ============ NAVBAR ============ */
.navbar-royal{
  position:fixed;top:0;left:0;right:0;z-index:1000;
  padding:22px 0;
  transition:all .5s cubic-bezier(.2,.8,.2,1);
  background:transparent;
}
.navbar-royal.scrolled{
  padding:12px 0;
  background:rgba(8,22,51,.92);
  backdrop-filter:blur(14px);
  box-shadow:0 10px 30px -12px rgba(0,0,0,.4);
}
.navbar-royal .nav-inner{
  display:flex;align-items:center;justify-content:space-between;
}
.brand{display:flex;align-items:center;gap:12px;color:#fff;}
.brand-mark{
  width:46px;height:46px;border-radius:50%;
  border:1px solid var(--gold);
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-display);font-weight:700;color:var(--gold);font-size:1.1rem;
  background:radial-gradient(circle at 30% 30%,rgba(201,162,39,.18),transparent 70%);
}
.brand-text{line-height:1.05;}
.brand-text b{font-family:var(--font-display);font-size:1.28rem;letter-spacing:.03em;display:block;color:#fff;}
.brand-text span{font-size:.62rem;letter-spacing:.22em;text-transform:uppercase;color:var(--gold-light);}

.nav-links{display:flex;align-items:center;gap:34px;}
.nav-links a{
  color:#EDEFF6;font-size:.86rem;font-weight:600;letter-spacing:.02em;
  position:relative;padding:6px 0;
}
.nav-links a::after{
  content:"";position:absolute;left:0;bottom:0;width:0;height:1px;
  background:var(--gold);transition:width .35s;
}
.nav-links a:hover::after,.nav-links a.active::after{width:100%;}
.navbar-royal .btn-royal{padding:12px 26px;font-size:.82rem;}

.nav-toggle{display:none;background:none;border:1px solid var(--gold);border-radius:8px;padding:9px 12px;}
.nav-toggle span{display:block;width:22px;height:2px;background:var(--gold);margin:4px 0;}

@media(max-width:991px){
  .nav-links{
    position:fixed;top:0;right:-100%;width:78%;max-width:340px;height:100vh;
    background:var(--navy-deep);flex-direction:column;justify-content:center;
    gap:26px;transition:right .5s cubic-bezier(.2,.8,.2,1);
    box-shadow:-20px 0 60px rgba(0,0,0,.4);padding:40px;
  }
  .nav-links.open{right:0;}
  .nav-toggle{display:block;}
  .navbar-royal .btn-royal{display:none;}
}

/* ============ HERO ============ */
.hero{position:relative;height:100vh;min-height:640px;overflow:hidden;color:#fff;}
.hero .swiper{height:100%;}
.hero-slide{
  position:relative;height:100%;width:100%;
  background-size:cover;background-position:center;
}
.hero-slide::after{
  content:"";position:absolute;inset:0;
  background:linear-gradient(180deg,rgba(8,16,40,.55) 0%,rgba(8,16,40,.55) 40%,rgba(6,13,33,.92) 100%);
}
.hero-content{
  position:absolute;inset:0;z-index:3;
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  text-align:center;padding:0 20px;
}
.hero-crest{
  width:96px;height:96px;border:1px solid var(--gold);border-radius:50%;
  display:flex;align-items:center;justify-content:center;margin-bottom:26px;
  position:relative;
}
.hero-crest::before{
  content:"";position:absolute;inset:-10px;border:1px solid rgba(201,162,39,.35);border-radius:50%;
}
.hero-crest span{font-family:var(--font-display);color:var(--gold-light);font-size:1.7rem;letter-spacing:.05em;}

.hero h1{
  font-size:clamp(2.6rem,6vw,5.2rem);line-height:1.08;color:#fff;
  max-width:1000px;text-shadow:0 8px 40px rgba(0,0,0,.35);
}
.hero h1 em{font-style:italic;color:var(--gold-light);}
.hero-sub{max-width:640px;font-size:1.12rem;color:#DCE1F0;margin:22px auto 36px;line-height:1.8;}
.hero-cta{display:flex;gap:18px;flex-wrap:wrap;justify-content:center;}

.hero-scroll{
  position:absolute;bottom:34px;left:50%;transform:translateX(-50%);z-index:4;
  display:flex;flex-direction:column;align-items:center;gap:10px;color:#DCE1F0;font-size:.72rem;
  letter-spacing:.28em;text-transform:uppercase;
}
.hero-scroll .line{width:1px;height:46px;background:linear-gradient(#fff,transparent);position:relative;overflow:hidden;}
.hero-scroll .line::after{
  content:"";position:absolute;top:-46px;left:0;width:100%;height:46px;background:var(--gold);
  animation:scrollLine 2.2s infinite ease-in-out;
}
@keyframes scrollLine{0%{top:-46px;}100%{top:46px;}}

.hero .swiper-pagination{bottom:110px!important;z-index:5;}
.hero .swiper-pagination-bullet{background:#fff;opacity:.5;width:9px;height:9px;}
.hero .swiper-pagination-bullet-active{background:var(--gold);opacity:1;width:26px;border-radius:6px;}

/* ============ ABOUT ============ */
.about-media{position:relative;border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-soft);}
.about-media img{height:100%;object-fit:cover;transition:transform 1.2s ease;}
.about-media:hover img{transform:scale(1.06);}
.about-badge{
  position:absolute;bottom:-28px;right:-20px;
  background:linear-gradient(135deg,var(--gold-light),var(--gold));
  color:var(--navy-deep);border-radius:50%;width:150px;height:150px;
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  text-align:center;box-shadow:var(--shadow-gold);
}
.about-badge b{font-family:var(--font-display);font-size:2.1rem;line-height:1;}
.about-badge span{font-size:.62rem;letter-spacing:.1em;text-transform:uppercase;font-weight:700;margin-top:6px;}
@media(max-width:767px){.about-badge{width:110px;height:110px;right:6px;bottom:-20px;}.about-badge b{font-size:1.5rem;}}

.about-quote{
  border-left:2px solid var(--gold);padding:6px 0 6px 22px;margin:26px 0;
  font-family:var(--font-display);font-size:1.3rem;font-style:italic;color:var(--navy);
}

.stat-row{display:flex;flex-wrap:wrap;gap:0;margin-top:36px;border-top:1px solid rgba(0,0,0,.08);padding-top:30px;}
.stat-item{flex:1 1 25%;min-width:130px;text-align:left;padding-right:14px;}
.stat-item b{
  font-family:var(--font-display);font-size:2.4rem;color:var(--navy);display:block;line-height:1;
}
.stat-item b span{color:var(--gold);}
.stat-item small{font-size:.72rem;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);font-weight:700;}

/* ============ PROPERTY CARDS (Featured) ============ */
.prop-card{
  position:relative;border-radius:var(--radius-md);overflow:hidden;
  height:460px;box-shadow:var(--shadow-soft);
}
.prop-card img{
  position:absolute;inset:0;width:100%;height:100%;object-fit:cover;
  transition:transform 1.1s cubic-bezier(.2,.8,.2,1);
}
.prop-card:hover img{transform:scale(1.12);}
.prop-card::before{
  content:"";position:absolute;inset:0;
  background:linear-gradient(180deg,rgba(8,16,40,0) 30%,rgba(8,16,40,.94) 100%);
  z-index:1;
}
.prop-tag{
  position:absolute;top:20px;left:20px;z-index:2;
  background:linear-gradient(135deg,var(--gold-light),var(--gold));
  color:var(--navy-deep);font-size:.7rem;font-weight:800;letter-spacing:.06em;
  text-transform:uppercase;padding:7px 16px;border-radius:100px;
}
.prop-body{
  position:absolute;left:0;right:0;bottom:0;z-index:2;padding:26px;color:#fff;
  transform:translateY(58px);transition:transform .5s cubic-bezier(.2,.8,.2,1);
}
.prop-card:hover .prop-body{transform:translateY(0);}
.prop-body h4{font-size:1.4rem;color:#fff;margin-bottom:4px;}
.prop-body .loc{font-size:.8rem;color:var(--gold-light);margin-bottom:12px;display:flex;align-items:center;gap:6px;}
.prop-desc{
  max-height:0;overflow:hidden;opacity:0;
  transition:max-height .5s ease,opacity .4s ease;
}
.prop-card:hover .prop-desc{max-height:100px;opacity:1;margin-bottom:12px;}
.prop-desc p{color:#C9D0E4;font-size:.86rem;line-height:1.6;margin:0;}
.prop-link{display:inline-flex;align-items:center;gap:8px;font-size:.8rem;font-weight:700;color:var(--gold-light);}
.prop-link svg{transition:transform .35s;}
.prop-card:hover .prop-link svg{transform:translateX(5px);}

/* ============ SIGNATURE PROJECTS SLIDER ============ */
.sig-slider{padding-bottom:70px!important;}
.sig-card{
  position:relative;border-radius:var(--radius-md);overflow:hidden;height:520px;
  box-shadow:0 30px 70px -20px rgba(0,0,0,.55);
}
.sig-card img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;transition:transform 1s ease;}
.sig-card:hover img{transform:scale(1.08);}
.sig-card::before{
  content:"";position:absolute;inset:0;z-index:1;
  background:linear-gradient(180deg,rgba(8,16,40,.05) 20%,rgba(8,16,40,.96) 100%);
}
.sig-num{
  position:absolute;top:22px;right:22px;z-index:2;
  font-family:var(--font-display);font-size:1rem;color:var(--gold-light);
  border:1px solid var(--gold);border-radius:50%;width:46px;height:46px;
  display:flex;align-items:center;justify-content:center;
}
.sig-info{position:absolute;left:0;right:0;bottom:0;z-index:2;padding:30px;color:#fff;}
.sig-info .eyebrow{margin-bottom:10px;font-size:.66rem;}
.sig-info h3{font-size:1.7rem;color:#fff;margin-bottom:8px;}
.sig-info p{color:#C9D0E4;font-size:.88rem;margin-bottom:16px;
  max-height:0;overflow:hidden;opacity:0;transition:.5s;
}
.sig-card:hover .sig-info p{max-height:120px;opacity:1;}
.sig-cta{
  display:inline-flex;align-items:center;gap:8px;font-size:.78rem;font-weight:700;
  color:var(--navy-deep);background:var(--gold-light);padding:10px 20px;border-radius:100px;
  transition:.35s;
}
.sig-cta:hover{background:#fff;}

.swiper-button-next.sig-next,.swiper-button-prev.sig-prev{
  width:52px;height:52px;border:1px solid rgba(255,255,255,.35);border-radius:50%;
  color:var(--gold-light);top:auto;bottom:0;
}
.swiper-button-next.sig-next::after,.swiper-button-prev.sig-prev::after{font-size:1rem;}
.swiper-button-prev.sig-prev{left:calc(50% - 62px);}
.swiper-button-next.sig-next{right:calc(50% - 62px);}
.sig-slider .swiper-pagination{bottom:8px!important;}
.bg-navy .swiper-pagination-bullet{background:#fff;opacity:.4;}
.bg-navy .swiper-pagination-bullet-active{background:var(--gold);opacity:1;}

/* ============ DIRECTORS ============ */
.dir-card{
  border-radius:var(--radius-md);overflow:hidden;background:#fff;
  box-shadow:var(--shadow-soft);transition:transform .5s cubic-bezier(.2,.8,.2,1);
  height:100%;
}
.dir-card:hover{transform:translateY(-10px);}
.dir-media{position:relative;height:340px;overflow:hidden;}
.dir-media img{width:100%;height:100%;object-fit:cover;transition:transform 1s ease,filter .6s;filter:grayscale(35%);}
.dir-card:hover .dir-media img{transform:scale(1.07);filter:grayscale(0%);}
.dir-media::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,transparent 60%,rgba(8,16,40,.75) 100%);}
.dir-social{
  position:absolute;bottom:16px;left:16px;z-index:2;display:flex;gap:10px;
}
.dir-social a{
  width:34px;height:34px;border-radius:50%;background:rgba(255,255,255,.14);
  border:1px solid rgba(255,255,255,.4);display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:.8rem;backdrop-filter:blur(6px);transition:.3s;
}
.dir-social a:hover{background:var(--gold);color:var(--navy-deep);border-color:var(--gold);}
.dir-info{padding:28px 26px 30px;text-align:center;}
.dir-info h4{font-size:1.4rem;color:var(--navy);margin-bottom:4px;}
.dir-role{
  display:inline-block;font-size:.7rem;letter-spacing:.1em;text-transform:uppercase;
  color:var(--gold);font-weight:700;margin-bottom:14px;
}
.dir-info p{font-size:.9rem;line-height:1.75;}

/* ============ TESTIMONIALS ============ */
.testi-slider{padding:10px 4px 60px;}
.testi-card{
  border-radius:var(--radius-md);padding:44px 36px;height:100%;
}
.testi-quote-icon{font-family:var(--font-display);font-size:4.2rem;color:var(--gold);line-height:.4;margin-bottom:18px;display:block;}
.testi-stars{color:var(--gold);letter-spacing:3px;margin-bottom:16px;font-size:.9rem;}
.testi-card p.testi-text{color:#EDEFF6;font-size:1.02rem;line-height:1.85;margin-bottom:26px;font-family:var(--font-display);font-size:1.2rem;font-style:italic;}
.testi-person{display:flex;align-items:center;gap:14px;}
.testi-person img{width:54px;height:54px;border-radius:50%;object-fit:cover;border:2px solid var(--gold);}
.testi-person b{color:#fff;display:block;font-size:.95rem;}
.testi-person span{color:var(--gold-light);font-size:.76rem;letter-spacing:.03em;}
.testi-slider .swiper-pagination-bullet{background:#fff;opacity:.35;}
.testi-slider .swiper-pagination-bullet-active{background:var(--gold);opacity:1;}

/* ============ GALLERY ============ */
.gallery-grid{display:grid;grid-template-columns:repeat(4,1fr);grid-auto-rows:170px;gap:14px;}
.gallery-item{position:relative;border-radius:var(--radius-sm);overflow:hidden;cursor:pointer;}
.gallery-item img{width:100%;height:100%;object-fit:cover;transition:transform .8s ease;}
.gallery-item:hover img{transform:scale(1.15);}
.gallery-item::after{
  content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(8,16,40,0),rgba(8,16,40,.65));
  opacity:0;transition:opacity .4s;
}
.gallery-item:hover::after{opacity:1;}
.gallery-item .g-icon{
  position:absolute;inset:0;display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.4rem;opacity:0;transition:opacity .4s,transform .4s;transform:scale(.7);z-index:2;
}
.gallery-item:hover .g-icon{opacity:1;transform:scale(1);}
.gallery-item.big{grid-column:span 2;grid-row:span 2;}
.gallery-item .g-label{position:absolute;bottom:12px;left:14px;z-index:2;color:#fff;font-size:.78rem;font-weight:700;opacity:0;transition:.4s;letter-spacing:.03em;}
.gallery-item:hover .g-label{opacity:1;}
@media(max-width:767px){
  .gallery-grid{grid-template-columns:repeat(2,1fr);grid-auto-rows:150px;}
  .gallery-item.big{grid-column:span 2;grid-row:span 1;}
}

/* ============ WHY CHOOSE US ============ */
.why-card{
  padding:38px 30px;border-radius:var(--radius-md);height:100%;
  background:rgba(255,255,255,.05);border:1px solid rgba(201,162,39,.2);
  transition:transform .45s cubic-bezier(.2,.8,.2,1),background .45s;
}
.why-card:hover{transform:translateY(-8px);background:rgba(201,162,39,.08);}
.why-icon{
  width:58px;height:58px;border-radius:14px;margin-bottom:22px;
  display:flex;align-items:center;justify-content:center;
  background:linear-gradient(135deg,var(--gold-light),var(--gold));color:var(--navy-deep);font-size:1.4rem;
}
.why-card h4{color:#fff;font-size:1.18rem;margin-bottom:10px;}
.why-card p{font-size:.88rem;color:#B8BFD6;line-height:1.75;margin:0;}

.counters-strip{
  margin-top:70px;border-top:1px solid rgba(201,162,39,.25);padding-top:44px;
  display:flex;flex-wrap:wrap;text-align:center;
}
.counter-item{flex:1 1 25%;min-width:140px;}
.counter-item b{font-family:var(--font-display);font-size:3rem;color:var(--gold-light);display:block;line-height:1;}
.counter-item small{font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:#B8BFD6;font-weight:700;}

/* ============ CONTACT ============ */
.contact-form-card{border-radius:var(--radius-lg);padding:48px;box-shadow:var(--shadow-soft);}
.form-control-royal{
  width:100%;padding:15px 18px;border-radius:var(--radius-sm);border:1px solid rgba(0,0,0,.12);
  background:#fff;font-family:var(--font-body);font-size:.92rem;margin-bottom:18px;transition:.3s;
}
.form-control-royal:focus{outline:none;border-color:var(--gold);box-shadow:0 0 0 4px rgba(201,162,39,.15);}
textarea.form-control-royal{resize:none;min-height:130px;}

.contact-info-item{display:flex;gap:18px;align-items:flex-start;margin-bottom:30px;}
.contact-info-icon{
  width:52px;height:52px;flex:none;border-radius:50%;
  background:linear-gradient(135deg,var(--gold-light),var(--gold));
  display:flex;align-items:center;justify-content:center;color:var(--navy-deep);font-size:1.15rem;
}
.contact-info-item h5{color:#fff;font-size:1.02rem;margin-bottom:4px;}
.contact-info-item p{color:#B8BFD6;font-size:.9rem;margin:0;}
.map-frame{border-radius:var(--radius-md);overflow:hidden;border:1px solid rgba(201,162,39,.25);height:260px;margin-top:10px;}
.map-frame iframe{width:100%;height:100%;border:0;filter:grayscale(30%) contrast(1.05);}

/* ============ FOOTER ============ */
footer.footer-royal{background:var(--navy-deep);color:#B8BFD6;padding-top:90px;}
.footer-brand p{color:#8891AC;font-size:.9rem;line-height:1.8;margin:18px 0 22px;}
.footer-col h6{color:#fff;font-size:.82rem;letter-spacing:.12em;text-transform:uppercase;margin-bottom:22px;font-weight:800;}
.footer-col ul{list-style:none;padding:0;margin:0;}
.footer-col ul li{margin-bottom:12px;}
.footer-col ul li a{font-size:.9rem;color:#B8BFD6;transition:.3s;}
.footer-col ul li a:hover{color:var(--gold-light);padding-left:4px;}
.footer-social{display:flex;gap:12px;margin-top:8px;}
.footer-social a{
  width:38px;height:38px;border-radius:50%;border:1px solid rgba(201,162,39,.35);
  display:flex;align-items:center;justify-content:center;color:var(--gold-light);transition:.3s;
}
.footer-social a:hover{background:var(--gold);color:var(--navy-deep);}
.footer-bottom{border-top:1px solid rgba(201,162,39,.18);margin-top:60px;padding:26px 0;text-align:center;font-size:.8rem;color:#75809E;}
.footer-bottom a{color:var(--gold-light);}

/* ============ MISC ============ */
.back-to-top{
  position:fixed;bottom:28px;right:28px;z-index:900;width:50px;height:50px;border-radius:50%;
  background:linear-gradient(135deg,var(--gold-light),var(--gold));color:var(--navy-deep);
  display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow-gold);
  opacity:0;visibility:hidden;transform:translateY(12px);transition:.4s;
}
.back-to-top.show{opacity:1;visibility:visible;transform:translateY(0);}

.whatsapp-float{
  position:fixed;bottom:28px;left:28px;z-index:900;width:56px;height:56px;border-radius:50%;
  background:#25D366;color:#fff;display:flex;align-items:center;justify-content:center;font-size:1.5rem;
  box-shadow:0 12px 30px -8px rgba(37,211,102,.6);animation:pulseWA 2.4s infinite;
}
@keyframes pulseWA{0%{box-shadow:0 0 0 0 rgba(37,211,102,.5);}70%{box-shadow:0 0 0 16px rgba(37,211,102,0);}100%{box-shadow:0 0 0 0 rgba(37,211,102,0);}}

[data-aos]{transition-timing-function:cubic-bezier(.2,.8,.2,1)!important;}

/* Lightbox modal */
.lightbox-modal .modal-content{background:transparent;border:none;}
.lightbox-modal img{border-radius:var(--radius-md);width:100%;}
.lightbox-modal .btn-close{filter:invert(1);position:absolute;top:-40px;right:0;}

@media(max-width:575px){
  .contact-form-card{padding:28px;}
  .stat-item{flex:1 1 50%;margin-bottom:20px;}
  .counter-item{flex:1 1 50%;margin-bottom:24px;}
}

</style>
</head>
<body>

<!-- ============ PRELOADER ============ -->
<div id="preloader"><div class="preload-crest"><span style="animation:none;font-size:1.1rem;">S</span></div></div>

<!-- ============ NAVBAR ============ -->
<nav class="navbar-royal" id="mainNav">
  <div class="container-xl nav-inner">
    <a href="#home" class="brand">
      <span class="brand-mark">S</span>
      <span class="brand-text"><b>SMD Group</b><span>Building the Future</span></span>
    </a>
    <div class="nav-links" id="navLinks">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#properties">Properties</a>
      <a href="#signature">Signature Projects</a>
      <a href="#directors">Directors</a>
      <a href="#reviews">Reviews</a>
      <a href="#gallery">Gallery</a>
      <a href="#contact">Contact</a>
    </div>
    <div class="d-flex align-items-center gap-3">
      <a href="#contact" class="btn-royal d-none d-lg-inline-flex">Book a Site Visit <i class="bi bi-arrow-right"></i></a>
      <button class="nav-toggle" id="navToggle" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</nav>

<!-- ============ HERO ============ -->
<header class="hero" id="home">
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80')"></div>
      </div>
      <div class="swiper-slide">
        <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1920&q=80')"></div>
      </div>
      <div class="swiper-slide">
        <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1920&q=80')"></div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="hero-content">
    <div class="hero-crest" data-aos="zoom-in"><span>S</span></div>
    <div class="eyebrow center" data-aos="fade-up">SMD Group · Est. Trust, Built to Last</div>
    <h1 data-aos="fade-up" data-aos-delay="100">Your Gateway to <em>Luxury</em> Farmhouse &amp; Landmark Living</h1>
    <p class="hero-sub" data-aos="fade-up" data-aos-delay="200">Premium residential and farmhouse plots across the scenic landscapes of Uttar Pradesh &amp; Uttarakhand — where every parcel of land is a promise of security, growth and legacy.</p>
    <div class="hero-cta" data-aos="fade-up" data-aos-delay="300">
      <a href="#properties" class="btn-royal">Explore Properties <i class="bi bi-arrow-right"></i></a>
      <a href="#contact" class="btn-outline-royal">Book a Site Visit <i class="bi bi-calendar-check"></i></a>
    </div>
  </div>

  <div class="hero-scroll"><span>Scroll</span><span class="line"></span></div>
</header>

<!-- ============ ABOUT ============ -->
<section class="section-pad bg-ivory" id="about">
  <div class="container-xl">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="about-media" style="height:480px;">
          <img class="parallax-img" src="https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=1200&q=80" alt="SMD Group luxury farmhouse property" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/smdabout/1200/900'">
          <div class="about-badge">
            <b>10<span>+</span></b>
            <span>Years of Trust</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="eyebrow">About SMD Group</div>
        <h2 class="section-title">Building the Future.<br><em>Creating Landmarks.</em></h2>
        <p class="section-sub">SMD Group is a trusted name in the real estate and land development sector. With over a decade of expertise, we specialise in premium residential and farmhouse plots across the scenic landscapes of Uttar Pradesh &amp; Uttarakhand — helping every investor and family own land that offers security, growth and satisfaction.</p>
        <div class="about-quote">"Every SMD project is built on the foundation of trust, transparency and long-term value."</div>
        <p class="section-sub">Our vision is simple — to make land ownership secure, simple and profitable for everyone who dreams of a peaceful lifestyle or a rewarding investment.</p>

        <div class="stat-row">
          <div class="stat-item"><b><span data-count="10" data-suffix="+">0</span></b><small>Years Experience</small></div>
          <div class="stat-item"><b><span data-count="5" data-suffix="">0</span></b><small>Signature Projects</small></div>
          <div class="stat-item"><b><span data-count="2" data-suffix="">0</span></b><small>States Presence</small></div>
          <div class="stat-item"><b><span data-count="500" data-suffix="+">0</span></b><small>Happy Families</small></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FEATURED PROPERTIES ============ -->
<section class="section-pad bg-cream" id="properties">
  <div class="container-xl">
    <div class="text-center mx-auto-text mb-5" style="max-width:680px;" data-aos="fade-up">
      <div class="eyebrow center">Featured Properties</div>
      <h2 class="section-title">Handpicked Land &amp; <em>Farmhouse</em> Listings</h2>
      <div class="divider-gold"></div>
      <p class="section-sub mx-auto">A curated selection of our most sought-after developments — each verified, RERA-compliant and designed for long-term value.</p>
    </div>

    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="prop-card">
          <img src="https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&w=900&q=80" alt="Anandvan Resorts plots" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/anandvan/800/900'">
          <span class="prop-tag">Resort Plots</span>
          <div class="prop-body">
            <h4>Anandvan Resorts</h4>
            <div class="loc"><i class="bi bi-geo-alt-fill"></i> Garhmukteshwar, Uttar Pradesh</div>
            <div class="prop-desc"><p>A serene riverside retreat offering resort-style farmhouse plots surrounded by lush greenery.</p></div>
            <a href="#contact" class="prop-link">View Details <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="prop-card">
          <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=900&q=80" alt="The Royal Orchid Farms" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/royalorchid/800/900'">
          <span class="prop-tag">Premium Farms</span>
          <div class="prop-body">
            <h4>The Royal Orchid Farms</h4>
            <div class="loc"><i class="bi bi-geo-alt-fill"></i> Garhmukteshwar, Uttar Pradesh</div>
            <div class="prop-desc"><p>Boutique farmhouse parcels with orchard landscaping, designed for weekend luxury living.</p></div>
            <a href="#contact" class="prop-link">View Details <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="prop-card">
          <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=900&q=80" alt="Shri Krishna Enclave" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/krishnaenclave/800/900'">
          <span class="prop-tag">Residential Plots</span>
          <div class="prop-body">
            <h4>Shri Krishna Enclave</h4>
            <div class="loc"><i class="bi bi-geo-alt-fill"></i> Uttar Pradesh</div>
            <div class="prop-desc"><p>Thoughtfully planned residential enclave with wide roads, greenbelts and modern infrastructure.</p></div>
            <a href="#contact" class="prop-link">View Details <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ SIGNATURE PROJECTS ============ -->
<section class="section-pad bg-navy" id="signature" style="overflow:hidden;">
  <div class="container-xl">
    <div class="text-center mx-auto-text mb-5" style="max-width:680px;" data-aos="fade-up">
      <div class="eyebrow center">Signature Projects</div>
      <h2 class="section-title">Landmarks That Define <em>SMD Group</em></h2>
      <div class="divider-gold"></div>
      <p class="section-sub mx-auto">Five flagship developments across Uttar Pradesh &amp; Uttarakhand — swipe through the collection that shapes our legacy.</p>
    </div>
  </div>

  <div class="swiper sigSwiper sig-slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="sig-card">
          <img src="https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&w=900&q=80" alt="Anandvan Resorts" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/sig1/800/1000'">
          <div class="sig-num">01</div>
          <div class="sig-info">
            <div class="eyebrow" style="margin-bottom:8px;">Resort Living</div>
            <h3>Anandvan Resorts</h3>
            <p>Riverside resort plots blending nature and leisure, crafted for peaceful getaways.</p>
            <a href="#contact" class="sig-cta">Enquire Now <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sig-card">
          <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=900&q=80" alt="The Royal Orchid Farms" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/sig2/800/1000'">
          <div class="sig-num">02</div>
          <div class="sig-info">
            <div class="eyebrow" style="margin-bottom:8px;">Premium Farms</div>
            <h3>The Royal Orchid Farms</h3>
            <p>Orchard-inspired boutique farmhouse plots for an elevated countryside lifestyle.</p>
            <a href="#contact" class="sig-cta">Enquire Now <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sig-card">
          <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=900&q=80" alt="Alaknanda Farms" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/sig3/800/1000'">
          <div class="sig-num">03</div>
          <div class="sig-info">
            <div class="eyebrow" style="margin-bottom:8px;">Nature Retreat</div>
            <h3>Alaknanda Farms</h3>
            <p>Set against the Himalayan foothills — plots designed for tranquillity and long-term growth.</p>
            <a href="#contact" class="sig-cta">Enquire Now <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sig-card">
          <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=900&q=80" alt="OAK Hill Gardens" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/sig4/800/1000'">
          <div class="sig-num">04</div>
          <div class="sig-info">
            <div class="eyebrow" style="margin-bottom:8px;">Garden Community</div>
            <h3>OAK Hill Gardens</h3>
            <p>A landscaped gated community with manicured gardens and premium amenities.</p>
            <a href="#contact" class="sig-cta">Enquire Now <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="sig-card">
          <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=80" alt="Shri Krishna Enclave" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/sig5/800/1000'">
          <div class="sig-num">05</div>
          <div class="sig-info">
            <div class="eyebrow" style="margin-bottom:8px;">Residential Enclave</div>
            <h3>Shri Krishna Enclave</h3>
            <p>Modern residential plots with wide avenues, greenbelts and full infrastructure.</p>
            <a href="#contact" class="sig-cta">Enquire Now <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-button-prev sig-prev"></div>
    <div class="swiper-button-next sig-next"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<!-- ============ DIRECTORS ============ -->
<section class="section-pad bg-ivory" id="directors">
  <div class="container-xl">
    <div class="text-center mx-auto-text mb-5" style="max-width:680px;" data-aos="fade-up">
      <div class="eyebrow center">Leadership</div>
      <h2 class="section-title">The Vision Behind <em>SMD Group</em></h2>
      <div class="divider-gold"></div>
      <p class="section-sub mx-auto">Meet the directors steering SMD Group's promise of trust, transparency and enduring value.</p>
    </div>

    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="dir-card">
          <div class="dir-media">
            <img src="./assets/img/pro.jpg" alt="Managing Director, SMD Group" loading="lazy">
            <div class="dir-social">
              <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" aria-label="Email"><i class="bi bi-envelope"></i></a>
            </div>
          </div>
          <div class="dir-info">
            <h4>Mr. Sagar Sharma</h4>
            <div class="dir-role">Managing Director</div>
            <p>Leads SMD Group's overall vision with over 15 years in land development, driving every project from concept to legacy.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="dir-card">
          <div class="dir-media">
            <img src="./assets/img/pro.jpg" alt="Director of Operations, SMD Group" loading="lazy">
            <div class="dir-social">
              <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" aria-label="Email"><i class="bi bi-envelope"></i></a>
            </div>
          </div>
          <div class="dir-info">
            <h4>Mr. Rahul Sharma</h4>
            <div class="dir-role">Director — Operations</div>
            <p>Oversees documentation, compliance and site execution, ensuring every plot is delivered transparently and on time.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="dir-card">
          <div class="dir-media">
            <img src="./assets/img/pro.jpg" alt="Director of Sales & Marketing, SMD Group" loading="lazy">
            <div class="dir-social">
              <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
              <a href="#" aria-label="Email"><i class="bi bi-envelope"></i></a>
            </div>
          </div>
          <div class="dir-info">
            <h4>Mr. Amit Verma</h4>
            <div class="dir-role">Director — Sales &amp; Marketing</div>
            <p>Builds lasting relationships with investors and families, guiding them through a smooth, informed buying journey.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section-pad bg-navy" id="reviews">
  <div class="container-xl">
    <div class="text-center mx-auto-text mb-4" style="max-width:680px;" data-aos="fade-up">
      <div class="eyebrow center">Customer Reviews</div>
      <h2 class="section-title">Trusted by <em>Hundreds</em> of Families</h2>
      <div class="divider-gold"></div>
    </div>

    <div class="swiper testiSwiper testi-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testi-card glass-dark">
            <span class="testi-quote-icon">"</span>
            <div class="testi-stars">★★★★★</div>
            <p class="testi-text">SMD Group made our farmhouse investment completely stress-free. Transparent paperwork, RERA-verified titles and a team that answered every question.</p>
            <div class="testi-person">
              <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Client photo" loading="lazy">
              <div><b>Amit Khanna</b><span>Anandvan Resorts Owner</span></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testi-card glass-dark">
            <span class="testi-quote-icon">"</span>
            <div class="testi-stars">★★★★★</div>
            <p class="testi-text">The site visit alone convinced us — the location, the greenery and the honesty of the SMD team. We closed within two weeks.</p>
            <div class="testi-person">
              <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client photo" loading="lazy">
              <div><b>Priya Nair</b><span>The Royal Orchid Farms</span></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testi-card glass-dark">
            <span class="testi-quote-icon">"</span>
            <div class="testi-stars">★★★★★</div>
            <p class="testi-text">Ten years from now, this will be one of the best decisions we've made. SMD's end-to-end assistance made everything effortless.</p>
            <div class="testi-person">
              <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="Client photo" loading="lazy">
              <div><b>Suresh Rawat</b><span>Alaknanda Farms</span></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="testi-card glass-dark">
            <span class="testi-quote-icon">"</span>
            <div class="testi-stars">★★★★★</div>
            <p class="testi-text">Zero hidden charges, exactly as promised. The Shri Krishna Enclave plot has already appreciated beautifully.</p>
            <div class="testi-person">
              <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Client photo" loading="lazy">
              <div><b>Neha Gupta</b><span>Shri Krishna Enclave</span></div>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="section-pad bg-ivory" id="gallery">
  <div class="container-xl">
    <div class="text-center mx-auto-text mb-5" style="max-width:680px;" data-aos="fade-up">
      <div class="eyebrow center">Gallery</div>
      <h2 class="section-title">A Glimpse Into Our <em>Landmarks</em></h2>
      <div class="divider-gold"></div>
    </div>

    <div class="gallery-grid" data-aos="fade-up">
      <div class="gallery-item big" data-full="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1400&q=80">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=700&q=70" alt="Farmhouse exterior" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/gal1/700/700'">
        <div class="g-icon"><i class="bi bi-arrows-fullscreen"></i></div>
        <div class="g-label">Anandvan Resorts</div>
      </div>
      <div class="gallery-item" data-full="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=500&q=70" alt="Interior lounge" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/gal2/500/400'">
        <div class="g-icon"><i class="bi bi-arrows-fullscreen"></i></div>
        <div class="g-label">Interiors</div>
      </div>
      <div class="gallery-item" data-full="https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1449844908441-8829872d2607?auto=format&fit=crop&w=500&q=70" alt="Mountain landscape" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/gal3/500/400'">
        <div class="g-icon"><i class="bi bi-play-fill"></i></div>
        <div class="g-label">Site Tour</div>
      </div>
      <div class="gallery-item" data-full="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=500&q=70" alt="Nature surroundings" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/gal4/500/400'">
        <div class="g-icon"><i class="bi bi-arrows-fullscreen"></i></div>
        <div class="g-label">Alaknanda Farms</div>
      </div>
      <div class="gallery-item" data-full="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=500&q=70" alt="Orchid Farms view" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/gal5/500/400'">
        <div class="g-icon"><i class="bi bi-arrows-fullscreen"></i></div>
        <div class="g-label">Royal Orchid Farms</div>
      </div>
      <div class="gallery-item" data-full="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=500&q=70" alt="Modern residence" loading="lazy" onerror="this.onerror=null;this.src='https://picsum.photos/seed/gal6/500/400'">
        <div class="g-icon"><i class="bi bi-play-fill"></i></div>
        <div class="g-label">Drone Walkthrough</div>
      </div>
    </div>
  </div>
</section>

<!-- Lightbox modal -->
<div class="modal fade lightbox-modal" id="lightboxModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <img id="lightboxImg" src="" alt="Gallery preview">
    </div>
  </div>
</div>

<!-- ============ WHY CHOOSE US ============ -->
<section class="section-pad bg-navy">
  <div class="container-xl">
    <div class="text-center mx-auto-text mb-5" style="max-width:680px;" data-aos="fade-up">
      <div class="eyebrow center">Why Choose Us</div>
      <h2 class="section-title">The SMD <em>Promise</em></h2>
      <div class="divider-gold"></div>
    </div>

    <div class="row g-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-patch-check-fill"></i></div>
          <h4>RERA-Approved Properties</h4>
          <p>Every plot is legally verified and RERA-compliant, so your investment is protected from day one.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <h4>Prime Locations</h4>
          <p>Strategically chosen sites across Uttar Pradesh &amp; Uttarakhand — close to nature, yet well-connected.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-award-fill"></i></div>
          <h4>10+ Years of Expertise</h4>
          <p>A decade of experience in land development and farmhouse planning, built on measurable results.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-people-fill"></i></div>
          <h4>End-to-End Assistance</h4>
          <p>From documentation to possession, our team guides you through every step of ownership.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="80">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-shield-lock-fill"></i></div>
          <h4>Zero Hidden Charges</h4>
          <p>Complete transparency in every transaction — the price you're quoted is the price you pay.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="160">
        <div class="why-card">
          <div class="why-icon"><i class="bi bi-heart-fill"></i></div>
          <h4>Trusted by Hundreds</h4>
          <p>A growing community of satisfied investors and families who chose SMD for the long term.</p>
        </div>
      </div>
    </div>

    <div class="counters-strip" data-aos="fade-up">
      <div class="counter-item"><b><span data-count="10" data-suffix="+">0</span></b><small>Years of Excellence</small></div>
      <div class="counter-item"><b><span data-count="5" data-suffix="">0</span></b><small>Signature Projects</small></div>
      <div class="counter-item"><b><span data-count="500" data-suffix="+">0</span></b><small>Happy Families</small></div>
      <div class="counter-item"><b><span data-count="100" data-suffix="%">0</span></b><small>Transparent Dealings</small></div>
    </div>
  </div>
</section>

<!-- ============ CONTACT ============ -->
<section class="section-pad bg-cream" id="contact">
  <div class="container-xl">
    <div class="text-center mx-auto-text mb-5" style="max-width:680px;" data-aos="fade-up">
      <div class="eyebrow center">Contact Us</div>
      <h2 class="section-title">Let's Find Your <em>Perfect Plot</em></h2>
      <div class="divider-gold"></div>
      <p class="section-sub mx-auto">Book a site visit or speak with our team — we'll guide you through every step.</p>
    </div>

    <div class="row g-5">
      <div class="col-lg-7" data-aos="fade-right">
        <div class="contact-form-card glass">
          <form id="contactForm">
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control-royal" placeholder="Full Name" required>
              </div>
              <div class="col-md-6">
                <input type="tel" class="form-control-royal" placeholder="Phone Number" required>
              </div>
            </div>
            <input type="email" class="form-control-royal" placeholder="Email Address" required>
            <select class="form-control-royal">
              <option>Interested Project — Anandvan Resorts</option>
              <option>Interested Project — The Royal Orchid Farms</option>
              <option>Interested Project — Alaknanda Farms</option>
              <option>Interested Project — OAK Hill Gardens</option>
              <option>Interested Project — Shri Krishna Enclave</option>
            </select>
            <textarea class="form-control-royal" placeholder="Tell us about your requirement..."></textarea>
            <button type="submit" class="btn-royal w-100 justify-content-center">Send Enquiry <i class="bi bi-send"></i></button>
          </form>
        </div>
      </div>

      <div class="col-lg-5" data-aos="fade-left">
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div>
          <div><h5>Call Us</h5><p>+91 8307 050 700<br>+91 9548 051 243</p></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div>
          <div><h5>Email Us</h5><p>info@summermultidevelopers.com</p></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div><h5>Head Office</h5><p>A-324, Pacific Business Park, Sahibabad, Ghaziabad, Uttar Pradesh – 201010</p></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-icon"><i class="bi bi-building"></i></div>
          <div><h5>Dehradun Office</h5><p>Gali No. 5, NTPC Colony, Pondha, Dehradun, Uttarakhand – 248007</p></div>
        </div>

        <div class="map-frame">
          <iframe src="https://maps.google.com/maps?q=Pacific%20Business%20Park%20Sahibabad%20Ghaziabad&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy" title="SMD Group Head Office Location"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FOOTER ============ -->
<footer class="footer-royal">
  <div class="container-xl">
    <div class="row g-5">
      <div class="col-lg-4 footer-brand">
        <div class="brand">
          <span class="brand-mark">S</span>
          <span class="brand-text"><b style="color:#fff;">SMD Group</b><span>Building the Future</span></span>
        </div>
        <p>Premium plots &amp; luxury farmhouses across Delhi NCR, Uttar Pradesh and Uttarakhand. Invest in land that grows with time and builds your future.</p>
        <div class="footer-social">
          <a href="https://www.facebook.com/share/1Fvk9VGm1x/" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/smdgr_oup" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="https://wa.me/918307050700" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
          <a href="https://youtube.com/@smd_group-smd" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-md-4 footer-col">
        <h6>Quick Links</h6>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#properties">Properties</a></li>
          <li><a href="#reviews">Reviews</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-4 footer-col">
        <h6>Our Projects</h6>
        <ul>
          <li><a href="#signature">Anandvan Resorts</a></li>
          <li><a href="#signature">The Royal Orchid Farms</a></li>
          <li><a href="#signature">Alaknanda Farms</a></li>
          <li><a href="#signature">OAK Hill Gardens</a></li>
          <li><a href="#signature">Shri Krishna Enclave</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-4 footer-col">
        <h6>Contact Info</h6>
        <ul>
          <li><a href="tel:+918307050700"><i class="bi bi-telephone-fill me-1"></i> +91 8307 050 700</a></li>
          <li><a href="mailto:info@summermultidevelopers.com"><i class="bi bi-envelope-fill me-1"></i> info@summermultidevelopers.com</a></li>
          <li><span><i class="bi bi-geo-alt-fill me-1"></i> Ghaziabad, Uttar Pradesh</span></li>
          <li><span><i class="bi bi-geo-alt-fill me-1"></i> Dehradun, Uttarakhand</span></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      Copyright © 2026 <a href="#home">SMD Group</a>. All Rights Reserved.
    </div>
  </div>
</footer>

<!-- Floating buttons -->
<a href="https://wa.me/918307050700" class="whatsapp-float" aria-label="Chat on WhatsApp" target="_blank" rel="noopener"><i class="bi bi-whatsapp"></i></a>
<button class="back-to-top" id="backToTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="js/script.js"></script>
<script>
  /* ============================================================
   SMD GROUP — Interactions & Animations
   ============================================================ */

document.addEventListener("DOMContentLoaded", function () {

  /* Preloader */
  window.addEventListener("load", function () {
    var pre = document.getElementById("preloader");
    setTimeout(function () { pre.classList.add("hide"); }, 400);
  });

  /* AOS init */
  if (window.AOS) {
    AOS.init({ duration: 900, once: true, offset: 80, easing: "ease-out-cubic" });
  }

  /* Navbar scroll state */
  var nav = document.getElementById("mainNav");
  function onScroll() {
    if (window.scrollY > 60) nav.classList.add("scrolled");
    else nav.classList.remove("scrolled");

    var btt = document.getElementById("backToTop");
    if (window.scrollY > 500) btt.classList.add("show");
    else btt.classList.remove("show");
  }
  window.addEventListener("scroll", onScroll);
  onScroll();

  /* Mobile nav toggle */
  var toggle = document.getElementById("navToggle");
  var links = document.getElementById("navLinks");
  toggle.addEventListener("click", function () { links.classList.toggle("open"); });
  links.querySelectorAll("a").forEach(function (a) {
    a.addEventListener("click", function () { links.classList.remove("open"); });
  });

  /* Active link highlight */
  var sections = document.querySelectorAll("section[id]");
  var navAnchors = document.querySelectorAll(".nav-links a[href^='#']");
  window.addEventListener("scroll", function () {
    var pos = window.scrollY + 140;
    sections.forEach(function (sec) {
      if (pos >= sec.offsetTop && pos < sec.offsetTop + sec.offsetHeight) {
        navAnchors.forEach(function (a) { a.classList.remove("active"); });
        var match = document.querySelector(".nav-links a[href='#" + sec.id + "']");
        if (match) match.classList.add("active");
      }
    });
  });

  /* Back to top */
  document.getElementById("backToTop").addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  /* Hero Swiper */
  new Swiper(".heroSwiper", {
    loop: true,
    effect: "fade",
    fadeEffect: { crossFade: true },
    speed: 1400,
    autoplay: { delay: 5500, disableOnInteraction: false },
    pagination: { el: ".hero .swiper-pagination", clickable: true }
  });

  /* Signature Projects Swiper */
  new Swiper(".sigSwiper", {
    slidesPerView: 1.08,
    spaceBetween: 24,
    centeredSlides: false,
    loop: true,
    autoplay: { delay: 4200, disableOnInteraction: true },
    navigation: { nextEl: ".sig-next", prevEl: ".sig-prev" },
    pagination: { el: ".sig-slider .swiper-pagination", clickable: true },
    breakpoints: {
      576: { slidesPerView: 1.4, spaceBetween: 24 },
      768: { slidesPerView: 2.2, spaceBetween: 26 },
      1200: { slidesPerView: 3.1, spaceBetween: 30 }
    }
  });

  /* Testimonials Swiper */
  new Swiper(".testiSwiper", {
    slidesPerView: 1,
    spaceBetween: 26,
    loop: true,
    autoplay: { delay: 5000, disableOnInteraction: false },
    pagination: { el: ".testi-slider .swiper-pagination", clickable: true },
    breakpoints: {
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 }
    }
  });

  /* GSAP counters (About stats + Why choose us) */
  function animateCounter(el) {
    var target = parseFloat(el.getAttribute("data-count"));
    var obj = { val: 0 };
    if (window.gsap) {
      gsap.to(obj, {
        val: target,
        duration: 2.2,
        ease: "power2.out",
        onUpdate: function () {
          el.textContent = Math.floor(obj.val) + (el.getAttribute("data-suffix") || "");
        }
      });
    } else {
      el.textContent = target + (el.getAttribute("data-suffix") || "");
    }
  }

  var counted = new WeakSet();
  var counterEls = document.querySelectorAll("[data-count]");
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting && !counted.has(entry.target)) {
        counted.add(entry.target);
        animateCounter(entry.target);
      }
    });
  }, { threshold: 0.4 });
  counterEls.forEach(function (el) { io.observe(el); });

  /* GSAP scroll reveal for section eyebrows / gold dividers (subtle) */
  if (window.gsap && window.ScrollTrigger) {
    gsap.registerPlugin(ScrollTrigger);
    gsap.utils.toArray(".divider-gold").forEach(function (el) {
      gsap.fromTo(el, { width: 0 }, {
        width: 80, duration: 1.1, ease: "power2.out",
        scrollTrigger: { trigger: el, start: "top 90%" }
      });
    });

    /* Parallax on about media + why-choose bg */
    gsap.utils.toArray(".parallax-img").forEach(function (img) {
      gsap.to(img, {
        yPercent: 12,
        ease: "none",
        scrollTrigger: { trigger: img, start: "top bottom", end: "bottom top", scrub: true }
      });
    });
  }

  /* Lightbox for gallery */
  var lightboxImg = document.getElementById("lightboxImg");
  document.querySelectorAll(".gallery-item[data-full]").forEach(function (item) {
    item.addEventListener("click", function () {
      lightboxImg.src = item.getAttribute("data-full");
      var modal = new bootstrap.Modal(document.getElementById("lightboxModal"));
      modal.show();
    });
  });

  /* Contact form (front-end only demo submit) */
  var form = document.getElementById("contactForm");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      var btn = form.querySelector("button[type=submit]");
      var original = btn.innerHTML;
      btn.innerHTML = "Sending...";
      setTimeout(function () {
        btn.innerHTML = "Message Sent ✓";
        form.reset();
        setTimeout(function () { btn.innerHTML = original; }, 2600);
      }, 900);
    });
  }

});

</script>
</body>
</html>
