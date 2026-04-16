<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tata Tertib Siswa — SDN 1 Mangkubumi</title>

    {{-- Font & Asset --}}
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fredoka+One&display=swap" rel="stylesheet">
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
        /* ══ RESET & ROOT ══ */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --blue:    #3b82f6;
            --navy:    #0d2b55;
            --orange2: #fbbf24;
            --white:   #ffffff;
            --bg:      #f0f7ff;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: var(--bg);
            background-image:
                radial-gradient(circle at 10% 20%, rgba(227, 4, 4, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(59,130,246,.08) 0%, transparent 40%);
        }

        /* ══ NAVBAR OVERRIDES ══ */
        .navbar-nav .nav-link { font-size: 15px !important; font-weight: 600 !important; color: #ffffff !important; }
        .brand-title { font-size: 15px !important; color: #ffffff !important; font-weight: 800; }
        .brand-sub { font-size: 10px !important; color: rgba(255,255,255,0.8) !important; font-weight: 600; }
        
        /* FIX: SUB MENU NAVBAR JADI HITAM PEKAT */
        .dropdown-menu { background: #ffffff !important; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15); }
        .dropdown-menu .nav-item .nav-link { 
            color: #1a1a1a !important; 
            font-weight: 700 !important; 
            font-size: 13px !important; 
            padding: 10px 20px !important;
        }
        .dropdown-menu .nav-item .nav-link:hover { color: #54A0FF !important; background: #f8faff !important; }

        .scrolled .brand-title { color: #000000 !important; }
        .scrolled .brand-sub { color: #333333 !important; }
        .scrolled .nav-link { color: #000000 !important; }
        .scrolled .navbar-toggler-icon { filter: invert(1); }

        /* ══ HERO ══ */
        .ttb-hero {
            position: relative; overflow: hidden;
            padding: 100px 24px 80px; text-align: center;
            background: linear-gradient(160deg, #0d2b55 0%, #1e3a8a 60%, #3b82f6 100%);
        }
        .ttb-hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,.2); border: 1.5px solid rgba(255,255,255,.4);
            color: #fff; font-size: 12px; font-weight: 800; padding: 6px 18px; border-radius: 100px; margin-bottom: 20px;
        }
        .ttb-hero-badge-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--orange2); animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100%{transform:scale(1);opacity:1} 50%{transform:scale(1.3);opacity:.7} }
        .ttb-hero-title { font-family: 'Fredoka One', cursive; font-size: clamp(2.2rem, 6vw, 3.6rem); color: #fff; line-height: 1.2; }
        .ttb-hero-title .accent { color: var(--orange2); }

        /* ══ CARD ══ */
        .ttb-container { max-width: 860px; margin: 0 auto; padding: 40px 20px 60px; }
        .ttb-card {
            background: var(--white); border-radius: 20px; border: 2px solid #e0e7ff;
            margin-bottom: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05); position: relative;
        }
        .ttb-card-strip { position: absolute; left: 0; top: 0; bottom: 0; width: 6px; background: var(--navy); }
        .ttb-card-head { display: flex; align-items: center; gap: 16px; padding: 20px 24px; cursor: pointer; background: #fafbff; border-bottom: 1px solid #eee; }
        .ttb-card-title { font-family: 'Fredoka One', cursive; font-size: 18px; color: #312e81; flex: 1; }
        .ttb-card-body { max-height: 0; overflow: hidden; transition: max-height 0.4s ease-out; }
        .ttb-card.open .ttb-card-body { max-height: 3000px; }
        .ttb-card-content { padding: 30px; line-height: 1.9; color: #4b5563; }

        /* ══ FOOTER STYLES (MATCHING JADWAL PELAJARAN) ══ */
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
    </style>
</head>
<body>

{{-- PRELOADER --}}
<div class="preloader">
    <div class="loader"><div class="shadow"></div><div class="box"></div></div>
</div>

{{-- NAVBAR --}}
<div class="navbar-section" id="mainNav">
    <div class="techvio-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}" style="padding:0;line-height:1;display:flex;align-items:center;gap:10px;">
                    <img src="assets/img/tutt.png" alt="logo" style="height:55px;width:auto;">
                    <div style="display:flex;flex-direction:column;line-height:1.3;">
                        <span class="brand-title">SDN 1 Mangkubumi</span>
                        <span class="brand-sub">Kecamatan Sadananya</span>
                    </div>
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="/visi-misi" class="nav-link">Tentang</a></li>
                        <li class="nav-item"><a href="{{ route('kurikulum') }}" class="nav-link">Kurikulum</a></li>
                        <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
                        <li class="nav-item"><a href="{{ route('ppdb.index') }}" class="nav-link">PPDB</a></li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">Akademik <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{ route('jadwal-pelajaran') }}" class="nav-link">Jadwal Pelajaran</a></li>
                                <li class="nav-item"><a href="{{ route('tata-tertib-sekolah') }}" class="nav-link">Tata Tertib Sekolah</a></li>
                                <li class="nav-item"><a href="{{ route('tata-tertib-siswa') }}" class="nav-link">Tata Tertib Siswa</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Perpustakaan</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Kesiswaan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{ route('DataSiswa.index') }}" class="nav-link">Total Data Siswa/Kelas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="{{ route('program-sekolah') }}" class="nav-link">Program Sekolah</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

{{-- HERO --}}
<div class="ttb-hero">
    <div class="ttb-hero-stars"></div>
    <div class="ttb-hero-badge">
        <div class="ttb-hero-badge-dot"></div>
        DOKUMEN RESMI • TAHUN AJARAN 2026/2027
    </div>
    <h1 class="ttb-hero-title">Tata Tertib <span class="accent">SISWA</span><br>SDN 1 Mangkubumi</h1>
    <p style="color:rgba(255,255,255,0.8); max-width:600px; margin:15px auto;">Budayakan disiplin sejak dini untuk meraih prestasi yang tinggi di masa depan.</p>
</div>

{{-- CONTENT --}}
<div class="ttb-container">
    @if($peraturan->isEmpty())
        <div class="text-center p-5" style="background:#fff; border-radius:20px; border:2px dashed #ddd;">
            <p>📋 Belum ada data peraturan yang ditambahkan.</p>
        </div>
    @else
        @foreach($peraturan as $index => $item)
            <div class="ttb-card {{ $index === 0 ? 'open' : '' }}" id="card-{{ $index }}">
                <div class="ttb-card-strip"></div>
                <div class="ttb-card-head" onclick="toggleCard({{ $index }})">
                    <div class="ttb-card-title">{{ $item->nama_peraturan }}</div>
                    <i class="fas fa-chevron-down" style="color:#aaa;"></i>
                </div>
                <div class="ttb-card-body">
                    <div class="ttb-card-content">
                        {!! $item->isi_peraturan !!}
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

{{-- FOOTER (SAMA PERSIS DENGAN JADWAL PELAJARAN) --}}
<footer class="sdn-footer">
    <div class="sdn-footer-wave">
        <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,0 C480,80 960,0 1440,60 L1440,0 Z" fill="#f0f7ff"/>
        </svg>
    </div>
    <div class="container">
        <div class="row g-4 pt-2 pb-5">

            <div class="col-lg-3 col-md-6">
                <div class="sdn-footer-brand">
                    <div class="sdn-footer-logo">
                        <img src="assets/img/tutt.png" alt="logo">
                        <div>
                            <span class="sdn-footer-logo-title">{{ $data?->nama_sekolah ?? 'SDN 1 Mangkubumi' }}</span>
                            <span class="sdn-footer-logo-sub">{{ $data?->kecamatan ?? 'Kecamatan Sadananya' }}</span>
                        </div>
                    </div>
                    <p class="sdn-footer-desc">{{ $data?->deskripsi ?? 'Sekolah Dasar Negeri 1 Mangkubumi berkomitmen mencetak generasi unggul, berkarakter, dan berprestasi di bawah naungan pendidikan berkualitas.' }}</p>
                    <div class="sdn-footer-socials">
                        @if($contact?->facebook)<a href="{{ $contact->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
                        @if($contact?->instagram)<a href="{{ $contact->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
                        @if($contact?->youtube)<a href="{{ $contact->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>@endif
                        @if($contact?->tiktok)<a href="{{ $contact->tiktok }}" target="_blank"><i class="fab fa-tiktok"></i></a>@endif
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
                        <li><a href="{{ route('ppdb.index') }}"><i class="fas fa-chevron-right"></i> PPDB</a></li>
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
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="sdn-footer-widget">
                    <h4 class="sdn-footer-heading">Lokasi Sekolah</h4>
                    <div class="sdn-footer-map">
                        @if($contact?->google_maps_link)
                            <iframe src="{{ $contact->google_maps_link }}" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

{{-- SCRIPTS --}}
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    // PRELOADER FIX
    $(window).on('load', function() {
        if ($('.preloader').length) {
            $('.preloader').fadeOut('slow');
        }
    });

    // Toggle Card
    function toggleCard(index) {
        $('#card-' + index).toggleClass('open');
    }

    // Scroll Effect
    const mainNav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            mainNav.classList.add('scrolled');
        } else {
            mainNav.classList.remove('scrolled');
        }
    });
</script>

</body>
</html>