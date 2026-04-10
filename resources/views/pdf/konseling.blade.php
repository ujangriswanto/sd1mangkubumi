{{-- {{ dd($konselings) }} --}}
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }
        h3 {
            text-align: center;
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>

<h3>PELAKSANAAN PROGRAM BIMBINGAN DAN KONSELING</h3>
<p>Kelas/Semester: {{ $kelas ?? '-' }}</p>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Uraian Masalah</th>
            <th colspan="2">Bentuk Bimbingan</th>
            <th>Penyelesaian</th>
            <th>Tindak Lanjut</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>Individu</th>
            <th>Kelompok</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($konselings as $item)
        <tr>
            <td class="center">{{ $loop->iteration }}</td>
            <td>{{ $item->student->name ?? '-' }}</td>
            <td>{{ $item->uraian_masalah ?? '-' }}</td>
            <td class="center">{{ ($item->bimbingan_individu ?? false) ? 'V' : '' }}</td>
            <td class="center">{{ ($item->bimbingan_kelompok ?? false) ? 'V' : '' }}</td>
            <td>{{ $item->penyelesaian ?? '-' }}</td>
            <td>{{ $item->tindak_lanjut ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>