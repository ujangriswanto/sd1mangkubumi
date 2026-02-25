<!doctype html>
<html lang="zxx">

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
	<!-- End Preloader Section -->
	
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

<!-- ===== HERO SECTION ===== -->
<section class="hero-full">

    <!-- Slider Background -->
    <div class="hero-slider">
        <div class="hero-slide active" style="background-image: url('{{ asset('assets/img/depan.png') }}')"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/depann.jpeg') }}')"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/depan.jpeg') }}')"></div>
        <div class="hero-slide" style="background-image: url('{{ asset('assets/img/depann.jpeg') }}')"></div>
    </div>

    <!-- Gradient overlay -->
    <div class="hero-overlay"></div>

    <!-- Konten -->
    <div class="hero-content">
        <div class="container">
            <div class="hero-inner">
                <div class="other-option">
                    <a class="default-btn" href="{{ url('/admin/login') }}">Login <span></span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Dots -->
    <div class="hero-slider-dots">
        <span class="hsdot active"></span>
        <span class="hsdot"></span>
        <span class="hsdot"></span>
        <span class="hsdot"></span>
    </div>

    <!-- Bottom wave -->
    <div class="hero-wave">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C360,100 1080,0 1440,60 L1440,100 L0,100 Z" fill="#08121f" opacity=".5"/>
            <path d="M0,60 C400,10 1000,90 1440,30 L1440,100 L0,100 Z" fill="#08121f"/>
        </svg>
    </div>

    <!-- Scroll hint -->
    <div class="hero-scroll">
        <div class="scroll-mouse"></div>
        <span>Scroll</span>
    </div>

</section>

<style>
.hero-full {
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

/* Slider */
.hero-slider {
    position: absolute;
    inset: 0;
    z-index: 0;
}

.hero-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 1.5s ease;
}

.hero-slide.active {
    opacity: 1;
    animation: sliderZoom 8s ease-in-out infinite alternate;
}

@keyframes sliderZoom {
    from { transform: scale(1.03); }
    to   { transform: scale(1.09); }
}

/* Overlay */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(4, 10, 24, 0.80) 0%,
        rgba(4, 10, 24, 0.50) 60%,
        rgba(4, 10, 24, 0.70) 100%
    );
    z-index: 1;
}

/* Konten */
.hero-content {
    position: relative;
    z-index: 2;
    width: 100%;
    padding: 160px 0 120px;
}

/* Dots */
.hero-slider-dots {
    position: absolute;
    bottom: 130px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 8px;
    z-index: 5;
}

.hsdot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(255,255,255,0.35);
    cursor: pointer;
    transition: all .3s;
}

.hsdot.active {
    background: #fff;
    width: 24px;
    border-radius: 4px;
}

/* Wave */
.hero-wave {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 3;
    line-height: 0;
}

.hero-wave svg {
    width: 100%;
    height: 100px;
    display: block;
}

/* Scroll hint */
.hero-scroll {
    position: absolute;
    bottom: 110px;
    right: 50px;
    z-index: 4;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,0.45);
    font-size: 11px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.scroll-mouse {
    width: 22px;
    height: 36px;
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 12px;
    position: relative;
}

.scroll-mouse::after {
    content: '';
    position: absolute;
    top: 6px;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 7px;
    background: rgba(255,255,255,0.5);
    border-radius: 2px;
    animation: scrollAnim 1.6s infinite;
}

@keyframes scrollAnim {
    0%   { opacity: 1; top: 6px; }
    100% { opacity: 0; top: 18px; }
}

@media (max-width: 768px) {
    .hero-scroll { display: none; }
}
</style>

<script>
(function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots   = document.querySelectorAll('.hsdot');
    let current  = 0;

    function goTo(idx) {
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = idx % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
    }

    dots.forEach((d, i) => d.addEventListener('click', () => goTo(i)));

    setInterval(() => goTo(current + 1), 5000);
})();
</script>


	<!-- End Home Section -->
	
	<!-- Start Services Section -->
