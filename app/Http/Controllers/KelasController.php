<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;


/**
 * Summary of UserController
 */
class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();

        return view('kelas.index', compact('kelas') );
    }
    public function tambah()
    {
        return view ('kelas.tambah');
    }
    public function simpan(Request $request)
    {
        try {
           kelas::create([
            'kelas' => $request->kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
           ]);

            return redirect('kelas')->with('sukses', 'Data Berhasil Ditambahkan✨.');
        } catch (\Exception $e) {
            return redirect('kelas')->with('gagal', 'Data Gagal Ditambahkan❌.');
        }

    }
    public function edit($id)
    {
        try {
            $kelas= kelas::findOrFail($id);

           return view('kelas.edit', compact('kelas'));
        }catch (\Exception $e){
           return redirect('kelas')->with('gagal', 'Data tidak Ditemukkan❌.');
        }

    }

    public function update(Request $request)
    {
        try{
            kelas::where('id', $request->id)->update([
                'kelas' => $request->kelas,
                'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);


            return redirect('kelas')->with('sukses', 'Data Berhasil diupdate✨.');
        }catch (\Exception $e){
            return redirect('kelas')->with('gagal', 'Data Gagal diupdate❌.');
        }
    }

    public function hapus($id)
    {
        try{
            kelas::findOrFail($id);
            kelas::destroy($id);


            return redirect('kelas')->with('sukses', 'Data Berhasil dihapus✨.');
        }catch(\Exception $e){
            return redirect('kelas')->with('gagal', 'Data tidak dihapus❌.');
        }
    }
}
