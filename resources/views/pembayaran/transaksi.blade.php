@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-dark text-white">
        <h3>Transaksi SPP</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-center text-center">

            <div class="card text-bg-success ms-5 me-5 w-50">
                 <div class="card-header">
                     <b>Total Dibayar</b>
                 </div>
                 <div class="card-body">
                     <h3>Rp.{{ $total ['total_dibayar'] }}</h3>
                 </div
            </div>
             <div class="card text-bg-danger ms-5 me-5 w-50">
                 <div class="card-header">
                     <b>Total Belum Dibayar</b>
                 </div>
                 <div class="card-body">
                     <h3>Rp.{{ $total ['total_belumdibayar']}}</h3>
                 </div>
             </div>
         </div>
         <div class="d-flex justify-content-between mb-3">
            <a href="{{ url('pembayaran') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
   
@endsection
