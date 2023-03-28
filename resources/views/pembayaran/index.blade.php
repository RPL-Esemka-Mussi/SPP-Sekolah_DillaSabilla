@extends('main.bootstrap')
@section('content')
    <div class="text-center py-5 bg-dark text-white">
        <h3>Kelola Pembayaran</h3>
    </div>
    <div class="container mt-4">
        <div class="d-flex justify-content-between">
            <div>
            <h4>Data Pembayaran</h4>
            </div>
            <div class="d-flex">
               <form class="row row-cols-lg-auto g-1 align-items-center" action="{{ url('pembayaran') }}" method="GET">
               <div class="col-12">
               <input type="text" name="cari" id="cari" name="cari" value="{{ $keyword != null ? $keyword : '' }}" class="form-control-3" placeholder="cari data...">
               </div>
               <div class="col-12">
                   <button action="{{ url('pembayaran') }}" type="submit"class="btn btn-success ms-3">Cari</button>
               </div>
               </form>
            </div>
        </div>
        <hr>
        @if(Session::has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong>{{ Session::get('sukses') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (Session::has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong>{{ Session::get('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        </div>
    </div>
        <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($siswa->count() == 0)
               <tr class="text-center">
                <td colspan="7"><strong>Belum ada data.</strong></td>
               </tr>
            @else
                 @foreach ($siswa as $data)
                     <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $data->nis }}</td>
                         <td>{{ $data->user->name}}</td>
                         <td>{{ $data->kelas->kelas}}</td>
                         <td>

                             <a href="{{ url("pembayaran/transaksi/$data->id") }}" class="btn btn-primary">Transaksi</a>
                         </td>
                        </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    </div>
@endsection
