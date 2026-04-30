<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Jadwal Pelajaran</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Nunito', sans-serif;
            background: #F0F4FF;
            color: #2D3436;
            min-height: 100vh;
        }

        body::before {
            content: '';
            position: fixed;
            width: 600px; height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(84,160,255,.12) 0%, transparent 70%);
            top: -200px; left: -200px;
            pointer-events: none; z-index: 0;
        }

        /* ===== FIX: navbar gap ===== */
        .page-wrapper {
            position: relative; z-index: 1;
            padding: 110px 24px 80px; /* 110px = tinggi navbar ~80px + 30px breathing room */
            max-width: 1300px;
            margin: 0 auto;
        }

        .page-header {
            text-align: center;
            margin-bottom: 36px;
        }
        .header-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: white;
            border: 2px solid #E8ECF8;
            border-radius: 999px;
            padding: 6px 20px;
            font-size: 13px;
            font-weight: 700;
            color: #54A0FF;
            margin-bottom: 14px;
            box-shadow: 0 2px 12px rgba(84,160,255,.15);
        }
        .page-title {
            font-family: 'Fredoka One', cursive;
            font-size: clamp(30px, 5vw, 52px);
            color: #2D3436;
            margin-bottom: 8px;
        }
        .page-title em {
            font-style: normal;
            background: linear-gradient(135deg, #54A0FF, #A29BFE);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .page-subtitle { font-size: 15px; color: #636E72; font-weight: 600; }

        .filter-wrap {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }
        .filter-label {
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #636E72;
        }
        .kelas-btn {
            padding: 8px 20px;
            border-radius: 999px;
            border: 2px solid #E8ECF8;
            background: white;
            font-family: 'Nunito', sans-serif;
            font-size: 13px;
            font-weight: 700;
            color: #636E72;
            cursor: pointer;
            transition: all .2s;
        }
        .kelas-btn:hover { border-color: #54A0FF; color: #54A0FF; }
        .kelas-btn.active {
            background: linear-gradient(135deg, #54A0FF, #2980B9);
            border-color: transparent;
            color: white;
            box-shadow: 0 6px 20px rgba(84,160,255,.35);
        }

        .table-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,.08);
            margin-bottom: 32px;
        }
        .table-card-header {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 18px 24px;
            background: linear-gradient(135deg, #54A0FF, #2980B9);
        }
        .kelas-icon {
            width: 44px; height: 44px;
            background: rgba(255,255,255,.25);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 22px;
        }
        .kelas-title { font-family: 'Fredoka One', cursive; font-size: 22px; color: white; }
        .kelas-subtitle { font-size: 12px; color: rgba(255,255,255,.8); font-weight: 600; }
        .kelas-count {
            margin-left: auto;
            background: rgba(255,255,255,.2);
            color: white;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 14px;
            border-radius: 999px;
        }

        .jadwal-table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; min-width: 700px; }
        thead tr { background: #F8FAFF; }
        th {
            padding: 13px 16px;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .8px;
            color: #636E72;
            border-bottom: 2px solid #EEF2FF;
            text-align: center;
            white-space: nowrap;
        }
        th.col-waktu { text-align: left; min-width: 130px; }
        th.col-jam   { min-width: 70px; }
        th.col-senin  { color: #EE5A24; }
        th.col-selasa { color: #E67E22; }
        th.col-rabu   { color: #00B894; }
        th.col-kamis  { color: #2980B9; }
        th.col-jumat  { color: #6C5CE7; }
        th.col-sabtu  { color: #E84393; }

        tbody tr { border-bottom: 1px solid #F5F6FA; transition: background .15s; }
        tbody tr:hover { background: #F8FAFF; }
        tbody tr:last-child { border-bottom: none; }

        td {
            padding: 11px 14px;
            font-size: 13px;
            text-align: center;
            vertical-align: middle;
        }
        td.col-waktu {
            text-align: left;
            font-weight: 700;
            color: #636E72;
            font-size: 12px;
            white-space: nowrap;
        }
        td.col-jam {
            font-family: 'Fredoka One', cursive;
            font-size: 18px;
            color: #B2BEC3;
        }

        .mapel {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }
        .mapel-upacara     { background: #FFF3CD; color: #856404; }
        .mapel-bind        { background: #DBEAFE; color: #1E40AF; }
        .mapel-paibp       { background: #D1FAE5; color: #065F46; }
        .mapel-pjok        { background: #FCE7F3; color: #9D174D; }
        .mapel-matematika  { background: #EDE9FE; color: #5B21B6; }
        .mapel-pancasila   { background: #FEE2E2; color: #991B1B; }
        .mapel-seni        { background: #FFF7ED; color: #9A3412; }
        .mapel-pjbl        { background: #ECFDF5; color: #065F46; }
        .mapel-ipas        { background: #E0F2FE; color: #0C4A6E; }
        .mapel-sunda       { background: #F5F3FF; color: #4C1D95; }
        .mapel-bing        { background: #ECFEFF; color: #164E63; }
        .mapel-istirahat   { background: #FFF7ED; color: #E17055; }
        .mapel-pembiasaan  { background: #F0FFF8; color: #00B894; }
        .mapel-default     { background: #F8FAFC; color: #475569; }
        .mapel-empty       { color: #CBD5E1; font-size: 16px; }

        .empty-all { text-align: center; padding: 80px 20px; }
        .empty-all .emoji { font-size: 56px; margin-bottom: 12px; display: block; }
        .empty-all h3 { font-family: 'Fredoka One', cursive; font-size: 22px; margin-bottom: 6px; }
        .empty-all p { color: #636E72; font-size: 14px; }

        @media (max-width: 600px) {
            .page-wrapper { padding: 100px 12px 60px; }
        }

        /* ===== FORCE NAVBAR HITAM — khusus halaman ini ===== */
        .navbar-section .nav-link,
        .navbar-section .navbar-nav .nav-link,
        .navbar-section .navbar-nav > li > .nav-link {
            color: #1a1a1a !important;
        }
        .navbar-section .nav-link:hover,
        .navbar-section .navbar-nav .nav-link:hover {
            color: #54A0FF !important;
        }
        .navbar-section .brand-title {
            color: #1a1a1a !important;
        }
        .navbar-section .brand-sub {
            color: rgba(0,0,0,0.6) !important;
        }
        /* Hamburger icon (mobile) juga ikut hitam */
        .navbar-section .navbar-toggler-icon {
            filter: invert(1) brightness(0);
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

<div class="page-wrapper">

    <div class="page-header">
        <h1 class="page-title">Jadwal <em>Pelajaran</em></h1>
        <p class="page-subtitle">SDN 1 Mangkubumi — Semangat belajar setiap hari! 🌟</p>
    </div>

    @php
        $kelasList = $jadwal->pluck('kelas')->unique()->sort()->values();
        $hariOrder = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];

        $mapelIcon = [
            'Upacara'         => '🚩',
            'B. Indonesia'    => '📝',
            'PAIBP'           => '🕌',
            'PJOK'            => '⚽',
            'Matematika'      => '🔢',
            'Pend.Pancasila'  => '🦅',
            'Seni dan Budaya' => '🎨',
            'PjBL'            => '🔧',
            'IPAS'            => '🔬',
            'B.dan S.Sunda'   => '🌿',
            'B. Inggris'      => '🌍',
            'Istirahat'       => '🍱',
            'Pembiasaan'      => '✨',
        ];

        $mapelClass = [
            'Upacara'         => 'mapel-upacara',
            'B. Indonesia'    => 'mapel-bind',
            'PAIBP'           => 'mapel-paibp',
            'PJOK'            => 'mapel-pjok',
            'Matematika'      => 'mapel-matematika',
            'Pend.Pancasila'  => 'mapel-pancasila',
            'Seni dan Budaya' => 'mapel-seni',
            'PjBL'            => 'mapel-pjbl',
            'IPAS'            => 'mapel-ipas',
            'B.dan S.Sunda'   => 'mapel-sunda',
            'B. Inggris'      => 'mapel-bing',
            'Istirahat'       => 'mapel-istirahat',
            'Pembiasaan'      => 'mapel-pembiasaan',
        ];
    @endphp

    <div class="filter-wrap">
        <span class="filter-label">Kelas:</span>
        <button class="kelas-btn active" onclick="showKelas('semua', this)">Semua Kelas</button>
        @foreach($kelasList as $k)
            <button class="kelas-btn" onclick="showKelas('kelas-{{ Str::slug($k) }}', this)">{{ $k }}</button>
        @endforeach
    </div>

    @forelse($kelasList as $kelas)
        @php
            $dataKelas = $jadwal->where('kelas', $kelas);

            $waktuList = $dataKelas
                ->sortBy('waktu')
                ->mapWithKeys(fn($i) => [$i->waktu => $i->jam_ke])
                ->toArray();
        @endphp

        <div class="table-card" id="kelas-{{ Str::slug($kelas) }}">

            <div class="table-card-header">
                <div class="kelas-icon">🏫</div>
                <div>
                    <div class="kelas-title">{{ $kelas }}</div>
                    <div class="kelas-subtitle">{{ $dataKelas->count() }} sesi pelajaran</div>
                </div>
                <div class="kelas-count">{{ $jadwal->first()->tahun_pelajaran ?? '2024/2025' }}</div>
            </div>

            <div class="jadwal-table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th class="col-waktu">Waktu</th>
                            @foreach($hariOrder as $h)
                                <th class="col-{{ strtolower($h) }}">{{ $h }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($waktuList as $waktu => $jamKe)
                            <tr>
                                <td class="col-waktu">{{ $waktu }}</td>
                                @foreach($hariOrder as $h)
                                    @php
                                        $item = $dataKelas->where('hari', $h)->where('waktu', $waktu)->first();
                                    @endphp
                                    <td>
                                        @if($item)
                                            <span class="mapel {{ $mapelClass[$item->pelajaran] ?? 'mapel-default' }}">
                                                {{ $mapelIcon[$item->pelajaran] ?? '📚' }} {{ $item->pelajaran }}
                                            </span>
                                        @else
                                            <span class="mapel-empty">–</span>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @empty
        <div class="empty-all">
            <span class="emoji">📭</span>
            <h3>Belum ada jadwal</h3>
            <p>Data jadwal pelajaran belum tersedia.</p>
        </div>
    @endforelse

</div>

<script>
    function showKelas(target, btn) {
        document.querySelectorAll('.kelas-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.querySelectorAll('.table-card').forEach(card => {
            card.style.display = (target === 'semua' || card.id === target) ? '' : 'none';
        });
    }

    document.querySelectorAll('.table-card').forEach((card, i) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = `opacity .5s ${i * 0.12}s ease, transform .5s ${i * 0.12}s ease`;
        setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'translateY(0)'; }, 80);
    });
</script>



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