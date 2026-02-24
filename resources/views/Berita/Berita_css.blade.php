<style>
/* ===== HERO FULL ===== */
.hero-full{
  position: relative;
  min-height: 60vh;
  display:flex;
  align-items:center;
  justify-content:center;
  overflow:hidden;
  background:
    linear-gradient(50deg, rgba(4,22,52,.88), rgba(4,22,52,.55)),
    var(--bg);
  background-size: cover;
  background-position: center;
}

.hero-full__overlay{
  position:absolute; inset:0;
  background:
    radial-gradient(900px 520px at 15% 30%, rgba(255,255,255,.10), transparent 60%),
    radial-gradient(900px 520px at 88% 70%, rgba(255,255,255,.08), transparent 60%);
  pointer-events:none;
}

.hero-full__bubbles .b1,
.hero-full__bubbles .b2{
  position:absolute;
  border-radius: 999px;
  background: rgba(255,255,255,.10);
  filter: blur(.2px);
}
.hero-full__bubbles .b1{
  width: 520px; height: 520px;
  left: -140px; top: -120px;
}
.hero-full__bubbles .b2{
  width: 520px; height: 520px;
  right: -140px; bottom: -160px;
  background: rgba(255,255,255,.08);
}

.hero-full__content{
  position: relative;
  text-align:center;
  padding: 24px 18px;
  max-width: 980px;
  z-index: 2;
}



/* .hero-full__actions{
  display:flex;
  gap: 12px;
  justify-content:center;
  flex-wrap:wrap;
}
.hero-btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  padding: 12px 18px;
  border-radius: 999px;
  text-decoration:none;
  font-weight: 900;
  border: 1px solid rgba(255,255,255,.24);
  transition: transform .14s ease, background .14s ease, box-shadow .14s ease;
}
.hero-btn:hover{ transform: translateY(-2px); }
.hero-btn--ghost{ color: rgba(255,255,255,.92); background: rgba(255,255,255,.10); }
.hero-btn--ghost:hover{ background: rgba(255,255,255,.16); }
.hero-btn--primary{
  color: #061733;
  background: rgba(255,255,255,.92);
  box-shadow: 0 16px 34px rgba(0,0,0,.22);
} */

