<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->title }} - SDN 1 Mangkubumi</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Nunito', sans-serif; background: #f8faff; color: #1e293b; }

/* ===== HERO ===== */
.db-hero {
    position: relative;
    height: 520px;
    overflow: hidden;
    background: #020c18;
}
.db-hero-img {
    width: 100%; height: 100%;
    object-fit: cover;
    opacity: 0.55;
    transform: scale(1.05);
    animation: heroZoom 8s ease-in-out infinite alternate;
}
@keyframes heroZoom {
    from { transform: scale(1.05); }
    to   { transform: scale(1.12); }
}
.db-hero-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(2,12,24,0.95) 0%, rgba(2,12,24,0.4) 60%, transparent 100%);
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
    color: rgba(255,255,255,0.7);
    text-decoration: none;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding: 8px 16px;
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 50px;
    backdrop-filter: blur(8px);
    background: rgba(255,255,255,0.08);
    transition: all 0.3s;
}
.db-back-btn:hover { background: rgba(255,255,255,0.15); color: #fff; }
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
    box-shadow: 0 4px 14px rgba(99,102,241,0.4);
}
.db-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(24px, 4vw, 42px);
    font-weight: 900;
    color: #fff;
    line-height: 1.25;
    margin-bottom: 20px;
    text-shadow: 0 2px 20px rgba(0,0,0,0.3);
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
    color: rgba(255,255,255,0.6);
    font-weight: 600;
}
.db-meta-item i { color: #6366f1; font-size: 12px; }

/* ===== LAYOUT ===== */
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

/* ===== ARTICLE ===== */
.db-article {
    background: #fff;
    border-radius: 24px;
    padding: 48px;
    box-shadow: 0 4px 30px rgba(0,0,0,0.07);
    border: 1px solid rgba(0,0,0,0.05);
}
.db-article-body {
    font-size: 16px;
    line-height: 1.9;
    color: #334155;
}
.db-article-body p { margin-bottom: 20px; }
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
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
}

/* Prev Next */
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
    transition: all 0.3s;
}
.db-prevnext a:hover { background: #6366f1; border-color: #6366f1; }
.db-prevnext a:hover span,
.db-prevnext a:hover p { color: #fff !important; }
.db-prevnext .db-pn-next { text-align: right; }
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

/* Foto bawah konten */
.db-bottom-photo {
    margin-top: 32px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    border: 1px solid #e2e8f0;
}
.db-bottom-photo img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
}
.db-bottom-photo:hover img { transform: scale(1.03); }
.db-photo-caption {
    background: #f8faff;
    padding: 12px 20px;
    font-size: 13px;
    color: #64748b;
    font-weight: 600;
    border-top: 1px solid #e2e8f0;
    margin: 0 !important;
}
.db-photo-caption i { color: #6366f1; margin-right: 6px; }

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
    transition: transform 0.3s, box-shadow 0.3s;
}
.db-share a:hover { transform: translateY(-3px); box-shadow: 0 6px 16px rgba(0,0,0,0.2); }
.db-share .fb  { background: #1877f2; }
.db-share .tw  { background: #1da1f2; }
.db-share .wa  { background: #25d366; }
.db-share .cp  { background: #64748b; cursor: pointer; }

/* ===== SIDEBAR ===== */
.db-sidebar { display: flex; flex-direction: column; gap: 24px; }
.db-widget {
    background: #fff;
    border-radius: 20px;
    padding: 28px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,0,0,0.05);
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
.db-related-list { display: flex; flex-direction: column; gap: 16px; }
.db-related-item {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    text-decoration: none;
    padding: 10px;
    border-radius: 12px;
    transition: background 0.3s;
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
    transition: all 0.3s;
}
.db-tag:hover { background: #6366f1; color: #fff; }

.db-author { display: flex; align-items: center; gap: 14px; }
.db-author-avatar {
    width: 52px; height: 52px;
    border-radius: 50%;
    background: linear-gradient(135deg, #6366f1, #4f46e5);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px;
    color: #fff;
    font-weight: 900;
    flex-shrink: 0;
}
.db-author-name { font-size: 15px; font-weight: 800; color: #0f172a; }
.db-author-role { font-size: 12px; color: #94a3b8; font-weight: 600; }

@media (max-width: 900px) {
    .db-layout { grid-template-columns: 1fr; }
    .db-hero-content { padding: 32px 24px; }
    .db-article { padding: 28px 24px; }
}
@media (max-width: 600px) {
    .db-hero { height: 400px; }
    .db-hero-title { font-size: 22px; }
    .db-prevnext { grid-template-columns: 1fr; }
}
</style>
</head>
<body>

{{-- ===== HERO ===== --}}
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
            <span class="db-meta-item">
                <i class="fas fa-user"></i> {{ $berita->author }}
            </span>
            <span class="db-meta-item">
                <i class="fas fa-calendar"></i> {{ $berita->created_at->format('d F Y') }}
            </span>
            <span class="db-meta-item">
                <i class="fas fa-eye"></i> {{ $berita->views ?? 0 }} Dibaca
            </span>
        </div>
    </div>
</div>

{{-- ===== MAIN LAYOUT ===== --}}
<div class="db-layout">

    {{-- ARTIKEL --}}
    <article class="db-article">
        {{-- FOTO ATAS KONTEN --}}
        <div class="db-bottom-photo">
            <img src="{{ asset('storage/' . $berita->thumbnail) }}"
                 alt="{{ $berita->title }}"
                 onerror="this.src='{{ asset('assets/img/depan.png') }}'">
            <p class="db-photo-caption">
                <i class="fas fa-camera"></i> {{ $berita->title }}
            </p>
        </div>

        <div class="db-article-body">
            {!! $berita->content !!}
        </div>

        {{-- PREV / NEXT --}}
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

        {{-- SHARE --}}
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

        {{-- Author --}}
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

        {{-- Berita Terkait --}}
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

        {{-- Kategori --}}
        <div class="db-widget">
            <div class="db-widget-title">Kategori</div>
            <div class="db-tags">
                @php
                    $kategoriList = \App\Models\Beritas::distinct()->pluck('category');
                @endphp
                @foreach($kategoriList as $kat)
                <a href="/berita?category={{ $kat }}" class="db-tag">{{ $kat }}</a>
                @endforeach
            </div>
        </div>

    </aside>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
