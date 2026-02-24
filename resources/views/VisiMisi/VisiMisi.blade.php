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
    <!-- ===== NAVBAR ===== -->
<div class="navbar-section" id="mainNav">
    <div class="techvio-responsive-nav">
        <div class="container">
            <div class="techvio-responsive-menu">
                <div class="logo">
                    <a href="index.html">
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


                <a class="navbar-brand" href="index.html" style="padding:0;line-height:1;display:flex;align-items:center;gap:10px;">
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
                            <a href="/visi-misi" class="nav-link">Visi & Misi</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">Tentang</a>
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
                            <a href="about.html" class="nav-link">Program Sekolah</a>
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

<!-- ══════════════════════════════
     HERO HEADER
══════════════════════════════ -->
<div class="visimisi-hero">
    <div class="visimisi-hero-badge">VISI,MISI & SEJARAH</div>
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
@include('VisiMisi.Visimisi_css')


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