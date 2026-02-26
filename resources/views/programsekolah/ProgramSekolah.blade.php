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

<body style="margin:0;padding:0;background:#020c18;">
    <!-- ===== NAVBAR ===== -->
<div class="navbar-section" id="mainNav">
    <div class="techvio-responsive-nav">
        <div class="container">
            <div class="techvio-responsive-menu">
                <div class="logo">
                    <a href="{{ url('/') }}">
                         <img src="assets/img/tutt.png" class="white-logo" alt="logo" style="height:50px;width:auto;display:block;">
    <img src="assets/img/tutt.png" class="black-logo" alt="logo" style="height:50px;width:auto;display:none;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="techvio-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">


                <a class="navbar-brand" href="{{ url('/') }}" style="padding:0;line-height:1;display:flex;align-items:center;gap:10px;">
    <img src="assets/img/tutt.png" class="white-logo" alt="logo" style="height:55px;width:auto;display:block;">
    <img src="assets/img/tutt.png" class="black-logo" alt="logo" style="height:55px;width:auto;display:none;">
	
    <div style="display:flex;flex-direction:column;line-height:1.3;">
    <span class="brand-title" style="font-size:15px;font-weight:800;letter-spacing:0.3px;transition:color .3s;font-family:'Poppins',sans-serif;">SDN 1 Mangkubumi</span>
    <span class="brand-sub" style="font-size:10px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;transition:color .3s;font-family:'Poppins',sans-serif;">Kecamatan Sadananya</span>
</div>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap" rel="stylesheet">
</a>
<style>
    /* Ukuran menu navbar */
.navbar-nav .nav-link{
    font-size:15px !important;
    font-weight:600;
    letter-spacing:.3px;
}
/* Dropdown menu */
.dropdown-menu .nav-link{
    font-size:12px !important;
}
/* Brand title */
.brand-title{
    font-size:13px !important;
}
/* Brand subtitle */
.brand-sub{
    font-size:9px !important;
}
/* Default (atas) = putih */
.brand-title { color: #ffffff; }
.brand-sub   { color: rgba(255,255,255,0.75); }
/* Setelah scroll = hitam/biru */
.scrolled .brand-title { color: #000000; }
.scrolled .brand-sub   { color: rgba(0, 0, 0, 0.845); }
</style>
<script>
const nav = document.getElementById('mainNav');
window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 50));
</script>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="/visi-misi" class="nav-link">Tentang</a>
                        </li>
						 <li class="nav-item">
                        <a href="/berita" class="nav-link">Berita</a>
                        </li>
						<li class="nav-item">
                            <a href="about.html" class="nav-link">PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Akademik <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Kurikulum</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Jadwal Pelajaran</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kalender Akademik</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Ekstrakurikuler</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Perpustakaan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Kesiswaan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Data Siswa</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Prestasi Siswa</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Galeri Kegiatan</a></li>
                            </ul>
                        </li>
						<li class="nav-item">
                        <a href="{{ route('program-sekolah') }}" class="nav-link">Program Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Daftar Hadir</a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar -->

<!-- Start Preloader Section -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>


