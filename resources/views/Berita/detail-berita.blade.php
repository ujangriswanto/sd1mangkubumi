<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $berita->title }} — SDN 1 Mangkubumi</title>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    {{-- Vendor CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        /* ============================================================
           RESET & BASE
        ============================================================ */
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8faff;
            color: #1e293b;
        }

        /* ============================================================
           NAVBAR
        ============================================================ */
        #mainNav .brand-title { color: #ffffff; }
        #mainNav .brand-sub   { color: rgba(255,255,255,0.75); }
        #mainNav.scrolled .brand-title { color: #000000; }
        #mainNav.scrolled .brand-sub   { color: rgba(0,0,0,0.8); }

        .navbar-nav .nav-link  { font-size: 15px !important; font-weight: 600; letter-spacing: .3px; }
        .dropdown-menu .nav-link { font-size: 12px !important; }
        .brand-title { font-size: 13px !important; }
        .brand-sub   { font-size: 9px  !important; }

        /* ============================================================
           HERO
        ============================================================ */
        .db-hero {
            position: relative;
            height: 420px;
            overflow: hidden;
            background: #020c18;
        }
        .db-hero-img {
            width: 100%; height: 100%;
            object-fit: cover;
            object-position: center 30%;
            opacity: 0.55;
        }
        .db-hero-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(2,12,24,.85) 0%, rgba(2,12,24,.2) 25%, transparent 65%);
        }
        .db-hero-content {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 48px;
            max-width: 900px;
            margin: 0 auto;
        }
        .db-back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: rgba(255,255,255,.7);
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding: 8px 16px;
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 50px;
            backdrop-filter: blur(8px);
            background: rgba(255,255,255,.08);
            transition: all .3s;
        }
        .db-back-btn:hover { background: rgba(255,255,255,.15); color: #fff; }
        .db-category {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: #fff;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 16px;
            box-shadow: 0 4px 14px rgba(99,102,241,.4);
        }
        .db-hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(22px, 4vw, 42px);
            font-weight: 900;
            color: #fff;
            line-height: 1.25;
            margin-bottom: 20px;
            text-shadow: 0 2px 20px rgba(0,0,0,.3);
        }
        .db-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .db-meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            color: rgba(255,255,255,.6);
            font-weight: 600;
        }
        .db-meta-item i { color: #6366f1; font-size: 12px; }

        /* ============================================================
           LAYOUT GRID
        ============================================================ */
        .db-layout {
            max-width: 1100px;
            margin: -40px auto 80px;
            padding: 0 24px;
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 32px;
            position: relative;
            z-index: 2;
        }

        /* ============================================================
           ARTICLE CARD
        ============================================================ */
        .db-article {
            background: #fff;
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 4px 30px rgba(0,0,0,.07);
            border: 1px solid rgba(0,0,0,.05);
        }
        .db-article-body {
            font-size: 16px;
            line-height: 1.9;
            color: #334155;
        }
        .db-article-body p  { margin-bottom: 20px; }
        .db-article-body h3 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 700;
            color: #0f172a;
            margin: 32px 0 14px;
        }
        .db-article-body img {
            width: 100%;
            border-radius: 16px;
            margin: 24px 0;
            box-shadow: 0 8px 24px rgba(0,0,0,.1);
        }

        /* Thumbnail di atas konten */
        .db-top-photo {
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 32px;
            box-shadow: 0 8px 24px rgba(0,0,0,.1);
            border: 1px solid #e2e8f0;
        }
        .db-top-photo img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            transition: transform .4s ease;
        }
        .db-top-photo:hover img { transform: scale(1.03); }
        .db-photo-caption {
            background: #f8faff;
            padding: 12px 20px;
            font-size: 13px;
            color: #64748b;
            font-weight: 600;
            border-top: 1px solid #e2e8f0;
        }
        .db-photo-caption i { color: #6366f1; margin-right: 6px; }

        /* Prev / Next */
        .db-prevnext {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-top: 40px;
            padding-top: 32px;
            border-top: 1px solid #e2e8f0;
        }
        .db-prevnext a {
            display: flex;
            flex-direction: column;
            gap: 6px;
            padding: 16px 20px;
            border-radius: 14px;
            background: #f8faff;
            border: 1px solid #e2e8f0;
            text-decoration: none;
            transition: all .3s;
        }
        .db-prevnext a:hover { background: #6366f1; border-color: #6366f1; }
        .db-prevnext a:hover span,
        .db-prevnext a:hover p { color: #fff !important; }
        .db-pn-next { text-align: right; }
        .db-prevnext span {
            font-size: 11px;
            font-weight: 800;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .db-prevnext p {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
        }

        /* Share */
        .db-share {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #e2e8f0;
            flex-wrap: wrap;
        }
        .db-share span {
            font-size: 13px;
            font-weight: 800;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .db-share a {
            width: 38px; height: 38px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 14px;
            text-decoration: none;
            color: #fff;
            transition: transform .3s, box-shadow .3s;
        }
        .db-share a:hover { transform: translateY(-3px); box-shadow: 0 6px 16px rgba(0,0,0,.2); }
        .db-share .fb  { background: #1877f2; }
        .db-share .tw  { background: #1da1f2; }
        .db-share .wa  { background: #25d366; }
        .db-share .cp  { background: #64748b; cursor: pointer; }

        /* ============================================================
           SIDEBAR
        ============================================================ */
        .db-sidebar { display: flex; flex-direction: column; gap: 24px; }

        .db-widget {
            background: #fff;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 4px 20px rgba(0,0,0,.06);
            border: 1px solid rgba(0,0,0,.05);
        }
        .db-widget-title {
            font-size: 14px;
            font-weight: 900;
            color: #0f172a;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid #6366f1;
            display: inline-block;
        }

        /* Author */
        .db-author { display: flex; align-items: center; gap: 14px; }
        .db-author-avatar {
            width: 52px; height: 52px; min-width: 52px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
            color: #fff;
            font-weight: 900;
        }
        .db-author-name { font-size: 15px; font-weight: 800; color: #0f172a; }
        .db-author-role { font-size: 12px; color: #94a3b8; font-weight: 600; }

        /* Berita Terkait */
        .db-related-list { display: flex; flex-direction: column; gap: 16px; }
        .db-related-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            text-decoration: none;
            padding: 10px;
            border-radius: 12px;
            transition: background .3s;
        }
        .db-related-item:hover { background: #f8faff; }
        .db-related-img {
            width: 72px; height: 72px;
            border-radius: 10px;
            object-fit: cover;
            flex-shrink: 0;
        }
        .db-related-info h4 {
            font-size: 13px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.4;
            margin-bottom: 4px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .db-related-info span { font-size: 11px; color: #94a3b8; font-weight: 600; }

        /* Tags */
        .db-tags { display: flex; flex-wrap: wrap; gap: 8px; }
        .db-tag {
            display: inline-block;
            padding: 6px 14px;
            background: #f1f5f9;
            color: #475569;
            font-size: 12px;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            transition: all .3s;
        }
        .db-tag:hover { background: #6366f1; color: #fff; }

        /* ============================================================
           FOOTER
        ============================================================ */
        .sdn-footer {
            background: linear-gradient(160deg, #0d2b55 0%, #0a1f3d 60%, #061529 100%);
            color: rgba(255,255,255,.75);
            position: relative;
        }
        .sdn-footer-wave { line-height: 0; margin-bottom: -2px; }
        .sdn-footer-wave svg { display: block; width: 100%; }

        .sdn-footer-logo { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; }
        .sdn-footer-logo img { height: 52px; width: auto; }
        .sdn-footer-logo-title {
            display: block; font-size: 14px; font-weight: 800;
            color: #fff; line-height: 1.3;
        }
        .sdn-footer-logo-sub {
            display: block; font-size: 10px; font-weight: 500;
            color: rgba(255,255,255,.5); letter-spacing: 1px; text-transform: uppercase;
        }
        .sdn-footer-desc {
            font-size: 13px; line-height: 1.9;
            color: rgba(255,255,255,.55); margin-bottom: 20px;
        }
        .sdn-footer-socials { display: flex; gap: 10px; }
        .sdn-footer-socials a {
            width: 38px; height: 38px; border-radius: 50%;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.15);
            color: #fff; display: flex; align-items: center;
            justify-content: center; font-size: 14px;
            text-decoration: none; transition: all .3s;
        }
        .sdn-footer-socials a:hover { background: #f5a623; border-color: #f5a623; transform: translateY(-3px); }

        .sdn-footer-heading {
            font-size: 15px; font-weight: 700; color: #fff;
            margin-bottom: 20px; padding-bottom: 10px; position: relative;
        }
        .sdn-footer-heading::after {
            content: ''; position: absolute; left: 0; bottom: 0;
            width: 36px; height: 3px; background: #f5a623; border-radius: 2px;
        }

        .sdn-footer-links { list-style: none; padding: 0; margin: 0; }
        .sdn-footer-links li { margin-bottom: 10px; }
        .sdn-footer-links a {
            color: rgba(255,255,255,.6); text-decoration: none;
            font-size: 13px; transition: all .3s;
            display: flex; align-items: center; gap: 8px;
        }
        .sdn-footer-links a i { font-size: 10px; color: #f5a623; }
        .sdn-footer-links a:hover { color: #f5a623; padding-left: 4px; }

        .sdn-footer-contact { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 16px; }
        .sdn-footer-contact li { display: flex; align-items: flex-start; gap: 12px; }
        .sdn-contact-icon {
            width: 36px; height: 36px; min-width: 36px;
            background: rgba(245,166,35,.15);
            border: 1px solid rgba(245,166,35,.3);
            border-radius: 8px; display: flex; align-items: center;
            justify-content: center; color: #f5a623; font-size: 13px;
        }
        .sdn-footer-contact strong { display: block; font-size: 12px; font-weight: 600; color: #fff; margin-bottom: 2px; }
        .sdn-footer-contact span,
        .sdn-footer-contact a { font-size: 12px; color: rgba(255,255,255,.55); text-decoration: none; transition: color .3s; }
        .sdn-footer-contact a:hover { color: #f5a623; }

        .sdn-footer-map { border-radius: 14px; overflow: hidden; border: 2px solid rgba(255,255,255,.1); }
        .sdn-footer-map iframe { display: block; border-radius: 12px 12px 0 0; filter: grayscale(20%) contrast(1.05); }
        .sdn-maps-btn {
            display: flex; align-items: center; justify-content: center; gap: 8px;
            background: #f5a623; color: #fff !important; font-size: 13px;
            font-weight: 600; padding: 10px; text-decoration: none !important;
            transition: background .3s; border-radius: 0 0 12px 12px;
        }
        .sdn-maps-btn:hover { background: #e09415; }

        .sdn-copyright { border-top: 1px solid rgba(255,255,255,.08); padding: 18px 0; margin-top: 10px; }
        .sdn-copyright p { margin: 0; font-size: 13px; color: rgba(255,255,255,.45); }
        .sdn-copyright-links { list-style: none; padding: 0; margin: 0; display: flex; gap: 20px; justify-content: flex-end; }
        .sdn-copyright-links a { font-size: 12px; color: rgba(255,255,255,.4); text-decoration: none; transition: color .3s; }
        .sdn-copyright-links a:hover { color: #f5a623; }

        /* ============================================================
           RESPONSIVE
        ============================================================ */
        @media (max-width: 900px) {
            .db-layout { grid-template-columns: 1fr; }
            .db-hero-content { padding: 32px 24px; }
            .db-article { padding: 28px 24px; }
        }
        @media (max-width: 600px) {
            .db-hero { height: 400px; }
            .db-hero-title { font-size: 22px; }
            .db-prevnext { grid-template-columns: 1fr; }
            .sdn-copyright-links { justify-content: center; margin-top: 8px; }
            .sdn-copyright p { text-align: center; }
        }
    </style>
</head>
<body>

    {{-- ============================================================
         NAVBAR
    ============================================================ --}}
    <div class="navbar-section" id="mainNav">

        {{-- Mobile Nav --}}
        <div class="techvio-responsive-nav">
            <div class="container">
                <div class="techvio-responsive-menu">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/tutt.png') }}" class="white-logo" alt="Logo SDN 1 Mangkubumi" style="height:50px;width:auto;">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Desktop Nav --}}
        <div class="techvio-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}" style="display:flex;align-items:center;gap:10px;padding:0;line-height:1;">
                        <img src="{{ asset('assets/img/tutt.png') }}" class="white-logo" alt="Logo" style="height:55px;width:auto;">
                        <div style="display:flex;flex-direction:column;line-height:1.3;">
                            <span class="brand-title" style="font-weight:800;letter-spacing:.3px;">SDN 1 Mangkubumi</span>
                            <span class="brand-sub" style="font-weight:600;letter-spacing:1.5px;text-transform:uppercase;">Kecamatan Sadananya</span>
                        </div>
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                            <li class="nav-item"><a href="/visi-misi" class="nav-link">Tentang</a></li>
                            <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">PPDB</a></li>
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
                            <li class="nav-item"><a href="{{ route('program-sekolah') }}" class="nav-link">Program Sekolah</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Daftar Hadir</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    {{-- Scroll-aware navbar colour --}}
    <script>
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 50));
    </script>

    {{-- ============================================================
         PRELOADER
    ============================================================ --}}
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>

    {{-- ============================================================
         HERO
    ============================================================ --}}
    <section>
        <div class="db-hero">
            <img class="db-hero-img"
                 src="{{ asset('storage/' . $berita->thumbnail) }}"
                 alt="{{ $berita->title }}"
                 onerror="this.src='{{ asset('assets/img/depan.png') }}'">
            <div class="db-hero-overlay"></div>
            <div class="db-hero-content">
                <a href="/berita" class="db-back-btn">
                    <i class="fas fa-arrow-left"></i> Kembali ke Berita
                </a>
                <div>
                    <span class="db-category">
                        <i class="fas fa-tag"></i> {{ $berita->category }}
                    </span>
                </div>
                <h1 class="db-hero-title">{{ $berita->title }}</h1>
                <div class="db-meta">
                    <span class="db-meta-item"><i class="fas fa-user"></i> {{ $berita->author }}</span>
                    <span class="db-meta-item"><i class="fas fa-calendar"></i> {{ $berita->created_at->format('d F Y') }}</span>
                    <span class="db-meta-item"><i class="fas fa-eye"></i> {{ $berita->views ?? 0 }} Dibaca</span>
                </div>
            </div>
        </div>

        {{-- ============================================================
             MAIN LAYOUT
        ============================================================ --}}
        <div class="db-layout">

            {{-- ARTIKEL --}}
            <article class="db-article">

                {{-- Thumbnail atas konten --}}
                <div class="db-top-photo">
                    <img src="{{ asset('storage/' . $berita->thumbnail) }}"
                         alt="{{ $berita->title }}"
                         onerror="this.src='{{ asset('assets/img/depan.png') }}'">
                    <p class="db-photo-caption">
                        <i class="fas fa-camera"></i> {{ $berita->title }}
                    </p>
                </div>

                {{-- Konten berita --}}
                <div class="db-article-body">
                    {!! $berita->content !!}
                </div>

                {{-- Navigasi Prev / Next --}}
                <div class="db-prevnext">
                    @if($prev)
                        <a href="{{ route('berita.show', $prev->slug) }}">
                            <span><i class="fas fa-arrow-left"></i> Sebelumnya</span>
                            <p>{{ $prev->title }}</p>
                        </a>
                    @else
                        <div></div>
                    @endif

                    @if($next)
                        <a href="{{ route('berita.show', $next->slug) }}" class="db-pn-next">
                            <span>Berikutnya <i class="fas fa-arrow-right"></i></span>
                            <p>{{ $next->title }}</p>
                        </a>
                    @endif
                </div>

                {{-- Tombol Share --}}
                <div class="db-share">
                    <span>Bagikan:</span>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                       target="_blank" class="fb" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($berita->title) }}"
                       target="_blank" class="tw" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($berita->title . ' ' . request()->url()) }}"
                       target="_blank" class="wa" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="cp" title="Salin Link"
                       onclick="navigator.clipboard.writeText('{{ request()->url() }}'); alert('Link berhasil disalin!'); return false;">
                        <i class="fas fa-link"></i>
                    </a>
                </div>

            </article>

            {{-- SIDEBAR --}}
            <aside class="db-sidebar">

                {{-- Widget: Penulis --}}
                <div class="db-widget">
                    <div class="db-widget-title">Penulis</div>
                    <div class="db-author">
                        <div class="db-author-avatar">
                            {{ strtoupper(substr($berita->author, 0, 1)) }}
                        </div>
                        <div>
                            <div class="db-author-name">{{ $berita->author }}</div>
                            <div class="db-author-role">Operator SDN 1 Mangkubumi</div>
                        </div>
                    </div>
                </div>

                {{-- Widget: Berita Terkait --}}
                @if($terkait->count() > 0)
                <div class="db-widget">
                    <div class="db-widget-title">Berita Terkait</div>
                    <div class="db-related-list">
                        @foreach($terkait as $item)
                        <a href="{{ route('berita.show', $item->slug) }}" class="db-related-item">
                            <img class="db-related-img"
                                 src="{{ asset('storage/' . $item->thumbnail) }}"
                                 alt="{{ $item->title }}"
                                 onerror="this.src='{{ asset('assets/img/depan.png') }}'">
                            <div class="db-related-info">
                                <h4>{{ $item->title }}</h4>
                                <span>{{ $item->created_at->format('d M Y') }}</span>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Widget: Kategori --}}
                <div class="db-widget">
                    <div class="db-widget-title">Kategori</div>
                    <div class="db-tags">
                        @php $kategoriList = \App\Models\Beritas::distinct()->pluck('category'); @endphp
                        @foreach($kategoriList as $kat)
                            <a href="/berita?category={{ $kat }}" class="db-tag">{{ $kat }}</a>
                        @endforeach
                    </div>
                </div>

            </aside>
        </div>
    </section>

    {{-- ============================================================
         FOOTER
    ============================================================ --}}
    <footer class="sdn-footer">
        <div class="sdn-footer-wave">
            <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,0 C480,80 960,0 1440,60 L1440,0 Z" fill="#f8faff"/>
            </svg>
        </div>

        <div class="container">
            <div class="row g-4 pt-2 pb-5">

                {{-- COL 1: Brand --}}
                <div class="col-lg-3 col-md-6">
                    <div class="sdn-footer-logo">
                        <img src="{{ asset('assets/img/tutt.png') }}" alt="Logo SDN 1 Mangkubumi">
                        <div>
                            <span class="sdn-footer-logo-title">SDN 1 Mangkubumi</span>
                            <span class="sdn-footer-logo-sub">Kecamatan Sadananya</span>
                        </div>
                    </div>
                    <p class="sdn-footer-desc">
                        Sekolah Dasar Negeri 1 Mangkubumi berkomitmen mencetak generasi unggul, berkarakter,
                        dan berprestasi di bawah naungan pendidikan berkualitas.
                    </p>
                    <div class="sdn-footer-socials">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                {{-- COL 2: Menu --}}
                <div class="col-lg-2 col-md-6">
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

                {{-- COL 3: Kontak --}}
                <div class="col-lg-3 col-md-6">
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

                {{-- COL 4: Maps --}}
                <div class="col-lg-4 col-md-6">
                    <h4 class="sdn-footer-heading">Lokasi Sekolah</h4>
                    <div class="sdn-footer-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4!2d108.35!3d-7.38!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sSDN+1+Mangkubumi+Sadananya+Ciamis!5e0!3m2!1sid!2sid!4v1"
                            width="100%" height="220"
                            style="border:0;"
                            allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <a href="https://maps.google.com/?q=SDN+1+Mangkubumi+Sadananya+Ciamis"
                           target="_blank" class="sdn-maps-btn">
                            <i class="fas fa-directions"></i> Buka di Google Maps
                        </a>
                    </div>
                </div>

            </div>
        </div>

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

    {{-- ============================================================
         VENDOR SCRIPTS (load once, no duplicates)
    ============================================================ --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax.mail.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>