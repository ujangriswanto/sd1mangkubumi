<section class="berita2-section">
    <div class="container">

        <div class="berita2-header">
            <h2>Berita terbaru <em>SDN 1 Mangkubumi</em></h2>
            <p>Update kegiatan, pengumuman, dan informasi terkini seputar akademik dan prestasi SDN 1 Mangkubumi.</p>
        </div>

        <div class="berita2-grid">
            @forelse($berita as $item)
            <div class="berita2-card">
                <a href="/berita/{{ $item->slug }}" class="berita2-img-wrap">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                    <span class="berita2-badge">📰 {{ $item->category }}</span>
                </a>
                <div class="berita2-body">
                    <h3><a href="/berita/{{ $item->slug }}">{{ $item->title }}</a></h3>
                    <div class="berita2-footer">
                        <span>By <strong>{{ $item->author }}</strong></span>
                        <a href="/berita/{{ $item->slug }}" class="berita2-link">Baca selengkapnya →</a>
                    </div>
                </div>
            </div>
            @empty
            <p style="color:#64748b; grid-column: span 3; text-align:center;">Belum ada berita tersedia.</p>
            @endforelse
        </div>

        

    </div>
</section>

<style>
.berita2-section {
    padding: 90px 0 80px;
    background: #f0f6ff;
}

.berita2-header {
    text-align: center;
    margin-bottom: 52px;
}

.berita2-header h2 {
    font-size: clamp(28px, 4vw, 44px);
    font-weight: 900;
    color: #0f172a;
    margin-bottom: 14px;
    line-height: 1.2;
}

.berita2-header h2 em {
    font-style: italic;
    color: #1d4ed8;
    position: relative;
    font-weight: 900;
}

.berita2-header h2 em::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #1d4ed8, #60a5fa);
    border-radius: 2px;
}

.berita2-header p {
    color: #64748b;
    font-size: 15px;
    max-width: 480px;
    margin: 0 auto;
    line-height: 1.7;
}

.berita2-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 26px;
    margin-bottom: 48px;
}

.berita2-card {
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(29,78,216,0.07);
    transition: transform .3s ease, box-shadow .3s ease;
    border: 1px solid rgba(29,78,216,0.07);
}

.berita2-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(29,78,216,0.15);
}

.berita2-img-wrap {
    display: block;
    position: relative;
    overflow: hidden;
    height: 200px;
    text-decoration: none;
}

.berita2-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
    display: block;
}

.berita2-card:hover .berita2-img-wrap img {
    transform: scale(1.07);
}

.berita2-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    background: #1d4ed8;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    padding: 5px 14px;
    border-radius: 50px;
    z-index: 1;
    box-shadow: 0 4px 12px rgba(29,78,216,0.4);
}

.berita2-body {
    padding: 20px 22px 22px;
    display: flex;
    flex-direction: column;
    min-height: 120px;
    justify-content: space-between;
}

.berita2-body h3 {
    font-size: 15px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.5;
    margin-bottom: 16px;
    flex: 1;
}

.berita2-body h3 a {
    color: inherit;
    text-decoration: none;
    transition: color .2s;
}

.berita2-body h3 a:hover {
    color: #1d4ed8;
}

.berita2-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 12px;
    border-top: 1px solid #e0eaff;
}

.berita2-footer span {
    font-size: 12px;
    color: #94a3b8;
}

.berita2-footer strong {
    color: #475569;
}

.berita2-link {
    font-size: 12px;
    font-weight: 600;
    color: #1d4ed8;
    text-decoration: none;
    white-space: nowrap;
    transition: color .2s;
}

.berita2-link:hover {
    color: #1e40af;
}

.berita2-btn-wrap {
    text-align: center;
}

.berita2-btn {
    display: inline-block;
    background: linear-gradient(135deg, #1d4ed8, #3b82f6);
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    padding: 16px 44px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0 8px 28px rgba(29,78,216,0.35);
    transition: all .3s ease;
}

.berita2-btn:hover {
    background: linear-gradient(135deg, #1e40af, #2563eb);
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 14px 36px rgba(29,78,216,0.45);
}

@media (max-width: 1024px) {
    .berita2-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 640px) {
    .berita2-grid { grid-template-columns: 1fr; }
}
</style>