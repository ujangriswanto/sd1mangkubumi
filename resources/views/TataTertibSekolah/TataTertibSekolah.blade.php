<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tata Tertib Sekolah — SDN 1 Mangkubumi</title>

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
    /* ══ RESET ══ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --blue:    #3b82f6;
      --purple:  #8b5cf6;
      --purple2: #a78bfa;
      --green:   #10b981;
      --orange:  #f59e0b;
      --orange2: #fbbf24;
      --red:     #ef4444;
      --pink:    #ec4899;
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

    /* ══ NAVBAR OVERRIDES (sama persis jadwal pelajaran) ══ */
    .navbar-nav .nav-link      { font-size: 15px !important; font-weight: 600; letter-spacing: .3px; }
    .dropdown-menu .nav-link   { font-size: 12px !important; }
    .brand-title               { font-size: 13px !important; color: #ffffff; }
    .brand-sub                 { font-size: 9px  !important; color: rgba(255,255,255,0.75); }
    .scrolled .brand-title     { color: #000000; }
    .scrolled .brand-sub       { color: rgba(0,0,0,0.845); }

    /* Paksa teks navbar hitam di halaman ini */
    .navbar-section .nav-link,
    .navbar-section .navbar-nav .nav-link,
    .navbar-section .navbar-nav > li > .nav-link { color: #ffffff !important; }
    .navbar-section .nav-link:hover              { color: #54A0FF !important; }
    .navbar-section .brand-title                 { color: #ffffff !important; }
    .navbar-section .brand-sub                   { color: rgb(255, 255, 255) !important; }
    .navbar-section .navbar-toggler-icon         { filter: invert(1) brightness(0); }

    /* KHUSUS SUB MENU NAVBAR JADI HITAM */
    .dropdown-menu .nav-item .nav-link { color: #000000 !important; }

    /* ══ HERO ══ */
    .ttb-hero {
      position: relative; overflow: hidden;
      padding: 80px 24px 64px; text-align: center;
      background: linear-gradient(160deg, #6366f1 0%, #8b5cf6 40%, #3b82f6 100%);
    }
    .ttb-hero-blob1 { position: absolute; top: -60px; right: -60px; width: 280px; height: 280px; border-radius: 50%; background: rgba(255,255,255,.08); }
    .ttb-hero-blob2 { position: absolute; bottom: -80px; left: -40px; width: 220px; height: 220px; border-radius: 50%; background: rgba(255,255,255,.06); }
    .ttb-hero-stars {
      position: absolute; inset: 0; opacity: .25;
      background-image: radial-gradient(circle, rgba(255,255,255,.6) 1px, transparent 1px), radial-gradient(circle, rgba(255,255,255,.4) 1px, transparent 1px);
      background-size: 60px 60px, 90px 90px;
      background-position: 0 0, 30px 30px;
    }
    .ttb-hero-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(255,255,255,.2); border: 1.5px solid rgba(255,255,255,.4);
      color: #fff; font-size: 12px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase;
      padding: 6px 18px; border-radius: 100px; margin-bottom: 20px; position: relative;
    }
    .ttb-hero-badge-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--orange2); animation: pulse 1.5s infinite; }
    @keyframes pulse { 0%,100%{transform:scale(1);opacity:1} 50%{transform:scale(1.3);opacity:.7} }
    .ttb-hero-title {
      font-family: 'Fredoka One', cursive;
      font-size: clamp(2.2rem, 6vw, 3.6rem);
      color: var(--white); line-height: 1.1; position: relative; margin-bottom: 14px;
      text-shadow: 0 4px 20px rgba(0,0,0,.15);
    }
    .ttb-hero-title .accent { color: var(--orange2); }
    .ttb-hero-sub { color: rgba(255,255,255,.85); font-size: 16px; font-weight: 600; max-width: 500px; margin: 0 auto; line-height: 1.7; }
    .ttb-hero-emojis { font-size: 28px; margin: 22px 0 0; display: flex; align-items: center; justify-content: center; gap: 14px; }
    .ttb-hero-emojis span { display: inline-block; animation: bounce 2s infinite; }
    .ttb-hero-emojis span:nth-child(2) { animation-delay: .3s; }
    .ttb-hero-emojis span:nth-child(3) { animation-delay: .6s; }
    @keyframes bounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }

    /* ══ CONTAINER ══ */
    .ttb-container { max-width: 860px; margin: 0 auto; padding: 40px 20px 60px; }

    /* ══ SECTION LABEL ══ */
    .ttb-section-label { display: flex; align-items: center; gap: 12px; margin-bottom: 28px; }
    .ttb-section-pill  { display: flex; align-items: center; gap: 8px; background: var(--purple); color: #fff; font-size: 13px; font-weight: 800; padding: 7px 18px; border-radius: 100px; }
    .ttb-section-line  { flex: 1; height: 2px; background: linear-gradient(90deg, #c4b5fd, transparent); border-radius: 4px; }

    /* ══ CARD ══ */
    .ttb-card {
      background: var(--white); border-radius: 20px; border: 2px solid #e0e7ff;
      margin-bottom: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(99,102,241,.07);
      transition: transform .25s, box-shadow .25s, border-color .25s;
      animation: fadeUp .5s ease both; position: relative;
    }
    .ttb-card:hover { transform: translateY(-3px); box-shadow: 0 10px 40px rgba(99,102,241,.14); border-color: #c4b5fd; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:translateY(0)} }
    .ttb-card:nth-child(1){animation-delay:.06s}
    .ttb-card:nth-child(2){animation-delay:.13s}
    .ttb-card:nth-child(3){animation-delay:.20s}
    .ttb-card:nth-child(4){animation-delay:.27s}
    .ttb-card:nth-child(5){animation-delay:.34s}

    .ttb-card-strip { position: absolute; left: 0; top: 0; bottom: 0; width: 5px; border-radius: 20px 0 0 20px; }
    .ttb-card:nth-child(1) .ttb-card-strip { background: linear-gradient(180deg,var(--purple),var(--blue)); }
    .ttb-card:nth-child(2) .ttb-card-strip { background: linear-gradient(180deg,var(--green),#06b6d4); }
    .ttb-card:nth-child(3) .ttb-card-strip { background: linear-gradient(180deg,var(--orange),var(--pink)); }
    .ttb-card:nth-child(4) .ttb-card-strip { background: linear-gradient(180deg,var(--red),var(--orange)); }
    .ttb-card:nth-child(5) .ttb-card-strip { background: linear-gradient(180deg,#06b6d4,var(--green)); }

    .ttb-card-head {
      display: flex; align-items: center; gap: 16px;
      padding: 20px 24px 20px 28px; background: #fafbff;
      border-bottom: 1.5px solid #e0e7ff; cursor: pointer; user-select: none;
    }
    .ttb-card.open .ttb-card-head { background: #f5f3ff; border-color: #c4b5fd; }

    .ttb-card-num {
      min-width: 44px; height: 44px; border-radius: 14px;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Fredoka One', cursive; font-size: 18px; flex-shrink: 0;
      box-shadow: 0 4px 14px rgba(0,0,0,.12);
    }
    .ttb-card:nth-child(1) .ttb-card-num { background: linear-gradient(135deg,#818cf8,#6366f1); color:#fff; }
    .ttb-card:nth-child(2) .ttb-card-num { background: linear-gradient(135deg,#34d399,#059669); color:#fff; }
    .ttb-card:nth-child(3) .ttb-card-num { background: linear-gradient(135deg,#fb923c,#f59e0b); color:#fff; }
    .ttb-card:nth-child(4) .ttb-card-num { background: linear-gradient(135deg,#f87171,#ef4444); color:#fff; }
    .ttb-card:nth-child(5) .ttb-card-num { background: linear-gradient(135deg,#22d3ee,#06b6d4); color:#fff; }

    .ttb-card-title { font-family: 'Fredoka One', cursive; font-size: 18px; color: #312e81; flex: 1; letter-spacing: .01em; }
    .ttb-card-chevron { color: var(--purple2); transition: transform .3s; flex-shrink: 0; }
    .ttb-card.open .ttb-card-chevron { transform: rotate(180deg); }

    .ttb-card-body { max-height: 0; overflow: hidden; transition: max-height .45s cubic-bezier(.4,0,.2,1); }
    .ttb-card.open .ttb-card-body { max-height: 9999px; }

    .ttb-card-content { padding: 28px 32px 36px; color: #374151; font-size: 15px; line-height: 1.9; }
    .ttb-card-content h1,.ttb-card-content h2,.ttb-card-content h3 { font-family: 'Fredoka One', cursive; color: #312e81; margin: 28px 0 12px; }
    .ttb-card-content h1 { font-size: 22px; }
    .ttb-card-content h2 { font-size: 19px; }
    .ttb-card-content h3 { font-size: 16px; }
    .ttb-card-content h1:first-child,.ttb-card-content h2:first-child { margin-top: 0; }
    .ttb-card-content p { margin-bottom: 14px; color: #4b5563; }
    .ttb-card-content ul { padding-left: 4px; margin-bottom: 14px; list-style: none; }
    .ttb-card-content ul li { position: relative; padding-left: 26px; margin-bottom: 10px; color: #4b5563; }
    .ttb-card-content ul li::before { content:''; position:absolute; left:0; top:8px; width:10px; height:10px; border-radius:50%; background:linear-gradient(135deg,var(--purple),var(--blue)); }
    .ttb-card-content ol { padding-left: 22px; margin-bottom: 14px; }
    .ttb-card-content ol li { color: #4b5563; margin-bottom: 8px; line-height: 1.7; }
    .ttb-card-content strong { color: #312e81; font-weight: 800; }
    .ttb-card-content hr { border: none; border-top: 2px dashed #e0e7ff; margin: 24px 0; }
    .ttb-card-content blockquote { background:#f5f3ff; border-left:4px solid var(--purple); border-radius:0 12px 12px 0; padding:14px 18px; margin:16px 0; color:#4c1d95; font-weight:600; }

    /* ══ EMPTY STATE ══ */
    .ttb-empty { text-align:center; padding:80px 20px; color:#64748b; background:var(--white); border-radius:20px; border:2px dashed #c4b5fd; }
    .ttb-empty-icon { font-size:56px; margin-bottom:16px; }
    .ttb-empty p { font-size:15px; font-weight:600; }

    /* ══ FOOTER — identik jadwal pelajaran ══ */
    .sdn-footer { background:linear-gradient(160deg,#0d2b55 0%,#0a1f3d 60%,#061529 100%); color:rgba(255,255,255,0.75); font-family:'Poppins',sans-serif; position:relative; padding-top:0; }
    .sdn-footer-wave { line-height:0; margin-bottom:-2px; }
    .sdn-footer-wave svg { display:block; width:100%; }
    .sdn-footer-logo { display:flex; align-items:center; gap:12px; margin-bottom:16px; }
    .sdn-footer-logo img { height:52px; width:auto; }
    .sdn-footer-logo-title { display:block; font-size:14px; font-weight:800; color:#fff; line-height:1.3; }
    .sdn-footer-logo-sub   { display:block; font-size:10px; font-weight:500; color:rgba(255,255,255,0.5); letter-spacing:1px; text-transform:uppercase; }
    .sdn-footer-desc { font-size:13px; line-height:1.9; color:rgba(255,255,255,0.55); margin-bottom:20px; }
    .sdn-footer-socials { display:flex; gap:10px; }
    .sdn-footer-socials a { width:38px; height:38px; border-radius:50%; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.15); color:#fff; display:flex; align-items:center; justify-content:center; font-size:14px; text-decoration:none; transition:all .3s; }
    .sdn-footer-socials a:hover { background:#f5a623; border-color:#f5a623; transform:translateY(-3px); }
    .sdn-footer-heading { font-size:15px; font-weight:700; color:#fff; margin-bottom:20px; padding-bottom:10px; position:relative; }
    .sdn-footer-heading::after { content:''; position:absolute; left:0; bottom:0; width:36px; height:3px; background:#f5a623; border-radius:2px; }
    .sdn-footer-links { list-style:none; padding:0; margin:0; }
    .sdn-footer-links li { margin-bottom:10px; }
    .sdn-footer-links a { color:rgba(255,255,255,0.6); text-decoration:none; font-size:13px; transition:all .3s; display:flex; align-items:center; gap:8px; }
    .sdn-footer-links a i { font-size:10px; color:#f5a623; }
    .sdn-footer-links a:hover { color:#f5a623; padding-left:4px; }
    .sdn-footer-contact { list-style:none; padding:0; margin:0; display:flex; flex-direction:column; gap:16px; }
    .sdn-footer-contact li { display:flex; align-items:flex-start; gap:12px; }
    .sdn-contact-icon { width:36px; height:36px; min-width:36px; background:rgba(245,166,35,0.15); border:1px solid rgba(245,166,35,0.3); border-radius:8px; display:flex; align-items:center; justify-content:center; color:#f5a623; font-size:13px; }
    .sdn-footer-contact strong { display:block; font-size:12px; font-weight:600; color:#fff; margin-bottom:2px; }
    .sdn-footer-contact span,.sdn-footer-contact a { font-size:12px; color:rgba(255,255,255,0.55); text-decoration:none; transition:color .3s; }
    .sdn-footer-contact a:hover { color:#f5a623; }
    .sdn-footer-map { border-radius:14px; overflow:hidden; border:2px solid rgba(255,255,255,0.1); }
    .sdn-footer-map iframe { display:block; filter:grayscale(20%) contrast(1.05); }
    .sdn-copyright { border-top:1px solid rgba(255,255,255,0.08); padding:18px 0; margin-top:10px; }
    .sdn-copyright p { margin:0; font-size:13px; color:rgba(255,255,255,0.45); }
    .sdn-copyright-links { list-style:none; padding:0; margin:0; display:flex; gap:20px; justify-content:flex-end; }
    .sdn-copyright-links a { font-size:12px; color:rgba(255,255,255,0.4); text-decoration:none; transition:color .3s; }
    .sdn-copyright-links a:hover { color:#f5a623; }

    @media (max-width:576px) {
      .sdn-copyright-links { justify-content:center; margin-top:8px; }
      .sdn-copyright p { text-align:center; }
      .ttb-card-head { padding:16px 16px 16px 24px; gap:12px; }
      .ttb-card-content { padding:20px 18px 28px; }
      .ttb-hero { padding:60px 18px 48px; }
    }
  </style>
</head>
<body>

{{-- ══════════════════════════════
     NAVBAR — copy dari jadwal pelajaran
══════════════════════════════ --}}
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
            <span class="brand-title" style="font-size:15px;font-weight:800;letter-spacing:.3px;transition:color .3s;font-family:'Poppins',sans-serif;">SDN 1 Mangkubumi</span>
            <span class="brand-sub"   style="font-size:10px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;transition:color .3s;font-family:'Poppins',sans-serif;">Kecamatan Sadananya</span>
          </div>
        </a>

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
{{-- End Navbar --}}

{{-- Preloader --}}
<div class="preloader">
  <div class="loader"><div class="shadow"></div><div class="box"></div></div>
</div>

<script>
  const nav = document.getElementById('mainNav');
  window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 50));
</script>

{{-- ══════════════════════════════
     HERO
══════════════════════════════ --}}
<div class="ttb-hero">
  <div class="ttb-hero-blob1"></div>
  <div class="ttb-hero-blob2"></div>
  <div class="ttb-hero-stars"></div>
  <div class="ttb-hero-badge">
    <div class="ttb-hero-badge-dot"></div>
    Berlaku Aktif &bull; Tahun Ajaran {{ date('Y') }}/{{ date('Y') + 1 }}
  </div>
  <h1 class="ttb-hero-title">
    Tata Tertib Sekolah<br>
    <span class="accent">SD NEGERI 1 MANGKUBUMI</span> ✨
  </h1>
  <p class="ttb-hero-sub">
    Yuk patuhi peraturan sekolah agar kita semua bisa belajar dengan nyaman, aman, dan menyenangkan!
  </p>
  <div class="ttb-hero-emojis">
    <span>📚</span><span>🎒</span><span>🏫</span>
  </div>
</div>

{{-- ══════════════════════════════
     CONTENT
══════════════════════════════ --}}
<div class="ttb-container">

  @if($peraturan->isEmpty())
    <div class="ttb-empty">
      <div class="ttb-empty-icon">📋</div>
      <p>Belum ada peraturan yang ditambahkan.</p>
    </div>
  @else
    

    @foreach($peraturan as $index => $item)
      <div class="ttb-card {{ $index === 0 ? 'open' : '' }}" id="card-{{ $index }}">
        <div class="ttb-card-strip"></div>
        <div class="ttb-card-head" onclick="toggleCard({{ $index }})">
          
          <div class="ttb-card-title">{{ $item->nama_peraturan }}</div>
          <svg class="ttb-card-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"/>
          </svg>
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

{{-- ══════════════════════════════
     FOOTER — copy dari jadwal pelajaran
══════════════════════════════ --}}
<footer class="sdn-footer">
  <div class="sdn-footer-wave">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path d="M0,0 C480,80 960,0 1440,60 L1440,0 Z" fill="#f0f7ff"/>
    </svg>
  </div>
  <div class="container">
    <div class="row g-4 pt-2 pb-5">

      <div class="col-lg-3 col-md-6">
        <div class="sdn-footer-logo">
          <img src="assets/img/tutt.png" alt="logo">
          <div>
            <span class="sdn-footer-logo-title">{{ $data?->nama_sekolah ?? 'SDN 1 Mangkubumi' }}</span>
            <span class="sdn-footer-logo-sub">{{ $data?->kecamatan ?? 'Kecamatan Sadananya' }}</span>
          </div>
        </div>
        <p class="sdn-footer-desc">{{ $data?->deskripsi ?? 'Sekolah Dasar Negeri 1 Mangkubumi berkomitmen mencetak generasi unggul, berkarakter, dan berprestasi di bawah naungan pendidikan berkualitas.' }}</p>
        <div class="sdn-footer-socials">
          @if($contact?->facebook)  <a href="{{ $contact->facebook }}"  target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
          @if($contact?->instagram) <a href="{{ $contact->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
          @if($contact?->youtube)   <a href="{{ $contact->youtube }}"   target="_blank"><i class="fab fa-youtube"></i></a>@endif
          @if($contact?->tiktok)    <a href="{{ $contact->tiktok }}"    target="_blank"><i class="fab fa-tiktok"></i></a>@endif
        </div>
      </div>

      <div class="col-lg-2 col-md-6">
        <h4 class="sdn-footer-heading">Menu Utama</h4>
        <ul class="sdn-footer-links">
          <li><a href="{{ url('/') }}"><i class="fas fa-chevron-right"></i> Beranda</a></li>
          <li><a href="/visi-misi"><i class="fas fa-chevron-right"></i> Visi &amp; Misi</a></li>
          <li><a href="/berita"><i class="fas fa-chevron-right"></i> Berita</a></li>
          <li><a href="{{ route('ppdb.index') }}"><i class="fas fa-chevron-right"></i> PPDB</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Akademik</a></li>
          <li><a href="#"><i class="fas fa-chevron-right"></i> Kesiswaan</a></li>
          <li><a href="{{ route('program-sekolah') }}"><i class="fas fa-chevron-right"></i> Program Sekolah</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4 class="sdn-footer-heading">Kontak Kami</h4>
        <ul class="sdn-footer-contact">
          @if($contact?->address)
            <li><div class="sdn-contact-icon"><i class="fas fa-map-marker-alt"></i></div><div><strong>Alamat</strong><span>{{ $contact->address }}</span></div></li>
          @endif
          @if($contact?->phone)
            <li><div class="sdn-contact-icon"><i class="fas fa-phone-alt"></i></div><div><strong>Telepon</strong><span><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></span></div></li>
          @endif
          @if($contact?->whatsapp)
            <li><div class="sdn-contact-icon"><i class="fab fa-whatsapp"></i></div><div><strong>WhatsApp</strong><span><a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->whatsapp) }}" target="_blank">{{ $contact->whatsapp }}</a></span></div></li>
          @endif
          @if($contact?->email)
            <li><div class="sdn-contact-icon"><i class="fas fa-envelope"></i></div><div><strong>Email</strong><span><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></span></div></li>
          @endif
          @if($contact?->working_hours)
            <li><div class="sdn-contact-icon"><i class="fas fa-clock"></i></div><div><strong>Jam Operasional</strong><span>{{ $contact->working_hours }}</span></div></li>
          @endif
        </ul>
      </div>

      <div class="col-lg-4 col-md-6">
        <h4 class="sdn-footer-heading">Lokasi Sekolah</h4>
        <div class="sdn-footer-map">
          @if($contact?->google_maps_link)
            <iframe src="{{ $contact->google_maps_link }}" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          @else
            <div style="background:rgba(255,255,255,0.05);height:220px;display:flex;align-items:center;justify-content:center;border-radius:8px;color:#6b7280;font-size:13px;">
              <i class="fas fa-map-marked-alt" style="margin-right:8px"></i> Lokasi belum diatur
            </div>
          @endif
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
            <li><a href="#">Syarat &amp; Ketentuan</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

{{-- ══ Scripts ══ --}}
<script>
  function toggleCard(index) {
    document.getElementById('card-' + index).classList.toggle('open');
  }
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