<section class="guru-section">
    <div class="kepsek-wrap">
    @php
    $photoPath = null;

    if (!empty($data?->headmaster_photo)) {
        $photoPath = asset('storage/' . $data->headmaster_photo);
    }
@endphp

<div class="kepsek-card">

    <div class="kepsek-foto">
        <img 
            src="{{ $photoPath ?? asset('assets/img/kep.png') }}"
            alt="Kepala Sekolah"
            onerror="this.src='{{ asset('assets/img/kep.png') }}'">

        <div class="kepsek-badge">⭐ Kepala Sekolah</div>
    </div>

        <div class="kepsek-info">
            <div class="kepsek-label">
            Kepala Sekolah {{ $data->school_name ?? 'Nama Sekolah Belum Diisi' }}
            </div>

            <h3>
                {{ $data->headmaster_name ?? 'Nama Kepala Sekolah Belum Diisi' }}
            </h3>

            <p class="kepsek-nip">NIP: {{ $data->headmaster_nip ?? '—' }}</p>

            <p class="kepsek-quote">
                "{{ $data->headmaster_quote ?? 'Bersama membangun generasi yang cerdas, berkarakter, dan berprestasi untuk masa depan bangsa.' }}"
            </p>
        </div>
    </div>
</div>

        <!-- Sub judul dewan guru -->
        <div class="guru-sub-title">
    <button class="icon-button">
        <span class="star-icon"></span> Guru Kami / Tenaga Pengajar 
    </button>
</div>
        <style>
           /* Styling untuk tombol */
/* Styling untuk tombol */
.icon-button {
    background-color: #FFD700; /* Warna kuning untuk background tombol */
    color: black;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    border: none;
    border-radius: 30px; /* Membuat tombol melengkung seperti di gambar */
    padding: 10px 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin: 0 auto; /* Menyimpan tombol di tengah */
    width: fit-content; /* Menyesuaikan ukuran tombol dengan teks */
    font-family: 'Arial', sans-serif;
    position: relative; /* Menambahkan posisi relatif untuk efek shine */
    overflow: hidden; /* Agar kilauan tidak keluar dari tombol */
}
/* Efek kilap */
.icon-button::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 0) 100%);
    animation: shine 2s infinite;
    z-index: 1; /* Menempatkan kilauan di atas tombol */
}
/* Animasi kilau */
@keyframes shine {
    0% {
        left: -100%;
    }
    50% {
        left: 100%;
    }
    100% {
        left: 100%;
    }
}
.icon-button:hover {
    background-color: #FFCC00; /* Warna lebih terang saat hover */
}
.star-icon {
    margin-right: 8px; /* Menambahkan sedikit jarak antara bintang dan teks */
    font-size: 20px; /* Ukuran bintang */
}
.guru-sub-title {
    text-align: center;
    margin-bottom: 20px; /* Menambahkan jarak bawah agar terlihat lebih rapi */
}
        </style>

        <!-- ===== SLIDER GURU ===== -->
        @php
    $guruList = \App\Models\TeacherStaff::where('is_active', true)
                    ->orderBy('sort_order')
                    ->get();
@endphp
<div class="guru-slider-wrap">
    <div class="guru-track" id="guruTrack">

        @forelse($guruList as $guru)
        <div class="guru-card">
            <div class="guru-foto">
                <img src="{{ $guru->photo ? asset('storage/' . $guru->photo) : 'https://api.dicebear.com/7.x/bottts/svg?seed=' . $guru->id }}"
                     alt="{{ $guru->name }}"
                     onerror="this.src='https://api.dicebear.com/7.x/bottts/svg?seed={{ $guru->id }}'">
            </div>
            <div class="guru-info">
                <h4>{{ $guru->name }}</h4>
                @php
                    $pos = strtolower($guru->position);
                    if (str_contains($pos, 'kepala'))        $cls = 'jabatan-kepala';
                    elseif (str_contains($pos, 'kelas'))     $cls = 'jabatan-guru';
                    elseif (str_contains($pos, 'pai') || str_contains($pos, 'agama')) $cls = 'jabatan-agama';
                    elseif (str_contains($pos, 'pjok') || str_contains($pos, 'olahraga')) $cls = 'jabatan-orkes';
                    elseif (str_contains($pos, 'tata usaha') || str_contains($pos, 'tu')) $cls = 'jabatan-tata';
                    else $cls = 'jabatan-guru';
                @endphp
                <span class="guru-jabatan {{ $cls }}">{{ $guru->position }}</span>
                @if($guru->nip)
                    <p>NIP: {{ $guru->nip }}</p>
                @endif
            </div>
        </div>
        @empty
        <p style="color:#64748b; text-align:center; padding:20px;">Belum ada data guru tersedia.</p>
        @endforelse

    </div>
