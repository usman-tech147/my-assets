<?php

namespace App\Http\Controllers\Extra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class PdfController extends Controller
{
    public function pdfDocument()
    {
        dd("pdf document");
//        return view('extra.microsoft');
    }
}
