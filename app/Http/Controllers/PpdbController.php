<?php

namespace App\Http\Controllers;

use App\Models\PpdbRegistration;
use App\Models\PpdbParent;
use App\Models\PpdbWali;
use App\Models\PpdbSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PpdbController extends Controller
{
    public function index()
    {
        $ppdb = PpdbSetting::first();
        return view('ppdb.index', compact('ppdb'));
    }

    public function store(Request $request)
    {
        // Honeypot check
        if ($request->filled('website')) {
            abort(403);
        }
        
        $ppdb = PpdbSetting::first();

        if (!$ppdb || !$ppdb->is_open) {
            return back()->with('error', 'PPDB sedang ditutup.');
        }

        $validated = $request->validate([
            // DATA SISWA
            'student_name' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'birth_date' => 'nullable|date',
            'nisn' => 'nullable|string|max:20',
            'nik' => 'nullable|string|max:30',
            'no_kk' => 'required|string|max:30',
            'no_akta_lahir' => 'nullable|string|max:50',
            'religion' => 'nullable|string',
            'citizenship' => 'nullable|string',
            'special_needs' => 'nullable|string',
            'residence_type' => 'nullable|string',
            'transportation' => 'nullable|string',
            'child_order' => 'nullable|integer',

            // KIP
            'has_kip' => 'nullable|boolean',
            'will_receive_kip' => 'nullable|boolean',
            'kip_reject_reason' => 'nullable|string',

            // FILE
            'kk_file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'kip_file' => [
                'nullable',
                'file',
                'mimes:pdf,jpg,jpeg,png',
                'max:4096',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->boolean('has_kip') && !$request->hasFile('kip_file')) {
                        $fail('Karena memiliki KIP, file KIP wajib diupload.');
                    }
                }
            ],

            // KONTAK
            'phone' => 'required|string|max:50',
            'address' => 'nullable|string',

            // AYAH
            'father_name' => 'nullable|string|max:255',
            'father_nik' => 'nullable|string|max:30',
            'father_birth_year' => 'nullable|integer',
            'father_education' => 'nullable|string',
            'father_occupation' => 'nullable|string',
            'father_income' => 'nullable|string',
            'father_special_needs' => 'nullable|string',

            // IBU
            'mother_name' => 'nullable|string|max:255',
            'mother_nik' => 'nullable|string|max:30',
            'mother_birth_year' => 'nullable|integer',
            'mother_education' => 'nullable|string',
            'mother_occupation' => 'nullable|string',
            'mother_income' => 'nullable|string',
            'mother_special_needs' => 'nullable|string',

            // WALI
            'guardian_name' => 'nullable|string|max:255',
            'guardian_nik' => 'nullable|string|max:30',
            'guardian_birth_year' => 'nullable|integer',
            'guardian_education' => 'nullable|string',
            'guardian_occupation' => 'nullable|string',
            'guardian_income' => 'nullable|string',
        ]);

        $alreadyRegistered = PpdbRegistration::where('student_name', $request->student_name)
            ->whereDate('birth_date', $request->birth_date)
            ->where('no_kk', $request->no_kk)
            ->exists();

        if ($alreadyRegistered) {
            return back()->withErrors([
                'student_name' => 'Data siswa ini sudah pernah mendaftar.'
            ])->withInput();
        }

        DB::transaction(function () use ($request, $validated) {

            // Upload file
            $kkPath = $request->file('kk_file')->store('ppdb/documents/kk', 'public');

            $kipPath = null;
            if ($request->hasFile('kip_file')) {
                $kipPath = $request->file('kip_file')->store('ppdb/documents/kip', 'public');
            }

            // Simpan data utama
            $registration = PpdbRegistration::create([
                ...$validated,
                'kk_file' => $kkPath,
                'kip_file' => $kipPath,
                'has_kip' => $request->boolean('has_kip'),
                'will_receive_kip' => $request->boolean('will_receive_kip'),
                'phone' => $request->phone,
                'address' => $request->address,
                'status' => 'pending',
            ]);

            // SIMPAN AYAH
            if ($request->filled('father_name')) {
                $registration->parents()->create([
                    'type' => 'father',
                    'name' => $request->father_name,
                    'nik' => $request->father_nik,
                    'birth_year' => $request->father_birth_year,
                    'education' => $request->father_education,
                    'occupation' => $request->father_occupation,
                    'monthly_income' => $request->father_income,
                    'special_needs' => $request->father_special_needs,
                ]);
            }

            // SIMPAN IBU
            if ($request->filled('mother_name')) {
                $registration->parents()->create([
                    'type' => 'mother',
                    'name' => $request->mother_name,
                    'nik' => $request->mother_nik,
                    'birth_year' => $request->mother_birth_year,
                    'education' => $request->mother_education,
                    'occupation' => $request->mother_occupation,
                    'monthly_income' => $request->mother_income,
                    'special_needs' => $request->mother_special_needs,
                ]);
            }

            // SIMPAN WALI
            if ($request->filled('guardian_name')) {
                $registration->wali()->create([
                    'name' => $request->guardian_name,
                    'nik' => $request->guardian_nik,
                    'birth_year' => $request->guardian_birth_year,
                    'education' => $request->guardian_education,
                    'occupation' => $request->guardian_occupation,
                    'monthly_income' => $request->guardian_income,
                ]);
            }
        });

        return back()->with('success', 'Pendaftaran berhasil dikirim. Silakan tunggu informasi selanjutnya.');
    }
}