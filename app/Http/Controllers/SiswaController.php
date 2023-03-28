<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('user', 'kelas')->get();

        return view('siswa.index', compact('siswa'));
    }
    public function tambah()
    {
        $kelas = Kelas::all();
        return view ('siswa.tambah', compact('kelas'));
    }
    public function simpan(Request $request)
    {
        try {

            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'level'=> 'siswa',
            ]);

           Siswa::create([
            'user_id' => $users->id,
            'nis' => $request->nis,
            'kelas_id' => $request->kelas_id,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
           ]);

            return redirect('siswa')->with('sukses', 'Data Berhasil Ditambahkan✨.');
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return redirect('siswa')->with('gagal', 'Data Gagal Ditambahkan❌.' . "($message)");
        }

    }
    public function edit($id)
    {
        try {
            $siswa = Siswa::findOrFail($id);
            $kelas = Kelas::all();

           return view('siswa.edit', compact('siswa', 'kelas'));
        }catch (\Exception $e){
           return redirect('siswa')->with('gagal', 'Data tidak Ditambahkan❌.');
        }

    }

    public function update(Request $request)
    {
        try{
            $Siswa = Siswa::findOrFail($request->id);

            if ($request->password != null) {
                User::where('id', $Siswa->user_id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);
            } else {
                User::where('id', $request->user_id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
            }

            Siswa::where('id', $request->id)->update([
                'nis' => $request->nis,
                'kelas_id' => $request->kelas_id,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);

            return redirect('siswa')->with('sukses', 'Data Berhasil diupdate✨.');
        }catch (\Exception $e){
            $message = $e->getMessage();
            return redirect('siswa')->with('gagal', 'Data Gagal diupdate❌.'. "($message");
        }
    }

    public function hapus($id)
    {
        try{
            $siswa = Siswa::findOrFail($id);
            Siswa::destroy($siswa->id);
            User::destroy($siswa->user_id);


            return redirect('siswa')->with('sukses', 'Data Berhasil dihapus✨.');
        }catch(\Exception $e){
            return redirect('siswa')->with('gagal', 'Data gagal dihapus❌.');
        }
    }
}


