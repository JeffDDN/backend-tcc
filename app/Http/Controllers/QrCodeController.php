<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{

    public function index(){
        return view('qr_code');
    }


    public function gerarQR(){

        return QrCode::size(300)
                    ->merge('public/assets/images/img-qr-code.png', 0.5, true)
                    ->generate('http://localhost/backEnd/presence');
    
    }

    // public function gerarQR(){
    //     return  QRCode::url('https://www.youtube.com/watch?v=djzgDUTagk8')
    //               ->setSize(8)
    //               ->setMargin(2)    
    //               ->png();
    // }
}
