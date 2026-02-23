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
                    {!! $data->vision ?? 'Visi belum diisi.' !!}
                </div>
            </div>

            <div class="visimisi-card card-misi">
                <div class="visimisi-icon">📋</div>
                <h3>Misi</h3>
                <div class="visimisi-content">
                    {!! $data->mission ?? 'Misi belum diisi.' !!}
                </div>
            </div>

        </div>
    </div>
</section>

</body>
</html>