</div>

<!-- Navigasi -->
<div class="guru-nav">
    <button class="gnav-btn" id="guruPrev">&#8592;</button>
    <div class="guru-dots" id="guruDots"></div>
    <button class="gnav-btn" id="guruNext">&#8594;</button>
</div>

</section>

<style>
.guru-section {
    padding: 80px 0;
    background: #f8faff;
    overflow: hidden;
}

.guru-header {
    text-align: center;
    margin-bottom: 50px;
}

.guru-sub {
    display: inline-block;
    background: #ede9fe;
    color: #6d28d9;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 6px 18px;
    border-radius: 50px;
    margin-bottom: 14px;
}

.guru-title {
    font-size: clamp(28px, 4vw, 40px);
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
}

.guru-desc {
    color: #64748b;
    font-size: 15px;
    max-width: 500px;
    margin: 0 auto;
}

/* ===== KEPALA SEKOLAH FEATURED ===== */
.kepsek-wrap {
    display: flex;
    justify-content: center;
    margin-bottom: 100px;
}

.kepsek-card {
    display: flex;
    align-items: center;
    gap: 40px;
    background: linear-gradient(135deg, #1e3a8a 0%, #3b5bdb 100%);
    border-radius: 24px;
    padding: 40px 50px;
    max-width: 950px;
    width: 100%;
    box-shadow: 0 20px 60px rgba(59,91,219,0.3);
    position: relative;
    overflow: hidden;
}

.kepsek-card::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 200px; height: 200px;
    border-radius: 50%;
    background: rgba(255,255,255,0.05);
}

.kepsek-foto {
    position: relative;
    flex-shrink: 0;
}

.kepsek-foto img {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    object-position: top;
    border: 4px solid rgba(255,255,255,0.3);
    box-shadow: 0 8px 24px rgba(0,0,0,0.2);
}

.kepsek-badge {
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    background: #f5c518;
    color: #1a1a1a;
    font-size: 20px;
    font-weight: 800;
    padding: 4px 10px;
    border-radius: 50px;
    white-space: nowrap;
}

.kepsek-info { position: relative; z-index: 1; }

.kepsek-label {
    font-size: 22px;
    font-weight: 650;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgb(255, 255, 255);
    margin-bottom: 8px;
    font-style: bold;
    font-family: 'Roboto', sans-serif;
    
}

.kepsek-info h3 {
    font-size: 26px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 4px;
}

.kepsek-nip {
    font-size: 20px;
    color: rgb(255, 255, 255);
    margin-bottom: 14px;
    font-weight: bold;
    
}

.kepsek-quote {
    font-size: 15px;
    color: rgb(255, 255, 255);
    font-style: bold;
    line-height: 1.6;
    border-left: 3px solid #f5c518;
    padding-left: 12px;
    margin-bottom: 20px;
}

.kepsek-stats { display: flex; gap: 24px; }
.kepsek-stats div { text-align: center; }
.kepsek-stats span { display: block; font-size: 22px; font-weight: 800; color: #fff; }
.kepsek-stats small { font-size: 10px; color: rgba(255,255,255,0.55); }

.gst-line {
    flex: 1;
    height: 2px;
    background: linear-gradient(90deg, #e2e8f0, transparent);
    border-radius: 2px;
}

/* Slider */
.guru-slider-wrap { overflow: hidden; padding: 10px 4px 20px; }

.guru-track {
    display: flex;
    gap: 24px;
    transition: transform 0.45s cubic-bezier(.4,0,.2,1);
    will-change: transform;
}

.guru-card {
    flex: 0 0 calc(25% - 18px);
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.07);
    transition: transform .3s, box-shadow .3s;
    cursor: pointer;
}

.guru-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 32px rgba(0,0,0,0.12);
}