.hero-full__wave{
  position:absolute;
  left:0; right:0; bottom:-1px;
  width:100%;
  height: 140px;
  z-index: 1;
}
.hero-full__wave path{ fill: #f3f6ff; }

/* ===== NEWS GRID 3 COL ===== */
.news-wrap{
  background: #f3f6ff;
  padding: 32px 16px 64px;
}
.news-head{
  max-width: 1180px;
  margin: 0 auto 18px;
}
.news-head h2{
  margin:0 0 6px;
  font-weight: 900;
  color:#071a33;
}
.news-head p{
  margin:0;
  color: rgba(7,26,51,.70);
  font-weight: 600;
}

.news-grid{
  max-width: 1180px;
  margin: 0 auto;
  display:grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;
}

.news-card{
  border-radius: 20px;
  overflow:hidden;
  background:#fff;
  border: 1px solid rgba(7,26,51,.08);
  box-shadow: 0 16px 44px rgba(7,26,51,.10);
  transition: transform .16s ease, box-shadow .16s ease;
}
.news-card:hover{
  transform: translateY(-3px);
  box-shadow: 0 20px 60px rgba(7,26,51,.14);
}

.news-card__img{
  position:relative;
  display:block;
  height: 190px;
  overflow:hidden;
}
.news-card__img img{
  width:100%; height:100%;
  object-fit:cover;
  transform: scale(1.02);
  transition: transform .35s ease;
  display:block;
}
.news-card:hover .news-card__img img{ transform: scale(1.08); }

.news-card__img .chip{
  position:absolute;
  left: 12px; top: 12px;
  padding: 8px 10px;
  border-radius: 999px;
  font-weight: 900;
  font-size: .82rem;
  color:#061733;
  background: rgba(255,255,255,.92);
  border: 1px solid rgba(7,26,51,.10);
}

.news-card__body{ padding: 14px 14px 16px; }
.news-card__body .meta{
  display:flex; gap:8px; align-items:center;
  color: rgba(7,26,51,.62);
  font-weight: 700;
  font-size: .9rem;
  margin-bottom: 10px;
}
.news-card__body .meta .dot{ opacity:.6; }

.news-card__body .title{
  margin: 0 0 10px;
  font-weight: 900;
  line-height: 1.25;
  font-size: 1.05rem;
}
.news-card__body .title a{ color:#071a33; text-decoration:none; }
.news-card__body .title a:hover{ text-decoration: underline; }

.news-card__body .desc{
  margin:0 0 14px;
  color: rgba(7,26,51,.72);
  line-height: 1.55;
}
.news-card__body .readmore{
  font-weight: 900;
  color:#2747ff;
  text-decoration:none;
}
.news-card__body .readmore:hover{ text-decoration: underline; }

/* Responsive */
@media (max-width: 980px){
  .news-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .hero-full{ min-height: 70vh; }
}
@media (max-width: 560px){
  .news-grid{ grid-template-columns: 1fr; }
  .hero-full__actions{ gap: 10px; }
  .hero-full__titlebox h1{ letter-spacing: .18em; }
}
</style>



<style>
  :root{
    --b2-bg:#f1f5f9;
    --b2-text:#0f172a;
    --b2-muted:#64748b;
    --b2-primary:#6366f1;
    --b2-primary2:#4f46e5;
    --b2-card: rgba(255,255,255,.75);
    --b2-border: rgba(255,255,255,.65);
  }

  .berita2-section{
    padding:90px 20px;
    background:var(--b2-bg);
    font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,Arial;
  }

  /* HEADER */
  .berita2-header{
    text-align:center;
    margin-bottom:60px;
  }

  .berita2-header h2{
    font-size:34px;
    font-weight:800;
    color:var(--b2-text);
    letter-spacing:-.5px;
    margin:0;
  }

  .berita2-header h2 em{
    font-style:normal;
    color:var(--b2-primary);
  }

  .berita2-header p{
    margin:12px auto 0;
    font-size:15px;
    color:var(--b2-muted);
    max-width:720px;
    line-height:1.7;
  }

  /* GRID */
  .berita2-grid{
  display:grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap:30px;
}
@media (max-width: 980px){
  .berita2-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 600px){
  .berita2-grid{ grid-template-columns: 1fr; }
}

  /* CARD */
  .berita2-card{
    background:var(--b2-card);
    backdrop-filter:blur(14px);
    -webkit-backdrop-filter:blur(14px);
    border-radius:22px;
    overflow:hidden;
    border:1px solid var(--b2-border);
    box-shadow:
      0 4px 12px rgba(0,0,0,.04),
      0 12px 30px rgba(0,0,0,.06);
    transition:all .45s cubic-bezier(.22,.61,.36,1);
  }

  .berita2-card:hover{
    transform:translateY(-10px) scale(1.01);
    box-shadow:
      0 10px 25px rgba(0,0,0,.08),
      0 25px 60px rgba(0,0,0,.12);
  }

  /* IMAGE */
  .berita2-img-wrap{
    display:block;
    height:210px;
    position:relative;
    overflow:hidden;
  }

  .berita2-img-wrap img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:transform .7s cubic-bezier(.19,1,.22,1);
    display:block;
  }

  .berita2-card:hover .berita2-img-wrap img{
    transform:scale(1.12);
  }

  /* gradient overlay */
  .berita2-img-wrap::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(to top, rgba(0,0,0,.45), transparent);
    opacity:.7;
    transition:opacity .4s ease;
    pointer-events:none;
  }

  .berita2-card:hover .berita2-img-wrap::after{
    opacity:.4;
  }

  /* BADGE */
  .berita2-badge{
    position:absolute;
    top:16px;
    left:16px;
    padding:6px 14px;
    font-size:12px;
    font-weight:700;
    border-radius:50px;
    background:linear-gradient(135deg,var(--b2-primary),var(--b2-primary2));
    color:#fff;
    letter-spacing:.3px;
    box-shadow:0 6px 16px rgba(79,70,229,.35);
    z-index:2;
  }

  /* BODY */
  .berita2-body{
    padding:24px;
  }

  .berita2-body h3{
    font-size:18px;
    line-height:1.45;
    margin:0 0 18px;
  }

  .berita2-body h3 a{
    text-decoration:none;
    color:#020617;
    transition:color .3s ease;
    display:-webkit-box;
    -webkit-line-clamp:2;
    -webkit-box-orient:vertical;
    overflow:hidden;
  }

  .berita2-body h3 a:hover{
    color:var(--b2-primary);
  }

  /* FOOTER */
  .berita2-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:12px;
    font-size:13px;
    color:var(--b2-muted);
  }

  .berita2-footer strong{
    color:var(--b2-text);
    font-weight:600;
  }

  .berita2-link{
    font-weight:700;
    text-decoration:none;
    color:var(--b2-primary);
    position:relative;
    white-space:nowrap;
  }

  .berita2-link::after{
    content:"";
    position:absolute;
    bottom:-3px;
    left:0;
    width:0;
    height:2px;
    background:var(--b2-primary);
    transition:width .35s ease;
  }

  .berita2-link:hover::after{
    width:100%;
  }

  /* EMPTY */
  .berita2-empty{
    color:var(--b2-muted);
    grid-column: 1 / -1;
    text-align:center;
    margin: 10px 0 0;
  }

  /* PAGINATION */
  .berita2-pagination-wrap{
    margin-top: 34px;
    padding: 16px 18px;
    border-radius: 22px;
    background: rgba(255,255,255,0.75);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255,255,255,.65);
    box-shadow:
      0 4px 12px rgba(0,0,0,.04),
      0 12px 30px rgba(0,0,0,.06);
  }

  .berita2-pagination-header{
    color: var(--b2-muted);
    font-weight: 700;
    font-size: 13px;
    margin-bottom: 12px;
    text-align: center;
  }

  .berita2-pagination nav{
    display:flex;
    justify-content:center;
  }

  .berita2-pagination .pagination{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
    justify-content:center;
    list-style:none;
    padding:0;
    margin:0;
  }

  .berita2-pagination .page-item{ margin:0; }

  .berita2-pagination .page-link,
  .berita2-pagination a,
  .berita2-pagination span{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-width:42px;
    height:42px;
    padding:0 14px;
    border-radius:14px;
    text-decoration:none;
    font-weight:800;
    font-size:13px;
    color: var(--b2-text);
    background: rgba(255,255,255,.9);
    border: 1px solid rgba(99,102,241,.18);
    transition: all .25s cubic-bezier(.22,.61,.36,1);
  }

  .berita2-pagination a:hover,
  .berita2-pagination .page-link:hover{
    transform: translateY(-2px);
    border-color: rgba(99,102,241,.35);
    box-shadow: 0 10px 22px rgba(79,70,229,.12);
  }

  .berita2-pagination .active span,
  .berita2-pagination .page-item.active .page-link{
    background: linear-gradient(135deg,var(--b2-primary),var(--b2-primary2));
    color:#fff;
    border-color: transparent;
    box-shadow: 0 10px 22px rgba(79,70,229,.22);
  }

  .berita2-pagination .disabled span,
  .berita2-pagination .page-item.disabled .page-link{
    opacity:.55;
    cursor:not-allowed;
    transform:none;
    box-shadow:none;
  }

  /* RESPONSIVE */
  @media(max-width:600px){
    .berita2-header h2{ font-size:26px; }
    .berita2-img-wrap{ height:180px; }
  }
