<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - SDN 1 Mangkubumi</title>
    
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

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Nunito', sans-serif;
            background: #F0F4FF;
            color: #2D3436;
            min-height: 100vh;
        }

        /* Latar Belakang Lingkaran */
        body::before {
            content: '';
            position: fixed;
            width: 600px; height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(84,160,255,.12) 0%, transparent 70%);
            top: -200px; left: -200px;
            pointer-events: none; z-index: 0;
        }

        .page-wrapper {
            position: relative; z-index: 1;
            padding: 120px 24px 80px; 
            max-width: 1300px;
            margin: 0 auto;
        }

        /* ===== DASHBOARD SPECIFIC STYLES ===== */
        .dash-header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 30px;
        }
        
        .dash-title-group h1 {
            font-family: 'Fredoka One', cursive;
            font-size: clamp(28px, 4vw, 42px);
            color: #2D3436;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .dash-title-group h1 span.icon {
            background: linear-gradient(135deg, #54A0FF, #A29BFE);
            width: 50px; height: 50px;
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 15px; color: white; font-size: 25px;
        }

        .dash-badge-date {
            font-size: 13px; font-weight: 800;
            color: #54A0FF; background: white;
            padding: 10px 20px; border-radius: 50px;
            border: 2px solid #E8ECF8;
            box-shadow: 0 4px 12px rgba(84,160,255,0.1);
        }

        /* Metric Cards */
        .metric-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .metric-card {
            background: white;
            border-radius: 24px;
            padding: 24px;
            border: 2px solid #E8ECF8;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative; overflow: hidden;
        }

        .metric-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(84,160,255,0.15);
            border-color: #54A0FF;
        }

        .metric-card.highlight {
            background: linear-gradient(135deg, #54A0FF 0%, #00d2ff 100%);
            border: none; color: white;
        }

        .metric-icon {
            width: 48px; height: 48px;
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 24px; margin-bottom: 20px;
        }

        .metric-card:not(.highlight) .metric-icon { background: #F0F4FF; }
        .metric-card.highlight .metric-icon { background: rgba(255,255,255,0.2); }

        .metric-value { 
            font-family: 'Fredoka One', cursive; 
            font-size: 40px; line-height: 1; margin-bottom: 8px; 
        }

        .metric-label { font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px; opacity: 0.8; }
        .metric-sub { font-size: 12px; margin-top: 15px; font-weight: 600; color: #636E72; }
        .highlight .metric-sub { color: rgba(255,255,255,0.8); }

        /* Tables */
        .data-section {
            background: white;
            border-radius: 24px;
            border: 2px solid #E8ECF8;
            margin-bottom: 30px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }

        .section-header {
            padding: 20px 24px;
            background: #F8FAFF;
            border-bottom: 2px solid #E8ECF8;
            display: flex; align-items: center; justify-content: space-between;
        }

        .section-header h2 { 
            font-family: 'Fredoka One', cursive; 
            font-size: 20px; margin: 0; color: #2D3436;
        }

        .summary-table { width: 100%; border-collapse: collapse; }
        .summary-table th {
            font-size: 12px; font-weight: 800; text-transform: uppercase;
            padding: 15px 24px; color: #636E72; text-align: left;
            border-bottom: 2px solid #E8ECF8;
        }

        .summary-table td { padding: 18px 24px; font-size: 14px; font-weight: 600; border-bottom: 1px solid #F0F4FF; }

        .status-pill {
            display: inline-block; padding: 6px 14px; border-radius: 50px;
            font-size: 11px; font-weight: 800; text-transform: uppercase;
        }
        .status-aktif { background: #D1FAE5; color: #065F46; }
        .status-nonaktif { background: #FEE2E2; color: #991B1B; }

        /* Progress Bar */
        .progress-bar-bg {
            height: 10px; background: #EEF2FF; border-radius: 10px; overflow: hidden;
            width: 100%; margin-top: 5px;
        }
        .progress-bar-fill {
            height: 100%; background: linear-gradient(90deg, #54A0FF, #A29BFE);
            border-radius: 10px;
        }

        /* Force Navbar Black */
        .navbar-section .nav-link, .navbar-section .brand-title { color: #1a1a1a !important; }
        .navbar-section .brand-sub { color: rgba(0,0,0,0.6) !important; }
        .navbar-section .navbar-toggler-icon { filter: invert(1) brightness(0); }

        @media (max-width: 640px) {
            .page-wrapper { padding: 100px 15px 60px; }
            .dash-header-top { flex-direction: column; align-items: flex-start; }
            .summary-table th:nth-child(4), .summary-table td:nth-child(4) { display: none; }
        }
    </style>
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
                                <li class="nav-item"><a href="#" class="nav-link">Kalender Akademik</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Ekstrakurikuler</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Perpustakaan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Kesiswaan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
    <a href="{{ route('DataSiswa.index') }}" class="nav-link">Total Data Siswa</a>
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

    <div class="page-wrapper">
        
        <header class="dash-header-top">
            <div class="dash-title-group">
                <h1><span class="icon">🎓</span> Data Siswa</h1>
                <p style="color: #636E72; font-weight: 600; margin-left: 65px; margin-top: -5px;">Rekapitulasi data siswa SD Negeri 1 Mangkubumi</p>
            </div>
            <div class="dash-badge-date">
                <i class="bi bi-calendar3 me-2"></i> {{ now()->translatedFormat('d F Y') }}
            </div>
        </header>

        <section class="metric-grid">
            <div class="metric-card highlight">
                <div class="metric-icon">👥</div>
                <div class="metric-label">Total Siswa</div>
                <div class="metric-value">{{ $totalSiswa }}</div>
                <div class="metric-sub">Siswa terdaftar di sistem</div>
            </div>

            <div class="metric-card">
                <div class="metric-icon">✅</div>
                <div class="metric-label" style="color: #00B894;">Status Aktif</div>
                <div class="metric-value">{{ $totalAktif }}</div>
                <div class="metric-sub">
                    {{ $totalSiswa > 0 ? number_format(($totalAktif / $totalSiswa) * 100, 1) : 0 }}% dari total siswa aktif belajar
                </div>
            </div>

            <div class="metric-card">
                <div class="metric-icon">❌</div>
                <div class="metric-label" style="color: #D63031;">Non-Aktif</div>
                <div class="metric-value">{{ $totalNonAktif }}</div>
                <div class="metric-sub">
                    {{ $totalSiswa > 0 ? number_format(($totalNonAktif / $totalSiswa) * 100, 1) : 0 }}% siswa tidak aktif/keluar
                </div>
            </div>
        </section>

        <section class="data-section">
            <div class="section-header">
                <h2>📋 Ringkasan Status</h2>
                <span style="font-size: 12px; font-weight: 700; color: #54A0FF;">Update: {{ now()->translatedFormat('d M Y') }}</span>
            </div>
            <div class="table-responsive">
                <table class="summary-table">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Jumlah Siswa</th>
                            <th>Persentase</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="status-pill status-aktif">Aktif</span></td>
                            <td><strong>{{ $totalAktif }}</strong> Siswa</td>
                            <td>{{ $totalSiswa > 0 ? number_format(($totalAktif / $totalSiswa) * 100, 1) : 0 }}%</td>
                            <td>Siswa masih aktif mengikuti kegiatan belajar</td>
                        </tr>
                        <tr>
                            <td><span class="status-pill status-nonaktif">Non-Aktif</span></td>
                            <td><strong>{{ $totalNonAktif }}</strong> Siswa</td>
                            <td>{{ $totalSiswa > 0 ? number_format(($totalNonAktif / $totalSiswa) * 100, 1) : 0 }}%</td>
                            <td>Siswa sudah lulus, mutasi, atau keluar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="data-section">
            <div class="section-header" style="background: linear-gradient(135deg, #F8FAFF, #FFFFFF);">
                <h2>🏫 Rekap Per Kelas</h2>
                <span class="badge bg-primary rounded-pill px-3">{{ $perKelas->count() }} Kelas Terdata</span>
            </div>
            <div class="table-responsive">
                <table class="summary-table">
                    <thead>
                        <tr>
                            <th>Kelas</th>
                            <th>Total</th>
                            <th>Aktif</th>
                            <th>Non-Aktif</th>
                            <th width="200">Proporsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($perKelas as $kelas)
                        @php $pct = $totalSiswa > 0 ? ($kelas->total / $totalSiswa) * 100 : 0; @endphp
                        <tr>
                            <td style="font-family: 'Fredoka One'; font-size: 16px;">Kelas {{ $kelas->name }}</td>
                            <td><strong>{{ $kelas->total }}</strong></td>
                            <td style="color: #00B894;">{{ $kelas->aktif }}</td>
                            <td style="color: #D63031;">{{ $kelas->nonaktif }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="progress-bar-bg">
                                        <div class="progress-bar-fill" style="width: {{ $pct }}%"></div>
                                    </div>
                                    <span style="font-size: 11px; font-weight: 800;">{{ round($pct) }}%</span>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <img src="assets/img/empty.png" alt="no-data" style="width: 80px; opacity: 0.3;">
                                <p class="mt-3 text-muted">Belum ada data tersedia</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

    </div>

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