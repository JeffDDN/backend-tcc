@extends('layouts.template')

@section('content')
    <div id="tabela">
        <div class="header">
            <h3>Qr code</h3>
        </div>
        <div id="qr-area">
            <img src="{{route('gerarQR')}}" alt="" width="300px" height="300px">
            <!-- <img src="{{url('public/assets/images/qrcode2.png')}}" alt="" width="260px" height="250px"> -->
        </div> 
    </div>
@endsection