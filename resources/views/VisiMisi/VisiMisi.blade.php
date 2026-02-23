<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Visi & Misi</title>
</head>
<body>

<section class="visimisi-section">
    <div class="container">

        <div class="visimisi-header">
            <span class="visimisi-tag">🏫 Profil Sekolah</span>
            <h2>Visi & Misi <em>SDN 1 Mangkubumi</em></h2>
        </div>

        <div class="visimisi-grid">

            <div class="visimisi-card card-visi">
                <div class="visimisi-icon">🎯</div>
                <h3>Visi</h3>
                <div class="visimisi-content">
                    {{
                        collect(json_decode($data->vision ?? '{}', true)['content'] ?? [])
                        ->flatMap(fn($p) => collect($p['content'] ?? []))
                        ->pluck('text')
                        ->implode(' ')
                        ?: 'Visi belum diisi.'
                    }}
                </div>
            </div>

            <div class="visimisi-card card-misi">
                <div class="visimisi-icon">📋</div>
                <h3>Misi</h3>
                <div class="visimisi-content">
                    {{
                        collect(json_decode($data->mission ?? '{}', true)['content'] ?? [])
                        ->flatMap(fn($p) => collect($p['content'] ?? []))
                        ->pluck('text')
                        ->implode(' ')
                        ?: 'Misi belum diisi.'
                    }}
                </div>
            </div>

        </div>
    </div>
</section>

<style>
.visimisi-section{
    padding:80px 20px;
    background:linear-gradient(135deg,#eef2ff,#ffffff);
    font-family:'Poppins',sans-serif;
}

.visimisi-header{
    text-align:center;
    margin-bottom:50px;
}

.visimisi-tag{
    display:inline-block;
    background:#667eea;
    color:#fff;
    padding:6px 14px;
    border-radius:50px;
    font-size:12px;
    font-weight:600;
    margin-bottom:12px;
    box-shadow:0 4px 12px rgba(102,126,234,.3);
}

.visimisi-header h2{
    font-size:32px;
    font-weight:800;
    margin:0;
    color:#1e293b;
}

.visimisi-header em{
    color:#667eea;
    font-style:normal;
}

.visimisi-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:30px;
}

.visimisi-card{
    background:#fff;
    padding:35px 30px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
    transition:.35s ease;
    position:relative;
    overflow:hidden;
}

.visimisi-card::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius:20px;
    padding:2px;
    background:linear-gradient(130deg,#667eea,#764ba2,#667eea);
    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
    -webkit-mask-composite:xor;
            mask-composite:exclude;
    opacity:.3;
    transition:.3s;
}

.visimisi-card:hover::before{
    opacity:1;
}

.visimisi-card:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:0 25px 60px rgba(0,0,0,.15);
}

.visimisi-icon{
    font-size:40px;
    margin-bottom:15px;
}

.visimisi-card h3{
    font-size:22px;
    font-weight:700;
    margin-bottom:15px;
    color:#334155;
}

.visimisi-content{
    font-size:15px;
    line-height:1.8;
    color:#555;
}

.card-visi{
    background:linear-gradient(180deg,#ffffff,#f8faff);
}

.card-misi{
    background:linear-gradient(180deg,#ffffff,#fdf7ff);
}

@media(max-width:576px){
    .visimisi-header h2{
        font-size:24px;
    }
    .visimisi-card{
        padding:28px 22px;
    }
}
</style>

</body>
</html>