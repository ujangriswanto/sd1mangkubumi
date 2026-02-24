<style>
.visimisi-hero-badge {
    display: inline-block;
    padding: 16px 40px;
    font-size: 1.5rem;
    font-weight: 800;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #fff;
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255,255,255,0.1);
    position: relative;
    overflow: hidden;
}

/* Efek kilap statis di atas */
.visimisi-hero-badge::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 50%;
    background: linear-gradient(180deg, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0.03) 100%);
    border-radius: 8px 8px 0 0;
    pointer-events: none;
}

/* Efek sorot / shine yang bergerak */
.visimisi-hero-badge::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -75%;
    width: 50%;
    height: 200%;
    background: linear-gradient(
        120deg,
        rgba(255,255,255,0) 0%,
        rgba(255,255,255,0.45) 50%,
        rgba(255,255,255,0) 100%
    );
    transform: skewX(-20deg);
    animation: shine 2.8s ease-in-out infinite;
}

@keyframes shine {
    0%   { left: -75%; }
    60%  { left: 125%; }
    100% { left: 125%; }
}
</style>





<style>
/* ══════════════════════════════
   HERO HEADER
══════════════════════════════ */
.visimisi-hero {
    position: relative;
    background: #0d2b55;
    min-height: 340px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 80px 20px 110px;
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
}
.visimisi-hero::before,
.visimisi-hero::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: #f5a623;
    opacity: .12;
}
.visimisi-hero::before { width: 500px; height: 500px; top: -200px; left: -150px; }
.visimisi-hero::after  { width: 350px; height: 350px; bottom: -180px; right: -100px; }


.visimisi-hero h2 {
    font-size: clamp(26px, 5vw, 48px);
    font-weight: 800;
    color: #fff;
    margin: 0 0 14px;
    line-height: 1.2;
    animation: vm-fadeDown .7s .15s ease both;
}
.visimisi-hero h2 em {
    color: #f5a623;
    font-style: normal;
}
.visimisi-hero-sub {
    font-size: 15px;
    color: rgba(255,255,255,.6);
    max-width: 480px;
    line-height: 1.8;
    animation: vm-fadeDown .7s .3s ease both;
}
.visimisi-hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,.12);
    border: 1.5px solid rgba(255,255,255,.35);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 24px;
    border-radius: 50px;
    text-decoration: none;
    margin-top: 10px;
    transition: background .3s, border-color .3s, transform .3s;
    animation: vm-fadeDown .7s .3s ease both;
}
.visimisi-hero-btn:hover {
    background: rgba(245,166,35,.25);
    border-color: #f5a623;
    color: #f5a623;
    transform: translateY(-2px);
    text-decoration: none;
}
.visimisi-hero-wave {
    position: absolute;
    bottom: -1px; left: 0; right: 0;
    line-height: 0;
}
.visimisi-hero-wave svg { display: block; width: 100%; }

@keyframes vm-fadeDown {
    from { opacity: 0; transform: translateY(-20px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ══════════════════════════════
   SECTION ASLI
══════════════════════════════ */
.visimisi-section {
    padding: 90px 20px;
    background: linear-gradient(135deg, #eef2ff, #ffffff);
    font-family: 'Poppins', sans-serif;
}

.visimisi-header {
    text-align: center;
    margin-bottom: 60px;
}

.visimisi-tag {
    display: inline-block;
    background: #667eea;
    color: #fff;
    padding: 7px 16px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 14px;
    box-shadow: 0 4px 14px rgba(102,126,234,.35);
}

.visimisi-header h2 {
    font-size: 36px;
    font-weight: 800;
    margin: 0;
    color: #1e293b;
}

.visimisi-header em {
    color: #667eea;
    font-style: normal;
}

.visimisi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.visimisi-card {
    background: #fff;
    padding: 38px 32px;
    border-radius: 22px;
    text-align: center;
    box-shadow: 0 18px 45px rgba(0,0,0,.08);
    transition: .35s ease;
}

.visimisi-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 30px 70px rgba(0,0,0,.15);
}

.visimisi-icon {
    font-size: 44px;
    margin-bottom: 15px;
}

.visimisi-card h3 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #334155;
}

.visimisi-content {
    font-size: 15px;
    line-height: 1.9;
    color: #555;
}

.card-visi { border-top: 5px solid #667eea; }
.card-misi { border-top: 5px solid #764ba2; }

/* ══════════════════════════════
   MISI LIST — RAPI & BERSIH
══════════════════════════════ */
.misi-list {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: left;
}

.misi-list-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 0;
    border-bottom: 1px solid #f1f5f9;
    font-size: 14px;
    line-height: 1.7;
    color: #475569;
}

.misi-list-item:last-child {
    border-bottom: none;
}

.misi-bullet {
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 2px;
}

/* SEJARAH */
.sejarah-wrapper {
    max-width: 900px;
    margin: auto;
}

.sejarah-card {
    background: #fff;
    padding: 50px 45px;
    border-radius: 24px;
    text-align: center;
    box-shadow: 0 20px 55px rgba(0,0,0,.1);
    transition: .35s;
}

.sejarah-card:hover {
    transform: translateY(-10px);
}

.sejarah-icon {
    font-size: 50px;
    margin-bottom: 15px;
}

.sejarah-card h3 {
    font-size: 26px;
    margin-bottom: 20px;
}

.sejarah-content {
    text-align: justify;
    font-size: 16px;
    line-height: 1.9;
    color: #444;
}

/* MOBILE */
@media (max-width: 576px) {
    .visimisi-hero { min-height: 260px; padding: 60px 16px 90px; }
    .visimisi-hero h2 { font-size: 24px; }
    .visimisi-header h2 { font-size: 26px; }
    .sejarah-card { padding: 36px 24px; }
}
</style>