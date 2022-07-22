<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::get();
        $title =  'RELATÓRIO GESTOR SOLAR';
        $date = date('m/d/Y');
       
        $path = base_path('public/log.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);


        $pdf = PDF::setOptions(['isHtmll5ParserEnabled'=> true, 'isRemoteEnabled' => true])->loadview('myPDF',  compact('users', 'title', 'date', 'pic'));
       // $pdf = PDF::loadView('myPDF', $data);
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
