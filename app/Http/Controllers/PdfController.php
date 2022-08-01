<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function graphs()
    {
        $users = User::get();
        
        $date = date('d/m/Y');
        $path = base_path('public/logoexata.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return view('graph', compact('users','date','pic'));
    }

    // function to generate PDF
    public function graphPdf()
    {
        $users = User::query()->orderBy('id')->get();
        
        $date = date('d/m/Y');
      
        //$pdf = PDF::setOptions(['isRemoteEnabled' => true])->loadview('graph');
        $path = base_path('public/logoexata.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $pdf = \PDF::loadView('graph', compact('users','date','pic'));
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
