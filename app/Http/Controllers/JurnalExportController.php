<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JurnalHarian;
use Barryvdh\DomPDF\Facade\Pdf;

class JurnalExportController extends Controller
{
    public function pdf($id)
{
    $jurnal = JurnalHarian::findOrFail($id);

    $pdf = Pdf::loadView('pdf.jurnal', compact('jurnal'));

    return $pdf->download('jurnal.pdf');
}
}
