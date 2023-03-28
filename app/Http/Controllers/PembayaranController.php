<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
    $keyword = null;

    if ($request->cari !=null) {
        $siswa = Siswa::with('user')->WhereRelation('user', 'name', 'like', "%$request->cari%")->orderBy('kelas_id', 'ASC')->get();
        $keyword = $request->cari;
    } else {
        $siswa = Siswa::orderBy('kelas_id', 'ASC')->get();
    }

    return view('pembayaran.index', compact('siswa', 'keyword'));
    }

    public function transaksi($id)
    {
        $dibayar = 0;
        $tagihan = 0;
        $pembayaranSpp = [];
       try {
           $siswa = Siswa::findOrFail($id)->$id;
           $pembayaran = Pembayaran::where('siswa_id', $id)->get();
           $spp = SPP::get();

           foreach ($pembayaran as $data){
            $pembayaran += $data->jumlah_bayar;
         }
         foreach ($spp as $data)
         {
            $tagihan += $data->nominal;
         }

         $total = [
           'total_dibayar' => $pembayaran,
           'total_belumdibayar' => $tagihan - $dibayar,

         ];
       }
        catch (\Exception $e)
        {
            return redirect('pembayaran')->with('gagal', 'Data tidak ditemukan❌');
        }
        return view('pembayaran.transaksi',compact('spp', 'pembayaran', 'siswa', 'total'));

    }
}
