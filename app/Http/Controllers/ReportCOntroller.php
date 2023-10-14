<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\PDF;
// use PDF;

class ReportCOntroller extends Controller
{
    public function generatePDF($id){

         $data=Payment::find($id);
         $pdf = app('dompdf.wrapper');
         $pdf->loadView('pdf_view', $data->toArray());
         return $pdf->stream('payment_report.pdf');
    }

}
