<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title -->
	<title>Techvio - IT Solutions & Business Services Multipurpose HTML5 Website Template</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- FlatIcon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<!-- Font Awesome Min CSS -->
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<!-- Bootstrap Icon CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.css">
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
	<!-- Swiper Min CSS -->
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<!-- Start Preloader Section -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>

<!-- ══════════════════════════════
     HERO HEADER
══════════════════════════════ -->
<div class="visimisi-hero">
    <div class="visimisi-hero-badge">VISI,MISI & SEJARAH</div>
    <h2><em>SDN 1 Mangkubumi</em></h2>
    <a href="{{ url('/') }}" class="visimisi-hero-btn">
        ← Kembali ke Beranda
    </a>
    <div class="visimisi-hero-wave">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,60 L1440,80 L0,80 Z" fill="#eef2ff"/>
        </svg>
    </div>
</div>

<section class="visimisi-section">
    <div class="container">

        <div class="visimisi-header">
            <span class="visimisi-tag">Visi & Misi</span>
            <h2><em>SDN 1 Mangkubumi</em></h2>
        </div>

        <!-- VISI MISI -->
        <div class="visimisi-grid">

            <!-- VISI -->
            <div class="visimisi-card card-visi">
                <div class="visimisi-icon">🎯</div>
                <h3>Visi</h3>
                <div class="visimisi-content">
                    {!! $data->vision ?? '<p>Visi belum diisi.</p>' !!}
                </div>
            </div>

            <!-- MISI -->
            <div class="visimisi-card card-misi">
                <div class="visimisi-icon">📋</div>
                <h3>Misi</h3>
                <div class="visimisi-content">
                    {!! $data->mission ?? '<p>Misi belum diisi.</p>' !!}
                </div>
            </div>

        </div>

        <!-- SEJARAH -->
        <div class="sejarah-wrapper">
            <div class="sejarah-card">
                <div class="sejarah-icon">📜</div>
                <h3>Sejarah Sekolah</h3>
                <div class="sejarah-content">
                    {!! $data->history ?? '<p>Sejarah sekolah belum diisi.</p>' !!}
                </div>
            </div>
        </div>
    </div>
</section>

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

.visimisi-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(245,166,35,.18);
    border: 1.5px solid #f5a623;
    color: #f5a623;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 7px 20px;
    border-radius: 50px;
    margin-bottom: 20px;
    animation: vm-fadeDown .7s ease both;
}
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

<!-- jQuery Min JS -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Popper Min JS -->
	<script src="assets/js/popper.min.js"></script>
	<!-- Bootstrap Min JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!-- Mean Menu JS  -->
	<script src="assets/js/jquery.meanmenu.js"></script>
	<!-- Appear Min JS -->
	<script src="assets/js/jquery.appear.min.js"></script>
	<!-- CounterUp Min JS -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- Owl Carousel Min JS -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup Min JS -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Isotope Min JS -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- Swiper Min JS -->
	<script src="assets/js/swiper.min.js"></script>
	<!-- Vanilla Tilt Min JS -->
	<script src="assets/js/vanilla-tilt.min.js"></script>
	<!-- Ajax Mail JS -->
	<script src="assets/js/ajax.mail.js"></script>
	<!-- WOW Min JS -->
	<script src="assets/js/wow.min.js"></script>
	<!-- Main JS -->
	<script src="assets/js/main.js"></script>
</body>
</html>