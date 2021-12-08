<?php

namespace App\Http\Controllers\Extra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class PdfController extends Controller
{
    public function pdfDocument()
    {
        return view('extra.pdf');

    }

    public function exportPDF()
    {
//        $pdf = new PDF;
//        dd($pdf);
//        $pdf_doc = $pdf->loadView('extra.pdf_export_template');
        set_time_limit(300);
        $pdf_doc = \PDF::loadView('extra.pdf_export_template');
        return $pdf_doc->download('pdf.pdf');
    }
}