<section class="prog-section" id="program-sekolah">
    <div class="prog-blob prog-blob-1"></div>
    <div class="prog-blob prog-blob-2"></div>
    <div class="prog-blob prog-blob-3"></div>

    <div class="container">
        <div class="prog-header">
            <span class="prog-eyebrow">✦ Unggulan Kami ✦</span>
            <h2 class="prog-title">Program <span class="prog-highlight">Sekolah</span></h2>
            <p class="prog-desc">Membentuk generasi unggul melalui program akademik, spiritual, dan pengembangan diri yang terintegrasi.</p>
        </div>

        <div class="prog-main-grid">

            <div class="prog-card prog-card-ibadah" data-delay="0">
                <div class="prog-card-icon">🕌</div>
                <div class="prog-card-glow"></div>
                <h3>Program Ibadah Harian</h3>
                <p>Membangun karakter spiritual siswa melalui pembiasaan ibadah setiap hari.</p>
                <ul class="prog-list">
                    <li><span class="prog-num">01</span> Sholat Dhuha Berjamaah</li>
                    <li><span class="prog-num">02</span> Sholat Dzuhur Berjamaah</li>
                    <li><span class="prog-num">03</span> Pembiasaan Giji (Gosok Gigi)</li>
                    <li><span class="prog-num">04</span> GeMa Juz Ama</li>
                </ul>
                <div class="prog-card-badge">Rutin Harian</div>
            </div>

            <div class="prog-card prog-card-ekskul" data-delay="150">
                <div class="prog-card-icon">🏆</div>
                <div class="prog-card-glow"></div>
                <h3>Program Ekstrakurikuler</h3>
                <p>Mengembangkan bakat dan minat siswa melalui berbagai kegiatan kreatif dan prestasi.</p>
                <ul class="prog-list">
                    <li><span class="prog-num">01</span> Pramuka</li>
                    <li><span class="prog-num">02</span> Komputer & Teknologi</li>
                    <li><span class="prog-num">03</span> Kesenian & Budaya</li>
                    <li><span class="prog-num">04</span> Olahraga</li>
                    <li><span class="prog-num">05</span> Bahasa Inggris</li>
                </ul>
                <div class="prog-card-badge">Mingguan</div>
            </div>

            <div class="prog-card prog-card-kokur" data-delay="300">
                <div class="prog-card-icon">🌿</div>
                <div class="prog-card-glow"></div>
                <h3>Program Ko-kulikuler</h3>
                <p>Menanamkan rasa tanggung jawab terhadap lingkungan dan sesama sejak dini.</p>
                <ul class="prog-list">
                    <li><span class="prog-num">01</span> Outing Class</li>
                    <li><span class="prog-num">02</span> Pengolahan Sampah</li>
                    <li><span class="prog-num">03</span> Program Menanam</li>
                </ul>
                <div class="prog-card-badge">Berkala</div>
            </div>

        </div>

        <div class="prog-stats">
            <div class="prog-stat">
                <span class="prog-stat-num">4+</span>
                <span class="prog-stat-label">Program Ibadah</span>
            </div>
            <div class="prog-stat-divider"></div>
            <div class="prog-stat">
                <span class="prog-stat-num">5+</span>
                <span class="prog-stat-label">Ekstrakurikuler</span>
            </div>
            <div class="prog-stat-divider"></div>
            <div class="prog-stat">
                <span class="prog-stat-num">3+</span>
                <span class="prog-stat-label">Ko-kulikuler</span>
            </div>
            <div class="prog-stat-divider"></div>
        </div>
    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Playfair+Display:wght@700;900&display=swap');

.container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

.prog-section {
    position: relative;
    padding: 100px 20px 80px;
    background: #020c18;
    overflow: hidden;
    font-family: 'Nunito', sans-serif;
}

.prog-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.18;
    pointer-events: none;
}
.prog-blob-1 {
    width: 500px; height: 500px;
    background: #0ea5e9;
    top: -150px; left: -100px;
    animation: blobMove1 10s ease-in-out infinite alternate;
}
.prog-blob-2 {
    width: 400px; height: 400px;
    background: #f59e0b;
    bottom: -100px; right: -80px;
    animation: blobMove2 12s ease-in-out infinite alternate;
}
.prog-blob-3 {
    width: 300px; height: 300px;
    background: #10b981;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    animation: blobMove3 8s ease-in-out infinite alternate;
}
@keyframes blobMove1 { from { transform: translate(0,0) scale(1); } to { transform: translate(40px,60px) scale(1.1); } }
@keyframes blobMove2 { from { transform: translate(0,0) scale(1); } to { transform: translate(-50px,-40px) scale(1.15); } }
@keyframes blobMove3 { from { transform: translate(-50%,-50%) scale(1); } to { transform: translate(-50%,-50%) scale(1.2); } }

.prog-header {
    text-align: center;
    margin-bottom: 64px;
    position: relative;
    z-index: 2;
}
.prog-eyebrow {
    display: inline-block;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #f59e0b;
    margin-bottom: 16px;
    animation: fadeInDown 0.6s ease both;
}
.prog-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(36px, 5vw, 60px);
    font-weight: 900;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 20px;
    animation: fadeInDown 0.7s ease 0.1s both;
}
.prog-highlight {
    position: relative;
    color: #f59e0b;
    display: inline-block;
}
.prog-highlight::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 4px;
    background: linear-gradient(90deg, #f59e0b, #ef4444);
    border-radius: 2px;
    animation: lineGrow 0.8s ease 0.8s both;
}
@keyframes lineGrow { from { transform: scaleX(0); } to { transform: scaleX(1); } }
.prog-desc {
    font-size: 16px;
    color: rgba(255,255,255,0.5);
    max-width: 520px;
    margin: 0 auto;
    line-height: 1.8;
    animation: fadeInDown 0.8s ease 0.2s both;
}

.prog-main-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    position: relative;
    z-index: 2;
    margin-bottom: 48px;
}

