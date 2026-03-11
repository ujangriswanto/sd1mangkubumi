<?php

namespace App\Http\Controllers;

use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;

class JadwalPelajaranController extends Controller
{
    public function index(Request $request)
    {
        $query = JadwalPelajaran::query();

        if ($request->filled('hari')) {
            $query->where('hari', $request->input('hari'));
        }

        if ($request->filled('kelas')) {
            $query->where('kelas', $request->input('kelas'));
        }

        if ($request->filled('pelajaran')) {
            $query->where('pelajaran', $request->input('pelajaran'));
        }

        if ($request->filled('tahun_pelajaran')) {
            $query->where('tahun_pelajaran', $request->input('tahun_pelajaran'));
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('kelas', 'like', "%{$search}%")
                  ->orWhere('pelajaran', 'like', "%{$search}%")
                  ->orWhere('hari', 'like', "%{$search}%")
                  ->orWhere('waktu', 'like', "%{$search}%")
                  ->orWhere('tahun_pelajaran', 'like', "%{$search}%");
            });
        }

        $sortBy       = $request->input('sort_by', 'hari');
        $sortDir      = $request->input('sort_dir', 'asc');
        $allowedSorts = ['hari', 'kelas', 'jam_ke', 'pelajaran', 'tahun_pelajaran'];

        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortDir);
        }

        $jadwal = $query->paginate($request->input('per_page', 10));

        return response()->json([
            'status'  => 'success',
            'message' => 'Data jadwal pelajaran berhasil diambil',
            'data'    => $jadwal,
        ]);
    }

    public function jadwal()
    {
        $jadwal = JadwalPelajaran::orderByRaw("FIELD(hari,'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu')")
            ->orderBy('waktu', 'asc')  // ← diubah dari jam_ke ke waktu
            ->get();

        return view('JadwalPelajaran.JadwalPelajaran', compact('jadwal'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kelas'           => 'required|string|in:Kelas 1,Kelas 2,Kelas 3,Kelas 4,Kelas 5,Kelas 6',
            'waktu'           => 'required|string|max:50',
            'pelajaran'       => 'required|string',
            'jam_ke'          => 'required|integer|min:1',
            'hari'            => 'required|string|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'tahun_pelajaran' => 'required|string|max:9',
        ]);

        $jadwal = JadwalPelajaran::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Jadwal pelajaran berhasil ditambahkan',
            'data'    => $jadwal,
        ], 201);
    }

    public function show(string $id)
    {
        $jadwal = JadwalPelajaran::find($id);

        if (!$jadwal) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data jadwal pelajaran tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Data jadwal pelajaran ditemukan',
            'data'    => $jadwal,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $jadwal = JadwalPelajaran::find($id);

        if (!$jadwal) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data jadwal pelajaran tidak ditemukan',
            ], 404);
        }

        $validated = $request->validate([
            'kelas'           => 'sometimes|required|string|in:Kelas 1,Kelas 2,Kelas 3,Kelas 4,Kelas 5,Kelas 6',
            'waktu'           => 'sometimes|required|string|max:50',
            'pelajaran'       => 'sometimes|required|string',
            'jam_ke'          => 'sometimes|required|integer|min:1',
            'hari'            => 'sometimes|required|string|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'tahun_pelajaran' => 'sometimes|required|string|max:9',
        ]);

        $jadwal->update($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Jadwal pelajaran berhasil diperbarui',
            'data'    => $jadwal,
        ]);
    }

    public function destroy(string $id)
    {
        $jadwal = JadwalPelajaran::find($id);

        if (!$jadwal) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Data jadwal pelajaran tidak ditemukan',
            ], 404);
        }

        $jadwal->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Jadwal pelajaran berhasil dihapus',
        ]);
    }

    public function byKelas(string $kelas)
    {
        $jadwal = JadwalPelajaran::where('kelas', $kelas)
            ->orderByRaw("FIELD(hari,'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu')")
            ->orderBy('waktu', 'asc')  // ← diubah dari jam_ke ke waktu
            ->get();

        return response()->json([
            'status'  => 'success',
            'message' => "Jadwal pelajaran {$kelas} berhasil diambil",
            'data'    => $jadwal,
        ]);
    }

    public function byHari(string $hari)
    {
        $jadwal = JadwalPelajaran::where('hari', $hari)
            ->orderBy('kelas')
            ->orderBy('waktu', 'asc')  // ← diubah dari jam_ke ke waktu
            ->get();

        return response()->json([
            'status'  => 'success',
            'message' => "Jadwal pelajaran hari {$hari} berhasil diambil",
            'data'    => $jadwal,
        ]);
    }
}