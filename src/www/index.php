<!--L'Union des Rolistes (c) 2016 "Association Union des Rolistes & Co." - licensed under CC BY-NC-SA 4.0
https://creativecommons.org/licenses/by-nc-sa/4.0/ - contact.unionrolistes@gmail.com-->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>L'Union des Rôlistes · Fédérer et soutenir le jeu de rôle</title>
<meta name="description" content="L'Union des Rôlistes est une association loi 1901 qui fédère rôlistes, clubs, boutiques et auteurs autour du jeu de rôle. Un lieu safe et neutre pour faire vivre le JDR sous toutes ses formes.">
<meta name="keywords" content="jeu de rôle, JDR, association rôliste, loi 1901, D&D, Pathfinder, Warhammer, rôlistes, communauté Discord">
<meta name="author" content="Association Union des Rôlistes & Co.">
<meta name="theme-color" content="#0e0f12" media="(prefers-color-scheme: dark)">
<meta name="theme-color" content="#f4f5f7" media="(prefers-color-scheme: light)">
<script>(function(){try{var t=localStorage.getItem('ur-theme');if(!t)t=matchMedia('(prefers-color-scheme: light)').matches?'light':'dark';if(t==='light')document.documentElement.setAttribute('data-theme','light');}catch(e){}})();</script>
<link rel="canonical" href="https://site.unionrolistes.fr/">
<meta name="robots" content="index, follow">

<!-- Open Graph -->
<meta property="og:site_name" content="L'Union des Rôlistes">
<meta property="og:title" content="L'Union des Rôlistes · Fédérer et soutenir le jeu de rôle">
<meta property="og:description" content="Fédérer, promouvoir et soutenir le jeu de rôle sous toutes ses formes. Association loi 1901, un lieu safe et neutre pour tous les rôlistes.">
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:url" content="https://site.unionrolistes.fr/">
<meta property="og:image" content="https://site.unionrolistes.fr/img/hydre.png">
<meta property="og:image:alt" content="Blason de l'Union des Rôlistes : une hydre à trois têtes lançant un dé à 20 faces">
<meta property="og:image:width" content="768">
<meta property="og:image:height" content="1059">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@URolistes">
<meta name="twitter:title" content="L'Union des Rôlistes">
<meta name="twitter:description" content="Fédérer, promouvoir et soutenir le jeu de rôle sous toutes ses formes. Association loi 1901.">
<meta name="twitter:image" content="https://site.unionrolistes.fr/img/hydre.png">
<meta name="twitter:image:alt" content="Blason de l'Union des Rôlistes : une hydre à trois têtes lançant un dé à 20 faces">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NGO",
  "name": "L'Union des Rôlistes",
  "alternateName": "Union des Rôlistes & Co.",
  "url": "https://site.unionrolistes.fr/",
  "logo": "https://site.unionrolistes.fr/img/hydre.png",
  "description": "Association loi 1901 qui fédère rôlistes, clubs, boutiques et auteurs autour du jeu de rôle.",
  "foundingDate": "2016",
  "email": "contact.unionrolistes@gmail.com",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Paris",
    "addressRegion": "Île-de-France",
    "addressCountry": "FR"
  },
  "sameAs": [
    "https://twitter.com/URolistes",
    "https://www.facebook.com/union.rolistes/",
    "https://discord.com/invite/rxqqBS8"
  ]
}
</script>

<link rel="icon" type="image/png" href="img/hydre.png">

<style>
/* Police de marque (kit UR), self-hostée -> plus de dependance Google Fonts */
@font-face{
  font-family:'UR Serif';
  src:url('fonts/OldNewspaperTypes.ttf') format('truetype');
  font-weight:100 900;
  font-style:normal;
  font-display:swap;
}
/* =========================================================
   L'UNION DES RÔLISTES — refonte
   Direction : charte enluminée / bannière de guilde
   Encre profonde · lumière de bougie dorée · grain parchemin
   ========================================================= */

:root{
  --ink:        #0e0f12;
  --ink-2:      #141619;
  --panel:      #181b20;
  --panel-2:    #1f242b;
  --line:       #2f343c;
  --line-soft:  #232830;

  --cream:      #eef1f5;
  --parch:      #d3d9e0;
  --muted:      #a7afba;
  --muted-2:    #828b97;

  --silver:        #cfd6df;
  --silver-bright: #f2f5f8;
  --silver-deep:   #8f99a6;
  --steel:      #9aa3ae;
  --steel-soft: #b8c0ca;
  --slate:      #7e8893;
  --slate-soft: #aab2bd;

  --maxw: 1180px;
  --r:    14px;
  --r-lg: 22px;
  --ease: cubic-bezier(.2,.7,.2,1);

  --shadow: 0 24px 60px -28px rgba(0,0,0,.85);
  --glow: 0 0 0 1px rgba(207,214,223,.22), 0 22px 50px -22px rgba(207,214,223,.20);
}

