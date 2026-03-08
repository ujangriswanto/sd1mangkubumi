<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kurikulum - {{ $data->school_name ?? 'SDN 1 Mangkubumi' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/tutt.png">
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

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="shadow"></div>
        <div class="box"></div>
    </div>
</div>

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
                </a>
                <style>
                    .navbar-nav .nav-link{font-size:15px !important;font-weight:600;letter-spacing:.3px;}
                    .dropdown-menu .nav-link{font-size:12px !important;}
                    .brand-title{font-size:13px !important;color:#ffffff;}
                    .brand-sub{font-size:9px !important;color:rgba(255,255,255,0.75);}
                    .scrolled .brand-title{color:#000000;}
                    .scrolled .brand-sub{color:rgba(0,0,0,0.845);}
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
                                <li class="nav-item"><a href="#" class="nav-link">Jadwal Pelajaran</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kalender Akademik</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Ekstrakurikuler</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Perpustakaan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Kesiswaan <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Total Data Siswa</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Total Data Siswa /Kelas</a></li>
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

<style>
:root{--navy:#0f1f3d;--navy-mid:#162d56;--gold:#c9a84c;--gold-lt:#e8c97a;--cream:#faf6ef;--white:#ffffff;--muted:#6b7280;--border:rgba(201,168,76,0.22);}
.kur-hero{background:linear-gradient(135deg,var(--navy) 0%,var(--navy-mid) 100%);padding:8rem 1.5rem 4rem;text-align:center;position:relative;overflow:hidden;}
.kur-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 60% 40%,rgba(201,168,76,.13) 0%,transparent 65%);}
.kur-hero-eyebrow{display:inline-block;background:rgba(201,168,76,.15);border:1px solid var(--border);color:var(--gold-lt);font-size:.72rem;font-weight:600;letter-spacing:.18em;text-transform:uppercase;padding:5px 18px;border-radius:2px;margin-bottom:1.4rem;}
.kur-hero h1{font-family:'Playfair Display',Georgia,serif;font-size:clamp(2rem,5vw,3.2rem);font-weight:900;color:var(--white);line-height:1.18;margin:0;}
.kur-hero h1 span{color:var(--gold);}
.kur-divider{width:56px;height:3px;background:linear-gradient(90deg,var(--gold),var(--gold-lt));border-radius:2px;margin:1.4rem auto 0;}
.kur-breadcrumb{background:var(--white);border-bottom:1px solid var(--border);padding:.75rem 0;}
.kur-breadcrumb .inner{max-width:1080px;margin:0 auto;padding:0 1.5rem;display:flex;align-items:center;gap:.5rem;font-size:.82rem;color:var(--muted);}
.kur-breadcrumb a{color:var(--gold);text-decoration:none;font-weight:500;}
.kur-breadcrumb .current{color:var(--navy);font-weight:600;}
.kur-wrap{max-width:1080px;margin:0 auto;padding:3.5rem 1.5rem 5rem;display:grid;grid-template-columns:1fr 300px;gap:2.5rem;align-items:start;}
.kur-card{background:var(--white);border:1px solid var(--border);border-radius:4px;overflow:hidden;box-shadow:0 6px 30px rgba(15,31,61,.07);}
.kur-card-header{background:linear-gradient(135deg,var(--navy),var(--navy-mid));padding:1.6rem 2rem;display:flex;align-items:center;gap:1rem;}
.kur-card-header-icon{width:44px;height:44px;border-radius:50%;background:rgba(201,168,76,.2);border:2px solid var(--gold);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.kur-card-header-icon svg{color:var(--gold);}
.kur-card-header h2{font-family:'Playfair Display',Georgia,serif;font-size:1.25rem;font-weight:700;color:var(--white);margin:0;}
.kur-card-header p{font-size:.8rem;color:rgba(255,255,255,.55);margin:2px 0 0;}
.kur-card-body{padding:2.2rem 2rem;}
.kur-content{font-size:.97rem;line-height:1.9;color:#2d3748;}
.kur-content p{margin-bottom:1.1rem;}
.kur-content h2,.kur-content h3{font-family:'Playfair Display',Georgia,serif;color:var(--navy);margin:1.8rem 0 .8rem;font-weight:700;}
.kur-content h2{font-size:1.3rem;}.kur-content h3{font-size:1.1rem;}
.kur-content ul,.kur-content ol{padding-left:1.5rem;margin-bottom:1.1rem;}
.kur-content li{margin-bottom:.45rem;}
.kur-content strong{color:var(--navy);}
.kur-content a{color:var(--gold);}
.kur-content blockquote{border-left:3px solid var(--gold);padding:.8rem 1.2rem;margin:1.4rem 0;background:var(--cream);border-radius:0 3px 3px 0;font-style:italic;color:var(--navy);}
.kur-content table{width:100%;border-collapse:collapse;margin-bottom:1.2rem;font-size:.9rem;}
.kur-content th{background:var(--navy);color:var(--white);padding:.65rem 1rem;text-align:left;font-weight:600;}
.kur-content td{padding:.6rem 1rem;border-bottom:1px solid rgba(0,0,0,.07);}
.kur-content tr:nth-child(even) td{background:var(--cream);}
.kur-empty{text-align:center;padding:3rem 1rem;color:var(--muted);}
.kur-empty svg{margin-bottom:1rem;color:var(--border);}
.kur-empty p{font-size:.9rem;}
.kur-sidebar{display:flex;flex-direction:column;gap:1.5rem;}
.kur-widget{background:var(--white);border:1px solid var(--border);border-radius:4px;overflow:hidden;box-shadow:0 4px 16px rgba(15,31,61,.06);}
.kur-widget-head{background:var(--navy);padding:.9rem 1.2rem;font-size:.72rem;font-weight:600;letter-spacing:.15em;text-transform:uppercase;color:var(--gold-lt);}
.kur-widget-body{padding:1.2rem;}
.school-info-logo{width:70px;height:70px;border-radius:50%;border:3px solid var(--gold);object-fit:cover;display:block;margin:0 auto 1rem;}
.school-info-logo-ph{width:70px;height:70px;border-radius:50%;border:3px solid var(--gold);background:rgba(201,168,76,.12);display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;font-family:'Playfair Display',serif;font-size:1.6rem;font-weight:900;color:var(--gold);}
.school-info-name{font-family:'Playfair Display',serif;font-weight:700;font-size:1rem;color:var(--navy);text-align:center;margin-bottom:.5rem;}
.hm-mini{display:flex;align-items:center;gap:.9rem;padding:1rem 1.2rem;}
.hm-mini-photo{width:52px;height:52px;border-radius:50%;border:2px solid var(--gold);object-fit:cover;flex-shrink:0;}
.hm-mini-ph{width:52px;height:52px;border-radius:50%;border:2px solid var(--gold);background:rgba(201,168,76,.12);display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.hm-mini-name{font-weight:700;font-size:.9rem;color:var(--navy);}
.hm-mini-role{font-size:.75rem;color:var(--muted);}
.kur-nav-list{list-style:none;padding:0;margin:0;}
.kur-nav-list li a{display:flex;align-items:center;gap:.6rem;padding:.65rem .5rem;font-size:.88rem;color:var(--navy);text-decoration:none;border-bottom:1px solid rgba(0,0,0,.05);transition:color .2s;font-weight:500;}
.kur-nav-list li:last-child a{border-bottom:none;}
.kur-nav-list li a:hover{color:var(--gold);}
.kur-nav-list li a svg{flex-shrink:0;color:var(--gold);}
@media(max-width:820px){.kur-wrap{grid-template-columns:1fr;}.kur-sidebar{order:-1;}}
</style>

<div class="kur-hero">
    <div class="kur-hero-eyebrow">Program Pembelajaran</div>
    <h1>Kuri<span>kulum</span></h1>
    <div class="kur-divider"></div>
</div>

<div class="kur-breadcrumb">
    <div class="inner">
        <a href="{{ url('/') }}">Beranda</a>
        <span style="color:var(--muted)">›</span>
        <span class="current">Kurikulum</span>
    </div>
</div>

<div class="kur-wrap">
    <main>
        <div class="kur-card">
            <div class="kur-card-header">
                <div class="kur-card-header-icon">
                    <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
                    </svg>
                </div>
                <div>
                    <h2>Kurikulum {{ $data->school_name ?? '' }}</h2>
                    <p>Informasi lengkap tentang program kurikulum yang diterapkan</p>
                </div>
            </div>
            <div class="kur-card-body">
                @if($data && $data->kurikulum)
                    <div class="kur-content">{!! $data->kurikulum !!}</div>
                @else
                    <div class="kur-empty">
                        <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        <p>Informasi kurikulum belum tersedia.</p>
                    </div>
                @endif
            </div>
        </div>
    </main>

    <aside class="kur-sidebar">
        <div class="kur-widget">
            <div class="kur-widget-head">Info Sekolah</div>
            <div class="kur-widget-body">
                @if($data && $data->logo)
                    <img src="{{ asset('storage/' . $data->logo) }}" alt="Logo" class="school-info-logo">
                @else
                    <div class="school-info-logo-ph">{{ $data ? strtoupper(substr($data->school_name ?? 'S', 0, 1)) : 'S' }}</div>
                @endif
                <div class="school-info-name">{{ $data->school_name ?? 'Nama Sekolah' }}</div>
            </div>
        </div>

        @if($data && $data->headmaster_name)
        <div class="kur-widget">
            <div class="kur-widget-head">Kepala Sekolah</div>
            <div class="hm-mini">
                @if($data->headmaster_photo)
                    <img src="{{ asset('storage/' . $data->headmaster_photo) }}" alt="Kepala Sekolah" class="hm-mini-photo">
                @else
                    <div class="hm-mini-ph">
                        <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                        </svg>
                    </div>
                @endif
                <div>
                    <div class="hm-mini-name">{{ $data->headmaster_name }}</div>
                    <div class="hm-mini-role">{{ $data->headmaster_nip ? 'NIP: '.$data->headmaster_nip : 'Kepala Sekolah' }}</div>
                </div>
            </div>
        </div>
        @endif

        <div class="kur-widget">
            <div class="kur-widget-head">Menu</div>
            <div class="kur-widget-body" style="padding:0">
                <ul class="kur-nav-list">
                    <li><a href="{{ url('/') }}">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>Beranda</a></li>
                    <li><a href="/visi-misi">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>Tentang Sekolah</a></li>
                    <li><a href="/berita">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 22h16a2 2 0 002-2V4a2 2 0 00-2-2H8a2 2 0 00-2 2v2"/><path d="M4 11h12M4 16h12M4 21V7a2 2 0 012-2"/></svg>Berita</a></li>
                    <li><a href="{{ route('program-sekolah') }}">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>Program Sekolah</a></li>
                    <li><a href="{{ route('kurikulum') }}" style="color:var(--gold)">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/><path d="M5 13.18v4L12 21l7-3.82v-4"/></svg>Kurikulum</a></li>
                    <li><a href="{{ route('ppdb.index') }}">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>PPDB</a></li>
                </ul>
            </div>
        </div>
    </aside>
</div>

<!-- FOOTER -->
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
                        <img src="assets/img/tutt.png" alt="logo" style="height:50px;width:auto;">
                        <div>
                            <span class="sdn-footer-logo-title">{{ $data?->nama_sekolah ?? 'SDN 1 Mangkubumi' }}</span>
                            <span class="sdn-footer-logo-sub">{{ $data?->kecamatan ?? 'Kecamatan Sadananya' }}</span>
                        </div>
                    </div>
                    <p class="sdn-footer-desc">{{ $data?->deskripsi ?? 'Sekolah Dasar Negeri 1 Mangkubumi berkomitmen mencetak generasi unggul, berkarakter, dan berprestasi.' }}</p>
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
                        <li><a href="{{ route('program-sekolah') }}"><i class="fas fa-chevron-right"></i> Program Sekolah</a></li>
                        <li><a href="{{ route('kurikulum') }}"><i class="fas fa-chevron-right"></i> Kurikulum</a></li>
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
.sdn-footer{background:linear-gradient(160deg,#0d2b55 0%,#0a1f3d 60%,#061529 100%);color:rgba(255,255,255,0.75);font-family:'Poppins',sans-serif;position:relative;padding-top:0;}
.sdn-footer-wave{line-height:0;margin-bottom:-2px;}
.sdn-footer-wave svg{display:block;width:100%;}
.sdn-footer-logo{display:flex;align-items:center;gap:12px;margin-bottom:16px;}
.sdn-footer-logo img{height:52px;width:auto;}
.sdn-footer-logo-title{display:block;font-size:14px;font-weight:800;color:#fff;line-height:1.3;}
.sdn-footer-logo-sub{display:block;font-size:10px;font-weight:500;color:rgba(255,255,255,0.5);letter-spacing:1px;text-transform:uppercase;}
.sdn-footer-desc{font-size:13px;line-height:1.9;color:rgba(255,255,255,0.55);margin-bottom:20px;}
.sdn-footer-socials{display:flex;gap:10px;}
.sdn-footer-socials a{width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);color:#fff;display:flex;align-items:center;justify-content:center;font-size:14px;text-decoration:none;transition:all .3s;}
.sdn-footer-socials a:hover{background:#f5a623;border-color:#f5a623;transform:translateY(-3px);}
.sdn-footer-heading{font-size:15px;font-weight:700;color:#fff;margin-bottom:20px;padding-bottom:10px;position:relative;}
.sdn-footer-heading::after{content:'';position:absolute;left:0;bottom:0;width:36px;height:3px;background:#f5a623;border-radius:2px;}
.sdn-footer-links{list-style:none;padding:0;margin:0;}
.sdn-footer-links li{margin-bottom:10px;}
.sdn-footer-links a{color:rgba(255,255,255,0.6);text-decoration:none;font-size:13px;transition:all .3s;display:flex;align-items:center;gap:8px;}
.sdn-footer-links a i{font-size:10px;color:#f5a623;}
.sdn-footer-links a:hover{color:#f5a623;padding-left:4px;}
.sdn-footer-contact{list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:16px;}
.sdn-footer-contact li{display:flex;align-items:flex-start;gap:12px;}
.sdn-contact-icon{width:36px;height:36px;min-width:36px;background:rgba(245,166,35,0.15);border:1px solid rgba(245,166,35,0.3);border-radius:8px;display:flex;align-items:center;justify-content:center;color:#f5a623;font-size:13px;}
.sdn-footer-contact strong{display:block;font-size:12px;font-weight:600;color:#fff;margin-bottom:2px;}
.sdn-footer-contact span,.sdn-footer-contact a{font-size:12px;color:rgba(255,255,255,0.55);text-decoration:none;transition:color .3s;}
.sdn-footer-contact a:hover{color:#f5a623;}
.sdn-footer-map{border-radius:14px;overflow:hidden;border:2px solid rgba(255,255,255,0.1);}
.sdn-footer-map iframe{display:block;border-radius:12px 12px 0 0;filter:grayscale(20%) contrast(1.05);}
.sdn-copyright{border-top:1px solid rgba(255,255,255,0.08);padding:18px 0;margin-top:10px;}
.sdn-copyright p{margin:0;font-size:13px;color:rgba(255,255,255,0.45);}
.sdn-copyright-links{list-style:none;padding:0;margin:0;display:flex;gap:20px;justify-content:flex-end;}
.sdn-copyright-links a{font-size:12px;color:rgba(255,255,255,0.4);text-decoration:none;transition:color .3s;}
.sdn-copyright-links a:hover{color:#f5a623;}
@media(max-width:576px){.sdn-copyright-links{justify-content:center;margin-top:8px;}.sdn-copyright p{text-align:center;}}
</style>

<!-- Floating WA -->
@if($contact?->whatsapp)
<style>
.wa-float{position:fixed;bottom:30px;right:30px;z-index:9999;}
.wa-float a{display:flex;align-items:center;justify-content:center;width:62px;height:62px;background:#25D366;border-radius:50%;box-shadow:0 6px 24px rgba(37,211,102,0.5);text-decoration:none;animation:wa-float-anim 3s ease-in-out infinite;}
.wa-float a:hover{transform:scale(1.12);}
.wa-float svg{width:34px;height:34px;fill:#fff;}
.wa-float a::before{content:'';position:absolute;width:62px;height:62px;border-radius:50%;background:rgba(37,211,102,0.35);animation:wa-pulse 2s ease-out infinite;}
.wa-float .wa-tooltip{position:absolute;right:74px;background:#fff;color:#111;padding:6px 14px;border-radius:20px;font-size:13px;font-weight:600;white-space:nowrap;box-shadow:0 4px 14px rgba(0,0,0,0.12);opacity:0;transform:translateX(10px);transition:opacity 0.3s ease,transform 0.3s ease;pointer-events:none;}
.wa-float:hover .wa-tooltip{opacity:1;transform:translateX(0);}
@keyframes wa-float-anim{0%,100%{transform:translateY(0);}50%{transform:translateY(-8px);}}
@keyframes wa-pulse{0%{transform:scale(1);opacity:0.7;}100%{transform:scale(1.8);opacity:0;}}
</style>
<div class="wa-float">
    @php
        $wa = $contact->whatsapp;
        if(str_contains($wa,'wa.me')||str_contains($wa,'http')){$waLink=$wa;}
        else{$waNumber=preg_replace('/[^0-9]/','',$wa);if(str_starts_with($waNumber,'0')){$waNumber='62'.substr($waNumber,1);}$waLink='https://wa.me/'.$waNumber;}
    @endphp
    <a href="{{ $waLink }}" target="_blank" rel="noopener">
        <span class="wa-tooltip">Chat Admin via WhatsApp Ya</span>
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.004 2.667C8.64 2.667 2.667 8.64 2.667 16c0 2.347.64 4.64 1.853 6.64L2.667 29.333l6.88-1.813A13.28 13.28 0 0 0 16.004 29.333c7.36 0 13.33-5.973 13.33-13.333 0-7.36-5.97-13.333-13.33-13.333zm0 24c-2.16 0-4.267-.587-6.107-1.693l-.44-.267-4.08 1.08 1.093-3.973-.28-.453A10.63 10.63 0 0 1 5.333 16c0-5.88 4.787-10.667 10.667-10.667 5.88 0 10.666 4.787 10.666 10.667S21.88 26.667 16 26.667zm5.84-7.987c-.32-.16-1.893-.933-2.187-1.04-.293-.107-.507-.16-.72.16-.213.32-.827 1.04-.987 1.24-.16.2-.32.213-.587.08-.293-.16-1.2-.44-2.28-1.4-.84-.747-1.413-1.667-1.573-1.947-.16-.293-.013-.453.12-.6.12-.12.293-.32.44-.48.146-.16.186-.267.28-.467.093-.2.053-.373-.027-.52-.08-.147-.72-1.733-.987-2.373-.267-.64-.52-.52-.72-.533-.186-.013-.4-.013-.613-.013-.213 0-.56.08-.853.373-.293.293-1.12 1.093-1.12 2.667 0 1.573 1.147 3.093 1.307 3.307.16.213 2.253 3.44 5.453 4.827.76.32 1.36.52 1.813.667.76.24 1.467.2 2.013.12.613-.093 1.893-.773 2.16-1.52.267-.747.267-1.387.187-1.52-.08-.133-.267-.213-.587-.373z"/>
        </svg>
    </a>
</div>
@endif

<!-- Scripts -->
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
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
