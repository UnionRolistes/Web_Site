<!--L'Union des Rolistes (c) 2016 "Association Union des Rolistes & Co." - licensed under CC BY-NC-ND 4.0
https://creativecommons.org/licenses/by-nc-nd/4.0/ - contact.unionrolistes@gmail.com-->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>L'Union des Rôlistes · Fédérer et soutenir le jeu de rôle</title>
<meta name="description" content="L'Union des Rôlistes est une association loi 1901 qui fédère rôlistes, clubs, boutiques et auteurs autour du jeu de rôle. Un lieu safe et neutre pour faire vivre le JDR.">
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
<link rel="preload" href="fonts/OldNewspaperTypes.ttf" as="font" type="font/ttf" crossorigin>

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
   Encre profonde · lumière froide argentée · grain parchemin
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
  --ink:        #e7e9ef;   /* fond plus gris -> les cartes blanches ressortent */
  --ink-2:      #ffffff;
  --panel:      #ffffff;
  --panel-2:    #f3f5f9;
  --line:       #c6ccd6;   /* bordures nettes */
  --line-soft:  #d9dee6;
  --cream:      #13161b;   /* titres / texte fort */
  --parch:      #2b303a;   /* texte courant plus foncé */
  --muted:      #49515d;
  --muted-2:    #595f6c;
  --silver:        #444d5b;
  --silver-bright: #1a1e26;
  --silver-deep:   #79828f;
  --steel:      #515a66;
  --steel-soft: #3a414b;
  --slate:      #606977;
  --slate-soft: #444d5b;
  --shadow: 0 20px 48px -22px rgba(18,26,40,.38);
  --glow: 0 0 0 1px rgba(30,38,52,.14), 0 16px 36px -20px rgba(30,38,52,.30);
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
html[data-theme="light"] .medallion:hover .hydre{filter:brightness(0) drop-shadow(0 8px 22px rgba(20,28,40,.25)) drop-shadow(0 0 13px rgba(95,108,124,.28))}
html[data-theme="light"] .hero-watermark{filter:brightness(0) invert(.1)}
html[data-theme="light"] .foot-brand img{filter:brightness(0) invert(.12)}
/* Pop de résultat : accents crit/échec lisibles sur fond clair */
html[data-theme="light"] .dice-pop.crit{border-color:rgba(38,138,77,.5)}
html[data-theme="light"] .dice-pop.crit .pl{color:#218046}
html[data-theme="light"] .dice-pop.fail{border-color:rgba(199,55,55,.45)}
html[data-theme="light"] .dice-pop.fail .pl{color:#c93636}

*{box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:2rem}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}
.skip-link{position:absolute;left:8px;top:-56px;z-index:100;background:var(--ink-2);color:var(--cream);border:1px solid var(--line);padding:.55em 1.1em;border-radius:8px;font-family:"UR Serif",serif;font-size:.9rem;transition:top .2s}
.skip-link:focus{top:8px}

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

/* Trame de fond : hydre fixe en filigrane, le contenu défile par-dessus */
.page-trame{
  position:fixed; z-index:0; top:50%; left:50%; translate:-50% -50%;
  width:min(820px,86vw); opacity:.04; pointer-events:none; user-select:none;
  filter:brightness(0) invert(.9);
  -webkit-mask-image:radial-gradient(closest-side,#000 55%,transparent);
  mask-image:radial-gradient(closest-side,#000 55%,transparent);
}
html[data-theme="light"] .page-trame{filter:brightness(0) invert(.12);opacity:.05}
@media (max-width:700px){.page-trame{width:min(420px,82vw);opacity:.03}}

/* Braises / poussière qui dérivent lentement dans l'ombre (ambiance, mode sombre uniquement) */
.embers{position:fixed;inset:0;z-index:0;pointer-events:none;overflow:hidden}
.ember{position:absolute;bottom:-20px;border-radius:50%;background:radial-gradient(circle,rgba(207,214,223,.8),transparent 70%);opacity:0;animation:emberRise linear infinite}
@keyframes emberRise{0%{transform:translateY(0) translateX(0);opacity:0}12%{opacity:var(--o,.4)}88%{opacity:var(--o,.4)}100%{transform:translateY(-108vh) translateX(var(--dx,8px));opacity:0}}
html[data-theme="light"] .embers{display:none}
@media (prefers-reduced-motion:reduce){.embers{display:none}}

/* Secrets : forme invisible de base ; un petit point scintille faiblement de temps en temps ; révélés au survol (desktop, sombre) */
.secret{position:absolute; width:52px; height:auto; pointer-events:none; z-index:0}
.secret .shape{display:block; width:100%; height:auto; color:var(--silver); filter:drop-shadow(0 0 5px rgba(207,214,223,.55));
  -webkit-mask-image:radial-gradient(60px circle at var(--lx,-999px) var(--ly,-999px), #000 24%, rgba(0,0,0,.25) 56%, transparent 80%);
  mask-image:radial-gradient(60px circle at var(--lx,-999px) var(--ly,-999px), #000 24%, rgba(0,0,0,.25) 56%, transparent 80%)}
@supports not ((mask-image:radial-gradient(#000,#000)) or (-webkit-mask-image:radial-gradient(#000,#000))){.secret .shape{display:none}}
.secret.hydra{width:58px}
.secret.hydra .shape{filter:brightness(0) invert(.85) drop-shadow(0 0 7px rgba(207,214,223,.4))}
.secret .spark{position:absolute; top:50%; left:50%; width:10px; height:10px; margin:-5px 0 0 -5px; border-radius:50%; background:radial-gradient(circle, rgba(231,236,242,.7) 0%, rgba(231,236,242,.2) 38%, transparent 72%); filter:blur(.4px); opacity:0; animation:secretSpark 9s ease-in-out infinite}
@keyframes secretSpark{0%,90%,100%{opacity:0}95%{opacity:.45}}
html[data-theme="light"] .secret{display:none}
@media (hover:none){.secret{display:none}}
@media (prefers-reduced-motion:reduce){.secret .spark{animation:none}}
/* Code secret (Konami / "hydre") : révèle tous les secrets d'un coup */
body.secrets-revealed .secret{display:block}
body.secrets-revealed .secret .shape{-webkit-mask-image:none;mask-image:none;animation:secretReveal .8s ease both}
body.secrets-revealed .secret .spark{display:none}
@keyframes secretReveal{0%{opacity:0;transform:scale(.6)}60%{opacity:.85;transform:scale(1.12)}100%{opacity:.7;transform:scale(1)}}
.secret-toast{position:fixed;left:50%;bottom:32px;translate:-50% 12px;z-index:80;font-family:"UR Serif",serif;font-size:.9rem;letter-spacing:.03em;color:var(--cream);background:linear-gradient(180deg,var(--panel-2),var(--ink-2));border:1px solid var(--line);padding:.7em 1.25em;border-radius:999px;box-shadow:var(--shadow);opacity:0;transition:opacity .5s ease,translate .5s ease;pointer-events:none}
.secret-toast.show{opacity:1;translate:-50% 0}
@media (prefers-reduced-motion:reduce){body.secrets-revealed .secret .shape{animation:none;opacity:.7}}

/* Lettrine enluminée sur l'intro du manifeste */
.manifesto .body p.intro::first-letter{
  float:left; font-family:"UR Serif",serif; font-weight:900;
  font-size:3.05em; line-height:.9;
  margin:.04em .22em .02em 0; padding:.1em .2em;
  color:var(--silver-bright);
  background:linear-gradient(180deg,var(--panel-2),var(--ink-2));
  border:1px solid var(--line); border-radius:7px;
  box-shadow:var(--glow);
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
.btn--ghost{background:rgba(206,213,222,.03);color:var(--cream);border-color:var(--line)}
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
  background:rgba(14,15,18,.82);
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
  font-family:"UR Serif",serif;font-size:.9rem;font-weight:500;color:var(--muted);
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

.burger .i-x{display:none}
@media (max-width:1000px){
  /* Menu mobile PLEIN ÉCRAN */
  .nav-links{
    position:fixed;inset:0;margin:0;list-style:none;
    flex-direction:column;align-items:center;justify-content:center;gap:.3rem;
    padding:5.5rem 1.5rem 2rem;background:var(--ink-2);
    transform:translateX(100%);visibility:hidden;transition:transform .4s var(--ease),visibility .4s;z-index:62;overflow-y:auto;
  }
  .nav-links.open{transform:none;visibility:visible}
  /* le backdrop-filter du header crée un bloc conteneur pour le menu fixed -> le retirer en mobile pour qu'il prenne tout l'écran */
  header.site,header.site.scrolled{backdrop-filter:none;-webkit-backdrop-filter:none}
  .nav-links li{width:100%;max-width:320px}
  .nav-links a{display:block;width:100%;text-align:center;font-size:1.3rem;padding:.75rem 1rem;border-radius:12px;color:var(--cream);transition:background .2s,color .2s}
  .nav-links a::after{display:none}
  .nav-links a:hover,.nav-links a:active{background:rgba(207,214,223,.10);color:var(--silver-bright)}
  .burger{display:flex;position:relative;z-index:63}
  .burger[aria-expanded="true"] .i-menu{display:none}
  .burger[aria-expanded="true"] .i-x{display:block}
  .nav-cta{gap:.5rem}
  .nav-cta .btn--primary{padding:0;width:42px;height:42px;justify-content:center}
  .nav-cta .btn--primary .btn-label{display:none}
}
@media (max-width:430px){
  .brand span{display:none}   /* logo seul : le burger garde toute la place */
}

/* =========================================================
   HERO
   ========================================================= */
.hero{position:relative;padding-top:clamp(3rem,7vw,5.5rem);padding-bottom:clamp(2.5rem,4.5vw,4rem);overflow:hidden;isolation:isolate}
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
.ring.r3{inset:16%;border:1px solid var(--line-soft);background:radial-gradient(circle,#0a0c0f,#000)}
html[data-theme="light"] .ring.r3{background:radial-gradient(circle,#ffffff,#e7eaef)}
@keyframes spin{to{transform:rotate(360deg)}}
@media (prefers-reduced-motion:reduce){.ring.r2,.hero-watermark{animation:none}}
.medallion .hydre{
  position:relative;z-index:3;width:58%;
  filter:brightness(0) invert(.92) drop-shadow(0 8px 22px rgba(0,0,0,.6));
  transition:filter .55s ease;
}
/* l'hydre s'éveille au survol : léger halo argenté + dés ravivés */
.medallion:hover .hydre{filter:brightness(0) invert(.92) drop-shadow(0 8px 22px rgba(0,0,0,.6)) drop-shadow(0 0 12px rgba(207,214,223,.22))}
.medallion:hover .die{opacity:1}
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

/* Sceau de résultat au lancer de dés : discret, au-dessus du médaillon, raccord charte */
.dice-pop{
  position:absolute; z-index:6; left:50%; bottom:100%; translate:-50% -16px;
  display:inline-flex; align-items:baseline; gap:.42em; white-space:nowrap;
  padding:.32em .8em; border-radius:999px;
  background:linear-gradient(180deg,var(--panel-2),var(--ink-2));
  border:1px solid var(--line); box-shadow:var(--shadow);
  color:var(--cream); font-family:"UR Serif",serif;
  opacity:0; scale:.7; pointer-events:none;
  transition:opacity .2s var(--ease), scale .2s var(--ease);
}
.dice-pop.show{opacity:1; scale:1; animation:dicepop .5s var(--ease)}
.dice-pop .pn{font-weight:900; font-size:1.05rem; line-height:1}
.dice-pop .pl{font-size:.52rem; letter-spacing:.16em; text-transform:uppercase; font-weight:700; color:var(--muted)}
.dice-pop.crit{border-color:rgba(143,202,163,.55)}
.dice-pop.crit .pl{color:#8fcaa3}
.dice-pop.fail{border-color:rgba(224,114,111,.5)}
.dice-pop.fail .pl{color:#e0726f}
@keyframes dicepop{0%{rotate:-5deg;scale:.7}55%{rotate:2.5deg;scale:1.06}100%{rotate:0;scale:1}}
@media (prefers-reduced-motion:reduce){.dice-pop.show{animation:none}}

/* ===== Animations des icônes au survol (desktop) ===== */
/* Prestations */
.ico-sword,.ico-robot{transform-origin:center}
.ico-chest .lid{transform-box:view-box;transform-origin:12px 11px;transition:transform .5s var(--ease)}
.value:hover .ico-chest .lid{transform:translateY(-5px) rotate(-20deg)}
.ico-compass .needle{transform-box:view-box;transform-origin:12px 12px}
.value:hover .ico-compass .needle{animation:ic-spin 1s var(--ease)}
.ico-robot .antenna{transform-box:view-box;transform-origin:12px 8px}
.value:hover .ico-robot{animation:ic-bob .7s var(--ease)}
.value:hover .ico-robot .antenna{animation:ic-wiggle .7s var(--ease)}
.value:hover .ico-sword{animation:ic-slash .7s var(--ease)}
/* Valeurs : d20, bannière, torche, écu */
#valeurs .values .value .vic svg{transform-origin:center}
#valeurs .values .value:nth-child(1):hover .vic svg{animation:ic-roll .85s var(--ease)}
#valeurs .values .value:nth-child(2):hover .vic svg{animation:ic-wave .8s var(--ease)}
#valeurs .values .value:nth-child(3):hover .vic svg{animation:ic-flicker .7s var(--ease)}
#valeurs .values .value:nth-child(4):hover .vic svg{animation:ic-pulse .65s var(--ease)}
/* Faits : parchemin, sceau, grimoire, carte */
#asso .facts .fact .ic svg{transform-origin:center}
#asso .facts .fact:nth-child(1):hover .ic svg{animation:ic-bob .75s var(--ease)}
#asso .facts .fact:nth-child(2):hover .ic svg{animation:ic-stamp .6s var(--ease)}
#asso .facts .fact:nth-child(3):hover .ic svg{animation:ic-tilt .75s var(--ease)}
#asso .facts .fact:nth-child(4):hover .ic svg{animation:ic-unfold .65s var(--ease)}

@keyframes ic-slash{0%{transform:rotate(0)}25%{transform:rotate(-22deg) translateY(-2px)}55%{transform:rotate(15deg)}80%{transform:rotate(-5deg)}100%{transform:rotate(0)}}
@keyframes ic-spin{0%{transform:rotate(0)}70%{transform:rotate(385deg)}100%{transform:rotate(360deg)}}
@keyframes ic-bob{0%,100%{transform:translateY(0) rotate(0)}35%{transform:translateY(-3px) rotate(-4deg)}70%{transform:translateY(0) rotate(4deg)}}
@keyframes ic-wiggle{0%,100%{transform:rotate(0)}25%{transform:rotate(-22deg)}55%{transform:rotate(16deg)}}
@keyframes ic-roll{0%{transform:rotate(0) scale(1)}50%{transform:rotate(200deg) scale(1.12)}100%{transform:rotate(360deg) scale(1)}}
@keyframes ic-wave{0%,100%{transform:rotate(0)}30%{transform:rotate(-7deg)}65%{transform:rotate(5deg)}}
@keyframes ic-flicker{0%,100%{transform:scale(1) rotate(0)}20%{transform:scale(1.1) translateY(-1px) rotate(-3deg)}45%{transform:scale(.96) rotate(3deg)}70%{transform:scale(1.05) rotate(-1deg)}}
@keyframes ic-pulse{0%{transform:scale(1) rotate(0)}40%{transform:scale(1.14) rotate(-5deg)}70%{transform:scale(.97) rotate(3deg)}100%{transform:scale(1)}}
@keyframes ic-stamp{0%{transform:scale(1)}30%{transform:scale(.82)}55%{transform:scale(1.1)}80%{transform:scale(.97)}100%{transform:scale(1)}}
@keyframes ic-tilt{0%,100%{transform:rotate(0)}40%{transform:rotate(-8deg) translateY(-1px)}70%{transform:rotate(5deg)}}
@keyframes ic-unfold{0%{transform:scaleX(1)}45%{transform:scaleX(1.1) skewX(-4deg)}100%{transform:scaleX(1)}}
@media (prefers-reduced-motion:reduce){
  .value:hover svg,.value:hover .lid,#valeurs .value:hover .vic svg,#asso .fact:hover .ic svg{animation:none!important;transition:none!important}
}

/* =========================================================
   SECTION FRAME
   ========================================================= */
section{position:relative;padding-block:clamp(2.5rem,4.5vw,4rem)}
.sec-head{max-width:62ch}
.sec-head h2{font-size:clamp(1.9rem,3.6vw,2.9rem);margin:.7rem 0 0}
.sec-head p{color:var(--muted);font-size:1.08rem;margin:.9rem 0 0;font-weight:300}
.sec-head.center{margin-inline:auto;text-align:center}
.divider{height:1px;background:linear-gradient(90deg,transparent,var(--line),transparent);border:0;margin:0}
/* Séparateur héraldique (fleuron façon enluminure) */
.ornament{display:flex;align-items:center;justify-content:center;gap:1.1rem;max-width:660px;margin:-.6rem auto;padding:0 1.5rem;color:var(--silver-deep)}
.ornament svg{width:54px;height:auto;flex:none;opacity:.85}
.ornament .o-l{height:1px;flex:1;background:linear-gradient(90deg,transparent,var(--line))}
.ornament .o-l:last-child{background:linear-gradient(90deg,var(--line),transparent)}
/* Glossaire : étiquette-parchemin au survol d'un terme de jargon */
.gloss{text-decoration:underline dotted var(--silver);text-underline-offset:3px;text-decoration-thickness:1px;cursor:help;position:relative}
.gloss::after{content:attr(data-tip);position:absolute;left:50%;bottom:calc(100% + 10px);translate:-50% 4px;width:max-content;max-width:240px;white-space:normal;
  font-family:"UR Serif",serif;font-size:.8rem;font-weight:400;line-height:1.45;letter-spacing:normal;text-transform:none;color:var(--parch);
  background:linear-gradient(180deg,var(--panel-2),var(--ink-2));border:1px solid var(--line);border-radius:10px;padding:.6em .8em;box-shadow:var(--shadow);
  opacity:0;pointer-events:none;transition:opacity .22s ease,translate .22s ease;z-index:40}
.gloss:hover::after,.gloss:focus-visible::after{opacity:1;translate:-50% 0}
@media (hover:none){.gloss::after{display:none}}

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
<a href="#contenu" class="skip-link">Aller au contenu</a>
<img class="page-trame" src="img/hydre.png" alt="" aria-hidden="true" loading="lazy">
<div class="embers" aria-hidden="true"><span class="ember" style="left:6%;width:3px;height:3px;--o:.4;--dx:12px;animation-duration:22s;animation-delay:-3s"></span><span class="ember" style="left:14%;width:2px;height:2px;--o:.3;--dx:-10px;animation-duration:26s;animation-delay:-12s"></span><span class="ember" style="left:23%;width:4px;height:4px;--o:.32;--dx:18px;animation-duration:19s;animation-delay:-7s"></span><span class="ember" style="left:31%;width:2px;height:2px;--o:.42;--dx:-6px;animation-duration:24s;animation-delay:-18s"></span><span class="ember" style="left:39%;width:3px;height:3px;--o:.3;--dx:14px;animation-duration:21s;animation-delay:-2s"></span><span class="ember" style="left:47%;width:2px;height:2px;--o:.38;--dx:-16px;animation-duration:27s;animation-delay:-14s"></span><span class="ember" style="left:55%;width:3px;height:3px;--o:.34;--dx:8px;animation-duration:18s;animation-delay:-9s"></span><span class="ember" style="left:63%;width:4px;height:4px;--o:.28;--dx:-12px;animation-duration:23s;animation-delay:-5s"></span><span class="ember" style="left:70%;width:2px;height:2px;--o:.42;--dx:16px;animation-duration:25s;animation-delay:-20s"></span><span class="ember" style="left:78%;width:3px;height:3px;--o:.33;--dx:-8px;animation-duration:20s;animation-delay:-11s"></span><span class="ember" style="left:85%;width:2px;height:2px;--o:.4;--dx:10px;animation-duration:28s;animation-delay:-4s"></span><span class="ember" style="left:92%;width:3px;height:3px;--o:.3;--dx:-14px;animation-duration:22s;animation-delay:-16s"></span><span class="ember" style="left:18%;width:2px;height:2px;--o:.3;--dx:6px;animation-duration:30s;animation-delay:-23s"></span><span class="ember" style="left:60%;width:2px;height:2px;--o:.34;--dx:-6px;animation-duration:29s;animation-delay:-26s"></span></div>

<!-- ============ HEADER ============ -->
<header class="site" id="top">
  <div class="wrap nav">
    <a class="brand" href="#top" aria-label="Accueil, L'Union des Rôlistes">
      <img class="crest" src="img/hydre.png" alt="" fetchpriority="high">
      <span>
        <b>L'Union des Rôlistes</b>
        <small>Association loi 1901</small>
      </span>
    </a>

    <nav aria-label="Navigation principale" style="display:contents">
    <ul class="nav-links" id="navLinks">
      <li><a href="#asso">À propos</a></li>
      <li><a href="#valeurs">Nos valeurs</a></li>
      <li><a href="#prestations">Prestations</a></li>
      <li><a href="#soutenir">Nous soutenir</a></li>
      <li><a href="#partenaires">Partenaires</a></li>
      <li><a href="#discord">Communauté</a></li>
    </ul>
    </nav>

    <div class="nav-cta">
      <a class="btn btn--primary" href="https://discord.com/invite/rxqqBS8" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4.4A19 19 0 0 0 15.3 3l-.2.4a17 17 0 0 1 4.2 1.3 17 17 0 0 0-14.6 0A17 17 0 0 1 8.9 3.4L8.7 3A19 19 0 0 0 4 4.4 19.6 19.6 0 0 0 .6 17.5 19 19 0 0 0 6.4 20l.5-1a13 13 0 0 1-2-1l.5-.4a13.6 13.6 0 0 0 11.6 0l.5.4-2 1 .5 1a19 19 0 0 0 5.8-2.5A19.5 19.5 0 0 0 20 4.4ZM8.5 14.7c-1 0-1.8-1-1.8-2.1s.8-2.1 1.8-2.1 1.8 1 1.8 2.1-.8 2.1-1.8 2.1Zm7 0c-1 0-1.8-1-1.8-2.1s.8-2.1 1.8-2.1 1.8 1 1.8 2.1-.8 2.1-1.8 2.1Z"/></svg>
        <span class="btn-label">Discord</span>
      </a>
      <button class="theme-toggle" id="themeToggle" type="button" aria-label="Basculer le thème clair / sombre">
        <svg class="i-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2M5 5l1.5 1.5M17.5 17.5 19 19M19 5l-1.5 1.5M6.5 17.5 5 19"/></svg>
        <svg class="i-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.8A9 9 0 1 1 11.2 3 7 7 0 0 0 21 12.8Z"/></svg>
      </button>
      <button class="burger" id="burger" aria-label="Menu" aria-controls="navLinks" aria-expanded="false">
        <svg class="i-menu" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
        <svg class="i-x" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6 6 18"/></svg>
      </button>
    </div>
  </div>
</header>

<main id="contenu">

<!-- ============ HERO ============ -->
<section class="hero">
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
        <div class="stat"><div class="num"><span data-count="1300" data-roll>0</span><span style="color:var(--silver)">+</span></div><div class="lbl">membres Discord</div></div>
        <div class="stat"><div class="num"><span data-count="2016">0</span></div><div class="lbl">collectif fondateur</div></div>
        <div class="stat"><div class="num"><span data-count="9" data-roll>0</span></div><div class="lbl">partenaires</div></div>
        <div class="stat"><div class="num">2019</div><div class="lbl">association déclarée</div></div>
      </div>
    </div>

    <div class="hero-art" data-reveal data-d="2">
      <div class="medallion" role="button" tabindex="0" aria-label="Lancer les dés (d100)">
        <div class="ring r1"></div>
        <div class="ring r2"></div>
        <div class="ring r3"></div>
        <!-- floating dice -->
        <svg class="die d-a" viewBox="0 0 120 120" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round" stroke-linecap="round"><polygon points="60,8 110,46 60,112 10,46"/><path d="M10,46 60,64 110,46 M60,8 41,50 79,50 M41,50 60,64 79,50 M60,64 60,112"/></svg>
        <svg class="die d-b" viewBox="0 0 120 120" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round" stroke-linecap="round"><polygon points="60,8 110,46 60,112 10,46"/><path d="M10,46 60,64 110,46 M60,8 41,50 79,50 M41,50 60,64 79,50 M60,64 60,112"/></svg>
        <svg class="die d-c" viewBox="0 0 120 120" fill="none" stroke="currentColor" stroke-width="3" stroke-linejoin="round" stroke-linecap="round"><polygon points="60,8 110,46 60,112 10,46"/><path d="M10,46 60,64 110,46 M60,8 41,50 79,50 M41,50 60,64 79,50 M60,64 60,112"/></svg>
        <img class="hydre" id="hydre" src="img/hydre.png" alt="Blason de l'Union des Rôlistes : une hydre à trois têtes lançant les dés">
        <div class="dice-pop" role="status" aria-live="polite"></div>
      </div>
    </div>
  </div>
</section>

<div class="ornament" aria-hidden="true"><span class="o-l"></span><svg viewBox="0 0 48 16" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"><path d="M24 2l3.5 6-3.5 6-3.5-6z"/><path d="M20.5 8h-6M14.5 8c-2-2.2-4.2-2.2-6.5 0M14.5 8c-2 2.2-4.2 2.2-6.5 0M27.5 8h6M33.5 8c2-2.2 4.2-2.2 6.5 0M33.5 8c2 2.2 4.2 2.2 6.5 0"/></svg><span class="o-l"></span></div>

<!-- ============ QUI SOMMES-NOUS ============ -->
<section id="asso">
  <div class="secret" style="top:70%;right:5%"><svg class="shape" viewBox="0 0 24 14" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="7" r="4"/><path d="M10 7h12M19 7v4M16 7v3"/></svg><span class="spark" style="animation-delay:-9s;animation-duration:9s"></span></div>
  <div class="secret" style="top:13%;left:3%"><svg class="shape" viewBox="0 0 30 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M5 2v20M5 9l6-5M5 9l6 5"/><path d="M16 2v20M16 2l6 6M16 11h6M16 20l6-6"/></svg><span class="spark" style="animation-delay:-1s;animation-duration:9s"></span></div>
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
        <p>Née comme collectif en août 2016, l'Union des Rôlistes est aujourd'hui une association loi 1901, déclarée le 11 mai 2019 et enregistrée à l'INSEE le 29 avril 2019, et agit en collaboration avec la <span class="gloss" tabindex="0" data-tip="Fédération française de Grandeur Nature : le jeu de rôle « grandeur nature », où l'on incarne son personnage en costume et en décor réel.">FédéGN</span>.</p>
      </div>

      <div class="facts" data-reveal data-d="2">
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h10a2 2 0 0 1 2 2 2 2 0 0 1-2 2H9v10a2 2 0 0 1-2 2 2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/><path d="M9 8V6a2 2 0 0 0-4 0M11 11.5h5M11 14.5h5"/></svg></span>
          <div><div class="k">Association <span class="gloss" tabindex="0" data-tip="Cadre juridique des associations à but non lucratif en France (loi du 1ᵉʳ juillet 1901).">loi 1901</span></div><div class="v">Déclarée le 11/05/2019, à but non lucratif</div></div>
        </div>
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="9.5" r="5"/><path d="m9 13.8-1.3 7 4.3-2.4 4.3 2.4-1.3-7"/><path d="m10 9.5 1.4 1.4L14.5 8"/></svg></span>
          <div><div class="k">Enregistrée à l'<span class="gloss" tabindex="0" data-tip="Institut national de la statistique : il immatricule l'association et lui attribue son n° SIRET.">INSEE</span></div><div class="v">Le 29/04/2019 · SIRET 850 580 663</div></div>
        </div>
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4.5h11a1.5 1.5 0 0 1 1.5 1.5v13.5H6.5A1.5 1.5 0 0 1 5 18z"/><path d="M5 18a1.5 1.5 0 0 1 1.5-1.5h11M9 9h5"/></svg></span>
          <div><div class="k"><span class="gloss" tabindex="0" data-tip="Répertoire National des Associations : l'identifiant officiel de toute association déclarée.">RNA</span> W751252183</div><div class="v">Registre national des associations</div></div>
        </div>
        <div class="fact">
          <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6 9 4l6 2 6-2v14l-6 2-6-2-6 2z"/><path d="M9 4v14M15 6v14"/></svg></span>
          <div><div class="k">Siège à Paris</div><div class="v">Île-de-France</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ VALEURS ============ -->
<section id="valeurs">
  <div class="secret" style="top:18%;left:4%"><svg class="shape" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 3 10 13M20 3v3.5M20 3h-3.5"/><path d="M10 13l1.5 1.5M7.5 13.5l3 3-3 3-3-3z"/></svg><span class="spark" style="animation-delay:-4.5s;animation-duration:10.5s"></span></div>
  <div class="secret" style="top:58%;right:4%"><svg class="shape" viewBox="0 0 44 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 8c3-5 11-5 14 0-3 5-11 5-14 0Z"/><circle cx="9" cy="8" r="2"/><path d="M28 8c3-5 11-5 14 0-3 5-11 5-14 0Z"/><circle cx="35" cy="8" r="2"/></svg><span class="spark" style="animation-delay:-5s;animation-duration:11s"></span></div>
  <div class="wrap">
    <div class="sec-head center" data-reveal>
      <span class="eyebrow center">Nos valeurs</span>
      <h2>Ce qui nous rassemble</h2>
      <p>Quatre engagements qui guident chacune de nos actions.</p>
    </div>

    <div class="values" style="margin-top:3rem">
      <article class="value" data-reveal data-d="1">
        <div class="vic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" stroke-linecap="round"><path d="M12 2 21 7v10l-9 5-9-5V7Z"/><path d="M7.5 9.2h9L12 21ZM3.2 7.2 7.5 9.2M20.8 7.2 16.5 9.2M7.5 9.2 12 2l4.5 7.2M7.5 9.2 4 16.5M16.5 9.2 20 16.5"/></svg></div>
        <h3>Promouvoir le JDR</h3>
        <p>Faire connaître et faire vivre le jeu de rôle sous toutes ses formes, et favoriser la découverte de ce loisir.</p>
      </article>
      <article class="value" data-reveal data-d="2">
        <div class="vic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3v18"/><path d="M6 4h12l-3 4 3 4H6"/></svg></div>
        <h3>Fédérer</h3>
        <p>Réunir associations, clubs, boutiques et joueurs isolés sous une même bannière, autour d'objectifs communs.</p>
      </article>
      <article class="value" data-reveal data-d="3">
        <div class="vic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c1.6 1.8 3.2 3 3.2 5.2a3.2 3.2 0 0 1-6.4 0c0-1 .4-1.8 1-2.6"/><path d="M10 11.5h4l-1 9.5h-2z"/></svg></div>
        <h3>Améliorer l'image</h3>
        <p>Changer le regard du grand public sur le JDR par des initiations et des activités ouvertes à toutes et tous.</p>
      </article>
      <article class="value" data-reveal data-d="4">
        <div class="vic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 3.5h16V10c0 5.6-4 8.9-8 11.5-4-2.6-8-5.9-8-11.5z"/><path d="M12 3.5v18M4 9.5h16"/></svg></div>
        <h3>Lieu safe &amp; neutre</h3>
        <p>Un espace accueillant quels que soient votre genre, votre neuroatypie, vos origines ou vos convictions.</p>
      </article>
    </div>
  </div>
</section>

<!-- ============ PRESTATIONS ============ -->
<section id="prestations">
  <div class="secret" style="top:20%;right:4%"><svg class="shape" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"><path d="M12 2 21 7v10l-9 5-9-5V7Z"/><path d="M7.5 9.2h9L12 21ZM7.5 9.2 12 2l4.5 7.2M7.5 9.2 4 16.5M16.5 9.2 20 16.5"/></svg><span class="spark" style="animation-delay:-3s;animation-duration:11s"></span></div>
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Nos prestations</span>
      <h2>Ce que nous proposons</h2>
    </div>
    <div class="values" style="margin-top:2.5rem">
      <article class="value" data-reveal data-d="1">
        <div class="vic"><svg class="ico-sword" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.3 2.2v9.3h-2.6V4.2z"/><path d="M7.5 13.5h9M12 13.5v5.3M9.8 18.8h4.4"/></svg></div>
        <h3>Animation escrime ludique</h3>
        <p>Pour animer vos événements.</p>
      </article>
      <article class="value" data-reveal data-d="2">
        <div class="vic"><svg class="ico-chest" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h18v9H3z"/><path d="M3 14h18"/><g class="lid"><path d="M3 11c0-2.5 4-4.5 9-4.5s9 2 9 4.5"/></g><rect x="10.7" y="12.3" width="2.6" height="3.4" rx=".5"/></svg></div>
        <h3>Location de matériel</h3>
        <p>Talkies-walkies, CB, Nerf.</p>
      </article>
      <article class="value" data-reveal data-d="3">
        <div class="vic"><svg class="ico-compass" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path class="needle" d="M16.5 7.5 14 14l-6.5 2.5L10 10Z"/></svg></div>
        <h3>Aide logistique personnalisée</h3>
        <p>Sur mesure pour votre projet.</p>
      </article>
      <article class="value" data-reveal data-d="4">
        <div class="vic"><svg class="ico-robot" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="8" width="14" height="11" rx="2.5"/><g class="antenna"><path d="M12 4v4"/><circle cx="12" cy="3.2" r="1.1"/></g><circle cx="9.6" cy="13" r="1.1"/><circle cx="14.4" cy="13" r="1.1"/><path d="M9.6 16h4.8M3 12.5v2M21 12.5v2"/></svg></div>
        <h3>Bot planning</h3>
        <p>À disposition sur votre serveur.</p>
      </article>
    </div>
    <div class="band" data-reveal style="margin-top:2.5rem">
      <div class="band-grid">
        <div>
          <span class="eyebrow">Une demande&nbsp;?</span>
          <h2>Parlons de votre projet</h2>
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
<div class="ornament" aria-hidden="true"><span class="o-l"></span><svg viewBox="0 0 48 16" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"><path d="M24 2l3.5 6-3.5 6-3.5-6z"/><path d="M20.5 8h-6M14.5 8c-2-2.2-4.2-2.2-6.5 0M14.5 8c-2 2.2-4.2 2.2-6.5 0M27.5 8h6M33.5 8c2-2.2 4.2-2.2 6.5 0M33.5 8c2 2.2 4.2 2.2 6.5 0"/></svg><span class="o-l"></span></div>

<section id="soutenir">
  <div class="secret" style="top:24%;left:4%"><svg class="shape" viewBox="0 0 28 28" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linejoin="round"><circle cx="14" cy="14" r="12"/><path d="M14 3v22M3 14h22M7 7l14 14M21 7 7 21"/></svg><span class="spark" style="animation-delay:-8s;animation-duration:10s"></span></div>
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
        <p>Préférez la simplicité&nbsp;? Soutenez l'Union des Rôlistes en quelques clics via PayPal, par carte ou avec votre compte.</p>
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
  <div class="secret hydra" style="bottom:16%;right:5%"><img class="shape" src="img/hydre.png" alt="" loading="lazy"><span class="spark" style="animation-delay:-2.5s;animation-duration:12s"></span></div>
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Nos partenaires</span>
      <h2>Un réseau de passionnés</h2>
      <p>L'Union des Rôlistes travaille main dans la main avec des communautés, des lieux et des outils qui font vivre le jeu de rôle.</p>
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
  <div class="secret" style="top:30%;left:5%"><svg class="shape" viewBox="0 0 20 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2.5h4M9 3v4.5l-4.2 8.4A3 3 0 0 0 7.5 20.5h5a3 3 0 0 0 2.7-4.6L11 7.5V3"/><path d="M6.3 14.5h7.4"/></svg><span class="spark" style="animation-delay:-7s;animation-duration:10s"></span></div>
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
  <div class="secret" style="top:32%;left:6%"><svg class="shape" viewBox="0 0 20 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v20M4 8l6-6 6 6M4 16l6 6 6-6"/></svg><span class="spark" style="animation-delay:-6s;animation-duration:9.5s"></span></div>
  <div class="wrap">
    <div class="cta-discord" data-reveal>
      <span class="eyebrow center">Rejoignez l'aventure</span>
      <h2>Plus de 1300 rôlistes vous attendent</h2>
      <p>Discussions, salons vocaux &amp; textuels gratuits, plus de 80 jeux de rôle joués, et toute l'entraide d'une communauté passionnée : la vie de l'Union des Rôlistes se passe sur Discord.</p>
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
</main>

<footer class="site">
  <div class="secret" style="top:30%;right:6%"><svg class="shape" viewBox="0 0 20 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"><path d="M10 2.5a2.6 2.6 0 0 1 2.6 2.6c0 1.1-.7 1.9-1.5 2.4 1.9.7 3.4 2.2 4.3 3.9l-2.8 1.4 1 9.7H6.4l1-9.7-2.8-1.4c.9-1.7 2.4-3.2 4.3-3.9-.8-.5-1.5-1.3-1.5-2.4A2.6 2.6 0 0 1 10 2.5Z"/></svg><span class="spark" style="animation-delay:-2s;animation-duration:12s"></span></div>
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <div class="foot-brand">
          <img src="img/hydre.png" alt="" aria-hidden="true" loading="lazy">
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
          <li><a href="#soutenir">Nous soutenir</a></li>
          <li><a href="#partenaires">Partenaires</a></li>
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
        Contenu sous licence Creative Commons BY-NC-ND 4.0. Nous contacter pour toute dérogation.<br>
        Site réalisé par <a href="https://web-developpeur.com" target="_blank" rel="noopener" style="color:inherit;text-decoration:underline;text-underline-offset:2px">ohugonnot</a>.
      </small>
      <a class="cc" href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank" rel="license noopener" title="CC BY-NC-ND 4.0">
        <img src="https://mirrors.creativecommons.org/presskit/icons/cc.svg" alt="" aria-hidden="true" loading="lazy">
        <img src="https://mirrors.creativecommons.org/presskit/icons/by.svg" alt="" aria-hidden="true" loading="lazy">
        <img src="https://mirrors.creativecommons.org/presskit/icons/nc.svg" alt="" aria-hidden="true" loading="lazy">
        <img src="https://mirrors.creativecommons.org/presskit/icons/nd.svg" alt="" aria-hidden="true" loading="lazy">
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

  /* menu mobile plein écran */
  var burger=doc.getElementById("burger");
  var links=doc.getElementById("navLinks");
  function setMenu(open){
    links.classList.toggle("open",open);
    burger.setAttribute("aria-expanded",open);
    doc.body.style.overflow=open?"hidden":"";
    if(open){var f=links.querySelector("a"); if(f)f.focus();}
  }
  burger.addEventListener("click",function(){setMenu(!links.classList.contains("open"));});
  doc.addEventListener("keydown",function(e){
    if(e.key==="Escape" && links.classList.contains("open")){setMenu(false); burger.focus();}
  });
  links.addEventListener("click",function(e){
    var a=e.target.closest("a"); if(!a)return;
    var href=a.getAttribute("href");
    setMenu(false);
    if(href && href.charAt(0)==="#"){
      e.preventDefault();
      var t=doc.querySelector(href);
      if(t)setTimeout(function(){ t.scrollIntoView({behavior:"smooth"}); history.replaceState(null,"",href); },150);
    }
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
  /* jet de dés : la valeur s'emballe en aléatoire (flips qui ralentissent) puis se stabilise sur la cible */
  var roll=function(el){
    var target=+el.getAttribute("data-count"),start=null,last=0,dur=1600;
    var step=function(ts){
      if(!start)start=ts;
      var p=Math.min((ts-start)/dur,1);
      if(p>=1){el.textContent=target.toLocaleString("fr-FR");return;}
      var flip=45+p*p*250;
      if(ts-last>=flip){
        last=ts;
        var spread=Math.max(1,Math.round(target*(1-p)));
        var v=p<.7?Math.floor(Math.random()*(target+spread)):target-Math.floor(Math.random()*spread);
        el.textContent=Math.max(0,v).toLocaleString("fr-FR");
      }
      requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };
  var rmReduce=window.matchMedia&&matchMedia("(prefers-reduced-motion:reduce)").matches;
  var run=function(el){
    if(rmReduce){el.textContent=(+el.getAttribute("data-count")).toLocaleString("fr-FR");return;}
    (el.hasAttribute("data-roll")?roll:animate)(el);
  };
  if("IntersectionObserver"in window){
    var io2=new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        if(en.isIntersecting){run(en.target);io2.unobserve(en.target);}
      });
    },{threshold:.6});
    counters.forEach(function(el){io2.observe(el);});
  }else{
    counters.forEach(function(el){el.textContent=(+el.getAttribute("data-count")).toLocaleString("fr-FR");});
  }

  /* playful: clic sur le blason = jet de dés (les D10 roulent, résultat en pop BD) */
  var medallion=doc.querySelector(".medallion");
  var hydre=doc.getElementById("hydre");
  var dice=[].slice.call(doc.querySelectorAll(".medallion .die"));
  var pop=doc.querySelector(".dice-pop");
  var rollN=0, demoRolls=[3,98];                 /* démo (d100) : 1er = réussite critique, 2e = échec critique, puis aléatoire */
  if(medallion){
    medallion.style.cursor="pointer";
    medallion.title="Lancez les dés !";
    var rolling=false, popTimer;
    function showPop(n){
      if(!pop){rolling=false;return;}
      var crit=n<=5, fail=n>=96, disp=n<10?("0"+n):(""+n);
      pop.className="dice-pop"+(crit?" crit":fail?" fail":"");
      pop.innerHTML='<span class="pn">'+disp+'</span>'+(crit?'<span class="pl">Critique !</span>':fail?'<span class="pl">Échec !</span>':'');
      void pop.offsetWidth; pop.classList.add("show");
      clearTimeout(popTimer); popTimer=setTimeout(function(){pop.classList.remove("show");rolling=false;},1700);
    }
    medallion.addEventListener("click",function(){
      if(rolling)return; rolling=true;
      if(hydre){hydre.animate([{transform:"rotate(0) scale(1)"},{transform:"rotate(380deg) scale(1.06)"},{transform:"rotate(720deg) scale(1)"}],{duration:900,easing:"cubic-bezier(.2,.7,.2,1)"});}
      dice.forEach(function(die,i){
        var spins=360*(2+Math.floor(Math.random()*3));   /* tours COMPLETS (2 a 4) -> finit dans l'orientation d'origine, pas de flip */
        var dur=900+i*150+Math.floor(Math.random()*220);
        die.style.animation="none";
        die.animate([
          {transform:"translateY(0) rotate(0deg) scale(1)"},
          {transform:"translateY(-28px) rotate("+(spins*0.55|0)+"deg) scale(1.14)",offset:.42},
          {transform:"translateY(0) rotate("+spins+"deg) scale(1)"}
        ],{duration:dur,easing:"cubic-bezier(.17,.7,.2,1)"}).onfinish=function(){die.style.animation="";};
      });
      var n=(rollN<demoRolls.length)?demoRolls[rollN]:1+Math.floor(Math.random()*100); rollN++;
      setTimeout(function(){showPop(n);},1150);
    });
    medallion.addEventListener("keydown",function(e){
      if(e.key==="Enter"||e.key===" "){e.preventDefault(); medallion.click();}
    });
  }

  /* secrets : le curseur révèle la forme quand on s'en approche (desktop) */
  var secretEls=[].slice.call(doc.querySelectorAll(".secret"));
  if(secretEls.length && window.matchMedia && matchMedia("(hover:hover)").matches){
    var praf=0,px=0,py=0;
    window.addEventListener("pointermove",function(e){
      px=e.clientX; py=e.clientY;
      if(praf)return;
      praf=requestAnimationFrame(function(){praf=0;
        for(var i=0;i<secretEls.length;i++){
          var shape=secretEls[i].firstElementChild;
          if(!shape)continue;
          var r=shape.getBoundingClientRect();
          shape.style.setProperty("--lx",(px-r.left)+"px");
          shape.style.setProperty("--ly",(py-r.top)+"px");
        }
      });
    },{passive:true});
  }

  /* code secret : taper "hydre" -> révèle tous les secrets */
  var wbuf="";
  function unlockSecrets(){
    if(doc.body.classList.contains("secrets-revealed"))return;
    doc.body.classList.add("secrets-revealed");
    var t=doc.createElement("div"); t.className="secret-toast";
    t.textContent="Les ombres se dissipent… secrets révélés";
    doc.body.appendChild(t);
    requestAnimationFrame(function(){t.classList.add("show");});
    setTimeout(function(){t.classList.remove("show"); setTimeout(function(){t.remove();},600);},3800);
  }
  window.addEventListener("keydown",function(e){
    var k=(e.key||"").toLowerCase();
    if(k.length===1){wbuf=(wbuf+k).slice(-6); if(wbuf.indexOf("hydre")>=0)unlockSecrets();}
  });
})();
</script>
</body>
</html>
