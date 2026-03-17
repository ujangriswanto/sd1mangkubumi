<h2>Data Siswa</h2>

<p>Total siswa: {{ $total }}</p>

<h3>Jumlah per kelas</h3>

<ul>
@foreach($perClass as $kelas => $jumlah)
    <li>{{ $kelas }} : {{ $jumlah }}</li>
@endforeach
</ul>

<table border="1" width="100%" cellspacing="0" cellpadding="5">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>JK</th>
    </tr>

    @foreach($students as $s)
        <tr>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->schoolClass->name ?? '-' }}</td>
            <td>{{ $s->gender }}</td>
        </tr>
    @endforeach
</table>