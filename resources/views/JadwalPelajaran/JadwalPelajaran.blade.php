<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .page-wrapper {
            position: relative; z-index: 1;
            padding: 40px 24px 80px;
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
            .page-wrapper { padding: 20px 12px 60px; }
        }
    </style>
</head>
<body>

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

            // Key = waktu (string unik), value = jam_ke — urut berdasarkan waktu
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
                            <!-- <th class="col-jam">Jam Ke</th> -->
                            @foreach($hariOrder as $h)
                                <th class="col-{{ strtolower($h) }}">{{ $h }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($waktuList as $waktu => $jamKe)
                            <tr>
                                <td class="col-waktu">{{ $waktu }}</td>
                                <!-- <td class="col-jam">{{ $jamKe }}</td> -->
                                @foreach($hariOrder as $h)
                                    @php
                                        // Query pakai waktu — pasti match 100%
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

</body>
</html>
