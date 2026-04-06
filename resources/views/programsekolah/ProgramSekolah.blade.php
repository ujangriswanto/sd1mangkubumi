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

    <style>
        :root {
            --bg-color: #f8fafc;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --primary: #3b82f6;
            --primary-hover: #2563eb;
            --card-bg: #ffffff;
            --border-color: #e2e8f0;
            --nav-height: 70px;

            --tag-bg-agama: #dbeafe;
            --tag-text-agama: #1d4ed8;
            --tag-bg-ekskul: #fef3c7;
            --tag-text-ekskul: #b45309;
            --tag-bg-kokulikuler: #dcfce7;
            --tag-text-kokulikuler: #15803d;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        /* ─────────────────────────────────────────
           NAVBAR
        ───────────────────────────────────────── */
        #mainNav {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            z-index: 1000;
            transition: background 0.3s, box-shadow 0.3s;
            background: transparent;
        }
        #mainNav.scrolled {
            background: #ffffff;
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
        }
        .nav-wrapper {
            max-width: 1280px; margin: 0 auto;
            padding: 0 24px; height: var(--nav-height);
            display: flex; align-items: center;
            justify-content: space-between; gap: 24px;
        }
        .nav-brand { display: flex; align-items: center; gap: 10px; text-decoration: none; flex-shrink: 0; }
        .nav-brand img { height: 44px; width: auto; display: block; }
        .nav-brand-text { display: flex; flex-direction: column; line-height: 1.25; }
        .nav-brand-title { font-size: 14px; font-weight: 800; color: #ffffff; transition: color 0.3s; letter-spacing: 0.2px; }
        .nav-brand-sub { font-size: 9px; font-weight: 600; letter-spacing: 1.4px; text-transform: uppercase; color: rgba(255,255,255,0.75); transition: color 0.3s; }
        #mainNav.scrolled .nav-brand-title { color: #0f172a; }
        #mainNav.scrolled .nav-brand-sub   { color: #64748b; }

        .nav-links { display: flex; align-items: center; list-style: none; gap: 4px; margin: 0; padding: 0; }
        .nav-links > li { position: relative; }
        .nav-links > li > a { display: flex; align-items: center; gap: 4px; padding: 8px 14px; font-size: 13.5px; font-weight: 600; color: rgba(255,255,255,0.9); text-decoration: none; border-radius: 8px; transition: background 0.2s, color 0.2s; white-space: nowrap; }
        .nav-links > li > a:hover { background: rgba(255,255,255,0.15); color: #ffffff; }
        #mainNav.scrolled .nav-links > li > a { color: #334155; }
        #mainNav.scrolled .nav-links > li > a:hover { background: #f1f5f9; color: #1e293b; }
        .nav-links > li > a.active { background: rgba(255,255,255,0.2); color: #ffffff; }
        #mainNav.scrolled .nav-links > li > a.active { background: #eff6ff; color: var(--primary); }

        .nav-links .has-dropdown > a .chevron { font-size: 10px; transition: transform 0.25s; opacity: 0.7; }
        .nav-links .has-dropdown:hover > a .chevron { transform: rotate(180deg); }
        .dropdown-menu { display: none; position: absolute; top: calc(100% + 8px); left: 0; min-width: 200px; background: #ffffff; border-radius: 14px; box-shadow: 0 10px 40px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; padding: 8px; list-style: none; z-index: 200; animation: dropDown 0.2s ease; }
        @keyframes dropDown { from { opacity: 0; transform: translateY(-8px); } to { opacity: 1; transform: translateY(0); } }
        .has-dropdown:hover .dropdown-menu { display: block; }
        .dropdown-menu li a { display: block; padding: 9px 14px; font-size: 13px; font-weight: 500; color: #334155; text-decoration: none; border-radius: 8px; transition: background 0.15s, color 0.15s; white-space: nowrap; }
        .dropdown-menu li a:hover { background: #eff6ff; color: var(--primary); }

        .nav-toggle { display: none; flex-direction: column; justify-content: center; gap: 5px; cursor: pointer; padding: 6px; border-radius: 8px; border: none; background: rgba(255,255,255,0.15); transition: background 0.2s; }
        .nav-toggle:hover { background: rgba(255,255,255,0.25); }
        #mainNav.scrolled .nav-toggle { background: #f1f5f9; }
        .nav-toggle span { display: block; width: 22px; height: 2px; background: #ffffff; border-radius: 4px; transition: transform 0.3s, opacity 0.3s; }
        #mainNav.scrolled .nav-toggle span { background: #334155; }
        .nav-toggle.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .nav-toggle.open span:nth-child(2) { opacity: 0; }
        .nav-toggle.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        .mobile-nav { display: none; position: fixed; top: var(--nav-height); left: 0; right: 0; background: #ffffff; border-top: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.1); padding: 12px 16px 20px; max-height: calc(100vh - var(--nav-height)); overflow-y: auto; z-index: 999; }
        .mobile-nav.open { display: block; }
        .mobile-nav a { display: block; padding: 10px 14px; font-size: 14px; font-weight: 600; color: #334155; text-decoration: none; border-radius: 10px; transition: background 0.15s; }
        .mobile-nav a:hover { background: #f1f5f9; color: var(--primary); }
        .mobile-nav .mobile-section-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; color: #94a3b8; padding: 14px 14px 6px; }
        .mobile-nav .mobile-sub a { padding-left: 28px; font-size: 13px; font-weight: 500; color: #475569; }

        /* ─────────────────────────────────────────
           HERO
        ───────────────────────────────────────── */
        .hero {
            position: relative;
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #06b6d4 100%);
            padding: 140px 20px 90px;
            text-align: center;
            overflow: hidden;
            color: #ffffff;
        }
        .hero::before { content: ""; position: absolute; top: -20%; left: -10%; width: 500px; height: 500px; border-radius: 50%; background: rgba(255,255,255,0.1); filter: blur(40px); pointer-events: none; }
        .hero::after { content: ""; position: absolute; bottom: -30%; right: -10%; width: 600px; height: 600px; border-radius: 50%; background: rgba(255,255,255,0.15); filter: blur(60px); pointer-events: none; }
        .hero-content { position: relative; z-index: 1; max-width: 800px; margin: 0 auto; }
        .hero-badge { display: inline-block; padding: 8px 18px; background: rgba(255,255,255,0.2); color: #ffffff; border-radius: 9999px; font-size: 13px; font-weight: 600; margin-bottom: 24px; letter-spacing: 0.5px; border: 1px solid rgba(255,255,255,0.3); backdrop-filter: blur(8px); }
        .hero h1 { font-size: 3.2rem; font-weight: 800; line-height: 1.15; letter-spacing: -0.02em; margin-bottom: 20px; color: #ffffff; text-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .hero p { font-size: 1.05rem; color: #e0f2fe; max-width: 620px; margin: 0 auto; font-weight: 400; }

        /* ─────────────────────────────────────────
           CONTENT
        ───────────────────────────────────────── */
        .container { max-width: 1200px; margin: 0 auto; padding: 80px 20px; }
        .section-header { margin-bottom: 40px; padding-bottom: 16px; }
        .section-header h2 { font-size: 1.8rem; font-weight: 800; letter-spacing: -0.01em; color: #1e293b; position: relative; display: inline-block; }
        .section-header h2::after { content: ""; position: absolute; bottom: -8px; left: 0; width: 50px; height: 4px; background: var(--primary); border-radius: 2px; }

        .grid-layout { display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 28px; margin-bottom: 72px; }
        .program-card { background: var(--card-bg); border: 1px solid var(--border-color); border-radius: 20px; padding: 30px; transition: transform 0.3s cubic-bezier(0.4,0,0.2,1), box-shadow 0.3s; position: relative; display: flex; flex-direction: column; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); border-top-width: 4px; }
        .card-agama         { border-top-color: #3b82f6; }
        .card-ekskul        { border-top-color: #f59e0b; }
        .card-kokulikuler   { border-top-color: #10b981; }
        .program-card:hover { transform: translateY(-4px); box-shadow: 0 20px 30px -8px rgba(0,0,0,0.1); }

        .category-tag { display: inline-flex; align-items: center; padding: 5px 12px; border-radius: 8px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 18px; align-self: flex-start; }
        .tag-agama       { background: var(--tag-bg-agama); color: var(--tag-text-agama); }
        .tag-ekskul      { background: var(--tag-bg-ekskul); color: var(--tag-text-ekskul); }
        .tag-kokulikuler { background: var(--tag-bg-kokulikuler); color: var(--tag-text-kokulikuler); }

        .program-card h3 { font-size: 1.2rem; font-weight: 800; margin-bottom: 14px; line-height: 1.3; color: #0f172a; }
        .program-card p.desc { font-size: 0.9rem; color: var(--text-muted); margin-bottom: 22px; flex-grow: 1; line-height: 1.7; }

        details { background: #f8fafc; border-radius: 12px; padding: 12px 16px; border: 1px solid #e2e8f0; margin-top: auto; transition: background 0.2s; }
        details[open] { background: #ffffff; border-color: var(--primary); box-shadow: 0 4px 12px rgba(59,130,246,0.08); }
        summary { font-weight: 600; font-size: 0.88rem; color: #334155; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center; transition: color 0.2s; }
        summary::-webkit-details-marker { display: none; }
        summary:hover { color: var(--primary); }
        summary::after { content: '+'; font-size: 1.3rem; font-weight: 300; color: #94a3b8; transition: transform 0.3s, color 0.3s; }
        details[open] summary::after { transform: rotate(45deg); color: var(--primary); }
        details[open] summary { margin-bottom: 14px; color: var(--primary); padding-bottom: 12px; border-bottom: 1px dashed #cbd5e1; }

        .details-content { font-size: 0.85rem; color: #475569; animation: fadeIn 0.3s ease; }
        .details-content h4 { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--primary); margin: 14px 0 7px; font-weight: 700; }
        .details-content h4:first-child { margin-top: 0; }
        .details-content ul { padding-left: 18px; margin-bottom: 14px; line-height: 1.6; }
        .details-content li { margin-bottom: 5px; }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(-4px); } to { opacity: 1; transform: translateY(0); } }

        /* ─────────────────────────────────────────
           FOOTER — DIPERBAIKI
        ───────────────────────────────────────── */

        .sdn-footer {
            background: linear-gradient(160deg, #0d2b55 0%, #0a1f3d 60%, #061529 100%);
            color: rgba(255,255,255,0.75);
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
        }

        /* Dekorasi background */
        .sdn-footer::before {
            content: '';
            position: absolute;
            top: -120px; right: -120px;
            width: 380px; height: 380px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(59,130,246,0.12), transparent 70%);
            pointer-events: none;
        }
        .sdn-footer::after {
            content: '';
            position: absolute;
            bottom: 60px; left: -80px;
            width: 280px; height: 280px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245,166,35,0.08), transparent 70%);
            pointer-events: none;
        }

        /* Wave separator */
        .sdn-footer-wave {
            line-height: 0;
            margin-bottom: -2px;
        }
        .sdn-footer-wave svg { display: block; width: 100%; }

        /* Inner wrapper */
        .sdn-footer-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 24px 40px;
            display: grid;
            grid-template-columns: 1.4fr 1fr 1.2fr 1.4fr;
            gap: 40px;
            position: relative;
            z-index: 1;
        }

        /* ── Brand col ── */
        .sdn-footer-brand {}

        .sdn-footer-logo-wrap {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
        }
        .sdn-footer-logo-wrap img {
            height: 52px;
            width: auto;
            flex-shrink: 0;
        }
        .sdn-footer-logo-title {
            display: block;
            font-size: 15px;
            font-weight: 800;
            color: #fff;
            line-height: 1.3;
        }
        .sdn-footer-logo-sub {
            display: block;
            font-size: 10px;
            font-weight: 500;
            color: rgba(255,255,255,0.45);
            letter-spacing: 1.1px;
            text-transform: uppercase;
            margin-top: 3px;
        }

        .sdn-footer-desc {
            font-size: 13px;
            line-height: 1.85;
            color: rgba(255,255,255,0.5);
            margin-bottom: 22px;
        }

        .sdn-footer-socials {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .sdn-footer-socials a {
            width: 38px; height: 38px;
            border-radius: 10px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.12);
            color: rgba(255,255,255,0.7);
            display: flex; align-items: center; justify-content: center;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s;
        }
        .sdn-footer-socials a:hover {
            background: #f5a623;
            border-color: #f5a623;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(245,166,35,0.35);
        }

        /* ── Heading shared ── */
        .sdn-footer-heading {
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            margin-bottom: 22px;
            padding-bottom: 12px;
            position: relative;
        }
        .sdn-footer-heading::after {
            content: '';
            position: absolute;
            left: 0; bottom: 0;
            width: 30px; height: 3px;
            background: #f5a623;
            border-radius: 2px;
        }

        /* ── Menu col ── */
        .sdn-footer-links {
            list-style: none;
            padding: 0; margin: 0;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .sdn-footer-links li a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgba(255,255,255,0.55);
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.25s;
            padding: 3px 0;
        }
        .sdn-footer-links li a .link-dot {
            width: 6px; height: 6px;
            border-radius: 50%;
            background: rgba(245,166,35,0.5);
            flex-shrink: 0;
            transition: background 0.25s, transform 0.25s;
        }
        .sdn-footer-links li a:hover {
            color: #f5a623;
            padding-left: 4px;
        }
        .sdn-footer-links li a:hover .link-dot {
            background: #f5a623;
            transform: scale(1.3);
        }

        /* ── Kontak col ── */
        .sdn-footer-contact {
            list-style: none;
            padding: 0; margin: 0;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .sdn-footer-contact li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .sdn-contact-icon {
            width: 34px; height: 34px;
            min-width: 34px;
            background: rgba(245,166,35,0.12);
            border: 1px solid rgba(245,166,35,0.25);
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            color: #f5a623;
            font-size: 13px;
            margin-top: 1px;
        }
        .sdn-contact-text strong {
            display: block;
            font-size: 11px;
            font-weight: 700;
            color: rgba(255,255,255,0.85);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 3px;
        }
        .sdn-contact-text span,
        .sdn-contact-text a {
            font-size: 12.5px;
            color: rgba(255,255,255,0.5);
            text-decoration: none;
            line-height: 1.5;
            transition: color 0.25s;
        }
        .sdn-contact-text a:hover { color: #f5a623; }

        /* ── Peta col ── */
        .sdn-footer-map-wrap {
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        }
        .sdn-footer-map-wrap iframe {
            display: block;
            width: 100%;
            height: 210px;
            border: 0;
            filter: grayscale(20%) brightness(0.95);
        }
        .sdn-footer-map-placeholder {
            height: 210px;
            background: rgba(255,255,255,0.04);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: rgba(255,255,255,0.3);
            font-size: 13px;
        }
        .sdn-footer-map-placeholder i {
            font-size: 28px;
            color: rgba(245,166,35,0.4);
        }

        /* ── Divider ── */
        .sdn-footer-divider {
            max-width: 1200px;
            margin: 0 auto;
            border: none;
            border-top: 1px solid rgba(255,255,255,0.07);
            position: relative;
            z-index: 1;
        }

        /* ── Copyright bar ── */
        .sdn-copyright {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            position: relative;
            z-index: 1;
        }
        .sdn-copyright-left {
            font-size: 12.5px;
            color: rgba(255,255,255,0.35);
        }
        .sdn-copyright-left span {
            color: rgba(255,255,255,0.55);
            font-weight: 600;
        }
        .sdn-copyright-right {
            display: flex;
            align-items: center;
            gap: 6px;
            list-style: none;
            padding: 0; margin: 0;
        }
        .sdn-copyright-right li a {
            font-size: 12px;
            color: rgba(255,255,255,0.35);
            text-decoration: none;
            transition: color 0.25s;
            padding: 4px 10px;
            border-radius: 6px;
            border: 1px solid rgba(255,255,255,0.08);
        }
        .sdn-copyright-right li a:hover {
            color: #f5a623;
            border-color: rgba(245,166,35,0.3);
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 1024px) {
            .sdn-footer-inner {
                grid-template-columns: 1fr 1fr;
                gap: 36px 40px;
            }
        }
        @media (max-width: 640px) {
            .sdn-footer-inner {
                grid-template-columns: 1fr;
                padding: 40px 20px 32px;
                gap: 32px;
            }
            .sdn-copyright {
                flex-direction: column;
                text-align: center;
                gap: 12px;
                padding: 16px 20px;
            }
            .sdn-copyright-right {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        /* ─────────────────────────────────────────
           NAV RESPONSIVE
        ───────────────────────────────────────── */
        @media (max-width: 900px) { .nav-links { display: none; } .nav-toggle { display: flex; } }
        @media (max-width: 640px) { .hero { padding: 120px 16px 70px; } .hero h1 { font-size: 2.1rem; } .grid-layout { grid-template-columns: 1fr; } .container { padding: 60px 16px; } }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav id="mainNav">
    <div class="nav-wrapper">
        <a href="index.html" class="nav-brand">
            <img src="assets/img/tutt.png" alt="Logo SDN 1 Mangkubumi">
            <div class="nav-brand-text">
                <span class="nav-brand-title">SDN 1 Mangkubumi</span>
                <span class="nav-brand-sub">Kecamatan Sadananya</span>
            </div>
        </a>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <li><a href="/visi-misi">Tentang</a></li>
            <li><a href="/kurikulum">Kurikulum</a></li>
            <li><a href="/berita">Berita</a></li>
            <li><a href="/ppdb">PPDB</a></li>
            <li class="has-dropdown">
                <a href="#">Akademik <span class="chevron">▾</span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Jadwal Pelajaran</a></li>
                    <li><a href="#">Kalender Akademik</a></li>
                    <li><a href="#">Ekstrakurikuler</a></li>
                    <li><a href="#">Perpustakaan</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Kesiswaan <span class="chevron">▾</span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Total Data Siswa</a></li>
                    <li><a href="#">Total Data Siswa / Kelas</a></li>
                </ul>
            </li>
            <li><a href="/program-sekolah" class="active">Program Sekolah</a></li>
        </ul>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>

<!-- Mobile Menu -->
<div class="mobile-nav" id="mobileNav">
    <a href="/">Beranda</a>
    <a href="/visi-misi">Tentang</a>
    <a href="/kurikulum">Kurikulum</a>
    <a href="/berita">Berita</a>
    <a href="/ppdb">PPDB</a>
    <div class="mobile-section-label">Akademik</div>
    <div class="mobile-sub">
        <a href="#">Jadwal Pelajaran</a>
        <a href="#">Kalender Akademik</a>
        <a href="#">Ekstrakurikuler</a>
        <a href="#">Perpustakaan</a>
    </div>
    <div class="mobile-section-label">Kesiswaan</div>
    <div class="mobile-sub">
        <a href="#">Total Data Siswa</a>
        <a href="#">Total Data Siswa / Kelas</a>
    </div>
    <a href="/program-sekolah" style="color: var(--primary);">Program Sekolah</a>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-badge">Pemerintahan Kabupaten Ciamis</div>
        <h1>Program Sekolah<br>SD Negeri 1 Mangkubumi</h1>
        <h9>Membentuk generasi cerdas, berkarakter, dan berakhlak mulia melalui berbagai program pembiasaan, ekstrakurikuler, dan terapan yang memadukan nilai religius dan keterampilan masa depan.</h9>
    </div>
</section>

<!-- CONTENT -->
<div class="container">

    <div class="section-header"><h2>Program Pembiasaan &amp; Keagamaan</h2></div>
    <div class="grid-layout">
        <div class="program-card card-agama">
            <div class="category-tag tag-agama">Keagamaan</div>
            <h3>Sholat Dhuha &amp; Dzuhur</h3>
            <p class="desc">Program pembiasaan kegiatan rutin harian untuk menanamkan nilai religius. Sholat Dhuha dilakukan pagi hari (Kelas 1–6) dan Dzuhur berjamaah (Kelas 4–6).</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Menanamkan kebiasaan beribadah sejak dini</li><li>Meningkatkan keimanan dan ketakwaan</li><li>Membentuk karakter disiplin dan tanggung jawab</li><li>Membiasakan sholat tepat waktu berjamaah</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Membentuk akhlak mulia dan kepribadian religius</li><li>Menciptakan lingkungan yang religius dan kondusif</li><li>Melatih kekompakan antar siswa</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-agama">
            <div class="category-tag tag-agama">Keagamaan</div>
            <h3>GiJi (Pagi Mengaji)</h3>
            <p class="desc">Kegiatan membaca Surat Yasin setiap hari Jumat dilanjutkan dengan kultum singkat oleh siswa atau guru untuk menjalin suasana spiritual yang bermakna.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Menanamkan kebiasaan membaca Al-Qur'an</li><li>Menumbuhkan kecintaan terhadap Al-Qur'an</li><li>Melatih keberanian berbicara melalui kultum</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Pemahaman nilai keislaman sehari-hari</li><li>Menciptakan sekolah yang religius dan harmonis</li><li>Melatih kepercayaan diri untuk ceramah</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-agama">
            <div class="category-tag tag-agama">Keagamaan</div>
            <h3>Gema Juz 'Amma</h3>
            <p class="desc">Gerakan Menghafal Juz 'Amma dengan target 1 ayat per hari, disertai setoran setiap bulan, tasmi', dan wisuda apresiasi hafalan.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Membiasakan menghafal Al-Qur'an sejak dini</li><li>Meningkatkan hafalan secara konsisten</li><li>Memberikan apresiasi via tasmi' dan wisuda</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Memiliki hafalan sebagai bekal ibadah</li><li>Melatih daya ingat dan konsentrasi</li><li>Meningkatkan rasa percaya diri siswa</li></ul>
                </div>
            </details>
        </div>
    </div>

    <div class="section-header"><h2>Ekstrakurikuler</h2></div>
    <div class="grid-layout">
        <div class="program-card card-ekskul">
            <div class="category-tag tag-ekskul">Ekskul Wajib</div>
            <h3>Pramuka</h3>
            <p class="desc">Pembinaan karakter, keterampilan, dan kemandirian setiap hari Sabtu. Meliputi baris-berbaris, tali temali, sandi, dan kepemimpinan.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Membentuk disiplin, tanggung jawab &amp; mandiri</li><li>Menanamkan jiwa kepemimpinan</li><li>Mengembangkan keterampilan (life skills)</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Kemampuan bekerjasama yang baik</li><li>Menumbuhkan karakter penjelajah tangguh</li><li>Meningkatkan komunikasi antar siswa</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-ekskul">
            <div class="category-tag tag-ekskul">Ekskul Pilihan</div>
            <h3>Komputer</h3>
            <p class="desc">Ekstrakurikuler teknologi bagi Kelas 4 &amp; 5. Fokus pengenalan perangkat, aplikasi perkantoran, pengetikan, dan penggunaan teknologi bijak.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Mengenalkan teknologi dasar</li><li>Mengembangkan kreativitas digital</li><li>Membentuk sikap bijak berteknologi</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Mampu mengoperasikan komputer dasar</li><li>Mendukung kegiatan pembelajaran digital</li><li>Bekal skill relevan untuk masa depan</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-ekskul">
            <div class="category-tag tag-ekskul">Ekskul Pilihan</div>
            <h3>Kesenian</h3>
            <p class="desc">Wadah ekspresi minat &amp; bakat seni siswa setiap Kamis (Seni Tari, Musik, Menggambar, dll) dengan pembelajaran langsung yang kreatif.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Mengembangkan minat spesifik bidang seni</li><li>Meningkatkan apresiasi seni budaya</li><li>Melatih keberanian berekspresi</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Penyaluran emosi secara positif</li><li>Meningkatkan kebanggaan atas karya</li><li>Menciptakan lingkungan yang berbudaya</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-ekskul">
            <div class="category-tag tag-ekskul">Ekskul Pilihan</div>
            <h3>Olahraga (Bola Voli)</h3>
            <p class="desc">Pengembangan kebugaran dan teknik dasar Bola Voli (passing, servis, smash) untuk kelas 3, 4, 5 setiap hari Jumat siang.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Meningkatkan skill dasar voli</li><li>Menumbuhkan sportivitas dan kerjasama tim</li><li>Mempersiapkan kompetisi tingkat dasar</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Tubuh lebih sehat dan bugar</li><li>Komunikasi efektif dalam permainan tim</li><li>Semangat pantang menyerah</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-ekskul">
            <div class="category-tag tag-ekskul">Ekskul Pilihan</div>
            <h3>Bahasa Inggris</h3>
            <p class="desc">Peningkatan skill dasar English (Listening, Speaking, Reading, Writing) bagi Kelas 6 dengan metode storytelling dan role play interaktif.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Melatih keberanian berbicara English</li><li>Mengembangkan komunikasi sederhana</li><li>Bekal masuk ke jenjang SMP/sederajat</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Mampu memahami struktur dasar</li><li>Meningkatkan prestasi akademik bahasa</li><li>Skill global untuk era modern</li></ul>
                </div>
            </details>
        </div>
    </div>

    <div class="section-header"><h2>Ko-Kulikuler &amp; Lingkungan</h2></div>
    <div class="grid-layout">
        <div class="program-card card-kokulikuler">
            <div class="category-tag tag-kokulikuler">Outing Class</div>
            <h3>Mengenal Ciamis Lebih Dekat</h3>
            <p class="desc">Pembelajaran di luar kelas setiap semester untuk mengenal sejarah, budaya, dan kearifan lokal menggunakan tour GATRIK Ciamis.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Mengenalkan sejarah lokal Ciamis</li><li>Menumbuhkan cinta daerah (kearifan lokal)</li><li>Pembelajaran langsung (learning by doing)</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Pengalaman belajar nyata dan menyenangkan</li><li>Melestarikan budaya tradisional daerah</li><li>Menumbuhkan kepedulian lingkungan sekitar</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-kokulikuler">
            <div class="category-tag tag-kokulikuler">Bina Lingkungan</div>
            <h3>Pengelolaan Bank Sampah</h3>
            <p class="desc">Edukasi pengelolaan sampah organik &amp; anorganik, mengubah limbah menjadi barang kerajinan bernilai ekonomis kerjasama dengan Bank Sampah lokal.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Menanamkan sadar lingkungan sejak dini</li><li>Mengenalkan ekonomi sirkular</li><li>Kerjasama tim dalam memilah daur ulang</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Menumbuhkan jiwa wirausaha dari limbah</li><li>Sekolah lebih bersih dan bebas sampah</li><li>Skill kreatif pembuatan ecobrick dll</li></ul>
                </div>
            </details>
        </div>
        <div class="program-card card-kokulikuler">
            <div class="category-tag tag-kokulikuler">Bina Lingkungan</div>
            <h3>Pemanfaatan Lahan Menanam</h3>
            <p class="desc">Mengubah lahan kosong sekolah menjadi area produktif untuk sayuran, buah, dan TOGA. Melibatkan partisipasi seluruh guru dan siswa.</p>
            <details>
                <summary>Lihat Detail Program</summary>
                <div class="details-content">
                    <h4>Tujuan</h4>
                    <ul><li>Memanfaatkan aset sekolah secara optimal</li><li>Mengenalkan cara bercocok tanam yang baik</li><li>Dukungan pembelajaran Kontekstual</li></ul>
                    <h4>Manfaat</h4>
                    <ul><li>Lingkungan lebih rindang dan asri</li><li>Kemampuan bercocok tanam dasar untuk siswa</li><li>Hasil panen bisa dibagikan atau digunakan</li></ul>
                </div>
            </details>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════
     FOOTER — DIPERBAIKI
══════════════════════════════════ -->
<footer class="sdn-footer">

    <!-- Wave atas -->
    <div class="sdn-footer-wave">
        <svg viewBox="0 0 1440 70" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,0 C360,70 1080,0 1440,50 L1440,0 Z" fill="#f8fafc"/>
        </svg>
    </div>

    <!-- Grid utama -->
    <div class="sdn-footer-inner">

        <!-- Kolom 1: Brand -->
        <div class="sdn-footer-brand">
            <div class="sdn-footer-logo-wrap">
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
                <a href="#" title="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </a>
                <a href="#" title="Instagram">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                </a>
                <a href="#" title="YouTube">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#0d2b55"/></svg>
                </a>
                <a href="#" title="WhatsApp">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                </a>
            </div>
        </div>

        <!-- Kolom 2: Menu -->
        <div>
            <h4 class="sdn-footer-heading">Menu Utama</h4>
            <ul class="sdn-footer-links">
                <li><a href="/"><span class="link-dot"></span>Beranda</a></li>
                <li><a href="/visi-misi"><span class="link-dot"></span>Visi &amp; Misi</a></li>
                <li><a href="/kurikulum"><span class="link-dot"></span>Kurikulum</a></li>
                <li><a href="/berita"><span class="link-dot"></span>Berita</a></li>
                <li><a href="/ppdb"><span class="link-dot"></span>PPDB</a></li>
                <li><a href="#"><span class="link-dot"></span>Akademik</a></li>
                <li><a href="#"><span class="link-dot"></span>Kesiswaan</a></li>
                <li><a href="/program-sekolah"><span class="link-dot"></span>Program Sekolah</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Kontak -->
        <div>
            <h4 class="sdn-footer-heading">Kontak Kami</h4>
            <ul class="sdn-footer-contact">
                <li>
                    <div class="sdn-contact-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div class="sdn-contact-text">
                        <strong>Alamat</strong>
                        <span>Jl. Raya Mangkubumi, Kec. Sadananya, Ciamis, Jawa Barat</span>
                    </div>
                </li>
                <li>
                    <div class="sdn-contact-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.67 3.47 2 2 0 0 1 3.64 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.29 6.29l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <div class="sdn-contact-text">
                        <strong>Telepon / WhatsApp</strong>
                        <a href="tel:+6281234567890">+62 812-3456-7890</a>
                    </div>
                </li>
                <li>
                    <div class="sdn-contact-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div class="sdn-contact-text">
                        <strong>Email</strong>
                        <a href="mailto:sdn1mangkubumi@gmail.com">sdn1mangkubumi@gmail.com</a>
                    </div>
                </li>
                <li>
                    <div class="sdn-contact-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="sdn-contact-text">
                        <strong>Jam Operasional</strong>
                        <span>Senin – Jumat: 07.00 – 14.00 WIB</span>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Kolom 4: Peta -->
        <div>
            <h4 class="sdn-footer-heading">Lokasi Sekolah</h4>
            <div class="sdn-footer-map-wrap">
                <!-- Ganti src iframe ini dengan link Google Maps embed sekolah yang sesungguhnya -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0!2d108.35!3d-7.38!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjMnMTIuMCJTIDEwOMKwMjEnMDAuMCJF!5e0!3m2!1sid!2sid!4v1"
                    width="100%" height="210"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>

    <!-- Divider -->
    <hr class="sdn-footer-divider">

    <!-- Copyright bar -->
    <div class="sdn-copyright">
        <p class="sdn-copyright-left">
            &copy; 2025 <span>SDN 1 Mangkubumi</span> — All Rights Reserved.
        </p>
        <ul class="sdn-copyright-right">
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat &amp; Ketentuan</a></li>
        </ul>
    </div>

</footer>

<!-- SCRIPTS -->
<script>
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 50);
    });
    const toggleBtn = document.getElementById('navToggle');
    const mobileNav = document.getElementById('mobileNav');
    toggleBtn.addEventListener('click', () => {
        const isOpen = mobileNav.classList.toggle('open');
        toggleBtn.classList.toggle('open', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });
    mobileNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileNav.classList.remove('open');
            toggleBtn.classList.remove('open');
            document.body.style.overflow = '';
        });
    });
    document.addEventListener('click', e => {
        if (!nav.contains(e.target) && !mobileNav.contains(e.target)) {
            mobileNav.classList.remove('open');
            toggleBtn.classList.remove('open');
            document.body.style.overflow = '';
        }
    });
</script>
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
