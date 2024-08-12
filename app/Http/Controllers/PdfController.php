<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function generatePdf(){
        // $quotation = Quotation::get();
        $data = [
            'title' => 'Sample Details',
            'data' => date('m/d/Y'),
            'quotation' => 'testing'
        ];

        // $pdf = Pdf::loadView('pdf.create.pdf-generator')->setPaper('a4', 'portrait');
        // $pdf->stream("prototype.pdf");
        // // return $pdf->download('prototype.pdf');

        $pdf = App::make('dompdf.wrapper');
        $pdf = Pdf::loadView('pdf.create.pdf-generator')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