.prog-card {
    position: relative;
    border-radius: 24px;
    padding: 36px 32px 40px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    cursor: default;
    transition: transform 0.4s cubic-bezier(.22,.61,.36,1), box-shadow 0.4s ease;
    animation: cardFadeUp 0.6s ease both;
}
.prog-card[data-delay="0"]   { animation-delay: 0.2s; }
.prog-card[data-delay="150"] { animation-delay: 0.35s; }
.prog-card[data-delay="300"] { animation-delay: 0.5s; }
@keyframes cardFadeUp { from { opacity: 0; transform: translateY(40px); } to { opacity: 1; transform: translateY(0); } }

.prog-card:hover { transform: translateY(-10px) scale(1.02); }

.prog-card-glow {
    position: absolute;
    top: -60px; left: -60px;
    width: 200px; height: 200px;
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
}
.prog-card:hover .prog-card-glow { opacity: 0.5; }

.prog-card-ibadah {
    background: linear-gradient(145deg, rgba(14,165,233,0.12), rgba(14,165,233,0.04));
    box-shadow: 0 8px 32px rgba(14,165,233,0.1);
}
.prog-card-ibadah:hover { box-shadow: 0 20px 50px rgba(14,165,233,0.25); }
.prog-card-ibadah .prog-card-glow { background: #0ea5e9; }
.prog-card-ibadah .prog-num { background: rgba(14,165,233,0.2); color: #38bdf8; }
.prog-card-ibadah .prog-card-badge { background: rgba(14,165,233,0.2); color: #38bdf8; }

.prog-card-ekskul {
    background: linear-gradient(145deg, rgba(245,158,11,0.12), rgba(245,158,11,0.04));
    box-shadow: 0 8px 32px rgba(245,158,11,0.1);
}
.prog-card-ekskul:hover { box-shadow: 0 20px 50px rgba(245,158,11,0.25); }
.prog-card-ekskul .prog-card-glow { background: #f59e0b; }
.prog-card-ekskul .prog-num { background: rgba(245,158,11,0.2); color: #fbbf24; }
.prog-card-ekskul .prog-card-badge { background: rgba(245,158,11,0.2); color: #fbbf24; }

.prog-card-kokur {
    background: linear-gradient(145deg, rgba(16,185,129,0.12), rgba(16,185,129,0.04));
    box-shadow: 0 8px 32px rgba(16,185,129,0.1);
}
.prog-card-kokur:hover { box-shadow: 0 20px 50px rgba(16,185,129,0.25); }
.prog-card-kokur .prog-card-glow { background: #10b981; }
.prog-card-kokur .prog-num { background: rgba(16,185,129,0.2); color: #34d399; }
.prog-card-kokur .prog-card-badge { background: rgba(16,185,129,0.2); color: #34d399; }

.prog-card-icon {
    font-size: 42px;
    margin-bottom: 16px;
    display: block;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
    animation: iconBounce 2s ease-in-out infinite;
}
@keyframes iconBounce { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-5px); } }

.prog-card h3 {
    font-size: 20px;
    font-weight: 900;
    color: #fff;
    margin-bottom: 10px;
    line-height: 1.3;
}
.prog-card > p {
    font-size: 13px;
    color: rgba(255,255,255,0.45);
    line-height: 1.7;
    margin-bottom: 24px;
}

.prog-list {
    list-style: none;
    padding: 0;
    margin: 0 0 24px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.prog-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    font-weight: 700;
    color: rgba(255,255,255,0.8);
    padding: 8px 12px;
    border-radius: 10px;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.06);
    transition: background 0.3s, transform 0.3s;
}
.prog-list li:hover { background: rgba(255,255,255,0.08); transform: translateX(4px); }

.prog-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 28px;
    height: 28px;
    border-radius: 8px;
    font-size: 11px;
    font-weight: 900;
    flex-shrink: 0;
}

.prog-card-badge {
    display: inline-block;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 50px;
}

.prog-stats {
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 20px;
    padding: 28px 40px;
    position: relative;
    z-index: 2;
    backdrop-filter: blur(12px);
    flex-wrap: wrap;
    gap: 24px;
}
.prog-stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    flex: 1;
    min-width: 120px;
}
.prog-stat-num {
    font-family: 'Playfair Display', serif;
    font-size: 38px;
    font-weight: 900;
    color: #f59e0b;
    line-height: 1;
}
.prog-stat-label {
    font-size: 12px;
    font-weight: 700;
    color: rgba(255,255,255,0.45);
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
}
.prog-stat-divider {
    width: 1px;
    height: 50px;
    background: rgba(255,255,255,0.1);
    flex-shrink: 0;
}

@keyframes fadeInDown { from { opacity: 0; transform: translateY(-20px); } to { opacity: 1; transform: translateY(0); } }

@media (max-width: 1024px) {
    .prog-main-grid { grid-template-columns: repeat(2, 1fr); }
    .prog-card-kokur { grid-column: 1 / -1; max-width: 520px; margin: 0 auto; width: 100%; }
}
@media (max-width: 640px) {
    .prog-main-grid { grid-template-columns: 1fr; }
    .prog-card-kokur { grid-column: auto; max-width: 100%; }
    .prog-stats { padding: 24px 20px; }
    .prog-stat-divider { display: none; }
    .prog-stat-num { font-size: 28px; }
}
</style>

<!-- ══════════════════════════════
     FOOTER KECE - SDN 1 MANGKUBUMI
══════════════════════════════ -->
<footer class="sdn-footer">
    <!-- Gelombang atas -->
    <div class="sdn-footer-wave">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,0 C480,80 960,0 1440,60 L1440,0 Z" fill="#f8faff"/>
        </svg>
    </div>

    <div class="container">
        <div class="row g-4 pt-2 pb-5">

            <!-- COL 1: LOGO + DESC + SOSMED -->
            <div class="col-lg-3 col-md-6">
                <div class="sdn-footer-brand">
                    <div class="sdn-footer-logo">
                        <img src="assets/img/tutt.png" alt="Logo SDN 1 Mangkubumi">
                        <div>
                            <span class="sdn-footer-logo-title">SDN 1 Mangkubumi</span>
                            <span class="sdn-footer-logo-sub">Kecamatan Sadananya</span>
                        </div>
                    </div>
                    <p class="sdn-footer-desc">
                        Sekolah Dasar Negeri 1 Mangkubumi berkomitmen mencetak generasi unggul, berkarakter, dan berprestasi di bawah naungan pendidikan berkualitas.
                    </p>
                    <div class="sdn-footer-socials">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- COL 2: LINK CEPAT -->
            <div class="col-lg-2 col-md-6">
                <div class="sdn-footer-widget">
                    <h4 class="sdn-footer-heading">Menu Utama</h4>
                    <ul class="sdn-footer-links">
                        <li><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                        <li><a href="/visi-misi"><i class="fas fa-chevron-right"></i> Visi & Misi</a></li>
                        <li><a href="/berita"><i class="fas fa-chevron-right"></i> Berita</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> PPDB</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Akademik</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Kesiswaan</a></li>
                        <li><a href="{{ route('program-sekolah') }}"><i class="fas fa-chevron-right"></i> Program Sekolah</a></li>
                    </ul>
                </div>
            </div>

            <!-- COL 3: KONTAK -->
            <div class="col-lg-3 col-md-6">
                <div class="sdn-footer-widget">
                    <h4 class="sdn-footer-heading">Kontak Kami</h4>
                    <ul class="sdn-footer-contact">
                        <li>
                            <div class="sdn-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <strong>Alamat</strong>
                                <span>Jl. Mangkubumi No.1, Kec. Sadananya, Ciamis, Jawa Barat</span>
                            </div>
                        </li>
                        <li>
                            <div class="sdn-contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div>
                                <strong>Telepon</strong>
                                <span><a href="tel:+62000000000">(0265) 000-0000</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="sdn-contact-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <strong>Email</strong>
                                <span><a href="mailto:sdn1mangkubumi@gmail.com">sdn1mangkubumi@gmail.com</a></span>
                            </div>
                        </li>
                        <li>
                            <div class="sdn-contact-icon"><i class="fas fa-clock"></i></div>
                            <div>
                                <strong>Jam Operasional</strong>
                                <span>Senin – Jumat: 07.00 – 15.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- COL 4: MAPS EMBED -->
            <div class="col-lg-4 col-md-6">
                <div class="sdn-footer-widget">
                    <h4 class="sdn-footer-heading">Lokasi Sekolah</h4>
                    <div class="sdn-footer-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4!2d108.35!3d-7.38!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sSDN+1+Mangkubumi+Sadananya+Ciamis!5e0!3m2!1sid!2sid!4v1"
                            width="100%"
                            height="220"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <a href="https://maps.google.com/?q=SDN+1+Mangkubumi+Sadananya+Ciamis" target="_blank" class="sdn-maps-btn">
                            <i class="fas fa-directions"></i> Buka di Google Maps
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="sdn-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p><i class="far fa-copyright"></i> {{ date('Y') }} SDN 1 Mangkubumi — All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="sdn-copyright-links">
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

<style>
/* ══════════════════════════════
   FOOTER
══════════════════════════════ */
.sdn-footer {
    background: linear-gradient(160deg, #0d2b55 0%, #0a1f3d 60%, #061529 100%);
    color: rgba(255,255,255,0.75);
    font-family: 'Poppins', sans-serif;
    position: relative;
    padding-top: 0;
}

.sdn-footer-wave {
    line-height: 0;
    margin-bottom: -2px;
}
.sdn-footer-wave svg { display: block; width: 100%; }

/* LOGO */
.sdn-footer-logo {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
}
.sdn-footer-logo img {
    height: 52px;
    width: auto;
    
}
.sdn-footer-logo-title {
    display: block;
    font-size: 14px;
    font-weight: 800;
    color: #fff;
    line-height: 1.3;
}
.sdn-footer-logo-sub {
    display: block;
    font-size: 10px;
    font-weight: 500;
    color: rgba(255,255,255,0.5);
    letter-spacing: 1px;
    text-transform: uppercase;
}

.sdn-footer-desc {
    font-size: 13px;
    line-height: 1.9;
    color: rgba(255,255,255,0.55);
    margin-bottom: 20px;
}

/* SOSMED */
.sdn-footer-socials {
    display: flex;
    gap: 10px;
}
.sdn-footer-socials a {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    text-decoration: none;
    transition: all .3s;
}
.sdn-footer-socials a:hover {
    background: #f5a623;
    border-color: #f5a623;
    transform: translateY(-3px);
    color: #fff;
}

/* HEADING */
.sdn-footer-heading {
    font-size: 15px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
    padding-bottom: 10px;
    position: relative;
}
.sdn-footer-heading::after {
    content: '';
    position: absolute;
    left: 0; bottom: 0;
    width: 36px;
    height: 3px;
    background: #f5a623;
    border-radius: 2px;
}

/* LINKS */
.sdn-footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}
.sdn-footer-links li {
    margin-bottom: 10px;
}
.sdn-footer-links a {
    color: rgba(255,255,255,0.6);
    text-decoration: none;
    font-size: 13px;
    transition: all .3s;
    display: flex;
    align-items: center;
    gap: 8px;
}
.sdn-footer-links a i {
    font-size: 10px;
    color: #f5a623;
}
.sdn-footer-links a:hover {
    color: #f5a623;
    padding-left: 4px;
}

/* KONTAK */
.sdn-footer-contact {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.sdn-footer-contact li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}
.sdn-contact-icon {
    width: 36px;
    height: 36px;
    min-width: 36px;
    background: rgba(245,166,35,0.15);
    border: 1px solid rgba(245,166,35,0.3);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #f5a623;
    font-size: 13px;
}
.sdn-footer-contact strong {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 2px;
}
.sdn-footer-contact span,
.sdn-footer-contact a {
    font-size: 12px;
    color: rgba(255,255,255,0.55);
    text-decoration: none;
    transition: color .3s;
}
.sdn-footer-contact a:hover { color: #f5a623; }

/* MAPS */
.sdn-footer-map {
    border-radius: 14px;
    overflow: hidden;
    border: 2px solid rgba(255,255,255,0.1);
    position: relative;
}
.sdn-footer-map iframe {
    display: block;
    border-radius: 12px 12px 0 0;
    filter: grayscale(20%) contrast(1.05);
}
.sdn-maps-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #f5a623;
    color: #fff !important;
    font-size: 13px;
    font-weight: 600;
    padding: 10px;
    text-decoration: none !important;
    transition: background .3s;
    border-radius: 0 0 12px 12px;
}
.sdn-maps-btn:hover {
    background: #e09415;
    color: #fff;
}

/* COPYRIGHT */
.sdn-copyright {
    border-top: 1px solid rgba(255,255,255,0.08);
    padding: 18px 0;
    margin-top: 10px;
}
.sdn-copyright p {
    margin: 0;
    font-size: 13px;
    color: rgba(255,255,255,0.45);
}
.sdn-copyright-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 20px;
    justify-content: flex-end;
}
.sdn-copyright-links a {
    font-size: 12px;
    color: rgba(255,255,255,0.4);
    text-decoration: none;
    transition: color .3s;
}
.sdn-copyright-links a:hover { color: #f5a623; }

/* MOBILE */
@media (max-width: 576px) {
    .sdn-copyright-links { justify-content: center; margin-top: 8px; }
    .sdn-copyright p { text-align: center; }
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