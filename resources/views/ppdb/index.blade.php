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



 {{-- Google Fonts --}}
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,700;1,9..144,500&display=swap" rel="stylesheet">

<style>
  :root {
    --emerald:    #0f7a5a;
    --emerald-lt: #17a076;
    --gold:       #e8a020;
    --gold-lt:    #f5bc45;
    --cream:      #fdf9f3;
    --ink:        #0d1f1a;
    --ink-muted:  #4a6059;
    --border:     #d5e8e1;
    --card-bg:    #ffffff;
    --radius:     16px;
    --shadow:     0 20px 60px rgba(15,122,90,.10);
  }

  /* ── HERO ────────────────────────────────────── */
  .ppdb-hero {
    position: relative;
    min-height: 220px;
    background:
      linear-gradient(135deg, #083d2d 0%, #0f7a5a 55%, #17a076 100%);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    padding: 70px 20px 60px;
    text-align: center;
  }

  /* decorative circles */
  .ppdb-hero::before,
  .ppdb-hero::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    opacity: .12;
  }
  .ppdb-hero::before {
    width: 520px; height: 520px;
    background: var(--gold);
    top: -160px; right: -100px;
  }
  .ppdb-hero::after {
    width: 280px; height: 280px;
    background: #fff;
    bottom: -80px; left: -60px;
  }

  /* grid pattern overlay */
  .ppdb-hero__grid {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(255,255,255,.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 40px 40px;
  }

  .ppdb-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .ppdb-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.25);
    color: #fff;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 999px;
    margin-bottom: 12px;
    backdrop-filter: blur(6px);
  }
  .ppdb-hero__badge span { color: var(--gold-lt); }

  .ppdb-hero__title {
    font-family: 'Fraunces', serif;
    font-size: clamp(1.5rem, 3.5vw, 2.2rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin: 0 0 8px;
  }
  .ppdb-hero__title em {
    font-style: italic;
    color: var(--gold-lt);
  }

  .ppdb-hero__subtitle {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: rgba(255,255,255,.70);
    margin: 0 auto;
    max-width: 440px;
    text-align: center;
  }

  /* back button */
  .ppdb-hero__back {
    position: absolute;
    top: 24px; left: 24px;
    z-index: 10;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: rgba(255,255,255,.80);
    text-decoration: none;
    background: rgba(255,255,255,.10);
    border: 1px solid rgba(255,255,255,.20);
    padding: 8px 18px;
    border-radius: 999px;
    backdrop-filter: blur(8px);
    transition: all .25s;
  }
  .ppdb-hero__back:hover {
    background: rgba(255,255,255,.20);
    color: #fff;
    transform: translateX(-3px);
  }

  /* wave */
  .ppdb-hero__wave {
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 80px;
    fill: var(--cream);
    display: block;
  }

  /* stat pills */
  .ppdb-hero__stats {
    display: flex;
    gap: 12px;
    margin-top: 16px;
    flex-wrap: wrap;
    justify-content: center;
  }
  .ppdb-stat {
    background: rgba(255,255,255,.10);
    border: 1px solid rgba(255,255,255,.18);
    backdrop-filter: blur(8px);
    border-radius: 10px;
    padding: 8px 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .ppdb-stat strong {
    font-family: 'Fraunces', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--gold-lt);
    line-height: 1;
  }
  .ppdb-stat small {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 10px;
    color: rgba(255,255,255,.65);
    text-transform: uppercase;
    letter-spacing: .06em;
    margin-top: 2px;
  }

  /* ── MAIN SECTION ────────────────────────────── */
  .berita2-section {
    background: var(--cream);
    padding: 60px 0 100px;
    font-family: 'Plus Jakarta Sans', sans-serif;
  }

  /* ── ALERTS ──────────────────────────────────── */
  .alert {
    border-radius: 12px;
    border: none;
    font-size: 14px;
    padding: 14px 20px;
    margin-bottom: 20px;
  }
  .alert-success { background: #d1fae5; color: #065f46; }
  .alert-danger   { background: #fee2e2; color: #991b1b; }

  /* ── CARD ────────────────────────────────────── */
  .card {
    border-radius: var(--radius) !important;
    border: 1px solid var(--border) !important;
    box-shadow: var(--shadow) !important;
    background: var(--card-bg) !important;
    overflow: hidden;
  }
  .card-body { padding: 48px !important; }

  /* ── FORM HEADING ────────────────────────────── */
  .form-main-title {
    font-family: 'Fraunces', serif;
    font-size: 1.9rem;
    font-weight: 700;
    color: var(--ink);
    text-align: center;
    margin-bottom: 6px;
  }
  .form-main-sub {
    text-align: center;
    color: var(--ink-muted);
    font-size: 14px;
    margin-bottom: 36px;
  }

  /* ── PROGRESS BAR ────────────────────────────── */
  .ppdb-progress-wrap {
    display: flex;
    gap: 8px;
    align-items: center;
    margin-bottom: 40px;
  }
  .ppdb-step-dot {
    flex: 1;
    position: relative;
  }
  .ppdb-step-dot__bar {
    height: 6px;
    border-radius: 99px;
    background: #e5ede9;
    overflow: hidden;
    transition: background .3s;
  }
  .ppdb-step-dot__bar.active { background: var(--emerald); }
  .ppdb-step-dot__bar.done   { background: var(--emerald); }
  .ppdb-step-dot__label {
    display: block;
    font-size: 11px;
    font-weight: 600;
    color: var(--ink-muted);
    text-transform: uppercase;
    letter-spacing: .06em;
    margin-top: 6px;
    text-align: center;
  }
  .ppdb-step-dot.active .ppdb-step-dot__label { color: var(--emerald); }

  /* ── STEP HEADERS ────────────────────────────── */
  .step h5 {
    font-family: 'Fraunces', serif;
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--ink);
    padding-bottom: 12px;
    border-bottom: 2px solid var(--border);
    margin-bottom: 28px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .step h5::before {
    content: attr(data-icon);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px; height: 34px;
    background: var(--emerald);
    color: #fff;
    border-radius: 8px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
  }

  /* ── LABELS & INPUTS ─────────────────────────── */
  label {
    font-size: 13px;
    font-weight: 600;
    color: var(--ink-muted);
    text-transform: uppercase;
    letter-spacing: .05em;
    margin-bottom: 6px;
    display: block;
  }

  .form-control {
    border: 1.5px solid var(--border) !important;
    border-radius: 10px !important;
    padding: 11px 16px !important;
    font-size: 14px !important;
    font-family: 'Plus Jakarta Sans', sans-serif;
    color: var(--ink) !important;
    background: #fafffe !important;
    transition: border-color .2s, box-shadow .2s !important;
  }
  .form-control:focus {
    border-color: var(--emerald) !important;
    box-shadow: 0 0 0 3px rgba(15,122,90,.12) !important;
    outline: none !important;
  }

  /* checkbox style */
  input[type="checkbox"] {
    width: 18px; height: 18px;
    accent-color: var(--emerald);
    cursor: pointer;
    border-radius: 4px;
    margin-right: 8px;
    vertical-align: middle;
  }

  hr { border-color: var(--border); margin: 16px 0; }

  /* ── BUTTONS ─────────────────────────────────── */
  .btn {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    font-size: 14px;
    padding: 11px 28px;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all .2s;
  }
  .btn-warning {
    background: linear-gradient(135deg, var(--gold), #d4880e);
    color: #fff;
    box-shadow: 0 4px 14px rgba(232,160,32,.35);
  }
  .btn-warning:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(232,160,32,.45);
    color: #fff;
  }
  .btn-secondary {
    background: #f0f4f2;
    color: var(--ink-muted);
  }
  .btn-secondary:hover {
    background: #e5ede9;
    color: var(--ink);
    transform: translateY(-1px);
  }
  .btn-success {
    background: linear-gradient(135deg, var(--emerald), #085c42);
    color: #fff;
    box-shadow: 0 4px 14px rgba(15,122,90,.35);
  }
  .btn-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(15,122,90,.45);
    color: #fff;
  }

  /* ── SECTION DIVIDER ─────────────────────────── */
  .parents-divider {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 24px 0 16px;
    color: var(--ink-muted);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .08em;
  }
  .parents-divider::before,
  .parents-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border);
  }

  /* file upload custom */
  input[type="file"].form-control {
    padding: 8px 16px !important;
    cursor: pointer;
  }

  /* ── ANIMATIONS ──────────────────────────────── */
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .step:not(.d-none) {
    animation: fadeInUp .35s ease;
  }
</style>

{{-- ══════════ HERO ══════════ --}}
<section class="ppdb-hero">
  <div class="ppdb-hero__grid" aria-hidden="true"></div>

  {{-- <a class="ppdb-hero__back" href="{{ url('/') }}">← Beranda</a> --}}

  <div class="ppdb-hero__inner">
    <div class="ppdb-hero__badge">
      <span>●</span> Penerimaan Peserta Didik Baru
    </div>

    <h1 class="ppdb-hero__title">
      Formulir <em>Pendaftaran</em><br>PPDB Online
    </h1>
    <p class="ppdb-hero__subtitle">
      Lengkapi data dengan benar dan teliti. Pastikan dokumen yang diunggah jelas dan sesuai ketentuan.
    </p>

    <div class="ppdb-hero__stats">
      <div class="ppdb-stat">
        <strong>100%</strong>
        <small>Gratis</small>
      </div>
    </div>
  </div>

  <svg class="ppdb-hero__wave" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
    <path d="M0,40 C360,80 1080,0 1440,50 L1440,80 L0,80 Z"/>
  </svg>
</section>

{{-- ══════════ MAIN ══════════ --}}
<section class="berita2-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                @if(session('success'))
                <div class="alert alert-success">✅ {{ session('success') }}</div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">⚠️ {{ session('error') }}</div>
                @endif

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">

                        <p class="form-main-title">Isi Data Pendaftaran</p>
                        <p class="form-main-sub">Lengkapi setiap langkah berikut dengan data yang valid dan akurat</p>

                        {{-- Custom step progress --}}
                        <div class="ppdb-progress-wrap" id="ppdbProgress">
                          <div class="ppdb-step-dot active" data-step="1">
                            <div class="ppdb-step-dot__bar active"></div>
                            <span class="ppdb-step-dot__label">Data Siswa</span>
                          </div>
                          <div class="ppdb-step-dot" data-step="2">
                            <div class="ppdb-step-dot__bar"></div>
                            <span class="ppdb-step-dot__label">Orang Tua</span>
                          </div>
                          <div class="ppdb-step-dot" data-step="3">
                            <div class="ppdb-step-dot__bar"></div>
                            <span class="ppdb-step-dot__label">Wali</span>
                          </div>
                          <div class="ppdb-step-dot" data-step="4">
                            <div class="ppdb-step-dot__bar"></div>
                            <span class="ppdb-step-dot__label">Dokumen</span>
                          </div>
                        </div>

                        {{-- Hidden original progress bar (kept for JS compat) --}}
                        <div class="progress mb-4 d-none" style="height:8px;">
                            <div class="progress-bar bg-warning" id="progressBar" style="width:25%"></div>
                        </div>

                        <form method="POST" action="{{ route('ppdb.store') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- Honeypot --}}
                            <div style="display:none;">
                                <input type="text" name="website">
                            </div>

                            {{-- ================= STEP 1 ================= --}}
                            <div class="step" id="step-1">
                                <h5 data-icon="1">Data Siswa</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label>Nama Lengkap *</label>
                                        <input type="text" name="student_name" value="{{ old('student_name') }}" class="form-control" required placeholder="Masukkan nama lengkap">
                                    </div>

                                    <div class="col-md-3">
                                        <label>Jenis Kelamin *</label>
                                        <select name="gender" class="form-control" required>
                                            <option value="">Pilih</option>
                                            <option value="L" {{ old('gender')=='L'?'selected':'' }}>Laki-laki</option>
                                            <option value="P" {{ old('gender')=='P'?'selected':'' }}>Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>NISN</label>
                                        <input type="text" name="nisn" value="{{ old('nisn') }}" class="form-control" placeholder="Nomor Induk Siswa Nasional">
                                    </div>

                                    <div class="col-md-6">
                                        <label>NIK</label>
                                        <input type="text" name="nik" value="{{ old('nik') }}" class="form-control" placeholder="16 digit NIK">
                                    </div>

                                    <div class="col-md-6">
                                        <label>No KK *</label>
                                        <input type="text" name="no_kk" value="{{ old('no_kk') }}" class="form-control" required placeholder="Nomor Kartu Keluarga">
                                    </div>

                                    <div class="col-md-6">
                                        <label>No Akta Lahir</label>
                                        <input type="text" name="no_akta_lahir" value="{{ old('no_akta_lahir') }}" class="form-control" placeholder="Nomor Akta Lahir">
                                    </div>

                                    <div class="col-md-4">
                                        <label>Agama</label>
                                        <select name="religion" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katolik">Katolik</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                            <option value="konghucu">Konghucu</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Kewarganegaraan</label>
                                        <select name="citizenship" class="form-control">
                                            <option value="wni">WNI</option>
                                            <option value="wna">WNA</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Anak Ke-</label>
                                        <input type="number" name="child_order" class="form-control" placeholder="Contoh: 1">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Tempat Tinggal</label>
                                        <input type="text" name="residence_type" class="form-control" placeholder="Misal: Bersama Orang Tua">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Transportasi</label>
                                        <input type="text" name="transportation" class="form-control" placeholder="Misal: Sepeda Motor">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Berkebutuhan Khusus</label>
                                        <input type="text" name="special_needs" class="form-control" placeholder="Kosongkan jika tidak ada">
                                    </div>

                                </div>

                                <div class="text-end mt-4">
                                    <button type="button" class="btn btn-warning" onclick="nextStep()">Selanjutnya →</button>
                                </div>
                            </div>

                            {{-- ================= STEP 2 ================= --}}
                            <div class="step d-none" id="step-2">
                                <h5 data-icon="2">Data Orang Tua</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="father_name" class="form-control" placeholder="Nama lengkap ayah">
                                    </div>
                                    <div class="col-md-6">
                                        <label>NIK Ayah</label>
                                        <input type="text" name="father_nik" class="form-control" placeholder="16 digit NIK">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun Lahir Ayah</label>
                                        <input type="number" name="father_birth_year" class="form-control" placeholder="Contoh: 1980">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pendidikan Ayah</label>
                                        <input type="text" name="father_education" class="form-control" placeholder="Misal: S1">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" name="father_occupation" class="form-control" placeholder="Misal: Wiraswasta">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Penghasilan Ayah</label>
                                        <input type="text" name="father_income" class="form-control" placeholder="Misal: Rp 3.000.000">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Berkebutuhan Khusus Ayah</label>
                                        <input type="text" name="father_special_needs" class="form-control" placeholder="Kosongkan jika tidak ada">
                                    </div>

                                    <div class="col-12">
                                      <div class="parents-divider">Data Ibu</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="mother_name" class="form-control" placeholder="Nama lengkap ibu">
                                    </div>
                                    <div class="col-md-6">
                                        <label>NIK Ibu</label>
                                        <input type="text" name="mother_nik" class="form-control" placeholder="16 digit NIK">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun Lahir Ibu</label>
                                        <input type="number" name="mother_birth_year" class="form-control" placeholder="Contoh: 1983">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pendidikan Ibu</label>
                                        <input type="text" name="mother_education" class="form-control" placeholder="Misal: S1">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" name="mother_occupation" class="form-control" placeholder="Misal: Ibu Rumah Tangga">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Penghasilan Ibu</label>
                                        <input type="text" name="mother_income" class="form-control" placeholder="Misal: Rp 2.000.000">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Berkebutuhan Khusus Ibu</label>
                                        <input type="text" name="mother_special_needs" class="form-control" placeholder="Kosongkan jika tidak ada">
                                    </div>

                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-secondary" onclick="prevStep()">← Kembali</button>
                                    <button type="button" class="btn btn-warning" onclick="nextStep()">Selanjutnya →</button>
                                </div>
                            </div>

                            {{-- ================= STEP 3 ================= --}}
                            <div class="step d-none" id="step-3">
                                <h5 data-icon="3">Wali & Kontak</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label>Nama Wali</label>
                                        <input type="text" name="guardian_name" class="form-control" placeholder="Nama lengkap wali">
                                    </div>
                                    <div class="col-md-6">
                                        <label>NIK Wali</label>
                                        <input type="text" name="guardian_nik" class="form-control" placeholder="16 digit NIK">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun Lahir Wali</label>
                                        <input type="number" name="guardian_birth_year" class="form-control" placeholder="Contoh: 1975">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pendidikan Wali</label>
                                        <input type="text" name="guardian_education" class="form-control" placeholder="Misal: SMA">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pekerjaan Wali</label>
                                        <input type="text" name="guardian_occupation" class="form-control" placeholder="Misal: Pegawai Swasta">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Penghasilan Wali</label>
                                        <input type="text" name="guardian_income" class="form-control" placeholder="Misal: Rp 4.000.000">
                                    </div>

                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-secondary" onclick="prevStep()">← Kembali</button>
                                    <button type="button" class="btn btn-warning" onclick="nextStep()">Selanjutnya →</button>
                                </div>
                            </div>

                            {{-- ================= STEP 4 ================= --}}
                            <div class="step d-none" id="step-4">
                                <h5 data-icon="4">Dokumen dan Kontak</h5>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label>No HP *</label>
                                        <input type="text" name="phone" class="form-control" required placeholder="Contoh: 08123456789">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <textarea name="address" class="form-control" rows="3" placeholder="Alamat lengkap tempat tinggal saat ini"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload KK *</label>
                                        <input type="file" name="kk_file" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 d-flex align-items-center" style="padding-top: 28px;">
                                        <label style="text-transform:none;letter-spacing:0;font-weight:500;font-size:14px;color:var(--ink);cursor:pointer;">
                                            <input type="checkbox" id="has_kip" name="has_kip" value="1">
                                            Memiliki KIP
                                        </label>
                                    </div>
                                    <div class="col-md-6 d-none" id="kipUpload">
                                        <label>Upload KIP</label>
                                        <input type="file" name="kip_file" class="form-control">
                                    </div>
                                    <div class="col-md-6 d-flex align-items-center">
                                        <label style="text-transform:none;letter-spacing:0;font-weight:500;font-size:14px;color:var(--ink);cursor:pointer;">
                                            <input type="checkbox" id="will_receive_kip" name="will_receive_kip" value="1">
                                            Bersedia Menerima KIP
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alasan Tidak Bersedia Menerima KIP</label>
                                        <select name="kip_rejection_reason" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="dilarang_pemda">Dilarang Pemda karena menerima bantuan serupa</option>
                                            <option value="menolak">Menolak karena tidak membutuhkan bantuan</option>
                                            <option value="sudah_mampu">Sudah mampu</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-secondary" onclick="prevStep()">← Kembali</button>
                                    <button type="submit" class="btn btn-success px-4">✓ Kirim Pendaftaran</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  let currentStep = 1;
  const totalSteps = 4;

  function updateProgress() {
    document.querySelectorAll('.ppdb-step-dot').forEach((dot, i) => {
      const bar = dot.querySelector('.ppdb-step-dot__bar');
      const stepNum = i + 1;
      dot.classList.remove('active');
      bar.classList.remove('active', 'done');
      if (stepNum === currentStep) {
        dot.classList.add('active');
        bar.classList.add('active');
      } else if (stepNum < currentStep) {
        bar.classList.add('done');
      }
    });
    // keep old progress bar in sync
    document.getElementById('progressBar').style.width = (currentStep / totalSteps * 100) + '%';
  }

  function nextStep() {
    if (currentStep < totalSteps) {
      document.getElementById('step-' + currentStep).classList.add('d-none');
      currentStep++;
      document.getElementById('step-' + currentStep).classList.remove('d-none');
      updateProgress();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  }

  function prevStep() {
    if (currentStep > 1) {
      document.getElementById('step-' + currentStep).classList.add('d-none');
      currentStep--;
      document.getElementById('step-' + currentStep).classList.remove('d-none');
      updateProgress();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  }

  // KIP toggle
  document.getElementById('has_kip').addEventListener('change', function () {
    document.getElementById('kipUpload').classList.toggle('d-none', !this.checked);
  });
</script>



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
<script>
    let currentStep = 1;
    const totalSteps = 4;

    function updateProgress() {
        document.getElementById('progressBar').style.width =
            (currentStep / totalSteps) * 100 + '%';
    }

    function nextStep() {
        document.getElementById('step-' + currentStep).classList.add('d-none');
        currentStep++;
        document.getElementById('step-' + currentStep).classList.remove('d-none');
        updateProgress();
    }

    function prevStep() {
        document.getElementById('step-' + currentStep).classList.add('d-none');
        currentStep--;
        document.getElementById('step-' + currentStep).classList.remove('d-none');
        updateProgress();
    }

    document.getElementById('has_kip').addEventListener('change', function() {
        document.getElementById('kipUpload')
            .classList.toggle('d-none', !this.checked);
    });
</script>
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