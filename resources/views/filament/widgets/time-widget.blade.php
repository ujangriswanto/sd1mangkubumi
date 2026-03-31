<x-filament-widgets::widget>
    <div x-data="{
            jam: '',
            detik: '',
            hari: '',
            menit_deg: 0,
            jam_deg: 0,
            detik_deg: 0,
            init() {
                this.update();
                setInterval(() => this.update(), 1000);
            },
            update() {
                const now = new Date();
                const h = now.getHours();
                const m = now.getMinutes();
                const s = now.getSeconds();
                const days = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
                const months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                this.jam = String(h).padStart(2, '0') + ':' + String(m).padStart(2, '0');
                this.detik = String(s).padStart(2, '0');
                this.hari = days[now.getDay()] + ', ' + now.getDate() + ' ' + months[now.getMonth()] + ' ' + now.getFullYear();
                this.detik_deg = s * 6;
                this.menit_deg = m * 6 + s * 0.1;
                this.jam_deg = (h % 12) * 30 + m * 0.5;
            }
        }"
        style="
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4c1d95 100%);
            border-radius: 16px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            box-shadow: 0 10px 30px rgba(79, 70, 229, 0.4);
            overflow: hidden;
            position: relative;
        ">

        {{-- Background decoration --}}
        <div style="position:absolute; top:-20px; right:-20px; width:120px; height:120px; border-radius:50%; background:rgba(255,255,255,0.03);"></div>
        <div style="position:absolute; bottom:-30px; left:30px; width:80px; height:80px; border-radius:50%; background:rgba(255,255,255,0.03);"></div>

        {{-- Kiri: Digital Clock --}}
        <div style="z-index:1;">
            <p style="font-size:0.65rem; font-weight:400; color:#a5b4fc; letter-spacing:0.15em; text-transform:uppercase; margin-bottom:4px;">⏰ Waktu Sekarang</p>
            <div style="display:flex; align-items:baseline; gap:3px;">
                <span x-text="jam" style="font-size:2rem; font-weight:800; color:#ffffff; font-variant-numeric:tabular-nums; line-height:1; text-shadow: 0 0 20px rgba(167,139,250,0.8);"></span>
                <span style="font-size:1.5rem; font-weight:800; color:#a78bfa; line-height:1; animation: blink 1s step-end infinite;">:</span>
                <span x-text="detik" style="font-size:1.4rem; font-weight:700; color:#c4b5fd; font-variant-numeric:tabular-nums; line-height:1; align-self:flex-end; padding-bottom:3px;"></span>
            </div>
            <p x-text="hari" style="font-size:0.75rem; color:#c4b5fd; margin-top:6px; font-weight:500;"></p>
        </div>

        {{-- Kanan: Jam Analog SVG --}}
        <div style="z-index:1; flex-shrink:0;">
            <svg width="90" height="90" viewBox="0 0 90 90" style="filter: drop-shadow(0 0 10px rgba(167,139,250,0.5));">
                {{-- Background circle --}}
                <circle cx="45" cy="45" r="42" fill="rgba(255,255,255,0.05)" stroke="rgba(167,139,250,0.4)" stroke-width="1.5"/>
                <circle cx="45" cy="45" r="38" fill="rgba(255,255,255,0.03)" stroke="rgba(167,139,250,0.2)" stroke-width="0.5"/>

                {{-- Tick marks --}}
                @for ($i = 0; $i < 12; $i++)
                    <line
                        x1="45" y1="8" x2="45" y2="14"
                        stroke="{{ $i % 3 === 0 ? '#a78bfa' : 'rgba(167,139,250,0.4)' }}"
                        stroke-width="{{ $i % 3 === 0 ? '2' : '1' }}"
                        stroke-linecap="round"
                        transform="rotate({{ $i * 30 }} 45 45)"
                    />
                @endfor

                {{-- Hour hand --}}
                <line
                    x1="45" y1="45" x2="45" y2="22"
                    stroke="white"
                    stroke-width="3"
                    stroke-linecap="round"
                    :transform="`rotate(${jam_deg} 45 45)`"
                    style="transition: transform 0.5s ease;"
                />

                {{-- Minute hand --}}
                <line
                    x1="45" y1="45" x2="45" y2="16"
                    stroke="#a78bfa"
                    stroke-width="2"
                    stroke-linecap="round"
                    :transform="`rotate(${menit_deg} 45 45)`"
                    style="transition: transform 0.5s ease;"
                />

                {{-- Second hand --}}
                <line
                    x1="45" y1="52" x2="45" y2="12"
                    stroke="#f472b6"
                    stroke-width="1"
                    stroke-linecap="round"
                    :transform="`rotate(${detik_deg} 45 45)`"
                />

                {{-- Center dot --}}
                <circle cx="45" cy="45" r="3" fill="#a78bfa"/>
                <circle cx="45" cy="45" r="1.5" fill="white"/>
            </svg>
        </div>

    </div>

    <style>
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
    </style>
</x-filament-widgets::widget>