.guru-foto { width: 100%; height: 270px; overflow: hidden; background: #e2e8f0; }

.guru-foto img {
    width: 100%; height: 100%;
    object-fit: cover; object-position: top;
    transition: transform .4s;
}

.guru-card:hover .guru-foto img { transform: scale(1.06); }

.guru-info { padding: 18px 20px 22px; }

.guru-info h4 {
    font-size: 15px; font-weight: 800;
    color: #0f172a; margin-bottom: 8px; line-height: 1.3;
}

.guru-jabatan {
    display: inline-block;
    font-size: 11px; font-weight: 800;
    letter-spacing: 0.5px;
    padding: 4px 12px;
    border-radius: 50px;
    margin-bottom: 10px;
}

.jabatan-guru   { background: #dbeafe; color: #1d4ed8; }
.jabatan-agama  { background: #d1fae5; color: #065f46; }
.jabatan-orkes  { background: #fee2e2; color: #991b1b; }
.jabatan-tata   { background: #ede9fe; color: #5b21b6; }

.guru-info p { font-size: 13px; color: #000000; margin: 0; }

/* Navigasi */
.guru-nav { display: flex; align-items: center; justify-content: center; gap: 16px; margin-top: 30px; }

.gnav-btn {
    width: 42px; height: 42px;
    border-radius: 50%;
    border: 2px solid #6d28d9;
    background: transparent; color: #6d28d9;
    font-size: 18px; cursor: pointer;
    transition: all .25s;
    display: flex; align-items: center; justify-content: center;
}

.gnav-btn:hover { background: #6d28d9; color: #fff; }

.guru-dots { display: flex; gap: 8px; align-items: center; }

.gdot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: #cbd5e1;
    cursor: pointer; transition: all .25s;
}

.gdot.active { background: #6d28d9; width: 22px; border-radius: 4px; }

@media (max-width: 1024px) { .guru-card { flex: 0 0 calc(33.33% - 16px); } }
@media (max-width: 768px) {
    .guru-card { flex: 0 0 calc(50% - 12px); }
    .kepsek-card { flex-direction: column; text-align: center; padding: 30px 24px; }
    .kepsek-quote { text-align: left; }
    .kepsek-stats { justify-content: center; }
}
@media (max-width: 480px) { .guru-card { flex: 0 0 100%; } }
</style>

<script>
(function() {
    const track    = document.getElementById('guruTrack');
    const prevBtn  = document.getElementById('guruPrev');
    const nextBtn  = document.getElementById('guruNext');
    const dotsWrap = document.getElementById('guruDots');
    if (!track) return;

    const cards      = track.querySelectorAll('.guru-card');
    const totalCards = cards.length;

    function getVisible() {
        if (window.innerWidth <= 480)  return 1;
        if (window.innerWidth <= 768)  return 2;
        if (window.innerWidth <= 1024) return 3;
        return 4;
    }

    let current = 0;
    let visible  = getVisible();
    let maxIndex = totalCards - visible;

    function buildDots() {
        dotsWrap.innerHTML = '';
        visible  = getVisible();
        maxIndex = totalCards - visible;
        for (let i = 0; i <= maxIndex; i++) {
            const d = document.createElement('span');
            d.className = 'gdot' + (i === current ? ' active' : '');
            d.addEventListener('click', () => goTo(i));
            dotsWrap.appendChild(d);
        }
    }

    function goTo(idx) {
        current = Math.max(0, Math.min(idx, maxIndex));
        const cardWidth = cards[0].offsetWidth + 24;
        track.style.transform = `translateX(-${current * cardWidth}px)`;
        dotsWrap.querySelectorAll('.gdot').forEach((d, i) => d.classList.toggle('active', i === current));
    }

    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    let auto = setInterval(() => goTo(current < maxIndex ? current + 1 : 0), 1400);
    track.addEventListener('mouseenter', () => clearInterval(auto));
    track.addEventListener('mouseleave', () => {
        auto = setInterval(() => goTo(current < maxIndex ? current + 1 : 0), 1400);
    });

    window.addEventListener('resize', () => { buildDots(); goTo(0); });
    buildDots();
})();
</script>
	<!-- End Services Section -->


	<!-- Start About Section -->
	<!-- ===== SECTION BERITA ===== -->
@php
    $berita = \App\Models\Beritas::latest()->take(6)->get();
@endphp

<section class="berita2-section">
    <div class="container">

        <div class="berita2-header">
            <h2>Berita terbaru <em>SDN 1 Mangkubumi</em></h2>
            <p>Update kegiatan, pengumuman, dan informasi terkini seputar akademik dan prestasi SDN 1 Mangkubumi.</p>
        </div>

        <div class="berita2-grid">
            @forelse($berita as $item)
            <div class="berita2-card">
                <a href="/berita/{{ $item->slug }}" class="berita2-img-wrap">
                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->title }}">
                    <span class="berita2-badge">📰 {{ $item->category }}</span>
                </a>
                <div class="berita2-body">
                    <h3><a href="/berita/{{ $item->slug }}">{{ $item->title }}</a></h3>
                    <div class="berita2-footer">
                        <span>By <strong>{{ $item->author }}</strong></span>
                        <a href="/berita/{{ $item->slug }}" class="berita2-link">Baca selengkapnya →</a>
                    </div>
                </div>
            </div>
            @empty
            <p style="color:#64748b; grid-column: span 3; text-align:center;">Belum ada berita tersedia.</p>
            @endforelse
        </div>

        <div style="text-align:center; margin-top:48px;">
            <a href="/berita" class="berita2-btn-all">
                Tampilkan Semua Berita
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="vertical-align:middle; margin-left:6px;"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

    </div>
</section>
<style>
    ..berita2-section{
    padding:90px 20px;
    background:#f1f5f9;
    font-family:'Inter',system-ui;
}

/* HEADER */
.berita2-header{
    text-align:center;
    margin-bottom:60px;
}

.berita2-header h2{
    font-size:34px;
    font-weight:800;
    color:#0f172a;
    letter-spacing:-.5px;
}

.berita2-header h2 em{
    font-style:normal;
    color:#6366f1;
}

.berita2-header p{
    margin-top:12px;
    font-size:15px;
    color:#64748b;
}

/* GRID */
.berita2-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

/* CARD */
.berita2-card{
    background:rgba(255,255,255,0.75);
    backdrop-filter:blur(14px);
    border-radius:22px;
    overflow:hidden;
    border:1px solid rgba(255,255,255,.6);
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
    height:260px;
    position:relative;
    overflow:hidden;
}

.berita2-img-wrap img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:transform .7s cubic-bezier(.19,1,.22,1);
}

.berita2-card:hover img{
    transform:scale(1.12);
}

/* gradient overlay */
.berita2-img-wrap::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(to top, rgba(0,0,0,.45), transparent);
    opacity:.7;
    transition:.4s;
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
    background:linear-gradient(135deg,#6366f1,#4f46e5);
    color:white;
    letter-spacing:.3px;
    box-shadow:0 6px 16px rgba(79,70,229,.35);
}

/* BODY */
.berita2-body{
    padding:24px;
}

.berita2-body h3{
    font-size:18px;
    line-height:1.45;
    margin-bottom:18px;
}

.berita2-body h3 a{
    text-decoration:none;
    color:#020617;
    transition:.3s;
}

.berita2-body h3 a:hover{
    color:#6366f1;
}

/* FOOTER */
.berita2-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;
    font-size:13px;
    color:#64748b;
}

.berita2-footer strong{
    color:#0f172a;
    font-weight:600;
}

.berita2-link{
    font-weight:700;
    text-decoration:none;
    color:#6366f1;
    position:relative;
}

.berita2-link::after{
    content:"";
    position:absolute;
    bottom:-3px;
    left:0;
    width:0;
    height:2px;
    background:#6366f1;
    transition:.35s;
}

.berita2-link:hover::after{
    width:100%;
}

/* RESPONSIVE */
@media(max-width:600px){

    .berita2-header h2{
        font-size:26px;
    }

    .berita2-img-wrap{
        height:180px;
    }

}

.berita2-btn-all{
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding:14px 32px;
    border-radius:50px;
    background:linear-gradient(135deg,#6366f1,#4f46e5);
    color:#fff;
    font-weight:700;
    font-size:15px;
    text-decoration:none;
    letter-spacing:.2px;
    box-shadow:0 8px 24px rgba(79,70,229,.30);
    transition:all .35s cubic-bezier(.22,.61,.36,1);
}
.berita2-btn-all:hover{
    transform:translateY(-3px);
    box-shadow:0 14px 32px rgba(79,70,229,.40);
    color:#fff;
}
</style>
	<!-- End About Section -->
	
	<!-- Start Overview Section -->
	<section class="overview-section section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-image">
						<img src="assets/img/choose-1.png" alt="image">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-content">
						<h6 class="sub-title">adam?</h6>
						<h2>Safeguard Your Brand with Cyber Security and IT Solutions</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="features-list">
							<li> <span>Remote IT Assistance</span></li>
							<li> <span>Cloud Services</span></li>
							<li> <span>Managed IT Service</span></li>
							<li> <span>IT Security Services</span></li>
							<li> <span>Practice IT Management</span></li>
							<li> <span>Solving IT Problems</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Overview Section -->
	
	<!-- Start Overview Section -->
	<section class="overview-section pt-50 pb-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="overview-content">
						<h6 class="sub-title">WHY TRUST US?</h6>
						<h2>Achieve Digital Transformation For Your Retail Business Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="features-list">
							<li> <span>Protect your Business</span></li>
							<li> <span>Network Security</span></li>
							<li> <span>Data Security</span></li>
							<li> <span>Small Business Owners</span></li>
							<li> <span>Running your Business</span></li>
							<li> <span>Network Monitoring</span></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="overview-image-2">
						<img src="assets/img/choose-2.png" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Overview Section -->
	
	<!-- Start Portfolio Section -->
    <section class="portfolio-area bg-grey section-padding">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6 class="sub-title">Recent Works</h6>
						<h2>Our Portfolio</h2>
					</div>
				</div>
                <div class="col-md-12">
                    <div class="portfolio-list">
                        <ul class="nav" id="portfolio-flters">
                            <li class="filter filter-active" data-filter=".all">all</li>
                            <li class="filter" data-filter=".branding">branding</li>
                            <li class="filter" data-filter=".application">application</li>
                            <li class="filter" data-filter=".webdesign">web design</li>
                            <li class="filter" data-filter=".photography">photography</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="portfolio-container">
				<div class="row">
                    <!-- portfolio-item -->
                    <div class="col-lg-4 col-md-6 portfolio-grid-item all branding">
                        <div class="portfolio-item">
							<img src="assets/img/portfolio/portfolio-1.jpg" alt="image">
                            <div class="portfolio-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-portfolio.html">Creative Web Design</a></h3>
								<a class="portfolio-link-icon" href="single-portfolio.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <div class="col-lg-4 col-md-6 portfolio-grid-item all photography">
                        <div class="portfolio-item">
							<img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
                            <div class="portfolio-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-portfolio.html">Creative Web Design</a></h3>
								<a class="portfolio-link-icon" href="single-portfolio.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <div class="col-lg-4 col-md-6 portfolio-grid-item all branding webdesign">
                        <div class="portfolio-item">
							<img src="assets/img/portfolio/portfolio-3.jpg" alt="image">
                            <div class="portfolio-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-portfolio.html">Creative Web Design</a></h3>
								<a class="portfolio-link-icon" href="single-portfolio.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <div class="col-lg-4 col-md-6 portfolio-grid-item all webdesign">
                        <div class="portfolio-item">
							<img src="assets/img/portfolio/portfolio-4.jpg" alt="image">
                            <div class="portfolio-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-portfolio.html">Creative Web Design</a></h3>
								<a class="portfolio-link-icon" href="single-portfolio.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <div class="col-lg-4 col-md-6 portfolio-grid-item all application">
                        <div class="portfolio-item">
							<img src="assets/img/portfolio/portfolio-5.jpg" alt="image">
                            <div class="portfolio-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-portfolio.html">Creative Web Design</a></h3>
								<a class="portfolio-link-icon" href="single-portfolio.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item -->
                    <div class="col-lg-4 col-md-6 portfolio-grid-item all application photography">
                        <div class="portfolio-item">
							<img src="assets/img/portfolio/portfolio-6.jpg" alt="image">
                            <div class="portfolio-content-overlay">
								<p>App Store | Social Media</p>
								<h3><a href="single-portfolio.html">Creative Web Design</a></h3>
								<a class="portfolio-link-icon" href="single-portfolio.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
	
	<!-- Start Counter Section -->
	<section class="counter-area counter-bg-3 section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">24</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Years Helping Business</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">250</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Working Employees</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">4500</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Complete Projects</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 counter-item">
					<div class="single-counter">
						<div class="counter-contents">
							<h2>
								<span class="counter-number">3000</span>
								<span>+</span>
							</h2>
							<h3 class="counter-heading">Happy Customers</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Section -->
	
	<!-- Start Testimonial Section -->
	<section class="testimonial-section pt-100 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6 class="sub-title">Our Testimonial</h6>
						<h2>Client Feedback</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="testimonial-slider owl-carousel owl-theme">
						<!-- testimonials item -->
						<div class="single-testimonial">
							<div class="rating-box">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<div class="avatar">
								<img src="assets/img/client/testimonial-1.jpg" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Saabir al-Obeid</h3>
									<span>Turkey</span>
								</div>
							</div>
						</div>
						<!-- testimonials item -->
						<div class="single-testimonial">
							<div class="rating-box">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<div class="avatar">
								<img src="assets/img/client/testimonial-2.jpg" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Zahra Burnett</h3>
									<span>United States</span>
								</div>
							</div>
						</div>
						<!-- testimonials item -->
						<div class="single-testimonial">
							<div class="rating-box">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
							</div>
							<div class="testimonial-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation.</p>
							</div>
							<div class="avatar">
								<img src="assets/img/client/testimonial-3.jpg" alt="testimonial images">
							</div>
							<div class="testimonial-bio">
								<div class="bio-info">
									<h3>Stevie Wills</h3>
									<span>Germany</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Start Team Section -->
	<section class="team-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6 class="sub-title">Team Member</h6>
						<h2>Expert Team</h2>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="assets/img/team/team-1.jpg" alt="team">
							<div class="team-social-icon">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
								<a href="#"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Ava Farrington</h3>
							<span>Founder, CEO</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="assets/img/team/team-2.jpg" alt="team">
							<div class="team-social-icon">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
								<a href="#"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Kevin Haley</h3>
							<span>Co-Founder, CTO</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="assets/img/team/team-3.jpg" alt="team">
							<div class="team-social-icon">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
								<a href="#"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Alishia Fulton</h3>
							<span>Chief Creative Officer</span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="assets/img/team/team-4.jpg" alt="team">
							<div class="team-social-icon">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
								<a href="#"><i class="fab fa-linkedin"></i></a>
							</div>
						</div>
						<div class="team-info">
							<h3>Lucas Martinez</h3>
							<span>Creative Director</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- Start Blog Section -->
	<section class="blog-section bg-grey pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6 class="sub-title">Blog & Article</h6>
						<h2>Recent Blog</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-single-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-1.jpg" alt="image">
							</a>
						</div>
						<div class="blog-description">
							<ul class="blog-info">
								<li>
									<a href="#"><i class="bi bi-person-circle"></i> Author</a>
								</li>
								<li>
									<a href="#"><i class="bi bi-calendar-check"></i> 17 June 2025</a>
								</li>
							</ul>
							<div class="blog-text">
								<h3>
                                    <a href="single-blog.html">
										Planning for a Safe Return to the Workplace IT Solutions
                                    </a>
                                </h3>
								<p>Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed eiusmod tempor incididunt ut labore dolore magna aliqua</p>
								<div class="blog-btn"> <a href="single-blog.html" class="read-more"><i class="bi bi-arrow-right-short"></i> Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-single-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-2.jpg" alt="image">
							</a>
						</div>
						<div class="blog-description">
							<ul class="blog-info">
								<li>
									<a href="#"><i class="bi bi-person-circle"></i> Author</a>
								</li>
								<li>
									<a href="#"><i class="bi bi-calendar-check"></i> 20 June 2025</a>
								</li>
							</ul>
							<div class="blog-text">
								<h3>
									<a href="single-blog.html">
                                       Announcing Our New Smiles for Success Charity
                                    </a>
								</h3>
								<p>Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed eiusmod tempor incididunt ut labore dolore magna aliqua</p>
								<div class="blog-btn">
									<a href="single-blog.html" class="read-more"><i class="bi bi-arrow-right-short"></i> Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog-single-item">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="assets/img/blog/blog-3.jpg" alt="image">
							</a>
						</div>
						<div class="blog-description">
							<ul class="blog-info">
								<li>
									<a href="#"><i class="bi bi-person-circle"></i> Author</a>
								</li>
								<li>
									<a href="#"><i class="bi bi-calendar-check"></i> 25 June 2025</a>
								</li>
							</ul>
							<div class="blog-text">
								<h3>
                                    <a href="single-blog.html">
                                        Machine Learning Applications for Every Industry
                                    </a>
                                </h3>
								<p>Lorem ipsum dolor sit amet, consectetu adipiscing elit, sed eiusmod tempor incididunt ut labore dolore magna aliqua</p>
								<div class="blog-btn">
									<a href="single-blog.html" class="read-more"><i class="bi bi-arrow-right-short"></i> Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Section -->
	
	<!-- Start Partner section -->
	<section class="partner-section pt-100 pb-70">
		<div class="container">
			<div class="partner-title">
				<h6 class="sub-title">Trusted By Over 1500</h6>
				<h2>Our Customers</h2>
			</div>
			<div class="partner-list">
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-1.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-2.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-3.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-4.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-5.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-6.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-7.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-8.png" alt="image">
					</a>
				</div>
				<div class="partner-item">
					<a href="#0">
						<img src="assets/img/partner/client-9.png" alt="image">
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Partner section -->
	
	<!-- Start Hire Section -->
	<section class="hire-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-12">
					<div class="hire-content">
						<h6 class="sub-title">Want to work with us?</h6>
						<h2>Digitally Transform & Grow Your Business</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud consectetur voluptatem accusantium doloremque adipiscing elit.</p>
						<div class="hire-btn">
							<a class="default-btn" href="tel:12345678">Call Now<span></span></a>
							<a class="default-btn-one" href="contact.html">Contact Us<span></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hire Section -->
	
	<!-- Start Contact Section -->
	<div class="contact-section home-1-contact-section section-padding">
		<div class="container">
			<div class="section-title">
				<h6 class="sub-title">Let's Talk</h6>
				<h2>Contact Us</h2>
			</div>
			<div class="row">
				<div class="col-lg-5 col-md-12">
					<!-- Start Contact Box Area -->
					<div class="home-contact-box-info">
						<div class="home-contact-img">
							<img src="assets/img/contact.jpg" alt="" />
						</div>
						<p>We provide estimates by phone, email, or at your home. The estimate is completely free! Fill out the form, call us <span class="color-text">080 707 555-321</span> or <span class="color-text">random@example.com</span>, and leave your telephone number and home address.</p>
						<p>We look forward to hearing from you!</p>
					</div>
					<!-- End Contact Box Area -->
				</div>
				<div class="col-lg-7 col-md-12">
					<div class="contact-form">
						<p class="form-message"></p>
						<form id="contact-form" class="contact-form form" action="phpmails.php" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<input type="text" name="phone" id="phone" required class="form-control" placeholder="Your Phone">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="default-btn submit-btn">Send Message <span></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->
	
		

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
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Program Sekolah</a></li>
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
    filter: brightness(0) invert(1);
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