</style>




{{-- BUTTON BERITA TERBARU --}}

<style>
    .hero-full__titlebox h1 {
    position: relative;
    display: inline-block;
    padding: 20px 60px;
    font-size: 2rem;
    font-weight: 800;
    letter-spacing: 0.12em;
    color: #ffffff;
    text-shadow: 0 1px 8px rgba(255,255,255,0.15);
    border: 1.5px solid rgba(120,160,210,0.3);
    border-radius: 16px;
    overflow: hidden;

    /* Kotak gelap gradient mirip gambar */
    background: linear-gradient(160deg,
        rgba(80,110,155,0.55) 0%,
        rgba(18,35,65,0.92) 45%,
        rgba(25,50,90,0.75) 100%);

    box-shadow:
        0 6px 32px rgba(0,0,0,0.45),
        0 0 16px rgba(40,100,180,0.2),
        inset 0 1px 0 rgba(255,255,255,0.18),
        inset 0 -1px 0 rgba(0,0,0,0.3);

    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}

/* Gloss putih di bagian atas */
.hero-full__titlebox h1::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 52%;
    background: linear-gradient(to bottom,
        rgba(255,255,255,0.14) 0%,
        rgba(255,255,255,0.03) 100%);
    border-radius: 16px 16px 0 0;
    pointer-events: none;
}

