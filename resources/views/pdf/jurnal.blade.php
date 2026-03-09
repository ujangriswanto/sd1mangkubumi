<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jurnal Harian</title>
    <style>
        body {
            font-family: sans-serif;
        }

        h2 {
            text-align: center;
        }

        .box {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h2>JURNAL HARIAN GURU</h2>

<div class="box">
    <b>Guru:</b> {{ $jurnal->teacherStaff->name ?? '-' }}
</div>

<div class="box">
    <b>Kelas:</b> {{ $jurnal->schoolClass->name ?? '-' }}
</div>

<div class="box">
    <b>Semester:</b> {{ $jurnal->semester }}
</div>

<div class="box">
    <b>Tanggal:</b> {{ $jurnal->tanggal }}
</div>

<hr>

<h4>Judul Pembelajaran</h4>
{{ $jurnal->judul_pembelajaran }}

<h4>Materi Pokok</h4>
{{ $jurnal->materi_pokok }}

<h4>Kegiatan</h4>
{!! $jurnal->kegiatan !!}

<h4>Penilaian</h4>
{{ $jurnal->penilaian }}

</body>
</html>