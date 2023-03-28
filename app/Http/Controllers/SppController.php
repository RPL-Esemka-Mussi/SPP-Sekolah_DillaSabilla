<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index()
    {
        $spp = Spp::all();

        return view('spp.index', compact('spp') );
    }
    public function tambah()
    {
        return view ('spp.tambah');
    }
    public function simpan(Request $request)
    {
        try {
           SPP::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
           ]);

            return redirect('spp')->with('sukses', 'Data Berhasil Ditambahkan✨.');
        } catch (\Exception $e) {
            return redirect('spp')->with('gagal', 'Data Gagal Ditambahkan❌.');
        }

    }
    public function edit($id)
    {
        try {
            $spp= Spp::findOrFail($id);

           return view('spp.edit', compact('spp'));
        }catch (\Exception $e){
           return redirect('spp')->with('gagal', 'Data tidak Ditemukkan❌.');
        }

    }

    public function update(Request $request)
    {
        try{
            Spp::where('id', $request->id)->update([
                'tahun' => $request->tahun,
                'nominal' => $request->nominal,
            ]);

            Spp::where('id', $request->id)->update([
                'tahun' => $request->tahun,
                'nominal' => $request->nominal,
            ]);
            return redirect('spp')->with('sukses', 'Data Berhasil diupdate✨.');
        }catch (\Exception $e){
            return redirect('spp')->with('gagal', 'Data Gagal diupdate❌.');
        }
    }

    public function hapus($id)
    {
        try{
            SPP::findOrFail($id);
            SPP::destroy($id);


            return redirect('spp')->with('sukses', 'Data Berhasil dihapus✨.');
        }catch(\Exception $e){
            return redirect('spp')->with('gagal', 'Data tidak dihapus❌.');
        }
    }
}