/* Sweep mengkilap */
.hero-full__titlebox h1::before {
    content: '';
    position: absolute;
    top: -20%; left: -60%;
    width: 38%; height: 140%;
    background: linear-gradient(120deg,
        transparent 0%,
        rgba(255,255,255,0.22) 50%,
        transparent 100%);
    transform: skewX(-18deg);
    animation: kilap 3s ease-in-out infinite;
}

@keyframes kilap {
    0%        { left: -60%; opacity: 0; }
    8%        { opacity: 1; }
    75%, 100% { left: 130%; opacity: 0; }
}








.hero-btn--ghost {
    position: relative;
    display: inline-block;
    padding: 16px 36px;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    color: #ffffff;
    text-decoration: none;
    text-shadow: 0 1px 6px rgba(255,255,255,0.15);
    border: 1.5px solid rgba(120,160,210,0.3);
    border-radius: 16px;
    overflow: hidden;

    background: linear-gradient(160deg,
        rgba(80,110,155,0.55) 0%,
        rgba(18,35,65,0.92) 45%,
        rgba(25,50,90,0.75) 100%);

    box-shadow:
        0 6px 32px rgba(0,0,0,0.45),
        0 0 16px rgba(40,100,180,0.2),
        inset 0 1px 0 rgba(255,255,255,0.18),
        inset 0 -1px 0 rgba(0,0,0,0.3);

    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: transform 0.15s ease, box-shadow 0.2s ease;
}

/* Gloss atas */
.hero-btn--ghost::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 52%;
    background: linear-gradient(to bottom,
        rgba(255,255,255,0.14) 0%,
        rgba(255,255,255,0.03) 100%);
    border-radius: 16px 16px 0 0;
    pointer-events: none;
}

/* Sweep mengkilap */
.hero-btn--ghost::before {
    content: '';
    position: absolute;
    top: -20%; left: -60%;
    width: 38%; height: 140%;
    background: linear-gradient(120deg,
        transparent 0%,
        rgba(255,255,255,0.22) 50%,
        transparent 100%);
    transform: skewX(-18deg);
    animation: kilap 3s ease-in-out infinite;
}

.hero-btn--ghost:hover {
    transform: translateY(-2px);
    box-shadow:
        0 10px 36px rgba(0,0,0,0.5),
        0 0 20px rgba(58,120,200,0.3),
        inset 0 1px 0 rgba(255,255,255,0.22);
}

@keyframes kilap {
    0%        { left: -60%; opacity: 0; }
    8%        { opacity: 1; }
    75%, 100% { left: 130%; opacity: 0; }
}
.hero-full__content {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 6px;
}

.hero-full__actions {
    display: flex;
    justify-content: center;
    margin-top: 0;
}
</style>

