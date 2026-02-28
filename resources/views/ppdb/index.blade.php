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



  <section class="hero-full hero-full--news" style="--bg:url('{{ asset('images/hero-berita.jpg') }}');">
  <div class="hero-full__overlay"></div>

  <div class="hero-full__bubbles" aria-hidden="true">
    <span class="b1"></span>
    <span class="b2"></span>
  </div>

  <div class="hero-full__content">
    <div class="hero-full__titlebox">
        <h1>BERITA TERBARU</h1>
    </div>
    <div class="hero-full__actions">
        <a class="hero-btn hero-btn--ghost" href="{{ url('/') }}">← Kembali ke Beranda</a>
    </div>
</div>

  <svg class="hero-full__wave" viewBox="0 0 1440 120" preserveAspectRatio="none" aria-hidden="true">
    <path d="M0,80 C240,120 480,120 720,90 C960,60 1200,40 1440,60 L1440,120 L0,120 Z"></path>
  </svg>
</section>

<section class="berita2-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
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

                        <h3 class="text-center mb-4">Formulir Pendaftaran PPDB</h3>

                        <div class="progress mb-4" style="height:8px;">
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
                                <h5>Data Siswa</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label>Nama Lengkap *</label>
                                        <input type="text" name="student_name" value="{{ old('student_name') }}" class="form-control" required>
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
                                        <input type="text" name="nisn" value="{{ old('nisn') }}" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>NIK</label>
                                        <input type="text" name="nik" value="{{ old('nik') }}" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>No KK *</label>
                                        <input type="text" name="no_kk" value="{{ old('no_kk') }}" class="form-control" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label>No Akta Lahir</label>
                                        <input type="text" name="no_akta_lahir" value="{{ old('no_akta_lahir') }}" class="form-control">
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
                                        <input type="number" name="child_order" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Tempat Tinggal</label>
                                        <input type="text" name="residence_type" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Transportasi</label>
                                        <input type="text" name="transportation" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Berkebutuhan Khusus</label>
                                        <input type="text" name="special_needs" class="form-control">
                                    </div>

                                </div>

                                <div class="text-end mt-4">
                                    <button type="button" class="btn btn-warning" onclick="nextStep()">Selanjutnya →</button>
                                </div>
                            </div>

                            {{-- ================= STEP 2 ================= --}}
                            <div class="step d-none" id="step-2">
                                <h5>Data Orang Tua</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label>Nama Ayah</label>
                                        <input type="text" name="father_name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>NIK Ayah</label>
                                        <input type="text" name="father_nik" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun Lahir Ayah</label>
                                        <input type="number" name="father_birth_year" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pendidikan Ayah</label>
                                        <input type="text" name="father_education" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" name="father_occupation" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Penghasilan Ayah</label>
                                        <input type="text" name="father_income" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Berkebutuhan Khusus Ayah</label>
                                        <input type="text" name="father_special_needs" class="form-control">
                                    </div>

                                    <hr class="mt-4">

                                    <div class="col-md-6">
                                        <label>Nama Ibu</label>
                                        <input type="text" name="mother_name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>NIK Ibu</label>
                                        <input type="text" name="mother_nik" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun Lahir Ibu</label>
                                        <input type="number" name="mother_birth_year" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pendidikan Ibu</label>
                                        <input type="text" name="mother_education" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" name="mother_occupation" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Penghasilan Ibu</label>
                                        <input type="text" name="mother_income" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Berkebutuhan Khusus Ibu</label>
                                        <input type="text" name="mother_special_needs" class="form-control">
                                    </div>

                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-secondary" onclick="prevStep()">← Kembali</button>
                                    <button type="button" class="btn btn-warning" onclick="nextStep()">Selanjutnya →</button>
                                </div>
                            </div>

                            {{-- ================= STEP 3 ================= --}}
                            <div class="step d-none" id="step-3">
                                <h5>Wali & Kontak</h5>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label>Nama Wali</label>
                                        <input type="text" name="guardian_name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>NIK Wali</label>
                                        <input type="text" name="guardian_nik" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tahun Lahir Wali</label>
                                        <input type="number" name="guardian_birth_year" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pendidikan Wali</label>
                                        <input type="text" name="guardian_education" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pekerjaan Wali</label>
                                        <input type="text" name="guardian_occupation" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Penghasilan Wali</label>
                                        <input type="text" name="guardian_income" class="form-control">
                                    </div>

                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <button type="button" class="btn btn-secondary" onclick="prevStep()">← Kembali</button>
                                    <button type="button" class="btn btn-warning" onclick="nextStep()">Selanjutnya →</button>
                                </div>
                            </div>

                            {{-- ================= STEP 4 ================= --}}
                            <div class="step d-none" id="step-4">
                                <h5>Dokumen dan Kontak</h5>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label>No HP *</label>
                                        <input type="text" name="phone" class="form-control" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <textarea name="address" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Upload KK *</label>
                                        <input type="file" name="kk_file" class="form-control" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label>
                                            <input type="checkbox" id="has_kip" name="has_kip" value="1">
                                        Memiliki KIP
                                        </label>
                                    </div>
                                    <div class="col-md-6 d-none" id="kipUpload">
                                        <label>Upload KIP</label>
                                        <input type="file" name="kip_file" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label>
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
                                    <button type="submit" class="btn btn-success px-4">Kirim Pendaftaran</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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