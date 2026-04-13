<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tata Tertib Siswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --navy:  #0f2540;
      --gold:  #c9a84c;
      --gold2: #e8c97a;
      --cream: #fdf8f0;
      --white: #ffffff;
      --gray:  #6b7280;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: var(--cream);
      min-height: 100vh;
      padding-bottom: 80px;
    }

    /* ── NAVBAR ── */
    .ttb-nav {
      background: var(--navy);
      padding: 0 32px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 60px;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 16px rgba(0,0,0,.2);
    }
    .ttb-nav-back {
      display: flex;
      align-items: center;
      gap: 6px;
      color: rgba(255,255,255,.55);
      font-size: 13px;
      text-decoration: none;
      transition: color .2s;
    }
    .ttb-nav-back:hover { color: var(--gold2); }

    /* ── HERO ── */
    .ttb-hero {
      background: var(--navy);
      position: relative;
      overflow: hidden;
      padding: 72px 24px 60px;
      text-align: center;
    }
    .ttb-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse 60% 80% at 20% 50%, rgba(201,168,76,.18) 0%, transparent 70%),
        radial-gradient(ellipse 50% 60% at 80% 30%, rgba(201,168,76,.12) 0%, transparent 60%);
    }
    .ttb-hero-pattern {
      position: absolute;
      inset: 0;
      opacity: .04;
      background-image: repeating-linear-gradient(45deg, #fff 0, #fff 1px, transparent 0, transparent 50%);
      background-size: 28px 28px;
    }
    .ttb-hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(201,168,76,.15);
      border: 1px solid rgba(201,168,76,.35);
      color: var(--gold2);
      font-size: 11px;
      font-weight: 600;
      letter-spacing: .12em;
      text-transform: uppercase;
      padding: 6px 16px;
      border-radius: 100px;
      margin-bottom: 20px;
      position: relative;
    }
    .ttb-hero-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 5vw, 3.2rem);
      font-weight: 900;
      color: var(--white);
      line-height: 1.15;
      position: relative;
      margin-bottom: 16px;
    }
    .ttb-hero-title span { color: var(--gold2); }
    .ttb-hero-sub {
      color: rgba(255,255,255,.55);
      font-size: 15px;
      max-width: 480px;
      margin: 0 auto;
      position: relative;
      line-height: 1.7;
    }
    .ttb-hero-line {
      width: 64px;
      height: 3px;
      background: linear-gradient(90deg, var(--gold), var(--gold2));
      border-radius: 4px;
      margin: 24px auto 0;
      position: relative;
    }

    /* ── CONTAINER ── */
    .ttb-container {
      max-width: 860px;
      margin: 0 auto;
      padding: 48px 20px 0;
    }

    /* ── CARD ── */
    .ttb-card {
      background: var(--white);
      border-radius: 20px;
      border: 1px solid rgba(201,168,76,.15);
      margin-bottom: 20px;
      overflow: hidden;
      box-shadow: 0 2px 20px rgba(15,37,64,.06);
      transition: transform .25s ease, box-shadow .25s ease;
      animation: fadeUp .5s ease both;
    }
    .ttb-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 36px rgba(15,37,64,.11);
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .ttb-card:nth-child(1) { animation-delay: .05s; }
    .ttb-card:nth-child(2) { animation-delay: .12s; }
    .ttb-card:nth-child(3) { animation-delay: .19s; }
    .ttb-card:nth-child(4) { animation-delay: .26s; }
    .ttb-card:nth-child(5) { animation-delay: .33s; }

    .ttb-card-head {
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 22px 28px;
      background: linear-gradient(135deg, #faf6ee 0%, #fdf9f2 100%);
      border-bottom: 1px solid rgba(201,168,76,.12);
      cursor: pointer;
      user-select: none;
    }
    .ttb-card-title {
      font-family: 'Playfair Display', serif;
      font-size: 17px;
      font-weight: 700;
      color: var(--navy);
      flex: 1;
    }
    .ttb-card-chevron {
      color: var(--gold);
      transition: transform .3s ease;
      flex-shrink: 0;
    }
    .ttb-card.open .ttb-card-chevron { transform: rotate(180deg); }

    .ttb-card-body {
      max-height: 0;
      overflow: hidden;
      transition: max-height .45s cubic-bezier(.4,0,.2,1);
    }
    .ttb-card.open .ttb-card-body { max-height: 9999px; }

    .ttb-card-content {
      padding: 28px 32px 36px;
      color: #374151;
      font-size: 15px;
      line-height: 1.9;
    }

    /* Rich text prose */
    .ttb-card-content h1,
    .ttb-card-content h2,
    .ttb-card-content h3 {
      font-family: 'Playfair Display', serif;
      color: var(--navy);
      margin: 28px 0 12px;
      line-height: 1.3;
    }
    .ttb-card-content h1 { font-size: 22px; }
    .ttb-card-content h2 { font-size: 19px; }
    .ttb-card-content h3 { font-size: 16px; }
    .ttb-card-content h2:first-child,
    .ttb-card-content h1:first-child { margin-top: 0; }
    .ttb-card-content p { margin-bottom: 14px; color: #4b5563; }
    .ttb-card-content ul { padding-left: 4px; margin-bottom: 14px; list-style: none; }
    .ttb-card-content ul li {
      position: relative;
      padding-left: 22px;
      margin-bottom: 8px;
      color: #4b5563;
    }
    .ttb-card-content ul li::before {
      content: '▸';
      position: absolute;
      left: 0;
      color: var(--gold);
      font-size: 11px;
      top: 4px;
    }
    .ttb-card-content ol { padding-left: 22px; margin-bottom: 14px; }
    .ttb-card-content ol li { color: #4b5563; margin-bottom: 8px; line-height: 1.7; }
    .ttb-card-content strong { color: var(--navy); font-weight: 600; }
    .ttb-card-content hr {
      border: none;
      border-top: 1px solid rgba(201,168,76,.2);
      margin: 24px 0;
    }

    /* ── EMPTY STATE ── */
    .ttb-empty {
      text-align: center;
      padding: 80px 20px;
      color: var(--gray);
      background: var(--white);
      border-radius: 20px;
      border: 1px dashed rgba(201,168,76,.3);
    }
    .ttb-empty-icon { font-size: 52px; margin-bottom: 16px; opacity: .5; }
    .ttb-empty p { font-size: 15px; }

    /* ── FOOTER ── */
    .ttb-footer-strip {
      max-width: 860px;
      margin: 40px auto 0;
      padding: 0 20px;
    }
    .ttb-footer-inner {
      background: var(--navy);
      border-radius: 16px;
      padding: 20px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }
    .ttb-footer-inner p { color: rgba(255,255,255,.45); font-size: 13px; }
    .ttb-footer-badge {
      background: rgba(201,168,76,.15);
      border: 1px solid rgba(201,168,76,.3);
      color: var(--gold2);
      font-size: 12px;
      font-weight: 600;
      padding: 5px 14px;
      border-radius: 100px;
    }

    @media (max-width: 600px) {
      .ttb-nav { padding: 0 16px; }
      .ttb-card-head { padding: 18px; }
      .ttb-card-content { padding: 20px 18px 28px; }
      .ttb-hero { padding: 52px 20px 48px; }
    }
  </style>
</head>
<body>

  {{-- Navbar --}}
  

  {{-- Hero --}}
  <div class="ttb-hero">
    <div class="ttb-hero-pattern"></div>
    <div class="ttb-hero-badge">Dokumen Resmi Sekolah</div>
    <h1 class="ttb-hero-title">Tata Tertib <span>Siswa</span></h1>
    <p class="ttb-hero-sub">Peraturan yang wajib diketahui dan dipatuhi oleh seluruh siswa demi terciptanya lingkungan belajar yang kondusif dan bermartabat.</p>
    <div class="ttb-hero-line"></div>
  </div>

  {{-- Content --}}
  <div class="ttb-container">

    @if($peraturan->isEmpty())
      <div class="ttb-empty">
        <div class="ttb-empty-icon">📋</div>
        <p>Belum ada peraturan yang ditambahkan.</p>
      </div>
    @else

      @foreach($peraturan as $index => $item)
        <div class="ttb-card {{ $index === 0 ? 'open' : '' }}" id="card-{{ $index }}">
          <div class="ttb-card-head" onclick="toggleCard({{ $index }})">
            <div class="ttb-card-title">{{ $item->nama_peraturan }}</div>
            <svg class="ttb-card-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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

  {{-- Footer --}}
  <div class="ttb-footer-strip">
    <div class="ttb-footer-inner">
      <p>© {{ date('Y') }} — Dokumen ini bersifat resmi dan mengikat seluruh siswa.</p>
      <span class="ttb-footer-badge">Berlaku Aktif</span>
    </div>
  </div>

  <script>
    function toggleCard(index) {
      document.getElementById('card-' + index).classList.toggle('open');
    }
  </script>

</body>
</html>
