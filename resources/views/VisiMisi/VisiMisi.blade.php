<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tentang Sekolah - SDN 1 Mangkubumi</title>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
                </a>
                <style>
                    .navbar-nav .nav-link { font-size:15px !important; font-weight:600; letter-spacing:.3px; }
                    .dropdown-menu .nav-link { font-size:12px !important; }
                    .brand-title { font-size:13px !important; color: #ffffff; }
                    .brand-sub { font-size:9px !important; color: rgba(255,255,255,0.75); }
                    .scrolled .brand-title { color: #000000; }
                    .scrolled .brand-sub { color: rgba(0,0,0,0.845); }
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
                            <a href="{{ route('kurikulum') }}" class="nav-link">Kurikulum</a>
                        </li>
						 <li class="nav-item">
                        <a href="/berita" class="nav-link">Berita</a>
                        </li>
						<li class="nav-item">
                            <a href="{{ route('ppdb.index') }}" class="nav-link">PPDB</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Akademik <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                            <a href="{{ route('jadwal-pelajaran') }}" class="nav-link">Jadwal Pelajaran</a>
                                </li>
                                <li class="nav-item">
                                <a href="{{ route('tata-tertib-sekolah') }}" 
                                  class="nav-link {{ request()->routeIs('tata-tertib-sekolah') ? 'active' : '' }}">
                                    Tata Tertib Sekolah
                                    </a>
                                </li>
                                <li class="nav-item">
    <a href="{{ route('tata-tertib-siswa') }}" class="nav-link {{ request()->routeIs('tata-tertib-siswa') ? 'active' : '' }}">
                        Tata Tertib Siswa
                                </a>
                                </li>
								
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Kesiswaan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
    <a href="{{ route('DataSiswa.index') }}" class="nav-link">Total Data Siswa/Kelas</a>
</li>
                                {{-- <li class="nav-item"><a href="#" class="nav-link">Galeri Kegiatan</a></li> --}}
                            </ul>
                        </li>
						<li class="nav-item">
                        <a href="{{ route('program-sekolah') }}" class="nav-link">Program Sekolah</a>
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
    <div class="visimisi-hero-badge">TENTANG SEKOLAH</div>
    <a href="{{ url('/') }}" class="visimisi-hero-btn">← Kembali ke Beranda</a>
    <div class="visimisi-hero-wave">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,60 L1440,80 L0,80 Z" fill="#eef2ff"/>
        </svg>
    </div>
</div>

<section class="visimisi-section">
    <div class="container">

        <div class="visimisi-header">
            <span class="visimisi-tag">Kata Pengantar</span>
            <h2><em>Sambutan Kepala Sekolah</em></h2>
        </div>

        <div class="sejarah-wrapper">
            <div class="sejarah-card" style="padding:0;overflow:hidden;">

                {{-- HEADER KEPSEK --}}
                <div class="kepsek-header">
                    <div class="kepsek-header-bg"></div>
                    <div class="kepsek-header-content">
                        @if($data->headmaster_photo)
                            <img src="{{ asset('storage/' . $data->headmaster_photo) }}"
                                 alt="Foto Kepala Sekolah"
                                 class="kepsek-photo">
                        @else
                            <div class="kepsek-photo kepsek-placeholder">
                                <i class="fas fa-user"></i>
                            </div>
                        @endif
                        <div class="kepsek-info">
                            <span class="kepsek-badge">Kepala Sekolah</span>
                            <h3 class="kepsek-name">{{ $data->headmaster_name ?? 'Kepala SDN 1 Mangkubumi' }}</h3>
                            <span class="kepsek-nip">SDN 1 Mangkubumi · Kec. Sadananya</span>
                        </div>
                    </div>
                </div>

                {{-- KONTEN --}}
                <div class="kepsek-body">
                    <div class="kepsek-quote-mark">"</div>
                    <div class="sejarah-content kepsek-text">
                        {!! $data->history ?? '<p>Kata pengantar belum diisi.</p>' !!}
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<style>
/* KATA PENGANTAR CARD */
.kepsek-header {
    position: relative;
    padding: 36px 40px 32px;
    overflow: hidden;
    border-bottom: 1px solid rgba(99,102,241,0.1);
}
.kepsek-header-bg {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #eef2ff 0%, #f5f3ff 50%, #ede9fe 100%);
    z-index: 0;
}
.kepsek-header-bg::after {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 220px; height: 220px;
    background: radial-gradient(circle, rgba(99,102,241,0.12) 0%, transparent 70%);
    border-radius: 50%;
}
.kepsek-header-content {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 24px;
    flex-wrap: wrap;
}
.kepsek-photo {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #fff;
    box-shadow: 0 4px 20px rgba(99,102,241,0.3), 0 0 0 4px rgba(99,102,241,0.12);
    flex-shrink: 0;
    transition: transform 0.3s;
}
.kepsek-photo:hover { transform: scale(1.04); }
.kepsek-placeholder {
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 36px;
}
.kepsek-info {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.kepsek-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #6366f1;
    background: rgba(99,102,241,0.1);
    border: 1px solid rgba(99,102,241,0.2);
    padding: 4px 12px;
    border-radius: 100px;
    width: fit-content;
}
.kepsek-badge::before {
    content: '';
    width: 6px; height: 6px;
    background: #6366f1;
    border-radius: 50%;
}
.kepsek-name {
    font-size: 22px !important;
    font-weight: 800 !important;
    color: #1e1b4b !important;
    margin: 0 !important;
    line-height: 1.3;
}
.kepsek-nip {
    font-size: 13px;
    color: #6b7280;
    font-weight: 500;
}

/* BODY */
.kepsek-body {
    position: relative;
    padding: 36px 40px 40px;
}
.kepsek-quote-mark {
    font-size: 120px;
    line-height: 1;
    color: rgba(99,102,241,0.07);
    font-family: Georgia, serif;
    font-weight: 900;
    position: absolute;
    top: 8px; left: 32px;
    user-select: none;
    pointer-events: none;
}
.kepsek-text {
    position: relative;
    z-index: 1;
}

@media (max-width: 480px) {
    .kepsek-header { padding: 24px 20px; }
    .kepsek-header-content { flex-direction: column; text-align: center; align-items: center; }
    .kepsek-badge { align-self: center; }
    .kepsek-body { padding: 24px 20px; }
    .kepsek-quote-mark { font-size: 72px; }
}
</style>

<!-- ══════════════════════════════
     2. STRUKTUR ORGANISASI
══════════════════════════════ -->
@if($data->struktur_organisasi)
<section class="struktur-section">
    <div class="container">

        <div class="visimisi-header">
            <span class="visimisi-tag">Organisasi</span>
            <h2><em>Struktur Organisasi</em></h2>
        </div>

        <div class="struktur-wrapper">
            <button class="struktur-fullscreen-btn" onclick="openLightbox()">
                <i class="fas fa-expand"></i> Perbesar
            </button>
            <img
                src="{{ asset('storage/' . $data->struktur_organisasi) }}"
                alt="Struktur Organisasi SDN 1 Mangkubumi"
                class="struktur-img"
                onclick="openLightbox()"
                id="strukturImg"
            >
        </div>

    </div>
</section>

<!-- LIGHTBOX -->
<div class="struktur-lightbox" id="strukturLightbox" onclick="closeLightbox()">
    <div class="struktur-lightbox-inner">
        <button class="struktur-close-btn" onclick="closeLightbox()">
            <i class="fas fa-times"></i>
        </button>
        <img src="{{ asset('storage/' . $data->struktur_organisasi) }}" alt="Struktur Organisasi">
    </div>
</div>
@endif


<!-- ══════════════════════════════
     3. VISI & MISI
══════════════════════════════ -->
<section class="visimisi-section" style="padding-top:0;">
    <div class="container">

        <div class="visimisi-header">
            <span class="visimisi-tag">Visi & Misi</span>
            <h2><em>SDN 1 Mangkubumi</em></h2>
        </div>

        <div class="vm-cards-grid">

            {{-- VISI --}}
            <div class="vm-card vm-card-visi">
                <div class="vm-card-header">
                    <div class="vm-card-header-bg"></div>
                    <div class="vm-card-header-inner">
                        <div class="vm-card-icon-wrap vm-icon-visi">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="5"/><line x1="12" y1="19" x2="12" y2="22"/><line x1="2" y1="12" x2="5" y2="12"/><line x1="19" y1="12" x2="22" y2="12"/></svg>
                        </div>
                        <div>
                            <span class="vm-card-eyebrow">SDN 1 Mangkubumi</span>
                            <h3 class="vm-card-title">Visi</h3>
                        </div>
                    </div>
                </div>
                <div class="vm-card-body">
                    <div class="vm-card-content">
                        {!! $data->vision ?? '<p>Visi belum diisi.</p>' !!}
                    </div>
                </div>
            </div>

            {{-- MISI --}}
            <div class="vm-card vm-card-misi">
                <div class="vm-card-header">
                    <div class="vm-card-header-bg"></div>
                    <div class="vm-card-header-inner">
                        <div class="vm-card-icon-wrap vm-icon-misi">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                        </div>
                        <div>
                            <span class="vm-card-eyebrow">SDN 1 Mangkubumi</span>
                            <h3 class="vm-card-title">Misi</h3>
                        </div>
                    </div>
                </div>
                <div class="vm-card-body">
                    <div class="vm-card-content">
                        {!! $data->mission ?? '<p>Misi belum diisi.</p>' !!}
                    </div>
                </div>
            </div>

        </div>

</section>

<style>
/* ══════════════════════════════
   VISI MISI CARDS
══════════════════════════════ */
.vm-cards-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.vm-card {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.07);
    border: 1px solid transparent;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
}
.vm-card:hover {
    transform: translateY(-6px);
}

/* VISI - biru/indigo */
.vm-card-visi { border-color: rgba(99,102,241,0.15); }
.vm-card-visi:hover { box-shadow: 0 16px 48px rgba(99,102,241,0.18); }
.vm-card-visi .vm-card-header-bg {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, #4f46e5 0%, #6366f1 50%, #818cf8 100%);
}
.vm-icon-visi { background: rgba(255,255,255,0.2); color: #fff; }
.vm-card-visi .vm-card-eyebrow { color: rgba(255,255,255,0.7); }
.vm-card-visi .vm-card-title  { color: #fff; }

/* MISI - hijau/teal */
.vm-card-misi { border-color: rgba(16,185,129,0.15); }
.vm-card-misi:hover { box-shadow: 0 16px 48px rgba(16,185,129,0.18); }
.vm-card-misi .vm-card-header-bg {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, #059669 0%, #10b981 50%, #34d399 100%);
}
.vm-icon-misi { background: rgba(255,255,255,0.2); color: #fff; }
.vm-card-misi .vm-card-eyebrow { color: rgba(255,255,255,0.7); }
.vm-card-misi .vm-card-title  { color: #fff; }

/* CARD HEADER */
.vm-card-header {
    position: relative;
    padding: 28px 32px;
    overflow: hidden;
}
.vm-card-header::after {
    content: '';
    position: absolute;
    bottom: -30px; right: -30px;
    width: 120px; height: 120px;
    background: rgba(255,255,255,0.08);
    border-radius: 50%;
    pointer-events: none;
}
.vm-card-header::before {
    content: '';
    position: absolute;
    top: -20px; right: 40px;
    width: 80px; height: 80px;
    background: rgba(255,255,255,0.06);
    border-radius: 50%;
    pointer-events: none;
}
.vm-card-header-inner {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 16px;
}
.vm-card-icon-wrap {
    width: 54px; height: 54px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    backdrop-filter: blur(8px);
}
.vm-card-eyebrow {
    display: block;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 4px;
}
.vm-card-title {
    font-size: 24px !important;
    font-weight: 800 !important;
    margin: 0 !important;
    line-height: 1.2;
}

/* CARD BODY */
.vm-card-body {
    padding: 28px 32px 32px;
    background: #fff;
}
.vm-card-content {
    font-size: 14px;
    line-height: 1.9;
    color: #4b5563;
}
.vm-card-content p { margin-bottom: 10px; }
.vm-card-content p:last-child { margin-bottom: 0; }
.vm-card-content ul { padding-left: 18px; }
.vm-card-content li {
    margin-bottom: 8px;
    padding-left: 4px;
}
.vm-card-visi .vm-card-content li::marker { color: #6366f1; }
.vm-card-misi .vm-card-content li::marker { color: #10b981; }

/* STATS BAR */
.vm-stats-bar {
    background: #fff;
    border: 1px solid rgba(99,102,241,0.1);
    border-radius: 16px;
    padding: 24px 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
    box-shadow: 0 2px 12px rgba(0,0,0,0.04);
    flex-wrap: wrap;
}
.vm-stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 4px;
    padding: 0 40px;
    flex: 1;
    min-width: 100px;
}
.vm-stat-num {
    font-size: 36px;
    font-weight: 900;
    color: #6366f1;
    line-height: 1;
    font-family: 'Dosis', sans-serif;
}
.vm-stat-lbl {
    font-size: 11px;
    font-weight: 700;
    color: #9ca3af;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
}
.vm-stat-divider {
    width: 1px;
    height: 48px;
    background: rgba(99,102,241,0.12);
    flex-shrink: 0;
}

@media (max-width: 768px) {
    .vm-cards-grid { grid-template-columns: 1fr; }
    .vm-card-header { padding: 22px 24px; }
    .vm-card-body { padding: 22px 24px 28px; }
    .vm-stats-bar { padding: 20px 16px; gap: 12px; }
    .vm-stat-item { padding: 0 20px; }
    .vm-stat-divider { display: none; }
}
</style>

<style>
/* ══════════════════════════════
   STRUKTUR ORGANISASI
══════════════════════════════ */
.struktur-section {
    padding: 20px 0 70px;
    background: #eef2ff;
    position: relative;
}

.struktur-wrapper {
    position: relative;
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.10);
    padding: 24px;
    text-align: center;
    border: 1px solid rgba(99,102,241,0.12);
    overflow: hidden;
}

.struktur-wrapper::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #6366f1, #8b5cf6, #06b6d4);
    border-radius: 20px 20px 0 0;
}

.struktur-img {
    width: 100%;
    max-width: 960px;
    height: auto;
    border-radius: 12px;
    cursor: zoom-in;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: block;
    margin: 0 auto;
}

.struktur-img:hover {
    transform: scale(1.01);
    box-shadow: 0 8px 30px rgba(99,102,241,0.2);
}

.struktur-fullscreen-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    cursor: pointer;
    margin-bottom: 18px;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(99,102,241,0.35);
}

.struktur-fullscreen-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(99,102,241,0.45);
}

/* LIGHTBOX */
.struktur-lightbox {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.92);
    z-index: 99999;
    align-items: center;
    justify-content: center;
    padding: 20px;
    cursor: zoom-out;
}

.struktur-lightbox.active {
    display: flex;
}

.struktur-lightbox-inner {
    position: relative;
    max-width: 95vw;
    max-height: 90vh;
}

.struktur-lightbox-inner img {
    max-width: 100%;
    max-height: 88vh;
    border-radius: 12px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    display: block;
}

.struktur-close-btn {
    position: absolute;
    top: -16px;
    right: -16px;
    width: 40px;
    height: 40px;
    background: #ef4444;
    color: #fff;
    border: none;
    border-radius: 50%;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    transition: background 0.3s;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
}

.struktur-close-btn:hover {
    background: #dc2626;
}

@media (max-width: 576px) {
    .struktur-wrapper { padding: 16px; }
}
</style>

<script>
function openLightbox() {
    document.getElementById('strukturLightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeLightbox() {
    document.getElementById('strukturLightbox').classList.remove('active');
    document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
});
</script>

@include('VisiMisi.Visimisi_css')

<!-- ══════════════════════════════
     FOOTER
══════════════════════════════ -->
<footer class="sdn-footer">
    <div class="sdn-footer-wave">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,0 C480,80 960,0 1440,60 L1440,0 Z" fill="#f8faff"/>
        </svg>
    </div>
    <div class="container">
        <div class="row g-4 pt-2 pb-5">

            <div class="col-lg-3 col-md-6">
                <div class="sdn-footer-brand">
                    <div class="sdn-footer-logo">
                        <img src="assets/img/tutt.png" class="white-logo" alt="logo" style="height:50px;width:auto;display:block;">
                        <div>
                            <span class="sdn-footer-logo-title">{{ $data?->nama_sekolah ?? 'SDN 1 Mangkubumi' }}</span>
                            <span class="sdn-footer-logo-sub">{{ $data?->kecamatan ?? 'Kecamatan Sadananya' }}</span>
                        </div>
                    </div>
                    <p class="sdn-footer-desc">{{ $data?->deskripsi ?? 'Sekolah Dasar Negeri 1 Mangkubumi berkomitmen mencetak generasi unggul, berkarakter, dan berprestasi di bawah naungan pendidikan berkualitas.' }}</p>
                    <div class="sdn-footer-socials">
                        @if($contact?->facebook)<a href="{{ $contact->facebook }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>@endif
                        @if($contact?->instagram)<a href="{{ $contact->instagram }}" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>@endif
                        @if($contact?->youtube)<a href="{{ $contact->youtube }}" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>@endif
                        @if($contact?->tiktok)<a href="{{ $contact->tiktok }}" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>@endif
                    </div>
                </div>
            </div>

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

            <div class="col-lg-3 col-md-6">
                <div class="sdn-footer-widget">
                    <h4 class="sdn-footer-heading">Kontak Kami</h4>
                    <ul class="sdn-footer-contact">
                        @if($contact?->address)<li><div class="sdn-contact-icon"><i class="fas fa-map-marker-alt"></i></div><div><strong>Alamat</strong><span>{{ $contact->address }}</span></div></li>@endif
                        @if($contact?->phone)<li><div class="sdn-contact-icon"><i class="fas fa-phone-alt"></i></div><div><strong>Telepon</strong><span><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></span></div></li>@endif
                        @if($contact?->whatsapp)<li><div class="sdn-contact-icon"><i class="fab fa-whatsapp"></i></div><div><strong>WhatsApp</strong><span><a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->whatsapp) }}" target="_blank">{{ $contact->whatsapp }}</a></span></div></li>@endif
                        @if($contact?->email)<li><div class="sdn-contact-icon"><i class="fas fa-envelope"></i></div><div><strong>Email</strong><span><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></span></div></li>@endif
                        @if($contact?->working_hours)<li><div class="sdn-contact-icon"><i class="fas fa-clock"></i></div><div><strong>Jam Operasional</strong><span>{{ $contact->working_hours }}</span></div></li>@endif
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sdn-footer-widget">
                    <h4 class="sdn-footer-heading">Lokasi Sekolah</h4>
                    <div class="sdn-footer-map">
                        @if($contact?->google_maps_link)
                        <iframe src="{{ $contact->google_maps_link }}" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @else
                        <div style="background:rgba(255,255,255,0.05);height:220px;display:flex;align-items:center;justify-content:center;border-radius:8px;color:#6b7280;font-size:13px;"><i class="fas fa-map-marked-alt" style="margin-right:8px"></i> Lokasi belum diatur</div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="sdn-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p><i class="far fa-copyright"></i> {{ date('Y') }} {{ $data?->nama_sekolah ?? 'SDN 1 Mangkubumi' }} — All Rights Reserved.</p>
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
.sdn-footer { background: linear-gradient(160deg, #0d2b55 0%, #0a1f3d 60%, #061529 100%); color: rgba(255,255,255,0.75); font-family: 'Poppins', sans-serif; position: relative; padding-top: 0; }
.sdn-footer-wave { line-height: 0; margin-bottom: -2px; }
.sdn-footer-wave svg { display: block; width: 100%; }
.sdn-footer-logo { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }
.sdn-footer-logo img { height: 52px; width: auto; }
.sdn-footer-logo-title { display: block; font-size: 14px; font-weight: 800; color: #fff; line-height: 1.3; }
.sdn-footer-logo-sub { display: block; font-size: 10px; font-weight: 500; color: rgba(255,255,255,0.5); letter-spacing: 1px; text-transform: uppercase; }
.sdn-footer-desc { font-size: 13px; line-height: 1.9; color: rgba(255,255,255,0.55); margin-bottom: 20px; }
.sdn-footer-socials { display: flex; gap: 10px; }
.sdn-footer-socials a { width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 14px; text-decoration: none; transition: all .3s; }
.sdn-footer-socials a:hover { background: #f5a623; border-color: #f5a623; transform: translateY(-3px); color: #fff; }
.sdn-footer-heading { font-size: 15px; font-weight: 700; color: #fff; margin-bottom: 20px; padding-bottom: 10px; position: relative; }
.sdn-footer-heading::after { content: ''; position: absolute; left: 0; bottom: 0; width: 36px; height: 3px; background: #f5a623; border-radius: 2px; }
.sdn-footer-links { list-style: none; padding: 0; margin: 0; }
.sdn-footer-links li { margin-bottom: 10px; }
.sdn-footer-links a { color: rgba(255,255,255,0.6); text-decoration: none; font-size: 13px; transition: all .3s; display: flex; align-items: center; gap: 8px; }
.sdn-footer-links a i { font-size: 10px; color: #f5a623; }
.sdn-footer-links a:hover { color: #f5a623; padding-left: 4px; }
.sdn-footer-contact { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 16px; }
.sdn-footer-contact li { display: flex; align-items: flex-start; gap: 12px; }
.sdn-contact-icon { width: 36px; height: 36px; min-width: 36px; background: rgba(245,166,35,0.15); border: 1px solid rgba(245,166,35,0.3); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f5a623; font-size: 13px; }
.sdn-footer-contact strong { display: block; font-size: 12px; font-weight: 600; color: #fff; margin-bottom: 2px; }
.sdn-footer-contact span, .sdn-footer-contact a { font-size: 12px; color: rgba(255,255,255,0.55); text-decoration: none; transition: color .3s; }
.sdn-footer-contact a:hover { color: #f5a623; }
.sdn-footer-map { border-radius: 14px; overflow: hidden; border: 2px solid rgba(255,255,255,0.1); position: relative; }
.sdn-footer-map iframe { display: block; border-radius: 12px 12px 0 0; filter: grayscale(20%) contrast(1.05); }
.sdn-copyright { border-top: 1px solid rgba(255,255,255,0.08); padding: 18px 0; margin-top: 10px; }
.sdn-copyright p { margin: 0; font-size: 13px; color: rgba(255,255,255,0.45); }
.sdn-copyright-links { list-style: none; padding: 0; margin: 0; display: flex; gap: 20px; justify-content: flex-end; }
.sdn-copyright-links a { font-size: 12px; color: rgba(255,255,255,0.4); text-decoration: none; transition: color .3s; }
.sdn-copyright-links a:hover { color: #f5a623; }
@media (max-width: 576px) { .sdn-copyright-links { justify-content: center; margin-top: 8px; } .sdn-copyright p { text-align: center; } }
</style>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/vanilla-tilt.min.js"></script>
<script src="assets/js/ajax.mail.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
