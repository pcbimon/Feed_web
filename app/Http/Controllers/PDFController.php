<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use PDF;
use App\SubjectAnalysis;

class PDFController extends Controller
{
    public function pdf()
    {

      $data = [
        'name'=>'อะไรสักอย่าง ไม่รู้นามสกุลอะไร'
    ];
    $SubjectAnalysis = SubjectAnalysis::all();
    $pdf = PDF::loadView('sticker', ['SubjectAnalysis'=> $SubjectAnalysis]);
    // $pdf = PDF::set_option("isPhpEnabled", true);
    // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
    // $pdf->set_option("isPhpEnabled", true);
    return $pdf->stream();
    // return view('pdf');

    }
}