/* ===== Mode clair (neutre blanc/gris) ===== */
html[data-theme="light"]{
  --ink:        #f4f5f7;
  --ink-2:      #ffffff;
  --panel:      #ffffff;
  --panel-2:    #f6f7f9;
  --line:       #d7dbe1;
  --line-soft:  #e6e9ee;
  --cream:      #1a1d22;
  --parch:      #3a3f47;
  --muted:      #5b626c;
  --muted-2:    #7a828d;
  --silver:        #525b66;
  --silver-bright: #20242b;
  --silver-deep:   #828b97;
  --steel:      #5e6772;
  --steel-soft: #444b54;
  --slate:      #6b7480;
  --slate-soft: #525b66;
  --shadow: 0 24px 60px -30px rgba(20,28,40,.28);
  --glow: 0 0 0 1px rgba(40,48,58,.10), 0 18px 40px -22px rgba(40,48,58,.22);
}
/* Ajustements ciblés du mode clair (là où une variable ne suffit pas) */
html[data-theme="light"] body::after{box-shadow:inset 0 0 200px 30px rgba(20,28,40,.05)}
html[data-theme="light"] ::selection{background:rgba(82,91,102,.22);color:#10131a}
html[data-theme="light"] header.site.scrolled{background:rgba(244,245,247,.85);box-shadow:0 12px 30px -24px rgba(20,28,40,.25)}
html[data-theme="light"] .btn--primary{background:linear-gradient(180deg,#2b313a,#1a1d22);color:#f4f5f7}
html[data-theme="light"] .btn--primary:hover{box-shadow:0 0 0 1px rgba(40,48,58,.4),0 26px 50px -18px rgba(40,48,58,.35)}
html[data-theme="light"] .btn--ghost{background:rgba(20,28,40,.02)}
html[data-theme="light"] .donate.featured .tag{background:linear-gradient(180deg,#2b313a,#1a1d22);color:#f4f5f7}
/* Logo/hydre/blasons : sombres en mode clair (au lieu de blancs) */
html[data-theme="light"] .brand .crest{filter:brightness(0) invert(.12)}
html[data-theme="light"] .medallion .hydre{filter:brightness(0) drop-shadow(0 8px 22px rgba(20,28,40,.25))}
html[data-theme="light"] .hero-watermark{filter:brightness(0) invert(.1)}
html[data-theme="light"] .foot-brand img{filter:brightness(0) invert(.12)}

*{box-sizing:border-box}
html{scroll-behavior:smooth;overflow-x:clip}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}

body{
  margin:0;
  background:
    radial-gradient(1200px 700px at 78% -8%, rgba(150,160,172,.16), transparent 60%),
    radial-gradient(1000px 800px at 10% 8%, rgba(150,160,172,.10), transparent 55%),
    radial-gradient(900px 600px at 50% 120%, rgba(206,213,222,.10), transparent 60%),
    var(--ink);
  color:var(--cream);
  font-family:"UR Serif", Georgia, serif;
  font-weight:400;
  font-size:clamp(16px,1.05vw,18px);
  line-height:1.7;
  letter-spacing:.1px;
  overflow-x:hidden;
  -webkit-font-smoothing:antialiased;
}

/* Grain overlay --------------------------------------------------- */
body::before{
  content:"";
  position:fixed; inset:0; z-index:1; pointer-events:none;
  opacity:.05; mix-blend-mode:overlay;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='180' height='180'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
}
/* Vignette -------------------------------------------------------- */
body::after{
  content:""; position:fixed; inset:0; z-index:1; pointer-events:none;
  box-shadow:inset 0 0 240px 40px rgba(0,0,0,.55);
}

h1,h2,h3,.font-display{font-family:"UR Serif", serif;font-weight:700;letter-spacing:.5px;line-height:1.12;color:var(--cream);text-wrap:balance}
p,.lead{text-wrap:pretty}
a{color:inherit;text-decoration:none}
img{max-width:100%;display:block}
::selection{background:rgba(206,213,222,.3);color:#fff}

.wrap{max-width:var(--maxw);margin-inline:auto;padding-inline:clamp(20px,5vw,40px);position:relative;z-index:2}

.eyebrow{
  font-family:"UR Serif",serif;font-weight:600;
  font-size:.72rem;letter-spacing:.34em;text-transform:uppercase;
  color:var(--silver);display:inline-flex;align-items:center;gap:.7em;
}
.eyebrow::before{content:"";width:26px;height:1px;background:linear-gradient(90deg,transparent,var(--silver))}
.eyebrow.center::after{content:"";width:26px;height:1px;background:linear-gradient(90deg,var(--silver),transparent)}

/* Buttons --------------------------------------------------------- */
.btn{
  --bg:var(--silver);
  display:inline-flex;align-items:center;gap:.6em;
  font-family:"UR Serif",serif;font-weight:600;font-size:.86rem;letter-spacing:.06em;
  padding:.85em 1.5em;border-radius:999px;border:1px solid transparent;
  cursor:pointer;transition:transform .35s var(--ease),box-shadow .35s var(--ease),background .35s,color .35s;
  position:relative;white-space:nowrap;
}
.btn svg{width:1.05em;height:1.05em}
.btn--primary{background:linear-gradient(180deg,var(--silver-bright),var(--silver));color:#0e0f12;box-shadow:var(--glow)}
.btn--primary:hover{transform:translateY(-2px);box-shadow:0 0 0 1px rgba(242,245,248,.5),0 26px 50px -18px rgba(206,213,222,.55)}
.btn--ghost{background:rgba(243,231,207,.03);color:var(--cream);border-color:var(--line)}
.btn--ghost:hover{transform:translateY(-2px);border-color:var(--silver);color:var(--silver-bright);background:rgba(206,213,222,.06)}
/* Icônes colorées au survol : cœur rouge sur "Soutenir", blurple sur Discord */
.btn svg{transition:color .3s var(--ease)}
a.btn[href="#soutenir"]:hover svg{color:#ff4d5e}
a.btn[href*="discord.com"]:hover svg{color:#5865f2}

/* =========================================================
   HEADER
   ========================================================= */
header.site{
  position:sticky;top:0;z-index:50;
  backdrop-filter:blur(2px);
  transition:background .4s,border-color .4s,box-shadow .4s;
  border-bottom:1px solid transparent;
}
header.site.scrolled{
  background:rgba(20,17,15,.82);
  border-bottom-color:var(--line-soft);
  box-shadow:0 12px 30px -24px #000;
  backdrop-filter:blur(10px) saturate(120%);
}
header.site .wrap{max-width:1340px}
.nav{display:flex;align-items:center;justify-content:space-between;gap:1.1rem;padding-block:.85rem}
.brand{display:flex;align-items:center;gap:.7rem;flex-shrink:0}
.brand .crest{
  width:38px;height:38px;
  filter:brightness(0) invert(.92);
  transition:transform .6s var(--ease);
}
.brand:hover .crest{transform:rotate(-6deg) scale(1.05)}
.brand b{font-family:"UR Serif",serif;font-weight:700;font-size:1.02rem;letter-spacing:.02em;color:var(--cream);line-height:1}
.brand small{display:block;font-family:"UR Serif",serif;font-weight:500;font-size:.58rem;letter-spacing:.32em;color:var(--silver);text-transform:uppercase;margin-top:3px}

.nav-links{display:flex;align-items:center;gap:1.05rem;list-style:none;margin:0;padding:0}
.nav-links a{
  font-family:"UR Serif",serif;font-size:.78rem;font-weight:500;color:var(--muted);
  letter-spacing:.01em;position:relative;padding:.3em 0;transition:color .3s;white-space:nowrap;
}
.nav-links a::after{content:"";position:absolute;left:0;bottom:-2px;width:0;height:1px;background:var(--silver);transition:width .35s var(--ease)}
.nav-links a:hover{color:var(--cream)}
.nav-links a:hover::after{width:100%}
.nav-cta{display:flex;align-items:center;gap:.6rem}

.burger{display:none;background:none;border:1px solid var(--line);border-radius:10px;width:42px;height:42px;cursor:pointer;color:var(--cream)}
.burger svg{width:20px;height:20px;margin:auto}

.theme-toggle{display:flex;align-items:center;justify-content:center;background:none;border:1px solid var(--line);border-radius:10px;width:42px;height:42px;cursor:pointer;color:var(--cream);transition:border-color .3s,color .3s}
.theme-toggle:hover{border-color:var(--silver);color:var(--silver-bright)}
.theme-toggle svg{width:19px;height:19px}
.theme-toggle .i-moon{display:none}
html[data-theme="light"] .theme-toggle .i-sun{display:none}
html[data-theme="light"] .theme-toggle .i-moon{display:block}

@media (max-width:1000px){
  .nav-links{
    position:fixed;inset:0 0 0 auto;width:min(82vw,340px);
    flex-direction:column;align-items:flex-start;justify-content:center;gap:1.4rem;
    padding:2rem 2.2rem;background:var(--ink-2);border-left:1px solid var(--line);
    transform:translateX(105%);transition:transform .5s var(--ease);box-shadow:var(--shadow);z-index:60;
  }
  .nav-links.open{transform:none}
  .nav-links a{font-size:1.05rem}
  .burger{display:flex}
  .nav-cta{gap:.5rem}
  /* Discord compact (icône seule) pour laisser la place au burger */
  .nav-cta .btn--primary{padding:0;width:42px;height:42px;justify-content:center}
  .nav-cta .btn--primary .btn-label{display:none}
}
@media (max-width:430px){
  .brand span{display:none}   /* logo seul : le burger garde toute la place */
}

/* =========================================================
   HERO
   ========================================================= */
.hero{position:relative;padding-top:clamp(3rem,7vw,5.5rem);padding-bottom:clamp(3.5rem,7vw,6rem);overflow:hidden;isolation:isolate}
.hero-watermark{
  position:absolute;z-index:0;top:50%;right:-6%;translate:0 -50%;
  width:min(720px,68vw);opacity:.06;pointer-events:none;
  filter:brightness(0) invert(.85);
  -webkit-mask-image:linear-gradient(180deg,#000 60%,transparent);
  mask-image:linear-gradient(180deg,#000 60%,transparent);
  animation:breathe 9s ease-in-out infinite;
}
@keyframes breathe{50%{opacity:.10;transform:scale(1.02)}}

.hero-grid{position:relative;z-index:2;display:grid;grid-template-columns:1.15fr .85fr;gap:3rem;align-items:center}
@media (max-width:920px){.hero-grid{grid-template-columns:1fr;gap:2.5rem}}

.hero h1{
  font-size:clamp(2.05rem,6.2vw,4.6rem);font-weight:900;margin:1.1rem 0 0;
  letter-spacing:.01em;text-wrap:balance;
}
.hero h1 .glow{
  background:linear-gradient(180deg,var(--silver-bright),var(--silver-deep));
  -webkit-background-clip:text;background-clip:text;color:transparent;
  text-shadow:0 0 38px rgba(206,213,222,.25);
}
.hero p.lead{font-size:clamp(1.05rem,1.5vw,1.28rem);color:var(--parch);max-width:46ch;margin:1.4rem 0 0;font-weight:300}
.hero p.lead b{font-weight:600;color:var(--cream)}
.hero-actions{display:flex;flex-wrap:wrap;gap:.9rem;margin-top:2rem}

.hero-stats{display:flex;flex-wrap:wrap;gap:2.2rem;margin-top:2.6rem;padding-top:2rem;border-top:1px solid var(--line-soft)}
.stat .num{font-family:"UR Serif",serif;font-weight:700;font-size:clamp(1.7rem,3vw,2.3rem);color:var(--silver-bright);line-height:1;display:flex;align-items:baseline;gap:.06em}
.stat .lbl{font-size:.78rem;color:var(--muted);letter-spacing:.04em;margin-top:.45rem;text-transform:uppercase;font-family:"UR Serif",serif}

/* Crest medallion ------------------------------------------------- */
.medallion{position:relative;display:grid;place-items:center;aspect-ratio:1;max-width:380px;margin-inline:auto}
.medallion .ring{position:absolute;inset:0;border-radius:50%}
.ring.r1{
  background:
    radial-gradient(circle at 50% 38%, rgba(206,213,222,.22), transparent 60%),
    conic-gradient(from 0deg, rgba(206,213,222,.06), rgba(150,160,172,.10), rgba(150,160,172,.07), rgba(206,213,222,.06));
  border:1px solid var(--line);
  box-shadow:inset 0 0 60px rgba(0,0,0,.7), var(--shadow);
}
.ring.r2{inset:9%;border:1px dashed rgba(206,213,222,.28);animation:spin 60s linear infinite}
.ring.r3{inset:16%;border:1px solid var(--line-soft);background:radial-gradient(circle,var(--panel),var(--ink-2))}
@keyframes spin{to{transform:rotate(360deg)}}
@media (prefers-reduced-motion:reduce){.ring.r2{animation:none}}
.medallion .hydre{
  position:relative;z-index:3;width:58%;
  filter:brightness(0) invert(.92) drop-shadow(0 8px 22px rgba(0,0,0,.6));
}
.medallion .seal{
  position:absolute;z-index:4;bottom:6%;left:50%;translate:-50% 0;
  font-family:"UR Serif",serif;font-weight:600;font-size:.6rem;letter-spacing:.3em;text-transform:uppercase;
  color:var(--silver);background:var(--ink);padding:.4em 1em;border-radius:999px;border:1px solid var(--line);
}
/* floating dice */
.die{position:absolute;z-index:3;width:46px;height:46px;color:var(--silver);opacity:.9;filter:drop-shadow(0 10px 18px rgba(0,0,0,.5))}
.die.d-a{top:4%;left:2%;color:var(--steel-soft);animation:float1 7s ease-in-out infinite}
.die.d-b{bottom:8%;right:0;width:38px;color:var(--slate-soft);animation:float2 8.5s ease-in-out infinite}
.die.d-c{top:14%;right:6%;width:30px;animation:float1 6s ease-in-out infinite reverse}
@keyframes float1{50%{transform:translateY(-16px) rotate(12deg)}}
@keyframes float2{50%{transform:translateY(14px) rotate(-14deg)}}
@media (prefers-reduced-motion:reduce){.die{animation:none!important}}

/* =========================================================
   SECTION FRAME
   ========================================================= */
section{position:relative;padding-block:clamp(3.5rem,7vw,6rem)}
.sec-head{max-width:62ch}
.sec-head h2{font-size:clamp(1.9rem,3.6vw,2.9rem);margin:.7rem 0 0}
.sec-head p{color:var(--muted);font-size:1.08rem;margin:.9rem 0 0;font-weight:300}
.sec-head.center{margin-inline:auto;text-align:center}
.divider{height:1px;background:linear-gradient(90deg,transparent,var(--line),transparent);border:0;margin:0}

/* MANIFESTO ------------------------------------------------------- */
.manifesto{display:grid;grid-template-columns:1.25fr .75fr;gap:clamp(2rem,4vw,3.5rem);align-items:start}
@media (max-width:880px){.manifesto{grid-template-columns:1fr}}
.manifesto .body p{margin:0 0 1.1rem;color:var(--parch)}
.manifesto .body p.intro{font-size:1.22rem;color:var(--cream);font-weight:400;line-height:1.6}
.pull{
  border-left:2px solid var(--silver);padding:.2rem 0 .2rem 1.4rem;margin:1.6rem 0;
  font-style:italic;font-size:1.12rem;color:var(--silver-bright);font-weight:400;
}
.facts{display:grid;gap:.9rem}
.fact{
  background:linear-gradient(180deg,var(--panel),var(--ink-2));
  border:1px solid var(--line-soft);border-radius:var(--r);padding:1.1rem 1.25rem;
  display:flex;gap:1rem;align-items:flex-start;transition:border-color .35s,transform .35s var(--ease)}
.fact:hover{border-color:var(--silver);transform:translateY(-3px)}
.fact .ic{flex-shrink:0;width:38px;height:38px;border-radius:10px;display:grid;place-items:center;background:rgba(206,213,222,.08);color:var(--silver);border:1px solid var(--line)}
.fact .ic svg{width:20px;height:20px}
.fact .k{font-family:"UR Serif",serif;font-weight:600;font-size:.95rem;color:var(--cream)}
.fact .v{font-size:.86rem;color:var(--muted);margin-top:.15rem}

/* VALUES ---------------------------------------------------------- */
.values{display:grid;grid-template-columns:repeat(4,1fr);gap:1.2rem}
@media (max-width:980px){.values{grid-template-columns:repeat(2,1fr)}}
@media (max-width:540px){.values{grid-template-columns:1fr}}
.value{
  position:relative;background:linear-gradient(180deg,var(--panel),var(--ink-2));
  border:1px solid var(--line-soft);border-radius:var(--r-lg);padding:1.7rem 1.4rem;overflow:hidden;
  transition:transform .4s var(--ease),border-color .4s,box-shadow .4s;
}
.value::after{content:"";position:absolute;inset:0;background:radial-gradient(420px 200px at 50% -30%,rgba(206,213,222,.12),transparent 70%);opacity:0;transition:opacity .4s}
.value:hover{transform:translateY(-6px);border-color:var(--silver);box-shadow:var(--shadow)}
.value:hover::after{opacity:1}
.value .vic{width:52px;height:52px;border-radius:14px;display:grid;place-items:center;margin-bottom:1.1rem;
  background:radial-gradient(circle at 35% 30%,rgba(206,213,222,.18),rgba(206,213,222,.04));
  border:1px solid var(--line);color:var(--silver-bright);position:relative;z-index:1}
.value .vic svg{width:26px;height:26px}
.value h3{font-size:1.15rem;margin:0 0 .5rem;position:relative;z-index:1}
.value p{font-size:.94rem;color:var(--muted);margin:0;position:relative;z-index:1}

/* SUPPORT --------------------------------------------------------- */
.support{display:grid;grid-template-columns:repeat(2,1fr);gap:1.3rem}
@media (max-width:760px){.support{grid-template-columns:1fr}}
.donate{
  position:relative;border-radius:var(--r-lg);padding:2rem 1.9rem;overflow:hidden;
  background:linear-gradient(180deg,var(--panel-2),var(--ink-2));border:1px solid var(--line);
  transition:transform .4s var(--ease),box-shadow .4s,border-color .4s;display:flex;flex-direction:column;
}
.donate:hover{transform:translateY(-5px);box-shadow:var(--shadow)}
.donate.featured{border-color:rgba(206,213,222,.5);box-shadow:var(--glow)}
.donate .tag{position:absolute;top:1.2rem;right:1.2rem;font-family:"UR Serif",serif;font-size:.62rem;letter-spacing:.18em;text-transform:uppercase;
  padding:.35em .8em;border-radius:999px}
.donate.featured .tag{background:linear-gradient(180deg,var(--silver-bright),var(--silver));color:#0e0f12}
.donate.plain .tag{border:1px solid var(--line);color:var(--muted)}
.donate h3{font-size:1.5rem;margin:.2rem 0 .1rem}
.donate .fees{font-family:"UR Serif",serif;color:var(--silver-bright);font-weight:600;font-size:1rem;margin-bottom:.9rem}
.donate .fees small{color:var(--muted);font-weight:400;font-family:"UR Serif",serif}
.donate p{color:var(--muted);font-size:.96rem;margin:0 0 1.4rem;flex:1}
.donate .btn{align-self:flex-start;margin-top:auto}

/* PARTNERS -------------------------------------------------------- */
.part-group{margin-top:2rem}
.part-group h3{font-size:.86rem;font-family:"UR Serif",serif;letter-spacing:.18em;text-transform:uppercase;color:var(--silver);margin:0 0 1rem;display:flex;align-items:center;gap:.8rem}
.part-group h3::after{content:"";flex:1;height:1px;background:linear-gradient(90deg,var(--line),transparent)}
.chips{display:flex;flex-wrap:wrap;gap:.7rem}
.chip{
  display:inline-flex;align-items:center;gap:.55em;
  background:linear-gradient(180deg,var(--panel),var(--ink-2));border:1px solid var(--line-soft);
  border-radius:999px;padding:.6em 1.1em;font-size:.92rem;color:var(--parch);
  transition:transform .3s var(--ease),border-color .3s,color .3s,background .3s;
}
.chip:hover{transform:translateY(-3px);border-color:var(--silver);color:var(--cream);background:rgba(206,213,222,.06)}
.chip .dot{width:7px;height:7px;border-radius:50%;background:var(--silver)}
.chip.t-com .dot{background:var(--steel-soft)}
.chip.t-place .dot{background:var(--slate-soft)}
.chip.t-tool .dot{background:var(--silver-bright)}

/* PRESTA / SHOP banners ------------------------------------------ */
.band{
  position:relative;border-radius:var(--r-lg);overflow:hidden;
  border:1px solid var(--line);background:linear-gradient(120deg,var(--panel-2),var(--ink-2));
  padding:clamp(2rem,4vw,3rem);
}
.band-grid{display:grid;grid-template-columns:1.3fr .7fr;gap:2rem;align-items:center}
@media (max-width:760px){.band-grid{grid-template-columns:1fr}}
.band h2{font-size:clamp(1.6rem,3vw,2.3rem);margin:.6rem 0 0}
.band p{color:var(--parch);margin:1rem 0 0;font-weight:300}
.band .right{justify-self:end}
@media (max-width:760px){.band .right{justify-self:start}}

.shop-tease{display:flex;align-items:center;gap:1.4rem;flex-wrap:wrap}
.shop-tease .soon{
  font-family:"UR Serif",serif;font-weight:700;font-size:clamp(2.2rem,5vw,3.4rem);
  color:transparent;-webkit-text-stroke:1.3px var(--silver);letter-spacing:.04em;opacity:.8}

/* COMMUNITY CTA --------------------------------------------------- */
.cta-discord{
  text-align:center;border-radius:var(--r-lg);padding:clamp(2.4rem,5vw,4rem);
  border:1px solid var(--line);position:relative;overflow:hidden;
  background:
    radial-gradient(700px 300px at 50% 0%, rgba(206,213,222,.12), transparent 60%),
    linear-gradient(180deg,var(--panel-2),var(--ink-2));
}
.cta-discord h2{font-size:clamp(1.8rem,4vw,2.8rem);margin:1rem 0 .6rem}
.cta-discord p{color:var(--parch);max-width:48ch;margin:0 auto 1.8rem;font-weight:300}
.socials{display:flex;justify-content:center;flex-wrap:wrap;gap:.7rem;margin-top:1.6rem}
.social{
  display:inline-flex;align-items:center;gap:.5em;font-family:"UR Serif",serif;font-size:.8rem;color:var(--muted);
  border:1px solid var(--line-soft);border-radius:999px;padding:.55em 1em;transition:color .3s,border-color .3s,transform .3s}
.social:hover{color:var(--cream);border-color:var(--silver);transform:translateY(-2px)}
.social svg{width:16px;height:16px}

/* FOOTER ---------------------------------------------------------- */
footer.site{border-top:1px solid var(--line-soft);margin-top:2rem;padding-block:3rem 2rem;position:relative;z-index:2}
.foot-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:2.5rem}
@media (max-width:760px){.foot-grid{grid-template-columns:1fr;gap:2rem}}
.foot-brand{display:flex;align-items:center;gap:.8rem;margin-bottom:1rem}
.foot-brand img{width:42px;filter:brightness(0) invert(.9)}
.foot-brand b{font-family:"UR Serif",serif;font-size:1.05rem;color:var(--cream)}
footer.site p{color:var(--muted);font-size:.9rem;margin:.3rem 0}
footer.site h4{font-family:"UR Serif",serif;font-size:.78rem;letter-spacing:.16em;text-transform:uppercase;color:var(--silver);margin:0 0 1rem}
footer.site ul{list-style:none;margin:0;padding:0}
footer.site li{margin-bottom:.55rem}
footer.site li a{color:var(--parch);font-size:.92rem;transition:color .3s}
footer.site li a:hover{color:var(--silver-bright)}
.legal{margin-top:2.5rem;padding-top:1.6rem;border-top:1px solid var(--line-soft);display:flex;flex-wrap:wrap;gap:1rem;justify-content:space-between;align-items:center}
.legal small{color:var(--muted-2);font-size:.78rem;line-height:1.6}
.cc{display:inline-flex;gap:.3rem;align-items:center;opacity:.7}
.cc img{height:18px}

/* reveal animation ------------------------------------------------ */
[data-reveal]{opacity:0;transform:translateY(26px);transition:opacity .8s var(--ease),transform .8s var(--ease)}
[data-reveal].in{opacity:1;transform:none}
[data-reveal][data-d="1"]{transition-delay:.08s}
[data-reveal][data-d="2"]{transition-delay:.16s}
[data-reveal][data-d="3"]{transition-delay:.24s}
[data-reveal][data-d="4"]{transition-delay:.32s}
@media (prefers-reduced-motion:reduce){[data-reveal]{opacity:1;transform:none;transition:none}}
@media (max-width:920px){.hero-watermark{opacity:.045;width:min(420px,80vw);right:-14%}}
@media (max-width:430px){.hero h1{font-size:1.85rem}}</style>
<noscript><style>[data-reveal]{opacity:1!important;transform:none!important}</style></noscript>
</head>
<body>

<!-- ============ HEADER ============ -->
<header class="site" id="top">
  <div class="wrap nav">
    <a class="brand" href="#top" aria-label="Accueil, L'Union des Rôlistes">
      <img class="crest" src="img/hydre.png" alt="">
      <span>
        <b>L'Union des Rôlistes</b>
        <small>Association loi 1901</small>
      </span>
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="#asso">À propos</a></li>
      <li><a href="#valeurs">Nos valeurs</a></li>
      <li><a href="#prestations">Prestations</a></li>
      <li><a href="#partenaires">Partenaires</a></li>
      <li><a href="#soutenir">Nous soutenir</a></li>
      <li><a href="#discord">Communauté</a></li>
    </ul>

    <div class="nav-cta">
      <a class="btn btn--primary" href="https://discord.com/invite/rxqqBS8" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4.4A19 19 0 0 0 15.3 3l-.2.4a17 17 0 0 1 4.2 1.3 17 17 0 0 0-14.6 0A17 17 0 0 1 8.9 3.4L8.7 3A19 19 0 0 0 4 4.4 19.6 19.6 0 0 0 .6 17.5 19 19 0 0 0 6.4 20l.5-1a13 13 0 0 1-2-1l.5-.4a13.6 13.6 0 0 0 11.6 0l.5.4-2 1 .5 1a19 19 0 0 0 5.8-2.5A19.5 19.5 0 0 0 20 4.4ZM8.5 14.7c-1 0-1.8-1-1.8-2.1s.8-2.1 1.8-2.1 1.8 1 1.8 2.1-.8 2.1-1.8 2.1Zm7 0c-1 0-1.8-1-1.8-2.1s.8-2.1 1.8-2.1 1.8 1 1.8 2.1-.8 2.1-1.8 2.1Z"/></svg>
        <span class="btn-label">Discord</span>
      </a>
      <button class="theme-toggle" id="themeToggle" type="button" aria-label="Basculer le thème clair / sombre">
        <svg class="i-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M5 5l1.5 1.5M17.5 17.5 19 19M19 5l-1.5 1.5M6.5 17.5 5 19"/></svg>
        <svg class="i-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.8A9 9 0 1 1 11.2 3 7 7 0 0 0 21 12.8Z"/></svg>
      </button>
      <button class="burger" id="burger" aria-label="Menu" aria-expanded="false">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
      </button>
    </div>
  </div>
</header>

<!-- ============ HERO ============ -->
<section class="hero">
  <img class="hero-watermark" src="img/hydre.png" alt="">
  <div class="wrap hero-grid">
    <div class="hero-copy">
      <span class="eyebrow" data-reveal>Association rôliste · depuis 2016</span>
      <h1 data-reveal data-d="1">Soutenez le jeu de rôle.<br><span class="glow">Rejoignez UnionRôlistes.</span></h1>
      <p class="lead" data-reveal data-d="2">
        L'Union des Rôlistes fédère <b>rôlistes, clubs, boutiques et auteurs indépendants</b>
        sous une même bannière, pour promouvoir le JDR sous toutes ses formes et offrir un lieu
        <b>safe et neutre</b> à toutes et tous.
      </p>
      <div class="hero-actions" data-reveal data-d="3">
        <a class="btn btn--primary" href="#soutenir">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21s-7.5-4.6-10-9.3C.3 8.3 1.7 4.5 5.2 4.5c2 0 3.3 1.2 3.9 2.2.6-1 2-2.2 3.9-2.2 0 0 0 0 0 0 .2 0 .2 0 .2 0 1.9 0 3.3 1.2 3.9 2.2.6-1 1.9-2.2 3.9-2.2 3.5 0 4.9 3.8 3.2 7.2C19.5 16.4 12 21 12 21Z"/></svg>
          Soutenir l'association
        </a>
        <a class="btn btn--ghost" href="#asso">Découvrir UnionRôlistes →</a>
      </div>

      <div class="hero-stats" data-reveal data-d="4">
        <div class="stat"><div class="num"><span data-count="1300">0</span><span style="color:var(--silver)">+</span></div><div class="lbl">membres Discord</div></div>
        <div class="stat"><div class="num"><span data-count="2016">0</span></div><div class="lbl">collectif fondateur</div></div>
        <div class="stat"><div class="num"><span data-count="9">0</span></div><div class="lbl">partenaires</div></div>
        <div class="stat"><div class="num">2019</div><div class="lbl">association déclarée</div></div>
      </div>
    </div>

    <div class="hero-art" data-reveal data-d="2">
      <div class="medallion">
        <div class="ring r1"></div>
        <div class="ring r2"></div>
        <div class="ring r3"></div>
        <!-- floating dice -->
        <svg class="die d-a" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M50 6 92 30v40L50 94 8 70V30Z"/><path d="M50 6 50 38M8 30l30 14M92 30 62 44M38 44 50 94 62 44 38 44ZM38 44 8 70M62 44 92 70"/><text x="50" y="34" font-family="UR Serif" font-size="15" fill="currentColor" stroke="none" text-anchor="middle">20</text></svg>
        <svg class="die d-b" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M50 6 92 30v40L50 94 8 70V30Z"/><path d="M50 6 50 38M8 30l30 14M92 30 62 44M38 44 50 94 62 44 38 44Z"/></svg>
        <svg class="die d-c" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round"><path d="M50 6 92 30v40L50 94 8 70V30Z"/><path d="M50 6 50 38M8 30l30 14M92 30 62 44M38 44 50 94 62 44 38 44Z"/></svg>
        <img class="hydre" id="hydre" src="img/hydre.png" alt="Blason de l'Union des Rôlistes : une hydre à trois têtes lançant un dé à 20 faces" style="content-visibility:auto">
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ============ QUI SOMMES-NOUS ============ -->
<section id="asso">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Qui sommes-nous</span>
      <h2>Une bannière commune pour tous les rôlistes</h2>
    </div>

    <div class="manifesto" style="margin-top:2.5rem">
      <div class="body" data-reveal data-d="1">
        <p class="intro">L'Union des Rôlistes rassemble et fédère associations, clubs, boutiques, auteurs indépendants et rôlistes isolés autour de projets et d'objectifs communs.</p>
        <p>Notre but : favoriser la découverte et le loisir ludique, et faire vivre le jeu de rôle sous toutes ses formes. L'Union n'a pas vocation à supplanter les structures existantes ni à s'immiscer dans leur fonctionnement&nbsp;: nous proposons des <b>actions coordonnées</b> et nous favorisons le dialogue entre passionnés.</p>
        <blockquote class="pull">« Améliorer l'image du jeu de rôle auprès du grand public, et offrir un lieu safe et neutre, quels que soient votre genre, votre neuroatypie, vos origines, votre religion ou vos idéaux. »</blockquote>
        <p>Née comme collectif en août 2016, l'Union est aujourd'hui une association loi 1901, déclarée le 11 mai 2019 et enregistrée à l'INSEE le 29 avril 2019, et agit en collaboration avec la FédéGN.</p>
      </div>

      <div class="facts" data-reveal data-d="2">
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-6h6v6"/></svg></span>
          <div><div class="k">Association loi 1901</div><div class="v">Déclarée le 11/05/2019, à but non lucratif</div></div>
        </div>
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v16"/></svg></span>
          <div><div class="k">Enregistrée à l'INSEE</div><div class="v">Le 29/04/2019 · SIRET 850 580 663</div></div>
        </div>
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2 4 6v6c0 5 3.4 8.5 8 10 4.6-1.5 8-5 8-10V6Z"/><path d="m9 12 2 2 4-4"/></svg></span>
          <div><div class="k">RNA W751252183</div><div class="v">Registre national des associations</div></div>
        </div>
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
          <div><div class="k">Siège à Paris</div><div class="v">Île-de-France</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ VALEURS ============ -->
<section id="valeurs">
  <div class="wrap">
    <div class="sec-head center" data-reveal>
      <span class="eyebrow center">Nos valeurs</span>
      <h2>Ce qui nous rassemble</h2>
      <p>Quatre engagements qui guident chacune de nos actions.</p>
    </div>

    <div class="values" style="margin-top:3rem">
      <article class="value" data-reveal data-d="1">
        <div class="vic"><svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="5" stroke-linejoin="round"><path d="M50 8 88 30v40L50 92 12 70V30Z"/><circle cx="50" cy="38" r="4" fill="currentColor"/><circle cx="35" cy="58" r="4" fill="currentColor"/><circle cx="65" cy="58" r="4" fill="currentColor"/></svg></div>
        <h3>Promouvoir le JDR</h3>
        <p>Faire connaître et faire vivre le jeu de rôle sous toutes ses formes, et favoriser la découverte de ce loisir.</p>
      </article>
      <article class="value" data-reveal data-d="2">
        <div class="vic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="10" r="2.5"/><path d="M3 20c0-3 2.5-5 6-5s6 2 6 5M15 20c0-2 .8-3.5 2-4.3"/></svg></div>
        <h3>Fédérer</h3>
        <p>Réunir associations, clubs, boutiques et joueurs isolés sous une même bannière, autour d'objectifs communs.</p>
      </article>
      <article class="value" data-reveal data-d="3">
        <div class="vic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg></div>
        <h3>Améliorer l'image</h3>
        <p>Changer le regard du grand public sur le JDR par des initiations et des activités ouvertes à toutes et tous.</p>
      </article>
      <article class="value" data-reveal data-d="4">
        <div class="vic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3 5 6v5c0 4.5 3 7.6 7 9 4-1.4 7-4.5 7-9V6Z"/><path d="M12 8v5M9.5 10.5h5"/></svg></div>
        <h3>Lieu safe &amp; neutre</h3>
        <p>Un espace accueillant quels que soient votre genre, votre neuroatypie, vos origines ou vos convictions.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============ PRESTATIONS ============ -->
<section id="prestations">
  <div class="wrap">
    <div class="band" data-reveal>
      <div class="band-grid">
        <div>
          <span class="eyebrow">Nos prestations</span>
          <h2>Une demande de prestation&nbsp;?</h2>
          <p>Pour toute demande de prestation, contactez l'Union des Rôlistes par e-mail&nbsp;: nous vous répondrons directement.</p>
        </div>
        <div class="right">
          <a class="btn btn--primary" href="mailto:contact.unionrolistes@gmail.com?subject=Demande%20de%20prestation">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
            Nous écrire
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ NOUS SOUTENIR ============ -->
<section id="soutenir">
  <div class="wrap">
    <div class="sec-head center" data-reveal>
      <span class="eyebrow center">Nous soutenir</span>
      <h2>Chaque don fait avancer le JDR</h2>
      <p>L'Union est une association loi 1901, à but non lucratif. Chaque don soutient son action en faveur du jeu de rôle.</p>
    </div>

    <div class="support" style="margin-top:3rem">
      <article class="donate featured" data-reveal data-d="1">
        <span class="tag">0% de frais</span>
        <h3>HelloAsso</h3>
        <div class="fees">100% pour le JDR <small>· aucun frais prélevé</small></div>
        <p>La plateforme solidaire des associations. L'intégralité de votre don nous parvient&nbsp;: HelloAsso ne prélève rien aux associations.</p>
        <a class="btn btn--primary" href="https://www.helloasso.com/associations/union-des-rolistes/formulaires/1/widget" target="_blank" rel="noopener">
          Faire un don
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </article>

      <article class="donate plain" data-reveal data-d="2">
        <span class="tag">1,4% de frais</span>
        <h3>PayPal</h3>
        <div class="fees">Don rapide &amp; sécurisé <small>· carte ou compte PayPal</small></div>
        <p>Préférez la simplicité&nbsp;? Soutenez l'Union en quelques clics via PayPal, par carte ou avec votre compte.</p>
        <a class="btn btn--ghost" href="https://www.paypal.com/donate?hosted_button_id=DJ7VAZJGW3VNS" target="_blank" rel="noopener">
          Faire un don
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </article>
    </div>
  </div>
</section>

<!-- ============ PARTENAIRES ============ -->
<section id="partenaires">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Nos partenaires</span>
      <h2>Un réseau de passionnés</h2>
      <p>L'Union travaille main dans la main avec des communautés, des lieux et des outils qui font vivre le jeu de rôle.</p>
    </div>

    <div class="part-group" data-reveal data-d="1">
      <h3>Communautés &amp; Discords spécialisés</h3>
      <div class="chips">
        <span class="chip t-com"><span class="dot"></span>D&amp;D France</span>
        <span class="chip t-com"><span class="dot"></span>Pathfinder-fr</span>
        <span class="chip t-com"><span class="dot"></span>Warhammer France</span>
      </div>
    </div>

    <div class="part-group" data-reveal data-d="2">
      <h3>Lieux physiques · boutiques &amp; bars à jeux</h3>
      <div class="chips">
        <span class="chip t-place"><span class="dot"></span>Le MadMaker</span>
        <span class="chip t-place"><span class="dot"></span>Robin des Jeux</span>
        <span class="chip t-place"><span class="dot"></span>Troll2Jeux</span>
        <span class="chip t-place"><span class="dot"></span>Majestik Game</span>
      </div>
    </div>

    <div class="part-group" data-reveal data-d="3">
      <h3>Outils &amp; services rôlistes</h3>
      <div class="chips">
        <span class="chip t-tool"><span class="dot"></span>Jdr-bot</span>
        <span class="chip t-tool"><span class="dot"></span>Rôfisteam</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ BOUTIQUE ============ -->
<section id="boutique">
  <div class="wrap">
    <div class="band" data-reveal>
      <div class="shop-tease">
        <div style="flex:1;min-width:240px">
          <span class="eyebrow">Notre boutique</span>
          <h2 style="font-size:clamp(1.6rem,3vw,2.3rem);margin:.6rem 0 0">La boutique UnionRôlistes arrive bientôt</h2>
          <p style="color:var(--parch);margin:1rem 0 0;font-weight:300">Restez à l'affût sur notre Discord pour être prévenu·e dès son ouverture.</p>
        </div>
        <div class="soon">Prochainement</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ COMMUNAUTÉ / DISCORD ============ -->
<section id="discord">
  <div class="wrap">
    <div class="cta-discord" data-reveal>
      <span class="eyebrow center">Rejoignez l'aventure</span>
      <h2>Plus de 1300 rôlistes vous attendent</h2>
      <p>Discussions, salons vocaux &amp; textuels gratuits, plus de 80 jeux de rôle joués, et toute l'entraide d'une communauté passionnée : la vie de l'Union se passe sur Discord.</p>
      <a class="btn btn--primary" href="https://discord.com/invite/rxqqBS8" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4.4A19 19 0 0 0 15.3 3l-.2.4a17 17 0 0 1 4.2 1.3 17 17 0 0 0-14.6 0A17 17 0 0 1 8.9 3.4L8.7 3A19 19 0 0 0 4 4.4 19.6 19.6 0 0 0 .6 17.5 19 19 0 0 0 6.4 20l.5-1a13 13 0 0 1-2-1l.5-.4a13.6 13.6 0 0 0 11.6 0l.5.4-2 1 .5 1a19 19 0 0 0 5.8-2.5A19.5 19.5 0 0 0 20 4.4ZM8.5 14.7c-1 0-1.8-1-1.8-2.1s.8-2.1 1.8-2.1 1.8 1 1.8 2.1-.8 2.1-1.8 2.1Zm7 0c-1 0-1.8-1-1.8-2.1s.8-2.1 1.8-2.1 1.8 1 1.8 2.1-.8 2.1-1.8 2.1Z"/></svg>
        Rejoindre le Discord
      </a>
      <div class="socials">
        <a class="social" href="https://twitter.com/URolistes" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.2 2H21l-6.5 7.4L22 22h-6.6l-4.3-5.7L6 22H3.2l7-8L2 2h6.8l3.9 5.2L18.2 2Zm-1.2 18h1.5L7.1 3.6H5.5L17 20Z"/></svg>
          @URolistes
        </a>
        <a class="social" href="https://www.facebook.com/union.rolistes/" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h2.7l.4-3H13V9c0-.9.3-1.5 1.6-1.5H16V4.8c-.3 0-1.3-.1-2.4-.1-2.4 0-4 1.5-4 4.1V11H7v3h2.6v8Z"/></svg>
          Union.rolistes
        </a>
        <a class="social" href="mailto:contact.unionrolistes@gmail.com">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
          contact.unionrolistes@gmail.com
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ FOOTER ============ -->
<footer class="site">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <div class="foot-brand">
          <img src="img/hydre.png" alt="">
          <b>L'Union des Rôlistes</b>
        </div>
        <p>Fédérer, promouvoir et soutenir le jeu de rôle sous toutes ses formes.</p>
        <p>Association loi 1901 · marque déposée.</p>
        <p>Siège à Paris (Île-de-France)</p>
      </div>
      <div>
        <h4>Naviguer</h4>
        <ul>
          <li><a href="#asso">Qui sommes-nous</a></li>
          <li><a href="#valeurs">Nos valeurs</a></li>
          <li><a href="#prestations">Prestations</a></li>
          <li><a href="#partenaires">Partenaires</a></li>
          <li><a href="#soutenir">Nous soutenir</a></li>
        </ul>
      </div>
      <div>
        <h4>Nous suivre</h4>
        <ul>
          <li><a href="https://discord.com/invite/rxqqBS8" target="_blank" rel="noopener">Discord</a></li>
          <li><a href="https://twitter.com/URolistes" target="_blank" rel="noopener">@URolistes sur Twitter / X</a></li>
          <li><a href="https://www.facebook.com/union.rolistes/" target="_blank" rel="noopener">Facebook</a></li>
          <li><a href="mailto:contact.unionrolistes@gmail.com">contact.unionrolistes@gmail.com</a></li>
        </ul>
      </div>
    </div>

    <div class="legal">
      <small>
        © 2016–2026 Association Union des Rôlistes &amp; Co. · SIRET 850 580 663 · RNA W751252183<br>
        Contenu sous licence Creative Commons BY-NC-SA 4.0. Nous contacter pour toute dérogation.
      </small>
      <a class="cc" href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank" rel="license noopener" title="CC BY-NC-SA 4.0">
        <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" alt="">
        <img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" alt="">
        <img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg" alt="">
        <img src="https://mirrors.creativecommons.org/presskit/icons/sa.svg" alt="">
      </a>
    </div>
  </div>
</footer>

<script>
(function(){
  "use strict";
  var doc=document;

  /* sticky header state */
  var header=doc.querySelector("header.site");
  var onScroll=function(){header.classList.toggle("scrolled",window.scrollY>20)};
  onScroll();window.addEventListener("scroll",onScroll,{passive:true});

  /* mobile menu */
  var burger=doc.getElementById("burger");
  var links=doc.getElementById("navLinks");
  burger.addEventListener("click",function(){
    var open=links.classList.toggle("open");
    burger.setAttribute("aria-expanded",open);
  });
  links.addEventListener("click",function(e){
    if(e.target.tagName==="A")links.classList.remove("open");
  });

  /* theme toggle (clair / sombre) */
  var tbtn=doc.getElementById("themeToggle");
  if(tbtn){tbtn.addEventListener("click",function(){
    var isLight=doc.documentElement.getAttribute("data-theme")==="light";
    if(isLight){doc.documentElement.removeAttribute("data-theme");}
    else{doc.documentElement.setAttribute("data-theme","light");}
    try{localStorage.setItem("ur-theme",isLight?"dark":"light");}catch(e){}
  });}

  /* reveal on scroll */
  var reveals=doc.querySelectorAll("[data-reveal]");
  if("IntersectionObserver"in window){
    var io=new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        if(en.isIntersecting){en.target.classList.add("in");io.unobserve(en.target);}
      });
    },{threshold:.12,rootMargin:"0px 0px -8% 0px"});
    reveals.forEach(function(el){io.observe(el);});
  }else{
    reveals.forEach(function(el){el.classList.add("in");});
  }

  /* count-up stats */
  var counters=doc.querySelectorAll("[data-count]");
  var animate=function(el){
    var target=+el.getAttribute("data-count"),start=null,dur=1500;
    var step=function(ts){
      if(!start)start=ts;
      var p=Math.min((ts-start)/dur,1);
      var eased=1-Math.pow(1-p,3);
      el.textContent=Math.round(target*eased).toLocaleString("fr-FR");
      if(p<1)requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };
  if("IntersectionObserver"in window){
    var io2=new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        if(en.isIntersecting){animate(en.target);io2.unobserve(en.target);}
      });
    },{threshold:.6});
    counters.forEach(function(el){io2.observe(el);});
  }else{
    counters.forEach(function(el){el.textContent=(+el.getAttribute("data-count")).toLocaleString("fr-FR");});
  }

  /* playful: click the crest to "roll" */
  var hydre=doc.getElementById("hydre");
  if(hydre){
    hydre.style.cursor="pointer";
    hydre.title="Lancez le dé !";
    hydre.addEventListener("click",function(){
      hydre.animate(
        [{transform:"rotate(0) scale(1)"},{transform:"rotate(380deg) scale(1.08)"},{transform:"rotate(720deg) scale(1)"}],
        {duration:900,easing:"cubic-bezier(.2,.7,.2,1)"}
      );
    });
  }
})();
</script>
</body>
</html>
